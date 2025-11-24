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

<div class="container section-padding">

    <!-- Contact Section -->
    <section class="contact-form-section">
        <div class="contact-grid-2">
            <?php
            // Display success/error messages
            if (isset($_GET['contact'])) {
                if ($_GET['contact'] === 'success') {
                    echo '<div class="contact-message success animate-on-scroll fade-up">';
                    echo '<i class="fas fa-check-circle" aria-hidden="true"></i>';
                    echo '<p>' . esc_html__('Thank you for your message! We\'ll get back to you soon.', 'newjusjumpin') . '</p>';
                    echo '</div>';
                } elseif ($_GET['contact'] === 'error') {
                    echo '<div class="contact-message error animate-on-scroll fade-up">';
                    echo '<i class="fas fa-exclamation-triangle" aria-hidden="true"></i>';
                    echo '<p>' . esc_html__('Sorry, there was an error sending your message. Please try again.', 'newjusjumpin') . '</p>';
                    echo '</div>';
                }
            }
            ?>

            <div class="contact-form-wrapper gradient-card animate-on-scroll slide-left">
                <div class="contact-form-header">
                    <h2><?php esc_html_e('Send us a Message', 'newjusjumpin'); ?></h2>
                    <p><?php esc_html_e('Have a question or want to book a session? Fill out the form below and we\'ll respond as soon as possible.', 'newjusjumpin'); ?></p>
                </div>

                <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" novalidate>
                    <?php wp_nonce_field('newjusjumpin_contact', 'newjusjumpin_contact_nonce'); ?>
                    <input type="hidden" name="action" value="contact_form">
                    <input type="text" name="contact_website" value="" tabindex="-1" autocomplete="off" style="position:absolute;left:-5000px;opacity:0;height:0;width:0;" aria-hidden="true">

                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact_name">
                                <?php esc_html_e('Full Name', 'newjusjumpin'); ?>
                                <span class="required" aria-label="<?php esc_attr_e('Required field', 'newjusjumpin'); ?>">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="contact_name" 
                                name="contact_name" 
                                required 
                                aria-describedby="name-help"
                                autocomplete="name"
                            >
                            <div id="name-help" class="form-help"><?php esc_html_e('Please enter your full name', 'newjusjumpin'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="contact_email">
                                <?php esc_html_e('Email Address', 'newjusjumpin'); ?>
                                <span class="required" aria-label="<?php esc_attr_e('Required field', 'newjusjumpin'); ?>">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="contact_email" 
                                name="contact_email" 
                                required 
                                aria-describedby="email-help"
                                autocomplete="email"
                            >
                            <div id="email-help" class="form-help"><?php esc_html_e('We\'ll use this to respond to your message', 'newjusjumpin'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact_phone">
                            <?php esc_html_e('Mobile Number', 'newjusjumpin'); ?>
                            <span class="required" aria-label="<?php esc_attr_e('Required field', 'newjusjumpin'); ?>">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="contact_phone" 
                            name="contact_phone" 
                            required
                            aria-describedby="phone-help"
                            autocomplete="tel"
                        >
                        <div id="phone-help" class="form-help"><?php esc_html_e('Include country code if calling internationally', 'newjusjumpin'); ?></div>
                    </div>

                    <div class="form-group">
                        <label for="contact_subject">
                            <?php esc_html_e('Subject', 'newjusjumpin'); ?>
                            <span class="required" aria-label="<?php esc_attr_e('Required field', 'newjusjumpin'); ?>">*</span>
                        </label>
                        <select id="contact_subject" name="contact_subject" required aria-describedby="subject-help">
                            <option value=""><?php esc_html_e('Select a topic...', 'newjusjumpin'); ?></option>
                            <option value="general"><?php esc_html_e('General Inquiry', 'newjusjumpin'); ?></option>
                            <option value="booking"><?php esc_html_e('Booking & Reservations', 'newjusjumpin'); ?></option>
                            <option value="birthday"><?php esc_html_e('Birthday Parties', 'newjusjumpin'); ?></option>
                            <option value="activities"><?php esc_html_e('Activities & Programs', 'newjusjumpin'); ?></option>
                            <option value="feedback"><?php esc_html_e('Feedback & Suggestions', 'newjusjumpin'); ?></option>
                            <option value="support"><?php esc_html_e('Customer Support', 'newjusjumpin'); ?></option>
                            <option value="media"><?php esc_html_e('Media & Press', 'newjusjumpin'); ?></option>
                            <option value="other"><?php esc_html_e('Other', 'newjusjumpin'); ?></option>
                        </select>
                        <div id="subject-help" class="form-help"><?php esc_html_e('This helps us direct your message to the right team', 'newjusjumpin'); ?></div>
                    </div>

                    <div class="form-group">
                        <label for="contact_message">
                            <?php esc_html_e('Message', 'newjusjumpin'); ?>
                            <span class="required" aria-label="<?php esc_attr_e('Required field', 'newjusjumpin'); ?>">*</span>
                        </label>
                        <textarea 
                            id="contact_message" 
                            name="contact_message" 
                            rows="6" 
                            required 
                            aria-describedby="message-help"
                            placeholder="<?php esc_attr_e('Tell us how we can help you...', 'newjusjumpin'); ?>"
                        ></textarea>
                        <div id="message-help" class="form-help"><?php esc_html_e('Please provide as much detail as possible', 'newjusjumpin'); ?></div>
                    </div>

                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-paper-plane" aria-hidden="true"></i>
                            <?php esc_html_e('Send Message', 'newjusjumpin'); ?>
                        </button>
                    </div>

                    <div class="form-footer">
                        <p><small><?php esc_html_e('Fields marked with * are required. We respect your privacy and will never share your information.', 'newjusjumpin'); ?></small></p>
                    </div>
                </form>
            </div>
            <!-- Sidebar Info Panel -->
            <aside class="contact-sidebar gradient-card animate-on-scroll slide-right">
                <h2 class="sidebar-title"><?php esc_html_e('Request a Call Back', 'newjusjumpin'); ?></h2>
                <p class="sidebar-text"><?php esc_html_e('We\'re here to help with bookings, birthdays, marketing and events related Queries.', 'newjusjumpin'); ?></p>

                <div class="sidebar-item">
                    <div class="sidebar-icon" aria-hidden="true"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="sidebar-content">
                        <h3><?php esc_html_e('Address', 'newjusjumpin'); ?></h3>
                        <p>PS Qube, Street No. 1111,<br>Action Area IID, Rajarhat, Newtown,<br>West Bengal 700156</p>
                    </div>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon" aria-hidden="true"><i class="fas fa-envelope"></i></div>
                    <div class="sidebar-content">
                        <h3><?php esc_html_e('Email Us', 'newjusjumpin'); ?></h3>
                        <a href="mailto:info@jusjumpin.com">info@jusjumpin.com</a>
                    </div>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon" aria-hidden="true"><i class="fas fa-birthday-cake"></i></div>
                    <div class="sidebar-content">
                        <h3><?php esc_html_e('For Booking and Birthday', 'newjusjumpin'); ?></h3>
                        <a href="tel:+919830359999">+91 9830359999</a><br>
                        <a href="tel:+919874206206">+91 9874206206</a>
                    </div>
                </div>

                <div class="sidebar-item">
                    <div class="sidebar-icon" aria-hidden="true"><i class="fas fa-bullhorn"></i></div>
                    <div class="sidebar-content">
                        <h3><?php esc_html_e('Marketing Queries', 'newjusjumpin'); ?></h3>
                        <a href="tel:+919230967166">+91 9230967166</a>
                    </div>
                </div>

                <hr class="sidebar-sep" />

                <h3 class="sidebar-subtitle"><?php esc_html_e('Follow Us', 'newjusjumpin'); ?></h3>
                <div class="sidebar-social">
                    <a class="social-btn" href="https://www.facebook.com/jusjumpin/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-btn" href="https://www.youtube.com/@jusjumpin" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a class="social-btn" href="https://www.instagram.com/jusjumpin?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>

                <div class="sidebar-actions">
                    <a class="btn btn-whatsapp" href="https://wa.me/919830359999" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        <?php esc_html_e('Chat with Us', 'newjusjumpin'); ?>
                    </a>
                </div>
            </aside>
        </div>
    </section>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    try {
        var params = new URLSearchParams(window.location.search);
        var status = params.get('contact');
        if (status === 'success') {
            alert('Thank you! Your message has been sent successfully.');
            window.location.replace('<?php echo esc_url( get_permalink() ); ?>');
        } else if (status === 'error') {
            alert('Sorry, there was an error sending your message. Please try again.');
            window.location.replace('<?php echo esc_url( get_permalink() ); ?>');
        }
    } catch (e) {}
});
</script>
<?php get_footer(); ?>
