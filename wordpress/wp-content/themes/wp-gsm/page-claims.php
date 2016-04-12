<?php /* Template Name: Claims Page  */ get_header(); ?>

  <div class="saitobaza_mt30">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    <h1>Претензии</h1>
    <div style="padding-top:30px;">
      <div class="osntext clearfix">
        <div class="saitobaza_claims">
          <p>Уважаемые клиенты, партнёры!</p>
          <p>Вы можете обратиться в отдел качества и написать нам то, что Вас не устраивает в нашей с Вами работе.</p>
          <p>Если есть претензии по качеству обслуживания, то напишите нам.</p>
          <p><button class="obsudit_but1" onclick="obsuditduo_act('',1);">Оставить претензию</button></p>
        </div><!-- saitobaza_claims -->
      </div><!-- osntext -->
    </div>
  </div>

<?php get_footer(); ?>
