<?php
/**
 * The front page template
 *
 * @package NewJusJumpin
 * @version 1.0.0
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section full-width" id="hero">
    <?php 
    // Check for available video files (in priority order)
    $video_files = array(
        'Hero1.webm' => get_template_directory() . '/assets/video/Hero1.webm',
        'for-webside-1-3.webm' => get_template_directory() . '/assets/video/for-webside-1-3.webm',
        'hero-video.webm' => get_template_directory() . '/assets/video/hero-video.webm',
        'hero-video.mp4' => get_template_directory() . '/assets/video/hero-video.mp4'
    );
    
    // Check for poster image (SVG or JPG)
    $poster_svg_path = get_template_directory() . '/assets/img/hero-poster.svg';
    $poster_svg_url = get_template_directory_uri() . '/assets/img/hero-poster.svg';
    $poster_jpg_path = get_template_directory() . '/assets/img/hero-poster.jpg';
    $poster_jpg_url = get_template_directory_uri() . '/assets/img/hero-poster.jpg';
    
    $poster_attr = '';
    if (file_exists($poster_jpg_path)) {
        $poster_attr = 'poster="' . esc_url($poster_jpg_url) . '"';
    } elseif (file_exists($poster_svg_path)) {
        $poster_attr = 'poster="' . esc_url($poster_svg_url) . '"';
    }
    ?>
    
    <video class="hero-video" autoplay muted loop playsinline <?php echo $poster_attr; ?>>
        <?php foreach ($video_files as $filename => $filepath) : 
            if (file_exists($filepath)) :
                $video_url = get_template_directory_uri() . '/assets/video/' . $filename;
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $mime_type = ($extension === 'webm') ? 'video/webm' : 'video/mp4';
        ?>
            <source src="<?php echo esc_url($video_url); ?>" type="<?php echo $mime_type; ?>">
        <?php 
            endif;
        endforeach; ?>
        <!-- Fallback image if video doesn't load -->
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hero-poster.svg" alt="<?php esc_attr_e('Jus Jumpin - Ultimate Trampoline Experience', 'newjusjumpin'); ?>">
    </video>
    <div class="hero-overlay"></div>
    <div class="scroll-arrow" onclick="smoothScroll('#know-us-better')" aria-label="<?php esc_attr_e('Scroll to content', 'newjusjumpin'); ?>">
        <i class="fas fa-chevron-down" aria-hidden="true"></i>
    </div>
</section>


<!-- Stores Marquee: Lists all States and Cities with Jus Jumpin stores -->
<?php
// Build a unique list of "State — City" pairs from known locations
$jj_locations = array(
    'West Bengal' => array(
        'Kolkata - ABC Square Building',
        'Kolkata - Avani Mall',
        'Kolkata - Axis Mall',
        'Kolkata - City Centre 2',
        'Siliguri - City Centre',
        'Durgapur - Junction Mall'
    ),
    'Karnataka' => array(
        'Bengaluru - M5 Ecity Mall',
        'Bengaluru - Meenakshi Mall'
    ),
    'Jharkhand' => array(
        'Dhanbad - Prabhatam Mall',
        'Jamshedpur - P&M Mall',
        'Ranchi - Nucleus Mall'
    ),
    'Uttar Pradesh' => array(
        'Noida - GIP Mall',
        'Noida - Spectrum Mall'
    ),
    'Maharashtra' => array(
        'Nagpur - VR Mall',
        'Pune - Seasons Mall',
        'Nashik - City Centre'
    ),
    'Chhattisgarh' => array(
        'Raipur - Zora Mall'
    ),
    'Rajasthan' => array(
        'Udaipur - Urban Square Mall'
    ),
    'Gujarat' => array(
        'Surat - VR Mall'
    )
);

$store_items = array();
foreach ($jj_locations as $state => $venues) {
    foreach ($venues as $venue_name) {
        // Extract city from the pattern "City - Venue"
        $parts = explode(' - ', $venue_name, 2);
        $city  = trim($parts[0] ?? '');
        if ($state && $city) {
            $store_items[$state . ' — ' . $city] = true; // use associative for uniqueness
        }
    }
}
$store_items = array_keys($store_items);
?>
<section class="store-marquee" aria-label="Available Jus Jumpin locations (States and Cities)">
    <div class="store-marquee__inner">
        <div class="store-marquee__track">
            <?php foreach ($store_items as $item): ?>
                <span class="store-marquee__pill"><?php echo esc_html($item); ?></span>
            <?php endforeach; ?>
        </div>
        <!-- Duplicate track for seamless loop; hidden from screen readers -->
        <div class="store-marquee__track" aria-hidden="true">
            <?php foreach ($store_items as $item): ?>
                <span class="store-marquee__pill"><?php echo esc_html($item); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Know Us Better Section -->
<section class="section full-width" id="know-us-better">
    <!-- Decorative background layer for Know Us Better -->
    <div class="jj-know__background" aria-hidden="true">
    <span class="bg-blob blob-1"></span>
  <span class="bg-blob blob-2"></span>
  <span class="bg-blob blob-3"></span>
  <span class="bg-blob blob-4"></span>
  <span class="bg-blob blob-5"></span>
  <span class="bg-grid"></span>
    </div>
	<div class="container jj-know">
		<div class="jj-know__grid">
			<div class="jj-know__content animate-on-scroll slide-left">
				<h1 class="main-heading gradient-text"><?php esc_html_e("India's Most Exciting Trampoline Experience", 'newjusjumpin'); ?></h1>
				<h2 class="sub-heading"><?php esc_html_e('Where Fun, Fitness, and Family Come Together', 'newjusjumpin'); ?></h2>
				<p><?php esc_html_e('Since 2017, Jus Jumpin has reimagined playtime with vibrant parks across India. We\'re committed to safety, cleanliness, and high-energy experiences that spark joy for every age.', 'newjusjumpin'); ?></p>
				<p><?php esc_html_e('At Jus Jumpin, every bounce takes you higher — into fun, freedom, and pure joy. With over 15 rides and gaming activities, we continue to offer a perfect day out destination where memories are brewed and stress goes out of the window.', 'newjusjumpin'); ?></p>
				<p class="jj-know__tag"><?php esc_html_e('Reserve your slot today and bounce into endless excitement!', 'newjusjumpin'); ?></p>
				<div class="jj-know__cta-wrap">
					<a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary"><?php esc_html_e('Book Tickets Now', 'newjusjumpin'); ?></a>
				</div>
			</div>
			<div class="jj-know__image-wrap animate-on-scroll slide-right" data-jj-tilt>
				<img class="jj-know__image" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/MAIN-PAGE.SVG"" alt="<?php esc_attr_e('Excited child jumping', 'newjusjumpin'); ?>" loading="lazy">
			</div>
		</div>

		<!-- Journey Stats (replacing old timeline) -->
		<div class="journey-stats">
			<div class="journey-stats-header animate-on-scroll fade-up">
				<h2 class="journey-stats-title"><?php esc_html_e('Our Impressive Journey', 'newjusjumpin'); ?></h2>
				<p class="journey-stats-subtitle"><?php esc_html_e('Building memories, one bounce at a time – discover the milestones that make us India\'s premier trampoline experience', 'newjusjumpin'); ?></p>
			</div>
			<div class="journey-stats-grid">
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="0">
					<div class="journey-stat-icon">
						<i class="fas fa-users"></i>
					</div>
					<div class="journey-stat-number" data-count="10000">10,000+</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Happy Customers', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Per Month', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="100">
					<div class="journey-stat-icon">
						<i class="fas fa-trophy"></i>
					</div>
					<div class="journey-stat-number" data-count="1">#1</div>
					<h3 class="journey-stat-label"><?php esc_html_e('in India', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Leading Trampoline Park', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="200">
					<div class="journey-stat-icon">
						<i class="fas fa-newspaper"></i>
					</div>
					<div class="journey-stat-number" data-count="50">50+</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Media Features', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Featured Across Platforms', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="300">
					<div class="journey-stat-icon">
						<i class="fas fa-calendar-check"></i>
					</div>
					<div class="journey-stat-number" data-count="10">10+</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Years of Excellence', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Proven Experience', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="400">
					<div class="journey-stat-icon">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="journey-stat-number" data-count="20">20+</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Locations Nationwide', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Spreading Joy Everywhere', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="500">
					<div class="journey-stat-icon">
						<i class="fas fa-heart"></i>
					</div>
					<div class="journey-stat-number" data-count="98">98%</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Customer Satisfaction', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Happy & Satisfied Customers', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="600">
					<div class="journey-stat-icon">
						<i class="fas fa-building"></i>
					</div>
					<div class="journey-stat-number" data-count="11">11+</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Coming soon', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Expanding Our Locations', 'newjusjumpin'); ?></p>
				</div>
				<div class="journey-stat-card animate-on-scroll fade-up" data-delay="700">
					<div class="journey-stat-icon">
						<i class="fas fa-user-tie"></i>
					</div>
					<div class="journey-stat-number" data-count="1000">1,000+</div>
					<h3 class="journey-stat-label"><?php esc_html_e('Trained Staff & Coaches', 'newjusjumpin'); ?></h3>
					<p class="journey-stat-description"><?php esc_html_e('Expert Professionals', 'newjusjumpin'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Divider: Soft Multi-Layer Cloud (after Know Us Better) -->
<div class="jj-divider jj-divider-knowus-cloud" aria-hidden="true">
    <svg viewBox="0 0 1440 140" width="100%" height="140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="grad-cloud" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#f67edd"/>
                <stop offset="25%" stop-color="#00b9e3"/>
                <stop offset="50%" stop-color="#b2d235"/>
                <stop offset="75%" stop-color="#ffc60b"/>
                <stop offset="100%" stop-color="#8869d2"/>
            </linearGradient>
        </defs>
        <path d="M0,60 C160,100 320,20 480,36 C640,52 760,120 920,112 C1100,102 1260,56 1440,72 L1440,140 L0,140 Z" fill="url(#grad-cloud)" opacity="0.9"/>
        <path d="M0,76 C200,102 360,44 560,52 C760,60 860,122 1060,108 C1240,96 1320,72 1440,84 L1440,140 L0,140 Z" fill="#ffffff" opacity="0.98"/>
    </svg>
</div>

<!-- removed duplicate #impressive-journey section; journey-stats moved above -->

<!-- Why Choose Us Section -->
<section class="section" id="why-choose-us">
    <div class="container jj-why">
        <div class="section-title animate-on-scroll fade-up">
            <h2><?php esc_html_e('Why Jus Jumpin?', 'newjusjumpin'); ?></h2>
        </div>
        
		<div class="jj-why__grid jj-why__grid--asym">
			<div class="why-card shape-a animate-on-scroll slide-left">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/safety_officer.webp" alt="<?php esc_attr_e('Safety First', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Safety First', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('World-class safety equipment and trained staff ensure your experience is both thrilling and secure.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-b animate-on-scroll fade-up">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/family_Adults.jpg" alt="<?php esc_attr_e('Family Friendly', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Family Friendly', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('Activities designed for all ages – from toddlers to adults, everyone can enjoy the fun together.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-c animate-on-scroll slide-right">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/fitness-classes.jpg" alt="<?php esc_attr_e('Fitness & Fun', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Fitness & Fun', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('Burn calories while having a blast – the perfect combination of exercise and entertainment.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-b animate-on-scroll slide-left">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/basketball.jpg" alt="<?php esc_attr_e('Perfect Celebrations', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Perfect Celebrations', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('Make your special occasions unforgettable with customized party packages and dedicated areas.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-a animate-on-scroll fade-up">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Expert_staff.webp" alt="<?php esc_attr_e('Expert Staff', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Expert Staff', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('Our friendly, expert staff are more than just supervisors—they\'re your enthusiastic personal guides to a fun & secure experience.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-c animate-on-scroll slide-right">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dodgeball.jpg" alt="<?php esc_attr_e('Flexible Hours', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Flexible Hours', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('Jump In Whenever the Moment Strikes! We\'re here for your spontaneous fun and planned play, 7 days a week.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-a animate-on-scroll slide-right">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/unmatched_variety.jpg" alt="<?php esc_attr_e('Unmatched Variety', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('Unmatched Variety', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('Our dynamic roster of attractions & themed events guarantees a unique and thrilling experience with every     return.', 'newjusjumpin'); ?></p>
				</div>
			</div>

			<div class="why-card shape-b animate-on-scroll slide-left">
				<figure class="why-media">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Indian Kids Eating at Jus Jumpin.png" alt="<?php esc_attr_e('Easy Online Booking', 'newjusjumpin'); ?>" loading="lazy" />
				</figure>
				<div class="why-content">
					<h3 class="why-title"><?php esc_html_e('On-Site Café & Restaurant', 'newjusjumpin'); ?></h3>
					<p class="why-text"><?php esc_html_e('The fun doesn\'t have to stop for a snack! Refuel with our selection of healthy bites and cool drinks, perfect for energizing the whole family.', 'newjusjumpin'); ?></p>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- Divider: Diagonal Slice (after Why Choose Us) -->
<div class="jj-divider jj-divider-why-diagonal" aria-hidden="true">
    <svg viewBox="0 0 1440 100" width="100%" height="100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="grad-diagonal" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#00b9e3"/>
                <stop offset="50%" stop-color="#ffc60b"/>
                <stop offset="100%" stop-color="#ff3645"/>
            </linearGradient>
        </defs>
        <path d="M0,0 L0,60 1440,0 1440,0 0,0 Z" fill="url(#grad-diagonal)" opacity="0.95"/>
    </svg>
</div>

<!-- Our Activities Section -->
<section class="section full-width" id="our-activities">
    <div class="container jj-acts">
        <div class="section-title animate-on-scroll fade-up">
            <h2><?php esc_html_e('Our Activities', 'newjusjumpin'); ?></h2>
            <p class="jj-acts__sub"><?php esc_html_e('Not only the premier trampoline park in India, get access to mind-bending virtual reality games,', 'newjusjumpin'); ?></p>
            <p class="jj-acts__sub"><?php esc_html_e('dedicated soft play zone for kids, international standard arcade zone and 15+ interactive gaming activities curated for you.', 'newjusjumpin'); ?></p>
        </div>

        <div class="jj-acts__slider" aria-label="<?php esc_attr_e('Activities slider', 'newjusjumpin'); ?>">
            <div class="jj-acts__slides">
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/trampoline-jumping-zones.jpg" alt="<?php esc_attr_e('Trampoline Jumping Zones', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Trampoline Jumping Zones', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/family_Adults.jpg" alt="<?php esc_attr_e('Foam Pit Adventures', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Foam Pit Adventures', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/SlamDunk.jpg" alt="<?php esc_attr_e('Slam Dunk Basketball Courts', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Slam Dunk Basketball Courts', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Obstacle.jpg" alt="<?php esc_attr_e('Obstacle Courses & Challenges', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Obstacle Courses & Challenges', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Sky_Steeper.jpg" alt="<?php esc_attr_e('Sky Stepper', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Sky Stepper', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Rock_Walls.jpg" alt="<?php esc_attr_e('Rock Climbing Walls ', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Rock Climbing Walls ', 'newjusjumpin'); ?></div>
                </div>
                <!-- continue slides -->
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Ladder_Climbing.jpg" alt="<?php esc_attr_e('Ladder Climbing', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Ladder Climbing', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Donut_Slide.jpg" alt="<?php esc_attr_e('Donut Slides', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Donut Slides', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/3-Line Slides.jpg" alt="<?php esc_attr_e('3-Line Slides', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('3-Line Slides', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Bumpper-car.jpg" alt="<?php esc_attr_e('Bumper Car', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Bumper Car', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Pin_Board_Game.jpg" alt="<?php esc_attr_e('Pin Board Game', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Pin Board Game', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/karate.jpg" alt="<?php esc_attr_e('Karate Zone', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Karate Zone', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Marrygoround.jpg" alt="<?php esc_attr_e('Merry Go Round', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Merry Go Round', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Interactive_Sand_Pit.jpg" alt="<?php esc_attr_e('Interactive Sand Pit', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Interactive Sand Pit', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Colorful_Ball_Pits.jpg" alt="<?php esc_attr_e('Colorful Soft Play & Ball Pits', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Colorful Soft Play & Ball Pits', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Creative_Play_Zone.jpg" alt="<?php esc_attr_e('Creative Play Zone', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Creative Play Zone', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Birthday_Party_Zones.jpg" alt="<?php esc_attr_e('Birthday & Party Zones', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Birthday & Party Zones', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Kids_Play_Area.jpg" alt="<?php esc_attr_e('Kids Play Area', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Kids Play Area', 'newjusjumpin'); ?></div>
                </div>
                <div class="jj-acts__slide">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Rat-run.jpg" alt="<?php esc_attr_e('Rat Wheel', 'newjusjumpin'); ?>" loading="lazy">
                    <div class="jj-acts__name"><?php esc_html_e('Rat Wheel', 'newjusjumpin'); ?></div>
                </div>
            </div>
        </div>

        <div class="activities-cta text-center animate-on-scroll fade-up">
            <h3><?php esc_html_e('Ready to Jump In?', 'newjusjumpin'); ?></h3>
            <p><?php esc_html_e('Book your session today and experience the ultimate trampoline adventure!', 'newjusjumpin'); ?></p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary"><?php esc_html_e('Book Now', 'newjusjumpin'); ?></a>
                <a href="<?php echo esc_url(get_page_link(get_page_by_title('Contact Us')->ID ?? '#')); ?>" class="btn btn-outline"><?php esc_html_e('Contact Us', 'newjusjumpin'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Divider: Gentle Bottom Wave (after Our Activities) -->
<div class="jj-divider jj-divider-acts-bottom" aria-hidden="true">
    <svg viewBox="0 0 1440 120" width="100%" height="120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,120 L0,64 C180,72 360,40 540,52 C720,64 900,116 1080,104 C1260,92 1350,68 1440,72 L1440,120 Z" fill="#ffffff"/>
    </svg>
</div>
<!-- Testimonials Section -->
<section class="section full-width" id="jj-testimonials">
    <div class="container">
        <div class="section-title animate-on-scroll fade-up">
            <h2><?php esc_html_e('Trust but Verify', 'newjusjumpin'); ?></h2>
            <p class="jj-testimonials__sub"><?php esc_html_e('Read what our genuine customers say about Jus Jumpin', 'newjusjumpin'); ?></p>
        </div>

        <div class="jj-testimonials__grid">
            <div class="jj-testi jj-testi--accent-1">
                <div class="jj-testi__user">
                    <img class="jj-testi__avatar" src="https://media.licdn.com/dms/image/v2/D5603AQHq1cizxMTK9A/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1722925106727?e=2147483647&v=beta&t=afNIw-dq7jQ2MMFRNxL_0TZq4iwbq6CVlZwES-wrGDg" alt="Daniel">
                    <div class="jj-testi__meta">
                        <p class="jj-testi__name">Sourjya Mitra</p>
                        <p class="jj-testi__tag">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <h3 class="jj-testi__headline">We had a great time at Jus Jumpin! Absolutely loved it! Worth every single penny!</h3>
                <p class="jj-testi__text"><?php esc_html_e('It was a fabulous experience over here. I took my kids there and they loved it. One of my kids, Anuja told that she wants to revisit there twice a week from now. The ambience is great and the staffs are friendly too. Worth every single penny!', 'newjusjumpin'); ?></p>
            </div>

            <div class="jj-testi jj-testi--accent-2">
                <div class="jj-testi__user">
                    <img class="jj-testi__avatar" src="https://media.licdn.com/dms/image/v2/D5603AQGisBBg9xwZZw/profile-displayphoto-shrink_200_200/B56Ziw5M2gHMAY-/0/1755314443591?e=2147483647&v=beta&t=54iJ8f3nLLA_8SDouiPrKVbbDhY_6lpjYQfbQE8EICg" alt="Arjyama Lahiri">
                    <div class="jj-testi__meta">
                        <p class="jj-testi__name">Arjyama Lahiri</p>
                        <p class="jj-testi__tag">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <h3 class="jj-testi__headline">Great Experience!</h3>
                <p class="jj-testi__text"><?php esc_html_e('My son absolutely loved it! From the moment he jumped in, his face lit up with pure joy. It was the perfect way to kick off the summer holidays — energetic, exciting, and full of laughter....', 'newjusjumpin'); ?></p>
            </div>

            <div class="jj-testi jj-testi--light">
                <div class="jj-testi__user">
                    <img class="jj-testi__avatar" src="https://i.pinimg.com/736x/8e/b0/53/8eb053f1f35dc6cd4d4540e2dccfabc5.jpg" alt="Kira">
                    <div class="jj-testi__meta">
                        <p class="jj-testi__name">Ankit Soni</p>
                        <p class="jj-testi__tag">⭐⭐⭐⭐⭐</p>
                    </div>
                </div> 
                <h3 class="jj-testi__headline">Experience at Jus Jumpin was amazing!</h3>
                <p class="jj-testi__text"><?php esc_html_e('Absolutely loved the experience at Jus Jumpin! The place is super clean, well-maintained, and packed with fun activities for kids and even adults. The staff was polite and ensured safety at all times. It’s the perfect spot for a fun-filled weekend or to burn off some energy. My family had a blast highly recommend visiting if you’re in Seasons Mall!.The vibrant atmosphere and energetic vibe make it a must-visit destination for anyone looking to jump, laugh, and create lasting memories!. We can’t wait to go back and try more of the exciting trampoline challenges next time!...  ', 'newjusjumpin'); ?></p>
            </div>

            <div class="jj-testi jj-testi--light">
                <div class="jj-testi__user">
                        <img class="jj-testi__avatar" src="https://media.licdn.com/dms/image/v2/D4E03AQF0AeK4Dgkz9w/profile-displayphoto-scale_200_200/B4EZh72.RGGwAc-/0/1754424665844?e=2147483647&v=beta&t=s6b6AxpSKm7pDDyhaUY2QPtaLs0I5QO174p55b81VHM" alt="Srihari Rao">
                    <div class="jj-testi__meta">
                        <p class="jj-testi__name">Lavanya Rao</p>
                        <p class="jj-testi__tag">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <h3 class="jj-testi__headline">Experience at Jus Jumpin was amazing!</h3>
                <p class="jj-testi__text"><?php esc_html_e('It was a great experience for my son and me. The staff was friendly and the facility was clean. I would definitely recommend it to anyone looking for a fun day out.', 'newjusjumpin'); ?></p>
            </div>

            <div class="jj-testi jj-testi--accent-3">
                <div class="jj-testi__user">
                    <img class="jj-testi__avatar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTul2IIZ_Tc5EwKyH21wk69aUYPCv0ZhAHbHA&s" alt="Roshni Chettri">
                    <div class="jj-testi__meta">
                        <p class="jj-testi__name">Roshni Chettri</p>
                        <p class="jj-testi__tag">⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                <h3 class="jj-testi__headline">Best place for the kids in the mall to play and you can shop freely.</h3>
                <p class="jj-testi__text"><?php esc_html_e('Best place for the kids in the mall to play and you can shop freely. Staff is good and care taking kids just don\'t want to leave this place. Many activities and huge place for the kids to explore and have fun. Fully covered and safe no kids can come out until parents take them. Recommended to all parents.', 'newjusjumpin'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Divider: Fun Zigzag (after Testimonials) -->
<div class="jj-divider jj-divider-testimonials-zigzag" aria-hidden="true">
    <svg viewBox="0 0 1440 100" width="100%" height="100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="grad-zigzag" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#ff661a"/>
                <stop offset="25%" stop-color="#00b9e3"/>
                <stop offset="50%" stop-color="#f67edd"/>
                <stop offset="75%" stop-color="#6dc065"/>
                <stop offset="100%" stop-color="#ff5da0"/>
            </linearGradient>
        </defs>
        <path d="M0,0 L0,44 120,28 240,44 360,28 480,44 600,28 720,44 840,28 960,44 1080,28 1200,44 1320,28 1440,44 L1440,0 Z" fill="#e2e4e8" opacity="1"></path>
    </svg>
</div>



<script>
document.addEventListener('DOMContentLoaded', function () {
    var tiltContainer = document.querySelector('[data-jj-tilt]');
    if (!tiltContainer) return;
    var img = tiltContainer.querySelector('.jj-know__image');
    if (!img) return;

    function clamp(value, min, max){ return Math.min(Math.max(value, min), max); }

    tiltContainer.addEventListener('mousemove', function (e) {
        var rect = tiltContainer.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;
        var percentX = (x / rect.width) - 0.5;
        var percentY = (y / rect.height) - 0.5;
        var rotateY = clamp(percentX * 16, -16, 16);
        var rotateX = clamp(-percentY * 16, -16, 16);
        img.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateZ(12px)';
        img.style.filter = 'drop-shadow(' + (-rotateY*2) + 'px 18px 40px rgba(0,0,0,0.18))';
    });

    tiltContainer.addEventListener('mouseleave', function(){
        img.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0)';
        img.style.filter = 'drop-shadow(0 18px 40px rgba(0,0,0,0.18))';
    });


    // Journey Stats Cards scroll animation
    var journeyStatCards = document.querySelectorAll('.journey-stat-card');
    if (journeyStatCards.length > 0) {
        var journeyObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        journeyStatCards.forEach(function(card) {
            journeyObserver.observe(card);
        });
    }

    // Our Activities: Auto slider
    var slider = document.querySelector('.jj-acts__slider');
    var slidesTrack = document.querySelector('.jj-acts__slides');
    var slides = slidesTrack ? Array.prototype.slice.call(slidesTrack.children) : [];
    if (slider && slidesTrack && slides.length > 0) {
        var currentIndex = 0;
        var stepPx = 0;
        var autoplayTimer;

        function computeStep() {
            if (slides.length < 2) return slider.clientWidth;
            var a = slides[0].getBoundingClientRect();
            var b = slides[1].getBoundingClientRect();
            var raw = Math.abs(b.left - a.left);
            return raw > 0 ? raw : slider.clientWidth;
        }

        function computeOffset() {
            // Center one slide within the viewport
            var firstRect = slides[0].getBoundingClientRect();
            var slideWidth = firstRect.width > 0 ? firstRect.width : stepPx;
            var offset = (slider.clientWidth - slideWidth) / 2;
            return isFinite(offset) ? offset : 0;
        }

        function updateTransform() {
            var offset = computeOffset();
            var translate = offset - (currentIndex * stepPx);
            // Clamp so we don't overscroll beyond first/last
            var totalWidth = stepPx * slides.length;
            var minTranslate = slider.clientWidth - totalWidth - offset; // far left
            var maxTranslate = offset; // far right (first centered)
            if (isFinite(minTranslate) && isFinite(maxTranslate)) {
                translate = Math.max(minTranslate, Math.min(maxTranslate, translate));
            }
            slidesTrack.style.transform = 'translateX(' + translate + 'px)';
        }

        function recalc() {
            stepPx = computeStep();
            updateTransform();
        }

        function nextSlide() {
            var maxIndex = slides.length - 1;
            currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
            updateTransform();
        }

        function startAutoplay() {
            stopAutoplay();
            autoplayTimer = setInterval(nextSlide, 3000);
        }
        function stopAutoplay() {
            if (autoplayTimer) clearInterval(autoplayTimer);
        }

        window.addEventListener('resize', function(){
            // Debounce recalculation
            if (this._jjActsResize) cancelAnimationFrame(this._jjActsResize);
            this._jjActsResize = requestAnimationFrame(recalc);
        });

        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);

        // Initial
        recalc();
        startAutoplay();
    }
});
</script>
<?php get_footer(); ?>
 
        