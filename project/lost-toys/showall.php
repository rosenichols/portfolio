<?php include_once('includes/header.inc.php');?>
					
					<div id="showitems">
					<h1>All lost toys</h1>
					
					<?php $query=mysql_query("SELECT * FROM `lt_item` ORDER BY 'date_lost' DESC");

					while($add=mysql_fetch_assoc($query)) $item[] = $add;
					
				  foreach ($item as $item){
 					
						echo '<div class="itemlosthalf">';
						
						echo '<p><strong>Type:</strong> '.$item['item_type'].'</p>';
						
						echo '<p><strong>Lost on</strong> '.$item['date_lost'].' <strong>in</strong> '.$item['location_lost'].'</p>';
						
						echo '<p><strong>Overall colour:</strong> '.$item['colour'];
						
						echo '<p><strong>Description:</strong> '.$item['description'];
						
						echo '<p><strong>Identifying features:</strong> '.$item['features'];
						
						echo '<p><strong>Circumstances:</strong> '.$item['circumstances'];
						
						echo '<br /><a href="viewdetails.php?id='.$item['item_id'].'"><img src="images/viewdetails_btn.png" alt="View more details" class="reportsighting" /><a href="reportasighting.php?id='.$item['item_id'].'"><img src="images/reportsighting_sml.png" alt="Report a sighting" class="reportsighting" /></a>';
						
						echo '</div>';
					
					} mysql_close(); ?>

					
					</div>
					
			</div> <!-- end content -->
			
		</div> <!-- end contentbg -->
		
	</div> <!-- end banner -->

</body>

</html>