<?php
//CODE FOR VALIDATION ENGINE
echo $this->Html->css(array('ValidationEngine/validationEngine.jquery', 'ValidationEngine/template'));
//echo $this->Html->script(array('ValidationEngine/jquery-1.7.2.min', 'ValidationEngine/languages/jquery.validationEngine-en', 'ValidationEngine/jquery.validationEngine', 'ckeditor/ckeditor'));
echo $this->Html->script(array('ValidationEngine/languages/jquery.validationEngine-en', 'ValidationEngine/jquery.validationEngine', 'ckeditor/ckeditor'));

?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#EnquiryContactUsForm").validationEngine()
	});
</script>

<h1 class="page-heading" style="margin-left:60px;">Contact</h1>
<div class="contactus-wrapper" style="margin:30px 0 0 60px;">
	<div class="wrapper">
		<div class="contact-form">
			<!-- DISPLAY MESSAGE START -->
			<?php echo $this->Session->flash();?>
			<!-- DISPLAY MESSAGE END -->

			<!-- CONTACT US FORM START -->
			<?php echo $this->Form->create('Page', array('action'=>'contact'));?>
				<div class="join-form">
					<div class="row-field">
						<div class="field-sec eml-box-with">
							<label>Name:</label>
							<?php echo $this->Form->text('Enquiry.name', array('class'=>'text-field validate[required]', 'placeholder'=>'Name'));	echo $this->Form->error('Enquiry.name');?>
						</div>
					</div>

					<div class="row-field">
						<div class="field-sec eml-box-with">
							<label>Email:</label>
							<?php echo $this->Form->text('Enquiry.email', array('class'=>'text-field validate[required,custom[email]]', 'placeholder'=>'Email'));	echo $this->Form->error('Enquiry.email');?>
						</div>
					</div>

					<div class="row-field">
						<div class="field-sec eml-box-with">
							<label>Subject:</label>
							<?php echo $this->Form->text('Enquiry.subject', array('class'=>'text-field validate[required]', 'placeholder'=>'Subject'));	echo $this->Form->error('Enquiry.subject');?>
						</div>
					</div>

					<div class="row-field">
						<div class="field-sec eml-box-with">
							<label>Phone:</label>
							<?php echo $this->Form->text('Enquiry.phone', array('class'=>'text-field validate[custom[phone]]', 'placeholder'=>'Phone'));	echo $this->Form->error('Enquiry.phone');?>
						</div>
					</div>

					<div class="row-field">
						<div class="field-sec eml-box-with">
							<label>Message:</label>
							<?php echo $this->Form->textarea('Enquiry.message', array('class'=>'text-area validate[required]', 'style'=>'resize:none; width:500px; height:200px;, border:1px solid #DEDEDE;')); echo $this->Form->error('Enquiry.message');?>
						</div>
					</div>

					<div class="row-field">
						<div class="field-sec btn-with">
							<input type="submit" value="SEND" style="border: 2px solid #dcdcdc; cursor: pointer; height: 40px; margin-left: 106px; margin-top: 25px; padding: 9px; width: 80px;"/>
						</div>
					</div>
				</div>
			<?php echo $this->Form->end();?>
			<!-- CONTACT US FORM END -->
		</div>
	</div>
</div>