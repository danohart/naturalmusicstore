<?php include(TEMPLATEPATH."/header.php");?>

<div id="content">
	<?php while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title();?></h1>

		<p><?php the_content();?></p>
	<?php endwhile; // End of the loop. ?>
</div>

<?php get_footer(); ?>  
