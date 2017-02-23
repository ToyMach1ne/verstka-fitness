<?php /* Template Name: Программы/Продукты */ get_header(); ?>
<div class="nutrition-page">
  <div class="container nutrition-wrapp">
    <div class="row">
      <div class="col-md-12">
        <?php easy_breadcrumbs(); ?>
      </div>
    </div>
    <div class="row products-wrapper">
    <h1><?php the_title(); ?></h1>
          <div class="col-md-6">
            <div class="recent-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/img/box.jpg" alt="">
            </div>
            <a href="/product" class="recent-title">Каталог</a>
            <div class="recent-price">
            <a href="/product"><span class="cart-icon">Спортивное Питание</span></a>
            </div>
          </div><!-- col-md-3 -->
          <div class="col-md-6">
            <div class="recent-thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/img/box.jpg" alt="">
            </div>
            <a href="/trenirovochnye-programmy-2.htm" class="recent-title">Каталог</a>
            <div class="recent-price">
            <a href="/trenirovochnye-programmy-2.htm"><span class="cart-icon">Тренировочные Программы</span></a>
            </div>
          </div><!-- col-md-3 -->
    </div>
  </div>
</div>

<?php get_footer(); ?>
