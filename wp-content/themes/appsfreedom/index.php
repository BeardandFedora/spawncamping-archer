<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blain
 */

get_header(); ?>
	<div class=" learning-masthead">
		<div class="container">
		<?php
		if ( 'page' == get_option('show_on_front') && get_option('page_for_posts') && is_home() ) : the_post();
			$page_for_posts_id = get_option('page_for_posts');
			setup_postdata(get_page($page_for_posts_id));
		?>
					<?php the_content(); ?>
		<?php
			rewind_posts();
		endif;
		?>		
		</div>
	</div>
	<div class="container">
		<div class="row blog-list">
			<div class="col-md-7 page-content border-left">
			<?php if ( have_posts() ) : ?>
		 
				<?php query_posts('cat=14');

				 while ( have_posts() ) : the_post(); $counter++;?>
				<article class="news-article">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<nav class="meta">
						<p class="by">by <?php the_author_posts_link(); ?></p>
						<p class="date"><?php echo get_the_time('F j, Y') . " at " . get_the_time('g:i A') ?></p>			
					</nav>
					<div class="entry-content clearfix">
						<?php if (has_post_thumbnail()) : ?>
							<div class="post-featured-image ">
							<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
							</div>
						<?php endif; ?>
						<?php the_excerpt(); ?>
						<br /><a href="<?php the_permalink(); ?>" class="button">Read More</a>
					</div>
					
				
				
				</article><!-- #post-## -->
				<?php endwhile; ?>

				<?php blain_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

			</div>
			<div class="col-md-4 col-md-offset-1 subnav">
				<?php get_sidebar(); ?>
			</div>

	</div><!-- #primary -->
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>