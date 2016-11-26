<?php /* Template Name: Home Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="homeSection">

		<div class="first">

                    <div class="landingTitle">
                        <h2>Vehicle Wraps</h2>
                        <span></span>
                        <h4>logo Design | Custom Vehicle Wraps</h4>
                    </div>

                    <a href="<?php echo home_url(); ?>/our-services/"><button class="servicesButton">
                        <p>Our Services</p>
                    </button></a>





                    <div class="arrows">
                        <button type="button" >
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon-arrows.png" alt="arrows" >
                            <p>Continue</p>
                        </button>
                    </div>
                </div><!-- first -->

                <div class="second">

                    <div class="blueline"></div>


                    <div class="vehicleWraps">
                        <h3>Let's get Started!<span><a href="tel: 540 429 2433">&nbsp; 540.429.2433</a></span></h3>
                        <h2>Vehicle Wraps </h2>
                       <?php
                       $id=12;
                       $post = get_post($id); ?>
                       <p><?php $content = apply_filters('the_content', $post->post_content);

                       $customExcerpt = wp_trim_words( $content, $num_words = 26, $more = '' );
                       echo $customExcerpt;
                       ?></p>

                    </div><!-- vehicleWraps -->

                    <div class="portfolioArea">

                        <div class="commercialSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 4,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="commercialPost">

                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                                </div>
                                
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Commercial</h2></a>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- commercialSection -->

                        <div class="trailerTruckSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 5,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="trailerTruckPost">

                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                                </div>
                            
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Trailer &#38; Truck</h2></a>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- trailerTreuckSection -->

                        <div class="fleetSection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 6,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="fleetPost">

                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>
                            
                                </div>
                               
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Fleet</h2></a>
                            </div> 

                            <?php endwhile; ?>

                        </div><!-- fleetSection -->

                        <div class="specialtySection">

                            <?php

                            $args = array( 'post_type' => 'portfolio','cat' => 7,'orderby' => 'menu_order date', 'order' =>

                            'ASC',  'posts_per_page' => '1' );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post();?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="specialtyPost">

                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                                </div>
                            
                            <div class="clearfix"></div>
                            <div class="Title"></a>
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
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="colorPost">

                                    <?php the_post_thumbnail(array()); // Declare pixel size you need inside the array?>

                                </div>
                            
                            <div class="clearfix"></div>
                            <div class="Title">
                                <h2>Color</h2></a>
                            </div>

                            <?php endwhile; ?>

                        </div><!-- colorSection -->

                        <div class="logoSection">
                            
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
                                <h2>Logo</h2></a>
                            </div>


                        </div>


                    </div><!-- portfolioAreaea -->

                        <div class="clearfix"></div>

                        <div class="contactSpot">
                            <h2>Let's Get Started</h2>
                            <h3>Get a Free estimate today</h3>
                            <a href="<?php echo home_url(); ?>/contact-us/"><button><p>Contact us</p></button></a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="pastWorkArea">
                            <div class="pastWorkBox">
                                <h2>Past Work</h2>
                            </div><!-- pastWorkBox -->

                            <div class="pastWorkPostTitle">
                                <?php
                       $id=43;
                       $post = get_post($id); ?>
                                <h2><?php the_title(); ?></h2>
                                <h3><?php echo get_post_meta($post->ID, 'description', true); ?></h3>
                                <a href="<?php echo home_url(); ?>/our-portfolio/"><button><p>Read More</p></button></a>
                            </div>

                        </div><!-- pastWorkArea -->

                        <div class="clearfix"></div>

                        <div class="missionArea">
                            <?php
                       $id=19;
                       $post = get_post($id); ?>

                            <div class="missionPost">
                                <h2><?php the_title(); ?></h2>

                                <p><?php $content = apply_filters('the_content', $post->post_content);
                                $customExcerpt = wp_trim_words( $content, $num_words = 20, $more = '' );
                                echo $customExcerpt;
                                ?></p>
                            </div>

														<div class="clearfix"></div>

                       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><button><p>About us</p></button></a>
                        </div><!-- missionArea -->

												<div class="clearfix"></div>


                        <div class="newsEventsArea">

                           <?php
                            $args = array( 'posts_per_page' => 1, 'order'=> 'ASC','cat' => 3, 'orderby' => 'title' );
                            $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) :
                              setup_postdata( $post ); ?>

                            <div class="blogImage" >
                                <?php the_post_thumbnail('full');  ?>

                            </div>
                            <div class="socialTags">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                            <div class="blogContent">
                                <span><h2>News &#38; Events</h2></span>

                                <div class="entry-date">

                                   <span class="date"><?php the_time('j'); ?> </span>
                                   <span class="month"><?php the_time('F'); ?> </span>
                                </div>
                                <h2><?php the_title(); ?></h2>

                                    <a href="<?php echo home_url(); ?>/news-events/">
                                        <button><p>Read More</p></button>
                                    </a>


                           </div><!-- blogContent -->

                            <?php
                            endforeach;
                            wp_reset_postdata();
                            ?>
                        </div><!-- newsEvents -->

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
