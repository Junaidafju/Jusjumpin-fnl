<?php
/**
 * New Jus Jumpin Theme Functions
 * 
 * @package NewJusJumpin
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function newjusjumpin_setup() {
    // Theme supports
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Image sizes
    add_image_size('activity-card', 400, 300, true);
    add_image_size('hero-bg', 1920, 1080, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'newjusjumpin'),
        'left-nav' => __('Left Navigation', 'newjusjumpin'),
        'right-nav' => __('Right Navigation', 'newjusjumpin'),
        'footer-quick' => __('Footer Quick Links', 'newjusjumpin'),
        'footer-locations' => __('Footer Locations', 'newjusjumpin'),
    ));
}
add_action('after_setup_theme', 'newjusjumpin_setup');

/**
 * Enqueue styles and scripts
 */
function newjusjumpin_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2');
    
    // Theme main stylesheet
    wp_enqueue_style('newjusjumpin-style', get_stylesheet_uri(), array('google-fonts', 'font-awesome'), '1.0.0');
    // Animated background stylesheet (site-wide)
    $bg_path = get_template_directory() . '/assets/css/background.css';
    $bg_ver = file_exists($bg_path) ? filemtime($bg_path) : '1.0.0';
    wp_enqueue_style('newjusjumpin-background', get_template_directory_uri() . '/assets/css/background.css', array('newjusjumpin-style'), $bg_ver);
    
    // Component-specific stylesheets
    wp_enqueue_style('newjusjumpin-header', get_template_directory_uri() . '/assets/css/header.css', array('newjusjumpin-style'), '1.0.0');
    wp_enqueue_style('newjusjumpin-footer', get_template_directory_uri() . '/assets/css/footer.css', array('newjusjumpin-style'), '1.0.0');
    
    // Page-specific stylesheets
    if (is_front_page()) {
        wp_enqueue_style('newjusjumpin-front-page', get_template_directory_uri() . '/assets/css/front-page.css', array('newjusjumpin-style'), '1.0.0');
    }
    
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style('newjusjumpin-contact', get_template_directory_uri() . '/assets/css/contact.css', array('newjusjumpin-style'), '1.0.0');
    }
    
    // Page template stylesheets
    // Important: page-about-us.php is a slug-specific template (page-{slug}.php),
    // which is NOT considered a "custom page template" by is_page_template().
    // So we also detect by slug/title to ensure the CSS loads.
    if (
        (function_exists('is_page_template') && is_page_template('page-about-us.php'))
        || (function_exists('get_page_template_slug') && get_page_template_slug(get_queried_object_id()) === 'page-about-us.php')
        || (function_exists('is_page') && is_page(array('about-us', 'About Us')))
    ) {
        $about_css_path = get_template_directory() . '/assets/css/about-us-page.css';
        $about_css_ver = file_exists($about_css_path) ? filemtime($about_css_path) : '1.0.0';
        wp_enqueue_style('newjusjumpin-about-us', get_template_directory_uri() . '/assets/css/about-us-page.css', array('newjusjumpin-style'), $about_css_ver);
    }
    
    // Birthday Celebrations page CSS
    if (is_page_template('page-birthday-celebrations.php') || is_page('birthday-celebrations') || is_page_template('page-birthday-celebrations')) {
        $birthday_css_path = get_template_directory() . '/assets/css/birthday-celebrations.css';
        $birthday_css_ver = file_exists($birthday_css_path) ? filemtime($birthday_css_path) : '1.0.0';
        wp_enqueue_style('newjusjumpin-birthday-celebrations', get_template_directory_uri() . '/assets/css/birthday-celebrations.css', array('newjusjumpin-style'), $birthday_css_ver);
    }
    
    // Our Activities page CSS
    if (is_page_template('page-our-activities.php') || is_page('our-activities') || is_page_template('page-our-activities')) {
        $activities_css_path = get_template_directory() . '/assets/css/our-activities.css';
        $activities_css_ver = file_exists($activities_css_path) ? filemtime($activities_css_path) : '1.0.0';
        wp_enqueue_style('newjusjumpin-our-activities', get_template_directory_uri() . '/assets/css/our-activities.css', array('newjusjumpin-style'), $activities_css_ver);
    }
    
    // Fallback for both pages using page-templates.css (if needed)
    if ((is_page_template('page-birthday-celebrations.php') || is_page_template('page-our-activities.php')) && !file_exists(get_template_directory() . '/assets/css/birthday-celebrations.css')) {
        wp_enqueue_style('newjusjumpin-page-templates', get_template_directory_uri() . '/assets/css/page-templates.css', array('newjusjumpin-style'), '1.0.0');
    }

    // Blog assets on blog template, single posts, and archives
    if (is_page_template('blog.php') || is_home() || is_single() || is_category() || is_tag()) {
        wp_enqueue_style('newjusjumpin-blog', get_template_directory_uri() . '/assets/css/blog.css', array('newjusjumpin-style'), '1.0.0');
        wp_enqueue_script('newjusjumpin-blog', get_template_directory_uri() . '/assets/js/blog.js', array(), '1.0.0', true);
    }
    
    // Theme JavaScript
    wp_enqueue_script('newjusjumpin-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('newjusjumpin-main', 'newjusjumpin_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('newjusjumpin_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'newjusjumpin_scripts');

/**
 * Force Font Awesome to load after Elementor to prevent conflicts
 */
add_action('wp_enqueue_scripts', function() {
    // Dequeue Elementor's Font Awesome if it's loaded
    wp_dequeue_style('font-awesome');
    wp_deregister_style('font-awesome');
    wp_dequeue_style('elementor-icons-fa');
    wp_deregister_style('elementor-icons-fa');
    wp_dequeue_style('elementor-icons-shared-0');
    wp_deregister_style('elementor-icons-shared-0');
    wp_dequeue_style('elementor-icons-shared-fa');
    wp_deregister_style('elementor-icons-shared-fa');
    wp_dequeue_style('elementor-icons-fa-solid');
    wp_deregister_style('elementor-icons-fa-solid');
    wp_dequeue_style('elementor-icons-fa-brands');
    wp_deregister_style('elementor-icons-fa-brands');
    wp_dequeue_style('elementor-icons-fa-regular');
    wp_deregister_style('elementor-icons-fa-regular');

    // Re-enqueue our specific Font Awesome version at a high priority
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2', 'all');
}, 999); // Run late to override Elementor

/**
 * Simple router for location pages: maps friendly URLs to template-part PHP files
 */
add_action('template_redirect', function() {
    if (is_admin() || is_feed()) {
        return;
    }
    $request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    // Expect pattern: {state}/{slug}
    $parts = explode('/', $request_uri);
    if (count($parts) >= 2) {
        $slug = end($parts); // location slug
        $template_path = get_template_directory() . '/template-part/' . sanitize_file_name($slug) . '.php';
        if (file_exists($template_path)) {
            // Ensure trailing slash for canonical consistency
            $expected = home_url('/' . trim(implode('/', $parts), '/') . '/');
            if (trailingslashit(home_url(add_query_arg(array(), $request_uri))) !== $expected && empty($_GET)) {
                wp_safe_redirect($expected, 301);
                exit;
            }
            
            // Set the page title based on the location
            // First, try to get title from the template file if it defines a $title variable
            $page_title = '';
            $template_content = file_get_contents($template_path);
            
            // Check if the template defines a $title variable
            if (preg_match('/\\\$title\s*=\s*["\']([^"\']+)["\']/', $template_content, $matches)) {
                $page_title = $matches[1];
            } else {
                // Fallback to location-based titles
                $location_titles = array(
                    'kolkata-abc-square-building' => 'Kolkata - ABC Square Building | Jus Jumpin',
                    'bengaluru-m5-ecity-mall' => 'Bengaluru - M5 ECity Mall | Jus Jumpin',
                    'kolkata-avani-mall' => 'Kolkata - Avani Mall | Jus Jumpin',
                    'kolkata-axis-mall' => 'Kolkata - Axis Mall | Jus Jumpin',
                    'kolkata-city-centre-2' => 'Kolkata - City Centre 2 | Jus Jumpin',
                    'bengaluru-meenakshi-mall' => 'Bengaluru - Meenakshi Mall | Jus Jumpin',
                    'dhanbad-prabhatam-mall' => 'Dhanbad - Prabhatam Mall | Jus Jumpin',
                    'durgapur-junction-mall' => 'Durgapur - Junction Mall | Jus Jumpin',
                    'nashik-city-centre' => 'Nashik - City Centre | Jus Jumpin',
                    'jamshedpur-pm-mall' => 'Jamshedpur - PM Mall | Jus Jumpin',
                    'kolkata-avani-mall' => 'Kolkata - Avani Mall | Jus Jumpin',
                    'kolkata-axis-mall' => 'Kolkata - Axis Mall | Jus Jumpin',
                    'kolkata-city-centre-2' => 'Kolkata - City Centre 2 | Jus Jumpin',
                    'nagpur-vr-mall' => 'Nagpur - VR Mall | Jus Jumpin',
                    'noida-gip-mall' => 'Noida - GIP Mall | Jus Jumpin',
                    'noida-spectrum-mall' => 'Noida - Spectrum Mall | Jus Jumpin',
                    'pune-seasons-mall' => 'Pune - Seasons Mall | Jus Jumpin',
                    'raipur-zora-mall' => 'Raipur - Zora Mall | Jus Jumpin',
                    'ranchi-nucleus-mall' => 'Ranchi - Nucleus Mall | Jus Jumpin',
                    'siliguri-city-centre' => 'Siliguri - City Centre | Jus Jumpin',
                    'surat-vr-mall' => 'Surat - VR Mall | Jus Jumpin',
                    'udaipur-urban-square-mall' => 'Udaipur - Urban Square Mall | Jus Jumpin',
                    // Add more location titles as needed
                );
                
                $page_title = isset($location_titles[$slug]) ? $location_titles[$slug] : 'Jus Jumpin Location | Best Trampoline Park in India';
            }
            
            // Add title filter
            add_filter('pre_get_document_title', function() use ($page_title) {
                return $page_title;
            });
            
            // Enqueue location page specific styles and scripts
            add_action('wp_enqueue_scripts', function() {
                $location_css_path = get_template_directory() . '/assets/css/location-page.css';
                if (file_exists($location_css_path)) {
                    $location_css_ver = filemtime($location_css_path);
                    wp_enqueue_style('newjusjumpin-location-page', get_template_directory_uri() . '/assets/css/location-page.css', array('newjusjumpin-style'), $location_css_ver);
                }
                
                $location_js_path = get_template_directory() . '/assets/js/location-page.js';
                if (file_exists($location_js_path)) {
                    $location_js_ver = filemtime($location_js_path);
                    wp_enqueue_script('newjusjumpin-location-page', get_template_directory_uri() . '/assets/js/location-page.js', array(), $location_js_ver, true);
                }
            });
            
            status_header(200);
            include get_template_directory() . '/header.php';
            include $template_path;
            include get_template_directory() . '/footer.php';
            exit;
        }
    }
});

/**
 * Theme activation - Create pages and set up menus
 */
function newjusjumpin_activation_setup() {
    // Create pages
    $pages = array(
        'Home' => array(
            'content' => '',
            'template' => 'front-page',
            'is_front' => true
        ),
        'About Us' => array(
            'content' => '',
            'template' => 'page-about-us'
        ),
        'Birthday Celebrations' => array(
            'content' => '',
            'template' => 'page-birthday-celebrations'
        ),
        'Our Activities' => array(
            'content' => '',
            'template' => 'page-our-activities'
        ),
        'Blogs' => array(
            'content' => '<h2>Latest News & Updates</h2><p>Stay updated with the latest news, events, and health tips from Jus Jumpin.</p>',
            'template' => 'page',
            'is_blog' => true
        ),
        'Contact Us' => array(
            'content' => '',
            'template' => 'page-contact'
        ),
        'Menu1' => array(
            'content' => '<h2>Menu Item 1</h2><p>This is a placeholder page for Menu Item 1. Content will be added later.</p>',
            'template' => 'page'
        ),
        'Menu2' => array(
            'content' => '<h2>Menu Item 2</h2><p>This is a placeholder page for Menu Item 2. Content will be added later.</p>',
            'template' => 'page'
        ),
        'Menu3' => array(
            'content' => '<h2>Menu Item 3</h2><p>This is a placeholder page for Menu Item 3. Content will be added later.</p>',
            'template' => 'page'
        ),
        'Menu4' => array(
            'content' => '<h2>Menu Item 4</h2><p>This is a placeholder page for Menu Item 4. Content will be added later.</p>',
            'template' => 'page'
        ),
        'Menu5' => array(
            'content' => '<h2>Menu Item 5</h2><p>This is a placeholder page for Menu Item 5. Content will be added later.</p>',
            'template' => 'page'
        ),
        'Menu6' => array(
            'content' => '<h2>Menu Item 6</h2><p>This is a placeholder page for Menu Item 6. Content will be added later.</p>',
            'template' => 'page'
        ),
    );
    
    $created_pages = array();
    
    foreach ($pages as $title => $page_data) {
        $page_check = get_page_by_title($title);
        if (!$page_check) {
            $page_id = wp_insert_post(array(
                'post_title' => $title,
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_name' => sanitize_title($title)
            ));
            
            $created_pages[$title] = $page_id;
            
            // Set front page
            if (isset($page_data['is_front']) && $page_data['is_front']) {
                update_option('show_on_front', 'page');
                update_option('page_on_front', $page_id);
            }
            
            // Set blog page
            if (isset($page_data['is_blog']) && $page_data['is_blog']) {
                update_option('page_for_posts', $page_id);
            }
        } else {
            $created_pages[$title] = $page_check->ID;
        }
    }
    
    // Removed auto-creation of individual state location pages
    
    // Set up menus
    newjusjumpin_setup_menus($created_pages);
    
    // Set up mega menu with location structure
    newjusjumpin_setup_mega_menu();
}

/**
 * Set up navigation menus
 */
function newjusjumpin_setup_menus($pages) {
    // Create Left Navigation Menu
    $left_menu = wp_create_nav_menu('Left Navigation');
    if (!is_wp_error($left_menu)) {
        wp_update_nav_menu_item($left_menu, 0, array(
            'menu-item-title' => 'Home',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $pages['Home'],
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($left_menu, 0, array(
            'menu-item-title' => 'About Us',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $pages['About Us'],
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($left_menu, 0, array(
            'menu-item-title' => 'Birthday Celebrations',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $pages['Birthday Celebrations'],
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));
        
        // Assign to menu location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['left-nav'] = $left_menu;
        set_theme_mod('nav_menu_locations', $locations);
    }
    
    // Create Right Navigation Menu
    $right_menu = wp_create_nav_menu('Right Navigation');
    if (!is_wp_error($right_menu)) {
        // Our Location (single item, no submenu)
        wp_update_nav_menu_item($right_menu, 0, array(
            'menu-item-title' => 'Our Location',
            'menu-item-url' => home_url('/our-location'),
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        ));
        
        wp_update_nav_menu_item($right_menu, 0, array(
            'menu-item-title' => 'Our Activities',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $pages['Our Activities'],
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($right_menu, 0, array(
            'menu-item-title' => 'Blogs',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $pages['Blogs'],
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));
        wp_update_nav_menu_item($right_menu, 0, array(
            'menu-item-title' => 'Contact Us',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $pages['Contact Us'],
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));
        
        // Assign to menu location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['right-nav'] = $right_menu;
        set_theme_mod('nav_menu_locations', $locations);
    }
    
    // Create Footer Quick Links Menu
    $footer_menu = wp_create_nav_menu('Footer Quick Links');
    if (!is_wp_error($footer_menu)) {
        $menu_items = array('Home', 'Menu1', 'Menu2', 'Menu3', 'Menu4', 'Menu5', 'Menu6');
        foreach ($menu_items as $item) {
            if (isset($pages[$item])) {
                wp_update_nav_menu_item($footer_menu, 0, array(
                    'menu-item-title' => $item,
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $pages[$item],
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish'
                ));
            }
        }
        
        // Assign to menu location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['footer-quick'] = $footer_menu;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

/**
 * Set up mega menu location structure
 */
function newjusjumpin_setup_mega_menu() {
    // Define the location structure - 2 levels: State -> Venues
    $locations = array(
        'West Bengal' => array(
            'Kolkata - ABC Square Building' => '/west-bengal/kolkata-abc-square-building/',
            'Kolkata - Avani Mall' => '/west-bengal/kolkata-avani-mall/',
            'Kolkata - Axis Mall' => '/west-bengal/kolkata-axis-mall/',
            'Kolkata - City Centre 2' => '/west-bengal/kolkata-city-centre-2/',
            'Siliguri - City Centre' => '/west-bengal/siliguri-city-centre/',
            'Durgapur - Junction Mall' => '/west-bengal/durgapur-junction-mall/'
        ),
        'Karnataka' => array(
            'Bengaluru - M5 Ecity Mall' => '/karnataka/bengaluru-m5-ecity-mall/',
            'Bengaluru - Meenakshi Mall' => '/karnataka/bengaluru-meenakshi-mall/'
        ),
        'Jharkhand' => array(
            'Dhanbad - Prabhatam Mall' => '/jharkhand/dhanbad-prabhatam-mall/',
            'Jamshedpur - P&M Mall' => '/jharkhand/jamshedpur-pm-mall/',
            'Ranchi - Nucleus Mall' => '/jharkhand/ranchi-nucleus-mall/'
        ),
        'Uttar Pradesh' => array(
            'Noida - GIP Mall' => '/uttar-pradesh/noida-gip-mall/',
            'Noida - Spectrum Mall' => '/uttar-pradesh/noida-spectrum-mall/',
            
        ),
        'Maharashtra' => array(
            'Nagpur - VR Mall' => '/maharashtra/nagpur-vr-mall/',
            'Pune - Seasons Mall' => '/maharashtra/pune-seasons-mall/',
            'Nashik - City Centre' => '/maharashtra/nashik-city-centre/'
        ),
        'Chhattisgarh' => array(
            'Raipur - Zora Mall' => '/chhattisgarh/raipur-zora-mall/'
        ),
        'Rajasthan' => array(
            'Udaipur - Urban Square Mall' => '/rajasthan/udaipur-urban-square-mall/'
        ),
        'Gujarat' => array(
            'Surat - VR Mall' => '/gujarat/surat-vr-mall/'
        )
    );
    
    // Do NOT auto-create pages. Only build the menu structure using custom links
    newjusjumpin_setup_location_mega_menu($locations, array());
    
    return array();
}

/**
 * Set up the location mega menu in WordPress admin
 */
function newjusjumpin_setup_location_mega_menu($locations, $created_pages) {
    // Always rebuild the Right Navigation menu from scratch to avoid legacy page links
    $menu_name = 'Right Navigation';
    $menu = wp_get_nav_menu_object($menu_name);
    if ($menu) {
        wp_delete_nav_menu($menu->term_id);
    }
    $menu_id = wp_create_nav_menu($menu_name);
    
    if (!is_wp_error($menu_id)) {
        // Add the main "Our Location" item
        $our_location_id = wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Our Location',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        ));
        
        // Add states and venues in proper order
        $menu_order = 1;
        foreach ($locations as $state => $venues) {
            $state_id = wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $state,
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish',
                'menu-item-parent-id' => $our_location_id,
                'menu-item-position' => $menu_order++
            ));
            
            // Add venues directly under this specific state
            $venue_order = 1;
            foreach ($venues as $venue_name => $venue_url) {
                // Use custom links pointing to SEO-friendly URLs handled by router
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $venue_name,
                    'menu-item-url' => home_url( trailingslashit( trim($venue_url, '/') ) ),
                    'menu-item-type' => 'custom',
                    'menu-item-status' => 'publish',
                    'menu-item-parent-id' => $state_id,
                    'menu-item-position' => $venue_order++
                ));
            }
        }
        
        // Re-add other right navigation items (Our Activities, Blogs, Contact Us) as pages if present
        $other_pages = array('Our Activities', 'Blogs', 'Contact Us');
        foreach ($other_pages as $page_title) {
            $page = get_page_by_title($page_title);
            if ($page) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $page_title,
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $page->ID,
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish'
                ));
            }
        }
        
        // Assign menu to location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['right-nav'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

/**
 * Theme activation hook
 */
add_action('after_switch_theme', 'newjusjumpin_activation_setup');

/**
 * Custom walker for mobile menu with proper hierarchy and touch-friendly functionality
 */
class NewJusJumpin_Mobile_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"mobile-submenu\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Add helper classes based on depth and if it has children
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($has_children) {
            $classes[] = 'has-submenu';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id_attr = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id_attr = $id_attr ? ' id="' . esc_attr($id_attr) . '"' : '';

        $attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target ) . '"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn ) . '"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url ) . '"' : '';

        $output .= $indent . '<li' . $id_attr . $class_names . '>';

        if ($has_children) {
            // Parent item with submenu - create toggle button
            $item_output = '<button class="mobile-nav-toggle" type="button" aria-expanded="false">';
            $item_output .= '<span class="menu-text">' . apply_filters('the_title', $item->title, $item->ID) . '</span>';
            $item_output .= '<i class="fas fa-chevron-down mobile-nav-chevron" aria-hidden="true"></i>';
            $item_output .= '</button>';
        } else {
            // Regular menu item - create link
            $item_output = '<a class="mobile-menu-link"' . $attributes . '>';
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
            $item_output .= '</a>';
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}

/**
 * Custom walker for mega menu dropdown with correct 2-level structure
 */
class NewJusJumpin_Mega_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        
        // Different classes for different levels
        if ($depth === 0) {
            $submenu_class = 'dropdown';
        } elseif ($depth === 1) {
            $submenu_class = 'submenu';
        } else {
            $submenu_class = 'sub-menu';
        }
        
        $output .= "\n$indent<div class=\"$submenu_class\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</div>\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Add helper classes based on depth and if it has children
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth === 0 && $has_children) {
            $classes[] = 'dropdown-parent';
        } elseif ($depth === 1 && $has_children) {
            $classes[] = 'has-submenu';
        } elseif ($depth === 2) {
            $classes[] = 'venue-item';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id_attr = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id_attr = $id_attr ? ' id="' . esc_attr($id_attr) . '"' : '';

        $attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target ) . '"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn ) . '"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url ) . '"' : '';

        if ($depth === 0) {
            // Top level - use <li> element
            $output .= $indent . '<li' . $id_attr . $class_names . '>';
            $item_output  = isset($args->before) ? ($args->before ?? '') : '';
            $item_output .= '<a class="nav-link"' . $attributes . '>';
            $item_output .= (isset($args->link_before) ? ($args->link_before ?? '') : '')
                . apply_filters('the_title', $item->title, $item->ID)
                . (isset($args->link_after) ? ($args->link_after ?? '') : '');
            $item_output .= '</a>';
            $item_output .= isset($args->after) ? ($args->after ?? '') : '';
        } else {
            // Submenu items - structure them properly
            if ($depth === 1) {
                // State items (first level of dropdown)
                $css_class = $has_children ? 'dropdown-item has-submenu' : 'dropdown-item';
                $item_output = $indent . '<a class="' . $css_class . '"' . $attributes . '>';
                $item_output .= (isset($args->link_before) ? ($args->link_before ?? '') : '')
                    . apply_filters('the_title', $item->title, $item->ID)
                    . (isset($args->link_after) ? ($args->link_after ?? '') : '');
                
                // Add dropdown arrow for items with submenus
                if ($has_children) {
                    $item_output .= ' <i class="fas fa-chevron-right dropdown-arrow"></i>';
                }
                
                $item_output .= '</a>';
            } else {
                // Venue items (second level of dropdown)
                $item_output = $indent . '<a class="venue-link"' . $attributes . '>';
                $item_output .= (isset($args->link_before) ? ($args->link_before ?? '') : '')
                    . apply_filters('the_title', $item->title, $item->ID)
                    . (isset($args->link_after) ? ($args->link_after ?? '') : '');
                $item_output .= '</a>';
            }
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ($depth === 0) {
            $output .= "</li>\n";
        }
        // For depth > 0, we don't close anything as we're using direct <a> elements
    }
}

/**
 * Contact form handler
 */
function newjusjumpin_handle_contact_form() {
    if (isset($_POST['newjusjumpin_contact_nonce']) && wp_verify_nonce($_POST['newjusjumpin_contact_nonce'], 'newjusjumpin_contact')) {
        $name = sanitize_text_field($_POST['contact_name']);
        $email = sanitize_email($_POST['contact_email']);
        $phone = sanitize_text_field($_POST['contact_phone']);
        $message = sanitize_textarea_field($_POST['contact_message']);
        
        // Send email (customize as needed)
        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission from ' . get_bloginfo('name');
        $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8');
        
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
        } else {
            wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        }
        exit;
    }
}
add_action('admin_post_nopriv_contact_form', 'newjusjumpin_handle_contact_form');
add_action('admin_post_contact_form', 'newjusjumpin_handle_contact_form');

/**
 * Custom excerpt length
 */
function newjusjumpin_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'newjusjumpin_excerpt_length');

/**
 * Custom excerpt more
 */
function newjusjumpin_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'newjusjumpin_excerpt_more');

