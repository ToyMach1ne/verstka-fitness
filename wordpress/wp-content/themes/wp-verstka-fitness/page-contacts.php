<?php /* Template Name: Контакты */ get_header(); ?>
<div class="x-container max width offset">
    <div class="x-main left" role="main">
        <article id="post-6053" class="post-6053 page type-page status-publish hentry no-post-thumbnail">
            <div class="entry-featured">
            </div>
            <div class="entry-wrap">
                <div class="entry-content content">
                    <div id="x-section-1" class="x-section">
                        <div class="x-container center-text  max width">
                            <div class="x-column x-sm x-1-1">
                                <h2 class="h-custom-headline man h3">
                                  <span>Get in Touch</span>
                                </h2>
                            </div>
                        </div>
                        <div class="x-container">
                            <div class="x-column x-sm x-1-1">
                                <div class="x-raw-content">
                                    <?php echo do_shortcode('[contact-form-7 id="345" title="contact-page-form"]'); ?>
                                    <script type="text/javascript" src="https://nh247.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=f98574fe1580d4d3ab5aeb1b55b4ed52"></script>
                                </div>
                            </div>
                        </div>

                        <div class="x-container max width marginless-columns">
                            <div class="x-column x-sm x-1-2">
                                <div class="x-text left-text">
                                    <p><?php the_field('adress'); ?></p>
                                </div>
                            </div>
                            <div class="x-column x-sm x-1-2" style="padding: 0px; ">
                                <div class="x-text">
                                    <p><i class="x-icon x-icon-phone" data-x-icon="" aria-hidden="true"></i> <?php the_field('phone'); ?>
                                        <br>
                                        <i class="x-icon x-icon-envelope" data-x-icon="" aria-hidden="true"></i> <?php the_field('email'); ?></p>
                                        <span>Социальные сети:</span>
                                        <a href="https://vk.com/id18209380"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                        <a href="https://www.facebook.com/groups/478491599012984/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://vk.com/j.rogozina"><i class="fa fa-vk fa-second-vk" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

</div>

<?php get_footer(); ?>
