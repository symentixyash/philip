<?php /* Template Name: Home page */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 px-0">
            <section class="banner__slider">
                <div class="slider stick-dots">
                    <?php if ( have_rows('home_page_slider') ) : ?>
                    <?php while( have_rows('home_page_slider') ) : the_row(); ?>
                    <div class="slide">
                        <div class="slide__img">
                            <img src="" alt="" data-lazy="<?php the_sub_field('image');?>" class="full-image animated"
                                data-animation-in="zoomInImage" />

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 slide_section">

                                        <div class="slide__content">
                                            <div class="slide__content--headings">
                                                <div class="animated top-title" data-animation-in="fadeInUp"
                                                    data-delay-in="0.3">
                                                    <?php the_sub_field('description');?>
                                                </div>
                                                <div class="animated title" data-animation-in="fadeInUp">
                                                    <?php the_sub_field('title');?></div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px"
                        id="circle" fill="none" stroke="currentColor">
                        <circle r="20" cy="22" cx="22" id="test">
                    </symbol>
                </svg>
            </section>
        </div>
    </div>
</div>







<div class="container-fluid">
    <div class="row">
        <?php if ( have_rows('card_repeater') ) : ?>
        <?php while( have_rows('card_repeater') ) : the_row(); ?>
        <div class="col-md-6 col-xl-4 px-0 section-1-con">
            <div class="section-1-image">
                <img src="<?php the_sub_field('background_image'); ?>" alt="">

                <div class="section-1-content">
                    <div class="section-1-title  wow fadeInUp">
                        <?php the_sub_field('title'); ?>
                    </div>
                    <div class="section-1-descripation  wow fadeInUp">
                        <?php the_sub_field('description'); ?>
                    </div>




                    <div class="btn sec-1-btn-1 hover-filled-slide-left">
                        <a href="<?php the_sub_field('button_link'); ?>" >
                        <?php the_sub_field('button_text'); ?>
                        </a>
                    </div>



                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>




<!-- 

        <div class="col-md-4 px-0">
            <div class="section-2-image">
                <img src=" <?php the_field("image_2"); ?>" alt="">
            </div>
            <div class="section-2-content">
                <div class="section-2-title">
                <?php the_field("title_2"); ?>
                </div>
                <div class="section-2-button">

                    <a href="<?php the_field("button_link_2");?>" class="base-button-2">
                        <?php the_field("button_2");?>
                    </a>

                </div>
            </div>
        </div>
        <div class="col-md-4 px-0 bg-color">
            <div class="section-3-content">
                <div class="section-3-title">
                    <?php the_field("title_3"); ?>
                </div>
                <div class="header-contact-form">

                    <?php the_content();?>
                </div>
            </div>
        </div> -->



<!-- <div class="container">
    <div class="row pd-top">
        <div class="col-md-6">
            <div class="left-section">
                <?php the_field("left_content"); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="right-section">
                <?php the_field("right_content"); ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="bottom-section">
                <?php the_field("bottom_section_title"); ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="bottom-section-button">

                <a href="<?php the_field("bottom_section_button_link");?>" class="base-button">
                    <?php the_field("bottom_section_button");?>
                </a>

            </div>
        </div>
    </div>
</div> -->


<div class="support-color">
    <div class="container">

        <div class="row plan-section">
            <div class="col-lg-4 plan-title wow fadeInUp">


                <?php the_field("support_plan_title");?>
            </div>

            <div class="col-lg-8">
                <?php the_field("support_description");?>

            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row logo-slider">
        <?php if ( have_rows('logo_seciton') ) : ?>
        <?php while( have_rows('logo_seciton') ) : the_row(); ?>
        <div class="col-lg-4 col-md-6">
            <img src="<?php the_sub_field('image'); ?>" />
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>




<div class="container">
    <div class="row">

        <div class="col-md-12 talk-section">

            <div class="bottom-section wow fadeInUp">
                <?php the_field("bottom_section_title"); ?>
            </div>

            <div class="bottom-section-button wow fadeInUp">

                <a href="<?php the_field("bottom_section_button_link");?>" class="base-button">
                    <?php the_field("bottom_section_button");?>
                </a>

            </div>
        </div>
    </div>
</div>




<div class="container-fluid">
    <div class="row bottom-blue-section"
        style="background-image:url('<?php the_field("background_bottom_up_image","options");?>');">
        <div class="col-md-6 px-0">
            <div class="footer-left-section footer-section  wow fadeInDown">

                <div class="footer-left-title">
                    <?php the_field("footer_top_left_title","options") ;?>
                    <hr>
                </div>
                <div class="footer-left-content">
                    <?php the_field("footer_top_left_content","options") ;?>
                </div>
                <div class="footer-left-number">
                   <!-- <i class="fas fa-headphones-alt"></i> -->
                    <?php the_field("footer_top_left_number","options") ;?> 
                </div>
                <div class="footer-left-number-detail">
                    <?php the_field("footer_top_left_number_detail","options") ;?>
                </div>
            </div>
        </div>
        <div class="col-md-6 px-0">
            <div class="footer-right-section footer-section  wow fadeInDown">

                <div class="footer-right-title">
                    <?php the_field("footer_top_right_title","options") ;?>
                    <hr>
                </div>
                <div class="footer-right-content">
                    <?php the_field("footer_top_right_content","options") ;?>
                </div>

            </div>
        </div>
    </div>
</div>





<?php endwhile;
endif; ?>
<?php get_footer() ?>