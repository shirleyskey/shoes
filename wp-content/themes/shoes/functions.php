<?php
/**
 * shoes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shoes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'shoes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shoes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on shoes, use a find and replace
		 * to change 'shoes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shoes', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'shoes' ),
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
				'shoes_custom_background_args',
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
add_action( 'after_setup_theme', 'shoes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shoes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shoes_content_width', 640 );
}
add_action( 'after_setup_theme', 'shoes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shoes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shoes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shoes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shoes_widgets_init' );

function customizer_a( $wp_customize ) {
 
	// Tạo section
$wp_customize->add_section (
	'section_a',
	array(
		'title' => 'Tùy Biến Trang Liên Hệ',
		'description' => 'Các tùy chọn cho Trang Liên Hệ',
		'priority' => 25
	)
);

// Tạo setting
$wp_customize->add_setting (
		'option1',
		array(
			'default' => 'Giá trị mặc định'
		)
	);
	$wp_customize->add_setting (
		'option2',
		array(
			'default' => 'Giá trị mặc định 2'
		)
	);

	$wp_customize->add_setting (
		'option3',
		array(
			'default' => 'Giá trị mặc định 3'
		)
	);

	$wp_customize->add_setting (
		'option4',
		array(
			'default' => 'Giá trị mặc định 4'
		)
	);

	$wp_customize->add_setting (
		'contact-des-01',
		array(
			'default' => 'Descrition 01'
		)
	);

	$wp_customize->add_setting (
		'contact-des-02',
		array(
			'default' => 'Descrition 02'
		)
	);



	// Tạo coltrol
	$wp_customize->add_control (
		'control_option1',
		array(
			'label' => 'Option 1',
			'section' => 'section_a',
			'type' => 'text',
			'settings' => 'option1'
		)
	);
	$wp_customize->add_control (
		'control_option2',
		array(
			'label' => 'Option 2',
			'section' => 'section_a',
			'type' => 'text',
			'settings' => 'option2'
		)
	);
	$wp_customize->add_control (
		'control_option3',
		array(
			'label' => 'Option 3',
			'section' => 'section_a',
			'type' => 'text',
			'settings' => 'option3'
		)
	);

	$wp_customize->add_control (
		'control_option4',
		array(
			'label' => 'Option 4',
			'section' => 'section_a',
			'type' => 'text',
			'settings' => 'option4'
		)
	);

	$wp_customize->add_control (
		'control_contact-des-01',
		array(
			'label' => 'Option Description 01:',
			'section' => 'section_a',
			'type' => 'text',
			'settings' => 'contact-des-01'
		)
	);

	$wp_customize->add_control (
		'control_contact-des-02',
		array(
			'label' => 'Option Description 02:',
			'section' => 'section_a',
			'type' => 'text',
			'settings' => 'contact-des-02'
		)
	);

	

	/* Image Upload */
	$wp_customize->add_setting( 'background' );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'background',
			array(
				'label' => 'Custom Contact Background Image:',
				'section' => 'section_a',
				'settings' => 'background'
			)
		)
	);


	$wp_customize->add_setting( 'img_icon1' );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'img_icon1',
			array(
				'label' => 'Image Icon 01 (576px/460px):',
				'section' => 'section_a',
				'settings' => 'img_icon1'
			)
		)
	);

	$wp_customize->add_setting( 'img_icon2' );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'img_icon2',
			array(
				'label' => 'Image Icon 02 (576px/460px):',
				'section' => 'section_a',
				'settings' => 'img_icon2'
			)
		)
	);

	$wp_customize->add_setting( 'img_icon3' );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'img_icon3',
			array(
				'label' => 'Image Icon 03 (576px/460px):',
				'section' => 'section_a',
				'settings' => 'img_icon3'
			)
		)
	);

	$wp_customize->add_setting( 'img_icon4' );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'img_icon4',
			array(
				'label' => 'Image Icon 04 (576px/460px):',
				'section' => 'section_a',
				'settings' => 'img_icon4'
			)
		)
	);




}
add_action( 'customize_register', 'customizer_a' );


