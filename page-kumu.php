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
    <ul class="read read-text responsive-read">
      <li>
        <span>今となっては本当に長い事ヘアーメイクの仕事をしてまいりました、</span>
        <span>ざっと30年でしょうか！</span>
        <span>東京広尾にこのスタジオをOPENしてもう既に１８年です。</span>
        <span>僕がこんなに長い間スタジオを運営してこれたのは、</span>
        <span>素敵なスタッフと刺激しあい競争し合いながらやってこれたおかげだと思っています。</span>
      </li>
      <li>
        <span>僕の撮影では、</span>
        <span>メイクが映えるベストな角度、そしてメイクが映えるすばらしい表情を</span>
        <span>写真で映し止め、貴女のベストを創り上げます。</span>
      </li>
      <li>
        <span>撮影をなさったお客様が</span>
        <span>スタジオを出てからも、このままずっとこのままでいたいと思う</span>
        <span>それが何よりも一番嬉しい事です。</span>
      </li>
    </ul>
  </div>
</section>
<section class="movie-wrap">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/pqlV-MXChx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
<section class="instagram">
  <div class="head clearfix">
    <div class="holder">
      <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
      <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
    </div>
    <div class="text">スタジオで撮影したポートフォリオ集です</div>
  </div>
  <div class="photo work">
    <div class="loader">Loading...</div>
  </div>
  <div class="head clearfix">
    <div class="holder">
      <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
      <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
    </div>
    <div class="text">趣味のロードバイクや愛猫達を紹介しています</div>
  </div>
  <div class="photo private">
    <div class="loader">Loading...</div>
  </div>
</section>
<?php get_template_part('inc/studiokumu-contact'); ?>
<?php get_template_part('inc/access'); ?>
</div>
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
	
  $.ajax({
    type: "POST",
    url: "<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php",
    data: {action : "getInstagramItems2"},
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
	$('.instagram .private .loader').remove();
	$('.instagram .photo.private').append(insert);
      };
    },
    error: function(){
      console.log("error getInstagramItems2");
    },
    complete: function(){
      console.log("finished getInstagramItems2");
    }
  });
});
</script>
<?php get_footer(); ?>
