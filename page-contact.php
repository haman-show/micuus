<?php
/*
Template Name: コンタクトフォーム用ページのテンプレート
*/
?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<?php
    $slug = $post->post_name;
    $slug = strtoupper($slug);
?>
<div class="contents">
<section class="contact">
  <?php the_content(); ?>
</section>
</div>
<?php }} ?>
<?php get_footer(); ?>


