<?php
/* Template Name: Contact Page */
get_header(); ?>

	<main role="main">
            <!-- section -->
            <section class="defaultSection ">
                
                <div class="second">
                
                <div class="blueline"></div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="contactSection">
                
                        <div class="leftSide">
                    
                    
                    
                    <span><h4>Let's Get Started</h4></span>
                    
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
                    
                    <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
                
                </div><!-- leftSide -->
                
                <div class="rightSide">
                    <div class="contactLogo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-trans.png" alt="Logo" >
                    </div>
                    <h3>Contact Us</h3>
                    <div class="address">
                        <a href="#">
                            123 Main Street<br />
                            Anytown VA 12345<br/>
                            <span>Get Directions</span>
                        </a>
                    </div>
                    <div class="email">
                        <a href="mailto:#.com">email@illusionswrap.com</a>
                    </div>
                    <div class="phone">
                        <a href="tel:5404292433">(540) 429-2433</a>
                    </div>
                    
                </div><!--rightSide -->
                    </div><!-- contactSection -->
                
                </div><!--second -->
            </section>
            <!-- /section -->
	</main>



<?php get_footer(); ?>
