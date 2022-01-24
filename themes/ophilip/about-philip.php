<?php /* Template Name: about-philip */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





        <div class="container">

            <div class="row">
                <div class="col-md-12 about-section">


                    <div class="about-title text-center">
                        <?php the_field("title_for_about"); ?>
                    </div>
                    <div class="about-subtitle text-center">

                        <?php the_field("subtitle_for_about"); ?>


                    </div>

                    <div class="about-timeline">


                        <img src="<?php the_field("timeline_image_about"); ?>" />
                    </div>


                    <div class="content-about-title text-center">
                        <?php the_field("about_content_title"); ?>

                    </div>
                    <div class="about-content">
                        <?php the_field("about_content"); ?>

                    </div>

                    <div class="about-botton-button text-center">
                        <a href="<?php the_field("content_bottom_button_link"); ?>" class="base-button"><?php the_field("content_button"); ?> </a>
                    </div>
                </div>
            </div>
        </div>





        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vti-first">
                        <a href="<?php the_field("view_the_issue_button_first_link"); ?>" class="base-button"><?php the_field("view_the_issue_button_first"); ?> </a>
                    
                        <a href="<?php the_field("view_the_issue__button_second_link"); ?>" class="base-button"><?php the_field("view_the_issue_button_second"); ?> </a>
                    </div>
                </div>
            </div>
        </div>






<?php endwhile;
endif; ?>
<?php get_footer() ?>