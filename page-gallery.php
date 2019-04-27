<?php
/*
Template Name: ギャラリーページのテンプレート
*/
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<div class="contents gallery">
<section class="title">
  <h1><span>STUDIO KUM</span><br>GALLERY</h1>
  <h2 id="hoge"></h2>
</section>
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_2.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_3.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_4.jpg" /></li>
    </ul>
  </div>
</section>
<section class="photo-list">
  <div class="flex-container">
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_1.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_2.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_3.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_4.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_1.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_2.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_3.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_4.jpg" class="responsive-img"></div>
    <div class="flex-box"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery_sample_1.jpg" class="responsive-img"></div>
  </div>
  <p class="comp-button">
    <a href="/">SEE MORE</a>
  </p>
</section>
<section class="instagram">
  <div class="head">
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/images/Instagram_logo.svg" class="responsive-img"></div>
  </div>
</section>
<script>
$.ajax({
  type: "POST",
  url: "<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php",
  data:{ action : "testAjax"},
  success: function( a ){
    console.log(a);
    $( "#hoge" ).text( a );
  },
  error: function(){
    console.log("リクエスト失敗");
  },
  complete: function(){
    console.log("Ajax処理終了");
  }
});
</script>
<?php get_footer(); ?>
