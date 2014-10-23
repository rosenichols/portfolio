<?php // main.inc.php

/*
 *	This is the main content module.
 *	This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

	// Need the BASE_URL, defined in the config file:
	require_once ('../includes/config.inc.php');

	// Redirect to the index page:
	$url = BASE_URL . 'index.php';
	header("Location: $url");
	exit;

} // End of defined() IF.

?>

	  <h2>Welcome to Fair Trade Tees!</h2>

	  <p>Latest styles.</p>

	  <?php $query=mysql_query("SELECT * FROM `ftt_item` ORDER BY 'item_id' DESC LIMIT 6");

		while($add=mysql_fetch_assoc($query)) $items[] = $add;
		
		foreach ($items as $item) {
		echo "\n\t\t" . '<div class="itemgallery">' . "\n";
		
		echo "\t\t\t" . '<a href="index.php?p=detail&itemid='.$item['item_id'].'"><img src="images/'.$item['image_thumb'].'" class="gallerypic" /></a>' . "\n\t\t\t" . '<br />' .$item['brand'].'<br />' .$item['name']. "\n\t\t" . '</div>' . "\n";
		} mysql_close();
?>

<br class="clear" />

</div>