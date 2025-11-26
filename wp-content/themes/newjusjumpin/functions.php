<?php
/**
 * New Jus Jumpin Theme Functions
 * 
 * @package NewJusJumpin
 * @version 1.0.4
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
 * Custom Meta Titles for Pages
 */
function newjusjumpin_custom_meta_titles($title) {
    // Get the current page slug
    $page_slug = basename(get_permalink());
    
    // For home page, WordPress uses 'home' or 'front-page' depending on settings
    if (is_front_page() || is_home()) {
        return 'Discover the Best Trampoline Park at Jus Jumpin';
    }
    
    // Define custom titles for specific pages
    $custom_titles = array(
        'home' => 'Discover the Best Trampoline Park at Jus Jumpin',
        'about' => 'About Jus Jumpin – India\'s Leading Indoor Trampoline Park',
        'our-location' => 'Jus Jumpin Locations – Find a Kids Play Zone Near You',
        'our-activities' => 'Activities at Jus Jumpin | Indoor Fun & Play Zones for Kids',
        'birthday-celebration' => 'Birthday Celebration at Jus Jumpin | Best Kids Birthday Party Venue',
        'contact' => 'Contact Jus Jumpin – India\'s Premier Kids Play Zone',
        'blog' => 'Blog - JUSJUMPIN | Latest News & Updates',
        // Location pages
        'kolkata-abc-square-building-best-adult-trampoline-park' => 'Best Adult Trampoline Park at ABC Square Building Kolkata | Jus Jumpin',
        'kolkata-avani-mall' => 'Best Adult Trampoline Park at Avani Mall Kolkata | Jus Jumpin',
        'kolkata-axis-mall' => 'Best Children\'s Birthday Party in Axis Mall Kolkata | Jus Jumpin',
        'kolkata-city-centre-2' => 'Kid\'s Play Zone in City Centre 2 Kolkata - Jus Jumpin Fun',
        'siliguri-city-centre' => 'Kids Playzone at Siliguri City Centre Mall - Jus Jumpin',
        'durgapur-junction-mall' => 'Trampoline Park At Durgapur Junction Mall – Jus Jumpin',
        'bengaluru-m5-ecity-mall' => 'Kids Playzone Bengaluru M5 Ecity Mall - Jus Jumpin',
        'bengaluru-meenakshi-mall' => 'Kids Playzone Bengaluru Meenakshi Mall - Jus Jumpin',
        'dhanbad-prabhatam-mall' => 'Adult Trampoline Park in Prabhatam Mall Dhanbad - Jus Jumpin',
        'jamshedpur-pm-mall' => 'Kids Play Area in Jamshedpur P&M Mall - Jus Jumpin',
        'ranchi-nucleus-mall' => 'Best Kids Playzone at Nucleus Mall Ranchi - Jus Jumpin',
        'noida-gip-mall' => 'Trampoline Park in GIP Mall Noida - Jus Jumpin',
        'noida-spectrum-mall' => 'Best Trampoline Park and Kids Playzone in Noida Spectrum Mall | Jus Jumpin',
        'nagpur-vr-mall' => 'Children\'s Birthday Parties in Nagpur\'s VR Mall - Jus Jumpin',
        'pune-season-mall' => 'Adult Trampoline Park at Pune\'s Season Mall - Jus Jumpin',
        'raipur-zora-mall' => 'Vibrant Trampoline Park and Gaming Zone In Raipur Zora Mall | Jus Jumpin',
        'udiapur-urban-square-mall' => 'Kids Birthday Party Venue in Udaipur\'s Urban Square Mall - Jus Jumpin',
        'surat-vr-mall' => 'Best Kids Play Area in Surat VR mall - Jus Jumpin'
    );
    
    // If we have a custom title for this page, use it
    if (isset($custom_titles[$page_slug])) {
        return $custom_titles[$page_slug];
    }
    
    // For location pages that follow a pattern, create dynamic titles
    if (strpos($page_slug, '-kids-playzone-') !== false || strpos($page_slug, '-trampoline-park-') !== false) {
        // Convert slug to readable format
        $location_name = str_replace('-', ' ', $page_slug);
        $location_name = ucwords(str_replace(array('kids playzone', 'trampoline park'), array('Kids Playzone', 'Trampoline Park'), $location_name));
        return $location_name . ' | Jus Jumpin';
    }
    
    // Return default title if no custom title is found
    return $title;
}
add_filter('pre_get_document_title', 'newjusjumpin_custom_meta_titles');

/**
 * Custom Meta Descriptions for Pages
 */
