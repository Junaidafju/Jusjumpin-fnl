<?php
/**
 * Template: Raipur - Zora Mall
 * Modern location page with hero slider and glassmorphism design
 */
$title = "Raipur - Zora Mall | Jus Jumpin";
?>

<!-- Hero Slider Section -->
<section class="location-hero-slider">
    <div class="hero-slider-wrapper">
        <div class="hero-slide active">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Zora_the_Mall_1.webp'); ?>" alt="Jus Jumpin Kolkata ABC Square" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Zora_the_Mall_2.webp'); ?>" alt="Adult Trampoline Park Kolkata" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Zora_the_Mall_3.webp'); ?>" alt="Kolkata ABC Square Activities" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/KolkataABC4.jpg'); ?>" alt="Trampoline Park Fun Kolkata" class="hero-slide-img">
        </div>
    </div>
    <div class="hero-slider-overlay"></div>
    <div class="hero-slider-content">
        <div class="container">
            <h1 class="location-hero-title">
                <span class="hero-emoji"></span>
                Jus Jumpin<br> Zora Mall - Raipur
            </h1>
            <p class="location-hero-subtitle">Jump into a whole new world where there are no restrictions on having a blast. Jus Jumpin presents the best trampoline Park for Adults in Raipur, offering an enchanting experience for all ages.</p>
        </div>
    </div>
    <div class="slider-dots">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
        <span class="dot" data-slide="3"></span>
    </div>
</section>

<!-- Premier Park Section -->
<section class="location-section premier-section">
    <div class="container">
        <div class="content-with-image">
            <div class="content-left">
                <h2 class="section-title gradient-text">Ultimate Fun Awaits.</h2>
                <p class="section-text">Welcome to <strong>Jus Jumpin, Zora The Mall, Raipur.</strong> The ultimate destination for fun and fitness. Centrally located at Zora the mall, Raipur, Jus Jumpin offers a thrilling family entertainment park with a variety of games and captivating fun activities meticulously designed for people of all age groups.</p>
                <p class="section-text">Our facility at Zora the Mall facilitates a dedicated soft play zone for the kids, trampoline park, arcade zone, Virtual reality (VR) games, a vibrant bowling alley, bumper cars, and more to ensure you have a blast while being at Jus Jumpin.</p>
                <p class="section-text">At this venue, we also offer a dedicated party zone to host magical birthday parties in Raipur and conduct corporate events for team building activities. The enchanting atmosphere, customized party decor, in-house DJ, loads of party games, and, of course, a large range of delectable food make it a perfect venue for parties and social gatherings.</p>
            </div>
            <div class="content-right">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Zora_the_Mall_body.webp'); ?>" alt="Zora The Mall- Raipur" class="building-image">
             <div class="image-overlay">
                    <h2 class="building-name">Zora The Mall- Raipur</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Experience Section -->
<section class="location-section experience-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-business-time"></i></span> Key Highlights</h2>
        <p class="section-intro">Jus Jumpin at Zora Mall features an infinity trampoline, mind-bending VR games, pin wall, bumper cars, wave slide, and a skill-driven arcade zone.</p>
        
        <div class="experience-grid">
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/KittyKolkataABC.jpg'); ?>" alt="Kitty Parties" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-birthday-cake"></i> Amazing Kitty Parties</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/CorporateKolkataABC.jpg'); ?>" alt="Corporate Events" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-building"></i> Corporate Team-Building Events</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/FamilyKolkataABC.jpg'); ?>" alt="Family Celebrations" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-users"></i> Perfect Family Celebrations</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/FitnessKolkataABC.jpg'); ?>" alt="Fitness Enthusiasts" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-dumbbell"></i> Passionate Fitness Enthusiasts</h3>
            </div>
        </div>
        
        <p class="section-footer-text">Dedicated party area perfect for <strong>hosting amazing birthday parties</strong> and <strong>corporate events </strong>in Raipur. The venue features an <strong>awesome in-house DJ</strong> and a <strong>designated cafe with beverages.</strong></p>
    </div>
