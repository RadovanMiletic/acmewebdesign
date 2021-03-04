<?php 

/**
 * Template Name: home
 */

?>

<?php get_header(); ?>




<section id="showcase">
	<div class="container">
		<h1>Affordable Professional Web Design</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	</div>
</section>
<section id="newsletter">
	<div class="container">
		<h1>Subscribe To Our Newsletter</h1>
		<form action="process.php">
			<input type="email" placeholder="Enter email" name="email">
			<button type="submit" class="button1">Subscribe</button>
		</form>
	</div>
</section>
<section id="boxes">
	<div class="container">
		<div class="box">
			<img src="http://localhost/acmewebdesign/wp-content/uploads/2021/03/logo_html.png">
			<h3>HTML5 Markup</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>
		<div class="box">
			<img src="http://localhost/acmewebdesign/wp-content/uploads/2021/03/logo_css.png">
			<h3>CSS3 Styling</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>
		<div class="box">
			<img src="http://localhost/acmewebdesign/wp-content/uploads/2021/03/logo_brush.png">
			<h3>Graphic Design</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>
	</div>
</section>




<?php get_footer(); ?>