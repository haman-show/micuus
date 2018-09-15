<?php get_header(); ?>
<header>
  <div class="container">
    <div class="header-holder">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></h1>
      <div class="menu">
        <div id="nav-drawer">
          <input id="nav-input" type="checkbox" class="nav-unshown">
          <label id="nav-open" for="nav-input"><span></span></label>
          <label class="nav-unshown" id="nav-close" for="nav-input"></label>
          <div id="nav-content">
            <div class="head">
              <label class="nav-unshown" for="nav-input">MENU</label>
            </div>
            <nav>
              <ul class="global-navigation clearfix">
                <li>
                  <a href="<?php echo get_home_url(); ?>">PROFILE</a>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>">SERVICE</a>
                  <ul class="child">
                    <li><a href="/">STUDIO PORTRAIT</a></li>
                    <li><a href="/">LOCATION PHOTO</a></li>
                  </ul>
                </li>
                <li>
                  <a href="<?php echo get_home_url(); ?>">WORKS</a>
                  <ul class="child">
                    <li><a href="/">hoge</a></li>
                    <li><a href="/">fuga</a></li>
                    <li><a href="/">hoge</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo get_home_url(); ?>">GALLERY</a></li>
                <li><a href="<?php echo get_home_url(); ?>">BLOG</a></li>
                <li><a href="<?php echo get_home_url(); ?>">ACCESS</a></li>
                <li><a href="<?php echo get_home_url(); ?>">CONTACT</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/slider_1.jpg" />
        <p>テキスト</p>
      </li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider_2.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider_3.jpg" /></li>
    </ul>
  </div>
</section>
<section class="content studio-photo">
  <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/pic_studio_1.jpg" class="responsive-img"></div>
  <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/pic_studio_2.jpg" class="responsive-img"></div>
  <div class="txt-section-read ff-min">素直に生きると心地良い。</div>
  <div class="txt-section-title">STUDIO<br>PORT<br>LAITE</div>
  <div class="txt-box">
    <p class="head">可能性を可視化して<br>未来を先撮りしよう</p>
    <p class="read">自分の可能性は自分には見え辛い。<br>「今の自分が全て」だって<br>そんな事はなくて</p>
    <p class="read">いつだってやってみたい！<br>と思った時がタイミング</p>
    <p class="comp-button">
      <a href="/">SEE MORE</a>
    </p>
  </div>
</section>
<section class="content profile">
  <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/pic_profile_1.jpg" class="responsive-img"></div>
  <div class="txt-box">
    <p class="name">-ASUMI ENDO 遠藤あすみ-</p>
    <p class="head">
      <span>HAIR & MAKE</span>
      <span>&times;</span>
      <span>PHOTO &times; MIND</span>
    </p>
    <p class="read">
      <span>ヘアメイクから撮影まで、一人で手掛けるから生まれる</span>
      <span>マッチングの良さが特徴。</span>
    </p>
    <p class="read">
      <span>「可能性を可視化して、未来を先撮り」をコンセプトに</span>
      <span>STUDIO KUMU アーティストとして、10000人を超える</span>
      <span>撮影経験を持ち、人物を中心としたジャンルの問わない撮影を</span>
      <span>行なっている。</span>
    </p>
    <p class="read">
      <span>趣味は洋裁とDIY！</span>
      <span>創るとは何か、クリエイティブとは何かを追求する事が好きで</span>
      <span>主催するレッスンでは、技術だけでなく、クリエイティブの本質に</span>
      <span>触れる、ワークショップ等も取り入れ、</span>
      <span>創作人間を増やす活動に力を入れている。</span>
    </p>
  </div>
</section>
<?php get_footer(); ?>


