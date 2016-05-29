<section id="company-information" class="index-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/socialmedia-jumbo_bw.jpg'">
	<div class="content-wrapper">
		<div class="company-tagline">
			<h2 class="section-headline"><?php echo get_post_meta( get_the_ID(), 'company_tagline', true ) ?> </h2>
			<p class="section-textblock">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel vestibulum sapien. Cras pharetra vel diam a gravida. Ut condimentum tempor eros in mollis. Aenean euismod ipsum eu lacus volutpat efficitur. Donec imperdiet metus dui. Aenean in libero arcu. Phasellus.</p>
		</div>
		<div class="home-contact-form">
			<h4>Contact Us</h4>
			<form class="clear">
				<fieldset class="form-group">
			    	<label for="indexContactName">Name<span class="text-danger">*</span></label>
			    	<input type="text" class="form-control" id="indexContactName" placeholder="Jane Smith" required>
			  	</fieldset>
			  	<fieldset class="form-group">
			    	<label for="indexContactCompany">Company</label>
			    	<input type="text" class="form-control" id="indexContactCompany" placeholder="Dragon Group Asia">
			  	</fieldset>
				<fieldset class="form-group">
			    	<label for="indexContactEmail">Email<span class="text-danger">*</span></label>
			    	<input type="email" class="form-control" id="indexContactEmail" placeholder="Jane@Dragongroup.asia" required>
			  	</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="indexContactPosition">Position</label>
			    	<input type="text" class="form-control" id="indexContactPosition" placeholder="Head of Marketing">
			  	</fieldset>
				<fieldset class="form-group half-width">
				    <label for="indexContactIndustry">Industry</label>
				    <select class="form-control" id="indexContactIndustry">
				     	<option>Marketing</option>
						<option>Sports</option>
						<option>Entertainment</option>
						<option>Events</option>
						<option>Social Engagement</option>
				    </select>
				  </fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="indexContactPhone">Phone</label>
			    	<input type="text" class="form-control" id="indexContactPhone" placeholder="+1 123-444-5678">
			  	</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="indexContactWeChat">WeChat ID</label>
			    	<input type="text" class="form-control" id="indexContactWeChat" placeholder="Head of Marketing">
			  	</fieldset>
			  	<fieldset class="form-group clear">
					<textarea placeholder="How can we help you?" class="form-control" id="indexContactMessage" rows="3"></textarea>
				</fieldset>
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-primary">Send</button>
				</div>
				<h6 class="text-danger pull-right">*Required</h6>
			</form>
		</div>
	</div>
</section>

<section id="company-services" class="index-section">
	<div class="content-wrapper">
		<h3 class="section-headline">SERVICES</h3>
		<div class="services-row clear">
			<div class="service-item col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Red_Carpet-100.png" >
				<h2 class="service-headline text-center">Event Management</h2>
				<p class="section-textblock">Expect international standards mixed with local best practices. Our logistics, audio visual, transportation and production capabilities make events seamless and stress‐free.</p>
			</div>
			<div class="service-item col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Microphone-100.png" >
				<h2 class="service-headline text-center">Public Relations</h2>
				<p class="section-textblock">Turn key opinion leaders and media moguls into brand ambassadors. We connect the dots to maximize exposure to your target audience.</p>
			</div>
			<div class="service-item col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Statistics-100.png" >
				<h2 class="service-headline text-center">Brand Strategy</h2>
				<p class="section-textblock">Entering the Chinese market is no small feat. We’ll recommend the right platforms and channels to elevate your brand profile</p>
			</div>
		</div>
		<div class="services-row clear">
			<div class="service-item col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Smartphone-100.png" >
				<h2 class="service-headline text-center">Social Media</h2>
				<p class="section-textblock">Tapping into Weibo fan clubs and building a presence on Wechat takes more than posts. Look to our social media strategists to conduct an audit of your social profile first.</p>
			</div>
			<div class="service-item col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Brush-100.png" >
				<h2 class="service-headline text-center">Creative Content</h2>
				<p class="section-textblock">Take your marketing materials up a notch with impressive infographics, videos and animation that bring your brand to life</p>
			</div>
			<div class="service-item col-sm-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Handshake-100.png" >
				<h2 class="service-headline text-center">Community Partnerships</h2>
				<p class="section-textblock">Word of mouth is a powerful form of advertisement. Our extensive global network means we can reach neighbors in China and the US.</p>
			</div>
		</div>
	</div>
</section>
<hr>

	<!-- CASE STUDIES -->
<section id="case-study-previews" class="index-section">
	<div class="content-wrapper">
		<h3 class="section-headline">CASE STUDIES</h3>
		<div class="studies-preview-list clear">
			<a href="/clients#nfl" class="case-study-preview">
				<div class="case-preview-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/nfl-preview.jpg'"></div>
				<h4 class="case-preview-name">NFL</h4>
				<p class="case-preview-snippet">Branding, Promotions, and Local Event Management</p>
				<div class="col-xs-12 text-center">
					<button class="btn btn-default btn-dg">View Case Study</button>
				</div>
			</a>
			<a href="/clients#ncaa-pac12" class="case-study-preview">
				<div class="case-preview-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/pac12-preview.jpg'"></div>
				<h4 class="case-preview-name">NCAA PAC - 12</h4>
				<p class="case-preview-snippet">Promotions, Localization, Tournement Management</p>
				<div class="col-xs-12 text-center">
					<button class="btn btn-default btn-dg">View Case Study</button>
				</div>
			</a>
			<a href="/clients#unilever" class="case-study-preview">
				<div class="case-preview-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/temp_img/unilever-preview.jpg'"></div>
				<h4 class="case-preview-name">UNILEVER</h4>
				<p class="case-preview-snippet">Introduction to foreign markets. Promotions, and event management</p>
				<div class="col-xs-12 text-center">
					<button class="btn btn-default btn-dg">View Case Study</button>
				</div>
			</a>
		</div>
	</div>
</section>
<hr>
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