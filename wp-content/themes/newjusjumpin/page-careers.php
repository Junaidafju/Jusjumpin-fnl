<?php
/**
 * Template Name: Careers Page
 * Description: Full careers + internship page for Jus Jumpin
 * @package NewJusJumpin
 */

get_header();

// ── CONFIG ──────────────────────────────────────────
$wa_number   = '919830662244';          // WhatsApp number (no +)
$hr_email    = 'hiring@jusjumpin.com';
$admin_email = 'junaidafju@gmail.com';

// ── POST HANDLER ────────────────────────────────────
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['jj_careers_nonce'] ) ) {

    if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['jj_careers_nonce'] ) ), 'jj_careers_submit' ) ) {
        wp_die( 'Security check failed.' );
    }

    $full_name  = sanitize_text_field( $_POST['full_name']  ?? '' );
    $email      = sanitize_email(      $_POST['email']      ?? '' );
    $phone      = sanitize_text_field( $_POST['phone']      ?? '' );
    $location   = sanitize_text_field( $_POST['location']   ?? '' );
    $experience = sanitize_text_field( $_POST['experience'] ?? '' );
    $job_title  = sanitize_text_field( $_POST['job_title']  ?? 'General Application' );
    $message    = sanitize_textarea_field( $_POST['message'] ?? '' );

    // File upload
    $resume_url = '';
    if ( ! empty( $_FILES['resume']['name'] ) ) {
        $upload_dir = wp_upload_dir();
        $safe_name  = time() . '_' . sanitize_file_name( $_FILES['resume']['name'] );
        $file_path  = $upload_dir['path'] . '/' . $safe_name;
        if ( move_uploaded_file( $_FILES['resume']['tmp_name'], $file_path ) ) {
            $resume_url = $upload_dir['url'] . '/' . $safe_name;
        }
    }

    $exp_label = ( $experience === 'fresher' ) ? 'Fresher (0–1 years)' : 'Experienced (1+ years)';

    // ── WHATSAPP ──
    if ( isset( $_POST['send_whatsapp'] ) ) {
        $msg  = "🎯 *NEW APPLICATION — JUS JUMPIN* 🎯\n\n";
        $msg .= "🏷️ *Position:* {$job_title}\n";
        $msg .= "👤 *Name:* {$full_name}\n";
        if ( $location ) $msg .= "📍 *Location:* {$location}\n";
        $msg .= "📞 *Phone:* +91 {$phone}\n";
        $msg .= "📧 *Email:* {$email}\n";
        $msg .= "💼 *Experience:* {$exp_label}\n";
        if ( $message )    $msg .= "💬 *Message:* {$message}\n";
        if ( $resume_url ) $msg .= "\n📎 *Resume:* {$resume_url}\n";
        $msg .= "\n_Submitted via Careers Page_";

        $wa_url = 'https://wa.me/' . $wa_number . '?text=' . rawurlencode( $msg );

        session_start();
        $_SESSION['jj_wa_url']    = $wa_url;
        $_SESSION['jj_job_title'] = $job_title;

        wp_redirect( add_query_arg( 'submitted', 'whatsapp', get_permalink() ) );
        exit;
    }

    // ── EMAIL ──
    if ( isset( $_POST['send_email'] ) ) {
        $to      = $hr_email . ', ' . $admin_email;
        $subject = "Job Application: {$job_title} – {$full_name}";

        $body  = '<html><head><style>body{font-family:Arial,sans-serif}';
        $body .= '.hd{background:#FF5722;color:#fff;padding:20px;text-align:center}';
        $body .= '.lbl{font-weight:bold;color:#FF5722}.wr{padding:20px;background:#f9f9f9}</style></head><body>';
        $body .= '<div class="hd"><h2>New Application — Jus Jumpin 🎉</h2></div><div class="wr">';
        $body .= "<p><span class='lbl'>Position:</span> {$job_title}</p>";
        $body .= "<p><span class='lbl'>Name:</span> {$full_name}</p>";
        if ( $location ) $body .= "<p><span class='lbl'>Location:</span> {$location}</p>";
        $body .= "<p><span class='lbl'>Email:</span> {$email}</p>";
        $body .= "<p><span class='lbl'>Phone:</span> +91 {$phone}</p>";
        $body .= "<p><span class='lbl'>Experience:</span> {$exp_label}</p>";
        if ( $message )    $body .= "<p><span class='lbl'>Message:</span> " . nl2br( esc_html( $message ) ) . '</p>';
        if ( $resume_url ) $body .= "<p><span class='lbl'>Resume:</span> <a href='{$resume_url}'>Download</a></p>";
        $body .= '<p><span class="lbl">Submitted:</span> ' . current_time( 'mysql' ) . '</p>';
        $body .= '</div></body></html>';

        $headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: Jus Jumpin Careers <noreply@jusjumpin.com>',
            'Reply-To: ' . $email,
        ];

        $sent = wp_mail( $to, $subject, $body, $headers );

        if ( $sent ) {
            $conf_body = "<html><body><h2>Thank You for Applying! 🎉</h2><p>Dear {$full_name},</p><p>We've received your application for <strong>{$job_title}</strong>. Our team will be in touch within 5–7 working days.</p><br><p>Warm regards,<br>Jus Jumpin HR Team</p></body></html>";
            wp_mail( $email, 'Application Received – Jus Jumpin', $conf_body, $headers );
            session_start();
            $_SESSION['jj_status'] = 'success';
        } else {
            session_start();
            $_SESSION['jj_status'] = 'error';
        }

        wp_redirect( add_query_arg( 'submitted', 'email', get_permalink() ) );
        exit;
    }
}

