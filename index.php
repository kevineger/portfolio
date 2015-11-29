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
	      <link href="assets/css/nav.css" rel="stylesheet">
	      <!-- Google Fonts -->
	      <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
	      <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	      <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	  </head>
	  <body>
	  	<a href="#aboutMe">
	  		<div class="logo-container">
	  			<img src="images/ke_logo.png" class="logo">
	  		</div>
	  	</a>
	  	<a href="#">
	  		<div class="contact-container">
	  			<a href="mailto:egerkevinjames@gmail.com"><p>Contact Me</p></a>
	  		</div>
	  	</a>

	  	<!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  		<div class="container-fluid">
	  			Brand and toggle get grouped for better mobile display
	  			<div class="navbar-header">
	  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	  					<span class="sr-only">Toggle navigation</span>
	  					<span class="icon-bar"></span>
	  					<span class="icon-bar"></span>
	  					<span class="icon-bar"></span>
	  				</button>
	  			</div>

	  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  				<ul class="nav navbar-nav">
	  					<li><a href="#aboutMe" class="active">About Me</a></li>
	  					<li><a href="#education">Education</a></li>
	  					<li><a href="#projects">Projects</a></li>
	  					<li><a href="#skills">My Skills</a> </li>
	  					<li><a href="#hobbies">Hobbies</a></li>
	  				</ul>
	  			</div>
	  		</div>
	  	</nav> -->

	  	<nav id="topnav" class="navbar-fixed-top">
	  		<ul>
	  			<li><a href="#aboutMe" class="active">About</a></li>
	  			<li><a href="#education">Education</a></li>
	  			<li><a href="#projects">Projects</a></li>
	  			<li><a href="#skills">Skills</a> </li>
	  			<li><a href="#hobbies">Hobbies</a></li>
	  		</ul>
	  	</nav>

	  	<!-- About Me -->
	  	<?php include 'content/about.html' ?>

	  	<!-- Education -->
	  	<?php include 'content/education.html' ?>
	  	
	  	<!-- Projects -->
	  	<?php include 'content/projects.html' ?>

	  	<!-- Skills -->
	  	<?php include 'content/skills.html' ?>

	  	<!-- Hobbies -->
	  	<?php include 'content/hobbies.html' ?>
	  	<!-- Javascript -->
	  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

	  	<script type="text/javascript">
	  		var sections = $('.wrapper')
	  		, nav = $('nav')
	  		, nav_height = nav.outerHeight();

	  		$(window).on('scroll', function () {
	  			var cur_pos = $(this).scrollTop();

	  			sections.each(function() {
	  				var top = $(this).offset().top - nav_height,
	  				bottom = top + $(this).outerHeight();

	  				if (cur_pos >= top && cur_pos <= bottom) {
	  					nav.find('a').removeClass('active');
	  					sections.removeClass('active');

	  					$(this).addClass('active');
	  					nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	  				}
	  			});
	  		});
	  		nav.find('a').on('click', function () {
	  			var $el = $(this)
	  			console.log($el)
	  			, id = $el.attr('href');

	  			$('html, body').animate({
	  				scrollTop: $(id).offset().top - nav_height
	  			}, 500);

	  			return false;
	  		});
	  	</script>
	  </body>
	  </html>
