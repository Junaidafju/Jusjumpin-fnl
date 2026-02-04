<?php
/**
 * Template Name: School Trips
 * 
 * The template for displaying the School Trips page.
 *
 * @package NewJusJumpin
 */

get_header();
?>

<main id="primary" class="site-main school-trips-page">
    <!-- Hero Section with Animated Elements -->
    <section class="school-trips-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="floating-shapes">
                <span class="shape shape-1"></span>
                <span class="shape shape-2"></span>
                <span class="shape shape-3"></span>
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">Educational Excellence</span>
                <h1>School Trips & Educational Outings</h1>
                <p class="hero-subtitle">Creating memorable learning experiences through active play and structured educational programs</p>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Schools Visited</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">15,000+</span>
                        <span class="stat-label">Happy Students</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Safety Record</span>
                    </div>
                </div>
                <div class="hero-cta">
                    <a href="#packages" class="btn btn-primary">View Packages</a>
                    <a href="#contact" class="btn btn-secondary">Request Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Why Choose Us</span>
                <h2>The Perfect Learning Environment</h2>
                <p>We provide a safe, engaging, and educational experience that combines physical activity with curriculum-aligned learning outcomes</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Curriculum Aligned</h3>
                    <p>Programs designed to support educational standards while promoting physical activity and social development</p>
                    <ul class="feature-list">
                        <li>Age-appropriate activities</li>
                        <li>Learning objectives mapped</li>
                        <li>Educational resources provided</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Safety First</h3>
                    <p>Fully trained staff, comprehensive insurance, and rigorous safety protocols ensure peace of mind for teachers and parents</p>
                    <ul class="feature-list">
                        <li>DBS checked staff</li>
                        <li>First aid certified supervisors</li>
                        <li>Risk assessments provided</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Flexible Group Sizes</h3>
                    <p>From small classes to entire year groups, we accommodate schools of all sizes with customized arrangements</p>
                    <ul class="feature-list">
                        <li>Groups from 15 to 150+</li>
                        <li>Dedicated group coordinators</li>
                        <li>Teacher ratio support</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-pound-sign"></i>
                    </div>
                    <h3>Competitive Pricing</h3>
                    <p>Special educational rates with transparent pricing and no hidden costs. Free teachers included</p>
                    <ul class="feature-list">
                        <li>Volume discounts available</li>
                        <li>Free accompanying adults</li>
                        <li>Flexible payment options</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Catering Options</h3>
                    <p>Nutritious meal packages catering to all dietary requirements and allergies</p>
                    <ul class="feature-list">
                        <li>Healthy lunch options</li>
                        <li>Allergy-friendly menus</li>
                        <li>Bring your own option</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Easy Booking</h3>
                    <p>Simple online booking system with flexible dates and hassle-free organization</p>
                    <ul class="feature-list">
                        <li>Online booking portal</li>
                        <li>Flexible rescheduling</li>
                        <li>Dedicated support team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="trip-packages" id="packages">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Packages</span>
                <h2>Choose Your Adventure</h2>
                <p>Flexible packages designed to fit your schedule and budget</p>
            </div>
            
            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-header">
                        <div class="package-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Half Day Adventure</h3>
                        <p class="package-subtitle">Perfect for younger students</p>
                    </div>
                    <div class="package-price">
                        <span class="price">£8.50</span>
                        <span class="per">per student</span>
                    </div>
                    <div class="package-content">
                        <div class="package-duration">
                            <i class="fas fa-hourglass-half"></i>
                            <span>3 Hours of Fun</span>
                        </div>
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> Arrival from 9:30am or 12:30pm</li>
                            <li><i class="fas fa-check"></i> Full venue access</li>
                            <li><i class="fas fa-check"></i> Supervised play sessions</li>
                            <li><i class="fas fa-check"></i> Safety briefing included</li>
                            <li><i class="fas fa-check"></i> Free teachers (1:10 ratio)</li>
                            <li><i class="fas fa-check"></i> Optional meal upgrades</li>
                        </ul>
                        <div class="package-extras">
                            <h4>Add-ons Available:</h4>
                            <p>Lunch boxes +£3.50 | Party room +£25</p>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-package">Book Half Day</a>
                </div>

                <div class="package-card featured">
                    <div class="popular-badge">Most Popular</div>
                    <div class="package-header">
                        <div class="package-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Full Day Experience</h3>
                        <p class="package-subtitle">Maximum fun and learning</p>
                    </div>
                    <div class="package-price">
                        <span class="price">£14.50</span>
                        <span class="per">per student</span>
                    </div>
                    <div class="package-content">
                        <div class="package-duration">
                            <i class="fas fa-hourglass-half"></i>
                            <span>6 Hours of Activities</span>
                        </div>
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> Arrival from 9:30am</li>
                            <li><i class="fas fa-check"></i> Extended venue access</li>
                            <li><i class="fas fa-check"></i> Structured activity sessions</li>
                            <li><i class="fas fa-check"></i> Hot lunch included</li>
                            <li><i class="fas fa-check"></i> Educational materials pack</li>
                            <li><i class="fas fa-check"></i> Free teachers (1:10 ratio)</li>
                            <li><i class="fas fa-check"></i> Private party room</li>
                            <li><i class="fas fa-check"></i> Commemorative certificate</li>
                        </ul>
                        <div class="package-extras">
                            <h4>Everything Included!</h4>
                            <p>Best value for a full day of learning and fun</p>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-package">Book Full Day</a>
                </div>

                <div class="package-card">
                    <div class="package-header">
                        <div class="package-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h3>Custom Package</h3>
                        <p class="package-subtitle">Tailored to your needs</p>
                    </div>
                    <div class="package-price">
                        <span class="price">POA</span>
                        <span class="per">custom quote</span>
                    </div>
                    <div class="package-content">
                        <div class="package-duration">
                            <i class="fas fa-hourglass-half"></i>
                            <span>Flexible Duration</span>
                        </div>
                        <ul class="package-features">
                            <li><i class="fas fa-check"></i> Choose your arrival time</li>
                            <li><i class="fas fa-check"></i> Bespoke activity programs</li>
                            <li><i class="fas fa-check"></i> Curriculum-specific sessions</li>
                            <li><i class="fas fa-check"></i> Custom catering menus</li>
                            <li><i class="fas fa-check"></i> Private venue hire option</li>
                            <li><i class="fas fa-check"></i> Multi-day bookings</li>
                            <li><i class="fas fa-check"></i> Special events & celebrations</li>
                        </ul>
                        <div class="package-extras">
                            <h4>Perfect For:</h4>
                            <p>Large groups, special events, or unique requirements</p>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-package">Request Quote</a>
                </div>
            </div>

            <div class="package-note">
                <i class="fas fa-info-circle"></i>
                <p><strong>Group Discounts:</strong> 10% off for 50+ students | 15% off for 100+ students | Free teacher ratio: 1:10</p>
            </div>
        </div>
    </section>

    <!-- What's Included Section -->
    <section class="whats-included">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Included in Every Visit</span>
                <h2>Everything You Need</h2>
            </div>
            
            <div class="included-grid">
                <div class="included-item">
                    <i class="fas fa-clipboard-check"></i>
                    <h4>Pre-Visit Pack</h4>
                    <p>Risk assessment, educational materials, and planning resources</p>
                </div>
                <div class="included-item">
                    <i class="fas fa-user-tie"></i>
                    <h4>Dedicated Coordinator</h4>
                    <p>Personal contact from booking through to visit day</p>
                </div>
                <div class="included-item">
                    <i class="fas fa-door-open"></i>
                    <h4>Private Facilities</h4>
                    <p>Dedicated areas for your group including changing rooms</p>
                </div>
                <div class="included-item">
                    <i class="fas fa-first-aid"></i>
                    <h4>On-Site First Aid</h4>
                    <p>Qualified first aiders and fully stocked medical facilities</p>
                </div>
                <div class="included-item">
                    <i class="fas fa-camera"></i>
                    <h4>Photo Opportunities</h4>
                    <p>Designated areas for group photos and memories</p>
                </div>
                <div class="included-item">
                    <i class="fas fa-parking"></i>
                    <h4>Free Coach Parking</h4>
                    <p>Convenient drop-off and parking for coaches</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Educational Benefits Section -->
    <section class="educational-benefits">
        <div class="container">
            <div class="benefits-content">
                <div class="benefits-text">
                    <span class="section-badge">Learning Outcomes</span>
                    <h2>Educational Benefits</h2>
                    <p class="lead">Our programs support key curriculum areas while promoting physical and social development</p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fas fa-brain"></i></div>
                            <div>
                                <h4>Physical Development</h4>
                                <p>Gross motor skills, coordination, balance, and spatial awareness through active play</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fas fa-users-cog"></i></div>
                            <div>
                                <h4>Social Skills</h4>
                                <p>Teamwork, communication, sharing, and building friendships in a fun environment</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fas fa-smile"></i></div>
                            <div>
                                <h4>Emotional Wellbeing</h4>
                                <p>Confidence building, resilience, and managing challenges in a supportive setting</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fas fa-lightbulb"></i></div>
                            <div>
                                <h4>Problem Solving</h4>
                                <p>Critical thinking and decision-making through structured play activities</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="benefits-image">
                    <img src="https://www.daynurseries.co.uk/wp-content/uploads/sites/3/2025/02/shutterstock_1524364811.jpg" alt="Students learning through play">
                    <div class="image-badge">
                        <i class="fas fa-award"></i>
                        <span>Ofsted Approved Activities</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery Section -->
    <section class="video-gallery">
        <div class="container">
            <h2>See Our Adventures in Action</h2>
            <p>Watch real footage of our school trips, safety protocols, and student fun to get a feel for the experience.</p>
            <div class="videos-grid">
                <div class="video-item">
                    <div class="video-wrapper">
                        <iframe id="video1" src="https://www.youtube.com/embed/dQw4w9WgXcQ?enablejsapi=1&mute=1&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <h4>Half-Day Adventure Highlights</h4>
                    <p>Students engage in supervised trampoline activities, learning about physics through play.</p>
                </div>
                <div class="video-item">
                    <div class="video-wrapper">
                        <iframe id="video2" src="https://www.youtube.com/embed/dQw4w9WgXcQ?enablejsapi=1&mute=1&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <h4>Safety First: Our Protocols</h4>
                    <p>A behind-the-scenes look at our certified instructors and padded environments.</p>
                </div>
                <div class="video-item">
                    <div class="video-wrapper">
                        <iframe id="video3" src="https://www.youtube.com/embed/dQw4w9WgXcQ?enablejsapi=1&mute=1&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <h4>Full-Day Team Building</h4>
                    <p>Group challenges and educational debriefs that build social skills and confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">What Teachers Say</span>
                <h2>Trusted by Schools Across the Region</h2>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"An outstanding experience from start to finish. The children were engaged, active, and learned so much about teamwork. The staff were professional and accommodating to our needs."</p>
                    <div class="testimonial-author">
                        <strong>Mrs. Sarah Johnson</strong>
                        <span>Year 4 Teacher, Greenfield Primary</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"We've been coming for three years running. The booking process is simple, the facilities are excellent, and the children always leave exhausted and happy. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <strong>Mr. David Chen</strong>
                        <span>PE Coordinator, Oakwood Academy</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Safety is always our top priority, and we felt completely confident with the supervision and facilities. The risk assessment was thorough and the staff were fantastic with the children."</p>
                    <div class="testimonial-author">
                        <strong>Miss Emma Williams</strong>
                        <span>Year 3 Teacher, St. Mary's Primary</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">FAQ</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> What's the minimum/maximum group size?</h4>
                    <p>We welcome groups from 15 to 150+ students. Larger groups can be accommodated with advance notice.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> What's the adult to child ratio?</h4>
                    <p>We provide 1 free adult per 10 students. Additional adults are welcome at a reduced rate of £5 each.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> What if a child has special needs?</h4>
                    <p>We're fully inclusive and can accommodate children with various needs. Please discuss requirements when booking.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> Can we bring our own food?</h4>
                    <p>Yes! You're welcome to bring packed lunches. We provide a dedicated dining area for your group.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> What happens in bad weather?</h4>
                    <p>We're a fully indoor facility, so your visit goes ahead regardless of weather conditions!</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> How far in advance should we book?</h4>
                    <p>We recommend booking at least 4-6 weeks in advance, especially for popular term times.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="cta-background"></div>
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Plan Your School Trip?</h2>
                <p>Join hundreds of schools who trust us for safe, fun, and educational experiences</p>
                <div class="cta-buttons">
                    <a href="/contact" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar-alt"></i> Book Now
                    </a>
                    <a href="tel:01234567890" class="btn btn-secondary btn-lg">
                        <i class="fas fa-phone"></i> Call Us: 01234 567890
                    </a>
                </div>
                <div class="cta-info">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>schools@jusjumpin.com</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-download"></i>
                        <a href="#">Download Booking Form</a>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-file-pdf"></i>
                        <a href="#">View Risk Assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- YouTube API Script for Hover Auto-Play -->
<script src="https://www.youtube.com/iframe_api"></script>
<script>
    // Array of video IDs and their corresponding iframe elements
    const videos = [
        { id: 'video1', player: null },
        { id: 'video2', player: null },
        { id: 'video3', player: null }
    ];

    // Initialize YouTube players
    function onYouTubeIframeAPIReady() {
        videos.forEach(video => {
            video.player = new YT.Player(video.id, {
                events: {
                    'onReady': onPlayerReady
                }
            });
        });
    }

    function onPlayerReady(event) {
        const iframe = event.target.getIframe();
        const wrapper = iframe.parentElement;

        // Add hover event listeners
        wrapper.addEventListener('mouseenter', () => {
            event.target.playVideo();
        });

        wrapper.addEventListener('mouseleave', () => {
            event.target.pauseVideo();
        });
    }
</script>

<?php get_footer(); ?>