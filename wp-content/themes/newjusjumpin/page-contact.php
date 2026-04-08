<?php
/**
 *
 * Template Name: Contact Page
 *
 * @package NewJusJumpin
 * @version 1.0.0
 */

get_header(); ?>

<!-- Contact Hero -->
<section class="jj-contact-hero">
	<div class="jj-contact-hero__bg" aria-hidden="true" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/contact-hero.svg' ); ?>');"></div>
    <div class="container">
        <div class="jj-contact-hero__inner">
            <div class="jj-contact-hero__col jj-contact-hero__content animate-on-scroll slide-left">
                <h1 class="jj-contact-hero__title"><?php esc_html_e('Contact Us', 'newjusjumpin'); ?></h1>
                <p class="jj-contact-hero__subtitle"><?php esc_html_e("Get in touch with us — we'd love to hear from you!", 'newjusjumpin'); ?></p>
            </div>
            <div class="jj-contact-hero__col jj-contact-hero__visual animate-on-scroll slide-right">
                <div class="jj-contact-hero__image-wrap" aria-hidden="true">
                    <img class="jj-contact-hero__image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/kids-Conthero.svg' ); ?>" alt="Contact support illustration">
                </div>
            </div>
        </div>
    </div>
    <div class="jj-contact-hero__mesh" aria-hidden="true"></div>
    <div class="jj-contact-hero__fade" aria-hidden="true"></div>
</section>

<!-- Message Section Overlay -->
<div class="message-overlay-section">
    <div class="container">
        <div class="message-overlay-card animate-on-scroll fade-up">
            <div class="overlay-card-inner">
                <!-- Decorative Elements -->
                <div class="overlay-card-decor">
                    <div class="decor-dot"></div>
                    <div class="decor-dot"></div>
                    <div class="decor-dot"></div>
                </div>
                
                <!-- Main Content -->
                <div class="overlay-card-content">
                    <div class="overlay-icon" aria-hidden="true">
                        <i class="fas fa-bolt"></i>
                    </div>
                    
                    <h2 class="overlay-title"><?php esc_html_e('Skip the Wait, Start the Fun!', 'newjusjumpin'); ?></h2>
                    
                    <p class="overlay-message">
                        <?php esc_html_e('Visit your nearest Jus Jumpin Facility for quick and hassle-free ticket booking directly from our counter & go Jumpin\'', 'newjusjumpin'); ?>
                    </p>
                    
                    <!-- Quick Features -->
                    <div class="overlay-features">
                        <div class="overlay-feature">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('Zero Waiting Time', 'newjusjumpin'); ?></span>
                        </div>
                        <div class="overlay-feature">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('Counter-Only Rates', 'newjusjumpin'); ?></span>
                        </div>
                        <div class="overlay-feature">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('Instant Confirmation', 'newjusjumpin'); ?></span>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="overlay-actions">
                        <a href="#contact-name-section" 
                           class="overlay-btn overlay-btn-birthday">
                            <i class="fas fa-birthday-cake"></i>
                            <div class="btn-text">
                                <span class="btn-main"><?php esc_html_e('Book Birthday Party', 'newjusjumpin'); ?></span>
                                <span class="btn-sub"><?php esc_html_e('Secure your date now!', 'newjusjumpin'); ?></span>
                            </div>
                        </a>
                        
                        <a href="tel:+919830359999" 
                           class="overlay-btn overlay-btn-call" 
                           aria-label="<?php esc_attr_e('Call for instant booking', 'newjusjumpin'); ?>">
                            <i class="fas fa-phone-alt"></i>
                            <div class="btn-text">
                                <span class="btn-main"><?php esc_html_e('Call Now', 'newjusjumpin'); ?></span>
                                <span class="btn-sub"><?php esc_html_e('Speak with our team', 'newjusjumpin'); ?></span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Badge -->
                <div class="overlay-badge" aria-hidden="true">
                    <span><?php esc_html_e('FAST TRACK', 'newjusjumpin'); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mesh Green Background Section -->
