<?php get_header(); ?>
<div class="content top-page">
<section class="banner">
  <a href="/" target="_blank" class="scale-effect"><img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-youtube.jpg" alt="新しい私に出会う Mr kumu 変身チャンネルスタート! YouTube" class="responsive-img"></a>
</section>
<section class="concept clearfix">
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
          <a href="/">SERVICE</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="artist">
  <h1>ARTIST</h1>
  <ul>
    <li>
      <a href="" class="gray-effect">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/top/photo-kumu.png" alt="HAIR-MAKE & PHOTO Mr kumu" class="responsive-img"></div>
        <div class="text">
          <div class="service">HAIR-MAKE & PHOTO</div>
          <div class="name"> Mrkumu</div>
        </div>
      </a>
    </li>
    <li>
      <a href="" class="gray-effect">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/top/photo-asumi.png" alt="HAIR-MAKE & PHOTO 遠藤あすみ" class="responsive-img"></div>
        <div class="text">
          <div class="service">HAIR-MAKE & PHOTO</div>
          <div class="name">遠藤あすみ</div>
        </div>
      </a>
    </li>
    <li>
      <a href="" class="gray-effect">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/top/photo-yumi.png" alt="IMAGE-CONSULTANT 営野友美" class="responsive-img"></div>
        <div class="text">
          <div class="service">IMAGE-CONSULTANT</div>
          <div class="name">営野友美</div>
        </div>
      </a>
    </li>
  </ul>
</section>
<section class="instagram">
  <div class="head">
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/images/Instagram_logo.svg" class="responsive-img"></div>
  </div>
  <div class="photo">
    <div class="loader">Loading...</div>
  </div>
</section>
</div>
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
          insert += '<li><a href="' + dataObject.href + '" target="_blank"><img src="' + dataObject.src + '" width="222" height="222"></a></li>';
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


