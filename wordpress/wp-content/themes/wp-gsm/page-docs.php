<?php /* Template Name: Docs Page  */ get_header(); ?>
  <div class="saitobaza_mt30">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <h1><?php the_title(); ?></h1>

    <div style="padding-top:30px;">
      <div class="osntext clearfix">
        <?php the_content(); ?>
        <div>

          <?php if( have_rows('docs') ): ?>
            <ul class="saitobaza_tablelist">

              <?php while ( have_rows('docs') ) : the_row(); ?>

                <?php $file = get_sub_field('file');
                  if( $file ):
                  // vars
                  $url = $file['url'];
                  $title = $file['title'];
                ?>
                  <li>
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo get_template_directory_uri(); ?>/img/word.png" alt="" height="64" width="64">
                    <p><a href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="_blank"><span><?php echo $title; ?></span></a></p>
                  </li>
                <?php endif; ?>
              <?php endwhile; ?>

            </ul><!-- /.tablelist -->
          <?php endif; ?>

        </div>
      </div><!-- osntext -->
    </div>
  </div><!-- saitobaza_mt30 -->

<?php get_footer(); ?>
