<div class="right_content">
	<!-- PAGE HEADING START -->
	<?php echo $this->Sport->page_heading('Dashboard');?>
	<!-- PAGE HEADING END -->

	<div class="content_bg">
		<div class="admin_welcome">Welcome <?php echo ucwords($this->Session->read('Auth.Admin.Admin.username'));?>!</div>
		<div class="clear"></div>
		<div class="clear pdtop20"></div>

		<!-- <div class="adminhome">
			<ul>
				<li>
					<?php 
						echo $this->Html->image('Admin/manage_user.png', array('alt'=>''));
						echo '<span>'.$this->Html->link('Manage Users', '/admin/users/manage/', array('escape'=>false)).'</span>';
					?>
				</li>

				<li>
					<?php 
						echo $this->Html->image('Admin/website_content.png', array('alt'=>''));
						echo '<span>'.$this->Html->link('Social Links', '/admin/socials/manage/', array('escape'=>false)).'</span>';
					?>
				</li>

				<li>
					<?php 
						echo $this->Html->image('Admin/ads_management.png', array('alt'=>''));
						echo '<span>'.$this->Html->link('Sliders', '/admin/sliders/manage/', array('escape'=>false)).'</span>';
					?>
				</li>

				<li>
					<?php 
						echo $this->Html->image('Admin/affiliate_management.png', array('alt'=>''));
						echo '<span>'.$this->Html->link('FAQ', '/admin/faqs/manage/', array('escape'=>false)).'</span>';
					?>
				</li>

				<li>
					<?php 
						echo $this->Html->image('Admin/category_management.png', array('alt'=>''));
						echo '<span>'.$this->Html->link('Static Pages', '/admin/pages/manage/', array('escape'=>false)).'</span>';
					?>
				</li>
			</ul>
		</div> -->
		<div class="clear "></div>
	</div>
</div>