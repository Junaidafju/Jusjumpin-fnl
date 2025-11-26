<?php
// themes/jusjumpin/inc/popup-manager.php

if (!class_exists('Popup_Manager')) {
    
    class Popup_Manager {
        
        private $popups = array();
        
        public function __construct() {
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action('wp_footer', array($this, 'render_popups'));
            add_action('wp_ajax_hide_popup', array($this, 'hide_popup'));
            add_action('wp_ajax_nopriv_hide_popup', array($this, 'hide_popup'));
        }
        
        public function enqueue_scripts() {
            wp_enqueue_script('jquery');
            wp_enqueue_script('jusjumpin-popup-js', get_template_directory_uri() . '/assets/js/popup.js', array('jquery'), '1.0.0', true);
            wp_enqueue_style('jusjumpin-popup-css', get_template_directory_uri() . '/assets/css/popup.css', array(), '1.0.0');
            
            // Localize script for AJAX
            wp_localize_script('jusjumpin-popup-js', 'popup_ajax', array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('popup_nonce')
            ));
        }
        
        public function register_popup($id, $config = array()) {
            $defaults = array(
                'title' => '',
                'content' => '',
                'trigger' => 'auto',
                'delay' => 2000,
                'scroll_percentage' => 50,
                'show_once' => true,
                'expire_days' => 30,
                'pages' => array(),
                'exclude_pages' => array(),
                'styles' => array(),
                'classes' => ''
            );
            
            $this->popups[$id] = wp_parse_args($config, $defaults);
        }
        
        public function render_popups() {
            foreach ($this->popups as $id => $popup) {
                if ($this->should_show_popup($id, $popup)) {
                    $this->render_single_popup($id, $popup);
                }
            }
        }
        
        private function should_show_popup($id, $popup) {
            // Check if user has dismissed this popup
            if ($popup['show_once'] && $this->is_popup_dismissed($id)) {
                return false;
            }
            
            // Check specific pages
            if (!empty($popup['pages'])) {
                if (!is_page($popup['pages']) && !is_front_page()) {
                    return false;
                }
            }
            
            // Check excluded pages
            if (!empty($popup['exclude_pages'])) {
                if (is_page($popup['exclude_pages']) || is_front_page()) {
                    return false;
                }
            }
            
            return true;
        }
        
        private function is_popup_dismissed($popup_id) {
            if (isset($_COOKIE['popup_dismissed_' . $popup_id])) {
                return true;
            }
            return false;
        }
        
        private function render_single_popup($id, $popup) {
            ?>
            <div id="popup-<?php echo esc_attr($id); ?>" 
                 class="custom-popup jusjumpin-popup <?php echo esc_attr($popup['classes']); ?>" 
                 data-popup-id="<?php echo esc_attr($id); ?>"
                 data-trigger="<?php echo esc_attr($popup['trigger']); ?>"
                 data-delay="<?php echo esc_attr($popup['delay']); ?>"
                 data-scroll-percentage="<?php echo esc_attr($popup['scroll_percentage']); ?>"
                 data-show-once="<?php echo esc_attr($popup['show_once']); ?>"
                 data-expire-days="<?php echo esc_attr($popup['expire_days']); ?>"
                 data-popup-width="<?php echo esc_attr($popup['styles']['width'] ?? ''); ?>"
                 data-popup-max-height="<?php echo esc_attr($popup['styles']['max-height'] ?? ''); ?>"
                 style="display: none;" // Always start hidden
                 >
                <div class="popup-overlay"></div>
                <div class="popup-content">
                    <button class="popup-close" aria-label="Close popup">&times;</button>
                    
                    <?php if (!empty($popup['title'])): ?>
                        <h3 class="popup-title"><?php echo esc_html($popup['title']); ?></h3>
                    <?php endif; ?>
                    
                    <div class="popup-body">
                        <?php echo wp_kses_post($popup['content']); ?>
                    </div>
                </div>
            </div>
            <?php
        }
        
        public function hide_popup() {
            check_ajax_referer('popup_nonce', 'nonce');
            
            $popup_id = sanitize_text_field($_POST['popup_id']);
            $expire_days = isset($_POST['expire_days']) ? intval($_POST['expire_days']) : 30;
            
            setcookie('popup_dismissed_' . $popup_id, 'true', time() + (86400 * $expire_days), '/');
            
            wp_die();
        }
    }

    // Initialize the popup manager
    function init_popup_manager() {
        global $popup_manager;
        $popup_manager = new Popup_Manager();
    }
    add_action('init', 'init_popup_manager');
}
?>