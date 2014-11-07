<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blain
 */

get_header(); ?>

	<div class="container">
		<div class="row blog-list">
			<div class="col-md-7 page-content border-left">

		<?php if ( have_posts() ) : ?>

				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'blain' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'blain' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'blain' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'blain' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'blain' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'blain');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'blain' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'blain' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'blain' );

						else :
							_e( 'Archives', 'blain' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>

			<?php /* Start the Loop */ ?>
			<?php $counter=0; while ( have_posts() ) : the_post(); ?>

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
	
	</div>



		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>


		<div class="col-md-4 col-md-offset-1 subnav">
			<?php get_sidebar(); ?>
		</div>

	</div><!-- #primary -->
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
