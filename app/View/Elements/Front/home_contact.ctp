<div class="rd-mailform-validate"></div>
<section class="content-layer brightText" style="background:#1e7fdd none repeat scroll 0 0;">
	<!-- <div class="bg-layer"></div> -->

	<div class="placeOver">
		<div class="container">
			<header class="page-header text-center" style="text-align:center;"><h2 style="color:#FFF;">Contact Us</h2></header>

			<div class="row">
				<div class="col-md-8 col-md-push-2">
					<div class="contactForm">
						<?php 
							echo $this->Form->create('Page', array('action'=>'contact', 'data-result-class'=>'rd-mailform-validate', 'data-form-type'=>'contact', 'class'=>'rd-mailform'));
						?>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<?php echo $this->Form->text('Enquiry.name', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty', 'placeholder'=>'Name:', 'class'=>'form-control'));?>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<?php echo $this->Form->text('Enquiry.email', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty @Email', 'placeholder'=>'Email:', 'class'=>'form-control'));?>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<?php echo $this->Form->text('Enquiry.phone', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty @Phone', 'placeholder'=>'Phone:', 'class'=>'form-control'));?>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<?php echo $this->Form->textarea('Enquiry.message', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty', 'placeholder'=>'Message:', 'class'=>'form-control', 'style'=>'height:120px;'));?>
										</div>
									</div>
								</div>

								<input class="btn btn-primary" value="Send Message" type="submit">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>