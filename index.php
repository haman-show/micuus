<?php get_header(); ?>
<header>
<section class="global-header" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/global-header/background.png);">
  <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" width="220" height="90" alt="STUDIO KUMU" /></a></h1>
  <nav>
    <ul>
      <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
      <li><a href="<?php echo home_url('/service'); ?>">SERVICE</a></li>
      <li><a href="#artist">ARTIST</a></li>
      <li><a href="#contact">CONTACT</a></li>
      <li><a href="#access">ACCESS</a></li>
    </ul>
  </nav>
  <div class="social">
    <a href="https://www.instagram.com/studiokumu/?hl=ja" class="instagram" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
    <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" class="youtube" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
  </div>
</section>
</header>
<div class="content top-page">
<section class="banner">
  <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" target="_blank" class="scale-effect"><img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-youtube.jpg" alt="新しい私に出会う Mr kumu 変身チャンネルスタート! YouTube" class="responsive-img"></a>
</section>
<section class="concept clearfix" id="service">
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
          <a href="<?php echo home_url('/service'); ?>">SERVICE</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="artist">
  <h1 id="artist">ARTIST</h1>
  <ul>
    <li>
      <a href="<?php echo home_url('/kumu'); ?>" class="gray-effect">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/top/photo-kumu.png" alt="HAIR-MAKE & PHOTO Mr kumu" class="responsive-img"></div>
        <div class="text">
          <div class="service">HAIR-MAKE & PHOTO</div>
          <div class="name"> Mrkumu</div>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url('/asumi'); ?>" class="gray-effect">
        <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/top/photo-asumi.png" alt="HAIR-MAKE & PHOTO 遠藤あすみ" class="responsive-img"></div>
        <div class="text">
          <div class="service">HAIR-MAKE & PHOTO</div>
          <div class="name">遠藤あすみ</div>
        </div>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url('/yumi'); ?>" class="gray-effect">
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
    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/common/glyph-logo_May2016.png" class="responsive-img"></div>
    <div class="text"><img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram_logo.svg" class="responsive-img"></div>
  </div>
  <div class="photo">
    <div class="loader">Loading...</div>
  </div>
</section>
<section class="contact" id="contact">
  <div class="content-head">
    <h1>CONTACT</h1>
    <hr>
    <h2>お問い合わせはお電話、又はメールフォームからお願い申し上げます。</h2>
  </div>
  <div class="phone">
    <div class="holder">
      <div class="icon"><i class="fas fa-phone"></i></div>
      <div class="number">03-3442-9600</div>
    </div>
    <div class="caution">＊撮影中は電話に出られない事もございます。</div>
  </div>
  <div class="contact-form" id="mail">
    <h3>お問い合わせフォーム</h3>
    <div class="form-line">
      <div class="label">
        <label for="guestname">
          <span class="head">お名前</span>
          <span class="caution">必須</span>
        </label>
      </div>
      <div class="input">
        <input type="text" name="guestname" id="guestname" class="guestname">
      </div>
    </div>
    <div class="form-line">
      <div class="label">
        <label for="kananame">
          <span class="head">フリガナ</span>
          <span class="caution">必須</span>
        </label>
      </div>
      <div class="input">
        <input type="text" name="kananame" id="kananame" class="kananame">
      </div>
    </div>
    <div class="form-line">
      <div class="label">
        <label for="phonenumber">
          <span class="head">携帯電話</span>
          <span class="caution">必須</span>
        </label>
      </div>
      <div class="input">
        <input type="text" name="phonenumber" id="phonenumber" class="phonenumber">
      </div>
    </div>
    <div class="form-line">
      <div class="label">
        <label for="mailaddress">
          <span class="head">メールアドレス</span>
          <span class="caution">必須</span>
        </label>
      </div>
      <div class="input">
        <input type="email" name="mailaddress" id="mailaddress" class="mailaddress">
      </div>
    </div>
    <div class="form-line">
      <div class="label information">
        <label for="information">
          <span class="head">お問い合わせ内容</span>
          <span class="caution">必須</span>
        </label>
      </div>
      <div class="input">
        <textarea name="information" id="information" class="information" rows="10"></textarea>
      </div>
    </div>
  </div>
</section>
<section class="access" id="access">
  <div class="content-head">
    <h1>ACCESS</h1>
  </div>
  <div class="top-container" id="address">
    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" width="110" height="45" alt="STUDIO KUMU" /></div>
    <div class="holder clearfix">
      <div class="information">
        <table>
          <tr>
            <th>ADDRESS</th>
            <td>&#12306; 150-0012<br>
               東京都渋谷区広尾1-4-10鴻貴ビル2F</td>
          </tr>
          <tr>
            <th>TEL & FAX</th>
            <td>03-3442-9600</th>
          </tr>
          <tr>
            <th>MAIL</th>
            <td>info@kumu.jp</td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>10:00 〜 19:00（19:00最終予約）</td>
          </tr>
          <tr>
            <th>定休日</th>
            <td>日曜日</td>
          </tr>
        </table>
        <ul>
          <li><a href="<?php echo home_url('/directions'); ?>">地図だけではどうも自信がないお客様はこちらから</a></li>
          <li><a href="<?php echo home_url('/parking'); ?>">お車でお越しの方はこちら</a></li>
        </ul>
      </div>
      <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/studio.jpg" alt="STUDIO KUMU" class="responsive-img" /></div>
    </div>
  </div>
</div>
</section>
<section class="map" id="map">
  <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.5387552709153!2d139.71323582921855!3d35.64855208855404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f40!3m3!1m2!1s0x60188b6afb890559%3A0xaba3db071f97f4c6!2sSTUDIO+KUMU!5e0!3m2!1sja!2sjp!4v1559894541420!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          insert += '<li><a href="' + dataObject.href + '" target="_blank"><img src="' + dataObject.src + '" width="200" height="200"></a></li>';
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
      <a href="https://www.instagram.com/studiokumu/?hl=ja" class="instagram" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
      <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" class="youtube" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html>
