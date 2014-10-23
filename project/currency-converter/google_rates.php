<?php

/**
 * from https://gist.github.com/478707
 * Looks for unquoted keys in a json string and fixes them ie: {a:"b"} => {"a":"b"}
 * @param string $string A json string that is suspect
 * @return string A valid json string
 */

function fix_json($string) {
   // (no quote) (word) (no quote) (semicolon)
   $regex = '/(?<!")([a-zA-Z0-9_]+)(?!")(?=:)/i';
   return preg_replace($regex, '"$1"', $string);
}

function get_google_rest_rate($to) {

   $google_url = 'http://www.google.com/ig/calculator?hl=en&q=1'.BASERATE.'%3D%3F'.$to;

   $google_json_result = file_get_contents_proxy($google_url);

   if (!isset($google_json_result)) {
      return false;
   }

   // google returns invalid json, so needs fixing
   $fixed_json = fix_json($google_json_result);

   $json_output = json_decode($fixed_json);

   $newrate = explode(" ", $json_output->rhs);

   return isset($newrate[0]) ? $newrate[0] : false;
}