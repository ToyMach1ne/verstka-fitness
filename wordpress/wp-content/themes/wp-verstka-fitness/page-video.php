<?php /* Template Name: Видео */ get_header(); ?>
<div class="blog-posts">
<div class="container">
  <div class="row">
    <div class="post-wrapper">

    <?php if( have_rows('video') ): while ( have_rows('video') ) : the_row();?>
        <div class="post-preview">
          <div class="post-thumbnail">
            <?php the_sub_field('video-item'); ?>
          </div>
            <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p><?php wpeExcerpt('wpeExcerpt40'); ?>
              <a href="<?php the_permalink(); ?>" class="more-link">Read more<span class="glyphicon glyphicon-chevron-right"></span></a>
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

    </div>
    <?php get_template_part('pagination'); ?>
    <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
      <input class="search-input" type="search" name="s" placeholder="To search, type and hit enter.">
      <button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'wpeasy' ); ?></button>
    </form><!-- /search -->
  </div>
</div>


</div>
<?php get_footer(); ?>
