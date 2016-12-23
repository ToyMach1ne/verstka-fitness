  <footer role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-md-1 first-footer">
        <nav class="footnav">
         <?php wpeFootNav(); ?>
        </nav>
      </div>
      <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/jenya.jpg" alt="">
          <p>Евгений Корчун</p>
        </div>
        </div>
        <div class="col-md-6">
          <div class="footer-photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/woman.jpg" alt="">
          <p>Юлия Рогозина</p>
        </div>
        </div>
      </div>
      </div>

      <div class="col-md-5 third-footer">
        <form action="#">
          <h5>Обратный звонок</h5>
          <input type="text" placeholder="Имя" class="first-footer-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Имя'">
          <input type="text" placeholder="Телефон" class="second-footer-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Телефон'">
          <input type="text" placeholder="Почта" class="third-footer-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Почта'">
          <button>Перезвонить</button>
        </form>
      </div>
    <a href="#" class="scrollToTop"></a>
    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->
<?php wp_footer(); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.all.min.js"></script>

</body>
</html>


<!-- <button class="footer-btn">Заказать обратный звонок</button>
        <div class="footer-form">
        <?php echo do_shortcode('[contact-form-7 id="127" title="footer form"]'); ?>
      </div>footer-form -->

<!-- <div class="col-md-3 second-footer">
        <p>E-mail: <?php the_field('footer_phone', 31); ?></p>
        <p>Телефон: <?php the_field('footer_email', 31); ?></p>
      </div> -->
