<?php /* Template Name: contact */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class="container">
    <div class="row contact-section">
        <div class="col-md-6">
            <div class="contact-left">
                <div class=" contact-title">
                    <?php the_field("contact_title") ;?>
                    <hr>
                </div>
                <div class="contact-content">
                    <?php the_field("contact_content") ;?>
                </div>
                <div class="contact-form">
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-right">
                <div class="contact-image">
                    <img src="  <?php the_field("contact_right_image"); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



<?php endwhile;
endif; ?>
<?php get_footer() ?>