<?php
/**
 * Template Name: About Us Page
 * 
 * About Us page template for Jus Jumpin
 */

get_header(); ?>

<!-- Full-Screen Hero Section with About Us.png -->
<section class="jj-about-fullscreen-hero">
    <div class="jj-fullscreen-hero__bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/About_us.webp' ); ?>');" aria-hidden="true"></div>
    <div class="jj-fullscreen-hero__overlay" aria-hidden="true"></div>
    <div class="jj-fullscreen-hero__content">
        <h1 class="jj-fullscreen-hero__title"><span class="gradient-one"><?php esc_html_e('About', 'newjusjumpin'); ?></span> <span class="gradient-two"><?php esc_html_e('Jus Jumpin', 'newjusjumpin'); ?></span></h1>
        <p class="jj-fullscreen-hero__subtitle"><?php esc_html_e('India\'s Premier Trampoline Park Chain - Bringing Joy, Fitness, and Fun to Families Across the Nation', 'newjusjumpin'); ?></p>
    </div>
</section>

<!-- Wavy Scrolling Banner Section -->
<section class="jj-wavy-banner">
    <div class="jj-wavy-banner__content">
        <div class="jj-wavy-banner__wave jj-wavy-banner__wave--one"></div>
        <div class="jj-wavy-banner__wave jj-wavy-banner__wave--two"></div>
        <div class="jj-wavy-banner__text-container">
            <div class="jj-wavy-banner__scrolling-track">
                <span class="jj-wavy-banner__hashtag" style="color: #f67edd;">#JusJumpin</span>
                <span class="jj-wavy-banner__hashtag" style="color: #00b9e3;">#FeelYoung</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ff661a;">#WowZone</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ffc60b;">#JumpHigher</span>
                <span class="jj-wavy-banner__hashtag" style="color: #f67edd;">#StayActive</span>
                <span class="jj-wavy-banner__hashtag" style="color: #00b9e3;">#JusJumpin</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ff661a;">#FeelYoung</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ffc60b;">#WowZone</span>
                <span class="jj-wavy-banner__hashtag" style="color: #f67edd;">#JumpHigher</span>
                <span class="jj-wavy-banner__hashtag" style="color: #00b9e3;">#StayActive</span>
            </div>
            <div class="jj-wavy-banner__scrolling-track">
                <span class="jj-wavy-banner__hashtag" style="color: #f67edd;">#JusJumpin</span>
                <span class="jj-wavy-banner__hashtag" style="color: #00b9e3;">#FeelYoung</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ff661a;">#WowZone</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ffc60b;">#JumpHigher</span>
                <span class="jj-wavy-banner__hashtag" style="color: #f67edd;">#StayActive</span>
                <span class="jj-wavy-banner__hashtag" style="color: #00b9e3;">#JusJumpin</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ff661a;">#FeelYoung</span>
                <span class="jj-wavy-banner__hashtag" style="color: #ffc60b;">#WowZone</span>
                <span class="jj-wavy-banner__hashtag" style="color: #f67edd;">#JumpHigher</span>
                <span class="jj-wavy-banner__hashtag" style="color: #00b9e3;">#StayActive</span>
            </div>
        </div>
    </div>
</section>

