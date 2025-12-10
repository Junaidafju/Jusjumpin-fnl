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
    $phpmailer->Password = 'rcrw efyf dcox hvpf';

    // From
    $fromEmail = 'junaidafju@gmail.com';
    $fromName  = 'JUS JUMPIN | Best Trampoline Park in India';
    try {
        $phpmailer->setFrom($fromEmail, $fromName, false);
    } catch (Exception $e) {
        // Fallback silently; WordPress will handle default from
    }
});

// Enable SMTP debugging (set to 0 for production, 2 for verbose debugging)
add_action('phpmailer_init', function($phpmailer) {
    if (!($phpmailer instanceof PHPMailer\PHPMailer\PHPMailer)) {
        return;
    }
    // Uncomment for debugging (only in development)
    // $phpmailer->SMTPDebug = 2;
    // $phpmailer->Debugoutput = function($str, $level) {
    //     error_log("SMTP Debug: $str");
    // };
});

// Default email content type to HTML for our theme emails only
add_filter('wp_mail_content_type', function($content_type) {
    return 'text/html';
});

