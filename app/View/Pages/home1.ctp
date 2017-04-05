<!-- REQUIRED PAGE SCRIPTS START -->
<?php echo $this->Html->script(array('Front/function', 'Front/jquery.elevatezoom'));?>
<script type="text/javascript">
$('.zoom_01').elevateZoom({
	cursor: "crosshair",
	zoomWindowFadeIn: 500,
	zoomWindowPosition: 1,
	zoomWindowFadeOut: 750
});
</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script src="js/placeholder.js"></script>
<?php echo $this->Html->script(array('Front/html5', 'Front/placeholder'));?>
  <![endif]-->
<!-- script -->
<!-- SCRIPTS END -->
<!-- REQUIRED PAGE SCRIPTS END -->

<div class="rightCon">
	<?php if(!empty($viewListing)){?>
	<ul class="clearfix">
		<?php
		foreach($viewListing as $listing){ //pr($listing);die;
			$proPath = '';
			$imagePath = '../webroot/img/Products/'.$listing['Product']['image'];
			if(is_file($imagePath)){
				$proPath = 'Products/'.$listing['Product']['image'];
			}
		?>
		<li>
			<div class="prodBox">
				<div class="prodImg"><?php if($proPath != ''){echo $this->Image->resize($proPath, 185, 196);}?></div>
				<div class="prodDetail">
					<div class="prodName"><?php echo $listing['Product']['name'];?></div>
					<div class="prodDetails"><?php echo '$'.$listing['Product']['price'];?></div>
					<div class="QucikView" id="<?php echo $listing['Product']['id'];?>">Take a peek</div>
				</div>
			</div>
		</li>
		<?php }} ?>
	</ul>
</div>

<!-- PRODUCTS DETAILS START -->
<?php 
if(!empty($viewListing)){
	foreach($viewListing as $listing){
		$proPath = '';
		$imagePath = '../webroot/img/Products/'.$listing['Product']['image'];
		if(is_file($imagePath)){
			$proPath = SITE_PATH.'img/Products/'.$listing['Product']['image'];
		}
?>
<div class="prodPopOverlay" id="pro_des_<?php echo $listing['Product']['id'];?>">
	<div class="prodPopCon">
		<a href="javascript:void(0)" class="close"><?php echo $this->Html->image('Front/close.png', array('alt'=>'X'));?></a>
		<div class="container clearfix">
			<!-- <div class="shareBx">Share Width: <a href="javascript:void(0);"><?php echo $this->Html->image('Front/facebook.png', array('alt'=>'f'));?></a><a href="javascript:void(0);"><?php echo $this->Html->image('Front/twiiter.png', array('alt'=>'t'));?></a><a href="javascript:void(0);"><?php echo $this->Html->image('Front/pintrest.png', array('alt'=>'p'));?></a></div> -->
			<div class="clearfix"></div>

			<div class="prodectimage">
				<img class="zoom_01" src="<?php echo $proPath;?>" data-zoom-image="<?php echo $proPath;?>"/>
			</div>

			<div class="productdetails">
				<div class="bigProName"><?php echo $listing['Product']['name'];?></div>
				<div class="bigPrice">Price<span><?php echo '$'.$listing['Product']['price'];?></span></div>
				<div class="content">
					<p><?php echo nl2br($listing['Product']['description']);?></p>
				</div>
				<div class="brand">Brand<span><?php echo $listing['Product']['brand'];?></span></div>
				<div class="prodCode">Product Code<span><?php echo $listing['Product']['product_code'];?></span></div>
				<div class="availablity">Availablity<span>In Stock</span></div>
				<div class="BtnCon">
					<?php
						$newTaLink = 'javascript:void(0);';
						$newTabTarget = '';
						if($listing['Product']['buy_now_link'] != ''){
							$newTaLink = $listing['Product']['buy_now_link'];
							//$newTabTarget = 'Target="_blank"';
						}
					?>
					<a href="<?php echo $newTaLink;?>" <?php echo $newTabTarget;?> class="btnBuy">Buy It Now</a>

					<?php if($this->Session->read('Auth.User.User.id')){?>
						<span id="wishlistSpan_<?php echo $listing['Product']['id'];?>">
						<?php
							$itemStat = $this->Sport->checkWishlist($listing['Product']['id']);
							if($itemStat > 0){
						?>
						<a href="javascript:void(0);" class="addWishList" id="wishlist_<?php echo $listing['Product']['id'];?>" onclick="return setWishlist('r', <?php echo $listing['Product']['id'];?>);"><?php echo $this->Html->image('Front/hear.png', array('alt'=>''));?>Remove From Wishlist</a>
						<?php }else{?>
						<a href="javascript:void(0);" class="addWishList" id="wishlist_<?php echo $listing['Product']['id'];?>" onclick="return setWishlist('a', <?php echo $listing['Product']['id'];?>);"><?php echo $this->Html->image('Front/hear.png', array('alt'=>''));?>Add to Wishlist</a>
						<?php } ?>
						</span>
					<?php }else{ ?>
						<a href="javascript:void(0);" class="addWishList" id="wishlist_<?php echo $listing['Product']['id'];?>"><?php echo $this->Html->image('Front/hear.png', array('alt'=>''));?>Add to Wishlist</a>
					<?php } ?>
				</div>
				
				<div class="detailstab">
					<div class="detailstabs">
						<a href="javascript:void(0)" class="actv">Description</a>
						<!-- <a href="javascript:void(0)">Reviews(10)</a> -->
					</div>
					<div class="tabDetails">
						<div class="tab" id="tab1">
							<div class="content">
								<p><?php echo nl2br($listing['Product']['description']);?></p>
							</div>
						</div>
						
						<div class="tab" id="tab2" style="display:none">
							<div class="content">
								<p><?php echo nl2br($listing['Product']['description']);?></p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php }}?>
<!-- PRODUCTS DETAILS END -->
<script type="text/javascript">
$(".QucikView").click(function(){
	$('#pro_des_'+$(this).attr('id')).fadeIn(350);
	$("body").css("overflow","hidden");
});

// add to wishlist functionality
function fetchProductId(idS){
	var arr = idS.split('_');
	return arr[1];
}

$('.addWishList').click(function(){
	var productId = fetchProductId($(this).attr('id')); // productId

	// check for session
	var userSession = "<?php echo $this->Session->read('Auth.User.User.id');?>";
	if(userSession != ''){ // user logged in
		
	}else{ // user not logged in
		$('#pro_des_'+productId).fadeOut(); // close the current 
		$('#loginPop').fadeIn(350);
		$("body").css("overflow","hidden"); // open the login pane
	}
});


function setWishlist(type, pId){
	var types = '';
	var newvalWishlist = '';
	var wishlistCounter = parseInt($('#wishlistCounter').html());
	if(type == 'r'){
		types = 'remove';
		newvalWishlist = (wishlistCounter - 1);
	}else{
		types = 'add';
		newvalWishlist = (wishlistCounter + 1);
	}

	// set the counter in wishlist
	$('#wishlistCounter').html(newvalWishlist);

	$.ajax({
		type: "POST",
		url: "<?php echo SITE_PATH;?>/products/set_wishlist_item/",
		data: "product_id="+pId+"&type="+types,
		beforeSend:function(){
			var bSend = '<img src="<?php echo SITE_PATH;?>img/Ajax/pic-loader.gif"> Please Wait...';
			$('#wishlistSpan_'+pId).html(bSend);
		},
		success: function(response){
			$('#wishlistSpan_'+pId).html(response);
		}
	});
}
</script>