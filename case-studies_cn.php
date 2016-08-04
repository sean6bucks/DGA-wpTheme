<?php 
	$studyPage = get_page_by_title( 'case-studies' );
	$studies = CFS()->get( 'case_studies_cn', $studyPage->ID );
	if (count($studies)) : 
?>
<section id="case-studies">
	<div class="content-wrapper">
		<h2 class="section-headline"><?php echo CFS()->get( 'case_studies_headline_cn', $studyPage->ID ); ?></h2>
		<div class="studies-list">
			<?php foreach ( $studies as $key=>$study ) { ?>
			<div class="case-study-block col-sm-4">
				<a href="#<?php echo $study['case_slug_cn'] ?>" class="study-item">
					<img src="<?php echo $study['case_company_logo_cn'] ?>" >
					<div class="study-textblock">
						<h3 class="study-headline text-center"><?php echo $study['case_company_name_cn'] ?></h3>
						<p class="study-description"><?php echo $study['case_preview_text_cn'] ?></p>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<hr>

<?php 

foreach ( $studies as $key=>$study ) { ?>

<section id="<?php echo $study['case_slug_cn'] ?>" class="case-study blog-post">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo $study['case_company_name_cn'] ?></h3>
		<div class="text-wrapper">
			<?php echo $study['case_body_text_cn'] ?>
		</div>
	</div>
</section>
<hr>

<?php } 
endif; ?>

<section id="clients">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo CFS()->get( 'clients_headline_cn', $studyPage->ID ); ?></h3>
		<div class="clients-list clear">
			<?php 
			$clients = CFS()->get( 'clients', $studyPage->ID );
			foreach ( $clients as $key=>$client ) { ?>
			<div class="client-item">
				<img class="client-logo" src='<?php echo $client['client_logo'] ?>'>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<hr>

<section id="inquiry">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo CFS()->get( 'contact_us_headline_cn', $studyPage->ID ); ?></h3>
		<h4 class="section-subtext"><?php echo CFS()->get( 'contact_us_subtext_cn', $studyPage->ID ); ?></h4>
		<div class="inquiry-form">
			<?php echo do_shortcode('[contact-form-7 title="contact_form_cn"]'); ?>
		</div>
	</div>
</section>