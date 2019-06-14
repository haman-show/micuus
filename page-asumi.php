<?php
/*
Template Name: アスミ アーティストページのテンプレート
*/
?>
<?php get_header(); ?>
<div class="contents asumi">
<section class="logo">
  <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="STUDIO KUMU" class="responsive-img" /></a></h1>
</section>
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/slider_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/slider_2.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/slider_3.jpg" /></li>
    </ul>
  </div>
</section>
<section class="consept">
  <div class="sign">
    <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/text_sign_1.png" width="985" height="230">
  </div>
  <h2 class="ff-min">可能性を可視化して未来を先撮りする</h2>
  <h1>ASUI ENDO PHOTOGRAPHY</h1>
  <ul>
    <li>私を創っているのは、私だけじゃない。</li>
    <li>髪や骨格や、纏ったお洋服だけでもない。<br>
    今までに出会った人や、悩んだ事、決めた事そうした全ての選択が<br>
    今の私を創ってる</li>
    <li>今まで歩んできた貴方の道を視て、貴方を創っている全ての素材の声を<br>
    写真として可視化します。</li>
    <li>自分の可能性は自分で決めたらいけない。<br>
    気付いている魅力も、まだ気付いてない魅力も、
    もっと引き出そう！</li>
  </ul>
</section>
<section class="localnavigation">
  <div class="head clearfix">
    <div class="sign">
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/text_sign_2.png" width="550" height="80">
    </div>
    <div class="sub">The future depends on<br>what you do today.</div>
  </div>
  <nav>
    <ul>
      <li><a href="">ABOUT US</a></li>
      <li><a href="">SERVICE</a></li>
      <li><a href="">GALLERY</a></li>
      <li><a href="">NOTE</a></li>
      <li><a href="">ACCESS</a></li>
      <li><a href="">CONTACT</a></li>
    </ul>
  </nav>
</section>
<section class="works">
  <ul class="cover-list clearfix">
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/cover_1.jpg" class="responsive-img">
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/cover_2.jpg" class="responsive-img">
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/cover_3.jpg" class="responsive-img">
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/cover_4.jpg" class="responsive-img">
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/cover_5.jpg" class="responsive-img">
    </li>
  </ul>
</section>
</div>
<?php get_footer(); ?>
