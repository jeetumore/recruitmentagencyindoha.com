<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    
    

	<!-- META TITLES START -->
	<?php
		if(!empty($pageArr)){
	?>
	<title><?php echo $pageArr['Page']['meta_title'];?></title>
	<meta name="keywords" content="<?php echo $pageArr['Page']['meta_keywords'];?>">
	<meta name="description" content="<?php echo $pageArr['Page']['meta_description'];?>">
	<?php
		}
	?>
	<!-- META TITLES END -->

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="google-site-verification" content="0vR5l7FhHhqopij0KchWZyTCfEGamF6wELHBhwpY12w" />

    <link rel="icon" href="<?php echo SITE_PATH.'img/';?>images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300,500,700%7CPT+Serif:400,700;">
    <?php echo $this->Html->css('Front/style');?>
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82933024-3', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body>
	<div class="page text-center">
		<?php echo $this->Element('Front/header');?>

		<?php echo $this->fetch('content');?>

		<?php echo $this->Element('Front/footer');?>
	</div>
	<?php echo $this->Html->script(array('Front/core.min', 'Front/script', 'Front/jquery.countTo'));?>
</body>
</html>