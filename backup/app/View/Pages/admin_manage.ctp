<!-- for fancybox Start -->
<?php
	echo $this->Html->Css('FancyBox/jquery.fancybox-1.3.4');
	echo $this->Html->Script('FancyBox/jquery.fancybox-1.3.4.pack');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("a.fancyclass").fancybox();
	});
 </script>
<!-- for fancybox End -->

<div class="right_content">
	<!-- PAGE HEADING START -->
	<?php echo $this->Sport->page_heading('Content Management System');?>
	<!-- PAGE HEADING END -->
   
    <div class="content_bg">
      <div class="content"> <?php echo $this->Session->flash();?>
        
		<?php if(!empty($viewListing)){ //pr($viewListing);die;?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <th width="15%"><?php echo $this->Paginator->sort('Page.meta_title', 'Page');?></th>
              <th width="20%" style="text-align:center"><?php echo $this->Paginator->sort('Page.status', 'Status');?></th>
			   <th width="20%"><?php echo $this->Paginator->sort('Page.modified', 'Last Modified');?></th>
			  <th width="30%">Options </th>
            </tr>

			<?php
				foreach($viewListing as $listing){ //pr($listing);die;
			?>
			<tr>
				<td><?php echo $listing['Page']['meta_title'];?></td>
				<td align="center"><?php
					if($listing['Page']['status'] == '1'){
						$title = 'Deactivate';
						$image = 'Admin/activate.png';
						$new_status = '0';
						$msg = 'deactivate';
					}else{
						$title = 'Activate';
						$image = 'Admin/deactivate.png';
						$new_status = '1';
						$msg = 'activate';
					}

					echo $this->Html->link($this->Html->image($image, array('alt'=>'')), '/admin/pages/set_status/'.$listing['Page']['id'].'/'.$new_status.'/', array('escape'=>false, 'title'=>$title), 'Are you sure to '.$msg.' this Static Page?');
				?></td>
				<td><?php echo date('d M, Y', strtotime($listing['Page']['modified']));?></td>
				<td><?php
					echo '&nbsp;&nbsp;'.$this->Html->link($this->Html->image('Admin/edit.png', array('alt'=>'')), '/admin/pages/edit/'.$listing['Page']['id'].'/', array('escape'=>false, 'title'=>'Edit'));
				?></td>
			</tr>
			<?php } ?>
          </tbody>
        </table>
		<?php 
			//echo $this->Element('Admin/pagination'); // for pagination
			}else{ // if no data available ?>
		<div class="emptyData">No Static Page Available!!</div>
		<?php } ?>


      </div>
      <div class="clear "></div>
    </div>
</div>