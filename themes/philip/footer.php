<!-- footer -->
<?php wp_footer(); ?>




<footer class="ftr-bg">
    <div class="container">
        <div class="row footer-content">

            <div class="col-md-8 px-0">
                <div class="left-content">
                    <div class="footer-nav">

                        <?php
                                    $defaults = array(
                                        'menu' => 'footer menu',
                                        'menu_class' => 'nav navbar-nav'
                                    );
                                    wp_nav_menu($defaults);
                                    ?>
                    </div>

                </div>
            </div>
            <div class="col-md-4">

                <div class="social-site-icons ">

                    <div class="flex-hero">

                        <?php $Case = get_field('social_media_repeater', "options");
                            if (is_array($Case)) {
                            foreach ($Case as $Case_list) {

                        ?>

                        <div class="social-links  wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
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

            </div>

        </div>


        <div class="row left-right-bg">

            <div class="col-md-12">

                <div class="row">



                    <div class="col-md-6 footer-left">
                        <?php the_field("footer_bottom_left",'options');?>
                    </div>
                    <div class="col-md-6 footer-right">
                        <?php the_field("footer_bottom_right",'options');?>
                    </div>
                </div>
            </div>
        </div>
    </div>



</footer>