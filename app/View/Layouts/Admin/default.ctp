<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo ADMIN_PAGE_TITLE;?></title>
		<?php 
			echo $this->Html->css('Admin/style');

			//CODE FOR VALIDATION ENGINE
			echo $this->Html->css(array('ValidationEngine/validationEngine.jquery', 'ValidationEngine/template'));
			echo $this->Html->script(array('ValidationEngine/jquery-1.7.2.min', 'ValidationEngine/languages/jquery.validationEngine-en', 'ValidationEngine/jquery.validationEngine', 'ckeditor/ckeditor'));
		?>
</head>
<body>
	<!-- HEADER SECTION START -->
	<?php echo $this->element('Admin/header');?>
	<!-- HEADER SECTION END -->
	
	<!-- MAIN CONTAINER START -->
	<div class="wrapper">
		<!-- LEFT NAVIGATION START -->
		<?php echo $this->element('Admin/left_navigation');?>
		<!-- LEFT NAVIGATION END -->

		<!-- PAGE MAIN CONTENT START -->
		<?php echo $this->fetch('content');?>
		<!-- PAGE MAIN CONTENT END -->
	</div>
	<div class="clear"></div>
	<!-- MAIN CONTAINER END -->

	<!-- FOOTER SECTION START -->
	<div class="footer">
		<span>
			Copyright &copy; <?php echo date('Y');?> Recruitment Agency in Dubai.com. All Right Reserved.
		</span>
	</div>
	<!-- FOOTER SECTION END -->
</body>
</html>