// Enqueue assets
wp_enqueue_style(  'career-style',  get_template_directory_uri() . '/assets/css/career.css',  [], '3.0.0' );
wp_enqueue_script( 'career-script', get_template_directory_uri() . '/assets/js/career.js', [], '3.0.0', true );

// Pass WA number to JS
wp_localize_script( 'career-script', 'JJ_CAREER', [ 'wa' => $wa_number ] );

// Submission flash messages helper
function jj_flash_messages() {
    if ( ! isset( $_GET['submitted'] ) ) return;
    session_start();
    $type = sanitize_text_field( $_GET['submitted'] );
    if ( $type === 'whatsapp' && ! empty( $_SESSION['jj_wa_url'] ) ) {
        $url   = esc_url( $_SESSION['jj_wa_url'] );
        $title = esc_html( $_SESSION['jj_job_title'] ?? '' );
        echo '<div class="jj-alert jj-alert--wa">
                <p>📱 <strong>Click below to send your application on WhatsApp:</strong></p>
                <a href="' . $url . '" target="_blank" rel="noopener" class="jj-wa-link">
                    Open WhatsApp & Send →
                </a>
                <p style="margin-top:10px;font-size:.85rem">Position: <strong>' . $title . '</strong></p>
              </div>';
        unset( $_SESSION['jj_wa_url'], $_SESSION['jj_job_title'] );
    } elseif ( $type === 'email' && ! empty( $_SESSION['jj_status'] ) ) {
        if ( $_SESSION['jj_status'] === 'success' ) {
            echo '<div class="jj-alert jj-alert--success">
                    <p>✅ <strong>Application Submitted!</strong> We\'ll review it and get back to you within 5–7 business days.</p>
                  </div>';
        } else {
            echo '<div class="jj-alert jj-alert--error">
                    <p>❌ <strong>Something went wrong.</strong> Please try again or email us at hiring@jusjumpin.com</p>
                  </div>';
        }
        unset( $_SESSION['jj_status'] );
    }
}
?>

