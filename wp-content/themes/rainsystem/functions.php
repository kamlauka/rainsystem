<?php
/**
 * rainsystem functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rainsystem
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'rainsystem_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function rainsystem_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on rainsystem, use a find and replace
         * to change 'rainsystem' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'rainsystem', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
//        add_theme_support( 'automatic-feed-links' );

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
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'rainsystem' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
//                'search-form',
//                'comment-form',
//                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'rainsystem_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'rainsystem_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rainsystem_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'rainsystem_content_width', 640 );
}
add_action( 'after_setup_theme', 'rainsystem_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

//class kontakt_widget extends WP_Widget {
//
//}
//
//public function __construct() {
//    $widget_options = array(
//        'classname' => 'kontakt_widget',
//        'description' => 'Блок контактов',
//    );
//    parent::__construct( 'wpschool_widget', 'WPSchool Widget', $widget_options );
//}
//
//





function rainsystem_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'rainsystem' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'rainsystem' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'rainsystem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rainsystem_scripts()
{
    wp_enqueue_style('uikit-style', get_template_directory_uri() . '/css/uikit.css');
    wp_enqueue_style('uikit-style-slider', get_template_directory_uri() . '/css/components/slider.css');
    wp_enqueue_style('uikit-style-slidenav', get_template_directory_uri() . '/css/components/slidenav.css');
    wp_enqueue_style('uikit-style-dotnav', get_template_directory_uri() . '/css/components/dotnav.css');
    wp_enqueue_style('uikit-style-accordion', get_template_directory_uri() . '/css/components/accordion.css');
    wp_enqueue_style('uikit-style-gradient', get_template_directory_uri() . '/css/components/accordion.gradient.css');
    wp_enqueue_style('rainsystem-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('rainsystem-style', 'rtl', 'replace');

    wp_enqueue_script('jquery');
    wp_enqueue_script('uikit-script', get_template_directory_uri() . '/js/uikit.js', array(), _S_VERSION,
            true);
    wp_enqueue_script('uikit-script-inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js', array(), _S_VERSION,
        true);
    wp_enqueue_script('uikit-script-offcanvas', get_template_directory_uri() . '/js/core/offcanvas.js', array(),
        _S_VERSION,
        true);
    wp_enqueue_script('uikit-script-accordion', get_template_directory_uri() . '/js/components/accordion.js', array(),
        _S_VERSION,
        true);
    wp_enqueue_script('uikit-script-slider', get_template_directory_uri() . '/js/components/slider.js', array(),
        _S_VERSION,
        true);
    wp_enqueue_script('uikit-script-parallax', get_template_directory_uri() . '/js/components/parallax.js', array(),
        _S_VERSION,
        true);
    wp_enqueue_script('uikit-script-slideset', get_template_directory_uri() . '/js/components/slideset.js', array(),
        _S_VERSION,
        true);
    wp_enqueue_script('rainsystem-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION,
        true);


    if (is_page_template('tpl_gazon_odessa.php') || is_page_template('tpl_avtopoliv_odessa.php') || is_page_template('tpl_tumanoobrazovanie_odessa.php')) {
        wp_enqueue_script('calc', get_template_directory_uri() . '/js/calc.js', array(), _S_VERSION, true);
    }
 
}
add_action( 'wp_enqueue_scripts', 'rainsystem_scripts' );

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

if( wp_doing_ajax() ){
    add_action( 'wp_ajax_myaction', 'ajax_rainsystem' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
    add_action( 'wp_ajax_nopriv_myaction', 'ajax_rainsystem' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
}


function js_variables(){
    $variables = array (
        'ajax_url' => admin_url('admin-ajax.php'),
        'is_mobile' => wp_is_mobile()              // Тут обычно какие-то другие переменные
    );
    echo('<script type="text/javascript">window.wp_data ='. json_encode($variables, JSON_UNESCAPED_SLASHES) .';</script>');
}

add_action('wp_head','js_variables');


function ajax_rainsystem(){
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $to = 'kamlauka@gmail.com';
    $subject = 'Заявка с сайта rainsystem';
    $message = '
        <html>
            <head>
                <title>Заявка с сайта</title>
            </head>
            <body>
                <p>Телефон '.$tel.', имя '.$name.'</p>               
                <p>Хорошего дня!)</p>               
            </body>
        </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: rainsystem <kamlauka@mail.com>\r\n";

    mail($to, $subject, $message, $headers);
    wp_die();
}
