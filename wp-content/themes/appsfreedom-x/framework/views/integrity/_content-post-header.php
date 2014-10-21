<?php

// =============================================================================
// VIEWS/INTEGRITY/_CONTENT-POST-HEADER.PHP
// -----------------------------------------------------------------------------
// Standard <header> output for various posts.
// =============================================================================

?>

<header class="entry-header">
  <?php if ( is_single() ) : ?>
  <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php x_integrity_entry_meta(); // moved this here just for single posts, just for appsfreedom ?>
  <?php else : ?>
  <h2 class="entry-title">
    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php x_the_alternate_title(); ?></a>
  </h2>
  <?php endif; ?>
  <?php // put meta in the listings if you like, but removed for appsfreedom x_integrity_entry_meta(); ?>
</header>