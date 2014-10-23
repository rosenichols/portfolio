<?php include_once('includes/header.inc.php');?>
					
					<div id="showitems">
					
					<h1>Search Results</h1>
					
					<?php
					
					// Display the search results if the form has been submitted.
					if (isset($_GET['terms']) && ($_GET['terms'] != 'Search...') ) {
					
					$searchterm=$_GET['terms'];
					
					// Query the database.
					$query_Search = "SELECT * FROM `lt_item` WHERE lt_item.item_id = '" .$searchterm. "' OR (lt_item.colour LIKE '%" . $searchterm . "%' OR lt_item.description LIKE '%" . $searchterm  ."%')";
					$Search = mysql_query($query_Search, $connTest) or die(mysql_error('Unable to conect'));
					$row_Search = mysql_fetch_assoc($Search);
					$totalRows_Search = mysql_num_rows($Search);
					
					
					echo '<p>'.$totalRows_Search.' results found.</p>';
					
					// Print the results:
					 do { 
					 
					 
					 
					 echo '<div class="itemlosthalf">';

						
						echo '<p><strong>Type:</strong> '.$row_Search['item_type'].'</p>';
						
						echo '<p><strong>Lost on</strong> '.$row_Search['date_lost'].' <strong>in</strong> '.$row_Search['location_lost'].'</p>';
						
						echo '<p><strong>Overall colour:</strong> '.$row_Search['colour'];
						
						echo '<p><strong>Description:</strong> '.$row_Search['description'];
						
						echo '<p><strong>Identifying features:</strong> '.$row_Search['features'];
						
						echo '<p><strong>Circumstances:</strong> '.$row_Search['circumstances'];
						
						echo '<p><a href="viewdetails.php?id='.$row_Search['item_id'].'"><img src="images/viewdetails_btn.png" alt="View more details" class="reportsighting" /></a></p>';
						
						echo '</div>';
				   
				   } while ($row_Search = mysql_fetch_assoc($Search)); 
				   
				   }
				?>
					
					</div> <!-- end showitems -->
					
			</div> <!-- end content -->
			
		</div> <!-- end contentbg -->
		
	</div> <!-- end banner -->

</body>

</html>