<?php
	// set for parameter pages
	if(isset($this->request->params['pass'][0])){
		$action = $this->request->params['pass'][0];
	}else{
		$action = $this->request->params['action'];
	} //echo $action;
?>

<footer class="page-foot bg-tarawera section-top-80 section-bottom-60">
        <div class="shell text-md-left text-center"><a href="./"><img src="images/brand-footer.png" alt=""></a>
          <ul class="list-inline-1">
		  <li <?php if($action == 'home'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>">Home</a></li>
                  <li <?php if($action == 'about-us'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>about-us">About us</a></li>
                  <li <?php if($action == 'our-services'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>our-services">Our Services</a></li>
                  <li <?php if($action == 'contact'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>contact-us">Contact us</a></li>
          </ul>

          <div class="range offset-top-51 offset-md-top-92">
            <div class="cell-md-6">
              <p>Recruitment Agencies Directory &#169;<span id="copyright-year"></span> All rights reserved.</p>
              <p><a href="<?php echo SITE_PATH;?>terms">Terms Of Use | </a><a href="<?php echo SITE_PATH;?>privacy"> Privacy Policy</a>
              </p>
            </div>
            <div class="cell-md-4 cell-md-preffix-2">
              <ul class="list-inline">
                <li><a href="#"><span class="fa-facebook-official"></span><br>
                    <div class="offset-top-4">Facebook</div></a></li>
                <li><a href="#"><span class="fa-twitter"></span><br>
                    <div class="offset-top-4">Twitter</div></a></li>
                <li><a href="#"><span class="fa-google-plus"></span><br>
                    <div class="offset-top-4">Google+</div></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>