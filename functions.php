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

// カスタム投稿タイプ ギャラリー 遠藤アスミ 用
function create_post_type() {
  $labels= array(
    'name' => 'ギャラリー アスミ',
    'singular_name' => 'galleryasumi'
  );
  $args = array(
    'labels'    => $labels,
    'supports'  => array('title', 'editor'),
    'public'    => true,
    'menu_position' => 5
  );
  register_post_type('galleryasumi', $args);
}
add_action( 'init', 'create_post_type' );

//本体ギャラリーCSS停止
add_filter( 'use_default_gallery_style', '__return_false' );

// カスタムフィールドを追加
add_action('admin_menu', 'add_reserve_box');
add_action('save_post', 'save_reserve_box_custom_fields');

function add_reserve_box() {
  add_meta_box('reserve_setting', '予約公開設定', 'insert_reserve_box', 'page', 'normal');
}
 
function insert_reserve_box() {
  global $post;
  $id = get_the_ID();
  $get_open_reserve_data = get_post_meta($id,'reservecheckbox',true);
  $reservecheckbox =$get_open_reserve_data ? $get_open_reserve_data : array();
  $data = array("予約を公開する");
  foreach ( $data as $d ) {
    if(array_search($d, $reservecheckbox) !== false) {
      $check = "checked"; 
    } else {
      $check = "";
    }
    echo '<label><input type="checkbox" name="reservecheckbox" value="' . esc_attr($d) . '" ' . $check . '>' . esc_html($d) . '</label><br>';
  }
}

// 更新処理
function save_reserve_box_custom_fields($post_id) {
  if (isset($_POST['reservecheckbox']) && $_POST['reservecheckbox'] ) {
    update_post_meta( $post_id, 'reservecheckbox', $_POST['reservecheckbox'] );
  } else {
    delete_post_meta( $post_id, 'reservecheckbox', get_post_meta($post_id, 'reservecheckbox', true) );
  }
}

?>
