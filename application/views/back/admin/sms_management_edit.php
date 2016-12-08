<?php
foreach ($all_sms_services as $row) {
    ?>
    <div class="row">
        <div class="col-md-12">
            <?php
            echo form_open(base_url() . 'index.php/admin/sms_notifications/update/' . $row['sms_services_id'], array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'sms_management_edit',
                'enctype' => 'multipart/form-data'
            ));
            ?>
            <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1">
                                    <?php echo translate('selected_SMS_gateway '); ?>
                                </label>
                                <div class="col-sm-6">
                                    <?php echo $row['sms_gateway']; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('name'); ?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="provider_name" value="<?php echo $row['sms_provider_name']; ?>" id="demo-hor-1" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('URL_to_gateway'); ?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="url_gateway" value="<?php echo $row['url_to_gateway']; ?>" id="demo-hor-1" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('protocol'); ?></label>
                                <div class="col-sm-6">
                                    <select name="protocol" class="demo-cs-multiselect">
                                        <option value="HTTP" <?php
                                        if ($row['sms_protocol'] == 'HTTP') {
                                            echo 'selected';
                                        }
                                        ?> >
                                        <?php echo translate('HTTP'); ?>
                                        </option>
                                        <option value="HTTPS" <?php
                                                    if ($row['sms_protocol'] == 'HTTPS') {
                                                        echo 'selected';
                                                    }
                                                    ?> >
                                            <?php echo translate('HTTPS'); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('username'); ?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" id="demo-hor-1" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('password'); ?></label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" value="<?php echo $row['password']; ?>" id="demo-hor-1" class="form-control ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('api_id'); ?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="api_id" value="<?php echo $row['api_id']; ?>" id="demo-hor-1" class="form-control ">
                                </div>
                            </div>
                            </div>
             
             </div>

    <?php
}
?>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
