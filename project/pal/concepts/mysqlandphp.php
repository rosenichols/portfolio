<?php
$page_title = 'MySQL and PHP | Concepts | ITTW PAL';
$body_id = 'concepts';
include ('../includes/headerconcepts.html');
?>

<div id="content">

	<h1>Interacting with MySQL using PHP</h1>
	
	<p>In order to understand this tutorial, it would probably be helpful to review <a href="../week15.php">week 15's</a> session for an introduction to MySQL. This is particularly important because we will be using the table that we made in that session.</p>
	
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
	
	<p>Create a new file this time in the pal-mysql folder and save it as select.php (pages with PHP in them must have the extension .php!) bring in the XHTML template you should have (click <a href="../xhtmlstructure.php">here</a> is you haven't to copy the template).</p>
	
	<p>We need to use the code we just wrote in order to connect to the database. Use the following line to bring this code in to our current file.</p>
	
	<p class="code">&lt;?php include('includes/connecttomysql.php');?&gt;</p>
	
	<p>As always, we start PHP code with &lt;? and end it with ?&gt;. Include() is a build in function within PHP which simply brings code from an external page into yours, much like bringing CSS into HTML using the <link> tag. We use includes because it saves you writing your mysql connection data on every page, and also should your password change, you'll only have to make the amendment in one place.</p>
	
	<p>Now, before the end tag for the PHP, hit return and enter the following:</p>
	
	<p class="code">$query=mysql_query("SELECT * FROM `members` ORDER BY 'id' ASC");</p>
	
	<p>$query - creates a PHP variable<br />
	mysql_query - begins a MySQL query<br />
	SELECT * FROM - SELECT function. The asterisk means all from your table<br />
	`members` - This is the name of your table. You need to use slanted quotes<br />
	ORDER BY 'id' ASC - ORDER BY sorts your results on a field, in this case by the id of the people in ascending order (ASC=lowest first) DESC is descending order</p>
	
	<p>Now we need to tell PHP to print this data to the screen. Put the following still within the PHP tags but after the query we just wrote.</p>
	
	<p class="code">while($add=mysql_fetch_assoc($query)) $members[] = $add;<br />
	foreach ($members as $member) {<br />
	echo '&lt;p&gt;Member ID: '.$member['id'].'&lt;br /&gt;Name: '.$member['firstname'].''.$member['lastname'].'&lt;br /&gt;Email Address: '.$member['email'].'&lt;br /&gt;Age:'.$member['age'].'&lt;/p&gt;';<br />
	} mysql_close();</p>
	
	<p>Save this page and upload it to the U: drive. View the page. You should see a list of the entries you made to your table.</p>
	
	
</div> <!-- EOF content -->

<?php
include ('../includes/footer.html');
?>