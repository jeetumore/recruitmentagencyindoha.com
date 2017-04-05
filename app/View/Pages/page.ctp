<?php if($pageArr['Page']['id'] == '1'){?>
<!-- <style type="text/css">
	.image_box_container {margin-left: -10px;margin-right: -10px;max-width: 600px;width: 100%; margin-bottom:4%;}
	.image_box_1 {margin: 10px 25px;    width: calc(33.3% - 55px);    display: inline-block;    overflow: hidden;    outline: 1px solid #ddd;    text-align: center;    box-shadow: 2px 2px 5px #ddd;}
	.image_box_1 strong{font-size:15px; font-family:Arial;}
	.image_box_1 img{margin-bottom:10px;
		-webkit-filter: grayscale(50%);
		  -webkit-transition: .5s ease-in-out;
		  -moz-filter: grayscale(50%); 
		  -moz-transition: .5s ease-in-out;
		  -o-filter: grayscale(50%); 
		  -o-transition: .5s ease-in-out;
		  -webkit-transition: -moz-transform .3s ease-out; 
		   -moz-transition: -webkit-transform .3s ease-out; 
		   -o-transition: -o-transform .3s ease-out; 
			transition: transform .3s ease-out; 
	}
	.image_box_1:hover img{margin-bottom:10px;
		 -webkit-filter: grayscale(0%);
		  -webkit-transition: .5s ease-in-out;
		  -moz-filter: grayscale(0%);
		  -moz-transition: .5s ease-in-out;
		  -o-filter: grayscale(0%);
		  -o-transition: .5s ease-in-out;
		   -moz-transform: scale(1.1)  translate(0, -8px);
		   -webkit-transform: scale(1.1) translate(0, -8px);
		   -o-transform: scale(1.1) translate(0, -8px);
		   transform: scale(1.1) translate(0, -8px);
	}
	.image_box_1 .desig{font-size:13px; font-family:Arial;margin-bottom:10px;}
	.wid_100{width:100%;}
</style> -->
<?php } ?>

<div class="shell text-left">
	<h2 class="text-tarawera"><?php echo $pageArr['Page']['meta_title'];?></h2>

	<div class="range offset-top-51">
		<div class="cell-md-12 cell-sm-12">
			<?php if($pageArr['Page']['id'] == '1'){?>
			<!-- <div class="image_box_container">
				<div class="image_box_1"><img src="http://recruitment-agencies-in-dubai.com/img/images/pic3.jpg" alt="HR_Recruiter" class="wid_100"/>
					<Strong>Jay Jaiswal</strong>
					<div class="desig">CEO CorfuIT </div>
				</div>
				<div class="image_box_1"><img src="http://recruitment-agencies-in-dubai.com/img/images/pic2.jpg" alt="HR_Recruiter" class="wid_100"/>
					<Strong>Victor</strong>
					<div class="desig">CorfuIT </div>
				</div>
				<div class="image_box_1"><img src="http://recruitment-agencies-in-dubai.com/img/images/pic1.jpg" alt="HR_Recruiter" class="wid_100"/>
					<Strong>Babita Joshi</strong>
					<div class="desig">HR CorfuIT </div>
				</div>
			</div> -->
			<?php } ?>

			<?php //echo nl2br($pageArr['Page']['page_description']);
			echo $pageArr['Page']['page_description'];
			?>
		</div>
	</div>
</div>