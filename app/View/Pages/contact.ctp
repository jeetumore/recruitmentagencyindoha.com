<!-- RD Google Map-->
<!-- <div class="rd-google-map">
  <div id="google-map" class="rd-google-map__model"></div>
  <ul class="rd-google-map__locations">
    <li data-x="-73.9874068" data-y="40.643180">
      <p>
	9870 St Vincent Place,
	Glasgow, DC 45 Fr 45.
      </p>
    </li>
  </ul>
</div> -->
<!-- Rd Mailform result field-->

<div class="rd-mailform-validate"></div>


<section class="section-80 section-sm-bottom-120">
  <div class="shell text-left">
    <h2 class="text-tarawera">Contact Us</h2>
    <div class="range offset-top-51">
      <div class="cell-md-4">
	<address class="h3 line-height-2"></address>
	<div>
		<span><strong>Noida:</strong></span>
		B 46, Sector 57, Noida.

		<div style="clear:both; margin-top:5%;"></div>
		<span><strong>Bangalore:</strong></span>
		#23/1, 1st Main Road, Lower Palace, Orchards, Sadashivanagar, Bangalore

		<!-- <div style="clear:both; margin-top:5%;"></div>
		<span><strong>Dubai:</strong></span>
		#23/1, 1st Main Road, Lower Palace, Orchards, Sadashivanagar, Bangalore -->
	</div>
	<div class="contact-info">
	  <dl>
	    <dt>Jay:</dt>
	    <dd><a href="callto:+971569511766">+971 56951 1766</a></dd>
	  </dl>
	  <dl>
	    <dt>Victor:</dt>
	    <dd><a href="callto:+971525526953">+971 52552 6953</a></dd>
	  </dl>
	  <dl>
	    <dt>Beji:</dt>
	    <dd><a href="callto:+97466691327">+974 6669 1327</a></dd>
	  </dl>
	  <dl>
	    <dt>Babita:</dt>
	    <dd><a href="callto:+918287446440">+91 8287446440</a></dd>
	  </dl>
	  <p class="offset-top-25 mail">E-mail:	<a href="mailto:hr@corfuit.com">hr@corfuit.com</a>
	  </p>
	</div>
      </div>
      <div class="cell-md-8 offset-top-36">
	<?php 
		echo $this->Form->create('Page', array('action'=>'contact', 'data-result-class'=>'rd-mailform-validate', 'data-form-type'=>'contact', 'class'=>'rd-mailform'));

		echo $this->Form->text('Enquiry.name', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty', 'placeholder'=>'Name:'));

		echo $this->Form->text('Enquiry.email', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty @Email', 'placeholder'=>'Email:'));

		echo $this->Form->text('Enquiry.phone', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty @Phone', 'placeholder'=>'Phone:'));

		echo $this->Form->textarea('Enquiry.message', array('div'=>false, 'label'=>false, 'data-constraints'=>'@NotEmpty', 'placeholder'=>'Message:'));
	?>

	<button class="btn btn-default offset-top-60">Submit</button>

	<?php echo $this->Form->end();?>
      </div>
    </div>
  </div>
</section>