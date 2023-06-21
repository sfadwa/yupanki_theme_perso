<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

include 'functions/register_assets.php';

// add custom settings page:
// include 'functions/cpt_settings.php';

// suppression de la balise title dans la function wp_head
// remove_action( 'wp_head', '_wp_render_title_tag', 1 );

// suppression des attributs type sur les balises script et style (w3c)
add_action(
  'after_setup_theme',
  function() {
      add_theme_support( 'html5', [ 'script', 'style' ] );
  }
);

// prohibit public access to the API
add_filter( 'rest_authentication_errors', function( $result ) {
      if ( ! empty( $result ) ) {
        return $result;
      }
      if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'Vous devez être connecté pour accéder à cette ressource.', array( 'status' => 401 ) );
      }
      if ( ! current_user_can( 'administrator' ) ) {
        return new WP_Error( 'rest_not_admin', 'Vous n\'avez pas les droits suffisants pour accéder à cette ressource.', array( 'status' => 401 ) );
      }
      return $result;
 });