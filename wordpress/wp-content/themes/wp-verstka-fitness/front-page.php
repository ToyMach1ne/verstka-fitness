<?php /* Template Name: Home */ get_header(); ?>
    <div class="x-main full" role="main">
      <article id="post-9852" class="post-9852 page type-page status-publish hentry no-post-thumbnail">
        <div class="entry-content content">
          <div id="x-section-1" class="x-section full-width main-banner bg-image"
          data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
            <div class="x-container max width">
              <div class="x-column x-sm main-banner-text x-1-2">
                <h2 class="h-custom-headline hi-cursive h3">
                  <span><?php the_field('hello-text'); ?></span>
                </h2>
                <h2 class="h-custom-headline left-text  h2">
                  <span><?php the_field('first_title'); ?></span>
                </h2>
                <div class="x-raw-content">
                  <p class="intro"><?php the_field('description'); ?></p>
                    <a class="x-btn bright-blue x-btn-transparent x-btn-square x-btn-large"
                    href="/onlajn-personalnye-trenirovki.htm" title="Online personal training" data-options="thumbnail: ''" target="_blank">
                    <i class="x-icon x-icon-sign-in" data-x-icon="&#xf090;" aria-hidden="true"></i>Узнать Больше</a>
                    <span class="video-lightbox-button">
                      <a  href="https://www.youtube.com/channel/UCgBP0ono7IKfvYt7S1CwvoQ" target="_blank">
                        <i class="x-icon x-icon-youtube-play" data-x-icon="" aria-hidden="true"></i> Смотреть Видео</a>
                    </span>
                </div>
              </div>
              <div class="x-column x-sm x-1-2">&nbsp;</div>
            </div>
          </div>
          <div id="x-section-3" class="x-section full-width">
            <div class="x-container max width">
              <div class="x-column x-sm bundle-column x-1-2">
                <h2 class="h-custom-headline h2">
                  <span><?php the_field('underform_title'); ?></span>
                </h2>
                <h5 class="h-custom-headline h6">
                </h5>
                <div class="x-raw-content free-bundle-form grid-form">
                  <?php echo do_shortcode('[contact-form-7 id="238" title="top form"]'); ?>
                </div>
              </div>
              <div class="x-column x-sm x-1-2">
                <h6 class="press-title">СМИ о Нас</h6>
              <?php if( have_rows('comments') ): while ( have_rows('comments') ) : the_row();
                  // vars
                  $image = get_sub_field('comm_img');?>

                <div class="x-raw-content owain celebrity-quote">
                  <blockquote class="x-blockquote">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                    <?php the_sub_field('comm_desc'); ?>
                    <cite class="x-cite"><a href="https://vk.com/split4fit" target="_blank" title="<?php the_title(); ?>"><?php the_sub_field('comm_person'); ?></a></cite>
                    <div style="clear: both;"></div>
                  </blockquote>
                </div>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div><!-- x-section-3 -->

          <div id="x-section-4" class="x-section full-width">
            <div class="x-container marginless-columns">
              <div class="x-column x-sm x-1-1">
                <h2 class="h-custom-headline left-text  h2">
                  <span>Новости
                    <span style="font-weight:bold">Блога</span>
                  </span>
                </h2>
              </div>
            </div>
          </div><!-- x-section-4 -->

          <div id="x-section-5" class="x-section full-width">
            <div class="x-container marginless-columns">
              <div class="x-column x-sm x-1-1">
                <div class="x-raw-content celebrity-collage">
                  <div class="grid">
                  <?php query_posts("showposts=4&cat=9"); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="eddie-redmayne post-block-img">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail()) :?>
                        <?php the_post_thumbnail('blog'); ?>
                      <?php endif; ?><!-- /post thumbnail -->
                      </a>
                      <span>
                        <i class="x-icon x-icon-star-o" data-x-icon="&#xf006;" aria-hidden="true"></i><?php the_title(); ?>
                      </span>
                      <div class="text-container">
                        <h6><?php the_title(); ?></h6>
                        <a href="<?php the_permalink(); ?>">read more</a>
                      </div>
                      <div class="post-title">
                        <h5><?php the_title(); ?></h5>
                        <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
                      </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                  </div><!-- grid -->
                </div>
              </div>
            </div>
          </div><!-- x-section-5 -->

          <div id="x-section-6" class="x-section quotes ">
            <div class="x-container marginless-columns">
              <div class="x-column x-sm x-1-1">
                <div class="x-raw-content quote mens-fitness"><?php the_field('underphoto_title'); ?>
                  <br>
                  <?php $image = get_field('underphoto_img'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="x-raw-content quote pad-quote"><?php the_field('underphoto_title2'); ?>
                  <br>
                  <?php $image = get_field('underphoto_img2'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div><!-- x-section-6 -->

          <div id="x-section-7" class="x-section full-width why-online">
            <div class="x-container max width">
              <div class="x-column x-sm x-1-2">
                <h2 class="h-custom-headline left-text  h2">
                  <span><?php the_field('advantage_title'); ?></span>
                </h2>

                <ul class="x-feature-list" data-x-element="feature_list" data-x-params="{&quot;animationOffset&quot;:&quot;50&quot;,&quot;animationDelayInitial&quot;:&quot;0&quot;,&quot;animationDelayBetween&quot;:&quot;300&quot;}">

                <?php if( have_rows('advantage') ): while ( have_rows('advantage') ) : the_row(); ?>

                  <li class="x-feature-box left-text top-text cf"
                  data-x-element="feature_box" data-x-params="{&quot;child&quot;:true,&quot;graphicAnimation&quot;:&quot;none&quot;,&quot;connectorAnimation&quot;:&quot;none&quot;,&quot;alignH&quot;:&quot;left&quot;,&quot;alignV&quot;:&quot;top&quot;}">
                    <span class="x-feature-box-connector full">
                      <span class="visually-hidden">Connector.</span>
                    </span>
                    <div class="x-feature-box-graphic hexagon">
                      <div class="x-feature-box-graphic-outer hexagon">
                        <div class="x-feature-box-graphic-inner hexagon">
                          <i class="x-icon-star hexagon" data-x-icon="&#xf005;"></i>
                        </div>
                      </div>
                    </div>
                    <div class="x-feature-box-content">
                      <h4 class="x-feature-box-title"><?php the_sub_field('adv_name'); ?></h4>
                      <p class="x-feature-box-text"><?php the_sub_field('adv_desc'); ?></p>
                    </div>
                  </li>
                   <?php endwhile; endif; ?>
                </ul><!-- x-feature-list -->

                <a class="x-btn red x-btn-transparent x-btn-square x-btn-large" style="margin-top:20px"
                href="/onlajn-personalnye-trenirovki.htm" data-options="thumbnail: ''"><i class="x-icon x-icon-sign-in" data-x-icon="&#xf090;" aria-hidden="true"></i>Узнать Больше</a>
              </div>
              <div class="x-column x-sm x-1-2 avantage-bg">
                <?php if( have_rows('advatnage-skins-img') ): ?>
                <?php while( have_rows('advatnage-skins-img') ): the_row();
                // vars
                $image = get_sub_field('skin-img'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div><!-- x-section-7 -->

        <div id="x-section-8" class="x-section recent-posts">
           <div class="x-container max width">
             <div class="x-column x-sm x-1-1">
               <h2 class="h-custom-headline h2">
                 <span>Популярные
                   <span class="title-bold">Новости</span>
                 </span>
               </h2>
               <div class="x-recent-posts cf horizontal" data-x-element="recent_posts"
               data-x-params="{&quot;fade&quot;:false}" data-fade="false">

               <?php query_posts("showposts=2&cat=12"); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <a class="x-recent-post2 with-image" href="<?php the_permalink(); ?>"
                 title="Permalink to: &quot;How To Meditate, a simple guide to starting meditation (and why you need to!)&quot;">
                   <article id="post-10145" class="post-10145 post type-post status-publish format-standard has-post-thumbnail hentry category-mind">
                     <div class="entry-wrap">
                       <div class="x-recent-posts-img">
                       <?php if ( has_post_thumbnail()) :?>
                        <?php the_post_thumbnail('blog'); ?>
                      <?php endif; ?><!-- /post thumbnail -->
                       </div>
                       <div class="x-recent-posts-content">
                         <h3 class="h-recent-posts"><?php the_title(); ?></h3>
                         <span class="x-recent-posts-date"><?php the_time('j F Y'); ?></span>
                       </div>
                     </div>
                   </article>
                 </a>
                 <?php endwhile; endif; ?>
                 <?php wp_reset_query(); ?>
               </div>
             </div>
           </div>
         </div><!-- x-section-8 -->

          <div id="x-section-9" class="x-section">
            <div class="x-container max width">
              <div class="x-column x-sm x-1-1">
                <h2 class="h-custom-headline h2">
                  <span>
                    <i class="x-icon x-icon-instagram" data-x-icon="&#xf16d;" aria-hidden="true"></i>
                    <span class="bold-title-ins">Instagram</span>
                  </span>
                </h2>
                <h2 class="h-custom-headline instagram-tag h3">
                  <span>
                    <a href="https://www.instagram.com/eugene.korchun/" target="_blank">#Korchun_coach</a>
                    <a href="https://www.instagram.com/julirogozina/" target="_blank">#rogozina_coach</a>
                    <a href="https://www.instagram.com/explore/tags/split4fit/" target="_blank">#s4f #Split4Fit</a>
                  </span>
                </h2>
                <div class="x-raw-content">
                  <div id="sb_instagram" class="sbi sbi_col_2"
                  data-id="2106189244" data-num="4" data-res="auto" data-cols="2" data-options="{&quot;sortby&quot;: &quot;none&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;5&quot;}">
                    <?php if ( is_active_sidebar('widgetarea1') ) : ?>
                    <?php dynamic_sidebar( 'widgetarea1' ); ?>
                    <?php endif; ?>
                    <div id="sbi_load">
                      <a class="sbi_load_btn" href="/onlajn-personalnye-trenirovki.htm" style="">Load More...</a>
                      <div class="sbi_follow_btn">
                        <a href="https://www.instagram.com/explore/tags/split4fit/" target="_blank"><i class="fa fa-instagram"></i>Follow on Instagram</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- x-section-9 -->

        </div>
      </article>
    </div>
<?php get_footer(); ?>
