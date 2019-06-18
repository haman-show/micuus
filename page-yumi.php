<?php
/*
Template Name: ユミ アーティストページのテンプレート
*/
?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<div class="contents yumi">
<section class="main">
  <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/yumi/photo.jpg" class="responsive-img"></div>
  <div class="message">
    <div class="head">
      <h2 class="ff-min">Hello new me.</h2>
      <h1 class="ff-min">Comming soon!!</h1>
      <h3>一人一人に合わせた骨格とパーソナルカラーを知って<br>今日よりも明日、もっとご機嫌な自分に！</h3>
    </div>
    <ul class="body responsive-read">
      <li>
	<span>初めまして！</span>
        <span>イメージコンサルタントの営野友美です。</span>
      </li>
      <li>
	<span>自分に似合うお洋服やメイク。</span>
	<span>誰でも鏡の前であれも違う！これも違う！となやんでしまう事ありますよね！</span>
      </li>
      <li>
	<span>自分の骨格とパーソナルカラーを知ると</span>
	<span>自分がより魅力的に見えるファッションやメイクが分かって</span>
	<span>今日よりも明日、もっとご機嫌な自分になる事が出来ます。</span>
      </li>
      <li>
	<span>何処に行く時も会う時も、今よりももっとワクワク出来たら</span>
	<span>やっぱり最高ですよね！</span>
      </li>
      <li>
	<span>現在みなさまがハッピーになれるサービスを製作中です！</span>
	<span>FBやインスタなどこれから情報発信もしていきますので</span>
      </li>
      <li>
	<span>皆様よろしくお願い申し上げます！！</span>
      </li>
    </ul>
  </div>
</section>
<section class="social">
  <h1>是非チェックしてくださいね！</h1>
  <div class="logo">
    <span><a href="https://www.facebook.com/profile.php?id=100030026293412" target="_blank"><i class="fab fa-facebook-f fa-2x"></a></i></span>
  </div>
</section>
<?php get_template_part('inc/artist'); ?>
</div>
<?php get_footer(); ?>


