<?php
/**
 * Displays top navigation
 *
 * @package Base Theme
 * @subpackage Base_Theme
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'basetheme' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo basetheme_get_svg( array( 'icon' => 'bars' ) ); echo basetheme_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'basetheme' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	<?php if ( ( basetheme_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo basetheme_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'basetheme' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
