<section id="company-information" class="index-section" style="background-image: url('<?php echo CFS()->get( 'headline_background' ); ?>')">
	<div class="content-wrapper">
		<div class="company-tagline">
			<h2 class="section-headline"><?php echo CFS()->get( 'index_headline' ); ?></h2>
			<p class="section-textblock"><?php echo CFS()->get( 'index_subtext' ); ?></p>
		</div>
		<div class="home-contact-form">
			<h4>Contact Us</h4>
			<form id="index-contact" method="post" action="<?php echo get_template_directory_uri() . '/mailer.php'; ?>" class="clear">
				<fieldset class="form-group">
			    	<label for="indexContactName">Name<span class="text-danger">*</span></label>
			    	<input type="text" name="contact_name" class="form-control" id="indexContactName" placeholder="Jane Smith" required>
			  	</fieldset>
			  	<fieldset class="form-group">
			    	<label for="indexContactEmail">Email<span class="text-danger">*</span></label>
			    	<input type="email" name="contact_email" class="form-control" id="indexContactEmail" placeholder="Jane@Dragongroup.asia" required>
			  	</fieldset>
			  	<fieldset class="form-group">
			    	<label for="indexContactCompany">Company</label>
			    	<input type="text" name="company_name" class="form-control" id="indexContactCompany" placeholder="Dragon Group Asia">
			  	</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="indexContactPosition">Position</label>
			    	<input type="text" name="position" class="form-control" id="indexContactPosition" placeholder="Head of Marketing">
			  	</fieldset>
				<fieldset class="form-group half-width">
				    <label for="indexContactIndustry">Industry</label>
				    <select class="form-control" name="industry" id="indexContactIndustry">
				     	<option>Marketing</option>
						<option>Sports</option>
						<option>Entertainment</option>
						<option>Events</option>
						<option>Social Engagement</option>
				    </select>
				  </fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="indexContactPhone">Phone</label>
			    	<input type="text" name="contact_phone" class="form-control" id="indexContactPhone" placeholder="+1 123-444-5678">
			  	</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="indexContactWeChat">WeChat ID</label>
			    	<input type="text" name="contact_wechat" class="form-control" id="indexContactWeChat" placeholder="Head of Marketing">
			  	</fieldset>
			  	<fieldset class="form-group clear">
					<textarea required placeholder="How can we help you?" name="inquiry_message" class="form-control" id="indexContactMessage" rows="3"></textarea>
				</fieldset>
				<input hidden name="address" type="text">
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">Send</button>
				</div>
				<h6 class="text-danger pull-right">*Required</h6>
			</form>
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