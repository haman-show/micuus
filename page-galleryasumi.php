<?php
/*
Template Name: アスミ専用ギャラリー
*/
?>
<?php get_header(); ?>
<div class="contents asumi gallery">
<?php get_template_part('inc/asumi-navigation'); ?>
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/slider_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gallery/slider_2.jpg" /></li>
    </ul>
  </div>
</section>
<section class="title">
  <h1>
    <span class="upper">ASUMI ENDO</span>
    <span class="bottom">PHOTOGALLERY</span>
  </h1>
  <ul class="read-text responsive-read">
    <li>
      <span>スタジオポートレートからロケーションフォト、</span>
      <span>作品撮りから書籍、商品の撮影まで様々なジャンルのお写真を</span>
      <span>ギャラリーとしてまとめました。</span>
    </li>
    <li>
      <span>ヘアメイクから撮影まで全てデザインして作るこだわりの写真達です。</span>
    </li>
  </ul>
</section>
<section class="navigation">
  <nav>
    <ul class="read-text">
      <li>
        <a href="#studio">STUDIO</a>
      </li>
      <li>
        <a href="#location">LOCATION</a>
      </li>
      <li>
        <a href="#salon">SALON</a>
      </li>
      <li>
        <a href="#book">BOOK</a>
      </li>
    </ul>
  </nav>
</section>
<?php query_posts('post_type=galleryasumi&order=ASC'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="item-list <?php echo get_post_field( 'post_name', get_the_ID() ); ?>" id="<?php echo get_post_field( 'post_name', get_the_ID() ); ?>">
  <div class="holder">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; endif; ?>
</div>
<script>
$(function(){
  $(".item-list.studio .gallery-item .gallery-icon a").attr('data-lightbox', 'studio');
  $(".item-list.location .gallery-item .gallery-icon a").attr('data-lightbox', 'location');
  $(".item-list.salon .gallery-item .gallery-icon a").attr('data-lightbox', 'salon');
  $(".item-list.book .gallery-item .gallery-icon a").attr('data-lightbox', 'book');
});
</script>
<?php get_template_part('inc/asumi-footer'); ?>
