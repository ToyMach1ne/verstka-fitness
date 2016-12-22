<?php get_header(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <div class="wrapper">
            <div class="row">
              <div class="col-md-12">
              <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
                <h1 class="single-title inner-title"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <?php endwhile; else: ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

    </article>
<?php get_footer(); ?>