</section>

<!-- Activities Section -->
<section class="location-section activities-section">
    <div class="container">
        <h2 class="section-heading2"><span class="emoji-icon"><i class="fas fa-gamepad"></i></span> Our Activities</h2>
        <p class="section-intro">Beyond India's premier trampoline park, experience an adrenaline-filled sky stepper, obstacle zone, soft play area, and 15+ interactive gaming activities curated just for you.</p>
        <!-- Toggle Switch -->
        <div class="activities-toggle-wrapper">
            <label for="activity-filter" class="switch" aria-label="Toggle Between Adults and Kids Activities">
                <input type="checkbox" id="activity-filter" />
                <span>Adults</span>
                <span>Kids</span>
            </label>
        </div>
        
        <!-- Adults Activities Section -->
        <div class="activities-content adults-activities active" data-category="adults">
            <div class="activities-grid">
                <!-- Adult Activity 1 -->
                <div class="activity-card glass-card" data-activity-name="Infinity Trampoline">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Infinity_trampoline_activity.webp'); ?>" alt="Infinity Trampoline - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Infinity Trampoline</h4>
                        <p class="activity-desc">Endless bouncing fun on our interconnected trampoline zones. Perfect for fitness enthusiasts and adrenaline seekers!</p>
                    </div>
                </div>
                
                <!-- Adult Activity 2 -->
                <div class="activity-card glass-card" data-activity-name="Donut Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/donut_slide_activity.webp'); ?>" alt="Donut Slide - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Donut Slide</h4>
                        <p class="activity-desc">Experience gravity-powered thrills as you slide down our exciting donut-shaped tunnel at high speed!</p>
                    </div>
                </div>
                
                <!-- Adult Activity 3 -->
                <div class="activity-card glass-card" data-activity-name="Foam Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/foam_pit_activity.webp'); ?>" alt="Foam Pit - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Foam Pit</h4>
                        <p class="activity-desc">Jump into a massive pit filled with soft foam cubes. Safe landings guaranteed for all your aerial stunts!</p>
                    </div>
                </div>
                
                <!-- Adult Activity 4 -->
                <div class="activity-card glass-card" data-activity-name="Hanging Bridge">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hangging_bridge_activity.webp'); ?>" alt="Hanging Bridge - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Hanging Bridge</h4>
                        <p class="activity-desc">Test your balance and coordination as you navigate across our suspended rope bridge challenge.</p>
                    </div>
                </div>
                
                <!-- Adult Activity 5 -->
                <div class="activity-card glass-card" data-activity-name="Sky Steeper">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/sky_stepper_activity.webp'); ?>" alt="Sky Steeper - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Sky Stepper</h4>
                        <p class="activity-desc">Challenge yourself on steep inclined trampolines. Perfect for testing your jumping power and endurance!</p>
                    </div>
                </div>
                
                
                <!-- Adult Activity 6 -->
                <div class="activity-card glass-card" data-activity-name="Pin Wall">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Pin_wall_abc.webp'); ?>" alt="Pin Wall - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Pin Wall</h4>
                        <p class="activity-desc">Create an impression of your body on our 3D pin wall. Strike a pose and see yourself immortalized!</p>
                    </div>
                </div>
                
                <!-- Adult Activity 7 -->
                <div class="activity-card glass-card" data-activity-name="Cubic climbing ">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Cubic_Climbing_activities.webp'); ?>" alt="Cubic climbing in jus jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Cubic climbing </h4>
                        <p class="activity-desc">Unleash your inner explorer on the Cubic Climb, a dynamic, multi-sided challenge that tests balance and coordination as you ascend!</p>
                    </div>
                </div>
                
                <!-- Adult Activity 8 -->
                <div class="activity-card glass-card" data-activity-name="Wall Climbing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Basketball-area-activity.webp'); ?>" alt="Wall Climbing - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Basket Ball</h4>
                        <p class="activity-desc">Experience the thrill of the court year-round with Indoor Basketball, offering all the fast-paced, high-jumping action in a climate-controlled environment.</p>
                    </div>
                </div>
                
                <!-- Adult Activity 9 -->
                <div class="activity-card glass-card" data-activity-name="Tunnel Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/tunnel_slide_Activity.webp'); ?>" alt="Tunnel Slide Area At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Tunnel Slide</h4>
                        <p class="activity-desc">Zoom through twisty tunnels that spark excitement and make every slide a surprise-filled adventure.</p>
                    </div>
                </div>
                
                <!-- Adult Activity 10 -->
                <div class="activity-card glass-card" data-activity-name="Arcade Game">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Arcade_game.webp'); ?>" alt="Arcade Game in Jus Jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Arcade</h4>
                        <p class="activity-desc">Step into the Arcade and relive the golden age of gaming, where bright lights, retro sounds, and competitive high scores promise non-stop fun!</p>
                    </div>
                </div>
                
                <!-- Adult Activity 11 -->
                <div class="activity-card glass-card" data-activity-name="VR Games">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/VR_Bike_games.webp'); ?>" alt="VR Games in Jus Jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">VR Games</h4>
                        <p class="activity-desc">Dive into a fully immersive, 360-degree digital world with VR Games, where imagination and reality merge for the ultimate sensory adventure.</p>
                    </div>
                </div>
                
                <!-- Adult Activity 12 -->
                <div class="activity-card glass-card" data-activity-name="Bowling">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Bowling_alley.webp'); ?>" alt="Bowling at jus jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Bowling</h4>
                        <p class="activity-desc">Challenge your friends to strike out in the E-Line Bowling alley, where digital scoring and sleek lanes elevate the classic game of pins!</p>
                    </div>
                </div>
                <!-- Adult Activity 13 -->
                <div class="activity-card glass-card" data-activity-name="Bumper Car">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Bumper_cars_Activity.webp'); ?>" alt="Bumper Car at jus jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Bumper Car</h4>
                        <p class="activity-desc">Challenge your friends to strike out in the E-Line Bowling alley, where digital scoring and sleek lanes elevate the classic game of pins!</p>
                    </div>
                </div>
                <!-- Adult Activity 14 -->
                <div class="activity-card glass-card" data-activity-name="Wall Climbing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/climbing_wall_activity.webp'); ?>" alt="Wall Climbing At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wall Climbing</h4>
                        <p class="activity-desc">Reach new heights and boost your confidence as you climb up vibrant, kid-friendly walls.</p>
                    </div>
                </div>
            </div>
        </div>
         <!-- Kids Activities Section -->
        <div class="activities-content kids-activities" data-category="kids">
            <div class="activities-grid">
                <!-- Kids Activity 1 -->
                <div class="activity-card glass-card" data-activity-name="MerryGo Round">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/indian_kids_merry_go_round_activity.webp'); ?>" alt="MerryGo Round - Kids" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">MerryGo Round</h4>
                        <p class="activity-desc">Classic spinning fun for kids! Enjoy the colorful ride on our safe and exciting merry-go-round.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 2 -->
                <div class="activity-card glass-card" data-activity-name="Wave Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Wave-slide-activity.webp'); ?>" alt="Wave Slide At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wave Slide</h4>
                        <p class="activity-desc">Glide down our thrilling Wave Slide and feel the rush of fun as you swoosh through smooth waves of excitement!</p>
                    </div>
                </div>
                
                <!-- Kids Activity 3 -->
                <div class="activity-card glass-card" data-activity-name="Horn Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/KolkataABC3.jpg'); ?>" alt="Horn Slide - Kids" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Horn Slide</h4>
                        <p class="activity-desc">Unique horn-shaped slides that kids love! Safe, smooth, and filled with giggles at every turn.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 4 -->
                <div class="activity-card glass-card" data-activity-name="Ball Pool">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ball_pool_activities.webp'); ?>" alt="Ball Pool - Kids" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Ball Pool</h4>
                        <p class="activity-desc">Dive into thousands of colorful balls! A favorite among kids for sensory play and endless fun.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 5 -->
                <div class="activity-card glass-card" data-activity-name="Wall Climbing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Basketball-area-activity.webp'); ?>" alt="Wall Climbing - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Basket Ball</h4>
                        <p class="activity-desc">Experience the thrill of the court year-round with Indoor Basketball, offering all the fast-paced, high-jumping action in a climate-controlled environment.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 6 -->
                <div class="activity-card glass-card" data-activity-name="Tunnels">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Tunnel_activities.webp'); ?>" alt="Tunnels - Kids" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Tunnels</h4>
                        <p class="activity-desc">Crawl through exciting tunnels and explore! Great for developing motor skills and imagination.</p>
                    </div>
                </div>
                <!-- Kids Activity 7 -->
                <div class="activity-card glass-card" data-activity-name="Foam Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/foam_pit_activity.webp'); ?>" alt="Foam Pit - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Foam Pit</h4>
                        <p class="activity-desc">Jump into a massive pit filled with soft foam cubes. Safe landings guaranteed for all your aerial stunts!</p>
                    </div>
                </div>
                 <!-- Kids Activity 8 -->
                 <div class="activity-card glass-card" data-activity-name="Donut Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/donut_slide_activity.webp'); ?>" alt="Donut Slide - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Donut Slide</h4>
                        <p class="activity-desc">Experience gravity-powered thrills as you slide down our exciting donut-shaped tunnel at high speed!</p>
                    </div>
                </div>
                 <!-- Kids Activity 9 -->
                 <div class="activity-card glass-card" data-activity-name="Toshi Net">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/toshi-net.webp'); ?>" alt="Toshi Net Jus Jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Toshi Net</h4>
                        <p class="activity-desc">Toshi Net is a multi-level climbing structure and web labyrinth that challenges kids to navigate ropes, nets, and obstacles with agility and strategic thinking.</p>
                    </div>
                </div>
                <!-- Kids Activity 10 -->
                <div class="activity-card glass-card" data-activity-name="Mat Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Mat-slide.webp'); ?>" alt="Mat Slide Jus Jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Mat Slide</h4>
                        <p class="activity-desc">Race your friends down the exhilarating Mat Slide, where speed and friction combine for a thrilling, soft landing descent!</p>
                </div>
                <!-- Kids Activity 11 -->
                <div class="activity-card glass-card" data-activity-name="Car Racing Track">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Mat-slide.webp'); ?>" alt="Car Racing Track Jus Jumpin" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Car Racing Track</h4>
                        <p class="activity-desc">Zoom into the action on our Car Racing Track, where speed, sharp turns, and competitive circuits make you feel like a champion behind the wheel!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timings & Pricing Section -->
