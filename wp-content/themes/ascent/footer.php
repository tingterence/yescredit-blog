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
    <div class="container animated fadeInLeft transform">
        <div class="row">
            <div class="site-footer-inner col-sm-12 clearfix">
            <?php get_sidebar( 'footer' ); ?>
            </div>  
        </div>
    </div><!-- close .container -->
</footer><!-- close #colophon -->

<?php if(of_get_option('enable_scroll_to_top')): ?>
    <a href="#top" id="scroll-top"></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>

