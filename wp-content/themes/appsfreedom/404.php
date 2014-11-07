<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Blain
 */

get_header(); ?>

	<div class="container">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'OH NO! THAT PAGE CAN’T BE FOUND.', 'blain' ); ?></h1>
					<h2>404 Error. </h2>
					<h3>Please return to our <a href="/">homepage</a>, or visit our <a href="<?php echo get_permalink(5); ?>">learning center</a>.</h3>
				</header><!-- .page-header -->

				<div class="page-content">
					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	</div><!-- #primary -->

<?php get_footer(); ?>