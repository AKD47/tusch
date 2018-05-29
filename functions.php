<?php
/**
 * tusch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tusch
 */

if ( ! function_exists( 'tusch_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tusch_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tusch, use a find and replace
		 * to change 'tusch' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tusch', get_template_directory() . '/languages' );

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
			'top_menu' => esc_html__( 'top_menu', 'tusch' ),//for header navigation
            'footer_menu' => esc_html__( 'footer_menu', 'tusch')//for footer navidation
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tusch_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tusch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tusch_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tusch_content_width', 640 );
}
add_action( 'after_setup_theme', 'tusch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tusch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tusch' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tusch' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tusch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tusch_scripts() {
    //css
    wp_enqueue_style( 'tusch-fontsaversome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'tusch-libs-style', get_template_directory_uri() . '/assets/css/libs.min.css' );
    wp_enqueue_style( 'tusch-main-style', get_template_directory_uri() . '/assets/css/styles.min.css' );
    //js
    wp_enqueue_script( 'tusch-jquary-script', get_template_directory_uri() . '/assets/js/jquery-2.1.3.min.js', [], '', true );
    wp_enqueue_script( 'tusch-slick', get_template_directory_uri() . '/assets/js/slick.js', [], '', true );
    wp_enqueue_script( 'tusch-script', get_template_directory_uri() . '/assets/js/script.min.js', [], '', true );

    wp_localize_script( 'tusch-script', 'myajax',
        [
            'url' => admin_url( 'admin-ajax.php' ),
            'template' => get_template_directory_uri()
        ]
    );


//	wp_enqueue_style( 'tusch-style', get_stylesheet_uri() );
//
//	wp_enqueue_script( 'tusch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//
//	wp_enqueue_script( 'tusch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
//
//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'tusch_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*add shortcodes*/
require get_template_directory() . '/inc/shortcodes.php';

/*remove admin bar margin*/
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
/*----- woocommerce -----*/
/*woocommerce support*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
/*remove 'add to cart'*/
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 4;' ), 20 );

// remove default result count
add_action('init','delay_remove_result_count');

function delay_remove_result_count() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}

// remove default sorting dropdown
add_action('init','delay_remove_sorting');

function delay_remove_sorting() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}

// category ajax
add_action('wp_ajax_myCatAjax', 'my_action_cat_callback');
add_action('wp_ajax_nopriv_myCatAjax', 'my_action_cat_callback');

function my_action_cat_callback() {
    $args = array(
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'id',
                'terms'    => $_POST['postID']
            )
        )
    );

    $query = new WP_Query($args);
    $posts = $query->posts;
    foreach ($posts as $post){
        $short = CFS()->get('short_description', $post->ID);
        $post->post_mime_type = $short;
        $thumbnail = get_the_post_thumbnail( $post->ID, 'medium', $default_attr = array(
            'class' => "woocommerce-placeholder wp-post-image",
            'alt'   => trim(strip_tags( $post->post_title )),
            'title' => trim(strip_tags( $post->post_title )),
        ));
        $post->post_modified = $thumbnail;
    }

    echo json_encode($posts);

    wp_die();
}

// subcategory ajax
add_action('wp_ajax_mySubcatAjax', 'my_action_subcaT_callback');
add_action('wp_ajax_nopriv_mySubcatAjax', 'my_action_subcaT_callback');

function my_action_subcaT_callback() {
    $args = array(
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'id',
                'terms'    => $_POST['postID']
            )
        )
    );

    $query = new WP_Query($args);
    $posts = $query->posts;
    foreach ($posts as $post){
        $short = CFS()->get('short_description', $post->ID);
        $post->post_mime_type = $short;
        $thumbnail = get_the_post_thumbnail( $post->ID, 'medium', $default_attr = array(
            'class' => "woocommerce-placeholder wp-post-image",
            'alt'   => trim(strip_tags( $post->post_title )),
            'title' => trim(strip_tags( $post->post_title )),
        ));
        $post->post_modified = $thumbnail;
    }

    echo json_encode($posts);

    wp_die();
}