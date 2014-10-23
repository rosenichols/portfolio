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
	  <h1>Your Order</h1>
	  
	<?php $orderid = $_SESSION['order'] ?>
	
	  <p>Your order number is <?php echo $orderid ?>. You have ordered the following items. Thanks!</p>
	  
	<?php $query = mysql_query("SELECT i.*, oi.quantity FROM `ftt_item` i
	LEFT JOIN wp_order_wp_item oi
	ON i.item_id = oi.item_id
	WHERE oi.order_id = $orderid");

	  while ($item = mysql_fetch_assoc($query)) {

	  echo '<div class="itemgallery">';

			echo '<img src="images/'.$item['image'].'" /><br />'.$item['brand'].'<br />'.$item['name'].'<br />Quantity: '.$item['quantity'].'</div>';
		} 

		mysql_close(); ?>


<br class="clear" />