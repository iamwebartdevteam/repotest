<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4swas</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <!-- carosuel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/60b352a9e9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  </head>
  <body>


    <header <?php body_class(); ?>>
      <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul>
              <li><span><?php echo get_field('header_follow') ?></span></li>
              <li><a href="<?php echo get_field('header_icon1_link') ?>"><?php echo get_field('header_icon1') ?></a></li>
              <li><a href="<?php echo get_field('header_icon2_link') ?>"><?php echo get_field('header_icon2') ?></a></li>
              <li><a href="<?php echo get_field('header_icon3_link') ?>"><?php echo get_field('header_icon3') ?></a></li>
              <li><a href="<?php echo get_field('header_icon4_link') ?>"><?php echo get_field('header_icon4') ?></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="login">
              <a href="<?php echo get_field('register_link') ?>" class="register"><?php echo get_field('register_text') ?></a>
              <a href="<?php echo get_field('login_link') ?>" clas="login"><?php echo get_field('login_text') ?></a>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="header-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="header-logo">
                <a href="index.php"><h1><?php echo get_field('logo') ?></h1></a>
              </div>
            </div>
            <div class="col-md-9">
              <div class="emad-wrap">
                <div class="left">
                  <div class="icon">
                    <?php echo get_field('mail_icon') ?>
                  </div>
                  <div class="text">
                    <span class="txt"><?php echo get_field('phone_number') ?></span>
                    <span><a href="<?php echo get_field('mail_link') ?>"><?php echo get_field('mail_text') ?></a></span>
                  </div>
                </div>
                <div class="right"> 
                  <div class="icon">
                    <?php echo get_field('location_icon') ?>
                  </div>
                  <div class="text">
                    <span class="txt"><?php echo get_field('location_text') ?></span>
                    <span><a href="<?php echo get_field('location_link') ?>"><?php echo get_field('location_link_text') ?></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header-bottom">
        <div class="container">

          <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand mr-0" href="<?php echo get_site_url(); ?>">
                          <img src="<?php echo get_field('logo'); ?>" alt="" class="img-fluid" style="width:125px;">
                        </a>
                                <div id="menu" class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <?php wp_nav_menu( array('menu' => 'Header_Menu', 'container' => '', 'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>' )); ?>

                                    <div class="donate-button">
        <a href="#">donate</a>
      </div>
                            </div>

                    </nav>
        </div>
      </div>
    </header>