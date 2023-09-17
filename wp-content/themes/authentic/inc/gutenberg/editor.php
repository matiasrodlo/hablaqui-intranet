<?php
/**
 * Editor Settings.
 *
 * @package Authentic
 */

/**
 * Adds classes to <div class="editor-styles-wrapper"> tag
 */
function csco_block_editor_wrapper() {
	$post_id = get_the_ID();

	if ( ! $post_id ) {
		return;
	}

	// Set post type.
	$post_type = sprintf( 'post-type-%s', get_post_type( $post_id ) );

	// Set style align.
	$style_align = sprintf( 'style-align-%s', get_theme_mod( 'style_align', 'center' ) );

	// Set page layout.
	$default_layout = csco_get_page_layout( $post_id, 'default' );
	$page_layout    = csco_get_page_layout( $post_id );

	if ( 'layout-fullwidth' === $default_layout ) {
		$default_layout = 'layout-fullwidth';
	} else {
		$default_layout = 'layout-nofullwidth';
	}

	if ( 'layout-fullwidth' === $page_layout ) {
		$page_layout = 'layout-fullwidth';
	} else {
		$page_layout = 'layout-nofullwidth';
	}

	// Post Sidebar.
	if ( 'post' === get_post_type( $post_id ) && csco_powerkit_module_enabled( 'share_buttons' ) && powerkit_share_buttons_exists( 'post-sidebar' ) ) {
		$post_sidebar = 'post-sidebar-enabled';
	} else {
		$post_sidebar = 'post-sidebar-disabled';
	}

	// Disabled narrow fullwidth post.
	if ( 'post' === get_post_type( $post_id ) && 'layout-fullwidth' === $page_layout && ! get_theme_mod( 'post_fullwidth_narrow', true ) ) {
		$layoute_narrow = 'layout-narrow-disabled';
	} else {
		$layoute_narrow = 'layout-narrow-enabled';
	}

	if ( get_option( 'csco_enable_legacy_features', false ) ) {
		$legacy_features = 'legacy-features-enabled';
	} else {
		$legacy_features = 'legacy-features-disabled';
	}

	// Section Heading.
	$section_heading = 'section-heading-default-' . get_theme_mod( 'section_heading', 'style-1' );

	wp_enqueue_script(
		'csco-editor-wrapper',
		get_template_directory_uri() . '/js/gutenberg.js',
		array(
			'wp-editor',
			'wp-element',
			'wp-compose',
			'wp-data',
			'wp-plugins',
		),
		csco_get_theme_data( 'Version' ),
		true
	);

	wp_localize_script(
		'csco-editor-wrapper',
		'cscoGWrapper',
		array(
			'post_type'       => $post_type,
			'legacy_features' => $legacy_features,
			'style_align'     => $style_align,
			'default_layout'  => $default_layout,
			'page_layout'     => $page_layout,
			'layoute_narrow'  => $layoute_narrow,
			'post_sidebar'    => $post_sidebar,
			'section_heading' => $section_heading,
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'csco_block_editor_wrapper' );
