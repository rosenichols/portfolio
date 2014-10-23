<?php // cart.inc.php

/*
 *	This is the shopping cart module.
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

	  <h2>Your Cart</h2>

    <div id="cart_display"> 
        <?php
        
        		
        
        		$total = 0;
        		
            if (isset($_REQUEST['qty_change'])) { 
                edit_cart_quantity($_REQUEST['p_id'], $_REQUEST['qty']); 
            } 
            if (isset($_REQUEST['delete_cart'])) { 
                delete_cart(); 
            } 
            echo '<p>'; 
            if (empty($_SESSION['cart'])) { 
                echo 'Your cart is empty'; 
            } 
            else { 
                echo '<table id="carttable">'; 
                echo '<tr class="tableheaders"><td class="itemcol">Item</td><td>Size</td><td class="quantitycol">Quantity</td><td class="pricecol">Price (&pound;)</td><td>Total (&pound;)</td></tr>'; 

                foreach($_SESSION['cart'] as $item_id=>$qty) { 
                    $result = mysql_query("SELECT * FROM `ftt_item` WHERE item_id='$item_id'");
                    
                    $row = mysql_fetch_assoc($result); 
                    echo '<tr>'; 
                    echo '<td>'.'<img src="./images/'.$row['image_thumb'].'" class="cartthumb" />'; 
                    echo htmlentities(stripslashes($row['name'])).'</td>';
                    echo '<td></td>';
                    echo '<td><form method="POST" action="'.$_SERVER['PHP_SELF'].'?p=cart"> 
                        <input type="text" name="qty" size="1" value="'.$qty.'"/>
                        
                        &nbsp;<input type="submit" name="qty_change" value="update" /> 
                        <input type="hidden" name="p_id" value="'.$item_id.'" /></form></td>'; 
                    echo '<td>'.number_format($row['price'],2,'.',' ').'</td>'; 
                    echo '<td>'.number_format($qty*$row['price'],2,'.',' ').'</td>'; 
                    $total += $qty*$row['price']; 
                    echo '</tr>'; 
                } 
                echo '<tr><td colspan="5" style="text-align: right"><strong>Total: &pound;'.number_format($total,2,'.',' ').'</strong></td></tr>'; 
                echo '</table>';

            } 
            echo '</p>'; 
            echo '<p>'; 
            if (!empty($_SESSION['cart'])) { 
                echo '<a href="'.$_SERVER['PHP_SELF'].'?p=cart&delete_cart=true" class="cartlinks">Delete cart</a>&nbsp;&nbsp;'; 
            } 
            echo '<a href="index.php" class="cartlinks">Continue shopping</a>&nbsp;&nbsp;'; 
            if (!empty($_SESSION['cart'])) { 
                echo '<a href="index.php?p=checkout" class="cartlinks">Checkout</a>'; 
            } 
            echo '</p>'; 
        ?> <!--  '.$_SESSION['size'].'  -->

</div>
    
<br class="clear" />