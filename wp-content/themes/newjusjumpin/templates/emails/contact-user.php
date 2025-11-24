<?php if (!defined('ABSPATH')) { exit; } ?>
<?php $d = $payload; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We received your message - <?php echo esc_html($d['siteName']); ?></title>
    <style>
        body {
            margin: 0;
            background: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #e6ebf1;
        }
        .email-header {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            color: #ffffff;
            padding: 24px;
            text-align: center;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 15px;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .email-body {
            padding: 28px;
            color: #333;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 16px;
            color: #1a1a2e;
        }
        .message {
            font-size: 16px;
            margin-bottom: 20px;
            color: #555;
        }
        .info-box {
            background: #f9fafb;
            border-radius: 8px;
            padding: 16px;
            margin: 20px 0;
            border-left: 4px solid #e94560;
        }
        .info-table {
            width: 100%;
            margin: 16px 0;
            font-size: 14px;
            border-collapse: collapse;
        }
        .info-table tr {
            border-bottom: 1px solid #f0f0f0;
        }
        .info-table td {
            padding: 8px 0;
            vertical-align: top;
        }
        .info-table .label {
            width: 120px;
            color: #666;
            font-weight: 500;
        }
        .message-box {
            margin-top: 20px;
            padding: 16px;
            background: #f9fafb;
            border: 1px solid #e6ebf1;
            border-radius: 8px;
        }
        .message-box .label {
            font-weight: 700;
            margin-bottom: 8px;
            color: #1a1a2e;
        }
        .message-content {
            white-space: pre-wrap;
            line-height: 1.6;
            color: #555;
        }
        .next-steps {
            margin-top: 24px;
            padding: 16px;
            background: #f0f7ff;
            border-radius: 8px;
            border: 1px solid #d0e3ff;
        }
        .next-steps h3 {
            margin: 0 0 12px 0;
            color: #1a1a2e;
            font-size: 16px;
        }
        .next-steps ul {
            margin: 0;
            padding-left: 20px;
            color: #555;
        }
        .next-steps li {
            margin-bottom: 8px;
        }
        .contact-info {
            margin-top: 20px;
            padding: 16px;
            background: #fff8f0;
            border-radius: 8px;
            border: 1px solid #ffeccc;
        }
        .contact-info h3 {
            margin: 0 0 12px 0;
            color: #1a1a2e;
            font-size: 16px;
        }
        .contact-details {
            font-size: 14px;
            color: #555;
        }
        .email-footer {
            background: #f5f7fa;
            color: #7a8b93;
            padding: 20px 24px;
            font-size: 12px;
            text-align: center;
            border-top: 1px solid #e6ebf1;
        }
        .email-footer a {
            color: #0f3460;
            text-decoration: none;
        }
        .social-links {
            margin: 16px 0;
        }
        .social-link {
            display: inline-block;
            margin: 0 8px;
            color: #0f3460;
            text-decoration: none;
            font-weight: 500;
        }
        .highlight {
            color: #e94560;
            font-weight: 600;
        }
        .reference-id {
            background: #1a1a2e;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-family: monospace;
            font-size: 14px;
            display: inline-block;
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div style="padding: 24px 12px; background: #f5f7fa;">
        <div class="email-container">
            <!-- Header with Logo -->
            <div class="email-header">
                <div class="logo-container">
                    <img src="https://www.jusjumpin.com/wp-content/uploads/2025/06/Jus-Jumpin-Logo-2-1024x209.png" alt="Jus Jumpin Logo" class="logo">
                </div>
                <h1>Thanks for contacting <?php echo esc_html($d['siteName']); ?>!</h1>
            </div>
            
            <!-- Body -->
            <div class="email-body">
                <p class="greeting">Hi <?php echo esc_html($d['name']); ?>,</p>
                
                <p class="message">We've received your message and our team will get back to you within 24 hours. We're excited to help you with your inquiry!</p>
                
                <div class="info-box">
                    <p style="margin: 0; font-weight: 600;">Your reference number: <span class="reference-id"><?php echo esc_html($d['trackingId']); ?></span></p>
                    <p style="margin: 8px 0 0 0; font-size: 14px;">Please keep this reference number for future communication.</p>
                </div>
                
                <table class="info-table">
                    <tr>
                        <td class="label">Topic</td>
                        <td><strong><?php echo esc_html($d['topic']); ?></strong></td>
                    </tr>
                    <tr>
                        <td class="label">Submitted</td>
                        <td><?php echo esc_html($d['submittedAt']); ?></td>
                    </tr>
                </table>
                
                <div class="message-box">
                    <div class="label">Your Message</div>
                    <div class="message-content"><?php echo wp_kses_post($d['message']); ?></div>
                </div>
                
                <div class="next-steps">
                    <h3>What happens next?</h3>
                    <ul>
                        <li>Our team will review your inquiry</li>
                        <li>We'll contact you with more information</li>
                        <li>We can schedule a venue tour if needed</li>
                        <li>We'll help you plan your perfect event</li>
                    </ul>
                </div>
                
                <div class="contact-info">
                    <h3>Need immediate assistance?</h3>
                    <div class="contact-details">
                        <p style="margin: 8px 0;">Call us: <strong>+91 9830359999</strong> (Bookings & Birthdays)</p>
                        <p style="margin: 8px 0;">Email: <strong>info@jusjumpin.com</strong></p>
                        <p style="margin: 8px 0;">Visit: PS Qube, Action Area IID, Rajarhat, Newtown, West Bengal 700156</p>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="email-footer">
                <div class="social-links">
                    <a href="#" class="social-link">Facebook</a> • 
                    <a href="#" class="social-link">Instagram</a> • 
                    <a href="#" class="social-link">Twitter</a> • 
                    <a href="#" class="social-link">YouTube</a>
                </div>
                <p style="margin: 8px 0;">Visit us: <a href="<?php echo esc_url($d['siteUrl']); ?>"><?php echo esc_html($d['siteUrl']); ?></a></p>
                <p style="margin: 0; font-size: 11px;">Kolkata's premier experiential hub • Sports • Dining • Entertainment</p>
            </div>
        </div>
    </div>
</body>
</html>
<!--Contact User Email Template-->