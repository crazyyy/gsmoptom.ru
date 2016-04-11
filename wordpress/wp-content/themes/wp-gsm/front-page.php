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
      <div style="margin: -15px auto 15px auto;">
        <a href="http://www.gsmoptom.ru/rus/on-line-tablo-taneco/"><img src="<?php echo get_template_directory_uri(); ?>/img/tablo-taneco-online2.png" alt="Онлайн табло ТАНЕКО" border="0"></a>
      </div>
    </div>

    <div id="bl_stela">

      <div style="background-color: rgb(255, 204, 0); background-image: url('<?php echo get_template_directory_uri(); ?>/img/taneco.jpg');" class="brand">
        <div class="tablo1"></div>
        <div class="tablo2">
          <div id="stela_index">
            <div class="zagol">Стоимость нефтепродуктов на <strong style="background: #ffcc00;padding:3px 6px;">4 апреля 2016</strong></div>
            <div class="cat_list">
              <div class="cont">
                <div  class="block">
                  Танеко
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

                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/" class="link">ТПБ, вид V</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                              27 000 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                              0.812
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">21.92 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/adc672bfd814d32f6748267291adb1d9.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                            <a href="http://www.gsmoptom.ru/file/filemanag/983f859cdd5765a30c651ed172f04ecf.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>

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
                </div>

                <div id="" class="block">
                  ТАИФ-НК
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
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/benzin-optom/" class="link">Бензин 92</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">
                              39 330 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">
                              0.740
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">29.10 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/a80d64560381cb4cbce79dd8a4d47360.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                            <a href="http://www.gsmoptom.ru/file/filemanag/63d711af9c5b0e344c18e23c739bebdd.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/benzin-optom/" class="link">Бензин 95</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">
                              41 730 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">
                              0.745
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">31.08 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/6e0a6840f7c7822598b3f52fff808a16.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/" class="link">ДТ Сорт Е авто</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                              30 930 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                              0.825
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">25.51 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/d44eae9702f0eaac7792b2c11cf435d2.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                            <a href="http://www.gsmoptom.ru/file/filemanag/84981724f6cdfee8ac0e19bec29f05e4.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/" class="link">ДТ кл 2 в 3  авто</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                              0 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                              0.820
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">0 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/2684b7807a73154c185b1ba4996e752f.jpg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text1">

                    </div>
                  </div>
                  <div class="bg">
                    <div class="color">125426</div>
                    <div class="image"><?php echo get_template_directory_uri(); ?>/img/taif.jpg</div>
                  </div>
                </div>
                <div id="" class="block">
                  Башнефть
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
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/benzin-optom/" class="link">Бензин 92</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">
                              38 900 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">
                              0.743
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/benzin-optom/');" style="cursor:pointer;">28.90 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/799e556d7182cd9e3fafbd275dbe9d43.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/" class="link">ДТ сорт С</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                              31 800 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                              0.830
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">26.39 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/7533f9ce7319f8b7a37ee35b163d6853.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text1">

                    </div>
                  </div>
                  <div class="bg">
                    <div class="color">992441</div>
                    <div class="image"><?php echo get_template_directory_uri(); ?>/img/bashneft.jpg</div>
                  </div>
                </div>
                <div id="" class="block">
                  Марийский
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
                        <tr>
                          <td>
                            <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/" class="link">ДГК, вид II</a></div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                              27 500 р.
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                              0.820
                            </div>
                          </td>
                          <td>
                            <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">22.55 р.
                            </div>
                          </td>
                          <td>
                            <a href="http://www.gsmoptom.ru/file/filemanag/02a9beaf2369eb6ac5a03f2a49fe2d0f.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                            <a href="http://www.gsmoptom.ru/file/filemanag/b3e9fbf6bac06744505b10a480360849.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text1">

                    </div>
                  </div>
                  <div class="bg">
                    <div class="color">6f634e</div>
                    <div class="image"><?php echo get_template_directory_uri(); ?>/img/raznoe.jpg</div>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="data_viev">
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
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/" class="link">ТПБ, вид V</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                        27 000 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                        0.812
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">21.92 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/adc672bfd814d32f6748267291adb1d9.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/983f859cdd5765a30c651ed172f04ecf.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/" class="link">ДГК ЖД</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                        26 800 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">
                        0.810
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/sudovoe-malovyazkoe-toplivo-optom/');" style="cursor:pointer;">21.70 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/979284371b7f26e459b8cc3f164ed5b1.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/1cc3a6f7d39ecf7dfee472b7d288a47a.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/kerosin-optom/" class="link">Керосин КТ-1</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/kerosin-optom/');" style="cursor:pointer;">
                        27 000 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/kerosin-optom/');" style="cursor:pointer;">
                        0.808
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/kerosin-optom/');" style="cursor:pointer;">21.81 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/eb25e2a7d372cb14487e667cdb68c9eb.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/5be542a51efd18d42a229135fde72d32.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/" class="link">ДТ сорт F авто</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        31 000 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        0.804
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">24.92 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/4de025eea51d7a84fd03a39054c56794.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/d59aff48e77ccc34c92eba6dd60460df.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/" class="link">ДТ сорт E ЖД</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        30 300 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        0.801
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">24.27 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/3d7a22fb1c7a6036e4b433bd997fee89.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/0887ec021da2ba607be3ffc6c549e16a.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/" class="link">ДТ сорт С ЖД</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        30 000 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        0.809
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">24.27 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/1a9a60013e86aef47715d820522850eb.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/78ac7932f82f9ba11df36fc0442de2cd.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/kerosin-optom/" class="link">Керосин КТ-1 ЖД</a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/kerosin-optom/');" style="cursor:pointer;">
                        26 800 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/kerosin-optom/');" style="cursor:pointer;">
                        0.808
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/kerosin-optom/');" style="cursor:pointer;">21.65 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/078723387622011ee132b38bfd0646ab.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/eda83011c9cd0e46424e5106393edd3e.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div style="position:relative;"><a href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/" class="link">ДТ сорт F ЖД </a></div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        30 500 р.
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">
                        0.808
                      </div>
                    </td>
                    <td>
                      <div onclick="Get('/toplivo/dizelnoe-toplivo-optom/');" style="cursor:pointer;">24.64 р.
                      </div>
                    </td>
                    <td>
                      <a href="http://www.gsmoptom.ru/file/filemanag/b254bf44a2d6fb52998f8e72ace419c7.jpg" target="_blank" rel="lightbox"><img src="<?php echo get_template_directory_uri(); ?>/img/i_photo.png" alt="Фото" title="Фото"></a>
                      <a href="http://www.gsmoptom.ru/file/filemanag/20d07c8023ed7e61aac9e6594fab51a4.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/i_doc2.png" style="padding: 0 10px;" alt="Паспорт" title="Паспорт"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="text1">
                <br> Цены представлены без доставки, <a href="http://www.gsmoptom.ru/rus/dostavka-calc/">доставку можно рассчитать</a> отдельно.
              </div>
            </div>
          </div>
        </div>
        <div class="tablo3"></div>
      </div>
      <div id="stela">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stela2.png">
      </div>
    </div>
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
              <div class="right">
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
                    Warning: mysql_fetch_object(): supplied argument is not a valid MySQL result resource in /home/c46/public_html/themes/theme_index.php on line 84
                  </select>
                </div>
              </div>
              <div class="clear"></div>

              <div class="left">Куда</div>
              <div class="right">
                <div class="selectmain">
                  <div class="sel">
                    <div class="div1">
                      <div class="div2">- выберите город -</div>
                    </div>
                  </div>
                  <select id="city_do">
                    <option selected="selected" value="">- выберите город -</option>
                    <option value="46|||agryz|||Агрыз">Агрыз</option>
                    <option value="89|||alnashi|||Алнаши">Алнаши</option>
                    <option value="60|||almetevsk|||Альметьевск">Альметьевск</option>
                    <option value="128|||Aramyl|||Арамиль">Арамиль</option>
                    <option value="47|||arzamas|||Арзамас">Арзамас</option>
                    <option value="126|||arti|||Арти">Арти</option>
                    <option value="94|||arhangelsk|||Архангельск">Архангельск</option>
                    <option value="110|||balakovo|||Балаково">Балаково</option>
                    <option value="68|||balahna|||Балахна">Балахна</option>
                    <option value="95|||balezino|||Балезино">Балезино</option>
                    <option value="120|||bataysk|||Батайск">Батайск</option>
                    <option value="133|||Bryansk|||Брянск">Брянск</option>
                    <option value="93|||bugulma|||Бугульма">Бугульма</option>
                    <option value="79|||buzuluk|||Бузулук">Бузулук</option>
                    <option value="56|||vladimir|||Владимир">Владимир</option>
                    <option value="53|||volgograd|||Волгоград">Волгоград</option>
                    <option value="51|||volzhsk|||Волжск">Волжск</option>
                    <option value="67|||volzhsky|||Волжский">Волжский</option>
                    <option value="75|||vologda|||Вологда">Вологда</option>
                    <option value="88|||volsk|||Вольск">Вольск</option>
                    <option value="66|||voronezh|||Воронеж">Воронеж</option>
                    <option value="55|||gus-hrustalny|||Гусь-Хрустальный">Гусь-Хрустальный</option>
                    <option value="74|||demyanovo|||Демьяново">Демьяново</option>
                    <option value="48|||dzerzhinsk|||Дзержинск">Дзержинск</option>
                    <option value="131|||Dyagtersk|||Дягтерск">Дягтерск</option>
                    <option value="36|||ekaterenburg|||Екатеринбург">Екатеринбург</option>
                    <option value="76|||elabuga|||Елабуга">Елабуга</option>
                    <option value="54|||zhigulevsk|||Жигулевск">Жигулевск</option>
                    <option value="140|||Zarayisk|||Зарайск">Зарайск</option>
                    <option value="61|||zlatoust|||Златоуст">Златоуст</option>
                    <option value="106|||ivanovo|||Иваново">Иваново</option>
                    <option value="100|||izhevsk|||Ижевск">Ижевск</option>
                    <option value="114|||yoshkar-ola|||Йошкар-Ола">Йошкар-Ола</option>
                    <option value="40|||kazan|||Казань">Казань</option>
                    <option value="80|||kalininsk|||Калининск">Калининск</option>
                    <option value="136|||Kaluga|||Калуга">Калуга</option>
                    <option value="132|||Kamuishlov|||Камышлов">Камышлов</option>
                    <option value="82|||kataisk|||Катайск">Катайск</option>
                    <option value="38|||kirov|||Киров">Киров</option>
                    <option value="112|||kovrov|||Ковров">Ковров</option>
                    <option value="142|||Korolev|||Королев">Королев</option>
                    <option value="109|||kostroma|||Кострома">Кострома</option>
                    <option value="86|||kotlas|||Котлас">Котлас</option>
                    <option value="73|||kotovo|||Котово">Котово</option>
                    <option value="102|||koshki|||Кошки">Кошки</option>
                    <option value="125|||krasnoufimsk|||Красноуфимск">Красноуфимск</option>
                    <option value="45|||kstovo|||Кстово">Кстово</option>
                    <option value="57|||kurgan|||Курган">Курган</option>
                    <option value="101|||kursk|||Курск">Курск</option>
                    <option value="98|||lipeck|||Липецк">Липецк</option>
                    <option value="116|||lytkarino|||Лыткарино">Лыткарино</option>
                    <option value="137|||Lyubercui|||Люберцы">Люберцы</option>
                    <option value="84|||magnitogorsk|||Магнитогорск">Магнитогорск</option>
                    <option value="139|||Malaya Vishera|||Малая Вишера">Малая Вишера</option>
                    <option value="122|||malaya purga|||Малая Пурга">Малая Пурга</option>
                    <option value="81|||mendeleevsk|||Менделеевск">Менделеевск</option>
                    <option value="123|||mozhga|||Можга">Можга</option>
                    <option value="35|||moskva|||Москва">Москва</option>
                    <option value="41|||chelny|||Набережные Челны">Набережные Челны</option>
                    <option value="129|||Nevyansk|||Невьянск">Невьянск</option>
                    <option value="49|||nizhnevartovsk|||Нижневартовск">Нижневартовск</option>
                    <option value="117|||nizhniy-novgorod|||Нижний Новгород ">Нижний Новгород </option>
                    <option value="130|||Nizhnii Tagil|||Нижний Тагил">Нижний Тагил</option>
                    <option value="121|||novoulyanovsk|||Новоульяновск">Новоульяновск</option>
                    <option value="138|||Novui Oscol|||Новый Оскол">Новый Оскол</option>
                    <option value="141|||Odincovo|||Одинцово">Одинцово</option>
                    <option value="78|||oktyabrsk|||Октябрьск">Октябрьск</option>
                    <option value="92|||omsk|||Омск">Омск</option>
                    <option value="96|||orel|||Орел">Орел</option>
                    <option value="34|||orenburg|||Оренбург">Оренбург</option>
                    <option value="43|||orsk|||Орск">Орск</option>
                    <option value="63|||otradny|||Отрадный">Отрадный</option>
                    <option value="124|||pavlovo|||Павлово">Павлово</option>
                    <option value="28|||penza|||Пенза">Пенза</option>
                    <option value="127|||pervouralsk|||Первоуральск">Первоуральск</option>
                    <option value="113|||perm|||Пермь">Пермь</option>
                    <option value="64|||podolsk|||Подольск">Подольск</option>
                    <option value="72|||podosinki|||Подосинки">Подосинки</option>
                    <option value="107|||polevskoy|||Полевской">Полевской</option>
                    <option value="50|||romodanovo|||Ромоданово">Ромоданово</option>
                    <option value="118|||rybnaya-sloboda|||Рыбная Слобода ">Рыбная Слобода </option>
                    <option value="105|||ryazan|||Рязань">Рязань</option>
                    <option value="32|||samara|||Самара">Самара</option>
                    <option value="59|||sankt-peterburg|||Санкт-Петербург">Санкт-Петербург</option>
                    <option value="31|||saratov|||Саратов">Саратов</option>
                    <option value="134|||Smolensk|||Смоленск">Смоленск</option>
                    <option value="69|||solikamsk|||Соликамск">Соликамск</option>
                    <option value="91|||stary-oskol|||Старый Оскол">Старый Оскол</option>
                    <option value="135|||Suzdal|||Суздаль">Суздаль</option>
                    <option value="103|||syzran|||Сызрань">Сызрань</option>
                    <option value="65|||syktyvkar|||Сыктывкар">Сыктывкар</option>
                    <option value="104|||tambov|||Тамбов">Тамбов</option>
                    <option value="90|||tver|||Тверь">Тверь</option>
                    <option value="58|||tolyati|||Тольятти">Тольятти</option>
                    <option value="52|||ulyanovsk|||Ульяновск">Ульяновск</option>
                    <option value="33|||ufa|||Уфа">Уфа</option>
                    <option value="85|||uhta|||Ухта">Ухта</option>
                    <option value="77|||cilna|||Цильна">Цильна</option>
                    <option value="99|||chaikovsk|||Чайковск">Чайковск</option>
                    <option value="119|||chebarkul|||Чебаркуль">Чебаркуль</option>
                    <option value="29|||cheboksary|||Чебоксары">Чебоксары</option>
                    <option value="37|||chelyabinsk|||Челябинск">Челябинск</option>
                    <option value="71|||chernushka|||Чернушка">Чернушка</option>
                    <option value="62|||shubino|||Шубино">Шубино</option>
                    <option value="87|||engels|||Энгельс">Энгельс</option>
                    <option value="108|||yozhnouralsk|||Южноуральск">Южноуральск</option>
                    <option value="83|||yaroslavl|||Ярославль">Ярославль</option>
                    <option value="0">Другой город</option>
                  </select>
                </div>
              </div>
              <div class="clear"></div>

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
          <style>
            .selectmain {
              width: 100%;
              position: relative;
            }

            .selectmain select {
              width: 100%;
              height: 44px;
              position: relative;
              border: none;
              cursor: pointer;
              opacity: 0;
              filter: alpha(opacity=0);
              font-size: 15px;
              padding: 0px;
              -webkit-appearance: menulist-button !important;
              line-height: 44px !important;
              /*Safari не понимает height*/
            }

            .selectmain select option {
              /*во разных браузерах по разному*/
              padding-left: 5px;
              /*FF*/
            }

            .selectmain .sel {
              position: absolute;
              left: 0;
              top: 0;
              width: 100%;
              border-top: 1px solid #999a9a;
              border-bottom: 1px solid #fff;
              -moz-border-radius: 5px;
              -webkit-border-radius: 5px;
              border-radius: 5px;
              background: #fff url(<?php echo get_template_directory_uri(); ?>/img/selectmain_arrow1.png) no-repeat right center;
              text-align: left;
              white-space: nowrap;
            }

            .selectmain.disabled .sel {
              opacity: 0.5;
            }

            .selectmain .sel .div1 {
              margin: 14px 35px 13px 10px;
              overflow: hidden;
            }

            .selectmain .sel .div2 {
              font-size: 16px;
              color: #0a0a0a;
              line-height: 16px;
            }
          </style>

        </div>
        <div id="text_dostavka">
          <div id="txt">
            <a href="http://www.gsmoptom.ru/rus/dostavka-calc/" style="color:#fff;text-decoration:none;">Осуществляем
 доставку нефтепродуктов (гсм, дт, топливо) по всей России. При доставке
 нефтепродуктов мы подбираем оптимальный по времени и  километражу
