<?php
	include "include/connection.php";
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		<title>
			Administrator
		</title>
		
		<style>
			<?php include "css/admin.css" ?>
		</style>	
	</head>
	
	<body>
		<main>
			<article>
			<a href = "logout.php"><button class="logout" type="button">Log Out</button></a>
			<h1>Administrator Starstruck Ltd.</h1>
			<h2> COMPANY </h2>
				
				<?php 
					$sql2 = "SELECT * FROM company";
					$stm = $db->prepare($sql2);
					$stm -> execute();
					$all2 = $stm->fetchAll();
					$stm->closeCursor();
					
					
					echo "<table id=companyDetails border=1>
							<tbody>
								<tr>
									<th>Company ID:</th>
									<th>Company Name: </th>
									<th>Email: </th>
									<th>Phone: </th>
									<th>Address: </th>
									<th>Country: </th>
									<th>County: </th>
									<th>Project Type: </th>
									<th>Status: </th>
									<th>Joining Date: </th>
								</tr>";
					
					foreach($all2 as $one2):
						echo "<tr>
								<td>".$one2['company_id']. "</td>
								<td>".$one2['company_name']."</td>
								<td>".$one2['company_email']. "</td>
								<td>".$one2['prefix_id']. " " .$one2['phone']. "</td>
								<td>".$one2['address1']. " " .$one2['address2']. " " .$one2['address3']."</td>
								<td>".$one2['country_id']. "</td>
								<td>".$one2['county_id']. "</td>
								<td>".$one2['project_type_id']. "</td>
								<td>".$one2['user_status']. "</td>
								<td>".$one2['joined']. "</td>
							</tr>";
					endforeach;
					echo "</tbody></table>";
					?>
					<br>
					<br>
					<table>
						<tbody>
							<tr>
								<th>
									<form id="update" name="update" onsubmit = "return validateForm()" action="updateCompany.php" method="post">
										<label>To Update Company Details Please Select Company:</label>
											<select id="pickCompany" name="pickCompany" required>
												<option value = ""></option>
													<?php 
														$sql = "SELECT company_id, company_name FROM company ORDER by company_name ASC";
														$stm = $db->prepare($sql);
														$stm -> execute();
														$all = $stm->fetchAll();
														$stm->closeCursor();
								
														foreach($all as $one):
															echo "<option value='".$one['company_id']. "'>".$one['company_name']. "</option>";
														endforeach;
													?>
											</select>
										<br>
										<br>
									<input type="reset" value="Reset">
									<input type="submit" value="Update Company">
									<button id="insertCompany" type="button" onclick="window.open('signUp.php')">Insert Company</button>
									<br>
									<br>
								</form>
							</th>
							<th>
					
								<form id="delete" name="delete" action="deleteCompany.php" method="post">
									<label>Remove Selected Company:</label>
										<select id="pickDeleteCompany" name="pickDeleteCompany" required>
											<option value = ""></option>
												<?php 
													$sql = "SELECT company_id, company_name FROM company ORDER by company_name ASC";
													$stm = $db->prepare($sql);
													$stm -> execute();
													$all = $stm->fetchAll();
													$stm->closeCursor();
								
													foreach($all as $one):
													echo "<option value='".$one['company_id']. "'>".$one['company_name']. "</option>";
													endforeach;
												?>
										</select>
										<br>
										<br>
										<input type="reset" value="Reset">
										<input type="submit" value="Delete Company">
										<br>
										<br>
								</form>
							</th>
						</tr>
					</tbody>
				</table>
				
					<h2> WORKERS </h2>
						<?php 
					$sql3 = "SELECT * FROM worker";
					$stm = $db->prepare($sql3);
					$stm -> execute();
					$all3 = $stm->fetchAll();
					$stm->closeCursor();
					
					
					echo "<table id=workerDetails border=1>
							<tbody>
								<tr>
									<th>Worker ID:</th>
									<th>Name: </th>
									<th>Surname: </th>
									<th>Email: </th>
									<th>Phone: </th>
									<th>Address: </th>
									<th>Country: </th>
									<th>County: </th>
									<th>Gender: </th>
									<th>Project: </th>
									<th>Rate: </th>
									<th>Joining Date: </th>
								</tr>";
					
					foreach($all3 as $one3):
						echo "<tr>
								<td>".$one3['worker_id']. "</td>
								<td>".$one3['fname']."</td>
								<td>".$one3['lname']."</td>
								<td>".$one3['email']. "</td>
								<td>".$one3['prefix_id']. " " .$one3['phone']. "</td>
								<td>".$one3['address1']. " " .$one3['address2']. " " .$one3['address3']."</td>
								<td>".$one3['country_id']. "</td>
								<td>".$one3['county_id']. "</td>
								<td>".$one3['gender_id']."</td>
								<td>".$one3['project_type_id']. "</td>
								<td> ‎€".$one3['price_per_day']. "</td>
								<td>".$one3['sign_up_date']. "</td>
							</tr>";
					endforeach;
					echo "</tbody></table>";
					?>
					<br>
					<br>
				<table>
					<tbody>
						<tr>
							<th>	
								<form id="update" name="update" action="updateWorker.php" method="post">
									<label>To Update Worker Details Please Select Worker:</label>
										<select id="pickWorker" name="pickWorker" required>
											<option value = ""></option>
												<?php 
													$sql = "SELECT worker_id, fname, lname FROM worker ORDER by lname ASC";
													$stm = $db->prepare($sql);
													$stm -> execute();
													$all = $stm->fetchAll();
													$stm->closeCursor();
								
													foreach($all as $one):
														echo "<option value='".$one['worker_id']. "'>".$one['lname']. " " .$one['fname']."</option>";
													endforeach;
												?>
										</select>
										<br>
										<br>
									<input type="reset" value="Reset">
									<input type="submit" value="Update Worker">
									<button id="insertWorker" type="button" onclick="window.open('insertWorker.php')">Insert Worker</button>
									<br>
									<br>
								</form>
							</th>
							<th>
								<form id="delete" name="delete" action="deleteWorker.php" method="post">
									<label>Remove Selected Worker:</label>
										<select id="pickDeleteWorker" name="pickDeleteWorker" required>
											<option value = ""></option>
												<?php 
													$sql = "SELECT worker_id, fname, lname FROM worker ORDER by lname ASC";
													$stm = $db->prepare($sql);
													$stm -> execute();
													$all = $stm->fetchAll();
													$stm->closeCursor();
								
													foreach($all as $one):
														echo "<option value='".$one['worker_id']. "'>".$one['lname']. " " .$one['fname']. "</option>";
													endforeach;
												?>
										</select>
										<br>
										<br>
									<input type="reset" value="Reset">
									<input type="submit" value="Delete Worker">
								</form>
							</th>
						</tr>
					</tbody>
				</table>
				<br>
				<br>
					<h2> EQUIPMENT </h2>
					<?php 
					$sql4 = "SELECT * FROM equipment";
					$stm = $db->prepare($sql4);
					$stm -> execute();
					$all4 = $stm->fetchAll();
					$stm->closeCursor();
					
					
					echo "<table id=equipmentDetails border=1>
							<tbody>
								<tr>
									<th>Equipment ID:</th>
									<th>Type: </th>
									<th>Manufacturer: </th>
									<th>Model: </th>
									<th>Description: </th>
									<th>Price: </th>
									<th>Image: </th>
									<th>Date: </th>
								</tr>";
					
					foreach($all4 as $one4):
						echo "<tr>
								<td>".$one4['equipment_id']. "</td>
								<td>".$one4['equipment_type_id']."</td>
								<td>".$one4['manufacturer_id']."</td>
								<td>".$one4['model']. "</td>
								<td>".$one4['equipment_description']."</td>
								<td>".$one4['equipment_cost']. "</td>
								<td><img src = ".$one4['equipment_img']. " alt=movie></td>
								<td>".$one4['purchase_date']."</td>
							</tr>";
					endforeach;
					echo "</tbody></table>";
					?>
					<br>
					<br>
				<table>
					<tbody>
						<tr>
							<th>
								<form id="update" name="update" action="updateEquipment.php" method="post">
									<label>To Update Equipment Details Please Select Equipment:</label>
										<select id="pickEquipment" name="pickEquipment" required>
											<option value = ""></option>
												<?php 
													$sql = "SELECT equipment_id, equipment_name FROM equipment";
													$stm = $db->prepare($sql);
													$stm -> execute();
													$all = $stm->fetchAll();
													$stm->closeCursor();
								
													foreach($all as $one):
														echo "<option value='".$one['equipment_id']. "'>".$one['equipment_name']."</option>";
													endforeach;
												?>
										</select>
										<br>
										<br>
											<input type="reset" value="Reset">
											<input type="submit" value="Update Equipment">
											<button id="insertEquipment" type="button" onclick="window.open('insertEquipment.php')">Insert Equipment</button>
										<br>
										<br>
								</form>
							</th>
							<th>
								<form id="delete" name="delete" action="deleteEquipment.php" method="post">
									<label>Select to DELETE Equipment:</label>
										<select id="deleteEquipment" name="deleteEquipment" required>
											<option value = ""></option>
												<?php 
													$sql = "SELECT equipment_id, equipment_name FROM equipment";
													$stm = $db->prepare($sql);
													$stm -> execute();
													$all = $stm->fetchAll();
													$stm->closeCursor();
								
													foreach($all as $one):
														echo "<option value='".$one['equipment_id']. "'>".$one['equipment_name']."</option>";
													endforeach;
												?>
										</select>
										<br>
										<br>
											<input type="reset" value="Reset">
											<input type="submit" value="DELETE Equipment">
								</form>
							</th>
						</tr>
					</tbody>
				</table>
				<h1>User Queries</h1>
				<?php 
					$sql2 = "SELECT * FROM query";
					$stm = $db->prepare($sql2);
					$stm -> execute();
					$all2 = $stm->fetchAll();
					$stm->closeCursor();
					
					
					echo "<table id=queryDetails border=1>
							<tbody>
								<tr>
									<th>Query ID:</th>
									<th>User Name: </th>
									<th>Email: </th>
									<th>Comment: </th>
									<th>Date: </th>
								</tr>";
					
					foreach($all2 as $one2):
						echo "<tr>
								<td>".$one2['query_id']. "</td>
								<td>".$one2['name']."</td>
								<td>".$one2['email']. "</td>
								<td>".$one2['query_desc']. "</td>
								<td>".$one2['query_date']. "</td>
							</tr>";
					endforeach;
					echo "</tbody></table>";
					?>
					<br>
					<br>
					<form id="delete" name="delete" action="deleteQuery.php" method="post">
									<label>Select to DELETE Query:</label>
										<select id="deleteQuery" name="deleteQuery" required>
											<option value = ""></option>
												<?php 
													$sql = "SELECT query_id, email FROM query";
													$stm = $db->prepare($sql);
													$stm -> execute();
													$all = $stm->fetchAll();
													$stm->closeCursor();
								
													foreach($all as $one):
														echo "<option value='".$one['query_id']. "'>".$one['email']."</option>";
													endforeach;
												?>
										</select>
										<br>
										<br>
											<input type="reset" value="Reset">
											<input type="submit" value="DELETE Query">
								</form>
			</article>
		</main>
	</body>
</html>