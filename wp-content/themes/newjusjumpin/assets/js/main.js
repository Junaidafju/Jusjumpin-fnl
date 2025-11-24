/**
 * New Jus Jumpin Theme JavaScript
 * 
 * @package NewJusJumpin
 * @version 1.0.0
 */

(function($) {
    'use strict';

    // Wait for DOM to be ready
    $(document).ready(function() {
        // Initialize all components
        initMobileMenu();
        initMegaMenu();
        initSmoothScrolling();
        initScrollAnimations();
        initHeaderScroll();
        initBackToTop();
        initContactForm();
        initStatCounters();
        initVideoControls();
        initAccessibility();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const $mobileToggle = $('#mobile-menu-toggle');
        const $mobileOverlay = $('#mobile-nav-overlay');
        const $navLeft = $('#nav-left');
        const $navRight = $('#nav-right');
        const $header = $('.site-header');
        
        $mobileToggle.on('click', function(e) {
            e.preventDefault();
            toggleMobileMenu();
        });

        // Close menu when clicking overlay
        $mobileOverlay.on('click', function(e) {
            if (e.target === this) {
                closeMobileMenu();
            }
        });

        // Close menu when pressing Escape
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && $mobileOverlay.hasClass('active')) {
                closeMobileMenu();
            }
        });

        // Close menu when clicking leaf links (not parents with submenu)
        $mobileOverlay.on('click', '.mobile-menu-link', function(e) {
            const $li = $(this).closest('li');
            const isParent = $li.hasClass('has-submenu');
            if (!isParent) {
                closeMobileMenu();
            }
        });

        function toggleMobileMenu() {
            const isActive = $mobileToggle.hasClass('active');
            
            if (isActive) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        }

        function openMobileMenu() {
            $mobileToggle.addClass('active');
            $mobileToggle.find('.hamburger-line').addClass('active');
            // place overlay below header
            const headerHeight = $header.outerHeight() || 0;
            $mobileOverlay.css({ paddingTop: (headerHeight + 20) + 'px' });
            $mobileOverlay.addClass('active');
            $('body').addClass('menu-open');
            
            // Set ARIA attributes for accessibility
            $mobileOverlay.attr('aria-hidden', 'false');
            $mobileToggle.attr('aria-expanded', 'true');
            
            // Focus management for accessibility
            $mobileOverlay.focus();
        }

        function closeMobileMenu() {
            $mobileToggle.removeClass('active');
            $mobileToggle.find('.hamburger-line').removeClass('active');
            $mobileOverlay.removeClass('active');
            $mobileOverlay.css({ paddingTop: '' });
            $('body').removeClass('menu-open');
            
            // Set ARIA attributes for accessibility
            $mobileOverlay.attr('aria-hidden', 'true');
            $mobileToggle.attr('aria-expanded', 'false');
            
            // Close all submenus when closing main menu
            $mobileOverlay.find('.mobile-submenu').removeClass('active');
            $mobileOverlay.find('.mobile-nav-toggle').attr('aria-expanded', 'false');
        }

        // Handle mobile menu toggle buttons (parent items with submenus)
        $mobileOverlay.on('click', '.mobile-nav-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const $button = $(this);
            const $li = $button.closest('li');
            const $submenu = $li.find('.mobile-submenu').first();
            const isExpanded = $button.attr('aria-expanded') === 'true';
            
            if (isExpanded) {
                // Close submenu
                closeSubmenu($button, $submenu);
            } else {
                // Close other submenus at the same level
                const $siblings = $li.siblings('.has-submenu');
                $siblings.find('.mobile-menu-toggle').attr('aria-expanded', 'false');
                $siblings.find('.mobile-submenu').removeClass('active');
                
                // Open this submenu
                openSubmenu($button, $submenu);
            }
        });

        function openSubmenu($button, $submenu) {
            $button.attr('aria-expanded', 'true');
            $submenu.addClass('active');
            
            // Smooth scroll to keep the opened submenu in view
            setTimeout(function() {
                const submenuTop = $submenu.offset().top;
                const overlayTop = $mobileOverlay.offset().top;
                const overlayHeight = $mobileOverlay.height();
                
                if (submenuTop + $submenu.outerHeight() > overlayTop + overlayHeight - 50) {
                    $mobileOverlay.animate({
                        scrollTop: $mobileOverlay.scrollTop() + ($submenu.offset().top - $mobileOverlay.offset().top - 50)
                    }, 300);
                }
            }, 100);
        }

        function closeSubmenu($button, $submenu) {
            $button.attr('aria-expanded', 'false');
            $submenu.removeClass('active');
            
            // Close any nested submenus
            $submenu.find('.mobile-submenu').removeClass('active');
            $submenu.find('.mobile-nav-toggle').attr('aria-expanded', 'false');
        }

        // Handle keyboard navigation for mobile menu
        $mobileOverlay.on('keydown', '.mobile-nav-toggle, .mobile-menu-link', function(e) {
            const $current = $(this);
            const $items = $mobileOverlay.find('.mobile-nav-toggle, .mobile-menu-link');
            const currentIndex = $items.index($current);
            
            switch(e.key) {
                case 'ArrowDown':
                    e.preventDefault();
                    const nextIndex = (currentIndex + 1) % $items.length;
                    $items.eq(nextIndex).focus();
                    break;
                    
                case 'ArrowUp':
                    e.preventDefault();
                    const prevIndex = (currentIndex - 1 + $items.length) % $items.length;
                    $items.eq(prevIndex).focus();
                    break;
                    
                case 'ArrowRight':
                    e.preventDefault();
                    if ($current.hasClass('mobile-nav-toggle')) {
                        $current.click();
                    }
                    break;
                    
                case 'ArrowLeft':
                    e.preventDefault();
                    if ($current.hasClass('mobile-nav-toggle') && $current.attr('aria-expanded') === 'true') {
                        $current.click();
                    }
                    break;
                    
                case 'Enter':
                case ' ':
                    e.preventDefault();
                    $current.click();
                    break;
            }
        });

        // Prevent body scroll when mobile menu is open
        $('body').on('touchmove', function(e) {
            if ($mobileOverlay.hasClass('active')) {
                e.preventDefault();
            }
        });
    }

    /**
     * Mega Menu Functionality
     */
    function initMegaMenu() {
        const $megaMenuItems = $('.nav-menu .dropdown-parent');
        
        if ($megaMenuItems.length === 0) return;
        
        // Remove hover-driven behavior; use click-only below
        
        // Purely click-based mega menu system (NO HOVER)
        let activeDropdown = null;
        let activeSubmenu = null;
        
        // Disable any hover effects by preventing mouseenter events
        $('.dropdown, .dropdown-item, .submenu').off('mouseenter mouseleave hover');
        
        // Remove any existing hover classes
        $('.dropdown, .dropdown-item, .submenu').removeClass('hover');
        
        // Prevent any hover-based submenu showing (do not set inline display)
        $('.dropdown .submenu').removeClass('show').css('display', '');
        
        // Handle "Our Location" click to toggle main dropdown
        $('.nav-link[href="#"]').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const $parent = $(this).closest('.dropdown-parent');
            const $dropdown = $parent.find('.dropdown');
            
            if ($dropdown.hasClass('show')) {
                // Close dropdown
                hideDropdown();
            } else {
                // Open dropdown
                showDropdown($dropdown);
            }
        });
        
        // Handle state clicks to toggle submenus (only state items)
        $('.dropdown').on('click', 'a.dropdown-item.has-submenu', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const $stateItem = $(this);
            // Some markup may insert nodes between the state link and submenu
            // Use nextAll to reliably get the sibling submenu container
            const $submenu = $stateItem.nextAll('.submenu').first();
            
            if ($submenu.length > 0) {
                if ($submenu.hasClass('show')) {
                    // Close this submenu
                    hideSubmenu($stateItem, $submenu);
                } else {
                    // Close other submenus and open this one
                    $('.dropdown .submenu').removeClass('show');
                    $('.dropdown a.dropdown-item').removeClass('active');
                    
                    showSubmenu($stateItem, $submenu);
                }
            }
        });
        
        // Close dropdown when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown-parent').length) {
                hideDropdown();
            }
        });
        
        // Override any potential hover events from other scripts
        $(document).on('mouseenter', '.dropdown .dropdown-item', function(e) {
            e.stopPropagation();
            e.preventDefault();
            return false;
        });
        
        // Ensure submenus only respond to clicks, not hover
        $('.dropdown').off('mouseenter mouseleave');
        $('.dropdown .dropdown-item').off('mouseenter mouseleave');
        
        // Utility functions
        function showDropdown($dropdown) {
            // Clear any inline display set by other code, then show via class
            $dropdown.css('display', '').addClass('show');
            activeDropdown = $dropdown;
        }
        
        function hideDropdown() {
            if (activeDropdown) {
                activeDropdown.removeClass('show').css('display', '');
                $('.dropdown .submenu').removeClass('show').css('display', '');
                $('.dropdown a.dropdown-item').removeClass('active');
                activeDropdown = null;
                activeSubmenu = null;
            }
        }
        
        function showSubmenu($stateItem, $submenu) {
            // Ensure no inline display:none blocks visibility
            $submenu.css('display', '').addClass('show');
            $stateItem.addClass('active');
            activeSubmenu = $submenu;
        }
        
        function hideSubmenu($stateItem, $submenu) {
            $submenu.removeClass('show').css('display', '');
            $stateItem.removeClass('active');
            if (activeSubmenu === $submenu) {
                activeSubmenu = null;
            }
        }
        
        // Mobile touch handling for submenu items in mobile overlay
        if ('ontouchstart' in window) {
            $('.mobile-nav-overlay').on('touchstart', '.menu-item-has-children > a', function(e) {
                e.preventDefault();
                const $li = $(this).closest('li');
                $li.toggleClass('open');
                $li.children('.sub-menu').slideToggle(200);
            });
        }
        
        // Click outside to close dropdowns
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown-parent').length) {
                hideAllDropdowns();
            }
        });
        
        // Keyboard navigation
        $('.nav-menu a').on('keydown', function(e) {
            const $link = $(this);
            const $parent = $link.closest('li');
            
            if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                e.preventDefault();
                navigateMenu($link, e.key === 'ArrowDown' ? 'down' : 'up');
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                if ($parent.hasClass('has-submenu') || $parent.hasClass('dropdown-parent')) {
                    const $submenu = $parent.find('> .dropdown, > .submenu');
                    $submenu.show();
                    $submenu.find('a').first().focus();
                }
            } else if (e.key === 'ArrowLeft') {
                e.preventDefault();
                const $parentMenu = $link.closest('.dropdown, .submenu').parent();
                if ($parentMenu.length) {
                    $parentMenu.find('> a').focus();
                    $link.closest('.dropdown, .submenu').hide();
                }
            } else if (e.key === 'Escape') {
                hideAllDropdowns();
                $('.nav-menu > li > a').first().focus();
            }
        });
        
        function hideAllDropdowns() {
            $('.dropdown').removeClass('show').css('display', '');
            $('.submenu').removeClass('show').css('display', '');
            $('.dropdown-parent, .has-submenu').removeClass('active');
        }
        
        function positionSubmenu($submenu) {
            // Reset positioning first
            $submenu.css({
                left: 'calc(100% - 2px)',
                right: 'auto',
                top: '0',
                bottom: 'auto',
                marginLeft: '0',
                marginRight: '0'
            });
            
            const submenuOffset = $submenu.offset();
            const submenuWidth = $submenu.outerWidth();
            const submenuHeight = $submenu.outerHeight();
            const windowWidth = $(window).width();
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            
            // Check if submenu goes off-screen horizontally
            if (submenuOffset && submenuOffset.left + submenuWidth > windowWidth) {
                $submenu.css({
                    left: 'auto',
                    right: 'calc(100% - 2px)',
                    marginLeft: 0,
                    marginRight: '0'
                });
            }
            
            // Check if submenu goes off-screen vertically
            if (submenuOffset && submenuOffset.top + submenuHeight > scrollTop + windowHeight) {
                $submenu.css({
                    top: 'auto',
                    bottom: '0'
                });
            }
        }
        
        
        function navigateMenu($currentLink, direction) {
            const $menuContainer = $currentLink.closest('.dropdown, .submenu, .nav-menu-list');
            const $allLinks = $menuContainer.find('> li > a, > a');
            const currentIndex = $allLinks.index($currentLink);
            
            let nextIndex;
            if (direction === 'down') {
                nextIndex = (currentIndex + 1) % $allLinks.length;
            } else {
                nextIndex = (currentIndex - 1 + $allLinks.length) % $allLinks.length;
            }
            
            $allLinks.eq(nextIndex).focus();
        }
    }

    /**
     * Smooth Scrolling
     */
    function initSmoothScrolling() {
        // Handle anchor links
        $('a[href^="#"]').on('click', function(e) {
            const $target = $($(this).attr('href'));
            
            if ($target.length) {
                e.preventDefault();
                smoothScrollTo($target);
            }
        });

        // Global smooth scroll function
        window.smoothScroll = function(target) {
            const $target = $(target);
            if ($target.length) {
                smoothScrollTo($target);
            }
        };

        function smoothScrollTo($target) {
            const headerHeight = $('.site-header').outerHeight() || 0;
            const targetOffset = $target.offset().top - headerHeight - 20;

            $('html, body').animate({
                scrollTop: targetOffset
            }, 800, 'easeInOutCubic');
        }
    }

    /**
     * Scroll Animations
     */
    function initScrollAnimations() {
        const $animateElements = $('.animate-on-scroll');
        
        if ($animateElements.length === 0) return;

        // Create intersection observer for better performance
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        $(entry.target).addClass('animate');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            $animateElements.each(function() {
                observer.observe(this);
            });
        } else {
            // Fallback for browsers without IntersectionObserver
            $(window).on('scroll', throttle(checkScrollAnimations, 100));
            checkScrollAnimations(); // Check on load
        }

        function checkScrollAnimations() {
            const windowTop = $(window).scrollTop();
            const windowHeight = $(window).height();

            $animateElements.not('.animate').each(function() {
                const $element = $(this);
                const elementTop = $element.offset().top;

                if (elementTop < windowTop + windowHeight - 50) {
                    $element.addClass('animate');
                }
            });
        }
    }

    /**
     * Header Scroll Effects
     */
    function initHeaderScroll() {
        const $header = $('.site-header');
        let lastScroll = 0;

        $(window).on('scroll', throttle(function() {
            const currentScroll = $(window).scrollTop();

            // Add scrolled class for styling
            if (currentScroll > 100) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }

            lastScroll = currentScroll;
        }, 100));
    }

    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const $backToTop = $('#back-to-top');
        
        if ($backToTop.length === 0) return;

        $(window).on('scroll', throttle(function() {
            const scrollTop = $(window).scrollTop();
            
            if (scrollTop > 500) {
                $backToTop.addClass('show').fadeIn();
            } else {
                $backToTop.removeClass('show').fadeOut();
            }
        }, 100));

        $backToTop.on('click', function(e) {
            e.preventDefault();
            
            $('html, body').animate({
                scrollTop: 0
            }, 600, 'easeInOutCubic');
        });
    }

    /**
     * Contact Form Enhancement
     */
    function initContactForm() {
        const $contactForm = $('.contact-form');
        
        if ($contactForm.length === 0) return;

        // Real-time validation
        $contactForm.find('input, textarea, select').on('blur', function() {
            validateField($(this));
        });

        // Form submission
        $contactForm.on('submit', function(e) {
            let isValid = true;
            
            // Validate all required fields
            $(this).find('[required]').each(function() {
                if (!validateField($(this))) {
                    isValid = false;
                }
            });

            if (!isValid) {
                e.preventDefault();
                showFormMessage('Please fill in all required fields correctly.', 'error');
                
                // Focus first invalid field
                $contactForm.find('.error').first().focus();
            } else {
                // Show loading state
                const $submitBtn = $(this).find('button[type="submit"]');
                $submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Sending...');
            }
        });

        function validateField($field) {
            const value = $field.val().trim();
            const fieldType = $field.attr('type');
            const isRequired = $field.prop('required');
            let isValid = true;

            // Remove previous error state
            $field.removeClass('error').siblings('.field-error').remove();

            // Check required fields
            if (isRequired && !value) {
                isValid = false;
                showFieldError($field, 'This field is required.');
            }

            // Email validation
            if (fieldType === 'email' && value && !isValidEmail(value)) {
                isValid = false;
                showFieldError($field, 'Please enter a valid email address.');
            }

            // Phone validation (basic)
            if (fieldType === 'tel' && value && !isValidPhone(value)) {
                isValid = false;
                showFieldError($field, 'Please enter a valid phone number.');
            }

            return isValid;
        }

        function showFieldError($field, message) {
            $field.addClass('error');
            $('<div class="field-error">' + message + '</div>').insertAfter($field);
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPhone(phone) {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            return phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''));
        }

        function showFormMessage(message, type) {
            const $message = $('<div class="form-message ' + type + '">' + message + '</div>');
            $contactForm.prepend($message);
            
            setTimeout(function() {
                $message.fadeOut(function() {
                    $(this).remove();
                });
            }, 5000);
        }
    }

    /**
     * Animated Statistics Counters
     */
    function initStatCounters() {
        const $statNumbers = $('.stat-card .number[data-count]');
        
        if ($statNumbers.length === 0) return;

        // Use intersection observer to trigger animation when visible
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounter($(entry.target));
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            $statNumbers.each(function() {
                observer.observe(this);
            });
        } else {
            // Fallback
            $(window).on('scroll', throttle(function() {
                $statNumbers.each(function() {
                    const $this = $(this);
                    if (!$this.hasClass('animated') && isElementInViewport(this)) {
                        animateCounter($this);
                    }
                });
            }, 100));
        }

        function animateCounter($element) {
            if ($element.hasClass('animated')) return;
            
            $element.addClass('animated');
            
            const finalValue = $element.data('count');
            const displayValue = $element.text();
            const isPercentage = displayValue.includes('%');
            const hasPlus = displayValue.includes('+');
            const hasHash = displayValue.includes('#');
            
            let startValue = 0;
            const increment = finalValue / 50; // 50 steps for smooth animation
            
            const timer = setInterval(function() {
                startValue += increment;
                
                if (startValue >= finalValue) {
                    startValue = finalValue;
                    clearInterval(timer);
                }
                
                let displayText = Math.floor(startValue);
                
                if (hasHash) displayText = '#' + displayText;
                if (hasPlus && startValue >= finalValue) displayText += '+';
                if (isPercentage) displayText += '%';
                
                $element.text(displayText);
            }, 30);
        }
    }

    /**
     * Video Controls Enhancement
     */
    function initVideoControls() {
        const $heroVideo = $('.hero-video');
        
        if ($heroVideo.length === 0) return;

        // Ensure video plays on mobile (where autoplay might be blocked)
        $heroVideo.on('canplaythrough', function() {
            if (this.paused) {
                this.play().catch(function(error) {
                    console.log('Video autoplay was prevented:', error);
                });
            }
        });

        // Pause video when not visible (performance optimization)
        if ('IntersectionObserver' in window) {
            const videoObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    const video = entry.target;
                    if (entry.isIntersecting) {
                        video.play().catch(function() {});
                    } else {
                        video.pause();
                    }
                });
            }, {
                threshold: 0.1
            });

            $heroVideo.each(function() {
                videoObserver.observe(this);
            });
        }
    }

    /**
     * Accessibility Enhancements
     */
    function initAccessibility() {
        // Skip link functionality
        $('.skip-link').on('click', function(e) {
            e.preventDefault();
            const target = $($(this).attr('href'));
            if (target.length) {
                target.attr('tabindex', '-1').focus();
            }
        });

        // Keyboard navigation for dropdown menus
        $('.dropdown').on('keydown', function(e) {
            const $dropdown = $(this);
            const $toggle = $dropdown.find('> a');
            const $menu = $dropdown.find('.dropdown-content');
            
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                $menu.toggle();
                $menu.find('a').first().focus();
            }
            
            if (e.key === 'Escape') {
                $menu.hide();
                $toggle.focus();
            }
        });

        // Focus management for modal-like mobile menu
        $('#mobile-nav-overlay').on('keydown', function(e) {
            if (e.key === 'Tab') {
                trapFocus(e, this);
            }
        });

        function trapFocus(e, container) {
            const focusableElements = $(container).find('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])').filter(':visible');
            const firstElement = focusableElements.first();
            const lastElement = focusableElements.last();

            if (e.shiftKey && $(document.activeElement).is(firstElement)) {
                e.preventDefault();
                lastElement.focus();
            } else if (!e.shiftKey && $(document.activeElement).is(lastElement)) {
                e.preventDefault();
                firstElement.focus();
            }
        }

        // Add focus indicators for keyboard users
        $(document).on('keydown', function(e) {
            if (e.key === 'Tab') {
                $('body').addClass('keyboard-navigation');
            }
        });

        $(document).on('mousedown', function() {
            $('body').removeClass('keyboard-navigation');
        });
    }

    /**
     * Utility Functions
     */
    
    // Throttle function for performance
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        }
    }

    // Check if element is in viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        return rect.top <= windowHeight && rect.bottom >= 0;
    }

    // Custom easing for jQuery animations
    $.easing.easeInOutCubic = function(x) {
        return x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
    };

    // Handle window resize events
    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Recalculate animations on resize
            $('.animate-on-scroll.animate').removeClass('animate');
            // Removed the call to checkScrollAnimations as it's not in scope here
        }, 250);
    });

    // Add CSS for body states
    const additionalCSS = `
        <style>
            body.menu-open {
                overflow: hidden;
            }
            
            body.keyboard-navigation *:focus {
                outline: 2px solid #98fb98 !important;
                outline-offset: 2px;
            }
            
            .field-error {
                color: #ff4444;
                font-size: 0.9rem;
                margin-top: 5px;
                display: block;
            }
            
            .form-message {
                padding: 15px 20px;
                border-radius: 8px;
                margin-bottom: 20px;
                display: flex;
                align-items: center;
                gap: 10px;
            }
            
            .form-message.error {
                background: rgba(255, 68, 68, 0.1);
                border: 1px solid rgba(255, 68, 68, 0.3);
                color: #d32f2f;
            }
            
            .form-message.success {
                background: rgba(152, 251, 152, 0.1);
                border: 1px solid rgba(152, 251, 152, 0.3);
                color: #2e5d2e;
            }
            
            .contact-form .error {
                border-color: #ff4444 !important;
                background: rgba(255, 68, 68, 0.05) !important;
            }
            
            @media (max-width: 768px) {
                body.menu-open .site-header {
                    position: fixed;
                    z-index: 10000;
                }
            }
        </style>
    `;
    
    $('head').append(additionalCSS);

})(jQuery);
