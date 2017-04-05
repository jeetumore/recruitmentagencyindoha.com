<?php
	// set for parameter pages
	if(isset($this->request->params['pass'][0])){
		$action = $this->request->params['pass'][0];
	}else{
		$action = $this->request->params['action'];
	} //echo $action;
?>

<header class="page-head">
	<!-- RD Navbar-->
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" class="rd-navbar">
		<div class="rd-navbar-wrap">
		<div class="newHeader">
	  <div class="shell newHeader_in">
	  <i class="fa fa-envelope" aria-hidden="true"></i> <a href="hr@corfuit.com">hr@corfuit.com</a> &nbsp;&nbsp; &nbsp;&nbsp;<i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="tel:+971569511766">+971569511766</a>
	  </div>
	</div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="<?php echo SITE_PATH;?>" class="brand-name"><?php echo $this->Html->image('images/brand.png', array('alt'=>''));?></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li <?php if($action == 'home'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>">Home</a></li>
                  <li <?php if($action == 'about-us'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>about-us">About us</a></li>
                  <li <?php if($action == 'our-services'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>our-services">Our Services</a></li>
                  <li <?php if($action == 'contact'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH;?>contact-us">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>