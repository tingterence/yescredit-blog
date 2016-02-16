<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="main-content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>class="h100">
<head>
<!-- Skyrocket Studios PH, Inc.
       ________________
      /  \              \
     /    \.             \  
    /      \...           \
   /        \....          \
  /          \.....         \
 /            \.......       \   
/              \........._____\
\             /.\             /
 \           /...\           /
  \         /.....\         /
   \       /.......\       /
    \     /.........\     /
     \   /...........\   /
      \ /.............\ /
      / \............./ \ 
     /   \.........../   \
    /     \........ /     \
   /       \......./       \
  /         \...../         \
 /           \.../           \ 
/____.........\./             \
\       .......\              /
 \        ......\            /
  \         .....\          /
   \          ....\        /
    \            ..\      /
     \              \    /
      \______________\__/
-->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo of_get_option('favicon'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <meta property="og:title" content="<?php bloginfo('name');?>" />
    <meta property="fb:app_id" content="1645722315695240" /> 
    <meta property="og:type"   content="website" /> 
    <meta property="og:url" content="http://yescredit.launchpad.skyrocket.ph/" />
   
    <?php 

      $my_post = get_post( get_the_ID() ); 
      $my_excerpt = $my_post->post_excerpt;

     ?>

     <?php if ($my_excerpt) : ?>
        <meta property="og:description" content="<?php echo $my_excerpt;?>." />
    <?php else: ?>
        <meta property="og:description" content="<?php bloginfo('description'); ?>." />
    <?php endif; ?> 
    
    <?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'social_thumb'); ?>
    <?php if ($fb_image) : ?>
        <meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
    <?php endif; ?>

    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="292" />
    <meta property="og:site_name" content="<?php bloginfo('name');?>" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@yescreditph">
    <meta name="twitter:title" content="<?php bloginfo('name');?>">    
    <meta name="twitter:creator" content="@yescreditph">
    
    <?php $tw_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'social_thumb'); ?>
    <?php if ($tw_image) : ?>
        <meta name="twitter:image:src" content="<?php echo $tw_image[0]; ?>" />
    <?php endif; ?>

    <meta name="twitter:domain" content="yescredit.launchpad.skyrocket.ph"> 

    <?php if ($my_excerpt) : ?>
        
    <?php else: ?>
        <meta name="description" content="<?php bloginfo('description');?>">
    <?php endif; ?> 

    <meta name="keywords" content="yes credit, yes, credit, loans">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/includes/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<?php if (is_single()): ?>
    <style>
        .addthis-smartlayers, div#at4-follow, div#at4-share, div#at4-thankyou, div#at4-whatsnext {
            padding: 0;
            margin: 0;
            display: none !important;
        }

        @media only screen and (max-width:768px) {

        .header-grid:hover .mask {
            visibility: hidden !important; 
            opacity: 0 !important;
        }

    </style>
<?php endif; ?>


<body <?php body_class("h100"); ?>>
  <?php do_action('before'); ?>
<header id="masthead" class="site-header" role="banner">
    <div class="header-top">
        <div class="container transform">
            <div class="row">
                <div class="col-sm-6">
                
                </div><!-- .col-sm-6-->
                <div class="col-sm-6 home-label">
                    <a href="http://www.yescredit.com/" target="_blank"><i class="fa fa-home"></i>&nbsp;<span class="bold">Go to</span> Yes Credit Home</a>
                </div><!-- .col-sm-6-->
            </div>
        </div>
     </div>

    <div id="header-main" class="header-bottom">
        <div class="header-bottom-inner">
            <div class="container transform">
                <div class="row">
                    <div class="col-sm-3 logo-image">
                        <div id="logo">
                            <div class="site-header-inner col-sm-12">
                                <div class="site-branding">
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                            <?php if (of_get_option('logo')): ?>
                                               <img src="<?php echo of_get_option('logo'); ?>" alt="<?php bloginfo('name'); ?>">
                                            <?php else: ?>
                                               <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/includes/images/YesCredit_Logo.jpg" alt="Site Logo"></a>
                                            <?php endif; ?>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div><!--.col-sm-3-->

                    <div class="col-sm-9 responsive-bar">
                        <div class="header-search pull-right">
                            <div id="header-search-button"><i class="fa fa-search"></i></div>
                        </div>
                        <div class="site-navigation pull-right">
                            <nav class="main-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => 'header-nav clearfix',
                            ));
                            ?>
                            </nav>
                            <div id="responsive-menu-container"></div>
                        </div><!-- .site-navigation -->
                    </div><!--.col-sm-9-->
                </div><!--.row-->
            </div><!-- .container -->
        </div><!--.header-bottom-inner-->
    </div><!--.header-bottom-->

  <?php include_once 'header-searchform.php' ?>
