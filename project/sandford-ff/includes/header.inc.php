<!DOCTYPE html>

<head>
	<title><?php echo $pagetitle; ?></title>
	<link rel="stylesheet" href="stylesheets/sandfordff.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="stylesheets/banksia.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	
</head>

<body id="<?php echo $bodyid; ?>">

	<div id="topbg">
	
	<div id="logowrapper">
		<div id="logo">
			<div id="search">
				<form>
				<input type="search" value="Search..." id="searchbar" onfocus="document.getElementById('searchbar').value='';"/>
				<input type="submit" value="GO" id="submit" />
				</form>
			</div>
		</div>
	</div>
	
		<div id="main">
		
		<?php
		
		if ($sectionid == "home") echo
		
		'<div id="nav">
			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="location.php">Festival Info</a></li>
				<li><a href="lineup.php">Line-up</a></li>
				<li><a href="activities.php">Activities</a></li>
				<li><a href="tickets.php">Tickets</a></li>
				<li id="contactinfo"><a href="contact.php">Contact Info</a></li>
			</ul>
		</div>';
		
		elseif ($sectionid == "festivalinfo") echo
		
		'<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="current"><a href="location.php">Festival Info</a></li>
					<ul>
					<li  class="first" id="location"><a href="location.php">Location</a></li>
					<li id="festivalmap"><a href="festivalmap.php">Festival Map</a></li> <!-- got rid of stages -->
					<li id="campinginfo"><a href="campinginfo.php">Camping Info</a></li>
					<li id="foodanddrink"><a href="foodanddrink.php">Food & Drink</a></li>
					<li id="welfareandsafety"><a href="welfareandsafety.php">Welfare & Safety</a></li>
				</ul>
				<li><a href="lineup.php">Line-up</a></li>
				<li><a href="activities.php">Activities</a></li>
				<li><a href="tickets.php">Tickets</a></li>
				<li id="contactinfo"><a href="contact.php">Contact Info</a></li>
			</ul>
		</div>';
		
		elseif ($sectionid == "lineup") echo
		
		'<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="location.php">Festival Info</a></li>
				<li class="current"><a href="lineup.php">Line-up</a></li>
				<li><a href="activities.php">Activities</a></li>
				<li><a href="tickets.php">Tickets</a></li>
				<li id="contactinfo"><a href="contact.php">Contact Info</a></li>
			</ul>
		</div>';
		
		elseif ($sectionid == "activities") echo
		
		'<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="location.php">Festival Info</a></li>
				<li><a href="lineup.php">Line-up</a></li>
				<li class="current"><a href="activities.php">Activities</a></li>
				<li><a href="tickets.php">Tickets</a></li>
				<li id="contactinfo"><a href="contact.php">Contact Info</a></li>
			</ul>
		</div>';
		
		elseif ($sectionid == "tickets") echo
		
		'<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="location.php">Festival Info</a></li>
				<li><a href="lineup.php">Line-up</a></li>
				<li><a href="activities.php">Activities</a></li>
				<li class="current"><a href="tickets.php">Tickets</a></li>
				<li id="contactinfo"><a href="contact.php">Contact Info</a></li>
			</ul>
		</div>';
		
		elseif ($sectionid == "contactinfo") echo
		
		'<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="location.php">Festival Info</a></li>
				<li><a href="lineup.php">Line-up</a></li>
				<li><a href="activities.php">Activities</a></li>
				<li><a href="tickets.php">Tickets</a></li>
				<li class="current" id="contactinfo"><a href="contact.php">Contact Info</a></li>
			</ul>
		</div>';
		
		else echo "Freak out! The navigation is not here";
		
		?>