/**
 * Add body classes
 */
function newjusjumpin_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'newjusjumpin_body_classes');

/**
 * Disable WordPress admin bar for non-admins
 */
function newjusjumpin_disable_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'newjusjumpin_disable_admin_bar');

/**
 * Admin action to manually setup mega menu
 */
function newjusjumpin_admin_setup_mega_menu() {
    if (current_user_can('administrator') && isset($_GET['setup_mega_menu']) && $_GET['setup_mega_menu'] === 'true') {
        // Clear existing menu first
        $menu = wp_get_nav_menu_object('Right Navigation');
        if ($menu) {
            wp_delete_nav_menu($menu->term_id);
        }
        
        // Create fresh menu
        newjusjumpin_setup_mega_menu();
        
        wp_redirect(admin_url('themes.php?mega_menu_setup=success'));
        exit;
    }
    
    // Show success message
    if (isset($_GET['mega_menu_setup']) && $_GET['mega_menu_setup'] === 'success') {
        add_action('admin_notices', function() {
            echo '<div class="notice notice-success is-dismissible"><p>Mega menu has been set up successfully! Check your navigation.</p></div>';
        });
    }
    
    // Add admin notice for manual rebuild if needed
    if (is_admin() && current_user_can('administrator')) {
        add_action('admin_notices', function() {
            $current_screen = get_current_screen();
            if ($current_screen && $current_screen->id === 'nav-menus') {
                echo '<div class="notice notice-info"><p>';
                echo 'If the mega menu venues are not showing correctly under their states, ';
                echo '<a href="' . admin_url('themes.php?setup_mega_menu=true') . '" class="button button-secondary">Rebuild Mega Menu</a>';
                echo '</p></div>';
            }
        });
    }
}
add_action('admin_init', 'newjusjumpin_admin_setup_mega_menu');

