<?php get_header(); ?>
<div class="content top-page">
<section class="banner">
  <a href="/" target="_blank" class="scale-effect"><img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-youtube.jpg" alt="新しい私に出会う Mr kumu 変身チャンネルスタート! YouTube" class="responsive-img"></a>
</section>
<section class="concept clearfix" id="service">
  <div class="photo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top/concept-photo.png" class="responsive-img">
  </div>
  <div class="message" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top/concept-background.png);">
    <div class="text">
      <div class="holder">
        <h1 class="ff-min">CONCEPT</h1>
        <p>
          一人一人の中に無限に眠る可能性を<br>
          写真と言う見える形にしてデザインし<br>
          新しい未来を切り開く世界を提案する。
        </p>
        <p>
          スタジオクムはヘアメイクから撮影まで<br>
          一人のアーティストが創り上げ
        </p>
        <p>
          表現できる世界を<br>
          皆様にお届けしています。
        </p>
        <div class="comp-button">
          <a href="<?php echo home_url('/service'); ?>">SERVICE</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('inc/artist'); ?>
<section class="instagram">
  <div class="head">
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
  </div>
  <div class="photo">
    <div class="loader">Loading...</div>
  </div>
</section>
<?php get_template_part('inc/contact'); ?>
<?php get_template_part('inc/access'); ?>
<?php get_footer(); ?>
