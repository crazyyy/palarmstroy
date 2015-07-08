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
  <script type="text/javascript">
    if (!window.BX) window.BX = {
      message: function(mess) {
        if (typeof mess == 'object')
          for (var i in mess) BX.message[i] = mess[i];
        return true;
      }
    };
  </script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kernel_main.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/template_2d1eff7fb564d3eff202d4bfdf0f00d8.js"></script>
  <script type="text/javascript">
    bxSession.Expand(1440, '7a479b5c3d6b25714cc6005d1cd62a8c', false, '78a75a5b6f21cd92a88d974fb3bbcfef');
  </script>
  <!-- backcall -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.form.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/backformer.js"></script>
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



    <!-- Example row of columns -->
    <div class="row-fluid">
      <div class="span9" id="workarea">
        <section>
          <!-- Content -->
          <div id="pagetitle">
            <h1>Аренда спецтехники</h1>
          </div>

          <div>
            <div class="row-fluid">
              <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                <a href="http://palarmstroy.com/equipment/samosvaly/" rel="nofollow"><img alt="Аренда самосвала - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда самосвала" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/9aebb043a30016c37b6e691e31588ec7.jpg">
                                </a>
                <br>
                <a href="http://palarmstroy.com/equipment/samosvaly/">
                  <div class="h4">Аренда самосвала</div>
                </a>
              </div>
              <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                <a href="http://palarmstroy.com/equipment/avtokrany/" rel="nofollow"><img alt="Аренда автокрана - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда автокрана" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/b04eedbffa78209984f636f1083ee9c2.jpg">
                                </a>
                <br>
                <a href="http://palarmstroy.com/equipment/avtokrany/">
                  <div class="h4">Аренда автокрана</div>
                </a>
              </div>
              <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                <a href="http://palarmstroy.com/equipment/avtokompressory/" rel="nofollow"><img alt="Аренда компрессора - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда компрессора" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/0813276647d56e7586854a53ab428e5c.jpg">
                                </a>
                <br>
                <a href="http://palarmstroy.com/equipment/avtokompressory/">
                  <div class="h4">Аренда компрессора</div>
                </a>
              </div>
              <div class="row-fluid">
                <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                  <a href="http://palarmstroy.com/equipment/avtovyshki/" rel="nofollow"><img alt="Аренда автовышки - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда автовышки" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/516018a5ed76adab34f603b6cc4eaf06.jpg">
                                    </a>
                  <br>
                  <a href="http://palarmstroy.com/equipment/avtovyshki/">
                    <div class="h4">Аренда автовышки</div>
                  </a>
                </div>
                <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                  <a href="http://palarmstroy.com/equipment/mini-pogruzchiki/" rel="nofollow"><img alt="Аренда погрузчика - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда погрузчика" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/cd0410aba4ac73cc6a743142c106ae6f.jpg">
                                    </a>
                  <br>
                  <a href="http://palarmstroy.com/equipment/mini-pogruzchiki/">
                    <div class="h4">Аренда погрузчика</div>
                  </a>
                </div>
                <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                  <a href="http://palarmstroy.com/equipment/gruntovye-katki/" rel="nofollow"><img alt="Аренда катков - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда катков" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/17dc48a7736dc0d06de10e4732b88511.jpg">
                                    </a>
                  <br>
                  <a href="http://palarmstroy.com/equipment/gruntovye-katki/">
                    <div class="h4">Аренда катков</div>
                  </a>
                </div>
                <div class="row-fluid">
                  <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                    <a href="http://palarmstroy.com/equipment/buldozery/" rel="nofollow"><img alt="Аренда бульдозера - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда бульдозера" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/6e06628d9a8935db52afb19acd6d19b8.jpg">
                                        </a>
                    <br>
                    <a href="http://palarmstroy.com/equipment/buldozery/">
                      <div class="h4">Аренда бульдозера</div>
                    </a>
                  </div>
                  <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                    <a href="http://palarmstroy.com/equipment/kran-manipulyator/" rel="nofollow"><img alt="Аренда крана манипулятора - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда крана манипулятора" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/7a0ad06b819a5178cdf940db2f11a2d2.jpg">
                                        </a>
                    <br>
                    <a href="http://palarmstroy.com/equipment/kran-manipulyator/">
                      <div class="h4">Аренда крана манипулятора</div>
                    </a>
                  </div>
                  <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                    <a href="http://palarmstroy.com/equipment/avtogreyder/" rel="nofollow"><img alt="Аренда грейдера - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда грейдера" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/97c54baf8f941785ec44ee8235a98bd4.png">
                                        </a>
                    <br>
                    <a href="http://palarmstroy.com/equipment/avtogreyder/">
                      <div class="h4">Аренда грейдера</div>
                    </a>
                  </div>
                  <div class="row-fluid">
                    <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                      <a href="http://palarmstroy.com/equipment/polivomoechnye-mashiny/" rel="nofollow"><img alt="Аренда поливомоечных машин - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда поливомоечных машин" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/06dbc69ab65793099221ac360434b4d9.jpg">
                                            </a>
                      <br>
                      <a href="http://palarmstroy.com/equipment/polivomoechnye-mashiny/">
                        <div class="h4">Аренда поливомоечных машин</div>
                      </a>
                    </div>
                    <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                      <a href="http://palarmstroy.com/equipment/arenda-ekskavatora/" rel="nofollow"><img alt="Аренда экскаватора - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда экскаватора" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/49f15ad3f623f6bbfcb2a637a87e37ab.png">
                                            </a>
                      <br>
                      <a href="http://palarmstroy.com/equipment/arenda-ekskavatora/">
                        <div class="h4">Аренда экскаватора</div>
                      </a>
                    </div>
                    <div class="equipment-mini-card alert alert-success span4" style="text-align: center;">
                      <a href="http://palarmstroy.com/equipment/tehnika-jcb/" rel="nofollow"><img alt="Аренда техники JCB - аренда спецтехники в Москве" title="Аренда спецтехники по выгодной цене – аренда техники jcb" class="img-circle" src="<?php echo get_template_directory_uri(); ?>/img/ee5a20316a69f590cd5a9cc8374f9c05.jpg">
                                            </a>
                      <br>
                      <a href="http://palarmstroy.com/equipment/tehnika-jcb/">
                        <div class="h4">Аренда техники JCB</div>
                      </a>
                    </div>
                  </div>

                  <p>Если вас интересует аренда спецтехники на выгодных условиях, компания «ПАЛАРМ» готова предложить свои услуги. Аренда спецтехники в Москве и Московской области является одним из профилирующих направлений нашей деятельности. Мы постоянно обновляем автопарк спецтехники и поддерживаем ее в исправном состоянии. Мы предоставим вам опытных водителей, уровень профессионализма которых обеспечивает требуемое качество и минимальные сроки осуществления всех видов работ. Воспользоваться предлагаемой нами арендой спецтехники в Москве и Московской области может понадобиться для эффективного решения следующих типов задач:</p>

                  <ul>
                    <li>расчистка территорий и вывоз грузов,</li>
                    <li>погрузочно-разгрузочные работы,</li>
                    <li>дорожно-строительные работы,</li>
                    <li>транспортировка грузов,</li>
                    <li>устройство скважин и траншей,</li>
                    <li>разравнивание и перемещение грунта.</li>
                  </ul>

                  <p>Вы имеете возможность арендовать спецтехнику, использование которой поможет обеспечить эффективное и безопасное выполнение многих видов работ в сфере строительства и оперирования грузами. Также использование спецтехники всегда позволяет сократить сроки выполнения работ. Клиентам мы гарантируем высокое качество и надежность поставляемой техники, которую сдаем в аренду с ГСМ и без.</p>

                  <h2>Преимущества компании «ПАЛАРМ»</h2>

                  <p>Компанией «ПАЛАРМ» реализуется индивидуальный подход к обслуживанию клиентов, поэтому мы всегда сможем предложить вам выгодные условия для взаимодействия. У нас вы имеете возможность заказать аренду необходимой спецтехники и быть уверенными, что выбранная вами техника в кратчайшие сроки будет доставлена на объект.</p>

                  <p>Компания «ПАЛАРМ» – это приемлемые цены и гибкие условия сотрудничества. Для постоянных клиентов доставка спецтехники осуществляется бесплатно. При нерегулярной необходимости осуществления дорожно-строительных, погрузочно-разгрузочных и других видов работ, предполагающих использование спецтехники, нецелесообразно на балансе компании держать спецтранспорт. У нас вы сможете всегда арендовать необходимую спецтехнику недорого и избавите тем самым свою компанию от дополнительных расходов на ее приобретение и содержание.</p>

                  <p>Благодаря работе компании «ПАЛАРМ» вы получите возможность использовать для выполнения профессиональных задач лучшую современную спецтехнику при минимальных материальных затратах. Мы регулярно проводим акционные кампании, которые предоставляют нашим клиентам отличные скидки на аренду.</p>

                  <h2>Компания «ПАЛАРМ» – лучшая спецтехника</h2>

                  <p>При возникновении необходимости задействования спецтехники для выполнения каких-либо работ в профессиональной сфере не спешите приобретать ее самостоятельно. Рассмотрите наше выгодное предложение аренды и сравните его стоимость с возможными вашими расходами на приобретение, обслуживание и зарплату водителя. Аренда – это всегда выгодное решение, которое позволяет избежать больших материальных затрат. Мы подготовили для вас лучшую современную производительную спецтехнику, которая позволит вам при оптимальных материальных затратах эффективно решать профессиональные задачи.</p>



                  <table border="1">
                    <tbody>
                      <tr>
                        <td>
                          <p align="center"><b><i>Вид техники</i></b>
                          </p>
                        </td>
                        <td>
                          <p align="center"><b><i>"Минималка"</i></b>
                          </p>
                        </td>
                        <td>
                          <p align="center"><b><i>Цена руб./час с НДС</i></b>
                          </p>
                        </td>
                        <td>
                          <p align="center"><b><i>Цена смены (руб. с НДС)</i></b>
                          </p>
                        </td>
                        <td>
                          <p align="center"><b><i>Количество ед. техники в наличии</i></b>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/ekskavatory-pogruzchiki/">Экскаватор-погрузчик</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">1 250,00</p>
                        </td>
                        <td>
                          <p align="center">10 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">30 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b>Экскаватор-погрузчик с г/м</b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">1 375,00</p>
                        </td>
                        <td>
                          <p align="center">11 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">20 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/mini-pogruzchiki/JSB-175/">Мини погрузчик JCB 175</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">875,00</p>
                        </td>
                        <td>
                          <p align="center">7 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">6 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b>Мини погрузчик JCB 175 с дополнительным оборудованием</b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">1 000,00</p>
                        </td>
                        <td>
                          <p align="center">8 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">6 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/mini-ekskavatory/gusenechniy-mini-ekskavator/">Мини экскаватор гусеничный, ковш 0,28м3</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">1 125,00</p>
                        </td>
                        <td>
                          <p align="center">9 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">3 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/kolesnye-ekskavatory/Hyundai-R210W/">Экскаватор пневмоколесный, ковш 0,8-1,05м3</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">1 750,00/1 875,00</p>
                        </td>
                        <td>
                          <p align="center">14 000/15000 руб.</p>
                        </td>
                        <td>
                          <p align="center">8 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/kolesnye-ekskavatory/JCB-JS-160/">Экскаватор пневмоколесный, ковш 0,8-1м3 с г/м</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">1875,00/2 000,00</p>
                        </td>
                        <td>
                          <p align="center">15000/16 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">5 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/gusenichnye-ekskavatory/CASE-CX210B/">Экскаватор гусеничный, ковш 1- 1,5м3</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">1 750,00</p>
                        </td>
                        <td>
                          <p align="center">14 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">15 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/gusenichnye-ekskavatory/Hyundai-R300LC/">Экскаватор гусеничный, ковш 1-1,6м3 с г/м</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">2 000,00</p>
                        </td>
                        <td>
                          <p align="center">16 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">9 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/gusenichnye-ekskavatory/CASE-CX290B/">Экскаватор гусеничный, ковш 1,5 – 1,8м3</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">2 000,00</p>
                        </td>
                        <td>
                          <p align="center">16 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">7 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b>Экскаватор гусеничный, ковш 1,5-2,0м3 с г/м</b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">2 250,00</p>
                        </td>
                        <td>
                          <p align="center">18 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">5 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/samosvaly/">Самосвалы 10-20м3</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">850,00/1 500,00</p>
                        </td>
                        <td>
                          <p align="center">6 800/12 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">25 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/avtokrany/avtokran-14/">Автокран 14 т</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">1 125,00</p>
                        </td>
                        <td>
                          <p align="center">9 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">15 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/avtokrany/avtokran-16/">Автокран 16 т</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">1 375,00</p>
                        </td>
                        <td>
                          <p align="center">11 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">5 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b>Автокран 25 т</b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">1 625,00</p>
                        </td>
                        <td>
                          <p align="center">13 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">7 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/avtokompressory/">Компрессоры</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">650,00</p>
                        </td>
                        <td>
                          <p align="center">5 200 руб.</p>
                        </td>
                        <td>
                          <p align="center">10 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/avtovyshki/">Автовышка 18-28м</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">850,00/1 500,00</p>
                        </td>
                        <td>
                          <p align="center">6 800/12 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">7 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/kran-manipulyator/kamaz-53228-53215/">Манипулятор грузоподъемность 6т</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">7+1</p>
                        </td>
                        <td>
                          <p align="center">1 500,00</p>
                        </td>
                        <td>
                          <p align="center">12 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">5 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/buldozery/JOHN-DEERE-850J/">Бульдозер 21 т</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">2 125,00</p>
                        </td>
                        <td>
                          <p align="center">17 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">2 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/avtogreyder/JOHN-DEERE-672G/">Грейдер 17 т</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">2 125,00</p>
                        </td>
                        <td>
                          <p align="center">17 000 руб.</p>
                        </td>
                        <td>
                          <p align="center">2 ед.</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <p><b><a href="http://palarmstroy.com/equipment/gruntovye-katki/Ammann-ASC-150-D/">Грунтовый каток 14 т + кулачковый бандаж</a></b>
                          </p>
                        </td>
                        <td>
                          <p align="center">8</p>
                        </td>
                        <td>
                          <p align="center">1 625,00</p>
                        </td>
                        <td>
                          <p align="center">13 000</p>
                        </td>
                        <td>
                          <p align="center">4 ед.</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <p></p>

                  <p>* Минимальное время заказа по Москве 7 часов + 1 час подачи.
                    <br>* За каждый переезд автокрана и экскаватора-погрузчика с объекта на объект к рабочему времени прибавляется дополнительный час подачи.
                    <br>* Тарифы согласовываются по индивидуальным условиям клиента.</p>



                  <!--<h3> Наши услуги</h3>-->


                  <!-- // content column -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <noindex>
        <div class="span3 bs-docs-sidenav">
          <div class="h3"><i class="icon-star-empty"></i> Спецпредложения</div>

          <div class="row-fluid">
            <div class="span12 well equipment-list-card">
              <a href="http://palarmstroy.com/equipment/ekskavatory-pogruzchiki/JCB-3CX/"><img border="0" itemprop="image" src="<?php echo get_template_directory_uri(); ?>/img/097d717c67bc2e9e2650b02283dd8ef0.jpg" width="175" height="136" alt="Аренда экскаватора-погрузчика JCB 3cx" title="Аренда экскаватора-погрузчика JCB 3cx" id="catalog_list_image_34">
                            </a>

              <div class="item-info">
                <div class="h4 item-title"> <a href="http://palarmstroy.com/equipment/ekskavatory-pogruzchiki/JCB-3CX/"><span itemprop="name">Аренда экскаватора-погрузчика JCB 3cx</span></a>
                </div>

                <div class="specoffer-price">Цена за смену: <span class="label label-warning" style="text-decoration: line-through;">10 500 руб.</span>
                </div>
                <div class="specoffer-price">Цена по акции: <span class="label label-success">9 000 руб.</span>
                </div>
                <span class="item-desc-overlay"></span>

              </div>
            </div>

          </div>


          <div class="row-fluid">
            <div class="span12 well equipment-list-card">
              <a href="http://palarmstroy.com/equipment/gruntovye-katki/Ammann-ASC-150-D/"><img border="0" itemprop="image" src="<?php echo get_template_directory_uri(); ?>/img/d764098c7017b2cb5b3fc267ca44c16e.png" width="175" height="131" alt="Аренда грунтового вибрационного катка Ammann ASC 150 D" title="Аренда грунтового вибрационного катка Ammann ASC 150 D" id="catalog_list_image_57">
                            </a>

              <div class="item-info">
                <div class="h4 item-title"> <a href="http://palarmstroy.com/equipment/gruntovye-katki/Ammann-ASC-150-D/"><span itemprop="name">Аренда грунтового вибрационного катка Ammann ASC 150 D</span></a>
                </div>

                <div class="specoffer-price">Цена за смену: <span class="label label-warning" style="text-decoration: line-through;">15 000 руб.</span>
                </div>
                <div class="specoffer-price">Цена по акции: <span class="label label-success">12 500 руб.</span>
                </div>
                <span class="item-desc-overlay"></span>

              </div>
            </div>

          </div>


        </div>
      </noindex>
    </div>
  </div>

  <?php get_footer(); ?>
