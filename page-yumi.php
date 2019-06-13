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
    <ul class="body">
      <li>初めまして！<br>イメージコンサルタントの営野友美です。</li>
      <li>自分に似合うお洋服やメイク。<br>誰でも鏡の前であれも違う！これも違う！となやんでしまう事ありますよね！</li>
      <li>自分の骨格とパーソナルカラーを知ると<br>自分がより魅力的に見えるファッションやメイクが分かって<br>今日よりも明日、もっとご機嫌な自分になる事が出来ます。</li>
      <li>何処に行く時も会う時も、今よりももっとワクワク出来たら<br>やっぱり最高ですよね！</li>
      <li>現在みなさまがハッピーになれるサービスを製作中です！<br>FBやインスタなどこれから情報発信もしていきますので</li>
      <li>皆様よろしくお願い申し上げます！！</li>
    </ul>
  </div>
</section>
<section class="social">
  <h1>是非チェックしてくださいね！</h1>
  <div class="logo">
    <span><a href="" target="_blank"><i class="fab fa-facebook-f fa-2x"></a></i></span>
    <span><a href="" target="_blank"><i class="fab fa-instagram fa-2x"></a></i></span>
  </div>
</section>
<?php get_template_part('inc/artist'); ?>
</div>
<?php get_footer(); ?>


