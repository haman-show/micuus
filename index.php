<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>
<?php get_template_part('inc/globalheader'); ?>
<?php if(have_posts()) {while(have_posts()){the_post(); ?>
<div class="contents">
<?php the_content(); ?>
</div>
<?php }} ?>
<?php get_footer(); ?>
