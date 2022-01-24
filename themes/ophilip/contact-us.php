<?php /* Template Name: contact-us */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class="container-fluid">
    <div class="row contact-us-section">
        <div class="col-md-6">
            <div class="contact-us-image">
                <img src="  <?php the_field("contact_us_left_image"); ?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-us-right">
                <div class="contact-us-title">
                    <?php the_field("contact_us_right_title") ;?>
                </div>
                <div class="contact-us-form">
                    <?php the_content();?>
                </div>
                <div class="contact-us-button">

                    <a href="<?php the_field('contact_us_button_link'); ?>" class="contact-us-btn">
                        <?php the_field('contact_us_button'); ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>



<?php endwhile;
endif; ?>
<?php get_footer() ?>