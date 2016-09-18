<?php 
	get_header();
	?>
	
	<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>wordpress Theme</h2>
				<p>steps on creating a modern theme from scrach</p>
				<p>by kedevelopers</p>

				<ul class="actions">
					<li><a href="#" class="button big special">Learn More</a></li>
				</ul>
			</section>

	<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>You can place a news article here</h2>
							<p>Article's details should be placed here, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>You can place another news article here</h2>
							<p>rticle's details should be placed here, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>A small gallery</h2>
						<p>Clubs meetings,events and modules</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">Tempus Aliquam</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Paralax effect</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Ipsum dolor tempus commodo adipiscing</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>
<?php	get_footer();
?>