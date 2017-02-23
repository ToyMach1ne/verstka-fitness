<?php /* Template Name: Выездные тренировки */ get_header(); ?>
<div class="div-banner-bg">
      <img src="//lh3.googleusercontent.com/rX729CiDKetxkMgzX69uaDWsO7k73gAi9Z7-OCoNB1L_NvWr6rWylKBLjI1k9Ajspzw6ZVJH2PLTQQ0DV53HAg=s0" class="banner-img role-element leadstyle-image">
</div>
<section data-lead-id="main" id="main">
    <div class="row-main">
        <div class="col col-content">
            <div class="in">
                <div class="in-bg"></div>
                <div class="in-inner">
                    <h1 class="role-element leadstyle-text"><?php the_field('exit_training_title'); ?></h1>
                    <p class="read-this role-element leadstyle-text"><?php the_field('exit_text1'); ?></p>
                    <p class="read-this-sec role-element leadstyle-text"><?php the_field('exit_text2'); ?></p>
                    <a href="#" class="main-button role-element leadstyle-link super-button" data-optin="true">Узнать Больше</a>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>

 <!-- MODAL WINDOW -->

<div id="leadpages-form-wrapper" class="modal-form">
    <?php echo do_shortcode('[contact-form-7 id="346" title="modal window form"]'); ?>
</div>


<!--  END MODAL WINDOW -->


    </div><!-- row-main -->
</section>
<?php get_footer(); ?>
