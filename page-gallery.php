<?php
/*
Template Name: ギャラリーのテンプレート
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
<section class="item-list studio" id="studio">
  <h1 class="read-text">STUDIO</h1>
  <div class="holder max-column-3">
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_1.jpg" data-lightbox="studio" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_1.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_2.jpg" data-lightbox="studio" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_2.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_3.jpg" data-lightbox="studio" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_3.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_4.jpg" data-lightbox="studio" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_4.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_5.jpg" data-lightbox="studio" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_5.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_6.jpg" data-lightbox="studio" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/studio_6.jpg" class="responsive-img">
    </a>
  </div>
</section>
<section class="item-list location" id="location">
  <h1 class="read-text">LOCATION</h1>
  <div class="holder max-column-2">
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/location_1.jpg" data-lightbox="location" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/location_1.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/location_2.jpg" data-lightbox="location" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/location_2.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/location_3.jpg" data-lightbox="location" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/location_3.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/location_4.jpg" data-lightbox="location" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/location_4.jpg" class="responsive-img">
    </a>
  </div>
</section>
<section class="item-list salon" id="salon">
  <h1 class="read-text">SALON</h1>
  <div class="holder max-column-2">
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_1.jpg" data-lightbox="salon" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_1.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_2.jpg" data-lightbox="salon" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_2.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_3.jpg" data-lightbox="salon" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_3.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_4.jpg" data-lightbox="salon" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_4.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_5.jpg" data-lightbox="salon" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_5.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_6.jpg" data-lightbox="salon" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/salon_6.jpg" class="responsive-img">
    </a>
  </div>
</section>
<section class="item-list book" id="book">
  <h1 class="read-text">BOOK</h1>
  <div class="holder max-column-4">
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_1.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_1.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_2.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_2.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_3.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_3.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_4.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_4.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_5.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_5.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_6.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_6.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_7.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_7.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_8.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_8.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_9.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_9.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_10.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_10.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_11.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_11.jpg" class="responsive-img">
    </a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/gallery/book_12.jpg" data-lightbox="book" class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/book_12.jpg" class="responsive-img">
    </a>
  </div>
</section>
</div>
<?php get_template_part('inc/asumi-footer'); ?>
