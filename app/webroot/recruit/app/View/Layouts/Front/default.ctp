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

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300,500,700%7CPT+Serif:400,700;">
    <?php echo $this->Html->css('Front/style');?>
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<div class="page text-center">
		<?php echo $this->Element('Front/header');?>

		<main class="page-content">
			<section class="section-top-80 section-bottom-105">
				<?php echo $this->fetch('content');?>
			</section>
		</main>

		<?php echo $this->Element('Front/footer');?>
	</div>
	<?php echo $this->Html->script(array('Front/core.min', 'Front/script'));?>
</body>
</html>