<?php 			
				$dsn = 'mysql:host=localhost;dbname=d00121871_dbwi';
				$username = 'root';
				$password = '';
				
				try
				{
					$db = new PDO($dsn, $username, $password);
				}catch(PDOException $e)
				{
					$error = $e->getMessage();
					echo "<h1>Database Problem: ".$error."</h1>";
					exit();
				}
				
?>