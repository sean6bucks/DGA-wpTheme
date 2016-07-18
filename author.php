<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="blog-posts">
			<div class="content-wrapper">
				<div class="latest-posts">
				<?php if (have_posts()): the_post(); ?>
					<h2 class="section-headline"><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h2>
					<div class="posts-wrapper">
					<?php rewind_posts(); while (have_posts()) : the_post(); ?>
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
								<h4 class="post-categories"><?php exclude_post_categories( '1'); ?></h4>
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

					</div>
				<?php else: ?>

				<!-- article -->
				<article>
					<h2 class="section-headline"><?php _e( 'Sorry, No Posts Found', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

				<?php endif; ?>

					<?php get_template_part('pagination'); ?>

				</div>
				<div class="blog-sidebar">
					<div class="category-block">
						<h3 class="section-headline">Categories</h3>
						<ul class="sidebar-list"><?php wp_list_categories (array(
							'title_li' => '',
					        'exclude' => array( 1, 5 )
					    )) ?>
						</ul>
					</div>
					<hr>
					<div class="tags-block">
						<h3 class="section-headline">Popular Tags</h3>
						<ul class="sidebar-list">
							<?php
								$tags = get_tags( array('orderby' => 'count', 'order' => 'DESC', 'number' => 5) );
								foreach ( (array) $tags as $tag ) {
								echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li>';
								} 
							?>
						</ul>
					</div>
					<hr>
					<div id="ig-feed" class="clear">
						<h3 class="section-headline">Latest Instagram</h3>
						<?php echo wdi_feed(array('id'=>'1')); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
