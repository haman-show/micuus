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
        <li><a href="<?php echo home_url('/#address'); ?>">ADDRESS</a></li>
        <li><a href="<?php echo home_url('/#map'); ?>">MAP</a></li>
      </ul>
    </div>
    <div class="box">
      <div class="head">CONTACT</div>
      <ul class="body">
        <li><a href="<?php echo home_url('/#contact'); ?>">PHONE</a></li>
        <li><a href="<?php echo home_url('/#mail'); ?>">MAIL</a></li>
      </ul>
    </div>
  </div>
  <div class="bottom-container clearfix">
    <h1>Copyright STUDIO KUMU All Right Reserved</h1>
    <div class="social">
      <a href="https://www.instagram.com/studiokumu/?hl=ja" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
      <a href="https://www.youtube.com/channel/UCmtI94f4rzkQJDIU-MmUYYQ?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
