// themes/jusjumpin/assets/js/popup.js

(function($) {
    'use strict';
    
    class PopupManager {
        constructor() {
            this.visiblePopups = [];
            this.scrollTriggered = {};
            this.exitIntentTriggered = {};
            this.init();
        }
        
        init() {
            this.bindEvents();
            this.autoShowPopups();
        }
        
        bindEvents() {
            const self = this;
            
            // Close button
            $(document).on('click', '.popup-close', function(e) {
                e.preventDefault();
                e.stopPropagation();
                self.hidePopup($(this).closest('.custom-popup'));
            });
            
            // Overlay click
            $(document).on('click', '.popup-overlay', function(e) {
                if ($(e.target).hasClass('popup-overlay')) {
                    self.hidePopup($(this).closest('.custom-popup'));
                }
            });
            
            // ESC key
            $(document).on('keyup', function(e) {
                if (e.keyCode === 27) {
                    self.hideAllPopups();
                }
            });
            
            // Scroll trigger
            $(window).on('scroll', this.throttle(() => {
                self.checkScrollTriggers();
            }, 100));
            
            // Manual trigger buttons
            $(document).on('click', '[data-popup-trigger]', function(e) {
                e.preventDefault();
                const popupId = $(this).data('popup-trigger');
                self.triggerPopup(popupId);
            });
            
            // Exit intent detection
            $(document).on('mouseleave', this.throttle((e) => {
                if (e.clientY < 0) {
                    self.checkExitIntentTriggers();
                }
            }, 100));
            
            // Prevent body scroll when popup is open
            $(document).on('touchmove', function(e) {
                if ($('body').hasClass('popup-open')) {
                    e.preventDefault();
                }
            });
        }
        
        throttle(func, limit) {
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
        
        autoShowPopups() {
            $('.custom-popup[data-trigger="auto"]').each((index, element) => {
                const $popup = $(element);
                const delay = $popup.data('delay') || 2000;
                
                setTimeout(() => {
                    if (!this.isPopupVisible($popup)) {
                        this.showPopup($popup);
                    }
                }, delay);
            });
            
            // Exit intent popups
            $('.custom-popup[data-trigger="exit"]').each((index, element) => {
                const $popup = $(element);
                this.exitIntentTriggered[$popup.data('popup-id')] = false;
            });
        }
        
        checkScrollTriggers() {
            $('.custom-popup[data-trigger="scroll"]').each((index, element) => {
                const $popup = $(element);
                const popupId = $popup.data('popup-id');
                const scrollPercent = $popup.data('scroll-percentage') || 50;
                
                if (!this.scrollTriggered[popupId] && this.getScrollPercentage() >= scrollPercent) {
                    this.scrollTriggered[popupId] = true;
                    this.showPopup($popup);
                }
            });
        }
        
        checkExitIntentTriggers() {
            $('.custom-popup[data-trigger="exit"]').each((index, element) => {
                const $popup = $(element);
                const popupId = $popup.data('popup-id');
                
                if (!this.exitIntentTriggered[popupId] && !this.isPopupVisible($popup)) {
                    this.exitIntentTriggered[popupId] = true;
                    this.showPopup($popup);
                }
            });
        }
        
        getScrollPercentage() {
            const windowHeight = $(window).height();
            const documentHeight = $(document).height();
            const scrollTop = $(window).scrollTop();
            
            const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
            return Math.min(100, Math.max(0, scrollPercent));
        }
        
        showPopup($popup) {
            if (this.isPopupVisible($popup)) return;
            
            const popupId = $popup.data('popup-id');
            
            // Add to visible popups
            this.visiblePopups.push(popupId);
            
            // Apply dynamic width and max-height from data attributes
            const popupWidth = $popup.data('popup-width');
            const popupMaxHeight = $popup.data('popup-max-height');

            if (popupWidth) {
                $popup.find('.popup-content').css('width', popupWidth);
                $popup.find('.popup-content').css('max-width', popupWidth); // Also apply to max-width to respect bounds
            }
            if (popupMaxHeight) {
                $popup.find('.popup-content').css('max-height', popupMaxHeight);
            }

            // Show popup with animation
            $popup.fadeIn(300, () => {
                $('body').addClass('popup-open');
                
                // Focus management for accessibility
                $popup.find('.popup-close').focus();
                
                // Dispatch custom event
                $(document).trigger('popup:shown', [popupId, $popup]);
            });
            
            // Analytics tracking (optional)
            this.trackPopupView(popupId);
        }
        
        hidePopup($popup) {
            const popupId = $popup.data('popup-id');
            const showOnce = $popup.data('show-once');
            const expireDays = $popup.data('expire-days') || 30;
            
            // Remove from visible popups
            this.visiblePopups = this.visiblePopups.filter(id => id !== popupId);
            
            $popup.fadeOut(300, () => {
                if (this.visiblePopups.length === 0) {
                    $('body').removeClass('popup-open');
                }
                
                // Dispatch custom event
                $(document).trigger('popup:hidden', [popupId, $popup]);
            });
            
            // If show once, set cookie via AJAX
            if (showOnce) {
                this.setDismissCookie(popupId, expireDays);
            }
        }
        
        hideAllPopups() {
            $('.custom-popup').each((index, element) => {
                const $popup = $(element);
                if (this.isPopupVisible($popup)) {
                    this.hidePopup($popup);
                }
            });
        }
        
        isPopupVisible($popup) {
            return $popup.is(':visible');
        }
        
        setDismissCookie(popupId, expireDays) {
            $.ajax({
                url: popup_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'hide_popup',
                    popup_id: popupId,
                    expire_days: expireDays,
                    nonce: popup_ajax.nonce
                },
                success: (response) => {
                    console.log('Popup dismissed:', popupId);
                },
                error: (xhr, status, error) => {
                    console.error('Error dismissing popup:', error);
                    // Fallback: set cookie directly
                    document.cookie = `popup_dismissed_${popupId}=true; max-age=${86400 * expireDays}; path=/`;
                }
            });
        }
        
        trackPopupView(popupId) {
            // Google Analytics 4
            if (typeof gtag !== 'undefined') {
                gtag('event', 'popup_view', {
                    'event_category': 'popup',
                    'event_label': popupId,
                    'value': 1
                });
            }
            
            // Legacy Google Analytics
            if (typeof ga !== 'undefined') {
                ga('send', 'event', 'Popup', 'View', popupId);
            }
            
            // Custom event for other analytics
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({
                    'event': 'popupView',
                    'popupId': popupId
                });
            }
        }
        
        // Public method to manually trigger popup
        triggerPopup(popupId) {
            const $popup = $(`#popup-${popupId}`);
            if ($popup.length && !this.isPopupVisible($popup)) {
                this.showPopup($popup);
                return true;
            }
            return false;
        }
        
        // Public method to check if popup is dismissed
        isPopupDismissed(popupId) {
            return document.cookie.includes(`popup_dismissed_${popupId}=true`);
        }
        
        // Public method to reset popup dismissal
        resetPopup(popupId) {
            document.cookie = `popup_dismissed_${popupId}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
            this.scrollTriggered[popupId] = false;
            this.exitIntentTriggered[popupId] = false;
        }
        
        // Public method to get all registered popups
        getRegisteredPopups() {
            return $('.custom-popup').map(function() {
                return $(this).data('popup-id');
            }).get();
        }
    }
    
    // Initialize when document is ready
    $(document).ready(() => {
        // Check if popup manager already exists
        if (typeof window.popupManager === 'undefined') {
            window.popupManager = new PopupManager();
            
            // Dispatch ready event
            $(document).trigger('popup:ready');
            
            console.log('Jus Jumpin Popup Manager initialized');
        }
    });
    
    // Export for global access
    if (typeof module !== 'undefined' && module.exports) {
        module.exports = PopupManager;
    }
    
})(jQuery);