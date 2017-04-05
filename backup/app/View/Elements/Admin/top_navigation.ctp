<div class="menu">
	<div>
	<ul>
		<li <?php if($this->params['controller']=='pages'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH.'admin/pages/manage/';?>">CMS</a></li>
		<li <?php if($this->params['controller']=='admins'){echo 'class="active"';}?>><a href="<?php echo SITE_PATH.'admin/admins/dashboard/';?>">Settings</a></li>
	</ul>
	</div>
</div>