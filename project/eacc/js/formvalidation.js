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

function validate_form(thisform)
{
with (thisform)
{

<!-- Field validation - check title has been entered --> 
if (validate_required(firstname,"Please enter your first name!")==false)
  {firstname.focus();return false;};
	
if (validate_required(surname,"Please enter your surname!")==false)
  {surname.focus();return false;};

if (validate_required(email,"Please enter your email address!")==false)
  {email.focus();return false;}; 
	
if (validate_email(email,"Not a valid e-mail address!")==false)
    {email.focus();return false;}
  
if (validate_required(message,"Please enter a message!")==false)
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
