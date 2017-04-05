<script type="text/javascript">
	$(document).ready(function(){
		$("#PageAdminEditForm").validationEngine()
	});
</script>

<div class="right_content">
	<!-- PAGE HEADING START -->
	<?php echo $this->Sport->page_heading('Update Social Links');?>
	<!-- PAGE HEADING END -->

    <div class="content_bg">
      <div class="content">
       <?php 
			echo $this->Form->create('Social', array('action'=>'admin_edit'));
			echo $this->Form->hidden('Page.id');
		?>
          <table>
            <tbody>
			<tr>
                <td colspan="2">
					<?php echo $this->Session->flash();?>
				</td>
              </tr>

             <tr>
		<td class="lbl150">Page Name:</td>
		<td>
		<div class="input text required"><?php echo $this->data['Page']['meta_title'];?></div>
		</td>
              </tr>

	      <tr>
		<td class="lbl150">Meta Title:</td>
		<td><?php echo $this->Form->text('Page.meta_title', array('div'=>false, 'label'=>false, 'class'=>'tbox245 input-01 validate[required]', 'required'=>false, 'style'=>'width:97%;')); 
					echo $this->Form->error('Page.meta_title');?></td>
              </tr>

	      <tr>
		<td class="lbl150">Meta Keywords:</td>
		<td><?php echo $this->Form->text('Page.meta_keywords', array('div'=>false, 'label'=>false, 'class'=>'tbox245 input-01 validate[required]', 'required'=>false, 'style'=>'width:97%;')); 
					echo $this->Form->error('Page.meta_keywords');?></td>
              </tr>

	      <tr>
		<td class="lbl150">Meta Description:</td>
		<td><?php echo $this->Form->textarea('Page.meta_description', array('div'=>false, 'label'=>false, 'class'=>'inpTextArea validate[required]', 'required'=>false, 'style'=>'width:98.5%;', 'rows'=>'8')); 
					echo $this->Form->error('Page.meta_description');?></td>
              </tr>

	   <?php if(!in_array($this->data['Page']['id'], $notRequiredIds)){// dont show editor?>

	     <tr>
                <td class="lbl150">Content:</td>
				<td><?php echo $this->Form->textarea('Page.page_description', array('id'=>'description'));?></td>
				 <script type="text/javascript">
					CKEDITOR.replace('description',
						{
						    filebrowserBrowseUrl: '<?php echo $this->Html->url("/"); ?>js/ckfinder/ckfinder.html',
						    filebrowserImageBrowseUrl: '<?php echo $this->Html->url("/"); ?>js/ckfinder/ckfinder.html?type=Images',
						    filebrowserFlashBrowseUrl: '<?php echo $this->Html->url("/"); ?>js/ckfinder/ckfinder.html?type=Flash',
						    filebrowserUploadUrl: '<?php echo $this->Html->url("/"); ?>js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
						    filebrowserImageUploadUrl: '<?php echo $this->Html->url("/"); ?>js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
						    filebrowserFlashUploadUrl: '<?php echo $this->Html->url("/"); ?>js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
						    width: "650px",
						    height: "600px"
						}
					);
				    </script>
					<!-- <td><?php echo $this->Fck->fckeditor(array('Page', 'content'), $this->Html->base, $this->data['Page']['content'], '200%', '450');?></td> -->
              </tr>
	      <?php }else{ ?>
	      <tr>
		<td>&nbsp;</td>
		<td><div style="width:500px;"></div></td>
	      </tr>
	      <?php } ?>

			  <tr>
                <td class="lbl150">Status:</td>
				<td>
					<div class="input text required">
						<?php echo $this->Form->radio('Page.status', array('1'=>'Active', '0'=>'Inactive'), array('legend'=>false));?>
					</div>
				</td>
              </tr>
              
                <td>&nbsp;</td>
                <td><input type="submit" value="Submit" id="submit_form"></td>
              </tr>
            </tbody>
          </table>
          <div class="clearh"></div>
        <?php echo $this->Form->end();?>
      </div>
      <div class="clear "></div>
    </div>
  </div>