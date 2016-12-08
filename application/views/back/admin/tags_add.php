<div>
    <?php
		echo form_open(base_url() . 'index.php/admin/manage_tags/do_add/', array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'tags_add',
			'enctype' => 'multipart/form-data'
		));
	?>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-4"><?php echo translate('tag_code'); ?></label>
                    <div class="col-sm-6">
                        <input type="text" name="tag_code" value="<?php echo $tag_code; ?>"  for="demo-hor-4" placeholder="<?php echo translate('tag_code'); ?>" class="form-control required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('tag_name');?></label>
                    <div class="col-sm-6">
                        <input type="text" name="tag_name" placeholder="<?php echo translate('tag_name'); ?>" class="form-control required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-4">
                        <?php echo translate('active'); ?>
                    </label>
                    <div class="col-sm-6">
                        <select name="status" id="status" class="demo-cs-multiselect required">
                            <option value="no"><?php echo translate('no'); ?></option>
                            <option value="yes"><?php echo translate('yes'); ?></option>
                        </select>
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