<!-- ═══════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ -->
<section class="jj-hero">
    <div class="jj-hero__bg-img"></div>
    <div class="jj-hero__dots"></div>
    <div class="jj-hero__shapes" aria-hidden="true">
        <span class="jj-sh jj-sh--1">⭐</span>
        <span class="jj-sh jj-sh--2">🎉</span>
        <span class="jj-sh jj-sh--3">🚀</span>
        <span class="jj-sh jj-sh--4">✨</span>
        <span class="jj-sh jj-sh--5">🎈</span>
        <span class="jj-sh jj-sh--6">🏆</span>
    </div>
    <div class="jj-hero__content">
        <p class="jj-hero__pill">Careers at Jus Jumpin</p>
        <h1 class="jj-hero__h1">Join Our<span>Amazing Team <img draggable="false" role="img" class="emoji" alt="🚀" src="https://cdn-icons-png.flaticon.com/512/6020/6020347.png"></span></h1>
        <p class="jj-hero__sub">Be part of a fast-moving, creative environment where you learn, grow, and make an impact from day one.</p>
        <a href="#jj-roles" class="jj-hero__cta">
            Explore Openings <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </a>
        <div class="jj-hero__stats">
            <div class="jj-hero__stat"><span class="jj-stat-n">500+</span><span class="jj-stat-l">Team Members</span></div>
            <div class="jj-hero__stat"><span class="jj-stat-n">5+</span><span class="jj-stat-l">Years of Fun</span></div>
            <div class="jj-hero__stat"><span class="jj-stat-n">15</span><span class="jj-stat-l">Open Roles</span></div>
            <div class="jj-hero__stat"><span class="jj-stat-n">∞</span><span class="jj-stat-l">Good Vibes</span></div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     WHY JOIN US
════════════════════════════════════════════════════ -->
<section class="jj-why">
    <div class="jj-why__inner">
        <div class="jj-why__img-col">
            <div class="jj-img-stack">
                <div class="jj-img-main">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/c612a127919515.5636cc305faee.gif" alt="Kids having fun at Jus Jumpin" loading="lazy">
                </div>
                <div class="jj-img-sec">
                    <img src="https://i.pinimg.com/originals/b6/6f/72/b66f7213a8cbc806b9b7461cba44095c.gif" alt="Jus Jumpin team" loading="lazy">
                </div>
                <div class="jj-badge">
                    <span class="jj-badge__em">🏅</span>
                    <span class="jj-badge__n">500+</span>
                    <span class="jj-badge__t">Happy Team</span>
                </div>
                <div class="jj-sticker">🎉 Best Place to Work!</div>
            </div>
        </div>
        <div class="jj-why__text-col">
            <p class="jj-eyebrow"><i class="fa fa-star" aria-hidden="true"></i> Why Join Us</p>
            <h2 class="jj-sec-title">✨ Why Work at<br><span>Jus Jumpin?</span></h2>
            <div class="jj-benefits">
                <div class="jj-ben">
                    <div class="jj-ben__icon">💥</div>
                    <div><h3>Work That Feels Like Play</h3><p>Be part of an environment filled with energy, creativity, and excitement every single day.</p></div>
                </div>
                <div class="jj-ben">
                    <div class="jj-ben__icon">🚀</div>
                    <div><h3>Growth Opportunities</h3><p>Learn, grow, and level up your career with real hands-on experience that truly matters.</p></div>
                </div>
                <div class="jj-ben">
                    <div class="jj-ben__icon">🤝</div>
                    <div><h3>Supportive Team Culture</h3><p>Work with a passionate team that values collaboration, innovation, and each other.</p></div>
                </div>
                <div class="jj-ben">
                    <div class="jj-ben__icon">🎯</div>
                    <div><h3>Make an Impact</h3><p>Create unforgettable experiences for thousands of families and kids across the city.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     PERKS STAT CARDS
════════════════════════════════════════════════════ -->
<section class="jj-perks">
    <div class="jj-perks__inner">
        <div class="jj-perk-card jj-perk-card--1">
            <span class="jj-perk-card__icon">🎉</span>
            <h3 class="jj-perk-card__title">Fun Work Culture</h3>
            <p class="jj-perk-card__text">Every day feels like a celebration — energy, laughter, and good vibes all around.</p>
        </div>
        <div class="jj-perk-card jj-perk-card--2">
            <span class="jj-perk-card__icon">🚀</span>
            <h3 class="jj-perk-card__title">Fast Career Growth</h3>
            <p class="jj-perk-card__text">Move fast, learn faster. Real responsibilities from day one fuel your growth.</p>
        </div>
        <div class="jj-perk-card jj-perk-card--3">
            <span class="jj-perk-card__icon">🎨</span>
            <h3 class="jj-perk-card__title">Creative Freedom</h3>
            <p class="jj-perk-card__text">Bring your boldest ideas to the table — creativity is always welcome here.</p>
        </div>
        <div class="jj-perk-card jj-perk-card--4">
            <span class="jj-perk-card__icon">🤝</span>
            <h3 class="jj-perk-card__title">Supportive Team</h3>
            <p class="jj-perk-card__text">A team that lifts you up, backs your ideas, and celebrates wins together.</p>
        </div>
        <div class="jj-perk-card jj-perk-card--5">
            <span class="jj-perk-card__icon">💼</span>
            <h3 class="jj-perk-card__title">Real Responsibilities</h3>
            <p class="jj-perk-card__text">No busywork. You'll own actual projects with real impact from day one.</p>
        </div>
        <div class="jj-perk-card jj-perk-card--6">
            <span class="jj-perk-card__icon">🏆</span>
            <h3 class="jj-perk-card__title">Recognition & Rewards</h3>
            <p class="jj-perk-card__text">Great work never goes unnoticed — your efforts are seen, appreciated, and rewarded.</p>
        </div>
    </div>
