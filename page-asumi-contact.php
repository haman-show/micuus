<?php
/*
Template Name: アスミ専用コンタクトフォーム用ページのテンプレート
*/
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<?php
    $slug = $post->post_name;
    $slug = strtoupper($slug);
?>
<div class="contents asumi">
<?php get_template_part('inc/asumi-navigation'); ?>
<section class="contact">
  <?php the_content(); ?>
</section>
</div>
<?php }} ?>
<?php get_template_part('inc/asumi-footer'); ?>


