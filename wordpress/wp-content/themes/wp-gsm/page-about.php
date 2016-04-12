<?php /* Template Name: About Page  */ get_header(); ?>
  <div class="saitobaza_mt30">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <h1><?php the_title(); ?></h1>
      <div style="padding-top:30px;">

        <div class="osntext clearfix">

          <div>
            <?php the_content(); ?>

            <?php if( have_rows('slider') ): ?>
            <div id="slide_tiguan_2">
              <ul>
                <?php while ( have_rows('slider') ) : the_row(); ?>
                  <?php $image = get_sub_field('images');
                    if( !empty($image) ): ?>
                    <li><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li>
                  <?php endif; ?>
                <?php endwhile; ?>
              </ul>
            </div>
            <?php endif; ?>

            <p style="text-align: center;"><a href="http://www.gsmoptom.ru/rus/about/avtopark/">&nbsp;Наш автопарк бензовозов</a></p>

            <table class="table2" style="width: 100%;" border="0">
              <tbody>
                <tr>
                  <td style="text-align: center;">
                    <div class="pr">
                      <div class="zag_pr">Высокое качество продукта</div>
                      <div class="text_pr">Поставляем нефтепродукты высшего качества
                        <br>только от проверенных и надежных поставщиков. Все виды топлива соответствуют экологическим нормам ГОСТ, прошли строгий лабораторный контроль сохранности качества</div>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/i1.png" alt=""></div>
                  </td>
                  <td style="text-align: center;">
                    <div class="pr">
                      <div class="zag_pr">
                        <div style="border-left: 1px #bdc3c3 solid; width: 1px; height: 278px;">&nbsp;</div>
                      </div>
                    </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="pr">
                      <div class="zag_pr">Доступные цены на топливо</div>
                      <div class="text_pr">Мы рады предложить вам конкурентные цены на топливо - на сайте всегда актуальная информация. Следите за информационной стеллой!</div>
                      <br><img src="<?php echo get_template_directory_uri(); ?>/img/i2.png" alt=""></div>
                  </td>
                  <td style="text-align: center;">
                    <div class="pr">
                      <div class="zag_pr">
                        <div style="border-left: 1px #bdc3c3 solid; width: 1px; height: 278px;">&nbsp;</div>
                      </div>
                    </div>
                  </td>
                  <td style="text-align: center;">
                    <div class="pr">
                      <div class="zag_pr">собственные бензовозы</div>
                      <div class="text_pr">Мы имеем собственный автопарк автовозов - поэтому заказать доставку топлива у нас - выгодно нашим клиентам!</div>
                      <br>
                      <br><img src="<?php echo get_template_directory_uri(); ?>/img/i3.png" alt=""></div>
                  </td>
                </tr>
              </tbody>
            </table>

            <?php echo the_field('fullldescription'); ?>

          </div>
        </div>
      </div>
    </div>



<?php get_footer(); ?>
