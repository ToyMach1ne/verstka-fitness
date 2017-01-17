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
                                    <form accept-charset="UTF-8" action="https://nh247.infusionsoft.com/app/form/process/8483d3a103f616f1d916b28eae45c046" class="infusion-form" method="POST">
                                        <input name="inf_form_xid" type="hidden" value="8483d3a103f616f1d916b28eae45c046">
                                        <input name="inf_form_name" type="hidden" value="Contact form on Scottlaidler.com">
                                        <input name="infusionsoft_version" type="hidden" value="1.48.0.48">
                                        <div class="infusion-field">
                                            <label for="inf_field_FirstName">First Name *</label>
                                            <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text">
                                        </div>
                                        <div class="infusion-field">
                                            <label for="inf_field_LastName">Last Name *</label>
                                            <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" type="text">
                                        </div>
                                        <div class="infusion-field">
                                            <label for="inf_field_Email">Email *</label>
                                            <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text">
                                        </div>
                                        <div class="infusion-field">
                                            <label for="inf_custom_Phone">Phone</label>
                                            <input class="infusion-field-input-container" id="inf_custom_Phone" name="inf_custom_Phone" type="text">
                                        </div>
                                        <div class="infusion-field">
                                            <label for="inf_custom_City0">City</label>
                                            <input class="infusion-field-input-container" id="inf_custom_City0" name="inf_custom_City0" type="text">
                                        </div>
                                        <div class="infusion-field">
                                            <label for="inf_custom_Contactformnotes">Message</label>
                                            <textarea cols="24" id="inf_custom_Contactformnotes" name="inf_custom_Contactformnotes" rows="5"> </textarea>
                                        </div>
                                        <div class="infusion-submit">
                                            <input type="submit" value="Submit" class="blue">
                                        </div>
                                    </form>
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
