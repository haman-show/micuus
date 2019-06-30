<footer class="asumi-footer">
  <div class="asumi-navigation">
    <nav>
      <ul>
        <li><a href="<?php echo home_url('/asumi'); ?>" class="parent">ABOUT US</a></li>
        <li>
          <div class="parent">SERVICE</div>
          <div class="child-elements">
            <a href="<?php echo home_url('/asumi#studio-portrait'); ?>">STUDIO PORTRAIT</a>
            <a href="<?php echo home_url('/asumi#location-photo'); ?>">LOCATION PHOTO</a>
            <a href="<?php echo home_url('/asumi#salon-photo'); ?>">SALON PHOTO</a>
          </div>
        </li>
        <li><a href="<?php echo home_url('/asumi/gallery'); ?>" class="parent">GALLERY</a></li>
        <li><a href="https://note.mu/asumi_studiokumu" target="_blank" class="parent">NOTE</a></li>
        <li><a href="<?php echo home_url('/#access'); ?>" class="parent">ACCESS</a></li>
        <li><a href="<?php echo home_url('/asumi/contact'); ?>" class="parent">CONTACT</a></li>
      </ul>
    </nav>   
  </div>
  <div class="bottom-container clearfix">
    <h1>Copyright STUDIO KUMU All Right Reserved</h1>
    <div class="social">
      <a href="https://www.facebook.com/asumi.eino.9" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="https://www.instagram.com/micuus.kumu/?hl=ja" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
