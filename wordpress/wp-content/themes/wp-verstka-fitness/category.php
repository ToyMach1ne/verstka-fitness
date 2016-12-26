<?php get_header(); ?>
<section role="main" class="category-content">
<div class="container">
  <div class="row">
    <h1>Блог</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4">
      <div class="post-block-img">
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('blog');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->
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
  </div><!-- row -->
  <?php get_template_part('pagination'); ?>
</div>
</section><!-- category-content -->
  </div><!-- wrapper -->
  <?php get_footer(); ?>

