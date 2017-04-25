<?php include(TEMPLATEPATH."/header.php");?>  

<div id="content">
 	<div class="wrap">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    			
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('pages');
			} else { ?>
			<?php } ?>

    <h1><?php the_title(); ?></h1>  
   <div class="post">
    <div class="date">
      <?php the_time('F j, Y'); ?> | Category: <?php the_category(', '); ?>
    </div>
      <?php the_content('<div class="more">Read More&raquo;</div>'); ?>
  </div>
  
    <?php endwhile; else: ?>  
  
    <h2>Woops...</h2>  
  
    <p>Sorry, nothing was found. Maybe go back to the <a href="<?php bloginfo('url'); ?>">homepage</a>.</p>  
  
    <?php endif; ?>  
  
    <p align="center"><?php posts_nav_link(); ?></p> 

  </div>
	
</div>

<?php get_footer(); ?>  