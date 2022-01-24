<?php /* Template Name: volunteer */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 px-0">
            <div class="volunteer-form">
                <?php the_field("contact_form");?>
            </div>
        </div>
        <div class="col-md-6 px-0">
            <div class="volt-right">
                <div class="vol-title">
                    <?php the_field("volt_title") ?> <hr>
                </div>
                <div class="volt-1-title">
                    <?php the_field("title") ?>
                </div>
                <div class="volt-1-title-link"><a href="">
                    <?php the_field("text_link") ?> </a>
                </div>
                <div class="volt-2-title">
                    <?php the_field("second_title") ?>
                </div>
                <div class="volt-2-title-link"> <a href="">
                    <?php the_field("second_title_link") ?>  </a>
                </div>
                <div class="volt-3-title">
                    <?php the_field("third_title") ?>
                </div>
                <div class="volt-3-title-link">
                    <?php the_field("content") ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile;
endif; ?>
<?php get_footer() ?>