<section class="contact-mesh-bg">
    <!-- Mesh Pattern -->
    <div class="mesh-pattern" aria-hidden="true"></div>
    
    <!-- Contact Section with Elegant Form -->
    <div class="container">
        <div class="contact-elegant-wrapper">
            
            <!-- Left Column: Elegant Contact Form -->
            <div class="contact-form-elegant animate-on-scroll slide-left">
                <?php
                // Display success/error messages
                if (isset($_GET['contact'])) {
                    if ($_GET['contact'] === 'success') {
                        echo '<div class="form-message-elegant success-message">';
                        echo '<i class="fas fa-check-circle" aria-hidden="true"></i>';
                        echo '<p>' . esc_html__('Thank you! We\'ll get back to you within 24 hours.', 'newjusjumpin') . '</p>';
                        echo '</div>';
                    } elseif ($_GET['contact'] === 'error') {
                        echo '<div class="form-message-elegant error-message">';
                        echo '<i class="fas fa-exclamation-circle" aria-hidden="true"></i>';
                        echo '<p>' . esc_html__('Oops! Something went wrong. Please try again.', 'newjusjumpin') . '</p>';
                        echo '</div>';
                    }
                }
                ?>

                <div class="elegant-form-card">
                    <div class="form-header-elegant">
                        <h2 id="contact-form"><?php esc_html_e('Send us a Message', 'newjusjumpin'); ?></h2>
                        <p><?php esc_html_e('Have a question or want to book a session? Fill out the form below and we\'ll respond as soon as possible.', 'newjusjumpin'); ?></p>
                    </div>

                    <!-- Fallback CSS: ensures honeypot stays hidden if theme stylesheet is missing or cached -->
                    <style>
                    /* Honeypot fallback - keeps field visually hidden while remaining in DOM */
                    .jj-hp{position:absolute !important;left:-10000px !important;width:1px !important;height:1px !important;overflow:hidden !important;clip:rect(1px,1px,1px,1px) !important;white-space:nowrap !important;border:0 !important}
                    </style>
                    <form class="elegant-contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" novalidate>
                        <?php wp_nonce_field('newjusjumpin_contact', 'newjusjumpin_contact_nonce'); ?>
                        <input type="hidden" name="action" value="contact_form">
                        <div class="jj-hp" aria-hidden="true">
                            <label for="contact_website_field">Company</label>
                            <input id="contact_website_field" name="contact_website" type="text" autocomplete="off" tabindex="-1" />
                        </div>

                        <!-- Name Section with ID for scrolling -->
                        <div class="form-section-elegant" id="contact-name-section">
                            <label for="contact_name" class="form-label-elegant">
                                <i class="fas fa-user"></i>
                                <?php esc_html_e('Full Name', 'newjusjumpin'); ?>
                                <span class="required-elegant">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="contact_name" 
                                name="contact_name" 
                                required 
                                autocomplete="name"
                                class="elegant-input"
                                placeholder="<?php esc_attr_e('Enter your full name', 'newjusjumpin'); ?>"
                            >
                        </div>

                        <div class="form-row-elegant">
                            <div class="form-section-elegant">
                                <label for="contact_email" class="form-label-elegant">
                                    <i class="fas fa-envelope"></i>
                                    <?php esc_html_e('Email Address', 'newjusjumpin'); ?>
                                    <span class="required-elegant">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="contact_email" 
                                    name="contact_email" 
                                    required 
                                    autocomplete="email"
                                    class="elegant-input"
                                    placeholder="<?php esc_attr_e('your.email@example.com', 'newjusjumpin'); ?>"
                                >
                            </div>

                            <div class="form-section-elegant">
                                <label for="contact_phone" class="form-label-elegant">
                                    <i class="fas fa-phone"></i>
                                    <?php esc_html_e('Mobile Number', 'newjusjumpin'); ?>
                                    <span class="required-elegant">*</span>
                                </label>
                                <input 
                                    type="tel" 
                                    id="contact_phone" 
                                    name="contact_phone" 
                                    required
                                    autocomplete="tel"
                                    class="elegant-input"
                                    placeholder="<?php esc_attr_e('+91 98765 43210', 'newjusjumpin'); ?>"
                                >
                            </div>
                        </div>

                        <div class="form-section-elegant">
                            <label for="contact_subject" class="form-label-elegant">
                                <i class="fas fa-tag"></i>
                                <?php esc_html_e('Subject', 'newjusjumpin'); ?>
                                <span class="required-elegant">*</span>
                            </label>
                            <div class="select-wrapper">
                                <select id="contact_subject" name="contact_subject" required class="elegant-select">
                                    <option value=""><?php esc_html_e('Select a topic...', 'newjusjumpin'); ?></option>
                                    <option value="booking"><?php esc_html_e('Booking & Reservations', 'newjusjumpin'); ?></option>
                                    <option value="birthday" selected><?php esc_html_e('Birthday Parties', 'newjusjumpin'); ?></option>
                                    <option value="general"><?php esc_html_e('General Inquiry', 'newjusjumpin'); ?></option>
                                    <option value="feedback"><?php esc_html_e('Feedback & Suggestions', 'newjusjumpin'); ?></option>
                                    <option value="corporate"><?php esc_html_e('Corporate Events', 'newjusjumpin'); ?></option>
                                    <option value="other"><?php esc_html_e('Other', 'newjusjumpin'); ?></option>
                                </select>
                                <i class="fas fa-chevron-down select-arrow"></i>
                            </div>
                        </div>

                        <div class="form-section-elegant">
                            <label for="contact_message" class="form-label-elegant">
                                <i class="fas fa-comment"></i>
                                <?php esc_html_e('Message', 'newjusjumpin'); ?>
                                <span class="required-elegant">*</span>
                            </label>
                            <textarea 
                                id="contact_message" 
                                name="contact_message" 
                                rows="6" 
                                required 
                                class="elegant-textarea"
                                placeholder="<?php esc_attr_e('Tell us how we can help you...', 'newjusjumpin'); ?>"
                            ></textarea>
                        </div>

                        <div class="form-actions-elegant">
                            <button type="submit" class="btn-elegant-submit">
                                <i class="fas fa-paper-plane"></i>
                                <?php esc_html_e('Send Message', 'newjusjumpin'); ?>
                            </button>
                        </div>

                        <div class="form-footer-elegant">
                            <p><i class="fas fa-lock"></i> <?php esc_html_e('Your information is secure and private', 'newjusjumpin'); ?></p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Contact Information -->
            <div class="contact-info-elegant animate-on-scroll slide-right">
                <div class="info-card-elegant">
                    <div class="info-header-elegant">
                        <h2><?php esc_html_e('Quick Connect', 'newjusjumpin'); ?></h2>
                        <p><?php esc_html_e('We\'re here to help with bookings, birthdays, marketing and events.', 'newjusjumpin'); ?></p>
                    </div>

                    <div class="info-content-elegant">
                        <!-- Address -->
                        <div class="info-item-elegant">
                            <div class="info-icon-elegant address-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-text-elegant">
                                <h3><?php esc_html_e('Our Address', 'newjusjumpin'); ?></h3>
                                <p>PS Qube, Street No. 1111,<br>Action Area IID, Rajarhat, Newtown,<br>West Bengal 700156</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="info-item-elegant">
                            <div class="info-icon-elegant email-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-text-elegant">
                                <h3><?php esc_html_e('Email Us', 'newjusjumpin'); ?></h3>
                                <a href="mailto:info@jusjumpin.com" class="info-link-elegant">
                                    info@jusjumpin.com
                                </a>
                            </div>
                        </div>

                        <!-- Booking & Birthday -->
                        <div class="info-item-elegant">
                            <div class="info-icon-elegant birthday-icon">
                                <i class="fas fa-birthday-cake"></i>
                            </div>
                            <div class="info-text-elegant">
                                <h3><?php esc_html_e('Booking & Birthdays', 'newjusjumpin'); ?></h3>
                                <div class="phone-list-elegant">
                                    <a href="tel:+919830359999" class="info-link-elegant">
                                        <i class="fas fa-phone"></i> +91 9830359999
                                    </a>
                                    <a href="tel:+919874206206" class="info-link-elegant">
                                        <i class="fas fa-phone"></i> +91 9874206206
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Marketing -->
                        <div class="info-item-elegant">
                            <div class="info-icon-elegant marketing-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="info-text-elegant">
                                <h3><?php esc_html_e('Marketing Queries', 'newjusjumpin'); ?></h3>
                                <a href="tel:+919230967166" class="info-link-elegant">
                                    <i class="fas fa-phone"></i> +91 9230967166
                                </a>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="social-section-elegant">
                            <h3><?php esc_html_e('Follow Our Journey', 'newjusjumpin'); ?></h3>
                            <div class="social-links-elegant">
                                <a href="https://www.facebook.com/jusjumpin/" target="_blank" rel="noopener" class="social-link-elegant fb-link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.youtube.com/@jusjumpin" target="_blank" rel="noopener" class="social-link-elegant yt-link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://www.instagram.com/jusjumpin" target="_blank" rel="noopener" class="social-link-elegant ig-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <!-- WhatsApp CTA -->
                        <div class="whatsapp-cta-elegant">
                            <a href="https://wa.me/919830359999" target="_blank" rel="noopener" class="btn-whatsapp-elegant">
                                <i class="fab fa-whatsapp"></i>
                                <?php esc_html_e('Chat with Us', 'newjusjumpin'); ?>
                            </a>
                        </div>

                        <!-- Operating Hours -->
                        <div class="hours-info-elegant">
                            <i class="fas fa-clock"></i>
                            <span><?php esc_html_e('Open Daily: 10 AM - 9 PM', 'newjusjumpin'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form message handling
    try {
        var params = new URLSearchParams(window.location.search);
        var status = params.get('contact');
        if (status === 'success') {
            setTimeout(function() {
                alert('Thank you! Your message has been sent successfully.');
                window.location.replace('<?php echo esc_url( get_permalink() ); ?>');
            }, 500);
        } else if (status === 'error') {
            setTimeout(function() {
                alert('Sorry, there was an error sending your message. Please try again.');
                window.location.replace('<?php echo esc_url( get_permalink() ); ?>');
            }, 500);
        }
    } catch (e) {}
    
    // Birthday Party Button Scroll Function
    document.querySelectorAll('.scroll-to-form').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const nameSection = document.getElementById('contact-name-section');
            const subjectSelect = document.getElementById('contact_subject');
            
            if (nameSection) {
                // Smooth scroll to name section
                nameSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                
                // Highlight the section
                nameSection.style.transition = 'all 0.3s ease';
                nameSection.style.backgroundColor = 'rgba(255, 215, 0, 0.1)';
                nameSection.style.padding = '20px';
                nameSection.style.borderRadius = '15px';
                nameSection.style.border = '2px solid #FFD166';
                
                // Set subject to birthday automatically
                if (subjectSelect) {
                    subjectSelect.value = 'birthday';
                }
                
                // Focus on name input
                setTimeout(() => {
                    document.getElementById('contact_name').focus();
                }, 800);
                
                // Remove highlight after 3 seconds
                setTimeout(() => {
                    nameSection.style.backgroundColor = '';
                    nameSection.style.padding = '';
                    nameSection.style.borderRadius = '';
                    nameSection.style.border = '';
                }, 3000);
            }
        });
    });
});
</script>

<?php get_footer(); ?>