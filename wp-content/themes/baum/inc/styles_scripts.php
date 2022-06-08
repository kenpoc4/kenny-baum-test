<?php
function baum_styles_scripts(){
    wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/css/main.css', '', '4.0.0');
    wp_enqueue_style('style-compilado', get_template_directory_uri() . '/assets/css/compilado.css', '', '4.0.0');

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'api-baum', get_template_directory_uri() . '/assets/js/call-api.js', array('jquery'), '1.0.0', true);

    wp_localize_script( 'api-baum', 'baum', array(
        'apiurl'    => home_url( 'wp-json/baum/' )
    ) );
}
add_action('wp_enqueue_scripts',  'baum_styles_scripts');