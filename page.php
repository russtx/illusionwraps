<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="defaultSection">

                    <div class="second">
                        <div class="blueline"></div>
                        
                        <span class="blueLineHeader"><h4><?php the_meta(); ?></h4></span>
                    
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('defaultContent'); ?>>

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
                        
                    </div><!-- second -->        
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
