<?php $studyPage = get_page_by_title( 'case-studies' ); ?>
<section id="contact-section">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo CFS()->get( 'contact_us_headline', $studyPage->ID ) ?></h3>
		<div class="inquiry-form">
			<?php echo do_shortcode('[contact-form-7 title="contact_form"]'); ?>
		</div>
	</div>
</section>