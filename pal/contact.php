<?php
$page_title = 'Contact Me | ITTW PAL';
$body_id = 'contact';
include ('includes/header.html');
?>
	
<div id="content">

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