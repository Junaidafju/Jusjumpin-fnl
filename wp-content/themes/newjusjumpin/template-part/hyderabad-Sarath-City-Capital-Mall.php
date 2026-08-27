<?php
/**
 * Template: Hyderabad - Sarath City Capital Mall
 * Modern location page with hero slider and glassmorphism design
 */

// Page specific variables
$title = "Sarath city capital mall | Jus Jumpin";
$state = "Telangana";
$city = "Hyderabad";
$slug = "hyderabad-sarath-city-capital-mall";
$address = "JUS JUMPIN, 4TH FLOOR, Sarath City Capital Mall, Gachibowli Rd, Kondapur, Whitefields, HITEC City, Hyderabad, Telangana 500084";
$timings = "11:00 AM - 9:30 PM";
$pricing = "Weekday: ₹650 (90min), ₹850 (120min) | Weekend: ₹750 (90min), ₹950 (120min)";
$phone = "+919836229922";
$highlights = [
    "Infinity trampoline",
    "360 Cycling",
    "Football",
    "Wall climbing",
    "Basketball zone",
    "Dedicated kids\' play zone"
];
$activities = [
    "Infinity Trampoline",
    "Donut Slide",
    "Foam Pit",
    "Hanging Bridge",
    "Zorb Ball",
    "Bar Dodger",
    "Sky Steeper",
    "Wall Climbing",
    "Magnetic Wall",
    "Bridge War",
    "Ninja Activities",
    "Pin Wall",
    "MerryGo Round",
    "Wave Slide",
    "Horn Slide",
    "Sand Pit",
    "Ball Pool",
    "Tunnels"
];
$image_url = get_template_directory_uri() . '/assets/img/KolkataABC1.jpg';

// Schema specific variables
$alternate_name = "Jus\' Jumpin Adult Trampoline Park and Kids Entertainment";
$description = "Jus Jumpin is an indoor trampoline park and kids entertainment zone — perfect for playful kids and thrill-loving adults looking to unleash their inner jumper.";
$email = "info@jusjumpin.com";
$postal_code = "700161";
$latitude = "22.58620";
$longitude = "88.45265";
$has_map = "https://maps.app.goo.gl/wn1S3cXBUgyEwRm6A";
$price_range = "₹₹";
$keywords = "trampoline park, kids entertainment zone, indoor play area, jump fun, Kolkata";
$rating_value = "4.8"; // Example: if available, uncomment and set
$review_count = "2795"; // Example: if available, uncomment and set

?>

<!-- Hero Slider Section -->
<section class="location-hero-slider">
    <div class="hero-slider-wrapper">
        <div class="hero-slide active">
            <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Sarath-city-Mall-Hyderabad.png"
                alt="Jus Jumpin Sarath City Capital Mall Hyderabad" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Sarath-city-capital-Mall.png"
                alt="Adult Trampoline Park Hyderabad Sarath City Mall" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/activity2.png"
                alt="Sarath City Capital Mall Hyderabad Activities" class="hero-slide-img">
        </div>
        <div class="hero-slide">
            <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/activity.png"
                alt="Trampoline Park Fun Hyderabad Sarath City Mall" class="hero-slide-img">
        </div>
    </div>
    <div class="hero-slider-overlay"></div>
    <div class="hero-slider-content">
        <div class="container">
            <h1 class="location-hero-title">
                <span class="hero-emoji"></span>
                Jus Jumpin<br>Sarath City Capital Mall
            </h1>
            <p class="location-hero-subtitle">Dive into the world of pure joy and laughter at Jus Jumpin. With more than
                20 exciting gaming activities for every fun loving soul. An action packed day is guaranteed with us.</p>
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
                <p class="section-text">Jump into a whole new world of laughter and joy at <strong>Jus Jumpin, Sarath City Capital Mall,</strong>  the ultimate indoor playzone in Hyderabad. Laced with 20+ exciting activities and attractions, Jus Jumpin creates a perfect world full of fun, where your age means absolutely nothing. Designed to cater to the fun-loving kid inside you, Jus Jumpin at Sarath City Capital Mall offers an infinity trampoline, a knee-shaking adventure course, a wall climb, a zip line, and a bunch of activities you can’t resist. Built to host every age of fun-loving people, Jus Jumpin Sarath City Capital Mall consists of dedicated play zones for kids and adults.  At our facilities, we adhere to global safety standards and an impeccably hygienic environment, so you can worry less and jump more.</p>
                <p class="section-text">Besides a world-class infinity trampoline and indoor play area in Hyderabad, Jus Jumpin also comes with an awesome party zone to host vibrant birthday parties for Kids. Along with custom decoration, affordable birthday party packages, and food tailored to your preference, we provide magic shows, tattoo artists, and numerous party activities to turn your party into a day to remember.</p>
                <!-- <p class="section-text">At<strong> Jus Jumpin, </strong>We strive to go beyond ordinary. Our
                    thoughtfully designed, vibrant space radiates energy, generates laughter, and creates memories that
                    last for years.</p> -->
            </div>
            <div class="content-right">
                <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/sarath-City.png"
                    alt="Sarath City Capital Mall Hyderabad Building" class="building-image">
                <div class="image-overlay">
                    <h2 class="building-name">Sarath City Capital Mall</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Experience Section -->
