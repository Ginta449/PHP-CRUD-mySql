<?php
	require_once('include/connection.php');
				
	$updateWorker = $_POST['pickWorker'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
			Update Worker
		</title>
		
		<style>
			<?php include "css/updateCommon.css" ?>
		</style>	
	</head>
	
	<body>
		<main>
			<h1>Update Worker </h1>
			<?php
				
				$query = "SELECT * FROM worker WHERE worker_id = :updateWorker";
				$statement = $db->prepare($query);
				$statement->bindValue(":updateWorker", $updateWorker);
				$statement->execute();
				$workerDetails = $statement->fetch();
				$statement->closeCursor();
			?>
			
			<form id="workerUpdated" name="workerUpdated" action="workerUpdated.php" method="post">
			<button id="exit" type="button" onclick="window.open('admin.php')">Exit</button>
				<label>Worker ID:</label>
				<input type="text" id="the_worker_id" name="the_worker_id" readonly value="<?php echo $workerDetails['worker_id'];?>">
				<br>
				<br>
				<label>Worker Type ID:</label>
				<input type="text" id="type" name="type" readonly value="<?php echo $workerDetails['worke_type_id'];?>">
				<select id="the_worker_type" name="the_worker_type" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT worker_type_id, worker_type_name FROM  worker_type ORDER by worker_type_name ASC";
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
				<label>First Name:</label>
				<input type="text" id="the_worker_fname" name="the_worker_fname" value="<?php echo $workerDetails['fname'];?>">
				<br>
				<br>
				<label>Last Name:</label>
				<input type="text" id="the_worker_lname" name="the_worker_lname" value="<?php echo $workerDetails['lname'];?>">
				<br>
				<br>
				<label>Email</label>
				<input type="text" id="the_worker_email" name="the_worker_email" value="<?php echo $workerDetails['email'];?>">
				<br>
				<br>
				<label>Prefix:</label>
				<input type="text" id="prefix2" name="prefix2" readonly value="<?php echo $workerDetails['prefix_id'];?>">
				<select id="the_worker_prefix" name="the_worker_prefix" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT prefix_id, prefix_value FROM  prefix";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['prefix_id']. "'>".$one['prefix_value']. "</option>";
								endforeach;
							?>
						</select>
				<br>
				<br>
				<label>Phone:</label>
				<input type="text" id="the_worker_phone" name="the_worker_phone" value="<?php echo $workerDetails['phone'];?>">
				<br>
				<br>
				<label>Address Line 1:</label>
				<input type="text" id="the_worker_address1" name="the_worker_address1" value="<?php echo $workerDetails['address1'];?>">
				<br>
				<br>
				<label>Address Line 2:</label>
				<input type="text" id="the_worker_address2" name="the_worker_address2" value="<?php echo $workerDetails['address2'];?>">
				<br>
				<br>
				<label>Address Line 3:</label>
				<input type="text" id="the_worker_address3" name="the_worker_address3" value="<?php echo $workerDetails['address3'];?>">
				<br>
				<br>
				<label>County:</label>
				<input type="text" id="county" name="county" readonly value="<?php echo $workerDetails['county_id'];?>">
				<select id="the_worker_county" name="the_worker_county" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT county_id, county_name FROM  county ORDER by county_name ASC";
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
				<label>Country:</label>
				<input type="text" id="country" name="country" readonly value="<?php echo $workerDetails['country_id'];?>">
				<select id="the_worker_country" name="the_worker_country" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT country_id, country_name FROM  country ORDER by country_name ASC";
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
				<label>Project Type:</label>
				<input type="text" id="project_type" name="project_type" readonly value="<?php echo $workerDetails['project_type_id'];?>">
				<select id="the_worker_project_type" name="the_worker_project_type" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT project_type_id, project_type_name FROM  project_type";
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
				<label>Project:</label>
				<input type="text" id="project" name="project" readonly value="<?php echo $workerDetails['project_id'];?>">
				<select id="the_worker_project" name="the_worker_project" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT project_id, project_name FROM  project";
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
				<label>Gender:</label>
				<input type="text" id="gender" name="gender" readonly value="<?php echo $workerDetails['gender_id'];?>">
				<select id="the_worker_gender" name="the_worker_gender" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT gender_id, gender_name FROM  gender";
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
				<label>Joining Date:</label>
				<input type="text" id="the_worker_joined" name="the_worker_joined" readonly value="<?php echo $workerDetails['sign_up_date'];?>">
				<br>
				<br>
				<label>Currency:</label>
				<input type="number" id="currency" name="currency" readonly value="<?php echo $workerDetails['currency_id'];?>">
				<select id="the_worker_currency" name="the_worker_currency" required>
							<option value = ""></option>
							<?php 
								$sql = "SELECT currency_id, curency_name FROM  currency";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['currency_id']. "'>".$one['curency_name']. "</option>";
								endforeach;
							?>
						</select>
				
				<br>
				<br>
				<label>Rate:</label>
				<input type="number" id="the_worker_rate" name="the_worker_rate" value="<?php echo $workerDetails['price_per_day'];?>">
				<br>
				<br>
				
				<input type="submit" value="Update Worker">
				
			</form>
		</main>
		<script></script>
	</body>
</html>
