<?php get_header(); ?>
<div class="error-page-wrapper">
  <div class="background-error">
  <img src="<?php echo get_template_directory_uri(); ?>/img/404-bg.png" alt="">
</div>
    <div class="error-nav-wrapp">
      <div class="site-logo">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/white-logo.png" alt=""></a>
      </div>
        <nav class="error-navbar" id="error-navigation">
          <?php wpeHeadErrorNav(); ?>
        </nav>
    </div>
    <div class="broken-glass-1">
      <img src="<?php echo get_template_directory_uri(); ?>/img/shatter1.png" alt="">
    </div>
    <div class="broken-glass-2">
      <img src="<?php echo get_template_directory_uri(); ?>/img/shatter2.gif" alt="">
    </div>
    <div class="message-block">
      <p class="title-one"><span>Упс. </span>Вы сломали сайт</p>
      <p>Такой страницы не существует или произошло что-то ужасное.</p>
    </div>
</div>

<?php get_footer(); ?>
