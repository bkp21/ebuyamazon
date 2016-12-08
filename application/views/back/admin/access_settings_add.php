<?php
echo form_open(base_url() . 'index.php/admin/access_settings/do_add/', array(
    'class' => 'form-horizontal',
    'method' => 'post',
    'id' => 'access_settings_add',
    'enctype' => 'multipart/form-data'
));
?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('from_IP'); ?></label>
            <div class="col-sm-9">
                <input type="text" name="from_ip" placeholder="<?php echo translate('from_ip'); ?>" class="form-control required">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="demo-hor-1">
            <?php echo translate('to_IP'); ?>
        </label>
        <div class="col-sm-9">
            <input type="text" name="to_ip" placeholder="<?php echo translate('to_ip'); ?>" class="form-control required">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="demo-hor-1">
            <?php echo translate('name'); ?>
        </label>
        <div class="col-sm-9">
            <input type="text" name="name" placeholder="<?php echo translate('name'); ?>" class="form-control required">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="demo-hor-1">
            <?php echo translate('blocked :'); ?>
        </label>
        <div class="col-sm-9">
            <select name="blocked" id="blocked" class="form-control required">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    </form>
