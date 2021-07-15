<?php 
			require('include/connection.php');
			
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$prefix = $_POST['phoneNumber'];
			$mobile = $_POST['mobile'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$address3 = $_POST['address3'];
			$county = $_POST['county'];
			$country = $_POST['country'];
			$workerType = $_POST['workerType'];
			$workerProjectType = $_POST['workerProjectType'];
			$workerProject = $_POST['project'];
			$rate = $_POST['rate'];
			$worker_img = $_POST['worker_img'];
			$worker_desc = $_POST['worker_desc'];
			$now = date('Y-m-d\TH:i:s.uP', time());
			
			
				$query = "INSERT INTO worker (fname, lname, email, gender_id, prefix_id, phone, address1, address2, address3, county_id, country_id, worke_type_id, project_type_id, project_id, price_per_day, worker_image, worker_description, sign_up_date) 
				VALUES (:firstName, :lastName, :email, :gender, :prefix, :mobile, :address1, :address2, :address3, :county, :country, :workerType, :workerProjectType, :workerProject, :rate, :worker_img, :worker_desc, :now)";

				$statement = $db->prepare($query);
				$statement->bindValue(':firstName', $firstName);
				$statement->bindValue(':lastName', $lastName);
				$statement->bindValue(':email', $email);
				$statement->bindValue(':gender', $gender);
				$statement->bindValue(':prefix', $prefix);
				$statement->bindValue(':mobile', $mobile);
				$statement->bindValue(':address1', $address1);
				$statement->bindValue(':address2', $address2);
				$statement->bindValue(':address3', $address3);
				$statement->bindValue(':county', $county);
				$statement->bindValue(':country', $country);
				$statement->bindValue(':workerType', $workerType);
				$statement->bindValue(':workerProjectType', $workerProjectType);
				$statement->bindValue(':workerProject', $workerProject);
				$statement->bindValue(':rate', $rate);
				$statement->bindValue(':worker_img', $worker_img);
				$statement->bindValue(':worker_desc', $worker_desc);
				$statement->bindValue(':now', $now);
				$statement->execute();
				$statement->closeCursor();	
					
					echo("<script>window.location.replace('admin.php');</script>");
			
		?>