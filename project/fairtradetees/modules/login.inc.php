<?php // login.inc.php
	
/*
 *	This is the login content module.
 *	This page is included by index.php.
 */
	
		// Redirect if this page was accessed directly:
		if (!defined('BASE_URL')) {
		
			// Need the BASE_URL, defined in the config file:
			require_once ('../includes/config.inc.php');
		
			// Redirect to the index page:
			$url = BASE_URL . 'index.php';
			header("Location: $url");
			exit;
	
		} // End of defined() IF.
?>

	<div id="logincolumnleft">
	
		<h2>Existing Member Login</h2>
		
		<form action="index.php" method="GET">
		
			<div class="formsection">
				<label class="login">Email address</label>
				<input type="text" name="email" class="floatright" />
			</div>
			
			<div class="formsection">
				<label class="login">Password</label>
				<input type="password" name="password" class="floatright" />
				<input type="hidden" name="login" />	
			</div>
			
			<div class="formsection">
				<input type="submit" />
			</div>
		
		</form>
		
	</div>
	
	<div id="logincolumnright">
	
		<h2>Not a member?</h2>
		
		<p>Enter your details below to register. Benefits of registering include your details being saved for future purchases and other great stuff.</p>
		
		<form action="index.php" method="GET">
		
			<div class="formsectionright">
				<label class="login">Email address</label>
				<input type="text" name="email" class="floatright" />
			</div>
			
			<div class="formsectionright">
				<label class="login">Password</label>
				<input type="password" name="password" class="floatright" />
				<input type="hidden" name="login" />	
			</div>
			
			<div class="formsection">
				<input type="submit" />
			</div>
		
		</form>
		
	</div>
	

<br class="clear" />