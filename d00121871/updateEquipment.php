<?php
	require_once('include/connection.php');
				
	$updateEquipment = $_POST['pickEquipment'];
?>
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
		<h1> Update Equipment</h1>
			<?php
				
				$query = "SELECT * FROM equipment WHERE equipment_id = :updateEquipment";
				$statement = $db->prepare($query);
				$statement->bindValue(":updateEquipment", $updateEquipment);
				$statement->execute();
				$equipmentDetails = $statement->fetch();
				$statement->closeCursor();
			?>
			
			<form id="equipmentUpdated" name="equipmentUpdated" action="equipmentUpdated.php" method="post">
			<button id="exit" type="button" onclick="window.open('admin.php')">Exit</button>
				<label>Equipment ID:</label>
				<input type="text" id="the_equipment_id" name="the_equipment_id" readonly value="<?php echo $equipmentDetails['equipment_id'];?>">
				<br>
				<br>
				<label>Select Equipment Type:</label>
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
				<label>Select Manufacturer:</label>
				<select id = "equipmentManufacturer" name="equipmentManufacturer" required>
							<option value = "Select Equipment Manufacturer"></option>
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
				<input type="text" id="the_equipment_model" name="the_equipment_model" value="<?php echo $equipmentDetails['model'];?>">
				<br>
				<br>
				<label>Equipment Name:</label>
				<input type="text" id="the_equipment_name" name="the_equipment_name" value="<?php echo $equipmentDetails['equipment_name'];?>">
				<br>
				<br>
				<label>Equipment Description:</label>
				<input type="text" id="the_descritpion" name="the_descritpion" value="<?php echo $equipmentDetails['equipment_description'];?>">
				<br>
				<br>
				<label>Currency:</label>
				<label>Select Currency:</label>
				<select id = "equipmentCurrency" name="equipmentCurrency" required>
							<option value = "Select Equipment Currency"></option>
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
				<label>Equipment Cost:</label>
				<input type="number" id="the_equipment_cost" name="the_equipment_cost" value="<?php echo $equipmentDetails['equipment_cost'];?>">
				<br>
				<br>
				<label>Image Name:</label>
				<input type="text" id="the_equipment_image" name="the_equipment_image" value="<?php echo $equipmentDetails['equipment_img'];?>">
				<br>
				<br>
				<input type="submit" value="Update Equipment">
				
			</form>
		</main>
	
		<script></script>
	</body>
</html>
