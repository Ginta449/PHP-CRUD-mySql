<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
<?php
	require_once('include/connection.php');
	
	$baddata = 0;
	
	$username = $_POST['username'];
	$password = $_POST['psw'];
	
	for($i=0; $i<=100; $i++)
	{
		$password = hash('sha512', $password);
	}
	
	$query = "SELECT * FROM company WHERE company_email = :username AND company_password = :password";
	$statement = $db->prepare($query);
	$statement->bindValue(":username", $username);
	$statement->bindValue(":password", $password);
	$statement->execute();			
	$all_queries = $statement->fetchAll();			
	$statement->closeCursor();	
	
	$arrayLength = count($all_queries);
	
	if ($arrayLength != 1) 
	{
		$baddata = 1;
	} 
	else 
	{
		foreach ($all_queries as $one_query) : 
			$dbUserStatus = $one_query['user_status'];
		endforeach; 
		
		session_start();
		$_SESSION['companyEmail'] = $username;
		
		if ($dbUserStatus == 0) 
		{
			echo("<script>window.location.replace('admin.php');</script>");
			header("Location: admin.php?user=" . $_SESSION['company_email'] . "ADMINISTRATION");
			
		} 
		else if ($dbUserStatus == 1)
		{
			echo("<script>window.location.replace('profile.php');</script>");
			header("Location: profile.php?user=" . $_SESSION['company_email'] . "ORDINARY");
		}
		exit; 
	}
	
	if ($baddata == 1) {
		include ("login.php");
	}
	
?>