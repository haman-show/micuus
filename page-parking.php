<?php
/*
Template Name: 駐車場 アーティストページのテンプレート
*/
?>
<?php get_header(); ?>
<div class="contents parking">
<section class="head">
  <h1>お車でお越しの方はこちら</h1>
</section>
<section class="body">
  <div class="parking-container">
    <ul>
      <li>
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
      <li>
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
      <li>
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


