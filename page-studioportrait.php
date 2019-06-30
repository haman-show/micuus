<?php
/*
Template Name: スタジオポートレートのテンプレート
*/
?>
<?php get_header(); ?>
<div class="contents asumi studioportrait">
<?php get_template_part('inc/asumi-navigation'); ?>
<section class="servicemenu studio">
  <div class="asumi-container">
    <div class="head-box">
      <span>SERVICE</span>
    </div>
    <h1>STUDIO<br>PORTRAIT</h1>
    <h2 class="ff-min read-text">可能性を可視化して<br>未来を先撮りしよう</h2>
  </div>
</section>

<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<?php if(get_post_meta($post->ID, 'reservecheckbox', true)){ ?>
<section class="reserve">
  <a href="https://reserva.be/studiomicuus/" target="_blank" class="scale-effect">
    <img src="<?php echo get_template_directory_uri(); ?>/images/studioportrait/bnr_reserve.jpg" class="responsive-img">
  </a>
</section>
<?php } else { ?>
<section class="news">
  <div class="asumi-container">
    <div class="icon">
      <span class="read-text">NEWS!</span>
    </div>
    <div class="holder">
      <div class="main read-text">
        <div class="text">現在2019年8月の撮影先行案内申し込み開始中です！</div>
        <a href="<?php echo home_url('/asumi/reserve'); ?>" class="button read-text">お申し込みはこちら</a>
      </div>
      <div class="sub read-text">
        <a href="https://reserva.be/studiomicuus/" target="_blank">6月7月のキャンセル待ちの<br>ご登録はこちら</a>
      </div>
    </div>
  <div>
</section>
<?php }}} ?>

<section class="concept">
  <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/studioportrait/concept_photo_a.jpg" class="responsive-img"></div>
  <div class="holder">
    <h1 class="ff-min read-text">自分のポテンシャルは<br>自分で決めちゃいけない！</h1>
    <h2 class="read-text">The only one <br>photography</h2>
    <ul class="responsive-read read-text">
      <li>
        <span>一人一人の可能性は、目に見えない性質的なものもあれば、</span>
        <span>生まれてから備わっている顔立ち、選ぶ服装、仕草まで、様々です。</span>
      </li>
      <li>
        <span>「もっとこうなりたい」</span>
      </li>
      <li>
        <span>それは、誰もが持っている願望ですが</span>
        <span>大体は、自分は〇〇だから、〇〇だろう。と</span>
        <span>自分のポテンシャルを自分で決めてしまう事がとても多いのも事実です。</span>
      </li>
      <li>
        <span>だけど、それって本当に本当？</span>
      </li>
      <li>
        <span>遠藤あすみフォトセッションでは、</span>
        <span>ヘアメイクからライティング、撮影まで全て一人一人に合わせた</span>
	<span>オーダーメイドの撮影を行なっていきます。</span>
      </li>
      <li>
        <span>素材の声を聞き、可能性を切り開く事が私の特技です。</span>
        <span>自分で「大好き！」と心から思える写真を手にして、可能性の扉を開きましょう！</span>
      </li>
    </ul>
  </div>
  <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/studioportrait/concept_photo_b.jpg" class="responsive-img"></div>
