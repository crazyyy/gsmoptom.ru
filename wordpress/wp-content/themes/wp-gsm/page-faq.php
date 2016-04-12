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
            <form method="post">
              <table border="0" cellpadding="0" cellspacing="4">
                <tbody>
                  <tr>
                    <td class="td1">Ф.И.О.: <span class="zv">*</span></td>
                    <td class="td2">
                      <input name="fio" class="inp1">
                    </td>
                  </tr>
                  <tr>
                    <td class="td1">Город:</td>
                    <td class="td2">
                      <input name="city" class="inp1">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" class="hr"></td>
                  </tr>
                  <tr>
                    <td class="td1">
                      Ваш e-mail: <span class="zv">*</span>
                    </td>
                    <td class="td2">
                      <input name="email" class="inp1">
                      <div class="comm">
                        *Ваш емайл нигде не будет распространяется и афишироваться,
                        <br> на эту почту придёт уведомление об ответе.
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" class="hr"></td>
                  </tr>
                  <tr>
                    <td class="td1">
                      Ваш вопрос: <span class="zv">*</span>
                    </td>
                    <td class="td2">
                      <textarea name="msg" class="tarea1"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" class="hr"></td>
                  </tr>
                  <tr>
                    <td class="td1"></td>
                    <td class="td2">
                      <button type="submit" class="but1">Добавить</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
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
  </div>

<?php get_footer(); ?>
