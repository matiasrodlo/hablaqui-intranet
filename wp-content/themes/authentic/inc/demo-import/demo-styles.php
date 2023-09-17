<?php
/**
 * Theme Demo Styles
 *
 * @package Authentic
 */

/**
 * Set theme demo styles
 */
function csco_theme_demo_styles() {
	$styles = array(
		// Theme mods imported with every demo.
		'common_mods' => array(),
		// Specific demos.
		'demos' =>
		array('authentic' => array(
						'name'              => 'Authentic',
						'preview_image_url' => '/images/demo-import/authentic.png',
						'preset'            => 'authentic',
						'mods'              => array (
		  'home_slider' => '1',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'post_page_header_default' => true,
		  'post_page_header' => 'small',
		  'color_text_secondary' => '#a3a3a3',
		  'color_footer_text' => '#a0a0a0',
		  'color_footer_title' => '#777777',
		  'navbar_multi_column_widgetized_display' => true,
		  'navbar_single_column_widgetized_display' => true,
		  'navbar_single_column_widgetized_image' => 489,
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_footer_default' => false,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'halignleft',
		  'navbar_single_column_image' => 466,
		),
						'mods_typekit'      => array (
		),
					), 'heartbeat' => array(
						'name'              => 'Heartbeat',
						'preview_image_url' => '/images/demo-import/heartbeat.png',
						'preset'            => 'heartbeat',
						'mods'              => array (
		  'home_slider' => '1',
		  'layout_archive_type' => 'list',
		  'layout_first_post' => '',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'home_tiles' => '',
		  'home_tiles_layout' => '3',
		  'home_tiles_padding' => '10px',
		  'layout_more_button' => '',
		  'topbar' => '',
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => '',
		  'header_content_left_social_accounts_limit' => '5',
		  'header_content_right_select' => 'button',
		  'header_content_right_button_link' => '#',
		  'navbar_search' => '1',
		  'navbar_sticky' => '',
		  'home_tiles_height' => '470px',
		  'colors_navbar_submenu_bg' => '#161616',
		  'colors_navbar_submenu_borders_toggle_next' => '',
		  'colors_navbar_submenu_items_links' => '#969696',
		  'colors_navbar_submenu_items_links_active' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => '',
		  'colors_navbar_submenu_links_bg_hover' => '#161616',
		  'colors_navbar_submenu_links_bg_active' => '#161616',
		  'color_footer_bg' => '#f7f7f7',
		  'color_footer_text' => '#5b5b5b',
		  'color_footer_title' => '#0a0a0a',
		  'color_footer_link' => '#0a0a0a',
		  'color_footer_link_hover' => '#7c7c7c',
		  'color_footer_border' => '#efefef',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#0273be',
		  'color_footer_btn_bg_hover' => '#047cd1',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'color_btn_primary_bg' => '#efefef',
		  'color_btn_primary_bg_hover' => '#efefef',
		  'color_btn_primary_text' => '#303030',
		  'color_btn_primary_text_hover' => '#0a0a0a',
		  'typography_buttons' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05rem',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'subsets' => '',
			'variant' => '700',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'home_slider_heading' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '15px',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_carousel' => '',
		  'header_description_font' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '14px',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'effects_parallax' => '',
		  'effects_sticky_sidebar_method' => 'stick-last',
		  'layout_widgets_sidebar' => 'sidebar-main',
		  'style_align' => 'left',
		  'home_slider_type' => 'boxed',
		  'home_slider_total' => '3',
		  'home_slider_height' => '500px',
		  'home_slider_button' => '',
		  'colors_navbar_submenu_items_links_hover' => '#ffffff',
		  'footer_subscribe_title' => 'Sign Up for Our Newsletters',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'color_post_paragraph' => '#777777',
		  'post_page_header_default' => false,
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'footer_instagram_username' => '',
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#161616',
		  'color_widgetized_submenu_text' => '#cccccc',
		  'color_widgetized_submenu_text_secondary' => '#ffffff',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_border' => '#2d2d2d',
		  'color_widgetized_submenu_btn_text' => '#ffffff',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_color_text' => '#ffffff',
		),
						'mods_typekit'      => array (
		  'typography_base' =>
		  array (
			'font-family' => 'source-sans-pro',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'source-sans-pro',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.025rem',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'source-sans-pro',
			'variant' => 'regular',
			'subsets' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'proxima-soft',
			'subsets' => '',
			'variant' => '500',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'proxima-soft',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '13px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => '&quot;proxima-soft&quot;,sans-serif',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '2px',
			'text-transform' => 'uppercase',
			'font-weight' => '500',
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => '&quot;proxima-soft&quot;,sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '22px',
			'letter-spacing' => '2px',
			'text-transform' => 'uppercase',
			'font-weight' => '0',
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => '&quot;proxima-soft&quot;,sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '22px',
			'letter-spacing' => '2px',
			'text-transform' => 'uppercase',
			'font-weight' => '0',
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => '&quot;proxima-soft&quot;,sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '1.75rem',
			'letter-spacing' => '2px',
			'text-transform' => 'uppercase',
			'font-weight' => '0',
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'proxima-soft',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'proxima-soft',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		),
					), 'visualtherapy' => array(
						'name'              => 'Visual Therapy',
						'preview_image_url' => '/images/demo-import/visualtherapy.png',
						'preset'            => 'visualtherapy',
						'mods'              => array (
		  'home_slider' => '',
		  'home_carousel' => false,
		  'layout_archive_type' => 'grid',
		  'layout_orientation' => 'portrait',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Visual Therapy',
		  'navbar_logo_text' => 'Visual<br>Therapy',
		  'offcanvas_logo_text' => 'Visual<br>Therapy',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'topbar' => '',
		  'header' => '',
		  'navbar_height' => '100px',
		  'navbar_search' => '1',
		  'navbar_social' => false,
		  'navbar_social_accounts_limit' => '3',
		  'navbar_cart' => '1',
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '16px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
			'line-height' => '1',
		  ),
		  'navbar_social_accounts_counts' => '1',
		  'layout' => 'layout-sidebar-right',
		  'layout_columns' => '3',
		  'layout_first_post' => '',
		  'typography_base' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => '300',
			'subsets' => 'Array',
			'font-size' => '1.0625rem',
			'letter-spacing' => '0px',
			'font-weight' => 300,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' => 'Array',
			'variant' => '300',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 300,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' => 'Array',
			'variant' => '300',
			'font-size' => '1.25rem',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'font-weight' => '300',
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'layout_infinite_load' => '',
		  'layout_summary' => '1',
		  'layout_more_button' => '',
		  'style_align' => 'left',
		  'color_btn_primary_text' => '#0a0a0a',
		  'color_btn_primary_text_hover' => '#0a0a0a',
		  'color_btn_primary_bg' => '#f2f2f2',
		  'color_btn_primary_bg_hover' => '#f2f2f2',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'footer_logo_text' => 'Visual<br>Therapy',
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '18px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
			'line-height' => '1',
		  ),
		  'color_footer_bg' => '#f9f9f9',
		  'color_footer_link' => '#0a0a0a',
		  'color_footer_border' => '#eaeaea',
		  'offcanvas_topbar_height' => '100px',
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '16px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.8125rem',
			'letter-spacing' => '-0.012em',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'layout_meta' => '',
		  'effects_parallax' => '',
		  'home_tiles_meta' => '',
		  'home_tiles_button' => '',
		  'home_slider_meta' => '',
		  'home_slider_button' => '',
		  'home_layout_default' => true,
		  'home_layout' => 'layout-fullwidth',
		  'post_layout_default' => '',
		  'header_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'subsets' => 'Array',
			'font-size' => '22px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '600',
			'font-style' => 'normal',
		  ),
		  'footer_instagram_username' => '',
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => '600',
			'subsets' => 'Array',
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '600',
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' => 'Array',
			'variant' => '300',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '300',
			'font-style' => 'normal',
		  ),
		  'home_slider_height' => '480px',
		  'jquery_in_footer' => '1',
		  'border_radius' => '0px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'post_layout' => 'layout-fullwidth',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		),
						'mods_typekit'      => array (
		),
					), 'thestylecurator' => array(
						'name'              => 'The Style Curator',
						'preview_image_url' => '/images/demo-import/thestylecurator.png',
						'preset'            => 'thestylecurator',
						'mods'              => array (
		  'home_slider' => '',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'grid',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => true,
		  'layout_widgets_repeat' => false,
		  'header_logo_text' => 'The Style Curator',
		  'navbar_logo_text' => 'The Style Curator',
		  'offcanvas_logo_text' => 'The Style Curator',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_height' => '400px',
		  'header_home_only' => '1',
		  'header_background' => '1',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/header-background.jpg',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'topbar' => '',
		  'header_parallax' => '1',
		  'header_content_right_select' => 'social',
		  'header_content_right_social_accounts_labels' => '',
		  'header_content_right_social_accounts_limit' => '5',
		  'header_logo_font' =>
		  array (
			'font-family' => '-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '6rem',
			'letter-spacing' => '-3px',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'color_presets' => 'island-paradise',
		  'color_body_bg' => '#ffffff',
		  'color_text' => '#161616',
		  'color_text_secondary' => '#c9c9c9',
		  'color_links' => '#0a0a0a',
		  'color_links_hover' => '#97d5e0',
		  'colors_borders' => '#eeeeee',
		  'colors_accent' => '#f6fbfd',
		  'color_headings' => '#000000',
		  'color_headings_links' => '#000000',
		  'color_headings_links_hover' => '#a0a0a0',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_text_hover' => '#ffffff',
		  'color_btn_primary_bg' => '#97d5e0',
		  'color_btn_primary_bg_hover' => '#97d5e0',
		  'color_btn_secondary_text' => '#a0a0a0',
		  'color_btn_secondary_text_hover' => '#000000',
		  'color_btn_secondary_bg' => '#eeeeee',
		  'color_btn_secondary_bg_hover' => '#f8f8f8',
		  'colors_logo_text' => '#000000',
		  'colors_logo_text_hover' => '#a0a0a0',
		  'colors_logo_description' => '#a0a0a0',
		  'colors_navbar_bg' => 'rgba(239,246,250,0.96)',
		  'colors_navbar_borders' => '',
		  'colors_navbar_main_links' => '#0a0a0a',
		  'colors_navbar_main_links_hover' => '#757575',
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_borders_toggle_next' => '1',
		  'colors_navbar_submenu_borders' => '#efefef',
		  'colors_navbar_submenu_items_links' => '#939393',
		  'colors_navbar_submenu_items_links_hover' => '#0a0a0a',
		  'colors_navbar_submenu_items_links_active' => '#0a0a0a',
		  'colors_navbar_submenu_items_borders_toggle_next' => '1',
		  'colors_navbar_submenu_items_borders' => '#ededed',
		  'colors_topbar_bg_toggle_next' => '',
		  'colors_topbar_bg' => '#ffffff',
		  'colors_topbar_borders' => '1',
		  'colors_topbar_main_links' => '#a0a0a0',
		  'colors_topbar_main_links_hover' => '#97d5e0',
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_links_hover' => '#97d5e0',
		  'colors_offcanvas_navbar_bg' => 'rgba(239,246,250,0.96)',
		  'colors_offcanvas_borders' => '',
		  'color_post_links' => '#000000',
		  'color_post_links_hover' => '#97d5e0',
		  'color_category' => '#97d5e0',
		  'color_category_hover' => '#97d5e0',
		  'color_selection_text' => '#000000',
		  'color_selection_background' => '#eeeeee',
		  'color_blockquote' => '#292929',
		  'color_leadin_dropcap' => '#292929',
		  'color_footer_bg' => '#232323',
		  'color_footer_text' => '#a0a0a0',
		  'color_footer_title' => '#777777',
		  'color_footer_link' => '#ffffff',
		  'color_footer_link_hover' => '#a0a0a0',
		  'color_footer_border' => '#2b2b2b',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_text_hover' => '#ffffff',
		  'color_footer_btn_bg' => '#97d5e0',
		  'color_footer_btn_bg_hover' => '#97d5e0',
		  'color_misc_overlay' => 'rgba(44,47,48,0.25)',
		  'color_misc_overlay_hover' => 'rgba(44,47,48,0.5)',
		  'header_video_start' => '0',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-overlay-2x.png',
		  'home_carousel_orientation' => 'portrait',
		  'home_carousel_title' => '',
		  'typography_menus' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'Amiri',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '600',
			'subsets' => 'Array',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 600,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Amiri',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Amiri',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '300',
			'subsets' => 'Array',
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => '300',
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'navbar_search' => '1',
		  'navbar_height' => '60px',
		  'offcanvas_topbar_height' => '60px',
		  'navbar_cart' => '1',
		  'typography_base' =>
		  array (
			'font-family' => 'Amiri',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '16px',
			'letter-spacing' => '0',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.0625em',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Amiri',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'layout_meta' => '1',
		  'layout_summary' => '',
		  'layout_more_button' => '',
		  'footer_instagram_username' => '',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'home_carousel_source' => 'category',
		  'home_carousel_source_category_slug' => 'lifestyle',
		  'home_carousel_exclude' => '1',
		  'home_carousel_meta' => '',
		  'color_post_paragraph' => '#424242',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-small.png',
		  'navbar_logo_default_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-tiny.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-overlay-tiny.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-overlay-small.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-overlay-small.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-overlay.png',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-tiny.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/thestylecurator/wp-content/uploads/sites/5/2017/10/thestylecurator-small.png',
		  'post_carousel_orientation' => 'portrait',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'layout_widgets_sidebar' => 'sidebar-main',
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_image' => 491,
		  'navbar_single_column_title' => 'Newsletter',
		  'colors_navbar_bg_toggle_next' => true,
		),
						'mods_typekit'      => array (
		),
					), 'gossip' => array(
						'name'              => 'Gossip Daily',
						'preview_image_url' => '/images/demo-import/gossip.png',
						'preset'            => 'gossip',
						'mods'              => array (
		  'home_slider' => '',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Gossip',
		  'navbar_logo_text' => 'Gossip',
		  'offcanvas_logo_text' => 'Gossip',
		  'home_tiles' => '',
		  'home_tiles_padding' => '1px',
		  'typography_base' =>
		  array (
			'font-family' => 'Lora',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '4rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#333333',
		  'colors_navbar_borders' => '',
		  'colors_navbar_bg' => 'rgba(25,25,25,0.94)',
		  'colors_navbar_main_links' => '#cecece',
		  'colors_navbar_main_links_hover' => '#ffffff',
		  'colors_topbar_bg_toggle_next' => '1',
		  'colors_topbar_bg' => '#303030',
		  'colors_topbar_borders' => '',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'header_layout' => 'center',
		  'header_height' => '200px',
		  'header_home_only' => '1',
		  'header_background' => '1',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/header-background.jpg',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'header_parallax' => '1',
		  'topbar' => '',
		  'navbar_social' => false,
		  'navbar_social_accounts_limit' => '3',
		  'navbar_cart' => '1',
		  'navbar_alignment' => 'left',
		  'navbar_search' => '1',
		  'home_carousel_title' => '',
		  'layout' => 'layout-sidebar-right',
		  'post_layout_default' => '',
		  'layout_more_button' => '',
		  'layout_widgets_sidebar' => 'sidebar-main',
		  'header_video_url' => 'https://www.youtube.com/watch?v=3TKE5lx5r_M',
		  'header_video_start' => '0',
		  'header_video_end' => '0',
		  'header_logo_select' => 'image',
		  'header_logo_overlay_url' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/gossip-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/gossip-overlay-2x.png',
		  'home_carousel_orientation' => 'square',
		  'header_logo_default_url' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/gossip.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/gossip-2x.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/gossip-overlay-small.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/gossip/wp-content/uploads/sites/6/2017/11/gossip-overlay.png',
		  'footer_instagram_username' => '',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'widgets',
			2 => 'instagram',
			3 => 'info',
		  ),
		  'layout_reduce_margin' => '1',
		  'colors_navbar_submenu_bg' => '#0a0a0a',
		  'colors_navbar_submenu_borders_toggle_next' => '',
		  'colors_navbar_submenu_items_links' => '#9b9b9b',
		  'colors_navbar_submenu_items_links_hover' => '#ffffff',
		  'colors_navbar_submenu_items_links_active' => '#ffffff',
		  'colors_navbar_submenu_items_borders' => '#282828',
		  'color_btn_primary_bg' => '#0a0a0a',
		  'home_slider_padding' => '1px',
		  'home_slider_height' => '400px',
		  'layout_first_post' => '1',
		  'layout_infinite_load' => '1',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'home_tiles_layout' => '8',
		  'home_tiles_button' => '',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_slider_meta' => '',
		  'colors_navbar_social_icons' => '#dddddd',
		  'colors_navbar_social_icons_hover' => '#ffffff',
		  'colors_navbar_social_text_hover' => '#ffffff',
		  'colors_topbar_social_icons' => '#dddddd',
		  'colors_topbar_social_icons_hover' => '#ffffff',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#000000',
		  'color_widgetized_submenu_title' => '#ffffff',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_border' => '#232323',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_color_text' => '#ffffff',
		  'section_heading_footer_default' => false,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'ltc-bodoni-175',
			'variant' => 'regular',
			'subsets' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'ltc-bodoni-175',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'ltc-bodoni-175',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => '&quot;ltc-bodoni-175&quot;,serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '9rem',
			'letter-spacing' => '-0.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => '&quot;ltc-bodoni-175&quot;,serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '24px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => '&quot;ltc-bodoni-175&quot;,serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '24px',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => '&quot;ltc-bodoni-175&quot;,serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.05rem',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' => '',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		),
					), 'luxemag' => array(
						'name'              => 'Luxe Mag',
						'preview_image_url' => '/images/demo-import/luxemag.png',
						'preset'            => 'luxemag',
						'mods'              => array (
		  'home_slider' => '',
		  'home_carousel' => '',
		  'layout_archive_type' => 'grid',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Luxe ',
		  'navbar_logo_text' => 'Luxe',
		  'offcanvas_logo_text' => 'Luxe',
		  'home_tiles' => '1',
		  'home_tiles_padding' => '40px',
		  'header_logo_font' =>
		  array (
			'font-family' => '&quot;ltc-bodoni-175&quot;,serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '5rem',
			'letter-spacing' => '-0.1rem',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'header_description_text' => '',
		  'header_height' => '160px',
		  'header_description_font' =>
		  array (
			'font-family' => '&#039;futura-pt&#039;,sans-serif',
			'variant' => '300',
			'subsets' => '',
			'font-size' => '20px',
			'letter-spacing' => '3px',
			'text-transform' => 'uppercase',
			'font-weight' => '300',
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1.125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_height' => '80px',
		  'layout' => 'layout-sidebar-right',
		  'effects_parallax' => '',
		  'post_layout_default' => '',
		  'layout_columns' => '3',
		  'layout_first_post' => '',
		  'layout_more_button' => '',
		  'home_tiles_layout' => '3',
		  'border_radius' => '0px',
		  'style_align' => 'left',
		  'home_tiles_meta' => '',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_tiles_exclude' => '1',
		  'navbar_sticky' => '1',
		  'footer_instagram_username' => '',
		  'color_footer_bg' => '#ffffff',
		  'color_footer_text' => '#494949',
		  'color_footer_title' => '#0a0a0a',
		  'color_footer_link' => '#0a0a0a',
		  'color_footer_border' => '#ededed',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_logo_text' => 'Luxe',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'widgets',
			2 => 'info',
			3 => 'instagram',
		  ),
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => '',
		  'header_content_right_select' => 'button',
		  'header_content_right_button_text' => 'Buy Now',
		  'header_content_right_button_link' => '#',
		  'topbar_content_right_select' => 'menu',
		  'topbar_content_right_menu' => '20',
		  'navbar_search' => '1',
		  'header_content_right_button_icon' => 'cart',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#0a0a0a',
		  'color_btn_primary_bg_hover' => '#f54646',
		  'color_post_links' => '#000000',
		  'color_post_links_hover' => '#a0a0a0',
		  'header_logo_select' => 'image',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/luxemag/wp-content/uploads/sites/7/2017/11/luxemag-2x.png',
		  'header_logo_default_url' => 'https://authentictheme.com/luxemag/wp-content/uploads/sites/7/2017/11/luxemag.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/luxemag/wp-content/uploads/sites/7/2017/11/luxemag-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/luxemag/wp-content/uploads/sites/7/2017/11/luxemag-overlay-2x.png',
		  'offcanvas_topbar_height' => '80px',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'color_post_paragraph' => '#777777',
		  'post_layout' => 'layout-fullwidth',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		),
						'mods_typekit'      => array (
		  'typography_menus' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' => '',
			'variant' => '500',
			'font-size' => '1.125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '0.875rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '0.875rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => '&quot;futura-pt&quot;,sans-serif',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '24px',
			'letter-spacing' => '10px',
			'text-transform' => 'uppercase',
			'font-weight' => '500',
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => '&quot;futura-pt&quot;,sans-serif',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '24px',
			'letter-spacing' => '10px',
			'text-transform' => 'uppercase',
			'font-weight' => '500',
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => '&quot;futura-pt&quot;,sans-serif',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '24px',
			'letter-spacing' => '10px',
			'text-transform' => 'uppercase',
			'font-weight' => '500',
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 500,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-family' => 'acumin-pro',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'acumin-pro',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		),
					), 'grind' => array(
						'name'              => 'Grind',
						'preview_image_url' => '/images/demo-import/grind.png',
						'preset'            => 'grind',
						'mods'              => array (
		  'home_slider' => '',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Grind.',
		  'navbar_logo_text' => 'Grind.',
		  'offcanvas_logo_text' => 'Grind.',
		  'home_tiles' => '1',
		  'home_tiles_padding' => '1px',
		  'colors_navbar_bg' => 'rgba(255,255,255,0.98)',
		  'colors_navbar_borders' => '1',
		  'colors_navbar_main_links' => '#0a0a0a',
		  'topbar' => '',
		  'header' => '',
		  'navbar_height' => '80px',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
		  ),
		  'style_align' => 'left',
		  'home_tiles_layout' => '4',
		  'home_tiles_meta' => '',
		  'home_tiles_button' => '',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
		  ),
		  'navbar_toggle' => '',
		  'navbar_search' => '1',
		  'navbar_social' => false,
		  'layout_first_post' => '',
		  'layout_reduce_margin' => '1',
		  'layout_more_button' => '',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#f73832',
		  'color_post_links' => '#000000',
		  'color_category' => '#f73832',
		  'border_radius' => '100px',
		  'typography_headings' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'subsets' => '',
			'font-weight' => '600',
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'subsets' => 'Array',
			'font-size' => '1.25rem',
			'letter-spacing' => '',
			'text-transform' => 'none',
			'font-weight' => '600',
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'layout_summary' => '1',
		  'layout_meta' => '',
		  'color_headings_links_hover' => '#f73832',
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '36px',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '36px',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'offcanvas_topbar_height' => '80px',
		  'typography_menus' =>
		  array (
			'font-family' => 'Poppins',
			'subsets' => 'Array',
			'variant' => '600',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 600,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'footer_logo_text' => 'Grind.',
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '36px',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'layout_widgets_sidebar' => 'sidebar-main',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#f73832',
		  'home_carousel_meta' => '',
		  'color_text_secondary' => '#c1c1c1',
		  'color_links' => '#0a0a0a',
		  'color_links_hover' => '#f73832',
		  'typography_text_small' =>
		  array (
			'font-family' => 'Poppins',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.1125em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'color_selection_background' => '#f73832',
		  'colors_navbar_bg_toggle_next' => '1',
		  'colors_navbar_main_links_hover' => '#f73832',
		  'color_footer_bg' => '#f7f7f7',
		  'color_footer_text' => '#727272',
		  'color_footer_title' => '#0a0a0a',
		  'color_footer_link' => '#0a0a0a',
		  'color_footer_border' => '#eaeaea',
		  'header_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '3rem',
			'letter-spacing' => '-0.1rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'colors_navbar_submenu_items_links_hover' => '#f73832',
		  'colors_navbar_submenu_items_links_active' => '#f73832',
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_borders_toggle_next' => '1',
		  'colors_navbar_submenu_borders' => '#e8e8e8',
		  'colors_navbar_submenu_items_links' => '#666666',
		  'colors_navbar_submenu_items_borders' => '#262626',
		  'colors_navbar_submenu_items_borders_toggle_next' => '',
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '2rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '2rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Poppins',
			'subsets' => 'Array',
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-.05em',
			'text-transform' => 'none',
			'font-weight' => '600',
			'font-style' => 'normal',
		  ),
		  'colors_navbar_social_icons' => '#000000',
		  'colors_navbar_social_icons_hover' => '#f73832',
		  'colors_topbar_main_links_hover' => '#f73832',
		  'colors_topbar_social_icons_hover' => '#f73832',
		  'color_headings_title_blocks' => '#f73832',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'widgets',
			2 => 'info',
			3 => 'instagram',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'post_author_type' => 'compact',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'color_post_links_hover' => '#6d6d6d',
		  'color_category_hover' => '#000000',
		  'section_heading_color_text' => '#f73832',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		),
						'mods_typekit'      => array (
		),
					), 'another' => array(
						'name'              => 'Another',
						'preview_image_url' => '/images/demo-import/another.png',
						'preset'            => 'another',
						'mods'              => array (
		  'home_slider' => '',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'AnOther',
		  'navbar_logo_text' => 'AnOther',
		  'offcanvas_logo_text' => 'AnOther',
		  'home_tiles' => '1',
		  'home_tiles_padding' => '30px',
		  'color_presets' => 'dark',
		  'color_body_bg' => '#232323',
		  'color_text' => '#dbdbdb',
		  'color_text_secondary' => '#595959',
		  'color_links' => '#cccccc',
		  'color_links_hover' => '#ffffff',
		  'colors_borders' => '#2b2b2b',
		  'colors_accent' => '#1e1e1e',
		  'color_headings' => '#ffffff',
		  'color_headings_links' => '#ffffff',
		  'color_headings_links_hover' => '#cccccc',
		  'color_btn_primary_text' => '#eeeeee',
		  'color_btn_primary_text_hover' => '#ffffff',
		  'color_btn_primary_bg' => '#474747',
		  'color_btn_primary_bg_hover' => '#282828',
		  'color_btn_secondary_text' => '#a0a0a0',
		  'color_btn_secondary_text_hover' => '#000000',
		  'color_btn_secondary_bg' => '#eeeeee',
		  'color_btn_secondary_bg_hover' => '#f8f8f8',
		  'colors_logo_text' => '#ffffff',
		  'colors_logo_text_hover' => '#eeeeee',
		  'colors_logo_description' => '#888888',
		  'colors_navbar_bg' => '#232323',
		  'colors_navbar_borders' => '1',
		  'colors_navbar_main_links' => '#eeeeee',
		  'colors_navbar_main_links_hover' => '#ffffff',
		  'colors_navbar_submenu_bg' => '#1e1e1e',
		  'colors_navbar_submenu_borders_toggle_next' => '1',
		  'colors_navbar_submenu_borders' => '#1e1e1e',
		  'colors_navbar_submenu_items_links' => '#eeeeee',
		  'colors_navbar_submenu_items_links_hover' => '#ffffff',
		  'colors_navbar_submenu_items_links_active' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => '1',
		  'colors_navbar_submenu_items_borders' => '#2b2b2b',
		  'colors_topbar_bg_toggle_next' => '',
		  'colors_topbar_bg' => '#232323',
		  'colors_topbar_borders' => '1',
		  'colors_topbar_main_links' => '#dbdbdb',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'colors_offcanvas_navbar_links' => '#eeeeee',
		  'colors_offcanvas_navbar_links_hover' => '#ffffff',
		  'colors_offcanvas_navbar_bg' => '#232323',
		  'colors_offcanvas_borders' => '1',
		  'color_post_links' => '#cccccc',
		  'color_post_links_hover' => '#ffffff',
		  'color_category' => '#ffffff',
		  'color_category_hover' => '#cccccc',
		  'color_selection_text' => '#000000',
		  'color_selection_background' => '#eeeeee',
		  'color_blockquote' => '#ffffff',
		  'color_leadin_dropcap' => '#ffffff',
		  'color_footer_bg' => '#111111',
		  'color_footer_text' => '#a0a0a0',
		  'color_footer_title' => '#777777',
		  'color_footer_link' => '#ffffff',
		  'color_footer_link_hover' => '#a0a0a0',
		  'color_footer_border' => '#242424',
		  'color_footer_btn_text' => '#a0a0a0',
		  'color_footer_btn_text_hover' => '#ffffff',
		  'color_footer_btn_bg' => '#242424',
		  'color_footer_btn_bg_hover' => '#141414',
		  'color_misc_overlay' => 'rgba(44,47,48,0.25)',
		  'color_misc_overlay_hover' => 'rgba(44,47,48,0.5)',
		  'typography_base' =>
		  array (
			'font-family' => 'Lora',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Lora',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '600',
			'subsets' => 'Array',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-weight' => 600,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-weight' => 700,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => '600',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-weight' => 600,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-weight' => 400,
			'font-style' => 'normal',
			'font-backup' => '',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '2rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '2rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '2.5rem',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'color_headings_title_blocks' => '#ffffff',
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '22px',
			'letter-spacing' => '-.015em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'footer_logo_text' => 'AnOther',
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '22px',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons_hover' => '#ffffff',
		  'colors_topbar_social_text' => '#dbdbdb',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'home_slider_height' => '500px',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
		  ),
		  'home_tiles_exclude' => '1',
		  'home_tiles_layout' => '2',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '1.75rem',
			'letter-spacing' => '-.0125em',
		  ),
		  'header_description_text' => 'Culture, Music and Art Magazine',
		  'header_description_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '300',
			'subsets' => 'Array',
			'font-size' => '14px',
			'letter-spacing' => '-.2px',
			'text-transform' => 'none',
			'font-weight' => '300',
			'font-style' => 'normal',
		  ),
		  'header_height' => '120px',
		  'colors_navbar_social_icons' => '#ffffff',
		  'colors_navbar_social_icons_hover' => '#ffffff',
		  'colors_navbar_social_text_hover' => '#ffffff',
		  'navbar_social' => '',
		  'footer_instagram_username' => '',
		  'typography_search' =>
		  array (
			'font-family' => 'Playfair Display',
			'subsets' => 'Array',
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-weight' => '700',
			'font-style' => 'normal',
		  ),
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_post_paragraph' => '#dbdbdb',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'section_heading_color_text' => '#ffffff',
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_default' => false,
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_color_text' => '#ffffff',
		  'colors_navbar_widgetized_submenu_borders' => '#1e1e1e',
		  'color_widgetized_submenu_bg' => '#1e1e1e',
		  'color_widgetized_submenu_border' => '#333333',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'navbar_single_column_title' => 'Trending',
		),
						'mods_typekit'      => array (
		),
					), 'modest-traveler' => array(
						'name'              => 'Modest Traveler',
						'preview_image_url' => '/images/demo-import/modest-traveler.png',
						'preset'            => 'modest-traveler',
						'mods'              => array (
		  'home_slider' => '1',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'grid',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'MT',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '1px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'header_height' => '160px',
		  'header_logo_select' => 'image',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-2x.png',
		  'typography_block_title' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-family' => 'Lora',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Lora',
			'subsets' => 'Array',
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' => 'Array',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => 'Array',
			'variant' => '800',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' => '',
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_height' => '70px',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'home_tiles_layout' => '6',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125em',
			'font-backup' => '',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'font-backup' => '',
		  ),
		  'home_slider_type' => 'boxed',
		  'layout' => 'layout-sidebar-right',
		  'layout_columns' => '3',
		  'layout_first_post' => '',
		  'layout_reduce_margin' => '1',
		  'layout_highlight' => 'none',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#31a1dc',
		  'colors_navbar_main_links_hover' => '#31a1dc',
		  'colors_navbar_submenu_items_links_hover' => '#31a1dc',
		  'colors_navbar_submenu_items_links_active' => '#e84024',
		  'home_slider_button' => '',
		  'home_tiles_button' => '',
		  'color_post_paragraph' => '#777777',
		  'color_post_links' => '#000000',
		  'color_post_links_hover' => '#6b6b6b',
		  'color_category' => '#e84024',
		  'color_category_hover' => '#31a1dc',
		  'color_selection_background' => '#31a1dc',
		  'color_headings_links_hover' => '#565656',
		  'post_layout_default' => '',
		  'layout_more_button' => '',
		  'color_footer_bg' => '#f4f4f4',
		  'color_footer_text' => '#5b5b5b',
		  'color_footer_title' => '#0a0a0a',
		  'color_footer_link' => '#0a0a0a',
		  'color_footer_link_hover' => '#31a1dc',
		  'color_footer_border' => '#e8e8e8',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#31a1dc',
		  'colors_navbar_social_icons' => '#31a1dc',
		  'colors_topbar_social_icons' => '#31a1dc',
		  'colors_topbar_social_text' => '#a0a0a0',
		  'header_logo_default_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-1.png',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-tiny.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-small.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-overlay-tiny.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-overlay-small.png',
		  'offcanvas_topbar_height' => '70px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-tiny.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-small.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-inline-tiny.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-1.png',
		  'home_slider_padding' => '1px',
		  'header_logo_overlay_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/modest-traveler/wp-content/uploads/sites/10/2017/11/modest-traveler-overlay-2x.png',
		  'footer_instagram_username' => '',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'subscribe',
			2 => 'info',
			3 => 'instagram',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
		  ),
		  'header_description_text' => '',
		  'header_description_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' => 'Array',
			'font-size' => '14px',
			'letter-spacing' => '-.2px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		  'home_slider_exclude' => '1',
		  'home_carousel_exclude' => '1',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'post_layout' => 'layout-fullwidth',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.1875em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'didoni-urw',
			'variant' => 'regular',
			'subsets' => '',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'didoni-urw',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'didoni-urw',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => '&quot;didoni-urw&quot;,serif',
			'variant' => 'regular',
			'subsets' => '',
			'font-size' => '22px',
			'letter-spacing' => '-1px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => '400',
			'font-style' => 'normal',
		  ),
		),
					), 'girlboss' => array(
						'name'              => 'Girlboss',
						'preview_image_url' => '/images/demo-import/girlboss.png',
						'preset'            => 'girlboss',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'portrait',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Girlboss',
		  'home_tiles' => true,
		  'home_tiles_padding' => '1px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-black.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-black@2x.png',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-black.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-black@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-white@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-white.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-white@2x.png',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '15px',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'topbar' => true,
		  'header_container' => 'cs-container',
		  'home_layout_default' => true,
		  'color_footer_bg' => '#faf0ef',
		  'color_footer_link' => '#0a0a0a',
		  'color_post_paragraph' => '#666666',
		  'color_category' => '#000000',
		  'colors_navbar_submenu_bg' => '#faf0ef',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_borders' => '#000000',
		  'color_btn_primary_bg' => '#0a0a0a',
		  'color_btn_primary_bg_hover' => '#faf0ef',
		  'home_tiles_layout' => '2',
		  'home_carousel_orientation' => 'portrait',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_borders' => true,
		  'colors_topbar_borders' => false,
		  'navbar_search' => false,
		  'navbar_height' => '80px',
		  'color_footer_text' => '#776f6e',
		  'color_footer_title' => '#a28c89',
		  'color_footer_border' => '#f5e1df',
		  'footer_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'footer_subscribe_title' => 'Sign Up for Our Newsletters',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'widgets',
			2 => 'instagram',
			3 => 'info',
		  ),
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.25rem',
			'letter-spacing' => '-.015em',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'effects_sticky_sidebar_method' => 'stick-last',
		  'effects_parallax' => false,
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-black.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-black@2x.png',
		  'colors_offcanvas_borders' => false,
		  'offcanvas_topbar_height' => '80px',
		  'layout_first_post' => false,
		  'footer_subscribe_name' => true,
		  'post_subscribe' => true,
		  'post_subscribe_title' => 'Sign Up for Our Newsletters',
		  'post_subscribe_name' => true,
		  'post_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'header_height' => '160px',
		  'color_headings_links_hover' => '#e28787',
		  'colors_navbar_main_links_hover' => '#e28787',
		  'colors_navbar_submenu_items_links_hover' => '#e28787',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_text_hover' => '#e28787',
		  'colors_navbar_submenu_items_links_active' => '#e28787',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-black.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/girlboss/wp-content/uploads/sites/11/2018/10/girlboss-navbar-black@2x.png',
		  'color_footer_btn_text' => '#ffffff',
		  'effects_navbar_scroll' => true,
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'post_carousel_orientation' => 'landscape',
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'colors_navbar_widgetized_submenu_borders' => '#cbb2ae',
		  'color_widgetized_submenu_bg' => '#faf0ef',
		  'color_widgetized_submenu_border' => '#e5d8d6',
		  'navbar_single_column_image' => 473,
		  'section_heading_submenu_default' => false,
		),
						'mods_typekit'      => array (
		  'typography_base' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '18px',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.625rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
			'downloadFont' => false,
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '3rem',
			'letter-spacing' => '-.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.05rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'header_description_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '14px',
			'letter-spacing' => '-.2px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		),
					), 'guilty-pleasures' => array(
						'name'              => 'Guilty Pleasures',
						'preview_image_url' => '/images/demo-import/guilty-pleasures.png',
						'preset'            => 'guilty-pleasures',
						'mods'              => array (
		  'home_slider' => true,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Guilty Pleasures',
		  'offcanvas_logo_text' => 'Guilty Pleasures',
		  'home_tiles' => false,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#0a0a0a',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/guilty-pleasures/wp-content/uploads/sites/12/2018/10/guilty-header-logo-white.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/guilty-pleasures/wp-content/uploads/sites/12/2018/10/guilty-header-logo-white@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/guilty-pleasures/wp-content/uploads/sites/12/2018/10/guilty-header-logo-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/guilty-pleasures/wp-content/uploads/sites/12/2018/10/guilty-header-logo-white@2x.png',
		  'navbar_social' => false,
		  'header_layout' => 'center',
		  'header_height' => '180px',
		  'header_background' => true,
		  'navbar_container' => 'cs-container',
		  'navbar_toggle' => true,
		  'header_container' => 'cs-container',
		  'topbar_content_left_menu' => '18',
		  'topbar' => false,
		  'topbar_content_left_select' => 'menu',
		  'topbar_content_right_select' => 'search',
		  'navbar_alignment' => 'center',
		  'home_slider_type' => 'boxed',
		  'layout_first_post' => false,
		  'color_footer_bg' => '#efefef',
		  'color_footer_text' => '#b7b7b7',
		  'color_footer_title' => '#000000',
		  'color_footer_link' => '#0a0a0a',
		  'color_footer_link_hover' => '#727272',
		  'color_footer_border' => '#e5e5e5',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#537948',
		  'color_footer_btn_bg_hover' => '#889e79',
		  'color_btn_primary_bg' => '#0a0a0a',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg_hover' => '#78a55a',
		  'typography_headings' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Lato',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Lato',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.0375em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Lato',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#0a0a0a',
		  'colors_navbar_main_links_hover' => '#727272',
		  'colors_navbar_submenu_items_links' => '#0a0a0a',
		  'colors_navbar_submenu_items_links_hover' => '#727272',
		  'navbar_cart' => true,
		  'post_subscribe' => true,
		  'post_carousel_orientation' => 'portrait',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_bg_toggle_next' => false,
		  'colors_navbar_bg' => '#0a0a0a',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#0a0a0a',
		  'colors_topbar_borders' => false,
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_limit' => '5',
		  'header_content_right_select' => 'search',
		  'colors_navbar_submenu_items_links_active' => '#727272',
		  'home_slider_exclude' => true,
		  'footer_subscribe_title' => 'Sign Up for Our Newsletters',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/guilty-pleasures/wp-content/uploads/sites/12/2018/10/guilty-header-logo-black.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/guilty-pleasures/wp-content/uploads/sites/12/2018/10/guilty-header-logo-black@2x.png',
		  'footer_subscribe_name' => true,
		  'footer_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#727272',
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '22px',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '22px',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'colors_offcanvas_navbar_links' => '#0a0a0a',
		  'colors_offcanvas_navbar_links_hover' => '#d8d8d8',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'colors_offcanvas_borders' => true,
		  'offcanvas_topbar_height' => '80px',
		  'post_subscribe_name' => true,
		  'post_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'post_subscribe_title' => 'Sign Up for Our Newsletters',
		  'header_description_font' =>
		  array (
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '14px',
			'letter-spacing' => '-.2px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_image' => 496,
		),
						'mods_typekit'      => array (
		),
					), 'ordinary-chaos' => array(
						'name'              => 'Ordinary Chaos',
						'preview_image_url' => '/images/demo-import/ordinary-chaos.png',
						'preset'            => 'ordinary-chaos',
						'mods'              => array (
		  'home_slider' => true,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => true,
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Ordinary Chaos',
		  'offcanvas_logo_text' => 'Ordinary Chaos',
		  'home_tiles' => false,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/ordinary-chaos/wp-content/uploads/sites/13/2018/10/chaos-header-logo-black.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/ordinary-chaos/wp-content/uploads/sites/13/2018/10/chaos-header-logo-black@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/ordinary-chaos/wp-content/uploads/sites/13/2018/10/chaos-header-logo-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/ordinary-chaos/wp-content/uploads/sites/13/2018/10/chaos-header-logo-white@2x.png',
		  'home_tiles_layout' => '5',
		  'home_tiles_button' => false,
		  'home_carousel_orientation' => 'portrait',
		  'layout' => 'layout-sidebar-right',
		  'layout_more_button' => true,
		  'layout_reduce_margin' => false,
		  'layout_infinite_load' => false,
		  'layout_columns' => '2',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'footer_subscribe_name' => false,
		  'header' => true,
		  'topbar' => false,
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_titles' => false,
		  'header_content_left_social_accounts_counts' => true,
		  'header_content_right_select' => 'search',
		  'effects_navbar_scroll' => false,
		  'navbar_alignment' => 'center',
		  'typography_base' =>
		  array (
			'font-family' => 'Lora',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Lato',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Lato',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_text' => '#777777',
		  'home_slider_type' => 'large',
		  'color_links_hover' => '#68163e',
		  'colors_accent' => '#f7f7f7',
		  'color_btn_primary_bg' => '#68163e',
		  'color_btn_primary_bg_hover' => '#831a4d',
		  'color_btn_secondary_bg' => '#68163e',
		  'color_btn_secondary_text' => '#dbdbdb',
		  'color_btn_secondary_text_hover' => '#ffffff',
		  'colors_navbar_submenu_items_links_hover' => '#cccccc',
		  'colors_navbar_submenu_items_links_active' => '#cccccc',
		  'color_post_links_hover' => '#68163e',
		  'color_category_hover' => '#68163e',
		  'color_headings_links_hover' => '#68163e',
		  'colors_navbar_submenu_bg' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_borders' => '#bfbfbf',
		  'colors_navbar_submenu_items_links' => '#ffffff',
		  'header_content_left_social_accounts_limit' => '5',
		  'typography_buttons' =>
		  array (
			'font-family' => 'Lato',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#6d6d6d',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_secondary_bg_hover' => '#0a0a0a',
		  'header_description_font' =>
		  array (
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/ordinary-chaos/wp-content/uploads/sites/13/2018/10/chaos-header-logo-white.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/ordinary-chaos/wp-content/uploads/sites/13/2018/10/chaos-header-logo-white@2x.png',
		  'footer_subscribe_title' => 'Sign Up for Our Newsletters',
		  'footer_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'post_subscribe' => true,
		  'post_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'post_subscribe_name' => true,
		  'post_subscribe_title' => 'Sign Up for Our Newsletters',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'layout_widgets_sidebar' => 'sidebar-main',
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Lato',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#000000',
		  'color_widgetized_submenu_title' => '#ffffff',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_border' => '#282828',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'Lato',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_color_text' => '#ffffff',
		  'navbar_single_column_title' => 'Newsletter',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '-0.025em',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'freight-neo-pro',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		),
					), 'viewport' => array(
						'name'              => 'Viewport',
						'preview_image_url' => '/images/demo-import/viewport.png',
						'preset'            => 'viewport',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Viewpȯrt',
		  'navbar_logo_text' => 'Viewpȯrt',
		  'offcanvas_logo_text' => 'Viewpȯrt',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/viewport/wp-content/uploads/sites/14/2018/10/viewport-header-black.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/viewport/wp-content/uploads/sites/14/2018/10/viewport-header-black@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/viewport/wp-content/uploads/sites/14/2018/10/viewport-header-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/viewport/wp-content/uploads/sites/14/2018/10/viewport-header-white@2x.png',
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Barlow Condensed',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_bg' => 'rgba(0,0,0,0.97)',
		  'colors_navbar_submenu_bg' => 'rgba(0,0,0,0.97)',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'header_content_left_select' => 'toggle',
		  'navbar_alignment' => 'center',
		  'navbar_toggle' => false,
		  'navbar_cart' => true,
		  'header_content_right_select' => 'button',
		  'colors_navbar_main_links' => '#ffffff',
		  'colors_navbar_submenu_items_links' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'home_tiles_layout' => '5',
		  'home_tiles_button' => false,
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.025em',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'widgets',
			3 => 'info',
		  ),
		  'colors_navbar_borders' => false,
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#c7ac6f',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#c7ac6f',
		  'color_footer_btn_bg_hover' => '#cccccc',
		  'color_footer_link_hover' => '#c7ac6f',
		  'layout_first_post' => false,
		  'typography_text_small' =>
		  array (
			'font-family' => 'Barlow',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Barlow',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_main_links_hover' => '#c7ac6f',
		  'colors_navbar_submenu_items_links_hover' => '#c7ac6f',
		  'colors_navbar_submenu_items_links_active' => '#c7ac6f',
		  'colors_offcanvas_navbar_links' => '#ffffff',
		  'colors_offcanvas_navbar_links_hover' => '#c7ac6f',
		  'colors_offcanvas_navbar_bg' => '#000000',
		  'typography_base' =>
		  array (
			'font-family' => 'Lora',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Barlow',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '.875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Barlow',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'navbar_search' => true,
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Barlow Condensed',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'footer_subscribe_name' => true,
		  'footer_subscribe_title' => 'Sign Up for Our Newsletters',
		  'footer_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'post_subscribe' => true,
		  'post_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'post_subscribe_title' => 'Sign Up for Our Newsletters',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_load_nextpost' => true,
		  'header_logo_font' =>
		  array (
			'font-family' => 'Barlow Condensed',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'header_description_font' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_author_type' => 'compact',
		  'post_subscribe_name' => true,
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'layout_widgets_sidebar' => 'sidebar-main',
		  'footer_logo_text' => 'Viewpȯrt',
		  'header_content_right_button_link' => '#',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Barlow',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_title' => 'Trending',
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#000000',
		  'color_widgetized_submenu_link' => '#ffffff',
		),
						'mods_typekit'      => array (
		),
					), 'gourmet' => array(
						'name'              => 'Gourmet',
						'preview_image_url' => '/images/demo-import/gourmet.png',
						'preset'            => 'gourmet',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'square',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Gourmet',
		  'navbar_logo_text' => 'Gourmet',
		  'offcanvas_logo_text' => 'Gourmet',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#2d2a32',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_tiles_layout' => '1',
		  'layout_first_post' => false,
		  'layout_reduce_margin' => false,
		  'layout_list_width' => '6',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_bg' => '#d3b6a0',
		  'color_btn_primary_bg_hover' => '#c59e81',
		  'color_btn_primary_text' => '#ffffff',
		  'header_layout' => 'center',
		  'header_background' => true,
		  'header_content_right_select' => 'social',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'header' => true,
		  'topbar' => false,
		  'colors_navbar_bg' => '#2d2a32',
		  'colors_navbar_borders' => false,
		  'colors_navbar_main_links' => '#ffffff',
		  'colors_navbar_submenu_bg' => '#fdf9f4',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'home_carousel_title' => 'Popular Recipes',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.1875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_logo_text' => '#0a0a0a',
		  'color_body_bg' => '#ffffff',
		  'colors_accent' => '#fdf9f4',
		  'color_btn_secondary_bg' => '#d3b6a0',
		  'color_footer_bg' => '#2d2a32',
		  'color_footer_text' => '#cccccc',
		  'color_footer_title' => '#ffffff',
		  'color_footer_border' => '#494949',
		  'color_footer_btn_bg' => '#d3b6a0',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'widgets',
			3 => 'info',
		  ),
		  'colors_navbar_main_links_hover' => '#d8d8d8',
		  'color_footer_btn_bg_hover' => '#c8a488',
		  'color_btn_secondary_text' => '#ffffff',
		  'color_btn_secondary_text_hover' => '#e0e0e0',
		  'color_btn_secondary_bg_hover' => '#c1997a',
		  'colors_navbar_submenu_items_links' => '#3b3939',
		  'header_height' => '200px',
		  'footer_subscribe_message' => 'Subscribe to get delicious recipes',
		  'color_headings_title_blocks' => '#000000',
		  'page_header' => 'simple',
		  'post_layout_default' => true,
		  'post_layout' => 'layout-sidebar-left',
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'home_carousel_orientation' => 'portrait',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-main@2x.png',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-large.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-large@2x.png',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'navbar_height' => '70px',
		  'colors_offcanvas_navbar_links' => '#ffffff',
		  'colors_offcanvas_navbar_bg' => '#2d2a32',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/gourmet/wp-content/uploads/sites/15/2019/06/gourmet-logo-main@2x.png',
		  'offcanvas_topbar_height' => '70px',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_height' => '670px',
		  'section_heading' => 'style-2',
		  'section_heading_footer_default' => false,
		  'section_heading_footer' => 'style-2',
		  'section_heading_footer_color_text' => '#ffffff',
		  'section_heading_footer_color_border' => '#494949',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'color_widgetized_submenu_bg' => '#fdf9f4',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.125rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'operetta-8',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'neue-haas-unica',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'neue-haas-unica',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		),
					), 'ui-garage' => array(
						'name'              => 'UI Garage',
						'preview_image_url' => '/images/demo-import/ui-garage.png',
						'preset'            => 'ui-garage',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'standard',
		  'layout_widgets' => false,
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'UiGarage',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#ffffff',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'topbar' => false,
		  'header' => true,
		  'navbar_alignment' => 'center',
		  'navbar_search' => true,
		  'navbar_cart' => true,
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.0625em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_columns' => '3',
		  'home_first_post' => false,
		  'home_summary' => true,
		  'home_meta' => false,
		  'home_pagination_type' => 'standard',
		  'layout' => 'layout-sidebar-right',
		  'layout_columns' => '3',
		  'layout_first_post' => false,
		  'layout_summary' => false,
		  'home_widgets' => false,
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'widgets',
			3 => 'info',
		  ),
		  'color_body_bg' => '#ffffff',
		  'color_text' => '#a0a3a5',
		  'color_text_secondary' => '#a4a9b0',
		  'color_links' => '#0a0a0a',
		  'colors_borders' => '#f0f2f3',
		  'colors_accent' => '#f8f8fb',
		  'color_headings' => '#000000',
		  'color_headings_links' => '#000000',
		  'color_headings_links_hover' => '#4f4f4f',
		  'color_headings_title_blocks' => '#000000',
		  'home_reduce_margin' => false,
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_submenu_items_links' => '#555a66',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_main_links_hover' => '#20b382',
		  'color_category' => '#000000',
		  'color_category_hover' => '#000000',
		  'color_post_paragraph' => '#424242',
		  'color_selection_background' => '#5e5e5e',
		  'color_btn_primary_bg' => '#20b382',
		  'color_btn_primary_bg_hover' => '#1b966d',
		  'color_btn_secondary_text' => '#ffffff',
		  'color_btn_secondary_text_hover' => '#ffffff',
		  'color_btn_secondary_bg' => '#17be94',
		  'color_btn_secondary_bg_hover' => '#25e4b4',
		  'color_footer_bg' => '#ebeff3',
		  'color_footer_text' => '#47525b',
		  'color_footer_title' => '#595c5d',
		  'color_footer_link_hover' => '#acb7c2',
		  'color_footer_border' => '#d2d7da',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#20b382',
		  'color_footer_btn_bg_hover' => '#1a9c71',
		  'home_tiles_layout' => '6',
		  'home_carousel_title' => 'Popular Freebies',
		  'home_tiles_meta' => false,
		  'footer_logo_text' => 'UIGarage',
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.0625em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'Work Sans',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Work Sans',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '2.75rem',
			'letter-spacing' => '-0.03125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.03125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.03125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.938rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Work Sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '300',
			'font-size' => '0.875rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Work Sans',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Work Sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '1.0625rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Work Sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_submenu_bg' => '#f8f8fb',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links_hover' => '#000000',
		  'colors_navbar_submenu_items_links_active' => '#000000',
		  'colors_navbar_submenu_items_borders_toggle_next' => true,
		  'colors_navbar_submenu_items_borders' => '#e1e3e4',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/06/ui-logo-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/06/ui-logo-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'color_blockquote' => '#000000',
		  'color_leadin_dropcap' => '#000000',
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Work Sans',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'color_selection_text' => '#ffffff',
		  'home_tiles_exclude' => true,
		  'home_carousel_exclude' => true,
		  'colors_navbar_borders' => true,
		  'header_layout' => 'center',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/10/ui-main.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/10/ui-main@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/06/ui-logo-rarge.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/06/ui-logo-rarge@2x.png',
		  'header_background' => false,
		  'header_height' => '150px',
		  'header_content_right_select' => 'social',
		  'header_description_text' => 'The Best Curated Freebies in One Place',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/06/ui-logo-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/06/ui-logo-main@2x.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/10/ui-footer.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/ui-garage/wp-content/uploads/sites/16/2019/10/ui-footer@2x.png',
		  'color_post_links_hover' => '#acb7c2',
		  'navbar_height' => '60px',
		  'color_btn_primary_text' => '#ffffff',
		  'label_readmore' => 'View & Download',
		  'home_tiles_button' => true,
		  'home_carousel_meta' => false,
		  'color_misc_overlay' => 'rgba(40,40,40,0.29)',
		  'color_post_links' => '#848484',
		  'style_align' => 'left',
		  'color_footer_link' => '#000000',
		  'typography_search' =>
		  array (
			'font-family' => 'Work Sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'post_page_header_default' => false,
		  'section_heading_align' => 'haligncenter',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Work Sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_title' => 'Top Freebies',
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#f8f8fb',
		),
						'mods_typekit'      => array (
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_description_font' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'design-hunt' => array(
						'name'              => 'Design Hunt',
						'preview_image_url' => '/images/demo-import/design-hunt.png',
						'preset'            => 'design-hunt',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'grid',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Design Hunt.',
		  'navbar_logo_text' => 'Design Hunt.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '0px',
		  'header_background_object' =>
		  array (
			'background-color' => '#000000',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_layout_default' => false,
		  'home_tiles_layout' => '2',
		  'home_tiles_button' => true,
		  'home_carousel_orientation' => 'portrait',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'topbar' => true,
		  'header' => false,
		  'navbar_alignment' => 'center',
		  'navbar_search' => true,
		  'effects_sticky_sidebar' => true,
		  'typography_h1' =>
		  array (
			'font-size' => '2.8125rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.125rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_meta' =>
		  array (
			0 => 'date',
			1 => 'category',
			2 => 'reading_time',
			3 => 'views',
			4 => 'author',
		  ),
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'color_headings_links' => '#0c0c0c',
		  'color_headings_links_hover' => '#ff3366',
		  'color_headings_title_blocks' => '#ff3366',
		  'colors_navbar_main_links_hover' => '#ff3366',
		  'colors_navbar_submenu_items_links_hover' => '#ff3366',
		  'color_text_secondary' => '#c9c9c9',
		  'color_links' => '#000000',
		  'color_links_hover' => '#ff3366',
		  'layout_meta' => true,
		  'home_meta' => true,
		  'color_body_bg' => '#ffffff',
		  'home_layout' => 'layout-fullwidth',
		  'home_widgets' => false,
		  'color_btn_primary_bg' => '#ff3366',
		  'color_btn_primary_bg_hover' => '#fa5f86',
		  'home_more_button' => true,
		  'home_reduce_margin' => true,
		  'home_columns' => '3',
		  'layout' => 'layout-sidebar-right',
		  'layout_columns' => '3',
		  'home_orientation' => 'square',
		  'page_header' => 'simple',
		  'color_footer_bg' => '#f3f4f6',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'widgets',
			3 => 'info',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'stolzl',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.0625em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_height' => '80px',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#ffffff',
		  'colors_topbar_borders' => false,
		  'home_first_post' => false,
		  'header_background' => false,
		  'header_height' => '100px',
		  'topbar_container' => 'cs-container',
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#000000',
		  'color_text' => '#adadad',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#ff3366',
		  'color_footer_btn_bg_hover' => '#fb698e',
		  'home_tiles_exclude' => true,
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'wide',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/10/design-hunt-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/10/design-hunt-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/10/design-hunt-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/10/design-hunt-overlay@2x.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/10/design-hunt-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/10/design-hunt-main@2x.png',
		  'offcanvas_topbar_height' => '80px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/06/desighunt-logo-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/design-hunt/wp-content/uploads/sites/17/2019/06/desighunt-logo-main@2x.png',
		  'colors_offcanvas_navbar_bg' => '#101010',
		  'colors_offcanvas_navbar_links' => '#ffffff',
		  'navbar_social' => false,
		  'style_align' => 'left',
		  'color_footer_text' => '#686878',
		  'color_footer_title' => '#4a4a53',
		  'color_footer_link' => '#000000',
		  'color_footer_border' => '#dfe0e6',
		  'topbar_content_right_social_accounts_labels' => false,
		  'topbar_content_right_social_accounts_titles' => false,
		  'color_btn_primary_text' => '#ffffff',
		  'color_post_links' => '#4c4c4c',
		  'color_category' => '#ff3366',
		  'color_misc_overlay' => 'rgba(40,40,40,0.2)',
		  'color_misc_overlay_hover' => 'rgba(255,51,102,0.41)',
		  'webfonts_load_method' => 'link',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'section_heading' => 'style-17',
		  'section_heading_color_border' => '#ff3366',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'section_heading_submenu_default' => true,
		  'section_heading_submenu_align' => 'haligncenter',
		  'section_heading_footer_default' => true,
		  'section_heading_footer_color_text' => '#000000',
		  'section_heading_color_text' => '#000000',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_footer_align' => 'haligncenter',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'priori-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'priori-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'priori-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'priori-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'priori-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'priori-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.0625em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'nimbus-sans',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'nimbus-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'nimbus-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'nimbus-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.688rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3.5rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'awkward' => array(
						'name'              => 'Awkward',
						'preview_image_url' => '/images/demo-import/awkward.png',
						'preset'            => 'awkward',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'standard',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Awkward',
		  'navbar_logo_text' => 'Awkward',
		  'offcanvas_logo_text' => 'Awkward',
		  'home_tiles' => true,
		  'home_tiles_padding' => '40px',
		  'header_background_object' =>
		  array (
			'background-color' => '#f6f7fd',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'home_carousel_orientation' => 'landscape',
		  'color_btn_primary_bg' => '#266d6d',
		  'color_btn_primary_bg_hover' => '#349292',
		  'topbar' => false,
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_first_post' => false,
		  'home_columns' => '3',
		  'home_meta' => false,
		  'home_summary' => true,
		  'home_orientation' => 'original',
		  'header_layout' => 'center',
		  'header_height' => '140px',
		  'header_background' => false,
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_main_links_hover' => '#adadad',
		  'header_content_right_select' => 'social',
		  'header_content_right_social_accounts_limit' => '4',
		  'header_content_right_social_accounts_labels' => false,
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'color_footer_bg' => '#f8f8fb',
		  'color_footer_text' => '#95a0a6',
		  'color_footer_title' => '#000000',
		  'color_footer_link_hover' => '#95a0a6',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_footer_btn_bg' => '#266d6d',
		  'color_footer_btn_text' => '#ffffff',
		  'layout_columns' => '3',
		  'layout_first_post' => false,
		  'color_footer_border' => '#d3d3e2',
		  'color_body_bg' => '#ffffff',
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'sofia-pro',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#7a7e8e',
		  'header_content_left_select' => 'button',
		  'color_footer_btn_bg_hover' => '#349292',
		  'color_text_secondary' => '#95a0a6',
		  'home_pagination_type' => 'standard',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_widgets' => true,
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_category' => '#000000',
		  'color_category_hover' => '#a0a0a0',
		  'color_text' => '#9aa5a7',
		  'color_footer_link' => '#000000',
		  'style_align' => 'center',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'wide',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_slider_total' => '4',
		  'home_tiles_exclude' => true,
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.25rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'topbar_content_right_select' => 'search',
		  'navbar_alignment' => 'center',
		  'navbar_toggle' => true,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#f6f7fd',
		  'colors_topbar_borders' => false,
		  'colors_topbar_main_links' => '#4f4f4f',
		  'navbar_height' => '60px',
		  'navbar_search' => true,
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => '',
		  'footer_logo_retina_url' => '',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => '',
		  'offcanvas_logo_retina_url' => '',
		  'home_tiles_layout' => '1',
		  'home_list_width' => '6',
		  'layout_summary' => false,
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'color_post_links' => '#474747',
		  'border_radius' => '0px',
		  'colors_navbar_submenu_bg' => '#f8f8fb',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_bg_toggle_next' => false,
		  'color_misc_overlay' => 'rgba(65,80,108,0.76)',
		  'color_misc_overlay_hover' => 'rgba(58,74,94,0.76)',
		  'section_heading' => 'style-1',
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'section_heading_align' => 'halignleft',
		  'header' => false,
		  'offcanvas_topbar_height' => '60px',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'haligncenter',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '300',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '300',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '300',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '200',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 200,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '300',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'titling-gothic-fb',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		),
					), 'vault' => array(
						'name'              => 'Vault',
						'preview_image_url' => '/images/demo-import/vault.png',
						'preset'            => 'vault',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => true,
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Vault',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_reduce_margin' => false,
		  'home_list_width' => '6',
		  'home_more_button' => true,
		  'home_pagination_type' => 'ajax',
		  'home_slider_type' => 'wide',
		  'home_tiles_layout' => '5',
		  'header_layout' => 'left',
		  'topbar' => false,
		  'header_height' => '100px',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/06/vault-logo-black.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/06/vault-logo-black@2x.png',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'colors_topbar_bg_toggle_next' => false,
		  'colors_topbar_bg' => '#313131',
		  'colors_topbar_main_links_hover' => '#545454',
		  'colors_topbar_social_icons' => '#000000',
		  'colors_topbar_social_text_hover' => '#2b2b2b',
		  'colors_navbar_borders' => true,
		  'navbar_alignment' => 'left',
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#000000',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/10/vault-logo-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/10/vault-logo-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/10/vault-logo-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/10/vault-logo-overlay@2x.png',
		  'color_btn_primary_bg' => '#000000',
		  'color_btn_primary_bg_hover' => '#8224e3',
		  'color_footer_bg' => '#000000',
		  'color_footer_btn_bg' => '#212121',
		  'color_footer_btn_bg_hover' => '#8224e3',
		  'color_footer_border' => '#3f3f3f',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'style_align' => 'left',
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_exclude' => true,
		  'home_carousel_exclude' => true,
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/06/vault-logo-main-white.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/06/vault-logo-main-white@2x.png',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/06/vault-logo-main-black.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/vault/wp-content/uploads/sites/19/2019/06/vault-logo-main-black@2x.png',
		  'navbar_social' => false,
		  'header' => false,
		  'navbar_height' => '90px',
		  'navbar_social_accounts_titles' => false,
		  'navbar_search' => true,
		  'color_btn_primary_text' => '#ffffff',
		  'color_misc_overlay_hover' => 'rgba(162,49,185,0.3)',
		  'section_heading' => 'style-3',
		  'section_heading_align' => 'halignleft',
		  'color_footer_link' => '#ffffff',
		  'color_footer_btn_text' => '#ffffff',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_image' => 1911,
		  'colors_navbar_main_links_hover' => '#8224e3',
		  'colors_navbar_submenu_items_links_hover' => '#8224e3',
		  'colors_navbar_submenu_items_links_active' => '#8224e3',
		  'section_heading_color_accent' => '#efefef',
		  'section_heading_color_accent_text' => '#000000',
		  'section_heading_color_text' => '#0a0a0a',
		  'section_heading_submenu_default' => true,
		  'section_heading_footer_default' => false,
		  'section_heading_footer' => 'style-3',
		  'section_heading_footer_color_border' => '#2b2b2b',
		  'section_heading_footer_color_text' => '#e8e8e8',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'circe',
			'variant' => 'italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'italic',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'circe',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'circe',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.125rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'newspost' => array(
						'name'              => 'The NewsPost',
						'preview_image_url' => '/images/demo-import/newspost.png',
						'preset'            => 'newspost',
						'mods'              => array (
		  'home_slider' => true,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'NewsPost',
		  'navbar_logo_text' => 'NewsPost',
		  'offcanvas_logo_text' => 'NewsPost',
		  'home_tiles' => false,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#000000',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'topbar' => false,
		  'header' => true,
		  'colors_navbar_bg' => '#000000',
		  'colors_navbar_main_links' => '#ffffff',
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/10/newspost-main-logo.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/10/newspost-main-logo@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/07/newspost-main.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/07/newspost-main@2x.png',
		  'home_tiles_layout' => '6',
		  'home_tiles_button' => true,
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.938rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#000000',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/07/newspost-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/07/newspost-main@2x.png',
		  'colors_navbar_borders' => false,
		  'color_btn_primary_bg' => '#0ecda3',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg_hover' => '#0ee6b7',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#0ecda3',
		  'color_footer_btn_bg_hover' => '#1eefc2',
		  'color_footer_title' => '#ffffff',
		  'home_slider_heading' =>
		  array (
			'font-size' => '2.375rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'style_align' => 'left',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_height' => '870px',
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'portrait',
		  'home_tiles_exclude' => true,
		  'home_carousel_title' => 'Breaking News',
		  'navbar_height' => '40px',
		  'navbar_alignment' => 'center',
		  'navbar_search' => false,
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_text' => '#0a0a0a',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'boxed',
		  'home_slider_visible' => '2',
		  'colors_navbar_submenu_bg' => '#1b1b1b',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_orientation' => 'landscape',
		  'home_widgets' => false,
		  'colors_navbar_main_links_hover' => '#0ecda3',
		  'colors_offcanvas_navbar_links' => '#ffffff',
		  'colors_offcanvas_navbar_links_hover' => '#d8d8d8',
		  'colors_offcanvas_navbar_bg' => '#000000',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/06/newspost-logo-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/newspost/wp-content/uploads/sites/20/2019/06/newspost-logo-main@2x.png',
		  'topbar_content_right_select' => 'search',
		  'home_slider_padding' => '10px',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#000000',
		  'colors_topbar_borders' => true,
		  'colors_topbar_main_links' => '#e5e5e5',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'colors_navbar_submenu_items_links_hover' => '#a3a3a3',
		  'colors_navbar_submenu_items_links_active' => '#0ecda3',
		  'home_first_post' => false,
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_category' => '#5b5b5b',
		  'color_category_hover' => '#000000',
		  'home_carousel_meta' => false,
		  'colors_topbar_social_icons' => '#000000',
		  'colors_topbar_social_icons_hover' => '#000000',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'topbar_content_right_social_accounts_labels' => false,
		  'topbar_content_right_social_accounts_titles' => true,
		  'topbar_content_right_social_accounts_counts' => false,
		  'topbar_content_right_social_accounts_limit' => '3',
		  'home_more_button' => false,
		  'layout_more_button' => false,
		  'color_post_links' => '#0ecda3',
		  'color_post_links_hover' => '#000000',
		  'color_headings_title_blocks' => '#000000',
		  'colors_navbar_bg_toggle_next' => true,
		  'navbar_cart' => false,
		  'navbar_social' => false,
		  'navbar_social_accounts_counts' => false,
		  'navbar_social_accounts_limit' => '3',
		  'post_page_header_default' => false,
		  'header_logo_select' => 'text',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'section_heading' => 'style-11',
		  'color_links' => '#000000',
		  'color_links_hover' => '#232323',
		  'color_text_secondary' => '#565656',
		  'color_headings_links_hover' => '#595959',
		  'section_heading_color_accent' => '#000000',
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override' => false,
		  'header_height' => '50px',
		  'header_background' => true,
		  'navbar_toggle' => false,
		  'offcanvas_topbar_height' => '40px',
		  'label_readmore' => 'Read More',
		  'footer_logo_text' => 'NewsPost',
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_title' => 'The Latest',
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#1b1b1b',
		  'color_widgetized_submenu_text' => '#aaaaaa',
		  'color_widgetized_submenu_text_secondary' => '#e0e0e0',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_btn_bg' => '#0ecda3',
		  'color_widgetized_submenu_btn_bg_hover' => '#0da584',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'business-insights' => array(
						'name'              => 'Business Insights',
						'preview_image_url' => '/images/demo-import/business-insights.png',
						'preset'            => 'business-insights',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Business Insights',
		  'navbar_logo_text' => 'Business Insights',
		  'offcanvas_logo_text' => 'Business Insights',
		  'home_tiles' => false,
		  'home_tiles_padding' => '20px',
		  'header_background_object' =>
		  array (
			'background-color' => '#000000',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'header_height' => '80px',
		  'header_logo_select' => 'text',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'typography_base' =>
		  array (
			'font-size' => '0.875rem',
			'font-family' => 'Lora',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_layout' => '4',
		  'home_tiles_parallax' => true,
		  'home_tiles_exclude' => true,
		  'home_tiles_button' => true,
		  'color_btn_primary_bg' => '#0429e0',
		  'color_btn_primary_bg_hover' => '#000000',
		  'home_carousel_orientation' => 'portrait',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'header_content_left_select' => 'button',
		  'header_content_right_select' => 'search',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#000000',
		  'colors_topbar_social_icons' => '#e5e5e5',
		  'colors_topbar_social_icons_hover' => '#ffffff',
		  'colors_topbar_social_text' => '#e5e5e5',
		  'colors_topbar_main_links' => '#e5e5e5',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_first_post' => true,
		  'home_reduce_margin' => false,
		  'color_footer_bg' => '#000000',
		  'color_footer_text' => '#ffffff',
		  'color_footer_title' => '#ffffff',
		  'color_footer_border' => '#212121',
		  'color_footer_btn_bg' => '#0429e0',
		  'color_footer_btn_bg_hover' => '#191919',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'info',
		  ),
		  'home_tiles_height' => '670px',
		  'home_pagination_type' => 'ajax',
		  'color_text' => '#1e1e1e',
		  'color_footer_link' => '#ffffff',
		  'color_text_secondary' => '#000000',
		  'color_links' => '#000000',
		  'color_links_hover' => '#0429e0',
		  'header_layout' => 'center',
		  'navbar_alignment' => 'center',
		  'navbar_search' => false,
		  'typography_h1' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_layout_default' => false,
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'topbar_content_left_select' => 'menu',
		  'topbar' => false,
		  'topbar_content_right_select' => 'social',
		  'navbar_cart' => true,
		  'style_align' => 'left',
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links_hover' => '#0429e0',
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_borders_toggle_next' => true,
		  'colors_navbar_submenu_items_links' => '#000000',
		  'colors_navbar_submenu_items_links_hover' => '#d1d1d1',
		  'colors_navbar_submenu_items_links_active' => '#d1d1d1',
		  'colors_navbar_submenu_items_borders_toggle_next' => true,
		  'color_footer_link_hover' => '#dddddd',
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_background' => false,
		  'color_headings_title_blocks' => '#0a0a0a',
		  'colors_topbar_borders' => false,
		  'topbar_content_right_social_accounts_labels' => false,
		  'colors_navbar_bg_toggle_next' => false,
		  'home_carousel_title' => 'Market News',
		  'home_carousel_meta' => false,
		  'home_more_button' => false,
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'navbar_height' => '50px',
		  'color_misc_overlay' => 'rgba(40,40,40,0.29)',
		  'header' => true,
		  'section_heading' => 'style-6',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'navbar_single_column_image' => 488,
		  'color_post_paragraph' => '#000000',
		  'color_post_links' => '#0429e0',
		  'color_post_links_hover' => '#0429e0',
		  'color_headings_links_hover' => '#4f4f4f',
		  'label_readmore' => 'Read More',
		  'border_radius' => '0',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'nimbus-sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.8125rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'mash' => array(
						'name'              => 'Mash',
						'preview_image_url' => '/images/demo-import/mash.png',
						'preset'            => 'mash',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Mash',
		  'navbar_logo_text' => 'Mash',
		  'offcanvas_logo_text' => 'Mash',
		  'home_tiles' => false,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_btn_primary_bg' => '#02a99d',
		  'color_btn_primary_bg_hover' => '#03958c',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_list_width' => '6',
		  'color_footer_bg' => '#fff5f2',
		  'color_footer_link' => '#000000',
		  'color_footer_border' => '#fde2dd',
		  'color_footer_title' => '#02a99d',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'multiple',
		  'home_slider_height' => '600px',
		  'home_slider_padding' => '30px',
		  'home_slider_visible' => '2',
		  'home_slider_heading' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_layout' => '4',
		  'home_carousel_exclude' => true,
		  'typography_h3' =>
		  array (
			'font-size' => '1.625rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'portrait',
		  'topbar' => false,
		  'header_content_right_select' => 'button',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_titles' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'topbar_content_right_select' => 'search',
		  'header_layout' => 'left',
		  'navbar_alignment' => 'center',
		  'navbar_social' => false,
		  'navbar_social_accounts_labels' => false,
		  'navbar_search' => true,
		  'page_header' => 'simple',
		  'color_footer_text' => '#4f4f4f',
		  'color_footer_link_hover' => '#353535',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'colors_navbar_borders' => true,
		  'color_footer_btn_text' => '#ffffff',
		  'color_text_secondary' => '#c6c6c6',
		  'color_text' => '#6b6b6b',
		  'color_footer_btn_bg' => '#ef4726',
		  'color_footer_btn_bg_hover' => '#de3310',
		  'style_align' => 'left',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'color_selection_background' => '#efe5ef',
		  'color_blockquote' => '#000000',
		  'color_post_paragraph' => '#3d3d3d',
		  'header' => false,
		  'header_background' => false,
		  'header_video_url' => 'https://www.youtube.com/watch?v=ike0ngw__uc',
		  'header_video_start' => '1',
		  'header_video_end' => '25',
		  'header_height' => '100px',
		  'color_btn_primary_text' => '#ffffff',
		  'home_more_button' => false,
		  'color_headings_links_hover' => '#3f3f3f',
		  'color_headings_title_blocks' => '#ef4726',
		  'color_links' => '#000000',
		  'color_post_links' => '#02a99d',
		  'color_category' => '#1c1c1c',
		  'color_selection_text' => '#000000',
		  'home_carousel_title' => 'Trending Stories',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-sidebar-right',
		  'colors_navbar_bg' => '#1e1e1e',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_social_icons' => '#000000',
		  'colors_navbar_social_icons_hover' => '#000000',
		  'colors_navbar_social_text_hover' => '#000000',
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'navbar_height' => '60px',
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => '',
		  'footer_logo_retina_url' => '',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => '',
		  'offcanvas_logo_retina_url' => '',
		  'home_pagination_type' => 'ajax',
		  'home_widgets' => true,
		  'colors_navbar_bg_toggle_next' => false,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#fff5f2',
		  'colors_topbar_borders' => false,
		  'colors_topbar_main_links' => '#ef4726',
		  'color_post_links_hover' => '#000000',
		  'colors_navbar_submenu_bg' => '#fff5f2',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links_hover' => '#bf2b2b',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_borders' => '#fde0d7',
		  'colors_navbar_social_text' => '#707070',
		  'colors_accent' => '#fff5f2',
		  'color_section_heading_text' => '#ef4726',
		  'section_heading' => 'style-9',
		  'section_heading_color_text' => '#ef4726',
		  'section_heading_color_accent' => '#ef4726',
		  'offcanvas_topbar_height' => '60px',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'halignleft',
		  'section_heading_submenu_color_text' => '#ef4726',
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#fff5f2',
		  'color_widgetized_submenu_text_secondary' => '#b2b2b2',
		  'color_widgetized_submenu_link_hover' => '#bf2b2b',
		  'navbar_single_column_image' => 464,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '4rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.625rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.625rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		),
					), 'next-stop' => array(
						'name'              => 'Next Stop',
						'preview_image_url' => '/images/demo-import/next-stop.png',
						'preset'            => 'next-stop',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Next Stop',
		  'navbar_logo_text' => 'Next Stop',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'topbar' => true,
		  'header' => false,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/06/outdoor-logo-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/06/outdoor-logo-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/10/outdoor-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/10/outdoor-overlay@2x.png',
		  'navbar_height' => '90px',
		  'navbar_alignment' => 'right',
		  'navbar_search' => true,
		  'topbar_content_left_select' => 'menu',
		  'topbar_content_right_select' => 'social',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#333333',
		  'colors_topbar_social_icons' => '#ffffff',
		  'home_carousel_orientation' => 'portrait',
		  'color_btn_primary_bg' => '#12a989',
		  'color_btn_primary_bg_hover' => '#e22c6b',
		  'home_carousel_title' => '',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_columns' => '4',
		  'home_pagination_type' => 'ajax',
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/06/outdoor-logo-white.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/06/outdoor-logo-white@2x.png',
		  'color_btn_primary_text' => '#ffffff',
		  'typography_text_small' =>
		  array (
			'font-family' => 'PT Mono',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'PT Mono',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_topbar_main_links_hover' => '#dbdbdb',
		  'colors_topbar_main_links' => '#a0a0a0',
		  'color_footer_bg' => '#333333',
		  'color_footer_text' => '#dbdbdb',
		  'color_footer_title' => '#ffffff',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#df5934',
		  'color_footer_btn_bg_hover' => '#b53c1b',
		  'home_reduce_margin' => false,
		  'home_orientation' => 'landscape',
		  'home_list_width' => '6',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'page_header' => 'simple',
		  'home_widgets' => true,
		  'home_widgets_after' => '3',
		  'home_widgets_repeat' => true,
		  'color_headings_links' => '#000000',
		  'color_headings_links_hover' => '#12a989',
		  'color_headings_title_blocks' => '#df5934',
		  'home_carousel_exclude' => true,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/06/outdoor-logo-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/next-stop/wp-content/uploads/sites/23/2019/06/outdoor-logo-main@2x.png',
		  'offcanvas_topbar_height' => '70px',
		  'style_align' => 'left',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'color_section_heading_text' => '#df5934',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'section_heading' => 'style-4',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'color_footer_border' => '#444444',
		  'footer_subscribe_message' => 'Get notified of the best deals on our WordPress themes.',
		  'footer_subscribe_title' => 'Sign Up for Our Newsletters',
		  'colors_navbar_main_links_hover' => '#12a989',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '-0.015em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		),
					), 'sprint' => array(
						'name'              => 'Sprint',
						'preview_image_url' => '/images/demo-import/sprint.png',
						'preset'            => 'sprint',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => true,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => false,
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Sprint',
		  'navbar_logo_text' => 'Sprint',
		  'offcanvas_logo_text' => 'Sprint',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_btn_primary_bg' => '#6084ff',
		  'color_btn_primary_bg_hover' => '#87a2fb',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/06/sprint-logo.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/06/sprint-logo@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/10/sprint-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/10/sprint-overlay@2x.png',
		  'topbar' => true,
		  'header' => false,
		  'navbar_height' => '70px',
		  'navbar_alignment' => 'center',
		  'navbar_search' => false,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_footer_bg' => '#323232',
		  'color_footer_text' => '#ffffff',
		  'color_footer_title' => '#ffffff',
		  'style_align' => 'left',
		  'home_tiles_layout' => '2',
		  'home_carousel_title' => 'The Big Ideas',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'square',
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_borders_toggle_next' => true,
		  'colors_navbar_submenu_items_links' => '#3a3a3a',
		  'colors_navbar_submenu_items_links_hover' => '#000000',
		  'colors_navbar_submenu_items_links_active' => '#000000',
		  'colors_navbar_submenu_items_borders_toggle_next' => true,
		  'colors_navbar_borders' => true,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#ecf1ff',
		  'colors_topbar_main_links' => '#6782e0',
		  'colors_topbar_social_icons' => '#0a0a0a',
		  'colors_topbar_social_text' => '#0a0a0a',
		  'colors_topbar_social_icons_hover' => '#636363',
		  'colors_topbar_social_text_hover' => '#636363',
		  'color_headings_title_blocks' => '#5f84ff',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_pagination_type' => 'ajax',
		  'home_meta' => true,
		  'home_meta_category' => true,
		  'home_widgets' => true,
		  'home_orientation' => 'landscape',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'border_radius' => '0',
		  'colors_topbar_borders' => false,
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/06/sprint-logo.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/06/sprint-logo@2x.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/06/sprint-logo-white.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/sprint/wp-content/uploads/sites/24/2019/06/sprint-logo-white@2x.png',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#6084ff',
		  'color_footer_btn_bg_hover' => '#87a2fb',
		  'color_footer_border' => '#2d2d2d',
		  'color_btn_primary_text' => '#ffffff',
		  'home_first_post' => false,
		  'color_post_paragraph' => '#6d6d6d',
		  'home_tiles_exclude' => true,
		  'topbar_content_right_select' => 'search',
		  'effects_parallax' => false,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'section_heading' => 'style-3',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'typography_h3_override' => true,
		  'typography_h1_override' => false,
		  'typography_h2_override' => false,
		),
						'mods_typekit'      => array (
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'franklin-gothic-urw',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '1rem',
			'letter-spacing' => '',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'franklin-gothic-urw',
			'variant' => '500',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'serifa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'serifa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'real-moments' => array(
						'name'              => 'Real Moments',
						'preview_image_url' => '/images/demo-import/real-moments.png',
						'preset'            => 'real-moments',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => false,
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => false,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_meta' => false,
		  'home_summary' => false,
		  'home_more_button' => false,
		  'home_orientation' => 'original',
		  'layout_meta' => false,
		  'layout_summary' => false,
		  'layout_more_button' => false,
		  'layout_infinite_load' => true,
		  'topbar' => false,
		  'home_first_post' => false,
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'color_body_bg' => '#faf5f1',
		  'colors_navbar_bg' => '#faf5f1',
		  'colors_navbar_borders' => false,
		  'header_height' => '130px',
		  'navbar_height' => '60px',
		  'colors_borders' => '#e5e5e5',
		  'colors_accent' => '#f2e9dd',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-logo.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-logo@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-logo-large.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-logo-large@2x.png',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'header_background' => false,
		  'style_align' => 'left',
		  'color_footer_bg' => '#faf5f1',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-main@2x.png',
		  'color_footer_title' => '#000000',
		  'color_footer_link' => '#000000',
		  'colors_navbar_submenu_bg' => '#262626',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_borders' => '#e29b78',
		  'colors_navbar_submenu_items_links_hover' => '#8e8e8e',
		  'colors_navbar_submenu_items_links_active' => '#666666',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#262626',
		  'colors_offcanvas_navbar_bg' => '#faf5f1',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/real-moments/wp-content/uploads/sites/25/2019/10/real-main@2x.png',
		  'layout' => 'layout-sidebar-right',
		  'page_header' => 'simple',
		  'typography_headings' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Raleway',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500italic',
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'italic',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Raleway',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Raleway',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'color_text_secondary' => '#a8a8a8',
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => true,
		  'header_content_left_select' => 'toggle',
		  'header_content_left_social_accounts_labels' => false,
		  'navbar_toggle' => false,
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'offcanvas_topbar_height' => '60px',
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => false,
		),
						'mods_typekit'      => array (
		),
					), 'streamline' => array(
						'name'              => 'Streamline',
						'preview_image_url' => '/images/demo-import/streamline.png',
						'preset'            => 'streamline',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Streamline',
		  'navbar_logo_text' => 'Streamline',
		  'offcanvas_logo_text' => 'Streamline',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_body_bg' => '#ffffff',
		  'color_text' => '#757575',
		  'color_text_secondary' => '#afafaf',
		  'color_links' => '#000000',
		  'colors_borders' => '#ededed',
		  'color_headings' => '#000000',
		  'color_headings_links' => '#000000',
		  'color_headings_title_blocks' => '#e2e7e8',
		  'color_post_links' => '#0a0a0a',
		  'color_category' => '#000000',
		  'colors_navbar_bg' => 'rgba(45,46,55,0.97)',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#000000',
		  'topbar' => false,
		  'header' => false,
		  'navbar_height' => '80px',
		  'color_btn_primary_bg' => '#fa0a56',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/streamline/wp-content/uploads/sites/26/2019/10/streamline-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/streamline/wp-content/uploads/sites/26/2019/10/streamline-overlay@2x.png',
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Roboto',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '900italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 900,
			'font-style' => 'italic',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_layout' => '2',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.0625rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_exclude' => true,
		  'home_tiles_height' => '570px',
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'landscape',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_accent' => '#f9f9f9',
		  'style_align' => 'left',
		  'classic_gallery_alignment' => 'default',
		  'home_layout_default' => false,
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_borders_toggle_next' => true,
		  'colors_navbar_submenu_items_links' => '#000000',
		  'colors_navbar_submenu_items_borders' => '#eeeeee',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_bg_hover' => '#fa0a56',
		  'header_height' => '150px',
		  'header_content_right_select' => 'social',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_limit' => '5',
		  'color_footer_bg' => '#ffffff',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#000000',
		  'color_footer_btn_bg_hover' => '#1e1e1e',
		  'color_footer_border' => '#eaeaea',
		  'color_blockquote' => '#000000',
		  'color_leadin_dropcap' => '#000000',
		  'color_post_paragraph' => '#3a3a3a',
		  'color_links_hover' => '#afb9c0',
		  'color_headings_links_hover' => '#fa0a56',
		  'home_layout' => 'layout-sidebar-right',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_widgets' => true,
		  'home_orientation' => 'original',
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => '',
		  'footer_logo_retina_url' => '',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => 'https://authentictheme.com/streamline/wp-content/uploads/sites/26/2019/10/streanline-main-logo.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/streamline/wp-content/uploads/sites/26/2019/10/streanline-main-logo@2x.png',
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'colors_offcanvas_borders' => true,
		  'colors_navbar_bg_toggle_next' => false,
		  'navbar_search' => true,
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Oswald',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.4375rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Oswald',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'color_misc_overlay' => 'rgba(11,9,9,0.28)',
		  'color_misc_overlay_hover' => 'rgba(11,9,9,0.43)',
		  'navbar_container' => 'cs-container',
		  'color_section_heading_text' => '#ffffff',
		  'section_heading_color_text' => '#000000',
		  'offcanvas_topbar_height' => '70px',
		  'colors_navbar_submenu_items_borders_toggle_next' => true,
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'section_heading' => 'style-4',
		  'section_heading_color_border' => '#000000',
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Oswald',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'color_footer_link' => '#000000',
		  'color_btn_primary_text' => '#ffffff',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_footer_default' => false,
		  'section_heading_footer_color_text' => '#000000',
		  'navbar_single_column_image' => 499,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '300',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'nimbus-sans-extended',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'fuel' => array(
						'name'              => 'Fuel',
						'preview_image_url' => '/images/demo-import/fuel.png',
						'preset'            => 'fuel',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => true,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Fuel',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '0px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_bg' => 'rgba(0,0,0,0.97)',
		  'colors_navbar_borders' => false,
		  'colors_navbar_main_links' => '#ffffff',
		  'topbar' => false,
		  'header' => false,
		  'navbar_height' => '70px',
		  'home_tiles_exclude' => true,
		  'home_tiles_layout' => '6',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.25rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'layout' => 'layout-sidebar-right',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_columns' => '3',
		  'home_reduce_margin' => true,
		  'home_first_post' => false,
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'square',
		  'home_carousel_title' => 'Most Popular Car Reviews',
		  'style_align' => 'left',
		  'color_btn_primary_bg' => '#ffea00',
		  'color_btn_primary_text' => '#000000',
		  'color_btn_primary_bg_hover' => '#fae60a',
		  'typography_menus' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_height' => '670px',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main@2x.png',
		  'navbar_alignment' => 'center',
		  'navbar_search' => true,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#282828',
		  'colors_topbar_borders' => false,
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons_hover' => '#e8e8e8',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'colors_topbar_social_text_hover' => '#f4f4f4',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main@2x.png',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'page_header' => 'simple',
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => true,
		  'colors_navbar_submenu_bg' => '#282828',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#c4c4c4',
		  'colors_navbar_submenu_items_links_hover' => '#ffffff',
		  'colors_navbar_submenu_items_links_active' => '#ffffff',
		  'colors_navbar_submenu_items_borders' => '#3d3d3d',
		  'colors_offcanvas_navbar_links' => '#ffffff',
		  'colors_offcanvas_navbar_bg' => '#000000',
		  'colors_offcanvas_borders' => false,
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/fuel/wp-content/uploads/sites/27/2019/06/fuel-main@2x.png',
		  'offcanvas_topbar_height' => '70px',
		  'color_btn_primary_text_hover' => '#000000',
		  'color_footer_btn_text' => '#000000',
		  'color_footer_btn_text_hover' => '#000000',
		  'color_footer_btn_bg' => '#ffea00',
		  'color_footer_btn_bg_hover' => '#ecd803',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'section_heading' => 'style-2',
		  'section_heading_color_border' => '#d6d6d6',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#282828',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_border' => '#3d3d3d',
		  'color_widgetized_submenu_title' => '#ffffff',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu' => 'style-7',
		  'section_heading_submenu_color_border' => '#3d3d3d',
		  'section_heading_submenu_color_text' => '#ffffff',
		  'navbar_single_column_image' => 471,
		  'color_widgetized_submenu_btn_bg' => '#000000',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => '700italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'italic',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'pragmatica-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'pragmatica-web',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'pragmatica-web',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'pragmatica-web',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'pragmatica-web',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'absurd' => array(
						'name'              => 'Absurd',
						'preview_image_url' => '/images/demo-import/absurd.png',
						'preset'            => 'absurd',
						'mods'              => array (
		  'home_slider' => '1',
		  'home_carousel' => true,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Absurd',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_body_bg' => '#ffffff',
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_borders' => true,
		  'topbar' => false,
		  'header_logo_font' =>
		  array (
			'font-family' => 'monotype-modern-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/06/absurd-logo-large.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/06/absurd-logo-large@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/06/absurd-logo-large-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/06/absurd-logo-large-white@2x.png',
		  'header_height' => '150px',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#000000',
		  'color_btn_primary_bg_hover' => '#353535',
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'monotype-modern-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'monotype-modern-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_slider_exclude' => true,
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_slider_type' => 'boxed',
		  'home_slider_button' => false,
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_meta' => true,
		  'home_summary' => false,
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'square',
		  'home_carousel_meta' => false,
		  'home_carousel_title' => 'Popular Exhibitions Right Now',
		  'home_first_post' => false,
		  'home_columns' => '3',
		  'color_footer_bg' => '#f9fbfd',
		  'color_footer_title' => '#5e5e5e',
		  'color_footer_link' => '#2d2d2d',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#0a0a0a',
		  'color_footer_btn_bg_hover' => '#1c1c1c',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_footer_border' => '#e5edf4',
		  'header_layout' => 'center',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/10/absurd-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/10/absurd-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/10/absurd-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/10/absurd-overlay@2x.png',
		  'navbar_height' => '60px',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/06/absurg-logo-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/06/absurg-logo-main@2x.png',
		  'offcanvas_topbar_height' => '60px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/10/absurd-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/absurd/wp-content/uploads/sites/28/2019/10/absurd-main@2x.png',
		  'colors_navbar_main_links_hover' => '#848484',
		  'colors_navbar_submenu_items_links_hover' => '#848484',
		  'colors_navbar_submenu_items_links_active' => '#8c8c8c',
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_borders_toggle_next' => true,
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'page_header' => 'simple',
		  'layout' => 'layout-sidebar-right',
		  'home_orientation' => 'original',
		  'color_links' => '#000000',
		  'color_links_hover' => '#424242',
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => true,
		  'header' => false,
		  'navbar_search' => true,
		  'style_align' => 'center',
		  'color_section_heading_border' => '#d1d1d1',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'section_heading' => 'style-11',
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'haligncenter',
		  'section_heading_footer_default' => false,
		  'section_heading_footer_color_text' => '#000000',
		  'navbar_single_column_image' => 0,
		  'color_text' => '#565656',
		  'color_post_paragraph' => '#565656',
		),
						'mods_typekit'      => array (
		  'typography_menus' =>
		  array (
			'font-family' => 'adelle-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'adelle-sans',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'adelle-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'adelle-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'adelle-sans',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'adelle-sans',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'adobe-garamond-pro',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'panorama' => array(
						'name'              => 'Panorama',
						'preview_image_url' => '/images/demo-import/panorama.png',
						'preset'            => 'panorama',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => false,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2017/10/authentic-demo-image-00005.jpg',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_tiles_layout' => '8',
		  'home_tiles_button' => false,
		  'home_tiles_height' => '670px',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'portrait',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'large',
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_first_post' => false,
		  'color_body_bg' => '#f4f4f4',
		  'header_background' => true,
		  'header_layout' => 'logo',
		  'header_height' => '600px',
		  'topbar' => false,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-large.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-large@2x.png',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'style_align' => 'left',
		  'navbar_sticky' => true,
		  'navbar_height' => '70px',
		  'navbar_search' => true,
		  'colors_navbar_borders' => false,
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'home_carousel_title' => 'Experiments and Shapes',
		  'home_carousel_exclude' => true,
		  'color_text' => '#000000',
		  'color_links' => '#666666',
		  'color_footer_bg' => '#ffffff',
		  'color_footer_title' => '#000000',
		  'color_footer_link' => '#000000',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'layout' => 'layout-sidebar-right',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/10/panorama-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/10/panorama-overlay@2x.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-main@2x.png',
		  'offcanvas_topbar_height' => '70px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/panorama/wp-content/uploads/sites/29/2019/06/panorama-main@2x.png',
		  'colors_offcanvas_borders' => false,
		  'color_post_paragraph' => '#000000',
		  'color_links_hover' => '#000000',
		  'home_widgets' => false,
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => true,
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#515151',
		  'color_btn_primary_bg_hover' => '#333333',
		  'color_footer_btn_bg' => '#353535',
		  'color_footer_btn_bg_hover' => '#000000',
		  'color_misc_overlay' => 'rgba(40,40,40,0.12)',
		  'header' => false,
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'color_section_heading_border' => '#515151',
		  'color_section_heading_accent' => '#515151',
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'haligncenter',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'neuzeit-grotesk',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'premiere' => array(
						'name'              => 'Premiere',
						'preview_image_url' => '/images/demo-import/premiere.png',
						'preset'            => 'premiere',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => '',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '0px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_tiles_layout' => '9',
		  'home_tiles_button' => false,
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_exclude' => true,
		  'home_tiles_height' => '600px',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_first_post' => false,
		  'home_reduce_margin' => true,
		  'style_align' => 'left',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-sidebar-right',
		  'header' => false,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-white.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-white@2x.png',
		  'navbar_height' => '70px',
		  'navbar_alignment' => 'left',
		  'navbar_toggle' => true,
		  'typography_headings' =>
		  array (
			'font-family' => 'Oswald',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0pc',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'home_more_button' => false,
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_headings_title_blocks' => '#ff0000',
		  'colors_topbar_bg_toggle_next' => false,
		  'colors_topbar_bg' => '#eaeaea',
		  'colors_topbar_main_links_hover' => '#5e5e5e',
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'colors_topbar_main_links' => '#0a0a0a',
		  'home_carousel_title' => 'Top-10 Upcoming Movies',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-main@2x.png',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Noto Sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Noto Sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Noto Sans',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_submenu_bg' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#dddddd',
		  'colors_navbar_submenu_items_links_hover' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'topbar_container' => 'cs-container',
		  'navbar_container' => 'cs-container',
		  'topbar_content_right_select' => 'search',
		  'navbar_social' => false,
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/premiere/wp-content/uploads/sites/30/2019/06/movie-logo-main@2x.png',
		  'offcanvas_topbar_height' => '70px',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#ff0000',
		  'color_btn_primary_bg_hover' => '#d60404',
		  'colors_topbar_borders' => true,
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'post_layout_default' => false,
		  'color_section_heading_text' => '#ff0100',
		  'section_heading' => 'style-4',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_color_text' => '#ff0000',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#000000',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_border' => '#282828',
		  'color_widgetized_submenu_text' => '#939393',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu' => 'style-4',
		  'section_heading_submenu_color_border' => '#3f3f3f',
		  'section_heading_submenu_color_text' => '#ffffff',
		),
						'mods_typekit'      => array (
		),
					), 'street-boheme' => array(
						'name'              => 'Street Boheme',
						'preview_image_url' => '/images/demo-import/street-boheme.png',
						'preset'            => 'street-boheme',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => true,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => false,
		  'home_tiles_padding' => '0px',
		  'header_background_object' =>
		  array (
			'background-color' => '#000000',
			'background-image' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/11/authentic-demo-image-00043.jpg',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'multiple',
		  'header_layout' => 'center',
		  'header_height' => '260px',
		  'header_background' => true,
		  'colors_navbar_borders' => true,
		  'topbar' => false,
		  'colors_navbar_bg' => 'rgba(255,255,255,0.97)',
		  'colors_navbar_bg_toggle_next' => false,
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_columns' => '3',
		  'home_orientation' => 'original',
		  'home_carousel_exclude' => true,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/06/style-large.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/06/style-large@2x.png',
		  'home_tiles_height' => '570px',
		  'header_content_left_select' => 'toggle',
		  'header_content_right_select' => 'social',
		  'header_content_right_social_accounts_labels' => false,
		  'navbar_toggle' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => true,
		  'home_tiles_layout' => '2',
		  'typography_h1' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_slider_button' => false,
		  'home_slider_heading' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0.0125rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_title' => 'Summer in the City',
		  'home_carousel_orientation' => 'portrait',
		  'home_meta' => false,
		  'home_more_button' => true,
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Overpass',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'color_text' => '#000000',
		  'typography_text_small' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_meta' => false,
		  'typography_text_large' =>
		  array (
			'font-family' => 'Overpass',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/11/street-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/11/street-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/06/street-main.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/06/street-main@2x.png',
		  'navbar_height' => '60px',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/06/street-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/06/street-main@2x.png',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#cbb59e',
		  'color_btn_primary_bg_hover' => '#b89d7e',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#bca385',
		  'color_footer_btn_bg_hover' => '#af956e',
		  'color_footer_title' => '#d6d6d6',
		  'colors_navbar_submenu_bg' => '#ffffff',
		  'colors_navbar_submenu_items_links' => '#000000',
		  'colors_navbar_submenu_items_links_hover' => '#cbb59e',
		  'colors_navbar_submenu_items_links_active' => '#cbb59e',
		  'colors_navbar_submenu_items_borders' => '#eeeeee',
		  'color_post_paragraph' => '#000000',
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Cormorant Garamond',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'home_widgets' => true,
		  'layout_columns' => '3',
		  'home_widgets_repeat' => true,
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/11/street-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/street-boheme/wp-content/uploads/sites/31/2019/11/street-main@2x.png',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'page_header' => 'simple',
		  'post_carousel_title' => 'Wardrobe of the Week',
		  'post_carousel' => true,
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'section_heading' => 'style-9',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'section_heading_footer_default' => false,
		  'colors_navbar_main_links_hover' => '#cbb59e',
		  'offcanvas_topbar_height' => '60px',
		  'section_heading_color_accent' => '#000000',
		  'header_video_url' => 'https://youtu.be/L8meY6GVAKY',
		  'header_video_start' => '39',
		  'header_video_end' => '70',
		  'header_parallax' => true,
		  'header' => true,
		  'color_category' => '#bca280',
		  'color_category_hover' => '#000000',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_title' => 'Subscribe',
		  'navbar_single_column_image' => 485,
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'Overpass',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer' => 'style-9',
		  'section_heading_footer_color_accent' => '#ffffff',
		  'section_heading_footer_align' => 'haligncenter',
		),
						'mods_typekit'      => array (
		  'typography_block_title' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '3rem',
			'letter-spacing' => '',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'aw-conqueror-didot',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'artefact' => array(
						'name'              => 'Artefact',
						'preview_image_url' => '/images/demo-import/artefact.png',
						'preset'            => 'artefact',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => true,
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'The Artefact',
		  'offcanvas_logo_text' => 'The Artefact',
		  'home_tiles' => true,
		  'home_tiles_padding' => '0px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_tiles_layout' => '5',
		  'home_tiles_exclude' => true,
		  'home_archive_default' => false,
		  'home_archive_type' => 'standard',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-sidebar-right',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#091c68',
		  'color_btn_primary_bg_hover' => '#0b227e',
		  'color_footer_bg' => '#f9f9f9',
		  'color_footer_text' => '#999999',
		  'color_footer_title' => '#000000',
		  'color_footer_link_hover' => '#f2f2f2',
		  'color_footer_border' => '#05053c',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_text_secondary' => '#615f5f',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/10/artefact-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/10/artefact-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/06/artefact-large-logo.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/06/artefact-large-logo@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/06/artefact-large-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/06/artefact-large-white@2x.png',
		  'header_height' => '120px',
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_limit' => '4',
		  'header_content_right_select' => 'button',
		  'topbar_content_right_select' => 'menu',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'multiple',
		  'colors_navbar_borders' => false,
		  'topbar' => false,
		  'topbar_content_left_select' => 'search',
		  'home_slider_height' => '500px',
		  'home_slider_heading' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-.125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_slider_padding' => '0px',
		  'home_slider_visible' => '2',
		  'home_tiles_height' => '570px',
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'square',
		  'home_widgets' => true,
		  'style_align' => 'left',
		  'typography_headings' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.25rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'home_carousel_title' => 'Get the Look',
		  'color_text' => '#161616',
		  'typography_menus' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_footer_btn_bg' => '#091c68',
		  'color_footer_btn_bg_hover' => '#0b2488',
		  'color_footer_link' => '#000000',
		  'footer_logo_text' => 'The Artefact',
		  'footer_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_height' => '60px',
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_button' => false,
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Playfair Display',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'color_post_paragraph' => '#353535',
		  'home_pagination_type' => 'ajax',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/10/artefact-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/10/artefact-main@2x.png',
		  'colors_navbar_bg' => '#ffffff',
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading' => 'style-16',
		  'section_heading_align' => 'halignleft',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'offcanvas_topbar_height' => '70px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/10/artefact-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/artefact/wp-content/uploads/sites/32/2019/10/artefact-main@2x.png',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'Source Sans Pro',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_align' => 'halignleft',
		  'section_heading_submenu' => 'style-2',
		  'navbar_single_column_image' => 461,
		),
						'mods_typekit'      => array (
		),
					), 'sneakerhead' => array(
						'name'              => 'Sneakerhead',
						'preview_image_url' => '/images/demo-import/sneakerhead.png',
						'preset'            => 'sneakerhead',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Sneakerhead',
		  'navbar_logo_text' => 'Sneakerhead',
		  'offcanvas_logo_text' => 'Sneakerhead',
		  'home_tiles' => true,
		  'home_tiles_padding' => '10px',
		  'header_background_object' =>
		  array (
			'background-color' => '#000000',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_widgets' => true,
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#af9259',
		  'color_btn_primary_bg_hover' => '#000000',
		  'color_btn_secondary_text' => '#ffffff',
		  'header_height' => '100px',
		  'header_logo_select' => 'text',
		  'header_logo_default_url' => 'https://authentictheme.com/sneakerhead/wp-content/uploads/sites/33/2019/10/sneakerhead-large-black.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/sneakerhead/wp-content/uploads/sites/33/2019/10/sneakerhead-large-black@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/sneakerhead/wp-content/uploads/sites/33/2019/06/sneakerhead-large-logo.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/sneakerhead/wp-content/uploads/sites/33/2019/06/sneakerhead-large-logo@2x.png',
		  'header_background' => false,
		  'colors_navbar_bg' => 'rgba(0,0,0,0.97)',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_main_links_hover' => '#96804a',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#0f0f0f',
		  'colors_topbar_borders' => false,
		  'colors_topbar_main_links' => '#cecece',
		  'colors_topbar_main_links_hover' => '#e8e8e8',
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons_hover' => '#dddddd',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'header_description_text' => '',
		  'home_tiles_layout' => '5',
		  'style_align' => 'left',
		  'home_tiles_exclude' => true,
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_first_post' => false,
		  'home_list_width' => '5',
		  'home_widgets_repeat' => true,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_meta' => false,
		  'color_category' => '#96804a',
		  'color_category_hover' => '#a0a0a0',
		  'topbar_content_left_select' => 'menu',
		  'topbar_content_right_select' => 'none',
		  'header_content_left_select' => 'toggle',
		  'header_content_right_select' => 'button',
		  'topbar' => false,
		  'navbar_alignment' => 'center',
		  'navbar_toggle' => false,
		  'navbar_social' => false,
		  'colors_navbar_social_icons' => '#ffffff',
		  'colors_navbar_social_icons_hover' => '#e0e0e0',
		  'colors_navbar_social_text' => '#ffffff',
		  'colors_navbar_social_text_hover' => '#e0e0e0',
		  'header_layout' => 'center',
		  'navbar_cart' => true,
		  'home_tiles_meta' => false,
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'navbar_height' => '50px',
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => '',
		  'footer_logo_retina_url' => '',
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => '',
		  'offcanvas_logo_retina_url' => '',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => false,
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_post_paragraph' => '#444444',
		  'post_layout_default' => false,
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_carousel_orientation' => 'landscape',
		  'colors_navbar_bg_toggle_next' => false,
		  'header' => true,
		  'footer_logo_text' => 'Sneakerhead',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_image' => 494,
		),
						'mods_typekit'      => array (
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'franklin-gothic-urw',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'franklin-gothic-urw-compressed',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'franklin-gothic-urw-compressed',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'franklin-gothic-urw-compressed',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'archivo-black',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.625rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3rem',
			'letter-spacing' => '-0.125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'archivo-black',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'archivo-black',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'athlete' => array(
						'name'              => 'Athlete',
						'preview_image_url' => '/images/demo-import/athlete.png',
						'preset'            => 'athlete',
						'mods'              => array (
		  'home_slider' => true,
		  'home_carousel' => true,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_slider_type' => 'large',
		  'header_layout' => 'left',
		  'topbar' => false,
		  'navbar_alignment' => 'left',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/06/sport-large-red.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/06/sport-large-red@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/06/sport-large.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/06/sport-large@2x.png',
		  'header_content_right_select' => 'search',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-sidebar-right',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_columns' => '3',
		  'home_first_post' => false,
		  'home_carousel_title' => 'Latest News',
		  'home_carousel_exclude' => true,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'square',
		  'style_align' => 'left',
		  'color_btn_primary_bg' => '#f82525',
		  'color_btn_primary_bg_hover' => '#f82525',
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_borders' => true,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-overlay@2x.png',
		  'color_footer_bg' => '#101315',
		  'color_footer_link' => '#ffffff',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-footer.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-footer@2x.png',
		  'color_btn_primary_text' => '#ffffff',
		  'color_footer_text' => '#e8e8e8',
		  'color_footer_title' => '#ffffff',
		  'color_footer_border' => '#212226',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/athlete/wp-content/uploads/sites/34/2019/10/athlete-main@2x.png',
		  'color_footer_btn_bg' => '#cb1628',
		  'color_footer_btn_bg_hover' => '#b21424',
		  'home_reduce_margin' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'header' => false,
		  'navbar_search' => true,
		  'navbar_height' => '60px',
		  'colors_navbar_submenu_bg' => '#cb1628',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#ffffff',
		  'colors_navbar_submenu_items_links_hover' => '#e0e0e0',
		  'colors_navbar_submenu_items_links_active' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_borders' => '#b91223',
		  'offcanvas_topbar_height' => '60px',
		  'color_section_heading_border' => '#000000',
		  'colors_navbar_submenu_inverse_badges' => true,
		  'section_heading' => 'style-3',
		  'section_heading_color_border' => '#191919',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_footer_default' => false,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#cb1628',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_link_hover' => '#d1d1d1',
		  'color_widgetized_submenu_border' => '#aa1121',
		  'section_heading_submenu_color_text' => '#ffffff',
		  'section_heading_submenu_align' => 'halignleft',
		  'navbar_single_column_image' => 0,
		  'color_widgetized_submenu_text' => '#e0e0e0',
		  'color_widgetized_submenu_text_secondary' => '#dddddd',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => 'c',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'health-and-care' => array(
						'name'              => 'Health and Care',
						'preview_image_url' => '/images/demo-import/health-and-care.png',
						'preset'            => 'health-and-care',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Health &amp; Care',
		  'navbar_logo_text' => 'Health &amp; Care',
		  'offcanvas_logo_text' => 'Health &amp; Care',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#fbf5ed',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#06acb9',
		  'color_btn_primary_bg_hover' => '#e0228e',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_columns' => '3',
		  'home_first_post' => false,
		  'header_layout' => 'center',
		  'header_background' => false,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#06bdca',
		  'colors_topbar_main_links' => '#ffffff',
		  'colors_topbar_main_links_hover' => '#0d7b7b',
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons_hover' => '#efefef',
		  'colors_topbar_social_text' => '#ffffff',
		  'colors_topbar_social_text_hover' => '#e2e2e2',
		  'style_align' => 'left',
		  'navbar_alignment' => 'center',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_headings_title_blocks' => '#000000',
		  'colors_accent' => '#ebf3f4',
		  'color_category' => '#06acb9',
		  'color_category_hover' => '#000000',
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_text' => '#b5b5b5',
		  'color_text_secondary' => '#b7b7b7',
		  'color_links' => '#474747',
		  'color_links_hover' => '#06acb9',
		  'footer_subscribe_message' => 'Fitness and nutrition tips, health news, and more.',
		  'header_description_text' => 'Nutrition and fitness news, health tips, and more.',
		  'header_description_font' =>
		  array (
			'font-family' => 'Lato',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_main_links_hover' => '#06acb9',
		  'colors_navbar_submenu_items_links_hover' => '#06acb9',
		  'colors_navbar_submenu_items_links_active' => '#06acb9',
		  'color_footer_bg' => '#ebf3f4',
		  'color_footer_text' => '#565656',
		  'color_footer_title' => '#06acb9',
		  'color_footer_link' => '#000000',
		  'color_footer_border' => '#d3e3e3',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_link_hover' => '#06acb9',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'widgets',
			3 => 'info',
		  ),
		  'footer_subscribe_title' => 'Subscribe to Our Newsletter',
		  'footer_logo_text' => 'Health &amp; Care',
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'topbar' => false,
		  'navbar_social' => false,
		  'color_post_paragraph' => '#3c383a',
		  'color_headings_links_hover' => '#e0228e',
		  'navbar_height' => '70px',
		  'section_heading' => 'style-6',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_footer_default' => false,
		  'section_heading_footer_color_text' => '#000000',
		  'section_heading_submenu_color_text' => '#06acb9',
		  'color_widgetized_submenu_link_hover' => '#e0228e',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'proxima-nova-condensed',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'ivymode',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'ivymode',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'ivymode',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'ivymode',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'apparent' => array(
						'name'              => 'Apparent',
						'preview_image_url' => '/images/demo-import/apparent.png',
						'preset'            => 'apparent',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Apparent',
		  'offcanvas_logo_text' => 'Apparent',
		  'home_tiles' => false,
		  'home_tiles_padding' => '10px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_body_bg' => '#ffffff',
		  'header_background' => true,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_navbar_borders' => true,
		  'colors_topbar_borders' => false,
		  'home_tiles_exclude' => true,
		  'home_tiles_layout' => '8',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-.125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'style_align' => 'left',
		  'home_tiles_meta' => false,
		  'home_tiles_button' => false,
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'portrait',
		  'home_carousel_meta' => false,
		  'home_carousel_title' => 'What to Wear this Summer?',
		  'footer_subscribe_title' => 'Subscribe to Our Newsletter',
		  'footer_subscribe_message' => 'Find out first about discounts and updates.',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_columns' => '3',
		  'home_first_post' => false,
		  'home_meta' => false,
		  'home_summary' => false,
		  'label_readmore' => 'View More',
		  'home_orientation' => 'original',
		  'color_btn_primary_bg' => '#181615',
		  'color_btn_primary_text' => '#ffffff',
		  'colors_navbar_bg_toggle_next' => false,
		  'header' => false,
		  'footer_subscribe_name' => true,
		  'topbar_content_right_select' => 'search',
		  'navbar_cart' => true,
		  'topbar_height' => '50px',
		  'navbar_height' => '60px',
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'color_btn_primary_text_hover' => '#ffffff',
		  'color_footer_bg' => '#f0eee9',
		  'color_footer_text' => '#aaaaaa',
		  'color_footer_title' => '#000000',
		  'color_footer_link' => '#000000',
		  'color_footer_border' => '#ddd8ce',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'color_btn_primary_bg_hover' => '#0a0a0a',
		  'home_widgets' => true,
		  'home_widgets_repeat' => true,
		  'colors_navbar_submenu_bg' => '#f0eee9',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#403f3a',
		  'colors_navbar_submenu_items_borders' => '#ccc7b6',
		  'colors_navbar_submenu_items_links_hover' => '#000000',
		  'colors_navbar_submenu_items_links_active' => '#000000',
		  'custom_content_home_carousel_before' => '',
		  'custom_content_home_carousel_after' => '<div class="cs-container" style="margin-top: 40px; margin-bottom: 30px; ">
		[products per_page="4" columns="4"]
		</div>',
		  'color_text_secondary' => '#a3a3a3',
		  'custom_content_archive_main_after' => '',
		  'custom_content_home_header_before' => '',
		  'custom_content_home_header_after' => '',
		  'custom_content_page_header_before' => '',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_section_heading_border' => '#181815',
		  'section_heading' => 'style-17',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_color_border' => '#232323',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#f0eee9',
		  'color_widgetized_submenu_border' => '#ccc7b6',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'halignleft',
		  'navbar_single_column_image' => 490,
		),
						'mods_typekit'      => array (
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.375em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.375em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.9375rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.375em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'futura-pt',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'futura-pt',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		),
					), 'resonance' => array(
						'name'              => 'Resonance',
						'preview_image_url' => '/images/demo-import/resonance.png',
						'preset'            => 'resonance',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Resonance',
		  'navbar_logo_text' => 'Resonance',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '20px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#dd2029',
		  'color_btn_primary_bg_hover' => '#bb1a22',
		  'style_align' => 'left',
		  'home_slider_exclude' => true,
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_slider_type' => 'boxed',
		  'color_post_links' => '#000000',
		  'color_category' => '#dd2029',
		  'color_category_hover' => '#b5b5b5',
		  'color_headings_links' => '#000000',
		  'color_headings_links_hover' => '#000000',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_more_button' => false,
		  'home_list_width' => '5',
		  'home_pagination_type' => 'ajax',
		  'color_body_bg' => '#f6f6f6',
		  'colors_accent' => '#ffffff',
		  'colors_navbar_borders' => false,
		  'header_background' => true,
		  'colors_topbar_bg_toggle_next' => true,
		  'color_footer_bg' => '#ffffff',
		  'color_footer_link' => '#000000',
		  'color_footer_title' => '#dd2029',
		  'color_footer_text' => '#b3b6c1',
		  'color_footer_border' => '#eeeeee',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'info',
			2 => 'instagram',
		  ),
		  'color_footer_btn_bg' => '#dd2029',
		  'color_footer_btn_bg_hover' => '#b61a21',
		  'colors_navbar_main_links_hover' => '#dd2029',
		  'colors_navbar_submenu_items_links_hover' => '#dd2029',
		  'colors_navbar_submenu_items_links_active' => '#dd2029',
		  'colors_navbar_main_links' => '#000000',
		  'color_text' => '#7a7a89',
		  'color_text_secondary' => '#75798e',
		  'color_links' => '#22232a',
		  'color_footer_link_hover' => '#4e515f',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'header' => false,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo-white.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo-white@2x.png',
		  'navbar_height' => '75px',
		  'topbar_height' => '40px',
		  'colors_topbar_main_links' => '#8c8e95',
		  'colors_topbar_social_icons' => '#0a0a0a',
		  'home_tiles_exclude' => true,
		  'home_tiles_layout' => '8',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_button' => false,
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'square',
		  'offcanvas_topbar_height' => '70px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo@2x.png',
		  'colors_topbar_borders' => false,
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/resonance/wp-content/uploads/sites/37/2019/06/events-main-logo@2x.png',
		  'navbar_search' => true,
		  'color_misc_overlay_hover' => 'rgba(221,32,41,0.5)',
		  'color_headings_title_blocks' => '#35353a',
		  'section_heading' => 'style-9',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'hello-chloe' => array(
						'name'              => 'Hello Chloe',
						'preview_image_url' => '/images/demo-import/hello-chloe.png',
						'preset'            => 'hello-chloe',
						'mods'              => array (
		  'home_slider' => '1',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_columns' => '3',
		  'color_footer_bg' => '#f5ede4',
		  'color_footer_text' => '#424242',
		  'color_footer_title' => '#000000',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_border' => '#edac82',
		  'typography_h1' =>
		  array (
			'font-size' => '3.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'portrait',
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Crimson Text',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Poppins',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'home_slider_heading' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Poppins',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_body_bg' => '#fbf9f5',
		  'colors_navbar_bg' => '#fbf9f5',
		  'color_btn_primary_bg' => '#d5976b',
		  'color_btn_primary_bg_hover' => '#cb7e48',
		  'color_btn_primary_text' => '#ffffff',
		  'color_text_secondary' => '#a8a8a8',
		  'color_footer_link' => '#000000',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'topbar' => false,
		  'header_height' => '140px',
		  'effects_navbar_scroll' => true,
		  'colors_navbar_submenu_bg' => '#191919',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#ffffff',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-large.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-large@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-large-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-large-white@2x.png',
		  'header_content_left_select' => 'button',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_limit' => '4',
		  'home_carousel_title' => 'My Beauty Resolutions',
		  'color_misc_overlay' => 'rgba(91,85,76,0.11)',
		  'color_misc_overlay_hover' => 'rgba(40,40,40,0.19)',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-main@2x.png',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/hello-chloe/wp-content/uploads/sites/38/2019/06/chloe-main@2x.png',
		  'colors_offcanvas_navbar_bg' => '#fbf9f5',
		  'home_widgets' => true,
		  'header_description_text' => 'Serial Coffee Drinker',
		  'header_description_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.25em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_layout' => 'center',
		  'header_content_right_select' => 'search',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'colors_logo_description' => '#d5976b',
		  'color_text' => '#9b9b9b',
		  'color_headings_links_hover' => '#d5976b',
		  'color_post_links_hover' => '#d5976b',
		  'color_category_hover' => '#d5976b',
		  'colors_accent' => '#ffffff',
		  'typography_text_large' =>
		  array (
			'font-family' => 'Crimson Text',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Poppins',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'color_section_heading_border' => '#d4986b',
		  'color_section_heading_accent' => '#0a0a0a',
		  'section_heading' => 'style-16',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_color_border' => '#e2bba1',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#191919',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'Poppins',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_align' => 'haligncenter',
		  'section_heading_submenu_color_text' => '#ffffff',
		  'navbar_single_column_image' => 490,
		  'color_widgetized_submenu_text' => '#b2b2b2',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'masqualero',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'masqualero',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'masqualero',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		),
					), 'superficial' => array(
						'name'              => 'Superficial',
						'preview_image_url' => '/images/demo-import/superficial.png',
						'preset'            => 'superficial',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Superficial',
		  'navbar_logo_text' => 'superficial',
		  'offcanvas_logo_text' => 'superficial',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => 'https://authentictheme.com/superficial/wp-content/uploads/sites/39/2019/06/authentic-demo-image-00042.jpg',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'typography_h1' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'topbar' => false,
		  'header_height' => '170px',
		  'header_background' => true,
		  'header_content_left_select' => 'button',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_limit' => '4',
		  'header_logo_font' =>
		  array (
			'font-family' => 'acumin-pro',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '0.125rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => 'https://authentictheme.com/superficial/wp-content/uploads/sites/39/2019/06/superficial-logo-large.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/superficial/wp-content/uploads/sites/39/2019/06/superficial-logo-large@2x.png',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'boxed',
		  'style_align' => 'left',
		  'colors_navbar_borders' => true,
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#0a0a0a',
		  'color_btn_primary_bg_hover' => '#333333',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_title' => 'The Latest',
		  'home_slider_heading' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'square',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_widgets' => true,
		  'home_widgets_repeat' => true,
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_meta' => false,
		  'color_category' => '#000000',
		  'color_category_hover' => '#383838',
		  'home_carousel_meta' => false,
		  'footer_components' =>
		  array (
			0 => 'info',
		  ),
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_carousel_orientation' => 'square',
		  'color_text' => '#888888',
		  'color_text_secondary' => '#888888',
		  'header_description_text' => 'Lifestyle Blog',
		  'header_description_font' =>
		  array (
			'font-family' => 'acumin-pro',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => 'https://authentictheme.com/superficial/wp-content/uploads/sites/39/2019/06/superficial-main-logo.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/superficial/wp-content/uploads/sites/39/2019/06/superficial-main-logo@2x.png',
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => '',
		  'footer_logo_retina_url' => '',
		  'header_content_left_button_text' => 'Follow',
		  'header_content_left_button_icon' => 'instagram',
		  'header' => false,
		  'navbar_search' => true,
		  'navbar_height' => '100px',
		  'footer_logo_text' => 'superficial',
		  'color_post_paragraph' => '#888888',
		  'colors_navbar_bg_toggle_next' => false,
		  'colors_navbar_submenu_bg' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#e5e5e5',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'offcanvas_topbar_height' => '100px',
		  'navbar_container' => 'cs-container',
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_title' => 'Follow',
		  'navbar_single_column_image' => 482,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#000000',
		  'color_widgetized_submenu_title' => '#ffffff',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'halignleft',
		  'section_heading_submenu_color_text' => '#ffffff',
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1.125rem',
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '800',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '800',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.05rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '800',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 800,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'aktiv-grotesk',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'farniente' => array(
						'name'              => 'Farniente',
						'preview_image_url' => '/images/demo-import/farniente.png',
						'preset'            => 'farniente',
						'mods'              => array (
		  'home_slider' => '1',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => '',
		  'navbar_logo_text' => 'Farniente',
		  'offcanvas_logo_text' => 'Farniente',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_orientation' => 'portrait',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_topbar_bg_toggle_next' => false,
		  'colors_topbar_bg' => '#000000',
		  'header' => false,
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'wide',
		  'colors_navbar_borders' => true,
		  'colors_navbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons' => '#000000',
		  'colors_topbar_social_icons_hover' => '#000000',
		  'navbar_height' => '90px',
		  'navbar_alignment' => 'center',
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'landscape',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'info',
			2 => 'instagram',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#1a1a1a',
		  'color_btn_primary_bg_hover' => '#2d2d2d',
		  'topbar' => false,
		  'navbar_search' => true,
		  'offcanvas_topbar_height' => '90px',
		  'style_align' => 'left',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'color_section_heading_border' => '#141414',
		  'section_heading' => 'style-4',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_footer_default' => false,
		  'section_heading_submenu_align' => 'halignleft',
		  'navbar_single_column_image' => 472,
		  'section_heading_submenu' => 'style-4',
		  'section_heading_footer' => 'style-4',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '1.125rem',
			'letter-spacing' => '-0.00625em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'neue-haas-grotesk-display',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		),
					), 'revolver' => array(
						'name'              => 'Revolver',
						'preview_image_url' => '/images/demo-import/revolver.png',
						'preset'            => 'revolver',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Revolver',
		  'navbar_logo_text' => 'Revolver',
		  'offcanvas_logo_text' => 'Revolver',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#b7ccd2',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_tiles_exclude' => true,
		  'home_tiles_layout' => '1',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_first_post' => false,
		  'home_reduce_margin' => false,
		  'home_pagination_type' => 'ajax',
		  'home_widgets' => true,
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_columns' => '3',
		  'home_orientation' => 'portrait',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'layout' => 'layout-sidebar-right',
		  'style_align' => 'left',
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_title' => 'Latest Posts',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#333333',
		  'color_btn_primary_bg_hover' => '#212121',
		  'topbar' => false,
		  'header_background' => false,
		  'colors_navbar_bg' => '#a1adb4',
		  'colors_navbar_borders' => false,
		  'header_height' => '120px',
		  'color_body_bg' => '#fafafa',
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_limit' => '4',
		  'navbar_height' => '60px',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_footer_bg' => '#000000',
		  'color_footer_text' => '#f2f2f2',
		  'color_footer_link' => '#ffffff',
		  'color_footer_link_hover' => '#8c8c8c',
		  'color_text_secondary' => '#b2b2b2',
		  'color_footer_btn_text' => '#ffffff',
		  'color_category' => '#000000',
		  'colors_navbar_submenu_items_links_hover' => '#9e9e9e',
		  'colors_navbar_submenu_items_links_active' => '#9e9e9e',
		  'colors_navbar_main_links_hover' => '#2d4048',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'header' => false,
		  'navbar_sticky' => false,
		  'post_layout_default' => false,
		  'post_layout' => 'layout-sidebar-right',
		  'post_page_header_default' => false,
		  'post_page_header' => 'wide',
		  'colors_accent' => '#ffffff',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_height' => '670px',
		  'home_carousel_orientation' => 'portrait',
		  'colors_navbar_bg_toggle_next' => false,
		  'offcanvas_topbar_height' => '60px',
		  'footer_logo_text' => 'Revolver',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => '',
		  'offcanvas_logo_retina_url' => '',
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'section_heading_align' => 'haligncenter',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_image' => 471,
		  'section_heading_submenu_default' => false,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'neuzeit-grotesk',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '0.75rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.4375rem',
			'letter-spacing' => '0.25em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.25em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.25rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'neuzeit-grotesk',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'endless-summer' => array(
						'name'              => 'Endless Summer',
						'preview_image_url' => '/images/demo-import/endless-summer.png',
						'preset'            => 'endless-summer',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Endless Summer',
		  'offcanvas_logo_text' => 'Endless Summer',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2017/10/authentic-demo-image-00018.jpg',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'header_height' => '150px',
		  'header_background' => false,
		  'colors_navbar_bg' => '#4be3e6',
		  'colors_navbar_borders' => false,
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_main_links_hover' => '#0e6a6c',
		  'topbar' => false,
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'portrait',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'home_columns' => '3',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_reduce_margin' => true,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/summer-large-black.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/summer-large-black@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/06/summer-large-logo.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/06/summer-large-logo@2x.png',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_text' => '#b2b2b8',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#18abae',
		  'color_btn_primary_bg_hover' => '#18babd',
		  'color_footer_bg' => '#ecf2f2',
		  'color_footer_text' => '#686868',
		  'color_footer_title' => '#12898b',
		  'color_footer_border' => '#18b0b3',
		  'color_footer_link_hover' => '#0a0a0a',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#0e6a6c',
		  'color_footer_btn_bg_hover' => '#108688',
		  'color_text_secondary' => '#e0e0e0',
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => true,
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'navbar_height' => '60px',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'colors_navbar_bg_toggle_next' => false,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/endless-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/endless-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/endless-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/endless-main@2x.png',
		  'color_footer_link' => '#3a3a3a',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/endless-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/endless-summer/wp-content/uploads/sites/42/2019/10/endless-main@2x.png',
		  'offcanvas_topbar_height' => '60px',
		  'color_section_heading_border' => '#18abae',
		  'color_section_heading_accent' => '#000000',
		  'section_heading' => 'style-17',
		  'section_heading_align' => 'haligncenter',
		  'typography_h1_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h2_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h3_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h4_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h5_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'typography_h6_override_font' =>
		  array (
			'font-family' => 'initial',
			'variant' => '',
			'font-backup' => '',
			'font-weight' => 0,
			'font-style' => '',
		  ),
		  'section_heading_color_border' => '#18abae',
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => false,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'europa',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'europa',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'gloss-philosophy' => array(
						'name'              => 'Gloss Philosophy',
						'preview_image_url' => '/images/demo-import/gloss-philosophy.png',
						'preset'            => 'gloss-philosophy',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Gloss Philosophy',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => true,
		  'home_tiles_padding' => '10px',
		  'header_background_object' =>
		  array (
			'background-color' => 'rgba(0,0,0,0.87)',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/gloss-large.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/gloss-large@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/gloss-large-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/gloss-large-white@2x.png',
		  'header_layout' => 'logo',
		  'header_height' => '160px',
		  'header_background' => false,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#191919',
		  'colors_topbar_borders' => false,
		  'home_tiles_layout' => '3',
		  'home_tiles_exclude' => true,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_topbar_main_links' => '#d6d6d6',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'typography_menus' =>
		  array (
			'font-family' => 'Karla',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Karla',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/beauty-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/beauty-main@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/beauty-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/beauty-main@2x.png',
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Montserrat',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Montserrat',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Montserrat',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Montserrat',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'subscribe',
			2 => 'info',
		  ),
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/beauty-main-white.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/gloss-philosophy/wp-content/uploads/sites/43/2019/06/beauty-main-white@2x.png',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#dd6496',
		  'color_btn_primary_bg_hover' => '#eb6f9c',
		  'colors_navbar_main_links_hover' => '#ec1066',
		  'colors_navbar_submenu_items_links_hover' => '#ec1066',
		  'colors_navbar_submenu_items_links_active' => '#ec1066',
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_borders' => true,
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'colors_navbar_submenu_bg' => '#191919',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#ededed',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'topbar' => false,
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'color_section_heading_border' => '#d8d8d8',
		  'section_heading' => 'style-11',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_color_accent' => '#000000',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'navbar_single_column_image' => 461,
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'questa-grande',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'questa-grande',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'questa-grande',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'questa-grande',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'weekender' => array(
						'name'              => 'Weekender',
						'preview_image_url' => '/images/demo-import/weekender.png',
						'preset'            => 'weekender',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Weekender',
		  'navbar_logo_text' => 'Weekender',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_slider_type' => 'large',
		  'home_slider_exclude' => true,
		  'colors_navbar_bg_toggle_next' => false,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'style_align' => 'left',
		  'display_published_date' => true,
		  'header_logo_font' =>
		  array (
			'font-family' => 'Montserrat',
			'variant' => '600',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'topbar' => false,
		  'header' => true,
		  'colors_navbar_bg' => '#1a222c',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#000000',
		  'navbar_height' => '70px',
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'objektiv-mk1',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'home_slider_heading' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#bba171',
		  'color_btn_primary_bg_hover' => '#af9155',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_first_post' => false,
		  'home_more_button' => true,
		  'home_orientation' => 'landscape',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_meta' => true,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-navbar.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-navbar@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-large-white.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-large-white.png',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-large-logo.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-large-logo@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-large-white.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-large-white@2x.png',
		  'effects_navbar_scroll' => true,
		  'header_background' => false,
		  'header_video_url' => 'https://youtu.be/JSGm9Z27los',
		  'header_video_end' => '12',
		  'header_height' => '150px',
		  'header_layout' => 'center',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-navbar.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-navbar@2x.png',
		  'home_carousel_orientation' => 'square',
		  'color_footer_bg' => '#e8e5dd',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#bba171',
		  'color_footer_btn_bg_hover' => '#af9259',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'widgets',
			2 => 'info',
		  ),
		  'color_footer_title' => '#0a0a0a',
		  'color_footer_text' => '#303030',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#1a222c',
		  'colors_topbar_borders' => false,
		  'colors_topbar_main_links' => '#ffffff',
		  'colors_topbar_main_links_hover' => '#e8e8e8',
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_links_hover' => '#cccccc',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'colors_offcanvas_borders' => true,
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-navbar.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/weekender/wp-content/uploads/sites/44/2019/10/weekender-navbar@2x.png',
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'post_page_header' => 'large',
		  'color_footer_border' => '#c7bdad',
		  'home_carousel_title' => '10 Coolest Hostels In Madrid',
		  'header_description_text' => '',
		  'navbar_alignment' => 'center',
		  'navbar_search' => false,
		  'navbar_social' => false,
		  'offcanvas_topbar_height' => '70px',
		  'color_footer_link' => '#000000',
		  'navbar_container' => 'cs-container-fluid',
		  'navbar_toggle' => true,
		  'header_content_right_select' => 'search',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'footer_text' => '',
		  'layout' => 'layout-sidebar-right',
		  'section_heading' => 'style-16',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_color_border' => '#dfdfd7',
		  'section_heading_color_accent' => '#bba171',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_footer_default' => false,
		  'section_heading_footer_color_text' => '#000000',
		  'section_heading_submenu_align' => 'halignleft',
		  'section_heading_footer_align' => 'haligncenter',
		  'navbar_single_column_image' => 478,
		  'section_heading_submenu' => 'style-16',
		  'section_heading_footer' => 'style-16',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1.0625rem',
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.625rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'paparazzi' => array(
						'name'              => 'Paparazzi',
						'preview_image_url' => '/images/demo-import/paparazzi.png',
						'preset'            => 'paparazzi',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Paparazzi',
		  'navbar_logo_text' => 'Paparazzi',
		  'offcanvas_logo_text' => 'Paparazzi',
		  'home_tiles' => true,
		  'home_tiles_padding' => '20px',
		  'header_background_object' =>
		  array (
			'background-color' => '#ffffff',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#000000',
		  'colors_topbar_borders' => false,
		  'colors_topbar_main_links' => '#e5e5e5',
		  'header_height' => '140px',
		  'topbar' => true,
		  'header_background' => false,
		  'colors_navbar_bg' => '#f4f4f4',
		  'colors_navbar_borders' => true,
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#b30010',
		  'color_btn_primary_bg_hover' => '#e00416',
		  'home_archive_default' => false,
		  'home_archive_type' => 'grid',
		  'typography_h1' =>
		  array (
			'font-size' => '3.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_summary' => true,
		  'home_meta' => false,
		  'home_more_button' => false,
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Raleway',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Raleway',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'Raleway',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_columns' => '3',
		  'home_widgets' => false,
		  'header' => true,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/paparazzi/wp-content/uploads/sites/45/2019/10/paparazzi-large.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/paparazzi/wp-content/uploads/sites/45/2019/10/paparazzi-large@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/paparazzi/wp-content/uploads/sites/45/2019/10/paparazzi-large-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/paparazzi/wp-content/uploads/sites/45/2019/10/paparazzi-large-overlay@2x.png',
		  'header_layout' => 'center',
		  'header_content_right_select' => 'social',
		  'header_content_right_social_accounts_labels' => false,
		  'header_content_right_social_accounts_limit' => '4',
		  'navbar_alignment' => 'center',
		  'navbar_search' => false,
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons_hover' => '#d1d1d1',
		  'colors_topbar_social_text' => '#dbdbdb',
		  'colors_topbar_social_text_hover' => '#dddddd',
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'wide',
		  'colors_navbar_submenu_bg' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#efefef',
		  'colors_navbar_submenu_items_links_hover' => '#fa1427',
		  'colors_navbar_submenu_items_links_active' => '#b30010',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'home_tiles_layout' => '3',
		  'home_tiles_height' => '670px',
		  'home_orientation' => 'portrait',
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_exclude' => true,
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_footer_title' => '#ffffff',
		  'colors_navbar_main_links_hover' => '#b30010',
		  'home_tiles_parallax' => true,
		  'colors_navbar_bg_toggle_next' => false,
		  'topbar_content_right_select' => 'search',
		  'color_headings_title_blocks' => '#b30010',
		  'typography_text_large' =>
		  array (
			'font-family' => 'Raleway',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Raleway',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'Raleway',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '600',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 600,
			'font-style' => 'normal',
		  ),
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#b30010',
		  'color_footer_btn_bg_hover' => '#95030f',
		  'color_section_heading_border' => '#000000',
		  'color_section_heading_accent_text' => '#000000',
		  'section_heading' => 'style-5',
		  'section_heading_color_border' => '#ededed',
		  'section_heading_color_accent' => '#b30010',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'haligncenter',
		  'section_heading_footer_default' => false,
		  'section_heading_footer_align' => 'haligncenter',
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#000000',
		  'color_widgetized_submenu_link' => '#ffffff',
		  'color_widgetized_submenu_border' => '#282828',
		  'section_heading_submenu_color_text' => '#ffffff',
		),
						'mods_typekit'      => array (
		  'header_logo_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '3rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.05rem',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'retiro-std-48pt',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'conversion-hackers' => array(
						'name'              => 'Conversion Hackers',
						'preview_image_url' => '/images/demo-import/conversion-hackers.png',
						'preset'            => 'conversion-hackers',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Conversion Hackers',
		  'offcanvas_logo_text' => 'Conversion Hackers',
		  'home_tiles' => false,
		  'home_tiles_padding' => '0',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'colors_navbar_bg' => '#ffffff',
		  'colors_navbar_borders' => true,
		  'colors_navbar_main_links' => '#000000',
		  'header' => false,
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#3d3d3d',
		  'colors_topbar_borders' => false,
		  'colors_topbar_main_links' => '#e5e5e5',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'colors_topbar_social_icons' => '#ffffff',
		  'colors_topbar_social_icons_hover' => '#ffffff',
		  'colors_topbar_social_text' => '#e5e5e5',
		  'colors_topbar_social_text_hover' => '#ffffff',
		  'navbar_height' => '60px',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#836cf3',
		  'color_btn_primary_bg_hover' => '#5f43ee',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'style_align' => 'left',
		  'typography_h1' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_text' => '#b8b8b8',
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_exclude' => true,
		  'home_tiles_layout' => '2',
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_button' => false,
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Roboto',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'color_category' => '#5333ed',
		  'color_category_hover' => '#8069f1',
		  'navbar_logo_select' => 'text',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'footer_logo_select' => 'text',
		  'footer_logo_url' => '',
		  'footer_logo_retina_url' => '',
		  'color_footer_bg' => '#eeeef1',
		  'color_footer_border' => '#d6d6da',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'info',
		  ),
		  'home_tiles_height' => '670px',
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'colors_offcanvas_borders' => true,
		  'offcanvas_logo_select' => 'text',
		  'offcanvas_logo_url' => '',
		  'offcanvas_logo_retina_url' => '',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_navbar_main_links_hover' => '#d1d1d1',
		  'color_footer_text' => '#3a3a3a',
		  'color_footer_title' => '#333333',
		  'color_footer_link_hover' => '#3a3a3a',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#836cf3',
		  'color_footer_btn_bg_hover' => '#836cf3',
		  'topbar' => false,
		  'home_carousel_orientation' => 'portrait',
		  'home_carousel_meta' => false,
		  'home_reduce_margin' => false,
		  'home_summary' => true,
		  'home_more_button' => false,
		  'home_carousel_title' => 'Latest Articles',
		  'color_post_paragraph' => '#505050',
		  'colors_navbar_bg_toggle_next' => false,
		  'navbar_search' => true,
		  'color_footer_link' => '#000000',
		  'color_section_heading_border' => '#000000',
		  'color_misc_overlay_hover' => 'rgba(130,36,227,0.33)',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'offcanvas_topbar_height' => '60px',
		  'section_heading' => 'style-7',
		  'section_heading_color_border' => '#2b2b2b',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'haligncenter',
		  'section_heading_footer_default' => false,
		  'section_heading_footer_align' => 'haligncenter',
		  'section_heading_footer_color_text' => '#000000',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'brandon-grotesque',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'untold-stories' => array(
						'name'              => 'Untold Stories',
						'preview_image_url' => '/images/demo-import/untold-stories.png',
						'preset'            => 'untold-stories',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'list',
		  'layout_orientation' => 'landscape',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => '',
		  'navbar_logo_text' => 'Untold Stories',
		  'offcanvas_logo_text' => 'Untold Stories',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_body_bg' => '#f8f8f8',
		  'topbar' => false,
		  'header' => false,
		  'colors_navbar_borders' => false,
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_alignment' => 'right',
		  'style_align' => 'left',
		  'home_carousel_exclude' => true,
		  'home_carousel_orientation' => 'landscape',
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_title' => 'Latest Stories',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_first_post' => false,
		  'layout_first_post' => false,
		  'navbar_height' => '60px',
		  'colors_accent' => '#ffffff',
		  'post_page_header_default' => false,
		  'post_page_header' => 'simple',
		  'color_footer_bg' => '#ffffff',
		  'color_footer_link' => '#000000',
		  'color_footer_border' => '#efefef',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#98a0a9',
		  'color_btn_primary_bg_hover' => '#757d8e',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#98a0a9',
		  'color_footer_btn_bg_hover' => '#747d8a',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-sidebar-right',
		  'home_reduce_margin' => true,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-main.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-main@2x.png',
		  'navbar_logo_overlay_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-overlay.png',
		  'navbar_logo_overlay_retina_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-overlay@2x.png',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-main.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-main@2x.png',
		  'colors_offcanvas_borders' => false,
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-main.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/untold-stories/wp-content/uploads/sites/47/2019/07/stories-main@2x.png',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'offcanvas_topbar_height' => '60px',
		  'color_text_secondary' => '#a0a0a0',
		  'section_heading' => 'style-6',
		  'section_heading_color_border' => '#d9dbdd',
		  'section_heading_color_text' => '#000000',
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => false,
		  'section_heading_submenu_align' => 'haligncenter',
		  'navbar_single_column_title' => 'Latest Posts',
		),
						'mods_typekit'      => array (
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'granville',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'granville',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'granville',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'granville',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'granville',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'granville',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'granville',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'granville',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'granville',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'granville',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'granville',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'granville',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'granville',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'granville',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'granville',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'baskerville-urw',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'baskerville-urw',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'the-locals' => array(
						'name'              => 'The Locals',
						'preview_image_url' => '/images/demo-import/the-locals.png',
						'preset'            => 'the-locals',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => false,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'The Locals',
		  'navbar_logo_text' => 'City Scene',
		  'offcanvas_logo_text' => 'City Scene',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'home_tiles_exclude' => true,
		  'home_tiles_layout' => '4',
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'topbar' => false,
		  'header' => true,
		  'style_align' => 'left',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_first_post' => false,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-main-logo.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-main-logo@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#3da779',
		  'color_btn_primary_bg_hover' => '#37946c',
		  'navbar_height' => '60px',
		  'topbar_content_right_select' => 'search',
		  'navbar_alignment' => 'center',
		  'colors_topbar_bg_toggle_next' => true,
		  'colors_topbar_bg' => '#3a3a3a',
		  'colors_topbar_main_links' => '#e2e2e2',
		  'colors_topbar_main_links_hover' => '#ffffff',
		  'colors_topbar_social_icons' => '#e2e2e2',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-footer.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-footer@2x.png',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'widgets',
			2 => 'info',
			3 => 'instagram',
		  ),
		  'color_footer_bg' => '#202125',
		  'color_footer_text' => '#b7b7b7',
		  'color_footer_title' => '#ffffff',
		  'color_footer_border' => '#2e2f32',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#3da779',
		  'color_footer_btn_bg_hover' => '#348d66',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-main-logo.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-main-logo@2x.png',
		  'navbar_social' => false,
		  'navbar_social_accounts_counts' => false,
		  'colors_topbar_borders' => false,
		  'footer_logo_text' => 'City Scene',
		  'border_radius' => '30px',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-large.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-large@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-large-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/the-locals/wp-content/uploads/sites/48/2019/10/locals-large-overlay@2x.png',
		  'offcanvas_topbar_height' => '60px',
		  'section_heading' => 'style-3',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'section_heading_submenu_default' => true,
		  'section_heading_submenu_align' => 'haligncenter',
		  'section_heading_footer_default' => false,
		  'section_heading_footer_align' => 'halignleft',
		  'color_widgetized_submenu_btn_bg' => '#3da779',
		  'color_widgetized_submenu_btn_bg_hover' => '#328a64',
		  'section_heading_footer' => 'style-3',
		  'section_heading_footer_color_border' => '#424242',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'adelle-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'adelle-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.75rem',
			'letter-spacing' => '-0.125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'adelle-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'adelle-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'adelle-web',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '-0.05rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'proxima-nova',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'proxima-nova',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'the-balanced' => array(
						'name'              => 'The Balanced',
						'preview_image_url' => '/images/demo-import/the-balanced.png',
						'preset'            => 'the-balanced',
						'mods'              => array (
		  'home_slider' => '1',
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Authentic.',
		  'navbar_logo_text' => 'Authentic.',
		  'offcanvas_logo_text' => 'Authentic.',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#FFFFFF',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#1cd287',
		  'color_btn_primary_bg_hover' => '#1bb575',
		  'topbar' => false,
		  'header' => true,
		  'navbar_logo_select' => 'image',
		  'navbar_logo_default_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/06/balance-logo.png',
		  'navbar_logo_default_retina_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/06/balance-logo@2x.png',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/06/balance-large.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/06/balance-large@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/10/balance-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/10/balance-overlay@2x.png',
		  'header_layout' => 'center',
		  'navbar_alignment' => 'center',
		  'navbar_cart' => true,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'multiple',
		  'home_slider_visible' => '2',
		  'home_slider_heading' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_orientation' => 'portrait',
		  'home_archive_default' => false,
		  'color_footer_bg' => '#f5f9f5',
		  'color_footer_text' => '#8c8c8c',
		  'color_footer_title' => '#2e413a',
		  'color_footer_link_hover' => '#18a96d',
		  'color_footer_border' => '#dce9dc',
		  'color_footer_btn_text' => '#ffffff',
		  'footer_components' =>
		  array (
			0 => 'widgets',
			1 => 'instagram',
			2 => 'info',
		  ),
		  'color_text_secondary' => '#aaaaaa',
		  'colors_navbar_submenu_bg' => '#f5f9f5',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#000000',
		  'colors_navbar_submenu_items_links_hover' => '#16a66a',
		  'colors_navbar_submenu_items_links_active' => '#16a66a',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'color_footer_link' => '#000000',
		  'footer_logo_select' => 'image',
		  'footer_logo_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/10/balance-logo.png',
		  'footer_logo_retina_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/10/balance-logo@2x.png',
		  'navbar_height' => '60px',
		  'offcanvas_topbar_height' => '60px',
		  'offcanvas_logo_select' => 'image',
		  'offcanvas_logo_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/10/balance-logo.png',
		  'offcanvas_logo_retina_url' => 'https://authentictheme.com/the-balanced/wp-content/uploads/sites/49/2019/10/balance-logo@2x.png',
		  'border_radius' => '50px',
		  'post_page_header_default' => false,
		  'post_page_header' => 'small',
		  'section_heading' => 'style-5',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => false,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'color_widgetized_submenu_bg' => '#f5f9f5',
		  'color_widgetized_submenu_btn_bg' => '#1cd287',
		  'color_widgetized_submenu_btn_bg_hover' => '#18b372',
		),
						'mods_typekit'      => array (
		  'typography_headings' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'circe',
			'variant' => '300',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 300,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.8125rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'circe',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'circe',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'circe',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'circe',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.9375rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		),
					), 'oliver-wooster' => array(
						'name'              => 'Oliver Wooster',
						'preview_image_url' => '/images/demo-import/oliver-wooster.png',
						'preset'            => 'oliver-wooster',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => true,
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Hello, I\'m Oliver Wooster',
		  'navbar_logo_text' => 'Oliver Wooster',
		  'offcanvas_logo_text' => 'Oliver Wooster',
		  'home_tiles' => '',
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#000000',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'topbar' => false,
		  'header_layout' => 'logo',
		  'header_background' => false,
		  'header_height' => '120px',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'home_archive_default' => false,
		  'home_archive_type' => 'masonry',
		  'home_columns' => '3',
		  'navbar_logo_select' => 'text',
		  'layout_columns' => '3',
		  'layout_first_post' => false,
		  'home_first_post' => false,
		  'layout_meta' => false,
		  'layout_summary' => false,
		  'home_meta' => false,
		  'home_summary' => false,
		  'style_align' => 'left',
		  'color_body_bg' => '#ffffff',
		  'typography_headings' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_h3' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '0.075em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_title' => 'My Latest Projects',
		  'home_carousel_meta' => false,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '-0.0125rem',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#000000',
		  'color_btn_primary_bg_hover' => '#2d2d2d',
		  'label_readmore' => 'View Project',
		  'footer_components' =>
		  array (
			0 => 'instagram',
			1 => 'info',
		  ),
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.625rem',
			'letter-spacing' => '0.05em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'home_reduce_margin' => false,
		  'home_orientation' => 'original',
		  'typography_menus' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '0.75rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_alignment' => 'center',
		  'navbar_toggle' => true,
		  'navbar_social' => false,
		  'navbar_social_accounts_titles' => true,
		  'navbar_social_accounts_counts' => false,
		  'page_header' => 'simple',
		  'header_home_only' => true,
		  'post_layout_default' => false,
		  'post_layout' => 'layout-fullwidth',
		  'post_page_header_default' => false,
		  'typography_post_lead' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '700',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'home_pagination_type' => 'ajax',
		  'home_infinite_load' => true,
		  'navbar_height' => '60px',
		  'header' => true,
		  'colors_navbar_borders' => false,
		  'colors_navbar_bg' => '#000000',
		  'colors_navbar_main_links' => '#000000',
		  'colors_navbar_main_links_hover' => '#b5b5b5',
		  'colors_navbar_submenu_bg' => '#000000',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'colors_navbar_submenu_items_links' => '#bfbfbf',
		  'colors_navbar_submenu_items_borders_toggle_next' => false,
		  'colors_navbar_social_icons' => '#ffffff',
		  'colors_navbar_social_icons_hover' => '#ffffff',
		  'colors_navbar_social_text_hover' => '#ffffff',
		  'navbar_social_accounts_limit' => '3',
		  'footer_text' => 'Branding &amp; Graphic Design Porfolio',
		  'header_description_text' => '',
		  'header_description_font' =>
		  array (
			'font-family' => 'Montserrat',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.875rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_category' => '#515151',
		  'color_category_hover' => '#000000',
		  'colors_navbar_submenu_items_links_hover' => '#ffffff',
		  'colors_navbar_submenu_items_links_active' => '#8ce44d',
		  'post_carousel_heading' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'colors_offcanvas_navbar_links' => '#000000',
		  'colors_offcanvas_navbar_bg' => '#ffffff',
		  'colors_offcanvas_borders' => true,
		  'colors_navbar_bg_toggle_next' => false,
		  'navbar_search' => true,
		  'color_misc_overlay' => 'rgba(40,40,40,0.2)',
		  'header_content_left_select' => 'toggle',
		  'header_logo_select' => 'text',
		  'header_logo_default_url' => '',
		  'header_logo_default_retina_url' => '',
		  'header_logo_overlay_url' => '',
		  'header_logo_overlay_retina_url' => '',
		  'navbar_logo_default_url' => '',
		  'navbar_logo_default_retina_url' => '',
		  'navbar_logo_overlay_url' => '',
		  'navbar_logo_overlay_retina_url' => '',
		  'offcanvas_topbar_height' => '60px',
		  'typography_search' =>
		  array (
			'font-family' => 'Roboto',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '700',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 700,
			'font-style' => 'normal',
		  ),
		  'section_heading' => 'style-9',
		  'section_heading_align' => 'haligncenter',
		  'section_heading_font' =>
		  array (
			'font-family' => 'Roboto',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'navbar_multi_column_display' => false,
		  'navbar_single_column_display' => false,
		),
						'mods_typekit'      => array (
		  'header_logo_font' =>
		  array (
			'font-family' => 'bebas-neue',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '5.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'bebas-neue',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'bebas-neue',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'bebas-neue',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'uppercase',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		),
					), 'bright-minds' => array(
						'name'              => 'Bright Minds',
						'preview_image_url' => '/images/demo-import/bright-minds.png',
						'preset'            => 'bright-minds',
						'mods'              => array (
		  'home_slider' => false,
		  'home_carousel' => '1',
		  'layout_archive_type' => 'masonry',
		  'layout_orientation' => 'original',
		  'layout_pagination_type' => 'ajax',
		  'layout_widgets' => '1',
		  'layout_widgets_repeat' => '1',
		  'header_logo_text' => 'Bright Minds',
		  'navbar_logo_text' => 'Bright Minds',
		  'offcanvas_logo_text' => 'Bright Minds',
		  'home_tiles' => true,
		  'home_tiles_padding' => '30px',
		  'header_background_object' =>
		  array (
			'background-color' => '#faf9f7',
			'background-image' => '',
			'background-repeat' => 'no-repeat',
			'background-position' => 'center center',
			'background-size' => 'cover',
			'background-attachment' => 'scroll',
		  ),
		  'footer_instagram_username' => '',
		  'header_content_left_button_link' => 'https://eepurl.com/bV0MPb',
		  'topbar' => false,
		  'home_slider_exclude' => true,
		  'home_slider_type' => 'boxed',
		  'home_tiles_layout' => '3',
		  'home_layout_default' => false,
		  'home_layout' => 'layout-fullwidth',
		  'style_align' => 'left',
		  'home_archive_default' => false,
		  'home_archive_type' => 'list',
		  'home_first_post' => false,
		  'typography_h1' =>
		  array (
			'font-size' => '3rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h2' =>
		  array (
			'font-size' => '2rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'color_text' => '#353535',
		  'color_post_paragraph' => '#9e9e9e',
		  'typography_h3' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h4' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h5' =>
		  array (
			'font-size' => '1rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_h6' =>
		  array (
			'font-size' => '0.9375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_primary' =>
		  array (
			'font-size' => '2.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_tiles_heading_secondary' =>
		  array (
			'font-size' => '1.5rem',
			'letter-spacing' => '0px',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'home_carousel_exclude' => true,
		  'home_carousel_heading' =>
		  array (
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'variant' => 'regular',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_layout' => 'center',
		  'color_body_bg' => '#faf9f7',
		  'colors_navbar_borders' => true,
		  'header_background' => false,
		  'header_logo_select' => 'image',
		  'header_logo_default_url' => 'https://authentictheme.com/bright-minds/wp-content/uploads/sites/51/2019/10/bright-minds-logo.png',
		  'header_logo_default_retina_url' => 'https://authentictheme.com/bright-minds/wp-content/uploads/sites/51/2019/10/bright-minds-logo@2x.png',
		  'header_logo_overlay_url' => 'https://authentictheme.com/bright-minds/wp-content/uploads/sites/51/2019/10/bright-minds-overlay.png',
		  'header_logo_overlay_retina_url' => 'https://authentictheme.com/bright-minds/wp-content/uploads/sites/51/2019/10/bright-minds-overlay@2x.png',
		  'header_content_right_select' => 'search',
		  'footer_components' =>
		  array (
			0 => 'subscribe',
			1 => 'widgets',
			2 => 'info',
		  ),
		  'color_footer_bg' => '#e7e7dd',
		  'color_footer_text' => '#262626',
		  'color_footer_title' => '#000000',
		  'color_footer_border' => '#ccccb6',
		  'color_footer_link' => '#0a0a0a',
		  'color_text_secondary' => '#b2b2b2',
		  'colors_offcanvas_borders' => true,
		  'colors_accent' => '#ffffff',
		  'color_btn_primary_text' => '#ffffff',
		  'color_btn_primary_bg' => '#c1c1a3',
		  'color_btn_primary_bg_hover' => '#bbbb9f',
		  'color_footer_btn_text' => '#ffffff',
		  'color_footer_btn_bg' => '#c1c1a3',
		  'color_footer_btn_bg_hover' => '#b6b694',
		  'colors_navbar_bg_toggle_next' => true,
		  'colors_navbar_bg' => '#faf9f7',
		  'colors_navbar_submenu_borders_toggle_next' => false,
		  'navbar_height' => '60px',
		  'colors_offcanvas_navbar_bg' => '#faf9f7',
		  'navbar_multi_column_display' => true,
		  'navbar_single_column_display' => true,
		  'colors_navbar_widgetized_submenu_borders_toggle' => false,
		  'header_content_left_select' => 'social',
		  'header_content_left_social_accounts_labels' => false,
		  'header_content_left_social_accounts_counts' => true,
		  'header_content_left_social_accounts_limit' => '3',
		  'navbar_single_column_title' => 'Subscribe',
		  'section_heading_submenu_default' => false,
		  'section_heading_footer_default' => false,
		  'section_heading_footer_color_text' => '#000000',
		  'header_content_right_social_accounts_labels' => false,
		),
						'mods_typekit'      => array (
		  'typography_base' =>
		  array (
			'font-size' => '1rem',
			'font-family' => 'graphie',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'letter-spacing' => '0px',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_text_small' =>
		  array (
			'font-family' => 'graphie',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.625rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_text_large' =>
		  array (
			'font-family' => 'graphie',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '1.25rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_buttons' =>
		  array (
			'font-family' => 'graphie',
			'variant' => '500',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.6875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_menus' =>
		  array (
			'font-family' => 'graphie',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => '500',
			'font-size' => '0.875rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 500,
			'font-style' => 'normal',
		  ),
		  'typography_submenus' =>
		  array (
			'font-family' => 'graphie',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '0.8125rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_lead' =>
		  array (
			'font-family' => 'graphie',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_search' =>
		  array (
			'font-family' => 'graphie',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'variant' => 'regular',
			'font-size' => '3rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_headings' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_block_title' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.5rem',
			'letter-spacing' => '0.025em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'italic',
		  ),
		  'typography_post_dropcap' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'text-transform' => 'uppercase',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'typography_post_blockquote' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'header_logo_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '2.5rem',
			'letter-spacing' => '-0.125rem',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'navbar_logo_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'footer_logo_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'offcanvas_logo_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'regular',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.375rem',
			'letter-spacing' => '0px',
			'text-transform' => 'none',
			'line-height' => '1',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'normal',
		  ),
		  'section_heading_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.75rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'italic',
		  ),
		  'section_heading_submenu_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'italic',
		  ),
		  'section_heading_footer_font' =>
		  array (
			'font-family' => 'big-caslon-fb',
			'variant' => 'italic',
			'subsets' =>
			array (
			  0 => 'latin',
			),
			'font-size' => '1.25rem',
			'letter-spacing' => '0.0125em',
			'text-transform' => 'none',
			'font-backup' => '',
			'font-weight' => 400,
			'font-style' => 'italic',
		  ),
		),
					)),
	);

	return $styles;
}
add_filter( 'csco_theme_demos', 'csco_theme_demo_styles' );
