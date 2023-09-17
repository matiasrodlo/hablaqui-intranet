<?php
/**
 * Theme mods.
 *
 * @package Authentic
 */

/**
 * Add css selectors to output of kirki.
 */
add_filter(
	'csco_color_btn_primary_text',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .button-primary',
						'.edit-post-visual-editor.editor-styles-wrapper .overlay-inner a.button-primary',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-search .wp-block-search__button',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background)',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-submit',
						'.edit-post-visual-editor.editor-styles-wrapper .post-number',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-about-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-follow',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-follow',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-featured-categories-vertical-list .pk-featured-count',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_btn_primary_text_hover',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .button-primary:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .overlay-inner a.button-primary:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-search .wp-block-search__button:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background):hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-submit:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-about-button:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-button:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-follow:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-follow:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .tagcloud:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .tagcloud:focus',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_btn_primary_bg',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .button-primary',
						'.edit-post-visual-editor.editor-styles-wrapper .overlay-inner a.button-primary',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-search .wp-block-search__button',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background)',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-submit',
						'.edit-post-visual-editor.editor-styles-wrapper .post-number',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-about-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-follow',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-follow',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-featured-categories-vertical-list .pk-featured-count',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-tabs.is-style-cnvs-block-tabs-pills .cnvs-block-tabs-buttons .cnvs-block-tabs-button.cnvs-block-tabs-button-active',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);


add_filter(
	'csco_color_btn_primary_bg_hover',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .button-primary:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .overlay-inner a.button-primary:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-search .wp-block-search__button:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-button .wp-block-button__link:not(.has-background):hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-submit:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-about-button:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-button:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-follow:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-follow:hover',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_body_bg',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-gallery .blocks-gallery-item figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=search]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=text]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=number]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=email]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=tel]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=password]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render textarea',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render .form-control',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_body_bg',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-bg-dark:not(:focus):first-letter',
					)
				),
				'property' => 'color',
				'suffix'   => '!important',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_text_secondary',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .tagcloud',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-caption-text',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-quote cite',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-quote__citation',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-image figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-audio figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-embed figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-gallery figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote cite',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote footer',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote .wp-block-pullquote__citation',
						'.edit-post-visual-editor.editor-styles-wrapper .timestamp',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-counters',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-name',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-name a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-counters',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-template-default .pk-social-links-label',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-total .pk-share-buttons-count',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-score .abr-review-subtext .abr-data-label',
						'.edit-post-visual-editor.editor-styles-wrapper .title-share',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_text_secondary',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-score .abr-review-subtext .abr-data-info',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);


add_filter(
	'csco_color_links',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .tagcloud a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-toc ol > li:before',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-contributors .author-name a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-posts-single a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-content a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-info a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-author .pk-widget-author-container:not(.pk-bg-overlay) .pk-author-title a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-wrap .pk-social-links-count',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-social-links .pk-social-links-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-social-links .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-contributors .pk-social-links-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-total .pk-share-buttons-label',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-scheme-default .pk-share-buttons-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-scheme-simple-light .pk-share-buttons-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-scheme-simple-light .pk-share-buttons-count',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-share-buttons-simple-light .pk-share-buttons-link',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-share-buttons-simple-light .pk-share-buttons-link .pk-share-buttons-count',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-share-buttons-default .pk-share-buttons-link:not(hover)',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-scheme-light .pk-social-links-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-template-default .pk-social-links-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-scheme-light .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-scheme-bold .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-scheme-bold-rounded .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper ol.is-style-cnvs-list-styled > li:before',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block[data-heading="cnvs-heading-numbered-2"] .is-style-cnvs-heading-numbered:before',
						'.edit-post-visual-editor.editor-styles-wrapper h2.is-style-cnvs-heading-numbered:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-collapsible-title',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_links_hover',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-contributors .author-name a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-posts-single a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-content a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-info a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-author .pk-widget-author-container:not(.pk-bg-overlay) .pk-author-title a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-social-links-bold .pk-social-links-link:hover .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-social-links-bold-rounded .pk-social-links-link:hover .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-contributors .pk-social-links-link:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-collapsible-title:hover',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_text',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=search]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=text]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=number]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=email]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=tel]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=password]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render textarea',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render .form-control',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render .abr-reviews-posts .abr-review-meta',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_post_paragraph',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-paragraph',
						'.edit-post-visual-editor.editor-styles-wrapper p.wp-block-subhead',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_blockquote',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper blockquote',
						'.edit-post-visual-editor.editor-styles-wrapper blockquote p',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_leadin_dropcap',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-bordered:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-border-right:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-bg-light:not(:focus):first-letter',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_leadin_dropcap',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-bg-dark:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-group.is-style-cnvs-block-single-border:before',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-group.is-style-cnvs-block-single-border:after',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-group.is-style-cnvs-block-bg-inverse',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);


