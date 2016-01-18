<?php
/**
 * Template Name: Full Width Page
 *
 *
 * @package ascent
 */

get_header(); ?>

<div class="row">
    <div class="col-sm-9 col-md-9 container reduced-paddding">

    <?php
        $posts = query_posts( array('post_type' => 'post', 'order' => 'DESC', 'cat' => -15) );
            foreach($posts as $p){
        ?>


            <!-- Start Indside Loop -->
            <div class="col-md-6 home-post">
                <div class="home-post">
                    <a href="<?php echo get_post_permalink($p->ID); ?>">
                        <div class="featured-image" style="background:url(<?php bloginfo('template_url');?>/includes/images/bar.jpg)no-repeat 100%/cover; height: 298px;">
                            <div class="mask"></div>
                        </div>
                    </a>
                    <div class="cat-name">

                        <?php $cat_id = wp_get_post_categories( $p->ID ); ?>
                        <?php echo get_cat_name($cat_id[0]);?>

                    </div>
                    <div class="blog-title"><?php echo $p->post_title; ?></div>
                    <div class="circle-right"><img src="<?php bloginfo('template_url');?>/includes/images/right-arrow.png" alt="arrow-right"></div>
                </div>
                <div class="auth-date"><span class="auth"><?php echo the_author_meta( 'user_nicename' , $p->post_author ); ?></span> | <span><?php echo date("F d, Y", strtotime($p->post_date)); ?></span></div>
                <div class="post-excerpt"><?php echo wp_trim_words( $p->post_excerpt , 25, '...' ); ?></div>
            </div>
 
            <!-- End loop -->
    <?php } ?>
    </div>
    <?php get_template_part( 'custom', 'sidebar' ); ?>
</div>
<?php get_footer(); ?>
