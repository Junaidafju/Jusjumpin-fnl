<?php
/**
 * Template Name: Our Activities Page
 * 
 * Our Activities page template for Jus Jumpin
 */

get_header(); ?>

<!-- Activities Hero Section -->
<section class="jj-activities-hero">
    <div class="jj-activities-hero__bg" aria-hidden="true" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/Activities.webp' ); ?>'); background-color: #74a93d;"></div>
    <div class="jj-activities-hero__overlay" aria-hidden="true"></div>
    <div class="container">
        <div class="jj-activities-hero__inner">
            <div class="jj-activities-hero__content animate-on-scroll fade-up">
                <h1 class="jj-activities-hero__title">
                    <!-- <span class="activity-emoji">🎪</span> -->
                    <?php esc_html_e('A Universe Of Adventures', 'newjusjumpin'); ?>
                    
                </h1>
                <p class="jj-activities-hero__subtitle"><?php esc_html_e('Discover 25+ Exciting Activities for All Ages', 'newjusjumpin'); ?></p>
                <p class="jj-activities-hero__description"><?php esc_html_e('From thrilling trampolines to interactive games, explore endless fun at India\'s premier indoor entertainment destination!', 'newjusjumpin'); ?></p>
            </div>
        </div>
    </div>
    <div class="jj-activities-hero__mesh" aria-hidden="true"></div>
</section>

<!-- Trampoline Zone -->
<section class="activities-section trampoline-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">🤸</span> -->
                <!-- <?php esc_html_e('Trampoline Zone', 'newjusjumpin'); ?> -->
                <!-- <span class="heading-decoration">🎯</span> -->
                <div class="heading-watermark">TRAMPOLINE ZONE</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="Infinity Trampoline" data-activity-desc="Experience endless bouncing fun on our interconnected trampoline arena">
                <span class="activity-category">Trampoline</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Infinity Trampoline', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('INFINITY TRAMPOLINE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Bounce Beyond Limits!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Trampoline Dodgeball" data-activity-desc="Jump, dodge, and throw in this high-energy team sport">
                <span class="activity-category">Trampoline</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Trampoline Dodgeball Arena', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('TRAMPOLINE DODGEBALL ARENA', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Jump, Dodge & Dominate!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Basketball Area" data-activity-desc="Slam dunk like a pro with our trampoline-assisted hoops">
                <span class="activity-category">Trampoline</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Basketball Area', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('BASKETBALL AREA', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Slam Dunk Like a Pro!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Adventure & Climbing Zone -->
<section class="activities-section climbing-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">🧗</span>
                <?php esc_html_e('Adventure & Climbing', 'newjusjumpin'); ?>
                <span class="heading-decoration">⛰️</span> -->
                <div class="heading-watermark">ClimbQuest Zone</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="Sky Stepper" data-activity-desc="Climb vertically and test your balance on suspended steps">
                <span class="activity-category">Climbing</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                 alt="<?php esc_attr_e('Sky Stepper', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('SKY STEPPER', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Step Up to New Heights!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Cube Climbing" data-activity-desc="Scale our unique cube structure for an exciting vertical challenge">
                <span class="activity-category">Climbing</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Cube Climbing', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('CUBE CLIMBING', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Climb the Challenge Cube!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Net Climb" data-activity-desc="Navigate through interconnected nets suspended in the air">
                <span class="activity-category">Climbing</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Net Climb', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('NET CLIMB', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Scale the Net of Adventure!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Rope Adventure" data-activity-desc="Swing, climb and conquer our rope-based obstacle course">
                <span class="activity-category">Adventure</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Rope Adventure', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('ROPE ADVENTURE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Swing Through the Challenge!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Hanging Bridge" data-activity-desc="Test your courage crossing our wobbly suspended bridge">
                <span class="activity-category">Adventure</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                 alt="<?php esc_attr_e('Hanging Bridge', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('HANGING BRIDGE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Cross the Bridge of Bravery!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Obstacle Zone" data-activity-desc="Navigate through a series of challenging physical obstacles">
                <span class="activity-category">Adventure</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Obstacle Zone', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('OBSTACLE ZONE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Conquer the Ultimate Course!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Slides & Splash Zone -->
<section class="activities-section slides-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">🌊</span>
                <?php esc_html_e('Slides & Splash', 'newjusjumpin'); ?>
                <span class="heading-decoration">🎢</span> -->
                <div class="heading-watermark">Slides & Splash</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="Donut Slide" data-activity-desc="Spiral down our colorful donut-shaped slide adventure">
                <span class="activity-category">Slides</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Donut Slide', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('DONUT SLIDE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Swirl Down the Sweet Slide!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Wave Slide" data-activity-desc="Ride the waves on our undulating slide experience">
                <span class="activity-category">Slides</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Wave Slide', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('WAVE SLIDE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Ride the Waves of Fun!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Tunnel Slide" data-activity-desc="Zoom through our enclosed tunnel slide for thrilling fun">
                <span class="activity-category">Slides</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp"
                alt="<?php esc_attr_e('Tunnel Slide', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('TUNNEL SLIDE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Slide Through Adventure!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kids Play Zone -->
