<?php

/**
 * pronto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pronto
 */

remove_filter( 'the_content', 'wpautop' );

function scripts() {

    // Load our main stylesheet.
    wp_enqueue_style('style-bootstrap', get_stylesheet_directory_uri() . '/dist/css/bootstrap.min.css', false, filemtime(get_stylesheet_directory() . '/dist/css/bootstrap.min.css'), 'all');
    wp_enqueue_style('style', get_stylesheet_uri() . '');

    wp_enqueue_script('jq-js', get_stylesheet_directory_uri() . '/dist/js/bootstrap.bundle.min.js', array(), false, true);
}
/*
*Add action
*/
add_action('wp_enqueue_scripts', 'scripts');

function register_navwalker(){
	require_once get_stylesheet_directory ( ). '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


if ( ! function_exists( 'pronto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
function pronto_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on pronto, use a find and replace
     * to change 'pronto' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'pronto', get_template_directory() . '/languages' );

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
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'pronto' ),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
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
				'pronto_custom_background_args',
				array(
					'default-color' => '#dd3333',
					'default-image' => get_template_directory_uri() .'/images/pronto_labs_bg_img.jpg',
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
add_action( 'after_setup_theme', 'pronto_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pronto_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Main-text', 'pronto' ),
			'id'            => 'maintxt',
			'description'   => esc_html__( 'Text widget for main txt.', 'pronto' ),
			'before_widget' => '<div class="col-9 mx-auto d-flex justify-content-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Current Project', 'pronto' ),
			'id'            => 'current-project',
			'description'   => esc_html__( 'Current Project title', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Current Status', 'pronto' ),
			'id'            => 'current-status',
			'description'   => esc_html__( 'Current Status for project', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Current Status Early', 'pronto' ),
			'id'            => 'current-status-early',
			'description'   => esc_html__( 'Current Status for project', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Photo1', 'pronto' ),
			'id'            => 'photo1',
			'description'   => esc_html__( 'Current Photo for project', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Photo2', 'pronto' ),
			'id'            => 'photo2',
			'description'   => esc_html__( 'Current Photo for project', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Photo3', 'pronto' ),
			'id'            => 'photo3',
			'description'   => esc_html__( 'Current Status for project', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Edit title', 'pronto' ),
			'id'            => 'project-market-title',
			'description'   => esc_html__( 'Edit title for project market', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Project Market', 'pronto' ),
			'id'            => 'project-market-desc',
			'description'   => esc_html__( 'Project market description', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer info', 'pronto' ),
			'id'            => 'footer-info',
			'description'   => esc_html__( 'Footer info editable', 'pronto' ),
			'before_widget' => '<div class="text-light text-center">',
			'after_widget'  => '</div>',
            'before-title'  => '',
            'after-title'   => '',
		)
	);
}
add_action( 'widgets_init', 'pronto_widgets_init' );



function wpb_tag_cloud() { 
    $tags = get_tags();
    $args = array(
        'smallest'                  => 10, 
        'largest'                   => 22,
        'unit'                      => 'px', 
        'number'                    => 10,  
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count', 
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => false
    ); 
     
    $tag_string = wp_generate_tag_cloud( $tags, $args );
     
    return $tag_string; 
     
    } 
    // Add a shortcode so that we can use it in widgets, posts, and pages
    add_shortcode('wpb_popular_tags', 'wpb_tag_cloud'); 
     
    // Enable shortcode execution in text widget
    add_filter ('widget_text', 'do_shortcode'); 

    
        //Pagination
        function pagination_bar() {
            global $wp_query;
         
            $total_pages = $wp_query->max_num_pages;
         
            if ($total_pages > 1){
                $current_page = max(1, get_query_var('paged'));
         
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text' => '<<',
                    'next_text' => '>>'
                ));
            }
        }

        
        /**
         * Customizer additions.
         */
        require get_template_directory() . '/customizer.php';

        add_action( 'customize_preview_init', 'pronto_customizer' );

function pronto_customizer() {
	wp_enqueue_script(
		  'pronto_customizer',
		  get_template_directory_uri() . '/dist/js/customizer.js',
		  array( 'jquery','customize-preview' ),
		  '',
		  true
	);
}

/*
add_action( 'wp_head', 'pronto_customizer_css');

function pronto_customizer_css()
{
    ?>
         <style type="text/css">
            div.container-fluid { background-image: url(<?php echo get_theme_mod('background_image', "/images/pronto_labs_bg_img.jpg"); ?>) }
         </style>
    <?php
}*/

add_action( 'customize_register', 'pronto_customizer_settings' );

function pronto_customizer_settings( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
        