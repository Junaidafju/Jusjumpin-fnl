# CSS Organization - New Jus Jumpin Theme

This document outlines the CSS organization structure for the New Jus Jumpin WordPress theme. All styling has been extracted from PHP files and organized into separate, well-commented CSS files.

## File Structure

```
assets/css/
├── README.md           # This documentation file
├── header.css          # Header and navigation styles
├── footer.css          # Footer and back-to-top styles
├── front-page.css      # Front page specific styles
└── contact.css         # Contact page specific styles
```

## CSS Files Overview

### 1. header.css
**Purpose**: Contains all header and navigation related styles
**Includes**:
- Mobile navigation overlay
- Accessibility features (skip links, screen reader text)
- Mobile dropdown styles
- Navigation menu styling

**Previously embedded in**: `header.php`

### 2. footer.css
**Purpose**: Contains all footer related styles
**Includes**:
- Footer contact information layout
- Social media section styling
- Location links styling
- Footer bottom section
- Back-to-top button
- Responsive footer layouts

**Previously embedded in**: `footer.php`

### 3. front-page.css
**Purpose**: Contains styles specific to the front page
**Includes**:
- Hero section actions and buttons
- About content section styling
- Activities call-to-action section
- Placeholder image styles
- Animation delays for staggered effects
- Front page responsive design

**Previously embedded in**: `front-page.php`

### 4. contact.css
**Purpose**: Contains styles specific to the contact page
**Includes**:
- Contact form styling
- Form validation states
- Contact information cards
- Form field styling (inputs, selects, checkboxes)
- Contact page responsive design

**Previously embedded in**: `page-contact.php`

## Loading Strategy

The CSS files are loaded conditionally through the WordPress enqueue system in `functions.php`:

### Global Styles (loaded on all pages):
- `header.css` - Header/navigation components
- `footer.css` - Footer components

### Page-Specific Styles (loaded conditionally):
- `front-page.css` - Only on the front page (`is_front_page()`)
- `contact.css` - Only on contact page template (`is_page_template('page-contact.php')`)

## Benefits of This Organization

1. **Performance**: Only necessary CSS is loaded per page
2. **Maintainability**: Each component has its own dedicated file
3. **Readability**: Well-commented and organized code
4. **Scalability**: Easy to add new page-specific styles
5. **Caching**: Better browser caching with separate files
6. **Development**: Easier debugging and development

## File Naming Convention

- Component-based: `header.css`, `footer.css`
- Page-specific: `front-page.css`, `contact.css`
- Descriptive and consistent naming

## CSS Structure Within Files

Each CSS file follows this structure:

```css
/**
 * File Description
 * 
 * Brief description of what the file contains
 * 
 * @package NewJusJumpin
 * @version 1.0.0
 */

/* ==================== SECTION NAME ==================== */
/* Styles grouped by functionality with clear section headers */

/* ==================== RESPONSIVE DESIGN ==================== */
/* Media queries at the end of each file */
```

## Adding New Styles

### For existing components:
Add styles to the appropriate existing file (header.css, footer.css, etc.)

### For new pages:
1. Create a new CSS file in `assets/css/`
2. Add proper header comment with description
3. Update `functions.php` to enqueue the file conditionally
4. Follow the established naming and structure conventions

### For new components:
Create a new component-specific CSS file and enqueue it globally if used across multiple pages.

## Dependencies

All CSS files depend on the main `style.css` file, which contains:
- Base styles and CSS reset
- Typography
- Layout utilities
- Glassmorphism components
- Main theme styles
- Global animations

The loading order is:
1. External dependencies (Google Fonts, Font Awesome)
2. Main theme stylesheet (`style.css`)
3. Component-specific stylesheets
4. Page-specific stylesheets

This ensures proper cascade and prevents style conflicts.