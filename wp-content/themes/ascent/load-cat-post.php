 <?php
	require_once("../../../wp-load.php");
	$page_number = $_POST['page_number'];
    $cat_name = $_POST['cat_name'];

    $paged = (get_query_var('paged')) ? get_query_var('paged') : $page_number; 
    query_posts( array('post_type' => 'post', 'order' => 'DESC', 'category_name' => $cat_name, 'posts_per_page' => 4, 'paged' => $paged ) ); 
?>
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

	<?php endif; ?>