<section class="location-section pricing-section">
    <div class="container">
        <div class="pricing-grid">
            <div class="timing-card glass-card">
                <div class="card-icon"><i class="fas fa-clock"></i></div>
                <h2 class="card-heading">Store Timings</h2>
                
                <!-- Digital Clock Display -->
                <div class="clock-container">
                    <div class="date-display" id="dateDisplay">Loading...</div>
                    <div class="digital-clock" id="digitalClock">00:00:00</div>
                </div>
                
                <!-- Status Indicator -->
                <div class="status-indicator" id="statusIndicator">
                    <i class="fas fa-store status-icon" id="statusIcon"></i>
                    <span id="statusText">Checking...</span>
                </div>
                
                <!-- Store Hours List -->
                <div class="store-hours">
                    <h3 class="hours-title"><i class="fas fa-calendar-alt"></i> Opening Hours</h3>
                    <ul class="hours-list">
                        <li class="hours-item">
                            <span class="day">Monday - Sunday</span>
                            <span class="time">11:00 AM - 9:30 PM</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Next Opening Info -->
                <div class="next-opening" id="nextOpening" style="display:none;">
                    <p>Next opening time:</p>
                    <div class="next-time" id="nextTime">Calculating...</div>
                </div>
                
                <p class="timing-note"><i class="fas fa-info-circle"></i> Please arrive <strong>15–20 minutes early</strong> for check-in, safety briefing, and Disclaimer completion.</p>
            </div>
            
            <div class="price-card glass-card">
                <div class="card-icon"><i class="fas fa-indian-rupee-sign"></i></div>
                <h2 class="card-heading">Pricing Table</h2>
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>Session Duration</th>
                            <th>Weekday   (Mon–Fri)</th>
                            <th>Weekend (Sat-Sun)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>60 Minutes</td>
                            <td>₹600</td>
                            <td>₹650</td>
                        </tr> -->
                        <tr>
                            <td>90 Minutes</td>
                            <td>₹750</td>
                            <td>₹800</td>
                        </tr>
                        <tr class="highlight-row">
                            <td>Anti-Skid Grip Socks <em>(One-time Purchase. Compulsory for your safety.)</td>
                            <td colspan="2">₹50</td>
                        </tr>
                    </tbody>
                </table>
                <div class="special-bookings-cta">
                    <p class="special-bookings-text">
                        <i class="fas fa-gift"></i> Planning something special? Get in touch for <strong>extended sessions</strong>, <strong>full-day access</strong>, <strong>birthday celebrations</strong>, <strong>kitty parties</strong>, <strong>group events</strong>, <strong>bulk bookings</strong>, <strong>corporate packages</strong>, and <strong>personalized gift vouchers.</strong>
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact-cta-button">
                        <i class="fas fa-phone"></i> Contact Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location Map Section -->