<section class="location-section experience-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-business-time"></i></span> Key Highlights
        </h2>
        <p class="section-intro">Jus Jumpin at Sarath City Capital Mall features <strong>an infinity trampoline,
                Adventure, 360 degree Cycle, wall climbing, basketball zone, and a dedicated kids' play zone.</strong>
        </p>

        <div class="experience-grid">
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/KittyKolkataABC.jpg'); ?>"
                        alt="Kitty Parties at Jus Jumpin Sarath City Mall Hyderabad" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-birthday-cake"></i> Amazing Kitty <br>Parties</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/CorporateKolkataABC.jpg'); ?>"
                        alt="Corporate Events at Jus Jumpin Hyderabad Sarath City Mall" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-building"></i> Corporate Team-Building Events</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/FamilyKolkataABC.jpg'); ?>"
                        alt="Family Celebrations at Jus Jumpin Sarath City Capital Mall Hyderabad" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fas fa-users"></i> Perfect Family Celebrations</h3>
            </div>
            <div class="experience-card glass-card">
                <div class="card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/jus bites.jpg'); ?>"
                        alt="Inhouse Cafe and Restaurant Jus Bites Hyderabad" loading="lazy">
                </div>
                <h3 class="card-title gradient-text"><i class="fa-solid fa-martini-glass-citrus"></i> Inhouse Cafe
                    <br>(Jus' Bites)
                </h3>
            </div>
        </div>

        <p class="section-footer-text">Dedicated party area perfect for <strong>hosting amazing birthday
                parties</strong> and <strong>corporate events </strong>in Hyderabad. The venue features an <strong>vibrant
                decor, cool music,</strong> and <strong>time full of laughter.</strong></p>
    </div>
</section>

<!-- Activities Section -->
<section class="location-section activities-section">
    <div class="container">
        <h2 class="section-heading2"><span class="emoji-icon"><i class="fas fa-gamepad"></i></span> Our Activities</h2>
        <p class="section-intro">Experience India's most exciting infinity trampoline park with spine-tingling
            Adventure, wall climbing, 360 degree cycling and 20+ interactive gaming activities curated just for you.</p>
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
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Infinity_trampoline_activity.webp?v1'); ?>"
                            alt="Infinity Trampoline for Adults at Sarath City Capital Mall Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Infinity Trampoline</h4>
                        <p class="activity-desc">Jump endlessly across interconnected trampolines built for energetic
                            fun and gravity-defying jumps.</p>
                    </div>
                </div>

                <!-- Adult Activity 2 -->
                <div class="activity-card glass-card" data-activity-name="Donut Slide">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/DODGEBALL.png"
                            alt="Trampoline Dodgeball for Adults in Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Dodge ball </h4>
                        <p class="activity-desc">Duck, dodge and throw your way to victory in an action-packed
                            trampoline dodgeball showdown.</p>
                    </div>
                </div>

                <!-- Adult Activity 3 -->
                <div class="activity-card glass-card" data-activity-name="Sky stepper">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Sky-stepper-new.png"
                            alt="Sky Stepper Activity for Adults Hyderabad Sarath City Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Sky Stepper</h4>
                        <p class="activity-desc">Test your balance and confidence as you step across elevated platforms
                            high above the ground.</p>
                    </div>
                </div>

                <!-- Adult Activity 4 -->
                <div class="activity-card glass-card" data-activity-name="Adventure">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/themes/newjusjumpin/assets/img/unmatched_variety.jpg"
                            alt="Adventure Obstacle Course in Hyderabad Sarath City Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Adventure</h4>
                        <p class="activity-desc">Climb, crawl and conquer exciting obstacles designed to challenge
                            agility, strength and coordination.
                        </p>
                    </div>
                </div>

                <!-- Adult Activity 5 -->
                <div class="activity-card glass-card" data-activity-name="Wall Climbing">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/themes/newjusjumpin/assets/img/climbing_wall_activity.webp"
                            alt="Wall Climbing for Adults at Sarath City Capital Mall Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wall Climbing</h4>
                        <p class="activity-desc">Scale colourful climbing walls with varying difficulty levels for an
                            exciting vertical adventure.</p>
                    </div>
                </div>

                <!-- Adult Activity 6 -->
                <div class="activity-card glass-card" data-activity-name="Donut slide ">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Donut-slide-adult-new.png"
                            alt="Donut Slide for Adults in Hyderabad Sarath City Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Donut slide </h4>
                        <p class="activity-desc">Hop onto an inflatable tube and enjoy a fast, thrilling ride down our
                            exciting donut slide.</p>
                    </div>
                </div>

                <!-- Adult Activity 7 -->
                <div class="activity-card glass-card" data-activity-name="Tunnel Slide">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/tunnel-slide-new.png"
                            alt="Tunnel Slide Activity for Adults Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Tunnel Slide</h4>
                        <p class="activity-desc">Twist and zoom through enclosed tunnels for a smooth, speedy and
                            laughter-filled sliding adventure.</p>
                    </div>
                </div>
               <!-- Adult Activity 8 -->
                <div class="activity-card glass-card" data-activity-name="Zorb Ball">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Zorb-Ball.png"
                            alt="Zorb Ball - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Zorb Ball</h4>
                        <p class="activity-desc">Step inside a giant inflatable sphere and roll, bounce, and tumble for an unforgettable thrill.</p>
                    </div>
                </div>
<!-- Adult Activity 9 -->
                <div id="zip-line-card" class="activity-card glass-card" data-activity-name="Zip Line">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/ZIP-LINE.png"
                            alt="Zip Line - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Zip Line</h4>
                        <p class="activity-desc">Step off the platform and soar through the air on an exhilarating zip line ride filled with high-flying fun.</p>
                    </div>
                </div>
<!-- Adult Activity 10 -->
                <div class="activity-card glass-card" data-activity-name="bar dodger">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/bar-dodger.jpeg"
                            alt="Bar dodger - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Bar Dodger</h4>
                        <p class="activity-desc">Duck, jump, and weave past fast-spinning padded beams in a thrilling, high-energy test of speed and agility.</p>
                    </div>
                </div>
                <!-- Adult Activity 11 -->
                <div class="activity-card glass-card" data-activity-name="360 cycling">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/360-Cycle-At-sarath-City.jpeg"
                            alt="360 Cycling Activity at Sarath City Capital Mall Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">360 Cycle</h4>
                        <p class="activity-desc">Pedal your way into a complete 360° loop for an adrenaline-filled
                            cycling experience like no other.</p>
                    </div>
                </div>
<!-- Adult Activity 12 -->
                <div class="activity-card glass-card" data-activity-name="Battle Beam">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Battle-Beam-sarath-city.png"
                            alt="Battle Beam - Adults" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Battle Beam</h4>
                        <p class="activity-desc">Grab a padded pugil stick, keep your balance, and knock your opponent off the beam into the soft foam pit below!</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Kids Activities Section -->
        <div class="activities-content kids-activities" data-category="kids">
            <div class="activities-grid">
                <!-- Kids Activity 1 -->
                <div class="activity-card glass-card" data-activity-name="Ball Pool">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/themes/newjusjumpin/assets/img/Interactive_ball_pool_activity.webp?v1"
                            alt="Kids Ball Pool Play Area Hyderabad Sarath City Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Ball Pool</h4>
                        <p class="activity-desc">Dive into a colourful sea of soft balls where little ones can jump,
                            play and explore safely.</p>
                    </div>
                </div>

                <!-- Kids Activity 2 -->
                <div class="activity-card glass-card" data-activity-name="Wave Slide">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Wave-slide-activity.webp?v1'); ?>"
                            alt="Wave Slide for Kids in Hyderabad Sarath City Capital Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Wave Slide</h4>
                        <p class="activity-desc">Glide down gentle wave-shaped slides that add extra fun with every
                            exciting ride.</p>
                    </div>
                </div>

                <!-- Kids Activity 3 -->
                <div class="activity-card glass-card" data-activity-name="Swing">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Swing_activity.webp?v1'); ?>"
                            alt="Kids Swings Activity at Jus Jumpin Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Swing</h4>
                        <p class="activity-desc">Soar through the air and enjoy timeless fun on swings designed for
                            smiles and excitement.</p>
                    </div>
                </div>

                <!-- Kids Activity 4 -->
                <div class="activity-card glass-card" data-activity-name="Sand Pit">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/kids_playing_sandpit_activity.webp?v1'); ?>"
                            alt="Clean Sand Pit Play Zone for Kids Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Sand Pit</h4>
                        <p class="activity-desc">Dig, build, and create! Our clean sand pit offers endless creative play
                            opportunities for little ones.</p>
                    </div>
                </div>

                <!-- Kids Activity 5 -->
                <div class="activity-card glass-card" data-activity-name="Ball Pool">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/football.png"
                            alt="Kids Football Activity Zone at Sarath City Mall Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Football</h4>
                        <p class="activity-desc">Kick, pass and score exciting goals in a fun football zone perfect for
                            friendly matches.</p>
                    </div>
                </div>

                <!-- Kids Activity 6 -->
                <div class="activity-card glass-card" data-activity-name="Tunnels">
                    <div class="activity-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Tunnel_activities.webp?v1'); ?>"
                            alt="Kids Tunnels Play Area at Sarath City Capital Mall Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Tunnels</h4>
                        <p class="activity-desc">Crawl through exciting tunnels and explore! Great for developing motor
                            skills and imagination.</p>
                    </div>
                </div>
                <!-- Kids Activity 7 -->
                <div class="activity-card glass-card" data-activity-name="Toddler play area">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/themes/newjusjumpin/assets/img/indian_kids_merry_go_round_activity.webp?v1"
                            alt="Merry Go Round Activity for Kids in Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Merry Go Round</h4>
                        <p class="activity-desc">Spin into laughter on a classic merry-go-round that delights kids with
                            every turn.</p>
                    </div>
                </div>
                <!-- Kids Activity 8 -->
                <div class="activity-card glass-card" data-activity-name="Horn Slide">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/horn-slide.png"
                            alt="Kids Horn Slide Activity at Sarath City Capital Mall Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Horn Slide</h4>
                        <p class="activity-desc">Zoom down our uniquely designed horn slide for a fast, fun and
                            unforgettable adventure.</p>
                    </div>
                </div>
                <!-- Kids Activity 9 -->
                <div class="activity-card glass-card" data-activity-name="Trampoline">
                    <div class="activity-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcLZCmWa3yAHsfvE3IkgHPEJE7zZNcTQxJyHsZtScMmm1Fka8LoUWL6y4&s=10>"
                            alt="Kids Trampoline Play Area Hyderabad Sarath City Mall" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Trampoline</h4>
                        <p class="activity-desc">Bounce higher, laugh louder and enjoy endless fun on our exciting
                            trampoline arena.</p>
                    </div>
                </div>
                <!-- Kids Activity 10 -->
                <div class="activity-card glass-card" data-activity-name="Seesaw">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/see-saw-at-jusjumpin.png"
                            alt="Kids Seesaw Play Activity at Jus Jumpin Hyderabad" loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Seesaw</h4>
                        <p class="activity-desc">Rock back and forth with friends on a classic playground favourite that
                            never gets old.</p>
                    </div>
                </div>
                <!-- Kids Activity 11 -->
                <div class="activity-card glass-card" data-activity-name="Soft play area">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/Kitchen.png" alt="Kids Toy Kitchen Soft Play Area Hyderabad"
                            loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Kitchen</h4>
                        <p class="activity-desc">Cook up endless imaginary feasts in a playful kitchen designed to
                            spark young creativity.</p>
                    </div>
                </div>
                <!-- Kids Activity 12 -->
                <div class="activity-card glass-card" data-activity-name="Soft play area">
                    <div class="activity-image">
                        <img src="https://www.jusjumpin.com/wp-content/uploads/2026/07/doll-house-.png" alt="Kids Doll House Play Zone Hyderabad Sarath City Capital Mall"
                            loading="lazy">
                    </div>
                    <div class="activity-info">
                        <h4 class="activity-title">Doll House</h4>
                        <p class="activity-desc">Step into a charming doll house where imagination brings every room and
                            story to life.</p>
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

                <p class="timing-note"><i class="fas fa-info-circle"></i> Please arrive <strong>15–20 minutes
                        early</strong> for check-in, safety briefing, and Disclaimer completion.</p>
            </div>

            <div class="price-card glass-card">
                <div class="card-icon"><i class="fas fa-indian-rupee-sign"></i></div>
                <h2 class="card-heading">Pricing Table</h2>
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>Session Duration</th>
                            <th>SUN - SAT</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>90 Minutes</td>
                            <td>₹1100</td>
                           
                        </tr>
                        <tr>
                            <td>Extensions</td>
                            <td>₹250/₹450</td>
                            
                        </tr>
                        <tr class="highlight-row">
                            <td>Anti-Skid Grip Socks <em><br>(One-time Purchase. Compulsory for your safety.)</td>
                            <td colspan="2">₹50</td>
                        </tr>
                    </tbody>
                </table>
                <div class="special-bookings-cta">
                    <p class="special-bookings-text">
                        <i class="fas fa-gift"></i> Planning something special? Get in touch for <strong>extended
                            sessions</strong>, <strong>full-day access</strong>, <strong>birthday celebrations</strong>,
                        <strong>kitty parties</strong>, <strong>group events</strong>, <strong>bulk bookings</strong>,
                        <strong>corporate packages</strong>, and <strong>personalized gift vouchers.</strong>
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
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-map-marker-alt"></i></span> Location: Jus
            Jumpin – Sarath City Capital Mall</h2>

        <div class="address-card glass-card">
            <div class="address-content">
                <p class="address-main"><strong>Address:</strong></p>
                <p>JUS JUMPIN, Unit No. SF - 26-30, 4th Floor, Sarath City Capital Mall,<br>
                    Gachibowli Rd, Kondapur, Whitefields, HITEC City, Hyderabad, Telangana 500084<br><strong>Call
                        Us:</strong> +91 9836888333</p>
                <p class="landmarks"><strong>Landmarks:</strong> Sarath City Capital Mall, Gachibowli Rd
                </p>
            </div>
        </div>

        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31644.387475892054!2d78.33894525257719!3d17.453833537431986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93ba1cc0bc19%3A0x80a949c1d6777179!2sJus&#39;%20Jumpin&#39;%20%7C%7C%20Trampoline%20%26%20Adventure%20Park!5e0!3m2!1sen!2sin!4v1783949963617!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;border-radius:16px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Jus Jumpin Hyderabad Sarath City Capital Mall Location">
            </iframe>
        </div>

        <div class="map-button-wrapper">
            <a href="https://maps.app.goo.gl/WFXLjjgzWDAPsJr67" target="_blank" rel="noopener noreferrer"
                class="visit-us-button">
                <i class="fas fa-map-marked-alt"></i> Visit Us
            </a>
            <a href="https://reviewthis.biz/jusjumpin-sarathcity" target="_blank" rel="noopener noreferrer"
                class="visit-us-button">
                <i class="fas fa-star"></i> Review Us
            </a>
        </div>

    </div>
</section>

<!-- Safety Section -->
<section class="location-section safety-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-shield-alt"></i></span> Safety First: Our
            Commitment to Secure Fun</h2>
        <p class="section-intro">At Jus Jumpin, your safety is our utmost priority. With international safety standards,
            a trained team of staff, and mandatory grip socks, we ensure a hazard-free, fun environment for all.</p>

        <h3 class="safety-subtitle">Mandatory Rules</h3>
        <div class="safety-grid">
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-socks"></i></span>
                <h4>Grip Socks Required</h4>
                <p>Grip socks are <strong>compulsory</strong> on the Jumpin' floor to maintain safety and hygiene
                    standards.</p>
            </div>
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-file-signature"></i></span>
                <h4>Disclaimer Form & ID</h4>
                <p>All participants must sign a liability waiver and present valid government-issued photo ID before
                    entry.</p>
            </div>
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-exclamation-triangle"></i></span>
                <h4>No Rough Play</h4>
                <p>No stunts beyond skill level - our expert staff provides personalized guidance keeping the fun safe
                    and accessible for everyone.</p>
            </div>
            <div class="safety-item glass-card">
                <span class="safety-icon"><i class="fas fa-heartbeat"></i></span>
                <h4>Health Restrictions</h4>
                <p>This activity is not suitable for guests who are pregnant, have heart conditions to ensure safety and
                    well-being for all participants.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="location-section faq-section">
    <div class="container">
        <h2 class="section-heading"><span class="emoji-icon"><i class="fas fa-question-circle"></i></span> Frequently
            Asked Questions (FAQ)</h2>

        <div class="faq-accordion">
            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-1"></i> <span>Is there any age limit at Jus Jumpin'
                        Trampoline Park?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>At Jus Jumpin, we believe that age shouldn't limit you from having fun. All the age groups
                            can visit our adult trampoline parks and enjoy to the fullest.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-2"></i> <span>What are the activities Jus Jumpin
                        offers?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>At our selected venues, Jus Jumpin offers versatile play activities for both kids and adults.
                            At our facilities, you can find dedicated zones for different age groups.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-3"></i> <span>Are there packages, parties, or group rates
                        for adults?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Our vibrant theme parks are absolutely epic for hosting birthday parties and social events.
                            For group or bulk bookings, contact our dedicated sales team for irresistible offers.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-4"></i> <span>Are there any health / age / weight
                        restrictions?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Although at Jus Jumpin, everyone can enjoy without any restrictions, we cordially suggest
                            pregnant guests and guests with heart conditions not participate for safety reasons. The
                            standard weight limit at our facility is up to 100kg, but it totally depends on specific
                            activities.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-5"></i> <span>Do I need to sign a waiver?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>Yes, it is mandatory to ensure you are aware of our facility's safety guidelines. For minors,
                            the waiver form must be signed by the guardian.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question"><i class="fas fa-6"></i> <span>What to wear while visiting Jus
                        Jumpin?</span></button>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        <p>While there is no such dress code at Jus Jumpin, we recommend wearing comfortable clothes and
                            mandatory grip socks to ensure the safety of the guests.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conclusion CTA Section -->
<section class="location-section conclusion-section">
    <div class="container">
        <h2 class="section-heading white-text"><span class="emoji-icon"><i class="fas fa-brain"></i></span> Why Jus
            Jumpin Hyderabad?</h2>

        <div class="conclusion-grid">
            <div class="conclusion-item">
                <span class="conclusion-emoji"><i class="fas fa-trophy"></i></span>
                <p>India's Biggest Trampoline Park</p>
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

        <p class="conclusion-text"><strong>Jus Jumpin | Hyderabad (Sarath City Capital Mall)</strong> isn't just another
            trampoline park — it's an experience built for everyone who wants to jump higher, laugh harder, and
            rediscover the joy of play.</p>

        <div class="cta-button-wrapper">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button">
                <span class="emoji-icon"><i class="fas fa-ticket-alt"></i></span> Book Your Jump Now!
            </a>
        </div>
    </div>
</section>

<!-- Hero Slider Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
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
            activityFilter.addEventListener('change', function () {
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
                question.addEventListener('click', function () {
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