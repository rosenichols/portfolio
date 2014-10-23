<?php $body_id = "additem";

include_once('includes/header.inc.php');?>
					
					<div id="showitems">
					
					<h1>List a missing toy</h1>
					
					<p>Fill out the form.</p>
					
					<h2>Your details</h2>
					
					<form method='POST' action="addfield.php" enctype="multipart/form-data">
					
					<table id="ownerdetailstable">
					
					<tr>
						<td class="colwidth">First name</td><td><input type="text" name="fname" /></td>
					</tr>
					<tr>
						<td>Surname</td><td><input type="text" name="sname" /></td>
					</tr>
					<tr>
						<td>Email adress</td><td><input type="text" name="email" /></td>
					</tr>
					
					</table>
					
					<h2>Item details</h2>
					
					<table id="itemdetailstable">
					
					<tr>
						<td class="colwidth">Item type</td><td><input type="text" name="item_type" /> (eg. Stuffed toy, Plastic toy, Beanie toy)</td>
					</tr>
					<tr>
						<td>Date lost</td><td><input type="text" name="date_lost" /> (FORMAT: YYYY-MM-DD If you're unsure, make a best guess)</td>
					</tr>
					<tr>
						<td>Location lost</td><td><input type="text" name="location_lost" /> (If you're unsure, make a best guess or name multiple places)</td>
					</tr>
					<tr>
						<td>Overall colour</td><td><input type="text" name="colour" /> (eg. Red, Blue, Green)</td>
					</tr>
					<tr>
						<td>Description</td><td><input type="text" name="description" /> (eg. Size, material, colours)</td>
					</tr>
					<tr>
						<td>Identifying features</td><td><input type="text" name="features" /> (If any)</td>
					</tr>
					<tr>
						<td>Circumstances of loss</td><td><input type="text" name="circumstances" /></td>
					</tr>
					<tr>
						<td>Image</td><td><input type="file" name="image" /></td>
					</tr>
					
					</table>
					
					<input type="submit" value="Submit" name="Submit" /> <input type="button" value="Clear" />
					
					</form>
					
					</div> <!-- end showitems -->
					
			</div> <!-- end content -->
			
		</div> <!-- end contentbg -->
		
	</div> <!-- end banner -->

</body>

</html>