<section class="location-section map-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-map-marker-alt"></i></span> Location: Jus Jumpin Zora The Mall, Raipur</h2>
        
        <div class="address-card glass-card">
            <div class="address-content">
                <p class="address-main"><strong>Address:</strong></p>
                <p>2nd Floor, ZORA The Mall, NH-6<br>
                opposite Agriculture College, Serikhedi, Jora, Raipur, Chhattisgarh 492012.<br><strong>Call Us:</strong> (+91)98363 34433</p>
                <p class="landmarks"><strong>Landmarks:</strong>  Opposite Agriculture College, Serikhedi</p>
            </div>
        </div>
        
        <div class="map-container">
            <iframe
                src="https://maps.google.com/maps?q=jus+jumpin+2nd+Floor%2C+ZORA+The+Mall%2C+NH-6%2C+opposite+Agriculture+College%2C+Serikhedi%2C+Jora%2C+Raipur%2C+Chhattisgarh+492012&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="450"
                style="border:0;border-radius:16px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Jus Jumpin Zora The Mall- Raipur Location">
            </iframe>
        </div>
        
        <div class="map-button-wrapper">
            <a href="https://share.google/PrVSETt97Ax1ljVM1" target="_blank" rel="noopener noreferrer" class="visit-us-button">
                <i class="fas fa-map-marked-alt"></i> Visit Us
            </a>
            <a href="https://reviewthis.biz/zoramall" target="_blank" rel="noopener noreferrer" class="visit-us-button">
                <i class="fas fa-star"></i> Review Us
            </a>
        </div>
    
    </div>
