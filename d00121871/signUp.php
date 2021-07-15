<?php
	if (isset($_POST['submit'])==NULL) {
		$theError = '';
		$baddata = 2;
	}

	if ($baddata==1) {
		$theError = 'This account already exists: try again';
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
			Sign Up
		</title>
			<div id="errorDisplay"><?php echo $theError; ?></div>
		<style>
			<?php include "css/common.css" ?>
			<?php include "css/signUp.css" ?>
		</style>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	</head>
	
	<body>
		<main>
			<?php include "include/connection.php" ?>
			<article>
				<form id="signUp" name="signUp" onsubmit="return validateForm()" action="welcome.php" method="post">
				<button id="exit" type="button" onclick="window.open('index.php')">Exit</button>
				<h1>Please fill in all required fields to sign up.</h1>
					<label>Company Name: *</label>
					<input id = "companyName" name= "companyName" size="50" autofocus required type="text" title="Please enter company name.">
			<br>
			<br>
					<label>Company Email:*</label>			
					<input id = "companyEmail" name= "companyEmail" size = "50" required  type="email" title="Please enter company email.">
			<br>
			<br>
			<label> Company Phone 	Number:*</label>
						<select id = "companyPhoneNumber" name="companyPhoneNumber" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT prefix_id, prefix_value FROM prefix";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['prefix_id']. "'>".$one['prefix_value']. "</option>";
								endforeach;
					?>
						</select>
						<input id ="mobile" name = "mobile" type = "text" title= "Please enter company phone." required >
						<br>
						<br>
							<label>Address Line 1:*</label>			
							<input id = "address1" name= "address1" size="50" required type="text" title="Enter company address.">
						<br>
						<br>
							<label>Address Line 2:*</label>			
							<input id = "address2" name= "address2" size="50" required type="text">
						<br>
						<br>
							<label>Address Line 3:</label>			
							<input id = "address3" name= "address3" size="50" type="text">
						<br>
						<br>
						<label class="county">County:*</label>
							<select id = "county" name="county" required>
								<option value = ""></option>
								<?php 
									$sql = "SELECT county_id, county_name FROM county";
									$stm = $db->prepare($sql);
									$stm -> execute();
									$all = $stm->fetchAll();
									$stm->closeCursor();
									
									foreach($all as $one):
										echo "<option value='".$one['county_id']. "'>".$one['county_name']. "</option>";
									endforeach;
								?>
					</select>
						<br>
						<br>
							<label>Country:*</label>			
							<select id = "country" name="country" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT country_id, country_name FROM country";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['country_id']. "'>".$one['country_name']. "</option>";
								endforeach;
							?>
							</select>
						<br>
						<br>
							<label>Select Project Type:*</label>			
							<select id = "companyProject" name="companyProject" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT project_type_id, project_type_name FROM project_type";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['project_type_id']. "'>".$one['project_type_name']. "</option>";
								endforeach;
							?>
							</select>
						<br>
						<br>
							<label>Create Password:*</label>
							<input type="password" id="psw" name="psw" required onkeyup="checkPassword()" >
							<span id="showPasswordValidity" class=""></span>
						<br>
						<br>
							<input class="reset" type="reset" value="Reset" onclick= "return clearForm()">
							<input class="submit" type="submit" value="Submit">
				</form>
			</article>
			<br>
			<br>	
		<script src="javascript/signUp.js"></script>
		</main>
	
		<script></script>
	</body>
</html>