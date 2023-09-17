<?php
/**
 * All core theme actions.
 *
 * Please do not modify this file directly.
 * You may remove actions in your child theme by using remove_action().
 *
 * Please see /inc/partials.php for the list of partials,
 * added to actions.
 *
 * @package Authentic
 */

/**
 * Body
 */

add_action( 'csco_body_start', 'csco_offcanvas' );
add_action( 'csco_body_end', 'csco_site_search' );

/**
 * Header
 */

add_action( 'csco_header', 'csco_navbar_secondary' );
add_action( 'csco_header', 'csco_header_layout' );
add_action( 'csco_header', 'csco_navbar_primary' );
add_action( 'csco_header_after', 'csco_get_page_header', 15 );

/**
 * Page Header
 */

add_action( 'csco_page_header_start', 'csco_single_post_breadcrumbs' );
add_action( 'csco_page_header_start', 'csco_single_post_category' );
add_action( 'csco_page_header_end', 'csco_single_post_meta' );
add_action( 'csco_page_header_end', 'csco_archive_post_count' );
add_action( 'csco_page_header_end', 'csco_category_description' );
add_action( 'csco_page_header_end', 'csco_tag_description' );
add_action( 'csco_page_header_end', 'csco_author_details' );

/**
 * Main
 */

add_action( 'csco_main_start', 'csco_get_page_header' );

/**
 * Main Content
 */

add_action( 'csco_main_content_before', 'csco_get_post_media' );

/**
 * Post Archive
 */

add_action( 'csco_archive_between_posts', 'csco_archive_widgets', 10, 4 );

/**
 * Post
 */

add_action( 'csco_post_start', 'csco_get_page_header' );
add_action( 'csco_post_start', 'csco_get_post_media' );

add_action( 'csco_post_main_before', 'csco_share_buttons_left' );
add_action( 'csco_post_content_before', 'csco_share_buttons_top' );

add_action( 'csco_post_content_after', 'csco_post_pagination', 10 );
add_action( 'csco_post_content_after', 'csco_share_buttons_bottom', 20 );
add_action( 'csco_post_content_after', 'csco_single_post_author', 30 );
add_action( 'csco_post_content_after', 'csco_post_tags', 40 );

add_action( 'csco_post_end', 'csco_single_post_author', 10 );
add_action( 'csco_post_end', 'csco_single_post_pagination', 20 );
add_action( 'csco_post_end', 'csco_single_subscribe', 30 );
add_action( 'csco_post_end', 'csco_single_post_carousel', 40 );
add_action( 'csco_post_end', 'csco_single_post_comments', 50 );


/**
 * Page
 */

add_action( 'csco_page_start', 'csco_get_page_header' );
add_action( 'csco_page_content_after', 'csco_post_pagination', 10 );


/**
 * Template Page
 */

add_action( 'csco_page_start', 'csco_meet_team', 10 );
