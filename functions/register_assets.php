<?php

function register_assets(){
	
    wp_enqueue_style(
          'reset-css',
          get_template_directory_uri().'/assets/styles/reset.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'main-css',
          get_template_directory_uri().'/assets/styles/main.css',
          array(),
          '1.0'
    );
	
    wp_enqueue_style(
          'content-css',
          get_template_directory_uri().'/assets/styles/content.css',
          array(),
          '1.0'
    );

}
add_action('wp_enqueue_scripts', 'register_assets');


function register_footer_assets(){
        
      wp_enqueue_script(
            'nav',
            get_template_directory_uri().'/assets/scripts/nav.js',
            array(),
            '1.0',
            true
      );
  
}
add_action('wp_enqueue_scripts', 'register_footer_assets');