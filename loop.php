<?php //query_posts('post_type=post&posts_per_page=10&paged='.get_query_var('paged'));
	$args = array(
		'meta_key'     => 'post_language',
		'meta_value'   => 'English',
		'post_type'    => 'post',
		'posts_per_page' => 10,
		'paged' => get_query_var('paged')
	);
	query_posts($args);
	if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : 
		$post_image_id = get_post_thumbnail_id($post_to_use->ID);
			if ($post_image_id) {
				$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
				if ($thumbnail) (string)$thumbnail = $thumbnail[0];
			} ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="preview-image" style="background-image: url('<?php echo $thumbnail; ?>');">
		<?php else: ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="preview-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/dg_logo_full.png');">
		<?php endif; ?>
		</a>
		<!-- /post thumbnail -->
		<div class="preview-body">
			<!-- post title -->
			<h4 class="post-categories"><?php exclude_post_categories('1'); ?></h4>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<h4 class="preview-headline"><?php the_title(); ?></h4>
				<h6 class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h6>
			</a>
			<?php html5wp_excerpt('html5wp_index'); ?>
			<?php echo get_the_tag_list('<p class="post-tags">Tags: ',', ','</p>'); ?>
		</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
