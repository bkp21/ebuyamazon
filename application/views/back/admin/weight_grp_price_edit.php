<?php
	foreach($all_weight_price as $row){
?>
<div>
            <?php
            echo form_open(base_url() . 'index.php/admin/add_new_group/update1/' . $row['id'], array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'weight_grp_price_edit',
                'enctype' => 'multipart/form-data'
            ));
            ?>
            <div class="panel-body">          
            <div class="form-group">
                <label class="col-sm-3 control-label"><?php echo translate('group_name');?></label>
                <div class="col-sm-6">    
                        <select name="weight_grp" class="demo-chosen-select">  
                            <option value="">Choose one</option>
                            <?php foreach($all_weight_grp as $each){ ?>
                                <option value="<?php echo $each['weight_group_id']; ?>"<?php
                                        if ($row['weight_group_id'] == $each['weight_group_id']) {
                                            echo 'selected';
                                        }
                                        ?>><?php echo $each['group_name']; ?>
                                </option>;
                            <?php } ?>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('min_weight');?>
                    	</label>
                <div class="col-sm-6">
                    <input type="number" min='0' step='.001' name="min_weight" value="<?php echo $row['min_weight']; ?>"  placeholder="<?php echo translate('min_weight'); ?>" class="form-control required">
                </div>
                <label><?php echo translate('kg');?></label>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('max_weight');?>
                    	</label>
                <div class="col-sm-6">
                    <input type="number" min='0' step='.001' name="max_weight" value="<?php echo $row['max_weight']; ?>" placeholder="<?php echo translate('max_weight'); ?>" class="form-control required">
                </div>
                <label><?php echo translate('kg');?></label>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('price');?>
                    	</label>
                <div class="col-sm-6">
                    <input type="number" min='0' step='.001' name="price" value="<?php echo $row['price']; ?>" placeholder="<?php echo translate('price'); ?>" class="form-control required">
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