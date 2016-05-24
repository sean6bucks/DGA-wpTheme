<section id="company-information" class="index-section">
	<div class="company-tagline">
	<?php $company_tagline = get_post_meta( get_the_ID(), 'company_tagline', true ); ?>
	<h2 class="section-headline"><?php if ( ! empty( $company_tagline ) ) { echo $company_tagline ; }?> </h2>
	</div>
	<div class="home-contact-form">
		<form>

		</form>
	</div>
</section>
<hr>

<section id="company-services" class="index-section">
	<div class="content-wrapper">
	</div>
</section>
<hr>

	<!-- CASE STUDIES -->
<section id="case-study-previews" class="index-section">
	<div class="content-wrapper">
		<h3 class="section-headline">CASE STUDIES</h3>
		<ul class="clear">
			<li>
				<a href="/clients" class="case-study-preview">
					<div class="case-preview-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/nfl-preview.jpg'"></div>
					<h4 class="case-preview-name">NFL</h4>
					<p class="case-preview-snippet">Branding, Promotions, and Local Event Management</p>
				</a>
			</li>
			<li>
				<a href="/clients" class="case-study-preview">
					<div class="case-preview-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/pac12-preview.jpg'"></div>
					<h4 class="case-preview-name">NCAA PAC - 12</h4>
					<p class="case-preview-snippet">Promotions, Localization, Tournement Management</p>
				</a>
			</li>
			<li>
				<a href="/clients" class="case-study-preview">
					<div class="case-preview-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/unilever-preview.jpg'"></div>
					<h4 class="case-preview-name">Unilever</h4>
					<p class="case-preview-snippet">Introduction to foreign markets. Promotions, and event management</p>
				</a>
			</li>
		</ul>
	</div>
</section>
<hr>
	<!-- TOP POSTS -->
<section id="social-preview" class="index-section">
	<div class="content-wrapper">
	<!-- <?php // GRAB THE 6 LATEST POSTS 
			query_posts( 'posts_per_page=6' ); ?> -->
		<div id="blog-preview" class="clear">
		<h3 class="section-headline">Top Dragon Adventure Blog Posts</h3>
		<?php // GRAB THE 6 MOST VIEWED POSTS
			$popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'dga_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
			while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

			<article class="post-preview" id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : 
					$post_image_id = get_post_thumbnail_id($post_to_use->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
						} ?>
						<div class="article-preview-image" style="background-image: url('<?php echo $thumbnail; ?>');">
						</div>
					<?php else: ?>
						<div class="article-preview-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gravatar.jpg');">
						</div>
					<?php endif; ?>
				</a>
				<!-- /post thumbnail -->
				<div class="article-preview-body">
					<!-- post title -->
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<h1 class="article-preview-headline"><?php the_title(); ?></h1>
						<h5 class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h5>
						<?php html5wp_excerpt('html5wp_index'); ?>
					</a>
				</div>
			</article>
		<?php endwhile; ?>
		</div>

		<div id="ig-preview" class="clear">
			<h3 class="section-headline">Latest Instagram</h3>
			<?php echo wdi_feed(array('id'=>'1')); ?>
		</div>
	</div>
</section>
<hr>

<section id="newsletter-input" class="index-section">
	<div class="content-wrapper">
		<h3 class="section-headline">Get Our Newsletter!</h3>
		<h4 class="section-subtext">Stay up to date with the latest news from Dragon Group Asia.</h4>
		<form class="form-inline">
			<div class="form-group">
				<input type="email" class="form-control" id="newsletter-email" placeholder="Enter your email...">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</form>
	</div>
</section>