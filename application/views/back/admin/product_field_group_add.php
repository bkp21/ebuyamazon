<div>
    <?php
            echo form_open(base_url() . 'index.php/admin/product_field_group/do_add/', array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'product_field_group_add',
                    'enctype' => 'multipart/form-data'
            ));
	?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('vendor');?></label>
                <div class="col-sm-9">
                    <select name="vendor" class="demo-cs-multiselect control">
                        <option value="0"><?php echo translate('all');?></option> 
                    <?php
                        foreach ($all_vendor as $vendor)
                        {
                    ?>
                        <option value="<?php echo $vendor['vendor_id']; ?>">
                            <?php echo $vendor['name']; ?>
                        </option>
                    <?php   
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('group_name');?>
                </label>
                <div class="col-sm-9">
                    <input type="text" name="group_name" placeholder="<?php echo translate('group_name'); ?>" class="form-control required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('default_group_fieldset ');?>
                </label>
                <div class="col-sm-9">
                    <input type="checkbox" id="chkdwn2" name="group_field" value="1" onchange="selcted_hidden(this.value);" >
                    <input type='hidden' id="chkhidden" value='0' name='group_field'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('categories');?>
                </label>
                <div class="col-sm-9">
                    <select id="dropdown" name="category[]"  class="demo-cs-multiselect form-control" multiple>
                            <?php
                                foreach ($all_category as $category)
                                {
                            ?>
                                <option value="<?php echo $category['category_id']; ?>">
                                    <?php echo $category['category_name']; ?>
                                </option>
                            <?php   
                                }
                            ?>
                    </select>
					<input type='text' disabled id="temp_div" class="form-control" value="Select Some Options" style="display:none" />
                </div>
            </div>
        </div>
	</form>
        
</div>
<script>
    $(document).ready(function() {
		$("#chkdwn2").change(function() {
			if(this.checked){
				$('#dropdown_chosen').css({'display':'none'});
				$('#temp_div').css({'display':'block'});
				document.getElementById('dropdown').value='';
                                document.getElementById('chkhidden').disabled = true;
			}else{
				$('#dropdown_chosen').css({'display':'block'});
				$('#temp_div').css({'display':'none'});
                                 document.getElementById('chkhidden').disabled = false;
			} 
		}) 
});
</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