function customizer_b( $wp_customize ) {
 
	// Tạo section
$wp_customize->add_section (
	'section_b',
	array(
		'title' => 'Tùy Biến Trang Chủ',
		'description' => 'Các tùy chọn cho Trang Chủ',
		'priority' => 25
	)
);

// Tạo setting
$wp_customize->add_setting( 'logo' );
 
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label' => 'Logo (200px/85px):',
            'section' => 'section_b',
            'settings' => 'logo'
        )
    )
);
	$wp_customize->add_setting (
		'title',
		array(
			'default' => 'Title on Top-header'
		)
	);

	$wp_customize->add_setting (
		'desciption01',
		array(
			'default' => 'Giá trị mặc định description01'
		)
	);

	$wp_customize->add_setting (
		'desciption02',
		array(
			'default' => 'Giá trị mặc định description02'
		)
	);

	$wp_customize->add_setting (
		'pinterest',
		array(
			'default' => 'Giá trị mặc định pinterest'
		)
	);


	$wp_customize->add_setting (
		'instagram',
		array(
			'default' => 'Giá trị mặc định instagram'
		)
	);

	$wp_customize->add_setting (
		'facebook',
		array(
			'default' => 'Giá trị mặc định facebook'
		)
	);

	$wp_customize->add_setting (
		'twitter',
		array(
			'default' => 'Giá trị mặc định twitter'
		)
	);

	$wp_customize->add_setting(
		'color_size',
				array(
					'default' => '#FAB832',
				)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_size',
			array(
				'label' => 'Color Size:',
				'section' => 'section_b',
				'settings' => 'color_size',
			)
		)
	);

	$wp_customize->add_setting(
		'color_line',
				array(
					'default' => '#FAB832',
				)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_line',
			array(
				'label' => 'Color line:',
				'section' => 'section_b',
				'settings' => 'color_line',
			)
		)
	);

	$wp_customize->add_setting(
		'color_name_item',
				array(
					'default' => '#000000',
				)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_name_item',
			array(
				'label' => 'Color Name Item:',
				'section' => 'section_b',
				'settings' => 'color_name_item',
			)
		)
	);

	$wp_customize->add_setting(
		'color_header',
				array(
					'default' => '#000000',
				)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'color_header',
			array(
				'label' => 'Color Header & Footer:',
				'section' => 'section_b',
				'settings' => 'color_header',
			)
		)
	);



	// Tạo coltrol
	
	$wp_customize->add_control (
		'control_title',
		array(
			'label' => 'Title on Top Header:',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'title'
		)
	);
	$wp_customize->add_control (
		'control_description01',
		array(
			'label' => 'Footer Description 1:',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'desciption01'
		)
	);
	
	$wp_customize->add_control (
		'control_description02',
		array(
			'label' => 'Footer Description 1:',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'desciption02'
		)
	);

	$wp_customize->add_control (
		'control_pinterest',
		array(
			'label' => 'Option Pinterest Link',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'pinterest'
		)
	);
	$wp_customize->add_control (
		'control_instagram',
		array(
			'label' => 'Option Instagram Link',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'instagram'
		)
	);
	$wp_customize->add_control (
		'control_facebook',
		array(
			'label' => 'Option Facebook Link',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'facebook'
		)
	);
	
	$wp_customize->add_control (
		'control_twitter',
		array(
			'label' => 'Option Link Twitter',
			'section' => 'section_b',
			'type' => 'text',
			'settings' => 'twitter'
		)
	);

}
add_action( 'customize_register', 'customizer_b' );

function customizer_color( $wp_customize ) {
 
	// Tạo section
$wp_customize->add_section (
	'section_color',
	array(
		'title' => 'Tùy Biến Màu',
		'description' => 'Các tùy chọn cho Màu Sắc',
		'priority' => 25
	)
);

// Tạo setting
$wp_customize->add_setting (
		'text-color',
		array(
			'default' => 'text-color mặc định'
		)
	);
	$wp_customize->add_setting (
		'text-color01',
		array(
			'default' => 'Giá trị mặc định title'
		)
	);

	$wp_customize->add_setting (
		'button-color',
		array(
			'default' => 'Giá trị mặc định description01'
		)
	);

	$wp_customize->add_setting (
		'background-color',
		array(
			'default' => 'Giá trị mặc định background color'
		)
	);

	$wp_customize->add_control (
		'control_background-color',
		array(
			'label' => 'Background-color',
			'section' => 'section_color',
			'type' => 'text',
			'settings' => 'background-color'
		)
	);
	$wp_customize->add_control (
		'control_button-color',
		array(
			'label' => 'Button Color',
			'section' => 'section_color',
			'type' => 'text',
			'settings' => 'button-color'
		)
	);
	$wp_customize->add_control (
		'control_text-color01',
		array(
			'label' => 'text color 01',
			'section' => 'section_color',
			'type' => 'text',
			'settings' => 'text-color01'
		)
	);
	
	$wp_customize->add_control (
		'control_text-color',
		array(
			'label' => 'Text color',
			'section' => 'section_color',
			'type' => 'text',
			'settings' => 'text-color'
		)
	);

}
add_action( 'customize_register', 'customizer_color' );



/**
 * Enqueue scripts and styles.
 */
function shoes_scripts() {
	wp_enqueue_style( 'shoes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'shoes-style', 'rtl', 'replace' );

	wp_enqueue_script( 'shoes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shoes_scripts' );

/**
 * Implement the Custom Header feature.
 */


/**
 * Custom template tags for this theme.
 */

/**
 * Functions which enhance the theme by hooking into WordPress.
 */

/**
 * Customizer additions.
 */

/**
 * Load Jetpack compatibility file.
 */


