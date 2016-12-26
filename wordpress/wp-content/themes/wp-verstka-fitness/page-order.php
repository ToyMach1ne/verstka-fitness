<?php /* Template Name: Запись в Виннице */ get_header(); ?>
  <article class="page-order-wrapp">

    <div class="container">
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-md-12">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
           <?php the_content(); ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </div><!-- col-md-12 -->
      </div>

    </div><!-- container -->
    <div class="contact-form-block">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="inner-form">
            <form action="#">
            <h6>Оформить заявку</h6>
              <input type="text" placeholder="Имя" class="first-contact-form-input">
              <input type="text" placeholder="Телефон" class="second-contact-form-input">
              <input type="text" placeholder="Почта" class="third-contact-form-input">
              <textarea cols="30" rows="10" placeholder="Ваше сообшение" class="contact-message"></textarea>
              <button class="victoria-four">Записатся</button>
            </form>
          </div>
          </div><!-- col-md-12 -->
        </div><!-- row -->
      </div>
    </div>


  </article><!-- page-order-wrapp -->

<?php get_footer(); ?>
