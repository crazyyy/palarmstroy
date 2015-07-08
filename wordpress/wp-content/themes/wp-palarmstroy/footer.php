<!-- /container -->
<footer class="footer">
  <div class="container">
    <div class="row-fluid">
      <div class="span2 ">
        <img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/img/qr-palarm.jpg">
      </div>
      <div class="span5">
        <p>© 2001-2014 ООО «ПАЛАРМ» - <a href="./home_files/home.html">аренда спецтехники</a>.</p>

        <p>Москва, Очаковское шоссе, 40, строение 5, офис 3</p>

        <p><b>Телефон: 8 (499) 647-87-87</b>
        </p>
        <div class="sitemap_bottom">
          <a href="http://palarmstroy.com/sitemap/"><img src="<?php echo get_template_directory_uri(); ?>/img/sitemap_palarrm.png" alt="Карта сайта" title="Карта сайта">Карта сайта</a>
        </div>
      </div>
      <div class="span5">
        <div class="pull-right">
          <noindex>
            <ul class="footer-links">
              <li> <a rel="nofollow" href="http://palarmstroy.com/contacts/">Контакты</a>
              </li>
              <li> <a rel="nofollow" href="http://palarmstroy.com/login/">Авторизация</a>
              </li>
            </ul>
          </noindex>
          <!--noindex-->
          <form class="form-horizontal" action="http://palarmstroy.com/search/">
            <div class="input-append controls-row">
              <input type="text" class="span11" name="q" id="appendedInputButton" placeholder="Поиск по сайту...">
              <button type="submit" name="s" id="search-submit-button" class="btn"><i class="icon-search"></i>
              </button>
            </div>
          </form>
          <!--/noindex-->

        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
  if (document.documentElement) {
    document.documentElement.id = "js"
  }
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blur.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


</body>

</html>

