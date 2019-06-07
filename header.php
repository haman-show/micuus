<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge7">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript">
    $(function(){
      $('.flexslider').flexslider({
        slideshowSpeed: 5000,
        animationSpeed: 500,
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
<header>
<section class="global-header" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/global-header/background.png);">
  <h1><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" width="220" height="90" alt="STUDIO KUMU" /></h1>
  <nav>
    <ul>
      <li><a href="/">TOP</a></li>
      <li><a href="/service">SERVICE</a></li>
      <li><a href="/artist">ARTIST</a></li>
      <li><a href="/contact">CONTACT</a></li>
      <li><a href="/access">ACCESS</a></li>
    </ul>
  </nav>
  <div class="social">
    <a href="" class="facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
    <a href="" class="youtube"><i class="fab fa-youtube fa-lg"></i></a>
  </div>
</section>
</header>
