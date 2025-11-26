<?php
/*
Template Name: Navigation Test
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Test - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #222;
            min-height: 100vh;
        }
        .test-container {
            padding: 100px 20px 20px;
            color: white;
            max-width: 1200px;
            margin: 0 auto;
        }
        .debug-info {
            background: rgba(0,0,0,0.5);
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Header -->
    <header class="site-header" id="site-header">
        <nav class="navbar" role="navigation">
            <!-- Left Navigation -->
            <div class="nav-left nav-menu" id="nav-left">
                <ul class="nav-menu-list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown">
                        <a href="#">Our Locations <span class="dropdown-arrow">▼</span></a>
                        <div class="dropdown-content">
                            <div class="has-submenu">
                                <a href="#">West Bengal <span class="submenu-arrow">▶</span></a>
                                <div class="sub-dropdown-content">
                                    <a href="#">Kolkata - ABC Square Building</a>
                                    <a href="#">Kolkata - Avani Mall</a>
                                    <a href="#">Kolkata - Axis Mall</a>
                                    <a href="#">Kolkata - City Centre 2</a>
                                    <a href="#">Siliguri - City Centre</a>
                                    <a href="#">Durgapur - Junction Mall</a>
                                </div>
                            </div>
                            <div class="has-submenu">
                                <a href="#">Karnataka <span class="submenu-arrow">▶</span></a>
                                <div class="sub-dropdown-content">
                                    <a href="#">Bengaluru - M5 Ecity Mall</a>
                                    <a href="#">Bengaluru - Meenakshi Mall</a>
                                </div>
                            </div>
                            <div class="has-submenu">
                                <a href="#">Jharkhand <span class="submenu-arrow">▶</span></a>
                                <div class="sub-dropdown-content">
                                    <a href="#">Dhanbad - Prabhatam Mall</a>
                                    <a href="#">Jamshedpur - Mall</a>
                                    <a href="#">Ranchi - Nucleus Mall</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Birthday Celebrations</a></li>
                </ul>
            </div>
            
            <!-- Center Logo -->
            <div class="nav-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
            
            <!-- Right Navigation -->
            <div class="nav-right nav-menu" id="nav-right">
                <ul class="nav-menu-list">
                    <li><a href="#">Our Activities</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="test-container">
        <h1>Navigation Test Page</h1>
        
        <div class="debug-info">
            <h2>Instructions:</h2>
            <ol>
                <li>Hover over "Our Locations" in the navigation above</li>
                <li>You should see a dropdown with states</li>
                <li>Hover over any state to see malls appear to the right</li>
                <li>Check browser console for debug messages</li>
            </ol>
        </div>
        
        <div class="debug-info">
            <h2>Debug Information:</h2>
            <p><strong>Theme:</strong> <?php echo get_template(); ?></p>
            <p><strong>WordPress Version:</strong> <?php echo get_bloginfo('version'); ?></p>
            <p><strong>Screen Width:</strong> <span id="screen-width"></span>px</p>
        </div>
        
        <div class="debug-info">
            <h2>CSS Classes Test:</h2>
            <div class="dropdown" style="position: relative; display: inline-block; background: rgba(255,255,255,0.1); padding: 10px; margin: 10px;">
                <a href="#" style="color: white;">Test Dropdown ▼</a>
                <div class="dropdown-content" style="background: rgba(0,0,0,0.9); min-width: 200px; padding: 10px;">
                    <div class="has-submenu" style="position: relative;">
                        <a href="#" style="color: white; display: block; padding: 5px;">Test State ▶</a>
                        <div class="sub-dropdown-content" style="background: rgba(0,0,0,0.9); min-width: 200px; padding: 10px;">
                            <a href="#" style="color: white; display: block; padding: 5px;">Test Mall 1</a>
                            <a href="#" style="color: white; display: block; padding: 5px;">Test Mall 2</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('screen-width').textContent = window.innerWidth;
        
        window.addEventListener('resize', function() {
            document.getElementById('screen-width').textContent = window.innerWidth;
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>