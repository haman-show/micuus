<?php get_header(); ?>
<header>
  <h1><img src="<?php echo get_template_directory_uri(); ?>/images/txt_title.png" width="630" height="65" /></h1>
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
</header>
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/gr_top_1.jpg" /></li>
    </ul>
  </div>
</section>
<section class="welcome">
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
</section>
<?php get_footer(); ?>


