/**
 * Dropdown Navigation JavaScript
 * Ensures proper functionality of multi-level dropdown menus
 */

document.addEventListener('DOMContentLoaded', function() {
    console.log('Dropdown navigation script loaded');
    
    // Get all dropdown elements
    const dropdowns = document.querySelectorAll('.nav-menu-list .dropdown');
    const submenus = document.querySelectorAll('.nav-menu-list .has-submenu');
    
    console.log('Found dropdowns:', dropdowns.length);
    console.log('Found submenus:', submenus.length);
    
    // Handle main dropdown hover
    dropdowns.forEach((dropdown, index) => {
        const dropdownContent = dropdown.querySelector('.dropdown-content');
        
        console.log(`Dropdown ${index}:`, dropdown, 'Content:', dropdownContent);
        
        if (dropdownContent) {
            dropdown.addEventListener('mouseenter', function() {
                console.log('Showing dropdown content');
                dropdownContent.style.display = 'block';
            });
            
            dropdown.addEventListener('mouseleave', function() {
                console.log('Hiding dropdown content');
                dropdownContent.style.display = 'none';
            });
        }
    });
    
    // Handle submenu hover
    submenus.forEach((submenu, index) => {
        const subDropdownContent = submenu.querySelector('.sub-dropdown-content');
        
        console.log(`Submenu ${index}:`, submenu, 'Content:', subDropdownContent);
        
        if (subDropdownContent) {
            submenu.addEventListener('mouseenter', function() {
                console.log('Showing submenu content');
                subDropdownContent.style.display = 'block';
            });
            
            submenu.addEventListener('mouseleave', function() {
                console.log('Hiding submenu content');
                subDropdownContent.style.display = 'none';
            });
        }
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-content, .sub-dropdown-content').forEach(content => {
                content.style.display = 'none';
            });
        }
    });
    
    // Prevent dropdown links from closing on click (for demo purposes)
    document.querySelectorAll('.dropdown-content a, .sub-dropdown-content a').forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove this if you want the links to actually navigate
            if (this.getAttribute('href') === '#') {
                e.preventDefault();
            }
        });
    });
});
