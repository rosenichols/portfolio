<?php 

$body_id = "viewdetailspage";

include_once('includes/header.inc.php');?>
					
					<div id="showitems">
					
					<h1>More Details</h1>
					
					<p>You chose this item</p>
					
					<?php
										
					$item_id=$_GET['id'];

					$query=mysql_query("SELECT * FROM `lt_item` WHERE item_id = $item_id");

					while($add=mysql_fetch_assoc($query)) $item[] = $add;
					
				  foreach ($item as $item){
				  
				  if ($item['image'] != ''){
				  	echo '<p><strong>Image:</strong> <img src="'.$item['image'].'"/ ></p>';
 					}
						echo '<div class="itemlosthalf">';
						
						echo '<p><strong>Type:</strong> '.$item['item_type'].'</p>';
						
						echo '<p><strong>Lost on</strong> '.$item['date_lost'].' <strong>in</strong> '.$item['location_lost'].'</p>';
						
						echo '<p><strong>Overall colour:</strong> '.$item['colour'];
						
						echo '<p><strong>Description:</strong> '.$item['description'];
						
						echo '<p><strong>Identifying features:</strong> '.$item['features'];
						
						echo '<p><strong>Circumstances:</strong> '.$item['circumstances'];
						
						echo '<br /><a href="reportasighting.php?id='.$item['item_id'].'"><img src="images/reportsighting_sml.png" alt="Report a sighting" class="reportsighting" /><a>';
						
					  if ($item['image'] == ''){		
							echo '<a href="uploadimage.php?id='.$item['item_id'].'"><img src="images/addimage_btn.png" alt="Add an image" class="reportsighting" /></a>';
						}
						echo '</div>';
					
					} mysql_close();
					
					
					?>
					
										
					</div> <!-- end showitems -->
					
			</div> <!-- end content -->
			
		</div> <!-- end contentbg -->
		
	</div> <!-- end banner -->

</body>

</html>