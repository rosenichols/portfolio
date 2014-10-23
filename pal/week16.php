<?php
$page_title = 'MySQL and PHP | Week 16 | ITTW PAL';
$body_id = 'sessions';
include ('includes/header.html');
?>

	<div id="weekswrapper">
	
	
	<?php
	include ('includes/sidenav.html');
	?>
	
		<div id="weekscontent">
		
			<h1 class="first">Interacting with MySQL using PHP</h1>
	
	<p>In order to understand this tutorial, it would probably be helpful to review <a href="week14.php">week 14's</a> session for an introduction to PHP and <a href="week15.php">week 15's</a> session for an introduction to MySQL. This is particularly important because we will be using the table that we made in that session. If you didn't attend week 15, use the SQL code provided on that page to populate your table.</p>
	
	<p>Being able to use PHP to interact with MySQL through a web page will be incredibly useful to you this year and in the future.</p>
	
	<h2>Connect to your MySQL database using PHP</h2>
	
	<p>Before we can do anything with the database, we need to connect to it using PHP. This enables PHP to log in for you.</p>
	
	<p>For the purposes of this tutorial, create a new folder called 'pal-mysql' and within that a folder called 'includes'. Now, create a new page in Notepad++ (or alternative editor) and save it as connecttomysql.php in your 'includes' folder. In this file, write the following code:</p>
	
	<p class="code">
		&lt;?php<br />
		// this defines the connection strings which are used in mysql_connect<br />
		$dbhost = 'mysql5';<br />
		$dbuser = 'your CSCT username';<br />
		$dbpass = 'your MySQL password';<br /><br />
		
		// make a connection to the database server using the variable above<br />
		mysql_connect($dbhost, $dbuser, $dbpass) or die(); // die means end<br /><br />
		
		// name and select the database<br />
		$dbname = 'you CSCT username';<br />
		$dbselect = mysql_select_db($dbname) or die('Could not connect to the database '.$dbname);<br />
		?&gt;
	</p>
	
	<p>The mysql_connect command is what actually connects to the mysql5 server, then the database section below picks out your database and then connects only to that (you can only connect to one database at a time, however can work on many tables at a time).</p>
	
	<p>Save this page. Upload the entire pal-mysql folder to your U: drive. Now view your page and see what response you get. If you get a warning message  with 'Warning: mysql_connect()' in then you must have typed your username/password wrong. Check carefully! If you get this: 'Could not connect to the database...' then you typed the name of your database wrong (this is your username, check carefully). If you get a blank page, this is correct and you have successfully logged in to your database using PHP.</p>
	
	
	
	<h2>Use PHP to display the contents of a table: SELECT function</h2>
	
	<p>Create a new file this time in the pal-mysql folder and save it as select.php (pages with PHP in them must have the extension .php!) bring in the XHTML template you should have (if you haven't got it, click <a href="concepts/xhtmlstructure.php">here</a>, otherwise carry on).</p>
	
	<p>In the body of our new page, use the following line to bring in the code from the connecttomysql.php file.</p>
	
	<p class="code">&lt;?php include('includes/connecttomysql.php');?&gt;</p>
	
	<p>As always, we start PHP code with &lt;? and end it with ?&gt;. Include() is a built in function within PHP which simply brings code from an external page into yours, much like bringing CSS into HTML using the &lt;link&gt; tag. We use includes because it saves you writing your mysql connection data on every page, and also should your password change, you'll only have to make the amendment in one place.</p>
	
	<p>Now, <span class="bold">before the end tag for the PHP</span>, hit return and enter the following:</p>
	
	<p class="code">$query=mysql_query("SELECT * FROM `members` ORDER BY 'id' ASC");</p>
	
	<p>$query - creates a PHP variable<br />
	mysql_query - begins a MySQL query<br />
	SELECT * FROM - SELECT function. The asterisk means all from your table<br />
	`members` - This is the name of your table. You need to use slanted quotes<br />
	ORDER BY 'id' ASC - ORDER BY sorts your results on a field, in this case by the id of the people in ascending order (ASC=lowest first) DESC is descending order</p>
	
	<p>Now we need to tell PHP to print this data to the screen. Put the following <span class="bold">still within the PHP tags</span> but after the query we just wrote.</p>
	
	<p class="code">while($add=mysql_fetch_assoc($query)) $members[] = $add;<br />
	foreach ($members as $member) {<br />
	echo '&lt;p&gt;Member ID: '.$member['id'].'&lt;br /&gt;Name: '.$member['firstname'].''.$member['lastname'].'&lt;br /&gt;Email Address: '.$member['email'].'&lt;br /&gt;Age:'.$member['age'].'&lt;/p&gt;';<br />
	} mysql_close();</p>
	
	<p>Save this page and upload it to the U: drive. View the page. You should see a list of the entries you made to your table.</p>
	
	
	
	<h2>Adding new content into our databases: INSERT INTO function</h2>
	
	<p>Last week we entered data into our tables directly using PHP MyAdmin. Now let's look at a way to enter new fields into our table using a form on a webpage. It will be useful to learn how to do this - after we have entered more data into our tables, we can look at how to display results on the screen based on queries.</p>
	
	<p>Create a new XHTML page called insert.php. In the body, insert this code to create the form:</p>
	
	<p class="code">
		&lt;form method='post' action=&quot;addfield.php&quot;&gt;
		&nbsp;&nbsp;First Name: &lt;input type=&quot;text&quot; name=&quot;firstname&quot; value=&quot;&quot; size=&quot;20&quot; /&gt;&lt;br /&gt;
		&nbsp;&nbsp;Last Name: &lt;input type=&quot;text&quot; name=&quot;lastname&quot; value=&quot;&quot; size=&quot;20&quot; /&gt;&lt;br /&gt;
		&nbsp;&nbsp;Age: &lt;input type=&quot;text&quot; name=&quot;age&quot; value=&quot;&quot; size=&quot;20&quot; /&gt;&lt;br /&gt;
		&nbsp;&nbsp;Email: &lt;input type=&quot;text&quot; name=&quot;email&quot; value=&quot;&quot; size=&quot;20&quot; /&gt;&lt;br /&gt;
		&nbsp;&nbsp;&lt;input type=&quot;submit&quot; value=&quot;Submit&quot; /&gt;
		&lt;/form&gt;
	</p>
	
	<p>Clicking submit at this point won't do anything. Note that the action of our form points to another page 'addfield.php'. This page will contain the code to add a new field to our table.</p>
	
	<p>Create a new page and call it addfield.php. This page need only contain php code, so don't worry about putting HTML headers etc on it. Inside PHP tags, add the line to include the file which contains the code to connect to the MySQL database. Underneath that, put the following:</p>
	
	<p class="code">
	$insert=&quot;INSERT INTO members (id, firstname, lastname, age, email) VALUES ('', '&quot;.$_POST['firstname'].&quot;', '&quot;.$_POST['lastname'].&quot;', '&quot;.$_POST['age'].&quot;', '&quot;.$_POST['email'].&quot;')&quot;;<br /><br />
	
	$result=mysql_query($insert) or die(mysql_error());<br /><br />
	
	if ($result) {<br />
		&nbsp;&nbsp;echo "Successfully inserted! Click &lt;a href=\&quot;insert.php\&quot;&gt;here&lt;/a&gt; to go back.";
	}<br /><br />
	
	mysql_close();
	</p>
	
	<p>Save these files and upload them to the UWE server. Now test out the form and check your MySQL databases to see if the new fields are being successfully entered.</p>
	
	<p>(Of course, if we were going to develop this further, it would be a good idea to add some HTML content outside of the PHP tags on the addfield.php page to make it fit in with the look and layout of the rest of the site.)</p>
	
	
	<h2>Restricting the results shown: WHERE function</h2>
	
	<p>Now that we have a fair bit of data in our table, we can specify conditions on which to select rows to view using the WHERE function. Let's try this out on our table. We will select rows based on age.</p>
	
	<p>Open your select.php file and save it as selectwhere.php in your pal-mysql folder.</p>
	
	<p>In your PHP code, change the line $query=mysql_query("SELECT * FROM `members` ORDER BY 'id' ASC"); to read:</p>
	
	<p class="code">$query=mysql_query("SELECT * FROM `members` WHERE `age` = '19' ORDER BY 'id' ASC");</p>
	
	<p>This line will select only the rows which fulfil the condition. Any other rows are not displayed. Try changing the number and see what happens.</p>
	
	<p>This kind of where query, using an equals sign, returns only those rows that are an exact match, but we can also pull out fields that are a partial match using a likeness match.</p>
	
	<p class="code">... `members` WHERE `email` LIKE '%uwe.ac.uk%' ORDER BY ...</p>
	
	<p>The % signs on each side define that anything can come before or after the term entered and those matched will be displayed.</p>
	
	<p>Try this out.</p>
	
	<p>Finished? Maybe you could help someone around you who hasn't finished yet :)</p>

		
		</div> <!-- EOF weekscontent -->
	
	</div> <!-- EOF weekswrapper -->

<div class="clearline"></div>

<?php
include ('includes/footer.html');
?>