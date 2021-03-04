<?php 

/**
 * Template Name: services-page
 */

?>


<?php get_header(); ?>

<section id="newsletter">
	<div class="container">
		<h1>Subscribe To Our Newsletter</h1>
		<form action="process.php">
			<input type="email" placeholder="Enter email" name="email">
			<button type="submit" class="button1">Subscribe</button>
		</form>
	</div>
</section>
<section id="main">
	<div class="container">
		<article id="main-col">
			<h1 class="page-title">Services</h1>
			<ul id="services">
				<li>
					<h3>Website Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<p>Pricing: $1, 000 - $3, 000</p>
				</li>
								<li>
					<h3>Website Maintenance</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<p>Pricing: $2, 500 - $3, 000</p>
				</li>
								<li>
					<h3>Website Hosting</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<p>Pricing:  25$ per month</p>
				</li>
			</ul>
		</article>
		<aside id="sidebar">
			<div class="dark">
			<h3>Get A Quote</h3>
          <form class="quote">
          	<div>
          		<label>Name</label><br>
          		<input type="text" placeholder="Name" name="">
          	</div>
          		<div>
          		<label>Email</label><br>
          		<input type="email" placeholder="Email" name="">
          	</div>
          		<div>
          		<label>Name</label><br>
          		<textarea placeholder="Message"></textarea>
          	</div>
          	<input class="button1" type="submit" value="Send" name="">
          </form>
			</div>
		</aside>
	</div>
</section>

<?php get_footer(); ?>