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


<!--  -->
<!-- MODAL WINDOW -->
<!--  -->
<style>
  #dialog_zanoves {
    display: none !important;
  }
  #dialog_bg {
    display: none !important;
  }
</style>
<div id="dialog_zanoves" style="display: block;"></div>
<div id="dialog_bg" class="close_dialog"><div id="dialog_3" style="top: 100px;"><div class="label" style="position:relative;width:600px;min-height:100%;margin-left:-300px;padding:10px;"><div style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;z-index:110000;width:100%;height:100%;background:#fff;opacity:0.2;border-radius:5px;"></div><div id="bg" style="position:relative;z-index:120000;background:#2e2e2e;"><div class="close_dialog" id="close"></div><div class="data" style="min-height:130px;height:auto !important;height:130px"><style>
    #dialogclass *{
      font-family:PFDinTextCondProRegular;
    }
    #dialogclass{font-size:15px;color:#202020;padding-top:40px;}
    #dialogclass .zv{color:#adadad;}
    #dialogclass table td{
      color:#fff;vertical-align:top;
      padding:7px 5px;
    }
    #dialogclass table .td1{
      width:130px;text-align:right;
      font-size:18px;
      padding-top:20px;
      color:#999;
    }
    #dialogclass table .td2{padding-left:10px;}
    #dialogclass table tr.err td{}
    #dialogclass table tr.err input{
      border:2px solid #ff0000 !important;
      background:#f4cdcd;
    }
  </style>
  <div id="dialogclass"><div style="font-size:36px;line-height:40px;color:#fff;text-align:center;text-transform:uppercase;">
        У ВАС ЕСТЬ ВОПРОСЫ?
      </div><div style="font-size:22px;line-height:26px;color:#fff;text-align:center;margin-top:12px;">
        Заполните форму и ответим на Ваш вопрос в течении трех часов
      </div><div style="line-height:40px;height:40px;">&nbsp;</div><div style="margin-bottom:20px;padding-top:10px;padding-bottom:10px;background:#bd0000;text-align:center;font-size:17px;line-height:20px;color:#f3c0c0;font-style:italic;">
          <div style="display:inline-block;text-align:center;width:80%"><li>Заполните обязательные поля</li><li>Необходимо согласится с условиями</li></div>
        </div><div style="text-align:center;">
        <center>
          <table cellpadding="0" cellspacing="5" border="0">
            <tbody><tr class="err">
              <td class="td1">Как вас зовут: <span class="zv">*</span></td>
              <td class="td2"><input id="name" value="" class="obsuditduo_inp1" autocomplete="off"></td>
            </tr><tr>
              <td class="td1">E-mail:</td>
              <td class="td2"><input id="email" value="" class="obsuditduo_inp1" autocomplete="off"></td>
            </tr><tr class="err">
              <td class="td1">Телефон: <span class="zv">*</span></td>
              <td class="td2"><input id="tel" value="" class="obsuditduo_inp1" autocomplete="off"></td>
            </tr><tr class="err">
              <td class="td1">Компания: <span class="zv">*</span></td>
              <td class="td2"><input id="company" value="" class="obsuditduo_inp1" autocomplete="off"></td>
            </tr><tr>
              <td classs="td1">&nbsp;</td>
              <td>
                <label>
                  <input id="uslov" type="checkbox" value="1" autocomplete="off">
                  &nbsp; Я согласен с <a href="/rus/usloviya-peredachi-informacii/" target="_blank">условиями передачи информации</a>
                </label>
              </td>
            </tr><tr>
              <td class="td1">Сообщение: </td>
              <td class="td2">
                <textarea id="primech" class="obsuditduo_inp1" style="height:90px;"></textarea>
              </td>
            </tr><tr>
              <td class="td1">&nbsp;</td>
              <td class="td2">
                <div style="padding-top:20px;">
                  <button class="obsuditduo_but1" onclick="obsuditduo_act('#dialogclass',0);">Отправить</button>
                </div>
              </td></tr></tbody></table>
        </center>
      </div><div style="line-height:70px;height:70px;">&nbsp;</div></div></div></div></div><div style="position:relative;height:100px;"></div></div></div>



</body>
</html>
