<?php 
			require('include/connection.php');
			
			$queryName = $_POST['queryName'];
			$queryEmail = $_POST['queryEmail'];
			$comment = $_POST['comment'];
			$now = date('Y-m-d\TH:i:s.uP', time());
			
			
				$query = "INSERT INTO query (name, email, query_desc, query_date) 
				VALUES (:queryName, :queryEmail, :comment, :now)";

				$statement = $db->prepare($query);
				$statement->bindValue(':queryName', $queryName);
				$statement->bindValue(':queryEmail', $queryEmail);
				$statement->bindValue(':comment', $comment);
				$statement->bindValue(':now', $now);
				$statement->execute();
				$statement->closeCursor();	
					
					echo("<script>window.location.replace('index.php');</script>");
			
		?>