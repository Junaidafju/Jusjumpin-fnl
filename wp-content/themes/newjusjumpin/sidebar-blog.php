<?php
if (!defined('ABSPATH')) { exit; }
?>

<!-- Recent Posts Widget -->
<div class="sidebar-widget">
	<h3 class="widget-title">Recent Posts</h3>
	<?php
	$recent = new WP_Query(array('posts_per_page' => 3));
	while ($recent->have_posts()) : $recent->the_post(); ?>
		<div class="recent-post">
			<?php if (has_post_thumbnail()) : ?>
				<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" alt="<?php the_title_attribute(); ?>" class="recent-post-image">
			<?php endif; ?>
			<div class="recent-post-content">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span class="post-date"><?php echo esc_html(get_the_date('F j, Y')); ?></span>
			</div>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
</div>

<!-- Categories Widget -->
<div class="sidebar-widget">
	<h3 class="widget-title">Categories</h3>
	<ul class="categories-list">
		<?php
		$categories = get_categories(array('hide_empty' => true));
		foreach ($categories as $category) : ?>
			<li>
				<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
					<?php echo esc_html($category->name); ?>
					<span class="category-count"><?php echo esc_html($category->count); ?></span>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

<!-- Popular Tags Widget -->
<div class="sidebar-widget">
	<h3 class="widget-title">Popular Tags</h3>
	<div class="tags-container">
		<?php
		$tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'number' => 8));
		foreach ($tags as $tag) : ?>
			<a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tag"><?php echo esc_html($tag->name); ?></a>
		<?php endforeach; ?>
	</div>
</div>


