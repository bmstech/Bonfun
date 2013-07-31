<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>