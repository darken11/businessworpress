<?php
/**
 * Load files
 *
 * @package Blog_Personal
 */

/**
 * Include default theme options.
 */
require_once trailingslashit( get_template_directory() ) . 'inc/customizer/default.php';

/**
 * Load Hooks.
 */
require_once trailingslashit( get_template_directory() ) . 'inc/hook/basic.php';
require_once trailingslashit( get_template_directory() ) . 'inc/hook/custom.php';

/**
 * Implement the Custom Header feature.
 */
require trailingslashit( get_template_directory() ). '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require trailingslashit( get_template_directory() ). '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require trailingslashit( get_template_directory() ). '/inc/template-functions.php';

/**
 * Implement the Metabox.
 */
require trailingslashit( get_template_directory() ). '/inc/metabox.php';

/**
 * Customizer additions.
 */
require trailingslashit( get_template_directory() ). '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require trailingslashit( get_template_directory() ) . '/inc/jetpack.php';
}

/**
 * Register Slider Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/featured-slider.php';

/**
 * Register Promo Slider Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/promo-slider.php';

/**
 * Register Two Column Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/two-column.php';

/**
 * Register Latest Post Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/latest-post.php';

/**
 * Register Extendede Comment Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/extended-comments.php';

/**
 * Register Author Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/author/author.php';

/**
 * Register Social Media Widget.
 */
require_once trailingslashit( get_template_directory() ) . '/inc/widget/social-media.php';

/**
 * Plugin Activation Section.
 */
require trailingslashit( get_template_directory() ) . '/inc/class-tgm-plugin-activation.php';
