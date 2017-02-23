  <footer class="x-colophon top first-footer" role="contentinfo">
      <div class="x-container max width">
        <div class="x-column x-md x-1-3">
          <div id="testimonials_widget-2">
            <h4 class="h-widget">Обратная связь</h4>
            <div>
              <div class="third-footer">
              <?php echo do_shortcode('[contact-form-7 id="310" title="footer form"]'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="x-column x-md x-1-3">
          <div id="googlemapswidget-3" class="widget google-maps-widget">
            <h4 class="h-widget">Посетите наши тренировки</h4>
            <p>
              <a href="https://www.google.com.ua/maps/place/%D0%A5%D0%BC%D0%B5%D0%BB%D1%8C%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B5+%D1%88%D0%BE%D1%81%D0%B5,+112,+%D0%92%D1%96%D0%BD%D0%BD%D0%B8%D1%86%D1%8F,+%D0%92%D1%96%D0%BD%D0%BD%D0%B8%D1%86%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C/@49.2393668,28.4081611,17z/data=!4m5!3m4!1s0x472d5cf7fc9dc81d:0xfbca4118d08e5326!8m2!3d49.2393808!4d28.4094378?hl=ru"
              title="Click to open larger map" target="_blank">
                <img alt="Click to open larger map" title="Click to open larger map" src="<?php echo get_template_directory_uri(); ?>/img/staticmap.png">
              </a>
            </p>
          </div>
        </div>
        <div class="x-column x-md x-1-3 last">
          <div id="text-17" class="widget widget_text">
            <div class="textwidget">
              <a class="white-link" href="/blog"><i class="x-icon x-icon-users" data-x-icon="&#xf0c0;" aria-hidden="true"></i> Блог</a>
              <a class="white-link" href="/kontakty.htm"><i class="x-icon x-icon-columns" data-x-icon="&#xf0db;" aria-hidden="true"></i> Контакты</a>
            </div>
          </div>
          <nav class="footnav">
            <?php wpeFootNav(); ?>
          </nav>
          <script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>
            <div class="social-share">
                <h6>Поделится:</h6>
              <?php $text = '#Split$Fit'; // текст твита
              $url = 'https://truemisha.ru/?p=1'; // ссылка на страницу ?>
              <a href="http://twitter.com/share?text=<?php echo $text ?>&url=<?php echo urlencode( $url ) ?>" title="Поделиться ссылкой в Твиттере" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent">
              <i class="x-icon-twitter-square" data-x-icon="&#xf081;" aria-hidden="true"></i></a>
               <?php $text2 = '#Split$Fit'; // текст твита
              $url = 'https://truemisha.ru/?p=1'; // ссылка на страницу ?>
              <a href="http://facebook.com/share?text2=<?php echo $text2 ?>&url=<?php echo urlencode( $url ) ?>" title="Поделиться ссылкой в Facebbok" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent">
              <i class="fa fa-facebook" aria-hidden="true"></i></a>
              <script type="text/javascript"><!--
document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" width=\"32\" height=\"32\" />"}));
--></script>
            </div><!-- social-share -->
        </div>
      </div>
    </footer>
    <footer class="x-colophon bottom second-footer" role="contentinfo">
      <div class="x-container max width">
        <div class="x-social-global">

          <a href="https://twitter.com/eugene_korchun?s=09" class="twitter" title="Евгений Корчун"
          target="_blank"><i class="x-icon-twitter-square" data-x-icon="&#xf081;" aria-hidden="true"></i></a>
          <a href="https://vk.com/split4fit" class="linkedin"
          title="Vkontakte" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a href="https://instagram.com/split4fit" class="instagram"
          title="Instagram" target="_blank"><i class="x-icon-instagram" data-x-icon="&#xf16d;" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com/split4fit" class="facebook"
          title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
        <div class="x-colophon-content">
          <p>Евгений Корчун и Юлия Рогозина. Фитнесс тренировки. Онлайн фитнесс тренировки. Винница, Украина </p>
          <img class="payments" src="<?php echo get_template_directory_uri(); ?>/img/payment.jpg">
        </div>
      </div>
    </footer>
  </div>
  <!-- END #top.site -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_1.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_6.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_2.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_7.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_8.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_9.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_10.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_11.js"></script>
    <noscript>
      <img height="1" width="1" style="display:none" src="<?php echo get_template_directory_uri(); ?>/img/tr">
    </noscript>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_12.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/css/getTrackingCode"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inline_13.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_4.js"></script> -->





<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.all.min.js"></script>
  <div class="gmw-dialog" style="display: none;" data-map-height="550"
  data-map-width="550" data-map-skin="light" data-map-iframe-url="//maps.google.com/maps?hl=en&amp;ie=utf8&amp;output=embed&amp;iwloc=addr&amp;iwd=1&amp;mrt=loc&amp;t=m&amp;q=Pinewood+Studios%2C+Pinewood+Road%2C+Iver+Heath%2C+Buckinghamshire+SL0+0NH%2C+United+Kingdom&amp;z=14"
  id="gmw-dialog-googlemapswidget-3" title="Visit me at Pinewood film studios">
    <div class="gmw-map"></div>
  </div>
  <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_5.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inline_14.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_20.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/inline_21.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inline_15.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inline_16.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inline_17.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inline_18.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inline_19.js"></script> -->

   <?php wp_footer(); ?>
   <a href="#" class="scrollToTop"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_up.png" alt=""></a>
</body>

</html>

