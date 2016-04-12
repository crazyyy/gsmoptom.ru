<?php get_header(); ?>
  <div class="saitobaza_mt30">

    <h1 class="saitobaza_cat_title">
      <?php
          $current_cat_id = get_queried_object()->term_id;
          $current_cat_name = get_queried_object()->name;
          echo $current_cat_name;
      ?>
    </h1>

    <div style="padding-top:30px;">
      <div class="osntext clearfix">

      <?php echo category_description(); ?>

      <?php $description2 = get_field('description2'); ?>
      <?php $description = get_field('description'); ?>

      <div class="saitobaza_hide_slide">
        <?php if( have_rows('slider' ) ): ?>
        <div style="padding-top:20px;">
          <div id="slide_tiguan_2">
            <ul>
              <?php while ( have_rows('slider') ) : the_row(); ?>
                <?php $image = get_sub_field('images');
                  if( !empty($image) ): ?>
                  <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
                <?php endif; ?>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div><!-- /.saitobaza_hide_slide -->

      <div class="tovar_list">

        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              <td style="border-top:0;"><img src="<?php echo get_template_directory_uri(); ?>/img/i1.png" height="40" border="0"></td>
              <td style="border-top:0;">Цена за тонну</td>
              <td style="border-top:0;">Плотность<br>при наливе</td>
              <td style="border-top:0;">Цена за литр</td>
              <td style="border-top:0;">&nbsp;</td>
            </tr>
          </thead>
          <tbody>

          <?php

            $args = array(
              'post_type'   => 'products',
              'showposts' => 2000,
              'tax_query' => array(
                array(
                  'taxonomy' => 'categories',
                  'field' => 'id',
                  'terms' => $current_cat_id
                )
              )
            );
            query_posts($args);

          ?>
          <?php while ( have_posts() ) : the_post(); ?>

              <tr>
                <td style="width:300px;">
                  <div style="position:relative;padding-right: 20px;"><?php the_title(); ?>
                    <div class="namepod">
                      <?php echo get_the_term_list( $post->ID, 'manufacture', '', ', ' ); ?>
                    </div><!-- namepod -->
                  </div>
                </td>
                <td><span class="cena"><?php the_field('price_for_tons'); ?> р.</span></td>
                <td><?php the_field('measure'); ?></td>
                <td>
                  <div style="position:relative;"><?php the_field('price_for_litre'); ?> р.</div>
                </td>
                <td style="width:200px;">

                  <?php
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                    $url = $thumb['0'];
                  ?>

                  <a target="_blank" rel="lightbox" class="feature-img" href="<?=$url?>" title="<?php the_title(); ?>">
                    <?php if ( has_post_thumbnail()) :
                      the_post_thumbnail('medium');
                    else: ?>
                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                  </a><!-- /post thumbnail -->

                  <?php
                    $file = get_field('certif');
                    if( $file ): ?>

                    <a href="<?php echo $file['url']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/i_pasport.jpg" style="padding: 0 10px;" alt="<?php echo $file['filename']; ?>" title="<?php echo $file['filename']; ?>"></a>
                  <?php endif; ?>
                </td>
              </tr>

            <?php endwhile; ?>

          </tbody>
        </table>
        <?php wp_reset_query(); ?>
        <?php wp_reset_postdata(); ?>
      </div>

      <div style="padding-top:20px;">
        <?php echo $description; ?>
      </div>

      <div class="saitobaza_show_slide"></div>
      <!-- /.saitobaza_show_slide -->

      <div style="padding-top:20px;">
        <?php echo $description2; ?>
      </div>

      </div>
    </div>
  </div>

</div><!-- saitobaza_mt30 -->

<?php get_footer(); ?>
