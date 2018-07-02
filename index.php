<?php get_header(); ?>
<header>
  <div class="container">
    <div class="header-holder">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/images/txt_title.png" width="630" height="65" class="responsive-img" /></h1>
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
              <ul class="global-navigation">
                <li><a href="<?php echo get_home_url(); ?>">PROFILE</a></li>
                <li><a href="<?php echo get_home_url(); ?>">SERVICE</a></li>
                <li><a href="<?php echo get_home_url(); ?>">WORKS</a></li>
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
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_2.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_3.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_4.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_5.jpg" /></li>
    </ul>
  </div>
</section>
<section class="welcome">
  <div class="container">
    <div class="title">
      <div class="sign"><img src="<?php echo get_template_directory_uri(); ?>/images/sign_1.png" width="105" height="41" /></div>
      <h1>ASUMI ENDO PHOTOGRAPHY</h1>
    </div>
    <div class="read">
      <h2>一期一会が生むドラマ</h2>
      <p class="body">写真は一瞬を切り取るものでありながら、その1枚の中には<br>
      ドラマやストーリーがある。<br>
      撮り手の意図だけに留まらず、人や物、場所の思いやエネルギーが乗っかって<br>
      一枚の写真は生まれていく。</p>
    </div>
    <div class="comp-button">
      <a href="<?php echo get_home_url(); ?>">ABOUT</a>
    </div>
  </div>
</section>
<section class="service">
  <div class="head"><img src="<?php echo get_template_directory_uri(); ?>/images/top_head_studio.jpg" class="responsive-img" /></div>
  <ul class="service-photos clearfix">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_studio_1.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_studio_2.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_studio_3.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_studio_4.jpg" /></li>
  </ul>
  <div class="comp-button">
    <a href="<?php echo get_home_url(); ?>">SEE MORE</a>
  </div>
</section>
<section class="service">
  <div class="head"><img src="<?php echo get_template_directory_uri(); ?>/images/top_head_location.jpg" class="responsive-img" /></div>
  <ul class="service-photos clearfix">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_location_1.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_location_2.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_location_3.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_location_4.jpg" /></li>
  </ul>
  <div class="comp-button">
    <a href="<?php echo get_home_url(); ?>">SEE MORE</a>
  </div>
</section>
<section class="service">
  <div class="head"><img src="<?php echo get_template_directory_uri(); ?>/images/top_head_colum.jpg" class="responsive-img" /></div>
</section>
<section class="works">
  <ul class="works-photos clearfix">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_works_1.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_works_2.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_works_3.jpg" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/top_works_4.jpg" /></li>
  </ul>
  <div class="comp-button">
    <a href="<?php echo get_home_url(); ?>">WORKS</a>
  </div>
</section>
<?php get_footer(); ?>


