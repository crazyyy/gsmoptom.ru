    <div id="wrap_footer">
      <div id="bl_footer">
        <div class="foot_menu">
          <?php wpeFootNav(); ?>
        </div>
        <div class="nocode_phone_bottom"><span>+7 (8552) 91-01-05</span></div>
        <div id="name_footer">© 2006–2015, «НЕФТЕПРОДУКТТРЕЙД»</div>
        <div id="copy_footer">
          Обращаем ваше внимание на то, что данный Интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.
        </div>
      </div>
    </div><!-- wrap_footer -->

  </div>
  <?php wp_footer(); ?>
  <?php if ( is_page_template('page-contacts.php') ) { ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/google-maps.js"></script>
  <?php } ?>

  <div id="dialog_zanoves"></div>
  <div id="dialog_bg" class="close_dialog">
    <div id="dialog_3">
      <div class="label">
        <div class="label-border"></div>
        <div id="bg">
          <button class="modal-close">sasas</button>
          <div class="data">
            <div id="dialogclass">
              <div class="h6">
                У ВАС ЕСТЬ ВОПРОСЫ?
              </div>
              <div class="h5">
                Заполните форму и ответим на Ваш вопрос в течении трех часов
              </div>
              <div style="text-align:center;">
                <table cellpadding="0" cellspacing="5" border="0">
                  <tr class="">
                    <td class="td1">Как вас зовут: <span class="zv">*</span></td>
                    <td class="td2"><input id="name" value="" class="obsuditduo_inp1" autocomplete="off"></td>
                  </tr>
                  <tr>
                    <td class="td1">E-mail:</td>
                    <td class="td2"><input id="email" value="" class="obsuditduo_inp1" autocomplete="off"></td>
                  </tr>
                  <tr class="">
                    <td class="td1">Телефон: <span class="zv">*</span></td>
                    <td class="td2"><input id="tel" value="" class="obsuditduo_inp1" autocomplete="off"></td>
                  </tr>
                  <tr class="">
                    <td class="td1">Компания: <span class="zv">*</span></td>
                    <td class="td2"><input id="company" value="" class="obsuditduo_inp1" autocomplete="off"></td>
                  </tr>
                  <tr>
                    <td classs="td1">&nbsp;</td>
                    <td>
                      <label>
                      <input id="uslov" type="checkbox" value="1" autocomplete="off">
                      &nbsp; Я согласен с <a href="#" target="_blank">условиями передачи информации</a>
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td class="td1">Сообщение: </td>
                    <td class="td2">
                      <textarea id="primech" class="obsuditduo_inp1" style="height:90px;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td class="td1">&nbsp;</td>
                    <td class="td2">
                      <div style="padding-top:20px;">
                        <button class="obsuditduo_but1" onclick="obsuditduo_act('#dialogclass',0);">Отправить</button>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div><!-- #dialogclass -->
          </div><!-- data -->
        </div><!-- bg -->
      </div><!-- label -->
    </div><!-- dialog_3 -->
  </div><!-- dialog_bg -->

</body>
</html>