</section>
<!-- ═══════════════════════════════════════════════════
     OPEN ROLES
════════════════════════════════════════════════════ -->
<section class="jj-roles" id="jj-roles">
    <div class="jj-roles__inner">
        <div class="jj-roles__hdr">
            <p class="jj-eyebrow"><i class="fa fa-rocket" aria-hidden="true"></i> Open Positions</p>
            <h2 class="jj-sec-title" style="margin-top:14px;margin-bottom:12px">🚀 Explore Opportunities</h2>
            <p class="jj-sec-sub">Find your perfect role in our fun and dynamic environment</p>
        </div>

        <!-- Department Tabs -->
        <div class="jj-tabs" id="jj-tabs">
            <button class="jj-tab active" data-dept="marketing">
                <span>🎨</span><span class="jj-tab__label">Marketing</span><span class="jj-tab__count">5</span>
            </button>
            <button class="jj-tab" data-dept="operations">
                <span>🏪</span><span class="jj-tab__label">Operations</span><span class="jj-tab__count">8</span>
            </button>
            <button class="jj-tab" data-dept="surveillance">
                <span>📹</span><span class="jj-tab__label">Surveillance</span><span class="jj-tab__count">1</span>
            </button>
            <button class="jj-tab" data-dept="talent">
                <span>👥</span><span class="jj-tab__label">Talent</span><span class="jj-tab__count">1</span>
            </button>
        </div>

        <!-- MARKETING -->
        <div class="jj-dept active" id="dept-marketing">
            <div class="jj-dept-banner">
                <img src="https://cdn.dribbble.com/userupload/42012439/file/original-c2ab69f018094baa7d6aede55b288245.gif" alt="Marketing" loading="lazy">
                <div class="jj-dept-banner__overlay">
                    <h3>🎨 Marketing Department</h3>
                    <p>Shape how the world sees Jus Jumpin</p>
                </div>
                <span class="jj-dept-badge">5 Openings 🔥</span>
            </div>
            <div class="jj-jobs">
                <?php
                $marketing_jobs = [
                    ['Digital Marketing Executive',  'Drive our digital presence to new heights. Manage campaigns, optimize SEO, and create engaging online content.', ['SEO','Google Ads','Analytics','Content Strategy']],
                    ['Social Media Manager',         'Own our social voice and grow our community. Plan content, engage audiences, and build brand love across platforms.', ['Instagram','Reels Strategy','Content Planning']],
                    ['Graphics Designer',            'Bring ideas to life visually. Design creatives, campaigns, and marketing materials that captivate and convert.', ['Photoshop','Illustrator','Branding']],
                    ['Motion Graphics Designer',     'Create dynamic visuals and animations that capture attention and bring our brand story to life on every screen.', ['After Effects','Animation','Video Editing']],
                    ['Videographer',                 'Shoot, edit, and tell compelling stories through video. Capture the magic of Jus Jumpin for the world to see.', ['Cinematography','Editing','Storytelling']],
                ];
                foreach ( $marketing_jobs as $job ) {
                    echo jj_job_card( $job[0], $job[1], $job[2], 'marketing' );
                }
                ?>
            </div>
        </div>

        <!-- OPERATIONS -->
        <div class="jj-dept" id="dept-operations" style="display:none">
            <div class="jj-dept-banner">
                <img src="https://cdn.dribbble.com/userupload/41805026/file/original-aa6753751db19425872eaa9688b9c9b8.gif" alt="Operations" loading="lazy">
                <div class="jj-dept-banner__overlay">
                    <h3>🏪 Operations Department</h3>
                    <p>Be the backbone of our on-ground experience</p>
                </div>
                <span class="jj-dept-badge">8 Openings 🔥</span>
            </div>
            <div class="jj-jobs">
                <?php
                $ops_jobs = [
                    ['Store Manager',        'Oversee daily operations, manage staff, ensure customer satisfaction, and drive sales performance.',         ['Leadership','Operations','Customer Service']],
                    ['Security Guards',      'Ensure safety of all visitors, monitor premises, and maintain security protocols at all times.',              ['Security','Vigilance','Safety Protocols']],
                    ['Cash Counter Manager', 'Manage cash transactions, handle billing, and maintain accurate financial records with precision.',            ['Cash Handling','Billing','Finance']],
                    ['Play Area Attendant',  'Supervise play areas, ensure child safety, and assist visitors with activities for a magical experience.',    ['Child Safety','Supervision','Guest Service']],
                    ['Vendor Manager',       'Manage vendor relationships, negotiate contracts, and ensure supply chain efficiency for smooth operations.', ['Procurement','Negotiation','Supply Chain']],
                    ['MIS Executive',        'Manage data systems, generate reports, and maintain information databases that power smart decisions.',       ['Data Management','Excel','Reporting']],
                    ['Back Office Executive','Handle administrative tasks, data entry, and support office operations to keep everything running smoothly.', ['Administration','Data Entry','MS Office']],
                    ['Admin Executive',      'Manage office operations, coordinate events, and handle administrative duties with efficiency and flair.',    ['Office Management','Coordination','Communication']],
                ];
                foreach ( $ops_jobs as $job ) {
                    echo jj_job_card( $job[0], $job[1], $job[2], 'operations' );
                }
                ?>
            </div>
        </div>

        <!-- SURVEILLANCE -->
        <div class="jj-dept" id="dept-surveillance" style="display:none">
            <div class="jj-dept-banner">
                <img src="https://www.asisonline.org/globalassets/security-management/latest-news/web-exclusives/2022/0622-gates-after-a-cyber-defense-breach.gif" alt="Surveillance" loading="lazy">
                <div class="jj-dept-banner__overlay">
                    <h3>📹 Surveillance Department</h3>
                    <p>Keeping every smile safe at Jus Jumpin</p>
                </div>
                <span class="jj-dept-badge">1 Opening 🔥</span>
            </div>
            <div class="jj-jobs jj-jobs--center">
                <?php echo jj_job_card( 'CCTV Surveillance Operator', 'Monitor CCTV cameras, identify security threats, maintain surveillance logs, and ensure a secure environment for all guests.', ['CCTV Monitoring','Security Systems','Vigilance'], 'surveillance' ); ?>
            </div>
        </div>

        <!-- TALENT -->
        <div class="jj-dept" id="dept-talent" style="display:none">
            <div class="jj-dept-banner">
                <img src="https://cdn.dribbble.com/userupload/22304736/file/original-6dbedc6556eb45ee9213fa5bfabca078.gif" alt="HR" loading="lazy">
                <div class="jj-dept-banner__overlay">
                    <h3>👥 Talent Acquisition</h3>
                    <p>Building the dream team at Jus Jumpin</p>
                </div>
                <span class="jj-dept-badge">1 Opening 🔥</span>
            </div>
            <div class="jj-jobs jj-jobs--center">
                <?php echo jj_job_card( 'Human Resource Manager', 'Manage recruitment, employee relations, performance management, and HR policies that keep our team thriving and growing.', ['Recruitment','Employee Relations','HR Policies'], 'talent' ); ?>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     INTERNSHIP
