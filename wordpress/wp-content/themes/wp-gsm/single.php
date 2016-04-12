<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="saitobaza_mt30">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <h1 class="saitobaza_cat_title"><?php the_category(', '); ?></h1>

      <div style="padding-top:30px;">
        <div class="osntext">

          <div id="news_datetop"><?php the_time('d F Y'); ?></div>
          <div id="news_zagol">
            <h2><?php the_title(); ?></h2>
          </div>
          <div id="news_content" class="clearfix">
            <?php the_content(); ?>
          </div>

          <div id="news_endten">
            <div class="hr">&nbsp;</div>
            <table>
              <tbody>
              <?php
                $args = array(
                 'post_type' => 'post',
                 'posts_per_page' => 10
                 );
                query_posts($args);
              ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <tr>
                  <td class="td1">
                    <?php the_time('j F Y'); ?>
                  </td>
                  <td class="td2">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                </tr>

              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>

              </tbody>
            </table>
          </div><!-- news_endten -->

        </div>
      </div>
    </div><!-- saitobaza_mt30 -->

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
