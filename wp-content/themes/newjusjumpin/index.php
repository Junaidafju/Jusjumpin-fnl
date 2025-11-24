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
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e('Nothing here', 'newjusjumpin'); ?></h1>
                </header>

                <div class="page-content glass-card">
                    <?php if (is_home() && current_user_can('publish_posts')) : ?>
                        <p><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'newjusjumpin'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>
                    <?php elseif (is_search()) : ?>
                        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'newjusjumpin'); ?></p>
                    <?php else : ?>
                        <p><?php esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'newjusjumpin'); ?></p>
                    <?php endif; ?>
                    
                    <?php get_search_form(); ?>
                </div>
            </section>
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
