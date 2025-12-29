<?php
/**
 * Template Name: Thane R Mall Coming Soon
 * Description: Custom page for Jus Jumpin Thane R Mall opening soon announcement.
 */

// Define brand colors array for cycling (if needed for other elements)
$brand_colors = array(
    '#f67edd', // pink
    '#6dc065', // green
    '#ff661a', // orange
    '#00b9e3', // cyan
    '#ff5da0', // rose
    '#ffc60b', // yellow
    '#b2d235', // lime
    '#ff3645', // red
    '#8869d2'  // purple
);

// Any additional PHP logic here (e.g., dynamic content)

// Start HTML output
get_header(); // WordPress header
?>

<style>
/* Coming Soon Section CSS */
.coming-soon-section {
    background: linear-gradient(135deg, #f0f4f8 0%, #e0e7ff 100%);
    padding: 60px 20px;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    margin: 40px 0;
    overflow: hidden;
    position: relative;
}

.coming-soon__container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.coming-soon__content {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 12px 40px rgba(0,0,0,0.15);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.coming-soon__title {
    font-size: 2.5rem;
    font-weight: 800;
    color: #1C352D;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.coming-soon__description {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 30px;
    line-height: 1.6;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.coming-soon__teaser {
    position: relative;
    display: inline-block;
    margin-bottom: 30px;
}

.coming-soon__image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 5px solid #f67edd;
    box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    object-fit: cover;
}

.coming-soon__badge {
    position: absolute;
    top: -10px;
    right: -10px;
    background: linear-gradient(135deg, #f67edd, #ff5da0);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.9rem;
    text-transform: uppercase;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.btn-glass.primary {
    background: rgba(246, 126, 221, 0.8);
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    box-shadow: 0 6px 20px rgba(246, 126, 221, 0.3);
}

.btn-glass.primary:hover {
    background: rgba(246, 126, 221, 1);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(246, 126, 221, 0.5);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .coming-soon__title {
        font-size: 2rem;
    }
    .coming-soon__description {
        font-size: 1rem;
    }
    .coming-soon__image {
        width: 120px;
        height: 120px;
    }
    .coming-soon__content {
        padding: 30px 20px;
    }
}
</style>

<section class="coming-soon-section" aria-label="Coming Soon: Jus Jumpin at R Mall Thane">
    <div class="coming-soon__container">
        <div class="coming-soon__content">
            <h2 class="coming-soon__title">We're Opening Soon at R Mall Thane!</h2>
            <p class="coming-soon__description">
                Get ready for the ultimate trampoline adventure! Jus Jumpin is bringing fun, fitness, and excitement to R Mall Thane. Stay tuned for launch details.
            </p>
            <div class="coming-soon__teaser">
                <img src="https://www.jusjumpin.com/wp-content/uploads/2025/12/Thane.png" alt="R Mall Thane Location Teaser" class="coming-soon__image">
                <div class="coming-soon__badge">
                    <span class="coming-soon__badge-text">Opening Soon</span>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=919830359999&text=Hey!%20I%20want%20updates%20on%20Jus%20Jumpin%20at%20R%20Mall%20Thane." class="btn-glass primary" target="_blank" rel="noopener noreferrer">
                <span class="btn-icon">📅</span> Get Notified
            </a>
        </div>
    </div>
</section>

<?php
get_footer(); // WordPress footer
?>