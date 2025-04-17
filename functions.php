<?php
/**
 * JPHenri functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JPHenri
 */

if ( ! defined( 'JPHENRI_VERSION' ) ) {
	define( 'JPHENRI_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function jphenri_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register menu locations
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'jphenri' ),
			'footer' => esc_html__( 'Footer Menu', 'jphenri' ),
		)
	);

	// Switch default core markup to output valid HTML5.
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
			'jphenri_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for editor styles
	add_theme_support( 'editor-styles' );

	// Add support for Block Styles
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'jphenri_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jphenri_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jphenri_content_width', 1200 );
}
add_action( 'after_setup_theme', 'jphenri_content_width', 0 );

/**
 * Register widget area.
 */
function jphenri_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jphenri' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jphenri' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'jphenri' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add footer widgets here.', 'jphenri' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'jphenri_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jphenri_scripts() {
	wp_enqueue_style( 'jphenri-style', get_stylesheet_uri(), array(), JPHENRI_VERSION );
	
	// Add Font Awesome for icons
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
	
	wp_enqueue_script( 'jphenri-navigation', get_template_directory_uri() . '/js/navigation.js', array(), JPHENRI_VERSION, true );

	wp_enqueue_script( 'jphenri-service-images', get_template_directory_uri() . '/js/service-images.js', array('jquery'), JPHENRI_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jphenri_scripts' );

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
 * Register Custom Post Types
 */
function jphenri_register_post_types() {
    // Register Services CPT
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'jphenri' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'jphenri' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'jphenri' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'jphenri' ),
        'add_new'               => __( 'Add New', 'jphenri' ),
        'add_new_item'          => __( 'Add New Service', 'jphenri' ),
        'new_item'              => __( 'New Service', 'jphenri' ),
        'edit_item'             => __( 'Edit Service', 'jphenri' ),
        'view_item'             => __( 'View Service', 'jphenri' ),
        'all_items'             => __( 'All Services', 'jphenri' ),
        'search_items'          => __( 'Search Services', 'jphenri' ),
        'parent_item_colon'     => __( 'Parent Services:', 'jphenri' ),
        'not_found'             => __( 'No services found.', 'jphenri' ),
        'not_found_in_trash'    => __( 'No services found in Trash.', 'jphenri' ),
        'featured_image'        => _x( 'Service Cover Image', 'Overrides the "Featured Image" phrase', 'jphenri' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the "Set featured image" phrase', 'jphenri' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the "Remove featured image" phrase', 'jphenri' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the "Use as featured image" phrase', 'jphenri' ),
        'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus', 'jphenri' ),
        'insert_into_item'      => _x( 'Insert into service', 'Overrides the "Insert into post" phrase', 'jphenri' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the "Uploaded to this post" phrase', 'jphenri' ),
        'filter_items_list'     => _x( 'Filter services list', 'Screen reader text for the filter links', 'jphenri' ),
        'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination', 'jphenri' ),
        'items_list'            => _x( 'Services list', 'Screen reader text for the items list', 'jphenri' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'          => 'dashicons-admin-tools',
    );

    register_post_type( 'service', $args );

    // Register Projects CPT
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'jphenri' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'jphenri' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'jphenri' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'jphenri' ),
        'add_new'               => __( 'Add New', 'jphenri' ),
        'add_new_item'          => __( 'Add New Project', 'jphenri' ),
        'new_item'              => __( 'New Project', 'jphenri' ),
        'edit_item'             => __( 'Edit Project', 'jphenri' ),
        'view_item'             => __( 'View Project', 'jphenri' ),
        'all_items'             => __( 'All Projects', 'jphenri' ),
        'search_items'          => __( 'Search Projects', 'jphenri' ),
        'parent_item_colon'     => __( 'Parent Projects:', 'jphenri' ),
        'not_found'             => __( 'No projects found.', 'jphenri' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'jphenri' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the "Featured Image" phrase', 'jphenri' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the "Set featured image" phrase', 'jphenri' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the "Remove featured image" phrase', 'jphenri' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the "Use as featured image" phrase', 'jphenri' ),
        'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus', 'jphenri' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the "Insert into post" phrase', 'jphenri' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the "Uploaded to this post" phrase', 'jphenri' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links', 'jphenri' ),
        'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination', 'jphenri' ),
        'items_list'            => _x( 'Projects list', 'Screen reader text for the items list', 'jphenri' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type( 'project', $args );
}
add_action( 'init', 'jphenri_register_post_types' );

