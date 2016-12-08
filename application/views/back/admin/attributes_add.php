<div>
    <?php
		echo form_open(base_url() . 'index.php/admin/attributes/do_add/', array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'attributes_add',
			'enctype' => 'multipart/form-data'
		));
	?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('attribute_name');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="attribute_name" placeholder="<?php echo translate('attribute_name'); ?>" class="form-control required">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label"><?php echo translate('attribute_group_name');?></label>
                <div class="col-sm-9">    
                        <select name="attribute_group_id" class="demo-chosen-select required">  
                            <option value="">Choose one</option>
                            <?php foreach($all_attribute_group as $each){ ?>
                                <option value="<?php echo $each['attribute_group_id']; ?>"><?php echo $each['attribute_group_name']; ?>
                                </option>;
                            <?php } ?>
                        </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('sort_order');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="number" name="sort_order" min="0" placeholder="<?php echo translate('sort_order'); ?>" class="form-control required">
                </div>
            </div> 
        </div>
	</form>
</div>

<script>
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
<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

