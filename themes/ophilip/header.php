<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_ico', 'option'); ?>">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_png', 'option'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="theme-color" content="#db6237">
    <meta name="format-detection" content="telephone=no">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script>
    new WOW().init({
        mobile: false
    });
    </script>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css?v=1.5" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css2?family=Kameron&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">



    <?php wp_head(); ?>

    <style>
    <?php echo get_field('css_text_area', 'option');
    ?>
    </style>
</head>

<body <?php body_class(); ?>>
    <a id="back-to-top" class="" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top  bg-faded">
            <a class="navbar-brand  rotate " href="<?php echo get_home_url(); ?>">
                <img src="<?php the_field("header_image_logo", "options"); ?>" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
                aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
                <span id="mybutton" class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="navbarMobile">
                <div class="navbar_content">
                    <?php
                $defaults = array(
                    'menu' => 'header menu',
                    'menu_class' => 'nav navbar-nav'
                );
                wp_nav_menu($defaults);
                ?>
                </div>
            </div>
        </nav>
    </header> -->





    <header class="header-bg-image" style="background-image:url('<?php the_field("header_banner");?>')">
        <div class="container-fluid">
            <div class="row  Header-section">
                <div class="col-6 col-sm-6 header-left-pd">

                    <div class="logo-sec"><a href="<?php echo home_url();?>/home-page/">
                            <img src="<?php the_field("header_image_logo", 'options'); ?>">

                        </a>
                    </div>
                </div>

                <div class="col-6  col-sm-6 head-rgt wow     fea-effects px-0">
                    <a href="https://secure.piryx.com/donate/1sT9OOJh/Philip-Cortez/" target="_blank">
                        <div class="order-button "><?php the_field("header_order_button","options");?></div>
                    </a>
                    <?php the_field("header_right_section", 'options'); ?>

                    <input type="checkbox" id="toggle" style="display:none;">
                    <label class="toggle-btn toggle-btn__cross" for="toggle">


                        <div class="cross-btn-image">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </label>
                    <nav style="background-image:url('<?php the_field("menu_background_image", 'options'); ?>);">
                        <div class="space-pd">
                            <div class="menu-text-sec"
                                style="background-image:url('<?php the_field("menu_text_left", "options"); ?>);">
                                <img src="<?php the_field("menu_text_left", "options"); ?>" alt="">
                            </div>

                            <?php
                                            $defaults = array(
                                                'menu' => 'header menu',
                                                'menu_class' => 'nav navbar-nav'
                                            );
                                            wp_nav_menu($defaults);
                            ?>



                            <div class="menu-logo-sec"
                                style="background-image:url('<?php the_field("menu_logo_right", "options"); ?>);">
                                <img src="<?php the_field("menu_logo_right", "options"); ?>" alt="">
                            </div>
                        </div>



                        <div class="header-social-site-icons">

                            <div class="header-flex-hero">

                                <?php $Case = get_field('social_media_repeater', "options");
                                        if (is_array($Case)) {
                                        foreach ($Case as $Case_list) {

                                ?>

                                <div class="header-social-links  wow fadeInDown" data-wow-duration="1s"
                                    data-wow-delay=".5s">
                                    <a target="_blank" href="<?php echo $Case_list['social_media_repeater_link']; ?>">
                                        <?php echo $Case_list['social_media_repeater_icons']; ?>
                                    </a>


                                </div>

                                <?php
                                    }
                                    }
                                    ?>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>



        <?php 
            $banner =   get_field("header_image"); 
            if(empty($banner)) {
                $banner=get_field("defalut_banner","options");
            }
        ?>



        <div class="header-banner" style="background-image:url('<?php echo $banner; ?>');">
            <img src="<?php echo $banner; ?>" style="visibility:hidden;" />
            <div class="container">
                <div class="row header-content-section">
                    <div class=" col-md-12">
                        <div class="issue-section">
                            <div class="issues-title">
                                <?php the_field("header_title"); ?>



                                <?php  $cn2 = get_field("header_title"); if(!empty($cn2)) { ?>

                                    <hr>
                                <?php } ?>

                               




                            </div>
                            <div class="issues-content">
                                <?php the_field("header_content"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>