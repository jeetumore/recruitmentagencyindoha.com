<?php
	// set for parameter pages
	if(isset($this->request->params['pass'][0])){
		$action = $this->request->params['pass'][0];
	}else{
		$action = $this->request->params['action'];
	} //echo $action;
?>

<footer class="page-foot bg-tarawera section-top-80 section-bottom-60" style="padding:20px 0 20px 0;">
        <div class="shell text-md-left text-center"><?php echo $this->Html->image('images/brand.png', array('alt'=>''));?></a>
          <ul class="list-inline-1">
		  <li <?php if($action == 'home'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>">Home</a></li>
                  <li <?php if($action == 'about-us'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>about-us">About us</a></li>
                  <li <?php if($action == 'our-services'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>our-services">Our Services</a></li>
                  <li <?php if($action == 'contact'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>contact-us">Contact Us</a></li>
          </ul>

          <div class="range offset-top-51 offset-md-top-92" style="margin-top:20px;">
            <div class="cell-md-6">
              <p>Recruitment Agency In Doha &#169;<?php echo date('Y');?> ALL RIGHTS RESERVED.</p>
              <!-- <p><a href="<?php echo SITE_PATH;?>terms">Terms Of Use | </a><a href="<?php echo SITE_PATH;?>privacy"> Privacy Policy</a>
              </p> -->
            </div>
            <div class="cell-md-6">
              <ul class="list-inline">
                <li><a href="https://www.facebook.com/Recruitment-Agencies-In-Dubai-256255121462825/" target="_blank"><span class="fa-facebook-official"></span><br>
                    <div class="offset-top-4">Facebook</div></a></li>
                <li><a href="https://twitter.com/recruitmentuae1/" target="_blank"><span class="fa-twitter"></span><br>
                    <div class="offset-top-4">Twitter</div></a></li>
                <li><a href="https://plus.google.com/u/1/108423790712293060450" target="_blank"><span class="fa-google-plus"></span><br>
                    <div class="offset-top-4">Google+</div></a></li>
		<li><a href="https://in.linkedin.com/in/recruitment-agencies-dubai-97427a137" target="_blank"><span class="fa-linkedin"></span><br>
                    <div class="offset-top-4">Linked In</div></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>