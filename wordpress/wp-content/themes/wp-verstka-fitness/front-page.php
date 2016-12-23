<?php /* Template Name: Home */ get_header(); ?>
  <section role="main" class="main-content">
    <div class="first-section">
      <div class="container">
        <div class="row first-block">
        <h6><?php the_field('title'); ?></h6>
        <p><?php the_field('undertitle'); ?></p>
            <?php if( have_rows('purpose') ): ?>
            <?php while( have_rows('purpose') ): the_row();
               // vars
             $image = get_sub_field('purpose_image'); ?>
          <div class="col-md-6">
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <p><?php the_sub_field('purpose_description'); ?></p>
          </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- first-section -->

    <div class="second-section" id="programm">
      <div class="container">
        <div class="row">
        <h6><?php the_field('programm'); ?></h6>
        <p><?php the_field('undersloganprogramm'); ?></p>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pen.png" alt="">
            <p><?php the_field('title1'); ?></p>
            <?php if( have_rows('1st_plan') ): while ( have_rows('1st_plan') ) : the_row(); ?>
            <ul>
              <li><?php the_sub_field('1st_descr'); ?></li>
            </ul>
            <?php  endwhile; endif; ?>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/apple.png" alt="">
            <p><?php the_field('title2'); ?></p>
            <?php if( have_rows('2nd_plan') ): while ( have_rows('2nd_plan') ) : the_row(); ?>
            <ul>
              <li><?php the_sub_field('2nd_descr'); ?></li>
            </ul>
            <?php  endwhile; endif; ?>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="">
            <p><?php the_field('title3'); ?></p>
            <?php if( have_rows('3rd_plan') ): while ( have_rows('3rd_plan') ) : the_row(); ?>
            <ul>
              <li><?php the_sub_field('3rd_desc'); ?></li>
            </ul>
            <?php  endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div><!-- second-section -->

    <div class="third-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h6><?php the_field('video_title'); ?></h6>
            <p><?php the_field('video_undertitle'); ?></p>
            <div id="owl-demo-2" class="owl-second-carousel owl-theme">
               <?php if( have_rows('video') ): while ( have_rows('video') ) : the_row(); ?>
              <div class="item">
              <iframe width="640" height="360" src="https://www.youtube.com/embed/<?php the_sub_field('video_item'); ?>" frameborder="0" allowfullscreen></iframe>
               </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div><!-- third-section -->

    <div class="photo-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h6><?php the_field('results_title'); ?></h6>
            <p><?php the_field('results_undertitle'); ?></p>
            <div id="owl-demo" class="owl-carousel owl-theme">
                 <?php if( have_rows('results_slider') ): while ( have_rows('results_slider') ) : the_row();
                    // vars
                  $image = get_sub_field('res_img');?>
                <div class="item">
                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                </div>
               <?php endwhile; endif; ?>
             </div><!-- owl-demo -->
          </div>
        </div>
      </div>
    </div><!-- photo-section -->

    <div class="fourth-section" id="cost">
      <div class="container">
        <div class="row">
          <h6><?php the_field('3rd_title'); ?></h6>
          <p><?php the_field('3rd_undertitle'); ?></p>
          <?php if( have_rows('order') ): while ( have_rows('order') ) : the_row(); ?>
          <div class="col-md-4">
            <p><?php the_sub_field('order_title'); ?></p>
            <button class="button-price font-text">Оставьте заявку</button>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="modal-form-order">
        <?php echo do_shortcode('[contact-form-7 id="76" title="order form"]'); ?>
      </div>
    </div><!-- fourth-section -->

    <div class="fifth-section" id="team">
      <div class="container">
        <div class="row">
          <h6><?php the_field('5th_title'); ?></h6>
          <p class="fifth-underslogan"><?php the_field('5th_undertitle'); ?></p>
          <?php if( have_rows('stuff') ): while ( have_rows('stuff') ) : the_row();
             // vars
          $image = get_sub_field('stuff_img'); ?>
          <div class="col-md-6">
          <div class="img-block">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          </div>
            <p><?php the_sub_field('stuff_name'); ?></p>
            <span><?php the_sub_field('stuff_desc'); ?></span>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div><!-- fifth-section -->

    <div class="sixth-section">
      <div class="container">
        <div class="row">
        <h6><?php the_field('4th_title'); ?></h6>
        <p class="sixth-underslogan"><?php the_field('4th_undertitle'); ?></p>
          <div class="col-md-12">
          <?php if( have_rows('our_advantage') ): while ( have_rows('our_advantage') ) : the_row();
            // vars
          $image = get_sub_field('adv_img'); ?>
            <div class="advantage-block">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              <p><?php the_sub_field('adv_text'); ?></p>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div><!-- sixth-section -->

    <div class="seventh-section" id="sight">
      <div class="container">
        <div class="row">
          <h6><?php the_field('6th_title'); ?></h6>
          <p class="seventh-underslogan"><?php the_field('6th_title'); ?></p>
          <?php if( have_rows('join_block') ) {
             $i = 0;
              while ( have_rows('join_block') ) : the_row(); ?>

              <?php if (($i == 1) || ($i == 3) || ($i == 5)) { ?>
                <div class="col" style="width: 33.4541%;"><div class="cont"></div></div>
              <?php } ?>

              <?php if (($i == 1) || ($i == 3) || ($i == 5)) {
                $class = 'bounceInRight';
              } else {
                $class = 'bounceInLeft';
              } ?>
          <div class="col-md-12">
            <div class="seventh-block-wrap">
              <span><?php the_sub_field('number_block'); ?></span>
              <p><?php the_sub_field('join_desc'); ?></p>
            </div>
          </div>
          <?php if (($i == 0) || ($i == 2) || ($i == 4)) { ?>
  <div class="col" style="width: 33.4541%;"><div></div><div class="cont"></div></div>
    <?php } ?>
    <?php $i++; endwhile;  } ?>
        </div>
      </div>
    </div><!-- seventh-section -->
    <div class="eighth-section">
      <div class="container">
        <div class="row">
          <h6><?php the_field('7th_title'); ?></h6>
          <p class="eight-underslogan"><?php the_field('7th_undertitle'); ?></p>
          <form action="#">
            <input type="text" placeholder="Ваше имя *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ваше имя *'">
            <input type="text" placeholder="Электронная почта *" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Электронная почта *'">
            <button>Оставте заявку</button>
            <p>Все ваши данные конфиденциальны. Мы не передаем ваши данные третьим лицам и не рассылаем спам.</p>
          </form>
        </div>
      </div>
    </div><!-- eighth-section -->

    <div class="nine-section" id="question-answers">
      <div class="container">
        <div class="row">
          <h6><?php the_field('8th_title'); ?></h6>
          <p class="nine-underslogan"><?php the_field('8th_undertitle'); ?></p>
          <div class="col-md-12">
          <?php if( have_rows('qustion_block') ): while ( have_rows('qustion_block') ) : the_row(); ?>
            <div class="question-answers">
              <h5><?php the_sub_field('question_title'); ?></h5>
              <div class="question-inner">
                <p><?php the_sub_field('question_desc'); ?></p>
              </div>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div><!-- nine-section -->
    <div class="blog-section">
          <div class="container">
                      <h4>Блог</h4>
            <div class="row">
              <?php query_posts("showposts=4"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-3">
              <a href="<?php the_permalink(); ?>">
                <div class="img-post-block">
                  <?php if ( has_post_thumbnail()) :?>
                   <?php the_post_thumbnail('thumbnail'); ?>
                  <?php endif; ?><!-- /post thumbnail -->
                </div>
                </a>
                <div class="post-descr">
                <a href="<?php the_permalink(); ?>">
                  <h6><?php the_title(); ?></h6>
                  <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
                  </a>
                </div>
              </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>
        </div><!-- blog-section -->
  </section><!-- /section -->
</div><!-- /wrapper -->


<?php get_footer(); ?>
