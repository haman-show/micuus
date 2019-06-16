<?php
/*
Template Name: サービスのテンプレート
*/
?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<div class="contents service">
<section class="upper ff-min">
  <div class="container">
    <ul class="read">
      <li>一人一人の中に無限に眠る可能性を<br>写真と言う見える形にデザインし<br>新しい未来を切り開く世界を提案する。</li> 
    </ul>
    <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_upper.jpg" class="responsive-img" /></div>
  </div>
</section>
<section class="plan standard ff-min" id="standard">
  <div class="container">
    <h1 class="plan_title">
      <div>STANDARD</div>
      <div>スタンダード撮影プラン</div>
    </h1>
    <div class="clearfix">
      <div class="text">
        <div class="read">各種オーディションや<br>初めての撮影にオススメのプランです</div>
        <h2 class="price">税込 20000円</h2>
        <div class="detail">
          <div class="head">撮影詳細</div>
          <ul class="body">
            <li>衣装 2着（お持ち込み下さい）</li>
            <li>ヘア&メイク込み</li>
            <li>撮影枚数 約150枚</li>
          </ul>
	  <div class="sub">オススメレタッチ4枚付き<br>データはその日にCD-Rに焼いてお渡し</div>
          <div class="comp-button">
            <a href="<?php echo home_url('/reserve-standard'); ?>">予約する</a>
          </div>
        </div>
      </div>
      <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_standard_1.jpg" class="responsive-img" /></div>
    </div>
  </div>
</section>
<section class="plan premium ff-min" id="premium">
  <div class="container">
    <h1 class="plan_title">
      <div>PREMIUM</div>
      <div>プレミアム撮影プラン</div>
    </h1>
    <div class="text">
      <div class="read">セルフブランディングにぴったりな<br>雰囲気を入れた撮影です。<br>個人事業主の方や音楽家の方など<br>ご自身で活動をしていく方にオススメのプランです。</div>
      <h2 class="price">税込 30000円</h2>
    </div>
  </div>
  <ul class="photo">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_premium_1.jpg" class="responsive-img" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_premium_2.jpg" class="responsive-img" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_premium_3.jpg" class="responsive-img" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_premium_4.jpg" class="responsive-img" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_premium_5.jpg" class="responsive-img" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_premium_6.jpg" class="responsive-img" /></li>
  </ul>
  <div class="container">
    <div class="detail">
      <div class="head">撮影詳細</div>
      <ul class="body">
        <li>衣装 2着（お持ち込み下さい）</li>
        <li>ヘア&メイク込み</li>
        <li>撮影枚数 約250枚</li>
      </ul>
      <div class="sub">オススメレタッチ4枚付き<br>データはその日にCD-Rに焼いてお渡し</div>
      <div class="comp-button">
        <a href="<?php echo home_url('/reserve-premium'); ?>">予約する</a>
      </div>
    </div>
</section>
<section class="bottom ff-min">
  <ul class="read">
    <li>スタジオクムはヘアメイクから撮影まで<br>一人のアーティストが創り上げ</li>
    <li>表現できる世界を<br>皆様にお届けしています。</li>
    <li>皆様にお会い出来るのを楽しみにお待ちしております！</li>
  </ul>
  <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_bottom.jpg" class="responsive-img" /></div>
</section>
</div>
<?php get_footer(); ?>