/**
 * Add admin menu for theme options
 */
function newjusjumpin_admin_menu() {
    add_theme_page(
        'Jus Jumpin Settings',
        'Jus Jumpin Settings',
        'manage_options',
        'newjusjumpin-settings',
        'newjusjumpin_settings_page'
    );
}
add_action('admin_menu', 'newjusjumpin_admin_menu');

/**
 * Theme settings page
 */
function newjusjumpin_settings_page() {
    ?>
    <div class="wrap">
        <h1>Jus Jumpin Theme Settings</h1>
        <div class="card">
            <h2>Mega Menu Setup</h2>
            <p>Click the button below to set up or refresh the mega menu with all location pages.</p>
            <p>This will create pages for all Jus Jumpin locations and set up the mega menu structure.</p>
            <a href="<?php echo admin_url('themes.php?setup_mega_menu=true'); ?>" class="button button-primary">Setup Mega Menu</a>
        </div>
    </div>
    <?php
}

/**
 * Add setup link to theme actions
 */
function newjusjumpin_theme_action_links($actions, $theme) {
    if ($theme->get_stylesheet() === get_stylesheet()) {
        $setup_link = '<a href="' . admin_url('themes.php?page=newjusjumpin-settings') . '">Setup</a>';
        $actions[] = $setup_link;
    }
    return $actions;
}
add_filter('theme_action_links', 'newjusjumpin_theme_action_links', 10, 2);

