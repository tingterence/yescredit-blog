<?php
/**
 * The sidebar containing the main widget area
 *
 * @package ascent
 */
?>
  

    <?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
    <div class="sidebar-padder">

      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'sidebar-footer' ) ) : ?>
  
        <aside id="search" class="widget widget_search">
          <div class="display-table w100 relative h100">
            <div class="align-middle">
                <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/includes/images/YesCredit_Logo.jpg" alt="Site Logo"></a>
            </div>
          </div>
        </aside>

        <!-- About Us Widget -->
        <aside id="pages" class="widget widget_pages">
          <div class="col-md-12">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-description')) ?>
          </div>
        </aside>
    
        <aside id="pages" class="widget widget_pages">
          <div class="col-md-6">
          <h4 class="text-uppercase">Pages</h4>
              <?php
              wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => 'header-nav clearfix',
              ));
            ?>
          </div>
        </aside>

        <!-- Need Help Widget -->
        <aside id="meta" class="widget widget_meta"> 
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('need-help')) ?> 
        </aside>
  
      <?php endif; ?>

      <div class="clearfix"></div>
    </div><!-- close .sidebar-padder -->