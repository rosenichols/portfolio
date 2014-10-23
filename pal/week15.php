<?php
$page_title = 'MySQL | Week 15 | ITTW PAL';
$body_id = 'sessions';
include ('includes/header.html');
?>

	<div id="weekswrapper">
	
	
	<?php
	include ('includes/sidenav.html');
	?>
	
		<div id="weekscontent">
		
			<h1 class="first">Week 15 - Introduction to MySQL</h1>
			
			<p>Resource material - <a href="resources/members.sql">members.sql</a> (click to download)</p>
			
			<p>This week we will go through an initial introduction to MySQL.</p>
			
			<h2>What is MySQL?</h2>
			
			<p>MySQL is a database system which I am sure will be valuable to your Systems Development assignment as well as many future web projects. Even if you have used MySQL before, it will be good to get used to the UWE MySQL systems as they may be set up differently to external ones.</p>
			
			<p>A database will allow you to create and maintain dynamic content on your site.</p>
			
			<h2>The UWE MySQL System</h2>
			
			<p>To begin, open this link in a new browser window/tab - <a href="http://isa.cems.uwe.ac.uk">http://isa.cems.uwe.ac.uk</a>. Follow the link to php MyAdmin. It should look something like this. Log in.</p>
			
			<img src="images/screenshots/isa.png" alt="log in to PHP MyAdmin" />
			
			<p><span class="bold">Edit:</span> If you haven't done so already, you will need to create a new MySQL account. Click the SECOND link which says 'New Password Reset' and enter your current CEMS username (the one without the dash) and password into the first form. You will then be given a password with which to log in to MySQL.</p>
			
			<h2>What is isa.cems.uwe.ac.uk?</h2>
			
			<p>The isa server is for checking if any of your PHP has errors, as the UWE WWW server has PHP error reporting turned off by default (this won't be the case on most external WWW servers though). So, if you're ever working on any PHP inside UWE, make sure you check PHP pages on the isa server (You won't need to upload files to a different location - your public_html folder will still show up the same on the isa server).</p>
			
			<h2>Create a sample table</h2>
			
			<p>We are going to create a sample table to get used to using the system, and so that we can use it later to learn how to use PHP to manipulate the data.</p>
			
			<p>Once you've logged in, you'll see the php MyAdmin homepage. <span class="bold">You'll need to select a database from the drop down list on the left, this will be your username</span>. Click your username and you'll be taken to a new page. Any tables in your database will be shown on the left. There probably won't be any there yet. Create a new table with the name "members". Also define that there will be five fields, then click Go.</p>
			
			<img src="images/screenshots/create_table.png" alt="Create a table" />
			
			<p>You'll then see an input screen with lots of blank boxes. In the field column (going downwards) enter id, firstname, lastname, age, email into the boxes. For the type column (again, going downwards) select INT, VARCHAR, VARCHAR, INT, VARCHAR. For the length/values column, leave the first one blank, the next two set to 50, the next to 3 and the next to 255. Leave the Attributes, Null and Default columns as they are. In the extra column, for the first line only, select auto_increment from the drop down list. Also for this row select the first radio button beneath the icon which looks vaguely like a key. Once you've done this, click save. You'll then see a confirmation page showing the structure of your table (and the SQL code used, more on this later). It should look something like this:</p>
			
			<img src="images/screenshots/table_fields.png" alt="Fill in the table fields" />
			
			<p>Now we've created a table, it's time to put some data in it. Click the "Insert" button in the middle near the top of the page.</p>
			
			<img src="images/screenshots/insert.png" alt="Insert button" />
			
			<p>Fill in the data with information about yourself and one or two other people sitting near you. Note that if you exceed the character limit you set up earlier, MySQL will trim the input down to the number of characters specified.</p>
			
			<p><span class="bold">Don't enter a value for the ID field as MySQL does this for you automatically.</span></p>
			
			<p>Once you are finished entering data, click the "Browse" button (again near the top of the screen). You will be able to see the data you have inserted. Note how the ID field has been inserted for each field automatically.</p>
			
			<p>If you need to edit an entry, click on the pencil icon. If you wish to delete a field, click on the red cross but be careful because this cannot be undone.</p>
		
		</div> <!-- EOF weekscontent -->
	
	</div> <!-- EOF weekswrapper -->

<div class="clearline"></div>

<?php
include ('includes/footer.html');
?>