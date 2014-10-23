<?php

if (isset ($_SESSION['user'])) {
	
	$user = mysql_fetch_assoc(mysql_query("SELECT * FROM `ftt_user` WHERE user_id = ".$_SESSION['user']." LIMIT 1"));
	
}

else {$user = false;}
