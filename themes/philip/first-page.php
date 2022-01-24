<?php /* Template Name: first-page */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container-fluid">
    <div class="row">


    <div class="col-md-6 px-0">
            <div class="left-fix-image">
               <img src="<?php the_field("first_page_left_image");?>"/> 

               <div class="logo-sec"><a href="<?php echo home_url();?>">
                            <img src="<?php the_field("header_image_logo", 'options'); ?>">

                        </a>
                    </div>
            </div>
        </div>
        <div class="col-md-6 px-0 first-page right section">
            <div class="volunteer-form">
                <?php the_field("first_page_right_contact");?>
            </div>
        </div>
        
    </div>
</div>

<?php endwhile;
endif; ?>
<?php get_footer() ?>