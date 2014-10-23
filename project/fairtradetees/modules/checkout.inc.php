<?php // main.inc.php

/*
 *	This is the main content module.
 *	This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

	// Need the BASE_URL, defined in the config file:
	require_once ('../includes/config.inc.php');

	// Redirect to the index page:
	$url = BASE_URL . 'index.php';
	header("Location: $url");
	exit;

} // End of defined() IF.


?>

	  <h1>Check out</h1>
	  
	  <h2>Personal details</h2>
	  

	  <form method="POST" action="index.php?p=ordersuccess">
	  
	  <input type="hidden" name="checkout" value="checkout" />
	  <input type="hidden" name="service" value="cardAuth" />
	  
	  <div class="labels">
	  	<label>Title</label>
		  <label>First name</label>
		  <label>Last name</label>
		  <label>Email addr</label>
	  </div>
	  
	  <div class="inputs">
			<select>
		  	<option value="mr">Mr</option>
		  	<option value="mrs">Mrs</option>
		  	<option value="miss">Miss</option>
		  	<option value="ms">Ms</option>
		  </select><br />
		  <input type="text" name="fname" /><br />
		  <input type="text" name="sname" /><br />
		  <input type="text" name="email" />
	  </div>
	  
	  <br class="clear" />
	  
	  <h2>Billing Address</h2>
	  
	  <p>Enter a new address</p>
	  
	  <div class="labels">
		  <label>First line</label>
		  <label>Second line</label>
		  <label>Town/City</label>
		  <label>County</label>
		  <label>Postcode</label>
	  </div>
	  
	  <div class="inputs">
		  <input type="text" name="addr1" /><br />
		  <input type="text" name="addr2" /><br />
		  <input type="text" name="city" /><br />
		  <input type="text" name="county"	/><br />
		  <input type="text" name="postcode" /><br />
	  </div>
	  
	  
	  <?php
	  
	  	if ($_SESSION['user']) {
	  
		  $userid = $_SESSION['user'];
		  
		  echo 'user id is ' . $userid;
	
			echo '<div class="inputs" style="border: 1px solid red; height: 90px;">or choose an existing address';
			
			$query = mysql_query("SELECT addr1, addr2, city, county, postcode FROM `ftt_address` WHERE `user_id` = '".$userid."' ");
			
			while($add=mysql_fetch_assoc($query)) $addrs[] = $add;
		
			foreach ($addrs as $addr) {
			
				echo '<p>'.$addr['addr1'].'<br />';
				
				echo $addr['addr2'].'<br />';
				
				echo $addr['city'].'<br />';
				
				echo $addr['county'].'<br />';
				
				echo $addr['postcode'].'</p>'."\n".'</div>';
			
			}
						
			mysql_close();
			
			}
	  
	  ?>
	  
	  <br class="clear" />
	  
	  <h2>Card details</h2>
	  
	  <div class="labels">
		  <label>Card type</label>
		  <label>Start date</label>
		  <label>End date</label>
		  <label>Card number</label>
	  </div>
	  
	  
	  <div class="cardinputs">
	  
	  <select>
	  	<option value="visa">Visa</option>
	  	<option value="amex">Amex</option>
	  	<option value="mastercard">Mastercard</option>
	  	<option value="solo">Solo</option>
	  	<option value="jcb">JCB</option>
	  	<option value="diners">Diners</option>
	  </select><br />
	  
	  <select name="smonth">
	  	<option>MM</option>
	  	<option value="01">01</option>
	  	<option value="02">02</option>
	  	<option value="03">03</option>
	  	<option value="04">04</option>
	  	<option value="05">05</option>
	  	<option value="06">06</option>
	  	<option value="07">07</option>
	  	<option value="08">08</option>
	  	<option value="09">09</option>
	  	<option value="10">10</option>
	  	<option value="11">11</option>
	  	<option value="12">12</option>
	  </select>
	  
	  <select name="syear">
	  	<option>YYYY</option>
	  	<option value="07">2007</option>
	  	<option value="08">2008</option>
	  	<option value="09">2009</option>
	  	<option value="10">2010</option>
	  	<option value="11">2011</option>
	  </select><br />
	  
	  <select name="fmonth">
	  	<option value="">MM</option>
	  	<option value="01">01</option>
	  	<option value="02">02</option>
	  	<option value="03">03</option>
	  	<option value="04">04</option>
	  	<option value="05">05</option>
	  	<option value="06">06</option>
	  	<option value="07">07</option>
	  	<option value="08">08</option>
	  	<option value="09">09</option>
	  	<option value="10">10</option>
	  	<option value="11">11</option>
	  	<option value="12">12</option>
	  </select>
	  
	  
	  <select name="fyear">
	  	<option value="">YYYY</option>
	  	<option value="10">2010</option>
	  	<option value="11">2011</option>
	  	<option value="12">2012</option>
	  	<option value="13">2013</option>
	  	<option value="14">2014</option>
	  </select><br />
	  
	   <input type="text" name="card_number" />
	  </div>
	  <br />
	  
	  <input type="submit" name="submit" value="Submit" />
	  
	  </form>

<br class="clear" />