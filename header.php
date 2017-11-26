<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>iseewinner</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./style.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-social-gh-pages/bootstrap-social.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome-4.7.0/css/font-awesome.min.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/mdb_free/css/mdb.min.css" >
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"><!--fixed-top-->
		<div class="container">
			<div class="navbar-brand">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo.png">
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/wordpress/blog/">Прогнозы на футбол</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/wordpress/about/">Обо мне</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost/wordpress/contact/">Обратная связь</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>