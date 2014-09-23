<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOM-POST-TYPES.PHP
// -----------------------------------------------------------------------------
// Sets up custom post types for LeanStack.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Portfolio Custom Post Type
//   02. Add Thumbnails to the Admin Screen
// =============================================================================

// Portfolio Custom Post Type
// =============================================================================

function x_portfolio_init() {

  $slug      = sanitize_title( x_get_option( 'x_custom_portfolio_slug', 'portfolio-item' ) );
  $menu_icon = ( floatval( get_bloginfo( 'version' ) ) >= '3.8' ) ? 'dashicons-format-gallery' : NULL;


  //
  // Enable the custom post type.
  //

  $labels = array(
    'name'               => __( 'Apps', '__x__' ),
    'singular_name'      => __( 'App Item', '__x__' ),
    'add_new'            => __( 'Add New Item', '__x__' ),
    'add_new_item'       => __( 'Add New App Item', '__x__' ),
    'edit_item'          => __( 'Edit App Item', '__x__' ),
    'new_item'           => __( 'Add New App Item', '__x__' ),
    'view_item'          => __( 'View Item', '__x__' ),
    'search_items'       => __( 'Search Apps', '__x__' ),
    'not_found'          => __( 'No App items found', '__x__' ),
    'not_found_in_trash' => __( 'No App items found in trash', '__x__' )
  );

  $args = array(
    'labels'          => $labels,
    'public'          => true,
    'show_ui'         => true,
    'supports'        => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'author', 'custom-fields', 'revisions' ),
    'capability_type' => 'post',
    'hierarchical'    => false,
    'rewrite'         => array( 'slug' => $slug, 'with_front' => false ),
    'menu_position'   => 5,
    'menu_icon'       => $menu_icon,
    'has_archive'     => true
  );

  $args = apply_filters( 'portfolioposttype_args', $args );

  register_post_type( 'x-portfolio', $args );


  //
  // Portfolio tags taxonomy.
  //

  $taxonomy_portfolio_tag_labels = array(
    'name'                       => __( 'App Tags', '__x__' ),
    'singular_name'              => __( 'App Tag', '__x__' ),
    'search_items'               => __( 'Search App Tags', '__x__' ),
    'popular_items'              => __( 'Popular App Tags', '__x__' ),
    'all_items'                  => __( 'All App Tags', '__x__' ),
    'parent_item'                => __( 'Parent App Tag', '__x__' ),
    'parent_item_colon'          => __( 'Parent App Tag:', '__x__' ),
    'edit_item'                  => __( 'Edit App Tag', '__x__' ),
    'update_item'                => __( 'Update App Tag', '__x__' ),
    'add_new_item'               => __( 'Add New App Tag', '__x__' ),
    'new_item_name'              => __( 'New App Tag Name', '__x__' ),
    'separate_items_with_commas' => __( 'Separate app tags with commas', '__x__' ),
    'add_or_remove_items'        => __( 'Add or remove app tags', '__x__' ),
    'choose_from_most_used'      => __( 'Choose from the most used app tags', '__x__' ),
    'menu_name'                  => __( 'App Tags', '__x__' )
  );

  $taxonomy_portfolio_tag_args = array(
    'labels'            => $taxonomy_portfolio_tag_labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_ui'           => true,
    'show_tagcloud'     => true,
    'hierarchical'      => false,
    'rewrite'           => array( 'slug' => $slug . '-tag', 'with_front' => false ),
    'show_admin_column' => true,
    'query_var'         => true
  );

  register_taxonomy( 'portfolio-tag', array( 'x-portfolio' ), $taxonomy_portfolio_tag_args );


  //
  // Portfolio categories taxonomy.
  //

  $taxonomy_portfolio_category_labels = array(
    'name'                       => __( 'App Categories', '__x__' ),
    'singular_name'              => __( 'App Category', '__x__' ),
    'search_items'               => __( 'Search App Categories', '__x__' ),
    'popular_items'              => __( 'Popular App Categories', '__x__' ),
    'all_items'                  => __( 'All App Categories', '__x__' ),
    'parent_item'                => __( 'Parent App Category', '__x__' ),
    'parent_item_colon'          => __( 'Parent App Category:', '__x__' ),
    'edit_item'                  => __( 'Edit App Category', '__x__' ),
    'update_item'                => __( 'Update App Category', '__x__' ),
    'add_new_item'               => __( 'Add New App Category', '__x__' ),
    'new_item_name'              => __( 'New App Category Name', '__x__' ),
    'separate_items_with_commas' => __( 'Separate app categories with commas', '__x__' ),
    'add_or_remove_items'        => __( 'Add or remove app categories', '__x__' ),
    'choose_from_most_used'      => __( 'Choose from the most used app categories', '__x__' ),
    'menu_name'                  => __( 'App Categories', '__x__' ),
  );

  $taxonomy_portfolio_category_args = array(
    'labels'            => $taxonomy_portfolio_category_labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_tagcloud'     => true,
    'hierarchical'      => true,
    'rewrite'           => array( 'slug' => $slug . '-category', 'with_front' => false ),
    'query_var'         => true
  );

  register_taxonomy( 'portfolio-category', array( 'x-portfolio' ), $taxonomy_portfolio_category_args );


  //
  // Flush rewrite rules if portfolio slug is updated.
  //

  if ( get_transient( 'x_transient_portfolio_slug_before' ) != get_transient( 'x_transient_portfolio_slug_after' ) ) {
    flush_rewrite_rules( false );
    delete_transient( 'x_transient_portfolio_slug_before' );
    delete_transient( 'x_transient_portfolio_slug_after' );
  }

}

add_action( 'init', 'x_portfolio_init' );



// Add Thumbnails to the Admin Screen
// =============================================================================

function x_add_thumbnail_column( $columns ) {
  $thumb   = array( 'thumb' => __( 'Thumbnail', '__x__' ) );
  $columns = array_slice( $columns, 0, 2 ) + $thumb + array_slice( $columns, 1 );
  return $columns;
}

function x_add_thumbnail_column_content( $column ) {
  if ( $column == 'thumb' ) {
    echo '<a href="' . get_edit_post_link() . '">' . get_the_post_thumbnail( get_the_ID(), array( 200, 200 ) ) . '</a>';
  }
}

add_filter( 'manage_x-portfolio_posts_columns', 'x_add_thumbnail_column', 10, 1 );
add_action( 'manage_x-portfolio_posts_custom_column', 'x_add_thumbnail_column_content', 10, 1 );