<?php
/**
 * Template Name: Terms and Conditions
 * 
 * The template for displaying the Terms and Conditions page.
 *
 * @package NewJusJumpin
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="terms-hero">
        <div class="container">
            <h1>Terms and Conditions</h1>
            <p>Please read these terms carefully before using our services</p>
        </div>
    </section>

    <section class="terms-content">
        <div class="container">
            <div class="terms-wrapper">
                <div class="terms-section">
                    <h2>Minimum Guest Requirement</h2>
                    <p>To book a party package, a minimum of 10 kids & 10 adults are required. In case minimum requirement for adults not met than 15 kids are mandatory for the birthday party.</p>
                </div>

                <div class="terms-section">
                    <h2>Socks Policy</h2>
                    <p>To ensure safety, all guests must wear anti-skid socks in the play area. You may bring your own or purchase them at the counter.</p>
                </div>

                <div class="terms-section">
                    <h2>Party Duration</h2>
                    <p>Party durations are determined based on the time slots available with a buffer period allocated for wrap-up. Exceeding the scheduled time may incur an additional charge depending on the overage. We will communicate the specific time slot and any potential overage charges clearly during the booking process.</p>
                </div>

                <div class="terms-section">
                    <h2>Supervision</h2>
                    <p>While our staff provides general supervision within the play area, direct supervision of children remains the responsibility of parents or guardians. We kindly request that you ensure adequate supervision of children throughout the party.</p>
                </div>

                <div class="terms-section">
                    <h2>Vendors and Decorations</h2>
                    <p>To maintain a consistent and safe environment, we do not permit outside photographers, vendors, or personal decorations. We offer various party enhancements and are happy to discuss options to personalize your event.</p>
                </div>

                <div class="terms-section">
                    <h2>Food and Beverages</h2>
                    <p>For hygiene and safety reasons within the play zone, outside food and beverages are not permitted. We offer a diverse selection of food and beverage options on-site for your convenience.</p>
                </div>

                <div class="terms-section">
                    <h2>Party Exclusivity</h2>
                    <p>A dedicated birthday party zone is allocated for celebrating a birthday party. The company does not provide exclusivity for the entire play/trampoline area.</p>
                </div>

                <div class="terms-section">
                    <h2>Billing Policy</h2>
                    <p>Billing is based on the Minimum Guarantee (MG). Any agreed-upon changes to the MG, communicated via WhatsApp or other agreed-upon channels, will be considered final and reflected in the invoice.</p>
                </div>

                <div class="terms-section">
                    <h2>Social Media Use</h2>
                    <p>By booking a party, you acknowledge that we may use photographs taken during the event for promotional purposes on our social media platforms. We respect your privacy and are happy to discuss any concerns you may have.</p>
                </div>

                <div class="terms-section">
                    <h2>Safety Measures</h2>
                    <p>Guest safety is our utmost priority. All play equipment is regularly sanitized and maintained. We kindly request that all guests adhere to our safety instructions and guidelines.</p>
                </div>

                <div class="terms-section">
                    <h2>Party Coordination</h2>
                    <p>Our dedicated party coordinator will be available to assist you throughout your event, ensuring a seamless and enjoyable experience. Please do not hesitate to contact them with any questions or special requests.</p>
                </div>

                <div class="terms-section">
                    <h2>Liability and Damages</h2>
                    <p>Parents or guardians are responsible for any damages caused by their children or guests to the venue or equipment. We appreciate your cooperation in maintaining the venue's condition.</p>
                </div>

                <div class="terms-section">
                    <h2>Additional Requests</h2>
                    <p>We are happy to consider special requests, such as additional food, themed decorations, or customized activities. Please inform us of these requests in advance, and we will do our best to accommodate them, subject to availability and feasibility.</p>
                </div>

                <div class="terms-section">
                    <h2>Event Timing</h2>
                    <p>We kindly request that all guests arrive at least 15 minutes before the scheduled start time.</p>
                </div>

                <div class="terms-section">
                    <h2>Amendments to Digital Invitation</h2>
                    <p>We are dedicated IN delivering precise and required digital invitations. If any alternative or adjustments are required, clients must inform us at least 24 hours before the scheduled event time. Unfortunately, any adjustments being requested after this deadline may not be accomplished.</p>
                </div>

                <div class="terms-section">
                    <h2>Policy Amendments and Enforcement</h2>
                    <p>Jus Jumpin reserves the right to amend, modify, or update these Terms and Conditions and any applicable policies at any time, with changes effective immediately upon posting on the premises, the company website, or by other reasonable notice.</p>
                </div>

                <div class="terms-section">
                    <h2>Contact Information</h2>
                    <p>Questions about the Terms of Service should be sent to us at <a href="mailto:info@jusjumpin.com">info@jusjumpin.com</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Terms and Conditions Page Styles */
.terms-hero {
    background: linear-gradient(rgba(46, 125, 50, 0.9), rgba(46, 125, 50, 0.95));
    color: white;
    padding: 100px 0 80px;
    text-align: center;
    position: relative;
}

.terms-hero h1 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 20px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.terms-hero p {
    font-size: 1.3rem;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.95;
}

.terms-content {
    padding: 80px 0;
    background: #f8f9fa;
}

.terms-wrapper {
    max-width: 900px;
    margin: 0 auto;
    background: white;
    border-radius: 15px;
    padding: 50px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.terms-section {
    margin-bottom: 40px;
    padding-bottom: 30px;
    border-bottom: 1px solid #eee;
}

.terms-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.terms-section h2 {
    color: #2e7d32;
    font-size: 1.5rem;
    margin-bottom: 15px;
    font-weight: 700;
}

.terms-section p {
    color: #555;
    line-height: 1.8;
    font-size: 1.05rem;
}

.terms-section a {
    color: #2e7d32;
    text-decoration: none;
    font-weight: 600;
}

.terms-section a:hover {
    text-decoration: underline;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .terms-hero {
        padding: 80px 0 60px;
    }
    
    .terms-hero h1 {
        font-size: 2.2rem;
    }
    
    .terms-hero p {
        font-size: 1.1rem;
    }
    
    .terms-wrapper {
        padding: 30px 25px;
    }
    
    .terms-section h2 {
        font-size: 1.3rem;
    }
}
</style>

<?php
get_footer();