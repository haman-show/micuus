<?php
/*
Template Name: クム アーティストページのテンプレート
*/
?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<div class="contents kumu">
<section class="concept">
  <div class="container">
    <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/kumu/photo_top.jpg" class="responsive-img"></div>
    <div class="copy"><img src="<?php echo get_template_directory_uri(); ?>/images/kumu/text_copy.png" class="responsive-img"></div>
    <ul class="read">
      <li>今となっては本当に長い事ヘアーメイクの仕事をしてまいりました、<br>
      ざっと30年でしょうか！<br>
      東京広尾にこのスタジオをOPENしてもう既に１８年です。<br>
      僕がこんなに長い間スタジオを運営してこれたのは、<br>
      素敵なスタッフTO刺激しあい競争し合いながらやってこれたおかげだと思っています。</li>
      <li>僕の撮影では、<br>
      メイクが映えるベストな角度、そしてメイクが映えるすばらしい表情を<br>
      写真で映し止め、貴女のベストを創り上げます。</li>
      <li>撮影をなさったお客様が<br>
      スタジオを出てからも、このままずっとこのままでいたいと思う<br>
      それが何よりも一番嬉しい事です。</li>
    </ul>
  </div>
</section>
<section class="movie-wrap">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/pqlV-MXChx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
<section class="instagram">
  <div class="head">
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
    <div class="text">スタジオで撮影したポートフォリオ集です</div>
  </div>
  <div class="photo">
    <div class="loader">Loading...</div>
  </div>
  <div class="head">
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
    <div class="text">趣味のロードバイクや愛猫達を紹介しています</div>
  </div>
  <div class="photo">
    <div class="loader">Loading...</div>
  </div>
</section>
<?php get_template_part('inc/studiokumu-contact'); ?>
<?php get_template_part('inc/access'); ?>
</div>
<?php get_footer(); ?>