маршрут доставки так, чтобы издержки на транспортировку были
минимальными.</a> </div>
        </div>
      </div>
    </div>

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
        <div id="bl_news">
          <div id="mainzag_news"><a href="http://www.gsmoptom.ru/news/">Новости компании</a></div>
          <div class="cont">
            <style>
              #news_listx {
                padding: 40px 0px;
              }

              #news_listx .block {
                padding: 0 80px 0 45px;
              }

              #news_listx .date a {
                font-size: 16px;
                line-height: 19px;
                color: #000;
                text-decoration: none;
              }

              #news_listx .date a:hover {
                text-decoration: underline;
                color: #5b4900;
              }

              #news_listx .name {
                padding-top: 20px;
              }

              #news_listx .name a {
                font-size: 16px;
                color: #000;
                text-decoration: none;
              }

              #news_listx .text_news a:hover {
                text-decoration: underline;
                color: #5b4900;
              }
            </style>
            <div id="news_listx">

              <div style="width: 493px;" class="slide_kalina" id="slide_kalina_1">
                <div style="width: 493px;" id="inner">
                  <ul style="left: -2958px;">
                    <li style="width: 493px;" id="start">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/52.html">12 февраля 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/52.html">Требования  к автоцистернам и водителям при наливе нефтепродуктов на установке автоналива тит. 152 АО «ТАНЕКО»</a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="1">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/57.html">5 апреля 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/57.html">Проба ТПБ от 5.04 автоналив </a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="2">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/56.html">25 марта 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/56.html">Начался прием заявок по ЖД на Топливо дизельное ЕВРО, летнее, сорт С, экологического класса К5/ДТ-Л-К5</a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="3">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/55.html">23 марта 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/55.html">Утром удалось прокатиться в дождь, остальные тренировки были сухими. Улучшились на 1 секунду, также попробовали мотор VsPi18.</a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="4">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/54.html">17 марта 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/54.html">Спонсируемая
