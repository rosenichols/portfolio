<?php // detail.inc.php
	
/*
 *	This is the detail content module.
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
			
			// Pass along variables
			if (isset($_GET['itemid'])) {
				$url .= '&itemid=' . urlencode($_GET['itemid']);
			}
	
		} // End of defined() IF.
		
		
		include('includes/dbconfig.php');
				
		$itemid=$_GET['itemid'];


	  $query=mysql_query("SELECT * FROM `ftt_item` WHERE item_id = '" . $itemid . "'");
	  
	  if (isset($itemid) ) {

			while($add=mysql_fetch_assoc($query)) $items[] = $add;
			
			foreach ($items as $item) {
			
			echo '<div id="detailwrapper">';
			
			echo '<div id="detailcontent">';
			
			echo '<h1>'.$item['brand'].'</h1>';
			
			echo '<h2>'.$item['name'].'</h2>';
			
			echo '<p>'.$item['description'].'</p>';
			
			echo '<p>�'.$item['price'].'</p>';
			
			
				echo '<h2>Add to cart</h2>';
				
				echo '<form method="GET" action="'.$_SERVER['PHP_SELF'].'">';
				
				echo '<select name="size">';
				
	      $getsizes = mysql_query("SELECT * FROM `ftt_size` ORDER BY size_id ASC"); 
	      
	      // displays (available) sizes in drop down box
	      while ($row = mysql_fetch_assoc($getsizes)) { 
	          echo '<option value="'.$row['size_id'].'">';
	          echo htmlentities($row['size']).'</option>'; 
	      } 
				
				echo '</select>';
				
				echo '<input type="hidden" name="category" value="'.$item['cat_id'].'" />';
				
				echo '<input type="hidden" name="qty" value="1" />';
				
				echo '<input type="hidden" name="p_id" value="'.$item['item_id'].'" />'; 
				
				echo '<input type="submit" class="button" name="cart_submit" value="Add to cart" />';
				
				echo '</form>';
			
			
			echo '</div>'; /* end detailcontent */
			
			echo '<img src="images/'.$item['image_full'].'" class="detailpic" />';
			
			echo '</div>'; /* end detailwrapper */
		
		}
		
		mysql_close();
		
		}
?>

<br class="clear" />