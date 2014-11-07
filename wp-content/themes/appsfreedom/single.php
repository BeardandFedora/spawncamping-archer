<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Blain
 */

get_header(); ?>
	<div class="container blog-post">
		<div class="row">
			<div class="col-md-7 page-content border-left">

		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
		<nav class="meta">
			<p class="by">by <?php the_author_posts_link(); ?></p>
			<p class="date"><?php echo get_the_time('F j, Y') . " at " . get_the_time('g:i A') ?></p>			
		</nav>
		<?php echo wdsb_get_sharebox(); ?>
		<?php if (has_post_thumbnail()) : ?>
		<div class="post-featured-image">
		<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
		</div>
		<?php endif; ?>
		<div class="entry-content clearfix">
				<?php the_content(); ?>
		</div>
		<div class="author-info row">
			<div class="col-md-3">
				<?php the_author_image_size(110, 110); ?>
			</div>
			<div class="col-md-9">
				<h3>Written by <?php the_author_posts_link(); ?></h3>
				<p><?php echo get_the_author_meta('description'); ?></p>
			</div>
		</div>
		<div class="comments">
			<?php comments_template(); ?>			
		</div>

			

		<?php endwhile; // end of the loop. ?>

		</div>
		<div class="col-md-4 col-md-offset-1 subnav">
			<?php get_sidebar(); ?>	
		</div>

	</div>
</div>
<?php get_footer(); ?>