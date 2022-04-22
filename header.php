

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	
	
	
	


<?php wp_head();?>

</head>

<body <?php body_class();?>>

<!--
==============================================================
					HEADER SECTION
==============================================================
-->
<header>
	<div class="container header_top navbar-fixed-top">
		<div class="col-md-6 col-xs-12 col-sm-6 header_contact">
			<p><i class="fa fa-phone"></i> &nbsp; +88 01843-666331</p>
			<p><i class="fa fa-envelope-o"></i>&nbsp;&nbsp; info@domain.com</p>
		</div>

		<div class="col-md-6 col-xs-12 col-sm-6 social_icons wow fadeInUp text-right" data-wow-delay="0.55s">
			<a href="#" class="fa fa-facebook facebook_bg i1"></a>
			<a href="#" class="fa fa-twitter twitter_bg i2"></a>
			<a href="#" class="fa fa-instagram instagram_bg i3"></a>
			<a href="#" class="fa fa-linkedin linkedin_bg i4"></a>
		</div>
	</div>

	<div class="wrap-header">
		<div class="container">
			
			<!--Website Main Logo-->
			<div id="logo">
				<?php the_custom_logo();?>
			</div>

			<div id="search">
				<div class="button-search"></div>
				<input type="text" placeholder="Search...">

				<!--<input type="text" placeholder="Search">-->
			</div>
		</div>

	</div>
</header>


<!--
==============================================================
					Navbar Section
==============================================================
-->

<nav class="navbar navbar-default color1">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#zabedStoreNav" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="">Menu</span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse col-center " id="zabedStoreNav">
		    <?php wp_nav_menu(array(
                'theme_location'       =>  'header-menu',
                'menu_class'           => 'nav navbar-nav topper',
             
            ));?>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

