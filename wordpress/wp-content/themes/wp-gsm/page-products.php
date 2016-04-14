<?php /* Template Name: Products Page  */ get_header(); ?>

    <div class="saitobaza_mt30">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <div style="padding-top:30px;">
        <div class="osntext clearfix">
          <div id="mod_catalog">

            <?php if( have_rows('products') ): ?>
              <?php while ( have_rows('products') ) : the_row(); ?>

              <?php
                $current_cat = get_sub_field('cats');
                $current_cat_name = get_term($current_cat)->name;
                $current_cat_link = get_term_link($current_cat);
              ?>

              <div class="product_list">

                <div class="block saitobaza_blockers"><a href="<?php echo $current_cat_link; ?>"><?php echo $current_cat_name; ?></a>

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
                              'terms' => $current_cat
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

                </div>

              </div><!-- product_list -->
              <?php endwhile; ?>
            <?php endif; ?>

            <?php the_content(); ?>

          </div>
        </div>
      </div>
    </div>



<?php get_footer(); ?>
