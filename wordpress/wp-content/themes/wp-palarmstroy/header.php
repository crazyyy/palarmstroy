<!doctype html>
<html <?php language_attributes(); ?>class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    <?php wp_title( '' ); ?>
    <?php if ( wp_title( '', false ) ) { echo ' :'; } ?>
    <?php bloginfo( 'name' ); ?>
  </title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch">
  <!-- dns prefetch -->


  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
  <![endif]-->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>

<body <?php body_class( 'template_main'); ?>>
  <div id="masthead-wrapper">
    <div class="container">
      <div class="row-fluid">
        <div class="span3">

          <div class="logo_link">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_front_page() && is_home() ){ } else { ?>
            </a>
            <?php } ?>
          </div>
          <!-- /logo -->

        </div>
        <div class="span3">
          <p class="motto">Аренда спецтехники
            <br>в Москве и Московской области</p>
        </div>
        <div class="span2">
          <a href="http://palarmstroy.com/#" class="top-write-us pull-right"><i class="icon-envelope"></i> Написать нам</a>
          <!-- backcall -->
          <a href="http://palarmstroy.com/#demo" class="backcall">Заказать звонок</a>
        </div>

        <div class="span4 phones">
          <div class="top-24 pull-right"></div>
          <div class="top-phone pull-right"><i class="icon-phone"></i> 8 (499) 647-87-87</div>
          <div class="top-phone pull-right"><i class="icon-phone"></i> 8 (499) 340-46-59</div>

        </div>
      </div>
      <div class="masthead">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="nav-collapse collapse">
                <?php wpeHeadNav(); ?>
                <div class="menu-clear-left"></div>
              </div>
              <!-- nav-collapse -->
            </div>
          </div>
        </div>
        <!-- /.navbar -->
      </div>


      <div class="jumbotron">
        <div class="glass">
          <div class="h1"><i class="icon-road"></i> Аренда спецтехники</div>
          <p class="lead">
            <!--i class="icon-check"></i-->- предоставление техники в течение 24 часов
            <br>
            <!--i class="icon-check"></i-->- доставка до объекта на нашем транспорте
            <br>
            <!--i class="icon-check"></i-->- постоянным клиентам скидки
            <br>
          </p>
          <a class="btn btn-large btn-success" href="http://palarmstroy.com/contacts/">Оставить заявку</a>
        </div>
      </div>
      <!-- Jumbotron -->
    </div>
  </div>
  <div class="container">

    <!-- ./header -->
