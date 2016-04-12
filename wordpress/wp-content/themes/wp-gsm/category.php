<?php get_header(); ?>
  <div class="saitobaza_mt30">

    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <h1 class="saitobaza_cat_title">Новости</h1>

    <div style="padding-top:30px;">
      <div class="osntext">
        <div id="news_list3">

          <?php get_template_part('loop'); ?>

        </div><!-- news_list3 -->
        <?php get_template_part('pagination'); ?>
      </div>
    </div>

  </div><!-- saitobaza_mt30 -->
<?php get_footer(); ?>
