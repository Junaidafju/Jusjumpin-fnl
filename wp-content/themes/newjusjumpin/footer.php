    </main><!-- #main -->

    <!-- Footer -->
    <footer class="new_footer_area" role="contentinfo">
        <div class="footer-container">
            <!-- Column 1: Logo & About -->
            <div class="footer-column footer-col-1">
                <div class="footer-logo-wrapper">
                    <?php if ( function_exists('has_custom_logo') && has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer-logo" aria-label="<?php esc_attr_e('Home', 'newjusjumpin'); ?>">
                            <img src="<?php echo esc_url( get_theme_file_uri('assets/img/logo.svg') ); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
                <p class="footer-about">Jus Jumpin is a vibrant indoor entertainment zone — perfect for playful kids and thrill-loving adults looking to unleash their inner jumper.</p>
                <div class="footer-social-icons">
                    <a href="https://www.facebook.com/jusjumpin/" target="_blank" rel="noopener" class="social-icon" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/jusjumpin?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@jusjumpin" target="_blank" rel="noopener" class="social-icon" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-column footer-col-2">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url( home_url('/about-us') ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url('/birthday-celebrations') ); ?>">Birthday Celebrations</a></li>
                    <li><a href="<?php echo esc_url( home_url('/our-activities') ); ?>">Our Activities</a></li>
                    <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact Us</a></li>
                    <li><a href="<?php echo esc_url( home_url('/blog') ); ?>">Blogs</a></li>
                </ul>
            </div>

            <!-- Column 3: Our Locations (Part 1) -->
            <div class="footer-column footer-col-3">
                <h3 class="footer-heading">Our Locations</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/west-bengal/kolkata-abc-square-building/')); ?>">Kolkata - ABC Square Building</a></li>
                    <li><a href="<?php echo esc_url(home_url('/west-bengal/kolkata-avani-mall/')); ?>">Kolkata - Avani Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/west-bengal/kolkata-axis-mall/')); ?>">Kolkata - Axis Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/west-bengal/kolkata-city-centre-2/')); ?>">Kolkata - City Centre 2</a></li>
                    <li><a href="<?php echo esc_url(home_url('/west-bengal/siliguri-city-centre/')); ?>">Siliguri - City Centre</a></li>
                    <li><a href="<?php echo esc_url(home_url('/west-bengal/durgapur-junction-mall/')); ?>">Durgapur - Junction Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/karnataka/bengaluru-m5-ecity-mall/')); ?>">Bengaluru - M5 Ecity Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/karnataka/bengaluru-meenakshi-mall/')); ?>">Bengaluru - Meenakshi Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/maharashtra/nashik-city-centre/')); ?>">Nashik - City Centre</a></li>
                    <li><a href="<?php echo esc_url(home_url('/jharkhand/dhanbad-prabhatam-mall/')); ?>">Dhanbad - Prabhatam Mall</a></li>
                </ul>
            </div>

            <!-- Column 4: Our Locations (Part 2) -->
            <div class="footer-column footer-col-4">
                <h3 class="footer-heading footer-heading-invisible">Our Locations</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/jharkhand/jamshedpur-pm-mall/')); ?>">Jamshedpur - P&M Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/jharkhand/ranchi-nucleus-mall/')); ?>">Ranchi - Nucleus Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/uttar-pradesh/noida-gip-mall/')); ?>">Noida - GIP Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/uttar-pradesh/noida-spectrum-mall/')); ?>">Noida - Spectrum Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/maharashtra/nagpur-vr-mall/')); ?>">Nagpur - VR Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/maharashtra/pune-seasons-mall/')); ?>">Pune - Seasons Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/chhattisgarh/raipur-zora-mall/')); ?>">Raipur - Zora Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/rajasthan/udaipur-urban-square-mall/')); ?>">Udaipur - Urban Square Mall</a></li>
                    <li><a href="<?php echo esc_url(home_url('/gujarat/surat-vr-mall/')); ?>">Surat - VR Mall</a></li>
                </ul>
            </div>

            <!-- Column 5: Contact Info -->
            <div class="footer-column footer-col-5">
                <h3 class="footer-heading">Contact Info</h3>
                <div class="footer-contact">
                    <p class="contact-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>PS Qube, Street No. 1111,<br>Action Area IID, Rajarhat,<br>Newtown, West Bengal 700156</span>
                    </p>
                    <p class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@jusjumpin.com">info@jusjumpin.com</a>
                    </p>
                    <p class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>For Booking &amp; Birthday:<br>
                        <a href="tel:+919830359999">+91 9830359999</a> / <a href="tel:+919874206206">+91 9874206206</a></span>
                    </p>
                    <p class="contact-item">
                        <i class="fas fa-bullhorn"></i>
                        <span>Marketing Queries:<br>
                        <a href="tel:+919230967166">+91 9230967166</a></span>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-container">
                <p class="footer-copyright">© Jus Jumpin.com Inc. <?php echo esc_html(date('Y')); ?> All rights reserved.</p>
                <p class="footer-credit">Made with <i class="fas fa-heart"></i> in <a href="https://jusjumpin.com" target="_blank" rel="noopener">Jus Jumpin</a></p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
    </html>
<script type="application/ld+json">
<?php
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "@id" => home_url('/#organization'),
        "name" => "Jus Jumpin",
        "legalName" => "Jus Jumpin Kids Entertainment Private Limited",
        "url" => home_url('/'),
        "logo" => get_template_directory_uri() . '/assets/img/Jus-Jumpin-Logo-2-1024x209.png',
        "description" => "Jus Jumpin is a national brand of indoor trampoline parks and kids entertainment zones across India, offering fun and fitness experiences for kids and families.",
        "contactPoint" => [
            [
                "@type" => "ContactPoint",
                "telephone" => "+919836229922",
                "contactType" => "Customer Service",
                "areaServed" => "IN",
                "availableLanguage" => ["English", "Hindi", "Bengali", "Marathi"]
            ]
        ],
        "sameAs" => [
            "https://www.facebook.com/jusjumpin",
            "https://www.instagram.com/jusjumpin/",
            "https://www.youtube.com/@jusjumpin"
        ]
    ];
    echo wp_json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>
