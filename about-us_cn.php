<?php 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$aboutPage = get_page_by_title( 'about-us' );
?>
<section id="about-us-jumbotron" style="background-image: url('<?php echo $url ?>')">
</section>
<section id="our-story">
	<div class="content-wrapper">
		<h2 class="section-headline"><?php echo CFS()->get( 'our_story_headline_cn', $aboutPage->ID ); ?></h2>
		<p class="section-textblock"><?php echo CFS()->get( 'our_story_text_cn', $aboutPage->ID ); ?></p>
	</div>
</section>

<section id="mission-values" style="background-image: url('<?php echo CFS()->get( 'about_info_background', $aboutPage->ID ); ?>')">
	<div class="content-wrapper">
		<?php $blocks = CFS()->get( 'about_blocks', $aboutPage->ID );
			foreach ( $blocks as $block ) { ?>
		<div class="about-info col-xs-4">
			<h5 class="info-headline text-center"><?php echo $block['info_headline_cn']; ?></h5>
			<p class="section-textblock"><?php echo $block['info_text_cn']; ?></p>
		</div>
		<?php } ?>
	</div>
</section>

<section id="our-team">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo CFS()->get( 'team_headline_cn', $aboutPage->ID ); ?></h3>
		<div class="company-bios clear">
			<?php $members = CFS()->get( 'team_members_cn', $aboutPage->ID );
			foreach ( $members as $key=>$member ) { ?>
			<div class="bio-item col-xs-3">
				<div class="bio-img" style="background-image:url('<?php echo $member['profile_image_cn'] ?>')">
					<div class="bio-info">
						<h5 class="bio-name"><?php echo $member['profile_name_cn'] ?></h5>
						<p class="bio-job"><?php echo $member['profile_position_cn'] ?></p>
					</div>
					<div class="bio-text">
						<p>
							<?php echo $member['profile_text_cn'] ?>
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
		<h3 class="section-headline"><?php echo CFS()->get( 'careers_headline_cn', $aboutPage->ID ); ?></h3>
		<h4 class="section-subtext"><?php echo CFS()->get( 'careers_text_cn', $aboutPage->ID ); ?></h4>
		<?php 
			$jobs = CFS()->get( 'job_postings_cn', $aboutPage->ID );
			if (count($jobs)) : 
		?>
		<div class="jobs-list">
			<div class="panel-group" id="accordion">

				<?php foreach ( $jobs as $key=>$job ) { ?>
				<div class="job-item panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $job['job_slug_cn'] ?>">
							<h4><?php echo $job['job_title_cn'] ?></h4>
							<p><?php echo $job['job_tagline_cn'] ?></p>
						</a>
					</div>
					<div id="<?php echo $job['job_slug_cn'] ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<p class="full-description">
								<?php echo $job['job_description_cn'] ?>
							</p>
							<a href="<?php echo $job['apply_url'] ?>" class="apply-btn btn btn-block btn-dg"><?php echo CFS()->get( 'apply_now_button_cn', $aboutPage->ID ); ?></a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php else: ?>
		<p class="no-job-postings"><?php echo CFS()->get( 'no_openings_text_cn', $aboutPage->ID ); ?></p>
		<?php endif; ?>
	</div>
</section>