нашей организацией команда картингистов из Набережных Челнов открывает
этот сезон первой гонкой в Евпатории на зимнем кубке России.</a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="5">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/53.html">11 марта 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/53.html">С 12:00 часов
10.03.2016 года вместо ДТ класса 2, экологического класса К5 начинается
отпуск автоналивом дизельного топлива сорта F, экологического класса К5
по цене 29 600 рублей за тонну с НДС.</a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="6">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/52.html">12 февраля 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/52.html">Требования  к автоцистернам и водителям при наливе нефтепродуктов на установке автоналива тит. 152 АО «ТАНЕКО»</a>
                        </div>
                      </div>
                    </li>
                    <li style="width: 493px;" id="end">
                      <div class="block">
                        <div class="date">
                          <a href="http://www.gsmoptom.ru/news/57.html">5 апреля 2016 года</a>
                        </div>
                        <div class="name">
                          <a href="http://www.gsmoptom.ru/news/57.html">Проба ТПБ от 5.04 автоналив </a>
                        </div>
                      </div>
                    </li>
                    <div class="clear"></div>
                  </ul>
                </div>
                <div style="display: none;" id="shag"><span class="" id="id_1" rel="1"></span><span class="" id="id_2" rel="2"></span><span class="" id="id_3" rel="3"></span><span class="" id="id_4" rel="4"></span><span class="" id="id_5" rel="5"></span><span class="act" id="id_6" rel="6"></span></div>
                <div id="prev"></div>
                <div id="next"></div>
              </div>
              <script>
                $('#slide_kalina_1').slideKalina({
                  Width: 493, //ширина блока
                  Height: 120, //высота блока
                  timer: 5000, //время между переходами в миллисекундах, если указать 0 таймер отключается
                  boolStrel: 1, //отображать стрелки вперед и назад, значения (0,1)
                  boolShag: 0, //отображать шаги переходов, значения (0,1)
                });
              </script>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>


    <div style="width:990px;margin:0 auto;">
      <div class="osntext">

        <div class="clear"></div>
        <div></div>
      </div>
    </div>
    <style>
      #obsudit_form1 {
        position: relative;
        width: 990px;
        margin: 0 auto;
        margin-top: 30px;
        font-size: 18px;
        color: #000;
      }

      #obsudit_form1 a {
        font-size: 18px;
      }

      #obsudit_form1 .cont {
        width: 780px;
        margin: 0 auto;
        padding-top: 55px;
        padding-bottom: 30px;
      }

      #obsudit_form1 .zagol {
        padding-left: 25px;
        font-size: 36px;
        line-height: 40px;
        font-family: PFDinTextCondProRegular;
        text-transform: uppercase;
      }

      #obsudit_form1 .zagol2 {
        padding-left: 25px;
        margin-top: 15px;
        font-size: 22px;
        line-height: 26px;
        font-family: PFDinTextCondProRegular;
      }

      #obsudit_form1 .ug1 {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 20px;
        height: 20px;
        background: url(<?php echo get_template_directory_uri(); ?>/img/ug1.png) no-repeat;
      }

      #obsudit_form1 .ug2 {
        position: absolute;
        right: 0px;
        top: 0px;
        width: 20px;
        height: 20px;
        background: url(<?php echo get_template_directory_uri(); ?>/img/ug2.png) no-repeat;
      }

      #obsudit_form1 .ug3 {
        position: absolute;
        left: 0px;
        bottom: 0px;
        width: 20px;
        height: 20px;
        background: url(<?php echo get_template_directory_uri(); ?>/img/ug3.png) no-repeat;
      }

      #obsudit_form1 .ug4 {
        position: absolute;
        right: 0px;
        bottom: 0px;
        width: 20px;
        height: 20px;
        background: url(<?php echo get_template_directory_uri(); ?>/img/ug4.png) no-repeat;
      }

      #obsudit_form1 .inp1 {
        width: 780px;
        font-size: 18px;
        line-height: 18px;
        color: #000;
        padding: 10px 10px 10px 10px;
        border: 1px #d0d0d0 solid;
      }

      #obsudit_form1 .inp1::-webkit-input-placeholder {
        /* WebKit browsers */
        color: #5c5c5c;
      }

      #obsudit_form1 .inp1:-moz-placeholder {
        /* Mozilla Firefox 4 to 18 */
        color: #5c5c5c;
      }

      #obsudit_form1 .inp1::-moz-placeholder {
        /* Mozilla Firefox 19+ */
        color: #5c5c5c;
      }

      #obsudit_form1 .inp1:-ms-input-placeholder {
        /* Internet Explorer 10+ */
        color: #5c5c5c;
      }

      #obsudit_form1 .tarea1 {
        width: 780px;
        font-size: 18px;
        line-height: 22px;
        color: #000;
        padding: 10px 10px 10px 10px;
        border: 1px #d0d0d0 solid;
        height: 100px;
      }

      #obsudit_form1 .form {
        margin-top: 30px;
      }

      #obsudit_form1 table {
        width: 100%;
      }

      #obsudit_form1 table td {
        padding: 7px 7px 7px 7px;
      }
    </style>
    <div id="obsudit_form1">
      <div class="ug1"></div>
      <div class="ug2"></div>
      <div class="ug3"></div>
      <div class="ug4"></div>
      <div class="cont">
        <div class="zagol">У вас есть вопросы?</div>
        <div class="zagol2">Заполните форму и ответим на Ваш вопрос в течении трех часов</div>
        <div class="form">
          <table border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td colspan="2">
                  <input autocomplete="off" id="name" placeholder="Как вас зовут" class="inp1">
                </td>
              </tr>
              <tr>
                <td>
                  <input autocomplete="off" id="email" placeholder="E-mail" class="inp1" style="width:372px;">
                </td>
                <td>
                  <input autocomplete="off" id="tel" placeholder="Контактный телефон" class="inp1" style="width:372px;">
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input autocomplete="off" id="company" placeholder="Компания" class="inp1">
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <div style="padding-top:20px;padding-left:10px;">
                    &nbsp;&nbsp;&nbsp;
                    <label>
                      <input autocomplete="off" id="uslov" value="1" type="checkbox"> &nbsp; Я согласен с <a href="http://www.gsmoptom.ru/rus/usloviya-peredachi-informacii/" target="_blank">условиями передачи информации</a>
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <textarea id="primech" class="tarea1" placeholder="Сообщение"></textarea>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <div style="padding-top:23px;">
                    <button class="obsudit_but1" onclick="obsudit_act('#obsudit_form1',1);">Отправить</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div style="width:990px;padding:30px 10px 0 10px;margin: 0 auto;">
      <h1 style="text-align: justify;">Продажа топлива оптом</h1>
      <table style="width: 100%;" border="0" cellpadding="10" cellspacing="10">
        <tbody>
          <tr>
            <td style="width: 45%;" valign="top">
              <p style="text-align: justify;">Светлые нефтепродукты – незаменимый ресурс современной экономики. Без дизтоплива, бензина, керосина остановилось бы транспортное сообщение как внутри страны, так и за ее пределами. Кроме того, отсутствие горюче-смазочных материалов делает невозможным функционирование любого производственного предприятия (металлургического, энергетического, машиностроительного и других).</p>
              <p style="text-align: justify;">&nbsp;</p>
              <p style="text-align: justify;">«НефтеПродуктТрейд» занимается продажей ГСМ оптом во всех регионах РФ. У нас вы можете <a title="дизельное топливо оптом" href="http://www.gsmoptom.ru/toplivo/dizelnoe-toplivo-optom/"><strong>купить оптом дизельное топливо</strong></a>, <a title="керосин оптом" href="http://www.gsmoptom.ru/toplivo/kerosin-optom/">керосин</a>, а также <a title="смт - судовое маловязкое топливо" href="http://www.gsmoptom.ru/toplivo/sudovoe-malovyazkoe-toplivo-optom/">судовое маловязкое топливо</a> отличного качества и по низким ценам.</p>
              <p style="text-align: justify;">&nbsp;</p>
              <p style="text-align: justify; padding: 10px; background: #dddddd; margin-left: 30px; font-style: italic; font-size: 18px;">Своим клиентам мы предлагаем выгодное партнерство, стабильные деловые отношения и достойный уровень обслуживания.</p>
            </td>
            <td style="width: 55%; padding-left: 30px;" valign="top">
              <h2 style="text-align: left;">Главные преимущества работы с «НефтеПродуктТрейд»:</h2>
              <p style="text-align: justify;">&nbsp;</p>
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