function newjusjumpin_custom_meta_descriptions() {
    // Handle Home Page
    if (is_front_page() || is_home()) {
        echo '<meta name="description" content="Experience gravity-defying fun at jus jumpin! Trampoline parks, foam pits, dodgeball & birthday parties for kids, teens & adults. Safe, high-energy adventures await!" />' . "\n";
        return;
    }

    // Get correct slug of current page
    // Use different methods to get the slug for better compatibility
    $page_slug = '';
    if (is_page() || is_single()) {
        $page_slug = get_post_field('post_name', get_post());
    } else {
        $page_slug = basename(get_permalink());
    }
    
    // Test output to see if function is being called
    error_log("Custom meta description function called. Page slug: " . $page_slug);
    
    // For blog posts, we might want to handle differently
    if (is_single() && get_post_type() === 'post') {
        // Use the post excerpt or a default description for blog posts
        $excerpt = get_the_excerpt();
        if (!empty($excerpt)) {
            echo '<meta name="description" content="' . esc_attr(wp_trim_words($excerpt, 30, '...')) . '" />' . "\n";
        } else {
            echo '<meta name="description" content="Stay updated with the latest news and updates from Jus Jumpin - India\'s premier indoor trampoline park." />' . "\n";
        }
        return;
    }

    // Custom meta descriptions
    $custom_descriptions = array(
        'about' => 'Jus Jumpin is India\'s top indoor trampoline and play park brand offering safe, fun-filled zones for kids, families, and birthdays across multiple cities.',
        'our-location' => 'Explore all Jus Jumpin locations across India! Find your nearest indoor trampoline park & kids play zone for birthdays, playdates & family fun.',
        'blog' => 'Stay updated with the latest news and updates from Jus Jumpin - India\'s premier indoor trampoline park.',

        // Location pages
        'kolkata-abc-square-building-best-adult-trampoline-park' => 'Experience high-energy fun at Kolkata\'s best adult trampoline park at ABC Square Building Kolkata. Best for birthday parties and kitty parties in ABC Square Building.',
        'kolkata-avani-mall' => 'Celebrate your children\'s birthday at Avani Mall Kolkata. Featuring a soft play area and indoor sports layout for non-stop fun.',
        'kolkata-axis-mall' => 'Plan the ultimate kids\' birthday parties at Axis Mall Kolkata. Visit our adventure park and birthday party center for unforgettable memories!',
        'kolkata-city-centre-2' => 'Book birthday party places in City Centre 2 Kolkata with kids\' indoor play area setup. Kids Playzone fun & hassle-free party arrangements!',
        'siliguri-city-centre' => 'Celebrate kids\' birthdays at City Centre Siliguri\'s Kids Playzone with full indoor play setup & exciting adventure park experience.',
        'durgapur-junction-mall' => 'The best children\'s birthday party place in Durgapur Junction Mall—fun trampoline park & safe indoor play area setup for all ages.',
        'bengaluru-m5-ecity-mall' => 'Visit Kids Playzone at M5 Ecity Mall Bengaluru—top indoor play area & adventure park, perfect for fun-filled kids\' birthday party celebrations.',
        'bengaluru-meenakshi-mall' => 'Explore Kids Playzone Bengaluru Meenakshi Mall – the ultimate indoor play area & party venue for kids\' birthdays in Bengaluru Meenakshi Mall.',
        'dhanbad-prabhatam-mall' => 'Explore Adult Trampoline Park in Prabhatam Mall Dhanbad – combined with Kids Playzone & indoor play area, adventure park for family fun & kids\' play.',
        'jamshedpur-pm-mall' => 'Jamshedpur P&M Mall offers a fantastic indoor play area setup, a top adventure park, and the best birthday party venues.',
        'ranchi-nucleus-mall' => 'Make birthdays special at Ranchi Nucleus Mall – indoor play area & the best adventure park venue for kids. Best Kids Playzone at Nucleus Mall Ranchi.',
        'noida-gip-mall' => 'Explore the trampoline park in GIP Mall Noida – indoor play area setup & kids\' party venues for birthdays, family fun & safe play.',
        'noida-spectrum-mall' => 'Find the ultimate destination for fun at Jus Jumpin Noida Spectrum Mall. Jump into our vibrant trampoline park for lots of high-energy activities for Adults & Kids.',
        'nagpur-vr-mall' => 'Plan your children\'s birthday parties at VR Mall, Nagpur. Our indoor play area setup and adventure park at VR Mall Nagpur promise a memorable celebration.',
        'pune-season-mall' => 'The Adult Trampoline Park at Pune\'s Season Mall – with kids\' indoor play area at Season\'s Mall, best birthday party spots & corporate event venues at Season\'s Mall Pune.',
        'raipur-zora-mall' => 'Hop into the best trampoline park and gaming zone for adults and kids in Raipur Zora Mall. Experience our exciting bowling alley and Kids\' adventure park.',
        'udiapur-urban-square-mall' => 'Celebrate your kid\'s birthday at Urban Square Mall, Udaipur. Urban Square Mall Udaipaur is a great place for kid\'s adventure park & kid\'s indoor play area.',
        'surat-vr-mall' => 'Find the best birthday party venue in Surat VR Mall – kids\' play area in Surat VR Mall, adventure park & indoor play area in Surat VR mall fun for children.',

        'our-activities' => 'Discover exciting activities at Jus Jumpin – trampolines, foam pits, soft play zones & more across India. Safe, clean fun for kids of all ages!',
        'birthday-celebration' => 'Celebrate your kid\'s birthday at Jus Jumpin – India\'s favorite indoor play zone. Trampolines, foam pits & party fun at locations nationwide!',
        'contact' => 'Reach out to Jus Jumpin for inquiries, bookings, partnerships, or support. ! Call us at 9800005721 or 9830359999 today! Friendly help awaits.'
    );

    // Output description if slug matches
    if (isset($custom_descriptions[$page_slug])) {
        error_log("Found custom description for slug: " . $page_slug);
        echo '<meta name="description" content="' . esc_attr($custom_descriptions[$page_slug]) . '" />' . "\n";
    } else {
        // For any other pages, use a default description
        error_log("Using default description for slug: " . $page_slug);
        echo '<meta name="description" content="Experience the ultimate indoor trampoline and play park experience at Jus Jumpin - India\'s premier destination for family fun." />' . "\n";
    }
    
    // Signal that we've output our meta descriptions
    do_action('newjusjumpin_custom_meta_descriptions_done');
}
/**
 * Hook for custom meta descriptions
 */
