<?php
	require_once ('include/connection.php');
	
	$the_equipment_id = $_POST['the_equipment_id'];
	$equipmentType = $_POST['equipmentType'];
	$equipmentManufacturer = $_POST['equipmentManufacturer'];
	$the_equipment_model = $_POST['the_equipment_model'];
	$the_equipment_name = $_POST['the_equipment_name'];
	$the_descritpion = $_POST['the_descritpion'];
	$equipmentCurrency = $_POST['equipmentCurrency'];
	$the_equipment_cost = $_POST['the_equipment_cost'];
	$the_equipment_image = $_POST['the_equipment_image'];
	
	$query = "UPDATE equipment SET
		`		equipment_id=:the_equipment_id,
				company_type_id=:equipmentType,
				manufacturer_id=:equipmentManufacturer,
				model=:the_equipment_model,
				equipment_name=:the_equipment_name,
				equipment_description=:the_descritpion,
				currency_id=:equipmentCurrency,
				equipment_cost=:the_equipment_cost,
				equipment_img=:the_equipment_image
			WHERE equipment_id = :the_equipment_id";
		
	$statement = $db->prepare($query);
	
	$statement->bindValue(":the_equipment_id", $the_equipment_id);
	$statement->bindValue(":equipmentType", $equipmentType);
	$statement->bindValue(":equipmentManufacturer", $equipmentManufacturer);
	$statement->bindValue(":the_equipment_model", $the_equipment_model);
	$statement->bindValue(":the_equipment_name", $the_equipment_name);
	$statement->bindValue(":the_descritpion", $the_descritpion);
	$statement->bindValue(":equipmentCurrency", $equipmentCurrency);
	$statement->bindValue(":the_equipment_cost", $the_equipment_cost);
	$statement->bindValue(":the_equipment_image", $the_equipment_image);
	
	
	$statement->execute();
	$statement->closeCursor();
	
	header ("Location: admin.php");
?>