add_filter(
	'csco_color_leadin_dropcap',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-bordered:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-group.is-style-cnvs-block-bordered',
					)
				),
				'property' => 'border-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_leadin_dropcap',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-border-right:first-letter',
					)
				),
				'property' => 'border-right-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_post_links',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper p > code',
						'.edit-post-visual-editor.editor-styles-wrapper p > a:not(.button):not(.button)',
						'.edit-post-visual-editor.editor-styles-wrapper ul a',
						'.edit-post-visual-editor.editor-styles-wrapper ol a',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-latest-posts > li > a',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-categories-list > li > a',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-categories__list > li > a',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-archives-list > li > a',
						'.edit-post-visual-editor.editor-styles-wrapper .navigation.pagination .nav-links > a',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_post_links_hover',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper p > a:not(.button):not(.button):hover',
						'.edit-post-visual-editor.editor-styles-wrapper ul a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper ol a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-latest-posts > li > a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-categories-list > li > a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-categories__list > li > a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-archives-list > li > a:hover',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_category',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-archive-posts article:not(.post-featured) .entry-header .post-categories a',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-narrow .layout-variation-simple .entry-header .post-categories a',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-wide .layout-variation-simple .entry-header .post-categories a',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-carousel .post-categories a',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-sidebar:not(.cnvs-block-posts-sidebar-slider) .post-categories a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-posts .post-categories a',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_category_hover',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-archive-posts article:not(.post-featured) .entry-header .post-categories a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-archive-posts article:not(.post-featured) .entry-header .post-categories a:focus',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-narrow .layout-variation-simple .entry-header .post-categories a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-narrow .layout-variation-simple .entry-header .post-categories a:focus',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-wide .layout-variation-simple .entry-header .post-categories a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-wide .layout-variation-simple .entry-header .post-categories a:focus',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-carousel .post-categories a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cs-block-carousel .post-categories a:focus',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-sidebar:not(.cnvs-block-posts-sidebar-slider) .post-categories a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-sidebar:not(.cnvs-block-posts-sidebar-slider) .post-categories a:focus',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-posts .post-categories a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-posts .post-categories a:focus',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_colors_accent',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper p > code',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-code',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-verse',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-preformatted',
						'.edit-post-visual-editor.editor-styles-wrapper .table-bordered th',
						'.edit-post-visual-editor.editor-styles-wrapper .table-striped tbody tr:nth-of-type(odd)',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-toc ol > li:before',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-social-links-light-bg .pk-social-links-link',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-share-buttons-default .pk-share-buttons-link:not(hover)',
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-pk-share-buttons-bold .pk-share-buttons-link',
						'.edit-post-visual-editor.editor-styles-wrapper .post-archive .pk-subscribe-form-wrap',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-scheme-light-bg .pk-social-links-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-slider',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-twitter-layout-slider',
						'.edit-post-visual-editor.editor-styles-wrapper .has-drop-cap.is-cnvs-dropcap-bg-light:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper ol.is-style-cnvs-list-styled > li:before',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-group.is-style-cnvs-block-bg-light',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block[data-heading="cnvs-heading-numbered-2"] .is-style-cnvs-heading-numbered:before',
						'.edit-post-visual-editor.editor-styles-wrapper h2.is-style-cnvs-heading-numbered:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-collapsible-title',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_headings_links',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-layout-carousel .entry-title a',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-sidebar:not(.cnvs-block-posts-sidebar-slider) .entry-title a',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-posts:not(.pk-widget-posts-template-slider) .entry-title a',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_headings_links_hover',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-layout-carousel .entry-title a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-posts-sidebar:not(.cnvs-block-posts-sidebar-slider) .entry-title a:hover',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-posts:not(.pk-widget-posts-template-slider) .entry-title a:hover',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_section_heading_color_border',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading',
						'.edit-post-visual-editor.editor-styles-wrapper	.cnvs-block-section-heading .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading:after',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading .cnvs-section-title:after',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-default',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-default .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-default:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-default:after',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-default .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-default .cnvs-section-title:after',
					)
				),
				'property' => 'border-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_section_heading_color_accent',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-11 .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-9 .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-9 .cnvs-section-title:after',
						'.edit-post-visual-editor.editor-styles-wrapper	.cnvs-block-section-heading.is-style-cnvs-block-section-heading-10 .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-12 .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-14',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-11 .is-style-cnvs-block-section-heading-default .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-9 .is-style-cnvs-block-section-heading-default .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-9 .is-style-cnvs-block-section-heading-default .cnvs-section-title:after',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-10 .is-style-cnvs-block-section-heading-default .cnvs-section-title:before',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-12 .is-style-cnvs-block-section-heading-default .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-14 .is-style-cnvs-block-section-heading-default',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_section_heading_color_accent_text',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-11 .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper	.cnvs-block-section-heading.is-style-cnvs-block-section-heading-10 .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-12 .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading.is-style-cnvs-block-section-heading-14 .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-11 .is-style-cnvs-block-section-heading-default .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-10 .is-style-cnvs-block-section-heading-default .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-12 .is-style-cnvs-block-section-heading-default .cnvs-section-title',
						'.edit-post-visual-editor.editor-styles-wrapper.section-heading-default-style-14 .is-style-cnvs-block-section-heading-default .cnvs-section-title',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_section_heading_color_text',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .section-heading',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading .cnvs-section-title',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_headings',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h1',
						'.edit-post-visual-editor.editor-styles-wrapper h2',
						'.edit-post-visual-editor.editor-styles-wrapper h3',
						'.edit-post-visual-editor.editor-styles-wrapper h4',
						'.edit-post-visual-editor.editor-styles-wrapper h5',
						'.edit-post-visual-editor.editor-styles-wrapper h6',
						'.edit-post-visual-editor.editor-styles-wrapper h1 a',
						'.edit-post-visual-editor.editor-styles-wrapper h2 a',
						'.edit-post-visual-editor.editor-styles-wrapper h3 a',
						'.edit-post-visual-editor.editor-styles-wrapper h4 a',
						'.edit-post-visual-editor.editor-styles-wrapper h5 a',
						'.edit-post-visual-editor.editor-styles-wrapper h6 a',
						'.edit-post-visual-editor.editor-styles-wrapper .table-bordered th',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-table td strong',
						'.edit-post-visual-editor.editor-styles-wrapper .editor-post-title__block .editor-post-title__input',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-name',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-text',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-text',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-reviews-posts .abr-review-number',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_colors_borders',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-separator',
					)
				),
				'property' => 'color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_colors_borders',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .table-bordered th',
						'.edit-post-visual-editor.editor-styles-wrapper .table-bordered td',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote:not([style*="border-color"])',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-separator:not(.is-style-dots)',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render .form-control',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=search]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=text]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=number]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=email]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=tel]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=password]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render textarea',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render select',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-collapsibles .cnvs-block-collapsible',
						'.cnvs-block-collapsibles > .block-editor-inner-blocks > .block-editor-block-list__layout > [data-type="canvas/collapsible"] + [data-type="canvas/collapsible"] > .editor-block-list__block-edit > div .cnvs-block-collapsible',
						'.edit-post-visual-editor.editor-styles-wrapper .post-archive .archive-compact .post-grid',
						'.edit-post-visual-editor.editor-styles-wrapper .post-archive .archive-compact .post-masonry',
						'.edit-post-visual-editor.editor-styles-wrapper .post-archive .archive-compact.archive-grid section.widget',
						'.edit-post-visual-editor.editor-styles-wrapper .post-archive .archive-compact.archive-masonry section.widget',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-reviews-posts .abr-post-item',
					)
				),
				'property' => 'border-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_colors_borders',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper table th',
						'.edit-post-visual-editor.editor-styles-wrapper table td',
						'.edit-post-visual-editor.editor-styles-wrapper table tbody + tbody',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block[data-type="canvas/toc"]:not(:last-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .post-list:not(.post-featured) + .post-list:not(.post-featured)',
						'.edit-post-visual-editor.editor-styles-wrapper .post-standard:not(.post-featured) + .post-standard:not(.post-featured)',
						'.edit-post-visual-editor.editor-styles-wrapper .post-list + .post',
						'.edit-post-visual-editor.editor-styles-wrapper .post + .post-list',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_nav_menu .menu > .menu-item:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_pages li:not(:first-child) a',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_meta li:not(:first-child) a',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_categories > ul > li:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_archive > ul > li:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_categories .widget-wrap > ul > li:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_archive .widget-wrap > ul > li:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_recent_comments li:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_recent_entries li:not(:first-child)',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-widget-contributors .pk-author-item',
						'.edit-post-visual-editor.editor-styles-wrapper #wp-calendar tbody td',
					)
				),
				'property' => 'border-top-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_colors_borders',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block[data-type="canvas/toc"]:not(:first-child)',
					)
				),
				'property' => 'border-bottom-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_color_misc_overlay',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .overlay-media:before',
						'.edit-post-visual-editor.editor-styles-wrapper .post-thumbnail:before',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-bg-overlay',
					)
				),
				'property' => 'background-color',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_base',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=search]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=text]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=number]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=email]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=tel]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render input[type=password]',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render optgroup',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render select',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-component-server-side-render textarea',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_buttons',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .title-share',
						'.edit-post-visual-editor.editor-styles-wrapper .button-primary',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-search .wp-block-search__button',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-button__link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-label',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-instagram .pk-instagram-username',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-title',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-title',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-label',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-submit',
						'.edit-post-visual-editor.editor-styles-wrapper .post-number span:first-child',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-about-button span:first-child',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-button span:first-child',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-follow span:first-child',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-follow span:first-child',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-featured-categories .pk-featured-name',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-featured-categories-tiles .pk-featured-link',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-featured-categories-vertical-list .pk-featured-count .pk-featured-number',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-collapsible-title h6',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-tabs .cnvs-block-tabs-buttons .cnvs-block-tabs-button',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_text_small',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .tagcloud',
						'.edit-post-visual-editor.editor-styles-wrapper .post-categories',
						'.edit-post-visual-editor.editor-styles-wrapper .post-meta',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-quote cite',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-quote__citation',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-image figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-audio figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-embed figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-gallery .blocks-gallery-item figcaption',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-caption-text',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote cite',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote footer',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote .wp-block-pullquote__citation',
						'.edit-post-visual-editor.editor-styles-wrapper .timestamp',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-alert',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-badge',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-username',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-counters',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-name',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-counters',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-count',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-social-links-label',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-share-buttons-count',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-form-wrap .pk-privacy label',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-featured-categories-tiles .pk-featured-count',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-alert',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-badge',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-subtext .pk-data-label',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-post-review .abr-review-name',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-review-caption',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_post_lead',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .is-style-cnvs-paragraph-callout',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_post_dropcap',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper p.has-drop-cap:not(:focus):first-letter',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_post_blockquote',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-quote',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-quote p',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-pullquote p',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-freeform blockquote p:first-child',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_headings',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h1',
						'.edit-post-visual-editor.editor-styles-wrapper h2',
						'.edit-post-visual-editor.editor-styles-wrapper h3',
						'.edit-post-visual-editor.editor-styles-wrapper h4',
						'.edit-post-visual-editor.editor-styles-wrapper h5',
						'.edit-post-visual-editor.editor-styles-wrapper h6',
						'.edit-post-visual-editor.editor-styles-wrapper .h1',
						'.edit-post-visual-editor.editor-styles-wrapper .h2',
						'.edit-post-visual-editor.editor-styles-wrapper .h3',
						'.edit-post-visual-editor.editor-styles-wrapper .h4',
						'.edit-post-visual-editor.editor-styles-wrapper .h5',
						'.edit-post-visual-editor.editor-styles-wrapper .h6',
						'.edit-post-visual-editor.editor-styles-wrapper .editor-post-title__input',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-cover .wp-block-cover-image-text',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-cover .wp-block-cover-text',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-cover-image .wp-block-cover-image-text',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-cover-image .wp-block-cover-text',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-cover-image h2',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-cover h2',
						'.edit-post-visual-editor.editor-styles-wrapper p.has-drop-cap:not(:focus):first-letter',
						'.edit-post-visual-editor.editor-styles-wrapper .abr-reviews-posts .abr-review-number',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_section_heading_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .navigation.pagination .nav-links',
						'.edit-post-visual-editor.editor-styles-wrapper .section-heading',
						'.edit-post-visual-editor.editor-styles-wrapper .cnvs-block-section-heading',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-block-contributors .pk-author-posts > h6',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);


