
<?php if (!is_front_page()) { ?>

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="footer-all">
				<div class="footer-logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo ot_get_option('footer_logo'); ?>" alt=""></a>
				</div>
				<p><?php echo ot_get_option('footer_short_description'); ?></p>
			</div>
			<div class="footer-all">
				<h3>Quick Links</h3>
				<?php wp_nav_menu( array(
			      	'theme_location'  => 'footer',
			      	'menu'            => '',
			      	'container'       => '',
			      	'container_class' => '',
			      	'container_id'    => '',
			      	'menu_class'      => '',
			      	'menu_id'         => '',
			    ) ); ?>
				<!-- <ul>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Storage</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Storage</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
				</ul> -->
			</div>
			<div class="footer-all">
				<h3>Quick Links</h3>
				<div class="social-icon">
					<a href="<?php echo ot_get_option('facebook_link'); ?>"><i class="fab fa-facebook-square"></i></a>
					<a href="<?php echo ot_get_option('twitter_link'); ?>"><i class="fab fa-twitter-square"></i></a>
					<a href="<?php echo ot_get_option('linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a>
					<a href="<?php echo ot_get_option('youtube_link'); ?>"><i class="fab fa-youtube-square"></i></a>
				</div>
				<div class="footer-contact">
					<a href="tel:<?php echo ot_get_option('phone'); ?>"><i class="fas fa-phone"></i> <?php echo ot_get_option('phone'); ?></a>
					<a href="mailto:<?php echo ot_get_option('email'); ?>"><i class="fas fa-envelope"></i> <?php echo ot_get_option('email'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<p>© <?php echo ot_get_option('copyright_text'); ?></p>
		</div>
	</div>
</footer>

<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
