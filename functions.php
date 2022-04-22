<?php


// THEME SETUP FUNCTION 
add_action('after_setup_theme', 'defuault_function');

function defuault_function(){
    
    // ADD THEME SUPPORT FOR TRANSLATION
	load_theme_textdomain( 'TEXT DOMAIN', get_template_directory() . '/language' );
    
    // ADD THEME SUPPORT FOR TITLE TAG [bloginfo('title-tag')]
    add_theme_support('title-tag');
    
    // ADD THEME SUPPORT FOR DESCRIPTION [bloginfo('description')]
    add_theme_support('description');
    
    // ADD THEME SUPPORT FOR POST THUMBNAILS [the_post_thumbnail();]
    add_theme_support('post-thumbnails');
	   // Set post thumbnail size.
	   set_post_thumbnail_size( 1200, 9999 );
    
    // ADD THEME SUPPORT FOR WIDGETS 
    add_theme_support('widgets');
	
	// ADD SUPPORT FOR FULL AND WIDE ALIGN IMAGES.
	add_theme_support( 'align-wide' );

	// ADD SUPPORT FOR RESPONSIVE EMBEDS.
	add_theme_support( 'responsive-embeds' );
	
	// ADD THEME SUPPORT FOR SELECTIVE REFRESH FOR WIDGETS.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// ADD CUSTOM IMAGE SIZE USED IN COVER TEMPLATE.
	//add_image_size( 'theme_name-fullscreen', 1980, 9999 );
    
	// ADD THEME SUPPORT FOR POST FORMATS.
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ));
	
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
			'script',
			'style',
			'navigation-widgets',
		)
	);
    
    
	// CUSTOM LOGO. [the_custom_logo()]
	$logo_width  = 120;
	$logo_height = 90;

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	
    
    // CUSTOM BACKGROUND.[header_image()]
	add_theme_support(
		'custom-background',
		array(
            'default-color'          => '',
            /*'default-image'          => '',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'           => 'auto',
            'default-attachment'     => 'scroll',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => ''*/
		)
	);

	
	// REGISTER NAV MENU [wp_nav_menu]
   register_nav_menus(array(
        'header-menu'   =>  __( 'Header Menu', 'TAXT DOMAIN' ),
        'footer-menu'   =>  __( 'Footer Menu', 'TAXT DOMAIN' ),
    ));

} //END THEME SETUP FUNCTION 


// ADDING GOOGLE FONT
function get_google_fonts(){

	$fonts = array();
	$fonts[] = 'Open+Sans';
	$fonts[] = 'Raleway:800,700,400,300';
	$fonts[] = 'Montserrat:400,700';

	$google_fonts = add_query_arg(array(
		'family' => urlencode(implode('|', $fonts)),
		'subset' => 'latin',
	), 'https://fonts.googleapis.com/css');

	return $google_fonts;

}

//REGISTER STYLE
add_action( 'wp_enqueue_scripts', 'custom_styles' );

function custom_styles() {
        
    //animate CSS
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'font-awesome-animation', get_template_directory_uri().'/css/font-awesome-animation.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'hover', get_template_directory_uri().'/css/hover.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'animsition', get_template_directory_uri().'/css/animsition.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'carousel', get_template_directory_uri().'/vendor/owl.carousel/owl.carousel.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'animate-min', get_template_directory_uri().'/css/animate.min.css', array(), '1.0', 'all' );
        
    //style CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'custom-css', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0', 'all' );
    
}


// REGISTER SCRIPTS
add_action('wp_enqueue_scripts', 'custom_scripts');

