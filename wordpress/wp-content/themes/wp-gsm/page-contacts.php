<?php /* Template Name: Contacts Page */ get_header(); ?>

  <div class="saitobaza_mt30">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <h1><?php the_title(); ?></h1>

    <div style="padding-top:30px;">
      <div class="osntext clearfix">

        <div>
          <?php the_content(); ?>

          <?php $location = get_field('maps'); if( !empty($location) ): ?>
          <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          </div>
          <?php endif; ?>

          <?php if( have_rows('contacts') ): ?>

            <div style="border-top: 1px #bdc3c3 solid; line-height: 1px;">&nbsp;</div>
            <table class="table2" style="width: 100%;" border="0">
              <tbody>
                <tr>
                  <?php
                    $i = 0;
                    while( have_rows('contacts') ): the_row();

                    // vars
                    $name = get_sub_field('name');
                    $phone = get_sub_field('phone');
                    $email = get_sub_field('email');

                    if ($i === 3) :
                      echo '<tr>';
                    endif;
                  ?>

                  <td style="width: 33%; text-align: center;">
                    <p class="zag2"><?php if( $name ): echo $name; endif; ?></p>
                    <p><strong>Телефон:</strong> <?php if( $phone ): echo $phone; endif; ?></p>
                    <p><strong>E-mail:</strong> <?php if( $email ): echo $email; endif; ?></p>
                  </td>

                  <?php $i++; ?>
                <?php endwhile; ?>

                </tr>
              </tbody>
            </table>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
