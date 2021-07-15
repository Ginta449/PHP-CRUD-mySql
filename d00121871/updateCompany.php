
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
	
	<body>
		<main>
			<h1> Update Company Details</h1>
			<?php
				require_once('include/connection.php');
				
				$updateCompany = $_POST['pickCompany'];
				$query = "SELECT * FROM company WHERE company_id = :updateCompany";
				$statement = $db->prepare($query);
				$statement->bindValue(":updateCompany", $updateCompany);
				$statement->execute();
				$companyDetails = $statement->fetch();
				$statement->closeCursor();
			?>
			
			<form id="companyUpdated" name="companyUpdated" action="companyUpdated.php" method="post">
			<button id="exit" type="button" onclick="window.open('admin.php')">Exit</button>
				<label>Company ID:</label>
				<input type="text" id="the_company_id" name="the_company_id" readonly value="<?php echo $companyDetails['company_id'];?>">
				<br>
				<br>
				<label>Company Name:</label>
				<input type="text" id="the_company_name" name="the_company_name" value="<?php echo $companyDetails['company_name'];?>">
				<br>
				<br>
				<label>Company Email:</label>
				<input type="text" id="the_company_email" name="the_company_email" value="<?php echo $companyDetails['company_email'];?>">
				<br>
				<br>
				<label>Prefix</label>
				<input type="text" id="prf" name="prf" value="<?php echo $companyDetails['prefix_id'];?>">
				<select id = "the_company_prefix" name="the_company_prefix" required>
					<option value=""></option>
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
				<br>
				<br>
				<label>Phone</label>
				<input type="text" id="the_company_phone" name="the_company_phone" value="<?php echo $companyDetails['phone'];?>">
				<br>
				<br>
				<label>Address Line 1:</label>
				<input type="text" id="the_company_address1" name="the_company_address1" value="<?php echo $companyDetails['address1'];?>">
				<br>
				<br>
				<label>Address Line 2:</label>
				<input type="text" id="the_company_address2" name="the_company_address2" value="<?php echo $companyDetails['address2'];?>">
				<br>
				<br>
				<label>Address Line 3:</label>
				<input type="text" id="the_company_address3" name="the_company_address3" value="<?php echo $companyDetails['address3'];?>">
				<br>
				<br>
				
				<label>County:</label>
				<input type="text" id="county" name="county" value="<?php echo $companyDetails['county_id'];?>">
				<select id = "the_company_county" name="the_company_county" required>
					<option value=""></option>
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
				<label>Country:</label>
				<input type="text" id="country" name="country" value="<?php echo $companyDetails['country_id'];?>">
				<select id = "the_company_country" name="the_company_country" required>
					<option value=""></option>
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
				<label>Project Type:</label>
				<input type="text" id="project" name="project" value="<?php echo $companyDetails['project_type_id'];?>">
				<select id = "the_company_project_type" name="the_company_project_type" required>
					<option value=""></option>
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
				<label>Password:</label>
				<input type="text" id="the_company_password" name="the_company_password" max readonly value="<?php echo $companyDetails['company_password'];?>">
				<br>
				<br>
				<label>Company Status:</label>
				<input type="number" id="the_company_status" name="the_company_status" max = "1" value="<?php echo $companyDetails['user_status'];?>">
				<br>
				<br>
				<label>Joining Date:</label>
				<input type="text" id="the_company_joined" name="the_company_joined" readonly value="<?php echo $companyDetails['joined'];?>">
				<br>
				<br>
				<input type="submit" value="Update Company">
				
			</form>
		</main>
	
		<script></script>
	</body>
</html>