<?php
	require_once('include/connection.php');
	
	$deleteQuery = $_POST['deleteQuery'];
	
	$query = "DELETE FROM query WHERE query_id = :deleteQuery";
	
	$statement = $db->prepare($query);
	
	$statement->bindValue(":deleteQuery", $deleteQuery);
	
	$statement->execute();
	$statement->closeCursor();
	
	header("Location: admin.php");
?>