  <footer role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-md-1 first-footer">
        <nav class="footnav">
         <?php wpeFootNav(); ?>
        </nav>
      </div>
      <div class="col-md-5">
        <div class="footer-photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/man.jpg" alt="">
          <p>Евгений Корчун</p>
        </div>
        <div class="footer-photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/woman.jpg" alt="">
          <p>Юлия Рогозина</p>
        </div>
      </div>
      <div class="col-md-3 second-footer">
        <p>E-mail: <?php the_field('footer_phone', 31); ?></p>
        <p>Телефон: <?php the_field('footer_email', 31); ?></p>
      </div>
      <div class="col-md-3 third-footer">
        <button class="footer-btn">Заказать обратный звонок</button>
        <div class="footer-form">
        <form action="#">
          <h5>Заявка на обратный звонок</h5>
          <a href="#" class="close">X</a>
            <p>Имя</p>
          <input type="text">
            <p>Электронная почта *</p>
          <input type="text">
          <button>Отправить заявку!</button>
        </form>
      </div><!-- footer-form -->
      </div>

    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->
<?php wp_footer(); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.all.min.js"></script>

</body>
</html>

