<?php
// Prevent direct access
if (!defined('ABSPATH')) { exit; }

// SMTP configuration for Gmail
add_action('phpmailer_init', function($phpmailer) {
    if (!($phpmailer instanceof PHPMailer\PHPMailer\PHPMailer)) {
        return;
    }

    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587;
    $phpmailer->SMTPSecure = 'tls';

    // Credentials
    $phpmailer->Username = 'junaidafju@gmail.com';
    $phpmailer->Password = 'ggqb aekf mwij cdtl';

    // From
    $fromEmail = 'junaidafju@gmail.com';
    $fromName  = 'JUS JUMPIN | Best Trampoline Park in India';
    try {
        $phpmailer->setFrom($fromEmail, $fromName, false);
    } catch (Exception $e) {
        // Fallback silently; WordPress will handle default from
    }
});

// Default email content type to HTML for our theme emails only
add_filter('wp_mail_content_type', function($content_type) {
    return 'text/html';
});
// SMTP configuration for Gmail

