<?php get_header(); ?>

	<main role="main">
		<!-- section -->
                <section class="defaultSection categorySection">
                    <div class="second">
                        <div class="blueline"></div>
                        
                        <span class="blueLineHeader"><h4>illusion wraps</h4></span>
                    

			<h1><?php  single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
