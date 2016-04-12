    <div style="height:50px;">&nbsp;</div>

    <div id="wrap_footer">
      <div id="bl_footer">
        <div class="foot_menu">
          <ul>
            <li id="act"><a href="http://www.gsmoptom.ru/">Главная</a></li>
            <li><a href="http://www.gsmoptom.ru/rus/about/">О компании</a></li>
            <li><a href="http://www.gsmoptom.ru/toplivo/">Продукция</a></li>
            <li><a href="http://www.gsmoptom.ru/rus/dostavka-calc/">Расчет доставки</a></li>
            <li><a href="http://www.gsmoptom.ru/rus/doc/">Документы</a></li>
            <li><a href="http://www.gsmoptom.ru/rus/partners/">Партнеры</a></li>
            <li><a href="http://www.gsmoptom.ru/news/">Новости</a></li>
            <li><a href="http://www.gsmoptom.ru/rus/contact/">Контакты</a></li>
            <li><a href="http://www.gsmoptom.ru/rus/help/">Претензии</a></li>
            <li><a href="http://www.gsmoptom.ru/faq/">Вопрос-ответ</a></li>
          </ul>
        </div>
        <div class="nocode_phone_bottom" style="margin: 20px 0 -30px 0;"><span style="display:block;font-size: 32px; font-family: PFDinTextCondProRegular; line-height: 1em;color:#fff;">+7 (8552) 91-01-05</span></div>

        <div id="name_footer">© 2006–2015, «НЕФТЕПРОДУКТТРЕЙД»</div>
        <div id="copy_footer">
          Обращаем ваше внимание на то, что данный Интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.
        </div>
        <div class="counter">
          <div style="float:left;width:300px;">

          </div>
          <style>
            <!-- .leli {
              color: #5f6469;
              font-size: 11px;
            }

            a.leli:link,
            a.leli:visited {
              color: #5f6469;
              font-size: 12px;
              line-height: 1.3em;
              text-decoration: none;
            }

            a.leli:active,
            a.leli:hover {
              color: #717f8a;
            }

            .leli img {
              padding: 0;
              margin: 0;
            }

            -->
          </style>
          <div style="float:right;width:300px;">
            <div class="leli">
              <div style="float:left;width: 150px; line-height: 1em;text-align:right; padding-right:5px;padding-bottom:7px;"><a class="leli" href="http://www.leli.ru/" target="_blank">Разработка сайта</a>
                <br> <a class="leli" href="http://www.leli.ru/" target="_blank">Интернет-студия LELI</a></div>
              <div style="float:left;width: 90px; text-align:left;padding-top:5px;">
                <a href="http://www.leli.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/wwwleli.gif" alt="Интернет студия LELI, разработка сайтов, раскрутка сайтов" border="0" height="20" width="60"></a>
                <div style="padding-top:0px;font-size:10px;line-height:1em;margin-top:-5px;">2015</div>
              </div>
              <div style="clear: both;">&nbsp;</div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- wrap_footer -->

  </div>
  <?php wp_footer(); ?>
  <?php if ( is_page_template('page-contacts.php') ) { ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/google-maps.js"></script>
  <?php } ?>

</body>
</html>
