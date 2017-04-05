<?php 
	$controller = $this->params['controller'];
	$action = $this->params['action'];
?>

<div class="left_menu">
	<!-- FOR ADMIN SETTINGS START -->
	<?php if($controller == 'admins'){?>
	<h1>Admin Settings</h1>
	<div class="clear"></div>
	<ul>
		<li><a href="<?php echo SITE_PATH.'admin/admins/dashboard/';?>" <?php if($action == 'admin_dashboard'){echo 'class="sel"';}?>>Dashboard</a></li>
		<li><a href="<?php echo SITE_PATH.'admin/admins/change_email/';?>" <?php if($action == 'admin_change_email'){echo 'class="sel"';}?>>Change Email</a></li>
		<li><a href="<?php echo SITE_PATH.'admin/admins/change_password/';?>" <?php if($action == 'admin_change_password'){echo 'class="sel"';}?>>Change Password</a></li>
		<!-- FURTHER SETTINGS END -->
	</ul>
	<?php } ?>
	<!-- FOR ADMIN SETTINGS END -->

	<!-- FOR ADMIN SETTINGS START -->
	<?php if($controller == 'pages'){?>
	<h1>Content Management System</h1>
	<div class="clear"></div>
	<ul>
		<li><a href="<?php echo SITE_PATH.'admin/pages/manage/';?>" <?php if($action == 'admin_manage'){echo 'class="sel"';}?>>Manage</a></li>
	</ul>
	<?php } ?>
	<!-- FOR ADMIN SETTINGS END -->
</div>