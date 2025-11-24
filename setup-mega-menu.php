<?php
/**
 * Manual Mega Menu Setup Script
 * 
 * Run this file to set up the mega menu structure.
 */

// Load WordPress
require_once('wp-config.php');
require_once(ABSPATH . 'wp-settings.php');

// Include the theme functions
require_once(get_template_directory() . '/functions.php');

echo "Starting mega menu setup...\n";

// Run the mega menu setup function
if (function_exists('newjusjumpin_setup_mega_menu')) {
    $created_pages = newjusjumpin_setup_mega_menu();
    echo "Mega menu setup completed!\n";
    echo "Created " . count($created_pages) . " pages.\n";
    
    // List the created pages
    foreach ($created_pages as $title => $id) {
        echo "- $title (ID: $id)\n";
    }
    
    // Check the menu
    $menu = wp_get_nav_menu_object('Right Navigation');
    if ($menu) {
        $items = wp_get_nav_menu_items($menu->term_id);
        echo "\nMenu structure:\n";
        foreach ($items as $item) {
            $indent = str_repeat('  ', ($item->menu_item_parent ? 1 : 0));
            echo $indent . "- " . $item->title . " (Parent: " . $item->menu_item_parent . ")\n";
        }
    }
} else {
    echo "Function newjusjumpin_setup_mega_menu not found!\n";
}

echo "\nDone!\n";
?>
