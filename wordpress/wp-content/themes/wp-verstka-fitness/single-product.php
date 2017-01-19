<?php get_header(); ?>
<article class="product-page">
  <div class="container page-wrapp">
    <div class="row">
      <div class="col-md-12">
        <?php easy_breadcrumbs(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 product-wrapp">
        <h1><?php the_title(); ?></h1>
        <div class="thumbnail-block col-md-2">
          <?php if ( has_post_thumbnail()) :?>
            <?php the_post_thumbnail('small'); ?>
           <?php endif; ?><!-- /post thumbnail -->
        </div>
        <div class="big-thumbnail-block col-md-10">
          <?php if ( has_post_thumbnail()) :?>
            <?php the_post_thumbnail('product'); ?>
           <?php endif; ?><!-- /post thumbnail -->
        </div>
        <div class="row">
          <div class="col-md-12">
          <div id="tabs">
            <ul class="tabs">
              <li id="tab_1" class="tab-item fist-tab">Описание</li>
              <li id="tab_2" class="tab-item">Другая фасовка</li>
              <li id="tab_3" class="tab-item">Оплата</li>
              <li id="tab_4" class="tab-item">Доставка</li>
              <li id="tab_5" class="tab-item">Отзывы</li>
            </ul>
            <div class="tabs-content">
              <div class="single-tab-content">
                Prime Nutrition PWO/STIM именно то, что вы так долго искали. Он имеет все природные аминокислоты, в которых ваше тело нуждается. Он специально создан для быстрого прилива энергии и силы ещё до начала тренировки, а потом для дополнительного толчка с «выстрелом» кофеина и буферизации молочной кислоты дозой бета аланина, гарантируя, что вы можете тренироваться тяжелее и дольше, чем когда-либо прежде.
                В отличие от некоторых предтреников, доступных на рынке, PWO/STIM от PrimeNutrition не оставит вас нервным и раздражённым, а даст вам спокойствие и отдых в дни, когда вы не тренируетесь. Мы уже говорили, что этот продукт имеет прекрасный вкус? Мы знаем, как важен вкус продукта, ведь он должен быть не только эффективным, но и приятным для питья.
              </div>
              <div class="single-tab-content">

              </div>
              <div class="single-tab-content">
                Извините, у этого товара отсутствует описание применения. Вы можете уточнить как лучше использовать этот товар у менеджера магазина.
              </div>
              <div class="single-tab-content">
                Извините, у этого товара отсутствует описание доставки. Условия доставки уточните у менеджера магазина.
              </div>
              <div class="single-tab-content">Отзывы</div>
            </div>
            </div><!-- tabs -->
          </div>
        </div>
      </div><!-- product-wrapp -->

      <div class="col-md-4 product-info">
        <h6>Артикул: NM103389</h6>
        <div class="info-wrapepr">
          <div class="product-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pr-logo.jpg" alt="">
          </div>
          <div class="product-description">
            <div class="mass">
              <p class="tara">УПАКОВКА</p>
              <p class="pr-price">96 гр</p>
            </div>
            <div class="price">
              <p class="first-tag">ЦЕНА ЗА ШТ.</p>
              <p class="second-tag">2 490 руб.</p>
            </div>
            <div class="purchase">
              <a href="#">Купить сразу</a>
            </div>
            <div class="put-to-cart">
            <a href="#">
              <p>положить в корзину</p>
              <span class="cart-icon"></span>
            </a>
            </div>
          </div>
        </div><!-- info-wrapepr -->
      </div><!-- product-info -->
    </div><!-- row -->
    <div class="row shadow-top">
      <div class="col-md-12">
        <div class="recent-product">
          <h5>Похожие товары</h5>
            <?php query_posts(array( 'post_type' => 'product','showposts' => 4, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
             <?php while (have_posts()) : the_post(); ?>
          <div class="col-md-3">
            <div class="recent-thumb">
              <?php if ( has_post_thumbnail()) :?>
                  <?php the_post_thumbnail('small'); ?>
               <?php endif; ?><!-- /post thumbnail -->
            </div>
            <a href="<?php the_permalink(); ?>" class="recent-title"><?php the_title(); ?></a>
            <p class="packaging"><?php the_field('package'); ?>гр</p>
            <div class="recent-price">
            <a href="<?php the_permalink(); ?>"><span class="cart-icon"><?php the_field('price'); ?><span>руб</span></span></a>
            </div>
          </div><!-- col-md-3 -->
            <?php endwhile;?>
            <?php wp_reset_query(); ?>
        </div>
      </div>
    </div><!-- shadow-top -->
    <div class="row subscribe-wrapper">
      <div class="col-md-12">
        <div class="subscribe-block">
          <p>Подписаться на акции и скидки</p>
          <form action="#">
            <input type="text" placeholder="Ваш электронный адрес">
            <button>Ok</button>
          </form>
        </div>
        <div class="text-underfooter">
      <p><span>Спортивное питание в Москве с доставкой на дом </span>Заказать спортивное питание в NitroMass – просто и удобно! Позвоните нам по телефону 8 (495) 222-6-22-7 или оставьте заявку на обратный звонок на нашем сайте, и наши операторы свяжутся с Вами. Если Вы живете в Москве или области и хотите купить спортивное питание высокого качества по доступной цене, обращайтесь в наш магазин – мы осуществляем доставку на дом ежедневно с 9 до 18 часов</p>
    </div>
    <div class="author-rights">
      <p><span>© 2012-2015 Nitromass.</span> Магазин спортивного питания в Москве.</p>
      <ul class="social-footer-product">
        <li><a href="https://vk.com/id18209380"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
        <li><a href="https://www.facebook.com/groups/478491599012984/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/eugene_korchun?s=09"><i class="x-icon-twitter-square" data-x-icon="&#xf081;" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/eugene.korchun/"><i class="x-icon-instagram" data-x-icon="&#xf16d;" aria-hidden="true"></i></a></li>
      </ul>
    </div>
      </div>
    </div><!-- subscribe-wrapper -->

  </div><!-- page-wrapp -->
</article>

<?php get_footer(); ?>