════════════════════════════════════════════════════ -->
<section class="jj-intern" id="jj-internship">
    <div class="jj-intern__blob jj-intern__blob--1" aria-hidden="true"></div>
    <div class="jj-intern__blob jj-intern__blob--2" aria-hidden="true"></div>
    <div class="jj-intern__blob jj-intern__blob--3" aria-hidden="true"></div>

    <div class="jj-intern__inner">
        <!-- LEFT -->
        <div class="jj-intern__left">
            <div class="jj-intern__badge">✨ Internship Program</div>
            <h2 class="jj-intern__h2">Kickstart Your Career with <br> <span>Jus Jumpin <img draggable="false" role="img" class="emoji" alt="🚀" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f680.svg"></span></h2>
            <p class="jj-intern__sub">Step into a world where creativity meets real-world experience. At Jus Jumpin, internships aren't about fetching coffee — they're about building skills, creating impact, and growing faster than you imagined.</p>
            <div class="jj-intern__desc">
                <p>Whether you're passionate about marketing, design, content creation, or operations — this is your chance to work on live projects, collaborate with a dynamic team, and gain hands-on exposure in a high-energy environment.</p>
                <p>We believe in learning by doing — and here, every day is an opportunity to explore, experiment, and evolve.</p>
            </div>

            <p class="jj-intern__roles-title"><i class="fa fa-fire" aria-hidden="true"></i> Available Internship Domains</p>
            <div class="jj-intern__roles">
                <div class="jj-irole"><span>🎨</span> Graphic Design</div>
                <div class="jj-irole"><span>📱</span> Social Media</div>
                <div class="jj-irole"><span>🎥</span> Video Editing</div>
                <div class="jj-irole"><span>📈</span> Digital Marketing</div>
                <div class="jj-irole"><span>🧑‍💼</span> Operations</div>
                <div class="jj-irole"><span>💻</span> Content Writing</div>
            </div>

            <div class="jj-intern__cta-wrap">
                <button class="jj-intern__cta" onclick="jjOpenModal('Internship Application')">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Apply for Internship →
                </button>
                <p class="jj-intern__cta-note">
                    <i class="fa fa-bolt" aria-hidden="true"></i>
                    <span><strong>Limited slots available</strong> — Apply early! 🔥 Immediate onboarding for selected candidates</span>
                </p>
            </div>
        </div>

        <!-- RIGHT — Benefit Cards -->
        <div class="jj-intern__right">
            <span class="jj-intern__float-tag">🔥 Now Open!</span>
            <div class="jj-icard-grid">
                <div class="jj-icard"><span class="jj-icard__icon">🎨</span><h4>Hands-on Experience</h4><p>Work on real campaigns, live projects, and actual brand executions — not just practice tasks.</p></div>
                <div class="jj-icard"><span class="jj-icard__icon">📈</span><h4>Learn & Grow Fast</h4><p>Get direct mentorship from experienced professionals and accelerate your career journey.</p></div>
                <div class="jj-icard"><span class="jj-icard__icon">🎥</span><h4>Creative Exposure</h4><p>Be part of shoots, editing sessions, social campaigns, and creative brainstorming.</p></div>
                <div class="jj-icard"><span class="jj-icard__icon">🤝</span><h4>Collaborative Culture</h4><p>Work with a young, energetic team that values ideas, creativity, and bold innovation.</p></div>
                <div class="jj-icard"><span class="jj-icard__icon">🚀</span><h4>Build Your Portfolio</h4><p>Leave with real work you can proudly showcase — campaigns, videos, designs, and more.</p></div>
                <div class="jj-icard"><span class="jj-icard__icon">💼</span><h4>Future Opportunities</h4><p>Top-performing interns may get full-time roles with Jus Jumpin. Your launchpad starts here!</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     GENERAL APPLICATION
