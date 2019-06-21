<?php get_header(); ?>
<header>
<section class="global-header" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/global-header/background.png);">
  <h1 class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="STUDIO KUMU" class="responsive-img"></a></h1>
  <nav>
    <div class="menu"><i class="fas fa-bars fa-2x"></i></div>
    <ul class="read-text">
      <li class="close">&times;</li>
      <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
      <li><a href="<?php echo home_url('/service'); ?>">SERVICE</a></li>
      <li><a href="#artist">ARTIST</a></li>
      <li><a href="#contact">CONTACT</a></li>
      <li><a href="#access">ACCESS</a></li>
    </ul>
  </nav>
  <div class="social">
    <a href="https://www.instagram.com/studiokumu/?hl=ja" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
    <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
  </div>
</section>
</header>
<div class="content top-page">
<section class="concept clearfix" id="service">
  <div class="photo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top/photo_concept.jpg" class="responsive-img">
  </div>
  <div class="text">
    <div class="holder">
      <h1 class="read-text">
	<span>CONCEPT</span>
      </h1>
      <ul>
        <li> 一人一人の中に無限に眠る可能性を写真と言う見える形にしてデザインし新しい未来を切り開く世界を提案する。</li>
        <li>スタジオクムはヘアメイクから撮影まで一人のアーティストが創り上げ表現できる世界を皆様にお届けしています。</li>
      </ul>
      <div class="comp-button">
        <a href="<?php echo home_url('/service'); ?>">SERVICE</a>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('inc/artist'); ?>
<section class="banner">
  <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" target="_blank" class="scale-effect"><img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-youtube.jpg" alt="新しい私に出会う Mr kumu 変身チャンネルスタート! YouTube" class="responsive-img"></a>
</section>
<section class="instagram">
  <div class="head clearfix">
    <div class="holder">
      <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
      <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
    </div>
  </div>
  <div class="photo work">
    <div class="loader">Loading...</div>
  </div>
</section>
<?php get_template_part('inc/studiokumu-contact'); ?>
<?php get_template_part('inc/access'); ?>
<footer>
  <div class="footer-container">
    <div class="box">
      <div class="head">SERVICE</div>
      <ul class="body">
        <li><a href="<?php echo home_url('/service#standard'); ?>">STANDARD</a></li>
        <li><a href="<?php echo home_url('/service#premium'); ?>">PREMIUM</a></li>
        <li><a href="<?php echo home_url('/photosession'); ?>">ASUMI ENDO</a></li>
      </ul>
    </div>
    <div class="box">
      <div class="head">ARTIST</div>
      <ul class="body">
        <li><a href="<?php echo home_url('/kumu'); ?>">Mr kumu</a></li>
        <li><a href="<?php echo home_url('/asumi'); ?>">ASUMI ENDO</a></li>
        <li><a href="<?php echo home_url('/yumi'); ?>">YUMI EINO</a></li>
      </ul>
    </div>
    <div class="box">
      <div class="head">ACCESS</div>
      <ul class="body">
        <li><a href="#address">ADDRESS</a></li>
        <li><a href="#map">MAP</a></li>
      </ul>
    </div>
    <div class="box">
      <div class="head">CONTACT</div>
      <ul class="body">
        <li><a href="#contact">PHONE</a></li>
        <li><a href="#mail">MAIL</a></li>
      </ul>
    </div>
  </div>
  <div class="bottom-container clearfix">
    <h1>Copyright STUDIOKUM All Right Reserved</h1>
    <div class="social">
      <a href="https://www.instagram.com/studiokumu/?hl=ja" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
      <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<script>
$(function(){
  $.ajax({
    type: "POST",
    url: "<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php",
    data: {action : "getInstagramItems1"},
    dataType: "json",
    success: function(response){
      if(response.meta.code === 200) {
        var data = response.data;
	var insert = '<ul>';
	for (var i = 0; i < data.length; i++) {
	  var dataObject = {
	    href: data[i]['link'],
	    src: data[i]['images']['thumbnail']['url']
          };
          insert += '<li><a href="' + dataObject.href + '" target="_blank"><img src="' + dataObject.src + '" class="responsive-img"></a></li>';
	}
        insert += '</ul>';
	$('.instagram .work .loader').remove();
	$('.instagram .photo.work').append(insert);
      };
    },
    error: function(){
      console.log("error getInstagramItems1");
    },
    complete: function(){
      console.log("finished getInstagramItems1");
    }
  });
});
</script>
<?php wp_footer(); ?>
</body>
</html>
