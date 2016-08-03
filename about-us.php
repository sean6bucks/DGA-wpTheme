<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<section id="about-us-jumbotron" style="background-image: url('<?php echo $url ?>')">
</section>
<section id="our-story">
	<div class="content-wrapper">
		<h2 class="section-headline"><?php echo CFS()->get( 'our_story_headline' ); ?></h2>
		<p class="section-textblock"><?php echo CFS()->get( 'our_story_text' ); ?></p>
	</div>
</section>

<section id="mission-values" style="background-image: url('<?php echo CFS()->get( 'about_info_background' ); ?>')">
	<div class="content-wrapper">
		<?php $blocks = CFS()->get( 'about_blocks' );
			foreach ( $blocks as $block ) { ?>
		<div class="about-info col-sm-4">
			<h5 class="info-headline text-center"><?php echo $block['info_headline']; ?></h5>
			<p class="section-textblock"><?php echo $block['info_text']; ?></p>
		</div>
		<?php } ?>
	</div>
</section>

<section id="our-team">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo CFS()->get( 'team_headline' ); ?></h3>
		<div class="company-bios clear">
			<?php $members = CFS()->get( 'team_members' );
			foreach ( $members as $key=>$member ) { ?>
			<div class="bio-item col-sm-3 col-xs-6">
				<div class="bio-img" style="background-image:url('<?php echo $member['profile_image'] ?>')">
					<div class="bio-info">
						<h5 class="bio-name"><?php echo $member['profile_name'] ?></h5>
						<p class="bio-job"><?php echo $member['profile_position'] ?></p>
					</div>
					<div class="bio-text">
						<p>
							<?php echo $member['profile_text'] ?>
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<hr>

<section id="careers">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo CFS()->get( 'careers_headline' ); ?></h3>
		<h4 class="section-subtext"><?php echo CFS()->get( 'careers_text' ); ?></h4>
		<?php 
			$jobs = CFS()->get( 'job_postings' );
			if (count($jobs)) : 
		?>
		<div class="jobs-list">
			<div class="panel-group" id="accordion">

				<?php foreach ( $jobs as $key=>$job ) { ?>
				<div class="job-item panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $job['job_slug'] ?>">
							<h4><?php echo $job['job_title'] ?></h4>
							<p><?php echo $job['job_tagline'] ?></p>
						</a>
					</div>
					<div id="<?php echo $job['job_slug'] ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<p class="full-description">
								<?php echo $job['job_description'] ?>
							</p>
							<a href="<?php echo $job['apply_url'] ?>" class="apply-btn btn btn-block btn-dg"><?php echo CFS()->get( 'apply_now_button' ) ?></a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php else: ?>
		<p class="no-job-postings"><?php echo CFS()->get( 'no_openings_text' ) ?></p>
		<?php endif; ?>
	</div>
</section>

