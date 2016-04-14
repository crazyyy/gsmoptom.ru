<div style="background-color: rgb(255, 204, 0); background-image: url('<?php echo get_template_directory_uri(); ?>/img/taneco.jpg');" class="brand">
  <div class="tablo1"></div>
  <div class="tablo2">
    <div id="stela_index">
      <div class="zagol">Стоимость нефтепродуктов на <span><?php echo date( 'd.m', current_time( 'timestamp', 0 ) ); ?></span></div>
      <div class="cat_list">
        <div class="cont">

          <?php if( have_rows('price_block') ): ?>

            <?php while( have_rows('price_block') ): the_row(); $manufacturer_id = get_sub_field('manufacturer'); ?>

              <div class="block clearfix">
                  <?php
                    $current_man_name = get_term($manufacturer_id)->name;
                    echo $current_man_name;
                  ?>
                <div class="data">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <thead>
                      <tr>
                        <td>&nbsp;</td>
                        <td>Цена за тонну</td>
                        <td>Плотность
                          <br>при наливе</td>
                        <td>Цена за литр</td>
                        <td>&nbsp;</td>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                        $args = array(
                          'post_type'   => 'products',
                          'showposts' => 2000,
                          'tax_query' => array(
                            array(
                              'taxonomy' => 'manufacture',
                              'terms' => $manufacturer_id,
                              'field' => 'term_id',
                            )
                          )
                        );
                        query_posts($args);

                      ?>
                      <?php while ( have_posts() ) : the_post(); ?>


                      <?php $term_list = wp_get_post_terms($post->ID, 'categories', array("fields" => "ids"));
                        $current_cats = $term_list[0];
                        $term_linkers = get_term_link($current_cats);
                      ?>

                        <tr>
                          <td>
                            <div style="position:relative;"><a href="<?php echo $term_linkers; ?>" class="link"><?php the_title(); ?></a></div>
                          </td>
                          <td>
                            <div onclick="Get('<?php echo $term_linkers; ?>');" style="cursor:pointer;">
                              <?php the_field('price_for_tons'); ?> р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('<?php echo $term_linkers; ?>');" style="cursor:pointer;">
                              <?php the_field('measure'); ?>
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('<?php echo $term_linkers; ?>');" style="cursor:pointer;"><?php the_field('price_for_litre'); ?> р.
                            </div>
                          </td>
                          <td>
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $thumb['0']; ?>
                            <a href="<?=$url?>" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                            <?php $file = get_field('certif'); if( $file ): ?>
                              <a href="<?php echo $file['url']; ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="<?php echo $file['filename']; ?>" title="<?php echo $file['filename']; ?>">
                              </a>
                            <?php endif; ?>
                          </td>
                        </tr>

                      <?php endwhile; ?>

                    <?php wp_reset_query(); ?>

                    </tbody>
                  </table>

                  <div class="text1">
                    <br> Цены представлены без доставки, <a href="http://www.gsmoptom.ru/rus/dostavka-calc/">доставку можно рассчитать</a> отдельно.
                  </div>
                </div>
                <div class="bg">
                  <div class="color">ffcc00</div>
                  <div class="image"><?php echo get_template_directory_uri(); ?>/img/taneco.jpg</div>
                </div>
              </div><!-- block -->

            <?php endwhile; ?>

          <?php endif; ?>

        </div><!-- cont -->
      </div><!-- cat_list -->

      <div class="data_viev"></div>

    </div>
  </div>
  <div class="tablo3"></div>
</div>
