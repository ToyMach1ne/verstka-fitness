<?php /* Template Name: Онлайн тренировки */ get_header(); ?>
    <div class="x-main full" role="main">
    <article id="post-9933" class="post-9933 page type-page status-publish has-post-thumbnail hentry">
        <div class="entry-content content">
            <div id="x-section-1" class="x-section hero-banner bg-image" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline h3">
                          <span><?php the_field('first_title_online'); ?></span>
                        </h2>
                        <div class="x-text">
                            <p><?php the_field('undertitle_online'); ?></p>
                        </div>
                        <a id="scroll_element" class="x-btn lets-go-btn bright-blue x-btn-transparent x-btn-square x-btn-regular" style="margin-bottom:0em;"
                        href="#" data-options="thumbnail: ''">Я ГОТОВ, ВПЕРЕД!</a>
                    </div>
                </div>
            </div>

            <div id="x-section-3" class="x-section center-text ask-scott-section bg-image"  data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
                <div class="x-container max width">
                    <div class="x-column x-sm left-text  x-1-2">
                        <h2 class="h-custom-headline left-text  h3"><span><?php the_field('question_block_title'); ?></span></h2>
                        <div class="x-text left-text">
                           <p><?php the_field('under_question'); ?></p>
                        </div>
                        <div class="x-raw-content grid-form">
                           <?php echo do_shortcode('[contact-form-7 id="238" title="top form"]'); ?>
                        </div>
                    </div>
              </div>
          </div><!-- x-section-3 -->

            <div id="x-section-4" class="x-section how-it-works">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline left-text  h3"><span><?php the_field('inside_title'); ?></span></h2>
                    </div>
                </div>
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-2">
                        <div class="x-text">
                            <p><?php the_field('just_text'); ?></p>
                        </div>
                    </div>
                    <div class="x-column x-sm x-1-2">
                      <img class="x-img x-img-none" src="<?php echo get_template_directory_uri(); ?>/img/training-plan-mockup.jpg">
                    </div>
                </div>
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <div class="x-raw-content">
                            <blockquote class="x-blockquote">
                            <?php $image = get_field('single_comment_img'); if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?><?php the_field('single_comment_block'); ?>
                                <cite class="x-cite"><?php the_field('single_comment_person'); ?></cite>
                                <div style="clear: both;"></div>
                            </blockquote>
                        </div>
                        <h2 class="h-custom-headline h3">
                          <span>Как Это <b>Работает?</b></span>
                        </h2>
                        <ul class="x-feature-list" data-x-element="feature_list" data-x-params="{&quot;animationOffset&quot;:&quot;50&quot;,&quot;animationDelayInitial&quot;:&quot;0&quot;,&quot;animationDelayBetween&quot;:&quot;300&quot;}">

                        <?php if( have_rows('advantage_personal') ): while ( have_rows('advantage_personal') ) : the_row(); ?>
                            <li class="x-feature-box left-text top-text cf" data-x-element="feature_box" data-x-params="{&quot;child&quot;:true,&quot;graphicAnimation&quot;:&quot;none&quot;,&quot;connectorAnimation&quot;:&quot;none&quot;,&quot;alignH&quot;:&quot;left&quot;,&quot;alignV&quot;:&quot;top&quot;}">
                          <span class="x-feature-box-connector full">
                              <span class="visually-hidden">Connector.</span>
                            </span>
                                <div class="x-feature-box-graphic hexagon">
                                    <div class="x-feature-box-graphic-outer hexagon">
                                        <div class="x-feature-box-graphic-inner hexagon">
                                          <i class="x-icon-edit hexagon" data-x-icon=""></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="x-feature-box-content">
                                    <h4 class="x-feature-box-title"><?php the_sub_field('adv_name'); ?></h4>
                                    <p class="x-feature-box-text"><?php the_sub_field('adv_desc'); ?></p>
                                </div>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                        <div class="x-raw-content">
                            <blockquote class="x-blockquote" style="border-color:#bbb;">
                            <?php $image = get_field('second_img'); if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?><?php the_field('second_single_comm'); ?>
                                <cite class="x-cite"><?php the_field('second_comm_name'); ?></cite>
                                <div style="clear: both;"></div>
                            </blockquote>
                        </div>
                        <h3 class="h-custom-headline h3" style="margin-top:1.5em;"><span><?php the_field('your_programm'); ?></span></h3>
                        <div class="x-text" style="color: #333">
                            <p><?php the_field('underprogramm'); ?></p>
                        </div>
                      <a id= "programm-button" class="x-btn lets-go-btn blue x-btn-transparent x-btn-square x-btn-regular" href="#" data-options="thumbnail: ''">ВПЕРЕД!</a>
                      <div class="avantage-bg">
                        <?php if( have_rows('advatnage-skins-img', 31) ): ?>
                        <?php while( have_rows('advatnage-skins-img', 31) ): the_row();
                        // vars
                        $image = get_sub_field('skin-img', 31); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
            </div><!-- x-section-4 -->

            <div id="x-section-6" class="x-section">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline h3"><span><?php the_field('transformation_block'); ?></span></h2></div>
                </div>
                <div class="x-container max width">
                    <?php if( have_rows('results_') ): ?>
                        <?php while( have_rows('results_') ): the_row();
                        // vars
                        $image = get_sub_field('results_img'); ?>
                        <div class="x-column x-sm x-1-3">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <blockquote class="x-blockquote"><?php the_field('results_comment'); ?></blockquote>
                </div><!-- x-container -->
            </div><!-- x-section-6 -->

            <div id="x-section-7" class="x-section center-text purchase-section">
                <div class="x-container max width">
                    <div class="x-column x-sm left-text  x-1-1">
                        <h2 class="h-custom-headline left-text  h3"><span><?php the_field('online_training_now'); ?></span></h2>
                        <h3 class="h-custom-headline h4">
                          <span><i class="x-icon x-icon-globe" data-x-icon="" aria-hidden="true"></i><?php the_field('bill_text'); ?></span>
                        </h3>
                        <div class="x-pricing-table cf three-columns">
                            <div class="x-pricing-column">
                                <h2 class="man"><?php the_field('1st_programm_name'); ?></h2>
                                <div class="x-pricing-column-info">
                                    <h3 class="x-price"><?php the_field('programm_price'); ?></h3><span></span>
                                    <ul class="x-ul-icons">
                                        <?php if( have_rows('programm_desc_1') ): ?>
                                        <?php while( have_rows('programm_desc_1') ): the_row(); ?>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i><?php the_sub_field('desc1'); ?></li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="/oplata.htm" title="Example" data-options="thumbnail: ''"><i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Купить сейчас</a></div>
                            </div>
                            <div class="x-pricing-column featured">
                                <h2 class="man"><?php the_field('2nd_programm_name'); ?></h2>
                                <div class="x-pricing-column-info">
                                    <h3 class="x-price"><?php the_field('programm_price2'); ?></h3>
                                    <ul class="x-ul-icons">
                                    <?php if( have_rows('programm_desc_2') ): ?>
                                        <?php while( have_rows('programm_desc_2') ): the_row(); ?>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i><?php the_sub_field('desc2'); ?></li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="/oplata.htm" title="Example" data-options="thumbnail: ''"><i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Купить сейчас</a>
                                </div>
                            </div>
                            <div class="x-pricing-column">
                                <h2 class="man"><?php the_field('3rd_programm_name'); ?></h2>
                                <div class="x-pricing-column-info">
                                    <h3 class="x-price"><?php the_field('programm_price3'); ?></h3><span></span>
                                    <ul class="x-ul-icons">
                                    <?php if( have_rows('programm_desc_3') ): ?>
                                        <?php while( have_rows('programm_desc_3') ): the_row(); ?>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i><?php the_sub_field('desc3'); ?></li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="/oplata.htm" title="Example" data-options="thumbnail: ''"><i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Купить сейчас</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<script>
  $(document).ready(function (){
            $("#scroll_element").click(function (){
                $('html, body').animate({
                    scrollTop: $("#x-section-7").offset().top
                }, 1500);
            });
        });
</script>

<script>
  $(document).ready(function (){
            $("#programm-button").click(function (){
                $('html, body').animate({
                    scrollTop: $("#x-section-7").offset().top
                }, 1500);
            });
        });
</script>

<?php get_footer(); ?>
