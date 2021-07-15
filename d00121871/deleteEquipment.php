<?php
	require_once('include/connection.php');
	
	$deleteEquipment = $_POST['deleteEquipment'];
	
	$query = "DELETE FROM equipment WHERE equipment_id = :deleteEquipment";
	
	$statement = $db->prepare($query);
	
	$statement->bindValue(":deleteEquipment", $deleteEquipment);
	
	$statement->execute();
	$statement->closeCursor();
	
	header("Location: admin.php");
?>