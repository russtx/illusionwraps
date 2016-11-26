<?php /* Template Name: Test Page  */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

<div id="gallery">
                <div id="panel">
                    <img id="largeImage" src="http://workshop.rs/demo/gallery-in-4-lines/images/image_01_large.jpg" />

                </div>

    <!--<div id="thumbs">
        
        <img src="http://workshop.rs/demo/gallery-in-4-lines/images/image_01_thumb.jpg" alt="1st image description" />
        
        
        <img src="http://workshop.rs/demo/gallery-in-4-lines/images/image_03_thumb.jpg" alt="3rd image description" />
        <img src="http://workshop.rs/demo/gallery-in-4-lines/images/image_02_thumb.jpg" alt="2nd image description" />
        <img src="http://workshop.rs/demo/gallery-in-4-lines/images/image_03_thumb.jpg" alt="3rd image description" />
        <img src="http://workshop.rs/demo/gallery-in-4-lines/images/image_02_thumb.jpg" alt="2nd image description" />
        <img src="http://workshop.rs/demo/gallery-in-4-lines/images/image_03_thumb.jpg" alt="3rd image description" />
    </div>-->


                       
                    
                    <div id="thumbs">
                    
                        <?php
                        $args = array( 'post_type' => 'gallery', 'posts_per_page' => 6);
                         $loop = new WP_Query( $args );
                         while ( $loop->have_posts() ) : $loop->the_post();
                           
                           the_post_thumbnail('full');  
                         endwhile;
                          ?>
                        
                    </div><!-- thumbs -->    
                    
</div><!-- gallery -->                    
                   
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
