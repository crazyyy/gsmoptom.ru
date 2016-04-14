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
          <span class="modal-close"></span>
          <div class="data">
            <div id="dialogclass">
              <div class="h6">
                У ВАС ЕСТЬ ВОПРОСЫ?
              </div>
              <div class="h5">
                Заполните форму и ответим на Ваш вопрос в течении трех часов
              </div>
              <div style="text-align:center;">
                <?php echo do_shortcode('[contact-form-7 id="109" title="ModalForm"]'); ?>
              </div>
            </div><!-- #dialogclass -->
          </div><!-- data -->
        </div><!-- bg -->
      </div><!-- label -->
    </div><!-- dialog_3 -->
  </div><!-- dialog_bg -->

</body>
</html>
<br>
