/**
 * WordPress dependencies.
 */
const { Component } = wp.element;
const { registerPlugin } = wp.plugins;
const { select, subscribe } = wp.data;

var cscoGutenberg = {};

( function() {
	var $this;

	cscoGutenberg = {

		/*
		 * Variables
		 */
		content: false,
		wrapper: false,
		template: null,
		singularLayout: null,

		/*
		 * Initialize
		 */
		init: function( e ) {
			$this = cscoGutenberg;

			// Find content and wrapper elements.
			$this.content = document.querySelector( '.block-editor-editor-skeleton__content, .interface-interface-skeleton__content' );
			$this.wrapper = document.querySelector( '.editor-styles-wrapper' );
			$this.singularLayout = document.getElementById( 'csco_singular_layout' );

			// Init events.
			if ( 'undefined' === typeof window.cscoGutenbergInit ) {
				$this.events( e );

				window.cscoGutenbergInit = true;
			}
		},

		/*
		 * Events
		 */
		events: function( e ) {
			if ( $this.singularLayout ) {
				$this.singularLayout.addEventListener( 'change', $this.changeLayout );
			}

			// Update Breakpoints during resize.
			window.addEventListener( 'resize', function( e ) {
				$this.initBreakpoints();

				$this.initChanges();
			} );

			// Update template.
			subscribe( () => {
				const newTemplate = select( 'core/editor' ).getEditedPostAttribute( 'template' );

				if ( newTemplate !== $this.template ) {
					$this.template = newTemplate;

					$this.initPageTemplate();
				}
			} );

			// Update Breakpoints.
			var observer = new MutationObserver( function( mutations ) {
				mutations.forEach( function( mutation ) {

					if ( mutation.oldValue !== mutation.target.classList.value ) {
						$this.initBreakpoints();

						$this.initChanges();
					}
				} );
			} );

			observer.observe( document.getElementsByTagName( 'body' )[ 0 ], {
				attributes: true,
				subtree: false,
				attributeOldValue: true,
				attributeFilter: [ "class" ],
			} );

			observer.observe( document.getElementsByClassName( 'edit-post-layout' )[ 0 ], {
				attributes: true,
				subtree: false,
				attributeOldValue: true,
				attributeFilter: [ "class" ],
			} );
		},

		/*
		 * Get page template
		 */
		getPageTemplate: function() {
			return select( 'core/editor' ).getEditedPostAttribute( 'template' );
		},

		/*
		 * Initialize changes
		 */
		initChanges: function() {
			setTimeout( function() {
				document.body.dispatchEvent( new Event( 'editor-render' ) );
			}, 200 );
		},

		/*
		 * Initialize page template
		 */
		initPageTemplate: function() {

			if ( 'template-canvas-fullwidth.php' === $this.getPageTemplate() ) {
				document.body.classList.add( 'template-canvas-fullwidth' );
			} else {
				document.body.classList.remove( 'template-canvas-fullwidth' );
			}

			if ( $this.singularLayout ) {
				$this.singularLayout.dispatchEvent( new Event( 'change' ) );
			}
		},

		/*
		 * Initialize the breakpoints system
		 */
		initBreakpoints: function() {

			if ( 'undefined' === typeof $this ) {
				return;
			}

			if ( !$this.wrapper || !$this.content ) {
				return;
			}

			// Default breakpoints that should apply to all observed
			// elements that don't define their own custom breakpoints.
			var breakpoints = {
				'cs-breakpoint-up-760px': 760,
				'cs-breakpoint-up-1020px': 1020,
				'cs-breakpoint-up-1120px': 1120,
				'cs-breakpoint-up-1240px': 1240,
				'cs-breakpoint-up-1920px': 1920
			};

			// Update the matching breakpoints on the observed element.
			Object.keys( breakpoints ).forEach( function( breakpoint ) {
				var minWidth = breakpoints[ breakpoint ];

				if ( $this.wrapper.clientWidth >= minWidth ) {
					$this.content.classList.add( breakpoint );
				} else {
					$this.content.classList.remove( breakpoint );
				}
			} );
		},

		/**
		 * Init page layout.
		 */
		initLayout: function() {

			if ( 'undefined' === typeof $this || !$this.wrapper ) {
				return;
			}

			if ( 'template-canvas-fullwidth.php' === $this.getPageTemplate() ) {
				$this.wrapper.classList.add( 'layout-fullwidth' );
			} else {
				$this.wrapper.classList.add( cscoGWrapper.page_layout );
			}

			$this.wrapper.classList.add( cscoGWrapper.post_type );
			$this.wrapper.classList.add( cscoGWrapper.layoute_narrow );
			$this.wrapper.classList.add( cscoGWrapper.post_sidebar );
			$this.wrapper.classList.add( cscoGWrapper.style_align );
			$this.wrapper.classList.add( cscoGWrapper.section_heading );

			document.body.classList.add( cscoGWrapper.legacy_features );
		},

		/**
		 * Get new page layout.
		 */
		newLayout: function( layout ) {
			if ( 'layout-sidebar-right' === layout || 'layout-sidebar-left' === layout ) {
				return 'layout-nofullwidth';
			} else if ( 'layout-fullwidth' === layout ) {
				return 'layout-fullwidth';
			} else {
				return cscoGWrapper.default_layout;
			}
		},

		/**
		 * Update when page layout has changed.
		 */
		changeLayout: function() {

			var layout = ( this.value || this.options[ this.selectedIndex ].value );

			if ( 'template-canvas-fullwidth.php' === $this.getPageTemplate() ) {
				layout = 'layout-fullwidth';
			}

			if ( $this.newLayout( layout ) === cscoGWrapper.page_layout ) {
				return;
			}

			$this.wrapper.classList.remove( 'layout-fullwidth' );
			$this.wrapper.classList.remove( 'layout-nofullwidth' );

			if ( 'layout-sidebar-right' === layout || 'layout-sidebar-left' === layout ) {
				cscoGWrapper.page_layout = 'layout-nofullwidth';

				$this.wrapper.classList.add( 'layout-nofullwidth' );
			} else if ( 'layout-fullwidth' === layout ) {
				cscoGWrapper.page_layout = 'layout-fullwidth';

				$this.wrapper.classList.add( 'layout-fullwidth' );
			} else {
				cscoGWrapper.page_layout = cscoGWrapper.default_layout;

				$this.wrapper.classList.add( cscoGWrapper.default_layout );
			}

			$this.initChanges();
		}
	}
} )();


class cscoGutenbergInit extends Component {

	/**
	 * Add initial class.
	 */
	componentDidMount() {
		// Initialize.
		cscoGutenberg.init();

		// Initialize Page Template.
		cscoGutenberg.initPageTemplate();

		// Initialize Page Layout.
		cscoGutenberg.initLayout();

		// Initialize Breakpoints
		cscoGutenberg.initBreakpoints();
	}

	componentDidUpdate() {
		// Initialize.
		cscoGutenberg.init();

		// Initialize Page Template.
		cscoGutenberg.initPageTemplate();

		// Update Page Layout.
		cscoGutenberg.initLayout();

		// Update Breakpoints
		cscoGutenberg.initBreakpoints();
	}

	render() {
		return null;
	}
}
registerPlugin( 'csco-editor-wrapper', { render: cscoGutenbergInit } );
