<?php
/*
Template Name: ギャラリーページのテンプレート
*/
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<div class="contents gallery">
<section class="title">
  <h1><span>STUDIO KUM</span><br>GALLERY</h1>
</section>
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_1.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_3.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_4.jpg" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_5.jpg" /></li>
    </ul>
  </div>
</section>
<section class="photo-list">
  <div class="list-container">
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_1.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_1.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_2.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_2.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_3.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_3.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_4.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_4.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_5.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_5.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_6.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_6.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_1.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_1.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_2.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_2.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_3.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_3.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_4.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_4.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_5.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_5.jpg" class="responsive-img"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_6.jpg" data-lightbox="photo" data-title="title" class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_gallery_6.jpg" class="responsive-img"></a>
  </div>
  <p class="comp-button">
    <a href="/">SEE MORE</a>
  </p>
</section>
<section class="instagram">
  <div class="head">
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/images/Instagram_logo.svg" class="responsive-img"></div>
  </div>
  <div class="body">
    <div class="list">
      <div class="profile">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy_thumb.png" class="responsive-img"></div>
        <div class="name">Name</div>
      </div>
      <div class="photo">
        <div class="loader">Loading...</div>
      </div>
    </div>
  </div>
</section>
<script>
$(function(){
  $.ajax({
    type: "POST",
    url: "<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php",
    data: {action : "getInstagramItems"},
    dataType: "json",
    success: function(response){
      if(response.meta.code === 200) {
        var data = response.data;
	console.log(data);
	var insert = '<ul>';
	for (var i = 0; i < data.length; i++) {
	  var dataObject = {
	    href: data[i]['link'],
	    src: data[i]['images']['thumbnail']['url']
          };
          insert += '<li><a href="' + dataObject.href + '" target="_blank"><img src="' + dataObject.src + '" width="150" height="150"></a></li>';
	}
        insert += '</ul>';
	$('.instagram .loader').remove();
	$('.instagram .photo').append(insert);
      };
    },
    error: function(){
      console.log("リクエスト失敗");
    },
    complete: function(){
      console.log("Ajax処理終了");
    }
  });
});
</script>
<?php get_footer(); ?>
