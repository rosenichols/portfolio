<?php 


$body_id = "reportasighting";

include_once('includes/header.inc.php');
 

					
					$item_id=$_GET['id'];
 
 // Query the database.
					$query_Search = "SELECT * FROM `lt_item` WHERE item.item_id = '".$item_id."'";
					$Search = mysql_query($query_Search, $connTest) or die(mysql_error());
					$row_Search = mysql_fetch_assoc($Search);
					$totalRows_Search = mysql_num_rows($Search);
					
					if($Search){
					$query_Owner = "SELECT * FROM `lt_owner` WHERE owner.owner_id = '".$row_Search['owns']."'";
					$Owner = mysql_query($query_Owner, $connTest) or die(mysql_error());
					$row_Owner = mysql_fetch_assoc($Owner);
					$totalRows_Owner = mysql_num_rows($Owner);
					}

					if (isset($_POST['Submit'])) {
					
					//email code
					 
					$subject = $row_Search['colour'] . $row_Search['item_type'];
					$sendto = $row_Owner['email'];
					
					$message=$_POST['message'];
					
					$headers.= "MIME-Version: 1.0\r\n";
					$headers.= "Contenttype: text/html; ";
					$headers.= "charset=iso-8859-1\r\n";
					$headers.= "From: " . $_POST['email'];
					// Build the email body text
					 
					
					// Send out the email or output an error message 
					mail($sendto, $subject, $message, $headers);
				
					}
					?>
					
					<div id="showitems">
					
					<h1>Report a Sighting</h1>
					
					<p>Fill out the form and we will pass on your message. You may optionally enter an email address to allow the owner to contact you.</p>
					
					<form method='POST' action="" enctype="multipart/form-data">
					
					<table id="ownerdetailstable">
					
					<tr>
						<td class="colwidth">Owners Name</td><td><p><?php if ($Owner){echo $row_Owner['fname'] . " " . $row_Owner['sname'];}?></p></td>
					</tr>
					
					<tr>
						<td class="colwidth">Your Email Address</td><td><input type="text" name="email" /></td>
					</tr>
					
					<tr>
						<td>Write them a message </td></td><td><textarea name="message">Tell them about your sighting!</textarea></td>
					</tr>
					
					<tr>
						<td><input type="submit" name="Submit" /></td>
					</tr>
					
					</table>
					
					
					
					</div> <!-- end showitems -->
					
			</div> <!-- end content -->
			
		</div> <!-- end contentbg -->
		
	</div> <!-- end banner -->

</body>

</html>