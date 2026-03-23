
<?php
/**
 * Template: Udaipur - Urban Square Mall
 * Modern location page with hero slider and glassmorphism design
 */

get_header();
?>

<style>
.under-construction {
    min-height: calc(100vh - 200px);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: radial-gradient(circle at top, #1a1a1a, #0d0d0d);
    padding: 60px 20px;
}

.uc-box {
    max-width: 720px;
    padding: 50px 40px;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 16px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.08);
}

.uc-logo img {
    max-width: 180px;
    margin-bottom: 25px;
}

.uc-box h1 {
    font-size: 34px;
    font-weight: 700;
    color: #b7e968;
    margin-bottom: 15px;
}

.uc-box p {
    font-size: 16px;
    color: #d1d1d1;
    line-height: 1.7;
    margin-bottom: 20px;
}

.uc-note {
    font-size: 14px;
    color: #9ca3af;
    margin-top: 25px;
}
</style>

<section class="under-construction">
    <div class="uc-box">

        <div class="uc-logo">
            <img src="https://www.jusjumpin.com/wp-content/themes/newjusjumpin/assets/img/Jus-Jumpin-Logo.webp" alt="Jus Jumpin">
        </div>

        <h1>We’re Building Something Awesome 🎉</h1>

        <p>
            Our store is currently under construction as we work behind the scenes
            to bring you a fun, exciting, and improved experience.
        </p>

        <p>
            Thank you for your patience — kindly check back soon!
        </p>

        <div class="uc-note">
            — Team Jus Jumpin
        </div>

    </div>
</section>

<?php

