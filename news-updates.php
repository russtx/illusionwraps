<?php
/* Template Name: News & Updates */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="defaultSection">
                    
                    <div class="second">
                    
                        <div class="blueline"></div>
                            
                        <div class="newSection">
                            <span ><h4>The Latest Happenings and Wrappings</h4></span>
                                    <h1><?php the_title(); ?></h1>

                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                                    <!-- article -->
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
                                    
                        </div><!-- newSection -->
                        
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
                        
                        <div class="newsPosts">
                            
                            <h2 class="postTitle">Recent News &  events</h2>
                            
                            <?php
                            $args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'title', 'category' => 3 );
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
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><button><p>Read More</p></button></a>
                            </div>

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
