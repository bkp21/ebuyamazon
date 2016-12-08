<div>
    <?php
    echo form_open(base_url() . 'index.php/admin/vendor_badges_awards/do_add/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'vendor_badges_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('badge_name'); ?>
            </label>
            <div class="col-sm-9">
                <input type="text" name="badge_name" id="demo-hor-1" 
                       class="form-control required" placeholder="<?php echo translate('badge_name'); ?>" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-2"><?php echo translate('badge_logo'); ?></label>
            <div class="col-sm-9">
                <span class="pull-left btn btn-default btn-file">
                    <?php echo translate('select_bagde_logo'); ?>
                    <input type="file" name="img" id='imgInp' accept="image">
                </span>
                <br><br>
                <span id='wrap' class="pull-left" >
                    <img src="<?php echo base_url(); ?>uploads/others/photo_default.png" 
                         width="48.5%" id='blah' > 
                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-3">
                <?php echo translate('active'); ?>
            </label>
            <div class="col-sm-9">
                <select name="active" class="form-control demo-chosen-select">
                    <option value="0"><?php echo translate('no')?></option>
                    <option value="1"><?php echo translate('yes')?></option>
                </select>
            </div>
        </div>

    </div>
</form>
</div>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
<script>
    $(document).ready(function() {
	$('.demo-cs-multiselect').chosen();
	$('.demo-chosen-select').chosen({
		width: '100%'
	});
}); 
</script>
