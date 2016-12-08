<div>
    <?php
		echo form_open(base_url() . 'index.php/admin/banned_ip/do_add/', array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'banned_ip_add',
			'enctype' => 'multipart/form-data'
		));
    ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('IP');?>
                    	</label>
                <div class="col-sm-9">
                    <input type="text" name="ip_address" id="demo-hor-1" 
                    	class="form-control required" placeholder="<?php echo translate('ip_address');?>" >
                </div>
            </div>
        </div>
	</form>
</div>
<script>
	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
	});
</script>