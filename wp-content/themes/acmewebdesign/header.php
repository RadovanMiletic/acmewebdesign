<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width=device-width">
	<meta name = "author" content = "Radovan Miletic">
	<title>Acme Web Design | Welcome</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <?php wp_head();?>
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Acme</span> Web Design</h1>
			</div>	
				<nav>
					<ul>
						<li class="current"><a href="home.php">Home</li>
						<li><a href="about.php">About</li>	
						<li><a href="services.php">Services</a></li>		
					</ul>
				</nav>
			
		</div>
	</header>