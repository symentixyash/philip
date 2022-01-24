<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="bg-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <hr class="single-hr">
                    <!-- <div class="image">
                        <?php the_post_thumbnail();?>
                    </div> -->
                    <div class="card-bg">
                        <?php the_content();?>
                    </div>
                    <div class="single-more-link text-center"> <a href="<?php the_field("back_to_issue_url","options");?>"
                            class="base-button"> <?php the_field("back_to_issue","options");?> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php endwhile;
endif; ?>

<?php get_footer() ?>