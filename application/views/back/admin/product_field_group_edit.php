<?php
	foreach($all_group_data as $row){
?>
 
<div>
	<?php
        echo form_open(base_url() . 'index.php/admin/product_field_group/update/' . $row['product_field_group_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'product_field_group_edit',
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
                        <option value="<?php echo $vendor['vendor_id']; ?>" <?php
                                        if ($row['vendor_id'] == $vendor['vendor_id']) {
                                            echo 'selected';
                                        }
                                        ?>>
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
                    <input type="text" name="group_name" value="<?php echo $row['group_name']; ?>"placeholder="<?php echo translate('group_name'); ?>" class="form-control required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('default_group_fieldset ');?>
                </label>
                <div class="col-sm-9">
                    <input type="checkbox" name="group_field" id="chkdwn2" value="1"<?php if($row['is_default']=='1'){ echo 'checked'; } ?>>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('categories');?>
                </label>
                <div class="col-sm-9">
                    <select id="dropdown" name="category[]"  class="demo-cs-multiselect form-control" multiple>
                            <?php
                                $cat_id = json_decode($row['category_id']); 
                                foreach ($all_category as $category)
                                {  
                            ?>
                                <option value="<?php echo $category['category_id']; ?>"<?php
                                     if($row['category_id']=='null'){echo '';}elseif(in_array($category['category_id'],$cat_id)){ echo 'selected'; } ?>>
                                    <?php echo $category['category_name']; ?>
                                </option>
                            <?php
                               } 
                            ?>
                    </select>
					<input type='text' disabled id="temp_div" class="form-control" value="Select Some Options" style="<?php if($row['category_id']=='null'){echo "display:block";}else{echo "display:none";}?>" />
                </div>
            </div>
        </div>
       </form>
</div>
<?php
	}
?>
<script>
		
    $(document).ready(function() {
		$('.bootbox').on('shown.bs.modal', function (e) {
			<?php if($row['category_id']=='null'){?>
				$('#dropdown_chosen').css({'display':'none'});
			<?php	
			}?>
		  // do cool stuff here all day� no need to change bootstrap
		});
		$("#chkdwn2").change(function() {
			if(this.checked){
				$('#dropdown_chosen').css({'display':'none'});
				$('#temp_div').css({'display':'block'});
				document.getElementById('dropdown').value='';				
			}else{
				$('#dropdown_chosen').css({'display':'block'});
				$('#temp_div').css({'display':'none'});
			} 
		}) 
});

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
