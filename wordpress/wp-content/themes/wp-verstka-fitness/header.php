<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <!-- saved from url=(0014)about:internet -->
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
  <div class="footer-social">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="https://vk.com/id18209380" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/groups/478491599012984/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true" target="_blank"></i></a></li>
            <li><a href="https://www.instagram.com/eugene.korchun/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row header-wrapp">
<nav id="nav-top">
  <?php wpeHeadSecondNav(); ?>
</nav>
<a href="#adaptive-menu" id="hamburger" class="humb-toggle-switch humb-toggle-switch__htx"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <div class="logo col-md-2">
          <?php if ( is_page('31') ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_page('31') ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->
        <div class="col-md-2 site-name">
          <?php if ( is_page('31') ){ } else { ?>
                    <a href="<?php echo home_url(); ?>">
                      <?php  } ?>
           <h2>split4fit</h2>
                      <?php if ( is_page('31') ){
                      } else { ?>
                    </a>
                  <?php } ?>
        </div>
        <div class="col-md-8">
          <nav class="nav__header col-md-12" role="navigation">
            <?php wpeHeadNav(); ?>
          </nav><!-- /nav -->
        </div>
        <nav class="mobile-menu" id="adaptive-menu">
          <?php wpeHeadSecondNav(); ?>
        </nav>
      </div><!-- /.row -->
      <div class="row header-second-block">
        <div class="col-md-12 header-slogan">
          <h6><?php the_field('slogan', 31); ?></h6>
          <p><?php the_field('underslogan', 31); ?></p>
          <a href="#" class="super-button">Оставьте заявку</a>
        </div>
        <div class="header-form" id="header-modal">
        <?php echo do_shortcode('[contact-form-7 id="112" title="header-form"]'); ?>
      </div><!-- header-form -->
      </div>
    </div><!-- /.container -->
  </header><!-- /header -->
