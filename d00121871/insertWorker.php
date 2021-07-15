<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
		
		</title>
		
		<style>
			<?php include "css/updateCommon.css" ?>
		</style>	
	</head>
		<main>
			<?php include "include/connection.php" ?>
			
			<form id="insertWorker" name="insertWorker" action="workerInserted.php" method="post">
			<button id="exit" type="button" onclick="window.open('admin.php')">Exit</button>
					<label>First Name: *</label>
					<input id = "firstName" name= "firstName" autofocus required type="text" title="Please enter worker first name.">
			<br>
			<br>
					<label>Last Name: *</label>
					<input id = "lastName" name= "lastName" autofocus required type="text" title="Please enter worker last name.">
			<br>
			<br>
					<label> Gender:</label>
						<select id = "gender" name="gender" required>
							<option value = "Select Gender"></option>
							<?php 
								$sql = "SELECT gender_id, gender_name FROM gender";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['gender_id']. "'>".$one['gender_name']. "</option>";
								endforeach;
					?>
					</select>
			<br>
			<br>
					<label>Email:*</label>			
					<input id = "email" name= "email" required  type="email" title="Please enter worker email.">
			<br>
			<br>
			<label> Phone number:</label>
						<select id = "phoneNumber" name="phoneNumber" required>
							<option value = "Select Prefix"></option>
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
						<input id ="mobile" name = "mobile" type = "text" title= "Please enter worker phone." required >
						<br>
						<br>
							<label>Address Line 1:*</label>			
							<input id = "address1" name= "address1" required type="text" title="Enter worker address.">
						<br>
						<br>
							<label>Address Line 2:*</label>			
							<input id = "address2" name= "address2"  required type="text">
						<br>
						<br>
							<label>Address Line 3:</label>			
							<input id = "address3" name= "address3"  type="text">
						<br>
						<br>
						<label class="county">County:*</label>
							<select id = "county" name="county" required>
								<option value = "Select County"></option>
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
							<option value = "Select Country"></option>
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
						<label>Worker Type:*</label>			
							<select id = "workerType" name="workerType" required>
							<option value = "Select Type"></option>
							<?php 
								$sql = "SELECT worker_type_id, worker_type_name FROM worker_type";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['worker_type_id']. "'>".$one['worker_type_name']. "</option>";
								endforeach;
							?>
							</select>
						<br>
						<br>
						<label>Select Worker Role:*</label>			
							<select id = "workerRole" name="workerRole" required>
							<option value = "Select Role"></option>
							<?php 
								$sql = "SELECT role_id, role_description FROM role";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['role_id']. "'>".$one['role_description']. "</option>";
								endforeach;
							?>
							</select>
						<br>
						<br>
							<label>Select Project Type:*</label>			
							<select id = "workerProjectType" name="workerProjectType" required>
							<option value = "Select Project Type"></option>
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
							<label>Select Project:*</label>			
							<select id = "project" name="project" required>
							<option value = "Select Project Type"></option>
							<?php 
								$sql = "SELECT project_id, project_name FROM project";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['project_id']. "'>".$one['project_name']. "</option>";
								endforeach;
							?>
							</select>
						<br>
						<br>
							<label>Set Rate:*</label>			
							<input id = "rate" name= "rate" required type="text">
						<br>
						<br>
							<label>Worker Image Name:*</label>			
							<input id = "worker_img" name= "worker_img" required type="text" title="Enter worker picture name.">
						<br>
						<br>
						<label>Worker Description:*</label>			
							<input id = "worker_desc" name= "worker_desc" required type="text" title="Enter worker description.">
						<br>
						<br>
						<input type="reset" value="Reset">
						<input type="submit" value="Insert Worker">
				</form>
		</main>
	<body>
	
		<script></script>
	</body>
</html>