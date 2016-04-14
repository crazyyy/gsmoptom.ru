<?php /* Template Name: Home Page  */ get_header(); ?>

  <div id="wrap_slide">
    <script>
      $(function(){
        $('#slide_sonata_1').slideSonata({
          height:673,
          timer:4500,
          shagBool:0,
        });
      });
    </script>
    <div id="slide_sonata_1" class="new_sonata">
      <ul>
        <?php if( have_rows('top_slider') ): while ( have_rows('top_slider') ) : the_row(); ?>

          <?php $image = get_sub_field('slide_image');
            if( !empty($image) ): ?>
            <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
          <?php endif; ?>

        <?php endwhile; endif; ?>
      </ul>
    </div><!-- slide_sonata_1 -->
  </div><!-- wrap_slide -->

  <div style="margin-top:-635px;">

    <div id="bl_nadstela">
      <div id="bl_zagsite">
        <h1 class="zagmain" title="продажа гсм - опт цены, дизельного топливо оптом и доставка по всей России">Продажа оптом: топливо, дизельное топливо, ГСМ<br> доставка светлых нефтепродуктов по России</h1>
        <h2 class="zagmain2" style="padding:10px 0 30px 0;text-transform: none;text-shadow:none;">Прямые поставки топливо: <a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/">дизтопливо</a>,  <a href="http://www.gsmoptom.ru/toplivo/kerosin-optom/">керосин</a>, <a href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/">смт / печное топливо</a>, от производителя</h2> </div>
    </div>

    <div id="bl_stela">

      <?php get_template_part('brand'); ?>

      <div id="stela">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stela2.png">
      </div><!-- stela -->
    </div><!-- bl_stela -->
  </div>


    <div id="wrap_preim">
      <div id="bl_preim">
        <div class="pr">
          <div class="zag_pr">Высокое качество продукта</div>
          <div class="text_pr">Поставляем нефтепродукты (гсм оптом) высшего качества только от проверенных и надежных поставщиков. Все виды топлива соответствуют экологическим нормам ГОСТ, прошли строгий лабораторный контроль сохранности качества</div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/i1.png">
        </div>
        <div class="pr" style="border-left: 1px solid #bdc3c3;border-right: 1px solid #bdc3c3;width:288px;">
          <div class="zag_pr">Доступные цены на топливо</div>
          <div class="text_pr">Мы рады предложить вам конкурентные цены на топливо - на сайте всегда актуальная информация. Следите за информационной стеллой!</div>
          <br>
          <br><img src="<?php echo get_template_directory_uri(); ?>/img/i2.png">
        </div>
        <div class="pr">
          <div class="zag_pr">собственные бензовозы</div>
          <div class="text_pr">Мы имеем <a href="http://www.gsmoptom.ru/rus/about/avtopark/">собственный автопарк бензовозов</a> - поэтому заказать <a href="http://www.gsmoptom.ru/rus/dostavka-calc/">доставку топлива</a> у нас - выгодно нашим клиентам!</div>
          <br>
          <br>
          <br><img src="<?php echo get_template_directory_uri(); ?>/img/i3.png">
        </div>
        <div class="clear"></div>
      </div>
    </div>

    <div id="wrap_dostavka">
      <div id="cont">

        <div id="calc">
          <div id="dostavka_calc_index">
            <div id="zag">Расчитать доставку</div>
            <div id="pad">
              <div class="left">Откуда</div>
              <div class="right clearfix">
                <div class="selectmain">
                  <div class="sel">
                    <div class="div1">
                      <div class="div2">Нижнекамск (Танеко)</div>
                    </div>
                  </div>
                  <select id="city_ot">
                    <option value="">- выберите город -</option>
                    <option value="1|||5|||Нижнекамск|||55.6313,51.8144" selected="selected">Нижнекамск (Танеко)</option>
                    <option value="2|||5|||Нижнекамск|||55.6313,51.8144">Нижнекамск (ТАИФ-НК)</option>
                  </select>
                </div>
              </div>

              <div class="left">Куда</div>
              <div class="right clearfix">
                <div class="selectmain">
                  <div class="sel">
                    <div class="div1">
                      <div class="div2">- выберите город -</div>
                    </div>
                  </div>
                  <select id="city_do">
                    <option selected="selected" value="">- выберите город -</option>
                    <option value="46|||agryz|||Агрыз">Агрыз</option>
                    <option value="0">Другой город</option>
                  </select>
                </div>
              </div>

              <div class="left">Бензовоз</div>
              <div class="right">
                <div class="selectmain disabled">
                  <div class="sel">
                    <div class="div1">
                      <div class="div2">&nbsp;</div>
                    </div>
                  </div>
                  <select id="benzovoz" disabled="disabled"></select>
                </div>
              </div>
              <div class="clear"></div>

              <div class="left">&nbsp;</div>
              <div class="right" style="text-align:left;">
                <button type="button">Рассчитать</button>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div><!-- calc -->

        <div id="text_dostavka">
          <div id="txt">
            <a href="http://www.gsmoptom.ru/rus/dostavka-calc/" style="color:#fff;text-decoration:none;">Осуществляем доставку нефтепродуктов (гсм, дт, топливо) по всей России. При доставке нефтепродуктов мы подбираем оптимальный по времени и  километражу маршрут доставки так, чтобы издержки на транспортировку были минимальными.</a> </div>
        </div><!-- text_dostavka -->

      </div><!-- cont -->
    </div><!-- wrap_dostavka -->

    <div style="background:#fff;padding:20px 0 0 0;">
      <div style="width: 990px; margin:0px auto;background:#fff;padding:10px;border-bottom:1px solid #ececec;color:#a9a9a9;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/5/arhangelsk/" style="font-size:14px;color:#484745;">дизтопливо оптом в Архангельске с доставкой</a> |
        <a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/5/volgograd/" style="font-size:14px;color:#484745;">дизельное топливо оптом в Волгограде с доставкой</a> |
        <a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/5/sankt-peterburg/" style="font-size:14px;color:#484745;">дт топливо оптом в Санкт-Петербурге с доставкой</a> |
        <a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/5/ekaterenburg/" style="font-size:14px;color:#484745;">дизельное топливо в Екатеринбурге</a> |
        <a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/5/moskva/" style="font-size:14px;color:#484745;">доставка до Москвы топливо дт оптом</a></div>
    </div>

    <div id="wrap_company_news">
      <div id="bl_company_news">
        <div id="bl_company">
          <p>ООО «НефтеПродуктТрейд» является одним из крупнейших поставщиков нефтепродуктов (<strong>топливо оптом</strong>, гсм, дизтопливо) в республике Татарстан и за её пределами. За время работы на рынке нефтепродуктов наша Компания зарекомендовала себя как надежный поставщик. Нами налажены партнерские отношения со многими предприятиями различных отраслей производства в городе Набережные Челны.</p>
          <p>
            <a href="http://www.gsmoptom.ru/rus/about/">О компании</a>
            <a href="http://www.gsmoptom.ru/rus/doc/">Сканы документов</a>
            <a href="http://www.gsmoptom.ru/file/i_pic/doc/rekvizit.doc">Реквизиты компании</a>
          </p>
        </div>
        <div id="bl_news" class="clearfix">
          <div id="mainzag_news"><a href="http://www.gsmoptom.ru/news/">Новости компании</a></div>

          <div class="cont">
            <div id="news_listx">

              <div id="slide_kalina_1">
                <ul>
                  <?php query_posts("showposts=10&cat=1"); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <li>
                      <div class="block">
                        <div class="date">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_time('j F Y'); ?></a>
                        </div>
                        <div class="name">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </div>
                      </div>
                    </li>
                  <?php endwhile; endif; ?>
                  <?php wp_reset_query(); ?>
                </ul>
              </div><!-- slide_kalina_1 -->

            </div><!-- news_listx -->

          </div>
        </div>
      </div><!-- bl_company_news -->
    </div><!-- wrap_company_news -->

    <div id="obsudit_form1">
      <div class="ug1"></div>
      <div class="ug2"></div>
      <div class="ug3"></div>
      <div class="ug4"></div>
      <div class="cont">
        <div class="zagol">У вас есть вопросы?</div>
        <div class="zagol2">Заполните форму и ответим на Ваш вопрос в течении трех часов</div>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="110" title="HomeForm"]'); ?>
        </div>
      </div>
    </div><!-- obsudit_form1 -->

    <div class="saitobaza_bottom_front">
      <h1 style="text-align: justify;">Продажа топлива оптом</h1>
      <table style="width: 100%;" border="0" cellpadding="10" cellspacing="10">
        <tbody>
          <tr>
            <td style="width: 45%;" valign="top">
              <p>Светлые нефтепродукты – незаменимый ресурс современной экономики. Без дизтоплива, бензина, керосина остановилось бы транспортное сообщение как внутри страны, так и за ее пределами. Кроме того, отсутствие горюче-смазочных материалов делает невозможным функционирование любого производственного предприятия (металлургического, энергетического, машиностроительного и других).</p>
              <p>«НефтеПродуктТрейд» занимается продажей ГСМ оптом во всех регионах РФ. У нас вы можете <a title="дизельное топливо оптом" href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/"><strong>купить оптом дизельное топливо</strong></a>, <a title="керосин оптом" href="http://www.gsmoptom.ru/toplivo/kerosin-optom/">керосин</a>, а также <a title="смт - судовое маловязкое топливо" href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/">судовое маловязкое топливо</a> отличного качества и по низким ценам.</p>
              <p style="text-align: justify; padding: 10px; background: #dddddd; margin-left: 30px; font-style: italic; font-size: 18px;">Своим клиентам мы предлагаем выгодное партнерство, стабильные деловые отношения и достойный уровень обслуживания.</p>
            </td>
            <td style="width: 55%; padding-left: 30px;" valign="top">
              <h2 style="text-align: left;">Главные преимущества работы с «НефтеПродуктТрейд»:</h2>
              <p>&nbsp;</p>
              <ul style="padding-left: 30px; text-align: justify;">
                <li>широкий выбор ГСМ от надежных нефтеперерабатывающих заводов России (ТАИФ-НК, Танеко, Башнефть);</li>
                <li>первосортное <a title="дизтопливо оптом" href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/"><strong>дизтопливо оптом</strong></a> мелкими и крупными партиями;</li>
                <li>соответствие технических характеристик товара российским экологическим стандартам, а также обязательное сопровождение продукции паспортом качества завода-изготовителя;</li>
                <li>отрегулированная система оперативной доставки ГСМ оптом в любой крупный город РФ;</li>
                <li>покупка топлива оптом по индивидуальной системе расчета и скидок для каждого клиента;</li>
                <li>собственный парк бензовозов, позволяющий выполнять доставку в минимальные сроки и гарантировать сохранение надлежащего качества топлива при транспортировке.</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>

      <div style="float: left; position: relative; width: 280px; height: 220px; padding: 20px; box-sizing: border-box; text-align: center;"><img style="position: absolute; top: 20px; left: 10px;" src="<?php echo get_template_directory_uri(); ?>/img/karta.png" alt="" width="250"><span style="position: absolute; top: 80px; left: 30px; color: #000; font-size: 22px; display: block; font-family: PFDinTextCondProRegular;">Оптовая продажа топлива<br> по всей России</span></div>
      <div style="float: left; width: 710px; padding: 40px; box-sizing: border-box;">
        <p style="text-align: justify;">Наша компания предлагает своим клиентам только прозрачные и понятные схемы сотрудничества, ведь мы ценим долгосрочное партнерство. На сайте всегда размещены актуальные прайсы на топливо. Для <a href="http://www.gsmoptom.ru/rus/dostavka-calc/">вычисления стоимости доставки</a> выберите интересующий вас город, и компьютер мгновенно выполнит расчет цены на услугу.</p>
      </div>
      <div class="clear">&nbsp;</div>
      <p style="text-align: justify;">&nbsp;</p>
      <p style="text-align: justify;">Чтобы купить нефтепродукты оптом или связаться с менеджерами нашей компании – позвоните по одному из размещенных на сайте телефонов или отправьте запрос по электронной почте.
      </p>

      <div style="text-align: center;">
        <button class="obsudit_but1" onclick="obsudit_act('#obsudit_form1',1);">Отправить заявку на топливо</button>
      </div>
    </div>
    <script>
      $('#obsudit_form1 input').attr('autocomplete', 'off');
    </script>

<?php get_footer(); ?>
