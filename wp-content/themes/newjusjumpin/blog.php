<?php
/**
 * Template Name: Blog
 * Description: Main blog index with featured posts, category filters, grid, and pagination.
 * @package NewJusJumpin
 */

if (!defined('ABSPATH')) { exit; }

get_header();

// Determine current page for pagination
$paged = get_query_var('paged') ? (int) get_query_var('paged') : 1;

// Featured posts (max 3)
$featured_q = new WP_Query(array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'meta_key'       => 'featured_post',
	'meta_value'     => '1',
	'ignore_sticky_posts' => true,
));

// Main posts query (excluding featured on first page)
$exclude_ids = array();
if ($featured_q->have_posts() && $paged === 1) {
	$exclude_ids = wp_list_pluck($featured_q->posts, 'ID');
}

$main_q = new WP_Query(array(
	'post_type'      => 'post',
	'posts_per_page' => 9,
	'paged'          => $paged,
	'post__not_in'   => $exclude_ids,
	'ignore_sticky_posts' => true,
));

// Categories for filter
$categories = get_categories(array('hide_empty' => true));
?>

<!-- Blog Hero -->
<section class="hero" aria-labelledby="blog-hero-title">
	<div class="container">
		<div class="hero-content">
			<h1 id="blog-hero-title">Jus Jumpin - Blog</h1>
			<div class="subtitle">Ultimate Kids & Adults Play Zone</div>
			<p>Welcome to the official blog of Jus Jumpin, India's premier entertainment destination. Discover exciting activities, event updates, parenting tips, and behind-the-scenes stories from the most thrilling play zone in the city.</p>
			<a href="<?php echo esc_url(home_url('/our-activities/')); ?>" class="cta-button">Explore Our Activities</a>
		</div>
	</div>
</section>

<!-- Main Content -->
<div class="jj-blog-background-wrapper">
<div class="container">
	<div class="main-content">
		<!-- Content Area -->
		<div class="content-area">
			<div class="section-header">
				<h2>Featured Stories</h2>
				<p>Discover our most popular articles about family entertainment, birthday party ideas, and fun activities for all ages.</p>
			</div>

			<?php if ($featured_q->have_posts() && $paged === 1) : ?>
			<div class="featured-stories">
				<?php while ($featured_q->have_posts()) : $featured_q->the_post(); ?>
					<?php $cat = get_the_category(); $category_name = !empty($cat) ? $cat[0]->name : 'General'; ?>
					<article class="story-card" itemscope itemtype="https://schema.org/BlogPosting">
						<?php if (has_post_thumbnail()) : ?>
							<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>" class="story-image" itemprop="image">
						<?php endif; ?>
						<div class="story-content">
							<span class="story-category"><?php echo esc_html($category_name); ?></span>
							<h3 class="story-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="story-excerpt" itemprop="description"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
							<div class="story-meta">
								<time datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished"><?php echo esc_html(get_the_date('F j, Y')); ?></time>
								<span><?php echo esc_html(ceil(str_word_count(get_the_content()) / 200)); ?> min read</span>
							</div>
						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>

			<section class="blog-filters" aria-label="Category filters">
				<button class="blog-filter is-active" data-filter="*">All</button>
				<?php foreach ($categories as $c) : ?>
					<button class="blog-filter" data-filter="<?php echo esc_attr($c->slug); ?>"><?php echo esc_html($c->name); ?></button>
				<?php endforeach; ?>
			</section>

			<section class="blog-grid" aria-live="polite">
				<div class="blog-grid__inner">
				<?php if ($main_q->have_posts()) : while ($main_q->have_posts()) : $main_q->the_post(); ?>
					<?php $cats = get_the_category(); $firstCat = !empty($cats) ? $cats[0] : null; $slug = $firstCat ? $firstCat->slug : 'uncategorized'; ?>
					<article class="story-card" data-cat="<?php echo esc_attr($slug); ?>" itemscope itemtype="https://schema.org/BlogPosting">
						<?php if (has_post_thumbnail()) : ?>
							<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>" alt="<?php the_title_attribute(); ?>" class="story-image" itemprop="image">
						<?php endif; ?>
						<div class="story-content">
							<?php if ($firstCat) : ?><span class="story-category"><?php echo esc_html($firstCat->name); ?></span><?php endif; ?>
							<h3 class="story-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="story-excerpt" itemprop="description"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?></p>
							<div class="story-meta">
								<time datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished"><?php echo esc_html(get_the_date('F j, Y')); ?></time>
								<span><?php echo esc_html(ceil(str_word_count(get_the_content()) / 200)); ?> min read</span>
							</div>
						</div>
					</article>
				<?php endwhile; else: ?>
					<p>No posts found.</p>
				<?php endif; wp_reset_postdata(); ?>
				</div>
			</section>

			<nav class="blog-pagination">
				<?php echo paginate_links(array('total' => max(1, $main_q->max_num_pages))); ?>
			</nav>
		</div>

		<!-- Sidebar -->
		<aside class="sidebar">
			<?php get_sidebar('blog'); ?>
		</aside>
	</div>
</div>
</div> <!-- .jj-blog-background-wrapper -->

<?php get_footer(); ?>


