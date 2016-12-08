<?php
	foreach($all_attributes as $row){
?>
 
<div>
	<?php
        echo form_open(base_url() . 'index.php/admin/attributes/update/' . $row['attribute_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'attributes_edit',
            'enctype' => 'multipart/form-data'
        ));
    ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                	<?php echo translate('attribute_name');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="attribute_name" value="<?php echo $row['attribute_name'];?>" class="form-control required" placeholder="<?php echo translate('attribute_name'); ?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"><?php echo translate('attribute_group_name');?></label>
                <div class="col-sm-9">    
                        <select name="attribute_group_id" class="demo-chosen-select required">  
                            <option value="">Choose one</option>
                            <?php foreach($all_attribute_group as $each){ ?>
                                <option value="<?php echo $each['attribute_group_id']; ?>" <?php
                                        if ($row['attribute_group_id'] == $each['attribute_group_id']) {
                                            echo 'selected';
                                        }
                                        ?>><?php echo $each['attribute_group_name']; ?>
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
                    <input type="number" min="0" name="sort_order" value="<?php echo $row['sort_order']; ?>" placeholder="<?php echo translate('sort_order'); ?>" class="form-control required">
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
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
    });


	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
	});
</script>

	
