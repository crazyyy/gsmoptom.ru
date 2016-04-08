<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=1100">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="x-rim-auto-match" content="none">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>


  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_easing.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_color_animations.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/index-js.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_005.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_002.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_006.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_prettyPhoto.js" ></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox-2.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_007.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_004.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_003.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script_008.js"></script>

  <script>
    var SITE_URLSEND = '<?php echo home_url(); ?>';
  </script>

</head>

<body>

  <div style="min-height:100%;background:#f2f3f3 url(<?php echo get_template_directory_uri(); ?>/img/f_top.jpg) top center;">

    <div id="wrap_header">

      <div id="bl_header">
        <div id="line1"><img src="<?php echo get_template_directory_uri(); ?>/img/line1.gif" border="0"></div>
        <div id="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" border="0">
          </a>
        </div>
        <div id="pod_logo">Продажа светолого топлива оптом с доставкой по России.</div>
        <div id="button_dostavka"><a href="#">Рассчитать доставку ГСМ</a></div>
        <div id="phone">
          <div class="nocode_header_phone">
            <span>
              +7 (8552) 91-01-05
            </span>
            </div>
        </div>
        <div id="email">
          <div style="text-align: center;">
            <a href="mailto:nail@gsmoptom.ru" class="obsudit_but1">nail@gsmoptom.ru</a>
          </div>
        </div>
      </div><!-- bl_header -->

      <div id="wrap_menu">
        <div id="menu1">
        <?php wpeHeadNav(); ?>
        </div>
      </div>
    </div><!-- wrap_header -->
