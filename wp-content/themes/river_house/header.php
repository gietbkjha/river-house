<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
		
		<div class="top-header">
			<div class="container">
				<div class="address">
					<p><i class="fas fa-map-marker-alt"></i> <?php echo ot_get_option('header_location_name'); ?></p>
				</div>
				<div class="contact-details">
					<ul>
						<li>
							<a href="mailto:<?php echo ot_get_option('email'); ?>"><i class="fas fa-envelope"></i> <?php echo ot_get_option('email'); ?></a>
						</li>
						<li>
							<a href="tel:<?php echo ot_get_option('phone'); ?>"><i class="fas fa-phone"></i> <?php echo ot_get_option('phone'); ?></a>
						</li>
						<li class="social-media">
							<a href="<?php echo ot_get_option('facebook_link'); ?>"><i class="fab fa-facebook-square"></i></a>
							<a href="<?php echo ot_get_option('twitter_link'); ?>"><i class="fab fa-twitter-square"></i></a>
							<a href="<?php echo ot_get_option('linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a>
							<a href="<?php echo ot_get_option('youtube_link'); ?>"><i class="fab fa-youtube-square"></i></a>
						</li>
					</ul>
				</div>
			</div>
			</div>
		<div class="header-bottom">
			<nav class="navbar navbar-inverse">
					  <div class="container">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					      </button>
					      <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo ot_get_option('header_logo'); ?>" alt=""></a>
					    </div>
					    <!-- <div class="collapse navbar-collapse" id="myNavbar"> -->
					      <?php wp_nav_menu( array(
					      	'theme_location'  => 'header',
					      	'menu'            => '',
					      	'container'       => 'div',
					      	'container_class' => 'collapse navbar-collapse',
					      	'container_id'    => 'myNavbar',
					      	'menu_class'      => 'nav navbar-nav navbar-right',
					      	'menu_id'         => '',
					      	'walker'          => new River_Walker_Nav_Menu()
					      ) ); ?>
					      <!-- <ul class="nav navbar-nav navbar-right">
						      	<li class="nav-item active">
						        	<a class="nav-link" href="index.html">Home</a>
						      	</li>
						      	<li class="nav-item">
						        	<a class="nav-link" href="about.html">About</a>
						      	</li>
						      	<li class="nav-item">
						        	<a class="nav-link" href="#">Contact</a>
						      	</li>
						      	<li class="nav-item">
						        	<a class="nav-link" href="#">Experience</a>
						      	</li>
						      	<li class="nav-item">
						        	<a class="nav-link page-btn" href="#">Book Now</a>
						      	</li>
					      </ul> -->
					    <!-- </div> -->
					  </div>
			</nav>
		</div>
	</header>
