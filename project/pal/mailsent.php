<?PHP

$YourEmail = "rose@rosenichols.co.uk";

$name=$_POST[name];
$email=$_POST[email];
$message=$_POST[message];


$sendto="$YourEmail";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; ";
$headers.= "charset=iso-8859-1\r\n";
$headers.= "From: $email";
// Build the email body text
 
$emailcontent = " 
	From PAL site.<br />
	Name: $name;
	Email: $email;
	Message: $message; "
?>

<?php
$page_title = 'Contact Me | ITTW PAL';
$body_id = 'contact';
include ('includes/header.html');
?>
	
<div id="content">

	<?PHP
	// Send out the email or output an error message 
	if (mail($sendto, $emailcontent, $headers)) { echo "<h1 style=&quot;font-weight: bold;&quot;>Thanks for your message!</h1>";
	?>

	<?PHP	
	} 
	
	else { // email send has been unsuccessful
	echo "<h1 style=&quot;font-weight: bold;&quot;>Sorry, there's been a problem. Please try again</h1>";
	} 
	?>

	<h1>Contact Me</h1>
	
	<p style="text-align: center;">Please feel free to email me at <span class="bold">rose@ittwpal.co.uk</span>, or use the form below</h2>
	<p></p>
	
	<div class="clearline"></div>
	
	<form action="mailsent.php" method="POST" id="contactform">
	
	<div id="formlabels">
		<p id="name">Your name</p>
		<p id="email">Email address</p>
		<p id="message">Message</p>
	</div>
	
	<div id="forminputs">
		<div class="spacing"><input type="text" name="name" /></div><br />
		<div class="spacing"><input type="text" name="email" /></div><br />
		<textarea cols="40" rows="12" name="message"></textarea><br />
		<div id="formbuttons"><input type="submit" value="Submit" id="submitbutton" /> <input type="reset" value="Reset" /></div>
	</div>
	
</form>


</div> <!-- EOF content -->

<?php
include ('includes/footer.html');
?>
