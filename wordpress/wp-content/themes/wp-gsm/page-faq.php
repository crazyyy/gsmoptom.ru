<?php /* Template Name: FAQ Page  */ get_header(); ?>
  <div class="saitobaza_mt30">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <h1><?php the_title(); ?></h1>
    <div style="padding-top:30px;">
      <div class="osntext">

        <div id="faq_add">
          <div id="addtop">
            <button style="opacity: 1;" type="button">Задать вопрос</button>
            <div style="display: none;" id="pip">скрыть</div>
          </div>
          <div style="display: none;" id="form">
            <?php echo do_shortcode('[contact-form-7 id="108" title="FAQ"]'); ?>
          </div>
        </div>

        <?php if( have_rows('faq') ): ?>
          <div id="faq_list1">

          <?php while( have_rows('faq') ): the_row();

            // vars
            $date = get_field('date', false, false);
            $date = new DateTime($date);
            $name = get_sub_field('name');
            $question = get_sub_field('question');
            $answer = get_sub_field('answer');

            ?>

              <div class="block">
                <div class="clearfix">
                  <div class="date"><?php echo $date->format('j M Y'); ?></div>
                  <span class="name"><?php echo $name; ?></span>
                </div>
                <div class="msg">
                  <span class="z">Вопрос:</span>&nbsp; <?php echo $question; ?>
                </div>
                <div class="otvet">
                  <span class="z">Ответ:</span>&nbsp; <?php echo $answer; ?>
                </div>
              </div>

            <?php endwhile; ?>

          </div><!-- faq_list1 -->
        <?php endif; ?>

      </div>
    </div>
  </div><!-- saitobaza_mt30 -->

<?php get_footer(); ?>