add_filter(
	'csco_typography_h1',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h1',
						'.edit-post-visual-editor.editor-styles-wrapper .h1',
						'.edit-post-visual-editor.editor-styles-wrapper .editor-post-title__input',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h1_override_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h1',
						'.edit-post-visual-editor.editor-styles-wrapper .h1',
						'.edit-post-visual-editor.editor-styles-wrapper .editor-post-title__input',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h2',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h2',
						'.edit-post-visual-editor.editor-styles-wrapper .h2',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h2_override_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h2',
						'.edit-post-visual-editor.editor-styles-wrapper .h2',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h3',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h3',
						'.edit-post-visual-editor.editor-styles-wrapper .h3',
						'.edit-post-visual-editor.editor-styles-wrapper .archive-grid h2',
						'.edit-post-visual-editor.editor-styles-wrapper .archive-masonry h2',
						'.edit-post-visual-editor.editor-styles-wrapper .archive-list h2',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h3_override_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h3',
						'.edit-post-visual-editor.editor-styles-wrapper .h3',
						'.edit-post-visual-editor.editor-styles-wrapper .archive-grid h2',
						'.edit-post-visual-editor.editor-styles-wrapper .archive-masonry h2',
						'.edit-post-visual-editor.editor-styles-wrapper .archive-list h2',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h4',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h4',
						'.edit-post-visual-editor.editor-styles-wrapper .h4',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h4_override_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h4',
						'.edit-post-visual-editor.editor-styles-wrapper .h4',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h5',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h5',
						'.edit-post-visual-editor.editor-styles-wrapper .h5',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h5_override_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h5',
						'.edit-post-visual-editor.editor-styles-wrapper .h5',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h6',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h6',
						'.edit-post-visual-editor.editor-styles-wrapper .h6',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_h6_override_font',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper h6',
						'.edit-post-visual-editor.editor-styles-wrapper .h6',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_menus',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .widget_archive li',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_categories li',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_meta li a',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_nav_menu .menu > li > a',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_pages .page_item a',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_typography_submenus',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element' => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .widget_categories .children li a',
						'.edit-post-visual-editor.editor-styles-wrapper .widget_nav_menu .sub-menu > li > a',
					)
				),
				'context' => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_border_radius',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .button-primary',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-search .wp-block-search__button',
						'.edit-post-visual-editor.editor-styles-wrapper .wp-block-button:not(.is-style-squared) .wp-block-button__link',
						'.edit-post-visual-editor.editor-styles-wrapper .widget-area .pk-subscribe-with-name input[type="text"]',
						'.edit-post-visual-editor.editor-styles-wrapper .widget-area .pk-subscribe-with-name button',
						'.edit-post-visual-editor.editor-styles-wrapper .widget-area .pk-subscribe-with-bg input[type="text"]',
						'.edit-post-visual-editor.editor-styles-wrapper .widget-area .pk-subscribe-with-bg button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-about-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-author-button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-instagram-follow',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-twitter-follow',
						'.edit-post-visual-editor.editor-styles-wrapper .adp-button',
					)
				),
				'property' => 'border-radius',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_border_radius',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'     => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-with-name input[type="text"]',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-with-name button',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-with-bg input[type="text"]',
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-with-bg button',
					)
				),
				'property'    => 'border-radius',
				'context'     => array( 'editor' ),
				'media_query' => '@media (max-width: 719px)',
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_border_radius',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-form-wrap button',
					)
				),
				'property' => 'border-top-right-radius',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);

add_filter(
	'csco_border_radius',
	function( $rules ) {
		array_push(
			$rules,
			array(
				'element'  => csco_implode(
					array(
						'.edit-post-visual-editor.editor-styles-wrapper .pk-subscribe-form-wrap button',
					)
				),
				'property' => 'border-bottom-right-radius',
				'context'  => array( 'editor' ),
			)
		);
		return $rules;
	}
);
