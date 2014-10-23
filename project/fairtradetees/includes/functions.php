<?php 

// - - - - - - - - - - - - - - - - Log in and out - - - - - - - - - - - - - - - -

function login() {

	$email = $_GET['email'];
	$password = $_GET['password'];
	
	if ($email&&$password) {
	
	$user = mysql_fetch_assoc(mysql_query("SELECT * FROM `ftt_user` WHERE email = '".$email."' LIMIT 1"));
	
	if ($user) {
	
			$dbusername = $user['email'];
			$dbpassword = $user['password'];
		
		// check to see if they match
		
		if ($email==$dbusername&&$password==$dbpassword) {
			
			$_SESSION['user'] = $user['user_id'];
			
		}
		
		else '';
	
	}
	
	else
	
	die("That user does not exist!");
	
	}

}


function logout() {

	unset($_SESSION['user']);

}


// - - - - - - - - - - - - - - - - - - - Cart - - - - - - - - - - - - - - - - - - -


function get_cart_count() { 

		$count = 0;
    $rs = '<p><a href="index.php?p=cart"><img src="./images/cart_icon.png" class="centre" /></a><br />'; 
    foreach ($_SESSION['cart'] as $p_id=>$qty) { 
        $count += $qty; 
    } 
    $rs .= $count; 
    $count > 1 ? $rs .= ' items' : $rs .= ' item'; 
    $rs .= '<br /><a href="index.php?p=cart" class="headernav">View cart</a></p>'; 
    return $rs; 
} 

function add_to_cart($p_id, $qty) { 
		
		$_SESSION['cart'];

    $_SESSION['cart']["$p_id"] += $qty;

} 

function edit_cart_quantity ($p_id, $qty) { 
    if ($qty <= 0) { 
        unset($_SESSION['cart']["$p_id"]); 
    } 
    else { 
        $_SESSION['cart']["$p_id"] = $qty; 
    } 
} 

function delete_cart() { 
    unset($_SESSION['cart']); 
} 


function checkout() {

	// initialise
	global $user;
	$total = 0;


	foreach($_SESSION['cart'] as $item_id=>$qty) {
	
		$result = mysql_query("SELECT * FROM `ftt_item` WHERE item_id='$item_id'");
	                    
		$row = mysql_fetch_assoc($result); 
	                    
	  $total += $qty*$row['price']; 
  
  }

	$xml = simplexml_load_file('http://www.cems.uwe.ac.uk/~pchatter/rest/rest.php?service='.$_REQUEST['service'].'&msg_id='.rand(1000,9999).'&num_md5='.md5($_REQUEST['card_number']).'&amount='.$total.'&currency=GBP&api_key='.md5('QPuf34By'));
	
	if ($xml->error) {
		echo 'There has been an error';
	}
	
	else { // if payment is successful
	
		/* header("Location: index.php?p=ordersuccess"); */
	
		var_dump(true);
		
		// insert address details to DB
		$insertaddress = mysql_query("INSERT INTO `ftt_address` (addr_id, type, addr1, addr2, city, county, postcode) VALUES ('', 'Billing', '".$_POST['addr1']."', '".$_POST['addr2']."', '".$_POST['city']."', '".$_POST['county']."', '".$_POST['postcode']."')");
		
		// insert user details to DB
		$insertuser = mysql_query("INSERT INTO `ftt_user` (user_id, first_name, last_name, email) VALUES ('', '".$_POST['fname']."', '".$_POST['sname']."', '".$_POST['email']."') ");
		
		
		$userid = mysql_insert_id();
		
		// insert order details to DB
		$order = mysql_query("INSERT INTO `ftt_order` (order_id, user_id, card_digits) VALUES ('', '".$userid."', '".substr($_POST['card_number'], -4)."')");		
	
		$orderid = mysql_insert_id();
		
		echo 'orderid: '.$orderid;
		
		foreach($_SESSION['cart'] as $item_id=>$qty) {
	
			$orderitem = mysql_query("INSERT INTO `ftt_order_item` (order_id, item_id, quantity) VALUES ('".$orderid."', '".$item_id."', '".$qty."')");
			
			echo 'query:'.$orderitem;
	
		}
		
		$_SESSION['order'] = $orderid;
		
		unset($_SESSION['cart']);
		
		exit();
	
	}
}

?>