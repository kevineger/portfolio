	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	      <![endif]-->
	      <!-- Meta Tags -->
	      <meta charset="utf-8">
	      <meta http-equiv="X-UA-Compatible" content="IE=edge">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	      <meta name="description" content="A personal site for Kevin Eger, a 4th year Computer Science student at the University of British Columbia (Okanagan).">
	      <meta name="author" content="Kevin Eger">
	      <!-- Favicon -->
	      <link rel="shortcut icon" href="/myIcon.ico" type="image/x-icon">
	      <link rel="icon" href="/myIcon.ico" type="image/x-icon">
	      <!-- Title -->
	      <title>Kevin Eger</title>
	      <!-- Bootstrap core CSS -->
	      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	      <!-- Custom CSS -->
	      <link href="assets/css/global.css" rel="stylesheet">
	      <link href="assets/css/forms.css" rel="stylesheet">
	      <link href="assets/css/nav.css" rel="stylesheet">
	      <link href="assets/css/mailer_style.css" rel="stylesheet">
	      <!-- Google Fonts -->
	      <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
	      <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	      <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	  </head>
	  <body>
	  	<a href="#about">
	  		<div class="logo-container">
	  			<img src="images/ke_logo.png" class="logo">
	  		</div>
	  	</a>
<!-- 	  	<a href="#">
	  		<div class="contact-container">
	  			<a href="mailto:egerkevinjames@gmail.com"><p>Contact Me</p></a>
	  		</div>
	  	</a> -->
	  	<nav id="topnav" class="navbar-fixed-top">
	  		<div class="container-fluid">
	  			<div class="navbar-header">
	  				<button style="background-color:#DFDCD7" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	  					<span class="sr-only">Toggle navigation</span>
	  					<span style="background-color:#FFF" class="icon-bar"></span>
	  					<span style="background-color:#FFF" class="icon-bar"></span>
	  					<span style="background-color:#FFF" class="icon-bar"></span>
	  				</button>
	  			</div>
	  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  				<ul id="navbar-list">
	  					<li><a href="#about" class="active">About</a></li>
	  					<li><a href="#education">Education</a></li>
	  					<li><a href="#projects">Projects</a></li>
	  					<li><a href="#skills">Skills</a> </li>
	  					<li><a href="#contact">Contact</a></li>
	  				</ul>
	  			</div>
	  		</div>
	  	</nav>

	  	<!-- About Me -->
	  	<?php include 'content/about.html' ?>

	  	<!-- Education -->
	  	<?php include 'content/education.html' ?>
	  	
	  	<!-- Projects -->
	  	<?php include 'content/projects.html' ?>

	  	<!-- Skills -->
	  	<?php include 'content/skills.html' ?>

	  	<!-- Contact -->
	  	<?php include 'content/contact.html' ?>
	  	<!-- Javascript -->
	  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  	<script src="assets/js/app.js"></script>

	  	<script type="text/javascript">
	  		// Collapse navbar after click (if it is collapsed to begin with)
	  		$(document).ready(function () {
	  			$("#navbar-list li a").click(function(event) {
	  				$(".navbar-collapse").collapse('hide');
	  			});
	  		});

	  		// Corret the active states of the navbar on scroll and click
	  		var sections = $('.wrapper')
	  		, nav = $('nav')
	  		, nav_height = nav.outerHeight();

	  		$(window).on('scroll', function () {
	  			var cur_pos = $(this).scrollTop();

	  			sections.each(function() {
	  				var top = $(this).offset().top - nav_height,
	  				bottom = top + $(this).outerHeight();

	  				if (cur_pos >= top && cur_pos <= bottom) 
	  				{
	  					nav.find('a').removeClass('active');
	  					sections.removeClass('active');

	  					$(this).addClass('active');
	  					nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');

	  					// Toggle the box separator colours depending on page
	  					switch($(this).attr('id'))
	  					{
	  						case 'about':
	  						nav.find('a').removeClass('education projects skills contact').addClass('about');
	  						break;
	  						case 'education':
	  						nav.find('a').removeClass('about projects skills contact').addClass('education');
	  						break;
	  						case 'projects':
	  						nav.find('a').removeClass('about education skills contact').addClass('projects');
	  						break;
	  						case 'skills':
	  						nav.find('a').removeClass('about education projects contact').addClass('skills');
	  						break;
	  						case 'contact':
	  						nav.find('a').removeClass('about education projects skills').addClass('contact');
	  						break;
	  					}
	  				}
	  			});
});

	  		// Smooth scroll between sections
	  		nav.find('a').on('click', function () {
	  			var $el = $(this)
	  			, id = $el.attr('href');

	  			$('html, body').animate({
	  				scrollTop: $(id).offset().top - nav_height
	  			}, 500);

	  			return false;
	  		});

	  	</script>
	  </body>
	  </html>
