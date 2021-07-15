<?php
	require_once ('include/connection.php');
	
	$the_company_id = $_POST['the_company_id'];
	$the_company_name = $_POST['the_company_name'];
	$the_company_email = $_POST['the_company_email'];
	$the_company_prefix = $_POST['the_company_prefix'];
	$the_company_phone = $_POST['the_company_phone'];
	$the_company_address1 = $_POST['the_company_address1'];
	$the_company_address2 = $_POST['the_company_address2'];
	$the_company_address3 = $_POST['the_company_address3'];
	$the_company_county = $_POST['the_company_county'];
	$the_company_country = $_POST['the_company_country'];
	$the_company_project_type = $_POST['the_company_project_type'];
	$the_company_password = $_POST['the_company_password'];
	$the_company_status = $_POST['the_company_status'];
	$the_company_joined = $_POST['the_company_joined'];
	
	$query = "UPDATE company SET
		`		company_id=:the_company_id,
				company_name=:the_company_name,
				company_email=:the_company_email,
				prefix_id=:the_company_prefix,
				phone=:the_company_phone,
				address1=:the_company_address1,
				address2=:the_company_address2,
				address3=:the_company_address3,
				county_id=:the_company_county,
				country_id=:the_company_country,
				project_type_id=:the_company_project_type,
				company_password=:the_company_password,
				user_status=:the_company_status,
				joined=:the_company_joined
			WHERE company_id = :the_company_id";
		
	$statement = $db->prepare($query);
	
	$statement->bindValue(":the_company_id", $the_company_id);
	$statement->bindValue(":the_company_name", $the_company_name);
	$statement->bindValue(":the_company_email", $the_company_email);
	$statement->bindValue(":the_company_prefix", $the_company_prefix);
	$statement->bindValue(":the_company_phone", $the_company_phone);
	$statement->bindValue(":the_company_address1", $the_company_address1);
	$statement->bindValue(":the_company_address2", $the_company_address2);
	$statement->bindValue(":the_company_address3", $the_company_address3);
	$statement->bindValue(":the_company_county", $the_company_county);
	$statement->bindValue(":the_company_country", $the_company_country);
	$statement->bindValue(":the_company_project_type", $the_company_project_type);
	$statement->bindValue(":the_company_password", $the_company_password);
	$statement->bindValue(":the_company_status", $the_company_status);
	$statement->bindValue(":the_company_joined", $the_company_joined);
	
	$statement->execute();
	$statement->closeCursor();
	
	header ("Location: admin.php");
?>