<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ascent
 */
?>
        </div><!-- close .*-inner (main-content) -->
    </div><!-- close .container -->
</div><!-- close .main-content -->


<?php $args = array(
  'walker'            => null,
  'max_depth'         => '',
  'style'             => 'ul',
  'callback'          => null,
  'end-callback'      => null,
  'type'              => 'all',
  'reply_text'        => 'Reply',
  'page'              => '',
  'per_page'          => '',
  'avatar_size'       => 32,
  'reverse_top_level' => null,
  'reverse_children'  => '',
  'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
  'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
); ?>


<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-md-6 h100">
        <div class="col-md-6 L1 display-table h100 relative">
                <div class="align-middle">
                    <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/includes/images/YesCredit_Logo.jpg" alt="Site Logo"></a>
                </div>
        </div>
        <div class="col-md-6 h100">
            <div class="col-md-6 L2 display-table h100 relative">
                <div class="align-middle">
                    <h5 class="text-uppercase bold">Pages</h5>
                      <?php
                      wp_nav_menu(array(
                          'theme_location' => 'main-menu',
                          'container' => false,
                          'menu_class' => 'header-nav clearfix',
                      ));
                    ?>
                </div>
            </div>
            <div class="col-md-6 L2 display-table h100 relative">
                <div class="align-middle">
                     <?php
                      wp_nav_menu(array(
                          'theme_location' => 'footer-links',
                          'container' => false,
                          'menu_class' => 'header-nav clearfix',
                      ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 h100">
        <div class="col-md-6 R1 display-table h100 relative">
            <div class="align-middle">
                <h5 class="text-uppercase bold">Recent Comments</h5>
                <div class="comment list">
                  <?php wp_list_comments( array( 'style' => 'div' ) ); ?>
              </div>
            </div>
        </div>
         <div class="col-md-6 R2 display-table h100 relative clear-padding">
            <div class="align-middle">
            <h5 class="text-uppercase bold">Need Help?</h5>
              <div class="social-share">
                    <div class="contact">
                        <span id="tel-ico"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/phone-ico.png" alt="phone"></span><span class="footer-label">(02) 479-8500</span>
                    </div>
                     <div class="support" id="support">
                        <span id="post-ico"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/tag-ico.png" alt="tag"><span class="footer-label"><a href="mailto:support@yescredit.com">support@yescredit.com</a></span>
                    </div>
                    <div class="email">
                        <span id="email-ico"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/mail-ico.png" alt="mail"><span class="footer-label">10am - 7pm, Mon - Fri</span>
                    </div>
                    <span class="spacer"></span>
                    <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.facebook.com" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.facebook.com" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
             </div> 
            </div>
         </div>
    </div>
</footer><!-- close #colophon -->

<?php if(of_get_option('enable_scroll_to_top')): ?>
    <a href="#top" id="scroll-top"></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>