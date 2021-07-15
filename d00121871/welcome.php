<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		
		<title>
				You have successfully signed up!
		</title>
		
		<style rel="stylesheet">
		</style>	
	</head>
	
	<body>
	<main>
		<?php 
			require('include/connection.php');
			
			$baddata = 0;
			
			$companyName = $_POST['companyName'];
			$signUpEmail = $_POST['companyEmail'];
			$companyPrefix = $_POST['companyPhoneNumber'];
			$mobile = $_POST['mobile'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$address3 = $_POST['address3'];
			$country = $_POST['country'];
			$county = $_POST['county'];
			$projectType = $_POST['companyProject'];
			$signUpPassword = $_POST['psw'];
			echo "<script>alert('Password='" .$signUpPassword. ");</script>";
			
			for($i=0; $i<=100; $i++)
			{
				$signUpPassword = hash('sha512', $signUpPassword);
			}
			echo "<script>alert('Hashed password = '" .$signUpPassword. ");</script>";
			
			$query1 = "SELECT * FROM company WHERE company_email = :signUpEmail AND company_password = :signUpPassword";
			$statement = $db->prepare($query1);
			$statement->bindValue(":signUpEmail", $signUpEmail);
			$statement->bindValue(":signUpPassword", $signUpPassword);
			$statement->execute();			
			$all_queries1 = $statement->fetchAll();			
			$statement->closeCursor();
			
			$arrayLength = count($all_queries1);
			echo ("<script>alert('number of records: " . $arrayLength . ".');</script>");
			
			if($arrayLength !=0)
			{
				$baddata = 1;
			}
			else
			{
				$query2 = "INSERT INTO company (company_name, company_email, prefix_id, phone, address1, address2, address3, county_id, country_id, project_type_id, company_password, user_status)
				VALUES (:companyName, :signUpEmail, :companyPrefix, :mobile, :address1, :address2, :address3, :county, :county, :projectType, :signUpPassword, '1')";

				$statement = $db->prepare($query2);
				$statement->bindValue(':companyName', $companyName);
				$statement->bindValue(':signUpEmail', $signUpEmail);
				$statement->bindValue(':companyPrefix', $companyPrefix);
				$statement->bindValue(':mobile', $mobile);
				$statement->bindValue(':address1', $address1);
				$statement->bindValue(':address2', $address2);
				$statement->bindValue(':address3', $address3);
				$statement->bindValue(':country', $country);
				$statement->bindValue(':county', $county);
				$statement->bindValue(':projectType', $projectType);
				$statement->bindValue(":signUpPassword", $signUpPassword);
				$statement->execute();
				$statement->closeCursor();	
					
					echo("<script>window.location.replace('login.php');</script>");
			}
			
			if ($baddata == 1) 
			{
				include ("signUp.php");
			}
		?>
	</main>
	
		<script></script>
	</body>
</html>