</header><!-- #masthead -->
<!-- Inner Pages Header -->

<?php if(!is_home()):?>
    
<div class="site-banner" style="height: 255px;">
    <div class="col-sm-12 col-md-12 right-grid clear-padding">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('banner')) ?>
            <div class="container transform relative h100">
              <div class="row h100">
                  <div class="col-xs-6 col-md-6 h100 desc-left">
                      
                  </div>
                  <div class="col-xs-6 col-md-6 relative h100 desc-right">
                        <div class="holder">
                            <?php
                                // Show an optional term description.
                                $cat_name = get_the_category();
                                $category_id = $cat_name[0]->cat_ID;
                                
                            ?>
                            <div class="header-cat-name"><?php echo $cat_name[0]->name; ?></div>
                            
                                <?php if(is_single()):  
                                    printf( '<div class="taxonomy-description">%s</div>', category_description( $category_id ) );
                                endif;?>

                                <?php if(is_archive()):  
                                    printf( '<div class="taxonomy-description">%s</div>', category_description( $category_id ) );
                                endif;?>

                            <div class="clearfix"></div>
                        </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>    
<?php else: ?>

<div class="site-banner" style="height: 465px;">
<!-- Grid Category -->

            <?php 
                $args = array(
                    'type'                     => 'post',
                    'child_of'                 => 0,
                    'parent'                   => '',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 1,
                    'hierarchical'             => 1,
                    'exclude'                  => '',
                    'include'                  => '',
                    'number'                   => '',
                    'taxonomy'                 => 'category',
                    'pad_counts'               => false 

                );
                $categories = get_categories( $args );
                $left_counter = 0;
                $right_counter = 0;
            ?>      

            <?php if($categories): foreach($categories as $cat): ?>                
                <?php
                    $cat_name = $cat->name;
                    $cat_slug = $cat->slug;
                    $cat_nicename = $cat->category_nicename;
                    $posts = query_posts( 'cat='.$cat->cat_ID.'&posts_per_page=4');
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($posts[0]->ID) );
                    $link = get_post_permalink($posts[0]->ID);
                ?>

            <?php if ($left_counter == 0): ?>
                <a href="<?php echo $link; ?>">
                    <div id="first-grid" class="header-grid col-sm-6 col-md-6 left-grid clear-padding relative" style="background: url(<?php echo $feat_image; ?>)no-repeat 100%/cover;">
                    <div class="mask"></div>
                        <div class="grid-holder">
                            <div class="headline-home headline"><?php echo $posts[0]->post_title; ?></div>
                            <div class="auth-date"><span class="auth"><?php echo the_author_meta( 'user_nicename' , $posts[0]->post_author ); ?></span> | <span><?php echo date("F d, Y", strtotime($posts[0]->post_date)); ?></span></div>
                            <div class="excerpt"><?php echo $title_char = wp_trim_words( $posts[0]->post_excerpt, 25, '...' ); ?></div> 
                        </div>
                        <div class="circle-grid-right"><img src="<?php bloginfo('template_url');?>/includes/images/grid-right-arrow.png" alt="arrow-right"></div>
                    </div>
                </a>
            <?php endif ?>
            
            <?php $left_counter ++; 
            ?>
            <?php endforeach; ?>
            <?php endif; ?>


