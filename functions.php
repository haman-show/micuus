<?php
function custom_title_separator($sep) {
  $sep = '|';
  return $sep;
}
add_filter( 'document_title_separator', 'custom_title_separator' );
add_theme_support( 'title-tag' );

function twpp_enqueue_styles() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  wp_enqueue_style( 
    'sub-style',
    get_template_directory_uri() . '/css/flexslider.css' 
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );

function getInstagramItems1() {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $access_token = "xxxxxxxxxx";
    $userid = xxxxxxxxxx;
    $count = 8;
    $request_url = 'https://api.instagram.com/v1/users/'.$userid.'/media/recent/?access_token='.$access_token.'&count='.$count;
    $results = @file_get_contents($request_url);
    echo $results;
    die();
  }
}
add_action( "wp_ajax_getInstagramItems1" , "getInstagramItems1" );
add_action( "wp_ajax_nopriv_getInstagramItems1" , "getInstagramItems1" );

function getInstagramItems2() {
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $access_token = "xxxxxxxxxx";
    $userid = xxxxxxxxxx;
    $count = 8;
    $request_url = 'https://api.instagram.com/v1/users/'.$userid.'/media/recent/?access_token='.$access_token.'&count='.$count;
    $results = @file_get_contents($request_url);
    echo $results;
    die();
  }
}
add_action( "wp_ajax_getInstagramItems2" , "getInstagramItems2" );
add_action( "wp_ajax_nopriv_getInstagramItems2" , "getInstagramItems2" );
?>
