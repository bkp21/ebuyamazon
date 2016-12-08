<?php
echo form_open(base_url() . 'index.php/admin/email_management/import_email/', array(
    'class' => 'form-horizontal',
    'method' => 'post',
    'id' => 'import_subscriber_email',
    'enctype' => 'multipart/form-data'
));
?>
<h4 class="modal-title text-center padd-all"><?php echo translate('import_subscriber_email_addresses'); ?> </h4>
<hr style="margin: 10px 0 !important;">       
<div class="panel-body">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif ?>
    <?php if (validation_errors()): ?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
    <?php endif ?>
    <div class="form-group">
        <label class="col-sm-4 control-label" for="demo-hor-1">
            <?php echo translate('please_choose_import_format'); ?>
        </label>                
        <div class="col-sm-6">
            <select name="import_format" class="form-control">
                <option value="comma_seprated">Comma-separated emails</option>
                <option value="per_line">Email address per line</option>
                <option value="semicolon_seprated">Semicolon-separated emails</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label" for="demo-hor-1">
            <?php echo translate('paste_email_addresses_here'); ?>
        </label>
        <div class="col-sm-6">
            <textarea name="subscriber_email" id="subscriber_email" class="form-control required"></textarea>
        </div>
    </div>
</div>
                    <div class="panel-footer text-right">
                        <span class="btn btn-purple submitter" 
                        	data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('imported_successfully!'); ?>' >
								<?php echo translate('save');?>
                        </span>
                    </div>
<!--<div class="panel-footer text-right">
    <div class="form-group">
        <button class="btn btn-success" type="submit">Save Changes</button>
    </div>
</div>-->
</form>