════════════════════════════════════════════════════ -->
<section class="jj-apply" id="jj-apply">
    <div class="jj-apply__inner">

        <!-- Image side -->
        <div class="jj-apply__img-col">
            <div class="jj-apply__img-glow" aria-hidden="true"></div>
            <div class="jj-apply__chip jj-apply__chip--1">🎯 We're Hiring!</div>
            <div class="jj-apply__chip jj-apply__chip--2">🚀 Grow With Us</div>
            <div class="jj-apply__img-wrap">
                <img src="https://www.jusjumpin.com/wp-content/uploads/2026/03/nLZui9BGjq.gif" alt="Join the Jus Jumpin team" loading="lazy">
                <div class="jj-apply__img-caption">
                    <p><i class="fa fa-star" aria-hidden="true"></i> Don't see the right role?</p>
                    <h3>We'd still love to hear from you!</h3>
                </div>
            </div>
        </div>

        <!-- Form side -->
        <div class="jj-apply__form-col">
            <div class="jj-apply__hdr">
                <p class="jj-eyebrow jj-eyebrow--light"><i class="fa fa-paper-plane" aria-hidden="true"></i> General Application</p>
                <h2>Drop Your CV Anytime</h2>
                <p>No matching opening? Send us your profile and we'll reach out when the perfect opportunity arises!</p>
            </div>

            <?php jj_flash_messages(); ?>

            <form method="post" enctype="multipart/form-data" class="jj-form" id="jj-general-form" novalidate>
                <?php wp_nonce_field( 'jj_careers_submit', 'jj_careers_nonce' ); ?>
                <input type="hidden" name="job_title" id="jj-job-title" value="General Application">

                <div class="jj-form__row">
                    <div class="jj-form__group">
                        <label for="g_name"><i class="fa fa-user" aria-hidden="true"></i> Full Name <span class="jj-req">*</span></label>
                        <input type="text" id="g_name" name="full_name" required placeholder="Your full name">
                    </div>
                    <div class="jj-form__group">
                        <label for="g_phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone <span class="jj-req">*</span></label>
                        <div class="jj-phone">
                            <span class="jj-phone__pre">🇮🇳 +91</span>
                            <input type="tel" id="g_phone" name="phone" required placeholder="98765 43210">
                        </div>
                    </div>
                </div>

                <div class="jj-form__row">
                    <div class="jj-form__group">
                        <label for="g_email"><i class="fa fa-envelope" aria-hidden="true"></i> Email <span class="jj-req">*</span></label>
                        <input type="email" id="g_email" name="email" required placeholder="your@email.com">
                    </div>
                    <div class="jj-form__group">
                        <label for="g_exp"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience <span class="jj-req">*</span></label>
                        <select id="g_exp" name="experience" required>
                            <option value="">Select experience</option>
                            <option value="fresher">🎓 Fresher (0–1 years)</option>
                            <option value="experienced">💼 Experienced (1+ years)</option>
                        </select>
                    </div>
                </div>

                <div class="jj-form__group">
                    <label><i class="fa fa-file-arrow-up" aria-hidden="true"></i> Attach CV / Resume <span class="jj-req">*</span></label>
                    <div class="jj-filezone" id="jj-gen-drop">
                        <input type="file" id="g_cv" name="resume" accept=".pdf,.doc,.docx">
                        <span class="jj-filezone__icon">📄</span>
                        <p>Drag & drop your CV or <strong>browse files</strong></p>
                        <small>PDF, DOC, DOCX · Max 5MB</small>
                        <div class="jj-filezone__name" id="jj-gen-name"></div>
                    </div>
                </div>

                <div class="jj-form__group">
                    <label for="g_msg"><i class="fa fa-comment" aria-hidden="true"></i> Tell Us About Yourself</label>
                    <textarea id="g_msg" name="message" rows="4" placeholder="Why would you be a great fit at Jus Jumpin? Share your passion! 🎯"></textarea>
                </div>

                <div class="jj-btns">
                    <button type="button" class="jj-btn jj-btn--wa" onclick="jjSendWA('general')">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Send via WhatsApp
                    </button>
                    <button type="submit" name="send_email" class="jj-btn jj-btn--email">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i> Send via Email
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════
     APPLY MODAL