</section>

<!-- Safety Section -->
<section class="location-section safety-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-shield-alt"></i></span> Safety First: Our Commitment to Secure Fun</h2>
        <p class="section-intro">At Jus Jumpin, your safety is our utmost priority. With international safety standards, a trained team of staff, and mandatory grip socks, we ensure a hazard-free, fun environment for all.</p>
        
        <h3 class="safety-subtitle">Mandatory Rules</h3>
        <div class="safety-grid">
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-socks"></i></span>
                <h4>Grip Socks Required</h4>
                <p>₹60, reusable on future visits.
                    <strong>This socks are provided for extra protection and hygiene.</strong>
                </p>
            </div>
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-file-signature"></i></span>
                <h4>Disclaimer Form & ID</h4>
                <p>All participants must sign a liability waiver and present valid government-issued photo ID before entry.</p>
            </div>
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-exclamation-triangle"></i></span>
                <h4>No Rough Play</h4>
                <p>No stunts beyond skill level - our expert staff provides personalized guidance keeping the fun safe and accessible for everyone.</p>
            </div>
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-heartbeat"></i></span>
                <h4>Health Restrictions</h4>
                <p>This activity is not suitable for guests who are pregnant, have heart conditions to ensure safety and well-being for all participants.</p>
            </div>
        </div>
    </div>
