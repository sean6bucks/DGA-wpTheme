<section id="company-information" class="index-section" style="background-image: url('<?php echo CFS()->get( 'headline_background' ); ?>')">
	<div class="content-wrapper">
		<div class="company-tagline">
			<h2 class="section-headline"><?php echo CFS()->get( 'index_headline' ); ?></h2>
			<p class="section-textblock"><?php echo CFS()->get( 'index_subtext' ); ?></p>
		</div>
		<div class="home-contact-form">
			<h4>Contact Us</h4>
			<?php echo do_shortcode('[contact-form-7 title="contact_form"]'); ?>
			<div id="form-messages"></div>
		</div>
	</div>
</section>

<section id="company-services" class="index-section">
	<div class="content-wrapper">
		<h3 class="section-headline">SERVICES</h3>
		<div class="services-row clear">
		<?php $services = CFS()->get( 'index_services' );
			foreach ( $services as $key=>$service ) { 

			if ( $key<3 ) : ?>
			<div class="service-item col-sm-4">
				<img src="<?php echo $service['service_image'] ?>" >
				<h2 class="service-headline text-center"><?php echo $service['service_headline'] ?></h2>
				<p class="section-textblock"><?php echo $service['service_text'] ?></p>
			</div>
		<?php endif;
		} ?>
		</div>
		<div class="services-row clear">
		<?php $services = CFS()->get( 'index_services' );
			foreach ( $services as $key=>$service ) { 

			if ( $key>=3 ) : ?>
			<div class="service-item col-sm-4">
				<img src="<?php echo $service['service_image'] ?>" >
				<h2 class="service-headline text-center"><?php echo $service['service_headline'] ?></h2>
				<p class="section-textblock"><?php echo $service['service_text'] ?></p>
			</div>
		<?php endif;
		} ?>
		</div>
	</div>
</section>
<hr>

	<!-- CASE STUDIES -->
<?php 
	$studiesPage = get_page_by_title( 'case-studies' );
	$studies = CFS()->get( 'case_studies', $studiesPage->ID );
	if (count($studies)) : 
?>

<section id="case-study-previews" class="index-section">
	<div class="content-wrapper">
		<h3 class="section-headline">CASE STUDIES</h3>
		<div class="studies-preview-list clear">
			<?php 
			foreach ( $studies as $key=>$study ) { 
			if ($study['featured_study']): ?>

			<a href="/case-studies#<?php echo $study['case_slug'] ?>" class="case-study-preview">
				<div class="case-preview-img" style="background-image: url('<?php echo $study['case_preview_image'] ?>')"></div>
				<h4 class="case-preview-name"><?php echo $study['case_company_name'] ?></h4>
				<p class="case-preview-snippet"><?php echo $study['case_preview_text'] ?></p>
				<div class="col-xs-12 text-center">
					<button class="btn btn-default btn-dg">View Case Study</button>
				</div>
			</a>
			<?php endif; } ?>
		</div>
	</div>
</section>
<hr>
<?php endif; ?>
	<!-- TOP POSTS -->
<section id="social-preview" class="index-section">
	<div class="content-wrapper">
	<!-- <?php // GRAB THE 6 LATEST POSTS 
			query_posts( 'posts_per_page=6' ); ?> -->
		<div id="blog-preview" class="clear">
			<h3 class="section-headline">TOP BLOG POSTS</h3>
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
							<div class="article-preview-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/logo_preview_default@2x.png');">
							</div>
						<?php endif; ?>
					</a>
					<!-- /post thumbnail -->
					<div class="article-preview-body">
						<!-- post title -->
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<h1 class="article-preview-headline"><?php the_title(); ?></h1>
							<h6 class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></h6></a>
							<?php html5wp_excerpt('html5wp_index'); ?>
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
<section id="newsletter-form" class="index-section">
	<div class="content-wrapper" id="mc_embed_signup">
		<h3 class="section-headline">Get Our Newsletter!</h3>
		<h4 class="section-subtext">Stay up to date with the latest news from Dragon Group Asia.</h4>
		<!-- Begin MailChimp Signup Form -->
		<form action="//dragoneventschina.us2.list-manage.com/subscribe/post-json?u=7acb0e539eedef8267af1f8cb&amp;id=34772ee081" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate>
			<div class="form-group">
				<input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Enter your email..." required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7acb0e539eedef8267af1f8cb_34772ee081" tabindex="-1" value=""></div>
			    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">Submit</button>
			</div>
		</form>
	</div>
	<div class="content-wrapper" id="signup_success">
		<h3 class="section-headline">Successfully Subscribed!</h3>
		<h4 class="section-subtext">Please check your email for a confirmation message.</h4>
	</div>
</section>