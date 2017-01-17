<?php /* Template Name: Программы */ get_header(); ?>
<div class="x-main full" role="main">
    <article id="post-4786" class="post-4786 page type-page status-publish hentry no-post-thumbnail">
        <div class="entry-content content">

                    <?php query_posts(array( 'post_type' => 'product','showposts' => 5, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
                    <?php while (have_posts()) : the_post(); ?>
            <div id="x-section-1 first-section" class="x-section">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline ebook-header h2"><span><?php the_title(); ?></span></h2></div>
                </div>
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-3 thumb-post-img">
                        <?php if ( has_post_thumbnail()) :?>
                        <?php the_post_thumbnail('product'); ?>
                      <?php endif; ?><!-- /post thumbnail -->
                        <a class="x-btn purchase-button blue x-btn-transparent x-btn-square x-btn-large x-btn-block" href="<?php the_permalink(); ?>" data-options="thumbnail: ''">
                            <i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Buy now for <?php the_field('price'); ?>
                        </a>
                        </div>
                    <div class="x-column x-sm x-2-3">
                        <h3 class="h-custom-headline h3" style="margin-top:30px;">
                            <span><?php the_field('title-1'); ?></span>
                        </h3>
                        <div class="x-text" style="font-size:16px;">
                            <p><?php wpeExcerpt('wpeExcerpt40'); ?></p>
                        </div>
                        <h3 class="h-custom-headline h4"><span><?php the_field('adv_post_title'); ?></span></h3>
                        <ul class="x-ul-icons">
                        <?php if( have_rows('adv_post_numbers') ): while ( have_rows('adv_post_numbers') ) : the_row(); ?>
                            <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i><?php the_sub_field('adv_post_value'); ?></li>
                           <?php endwhile; endif; ?>
                        </ul>
                        <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="<?php the_permalink(); ?>" data-options="thumbnail: ''">
                        <i class="x-icon x-icon-book" data-x-icon="" aria-hidden="true"></i>Read more</a>
                    </div><!-- x-column -->
                </div>
            </div><!-- x-section-1 -->
            <?php endwhile;?>
        </div>
    </article>
</div>

<?php get_footer(); ?>