<section class="activities-section kids-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">👶</span>
                <?php esc_html_e('Kids Play Zone', 'newjusjumpin'); ?>
                <span class="heading-decoration">🎠</span> -->
                <div class="heading-watermark">Kids Play Zone</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="Toddler Play Area" data-activity-desc="Safe and soft play zone designed for our youngest visitors">
                <span class="activity-category">Kids</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Toddler Play Area', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('TODDLER PLAY AREA', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Safe Fun for Little Ones!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Soft Play Area" data-activity-desc="Cushioned play structures perfect for active young children">
                <span class="activity-category">Kids</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Soft Play Area', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('SOFT PLAY AREA', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Soft, Safe & Super Fun!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Kids Traffic Track" data-activity-desc="Learn road safety while riding on our mini traffic circuit">
                <span class="activity-category">Kids</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Kids Traffic Track', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('KIDS TRAFFIC TRACK / RIDE AREA', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Drive & Learn Traffic Rules!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Swing" data-activity-desc="Classic swinging fun that never gets old for kids">
                <span class="activity-category">Kids</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Swing', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('SWING', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Swing High, Touch the Sky!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Merry-Go-Round" data-activity-desc="Spin and laugh on our colorful rotating carousel">
                <span class="activity-category">Kids</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Merry-Go-Round', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('MERRY-GO-ROUND', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Spin Around in Joy!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive & Gaming Zone -->
<section class="activities-section gaming-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">🎮</span>
                <?php esc_html_e('Interactive & Gaming', 'newjusjumpin'); ?>
                <span class="heading-decoration">🕹️</span> -->
                <div class="heading-watermark">Digital Fun Zone</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="VR Game" data-activity-desc="Immerse yourself in virtual reality gaming experiences">
                <span class="activity-category">Gaming</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('VR Game', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('VR GAME (VIRTUAL REALITY)', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Step Into Another World!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Arcade Section" data-activity-desc="Classic and modern arcade games for endless entertainment">
                <span class="activity-category">Gaming</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Arcade Section', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('ARCADE SECTION', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Power Up, Game On!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Interactive LED Wall" data-activity-desc="Touch-responsive LED wall with exciting interactive games">
                <span class="activity-category">Interactive</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Interactive LED Wall Game', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('INTERACTIVE LED WALL GAME', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Touch, Light Up & Win!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Pin Wall" data-activity-desc="Create 3D impressions of your body on our famous pin art wall">
                <span class="activity-category">Interactive</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Pin Wall', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('PIN WALL', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Press, Pose & Create 3D Art!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sports & Challenges Zone -->
<section class="activities-section sports-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">⚽</span>
                <?php esc_html_e('Sports & Challenges', 'newjusjumpin'); ?>
                <span class="heading-decoration">🏆</span> -->
                <div class="heading-watermark">PlayTech Zone</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="Foam Balance Beam" data-activity-desc="Walk the soft beam and test your balancing skills safely">
                <span class="activity-category">Challenge</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Foam Balance Beam Challenge', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('FOAM BALANCE BEAM CHALLENGE', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Balance Your Way to Victory!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Attractions Zone -->
<section class="activities-section special-zone">
    <div class="container">
        <div class="category-header">
            <h2 class="jj-activities-heading">
                <!-- <span class="heading-decoration">✨</span>
                <?php esc_html_e('Special Attractions', 'newjusjumpin'); ?>
                <span class="heading-decoration">🎉</span> -->
                <div class="heading-watermark">Spotlight Zone</div>
            </h2>
        </div>
        <div class="activities-grid">
            <div class="activity-card" data-activity-name="Sand Pit" data-activity-desc="Dig, build and create in our clean and safe sand play area">
                <span class="activity-category">Special</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Sand Pit', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('SAND PIT', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Dig, Build & Dream Big!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Foam Pit" data-activity-desc="Jump and dive safely into our massive foam cube pit">
                <span class="activity-category">Special</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Foam Pit', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('FOAM PIT', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Dive into a Cloud of Fun!', 'newjusjumpin'); ?></p>
                </div>
            </div>
            
            <div class="activity-card" data-activity-name="Bumper Cars" data-activity-desc="Bump, spin and race in our electric bumper car arena">
                <span class="activity-category">Special</span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Infinity_trampoline_activity.webp" alt="<?php esc_attr_e('Bumper Cars', 'newjusjumpin'); ?>" class="activity-image" loading="lazy">
                <div class="activity-info">
                    <h3 class="activity-title"><?php esc_html_e('BUMPER CARS', 'newjusjumpin'); ?></h3>
                    <p class="activity-subtitle"><?php esc_html_e('Bump, Spin & Laugh Out Loud!', 'newjusjumpin'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="jj-activities-cta">
    <div class="jj-activities-cta__overlay"></div>
    <div class="container">
        <div class="jj-activities-cta__content">
            <h2 class="jj-activities-cta__title"><?php esc_html_e('Ready to Jump Into Fun?', 'newjusjumpin'); ?></h2>
             <h2><div class="heading-watermark">Are You Ready?</div></h2>
            
            
        </div>
    </div>
    <p class="jj-activities-cta__subtitle"><?php esc_html_e('Book your slot now and experience 25+ exciting activities!', 'newjusjumpin'); ?></p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="jj-activities-cta__btn"><?php esc_html_e('Book Now', 'newjusjumpin'); ?></a>
</section>

<?php get_footer(); ?>
