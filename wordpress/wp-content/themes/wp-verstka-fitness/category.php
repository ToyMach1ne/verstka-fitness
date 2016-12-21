<?php get_header(); ?>
<section role="main" class="category-content">
<div class="container">
  <div class="row">
    <h1>Блог</h1>
    <?php query_posts("showposts=6&cat=9"); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4">
      <div class="post-block-img">
        <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail()) :?>
                   <?php the_post_thumbnail('blog'); ?>
                  <?php endif; ?><!-- /post thumbnail -->
         </a>
        <div class="text-container">
          <h6><?php the_title(); ?></h6>
          <a href="<?php the_permalink(); ?>">read more</a>
        </div>
      </div>
      <div class="post-title">
        <h5><?php the_title(); ?></h5>
        <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
      </div>
    </div>
     <?php endwhile; endif; ?>
     <?php wp_reset_query(); ?>
  </div><!-- row -->
</div>
</section><!-- category-content -->
  </div><!-- wrapper -->
  <?php get_footer(); ?>

