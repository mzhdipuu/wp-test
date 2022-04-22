
<?php get_header();?>


<!--
==============================================================
					BANNER SECTION
==============================================================
-->
<section id="banner">

	<div class="container-fluid">
		<div class="row">

			<!-- FullScreen Image -->
			<div class="banner_fullscreen_image">

				<div class="overlay">

					<div class="banner-text">

						<div class="banner-middel-text wow fadeIn" data-wow-delay="0.35s">

							<h1 class="title wow fadeInDown" data-wow-delay="0.30s">Hassan</h1>
							<p class="description wow fadeInDown" data-wow-delay="0.35s"><span class="js_rotating">DESIGNER, PHOTOGRAPHER, THINKER</span></p>

							<div class="social_icons wow fadeInUp" data-wow-delay="0.55s">
								<a href="#" class="fa fa-facebook facebook_bg i1"></a>
								<a href="#" class="fa fa-twitter twitter_bg i2"></a>
								<a href="#" class="fa fa-instagram instagram_bg i3"></a>
								<a href="#" class="fa fa-linkedin linkedin_bg i4"></a>
							</div>

						</div>

					</div>

				</div>

			</div>
			<!-- /FullScreen Image -->


		</div>
	</div>
</section>


<!--
==============================================================
					ABOUT ME SECTION
==============================================================
-->
<section id="about_me">
	<div class="container">
		<div class="row">

			<div class="section_title">
				<h2 class="title">About Me</h2>
			</div>

				<figure class="about_top">
					<img src="<?php echo get_template_directory_uri();?>./images/about.jpg" alt="about01">

					<figcaption>
						<p>Hello, I'm <strong>Mojammel Hossain Dipu</strong>. A <strong>Web Developer, Web Designer</strong> and <strong> UI Designer</strong>UI Designer who loves to work with passion on all of my projects. I am currently living in Chittagong, Bangladesh.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi est incidunt ipsa iure quis quo recusandae rem. Aut debitis distinctio ducimus eaque ex perspiciatis possimus provident, sed. Tenetur, vel, voluptatum.</p>
					</figcaption>
				</figure>

				<figure class="about_bottom">
					<img src="<?php echo get_template_directory_uri();?>./images/signature.png" alt="signature">

					<figcaption>
						<a href="https://www.dropbox.com/preview/01.%20Class.pdf?role=personal" class="btn btn-danger" target="_blank">Download CV</a>
						<a href="resume.html" class="btn btn-danger">Go To My Resume</a>
					</figcaption>
				</figure>

		</div>
	</div>
</section>


<!--
==============================================================
					SUBCRIBE SECTION
==============================================================
-->
<section id="subscribes" class="subscribe">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 subscribe-title">
				<h2>Subscribe now.</h2>
			</div>

			<!-- subscribe form -->
			<div class="col-sm-12 col-md-7 subscribe-form">

				<form method="post" action="" name="subscribeform" id="subscribeform">
					<input type="text" name="email" placeholder="Enter your email address to get notified" id="subemail" />
					<input type="submit" name="send" value="Notify me" id="subsubmit" class="btn2" />
				</form>

				<!-- subscribe message -->
				<div id="mesaj"></div>
				<!-- subscribe message -->
			</div>
			<!-- subscribe form -->
		</div>
	</div>
</section>


<!--
==============================================================
					SPONSER SECTION
==============================================================
-->
<section id="sponser">
	<div class="container">
		<div class="row">
			<!---- olw1----->
			<div id="owl1" class="owl-carousel owl-theme">
				<div class="item"><img src="<?php echo get_template_directory_uri();?>./images/client-1.png" alt="text" /></div>
				<div class="item"><img src="<?php echo get_template_directory_uri();?>./images/client-2.png" alt="text" /></div>
				<div class="item"><img src="<?php echo get_template_directory_uri();?>./images/client-3.png" alt="text" /></div>
				<div class="item"><img src="<?php echo get_template_directory_uri();?>./images/client-4.png" alt="text" /></div>
				<div class="item"><img src="<?php echo get_template_directory_uri();?>./images/client-5.png" alt="text" /></div>
			</div>
		</div>

	</div>
</section>


<?php get_footer();?>