<?php
/*
Template Name: Free Lessons
*/

include(TEMPLATEPATH."/header.php");?> 

	<?php while ( have_posts() ) : the_post(); ?>

		<h1 class="page-title">
			<?php the_title();?>
		</h1>

		<div id="content">
			<p><?php the_content();?></p>
		</div>
		
	<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>  