</section>

<<!-- FAQ Section -->
<section class="location-section faq-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-question-circle"></i></span> Frequently Asked Questions (FAQ)</h2>
        
        <div class="faq-accordion">
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-1"></i> <span>Is there any age limit at Jus Jumpin' Trampoline Park?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>At Jus Jumpin, we believe that age shouldn't limit you from having fun. All the age groups can visit our adult trampoline parks and enjoy to the fullest.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-2"></i> <span>What are the activities Jus Jumpin offers?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>At our selected venues, Jus Jumpin offers versatile play activities for both kids and adults. At our facilities, you can find dedicated zones for different age groups.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-3"></i> <span>Are there packages, parties, or group rates for adults?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Our vibrant theme parks are absolutely epic for hosting birthday parties and social events. For group or bulk bookings, contact our dedicated sales team for irresistible offers.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-4"></i> <span>Are there any health / age / weight restrictions?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Although at Jus Jumpin, everyone can enjoy without any restrictions, we cordially suggest pregnant guests and guests with heart conditions not participate for safety reasons. The standard weight limit at our facility is up to 100kg, but it totally depends on specific activities.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-5"></i> <span>Do I need to sign a waiver?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Yes, it is mandatory to ensure you are aware of our facility's safety guidelines. For minors, the waiver form must be signed by the guardian.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-6"></i> <span>What to wear while visiting Jus Jumpin?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>While there is no such dress code at Jus Jumpin, we recommend wearing comfortable clothes and mandatory grip socks to ensure the safety of the guests.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conclusion CTA Section -->
<section class="location-section conclusion-section">
    <div class="container">
        <h2 class="section-heading white-text"><span class="emoji-icon"><i class="fas fa-brain"></i></span> Why Jus Jumpin Raipur?</h2>
        
        <div class="conclusion-grid">
            <div class="conclusion-item">
                <span class="conclusion-emoji"><i class="fas fa-trophy"></i></span>
                <p>Eastern India's First Adult Trampoline Park</p>
            </div>
            <div class="conclusion-item">
                <span class="conclusion-emoji"><i class="fas fa-headphones"></i></span>
                <p>Live DJ + Party Vibes</p>
            </div>
            <div class="conclusion-item">
                <span class="conclusion-emoji"><i class="fas fa-dumbbell"></i></span>
                <p>Fitness Meets Fun</p>
            </div>
            <div class="conclusion-item">
                <span class="conclusion-emoji"><i class="fas fa-users"></i></span>
                <p>Perfect for Groups, Families & Events</p>
            </div>
        </div>
        
        <p class="conclusion-text"><strong>Jus Jumpin | Kolkata (ABC Square)</strong> isn't just another trampoline park — it's an <strong>experience built for adults</strong> who want to jump higher, laugh harder, and rediscover the joy of play.</p>
        
        <div class="cta-button-wrapper">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button">
                <span class="emoji-icon"><i class="fas fa-ticket-alt"></i></span> Book Your Jump Now!
            </a>
        </div>
    </div>
</section>

