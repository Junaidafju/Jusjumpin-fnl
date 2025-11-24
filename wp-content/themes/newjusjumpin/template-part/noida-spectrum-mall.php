<?php
/**
 * Template: Noida - Spectrum Mall
 * Modern location page with hero slider and glassmorphism design
 */

// Page specific variables
$title = "Noida - Spectrum Mall | Jus Jumpin";
$state = "Uttar Pradesh";
$city = "Noida";
$slug = "noida-spectrum-mall";
$address = "Phase-1, Spectrum Mall, Plot C & D, Metro Station Rd, opposite Sec- 50, Gardenia Gateway, Sector 75, Noida, Uttar Pradesh 201316";
$timings = "11:00 AM - 9:30 PM";
$pricing = "Weekday: ₹650 (90min), ₹850 (120min) | Weekend: ₹750 (90min), ₹950 (120min)";
$phone = "+919800005721";
$highlights = [
    "Infinity trampoline",
    "Foam pits",
    "Thrilling arcade",
    "Wall climbing",
    "Basketball zone",
    "Dedicated kids' play zone"
];
$activities = [
    "Infinity Trampoline", "Donut Slide", "Foam Pit", "Hanging Bridge", "Zorb Ball",
    "Bar Dodger", "Sky Steeper", "Wall Climbing", "Magnetic Wall", "Bridge War",
    "Ninja Activities", "Pin Wall", "MerryGo Round", "Wave Slide", "Horn Slide",
    "Sand Pit", "Ball Pool", "Tunnels"
];
$image_url = get_template_directory_uri() . '/assets/img/spectrum-mall1.webp';

// Schema specific variables
$alternate_name = "Jus Jumpin || Kids Activity, Soft Play Zone";
$description = "Jus Jumpin is an indoor trampoline park and kids entertainment zone — perfect for playful kids and thrill-loving adults looking to unleash their inner jumper.";
$email = "info@jusjumpin.com";
$postal_code = "201316";
$latitude = "28.58352";
$longitude = "77.36838";
$has_map = "https://maps.app.goo.gl/34gH41z11Wp1o24y6";
$price_range = "₹₹";
$keywords = "trampoline park, kids entertainment zone, indoor play area, jump fun";
// $rating_value = "4.8"; // Example: if available, uncomment and set
// $review_count = "2795"; // Example: if available, uncomment and set

?>

<!-- Hero Slider Section -->
<section class="location-hero-slider">
    <div class="hero-slider-wrapper">
        <div class="hero-slide active">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/spectrum-mall1.webp'); ?>" alt="Jus Jumpin Kolkata ABC Square" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/spectrum-mall2.webp'); ?>" alt="Adult Trampoline Park Kolkata" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/KolkataABC3.jpg'); ?>" alt="Kolkata ABC Square Activities" class="hero-slide-img">
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
                Jus Jumpin<br>Specturm Mall - Noida

            </h1>
            <p class="location-hero-subtitle">Dive into the world of pure joy and laughter at Jus Jumpin. With more than 15 thrilling gaming activities for kids, soft playzone, arcade games zone, and a large range of delicious food, a memorable day out is guaranteed with the Kids’ Playzone Adventure Park in Noida.</p>
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
                <h2 class="section-title gradient-text">Ultimate Fun Awaits</h2>
                <p class="section-text">Dive into the fun-filled world of <strong>Jus Jumpin, </strong> a premier Kid's play Zone in Noida Spectrum Mall. With a thoughtfully designed trampoline park and multiple play activities for kids, Jus Jumpin has redefined the concept of a kids' play area. At our facility, kids don't just play, but they learn while playing. Helping in stimulating a holistic growth of the kids, Jus Jumpin is an ideal place where parents can bring their children again and again.</p>
                <p class="section-text">Apart from our international-grade wall-to-wall trampoline, our indoor kids' play area is packed with 15+ exciting interactive activities. Colourful ball pool, foam pit, doll house, merry-go-round, zebra swing, and many more exciting fun await at Jus Jumpin.</p>
                <p class="section-text">At our kids' play zone in Noida, we offer a safe environment with international safety and hygiene standards in place, so that all the little jumpers can play freely without any fear. Our vibrant and energetic space is ideal for hosting enchanting birthday parties and social events that the kids will absolutely love. At Jus Jumpin, we turn ordinary birthday parties into a memorable day with personalised decorations, joy-filled party games and activities, exclusive access to our vibrant playzone, in-house music, and more. Visit Jus Jumpin, a perfect fun space where memories are crafted.</p>
            </div>
            <div class="content-right">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/spectrum-mall_body.webp'); ?>" alt="Noida Spectrum Mall" class="building-image">
             <div class="image-overlay">
                    <h2 class="building-name">Noida Spectrum Mall</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Experience Section -->