</section>
<section class="worry">
  <div class="holder">
    <div class="head ff-min">
      <span>写真のお悩み</span>
      <span class="top">TOP5</span>
      <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/studioportrait/icon_camera.gif" class="responsive-img"></span>
    </div>
    <ul class="problem read-text">
      <li><i class="far fa-check-square"></i>写真が苦手で撮られる事が怖い</li>
      <li><i class="far fa-check-square"></i>今までに気に入った写真がない</li>
      <li><i class="far fa-check-square"></i>なりたい自分が分からない</li>
      <li><i class="far fa-check-square"></i>コンプレックスが気になる</li>
      <li><i class="far fa-check-square"></i>似合うポージングやメイクが分からない</li>
    </ul>
    <div class="solution">
      <h2 class="read-text">どんな悩みも問題無し！！</h2>
      <ul class="read-text">
	<li>
          <span>写真には、正解がありません。</span>
          <span>これをしたから「正解」というマニュアルも無ければ</span>
	  <span>万人に通用するノウハウなんてものもありません。</span>
        </li>
	<li>
          <span>それじゃあ何が大切なの？</span>
        </li>
	<li>
          <span>私は、何を「信じる」かを明確にする事が一番大切な事だと思います。</span>
	  <span>〇〇したいという欲求や、こうだ！思う直感、〇〇を伝えたいという想い。</span>
        </li>
	<li>
          <span>そして、互いに「信じる」事が何より大切だと思っています。</span>
        </li>
	<li>
          <span>私の技術は、誰に習ったものでもなく、</span>
	  <span>今までに出会ってきた1万人以上の方々と共に育ててきた「信じる力」の塊です！</span>
        </li>
	<li>
          <span>些細な事でも大丈夫。もしも自分が信じれなかったら、私を信じてください！（笑）</span>
        </li>
	<li>
          <span>そして、撮りたい！と思ったその直感を大切にして下さい。</span>
        </li>
	<li>
          <span>皆様にお会い出来るのを楽しみにお待ちしております。</span>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="detail read-text">
  <h1 class="ff-min">遠藤アスミ<br>フォトセッション</h1>
  <div class="fee">撮影料金<span>税込4万円</span></div>
  <ul class="service responsive-read">
    <li>
      <span>ヘアセット＆メイク込み</span>
    </li>
    <li>
      <span>衣装２着まで</span>
    </li>
    <li>
      <span>（お持ち込みお願い致します！悩んでしまったら多めに持ってきて一緒に選ぶ事も可能です。</span>
      <span>アクセサリー類も忘れずにお持ち込み下さい。）</span>
    </li>
    <li>
      <span>所要時間2.5h</span>
    </li>
    <li>
      <span>商用可能</span>
    </li>
    <li>
      <span>撮影全データーをCDRに焼いて当日にお渡しします。（macの方はUSBをご持参ください）</span>
    </li>
  </ul>
  <ul class="caution responsive-read">
    <li>
      <span>※当日現金でのご清算をお願い申し上げます。</span>
    </li> 
    <li>
      <span>※キャンセルご変更は２日前まで可能です</span>
      <span>（それ以降はいかなる場合も全額ご負担となってしまいますので、予めご了承下さい。）</span>
    </li>
  </ul>
  <ul class="read responsive-read">
    <li>
      <span>お写真は、</span>
      <span>普段私がFBにアップしているような、</span>
      <span>バストアップから全身まで オーダーメイドのメイク&ライティングで撮影させて頂きます。</span>
      <span>１着目、２着目と雰囲気を変えてお撮りしていきますので、</span>
      <span>是非、雰囲気の異なるお洋服をお持ちになっていらして下さい。</span>
    </li>
    <li>
      <span>小物類のお持ち込みも可能ですので、PC等のお仕事アイテム等、ご自由にご持参ください。</span>
      <span>髪の毛アップを希望する方は、ヘアアクセサリー等もお忘れずに！</span>
    </li>
    <li>
      <span>撮影は300枚程撮影致しまして、</span>
      <span>その中から6枚ほど 私が目のあったお写真にレタッチをお入れして</span>
      <span>撮影データー＆レタッチデーターをお渡ししております。</span>
      <span>それぞれの衣装1枚ずつ文字入れもしていますので、是非色々なシーンでお使いになってください。</span>
    </li>
    <li>
      <span>当日はスッピン又はベースメイク程度のナチュラルなお化粧でお越しくださいね！</span>
    </li>
  </ul>
  <a href="<?php echo home_url('/#access'); ?>" class="button read-text">アクセスはこちら</a>
</section>
<section class="waiting">
  <h1 class="read-text">こちらからキャンセル待ちのご登録も可能です！！</h1>
  <a href="https://reserva.be/studiomicuus/" target="_blank" class="button read-text">キャンセル待ち登録</a>
</section>
</div>
<?php get_template_part('inc/asumi-footer'); ?>
