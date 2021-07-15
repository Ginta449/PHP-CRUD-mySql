<?php 
			require('include/connection.php');
			
			
			$equipmentType = $_POST['equipmentType'];
			$manufacturer = $_POST['manufacturer'];
			$the_model = $_POST['the_model'];
			$description = $_POST['description'];
			$currency = $_POST['currency'];
			$cost = $_POST['cost'];
			$imageName = $_POST['imageName'];
			$now = date('Y-m-d\TH:i:s.uP', time());
			$equipmentName = $_POST['equipmentName'];
			
			
				$query = "INSERT INTO equipment (equipment_type_id, manufacturer_id, model, equipment_description, currency_id, equipment_cost, equipment_img, purchase_date, equipment_name) 
				VALUES (:equipmentType, :manufacturer, :the_model, :description, :currency, :cost, :imageName, :now, :equipmentName)";

				$statement = $db->prepare($query);
				$statement->bindValue(':equipmentType', $equipmentType);
				$statement->bindValue(':manufacturer', $manufacturer);
				$statement->bindValue(':the_model', $the_model);
				$statement->bindValue(':description', $description);
				$statement->bindValue(':currency', $currency);
				$statement->bindValue(':cost', $cost);
				$statement->bindValue(':imageName', $imageName);
				$statement->bindValue(':now', $now);
				$statement->bindValue(':equipmentName', $equipmentName);
				$statement->execute();
				$statement->closeCursor();	
					
					echo("<script>window.location.replace('admin.php');</script>");
			
		?>