<!-- Hero Slider Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hero Slider Auto Transition
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dots .dot');
    let currentSlide = 0;
    const slideInterval = 4000; // 4 seconds

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Auto transition
    let autoSlide = setInterval(nextSlide, slideInterval);

    // Manual dot click
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
            clearInterval(autoSlide);
            autoSlide = setInterval(nextSlide, slideInterval);
        });
    });

    // Activities Toggle Switch
    const activityFilter = document.getElementById('activity-filter');
    const adultsSection = document.querySelector('.adults-activities');
    const kidsSection = document.querySelector('.kids-activities');

    if (activityFilter && adultsSection && kidsSection) {
        activityFilter.addEventListener('change', function() {
            if (this.checked) {
                // Switch to Kids
                adultsSection.classList.remove('active');
                setTimeout(() => {
                    kidsSection.classList.add('active');
                }, 100);
            } else {
                // Switch to Adults
                kidsSection.classList.remove('active');
                setTimeout(() => {
                    adultsSection.classList.add('active');
                }, 100);
            }
        });
    }

    // FAQ Accordion - Clean implementation
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach((item) => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const answerInner = item.querySelector('.faq-answer-inner');
        
        if (question && answer && answerInner) {
            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('open');
                
                // Close all items
                faqItems.forEach((faqItem) => {
                    faqItem.classList.remove('open');
                    const ans = faqItem.querySelector('.faq-answer');
                    if (ans) {
                        ans.style.height = '0px';
                    }
                });
                
                // If this item wasn't open, open it
                if (!isOpen) {
                    item.classList.add('open');
                    answer.style.height = answerInner.offsetHeight + 'px';
                }
            });
        }
    });
    
    // Live Digital Clock & Store Status
    const OPEN_HOUR = 11; // 11 AM
    const CLOSE_HOUR = 21; // 9 PM
    const CLOSE_MINUTE = 30; // 30 minutes

    function updateClock() {
        const now = new Date();
        
        // Update digital clock
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        const clockElement = document.getElementById('digitalClock');
        if (clockElement) {
            clockElement.textContent = `${hours}:${minutes}:${seconds}`;
        }
        
        // Update date
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const dateElement = document.getElementById('dateDisplay');
        if (dateElement) {
            dateElement.textContent = now.toLocaleDateString('en-US', options);
        }
        
        // Check store status
        checkStoreStatus(now);
    }

    function checkStoreStatus(now) {
        const currentHour = now.getHours();
        const currentMinute = now.getMinutes();
        const statusIndicator = document.getElementById('statusIndicator');
        const statusText = document.getElementById('statusText');
        const statusIcon = document.getElementById('statusIcon');
        const nextOpening = document.getElementById('nextOpening');
        const nextTime = document.getElementById('nextTime');
        
        if (!statusIndicator) return;
        
        // Check if store is open
        const isOpen = (currentHour > OPEN_HOUR || (currentHour === OPEN_HOUR && currentMinute >= 0)) && 
                      (currentHour < CLOSE_HOUR || (currentHour === CLOSE_HOUR && currentMinute <= CLOSE_MINUTE));
        
        if (isOpen) {
            // Store is OPEN
            statusIndicator.className = 'status-indicator status-open';
            statusText.textContent = 'OPEN NOW';
            statusIcon.className = 'fas fa-store status-icon';
            if (nextOpening) nextOpening.style.display = 'none';
        } else {
            // Store is CLOSED
            statusIndicator.className = 'status-indicator status-closed';
            statusText.textContent = 'CLOSED';
            statusIcon.className = 'fas fa-store-slash status-icon';
            if (nextOpening) nextOpening.style.display = 'block';
            
            // Calculate next opening time
            const tomorrow = new Date(now);
            if (currentHour >= CLOSE_HOUR && currentMinute > CLOSE_MINUTE) {
                tomorrow.setDate(tomorrow.getDate() + 1);
            }
            tomorrow.setHours(OPEN_HOUR, 0, 0, 0);
            
            const nextOpenTime = tomorrow.toLocaleTimeString('en-US', { 
                hour: 'numeric', 
                minute: '2-digit',
                hour12: true 
            });
            
            const isToday = tomorrow.getDate() === now.getDate();
            if (nextTime) {
                nextTime.textContent = isToday ? `Today at ${nextOpenTime}` : `Tomorrow at ${nextOpenTime}`;
            }
        }
    }

    // Initialize clock and update every second
    if (document.getElementById('digitalClock')) {
        updateClock();
        setInterval(updateClock, 1000);
    }
});
</script>

