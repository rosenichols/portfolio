<?php
$page_title = 'Contact | Hillfield Aviaries';
include ('includes/header.html');
?>
	
<script type="text/javascript">
function validate_required(field,alerttxt)
{
with (field)
{
if (value==null||value=="")
  {alert(alerttxt);return false;}
else {return true}
}
}

function validate_form(thisform) {
with (thisform)
{

<!-- Field validation - check title has been entered --> 
if (validate_required(name,"Let's be friends, tell me your name")==false)
{name.focus();return false;};
	
if (validate_email(email,"Your email address needs to be valid if I'm going to be able to write you back")==false)
    {email.focus();return false;}	

if (validate_required(subject,"So far so good, now what shall we talk about?")==false)
{subject.focus();return false;};
  
if (validate_required(message,"I'd love for you to write me a message")==false)
{message.focus();return false;};
  
}
}

function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}

</script>
</head>

<body id="contactpage">

<div id="wrapper">

<div id="header"><img src="images/logo.png" id="logo" alt="Hillfield Aviaries logo" /></div>

<div id="navigation">
	<div id="navhome"><a href="index.php"></a></div>
	<div id="navabout"><a href="about.php"></a></div>
	<div id="navgallery"><a href="gallery.php"></a></div>
	<div id="navcontact"><a href="contact.php"></a></div>
	<div id="navdivstructure"><a href="divstructure.php"></a></div>
</div>

<div id="columnwrapper">

<div id="contentwrapper">

<div id="content">

<p>Use this form to send me a message, or use the convenient information in hCard format to the left!</p>

<p>All fields are required.</p>

<form action="FormMail.php" onsubmit="return validate_form(this);" method="post">
<table class="form" cellspacing="8">
	<tr>
		<td class="form">Name</td>
		<td class="form"><input type="text" name="name" size="24" /></td>
	</tr>
	<tr>
		<td class="form">Email address</td>
		<td class="form" colspan="3"><input type="text" name="email" size="24" /></td>
	</tr>
	<tr>
		<td class="form">Subject</td>
		<td class="form" colspan="3"><input type="text" name="subject" size="24" /></td>
	</tr>
	<tr>
		<td class="form">Message</td>
		<td class="form" colspan="3"><textarea name="message" rows="5" cols="40"></textarea></td>
	</tr>
	<tr>
		<td colspan="4"><div class="formbuttons"><input type="reset" /> &nbsp;&nbsp;<input type="submit" /></div></td>
	</tr>
</table>
</form>


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