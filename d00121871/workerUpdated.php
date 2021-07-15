<?php
	require_once ('include/connection.php');
	
	$the_worker_id = $_POST['the_worker_id'];
	$the_worker_type = $_POST['the_worker_type'];
	$the_worker_fname = $_POST['the_worker_fname'];
	$the_worker_lname = $_POST['the_worker_lname'];
	$the_worker_email = $_POST['the_worker_email'];
	$the_worker_prefix = $_POST['the_worker_prefix'];
	$the_worker_phone = $_POST['the_worker_phone'];
	$the_worker_address1 = $_POST['the_worker_address1'];
	$the_worker_address2 = $_POST['the_worker_address2'];
	$the_worker_address3 = $_POST['the_worker_address3'];
	$the_worker_county = $_POST['the_worker_county'];
	$the_worker_country = $_POST['the_worker_country'];
	$the_worker_project_type = $_POST['the_worker_project_type'];
	$the_worker_project = $_POST['the_worker_project'];
	$the_worker_gender = $_POST['the_worker_gender'];
	$the_worker_joined = $_POST['the_worker_joined'];
	$the_worker_currency = $_POST['the_worker_currency'];
	$the_worker_rate = $_POST['the_worker_rate'];
	
	
	
	$query = "UPDATE worker SET
		`		worker_id=:the_worker_id,
				worke_type_id=:the_worker_type,
				fname=:the_worker_fname,
				lname=:the_worker_lname,
				email=:the_worker_email,
				prefix_id=:the_worker_prefix,
				phone=:the_worker_phone,
				address1=:the_worker_address1,
				address2=:the_worker_address2,
				address3=:the_worker_address3,
				county_id=:the_worker_county,
				country_id=:the_worker_country,
				project_type_id=:the_worker_project_type,
				project_id=:the_worker_project,
				gender_id=:the_worker_gender,
				sign_up_date=:the_worker_joined,
				currency_id=:the_worker_currency,
				price_per_day=:the_worker_rate
			WHERE worker_id = :the_worker_id";
		
	$statement = $db->prepare($query);
	
	$statement->bindValue(":the_worker_id", $the_worker_id);
	$statement->bindValue(":the_worker_type", $the_worker_type);
	$statement->bindValue(":the_worker_fname", $the_worker_fname);
	$statement->bindValue(":the_worker_lname", $the_worker_lname);
	$statement->bindValue(":the_worker_email", $the_worker_email);
	$statement->bindValue(":the_worker_prefix", $the_worker_prefix);
	$statement->bindValue(":the_worker_phone", $the_worker_phone);
	$statement->bindValue(":the_worker_address1", $the_worker_address1);
	$statement->bindValue(":the_worker_address2", $the_worker_address2);
	$statement->bindValue(":the_worker_address3", $the_worker_address3);
	$statement->bindValue(":the_worker_county", $the_worker_county);
	$statement->bindValue(":the_worker_country", $the_worker_country);
	$statement->bindValue(":the_worker_project_type", $the_worker_project_type);
	$statement->bindValue(":the_worker_project", $the_worker_project);
	$statement->bindValue(":the_worker_gender", $the_worker_gender);
	$statement->bindValue(":the_worker_joined", $the_worker_joined);
	$statement->bindValue(":the_worker_currency", $the_worker_currency);
	$statement->bindValue(":the_worker_rate", $the_worker_rate);
	
	
	$statement->execute();
	$statement->closeCursor();
	
	header ("Location: admin.php");
?>