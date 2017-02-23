<?php /* Template Name: Тренировки 1 на 1 */ get_header(); ?>
<div id="wrapper">
    <div id="hero-section" class="role-element leadstyle-container">
        <!-- START OF SECTION -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/dual.jpg" class="img-responsive hero-bg role-element leadstyle-background-image">
        <div class="hero-text-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="hero-text">
                        <p><span class="top-slogan-first">Персональные тренировки с гарантированым результатом</span> под руководством <br>
                        <span class="top-slogan">Корчуна Евгения и Рогозиной Юлии</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <div id="trust-section" class="section role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="btn-container">
                        <a href="/kontakty.htm" class="btn btn-primary btn-block btn-hero role-element leadstyle-link">Бесплатная Консультация</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="trust-logo-container">
                        <ul class="list-inline hero-trust-logos text-center">
                            <li class="role-element leadstyle-container">
                                <span class="leadstyle-editable-wrapper leadstyle-replacement-style-trust-logo1" id="leadstyle-replacement-style-trust-logo1">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/blue-background-male.png" class="role-element leadstyle-image">
                                </span>
                            </li>
                            <li class="role-element leadstyle-container">
                              <a href="https://www.instagram.com/eugene.korchun/" target="_blank"><i class="fa fa-instagram"></i>#kor4un_coach</a>
                            </li>
                            <li class="role-element leadstyle-container">
                              <a href="https://www.instagram.com/julirogozina/" target="_blank"><i class="fa fa-instagram"></i>#rogozina_coach</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <div id="about-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="role-element leadstyle-text"><b><?php the_field('help'); ?></b></h2>
                    <p class="role-element leadstyle-text">
                        <strong><?php the_field('underhelp'); ?></strong>
                    </p>
                    <ul class="checkmark-list role-element leadstyle-text">
                    <?php if( have_rows('help_elements') ): while ( have_rows('help_elements') ) : the_row(); ?>
                        <li><strong><?php the_sub_field('purpose'); ?></strong></li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="role-element leadstyle-text"><b><?php the_field('expect'); ?></b></h2>
                    <p class="role-element leadstyle-text"><strong><?php the_field('underexpect'); ?></strong>
                        <br>&nbsp;</p>
                    <ul class="checkmark-list role-element leadstyle-text">
                    <?php if( have_rows('what_you_get') ): while ( have_rows('what_you_get') ) : the_row(); ?>
                        <li><strong><?php the_sub_field('getting'); ?></strong></li>
                    <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <hr class="nopadding summary-hr role-element leadstyle-container">
    <!-- END OF SECTION -->
    <hr class="nopadding quote1-hr role-element leadstyle-container">
    <div id="quote1-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="quote-container">
                        <p class="quote role-element leadstyle-text"><?php the_field('blue_comment'); ?></p>
                        <p class="role-element leadstyle-text"><strong><?php the_field('blue_comment_person'); ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <hr class="nopadding breakdown-hr role-element leadstyle-container">
    <!-- END OF SECTION -->
    <hr class="nopadding cta1-hr role-element leadstyle-container">
    <!-- END OF SECTION -->
    <hr class="nopadding testimonial-hr role-element leadstyle-container">
    <div id="testimonial1-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header text-center role-element leadstyle-text"><?php the_field('testimonials_title'); ?></h1>
                    <h3 class="subheader text-center role-element leadstyle-text"><?php the_field('undertestimonials'); ?></h3>
                </div>
            </div>
            <div class="row testimonial-featured-vid-row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div data-lead-id="testimonial-quote-row2-container" class="row">
                <div class="col-md-12">
                    <div class="testimonial-row-container testimonial-quote-row-container">
                        <ul class="list-inline text-center">
                        <?php if( have_rows('testimonials_comment') ): while ( have_rows('testimonials_comment') ) : the_row();
                            // vars
                            $image = get_sub_field('comment_image'); ?>
                            <li class="role-element leadstyle-container">
                                <div class="testimonial-box">
                                    <div class="testimonial-bubble role-element leadstyle-text">
                                        <div><?php the_sub_field('comment'); ?></div>
                                    </div>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                    <div class="testimonial-info role-element leadstyle-text">
                                        <div><b><?php the_sub_field('person'); ?></b></div>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <hr class="nopadding cta2-hr role-element leadstyle-container">
    <div id="cta2-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header role-element leadstyle-text"><?php the_field('guarantee'); ?></h1>
                    <h3 class="subheader role-element leadstyle-text">Давайте Начнем!&nbsp;</h3>
                    <a href="/kontakty.htm" class="btn btn-primary btn-cta2 role-element leadstyle-link">Бесплатная Консультация</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <hr class="nopadding upsell-hr role-element leadstyle-container">
    <!-- END OF SECTION -->
    <hr class="nopadding speaker-hr role-element leadstyle-container">
    <div id="speaker-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php $image = get_field('trainer_photo'); if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <div class="social-icon-container role-element leadstyle-container">
                    </div>
                    <div class="achievement-box role-element leadstyle-container">
                        <h4 class="role-element leadstyle-text"><br>
                            <span class="leadstyle-fontsized" style="font-size:28px;">
                                <span class="leadstyle-fontsized" style="font-size:36px;"><?php the_field('career_achiv_title'); ?></span>
                            </span><br><br>&nbsp;
                        </h4>
                        <ul class="checkmark-list role-element leadstyle-text">
                        <?php if( have_rows('career_achiv_list') ): while ( have_rows('career_achiv_list') ) : the_row(); ?>
                            <li><span class="leadstyle-fontsized"><?php the_sub_field('achivement'); ?></span></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php $image = get_field('trainer_photo2'); if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <div class="social-icon-container role-element leadstyle-container">
                    </div>
                    <div class="achievement-box role-element leadstyle-container">
                        <h4 class="role-element leadstyle-text"><br>
                            <span class="leadstyle-fontsized" style="font-size:28px;">
                                <span class="leadstyle-fontsized" style="font-size:36px;"><?php the_field('achiv_title_2'); ?></span>
                            </span><br><br>&nbsp;
                        </h4>
                        <ul class="checkmark-list role-element leadstyle-text">
                        <?php if( have_rows('career_achiv_list_2') ): while ( have_rows('career_achiv_list_2') ) : the_row(); ?>
                            <li><span class="leadstyle-fontsized"><?php the_sub_field('achivement2'); ?></span></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <hr class="nopadding price1-hr role-element leadstyle-container">
    <div id="pricing-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="//lh5.ggpht.com/pcvDHoYfzKDylpVaqLsVBd2AYY-DkjjqCclEgUNNx5c17YJXpPkjvlrDKb5ergK0OB6eIlrV7_6eKDBVCwBcxKs=s0" class="img-responsive center-block role-element leadstyle-image">
                    <div class="pricing-box-container">
                        <ul class="list-inline">
                        </ul>
                    </div>
                    <div class="text-center price-button-bottom-container">
                    </div>
                    <div class="pricing1-trust-container">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <hr class="nopadding price2-hr role-element leadstyle-container">
    <div id="pricing-section2" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="role-element leadstyle-text">
                        <span class="leadstyle-fontsized"><em><?php the_field('interested'); ?></em><br><br>
                            <strong><?php the_field('onbutton_text'); ?></strong>
                        </span>
                    </h2>
                    <div class="price2-btn-container">
                        <a href="/kontakty.htm" class="btn btn-primary btn-block btn-price2 role-element leadstyle-link">Сделаем Это!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF SECTION -->
    </div>
    <hr class="nopadding details-hr role-element leadstyle-container">
    <div id="details-section" class="section2 role-element leadstyle-container">
        <!-- START OF SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header text-center role-element leadstyle-text"><span><?php the_field('training_loc_title'); ?></span></h1>
                    <h3 class="subheader text-center role-element leadstyle-text">
                        <span class="leadstyle-fontsized">
                            <span>
                                <strong><?php the_field('loc_undertitle'); ?></strong>
                            </span>
                        </span>
                    </h3>
                    <div class="details-map-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/map-img.png" class="location_img role-element leadstyle-image">
                        <div class="details-map role-element leadstyle-embed">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1302.445669851563!2d28.408583577190043!3d49.240549309392065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5cf81878573d%3A0xc25396cab5704160!2sBabayev+Gym!5e0!3m2!1sru!2sua!4v1485686678084" width="1800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
               <?php if( have_rows('location_repeater') ): ?>
                <?php while( have_rows('location_repeater') ): the_row();
                // vars
                $image = get_sub_field('loc_img');?>
                    <div class="event-details-box role-element leadstyle-container">
                        <div class="event-icon-container role-element leadstyle-container">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </div>
                        <div class="event-detail-info">
                            <div>
                                <div class="event-details-label role-element leadstyle-text">
                                    <div><?php the_sub_field('loc_title'); ?></div>
                                </div>
                            </div>
                            <div class="text role-element leadstyle-text">
                                <div><span><?php the_sub_field('loc_desc'); ?></span></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
               <?php if( have_rows('training_loc_2') ): ?>
                <?php while( have_rows('training_loc_2') ): the_row();
                // vars
                $image = get_sub_field('img_2');?>
                    <div class="event-details-box role-element leadstyle-container">
                        <div class="event-icon-container role-element leadstyle-container">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </div>
                        <div class="event-detail-info">
                            <div>
                                <div class="event-details-label role-element leadstyle-text">
                                    <div><?php the_sub_field('loc_title_2'); ?></div>
                                </div>
                            </div>
                            <div class="text role-element leadstyle-text">
                                <div><span><?php the_sub_field('loc_desc_2'); ?></span></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF SECTION -->
    <!-- END OF SECTION -->
    <hr class="nopadding fb-comment-hr role-element leadstyle-container">
    <!-- END OF SECTION -->
    <hr class="nopadding footer-hr role-element leadstyle-container">
    <!-- END OF SECTION -->
</div>
<?php get_footer(); ?>
