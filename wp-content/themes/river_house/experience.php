<?php
/*
Template Name: Experience
*/
get_header(); ?>

<div class="experiance-slider">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    		<!-- Wrapper for slides -->
		    <div class="carousel-inner">

		    	<?php 

		            if ( function_exists( 'ot_get_option' ) ) {
		  
					  /* get the slider array */
					  $slides_experiences = ot_get_option( 'experience_banner_item', array() );

					  //print_r($slides_experience);
					  
					  if ( ! empty( $slides_experiences ) ) {
					  	$i = 0;
					    foreach( $slides_experiences as $slides_experience ) {
					      $active = ($i == 0)? 'active': '';
					      echo '		                    
					      	<div class="item '.$active.'">
					        	<img src="'.$slides_experience["image"].'" alt="Los Angeles" style="width:100%;">
					        	<div class="carousel-caption">
			          				<h3>'.$slides_experience['title'].' <span>'.$slides_experience['description'].'</span></h3>
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

	<div class="experience-tabs">
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
	            <li class="nav-item active">
	              <a class="nav-link" data-toggle="tab" href="#corporate-retreats"><?php echo ot_get_option('first_tab_section_title'); ?></a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" data-toggle="tab" href="#destination-weddings"><?php echo ot_get_option('second_tab_section_title'); ?></a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" data-toggle="tab" href="#amentities"><?php echo ot_get_option('third_tab_section_title'); ?></a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" data-toggle="tab" href="#experiences"><?php echo ot_get_option('fourth_tab_section_title'); ?></a>
	            </li>
          	</ul>
        </div>
          	<div class="tab-content">
            	<div id="corporate-retreats" class="tab-pane active" style="background: url(<?php echo ot_get_option('first_tab_section_background_image'); ?>);background-size: cover;background-position: center;background-repeat: no-repeat;">
            		<div class="container">
	            		<div class="all-title">
							<h3><?php echo ot_get_option('first_tab__heading_text'); ?></h3>
							<h2><?php echo ot_get_option('first_tab_subheading_text'); ?></h2>
						</div>
						<div class="corporate-all">
							<p><?php echo ot_get_option('first_tab_description_above_box'); ?></p>
							<div class="corporate-service">

								<?php 

						            if ( function_exists( 'ot_get_option' ) ) {
						  
									  /* get the slider array */
									  $box_repeaters = ot_get_option( 'first_tab_box_section_repeater', array() );

									  //print_r($slides_experience);
									  
									  if ( ! empty( $box_repeaters ) ) {
									  	$i = 0;
									    foreach( $box_repeaters as $box_repeater ) {
									      $active = ($i == 0)? 'active': '';
									      echo '		                    
									      	<div class="c-box">
												<img src="'.$box_repeater["image"].'" alt="">
												<p>'.$box_repeater['description'].'</p>
											</div>
									      ';
									      $i++;
									    }
									  }			  
									}

								?>

							</div>
							<p><?php echo ot_get_option('first_tab_descripition_below_box'); ?></p>
						</div>
					</div>
            	</div>
            	<div id="destination-weddings" class="tab-pane fade ">
            		<div class="container">
	            		<div class="all-title">
							<h3><?php echo ot_get_option('second_tab_heading_text'); ?></h3>
							<h2><?php echo ot_get_option('second_tab_subheading_text'); ?></h2>
						</div>
						<div class="wedding-all">
							<div class="wedding-txt">
								<?php echo ot_get_option('second_tab_long_description'); ?>
							</div>
							<div class="wedding-img">
								<img src="<?php echo ot_get_option('second_tab_image'); ?>" alt="">
							</div>
						</div>
					</div>
					<p class="last-txt-wed"><?php echo ot_get_option('second_tab_short_description'); ?></p>
            	</div>
            	<div id="amentities" class="tab-pane fade ">
            		<div class="all-title">
						<h2><?php echo ot_get_option('third_tab_heading_title'); ?></h2>
					</div>
					<div class="container">
						<p class="amen-sub"><?php echo ot_get_option('third_tab_main_description'); ?></p>
					</div>
					<div class="all-amentities">
						<div class="am-box">
							<div class="am-img">
								<img src="<?php echo ot_get_option('third_tab_section_one_image'); ?>" alt="">
							</div>
							<div class="am-txt">
								<h4><?php echo ot_get_option('third_tab_section_one_heading'); ?></h4>
								<h3><?php echo ot_get_option('third_tab_section_one_subheading'); ?></h3>
								<p><?php echo ot_get_option('third_tab_section_one_description'); ?></p>
								<ul>
									<?php 

							            if ( function_exists( 'ot_get_option' ) ) {
							  
										  /* get the slider array */
										  $right_ticks = ot_get_option( 'third_tab_section_one_right_tickmark', array() );

										  //print_r($slides_experience);
										  
										  if ( ! empty( $right_ticks ) ) {
										  	$i = 0;
										    foreach( $right_ticks as $right_tick ) {
										      $active = ($i == 0)? 'active': '';
										      echo '		                    
										      	<li>'.$right_tick['title'].'</li>
										      ';
										      $i++;
										    }
										  }			  
										}

									    ?>
								</ul>
							</div>
						</div>
						<div class="am-box">
							<div class="am-txt">
								<h4><?php echo ot_get_option('third_tab_section_two_heading'); ?></h4>
								<h3><?php echo ot_get_option('third_tab_section_two_subheading'); ?></h3>
								<p><?php echo ot_get_option('third_tab_section_two_description'); ?></p>
								<ul>
									<?php 

							            if ( function_exists( 'ot_get_option' ) ) {
							  
										  /* get the slider array */
										  $right_ticks2 = ot_get_option( 'third_tab_section_two_right_tickmark_use_only_title_field_ignore_rest_of_the_field_', array() );

										  //print_r($slides_experience);
										  
										  if ( ! empty( $right_ticks2 ) ) {
										  	$i = 0;
										    foreach( $right_ticks2 as $right_tick2 ) {
										      $active = ($i == 0)? 'active': '';
										      echo '		                    
										      	<li>'.$right_tick2['title'].'</li>
										      ';
										      $i++;
										    }
										  }			  
										}

									?>
								</ul>
							</div>
							<div class="am-img">
								<img src="<?php echo ot_get_option('third_tab_section_two_image'); ?>" alt="">
							</div>
						</div>
						<div class="am-box">
							<div class="am-img">
								<img src="<?php echo ot_get_option('third_tab_section_three_image'); ?>" alt="">
							</div>
							<div class="am-txt">
								<h4><?php echo ot_get_option('third_tab_section_three_heading'); ?></h4>
								<h3><?php echo ot_get_option('third_tab_section_three_subheading'); ?></h3>
								<p><?php echo ot_get_option('third_tab_section_three_description'); ?></p>
								<ul>
									<?php 

							            if ( function_exists( 'ot_get_option' ) ) {
							  
										  /* get the slider array */
										  $right_ticks3 = ot_get_option( 'third_tab_section_three_right_tickmark_use_only_title_field_ignore_rest_of_the_field_', array() );

										  //print_r($slides_experience);
										  
										  if ( ! empty( $right_ticks3 ) ) {
										  	$i = 0;
										    foreach( $right_ticks3 as $right_tick3 ) {
										      $active = ($i == 0)? 'active': '';
										      echo '		                    
										      	<li>'.$right_tick3['title'].'</li>
										      ';
										      $i++;
										    }
										  }			  
										}

									?>
							</div>
						</div>
						<div class="am-box">
							<div class="am-txt">
								<h4><?php echo ot_get_option('third_tab_section_fourth_heading'); ?></h4>
								<h3><?php echo ot_get_option('third_tab_section_fourth_subheading'); ?></h3>
								<p><?php echo ot_get_option('third_tab_section_fourth_description'); ?></p>
								<ul>
									<?php 

							            if ( function_exists( 'ot_get_option' ) ) {
							  
										  /* get the slider array */
										  $right_ticks4 = ot_get_option( 'third_tab_section_fourth_right_tickmark_use_only_title_field_ignore_rest_of_the_field_', array() );

										  //print_r($slides_experience);
										  
										  if ( ! empty( $right_ticks4 ) ) {
										  	$i = 0;
										    foreach( $right_ticks4 as $right_tick4 ) {
										      $active = ($i == 0)? 'active': '';
										      echo '		                    
										      	<li>'.$right_tick4['title'].'</li>
										      ';
										      $i++;
										    }
										  }			  
										}

									?>
								</ul>
							</div>
							<div class="am-img">
								<img src="<?php echo ot_get_option('third_tab_section_fourth_image'); ?>" alt="">
							</div>
						</div>
					</div>
            	</div>
            	<div id="experiences" class="tab-pane fade ">
            		<div class="container">
            			<div class="all-title">
							<h2><?php echo ot_get_option('fourth_tab_section_title'); ?></h2>
						</div>
						<div class="all-experiences">

							<?php 

					            if ( function_exists( 'ot_get_option' ) ) {
					  
								  /* get the slider array */
								  $experiences_boxes = ot_get_option( 'fourth_tab_section_box_items', array() );

								  //print_r($slides_experience);
								  
								  if ( ! empty( $experiences_boxes ) ) {
								  	$i = 0;
								    foreach( $experiences_boxes as $experiences_box ) {
								      $active = ($i == 0)? 'active': '';
								      echo '      
								      	<div class="ex-box">
											<img src="'.$experiences_box["image"].'" alt="">
											<div class="ex-txt">
												<h3>'.$experiences_box['title'].'</h3>
												<p>'.$experiences_box['description'].'</p>
											</div>
											<a href="#" class="page-btn">Read More</a>
										</div>
								      ';
								      $i++;
								    }
								  }			  
								}

							?>
							
						</div>
            		</div>
            	</div>
            </div>
		
	</div>

	<div class="sub-stay" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-size: cover;">
		<div class="container">
			<div class="stay-connect-ex">
				<div class="all-title">
					<h2><?php echo get_field('experience_subscribe_heading'); ?></h2>
				</div>
				<p><?php echo get_field('experience_subscribe_description'); ?></p>
				<form>
					<input type="text" name="name" placeholder="Enter Name">
					<input type="text" name="email" placeholder="Enter Email">
				</form>
				<div class="stay-connected">
					<button><?php echo get_field('experience_subscribe_button_text'); ?></button>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>