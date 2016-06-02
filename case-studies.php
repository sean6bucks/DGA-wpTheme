<?php $studies = CFS()->get( 'case_studies' );
if (count($studies)) : ?>
<section id="case-studies">
	<div class="content-wrapper">
		<h2 class="section-headline">Case Studies</h2>
		<div class="studies-list">
			<?php foreach ( $studies as $key=>$study ) { ?>
			<div class="case-study-block col-sm-4">
				<a href="#<?php echo $study['case_slug'] ?>" class="study-item">
					<img src="<?php echo $study['case_company_logo'] ?>" >
					<div class="study-textblock">
						<h3 class="study-headline text-center"><?php echo $study['case_company_name'] ?></h3>
						<p class="study-description"><?php echo $study['case_preview_text'] ?></p>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<hr>

<?php 
$studies = CFS()->get( 'case_studies' );
foreach ( $studies as $key=>$study ) { ?>

<section id="<?php echo $study['case_slug'] ?>" class="case-study blog-post">
	<div class="content-wrapper">
		<h3 class="section-headline"><?php echo $study['case_company_name'] ?></h3>
		<div class="text-wrapper">
			<?php echo $study['case_body_text'] ?>
		</div>
	</div>
</section>
<hr>

<?php } 
endif; ?>

<section id="clients">
	<div class="content-wrapper">
		<h3 class="section-headline">CLIENTS</h3>
		<div class="clients-list clear">
			<?php 
			$clients = CFS()->get( 'clients' );
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
		<h3 class="section-headline">CONTACT US</h3>
		<h4 class="section-subtext">Inquire for more information</h4>
		<div class="inquiry-form">
			<form class="clear">
				<fieldset class="form-group">
			    	<label for="inquiryContactName">Name<span class="text-danger">*</span></label>
			    	<input type="text" class="form-control" id="inquiryContactName" placeholder="Jane Smith" required>
			  	</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="inquiryContactCompany">Company</label>
			    	<input type="text" class="form-control" id="inquiryContactCompany" placeholder="Dragon Group Asia">
			  	</fieldset>
				<fieldset class="form-group half-width">
			    	<label for="inquiryContactEmail">Email<span class="text-danger">*</span></label>
			    	<input type="email" class="form-control" id="inquiryContactEmail" placeholder="Jane@Dragongroup.asia" required>
			  	</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="inquiryContactPosition">Position</label>
			    	<input type="text" class="form-control" id="inquiryContactPosition" placeholder="Head of Marketing">
			  	</fieldset>
				<fieldset class="form-group half-width">
				    <label for="inquiryContactIndustry">Industry</label>
				    <select class="form-control" id="inquiryContactIndustry">
				     	<option>Marketing</option>
						<option>Sports</option>
						<option>Entertainment</option>
						<option>Events</option>
						<option>Social Engagement</option>
				    </select>
				</fieldset>
			  	<fieldset class="form-group half-width">
			    	<label for="inquiryContactPhone">Phone</label>
			    	<input type="text" class="form-control" id="inquiryContactPhone" placeholder="+1 123-444-5678">
			  	</fieldset>
			  	<fieldset class="form-group half-width clear">
			    	<label for="inquiryContactWeChat">WeChat ID</label>
			    	<input type="text" class="form-control" id="inquiryContactWeChat" placeholder="Head of Marketing">
			  	</fieldset>
			  	<fieldset class="form-group" style="clear:both">
			  		<label for="inquiryContactMessage">Questions or Comments</label>
					<textarea placeholder="How can we help you?" class="form-control" id="inquiryContactMessage" rows="3"></textarea>
				</fieldset>
				<div class="col-xs-12 text-center">
					<button type="submit" class="btn btn-block btn-dg">Send</button>
				</div>
				<h6 class="text-danger pull-right">*Required</h6>
			</form>
		</div>
	</div>
</section>
