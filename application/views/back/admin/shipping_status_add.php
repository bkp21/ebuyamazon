<div>
    <?php
		echo form_open(base_url() . 'index.php/admin/shipping_statuses/do_add/', array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'shipping_status_add',
			'enctype' => 'multipart/form-data'
		));
	?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('title');?>
                </label>
                <div class="col-sm-9">
                    <input type="text" name="shipping_title" placeholder="<?php echo translate('shipping_status_title'); ?>" class="form-control required">
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
