<?php
/*
Template Name: サービスのテンプレート
*/
?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<div class="contents service">
<section class="concept">
  <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_service.jpg" class="responsive-img" /></div>
  <ul class="responsive-read ff-min">
    <li>
      <span>恵比寿駅から徒歩10分</span>
      <span>明治通り沿いにあるSTUDIOKUMUは18年前から、</span>
      <span>西村知美さんや吉田羊さん等の芸能人の方々や文化人、音楽家を始め</span>
      <span>様々なジャンルの方々からご愛顧頂いております。</span>
    </li>
    <li>
      <span>宣材撮影やオーディション写真、SNSのお写真からアーティスト撮影まで</span>
      <span>幅広い撮影にご対応させて頂きます。</span>
      <span>新しい魅力を開花して、貴方の未来を切り開く１枚を撮影します。</span>
    </li>
  </ul>
</section>
<section class="plan read-text standard ff-min" id="standard">
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
          <div class="sub">担当アーティスト Mr kumu</div>
          <div class="comp-button">
            <a href="<?php echo home_url('/reserve/standard'); ?>">予約する</a>
          </div>
        </div>
      </div>
      <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_standard_1.jpg" class="responsive-img" /></div>
    </div>
  </div>
</section>
<section class="plan read-text premium ff-min" id="premium">
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
      <div class="sub">担当アーティスト Mr kumu</div>
      <div class="comp-button">
        <a href="<?php echo home_url('/reserve/premium'); ?>">予約する</a>
      </div>
    </div>
</section>
<?php get_template_part('inc/covers'); ?>
<section class="bottom">
  <ul class="read responsive-read read-text">
    <li>
      <span>スタジオクムはヘアメイクから撮影まで<br>一人のアーティストが創り上げ</span>
      <span>表現できる世界を皆様にお届けしています。</span>
    </li>
    <li>
      <span>皆様にお会い出来るのを<br>楽しみにお待ちしております！</span>
    </li>
  </ul>
  <div class="photo">
    <a href="<?php echo home_url('/kumu'); ?>" class="scale-effect">
      <img src="<?php echo get_template_directory_uri(); ?>/images/service/photo_bottom.jpg" class="responsive-img" />
    </a>
  </div>
</section>
<section class="qanda">
  <div class="comp-button">
    <a href="<?php echo home_url('/qa'); ?>">よくあるご質問はこちら</a>
  </div>
</section>
<?php get_template_part('inc/studiokumu-contact'); ?>
</div>
<?php get_footer(); ?>
