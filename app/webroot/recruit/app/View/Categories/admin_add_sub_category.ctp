<script type="text/javascript">
	$(document).ready(function(){
		$("#CategoryAdminAddSubCategoryForm").validationEngine()
	});
</script>

<div class="right_content">
	<!-- PAGE HEADING START -->
	<?php echo $this->Sport->page_heading('Add New Sub-Category');?>
	<!-- PAGE HEADING END -->

    <div class="content_bg">
      <div class="content">
       <?php 
		echo $this->Form->create('Category', array('action'=>'admin_add_sub_category'));
		echo $this->Form->hidden('Category.parent_id', array('value'=>$this->data['Category']['id']));
	?>
          <table>
            <tbody>
		<tr>
			<td colspan="2">
				<?php echo $this->Session->flash();?>
			</td>
		</tr>

		<tr>
			<td class="lbl150">Category Name:</td>
			<td>
				<div class="input text required">
					<?php echo $this->Form->text('Category.name', array('div'=>false, 'label'=>false, 'class'=>'tbox245 input-01 validate[required]', 'required'=>false, 'disabled')); 
					echo $this->Form->error('Category.name');?>
				</div>
			</td>
		</tr>

		<tr>
			<td class="lbl150">Sub-Category Name:</td>
			<td>
				<div class="input text required">
					<?php echo $this->Form->text('Category.name', array('div'=>false, 'label'=>false, 'class'=>'tbox245 input-01 validate[required]', 'required'=>false, 'value'=>'')); 
					echo $this->Form->error('Category.name');?>
				</div>
			</td>
		</tr>
			  
		<tr>
			<td class="lbl150">Status:</td>
			<td>
				<div class="input text required">
					<?php echo $this->Form->radio('Category.status', array('1'=>'Active', '0'=>'Inactive'), array('legend'=>false, 'default'=>'1'));?>
				</div>
			</td>
		</tr>
              
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Submit"></td>
		</tr>
            </tbody>
          </table>
          <div class="clearh"></div>
        <?php echo $this->Form->end();?>
      </div>
      <div class="clear "></div>
    </div>
  </div>