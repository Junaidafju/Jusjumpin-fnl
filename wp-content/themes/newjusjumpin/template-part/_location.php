<?php
/**
 * Reusable renderer for location templates
 * Expected variables defined by including template:
 * $title, $state, $city, $slug, $address, $timings, $pricing, $phone,
 * $highlights (array of strings), $activities (array of strings), $image_url
 */

if (!isset($title)) { $title = 'Jus Jumpin Location'; }
if (!isset($image_url)) {
    $image_url = get_template_directory_uri() . '/assets/img/Jus-Jumpin-Logo.webp';
}

?>
<section class="hero-section" style="min-height:60vh;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;">
    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;filter:brightness(0.6);">
    <div class="container" style="position:relative;z-index:1;text-align:center;color:#fff;">
        <h1 style="font-size:2.2rem;line-height:1.2;margin-bottom:12px;"><?php echo esc_html($title); ?></h1>
        <?php if (!empty($state) && !empty($city)) : ?>
            <p style="opacity:0.9;">Located in <?php echo esc_html($city . ', ' . $state); ?></p>
        <?php endif; ?>
    </div>
    <div class="hero-overlay" aria-hidden="true"></div>
</section>

<section class="section container" style="padding-top:40px;">
    <article class="glass-card">
        <?php if (!empty($highlights)) : ?>
            <h2 class="mt-4">Key Highlights</h2>
            <ul>
                <?php foreach ($highlights as $item) : ?>
                    <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (!empty($activities)) : ?>
            <h3 class="mt-4">Activities</h3>
            <ul class="activities-list">
                <?php foreach ($activities as $a) : ?>
                    <li><?php echo esc_html($a); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if (!empty($timings)) : ?>
            <p class="mt-4"><strong>Timings:</strong> <?php echo esc_html($timings); ?></p>
        <?php endif; ?>

        <?php if (!empty($pricing)) : ?>
            <p><strong>Charges:</strong> <?php echo esc_html($pricing); ?></p>
        <?php endif; ?>

        <?php if (!empty($address)) : ?>
            <p><strong>Location:</strong> <?php echo esc_html($address); ?></p>
        <?php endif; ?>

        <?php if (!empty($phone)) : ?>
            <p><strong>Contact:</strong> <a href="tel:<?php echo esc_attr(preg_replace('/\D+/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></p>
        <?php endif; ?>
    </article>
</section>

<script type="application/ld+json">
<?php
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => $title ?? 'Jus Jumpin Location',
        "alternateName" => $alternate_name ?? 'Jus Jumpin',
        "url" => home_url('/' . trim($slug ?? '', '/') . '/'),
        "logo" => get_template_directory_uri() . '/assets/img/Jus-Jumpin-Logo-2-1024x209.png',
        "image" => [
            get_template_directory_uri() . '/assets/img/IMG_0001-2048x1365.jpg',
            get_template_directory_uri() . '/assets/img/IMG_4608-2048x1536.jpg'
        ],
        "description" => $description ?? 'Jus Jumpin is an indoor trampoline park and kids entertainment zone — perfect for playful kids and thrill-loving adults looking to unleash their inner jumper.',
        "telephone" => $phone ?? '',
        "email" => $email ?? 'info@jusjumpin.com',
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => $address ?? '',
            "addressLocality" => $city ?? '',
            "addressRegion" => $state ?? '',
            "postalCode" => $postal_code ?? '',
            "addressCountry" => "IN"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => $latitude ?? '',
            "longitude" => $longitude ?? ''
        ],
        "hasMap" => $has_map ?? '',
        "openingHoursSpecification" => [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens" => "11:00",
            "closes" => "21:30"
        ],
        "priceRange" => $price_range ?? '₹₹',
        "keywords" => $keywords ?? 'trampoline park, kids entertainment zone, indoor play area, jump fun',
        "areaServed" => [
            "@type" => "Place",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => $city ?? '',
                "addressRegion" => $state ?? '',
                "addressCountry" => "IN"
            ]
        ]
    ];

    if (isset($rating_value) && isset($review_count)) {
        $schema["aggregateRating"] = [
            "@type" => "AggregateRating",
            "ratingValue" => $rating_value,
            "reviewCount" => $review_count,
            "bestRating" => "5",
            "worstRating" => "1"
        ];
    }

    echo wp_json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

