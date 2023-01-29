<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>LIFE</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/simple.carousel.0.3.js"></script> 
<script type="text/javascript"> 
jQuery(document).ready(function() {
	// initialize carousel
	$("#carousel").simplecarousel({
		next: $('.next'),
		prev: $('.prev'),
		slidespeed: 700,
		auto: 5000,
		width: 1400,
		height: 1000
	});
});
</script> 
	<?php require_once("fragment/header.php"); ?>
    <?php require_once("fragment/navbar.php"); ?>
	
    <!-- main content of page -->
	<body>

        <ul id="carousel">
            <li><img src="yoga.png" alt="Yoga" /></li>
            <li><img src="meditate.png" alt="Meditate" /></li>
            <li><img src="eat.png" alt="Healthy Diet" /></li>
            <li><img src="mind.png" alt="Mindfullness" /></li>
           </ul>

        <p>&nbsp</p>
		<h1>THE LIFE WELLNESS PROGRAM</h1>
		<p>LIFE's Wellness curriculum encompasses Eastern and Western wellness, team and individual sports, the building of locomotive skills, aerobic conditioning, nutrition, and health education. Ross Wellness courses also seek to establish a balance between individual and collective achievement, with an emphasis on shared experience and teamwork. Our program includes daily contemplative practices to better assist the our students in being mindful about their bodies and the world around them. This emphasis on self-awareness and emotional intelligence transfers into our intermediate Wellness program, where students pursue more in-depth study via elective classes and interscholastic athletics.</p>
        <p>&nbsp</p>
</body>
</html>