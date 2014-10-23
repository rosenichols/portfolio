<?php

$YourEmail = "rose@rosenichols.co.uk";

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sendto="$YourEmail";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html;";
$headers.= "charset=iso-8859-1\r\n";
$headers.= "From: $email";
$subject=$_POST['subject'];

// Build the email body text
  $emailcontent = " 
From: Hillfield Aviaries
Name: $name
Email: $email
Subject: $subject
Message: $message
"
?> 




<?php
$page_title = 'Thanks! Contact | Hillfield Aviaries';
include ('includes/header.html');
?>

</head>

<body id="contactpage">

<div id="wrapper">

<div id="header"><img src="images/logo.png" id="logo" /></div>

<div id="navigation">
	<div id="navhome"><a href="index.php"></a></div>
	<div id="navabout"><a href="about.php"></a></div>
	<div id="navgallery"><a href="gallery.php"></a></div>
	<div id="navcontact"><a href="contact.php"></a></div>
</div>

<div id="columnwrapper">

<div id="contentwrapper">

<div id="content">
<?php
// Send out the email or output an error message 
if (mail($sendto, $subject, $emailcontent, $headers)) { 
?>
		<p><strong>Thank you <?php echo $name; ?>!</strong> I'll try to get back to you asap.</p>
  	<p>You sent the following:</p>

		<div><p>Name: <strong><?php echo $name; ?></strong></p>
		<p>Email: <strong><?php echo $email; ?></strong></p>
		<p>Subject: <strong><?php echo $subject; ?></strong></p>
		<p>Message: <strong><?php echo $message; ?></strong></p></div>
<?php
	} 
	
else { // email send has been unsuccessful
?>
	<p><b>So sorry <?php echo $name; ?></b></p>
	<p>For some reason the form submission has not been successful.</p>
 	<p>You sent the following:</p>

		<div><p>Name: <strong><?php echo $name; ?></strong></p>
		<p>Email: <strong><?php echo $email; ?></strong></p>
		<p>Subject: <strong><?php echo $subject; ?></strong></p>
		<p>Message: <strong><?php echo $message; ?></strong></p></div>
	
	<p> Please try again.</p>
<?php 
	} 
?>


</div> <!-- end div content -->
</div> <!-- end div contentwrapper -->


<div id="sidebar">

<p>You are here: <a href="index.php">Home</a> -> <a href="contact.php">Contact</a></p>

<div class="vcard"> <!-- hCard tutorial from Dan Buzzo -->
	<span class="fn">Elizabeth Rose</span>
	<span class="org">Hillfield Aviaries</span>
	<a href="http://www.hillfieldaviaries.co.uk" class="url">hillfieldaviaries.co.uk</a>
	<a href="mailto:aviaries@hillfield.co.uk" class="email">aviaries@hillfield.co.uk</a>
	<span class="tel">0118 385 7564</span>
	<span class="adr">Hillfield Aviaries, Tweet Lane, Tweeting, Birdfordshire. BI14 8EL</span>
</div> <!-- end div vcard -->

</div>
</div>

<?php
include ('includes/footer.html');
?>