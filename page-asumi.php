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
    <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/text_sign_1.png" class="responsive-img">
  </div>
  <h2 class="ff-min read-text">可能性を可視化して<br>未来を先撮りする</h2>
  <h1 class="read-text">ASUI ENDO <br>PHOTOGRAPHY</h1>
  <ul class="responsive-read read-text">
    <li>私を創っているのは、私だけじゃない。</li>
    <li>
      <span>髪や骨格や、纏ったお洋服だけでもない。</span>
      <span>今までに出会った人や、悩んだ事、決めた事そうした全ての選択が</span>
      <span>今の私を創ってる</span>
    </li>
    <li>
      <span>今まで歩んできた貴方の道を視て、貴方を創っている全ての素材の声を</span>
      <span>写真として可視化します。</span>
    </li>
    <li>
      <span>自分の可能性は自分で決めたらいけない。</span>
      <span>気付いている魅力も、まだ気付いてない魅力も、</span>
      <span>もっと引き出そう！</span>
    </li>
  </ul>
</section>
<section class="asumi-navigation">
  <div class="head clearfix">
    <div class="sign">
      <img src="<?php echo get_template_directory_uri(); ?>/images/asumi/text_sign_2.png" class="responsive-img">
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
      <li><a href="<?php echo home_url('/contact-asumi'); ?>" class="parent">CONTACT</a></li>
    </ul>
  </nav>
</section>
<section class="servicemenu studio" id="studio-portrait">
  <div class="asumi-container">
    <div class="head-box">
      <span>SERVICE</span>
    </div>
    <h1>STUDIO<br>PORTRAIT</h1>
    <h2 class="read-text">完全オーダーメイドで<br>創り上げられる世界</h2>
    <ul class="read reaponsive-read read-text">
      <li>
        <span>白い背景とライディング技術で創り出すその世界観は</span>
	<span>一人一人に合わせた完全オーダーメイドで創り上げられる。</span>
      </li>
      <li>
        <span>ヘアメイク、フォログラファー、レタッチャー</span>
        <span>全てを一人でデザインしていくからこそ</span>
	<span>作られるその世界のバランスは</span>
      </li>
      <li>
        <span>余計なものを削ぎ落とし、一直線に写真を見た人の元へ</span>
	<span>駆けていく。</span>
      </li>
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
  <h2 class="ff-min read-text">世界観の中に感じる物語り</h2>
  <ul class="read ff-min read-text responsive-read">
    <li>
      <span>野外やハウススタジオ等を使用して創る</span>
      <span>ロケーションフォトプラン</span>
    </li>
    <li>
      <span>より色濃く、より鮮やかに貴方の世界を可視化します</span>
    </li>
  </ul>
  <div class="comp-button">
    <a href="https://reserva.be/studiomicuus/contact" target="_blank">お問い合わせ</a>
  </div>
</section>
<section class="servicemenu salon" id="salon-photo">
  <div class="photo clearfix">
    <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/salon_photo.jpg" class="responsive-img"></div>
    <div class="text">STUDIO KUMU - ASUMI ENDO - Creative photo MAGIC.</div>
  </div>
  <div class="read read-text">サロンイメージ撮影や各種店舗商用撮影なども承っております<br>撮影詳細はお問い合わせください。</div>
  <div class="comp-button">
    <a href="https://reserva.be/studiomicuus/contact" target="_blank">お問い合わせ</a>
  </div>
</section>
<section class="note" id="note">
  <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/top/photo-asumi.png" alt="HAIR-MAKE & PHOTO 遠藤あすみ" class="responsive-img"></div>
  <div class="head">
    <span class="line left"><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/line_left.png" width="20" height="31"></span>
    <span class="logo-note"><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/logo_note.gif" width="158" height="40"></span>
    <span class="text read-text">始めました</span>
    <span class="line right"><img src="<?php echo get_template_directory_uri(); ?>/images/asumi/line_right.png" width="20" height="31"></span>
  </div>
  <div class="read read-text">撮影レポやクリエイティブのお話し<br>イベントレポなどを執筆しております。是非チェックしてみて下さい！</div>
  <div class="comp-button">
    <a href="https://note.mu/asumi_studiokumu" target="_blank">CHECK</a>
  </div>
</section>
<?php get_template_part('inc/covers'); ?>
<section class="banner">
  <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" target="_blank" class="scale-effect"><img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-youtube.jpg" alt="新しい私に出会う Mr kumu 変身チャンネルスタート! YouTube" class="responsive-img"></a>
</section>
<?php get_template_part('inc/artist'); ?>
</div>
<footer class="asumi-footer">
  <div class="asumi-navigation">
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
        <li><a href="<?php echo home_url('/contact-asumi'); ?>" class="parent">CONTACT</a></li>
      </ul>
    </nav>   
  </div>
  <div class="bottom-container clearfix">
    <h1>Copyright STUDIOKUM All Right Reserved</h1>
    <div class="social">
      <a href="https://www.facebook.com/asumi.eino.9" class="facebook" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="https://www.instagram.com/micuus.kumu/?hl=ja" class="instagram" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html>
