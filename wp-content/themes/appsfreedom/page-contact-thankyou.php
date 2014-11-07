<?php
/*
Template Name: Contact thankyou
*/

get_header(); ?>


  <section class="hero super-hero bg-md-blue">
    <div class="container text-center">
      <div class="col-md-12">
        <h1 class="headline"><?php the_title(); ?></h1>
      </div>
    </div>
  </section>


	<section class="bg-dark-blue">
	</section>

	<section class="content">
		<div class="jumbotron container text-center">
			<h1 class="headline"><?php the_content(); ?></h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>We respond to all inquiries within three business days.</p>
					<p><strong>Next Steps:</strong></p>
					<!--<p>You’ll receive an email within one business day, giving you full access to the apps Freedom platform for a 30-day test drive.</p>
					<p>Save this email as it will include your login credentials and access to two free coaching sessions to ensure your test drive shows you exactly how the appsFreedom platform can work for you.</p>
					-->
					<a type="button" class="btn btn-lg primary-button" href="/">Homepage <span class='btn-arrow'></span></a>
					<br /><a type="button" class="btn btn-lg primary-button" href="<?php echo get_permalink(24); ?>">App Library <span class='btn-arrow'></span></a>
					<br /><a type="button" class="btn btn-lg primary-button" href="<?php echo get_permalink(22); ?>">Platform Tour <span class='btn-arrow'></span></a>
					<br /><a type="button" class="btn btn-lg primary-button" href="<?php echo get_permalink(28); ?>">Test Drive <span class='btn-arrow'></span></a>

				</div>
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/img/george.png" alt="" class="img-responsive center-block" />
				</div>
			</div>
		</div>
	</section>


  <?php get_footer(); ?>