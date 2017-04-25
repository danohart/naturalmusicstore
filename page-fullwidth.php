<?php
/*
Template Name: Full Width
*/
include(TEMPLATEPATH."/header.php");?> 

<div id="content">
 	<div class="wrap">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  
		<h1><?php the_title(); ?><?php include('title');?></h1>  
		   
		<?php the_content('<div class="more">Read More&raquo;</div>'); ?>
		  
		  
		<?php endwhile; else: ?>  
		  
		    <h2>Woops...</h2>  
		  
		    <p>Sorry, nothing was found. Maybe go back to the <a href="<?php bloginfo('url'); ?>">homepage</a>.</p>  
		  
		    <?php endif; ?>  
		  
		<p align="center"><?php posts_nav_link(); ?></p> 

		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>  