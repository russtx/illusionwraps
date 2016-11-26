<?php 
/* Template Name: Our Services */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="defaultSection">
                    <div class="second">
                        <div class="blueline"></div>
                        <span class="blueLineHeader"><h4>Our Services</h4></span>
                        
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('leftServices'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                        
                        <aside class="rightServices">
                            <div class="contactSpot">
                                <h2>Let's Get Started</h2>
                                <h3>Get a Free estimate today</h3>
                                <a href="<?php echo home_url(); ?>/contact-us/"><button><p>Contact us</p></button></a>
                            </div>
                        </aside>
                        
                    <div class="portfolioArea">

                        <div class="commercialSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 4,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <div class="commercialPost">

                                <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                            </div>
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Commercial</h2>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- commercialSection -->

                        <div class="trailerTruckSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 5,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <div class="trailerTruckPost">

                                <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                            </div>
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Trailer &#38; Truck</h2>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- trailerTreuckSection -->

                        <div class="fleetSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 6,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <div class="fleetPost">

                                <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                            </div>
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Fleet</h2>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- fleetSection -->

                        <div class="specialtySection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 7,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <div class="specialtyPost">

                                <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                            </div>
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Specialty</h2>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- specialtyection -->

                        <div class="colorSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 8,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <div class="colorPost">

                                <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                            </div>
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Color</h2>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- colorSection -->

                        <div class="logoSection">
                            <div class="logoPost">
                                <div class="logoBorder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brain-90.jpg" alt="brain" >
                                    <h2>Need Assistance</h2>
                                    <span><h2>Log Design &#63;</h2></span>
                                    <span class="blueLine"></span>
                                    <h2>We Can Help&#33;</h2>
                                </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Logo</h2>
                            </div>


                        </div>
                        
                       

                    </div><!-- portfolioAreaea -->    
                    
                     <div class="clearfix"></div>
                     
                     <div class="pastWorkArea">
                    
                            <div class="pastWorkPostTitle">
                                <?php
                                $id=101;
                                $post = get_post($id); ?>
                                
                                <div class="leftImage">
                                    <?php the_post_thumbnail('medium');  ?>
                                </div>
                                
                                <div class="rightContent">
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <?php $content = get_the_content();   $trimmed_content = wp_trim_words( $content, 20, '<a href="'. get_permalink() .'"> </a>' ); ?>
                                    <p><?php echo $trimmed_content; ?></p>
                                <h3><?php echo get_post_meta($post->ID, 'description', true); ?></h3>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><button><p>Read More</p></button></a>
                                </div>
                            </div><!-- pastWorkPostTitle -->

                        </div><!-- pastWorkArea -->
                        
                         <div class="newsPosts">
                            
                            <h2 class="postTitle">Recent News &  Events</h2>
                            
                            <?php
                            $args = array( 'posts_per_page' => 2, 'order'=> 'DESC', 'orderby' => 'title', 'category' => 3 );
                            $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) :
                              setup_postdata( $post ); ?> 

                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">            
                                    <div class="newsContent">

                                        <div class="newsImage" >
                                            <?php the_post_thumbnail( array(100,150) );  ?>
                                        </div>
                                        
                                        <div class="newsInfo">
                                            <div class="entry-date">
                                               <span class="date"><?php the_time('j'); ?> </span>
                                               <span  class="line"></span>
                                               <span class="month"><?php the_time('F'); ?> </span>
                                            </div>
                                            
                                            <h2><?php the_title(); ?></h2>
                                        </div><!-- newsInfo -->

                                    </div><!-- newsContent -->
                                    </a>            

                                <?php
                                endforeach; 
                                wp_reset_postdata();
                                ?>
                            
                            <a href="<?php echo home_url(); ?>/category/news-events/"><button>View More</button></a>
                            
                        </div><!-- newposts -->
                        
                        
                        
                        
                        <div class="clearfix"></div>

                        <div class="followUsArea">
                            <div class="instagramLink">
                                <a href="#"><h2>Instagram</h2></a>
                            </div>

                            <div id="gallery">
                                <div id="panel">

                                    <img  id="largeImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="gallery" >
                                </div><!-- panel -->

                                <div id="thumbs">

                                    <?php
                                    $args = array( 'post_type' => 'gallery', 'posts_per_page' => 6);
                                     $loop = new WP_Query( $args );
                                     while ( $loop->have_posts() ) : $loop->the_post();

                                       the_post_thumbnail('full');
                                     endwhile;
                                      ?>

																			<div class="followUsSocials">
																					<h2>follow us</h2>
																					<i class="fa fa-facebook" aria-hidden="true"></i>
																					<i class="fa fa-twitter" aria-hidden="true"></i>
																					<i class="fa fa-instagram" aria-hidden="true"></i>
																					<i class="fa fa-google-plus" aria-hidden="true"></i>
																					<i class="fa fa-youtube-play" aria-hidden="true"></i>
																			</div>
                                </div><!-- thumbs -->
                            </div><!-- gallery -->

                        </div><!-- followusArea -->
                        
                    </div><!-- second -->

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
