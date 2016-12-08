<?php
	foreach($all_attribute_group as $row){
?>
 
<div>
	<?php
        echo form_open(base_url() . 'index.php/admin/attribute_groups/update/' . $row['attribute_group_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'attribute_groups_edit',
            'enctype' => 'multipart/form-data'
        ));
    ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('attribute_group_name');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="attribute_group_name" value="<?php echo $row['attribute_group_name'];?>" placeholder="<?php echo translate('attribute_group_name'); ?>" class="form-control required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('sort_order');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="number" name="sort_order" min="0" value="<?php echo $row['sort_id'];?>" placeholder="<?php echo translate('sort_order'); ?>" class="form-control required">
                </div>
            </div> 
        </div>
    </form>
</div>
<?php
	}
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
	});
</script>


	
