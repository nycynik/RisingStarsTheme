<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RisingStars
 */

?>

</div><!-- #content -->

<footer id="colophon" class="container-fluid">

    <div class="container">
        <div id="footer-sidebar" class="row">
            <div id="footer-sidebar1" class="col">
                <?php
                if (is_active_sidebar('footer-sidebar-1')) {
                    dynamic_sidebar('footer-sidebar-1');
                }
                ?>
            </div>
            <div id="footer-sidebar2" class="col">
                <?php
                if (is_active_sidebar('footer-sidebar-2')) {
                    dynamic_sidebar('footer-sidebar-2');
                }
                ?>
            </div>
            <div id="footer-sidebar3" class="col">
                <?php
                if (is_active_sidebar('footer-sidebar-3')) {
                    dynamic_sidebar('footer-sidebar-3');
                }
                ?>
            </div>

        </div>
    </div>

    <div class="row footer-bottom">
        <div class="col">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'risingstars')); ?>"><span class="site-name"><?php echo get_bloginfo($show, $filter); ?></span>
                <span class="sep"> | </span>&copy; <?php echo date("Y"); ?> All Rights Reserved.</a>
        </div>
    </div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
