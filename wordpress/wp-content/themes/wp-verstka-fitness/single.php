<?php get_header(); ?>
   <div class="x-container max width offset">
    <div class="x-main left" role="main">
        <article id="post-10145" class="post-10145 post type-post status-publish format-standard has-post-thumbnail hentry category-mind">
            <div class="entry-wrap">
                <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
                <div class="entry-content content">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                      <p><?php the_content(); ?></p>
                    <?php endwhile; endif; ?>
                    <div class="yarpp-related">
                        <h3>Популярные Новости:</h3>
                        <div class="yarpp-thumbnails-horizontal">
                        <?php query_posts("showposts=4&cat=12"); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <a class="yarpp-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php if ( has_post_thumbnail()) :?>
                                  <?php the_post_thumbnail('blog'); ?>
                                <?php endif; ?><!-- /post thumbnail -->
                                <span class="yarpp-thumbnail-title"><?php the_title(); ?></span>
                            </a>
                            <?php endwhile; endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
<!-- <?php get_sidebar(); ?> -->
</div>

<?php get_footer(); ?>
