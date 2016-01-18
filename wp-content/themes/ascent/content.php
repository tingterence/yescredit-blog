<?php
/**
 * @package ascent
 */
?>

<?php // Styling Tip! 

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below. 
// Simply replace post_class() with post_class('panel') and check your site!   
// Remember to do this for all content templates you want to have this, 
// for example content-single.php for the post single view. ?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($get_the_ID) ); ?>
		
 <div class="col-md-6 home-post load-post">
    <div class="home-post">
        <a href="<?php echo get_post_permalink($p->ID); ?>">
            <div class="featured-image" style="background:url(<?php echo $feat_image ;?>)no-repeat 100%/cover; height: 298px;">
                <div class="mask"></div>
            </div>
        </a>
        <div class="cat-name">
            <?php $post_id =  get_the_ID(); ?>
            <?php $cat_id = wp_get_post_categories( $post_id ); ?>
            <?php echo get_cat_name($cat_id[0]);?>

        </div>
        <div class="blog-title"><?php the_title(); ?></div>
        <div class="circle-right"><img src="<?php bloginfo('template_url');?>/includes/images/right-arrow.png" alt="arrow-right"></div>
    </div>
    <div class="auth-date"><span class="auth"><?php echo the_author_meta( 'user_nicename' , the_author() ); ?></span> | <span><?php echo date("F d, Y", strtotime(get_the_date())); ?></span></div>
    <div class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt() , 20, '...&nbsp;<a href="'. get_post_permalink($p->ID) .'">Read More</a>&nbsp;' ); ?></div>
</div>