<!-- End of Grid Category -->


    <div class="col-sm-6 col-md-6 right-grid clear-padding">

     <?php if($categories): foreach($categories as $cat): ?>
                
                <?php
                    $cat_name = $cat->name;
                    $cat_slug = $cat->slug;
                    $cat_nicename = $cat->category_nicename;
                    $posts = query_posts( 'cat='.$cat->cat_ID.'&posts_per_page=4');
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($posts[0]->ID) );
                    $link = get_post_permalink($posts[0]->ID);
                ?>

            <?php if ($right_counter == 1): ?>
                    <a href="<?php echo $link; ?>">
                        <div class="header-grid relative top-grid" style="background: url(<?php echo $feat_image; ?>)no-repeat 100%/cover;">
                             <?php $link = get_post_permalink($posts[0]->ID); ?>
                             <div class="mask"></div>
                            <div class="grid-holder">
                                <div class="width-holder">
                                    <div class="headline-home headline"><?php echo $posts[0]->post_title; ?></div>
                                    <div class="auth-date"><span class="auth"><?php echo the_author_meta( 'user_nicename' , $posts[0]->post_author ); ?></span> | <span><?php echo date("F d, Y", strtotime($posts[0]->post_date)); ?></span></div>
                                    <?php echo wp_trim_words( $posts[0]->post_excerpt, 15, '...' ); ?>
                                </div>
                            </div>
                            <div class="circle-right"><img src="<?php bloginfo('template_url');?>/includes/images/right-arrow.png" alt="arrow-right"></div>
                        </div>    
                    </a>               
            <?php endif ?>

            <?php if ($right_counter == 2): ?>
                    <a href="<?php echo $link; ?>">
                        <div class="header-grid relative bottom-grid col-sm-6 col-md-6 bottom-left" style="background: url(<?php echo $feat_image; ?>)no-repeat 100%/cover;">
                        <div class="mask"></div>
                             <div class="grid-holder">
                                 <?php $link = get_post_permalink($posts[0]->ID); ?>
                                <div class="headline-home headline"><?php echo $posts[0]->post_title; ?></div>
                                <div class="auth-date"><span class="auth"><?php echo the_author_meta( 'user_nicename' , $posts[0]->post_author ); ?></span> | <span><?php echo date("F d, Y", strtotime($posts[0]->post_date)); ?></span></div>
                                <?php echo wp_trim_words( $posts[0]->post_excerpt, 15, '...' ); ?>
                            </div>
                            <div class="circle-right"><img src="<?php bloginfo('template_url');?>/includes/images/right-arrow.png" alt="arrow-right"></div>
                        </div>    
                    </a>               
            <?php endif ?>

            <?php if ($right_counter == 3): ?>
                    <a href="<?php echo $link; ?>">
                        <div class="header-grid relative bottom-grid col-sm-6 col-md-6 bottom-left" style="background: url(<?php echo $feat_image; ?>)no-repeat 100%/cover;">
                             <?php $link = get_post_permalink($posts[0]->ID); ?>
                             <div class="mask"></div>
                            <div class="grid-holder">
                                <div class="headline-home headline"><?php echo $posts[0]->post_title; ?></div>
                                <div class="auth-date"><span class="auth"><?php echo the_author_meta( 'user_nicename' , $posts[0]->post_author ); ?></span> | <span><?php echo date("F d, Y", strtotime($posts[0]->post_date)); ?></span></div>
                                <?php echo wp_trim_words( $posts[0]->post_excerpt, 15, '...' ); ?>
                            </div>
                            <div class="circle-right"><img src="<?php bloginfo('template_url');?>/includes/images/right-arrow.png" alt="arrow-right"></div>
                        </div>  
                    </a>                 
            <?php endif ?>
            
            <?php $right_counter ++; 
            ?>
            <?php endforeach; ?>
            <?php endif; ?>
    </div>

</div>

<?php endif; ?>
<!-- 
 -->
<?php// include_once 'header-banner.php' ?>

<div class="main-content">
    <div class="container-fluid">
        <div id="content" class="main-content-inner">