function custom_scripts(){
    
    //bootstrap JS
    //wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('animsition', get_template_directory_uri().'/js/animsition.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('bannerText', get_template_directory_uri().'/vendor/bannerText/morphext.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('gallery', get_template_directory_uri().'/vendor/gallery/jquery.blueimp-gallery.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('portfolio', get_template_directory_uri().'/vendor/portfolio/grid.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('counterup', get_template_directory_uri().'/vendor/counterup/jquery.counterup.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('counterup-min', get_template_directory_uri().'/vendor/counterup/jquery.waypoints.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('carousel', get_template_directory_uri().'/vendor/owl.carousel/owl.carousel.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('script2', get_template_directory_uri().'/js/script2.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('testimonial', get_template_directory_uri().'/vendor/testimonial/jquery.bxslider.min.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('testimonial-animation', get_template_directory_uri().'/vendor/testimonial/animations.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('testimonial-init', get_template_directory_uri().'/vendor/testimonial/init.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0', 'all');
}



// INCLUDING THE CONDITIONAL SCRIPT
add_action('wp_enqueue_scripts', 'comet_conditional_function');
function comet_conditional_function(){
    wp_enqueue_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '', false);
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    
    wp_enqueue_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '', false);
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
}



// ADDING CUSTOM POST TYPE
add_action('init', 'custom_post');

function custom_post(){
    register_post_type('galary', array(
        'public'    =>  true,
        'labels'    => array(
            'name'  =>  'Galary',
            'add_new'   =>  'Add New Galary',
            'all_items' =>  'All Galary Itmes',
        ),
        'supports'      =>  array('title', 'editor', 'thumbnail'),
    ));
    
        // Taxonomy Tags
    register_taxonomy('gal-tag', 'galary', array(
        'public'    => true,
        'hierarchical'  => false,
        'labels'    =>  array(
            'name'  =>  'Galary Tag',
        ),
    ));
    
        // Taxonomy Category
    register_taxonomy('gal-cat', 'galary', array(
        'public'    =>  true,
        'hierarchical'  =>  true,
        'labels'    =>  array(
            'name'  =>  'Galary Category.',
        )
    ));
}




// REGISTER SIDEBAR [dynamic_sidebar('id')]
add_action('widgets_init', 'sidebar');

function sidebar(){
    register_sidebar(array(
        'name'  =>   'Right Sidebar',
        'id'    =>   'right-sidebar',
    ));
}




// ADDING REQUIRE FILES
if ( file_exists( dirname( __FILE__ ) . '/test.php' ) ) {
	require_once dirname( __FILE__ ) . '/test.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/test.php' ) ) {
	require_once dirname( __FILE__ ) . '/test.php';
}


// ADDING META BOX
    
    //Add Meta Box Init File
    if ( file_exists( dirname( __FILE__ ) . '/meta/init.php' ) ) {
        require_once dirname( __FILE__ ) . '/meta/init.php';
    } elseif ( file_exists( dirname( __FILE__ ) . '/meta/init.php' ) ) {
        require_once dirname( __FILE__ ) . '/meta/init.php';
    }

    //Add Meta Box config File
    if ( file_exists( dirname( __FILE__ ) . '/meta/config.php' ) ) {
        require_once dirname( __FILE__ ) . '/meta/config.php';
    } elseif ( file_exists( dirname( __FILE__ ) . '/meta/config.php' ) ) {
        require_once dirname( __FILE__ ) . '/meta/config.php';
    }



// ADDING // REDUX FRAMEWORK

    // Add Redux framework file
    //if ( file_exists( dirname( __FILE__ ) . '/opt/redux-core/framework.php' ) ) {
      //  require_once dirname( __FILE__ ) . '/opt/redux-core/framework.php';
   // } elseif ( file_exists( dirname( __FILE__ ) . '/opt/redux-core/framework.php' ) ) {
      //  require_once dirname( __FILE__ ) . '/opt/redux-core/framework.php';
   // }

    // Add Redux config file
   // if ( file_exists( dirname( __FILE__ ) . '/opt/sample/config.php' ) ) {
      //  require_once dirname( __FILE__ ) . '/opt/sample/config.php';
   // } elseif ( file_exists( dirname( __FILE__ ) . '/opt/sample/config.php' ) ) {
   //     require_once dirname( __FILE__ ) . '/opt/sample/config.php';
   // }




