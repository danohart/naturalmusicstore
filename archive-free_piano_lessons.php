<?php
/*
Template Name: Free Lessons
*/

include(TEMPLATEPATH."/header.php");?>

	<h1 align="center">Free Piano Lessons</h1>

	<div class="free-lesson-wrap">
 		<?php
		    $args = array( 
		            'post_type' => 'free_piano_lessons',
		            'posts_per_page' => 1,
		            );
		    $query = new WP_Query( $args );

    		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
    	?>
			<div class="free-lesson">
				<?php the_title();?>

				<div class="videoWrapper">
					<?php the_content();?>
				</div>
			</div>

		 <?php endwhile; else : ?>
		 <?php endif; ?>
	</div>

	<?php pagination_nav(); ?>

<?php get_footer(); ?>  