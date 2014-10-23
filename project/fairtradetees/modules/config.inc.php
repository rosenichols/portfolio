<?php # config.inc.php

/* 
 *	File name: config.inc.php
 *	Configuration file does the following things:
 *	- Has site settings in one location.
 *	- Stores URLs and URIs as constants.
 *	- Sets how errors will be handled.
 *
 *	Framework adopted from Larry Ullman http://www.dmcinsights.com
 */

# ******************** #
# ***** SETTINGS ***** #

// Errors are emailed here.
$contact_email = ''; 

// Determine whether we're working on a local server
// or on the real server:
if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
	$local = TRUE;
} else {
	$local = FALSE;
}

// Determine location of files and the URL of the site:
// Allow for development on different servers.
if ($local) {

	// Always debug when running locally:
	$debug = FALSE;
	
	// Define the constants:
	define ('BASE_URI', '/path/to/html/folder/');
	define ('BASE_URL',	'http://localhost/fairtradetees/');
	define ('DB', '/path/to/mysql.inc.php');
	
} else {

	define ('BASE_URI', '/path/to/live/html/folder/');
	define ('BASE_URL',	'http://www.example.com/');
	define ('DB', '/path/to/live/mysql.inc.php');
	
}
	
/* 
 *	Most important setting...
 *	The $debug variable is used to set error management.
 *	To debug a specific page, add this to the index.php page:

if ($p == 'thismodule') $debug = TRUE;
require_once('./includes/config.inc.php');

 *	To debug the entire site, do

$debug = TRUE;

 *	before this next conditional.
 */

// Assume debugging is off. 
if (!isset($debug)) {
	$debug = FALSE;
}
?>
