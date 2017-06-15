<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Lam's Profile</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-pham-ngoc-lam.css" type="text/css">
		<style>
			@font-face {
		    font-family: myfont;
		    src: url(fonts/UVNThoiDai1.TTF);
			}
			body, html {
		    	height: 100%;
		    	width: 100%;
			}

			.parallax {
		    /* The image used */
		    background-image: url('image/background1.jpg');
		    width: 100%;
		    /* Full height */
		    height: 100%; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
			}
		</style>

	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		
		<!-- insert code here, notice and delete the img tag below -->
		
		<!-----------------------Menu------------------------>
				<nav class="navbar navbar-inverse navbar-fixed-top">
				  <div class="container-fluid">
				    <div class="navbar-header">
				        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				          <span class="icon-bar"></span>
				          <span class="icon-bar"></span>
				          <span class="icon-bar"></span>                        
				      </button>
				      <a class="navbar-brand" href="#">TRANG CHỦ</a>
				    </div>
				    <div>
				      <div class="collapse navbar-collapse" id="myNavbar">
				        <ul class="nav navbar-nav">
				          <li><a href="#section1">GIÁO DỤC</a></li>
				          <li><a href="#section2">DU LỊCH</a></li>
				          <li><a href="#section3">SỞ THÍCH</a></li>
				          <li><a href="#section4">LIÊN HỆ</a></li>
				        </ul>
				      </div>
				    </div>
				  </div>
				</nav>
				<!-------------------------End menu------------------------------>

			<div class="parallax">
				<h1>PHẠM NGỌC LAM</h1>
				<h2>Kĩ Sư Phần Mềm</h2>
			</div>
			<div id="section1" class="container-fluid">
			  <h1>Section 1</h1>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			</div>
			<div id="section2" class="container-fluid">
			  <h1>Section 2</h1>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			</div>
			<div id="section3" class="container-fluid">
			  <h1>Section 3</h1>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			</div>
			<div id="section4" class="container-fluid">
			  <h1>Section 4</h1>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
			</div>

			<div class="parallax"></div>
					
					<!-- insert code here end -->
		
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
</body>
</html>