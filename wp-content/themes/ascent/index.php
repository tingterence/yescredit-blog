<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ascent
 */

get_header(); ?>

<div class="row">
    <div class="col-sm-9 col-md-9 reduced-paddding resize-col-left">	
    <div class="load-holder">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <?php query_posts( array('post_type' => 'post', 'order' => 'DESC', 'cat' => -15, 'posts_per_page' => 4, 'paged' => $paged ) ); ?>
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($get_the_ID) ); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			?>

            <?php 

            // global $paged;
            // echo $paged; die;

             ?>

			 <div class="col-md-6 home-post load-post">
                <div class="home-post">
                    <a href="<?php echo get_post_permalink($p->ID); ?>">
                        <div class="featured-image" style="background:url(<?php echo $feat_image;?>)no-repeat 100%/cover; height: 298px;">
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
                <div class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt() , 25, '...' ); ?></div>
            </div>

		<?php endwhile; wp_reset_query();?>

	
	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

    </div>

    <div class="clearfix"></div>

        <div id="loading-message-featured" style="margin: 5em auto; display: none; background:url(<?php echo get_template_directory_uri(); ?>/includes/images/loader.gif)no-repeat; height:48px; width:48px;"></div>

        <button id="load-more" class="center-block">Load More</button>
    
    </div>
    
    <?php get_template_part( 'custom', 'sidebar' ); ?>
</div>

<script>
    
    jQuery(function(){
    var offset = 600;
    var duration = 500;
    page_number = 1; 

        jQuery('#load-more').click(function(){
            jQuery('#loading-message-featured').show();
                page_number ++;
    
                jQuery.post( "/wp-content/themes/ascent/load-post.php", { 
                    page_number: page_number
                },

                    function(data){
                        jQuery('#loading-message-featured').hide(); 
                        jQuery('.load-holder').append(data);  
                    }
                );  
        });
          
    });        

</script>

<?php get_footer(); ?>
