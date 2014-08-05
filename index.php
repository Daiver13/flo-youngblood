<?php 
// This is index file
get_header(); ?>
<?php flo_part('featured-posts') ?>
<?php flo_part('category-archive') ?>
<?php flo_part('blog-header') ?>
<div class="blog-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $current_post_id = get_the_ID(); ?>
		<?php flo_part('posthead');?>
		<?php flo_part('postpreview' );?>
		<?php flo_part('postfull');?>
		<?php flo_part('postfooter');?>
	<?php endwhile; else: ?>
		<?php flo_part('notfound')?>
	<?php endif; ?>
</div>
<?php flo_page_links();?>
<?php get_footer(); ?>