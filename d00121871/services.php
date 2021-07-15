<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		
		<title>
			StarStruck Services
		</title>
		
		<style>
			<?php include "css/common.css" ?>
			<?php include "css/services.css" ?>
		</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
	</head>
	<body>
		<main>
			<?php include "include/navigation.php" ?>
			<?php include "include/connection.php" ?>
			<article class="servicesPage">
				<?php
					$sql = "SELECT * FROM project_type";
					$stm = $db->prepare($sql);
					$stm -> execute();
					$all = $stm->fetchAll();
					$stm->closeCursor();
			foreach($all as $one):
				?>
				<table>
					<tbody>
						<tr>
							<th>
								<a href = "signUp.php"><?php echo "<div> Create a ".$one['project_type_name']. "</div>"; ?></a><br><br>
							</th>
						</tr>
						<tr>
							<th>
								<?php echo "<video controls autoplay loop muted src='".$one['project_type_video_name']. "'></video>"; ?><br><br>
							</th>
						</tr>
					</tbody>
				</table>
			<?php endforeach;?>
			</article>
		</main>
	
		<?php include "include/footer.php" ?>	
		<script src="javascript/common.js"></script>
	</body>
</html>