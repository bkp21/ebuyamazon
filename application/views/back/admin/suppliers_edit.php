<?php
	foreach($all_suppliers as $row){
?>
<div>
    <?php
            echo form_open(base_url() . 'index.php/admin/suppliers/update/'.$row['suppliers_id'], array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'suppliers_edit',
                    'enctype' => 'multipart/form-data'
            ));
	?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('supplier_name');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="supplier_name" value="<?php echo $row['supplier_name']; ?>"placeholder="<?php echo translate('supplier_name'); ?>" class="form-control required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('available');?>
                    	</label>
                <div class="col-sm-9">
                    <select name="is_visible" class="demo-chosen-select required">
                        <option value="0"<?php if($row['is_visible']=='0') echo 'selected'; ?>><?php echo translate('no');?></option>
                         <option value="1"<?php if($row['is_visible']=='1') echo 'selected'; ?>><?php echo translate('yes');?></option>
                    </select>
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