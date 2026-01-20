<?php
/**
 * The main template file
 *
 * @package NewJusJumpin
 * @version 1.0.0
 */

get_header(); ?>

<div class="container section-padding">
    <div class="content-area">
        <?php if (have_posts()) : ?>
            
            <?php if (is_home() && !is_front_page()) : ?>
                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <div class="posts-container">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card'); ?>>
                        <header class="entry-header">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                            
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <i class="fas fa-calendar" aria-hidden="true"></i>
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </time>
                                </span>
                                
                                <span class="byline">
                                    <i class="fas fa-user" aria-hidden="true"></i>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                        <?php echo esc_html(get_the_author()); ?>
                                    </a>
                                </span>
                                
                                <?php if (has_category()) : ?>
                                <span class="cat-links">
                                    <i class="fas fa-folder" aria-hidden="true"></i>
                                    <?php the_category(', '); ?>
                                </span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <?php the_post_thumbnail('large', array('alt' => esc_attr(get_the_title()))); ?>
                            </a>
                        </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php
                            if (is_single()) {
                                the_content();
                            } else {
                                the_excerpt();
                            }
                            ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary read-more">
                                <?php esc_html_e('Read More', 'newjusjumpin'); ?>
                                <i class="fas fa-arrow-right" aria-hidden="true"></i>
                            </a>
                            
                            <?php if (has_tag()) : ?>
                            <div class="tag-links">
                                <i class="fas fa-tags" aria-hidden="true"></i>
                                <?php the_tags('', ', '); ?>
                            </div>
                            <?php endif; ?>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php
            // Pagination
            the_posts_pagination(array(
                'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __('Previous', 'newjusjumpin'),
                'next_text' => __('Next', 'newjusjumpin') . ' <i class="fas fa-chevron-right"></i>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'newjusjumpin') . ' </span>',
            ));
            ?>

        <?php else : ?>
            <section class="no-results not-found" style="background-image: url('https://media.giphy.com/media/3o7TKz9bX9Z8LxOq5y/giphy.gif'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; position: relative; display: flex; align-items: center; justify-content: center; padding: 20px; animation: fadeIn 1s ease-in;">
    <!-- Overlay for readability -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 1;"></div>
    
    <div style="position: relative; z-index: 2; width: 100%; max-width: 1200px; text-align: center;">
        <header class="page-header" style="margin-bottom: 40px;">
            <h1 class="page-title" style="color: #f67edd; font-size: 3rem; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; animation: bounceIn 1.5s ease-out; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);"><?php esc_html_e('Nothing here', 'newjusjumpin'); ?></h1>
        </header>

        <!-- Lottie Animation in Center - Bigger and More Responsive -->
        <div style="margin: 40px 0; display: flex; justify-content: center;">
            <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js" type="module"></script>
            <dotlottie-wc
                src="https://lottie.host/22c23daf-8fca-465c-bbdd-aef4f5401b19/pYE2tT63u4.lottie"
                style="width: 500px; height: 500px; max-width: 90vw; max-height: 90vw;"
                autoplay
                loop
            ></dotlottie-wc>
        </div>

        <div class="page-content glass-card" style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(15px); border-radius: 20px; padding: 40px; box-shadow: 0 12px 40px rgba(0,0,0,0.15); border: 1px solid rgba(255, 255, 255, 0.3); max-width: 800px; margin: 0 auto; animation: slideUp 1s ease-out 0.5s both;">
            <?php if (is_home() && current_user_can('publish_posts')) : ?>
                <p style="font-size: 1.2rem; color: #666; margin-bottom: 30px;"><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'newjusjumpin'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>
            <?php elseif (is_search()) : ?>
                <p style="font-size: 1.2rem; color: #666; margin-bottom: 30px;"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'newjusjumpin'); ?></p>
            <?php else : ?>
                <p style="font-size: 1.2rem; color: #666; margin-bottom: 30px;"><?php esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'newjusjumpin'); ?></p>
            <?php endif; ?>
            
            <div style="margin-bottom: 40px;">
                <label for="search-form" style="display: block; margin-bottom: 15px; font-weight: bold; color: #1C352D;">Search for Stores or Fun Activities:</label>
                <?php get_search_form(); ?>
            </div>
            
            <div class="cta-buttons" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-btn" style="background: linear-gradient(135deg, #f67edd, #ff5da0); color: white; padding: 15px 25px; border-radius: 30px; text-decoration: none; font-weight: 700; font-size: 1rem; display: flex; align-items: center; justify-content: center; gap: 8px; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(246, 126, 221, 0.3);">
                    <span>🏠</span> Go to Home Page
                </a>
                <a href="<?php echo esc_url(home_url('/activities')); ?>" class="cta-btn" style="background: linear-gradient(135deg, #6dc065, #b2d235); color: white; padding: 15px 25px; border-radius: 30px; text-decoration: none; font-weight: 700; font-size: 1rem; display: flex; align-items: center; justify-content: center; gap: 8px; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(109, 192, 101, 0.3);">
                    <span>🎉</span> View Activities
                </a>
                <a href="https://api.whatsapp.com/send?phone=919830359999&text=Hey!%20I%20want%20to%20book%20a%20birthday%20party%20at%20Jus%20Jumpin." class="cta-btn" style="background: linear-gradient(135deg, #ff661a, #ffc60b); color: white; padding: 15px 25px; border-radius: 30px; text-decoration: none; font-weight: 700; font-size: 1rem; display: flex; align-items: center; justify-content: center; gap: 8px; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(255, 102, 26, 0.3);" target="_blank" rel="noopener noreferrer">
                    <span>🎂</span> Book Birthdays
                </a>
                <a href="https://api.whatsapp.com/send?phone=919830359999&text=Hey!%20I%20want%20to%20book%20tickets%20for%20Jus%20Jumpin." class="cta-btn" style="background: linear-gradient(135deg, #00b9e3, #8869d2); color: white; padding: 15px 25px; border-radius: 30px; text-decoration: none; font-weight: 700; font-size: 1rem; display: flex; align-items: center; justify-content: center; gap: 8px; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(0, 185, 227, 0.3);" target="_blank" rel="noopener noreferrer">
                    <span>🎫</span> Book Tickets
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-btn" style="background: linear-gradient(135deg, #ff3645, #f67edd); color: white; padding: 15px 25px; border-radius: 30px; text-decoration: none; font-weight: 700; font-size: 1rem; display: flex; align-items: center; justify-content: center; gap: 8px; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(255, 54, 69, 0.3);">
                    <span>📞</span> Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes bounceIn {
    0% { transform: scale(0.3); opacity: 0; }
    50% { transform: scale(1.05); }
    70% { transform: scale(0.9); }
    100% { transform: scale(1); opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2) !important;
}

@media (max-width: 768px) {
    .cta-buttons {
        grid-template-columns: 1fr;
    }
    .page-title {
        font-size: 2rem;
    }
    dotlottie-wc {
        width: 350px !important; /* Bigger on mobile for better visibility */
        height: 350px !important;
    }
}
</style>
        <?php endif; ?>
    </div>
</div>

<style>
    .posts-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        margin-bottom: 60px;
    }
    
    .entry-header {
        margin-bottom: 20px;
    }
    
    .entry-title {
        margin-bottom: 15px;
    }
    
    .entry-title a {
        color: #2e5d2e;
        transition: color 0.3s ease;
    }
    
    .entry-title a:hover {
        color: #98fb98;
    }
    
    .entry-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 20px;
    }
    
    .entry-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .entry-meta i {
        color: #98fb98;
        font-size: 0.8rem;
    }
    
    .entry-meta a {
        color: #666;
        transition: color 0.3s ease;
    }
    
    .entry-meta a:hover {
        color: #98fb98;
    }
    
    .post-thumbnail {
        margin-bottom: 20px;
        border-radius: 15px;
        overflow: hidden;
    }
    
    .post-thumbnail img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }
    
    .post-thumbnail:hover img {
        transform: scale(1.05);
    }
    
    .entry-content {
        margin-bottom: 30px;
        line-height: 1.7;
    }
    
    .entry-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(152, 251, 152, 0.2);
    }
    
    .read-more {
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }
    
    .tag-links {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .tag-links i {
        color: #98fb98;
    }
    
    .tag-links a {
        background: rgba(152, 251, 152, 0.1);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        color: #2e5d2e;
        transition: all 0.3s ease;
    }
    
    .tag-links a:hover {
        background: rgba(152, 251, 152, 0.2);
        transform: translateY(-2px);
    }
    
    .pagination {
        margin-top: 60px;
        text-align: center;
    }
    
    .pagination .nav-links {
        display: inline-flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .pagination a,
    .pagination .current {
        display: inline-flex;
        align-items: center;
        padding: 12px 20px;
        background: rgba(152, 251, 152, 0.1);
        border-radius: 8px;
        color: #2e5d2e;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .pagination a:hover,
    .pagination .current {
        background: #98fb98;
        color: #ffffff;
        transform: translateY(-2px);
    }
    
    .no-results {
        text-align: center;
        padding: 60px 0;
    }
    
    .page-header {
        margin-bottom: 40px;
        text-align: center;
    }
    
    @media (max-width: 768px) {
        .entry-footer {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .entry-meta {
            flex-direction: column;
            gap: 10px;
        }
        
        .pagination .nav-links {
            justify-content: center;
        }
    }
</style>

<?php get_footer(); ?>
