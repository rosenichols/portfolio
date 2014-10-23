<?php

header('Content-type:text/xml');

include('includes/config.php');
include('includes/file_get_contents_proxy.php');
include('yahoo_rates.php');
include('google_rates.php');
include('rss_rates.php');

if (isset($_GET['amnt'])) {
   $amnt_from = strtoupper($_GET['amnt']);
}

if (isset($_GET['from'])) {
   $from = strtoupper($_GET['from']);
}

if (isset($_GET['to'])) {
   $to = strtoupper($_GET['to']);
}

try {
   // check whether any/all required parameters are missing
   if (empty($amnt_from) || empty($from) || empty($to) || $_SERVER['QUERY_STRING'] == null) {
      throw new Exception(1000);
   }

   // check whether the currencies are the same
   if ($from == $to) {
      throw new Exception(4000);
   }

   // check parameter validity - type checks
   if (!is_numeric($amnt_from) || !preg_match('/^[A-Z]{3}$/', $from) || !preg_match('/^[A-Z]{3}$/', $to)) {
      throw new Exception(1100);
   }

   // get the number of decimal places to the right of the decimal point, or 0 if there is no dec point
   // this line found at http://php.net/manual/en/language.types.float.php and adapted for my purpose
   $require_decimals = ($dec_pos = strpos($amnt_from, '.') === false) ? 0 : strlen(substr($amnt_from, $dec_pos + 1));

   // check for correct number of decimal places
   if ($require_decimals > 2) {
      throw new Exception(2100);
   }

   // get currencies
   $query_from = mysql_query('SELECT * FROM `' . $table . '` WHERE `code` = "' . $from . '"');
   $query_to = mysql_query('SELECT * FROM `' . $table . '` WHERE `code` = "' . $to . '"');

   // results from database into object
   $row_from = mysql_fetch_object($query_from);
   $row_to = mysql_fetch_object($query_to);

   // currency doesn't exist in database
   if (empty($row_from) || empty($row_to)) {
      throw new Exception(2000);
   }

   // we're good, do stuff

   $timestamp_from = strtotime($row_from->updated);
   $timestamp_to = strtotime($row_to->updated);

   $updated_rate_from = false;
   $updated_rate_to = false;

   // check whether rates are recent to within 2 hours. If they are, go ahead and do conversion, else update rate then do conversion
   if ($from != BASERATE && ($current_time - $timestamp_from) > ($cache * 3600)) {
      $yahoo_newrate_from = get_yahoo_rest_rate($from);
      $source = $yahoo_newrate_from;

      if (!isset($yahoo_newrate_from)) {
         $rss_newrate_from = get_rss_rate($from);
         $source = $rss_newrate_from;
      }

      if (!isset($yahoo_newrate_from) && !isset($rss_rate_from)) {
         $google_newrate_from = get_google_rest_rate($from);
         $source = $google_newrate_from;
      }

      $update_rate_from = mysql_query('UPDATE `' . $table . '` SET `rate`="' . $source . '",`updated` = FROM_UNIXTIME("' . $current_time . '") WHERE code = "' . $from . '"');

      $updated_rate_from = true;
   }

   // baserate should never need to be updated
   if ($to != BASERATE && ($current_time - $timestamp_to) > ($cache * 3600)) {
      $yahoo_newrate_to = get_yahoo_rest_rate($to);
      $source = $yahoo_newrate_to;

      if (!isset($yahoo_newrate_to)) {
         $rss_newrate_to = get_rss_rate($to);
         $source = $rss_newrate_to;
      }

      if (!isset($yahoo_newrate_to) && !isset($rss_rate_to)) {
         $google_newrate_to = get_google_rest_rate($to);
         $source = $google_newrate_to;
      }

      $update_rate_to = mysql_query('UPDATE `' . $table . '` SET `rate`="' . $source . '",`updated` = FROM_UNIXTIME("' . $current_time . '") WHERE code = "' . $to . '"');

      $updated_rate_to = true;
   }

   // if a rate has been updated, pull out most recent timestamp
   if ($updated_rate_from == true && $updated_rate_to == true) {
      if ($updated_rate_from >= $updated_rate_to) {
         $time_query = mysql_query('SELECT `updated` FROM `' . $table . '` WHERE `code` = "' . $from . '"');
         $updated_time = mysql_fetch_object($time_query);
      }
      else {
         $time_query = mysql_query('SELECT `updated` FROM `' . $table . '` WHERE `code` = "' . $to . '"');
         $updated_time = mysql_fetch_object($time_query);
      }
   }
   elseif ($updated_rate_from == true && $updated_rate_to == false) {
      $time_query = mysql_query('SELECT `updated` FROM `' . $table . '` WHERE `code` = "' . $from . '"');
      $updated_time = mysql_fetch_object($time_query);
   }
   elseif ($updated_rate_from == false && $updated_rate_to == true) {
      $time_query = mysql_query('SELECT `updated` FROM `' . $table . '` WHERE `code` = "' . $to . '"');
      $updated_time = mysql_fetch_object($time_query);
   }
   elseif ($updated_rate_from == false && $updated_rate_to == false) {
      if ($timestamp_from >= $timestamp_to) {
         $time = $timestamp_from;
      }
      else {
         $time = $timestamp_to;
      }
   }

   // return rate
   $converted = ($amnt_from / $row_from->rate) * $row_to->rate;

   // yay
   $template = 'success';
} catch (Exception $e) {
   if (array_key_exists($e->getMessage(), $errors)) {
      $code = $e->getMessage();
   } else {
      $code = 3000;
   }

   $message = $errors[$code];

   // boo
   $template = 'error';
}

include('includes/layout.php');
