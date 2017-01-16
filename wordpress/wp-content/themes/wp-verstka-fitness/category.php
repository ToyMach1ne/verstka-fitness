<?php get_header(); ?>
<div class="blog-posts">
<div class="container">
  <div class="row">
    <div class="post-wrapper">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail()) :?>
                        <?php the_post_thumbnail('blog'); ?>
                      <?php endif; ?><!-- /post thumbnail -->
                    </a>
            <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p><?php wpeExcerpt('wpeExcerpt40'); ?>
              <a href="<?php the_permalink(); ?>" class="more-link">Read more ><span class="glyphicon glyphicon-chevron-right"></span></a>
            </p>
            <ul class="post-meta">
                <li>
                    <time datetime="2017-01-13T10:01:18+00:00"><?php the_time('j F Y'); ?></time>
                </li>
                <li>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read This Post</a>
                </li>
            </ul>
        </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>

    </div>
  </div>
</div>


</div>
  <?php get_footer(); ?>

