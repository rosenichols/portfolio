<?php # header.inc (includes navigation & sidebar)

// This page begins the HTML header for the site.

// start the session
session_start();

// Check for a $page_title value:
if (!isset($page_title)) $page_title = 'Default Page Title';

require_once('includes/db_config.php');

require_once('includes/functions.php');

if (isset($_REQUEST['cart_submit']) && $_REQUEST['qty']>0) {
    add_to_cart($_REQUEST['p_id'], $_REQUEST['qty']);
}

if (isset($_REQUEST['login'])) {
    login();
}


if (isset($_REQUEST['logout'])) {
    logout();
}

require_once('includes/authenticate.php');

if (isset($_REQUEST['checkout'])) {
    checkout();
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title><?php echo $page_title; ?></title>

		<link href="./styles/fairtradetees.css" rel="stylesheet" type="text/css" />
		<link href="./styles/landliebe.css" rel="stylesheet" type="text/css" />
	</head>

<body>

<div id="wrapper">

	<div id="header">

		<a href="index.php" class="imagelink"><img src="images/logo.png" alt="logo" id="logo" /></a>

		<div id="search">

		<?php if (!$user) : ?>


	    	<p><strong>Existing customer? <a href="index.php?p=login">Log in</a></strong></p>

			<?php else : ?>

				<p>Welcome back, <strong><?php echo $user['first_name']?></strong>. <a href="<?php echo $_SERVER['PHP_SELF']?>?logout=Log+out">Log out?</a></p>

	  <?php endif ?>

		  <form name="form1" id="searchform" method="GET" action="index.php">
		  	<input class="search" type="text" name="terms" id="blankvalue" value="Search..."  onFocus="document.getElementById('blankvalue').value='' "/>
		  	<input class="search" type="hidden" name="p" value="search" />
		  	<input id="searchbutton" type="submit" name="Submit" value="GO" />
		  </form>

	  </div> <!-- end #search -->

	  <br class="clear" />

		<?php include ('includes/navigation.inc');?>

		</div> <!-- end #header -->


	<!-- End of header -->
