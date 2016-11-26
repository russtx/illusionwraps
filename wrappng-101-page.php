<?php
/* Template Name: Wrapping 101 */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="defaultSection">
                    
                    <div class="second">
                        
                        <div class="blueline"></div>
                        
                        <span class="blueLineHeader"><h4>Why Wrap a Vehicle?</h4></span>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('wrapping'); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>
                                
                                <?php endwhile; ?>

                                <?php else: ?>
                                
                                <?php endif; ?>
                                    <div class="contactSpot">
                                        <h2>Let's Get Started</h2>
                                        <h3>Get a Free estimate today</h3>
                                        <a href="<?php echo home_url(); ?>/contact-us/"><button><p>Contact us</p></button></a>
                                    </div>
                                
                                
                                
                                <div class="subject">
                                    <a href="#"><h2>Next Subject</h2>
                                        <h3>Vehicle Wrap Design</h3></a>
                                </div>
                                     
                                

			</article>
                        <aside class="wrappingRight">
                            <div class="wrapSubjects">
                                <h2>Wrap Subjects</h2>
                                <a href="#"><span><h3><i class="fa fa-play" aria-hidden="true"></i> Why Wrap A Vehicle ?</h3></span></a>
                                <a href="#"><h3>Vehicle Wrap Design</h3></a>
                                <a href="#"><h3>Wrap Expectationss</h3></a>
                                <a href="#"><h3>Vehicle Wrap Care</h3></a>
                                <span class="Grayline"></span>
                                <a href="#"><button><p>Get Started</p></button></a>
                            </div>
                            
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
                        </aside>

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
