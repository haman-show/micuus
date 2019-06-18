<?php
/*
Template Name: 駐車場 ページのテンプレート
*/
?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<div class="contents sub parking">
<section class="head">
  <h1 class="read-text">お車でお越しの方はこちら</h1>
</section>
<section class="body">
  <div class="container">
    <ul>
      <li>
        <div class="photo clearfix">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/map.png" class="responsive-img"></div>
	  <div class="fee">
            <h2>近隣の駐車場</h2>
            <p><a href="#park_a"><span>A</span>エコロパーク広尾第4駐車場</a></p>
            <p><a href="#park_b"><span>B</span> Parking Lot</a></p>
            <p><a href="#park_c"><span>C</span> パラカ広尾第５</a></p>
          </div>
        </div>
      </li>
      <li id="park_a">
        <div class="text clearfix">
          <div class="num"><span>A</span></div>
          <div class="name">エコロパーク広尾第4駐車場</div>
          <div class="googlemap comp-button"><a href="https://goo.gl/maps/nCN429u86UvAg1rB6" target="_blank">GoogleMAPで見る</a></div>
        </div>
        <div class="photo clearfix">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/p_a.jpg" class="responsive-img"></div>
          <div class="fee"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/fee_a.jpg" class="responsive-img"></div>
        </div>
      </li>
      <li id="park_b">
        <div class="text clearfix">
          <div class="num"><span>B</span></div>
          <div class="name">Parking Lot</div>
          <div class="googlemap comp-button"><a href="https://goo.gl/maps/jiL169hcY42KEkGn7" target="_blank">GoogleMAPで見る</a></div>
        </div>
        <div class="photo clearfix">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/p_b.jpg" class="responsive-img"></div>
          <div class="fee"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/fee_b.jpg" class="responsive-img"></div>
        </div>
      </li>
      <li id="park_c">
        <div class="text clearfix">
          <div class="num"><span>C</span></div>
          <div class="name">パラカ広尾第５</div>
          <div class="googlemap comp-button"><a href="https://goo.gl/maps/5gwKjy3L8cwAQmec6" target="_blank">GoogleMAPで見る</a></div>
        </div>
        <div class="photo clearfix">
          <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/p_c.jpg" class="responsive-img"></div>
          <div class="fee"><img src="<?php echo get_template_directory_uri(); ?>/images/parking/fee_c.jpg" class="responsive-img"></div>
        </div>
      </li>
    </ul>
  </div>
</section>
</div>
<?php get_footer(); ?>


