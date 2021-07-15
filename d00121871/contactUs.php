<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
			Contact Us
		</title>
		
		<style>
			<?php include "css/updateCommon.css" ?>
		</style>	
	</head>
	
	<body>
		<main>
			<?php include "include/connection.php" ?>
			<article>
				<form id="query" name="query" onsubmit="return validateForm()" action="contactUs2.php" method="post">
				<button id="exit" type="button" onclick="window.open('index.php')">Exit</button>
					<label>Name: *</label>
					<input id = "queryName" name= "queryName" size="50" autofocus required type="text" title="Please your company name.">
			<br>
			<br>
					<label>Email:*</label>			
					<input id = "queryEmail" name= "queryEmail" size = "50" required  type="email" title="Please your email.">
			<br>
			<br>
				<label>Leave a Comment:*</label>
				<textarea id="comment" name="comment" rows="4" cols="50"></textarea>
			<br>
			<br>
				<input class="reset" type="reset" value="Reset">
				<input class="submit" type="submit" value="Submit">
			</form>
			</article>
			<script src="javascript/contactUs.js"></script>
		</main>
	</body>
</html>