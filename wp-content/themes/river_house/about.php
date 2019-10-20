<?php 
/*
Template Name: About
*/
get_header(); ?>

<div class="about-slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
	    <div class="carousel-inner">

            <?php 

            if ( function_exists( 'ot_get_option' ) ) {
  
			  /* get the slider array */
			  $slides = ot_get_option( 'about_banner_items', array() );
			  
			  if ( ! empty( $slides ) ) {
			  	$i = 0;
			    foreach( $slides as $slide ) {
			      $active = ($i == 0)? 'active': '';
			      echo '
                    <div class="item '.$active.'">
			        	<img src="'.$slide["image"].'" alt="Los Angeles" style="width:100%;">
			        	<div class="carousel-caption">
		      				<h3>'.$slide['title'].'</h3>
		      				<p>'.$slide['description'].'</p>
		    			</div>
			      	</div>
			      ';
			      $i++;
			    }
			  }			  
			}

		    ?>

		</div>

		<!-- Left and right controls -->
    	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      		<span class="left-arrow"></span>
      		<span class="sr-only">Previous</span>
    	</a>
    	<a class="right carousel-control" href="#myCarousel" data-slide="next">
      		<span class="right-arrow"></span>
      		<span class="sr-only">Next</span>
    	</a>
		</div>
</div>

<div class="about-section">
	<div class="container">
		<div class="about-all">
			<div class="about-img">
				<?php echo get_the_post_thumbnail(); ?>
			</div>
			<div class="about-txt">
				<div class="all-title">
					<?php echo get_the_title(); ?>
				</div>
				<p><?php echo get_the_excerpt(); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="statements" style="background: url('<?php echo get_field('mission_statement_background'); ?>');background-repeat: no-repeat;background-size: cover;">
	<div class="container">
		<div class="statement-bg">	
			<div class="statement-txt">
				<h2><?php echo get_field('mission_statement_title'); ?></h2>
				<p><?php echo get_field('mission_statement_description'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="about-service">
	<div class="container">
		<div class="all-title">
			<?php echo ot_get_option('eastern_section_title'); ?>
		</div>
		<div class="all-about-service">

			<?php 

            if ( function_exists( 'ot_get_option' ) ) {
  
			  /* get the slider array */
			  $slides1 = ot_get_option( 'eastern_box_repeater_section', array() );
			  
			  if ( ! empty( $slides ) ) {
			  	$i = 0;
			    foreach( $slides1 as $slide1 ) {
			      
			      echo '
                     <div class="a-service">
							<div class="service-icon">
								<i class="fas fa-clock"></i>
							</div>
							<div class="service-txt">
								<h3>'.$slide1['title'].'</h3>
								<p>'.$slide1['description'].'</p>
							</div>
					 </div>
			      ';
			      
			    }
			  }			  
			}

		    ?>
		</div>
	</div>
</div>

<div class="statements" style="background: url('<?php echo get_field('vision_statement_background'); ?>');background-repeat: no-repeat;background-size: cover;">
	<div class="container">
		<div class="statement-bg vision">	
			<div class="statement-txt">
				<h2><?php echo get_field('vision_statement_title'); ?></h2>
				<p><?php echo get_field('vision_statement_description'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="stay-connected">
	<div class="container">
		<div class="all-title">
			<h2>Stay Connected</h2>
		</div>
		<form>
			<input type="text" name="email" placeholder="Enter Email Address">
			<button>Subscribe</button>
		</form>
		<?php //echo do_shortcode('[email-subscribers-form id="1"]'); ?>
	</div>
</div>

<?php get_footer(); ?>