<?php
/**
 * Template Name: Birthday Celebrations Page
 * 
 * Birthday Celebrations page template for Jus Jumpin
 */

get_header(); ?>
<!-- Birthday Hero Section with Background -->
<section class="jj-birthday-hero">
    <div class="jj-birthday-hero__bg jj-birthday-hero__bg--desktop" aria-hidden="true" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/Birthday_Party_Zones1.svg' ); ?>');"></div>
    <div class="jj-birthday-hero__bg jj-birthday-hero__bg--mobile" aria-hidden="true" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/mobile-birthday-hero.svg' ); ?>');"></div>
    <div class="jj-birthday-hero__overlay" aria-hidden="true"></div>
    
    <div class="container">
        <div class="jj-birthday-hero__inner">
            <div class="jj-birthday-hero__cake-image animate-on-scroll fade-in-left">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/levitating-cake.png' ); ?>" alt="<?php esc_attr_e('Levitating Birthday Cake', 'newjusjumpin'); ?>" loading="lazy">
            </div>
            <div class="jj-birthday-hero__content animate-on-scroll fade-up">
                <h1 class="jj-birthday-hero__title">
                    <?php esc_html_e('Birthday Celebrations', 'newjusjumpin'); ?>
                </h1>
                <p class="jj-birthday-hero__subtitle"><?php esc_html_e('Magical venue to host the most amazing birthday party for Kids and Adults.', 'newjusjumpin'); ?></p>
                <p class="jj-birthday-hero__description"><?php esc_html_e('Breath life into boring birthday parties with Jus Jumpin. 
                Host the most amazing birthday party with privileged access to the trampoline park, personalized decoration, and mouth-watering food.', 'newjusjumpin'); ?></p>
            </div>
        </div>
    </div>
    
    <!-- Wave Bottom Shape -->
    <div class="hero-wave-bottom" aria-hidden="true">
    <svg class="hero-wave" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <defs>
            <linearGradient id="waveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="#fff7fb" />
                <stop offset="100%" stop-color="#ffe8f4" />
            </linearGradient>
        </defs>
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="url(#waveGradient)"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="url(#waveGradient)"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="url(#waveGradient)"></path>
    </svg>
</div>
    
    <div class="jj-birthday-hero__mesh" aria-hidden="true"></div>
</section>


<!-- Why Choose Us for Birthday Section -->
<section class="jj-why-celebrate">
    <div class="container why-grid">
        
        <!-- LEFT TEXT -->
        <div class="why-text">
            <h2 class="why-heading">
                Why Celebrate at <br><span class="highlight">Jus Jumpin?</span>
            </h2>

            <p class="why-tagline">
                <strong><?php esc_html_e('Turn your birthday into an unforgettable memory to cherish. A large array of fun birthday party activities, dedicated party areas, and endless entertainment are waiting for you.', 'newjusjumpin'); ?></strong>
            </p>

            <p class="why-description">
                <?php esc_html_e('Birthday parties are meant to be special and full of enjoyment. Not just kids, at Jus Jumpin, we come up with the most exciting birthday party ideas for adults, too. Exclusive access to our trampoline zones, personalized themes for friends and families, dedicated play areas to host fun birthday party games, and delectable food, all at your disposal. No matter how small or grand your birthday party is, Jus Jumpin leaves no stone unturned to make it unforgettable. Book now to host a party filled with joy, laughter, and endless fun.', 'newjusjumpin'); ?>
            </p>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="why-image-wrapper">
            <img src="https://images.unsplash.com/photo-1646470129437-8ffd629553c8?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Person Holding Birthday Gifts" class="why-image">
        </div>

    </div>
    
</section>
<!-- Top SVG Divider -->
<div class="section-top-divider"  style="background: linear-gradient(180deg, #00cfff 0%, #0099cc 100%);" aria-hidden="true">
    <svg class="top-wave" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <defs>
            <linearGradient id="topWaveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="#fff7fb" />
                <stop offset="100%" stop-color="#ffe8f4" />
            </linearGradient>
        </defs>
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="url(#topWaveGradient)"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="url(#topWaveGradient)"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="url(#topWaveGradient)"></path>
    </svg>
</div>
<!-- Comparison Table Section -->
<section class="jj-birthday-compare">


    <div class="container">
        <h2 class="jj-birthday-heading">
            <span class="heading-decoration left"><i class="fas fa-star"></i></span>
            <span class="heading-main-text">
                <span class="heading-line-1">A Hassle-Free, Action-Packed</span>
                <span class="heading-line-2">Party With Jus Jumpin</span>
            </span>
            <span class="heading-decoration right"><i class="fas fa-star"></i></span>
        </h2>
        
        <div class="compare-table">
            <ul class="column feature-column">
                <li class="column-header">Feature</li>
                <li>Venue</li>
                <li>Activities</li>
                <li>Setup & Cleanup</li>
                <li>Food & Drinks</li>
                <li>Supervision</li>
                <li>Memories</li>
            </ul>
            
            <ul class="column jj-column">
                <li class="column-header">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.SVG'); ?>" alt="Jus Jumpin Logo" class="compare-logo">
                </li>
                <li><i class="fas fa-building"></i> Massive Indoor Play Arena</li>
                <li><i class="fas fa-rocket"></i> 25+ Attractions & Games</li>
                <li><i class="fas fa-magic"></i> We Handle Everything</li>
                <li><i class="fas fa-utensils"></i> Catered Party Menu</li>
                <li><i class="fas fa-user-shield"></i> Professional Party Hosts</li>
                <li><i class="fas fa-camera"></i> Photo-Worthy Moments Everywhere</li>
            </ul>
            
            <ul class="column home-column">
                <li class="column-header">Party at Home</li>
                <li><i class="fas fa-couch"></i> Boring Living Room</li>
                <li><i class="fas fa-sad-tear"></i> You Have to Plan</li>
                <li><i class="fas fa-broom"></i> DIY Decorations & Post-Party Mess</li>
                <li><i class="fas fa-shopping-basket"></i> You Have to Prepare</li>
                <li><i class="fas fa-tired"></i> Constant Parental Supervision</li>
                <li><i class="fas fa-frown"></i> Wishing You Had Booked At Jus Jumpin</li>
            </ul>
        </div>
    </div>
</section>
 
<!-- White Cloud Divider -->
<div class="jj-cloud-divider jj-cloud-divider--white"  style="background: linear-gradient(180deg, #00cfff 0%, #0099cc 100%);" aria-hidden="true">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 120" preserveAspectRatio="none">
  <path d="M0,40
    C40,60 80,20 120,40
    C160,60 200,20 240,40
    C280,60 320,20 360,40
    C400,60 440,20 480,40
    C520,60 560,20 600,40
    C640,60 680,20 720,40
    C760,60 800,20 840,40
    C880,60 920,20 960,40
    C980,50 1000,60 1000,60
    V120 H0 Z"
    fill="#ffffff"/>
</svg>
</div>



<!-- Happiest Moments Gallery -->
<section class="jj-happiest-moments">


    <div class="container">
        <h2 class="jj-birthday-heading sparkle">
            <span class="heading-decoration left">✨</span>
            <?php esc_html_e('Happiest Moments', 'newjusjumpin'); ?>
            <span class="heading-decoration right">✨</span>
        </h2>
        <p class="jj-birthday-subtext"><?php esc_html_e('Relive the joy and excitement captured at our birthday celebrations', 'newjusjumpin'); ?></p>
        
        <div class="moments-gallery">
            <div class="moment-card animate-on-scroll slide-left">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Birthday_Party_Zones.jpg" alt="<?php esc_attr_e('Birthday Party Zone', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎉</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll fade-up">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday2.webp" alt="<?php esc_attr_e('Kids Playing at Birthday Party', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎈</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-right">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday3.webp" alt="<?php esc_attr_e('Trampoline Birthday Fun', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎂</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-left">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday4.webp" alt="<?php esc_attr_e('Ball Pit Party Fun', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎁</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll fade-up">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday5.webp" alt="<?php esc_attr_e('Creative Birthday Activities', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎊</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-right">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday6.jpg" alt="<?php esc_attr_e('Basketball Birthday Challenge', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🏀</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-left">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday7.jpg" alt="<?php esc_attr_e('Foam Pit Birthday Adventure', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎯</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll fade-up">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday8.jpg" alt="<?php esc_attr_e('Obstacle Course Party', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🏆</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-right">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday9.jpg" alt="<?php esc_attr_e('Climbing Birthday Challenge', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">⭐</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-left">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday10.jpg" alt="<?php esc_attr_e('Rock Wall Birthday Adventure', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎪</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll fade-up">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday11.jpg"
                    alt="<?php esc_attr_e('Donut Slide Party Fun', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🍩</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-right">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday12.webp"
                     alt="<?php esc_attr_e('Interactive Play Birthday', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎨</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-left">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday13.webp" alt="<?php esc_attr_e('Merry Go Round Birthday', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎠</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll fade-up">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday14.webp" alt="<?php esc_attr_e('Ladder Climbing Party', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">🎢</span>
                    </div>
                </div>
            </div>
            
            <div class="moment-card animate-on-scroll slide-right">
                <div class="moment-image-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/birthday15.webp" alt="<?php esc_attr_e('Happy Birthday Jumping', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="moment-overlay">
                        <span class="moment-icon">💝</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking Call to Action -->
<section class="jj-birthday-cta">
  <div class="jj-birthday-cta__overlay" aria-hidden="true"></div>
  <div class="jj-birthday-cta__sparkles" aria-hidden="true"></div>

  <div class="container">
    <div class="jj-birthday-cta__content">
      <h2 class="jj-birthday-cta__heading">
        <span class="decor-left">✨</span>
        Ready to Celebrate?
        <span class="decor-right">🎉</span>
      </h2>

      <p class="jj-birthday-cta__text">
        Book your unforgettable birthday party today and create magical memories that will last a lifetime!
      </p>

      <div class="jj-birthday-cta__buttons">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-glass primary">
          <span class="btn-icon">🎂</span> Book Now
        </a>
        <a href="tel:+919830359999" class="btn-glass secondary">
          <span class="btn-icon">📞</span> Call Us
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
