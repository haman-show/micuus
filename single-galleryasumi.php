<?php get_header(); ?>
<div class="contents asumi gallery">
<?php get_template_part('inc/asumi-navigation'); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<section class="item-list <?php echo get_post_field( 'post_name', get_the_ID() ); ?>">
  <div class="holder">
    <?php the_content(); ?>
  </div>
</section>
<?php }} ?>
<script>
$(function(){
  $(".item-list.studio .gallery-item .gallery-icon a").attr('data-lightbox', 'studio');
  $(".item-list.location .gallery-item .gallery-icon a").attr('data-lightbox', 'location');
  $(".item-list.salon .gallery-item .gallery-icon a").attr('data-lightbox', 'salon');
  $(".item-list.book .gallery-item .gallery-icon a").attr('data-lightbox', 'book');
});
</script>
<?php get_template_part('inc/asumi-footer'); ?>
