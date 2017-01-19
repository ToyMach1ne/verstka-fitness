<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
  <link
  rel="pingback" href="assets/xmlrpc.php">
    <meta name="keywords" itemprop="keywords" content="online personal trainer, online personal training, online fitness programs, online fitness plans, fat loss training plan, personal trainer">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="top" class="site">
<header>
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo home_url(); ?>" title="Онлайн фитнесс Split4Fit"
              rel="home">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Split4Fit" class="logo-img">
              <p>Split4Fit</p>
              </a>
            </div>
            <div class="collapse navbar-collapse main-nav">
              <?php wpeHeadNav(); ?>
            </div>
            <a href="#adaptive-menu" id="hamburger" class="humb-toggle-switch humb-toggle-switch__htx"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <nav class="mobile-menu" id="adaptive-menu">
          <?php wpeHeadSecondNav(); ?>
        </nav>
          </nav>
        </div>
      </div>
    </header>
