<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Blain
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<section class="hero bg-gray" id="mf17">
	    <div class="jumbotron container text-center">
	      <h1 class="headline"><?php the_title(); ?></h1>
	       <p style="align:center;">(Last Updated <?php the_modified_time(); ?>)</p>
	    </div>
	</section>
	<div class="page-content bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; // end of the loop. ?>
	
<?php get_footer(); ?>
