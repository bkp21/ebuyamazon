<?php
	foreach($sub_category_data as $row){
?>
 
<div>
	<?php
        echo form_open(base_url() . 'index.php/admin/sub_category/update/' . $row['sub_category_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'sub_category_edit',
            'enctype' => 'multipart/form-data'
        ));
    ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                	<?php echo translate('sub-category_name');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="sub_category_name" value="<?php echo $row['sub_category_name'];?>" class="form-control required" placeholder="<?php echo translate('sub-category_name'); ?>" >
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-3 control-label"><?php echo translate('category');?></label>
                <div class="col-sm-9">
                    <?php echo $this->crud_model->select_html('category','category_id','category_name','edit','demo-chosen-select required',$row['category_id']); ?>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('meta_title');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="meta_title" id="meta_title"  value="<?php echo $row['meta_title'];?>"
                    	class="form-control required" placeholder="<?php echo translate('meta_title');?>" >
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('meta_keywords');?>
                    	</label>
                <div class="col-sm-9">
                   <textarea name="meta_keywords" id="meta_keywords" class="form-control required" placeholder="<?php echo translate('meta_keywords');?>"><?php echo $row['meta_keywords'];?></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('meta_description');?>
                    	</label>
                <div class="col-sm-9">
                   <textarea name="meta_description" id="meta_description" class="form-control required" placeholder="<?php echo translate('meta_description');?>"><?php echo $row['meta_description'];?></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('is_active');?>
                    	</label>
                <div class="col-sm-9">
                    <select name="is_active" id="is_active" class="form-control required">
                    	<option value="1">Yes</option>
                    	<option value="0">No</option>
                    </select>
                </div>
            </div>
            
			<div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('sub_category_icon');?>
                    	</label>
                <div class="col-sm-9">
                   <input type="file" id="sub_category_icon" name="sub_category_icon">
                </div>
            </div>            

        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
    });


	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
	});
</script>

<?php
	}
?>
	
