<?php /* Template Name: Спортпит */ get_header(); ?>
<div class="nutrition-page">
  <div class="container nutrition-wrapp">
    <div class="row">
      <div class="col-md-12">
        <?php easy_breadcrumbs(); ?>
      </div>
    </div>
    <div class="row products-wrapper">
    <h1><?php the_title(); ?></h1>
      <?php query_posts(array( 'post_type' => 'product','showposts' => 12, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
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
            <a href="<?php the_permalink(); ?>"><span class="cart-icon"><?php the_field('price'); ?><span> руб</span></span></a>
            </div>
          </div><!-- col-md-3 -->
            <?php endwhile;?>
            <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
