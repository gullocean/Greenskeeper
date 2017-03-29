<?php

/**
 * Jame Software functions and definitions.
 *
 */
/**
 * Enqueue scripts and styles.
 */
function enqueue_scripts() {
	// ===========Include CSS Files =================//
	// Add Bootstrap default CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

	// Add Bootstrap Theme CSS
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css' );

	// Add style.css
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/style.css' );

	// Add Magnific Popup
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/vendor/magnific/magnific-popup.css' );

	//Add Owl Carousel CSS
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/vendor/owl-carousel/css/owl.carousel.css' );

	//Add Owl Carousel Theme CSS
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/vendor/owl-carousel/css/owl.theme.css' );

	// Add Color1 CSS
	wp_enqueue_style( 'color9', get_template_directory_uri() . '/colors/color9.css' );

	// ================Include JS Files================ //
	// Add Magnific Popup JS
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/vendor/magnific/jquery.magnific-popup.min.js', array( 'jquery' ), '20170327', true );

	// Add UI Plugins JS
	wp_enqueue_script( 'ui-plugins', get_template_directory_uri() . '/js/ui-plugins.js', array( 'jquery' ), '20170327', true );

	// Add Helper Plugins JS
	wp_enqueue_script( 'helper-plugins', get_template_directory_uri() . '/js/helper-plugins.js', array( 'jquery' ), '20170327', true );

	// Add OWL Carousel JS
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/vendor/owl-carousel/js/owl.carousel.min.js', array( 'jquery' ), '20170327', true );

	// Add Bootstrap JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '20170327', true );

	// Add Init JS
	wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', array( 'jquery' ), '20170327', true );

	// Add FlexSlider JS
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/vendor/flexslider/js/jquery.flexslider.js', array( 'jquery' ), '20170327', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function greenskeeper_setup() {
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'greenskeeper_setup' );

/*
 * Get layout class from single page
 * then from themeoptions
 */
function get_layout_class() {
		$template     = get_page_template_slug();
		$layout_class = '';
		switch ( $template ) {
			case 'page-templates/home-template.php':
				$layout_class = 'home-template';
				break;
			case 'page-templates/services-template.php':
				$layout_class = 'services-template';
				break;
			case 'page-templates/service-template.php':
				$layout_class = 'service-template';
				break;
			case 'page-templates/outwork-template.php':
				$layout_class = 'outwork-template';
				break;
			case 'page-templates/about-template.php':
				$layout_class = 'about-template';
				break;
			case 'page-templates/contact-template.php':
				$layout_class = 'contact-template';
				break;
			default:
				$layout_class = 'default-template';
				break;
		}

	return $layout_class;
}

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	                    'primary'     => esc_html__( 'Primary', 'Jame' ),
	                    'footer-menu' => esc_html__( 'Footer Links', 'Jame' )
                    ) );

if ( ! function_exists( 'wp_custom_menu' ) ) :
	/**
	 * Header menu (should you choose to use one)
	 */
	function wp_custom_menu($location) {
		// display the WordPress Custom Menu if available
		wp_nav_menu( array(
			             'menu_id'         => 'menu',
			             'theme_location'  => $location,
			             'depth'           => 3,
			             'container'       => 'div',
			             'menu_class'      => $location == 'primary' ? 'dd-menu sf-menu' : '',
		             ) );
	} /* end header menu */
endif;

// Display breadcrumbs for each pages.
if ( ! function_exists( 'get_breadcrumb' ) ) :
	function get_breadcrumb($page_id) {
		$parent_ids = get_post_ancestors($page_id);
		?>
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
		<?php
		if (!empty($parent_ids)) {
			foreach ($parent_ids as $parent_id) {
				$parent_page = get_page($parent_id);
				$parent_page_url = get_permalink($parent_id);
			?>
				<li><a href="<?php echo $parent_page_url; ?>"><?php echo $parent_page->post_title; ?></a></li>
			<?php
			}
		}
		?>
		<li class="active"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
		</ol>
		<?php
	}
endif;