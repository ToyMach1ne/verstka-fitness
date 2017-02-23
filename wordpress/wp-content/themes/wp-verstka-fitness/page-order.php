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
            <?php echo do_shortcode('[contact-form-7 id="217" title="inner page form"]'); ?>
          </div>
          </div><!-- col-md-12 -->
        </div><!-- row -->
      </div>
    </div>


  </article><!-- page-order-wrapp -->

<?php get_footer(); ?>
