<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>

<title>Lost Toys</title>
<link rel="stylesheet" href="stylesheets/losttoys.css" type="text/css" media="screen" />
<?php require_once('includes/db_config.inc.php'); ?>
</head>

<body id="<?php echo $body_id?>">

	<div id="<?php if ($body_id == 'homepage') echo 'bannerhome'; else echo 'banner';?>">

		<div id="contentbg">

			<div id="content">

				<div id="logobg">
				<div id="logo"><a href="index.php"><img src="images/logo.jpg" alt="Logo" /></a></div>
					<div id="homebuttons">
					  <form name="searchform" id="searchform" method="GET" action="searchresults.php">
					  	<input type="text" name="terms" id="blankvalue" value="Search..." onFocus="document.getElementById('blankvalue').value='' "/>
					  	<input type="hidden" name="p" value="search" />
					  	<input type="submit" name="Submit" value="GO" class="button"  />
					  </form><br />
						<a href="index.php"><img src="images/nav_home.png" alt="Home" class="navigation" /></a><br />
						<a href="addmissing.php"><img src="images/nav_listmissingtoy.png" alt="List a missing toy" class="navigation" /></a><br />
						<a href="showall.php"><img src="images/nav_browselosttoys.png" alt="Report a sighting" class="navigation" /></a><br />
						<a href="uploadimage.php"><img src="images/nav_addimage.png" alt="Add an image" class="navigation" /></a>
					</div>
				</div>

				<br class="clear" />