add_action('wp_head', 'newjusjumpin_custom_meta_descriptions', 5);

/**
 * Add Google Site Verification and other meta tags
 */
function newjusjumpin_add_meta_tags() {
    // Google Site Verification - only output if not already output
    if (!did_action('newjusjumpin_site_verification_done')) {
        echo '<meta name="google-site-verification" content="QKqaMCa9aZeg143tzKjKhMldwtGgzlfLey0KqMKGWJs" />' . "\n";
        do_action('newjusjumpin_site_verification_done');
    }
}
add_action('wp_head', 'newjusjumpin_add_meta_tags', 1);

/**
 * Enqueue styles and scripts
 */
function newjusjumpin_enqueue_styles_scripts() {
    wp_enqueue_style('newjusjumpin-style', get_stylesheet_uri());
    wp_enqueue_script('newjusjumpin-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'newjusjumpin_enqueue_styles_scripts');

/**
 * Enqueue styles and scripts
 */
function newjusjumpin_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2');
    
    // Theme main stylesheet
    wp_enqueue_style('newjusjumpin-style', get_stylesheet_uri(), array('google-fonts', 'font-awesome'), '1.0.4');
    // Animated background stylesheet (site-wide)
    $bg_path = get_template_directory() . '/assets/css/background.css';
    $bg_ver = file_exists($bg_path) ? filemtime($bg_path) : '1.0.4';
    wp_enqueue_style('newjusjumpin-background', get_template_directory_uri() . '/assets/css/background.css', array('newjusjumpin-style'), $bg_ver);
    // Component-specific stylesheets
    wp_enqueue_style('newjusjumpin-header', get_template_directory_uri() . '/assets/css/header.css', array('newjusjumpin-style'), '1.0.4');
    wp_enqueue_style('newjusjumpin-footer', get_template_directory_uri() . '/assets/css/footer.css', array('newjusjumpin-style'), '1.0.4');
    
    // Page-specific stylesheets
    if (is_front_page()) {
        wp_enqueue_style('newjusjumpin-front-page', get_template_directory_uri() . '/assets/css/front-page.css', array('newjusjumpin-style'), '1.0.4');
    }
    
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style('newjusjumpin-contact', get_template_directory_uri() . '/assets/css/contact.css', array('newjusjumpin-style'), '1.0.4');
    }
    
    // Page template stylesheets
    // Important: the About page uses a slug-specific template (page-{slug}.php),
    // so we detect by slug/title to ensure the CSS loads no matter the permalink.
    if (
        (function_exists('is_page_template') && is_page_template('page-about-us.php'))
        || (function_exists('get_page_template_slug') && get_page_template_slug(get_queried_object_id()) === 'page-about-us.php')
        || (function_exists('is_page') && is_page(array('about', 'about-us', 'About Us')))
    ) {
        $about_css_path = get_template_directory() . '/assets/css/about-us-page.css';
        $about_css_ver = file_exists($about_css_path) ? filemtime($about_css_path) : '1.0.4';
        wp_enqueue_style('newjusjumpin-about-us', get_template_directory_uri() . '/assets/css/about-us-page.css', array('newjusjumpin-style'), $about_css_ver);
    }
    
    // Birthday Celebrations page CSS
    if (
        (function_exists('is_page_template') && is_page_template('page-birthday-celebration.php'))
        || (function_exists('get_page_template_slug') && get_page_template_slug(get_queried_object_id()) === 'page-birthday-celebration.php')
        || (function_exists('is_page') && is_page(array('birthday-celebration', 'birthday-celebrations', 'Birthday Celebrations')))
    ) {
        $birthday_css_path = get_template_directory() . '/assets/css/birthday-celebrations.css';
        $birthday_css_ver = file_exists($birthday_css_path) ? filemtime($birthday_css_path) : '1.0.4';
        wp_enqueue_style('newjusjumpin-birthday-celebrations', get_template_directory_uri() . '/assets/css/birthday-celebrations.css', array('newjusjumpin-style'), $birthday_css_ver);
    }
    
    // Our Activities page CSS
    if (is_page_template('page-our-activities.php') || is_page('our-activities') || is_page_template('page-our-activities')) {
        $activities_css_path = get_template_directory() . '/assets/css/our-activities.css';
        $activities_css_ver = file_exists($activities_css_path) ? filemtime($activities_css_path) : '1.0.4';
        wp_enqueue_style('newjusjumpin-our-activities', get_template_directory_uri() . '/assets/css/our-activities.css', array('newjusjumpin-style'), $activities_css_ver);
    }
    
    // Fallback for both pages using page-templates.css (if needed)
    if ((is_page_template('page-birthday-celebration.php') || is_page_template('page-our-activities.php')) && !file_exists(get_template_directory() . '/assets/css/birthday-celebrations.css')) {
        wp_enqueue_style('newjusjumpin-page-templates', get_template_directory_uri() . '/assets/css/page-templates.css', array('newjusjumpin-style'), '1.0.4');
    }

    // Blog assets on blog template, single posts, and archives
    if (is_page_template('blog.php') || is_home() || is_single() || is_category() || is_tag()) {
        wp_enqueue_style('newjusjumpin-blog', get_template_directory_uri() . '/assets/css/blog.css', array('newjusjumpin-style'), '1.0.4');
        wp_enqueue_script('newjusjumpin-blog', get_template_directory_uri() . '/assets/js/blog.js', array(), '1.0.4', true);
    }
    
    // Theme JavaScript
    wp_enqueue_script('newjusjumpin-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.4', true);
    
    // Localize script for AJAX
    wp_localize_script('newjusjumpin-main', 'newjusjumpin_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('newjusjumpin_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'newjusjumpin_scripts');

/**
 * Ensure the About template is used for both /about/ and /about-us/ slugs.
 */
add_filter('page_template', function($template) {
    if (is_page(array('about', 'about-us'))) {
        $about_template = locate_template('page-about-us.php');
        if (!empty($about_template)) {
            return $about_template;
        }
    }
    return $template;
});

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
    $parts = explode('/', $request_uri);
    $slug = end($parts); // location slug
    if (!empty($slug)) {
        $template_path = get_template_directory() . '/template-part/' . sanitize_file_name($slug) . '.php';
        if (file_exists($template_path)) {
            // Ensure trailing slash for canonical consistency
            $expected = home_url('/' . $slug . '/');
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
            'template' => 'page-about-us',
            'slug' => 'about'
        ),
        'Birthday Celebrations' => array(
            'content' => '',
            'template' => 'page-birthday-celebration',
            'slug' => 'birthday-celebration'
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
                'post_name' => sanitize_title(isset($page_data['slug']) ? $page_data['slug'] : $title)
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
            'menu-item-object-id' => $pages['Birthday Celebration'],
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
            'Kolkata - ABC Square Building' => '/kolkata-abc-square-building-best-adult-trampoline-park/',
            'Kolkata - Avani Mall' => '/kolkata-avani-mall/',
            'Kolkata - Axis Mall' => '/kolkata-axis-mall/',
            'Kolkata - City Centre 2' => '/kolkata-city-centre-2/',
            'Siliguri - City Centre' => '/siliguri-city-centre/',
            'Durgapur - Junction Mall' => '/durgapur-junction-mall/'
        ),
        'Karnataka' => array(
            'Bengaluru - M5 Ecity Mall' => '/bengaluru-m5-ecity-mall/',
            'Bengaluru - Meenakshi Mall' => '/bengaluru-meenakshi-mall/'
        ),
        'Jharkhand' => array(
            'Dhanbad - Prabhatam Mall' => '/dhanbad-prabhatam-mall/',
            'Jamshedpur - P&M Mall' => '/jamshedpur-pm-mall/',
            'Ranchi - Nucleus Mall' => '/ranchi-nucleus-mall/'
        ),
        'Uttar Pradesh' => array(
            'Noida - GIP Mall' => '/noida-gip-mall/',
            'Noida - Spectrum Mall' => '/noida-spectrum-mall/',
            
        ),
        'Maharashtra' => array(
            'Nagpur - VR Mall' => '/nagpur-vr-mall/',
            'Pune - Seasons Mall' => '/pune-seasons-mall/',
            'Nashik - City Centre' => '/nashik-city-centre/'
        ),
        'Chhattisgarh' => array(
            'Raipur - Zora Mall' => '/raipur-zora-mall/'
        ),
        'Rajasthan' => array(
            'Udaipur - Urban Square Mall' => '/udaipur-urban-square-mall/'
        ),
        'Gujarat' => array(
            'Surat - VR Mall' => '/surat-vr-mall/'
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
    /**
 * Popup setting
 */
    add_submenu_page(
        'themes.php', // Parent slug
        'Popup Settings',
        'Popup Settings',
        'manage_options',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_settings_page_callback'
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
    
    // Get featured image or default image for og:image
    $og_image = '';
    if (is_singular() && has_post_thumbnail()) {
        // Use featured image if available
        $og_image = get_the_post_thumbnail_url(null, 'full');
    } else {
        // Use the specific default image you provided
        $og_image = 'https://www.jusjumpin.com/wp-content/uploads/2025/11/jus-jumpin-og.png';
    }

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

    // Only output meta tags if they haven't been output already by our custom functions
    if (!did_action('newjusjumpin_custom_meta_descriptions_done') && !did_action('newjusjumpin_site_verification_done')) {
        error_log("SEO meta function outputting description: " . $current_description);
        echo "\n<meta name=\"description\" content=\"" . esc_attr($current_description) . "\">\n";
        echo "<meta name=\"keywords\" content=\"" . esc_attr($current_keywords) . "\">\n";
        echo "<meta property=\"og:title\" content=\"" . esc_attr($current_title) . "\">\n";
        echo "<meta property=\"og:description\" content=\"" . esc_attr($current_description) . "\">\n";
        echo "<meta property=\"og:url\" content=\"" . esc_url($current_url) . "\">\n";
        echo "<meta property=\"og:type\" content=\"" . esc_attr($og_type) . "\">\n";
        echo "<meta property=\"og:site_name\" content=\"" . esc_attr(get_bloginfo('name')) . "\">\n";
        
        // Add og:image if we have one
        if (!empty($og_image)) {
            echo "<meta property=\"og:image\" content=\"" . esc_url($og_image) . "\">\n";
        }
        
        // Add Twitter Card meta tags
        echo "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
        echo "<meta name=\"twitter:title\" content=\"" . esc_attr($current_title) . "\">\n";
        echo "<meta name=\"twitter:description\" content=\"" . esc_attr($current_description) . "\">\n";
        if (!empty($og_image)) {
            echo "<meta name=\"twitter:image\" content=\"" . esc_url($og_image) . "\">\n";
        }
        echo "<meta name=\"twitter:site\" content=\"@jusjumpin\">\n"; // Replace with your actual Twitter handle
    } else {
        error_log("SEO meta function skipped - custom meta descriptions already output");
    }
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

// Include custom post types and taxonomies
// require get_template_directory() . '/inc/custom-post-types.php';

// Include popup manager
require_once get_template_directory() . '/inc/popup-manager.php';

// Register the main image popup, dynamically configured from admin settings
function jusjumpin_register_image_popup() {
    global $popup_manager;

    // Will fetch popup settings from WordPress options later
    $popup_enabled = get_option('jusjumpin_popup_enabled', false);

    if ($popup_enabled) {
        $image_url = get_option('jusjumpin_popup_image_url', '');
        $popup_title = get_option('jusjumpin_popup_title', '');
        $popup_content_text = get_option('jusjumpin_popup_content_text', '');
        $popup_trigger = get_option('jusjumpin_popup_trigger', 'auto');
        $popup_delay = get_option('jusjumpin_popup_delay', 3000);
        $popup_scroll_percentage = get_option('jusjumpin_popup_scroll_percentage', 50);
        $popup_show_once = get_option('jusjumpin_popup_show_once', true);
        $popup_expire_days = get_option('jusjumpin_popup_expire_days', 30);
        $display_on_homepage = get_option('jusjumpin_popup_display_homepage', false);
        $display_on_location_pages = get_option('jusjumpin_popup_display_location_pages', false);
        $popup_width = get_option('jusjumpin_popup_width', '500px'); // New setting
        $popup_max_height = get_option('jusjumpin_popup_max_height', '80vh'); // New setting

        $pages_to_show = array();
        if ($display_on_homepage) {
            $pages_to_show[] = 'home';
        }

        if ($display_on_location_pages) {
            // Get all location slugs
            $location_slugs = array();
            $locations_config = newjusjumpin_get_location_slugs(); // A new helper function to get slugs
            foreach ($locations_config as $state => $venues) {
                foreach ($venues as $venue_name => $venue_url) {
                    $location_slugs[] = trim(parse_url($venue_url, PHP_URL_PATH), '/');
                }
            }
            $pages_to_show = array_merge($pages_to_show, $location_slugs);
        }

        $popup_html_content = '';
        if (!empty($image_url)) {
            $popup_html_content .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($popup_title) . '" class="popup-image-responsive">';
        }
        if (!empty($popup_content_text)) {
            $popup_html_content .= '<div class="popup-text-content">' . wp_kses_post(wpautop($popup_content_text)) . '</div>';
        }

        if (!empty($popup_html_content) || !empty($popup_title)) {
            $popup_manager->register_popup('main_promo_image_popup', array(
                'title' => $popup_title,
                'content' => $popup_html_content,
                'trigger' => $popup_trigger,
                'delay' => intval($popup_delay),
                'scroll_percentage' => intval($popup_scroll_percentage),
                'show_once' => (bool)$popup_show_once,
                'expire_days' => intval($popup_expire_days),
                'pages' => $pages_to_show,
                'classes' => 'popup-zoom popup-image-only',
                'styles' => array(
                    'width' => $popup_width,
                    'max-height' => $popup_max_height,
                )
            ));
        }
    }
}
add_action('wp_loaded', 'jusjumpin_register_image_popup');

// Admin page for Popup Settings
function jusjumpin_popup_settings_page_callback() {
    ?>
    <div class="wrap">
        <h1>Jus Jumpin Popup Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('jusjumpin_popup_settings_group');
            do_settings_sections('jusjumpin-popup-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register Popup Settings
function jusjumpin_register_popup_settings() {
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_enabled',
        array('type' => 'boolean', 'sanitize_callback' => 'rest_sanitize_boolean', 'default' => false)
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_image_url',
        array('type' => 'string', 'sanitize_callback' => 'esc_url_raw', 'default' => '')
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_title',
        array('type' => 'string', 'sanitize_callback' => 'sanitize_text_field', 'default' => '')
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_content_text',
        array('type' => 'string', 'sanitize_callback' => 'wp_kses_post', 'default' => '')
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_trigger',
        array('type' => 'string', 'sanitize_callback' => 'sanitize_text_field', 'default' => 'auto')
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_delay',
        array('type' => 'integer', 'sanitize_callback' => 'absint', 'default' => 3000)
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_scroll_percentage',
        array('type' => 'integer', 'sanitize_callback' => 'absint', 'default' => 50)
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_show_once',
        array('type' => 'boolean', 'sanitize_callback' => 'rest_sanitize_boolean', 'default' => true)
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_expire_days',
        array('type' => 'integer', 'sanitize_callback' => 'absint', 'default' => 30)
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_width',
        array('type' => 'string', 'sanitize_callback' => 'sanitize_text_field', 'default' => '500px')
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_max_height',
        array('type' => 'string', 'sanitize_callback' => 'sanitize_text_field', 'default' => '80vh')
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_display_homepage',
        array('type' => 'boolean', 'sanitize_callback' => 'rest_sanitize_boolean', 'default' => false)
    );
    register_setting(
        'jusjumpin_popup_settings_group',
        'jusjumpin_popup_display_location_pages',
        array('type' => 'boolean', 'sanitize_callback' => 'rest_sanitize_boolean', 'default' => false)
    );

    add_settings_section(
        'jusjumpin_popup_main_section',
        'Popup Content & Display',
        'jusjumpin_popup_section_callback',
        'jusjumpin-popup-settings'
    );

    add_settings_field(
        'jusjumpin_popup_enabled_field',
        'Enable Popup',
        'jusjumpin_popup_enabled_callback',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_image_url_field',
        'Popup Image',
        'jusjumpin_popup_image_url_callback',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_title_field',
        'Popup Title',
        'jusjumpin_popup_title_callback',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_content_text_field',
        'Popup Content Text',
        'jusjumpin_popup_content_text_callback',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_trigger_field',
        'Popup Trigger',
        'jusjumpin_popup_trigger_callback',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_delay_field',
        'Auto Trigger Delay (ms)',
        'jusjumpin_popup_delay_callback',
        'jusjumpin-popup-settings',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_scroll_percentage_field',
        'Scroll Trigger Percentage',
        'jusjumpin_popup_scroll_percentage_callback',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_show_once_field',
        'Show Once Per User',
        'jusjumpin_popup_show_once_callback',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_expire_days_field',
        'Dismissal Expiry (Days)',
        'jusjumpin_popup_expire_days_callback',
        'jusjumpin_popup_main_section'
    );
    
    // Add missing fields for Popup Width and Max Height
    add_settings_field(
        'jusjumpin_popup_width_field',
        'Popup Width',
        'jusjumpin_popup_width_callback',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_max_height_field',
        'Popup Max Height',
        'jusjumpin_popup_max_height_callback',
        'jusjumpin_popup_main_section'
    );

    // Add missing fields for Display on Homepage and Location Pages
    add_settings_field(
        'jusjumpin_popup_display_homepage_field',
        'Display on Homepage',
        'jusjumpin_popup_display_homepage_callback',
        'jusjumpin_popup_main_section'
    );
    add_settings_field(
        'jusjumpin_popup_display_location_pages_field',
        'Display on Location Pages',
        'jusjumpin_popup_display_location_pages_callback',
        'jusjumpin_popup_main_section'
    );
}
add_action('admin_init', 'jusjumpin_register_popup_settings');

// Section callback (optional, can be left empty)
function jusjumpin_popup_section_callback() {
    echo '<p>Configure the content and display rules for your main image popup.</p>';
}

// Field callbacks
function jusjumpin_popup_enabled_callback() {
    $value = get_option('jusjumpin_popup_enabled', false);
    echo '<label><input type="checkbox" name="jusjumpin_popup_enabled" value="1" ' . checked(1, $value, false) . ' /> Enable the popup</label>';
}

function jusjumpin_popup_image_url_callback() {
    $value = get_option('jusjumpin_popup_image_url', '');
    echo '<input type="text" id="jusjumpin_popup_image_url_input" name="jusjumpin_popup_image_url" value="' . esc_attr($value) . '" class="regular-text" /><!-- Remove <br> tag here -->';
    echo '<input type="button" id="jusjumpin_popup_image_upload_button" class="button-secondary jusjumpin-upload-button" value="Upload Image" /> ';
    if ($value) {
        echo '<input type="button" id="jusjumpin_popup_image_remove_button" class="button-secondary jusjumpin-remove-button" value="Remove Image" />';
    }
    echo '<p class="description">Enter an image URL or upload one for your popup.</p>';
    if ($value) {
        echo '<img src="' . esc_url($value) . '" style="max-width:200px; height:auto; margin-top:10px; display:block;" class="jusjumpin-popup-image-preview" />';
    } else {
        echo '<img src="" style="max-width:200px; height:auto; margin-top:10px; display:none;" class="jusjumpin-popup-image-preview" />'; // Hidden preview for initial state
    }
}

function jusjumpin_popup_title_callback() {
    $value = get_option('jusjumpin_popup_title', '');
    echo '<input type="text" name="jusjumpin_popup_title" value="' . esc_attr($value) . '" class="regular-text" />';
    echo '<p class="description">A main title for your popup.</p>';
}

function jusjumpin_popup_content_text_callback() {
    $value = get_option('jusjumpin_popup_content_text', '');
    wp_editor(htmlspecialchars_decode($value), 'jusjumpin_popup_content_text_editor', array(
        'textarea_name' => 'jusjumpin_popup_content_text',
        'textarea_rows' => 5,
        'tinymce' => true,
        'quicktags' => true,
        'media_buttons' => false,
    ));
    echo '<p class="description">Additional text content for your popup. HTML is allowed.</p>';
}

function jusjumpin_popup_trigger_callback() {
    $value = get_option('jusjumpin_popup_trigger', 'auto');
    echo '<select name="jusjumpin_popup_trigger">';
    echo '<option value="auto" ' . selected($value, 'auto', false) . '>Automatic (after delay)</option>';
    echo '<option value="scroll" ' . selected($value, 'scroll', false) . '>On Scroll Percentage</option>';
    echo '<option value="exit" ' . selected($value, 'exit', false) . '>On Exit Intent</option>';
    echo '<option value="manual" ' . selected($value, 'manual', false) . '>Manual Trigger (via button)</option>';
    echo '</select>';
    echo '<p class="description">Choose how the popup is triggered.</p>';
}

function jusjumpin_popup_delay_callback() {
    $value = get_option('jusjumpin_popup_delay', 3000);
    echo '<input type="number" name="jusjumpin_popup_delay" value="' . esc_attr($value) . '" class="small-text" /> ms';
    echo '<p class="description">Delay in milliseconds before the popup appears (for "Automatic" trigger).</p>';
}

function jusjumpin_popup_scroll_percentage_callback() {
    $value = get_option('jusjumpin_popup_scroll_percentage', 50);
    echo '<input type="number" name="jusjumpin_popup_scroll_percentage" value="' . esc_attr($value) . '" min="1" max="100" class="small-text" /> %';
    echo '<p class="description">Percentage of page scrolled before the popup appears (for "On Scroll" trigger).</p>';
}

function jusjumpin_popup_show_once_callback() {
    $value = get_option('jusjumpin_popup_show_once', true);
    echo '<label><input type="checkbox" name="jusjumpin_popup_show_once" value="1" ' . checked(1, $value, false) . ' /> Show this popup only once per user session (uses cookies)</label>';
    echo '<p class="description">If checked, the popup will not reappear to the same user after dismissal until the cookie expires.</p>';
}

function jusjumpin_popup_expire_days_callback() {
    $value = get_option('jusjumpin_popup_expire_days', 30);
    echo '<input type="number" name="jusjumpin_popup_expire_days" value="' . esc_attr($value) . '" min="0" class="small-text" /> days';
    echo '<p class="description">Number of days before the dismissal cookie expires (0 for session-only).</p>';
}

function jusjumpin_popup_width_callback() {
    $value = get_option('jusjumpin_popup_width', '500px');
    echo '<input type="text" name="jusjumpin_popup_width" value="' . esc_attr($value) . '" class="regular-text" />';
    echo '<p class="description">Set the width of the popup (e.g., 500px, 80%, 30em). Default: 500px.</p>';
}

function jusjumpin_popup_max_height_callback() {
    $value = get_option('jusjumpin_popup_max_height', '80vh');
    echo '<input type="text" name="jusjumpin_popup_max_height" value="' . esc_attr($value) . '" class="regular-text" />';
    echo '<p class="description">Set the maximum height of the popup (e.g., 80vh, 400px). Default: 80vh.</p>';
}

function jusjumpin_popup_display_homepage_callback() {
    $value = get_option('jusjumpin_popup_display_homepage', false);
    echo '<label><input type="checkbox" name="jusjumpin_popup_display_homepage" value="1" ' . checked(1, $value, false) . ' /> Display on Homepage</label>';
}

function jusjumpin_popup_display_location_pages_callback() {
    $value = get_option('jusjumpin_popup_display_location_pages', false);
    echo '<label><input type="checkbox" name="jusjumpin_popup_display_location_pages" value="1" ' . checked(1, $value, false) . ' /> Display on all Location Pages</label>';
}

// Enqueue media uploader scripts
function jusjumpin_enqueue_media_uploader() {
    // Temporarily add a debug line to find the correct screen ID
    error_log('Current Admin Screen ID: ' . get_current_screen()->id);

    if ('toplevel_page_jusjumpin-popup-settings' === get_current_screen()->id || 'appearance_page_jusjumpin-popup-settings' === get_current_screen()->id ) {
        wp_enqueue_media();
        wp_enqueue_script('jusjumpin-media-uploader', get_template_directory_uri() . '/assets/js/media-uploader.js', array('jquery'), '1.0.0', true);
    }
}
add_action('admin_enqueue_scripts', 'jusjumpin_enqueue_media_uploader');

// media-uploader.js content
// This will be created in the next step, but defined here for clarity.

// Helper function to get all location slugs
function newjusjumpin_get_location_slugs() {
    $locations = array(
        'West Bengal' => array(
            'Kolkata - ABC Square Building' => '/kolkata-abc-square-building-best-adult-trampoline-park/',
            'Kolkata - Avani Mall' => '/kolkata-avani-mall/',
            'Kolkata - Axis Mall' => '/kolkata-axis-mall/',
            'Kolkata - City Centre 2' => '/kolkata-city-centre-2/',
            'Siliguri - City Centre' => '/siliguri-city-centre/',
            'Durgapur - Junction Mall' => '/durgapur-junction-mall/'
        ),
        'Karnataka' => array(
            'Bengaluru - M5 Ecity Mall' => '/bengaluru-m5-ecity-mall/',
            'Bengaluru - Meenakshi Mall' => '/bengaluru-meenakshi-mall/'
        ),
        'Jharkhand' => array(
            'Dhanbad - Prabhatam Mall' => '/dhanbad-prabhatam-mall/',
            'Jamshedpur - P&M Mall' => '/jamshedpur-pm-mall/',
            'Ranchi - Nucleus Mall' => '/ranchi-nucleus-mall/'
        ),
        'Uttar Pradesh' => array(
            'Noida - GIP Mall' => '/noida-gip-mall/',
            'Noida - Spectrum Mall' => '/noida-spectrum-mall/',
            
        ),
        'Maharashtra' => array(
            'Nagpur - VR Mall' => '/nagpur-vr-mall/',
            'Pune - Seasons Mall' => '/pune-seasons-mall/',
            'Nashik - City Centre' => '/nashik-city-centre/'
        ),
        'Chhattisgarh' => array(
            'Raipur - Zora Mall' => '/raipur-zora-mall/'
        ),
        'Rajasthan' => array(
            'Udaipur - Urban Square Mall' => '/udaipur-urban-square-mall/'
        ),
        'Gujarat' => array(
            'Surat - VR Mall' => '/surat-vr-mall/'
        )
    );
    return $locations;
}
