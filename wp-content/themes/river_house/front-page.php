<?php get_header(); ?>

<div class="home-banner">
	<div class="home-video">
		<video width="100%" height="100%" autoplay muted>
		  <source src="<?php echo ot_get_option('home_banner_iframe_video_link'); ?>" type="video/mp4">
		</video>
	</div>
	<div class="banner-txt">
		<h2><?php echo ot_get_option('home_banner_first_text'); ?></h2>
		<h3><?php echo ot_get_option('home_banner_middle_text'); ?> </h3>
		<h1><?php echo ot_get_option('home_banner_last_text'); ?></h1>
		<a href="<?php echo ot_get_option('home_banner_click_here_link'); ?>" class="page-btn">Click Here</a>
	</div>
</div>

<?php get_footer(); ?>