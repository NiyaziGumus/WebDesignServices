<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Niyazi Gümüs">
    <meta name="description" content="Webdesign und Marketing">
    <meta name="keywords" content="Web,Design,Gestaltung,Programmierung,Software,Entwicklung">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Web Design Services</title>
    <?php wp_head(); ?>
</head>

<body id="page-body">
    <!-- navigation start-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNavbar">
        <div class="container">
            <a href="#page-body" class="navbar-brand text-uppercase" title="new design website link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-label="Toggle navigation" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="myNavbar" aria-labelledby="myLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="myLabel">Menü</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Schließen">
                    </button>
                </div>
                <div class="offcanvas-body">

                    <?php $header_menu = array(
                        'theme_location'  => 'header_menu',
                        'container'       => 'div',
                        'container_class' => 'navbar',
                        'container_id'    => 'mainNavbar',
                        'menu_class'      => 'navbar-nav',
                        'menu_id'         => 'myNavbar',
                        'fallback_cb'     => false,
                        'walker'          => new bootstrap_5_wp_nav_menu_walker()
                    );
                    wp_nav_menu($header_menu);
                    ?>

                </div>
            </div>
        </div>
    </nav>
    <!-- navigation end-->




    <!--header start-->
    <header class="backImage text-white text-center">
        <div class="container">
            <div class="backImage-sub mb-4">Willkommen in unserem Studio!</div>
            <div class="backImage-heading text-uppercase">Schön, dich kennenzulernen</div>
            <a href="#services" class="btn btn-danger btn-lg p-lg-4 text-uppercase fw-bolder">Mehr erfahren</a>
        </div>
    </header>
    <!--header end-->