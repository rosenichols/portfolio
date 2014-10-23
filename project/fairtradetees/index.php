<?php # index.php

/* 
 *	This is the main page.
 *	This page includes the configuration file, 
 *	the templates, and any content-specific modules.
 */

// Require the configuration file before any PHP code:
require_once ('./modules/config.inc.php');

// Validate what page to show:
if (isset($_GET['p'])) {
	$p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
	$p = $_POST['p'];
} else {
	$p = NULL;
}

// Determine what page to display:
switch ($p) {

	case 'detail':
		$page = 'detail.inc.php';
		$page_title = 'Detail for an item';
		break;

	case 'cart':
		$page = 'cart.inc.php';
		$page_title = 'Cart page';
		break;
		
	case 'checkout':
		$page = 'checkout.inc.php';
		$page_title = 'Checkout page';
		break;
	
	case 'category':
		$page = 'category.inc.php';
		$page_title = 'Category';
		break;
	
	case 'contact':
		$page = 'contact.inc.php';
		$page_title = 'Contact Us';
		break;
	
	case 'search':
		$page = 'search.inc.php';
		$page_title = 'Search Results';
		break;
		
	case 'login':
		$page = 'login.inc.php';
		$page_title = 'Login';
		break;
		
	case 'ordersuccess':
		$page = 'ordersuccess.inc.php';
		$page_title = 'Order Success';
		break;
	
	// Default is to include the main page.
	default:
		$page = 'main.inc.php';
		$page_title = 'Site Home Page';
		break;
		
} // End of main switch.

// Make sure the file exists:
	if (!file_exists('./modules/' . $page)) {
	$page = 'main.inc.php';
	$page_title = 'Site Home Page';
}

	// Include the header file:
	include_once ('./includes/header.inc');

?>
		
		<div id="leftsidebar">

		<div id="content">
		
		<?php
		// Include the content-specific module:
		// $page is determined from the above switch.
		 include ('./modules/' . $page); ?>
		
		</div> <!-- end leftsidebar -->


<?php // Include the footer file to complete the template:
include_once ('./includes/footer.inc');

?>