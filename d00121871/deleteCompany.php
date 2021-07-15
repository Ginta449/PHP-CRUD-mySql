<?php
	require_once('include/connection.php');
	
	$deleteCompany = $_POST['pickDeleteCompany'];
	
	$query = "DELETE FROM company WHERE company_id = :deleteCompany";
	
	$statement = $db->prepare($query);
	
	$statement->bindValue(":deleteCompany", $deleteCompany);
	
	$statement->execute();
	$statement->closeCursor();
	
	header("Location: admin.php");
?>