<?php
function twpp_enqueue_styles() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  wp_enqueue_style( 
    'sub-style',
    get_template_directory_uri() . '/css/flexslider.css' 
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );

function testAjax() {
  echo "あいうえお";
  die();
}
add_action( "wp_ajax_testAjax" , "testAjax" );
add_action( "wp_ajax_nopriv_testAjax" , "testAjax" );
?>
