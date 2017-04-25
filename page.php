<?php include(TEMPLATEPATH."/header.php");?>


	<?php while ( have_posts() ) : the_post(); ?>

		<?php if (is_front_page()) {?>


		<?php } else { ?>
			<h1 class="page-title"><?php the_title();?></h1>
		<?php } ?>
		<div id="content">
			<p><?php the_content();?></p>
			<?php comments_template( '/comments.php' ); ?>
		</div>
	<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>  