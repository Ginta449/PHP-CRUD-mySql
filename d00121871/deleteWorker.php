<?php
	require_once('include/connection.php');
	
	$deleteWorker = $_POST['pickDeleteWorker'];
	
	$query = "DELETE FROM worker WHERE worker_id = :deleteWorker";
	
	$statement = $db->prepare($query);
	
	$statement->bindValue(":deleteWorker", $deleteWorker);
	
	$statement->execute();
	$statement->closeCursor();
	
	header("Location: admin.php");
?>