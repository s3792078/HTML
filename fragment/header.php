<html>
    <head>
        <div class="logo">
            <a href="index.html"><img src="logo.png" alt="LIFE"></a>
            </div>
        <link rel="stylesheet" type="text/css" href="style.css"/>

        <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="simple.carousel.js"></script>

        <script type="text/javascript" src="javascript/jquery-1.8.3.min.js"></script> 
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
        
        <script type="text/javascript">
            jQuery(document).ready(function() {
                // example 1
                $("ul.example1").simplecarousel({
                    width:40,
                    height:40,
                    visible: 3,
                    auto: 3000,
                    next: $('.next'),
                    prev: $('.prev')
                });
                
                // example 2
                $("ul.example2").simplecarousel({
                    width:1000,
                    height:600,
                    auto: 4000,
                    fade: 400,
                    pagination: true
                });
            });
            
        </script>

        <div class="nav">
            <ul class="navl">
              <li><a href="index.html">Home</a></li> 
              <li><a href="services.html">Services</a></li> 
              <li><a href="contact.html">Contact Us</a></li> 
              <li><a href="register.html">Register</a></li> 
            </ul>
        </div>
        
        <div class="header">
            <p>HOME PAGE</p>
        </div>
    </head>