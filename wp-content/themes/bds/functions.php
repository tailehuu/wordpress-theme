<?php
/**
 * Bat Dong San - TQT functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if (!isset($content_width))
    $content_width = 800; /* pixels */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bds_setup()
{
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain('bds', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support('post-thumbnails');

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus(array(
        'home-menu' => __('Home Menu', 'bds'),
        'primary-menu' => __('Primary Menu', 'bds')
    ));

    /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));
}

add_action('after_setup_theme', 'bds_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bds_widgets_init()
{
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'bds'),
        'id' => 'primary-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));

    register_sidebar(array(
        'name' => __('Secondary Sidebar', 'bds'),
        'id' => 'secondary-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'bds_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bds_scripts()
{
    // css
    // style.css
    wp_enqueue_style('style', get_stylesheet_uri());

    // css vendor
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
//    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css');

    // css creative
    wp_enqueue_style('creative', get_template_directory_uri() . '/assets/css/creative.min.css');

    // js
    // js vendor
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), false, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('jquery-easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), false, true);
    wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array(), false, true);
    wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), false, true);

    // js creative
    wp_enqueue_script('creative', get_template_directory_uri() . '/assets/js/creative.min.js', array(), false, true);

    // js custom
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'bds_scripts');

// menu: add class function
function add_menu_attributes( $atts, $item, $args ) {
    $atts['class'] = 'page-scroll';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_attributes', 10, 3 );

// disable jquery
function load_old_jquery_fix() {
    if ( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
//        wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ), false, '1.11.3' );
//        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'load_old_jquery_fix', 100 );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function bds_custom_excerpt_length( $length) {
    return 10;
}
add_filter( 'excerpt_length', 'bds_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function bds_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'bds_excerpt_more' );