<section class="location-section experience-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-business-time"></i></span> Key Highlights</h2>
        <p class="section-intro">Jus Jumpin at Spectrum Mall Noida features <strong>an infinity trampoline, foam pits, thrilling arcade, wall climbing, basketball zone, and a dedicated kids' play zone.</strong>
</p>
        
<div class="experience-grid">
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Kids-activity-highlights.webp'); ?>" alt="Creative & Educational Activities" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-book"></i> Creative & Educational Activities</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Age-specific-activities-highlights.webp'); ?>" alt="Age Specific Play Zones" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-child"></i> Age Specific Kids Play Zones</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/FamilyKolkataABC.jpg'); ?>" alt="Birthday Celebrations" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-birthday-cake"></i> Perfect Birthday Celebrations</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Resting-zone-highlights.webp'); ?>" alt="Dedicated Resting Zone For Parents" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-smile"></i> Dedicated Resting Zone For Parents</h3>
            </div>
        </div>
        
        <p class="section-footer-text">Dedicated party area perfect for <strong>hosting amazing birthday parties</strong> and <strong>corporate events </strong>in Kolkata. The venue features an <strong>awesome in-house DJ</strong> and a <strong>designated cafe with beverages.</strong></p>
    </div>
</section>

<!-- Activities Section -->
<section class="location-section activities-section">
    <div class="container">
        <h2 class="section-heading2"><span class="emoji-icon"><i class="fas fa-gamepad"></i></span> Our Activities</h2>
        <p class="section-intro">Beyond India's premier trampoline park, experience mind-bending VR games, a dedicated soft play zone for kids, an international-standard arcade, and 15+ interactive gaming activities curated just for you.</p>
        <!-- Toggle Switch -->
        <div class="activities-toggle-wrapper">
            <label for="activity-filter" class="switch" aria-label="Toggle Between Adults and Kids Activities">
                <input type="checkbox" id="activity-filter" checked />
                <!-- <span>Adults</span> -->
                <span>Kids</span>
            </label>
        </div>
        
        <!-- Adults Activities Section -->
        <!-- <div class="activities-content adults-activities" data-category="adults"> -->
            <!-- <div class="activities-grid"> -->
                <!-- Adult Activity 1 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Infinity Trampoline">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/INFINITY_TRAMPOLINE_abc.webp'); ?>" alt="Infinity Trampoline - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Infinity Trampoline</h4>
                        <p class="activity-desc">Endless bouncing fun on our interconnected trampoline zones. Perfect for fitness enthusiasts and adrenaline seekers!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 2 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Donut Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Donut_Slide_abc.webp'); ?>" alt="Donut Slide - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Donut Slide</h4>
                        <p class="activity-desc">Experience gravity-powered thrills as you slide down our exciting donut-shaped tunnel at high speed!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 3 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Foam Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Foampit_abc.jpg'); ?>" alt="Foam Pit - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Foam Pit</h4>
                        <p class="activity-desc">Jump into a massive pit filled with soft foam cubes. Safe landings guaranteed for all your aerial stunts!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 4 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Hanging Bridge">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hanging_bridge_abc.webp'); ?>" alt="Hanging Bridge - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Hanging Bridge</h4>
                        <p class="activity-desc">Test your balance and coordination as you navigate across our suspended rope bridge challenge.</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 5 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Zorb Ball">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Zorb_ball_abc.jpg'); ?>" alt="Zorb Ball - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Zorb Ball</h4>
                        <p class="activity-desc">Roll around in giant inflatable balls! Hilarious fun and great exercise combined in one activity.</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 6 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Bar Dodger">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/WipeOutKolkataABC.png'); ?>" alt="Bar Dodger - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Bar Dodger</h4>
                        <p class="activity-desc">Duck, jump, and dodge rotating bars in this fast-paced obstacle challenge. Test your reflexes!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 7 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Sky Steeper">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Sky_stepper_abc.png'); ?>" alt="Sky Steeper - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Sky Steeper</h4>
                        <p class="activity-desc">Challenge yourself on steep inclined trampolines. Perfect for testing your jumping power and endurance!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 8 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Wall Climbing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Wall_climb_abc.jpg'); ?>" alt="Wall Climbing - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wall Climbing</h4>
                        <p class="activity-desc">Scale challenging climbing walls with various difficulty levels. Build strength and conquer new heights!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 9 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Magnetic Wall">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Magnet_wall_abc.jpeg'); ?>" alt="Magnetic Wall - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Magnetic Wall</h4>
                        <p class="activity-desc">Stick to the wall in our unique magnetic suit experience. Defy gravity in this one-of-a-kind attraction!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 10 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Bridge War">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/KolkataABC3.jpg'); ?>" alt="Bridge War - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Bridge War</h4>
                        <p class="activity-desc">Battle your friends on a suspended platform using foam jousting sticks. Last one standing wins!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 11 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Ninja Activities">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Ninja_Activities_abc.jpg'); ?>" alt="Ninja Activities - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Ninja Activities</h4>
                        <p class="activity-desc">Complete ninja warrior-style obstacles. Test agility, strength, and endurance like a true warrior!</p>
                    </div>
                </div> -->
                
                <!-- Adult Activity 12 -->
                <!-- <div class="activity-card glass-card" data-activity-name="Pin Wall">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Pin_wall_abc.webp'); ?>" alt="Pin Wall - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Pin Wall</h4>
                        <p class="activity-desc">Create an impression of your body on our 3D pin wall. Strike a pose and see yourself immortalized!</p>
                    </div>
                </div> -->
            <!-- </div>
        </div> -->
         <!-- Kids Activities Section -->
       <!-- Kids Activities Section -->
       <div class="activities-content kids-activities active" data-category="kids">
            <div class="activities-grid">
                <!-- Kids Activity 1 -->
                <div class="activity-card glass-card" data-activity-name="Wave Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Wave-slide-activity.webp'); ?>" alt="Wave Slide At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wave Slide</h4>
                        <p class="activity-desc">Glide down our thrilling Wave Slide and feel the rush of fun as you swoosh through smooth waves of excitement!</p>
                    </div>
                </div>
                
                <!-- Kids Activity 2 -->
                <div class="activity-card glass-card" data-activity-name="Sand Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/kids_playing_sandpit_activity.webp'); ?>" alt="Sand Pit At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Sand Pit</h4>
                        <p class="activity-desc">Build castles, dig tunnels, or just enjoy the soft touch of sand in this creative and calming play zone.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 3 -->
                <div class="activity-card glass-card" data-activity-name="Soft Play Area">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/kids_playing_softplay_activity.webp'); ?>" alt="Soft Play Area At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Soft Play Area</h4>
                        <p class="activity-desc">A safe, cushioned wonderland where kids can jump, climb, and tumble freely without a worry in the world.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 4 -->
                <div class="activity-card glass-card" data-activity-name="Pathways">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/pathway_activity.webp'); ?>" alt="Pathways Area At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Pathways</h4>
                        <p class="activity-desc">Explore our playful pathways designed for discovery, laughter, and little adventures at every turn.</p>
                    </div>
                </div>
                
                <!-- Kids Activity 5 -->
                <div class="activity-card glass-card" data-activity-name="Doll House">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/kids_playing_dollhouse_activities.webp'); ?>" alt="Doll House Area At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Doll House</h4>
                        <p class="activity-desc">Step into a magical miniature world filled with charm, imagination, and make-believe fun!</p>
                    </div>
                </div>
                
                <!-- Kids Activity 6 -->
                <div class="activity-card glass-card" data-activity-name="Tunnel Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/tunnel_slide_Activity.webp'); ?>" alt="Tunnel Slide Area At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Tunnel Slide</h4>
                        <p class="activity-desc">Zoom through twisty tunnels that spark excitement and make every slide a surprise-filled adventure.</p>
                    </div>
                </div>
                <!-- Kids Activity 7 -->
                <div class="activity-card glass-card" data-activity-name="Merry Go Round">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/indian_kids_merry_go_round_activity.webp'); ?>" alt="Merry Go Round At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Merry Go Round</h4>
                        <p class="activity-desc">Spin, laugh, and twirl to your heart’s delight — the classic ride that never goes out of style!</p>
                    </div>
                </div>
                <!-- Kids Activity 8 -->
                <div class="activity-card glass-card" data-activity-name="Zebra Swing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/zebra_swing_activity.webp'); ?>" alt="Zebra Swing At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Zebra Swing</h4>
                        <p class="activity-desc">Hop on the zebra and swing away — balancing fun and thrill in one adorable ride.</p>
                    </div>
                </div>
                <!-- Kids Activity 9 -->
                <div class="activity-card glass-card" data-activity-name="Foam Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/foam_pit_activity2.webp'); ?>" alt="Foam Pit Area At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Foam Pit</h4>
                        <p class="activity-desc">Leap high and land soft in our fluffy foam cubes — a safe spot for flips, jumps, and fearless fun!</p>
                    </div>
                </div>
                <!-- Kids Activity 10 -->
                <div class="activity-card glass-card" data-activity-name="Wall Climbing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/climbing_wall_activity.webp'); ?>" alt="Wall Climbing At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wall Climbing</h4>
                        <p class="activity-desc">Reach new heights and boost your confidence as you climb up vibrant, kid-friendly walls.</p>
                    </div>
                </div>
                <!-- Kids Activity 11 -->
                <div class="activity-card glass-card" data-activity-name="Obstacle Zone">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/obstacle_zone_activities.webp'); ?>" alt="Obstacle Zone At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Obstacle Zone</h4>
                        <p class="activity-desc">Crawl, jump, and balance your way through fun challenges that test strength, speed, and coordination!</p>
                    </div>
                </div>
                <!-- Kids Activity 12 -->
                <div class="activity-card glass-card" data-activity-name="Donut Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/donut_slide_activity.webp'); ?>" alt="Donut Slide Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Donut Slide</h4>
                        <p class="activity-desc">Spin, slide, and laugh your way down the Donut Slide — a twisting tunnel of pure joy that guarantees a rush of fun every time!</p>
                    </div>
                </div>
                <!-- Kids Activity 13 -->
                <div class="activity-card glass-card" data-activity-name="Ball Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ball_pit_Activity.webp'); ?>" alt="Ball Pit At Jus Jumpin Avani Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Ball Pit</h4>
                        <p class="activity-desc">Dive into a sea of colorful balls — jump, toss, and laugh your heart out in this vibrant pool of fun and joy!</p>
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
                        <tr>
                            <td>30 Minutes</td>
                            <td>₹400</td>
                            <td>₹400</td>
                        </tr>
                        <tr>
                            <td>60 Minutes</td>
                            <td>₹500</td>
                            <td>₹500</td>
                        </tr>
                        <tr class="highlight-row">
                            <td>Anti-Skid Grip Socks <em>(One-time Purchase. Compulsory for your safety.)</td>
                            <td colspan="2">₹40</td>
                        </tr>
                    </tbody>
                </table>
                <div class="special-bookings-cta">
                    <p class="special-bookings-text">
                        <i class="fas fa-gift"></i> Planning something special? Get in touch for <strong>extended sessions</strong>, <strong>full-day access</strong>, <strong>birthday celebrations</strong>, <strong>kitty parties</strong>, <strong>group events</strong>, <strong>bulk bookings</strong>, <strong>corporate packages</strong>, and <strong>personalized gift vouchers.</strong>
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="contact-cta-button">
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
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-map-marker-alt"></i></span> Location: Jus Jumpin Spectrum Mall Noida?</h2>
        
        <div class="address-card glass-card">
            <div class="address-content">
                <p class="address-main"><strong>Address:</strong></p>
                <p>Phase-1, Spectrum Mall, Plot C & D, Metro Station Rd<br>
            opposite Sec- 50, Gardenia Gateway, Sector 75, Noida, Uttar Pradesh 201316<br><strong>Call Us:</strong> (+91)98000 05721</p>
                <p class="landmarks"><strong>Landmarks:</strong> Near Gardenia Gateway, Sector 75 </p>
            </div>
        </div>
        
        <div class="map-container">
            <iframe
                src="https://maps.google.com/maps?q=Jus+Jumpin+spectrumPhase-1%2C+Spectrum+Mall%2C+Plot+C+%26+D%2C+Metro+Station+Rd%2C+opposite+Sec-+50%2C+Gardenia+Gateway%2C+Sector+75%2C+Noida%2C+Uttar+Pradesh+20131&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="450"
                style="border:0;border-radius:16px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Jus Jumpin Noida Spectrum Mall">
            </iframe>
        </div>
        
        <div class="map-button-wrapper">
            <a href="https://share.google/iUA6iXgyH0tErxMS7" target="_blank" rel="noopener noreferrer" class="visit-us-button">
                <i class="fas fa-map-marked-alt"></i> Visit Us
            </a>
            <a href="https://reviewthis.biz/Jus-jumpin" target="_blank" rel="noopener noreferrer" class="visit-us-button">
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
                <button class="faq-question"><i class="fas fa-1"></i> <span>What age group of Kids can play at Jus Jumpin?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>All the children aged between 6 months to 12 years can jump into our kids' playzone.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-2"></i> <span>Can adults also play in the play area?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>For the not-so-little jumpers, Jus Jumpin have specific venues where the adults can have a fun time.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-3"></i> <span>What activities are available at Jus Jumpin?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>At our indoor play zones for kids, we offer a large range of action-packed activities, including trampoline park, toddler play zones, colourful sides, obstacle courses and more than 15 gaming activities.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-4"></i> <span>Does Jus Jumpin offer any special packages or Party offers?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Our dedicated party zone is one of the best spots to host a birthday party for your little one. We brighten up parties and gatherings with personalised decorations, tattoo artists, mascots and gaming activities. For special offers and packages, you can contact our dedicated sales team.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-5"></i> <span>Can I host a birthday party at Jus Jumpin?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Our vibrant indoor party area provides a safe and fun-packed environment, along with dedicated party zones to host the best birthday parties for kids.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-6"></i> <span>Is outside food allowed in the play area?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>To maintain safety and hygiene standards at our facilities, we don't allow outside food. The guests can savour our in-house snacks and refreshments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conclusion CTA Section -->
<section class="location-section conclusion-section">
    <div class="container">
        <h2 class="section-heading white-text"><span class="emoji-icon"><i class="fas fa-brain"></i></span> Why Jus Jumpin Spectrum Mall Noida?</h2>
        
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
        
        <p class="conclusion-text"><strong>Jus Jumpin | Spectrum Mall (Noida)</strong> isn't just another trampoline park — it's an <strong>experience built for adults</strong> who want to jump higher, laugh harder, and rediscover the joy of play.</p>
        
        <div class="cta-button-wrapper">
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="cta-button">
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

