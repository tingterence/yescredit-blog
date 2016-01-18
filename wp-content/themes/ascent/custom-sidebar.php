<?php
/**
 * The sidebar containing the main widget area
 *
 * @package ascent
 */
?>

    <div class="col-sm-3 col-md-3 clear-padding resize-col-right">
        <div class="ads">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-ads')) ?>
        </div>
        
        <div class="side-bar-social">
            <div class="social-share">
                <h5 class="share-label text-uppercase">Follow us on</h5>
                <a href="http://www.facebook.com/yescreditph" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/yescreditph" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="http://www.instagram.com/yescredit" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>  
        </div>
        
        <div class="featured-tags">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-tag')) ?>
        </div>
        <div class="featured-blog">
            <h4 class="text-uppercase widget-title">Most Recent</h4>

            <?php
            $posts = query_posts( array('post_type' => 'post', 'order' => 'DESC', 'category_name' => 'Featured', 'showposts' => 6) );
            $link = get_post_permalink($posts[0]->ID); 
            $counter = 1;
                foreach($posts as $p){
            ?>
                <!-- Start Indside Loop -->
                <div class="entry">
                    <div class="col-sm-2 col-md-2 clear-padding"><span class="counter"><?php echo $counter ?></span></div>
                    <div class="col-sm-10 col-md-10 clear-padding sidebar-blog">
                        <div class="blog-title"><a href="<?php echo $link; ?>"><?php echo substr( strip_tags( $p->post_title ), 0, 32) . '...'; ?></a></div>
                        <div class="author"><?php echo the_author_meta( 'user_nicename' , $p->post_author ); ?></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- End loop -->
        <?php $counter ++; } ?>

        </div>

        <div class="archives">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-archives')) ?>
        </div>
    </div>
