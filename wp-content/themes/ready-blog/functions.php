<?php
/**
 * Ready Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ready Blog
 */

if ( ! function_exists( 'ready_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ready_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ready Blog, use a find and replace
	 * to change 'ready-blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ready-blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ready-blog' ),
	) );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo' , array(
		'height'		=>100,	
		'width'			=>100,	
		'flex-height'	=>true,	
		'flex-width'	=>true,
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ready_blog_custom_background_args', array(
		'default-color' => 'eee',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, icons, and column width.
	*/
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	add_editor_style( array( '/assets/css/editor-style' . $min . '.css', ready_blog_fonts_url() ) );

	// Gutenberg support
	add_theme_support( 'editor-color-palette', array(
       	array(
			'name' => esc_html__( 'Tan', 'ready-blog' ),
			'slug' => 'tan',
			'color' => '#E6DBAD',
       	),
       	array(
           	'name' => esc_html__( 'Yellow', 'ready-blog' ),
           	'slug' => 'yellow',
           	'color' => '#FDE64B',
       	),
       	array(
           	'name' => esc_html__( 'Orange', 'ready-blog' ),
           	'slug' => 'orange',
           	'color' => '#ED7014',
       	),
       	array(
           	'name' => esc_html__( 'Red', 'ready-blog' ),
           	'slug' => 'red',
           	'color' => '#D0312D',
       	),
       	array(
           	'name' => esc_html__( 'Pink', 'ready-blog' ),
           	'slug' => 'pink',
           	'color' => '#b565a7',
       	),
       	array(
           	'name' => esc_html__( 'Purple', 'ready-blog' ),
           	'slug' => 'purple',
           	'color' => '#A32CC4',
       	),
       	array(
           	'name' => esc_html__( 'Blue', 'ready-blog' ),
           	'slug' => 'blue',
           	'color' => '#3A43BA',
       	),
       	array(
           	'name' => esc_html__( 'Green', 'ready-blog' ),
           	'slug' => 'green',
           	'color' => '#3BB143',
       	),
       	array(
           	'name' => esc_html__( 'Brown', 'ready-blog' ),
           	'slug' => 'brown',
           	'color' => '#231709',
       	),
       	array(
           	'name' => esc_html__( 'Grey', 'ready-blog' ),
           	'slug' => 'grey',
           	'color' => '#6C626D',
       	),
       	array(
           	'name' => esc_html__( 'Black', 'ready-blog' ),
           	'slug' => 'black',
           	'color' => '#000000',
       	),
   	));

	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-font-sizes', array(
	   	array(
	       	'name' => esc_html__( 'small', 'ready-blog' ),
	       	'shortName' => esc_html__( 'S', 'ready-blog' ),
	       	'size' => 12,
	       	'slug' => 'small'
	   	),
	   	array(
	       	'name' => esc_html__( 'regular', 'ready-blog' ),
	       	'shortName' => esc_html__( 'M', 'ready-blog' ),
	       	'size' => 16,
	       	'slug' => 'regular'
	   	),
	   	array(
	       	'name' => esc_html__( 'larger', 'ready-blog' ),
	       	'shortName' => esc_html__( 'L', 'ready-blog' ),
	       	'size' => 36,
	       	'slug' => 'larger'
	   	),
	   	array(
	       	'name' => esc_html__( 'huge', 'ready-blog' ),
	       	'shortName' => esc_html__( 'XL', 'ready-blog' ),
	       	'size' => 48,
	       	'slug' => 'huge'
	   	)
	));
	add_theme_support('editor-styles');
	add_theme_support( 'wp-block-styles' );
}
endif;
add_action( 'after_setup_theme', 'ready_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ready_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ready_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'ready_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ready_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ready-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ready-blog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'ready-blog' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'ready-blog' ), 2 ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'ready-blog' ), 3 ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'ready-blog' ), 4 ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ready_blog_widgets_init' );

/**
 * Register custom fonts.
 */
function ready_blog_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Playfair Display: on or off', 'ready-blog' ) ) {
		$fonts[] = 'Playfair Display:400,700';
	}

	if ( 'off' !== _x( 'on', 'Lora: on or off', 'ready-blog' ) ) {
		$fonts[] = 'Lora:400,400i,700,700i';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function ready_blog_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	$fonts_url = ready_blog_fonts_url();
	$primary_color = ready_blog_get_option( 'primary_color' );
	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'ready-blog-google-fonts', $fonts_url, array(), null );
	}	

	wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/css/all' . $min . '.css', '', '4.7.0' );

	wp_enqueue_style( 'ready-blog-blocks', get_template_directory_uri() . '/assets/css/blocks' . $min . '.css' );
	
	wp_enqueue_style( 'ready-blog-style', get_stylesheet_uri() );

	wp_enqueue_script('imagesloaded');

	wp_enqueue_script( 'jquery-packery', get_template_directory_uri() . '/assets/js/packery.pkgd' . $min . '.js', array('jquery'), '2017417', true );
		
	wp_enqueue_script( 'ready-blog-navigation', get_template_directory_uri() . '/assets/js/navigation' . $min . '.js', array(), '20151215', true );

	wp_enqueue_script( 'ready-blog-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . $min . '.js', array(), '20151215', true );

	wp_enqueue_script( 'ready-blog-custom-js', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array('jquery'), '20151215', true );  

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ready_blog_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Ready Blog 1.0.0
 */
function ready_blog_block_editor_styles() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Block styles.
	wp_enqueue_style( 'ready-blog-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks' . $min . '.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'ready-blog-fonts', ready_blog_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'ready_blog_block_editor_styles' );

function ready_blog_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'ready_blog_category_title' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';

/**
* TGM plugin additions.
*/
require get_template_directory() . '/inc/tgm-plugin/tgm-hook.php';
