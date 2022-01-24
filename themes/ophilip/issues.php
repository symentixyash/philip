<?php /* Template Name: issues */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="the-issues-title wow fadeInDown">
                <?php the_field("the_issues_title"); ?>
                <hr>
            </div>
        </div>
        <div class="col-md-12">
            <div class="the-issues-content  wow fadeInDown">
                <?php the_field("the_issues_content"); ?>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">

        <?php

                    $args = array(
                        'post_type' => 'post',
                        'orderby' => "ID",
                        'order' => 'asc',
                        'category_name' => 'issues',
                      
                    );
            
                    $the_query = new WP_Query($args); 
                    // The Loop
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post(); ?>



        <div class="col-md-6">


            <div class="carda shadow-lg rounded wow fadeInDown issues-section" data-wow-duration="1.2s"
                data-wow-delay=".6s">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail();?>
                    <div class="card-body issues-section">

                        <h5 class="card-title issues-title-section"><?php the_title();?>
                            <hr>
                        </h5>
                        <!-- <div class="more-link"> <span>educations</span> </div> -->


                        <a href="<?php the_permalink();?>">
                            <div class="more-link"> <span>Learn more</span> </div>
                        </a>
                        <!-- <div class="card-text issues-content-section">
                            <?php echo wp_trim_words( get_the_content(), 15, '' ); ?>
                        </div> -->

                    </div>
                </a>
            </div>
        </div>




        <?php
                //  echo paginate_links();

                        }
                                    } 
                                    
                                    else {
                                        // no posts found
                                    }

                                    /* Restore original Post Data */
                                    wp_reset_postdata();

                                    ?>
        <!-------end  query here---->


    </div>

</div>



<?php endwhile;
endif; ?>
<?php get_footer() ?>