════════════════════════════════════════════════════ -->
<div class="jj-modal-bg" id="jj-modal" role="dialog" aria-modal="true" aria-labelledby="jj-modal-title">
    <div class="jj-modal">
        <button class="jj-modal__close" onclick="jjCloseModal()" aria-label="Close">✕</button>
        <div class="jj-modal__hdr">
            <span class="jj-modal__icon" aria-hidden="true">🚀</span>
            <h2 id="jj-modal-title">Apply for This Role</h2>
            <span class="jj-modal__role" id="jj-modal-role"></span>
        </div>

        <form method="post" enctype="multipart/form-data" class="jj-form jj-form--light" id="jj-modal-form" novalidate>
            <?php wp_nonce_field( 'jj_careers_submit', 'jj_careers_nonce' ); ?>
            <input type="hidden" name="job_title" id="jj-modal-job" value="">

            <div class="jj-form__row">
                <div class="jj-form__group">
                    <label for="m_name"><i class="fa fa-user" aria-hidden="true"></i> Full Name <span class="jj-req">*</span></label>
                    <input type="text" id="m_name" name="full_name" required placeholder="Your full name">
                </div>
                <div class="jj-form__group">
                    <label for="m_loc"><i class="fa fa-city" aria-hidden="true"></i> Location / City <span class="jj-req">*</span></label>
                    <input type="text" id="m_loc" name="location" required placeholder="e.g. Kolkata, Newtown">
                </div>
            </div>

            <div class="jj-form__row">
                <div class="jj-form__group">
                    <label for="m_phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone <span class="jj-req">*</span></label>
                    <div class="jj-phone">
                        <span class="jj-phone__pre">🇮🇳 +91</span>
                        <input type="tel" id="m_phone" name="phone" required placeholder="98765 43210">
                    </div>
                </div>
                <div class="jj-form__group">
                    <label for="m_email"><i class="fa fa-envelope" aria-hidden="true"></i> Email <span class="jj-req">*</span></label>
                    <input type="email" id="m_email" name="email" required placeholder="your@email.com">
                </div>
            </div>

            <div class="jj-form__group">
                <label for="m_exp"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience Level <span class="jj-req">*</span></label>
                <select id="m_exp" name="experience" required>
                    <option value="">Select experience level</option>
                    <option value="fresher">🎓 Fresher (0–1 years)</option>
                    <option value="experienced">💼 Experienced (1+ years)</option>
                </select>
            </div>

            <div class="jj-form__group">
                <label><i class="fa fa-file-arrow-up" aria-hidden="true"></i> Attach CV / Resume</label>
                <div class="jj-filezone" id="jj-modal-drop">
                    <input type="file" id="m_cv" name="resume" accept=".pdf,.doc,.docx">
                    <span class="jj-filezone__icon">📄</span>
                    <p>Drag & drop your CV or <strong>browse files</strong></p>
                    <small>PDF, DOC, DOCX · Max 5MB</small>
                    <div class="jj-filezone__name" id="jj-modal-name"></div>
                </div>
            </div>

            <div class="jj-form__group">
                <label for="m_msg"><i class="fa fa-comment" aria-hidden="true"></i> Why Should We Hire You?</label>
                <textarea id="m_msg" name="message" rows="3" placeholder="Tell us what makes you a great fit for Jus Jumpin! 🎯"></textarea>
            </div>

            <div class="jj-btns">
                <button type="button" class="jj-btn jj-btn--wa" onclick="jjSendWA('modal')">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp
                </button>
                <button type="submit" name="send_email" class="jj-btn jj-btn--email">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Email
                </button>
            </div>
        </form>
    </div>
</div>

<?php
// ── JOB CARD HELPER ─────────────────────────────────
function jj_job_card( $title, $desc, $skills, $dept ) {
    $skills_html = '';
    foreach ( $skills as $s ) {
        $skills_html .= '<span class="jj-skill">' . esc_html( $s ) . '</span>';
    }
    $safe_title = esc_attr( $title );
    $dept_class = esc_attr( $dept );
    return '
    <div class="jj-jcard">
        <div class="jj-jcard__top">
            <span class="jj-tag jj-tag--' . $dept_class . '">' . esc_html( ucfirst( $dept ) ) . '</span>
            <span class="jj-open-tag">Full Time</span>
        </div>
        <h3 class="jj-jcard__title">' . esc_html( $title ) . '</h3>
        <p class="jj-jcard__loc"><i class="fa fa-location-dot" aria-hidden="true"></i> Jus Jumpin, Newtown</p>
        <p class="jj-jcard__desc">' . esc_html( $desc ) . '</p>
        <div class="jj-skills">' . $skills_html . '</div>
        <button class="jj-apply-btn" onclick="jjOpenModal(\'' . $safe_title . '\')">
            <span>🚀 Apply Now</span>
        </button>
    </div>';
}

get_footer();
?>