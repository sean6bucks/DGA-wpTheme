<?php
	$blogPage = get_page_by_title( 'blog' ); 
	$currentPage = get_query_var( 'paged' );
	if ($currentPage < 2) :?>
<section id="jumbotron-wrapper">
	<div class="content-wrapper clear">
	<?php $args = array(
		'meta_key'     => 'post_language',
		'meta_value'   => 'English',
		'category_name'    => 'Featured',
	);
	query_posts($args); while (have_posts()) : the_post(); ?>

	<?php if ( has_post_thumbnail()) : 
	    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
	        if ($post_image_id) {
	            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
	            if ($thumbnail) (string)$thumbnail = $thumbnail[0];
	        } ?>
	    <div class="featured-post slide" style="background-image: url('<?php echo $thumbnail; ?>');">
	        <div class="featured-body">
	            <a href="<?php echo the_permalink(); ?>">
	                <h1 class="featured-headline"><?php the_title(); ?></h1>
	                <button class="btn btn-dg"><?php echo CFS()->get( 'read_more', $blogPage->ID ); ?></button>
	            </a>
	        </div>
	    </div>
	<?php endif; ?>

	<?php endwhile; ?>

	<?php wp_reset_query(); ?>

	</div>
	<div id="searchbox">
		<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
			<i class="fa fa-search"></i>
			<input class="search-input" type="search" name="s" placeholder="<?php _e( 'SEARCH'); ?>">
		</form>
	</div>
	<div class="slider-nav">
	    <a class="arrow-prev"><img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-prev.png"></a>
	    <ul class="slider-dots">
	        <?php $args = array(
				'meta_key'     => 'post_language',
				'meta_value'   => 'English',
				'category_name'    => 'Featured',
			);
			query_posts($args); while (have_posts()) : the_post(); ?>

			<li class="dot">&bull;</li>

			<?php endwhile; ?>

			<?php wp_reset_query(); ?>
	    </ul>
	    <a  class="arrow-next"><img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow-next.png"></a>
	</div>
</section>
<?php endif; ?>

<section id="blog-posts">
	<div class="content-wrapper">
		<div class="latest-posts">
			<h2 class="section-headline"><?php echo CFS()->get( 'latest_posts_headline', $blogPage->ID ) ?></h2>
			<div class="posts-wrapper">
			    <?php get_template_part('loop'); ?>

			    <?php get_template_part('pagination'); ?>
			</div>
		</div>
		<div class="blog-sidebar">
			<div class="category-block">
				<h3 class="section-headline"><?php echo CFS()->get( 'categories_headline', $blogPage->ID ) ?></h3>
				<ul class="sidebar-list"><?php wp_list_categories (array(
					'title_li' => '',
			        'exclude' => array( 1 )
			    )) ?>
				</ul>
			</div>
			<hr>
			<div class="tags-block">
				<h3 class="section-headline"><?php echo CFS()->get( 'popular_tags_headline', $blogPage->ID ) ?></h3>
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
				<h3 class="section-headline"><?php echo CFS()->get( 'instagram_headline' ) ?></h3>
				<?php echo wdi_feed(array('id'=>'2')); ?>
			</div>
		</div>
	</div>
</section>