<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="blog-posts">
			<div class="content-wrapper">
				<div class="latest-posts">
					<h2 class="section-headline"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
					<div class="posts-wrapper">
						<?php get_template_part('search_loop'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
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
