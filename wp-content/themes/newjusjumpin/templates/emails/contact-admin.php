<?php if (!defined('ABSPATH')) { exit; } ?>
<?php $d = $payload; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Submission</title>
</head>
<body style="margin:0;background:#f5f7fa;font-family:Arial,Helvetica,sans-serif;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#f5f7fa;padding:24px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" cellpadding="0" cellspacing="0" width="600" style="max-width:600px;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e6ebf1;">
                    <tr>
                        <td style="background:#1c352d;color:#c7ec38;padding:18px 22px;font-weight:700;font-size:18px;">New contact message — <?php echo esc_html($d['siteName']); ?></td>
                    </tr>
                    <tr>
                        <td style="padding:22px;color:#1c352d;">
                            <p style="margin:0 0 8px 0;font-size:16px;">You've received a new message from your website contact form.</p>
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="margin-top:14px;font-size:14px;color:#1c352d;">
                                <tr><td style="padding:6px 0;width:140px;color:#51636a;">Name</td><td><?php echo esc_html($d['name']); ?></td></tr>
                                <tr><td style="padding:6px 0;color:#51636a;">Email</td><td><a href="mailto:<?php echo esc_attr($d['email']); ?>" style="color:#1c352d;"><?php echo esc_html($d['email']); ?></a></td></tr>
                                <tr><td style="padding:6px 0;color:#51636a;">Phone</td><td><?php echo esc_html($d['phone']); ?></td></tr>
                                <tr><td style="padding:6px 0;color:#51636a;">Topic</td><td><?php echo esc_html($d['topic']); ?></td></tr>
                                <tr><td style="padding:6px 0;color:#51636a;">Submitted</td><td><?php echo esc_html($d['submittedAt']); ?> (IP: <?php echo esc_html($d['ip']); ?>)</td></tr>
                                <tr><td style="padding:6px 0;color:#51636a;">Tracking</td><td><?php echo esc_html($d['trackingId']); ?></td></tr>
                            </table>
                            <div style="margin-top:16px;padding:14px;background:#f9fbef;border:1px solid #e6ebf1;border-radius:8px;">
                                <div style="font-weight:700;margin-bottom:8px;">Message</div>
                                <div style="white-space:pre-wrap;line-height:1.6;"><?php echo wp_kses_post($d['message']); ?></div>
                            </div>
                            <p style="margin-top:18px;font-size:14px;">Reply directly to this email to contact <strong><?php echo esc_html($d['name']); ?></strong>.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#f5f7fa;color:#7a8b93;padding:16px 22px;font-size:12px;">Sent from <a href="<?php echo esc_url($d['siteUrl']); ?>" style="color:#7a8b93;"><?php echo esc_html($d['siteName']); ?></a></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
<!--Contact Admin Email Template-->


