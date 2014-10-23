<?php $body_id = "additem";

include_once('includes/header.inc.php');?>
					
					<div id="showitems">
					
					<h1>List a missing toy</h1>
					
					<p>Fill out the form.</p>
					
					
					
					<?php

					//define a maxim size for the uploaded images in Kb
					define("MAX_SIZE","100");
					
					//This function reads the extension of the file. It is used to determine if the file is an image by checking the extension.
					function getExtension($str) {
						$i = strrpos($str,".");
						if (!$i) { return ""; }
						$l = strlen($str) - $i;
						$ext = substr($str,$i+1,$l);
						return $ext;
					}
					
					/* This variable is used as a flag. The value is initialized with 0 (meaning no error found) and it will be changed to 1 if an errror occurs. If the error occures the file will not be uploaded. */
					$errors=0;
					//checks if the form has been submitted
					if(isset($_POST['Submit']))
					{
						//reads the name of the file the user submitted for uploading
						$image=$_FILES['image']['name'];
						//if it is not empty
						if ($image)
						{
							//get the original name of the file from the clients machine
							$filename = stripslashes($_FILES['image']['name']);
							// get the extension of the file in a lower case format
							$extension = getExtension($filename);
							$extension = strtolower($extension);
							//if it is not a known extension, we will suppose it is an error and will not upload the file, otherwize we will do more tests
							if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
							{
								//print error message
								echo '<h1>Unknown extension!</h1>';
								$errors=1;
							}
							else
							{
								//get the size of the image in bytes
								//$_FILES['image']['tmp_name'] is the temporary filename of the file in which the uploaded file was stored on the server
								$size=filesize($_FILES['image']['tmp_name']);
					
								//compare the size with the maxim size we defined and print error if bigger
								if ($size > MAX_SIZE*1024)
								{
									echo '<h1>You have exceeded the size limit!</h1>';
									$errors=1;
								}
					
								//we will give an unique name, for example the time in unix time format
								$image_name=time().'.'.$extension;
								//the new name will be containing the full path where will be stored (images folder)
								$newname="images/".$image_name;
								//we verify if the image has been uploaded, and print error instead
								$copied = copy($_FILES['image']['tmp_name'], $newname);
								if (!$copied)
								{
									echo '<h1>Copy unsuccessful!</h1>';
									$errors=1;
								}}}}
					
					//If no errors registered, print the success message
					
					if(isset($_POST['Submit']) && !$errors)
					{
						echo "<h1>File Uploaded Successfully! Try again!</h1>";
					}
					
					?>
				
					
					<?php
					$insert_owner="INSERT INTO `lt_owner` (owner_id, fname, sname, email) VALUES ('', '".$_POST['fname']."', '".$_POST['sname']."', '".$_POST['email']."')";
					
					$result_owner=mysql_query($insert_owner) or die(mysql_error());
					
					$insert_item="INSERT INTO `lt_item` (item_id, item_type, date_lost, location_lost, colour, description, features, circumstances, image, owns) VALUES ('', '".$_POST['item_type']."', '".$_POST['date_lost']."', '".$_POST['location_lost']."', '".$_POST['colour']."', '".$_POST['description']."', '".$_POST['features']."', '".$_POST['circumstances']."', '".$newname."', '".mysql_insert_id()."')";
					
					$result_item=mysql_query($insert_item) or die(mysql_error());

					if ($result_owner && $result_item) {
				  echo "<p>Success!</p>";
				  
				  echo '<p>Your unique id is '.mysql_insert_id(). '</p>';
				  }
				  
				
				
					echo 'You entered the following:';
				
				
					$query=mysql_query("SELECT * FROM `lt_item` WHERE item_id == '30'");

					while($add=mysql_fetch_assoc($query)) $item[] = $add;
					
				  foreach ($item as $item) {
 				
						
						echo '<p><strong>ID:</strong> '.$item['item_id'].'</p>';
						
						echo '<p><strong>Type:</strong> '.$item['item_type'].'</p>';
						
						echo '<p><strong>Lost on</strong> '.$item['date_lost'].' <strong>in</strong> '.$item['location_lost'].'</p>';
						
						echo '<p><strong>Overall colour:</strong> '.$item['colour'];
						
						echo '<p><strong>Description:</strong> '.$item['description'];
						
						echo '<p><strong>Identifying features:</strong> '.$item['features'];
						
						echo '<p><strong>Circumstances:</strong> '.$item['circumstances'];
						
						echo '<p><strong>Image:</strong> <img src="images/'.$item['image'].'"/ ></p>';
						
						}
						
					
					mysql_close(); ?>

					
					
					</div> <!-- end showitems -->
					
			</div> <!-- end content -->
			
		</div> <!-- end contentbg -->
		
	</div> <!-- end banner -->

</body>

</html>