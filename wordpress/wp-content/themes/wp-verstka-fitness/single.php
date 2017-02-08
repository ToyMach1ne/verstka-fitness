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
                    <div class="social-share">
                          <?php $text = '#Split$Fit'; // текст твита
                          $url = 'https://truemisha.ru/?p=1'; // ссылка на страницу ?>
                          <a href="http://twitter.com/share?text=<?php echo $text ?>&url=<?php echo urlencode( $url ) ?>" title="Поделиться ссылкой в Твиттере" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent">Твитнуть
                          <i class="x-icon-twitter-square" data-x-icon="&#xf081;" aria-hidden="true"></i></a>
                           <?php $text2 = '#Split$Fit'; // текст твита
                          $url = 'https://truemisha.ru/?p=1'; // ссылка на страницу ?>
                          <a href="http://facebook.com/share?text2=<?php echo $text2 ?>&url=<?php echo urlencode( $url ) ?>" title="Поделиться ссылкой в Facebbok" onclick="window.open(this.href, this.title, 'toolbar=0, status=0, width=548, height=325'); return false" target="_parent">Поделится
                          <i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <script type="text/javascript"><!--
            document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" width=\"32\" height=\"32\" />"}));
            --></script>
                  </div><!-- social-share -->
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
