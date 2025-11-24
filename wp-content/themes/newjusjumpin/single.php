<?php
/**
 * Single Post Template
 * Shows full content, meta, sharing, and related posts.
 * @package NewJusJumpin
 */

if (!defined('ABSPATH')) { exit; }

get_header();
?>

<div class="jj-blog-background-wrapper">
<main id="primary" class="container" itemscope itemtype="https://schema.org/BlogPosting">
	<div class="main-content">
		<div class="content-area">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="single-post">
				<header class="single-header">
					<h1 class="stats-heading" itemprop="headline"><?php the_title(); ?></h1>
					<div class="blog-card__meta">
						<time datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished"><?php echo esc_html(get_the_date()); ?></time>
						<span>•</span>
						<span itemprop="author"><?php the_author(); ?></span>
					</div>
					<?php if (has_post_thumbnail()) : ?>
						<div class="single-thumb"><?php the_post_thumbnail('large', array('loading' => 'lazy', 'itemprop' => 'image')); ?></div>
					<?php endif; ?>
				</header>

				<div class="single-content" itemprop="articleBody">
					<?php the_content(); ?>
				</div>

				<div class="single-share">
					<span>Share:</span>
					<?php $url = urlencode(get_permalink()); $title = urlencode(get_the_title()); ?>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank" rel="noopener" aria-label="Share on X"><i class="fab fa-twitter"></i></a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $title; ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
				</div>

				<section class="related-posts">
					<h2 class="stats-heading">Related Posts</h2>
					<div class="blog-grid__inner">
					<?php
					$cats = wp_get_post_categories(get_the_ID());
					$rel = new WP_Query(array(
						'category__in' => $cats,
						'post__not_in' => array(get_the_ID()),
						'posts_per_page' => 3,
					));
					if ($rel->have_posts()) : while ($rel->have_posts()) : $rel->the_post();
					?>
						<article class="blog-card" itemscope itemtype="https://schema.org/BlogPosting">
							<a class="blog-card__thumb" href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) { the_post_thumbnail('medium_large', array('loading' => 'lazy')); } ?>
							</a>
							<div class="blog-card__body">
								<h3 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
							</div>
						</article>
					<?php endwhile; wp_reset_postdata(); endif; ?>
					</div>
				</section>
			</article>
		<?php endwhile; endif; ?>
		</div>

		<aside class="sidebar">
			<?php get_sidebar('blog'); ?>
		</aside>
	</div>
</main>
</div> <!-- .jj-blog-background-wrapper -->

<?php get_footer(); ?>


