<?PHP

/*
FormMail.php
The program is in two parts:
the first part receives the values form your Form and assigns them to variables.
An email is then sent to the specified address.
The second part creates a simple html response page.

Note that a php script is essentially just anordinary html script with some php statements
embedded within the code using <php  and  ?>  as the start and end php tags.

This program as it is expects that
1.  you have written a Form with  'action=FormMail.php method=post'
2.   your Form contains  3 fields 'name', 'email', and 'message'
	(You can, if you are careful, amend this program to deal with more fields)
3.  your Form contains  a hidden field named 'subject' which conatains the phrase 
you wish to appear in the 'Subject' line of the email that is sent to you

 To use this program as it is you *must* change the next line after these comments
	"you@uwe.ac.uk" must be replaced with your email address
*/

$YourEmail = "rose_nichols@hotmail.com";

/*
To use the program as it is you do not need to change anything more.
Comments are included to explain what is happening 
(and to note places where you could edit the program.)

The next lines receive the field values from your Form and assign them 
to $variables which are used later on in the program.
You could create more variables to handle
more Form fields - or edit the statements to reflect the names in your Form
The syntax is $variable=$_POST[fieldname];
*/

$firstname=$_POST[firstname];
$surname=$_POST[surname];
$message=$_POST[message];

/* 
The next lines build your email
(You have already assigned a value to 'YourEmail' above.)
 */

$sendto="$YourEmail";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; ";
$headers.= "charset=iso-8859-1\r\n";
$headers.= "From: $email";
$subject=$_POST[subject];
// Build the email body text
  $emailcontent = " 

FirstName: $firstname
Surname: $surname
Comments: $comments 
"
/* and the email is sent  later - after we have started the html page 
so that we can include an appropriate message  within the page */
?> 

<!--  HTML PAGE 
Except for the inclusion of php variables and the 'mail' statement
the following is straightforward html code.
You can add more html code but it should be outside the <php .. ?> tags. -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thank you - David Bowie Fan Site</title>
<link rel="stylesheet" type="text/css" href="bowie.css" />

<style type="text/css">

table.form{
	font: 12px lucida grande, sans-serif;
	margin-left:auto; margin-right:auto;
	border: 0px solid #999;
	margin-top:10px;
}
	
td.form{
	border: 1px solid #d7d7d7; padding:4px; /*ccc*/
}

div.formbuttons {
	width:120px; border: 0px solid; margin-left:auto; margin-right:auto;
}

</style>
</head>

<body>


<div class="background"></div>

<div class="bowieimage">

<div class="maincontentPHP">
<?php
// Send out the email or output an error message 
if (mail($sendto, $subject, $emailcontent, $headers)) { 
?>
  	<p>&nbsp;</p>
	<p><b>Thank You <?php echo $name; ?></b> an email has been sent to the address you gave.</p>
  	<p>You sent the following:</p>
		<table border="0" align="center" cellpadding="6">
		<tr>
		<td>First Name: </td><td><b><?php echo $firstname; ?> </b> </td>
		</tr>
    <tr>
		<td>Surname: </td><td><b><?php echo $surname; ?> </b> </td>
		</tr>
		<tr>
		<td>Comments: </td><td><b><?php echo $comments; ?> </b> </td>
		</tr>
		</table>
<?php
	} 
	
else { // email send has been unsuccessful
?>
  	<p>&nbsp;</p>
	<p><b>Sorry <?php echo $name; ?></b></p>
	<p>For some reason the form submission has not been successful.</p>
 	<p>You sent the following:</p>
		<table border="0" align="center" cellpadding="6">
		<tr>
		<td>First Name: </td><td><b><?php echo $firstname; ?> </b> </td>
		</tr>
    <tr>
		<td>Surname: </td><td><b><?php echo $surname; ?> </b> </td>
		</tr>
		<tr>
		<td>Message: </td><td><b><?php echo $message; ?> </b> </td>
		</tr>
		</table>
	
	
	<p> Please try again.</p>
<?php 
	} 
?>
</div>

<div id="navtabs">
	<div class="navhome"><a href="index.html"></a></div>
	<div class="navalbums"><a href="albums.html"></a></div>
	<div class="navlyrics"><a href="lyrics.html"></a></div>
  <div class="navcontact"><a href="contact.html"></a></div>
</div>

<div class="bowiehead"><img src="images/bowiehead.png" /></div>
</div>

<hr />
<div class="footer"><span class="footer">&copy; Rose Nichols 09019365</span> <a href="http://www.cems.uwe.ac.uk/html-validator/check?uri=referer"><img src="images/valid-xhtml10.gif" alt="XHTML 1.0 Valid" class="validxhtml"/></a> 
<a href="http://www.cems.uwe.ac.uk/css-validator/validator?uri=http://www.cems.uwe.ac.uk/~raenicho/bowie/lyrics.html">
<img src="images/valid-css.gif" alt="Valid CSS" class="validcss" /></a></div>
</body>
</html>