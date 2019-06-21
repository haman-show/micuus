<!DOCTYPE html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142206894-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-142206894-1');
  </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge7">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <meta name="keywords" content="宣材写真、宣材、宣材撮影、写真、渋谷区、恵比寿、広尾、変身、facebookプロフィール写真、美魔女写真、ヘアーメイク、七五三、お子様写真、ウェディング、オーディション、タレント、遺影 ">
  <meta name="description" content="宣材写真、宣材撮影のことならおまかせください、渋谷区広尾、恵比寿にある宣材写真、宣材撮影スタジオで、プロの魔法のヘアーメイクで貴方も大変身してください">
  <!-- OGP begin -->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name"  content="<?php bloginfo() ?>">
  <meta property="og:description" content="<?php bloginfo('description') ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/common/ogp.jpg">
  <?php if(is_front_page()):/*ホームが表示されている場合*/ ?>
  <meta property="og:url" content="<?php echo home_url('/') ?>">
  <meta property="og:title" content="<?php bloginfo('name') ?>">
  <?php else:/*ホーム以外のページが表示されている場合*/ ?>
  <meta property="og:url" content="<?php the_permalink() ?>">
  <meta property="og:title" content="<?php wp_title('', true, 'right'); ?>| <?php bloginfo('name') ?>">
  <?php endif; ?>
  <!--Facebook-->
  <meta property="fb:app_id" content="1432710270202935">
  <!--twitter-->
  <meta name="twitter:card" content="summary_large_image">
  <!-- OGP end -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript">
    $(function(){
      $('.flexslider').flexslider({
        slideshowSpeed: 5000,
        animationSpeed: 250,
        animation: 'slide',
        easing: 'easeInExpo',
	directionNav: false,
        after: function(slider) {
          var slide = slider.currentSlide;
          $('p', slide).addClass('af');
        }
      });
    });
  </script>
</head>
<body>
