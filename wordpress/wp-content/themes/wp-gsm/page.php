<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="saitobaza_mt30">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <h1><?php the_title(); ?></h1>
      <div style="padding-top:30px;">
        <div class="osntext clearfix">
        <?php the_content(); ?>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
