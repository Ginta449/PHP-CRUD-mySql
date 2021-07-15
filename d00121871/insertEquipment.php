<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
			Insert Equipment
		</title>
		
		<style>
			<?php include "css/updateCommon.css" ?>
		</style>	
	</head>
	
	<body>
		<main>
			<?php include "include/connection.php" ?>
			
			<form id="insertEquipment" name="insertEquipment" action="equipmentInserted.php" method="post">
			<button id="exit" type="button" onclick="window.open('admin.php')">Exit</button>
						<label>Equipment Name:*</label>			
							<input id = "equipmentName" name= "equipmentName" required type="text" title="Enter equipment name.">
						<br>
						<br>
					<label>Equipment Type:*</label>
						<select id = "equipmentType" name="equipmentType" required>
							<option value = "Select Equipment Type"></option>
							<?php 
								$sql = "SELECT equipment_type_id, equipment_type_name FROM equipment_type";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['equipment_type_id']. "'>".$one['equipment_type_name']. "</option>";
								endforeach;
					?>
					</select>
			<br>
			<br>
					<label>Manufacturer:*</label>			
						<select id = "manufacturer" name="manufacturer" required>
							<option value = "Select Manufacturer"></option>
							<?php 
								$sql = "SELECT manufacturer_id, manufacturer_name FROM manufacturer";
								$stm = $db->prepare($sql);
								$stm -> execute();
								$all = $stm->fetchAll();
								$stm->closeCursor();
								
								foreach($all as $one):
									echo "<option value='".$one['manufacturer_id']. "'>".$one['manufacturer_name']. "</option>";
								endforeach;
							?>
						</select>
						<br>
						<br>
						<label>Model:</label>
						<input id ="model" name = "the_model" type = "text" title= "Please enter equipment model if applicabale." >
						<br>
						<br>
							<label>Equipment Description:</label>			
							<input id = "description" name= "description" required type="text" title="Enter equipment description.">
						<br>
						<br>
						<label>Currency:*</label>
							<select id = "currency" name="currency" required>
								<option value = "Select Currency"></option>
								<?php 
									$sql = "SELECT currency_id, curency_name FROM currency";
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
							<label>Equipment Cost:*</label>			
							<input id = "cost" name= "cost"  min="1" type="number" required>
						<br>
						<br>
							<label>Equipment Image Name:</label>			
							<input id = "imageName" name= "imageName"  type="text">
						<br>
						<br>
						<br>
						<br>
						<input type="reset" value="Reset">
						<input type="submit" value="Insert Equipment">
				</form>
		</main>
	
		<script></script>
	</body>
</html>