<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge7">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript">
    $(function(){
      $('.flexslider').flexslider({
        animation: "slide",
      });
    });
  </script>
</head>
<body>
