<?php
$page_title = 'MySQL and PHP | Week 18 | ITTW PAL';
$body_id = 'sessions';
include ('includes/header.html');
?>

	<div id="weekswrapper">
	
	
	<?php
	include ('includes/sidenav.html');
	?>
	
		<div id="weekscontent">
		
			<h1 class="first">Editing and Deleting using PHP and MySQL</h1>
			
			<h2>Editing existing content: UPDATE function</h2>
				
			<p>In this example we will be updating the content of two of the fields in specified given row.</p>
			
			<p>Open the insert.php page and save it as update.php. On the form, change the action so that it now points to update2.php.  Delete the first name input and amend the second to become an id field so that we have the following.</p>
			
			<img src="images/update_row.png" alt="" class="center" />
			
			<p>Open update2.php and within PHP tags enter the following code:</p>
			
			<p class="code">$update = "UPDATE members SET age = '".$_POST['age']."', email = '".$_POST['email']."' WHERE id = '".$_POST['id']."'";<br /><br />
			$result_update = mysql_query($update) or die(mysql_error()); mysql_close();</p>
			
			<p>Have a go at editing the details and see if the changes occur in PHP MyAdmin.</p>
			
			<h2>Deleting rows from your table: DELETE function</h2>
			
			<p>Use your update.php and update2.php files as a starting point for this. Open up those two files and save them as delete.php and delete2.php respectively. Update the form action. Delete the</p>
			
			<img src="images/delete_a_row.png" alt="" class="center" />
			
			<p>The code you'll need for the delete2.php file is as follows:</p>
			
			<p class="code">$delete = "DELETE FROM members WHERE id = '".$_POST['id']."'";<br /><br />

			$result_update = mysql_query($delete) or die(mysql_error()); mysql_close();</p>
			
			<p><span class="bold">Note:</span> Don't delete anything you might want again as there's no going back!</p>
			
			<p>Now run the form and check PHP MyAdmin to see if it has worked.</p>


		</div> <!-- EOF weekscontent -->
	
	</div> <!-- EOF weekswrapper -->

<div class="clearline"></div>

<?php
include ('includes/footer.html');
?>