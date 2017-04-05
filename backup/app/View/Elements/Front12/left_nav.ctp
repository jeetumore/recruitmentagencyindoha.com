<div class="leftNav">
	<div class="menuIcon clearfix">Our Category<span class="toggle"><i></i><i></i><i></i></span></div>
	<ul class="navLeft">
	<?php
		$parentCategories = $this->Sport->fetchCategories('0');
		if(!empty($parentCategories)){
			foreach($parentCategories as $pListing){
				$pALink = SITE_PATH.'products/search/'.$pListing['Category']['alias_name'];
				$sCategories = $this->Sport->fetchCategories($pListing['Category']['id']);
				if(!empty($sCategories)){
					$pALink = 'javascript:void(0);';
				}

	?>
		<li class="submenu"><a href="<?php echo $pALink;?>"><?php echo $pListing['Category']['name'];?></a>
			<?php 
				if(!empty($sCategories)){ //pr($sCategories);die;
			?>
			<ul class="subNav">
				<?php 
					foreach($sCategories as $subListing){//pr($subListing);die;
					$sALink = SITE_PATH.'products/search/'.$subListing['Category']['alias_name'];
				?>
				<li><a href="<?php echo $sALink;?>"><?php echo $subListing['Category']['name']?></a></li>
				<?php } ?>
			</ul>
			<?php } ?>
		</li>
	<?php
		}}
	?>
		<!-- <li class="submenu"><a href="javascript:void(0)">Just In</a>
			<ul class="subNav">
				<li><a href="javascript:void(0);">Sub Item Name</a></li>
			</ul>
		</li> -->
	</ul>
</div>