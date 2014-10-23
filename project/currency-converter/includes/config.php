<?php

include('db_config.php');

define('BASERATE', 'USD');

$cache = 2; // hours

$errors = array(
    1000 => 'Required parameter is missing',
    1100 => 'Parameter not recognised',
    2000 => 'Currency type not recognised',
    2100 => 'Currency amount must be to 2 decimal places',
    3000 => 'Service currently unavailable',
    3100 => 'Error in service',
    4000 => 'Currencies must not be the same'
);

$current_time = time();

$return_decimals = '5';

date_default_timezone_set('Europe/London');

$table = 'atwd_currconv';

// make a connection to the database server using the variables above
$connTest = mysql_connect($dbhost, $dbuser, $dbpass) or die();

// select the database
$dbselect = mysql_select_db($dbname) or die('Could not connect to the database ' . $dbname);
