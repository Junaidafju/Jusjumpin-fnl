<?php
/**
 * Debug Menu Structure and Fix Venue Organization
 */

// Load WordPress
require_once('wp-config.php');
require_once(ABSPATH . 'wp-settings.php');

echo "=== MENU DEBUG & FIX ===\n\n";

// Get the menu
$menu = wp_get_nav_menu_object('Right Navigation');
if (!$menu) {
    echo "ERROR: Right Navigation menu not found!\n";
    exit;
}

$items = wp_get_nav_menu_items($menu->term_id);
echo "Total menu items: " . count($items) . "\n\n";

echo "CURRENT MENU STRUCTURE:\n";
echo "========================\n";

$our_location_id = null;
$states = [];

foreach ($items as $item) {
    $indent = str_repeat('  ', ($item->menu_item_parent ? 1 : 0));
    echo $indent . "- " . $item->title . " (ID: " . $item->ID . ", Parent: " . $item->menu_item_parent . ")\n";
    
    if ($item->title === 'Our Location') {
        $our_location_id = $item->ID;
    }
    
    if ($item->menu_item_parent == $our_location_id && $item->title !== 'Our Location') {
        $states[$item->ID] = $item->title;
    }
}

echo "\n\nSTATES FOUND:\n";
foreach ($states as $state_id => $state_name) {
    echo "- $state_name (ID: $state_id)\n";
    
    // Find venues under this state
    $venues = [];
    foreach ($items as $item) {
        if ($item->menu_item_parent == $state_id) {
            $venues[] = $item->title;
        }
    }
    
    echo "  Venues: " . implode(', ', $venues) . "\n";
}

echo "\n\nDo you want to rebuild the menu? (y/n): ";
$handle = fopen("php://stdin", "r");
$line = fgets($handle);
if (trim($line) == 'y') {
    echo "Rebuilding menu...\n";
    
    // Include theme functions
    require_once(get_template_directory() . '/functions.php');
    
    if (function_exists('newjusjumpin_setup_mega_menu')) {
        // Delete existing menu
        wp_delete_nav_menu($menu->term_id);
        
        // Recreate it
        $result = newjusjumpin_setup_mega_menu();
        echo "Menu rebuilt successfully!\n";
        
        // Show new structure
        $new_menu = wp_get_nav_menu_object('Right Navigation');
        $new_items = wp_get_nav_menu_items($new_menu->term_id);
        
        echo "\nNEW MENU STRUCTURE:\n";
        echo "===================\n";
        foreach ($new_items as $item) {
            $indent = str_repeat('  ', ($item->menu_item_parent ? ($item->menu_item_parent == $our_location_id ? 1 : 2) : 0));
            echo $indent . "- " . $item->title . "\n";
        }
    }
}

fclose($handle);
echo "\nDone!\n";
?>
