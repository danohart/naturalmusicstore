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
				<h2><?php the_title();?></h2>

				<div class="videoWrapper">
					<?php the_content();?>
				</div>
				<div class="cta" align="center">
					<h3>To get access to all video lessons, click below to become a monthly paid subscriber</h3>
					<a class="btn" href="<?php bloginfo('url');?>/checkout/?add-to-cart=74">Add To Cart</a>
				</div>
			</div>

		 <?php endwhile; else : ?>
		 <?php endif; ?>

		 <?php
		    $args = array( 
		            'post_type' => 'free_piano_lessons',
					'posts_per_page' => 4,
					'offset' => 1
		            );
		    $query = new WP_Query( $args );

    		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
    	?>
			<div class="free-lesson">
				<h2><?php the_title();?></h2>

				<div class="videoWrapper">
					<?php the_content();?>
				</div>
			</div>

		 <?php endwhile; else : ?>
		 <?php endif; ?>
	</div>

	<?php the_posts_pagination( array(
		'mid_size'  => 2,
		'prev_text' => __( '&#xab; Back', 'textdomain' ),
		'next_text' => __( 'More Lessons &#xbb;', 'textdomain' ),
		) );
	?>

<?php get_footer(); ?>  