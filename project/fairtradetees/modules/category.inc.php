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

$cat=$_GET['cat'];

$category = mysql_fetch_assoc(mysql_query("SELECT * FROM `ftt_category` WHERE `cat_id` = ".$cat.""));
?>


	  <h1><?php echo $category['category'] ?></h1>

	  <?php $query=mysql_query("SELECT * FROM `ftt_item` WHERE `cat_id` = '".$cat."' ");

		while($add=mysql_fetch_assoc($query)) $items[] = $add;
		
		foreach ($items as $item) {
		echo '<div class="itemgallery">';
		
		echo '<a href="index.php?p=detail&itemid='.$item['item_id'].'"><img src="images/'.$item['image_thumb'].'" class="gallerypic" /></a>'.'<h3>'.$item['brand'].'</h3>'.'<p>'.$item['name'].'</p>'.'</div>';
		} mysql_close();
?>

<br class="clear" />