<!-- About Us Introduction Section - Text Left, Image Right -->
<section class="jj-about-intro-section">
    <div class="container">
        <div class="jj-intro-content">
            <div class="jj-intro-text">
                <h1 class="jj-intro-title"><?php esc_html_e('Welcome to Jus Jumpin', 'newjusjumpin'); ?></h1>
                <div class="jj-intro-description">
                    <p><?php esc_html_e('At Jus Jumpin, we\'re more than just a play zone — we\'re a world where laughter echoes, imaginations soar, and unforgettable memories are made. Built with love and packed with fun, our indoor trampoline parks and kids play zones across India are designed to bring families closer and let children explore freely in a safe, energetic environment.', 'newjusjumpin'); ?></p>
                    
                    <p><?php esc_html_e('Since 2017, we\'ve been redefining playtime with top-quality safety, cheerful spaces, and nonstop excitement across our locations in India\'s leading malls. Whether it\'s a casual day out or a grand celebration, Jus Jumpin is where unforgettable memories are made — one bounce at a time.', 'newjusjumpin'); ?></p>
                    
                    <p><?php esc_html_e('Our parks feature state-of-the-art trampolines, exciting play zones, and dedicated areas for different age groups, ensuring everyone from toddlers to adults can enjoy a safe and thrilling experience. We combine fitness, fun, and family bonding in one amazing space.', 'newjusjumpin'); ?></p>
                    
                    <div class="jj-intro-highlights">
                        <div class="jj-highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('25+ Locations Across India', 'newjusjumpin'); ?></span>
                        </div>
                        <div class="jj-highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('World-Class Safety Standards', 'newjusjumpin'); ?></span>
                        </div>
                        <div class="jj-highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('Over 2 Million Happy Customers', 'newjusjumpin'); ?></span>
                        </div>
                        <div class="jj-highlight-item">
                            <i class="fas fa-check-circle"></i>
                            <span><?php esc_html_e('Trained & Friendly Staff', 'newjusjumpin'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jj-intro-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/boy-jumping-aboutUs.png" alt="<?php esc_attr_e('Jus Jumpin Trampoline Park', 'newjusjumpin'); ?>" class="jj-park-image" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Mission Section - Text Left, Image Right -->
<section class="jj-about-section">
    <div class="container">
        <div class="jj-section-content">
            <div class="jj-text-content">
                <h2 class="jj-section-title1"><?php esc_html_e('Our Mission', 'newjusjumpin'); ?></h2>
                <p class="jj-section-text"><?php esc_html_e('To create joyful, safe, and high-energy experiences that bring families and friends together through active play, laughter, and unforgettable memories.', 'newjusjumpin'); ?></p>
                <p class="jj-section-text"><?php esc_html_e('At Jus Jumpin, we\'re more than just a play zone — we\'re a world where laughter echoes, imaginations soar, and unforgettable memories are made. Built with love and packed with fun, our indoor trampoline parks and kids play zones across India are designed to bring families closer and let children explore freely in a safe, energetic environment.', 'newjusjumpin'); ?></p>
            </div>
            <div class="jj-image-content">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mission-logo.webp" alt="<?php esc_attr_e('Our Mission', 'newjusjumpin'); ?>" class="jj-section-image" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Vision Section - Image Left, Text Right -->
<section class="jj-about-section jj-section-alt">
    <div class="container">
        <div class="jj-section-content jj-reverse">
            <div class="jj-text-content">
                <h2 class="jj-section-title2"><?php esc_html_e('Our Vision', 'newjusjumpin'); ?></h2>
                <p class="jj-section-text"><?php esc_html_e('To be the happiest place in every city – where imaginations soar, bodies move and hearts smile', 'newjusjumpin'); ?></p>
                <p class="jj-section-text"><?php esc_html_e('Since 2017, we\'ve been redefining playtime with top-quality safety, cheerful spaces, and nonstop excitement across our locations in India\'s leading malls. Whether it\'s a casual day out or a grand celebration, Jus Jumpin is where unforgettable memories are made — one bounce at a time.', 'newjusjumpin'); ?></p>
            </div>
            <div class="jj-image-content">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vision-logo.webp" alt="<?php esc_attr_e('Our Vision', 'newjusjumpin'); ?>" class="jj-section-image" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Values Section - Text Left, Image Right -->
<section class="jj-about-section">
    <div class="container">
        <div class="jj-section-content">
            <div class="jj-text-content">
                <h2 class="jj-section-title3"><?php esc_html_e('Our Values', 'newjusjumpin'); ?></h2>
                <p class="jj-section-text"><?php esc_html_e('Our core values guide everything we do at Jus Jumpin, from park design to customer interactions. These principles shape our culture and ensure we deliver exceptional experiences to every guest.', 'newjusjumpin'); ?></p>
                
                <div class="jj-values-list">
                    <div class="jj-value-item">
                        <div class="jj-value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="jj-value-content">
                            <h4><?php esc_html_e('FUN FIRST', 'newjusjumpin'); ?></h4>
                            <p class="jj-section-text"><?php esc_html_e('We believe in the power of play — it\'s how we grow, connect, and truly live.', 'newjusjumpin'); ?></p>
                        </div>
                    </div>
                    
                    <div class="jj-value-item">
                        <div class="jj-value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="jj-value-content">
                            <h4><?php esc_html_e('SAFETY ALWAYS', 'newjusjumpin'); ?></h4>
                            <p class="jj-section-text"><?php esc_html_e('Every bounce, slide, and smile happens in a space designed with care and safety in mind.', 'newjusjumpin'); ?></p>
                        </div>
                    </div>
                    
                    <div class="jj-value-item">
                        <div class="jj-value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="jj-value-content">
                            <h4><?php esc_html_e('TOGETHERNESS', 'newjusjumpin'); ?></h4>
                            <p class="jj-section-text"><?php esc_html_e('We\'re all about shared laughter, teamwork, and moments that turn into cherished stories.', 'newjusjumpin'); ?></p>
                        </div>
                    </div>
                    
                    <div class="jj-value-item">
                        <div class="jj-value-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="jj-value-content">
                            <h4><?php esc_html_e('EXCELLENCE IN ENERGY', 'newjusjumpin'); ?></h4>
                            <p class="jj-section-text"><?php esc_html_e('We bring passion to every jump, spark creativity in every corner, and deliver top-tier service with a smile.', 'newjusjumpin'); ?></p>
                        </div>
                    </div>
                    
                    <div class="jj-value-item">
                        <div class="jj-value-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="jj-value-content">
                            <h4><?php esc_html_e('INCLUSION & KINDNESS', 'newjusjumpin'); ?></h4>
                            <p class="jj-section-text"><?php esc_html_e('Everyone is welcome. Respect, kindness, and celebration of individuality are part of every experience here.', 'newjusjumpin'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jj-image-content">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/values-logo.webp" alt="<?php esc_attr_e('Our Values', 'newjusjumpin'); ?>" class="jj-section-image" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="jj-founder-section">
    <div class="container">
        <h2 class="jj-founder-title"><?php esc_html_e('Our Founder', 'newjusjumpin'); ?></h2>
        <div class="jj-founder-content">
            <div class="jj-founder-text">
                <p class="jj-section-text"><?php esc_html_e('Sumit Bathwal is the Founder & CEO of Jus Jumpin, India\'s leading indoor trampoline park brand. A serial entrepreneur with a strong background in finance (FCA, CS, CWA), Sumit combines business acumen with creative vision to build high-energy entertainment experiences for families across India.', 'newjusjumpin'); ?></p>
                <p class="jj-section-text"><?php esc_html_e('Previously with KPMG (Taxation), he is an alumnus of St. Xavier\'s College, Kolkata. Under Sumit\'s leadership, Jus Jumpin has grown from a single location to 25+ parks across India, touching the lives of over 2 million customers.', 'newjusjumpin'); ?></p>
                <p class="jj-section-text"><?php esc_html_e('"Our goal has always been to create more than just entertainment venues - we\'re building communities where families create lasting memories while staying active and healthy."', 'newjusjumpin'); ?></p>
                <p class="jj-section-text" style="font-weight: 600; margin-top: 20px;"><?php esc_html_e('- Sumit Bathwal, Founder & CEO', 'newjusjumpin'); ?></p>
            </div>
            <div class="jj-founder-image-container">
                <div class="jj-founder-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Founder.webp" alt="<?php esc_attr_e('Sumit Bathwal - Founder & CEO', 'newjusjumpin'); ?>" class="jj-founder-image" loading="lazy">
                    <div class="jj-founder-name-tag">
                        <h3 class="jj-founder-name">Sumit Bathwal</h3>
                        <p class="jj-founder-designation">Founder & CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>