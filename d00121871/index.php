<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="Starstruck is a movie, tv-show and radio production company that offer businesses with everything they need
											to create a project of their choice. This is not a real company and this website was done as CA requirement for by a computer science student"/>
										
		<meta name="keywords" content="Starstruck"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86"><meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
		
		<title>
			Starstruck_Home
		</title>
		
		<style >
			<?php include "css/index.css" ?>
			<?php include "css/common.css" ?>
		</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<link rel="icon" type="image/png" sizes="32x32" href="media/str.png"/>
		
			 	
	</head>
	
	<body>
		<main>	
			<video controls autoplay loop muted class="index_background_video" src="media/backgroundIndex.mp4"></video>
			<?php include "include/navigation.php" ?>
			<?php include "include/connection.php" ?>
			
			
			<h1 class="starstruck">Star&#10026;Struck</h1>
		<article class="index">
			
			<h2>
				Starstruck is an award winning company that offers business, human and logistical solutions to television,
				radio and film companies. Starstruck can supply companies with everything they need to create
				a project of their choice.
			</h2>
			<img class = "indexCredentils" src="media/indexCredentials.jpg"  alt="image of movie productuion company logos">
			
			<h2>
				Starstruck has over 100 years of experience and has worked with a wide range of Video Production Companies.
				We do it all! We provide producers, actors, technicians, transport and equipment as well as editing services.
			</h2>
		</article>
		<?php include "include/footer.php" ?>	
		<script src="javascript/common.js"></script>
		
		</main>
	</body>
</html>