 <?php
	if (isset($_POST['submit'])== NULL)
	{
		$theError = '';
		$baddata = 2;
	}

	if ($baddata==1) 
	{
		$theError = 'Either the username or password is incorrect.';
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
			Log In
		</title>
		
		<style>
			<?php include "css/common.css" ?>
			<?php include "css/login.css" ?>
		</style>	
	</head>
	
	<body>
		<main>
			
			<div id="errorDisplay"><?php echo $theError; ?></div>
			<?php include "include/connection.php" ?>
			<form id="login" name="login" action="login2.php" method="post">
			<button id="exit" type="button" onclick="window.open('index.php')">Exit</button>
			<br>
			<br>
				<label>Username:*</label>			
					<input id = "username" name= "username" required  type="email" title="Enter Username.">
					<br>
					<br>
				<label>Password:*</label>
					<input type="password" id="psw" name="psw" required title="Enter Password." >
					<br>
					<br>
					<input class="reset" type="reset" value="Reset">
					<input class="submit" type="submit" value="Log In">
					<br>
					<br>
			</form>
		</main>
	
		<script></script>
	</body>
</html>