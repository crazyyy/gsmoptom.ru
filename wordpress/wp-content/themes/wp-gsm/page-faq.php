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

        <div id="faq_list1">
          <div class="block">
            <div>
              <div class="date">22.12.2015 - 08:23:48</div>
              <span class="name">Обросимов александр михайлович</span>
              <div class="clear"></div>
            </div>
            <div class="msg">
              <span class="z">Вопрос:</span>&nbsp; Какое время действует заявка на погрузку
            </div>
            <div class="otvet">
              <span class="z">Ответ:</span>&nbsp; Заявка действует до 12:00 следующего дня
            </div>
          </div>
          <div class="block">
            <div>
              <div class="date">16.07.2015 - 04:34:51</div>
              <span class="name">Евдокимов Андрей Геннадьевич</span>
              <div class="clear"></div>
            </div>
            <div class="msg">
              <span class="z">Вопрос:</span>&nbsp; Здравствуйте! Возможна ли доставка СМТ и ДТ в ж/д цистернах на ст. Находка ДВЖД. Спасибо.
            </div>
            <div class="otvet">
              <span class="z">Ответ:</span>&nbsp; Здравствуйте! Да возможна, жд доставка составит 11500 рублей на тонну
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>



<?php get_footer(); ?>
