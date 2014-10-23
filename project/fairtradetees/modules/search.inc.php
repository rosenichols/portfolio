<?php # search.inc.php

/* 
 *	This is the search content module.
 *	This page is included by index.php.
 *	This page expects to receive $_GET['terms'].
 */
 
 // include the mysql connection
	require_once ('includes/dbconfig.php');

	// Redirect if this page was accessed directly:
	if (!defined('BASE_URL')) {

	// Need the BASE_URL, defined in the config file:
	require_once ('../includes/config.inc.php');
	
	// Redirect to the index page:
	$url = BASE_URL . 'index.php?p=search';
	
	// Pass along search terms?
	if (isset($_GET['terms'])) {
		$url .= '&terms=' . urlencode($_GET['terms']);
	}
	
	header ("Location: $url");
	exit;
		
	} // End of defined() IF.
	
	$searchterm=$_GET['terms'];
	
	// Print a caption:
	echo '<h2>Search Results</h2>';
	
	// Display the search results if the form
	// has been submitted.
	if (isset($_GET['terms']) && ($_GET['terms'] != 'Search...') ) {
	
	// Query the database. Search by description or colour
	$query_Search = "SELECT * FROM `ftt_item` WHERE ftt_item.colour LIKE '%" .$searchterm. "%' OR ftt_item.name LIKE '%" .$searchterm. "%' OR ftt_item.brand LIKE '%" .$searchterm. "%' OR ftt_item.description = '". $searchterm . "'";
	$Search = mysql_query($query_Search, $connTest) or die(mysql_error());
	
	// retrieve the number of rows returned
	$totalRows_Search = mysql_num_rows($Search);
	
	
	// Print the results:
	
	if ($totalRows_Search) { //if there are results to display
	
		echo '<p>Total search results found: ' . $totalRows_Search . '.</p>'."\n";
		
			while ($row = mysql_fetch_assoc($Search)) { 
			 
		 	echo "\n\t".'<div class="itemgallery">'."\n";
				
			echo "\t\t".'<a href=index.php?p=detail&itemid='.$row['item_id'].'><img src="images/'.$row['image_thumb'].'" /></a><br />'."\n\t\t".'<h3>'.$row['brand'].'</h3>'.'<p>'.$row['name'].'</p>'.'<br />'."\n\t\t"."\n\t".'</div>';
		   
		   };
   
   }
   
   else echo '<p>No results found</p>';
   
   }
?>