<?php

$Search = '';

include('includes/connecttomysql.php');

if(isset($_POST['get'])){
// Query for details
$query_Search = "SELECT * FROM members WHERE members.id = " . $_POST['id'];
$Search = mysql_query($query_Search, $connTest) or die(mysql_error());
$row_Search = mysql_fetch_assoc($Search);
$totalRows_Search = mysql_num_rows($Search);

}

if(isset($_POST['update'])){
//Query for updating
 $edit = mysql_query("UPDATE members SET age='".$_POST['age']."', email='".$_POST['email']."' WHERE id='".$_POST['id']."'") 
		  or die("Could not insert data because ".  mysql_error());

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inserting fields</title>
</head>

<body>

<h2>Update part of an existing row</h2>

<form method="post" action = "">
	ID to change: <input type="text" name="id" value="<?php if($Search){echo $row_Search['id']; }?>" size="20" /><br />
	Age: <input type="text" name="age" value="<?php if($Search){echo $row_Search['age']; }?>" size="20" /><br />
	Email: <input type="text" name="email" value="<?php if($Search){echo $row_Search['email']; }?>" size="20" /><br />
	<input type="submit" name="get" value="Get Details" />
		<input type="submit" name="update" value="Update Details" />
</form>

</body>
</html>