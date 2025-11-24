<?php
// Prevent direct access
if (!defined('ABSPATH')) { exit; }

function jj_mail_headers(array $extra = array(), $replyTo = '') {
    $headers = array();
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $fromEmail = apply_filters('JJ_CONTACT_FROM_EMAIL', get_bloginfo('admin_email'));
    if (empty($fromEmail)) { $fromEmail = get_option('admin_email'); }
    $fromName  = apply_filters('JJ_CONTACT_FROM_NAME', get_bloginfo('name'));
    $headers[] = 'From: ' . $fromName . ' <' . $fromEmail . '>';
    if (!empty($replyTo)) {
        $headers[] = 'Reply-To: ' . $replyTo;
    }
    foreach ($extra as $h) {
        $headers[] = $h;
    }
    return $headers;
}

function jj_render_email($template, array $data) {
    $file = locate_template('templates/emails/' . $template . '.php', false, false);
    if (!$file) { return ''; }
    ob_start();
    $payload = $data; // expose as $payload inside template
    include $file;
    return (string) ob_get_clean();
}

function jj_mail_admin_contact(array $data) {
    $adminEmail = apply_filters('JJ_CONTACT_ADMIN_EMAIL', get_option('admin_email'));
    $subject    = '[Contact] ' . $data['topic'] . ' — ' . $data['name'];
    // Encode non-ascii subjects
    if (function_exists('mb_encode_mimeheader')) {
        $subject = mb_encode_mimeheader($subject, 'UTF-8');
    }
    $html  = jj_render_email('contact-admin', $data);
    if ($html === '') { $html = wpautop(esc_html(wp_strip_all_tags(print_r($data, true)))); }
    $headers = jj_mail_headers(array(), $data['name'] . ' <' . $data['email'] . '>');
    return wp_mail($adminEmail, $subject, $html, $headers);
}

function jj_mail_user_confirmation(array $data) {
    $to       = $data['email'];
    $subject  = 'Thanks, we received your message — ' . $data['siteName'];
    if (function_exists('mb_encode_mimeheader')) {
        $subject = mb_encode_mimeheader($subject, 'UTF-8');
    }
    $html     = jj_render_email('contact-user', $data);
    if ($html === '') { $html = wpautop('Thank you, ' . esc_html($data['name']) . '. We received your message.'); }
    $headers  = jj_mail_headers();
    return wp_mail($to, $subject, $html, $headers);
}