// Add this function after jphenri_register_post_types()

/**
 * Create necessary pages on theme activation
 */
function jphenri_create_pages() {
    // Check if the Services Gallery page exists
    $services_gallery = get_page_by_path('services-gallery');
    
    if (!$services_gallery) {
        // Create the Services Gallery page
        $services_gallery_args = array(
            'post_title'    => __('Galerie des Services', 'jphenri'),
            'post_content'  => __('Téléchargez les images de nos services.', 'jphenri'),
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'services-gallery',
            'page_template' => 'page-templates/services-gallery.php'
        );
        
        $services_gallery_id = wp_insert_post($services_gallery_args);
        
        if ($services_gallery_id) {
            update_post_meta($services_gallery_id, '_wp_page_template', 'page-templates/services-gallery.php');
        }
    }
}

// Run this function on theme activation
add_action('after_switch_theme', 'jphenri_create_pages');

/**
 * Add custom meta boxes for services and projects
 */
function jphenri_add_meta_boxes() {
    // Service Icon
    add_meta_box(
        'service_icon',
        __( 'Service Icon', 'jphenri' ),
        'jphenri_service_icon_callback',
        'service',
        'side',
        'default'
    );
    
    // Project Details
    add_meta_box(
        'project_details',
        __( 'Project Details', 'jphenri' ),
        'jphenri_project_details_callback',
        'project',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'jphenri_add_meta_boxes' );

/**
 * Service Icon meta box callback
 */
function jphenri_service_icon_callback( $post ) {
    wp_nonce_field( 'jphenri_service_( $post ) {
    wp_nonce_field( 'jphenri_service_icon_meta_box', 'jphenri_service_icon_meta_box_nonce' );
    
    $icon = get_post_meta( $post->ID, '_service_icon', true );
    ?>
    <p>
        <label for="jphenri_service_icon"><?php _e( 'Font Awesome Icon Class (e.g. fa-laptop, fa-code)', 'jphenri' ); ?></label>
        <input type="text" id="jphenri_service_icon" name="jphenri_service_icon" value="<?php echo esc_attr( $icon ); ?>" class="widefat">
    </p>
    <p class="description">
        <?php _e( 'Enter a Font Awesome icon class. See <a href="https://fontawesome.com/icons" target="_blank">available icons</a>.', 'jphenri' ); ?>
    </p>
    <?php
}

/**
 * Project Details meta box callback
 */
function jphenri_project_details_callback( $post ) {
    wp_nonce_field( 'jphenri_project_details_meta_box', 'jphenri_project_details_meta_box_nonce' );
    
    $client = get_post_meta( $post->ID, '_project_client', true );
    $year = get_post_meta( $post->ID, '_project_year', true );
    $url = get_post_meta( $post->ID, '_project_url', true );
    $features = get_post_meta( $post->ID, '_project_features', true );
    ?>
    <p>
        <label for="jphenri_project_client"><?php _e( 'Client', 'jphenri' ); ?></label>
        <input type="text" id="jphenri_project_client" name="jphenri_project_client" value="<?php echo esc_attr( $client ); ?>" class="widefat">
    </p>
    <p>
        <label for="jphenri_project_year"><?php _e( 'Year', 'jphenri' ); ?></label>
        <input type="text" id="jphenri_project_year" name="jphenri_project_year" value="<?php echo esc_attr( $year ); ?>" class="widefat">
    </p>
    <p>
        <label for="jphenri_project_url"><?php _e( 'Project URL', 'jphenri' ); ?></label>
        <input type="url" id="jphenri_project_url" name="jphenri_project_url" value="<?php echo esc_url( $url ); ?>" class="widefat">
    </p>
    <p>
        <label for="jphenri_project_features"><?php _e( 'Key Features (one per line)', 'jphenri' ); ?></label>
        <textarea id="jphenri_project_features" name="jphenri_project_features" class="widefat" rows="5"><?php echo esc_textarea( $features ); ?></textarea>
    </p>
    <?php
}

/**
 * Save meta box data
 */
function jphenri_save_meta_box_data( $post_id ) {
    // Check if our nonce is set for service icon
    if ( isset( $_POST['jphenri_service_icon_meta_box_nonce'] ) ) {
        if ( ! wp_verify_nonce( $_POST['jphenri_service_icon_meta_box_nonce'], 'jphenri_service_icon_meta_box' ) ) {
            return;
        }
        
        if ( isset( $_POST['jphenri_service_icon'] ) ) {
            update_post_meta( $post_id, '_service_icon', sanitize_text_field( $_POST['jphenri_service_icon'] ) );
        }
    }
    
    // Check if our nonce is set for project details
    if ( isset( $_POST['jphenri_project_details_meta_box_nonce'] ) ) {
        if ( ! wp_verify_nonce( $_POST['jphenri_project_details_meta_box_nonce'], 'jphenri_project_details_meta_box' ) ) {
            return;
        }
        
        if ( isset( $_POST['jphenri_project_client'] ) ) {
            update_post_meta( $post_id, '_project_client', sanitize_text_field( $_POST['jphenri_project_client'] ) );
        }
        
        if ( isset( $_POST['jphenri_project_year'] ) ) {
            update_post_meta( $post_id, '_project_year', sanitize_text_field( $_POST['jphenri_project_year'] ) );
        }
        
        if ( isset( $_POST['jphenri_project_url'] ) ) {
            update_post_meta( $post_id, '_project_url', esc_url_raw( $_POST['jphenri_project_url'] ) );
        }
        
        if ( isset( $_POST['jphenri_project_features'] ) ) {
            update_post_meta( $post_id, '_project_features', sanitize_textarea_field( $_POST['jphenri_project_features'] ) );
        }
    }
}
add_action( 'save_post', 'jphenri_save_meta_box_data' );

/**
 * Create theme options page
 */
function jphenri_theme_options_page() {
    add_theme_page(
        __( 'Theme Options', 'jphenri' ),
        __( 'Theme Options', 'jphenri' ),
        'manage_options',
        'jphenri-theme-options',
        'jphenri_theme_options_page_html'
    );
}
add_action( 'admin_menu', 'jphenri_theme_options_page' );

/**
 * Theme options page HTML
 */
function jphenri_theme_options_page_html() {
    // Check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    
    // Add settings error/update messages
    if ( isset( $_GET['settings-updated'] ) ) {
        add_settings_error( 'jphenri_messages', 'jphenri_message', __( 'Settings Saved', 'jphenri' ), 'updated' );
    }
    
    // Show settings errors/messages
    settings_errors( 'jphenri_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'jphenri_options' );
            do_settings_sections( 'jphenri-theme-options' );
            submit_button( __( 'Save Settings', 'jphenri' ) );
            ?>
        </form>
    </div>
    <?php
}

/**
 * Register theme options settings
 */
function jphenri_register_settings() {
    register_setting( 'jphenri_options', 'jphenri_theme_options' );
    
    add_settings_section(
        'jphenri_section_homepage',
        __( 'Homepage Settings', 'jphenri' ),
        'jphenri_section_homepage_cb',
        'jphenri-theme-options'
    );
    
    add_settings_field(
        'hero_title',
        __( 'Hero Title', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_homepage',
        [
            'label_for' => 'hero_title',
            'class' => 'jphenri_row',
            'default' => __( 'Intelligence Artificielle & Optimisation Numérique', 'jphenri' ),
        ]
    );
    
    add_settings_field(
        'hero_description',
        __( 'Hero Description', 'jphenri' ),
        'jphenri_field_textarea_cb',
        'jphenri-theme-options',
        'jphenri_section_homepage',
        [
            'label_for' => 'hero_description',
            'class' => 'jphenri_row',
            'default' => __( 'Solutions IA avancées pour améliorer votre présence en ligne et optimiser vos stratégies numériques.', 'jphenri' ),
        ]
    );
    
    add_settings_field(
        'cta_button_text',
        __( 'CTA Button Text', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_homepage',
        [
            'label_for' => 'cta_button_text',
            'class' => 'jphenri_row',
            'default' => __( 'Découvrir mes services', 'jphenri' ),
        ]
    );
    
    add_settings_field(
        'cta_button_url',
        __( 'CTA Button URL', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_homepage',
        [
            'label_for' => 'cta_button_url',
            'class' => 'jphenri_row',
            'default' => '/services',
        ]
    );
    
    add_settings_section(
        'jphenri_section_contact',
        __( 'Contact Information', 'jphenri' ),
        'jphenri_section_contact_cb',
        'jphenri-theme-options'
    );
    
    add_settings_field(
        'contact_email',
        __( 'Email Address', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_contact',
        [
            'label_for' => 'contact_email',
            'class' => 'jphenri_row',
            'default' => 'contact@jphenri.com',
        ]
    );
    
    add_settings_field(
        'contact_phone',
        __( 'Phone Number', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_contact',
        [
            'label_for' => 'contact_phone',
            'class' => 'jphenri_row',
            'default' => '',
        ]
    );
    
    add_settings_field(
        'social_linkedin',
        __( 'LinkedIn URL', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_contact',
        [
            'label_for' => 'social_linkedin',
            'class' => 'jphenri_row',
            'default' => '',
        ]
    );
    
    add_settings_field(
        'social_twitter',
        __( 'Twitter URL', 'jphenri' ),
        'jphenri_field_text_cb',
        'jphenri-theme-options',
        'jphenri_section_contact',
        [
            'label_for' => 'social_twitter',
            'class' => 'jphenri_row',
            'default' => '',
        ]
    );
}
add_action( 'admin_init', 'jphenri_register_settings' );

/**
 * Settings section callbacks
 */
function jphenri_section_homepage_cb( $args ) {
    ?>
    <p><?php _e( 'Configure the content displayed on the homepage.', 'jphenri' ); ?></p>
    <?php
}

function jphenri_section_contact_cb( $args ) {
    ?>
    <p><?php _e( 'Enter your contact information and social media links.', 'jphenri' ); ?></p>
    <?php
}

/**
 * Field callbacks
 */
function jphenri_field_text_cb( $args ) {
    $options = get_option( 'jphenri_theme_options' );
    $id = $args['label_for'];
    $value = isset( $options[$id] ) ? $options[$id] : $args['default'];
    ?>
    <input type="text" id="<?php echo esc_attr( $id ); ?>" name="jphenri_theme_options[<?php echo esc_attr( $id ); ?>]" value="<?php echo esc_attr( $value ); ?>" class="regular-text">
    <?php
}

function jphenri_field_textarea_cb( $args ) {
    $options = get_option( 'jphenri_theme_options' );
    $id = $args['label_for'];
    $value = isset( $options[$id] ) ? $options[$id] : $args['default'];
    ?>
    <textarea id="<?php echo esc_attr( $id ); ?>" name="jphenri_theme_options[<?php echo esc_attr( $id ); ?>]" rows="3" class="large-text"><?php echo esc_textarea( $value ); ?></textarea>
    <?php
}

/**
 * Get theme option helper function
 */
function jphenri_get_option( $key, $default = '' ) {
    $options = get_option( 'jphenri_theme_options' );
    return isset( $options[$key] ) ? $options[$key] : $default;
}
