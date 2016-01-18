<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ascent
 */

get_header(); ?>

<?php 

if ( have_posts() ) : while ( have_posts() ) : the_post(); 
           if ( has_post_thumbnail() ) {
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                echo '<div style="background-image:url('.$feat_image_url.');"></div>';
           }
           endwhile;
         endif;

 ?>

<div class="row">
    <div class="col-sm-9 col-md-9 reduced-paddding resize-col-left">
	<div class="load-holder">
		<?php $post_id =  get_the_ID(); ?>
	    <?php $cat_id = wp_get_post_categories( $post_id ); ?>
	    <?php $cat_name = get_cat_name($cat_id[0]);?>

	    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	    <?php query_posts( array('post_type' => 'post', 'order' => 'DESC', 'category_name' => $cat_name, 'posts_per_page' => 4, 'paged' => $paged ) ); ?>

		<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>	
			
		    <?php if ( have_posts() ) : ?>
	    
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			    <?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			    ?>

			<?php endwhile; ?>

			<?php //ascent_content_nav( 'nav-below' ); ?>
	    
		    <?php else : ?>
	    
			<?php get_template_part( 'no-results', 'archive' ); ?>
	    
		    <?php endif; ?>
	    </div>

	    <div class="clearfix"></div>

        <div id="loading-message-featured" style="margin: 5em auto; display: none; background:url(<?php echo get_template_directory_uri(); ?>/includes/images/loader.gif)no-repeat; height:48px; width:48px;"></div>

        <button id="load-more" class="center-block">Load More</button>

    </div>
    <?php get_template_part( 'custom', 'sidebar' ); ?>

<script>
    
    jQuery(function(){
    var offset = 600;
    var duration = 500;
    var page_number = 1; 
    var cat_name = '<?php echo $cat_name; ?>';

        jQuery('#load-more').click(function(){
            jQuery('#loading-message-featured').show();
                page_number ++;
    
                jQuery.post( "/wp-content/themes/ascent/load-cat-post.php", { 
                    page_number: page_number,
                    cat_name: cat_name
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