/**
 * Featured Post Meta Box
 */
function jj_add_featured_metabox() {
    add_meta_box('jj_featured_post', 'Featured Post', 'jj_featured_metabox_cb', 'post', 'side', 'high');
}
add_action('add_meta_boxes', 'jj_add_featured_metabox');

function jj_featured_metabox_cb($post) {
    $val = get_post_meta($post->ID, 'featured_post', true);
    wp_nonce_field('jj_featured_post', 'jj_featured_post_nonce');
    echo '<label><input type="checkbox" name="jj_featured_post" value="1" ' . checked($val, '1', false) . '> Feature this post</label>';
}

function jj_save_featured_metabox($post_id) {
    if (!isset($_POST['jj_featured_post_nonce']) || !wp_verify_nonce($_POST['jj_featured_post_nonce'], 'jj_featured_post')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    $is_featured = isset($_POST['jj_featured_post']) ? '1' : '0';
    update_post_meta($post_id, 'featured_post', $is_featured);
}
add_action('save_post', 'jj_save_featured_metabox');

/**
 * Dynamic SEO meta tags for all pages, prioritizing template variables
 */
function newjusjumpin_seo_meta() {
    global $post, $description, $keywords; // Access custom variables from template parts

    $current_description = '';
    $current_keywords = '';
    $current_title = wp_get_document_title();
    $current_url = (is_singular() || is_page()) ? get_permalink($post) : home_url('/');
    $og_type = (is_single() || is_page()) ? 'article' : 'website';

    // Prioritize template-defined $description
    if (isset($description) && !empty($description)) {
        $current_description = wp_strip_all_tags($description);
    } elseif ($post && !empty($post->post_excerpt)) { // Fallback to post/page excerpt
        $current_description = wp_strip_all_tags($post->post_excerpt);
    } elseif ($post && !empty($post->post_content)) { // Fallback to content snippet
        $current_description = wp_strip_all_tags(wp_trim_words($post->post_content, 30));
    } else { // General site description as last resort
        $current_description = get_bloginfo('description');
    }

    // Prioritize template-defined $keywords
    if (isset($keywords) && !empty($keywords)) {
        $current_keywords = wp_strip_all_tags($keywords);
    } elseif (is_singular('post')) { // Fallback for posts using tags
        $post_tags = get_the_tags($post->ID);
        if ($post_tags && !is_wp_error($post_tags)) {
            $current_keywords = implode(', ', wp_list_pluck($post_tags, 'name'));
        }
    } else { // Default general keywords
        $current_keywords = 'jus jumpin, trampoline park, kids activities, entertainment, india';
    }

    // Ensure description and keywords are trimmed to reasonable lengths for SEO
    $current_description = wp_trim_words($current_description, 25, '...');
    $current_keywords = wp_trim_words($current_keywords, 20, '...');


    echo "\n<meta name=\"description\" content=\"" . esc_attr($current_description) . "\">\n";
    echo "<meta name=\"keywords\" content=\"" . esc_attr($current_keywords) . "\">\n";
    echo "<meta property=\"og:title\" content=\"" . esc_attr($current_title) . "\">\n";
    echo "<meta property=\"og:description\" content=\"" . esc_attr($current_description) . "\">\n";
    echo "<meta property=\"og:url\" content=\"" . esc_url($current_url) . "\">\n";
    echo "<meta property=\"og:type\" content=\"" . esc_attr($og_type) . "\">\n";
    echo "<meta property=\"og:site_name\" content=\"" . esc_attr(get_bloginfo('name')) . "\">\n";
    // Consider adding og:image if there's a reliable way to get a featured image or default
}
add_action('wp_head', 'newjusjumpin_seo_meta', 1); // Run early to ensure meta tags are high in head

/**
 * Use our custom blog template for the Posts Page (/blogs) as well
 */
add_filter('template_include', function($template) {
    if (is_home()) {
        $custom = locate_template('blog.php');
        if ($custom) {
            return $custom;
        }
    }
    return $template;
}, 20);
