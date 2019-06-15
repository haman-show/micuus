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
<section class="consept" id="concept">
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
<section class="asumi-navigation">
  <div class="head clearfix">
    <div class="sign">
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/text_sign_2.png" width="550" height="80">
    </div>
    <div class="sub">The future depends on<br>what you do today.</div>
  </div>
  <nav>
    <ul>
      <li><a href="#concept" class="parent">ABOUT US</a></li>
      <li>
	<div class="parent">SERVICE</div>
        <div class="child-elements">
          <a href="#studio-portrait">STUDIO PORTRAIT</a>
          <a href="#location-photo">LOCATION PHOTO</a>
          <a href="#salon-photo">SALON PHOTO</a>
        </div>
      </li>
      <li><a href="<?php echo home_url('/asumi/gallery'); ?>" class="parent">GALLERY</a></li>
      <li><a href="#note" class="parent">NOTE</a></li>
      <li><a href="<?php echo home_url('/#access'); ?>" class="parent">ACCESS</a></li>
      <li><a href="<?php echo home_url('/asumi/contact'); ?>" class="parent">CONTACT</a></li>
    </ul>
  </nav>
</section>
<section class="servicemenu studio" id="studio-portrait">
  <div class="asumi-container">
    <div class="head-box">
      <span>SERVICE</span>
    </div>
    <h1>STUDIO<br>PORTRAIT</h1>
    <h2>完全オーダーメイドで創り上げられる世界</h2>
    <ul class="read">
      <li>白い背景とライディング技術で創り出すその世界観は<br>
      一人一人に合わせた完全オーダーメイドで創り上げられる。</li>
      <li>ヘアメイク、フォログラファー、レタッチャー<br>
      全てを一人でデザインしていくからこそ<br>
      作られるその世界のバランスは</li>
      <li>余計なものを削ぎ落とし、一直線に写真を見た人の元へ<br>
      駆けていく。</li>
    </ul>
    <div class="photo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/studio_portlait.jpg" class="responsive-img">
    </div>
    <div class="comp-button">
      <a href="<?php echo home_url('/studio-portrait'); ?>">撮影詳細</a>
    </div>
  </div>
</section>
<section class="servicemenu location" id="location-photo">
  <div class="title clearfix">
    <div class="holder">
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/logo_sgg.png" class="responsive-img">
      </div>
      <div class="catch ff-min">もっと色濃く、より鮮やかに</div>
    </div>
  </div>
  <div class="photo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/location_photo.jpg" class="responsive-img">
  </div>
  <h2 class="ff-min">世界観の中に感じる物語り</h2>
  <ul class="read ff-min">
    <li>野外やハウススタジオ等を使用して創る<br>
    ロケーションフォトプラン</li>
    <li>より色濃く、より鮮やかに貴方の世界を可視化します</li>
  </ul>
  <div class="comp-button">
    <a href="https://reserva.be/studiomicuus/contact" target="_blank">お問い合わせ</a>
  </div>
</section>
<section class="servicemenu salon" id="salon-photo">
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
