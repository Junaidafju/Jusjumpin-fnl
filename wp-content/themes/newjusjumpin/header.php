<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Tag Manager (Theme) -->
    <script id="gtm-theme-script">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','G-GWTVT41WFF');</script>
    <!-- End Google Tag Manager (Theme) -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) (Theme) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=G-GWTVT41WFF"
    height="0" width="0" style="display:none;visibility:hidden" id="gtm-noscript-theme"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) (Theme) -->
    <?php wp_body_open(); ?>
    
    <!-- Header -->
    <header class="site-header" id="site-header">
        <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'newjusjumpin'); ?>">
            
            <!-- Left Navigation -->
            <div class="nav-left nav-menu" id="nav-left">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'left-nav',
                    'menu_class' => 'nav-menu-list',
                    'container' => false,
                    'depth' => 2,
                    'walker' => new NewJusJumpin_Mega_Walker(),
                    'fallback_cb' => false
                ));
                ?>
            </div>
            
            <!-- Center Logo -->
            <div class="nav-center">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" rel="home">
                        <?php 
                        // Check for available logo files (in priority order)
                        $logo_files = array(
                            'Jus-Jumpin-Logo.webp',
                            'logo.svg', 
                            'logo.png',
                            'logo.jpg'
                        );
                        
                        $logo_found = false;
                        foreach ($logo_files as $logo_file) {
                            $logo_path = get_template_directory() . '/assets/img/' . $logo_file;
                            if (file_exists($logo_path)) {
                                $logo_url = get_template_directory_uri() . '/assets/img/' . $logo_file;
                                echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />';
                                $logo_found = true;
                                break;
                            }
                        }
                        
                        if (!$logo_found) {
                            bloginfo('name');
                        }
                        ?>
                    </a>
                <?php endif; ?>
            </div>
            
            <!-- Right Navigation -->
            <div class="nav-right nav-menu" id="nav-right">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'right-nav',
                    'menu_class' => 'nav-menu-list',
                    'container' => false,
                    'depth' => 3,
                    'walker' => new NewJusJumpin_Mega_Walker(),
                    'fallback_cb' => false
                ));
                ?>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="hamburger-toggle" id="mobile-menu-toggle" type="button" aria-label="<?php esc_attr_e('Toggle Mobile Menu', 'newjusjumpin'); ?>" aria-expanded="false" aria-controls="mobile-nav-overlay">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </button>
        </nav>
    </header>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav-overlay" id="mobile-nav-overlay" aria-hidden="true" role="dialog" aria-labelledby="mobile-nav-title">
        <div class="mobile-nav-content">
            <div class="mobile-nav-section">
                <h3 id="mobile-nav-title"><?php esc_html_e('Navigation', 'newjusjumpin'); ?></h3>
                
                <!-- Left Navigation Menu -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'left-nav',
                    'container' => false,
                    'menu_class' => 'mobile-menu-list mobile-left-menu',
                    'depth' => 2,
                    'walker' => new NewJusJumpin_Mobile_Walker(),
                    'fallback_cb' => false
                ));
                ?>
                
                <!-- Right Navigation Menu -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'right-nav',
                    'container' => false,
                    'menu_class' => 'mobile-menu-list mobile-right-menu',
                    'depth' => 3,
                    'walker' => new NewJusJumpin_Mobile_Walker(),
                    'fallback_cb' => false
                ));
                ?>
            </div>
        </div>
        <div class="jj-mobile-watermark">JumpZone</div>
    </div>
    
    <!-- Skip Link for Accessibility -->
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'newjusjumpin'); ?></a>
    
    <!-- Main Content Area -->
    <main id="main" class="site-main">