<?php
	require_once('include/connection.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		
		<title>
			Profile
		</title>
		
		<style>
			<?php include "css/ordinary.css" ?>
		</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<main>
		<a href = "logout.php"><button class="logout" type="button">Log Out</button></a>
		<a href = "profile.php"><button class="equip" type="button">Click Here to view our range of Workers</button></a>
		<h1>Our Equipment</h1>
			<?php 
					$sql4 = "SELECT * FROM equipment";
					$stm = $db->prepare($sql4);
					$stm -> execute();
					$all4 = $stm->fetchAll();
					$stm->closeCursor();
					
					echo "<table id=workerDetails>";
					
					foreach($all4 as $one4):
						echo "<tr>
								<td><img src = ".$one4['equipment_img']. " width = 333 height = 300 alt= movie></td>
								<td><p>" .$one4['equipment_description']. "</p></td>
							</tr>";
					endforeach;
					echo "</tbody></table>";
				?>
		</main>
	</body>
</html>