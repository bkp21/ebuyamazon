<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('proxy_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'proxy_available') {
                                $proxy_available = $row['value'];
                            }
                            if ($row['type'] == 'proxy_type') {
                                $proxy_type = $row['value'];
                            }
                            if ($row['type'] == 'proxy_address') {
                                $proxy_address = $row['value'];
                            }
                            if ($row['type'] == 'proxy_port') {
                                $proxy_port = $row['value'];
                            }
                            if ($row['type'] == 'proxy_authorization') {
                                $proxy_authorization = $row['value'];
                            }
                            if ($row['type'] == 'proxy_username') {
                                $proxy_username = $row['value'];
                            }
                            if ($row['type'] == 'proxy_password') {
                                $proxy_password = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate('manage_proxy_settings'); ?></h3>
                        </div>
                        <?php
                        echo form_open(base_url() . 'index.php/admin/proxy_settings/update/', array(
                            'class' => 'form-horizontal',
                            'method' => 'post',
                            'name' => 'proxy_settings'
                        ));
                        ?>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-1">
                                    <?php echo translate('proxy_available :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <select name="proxy_available" id="proxy_available" class="demo-cs-multiselect required">
                                        <option value="yes" <?php if ($proxy_available == 'yes') {
                                        echo 'selected';
                                    } ?> ><?php echo translate('yes'); ?></option>
                                        <option value="no" <?php if ($proxy_available == 'no') {
                                        echo 'selected';
                                    } ?>><?php echo translate('no'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-1">
                                    <?php echo translate('proxy_type :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <select name="proxy_type" id="proxy_type" class="demo-cs-multiselect required">
                                        <option value="http" <?php
                                        if ($proxy_type == 'http') {
                                            echo 'selected';
                                        }
                                        ?> ><?php echo translate('http'); ?></option>
                                        <option value="scocks5" <?php
                                        if ($proxy_type == 'scocks5') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo translate('scocks5'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-4">
                                    <?php echo translate('proxy_address :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" name="proxy_address" value="<?php echo $proxy_address; ?>" id="proxy_address" for="demo-hor-4" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-4">
                                    <?php echo translate('Proxy Port :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <input type="number" name="proxy_port" value="<?php echo $proxy_port; ?>" id="proxy_port" for="demo-hor-4" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-1">
                                    <?php echo translate('proxy_requires_authorization :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <select name="proxy_authorization" id="proxy_authorization" class="demo-cs-multiselect required">
                                        <option value="yes" <?php
                                        if ($proxy_authorization == 'yes') {
                                            echo 'selected';
                                        }
                                        ?> ><?php echo translate('yes'); ?></option>
                                        <option value="no" <?php
                                        if ($proxy_authorization == 'no') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo translate('no'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-4">
                                    <?php echo translate('proxy_username :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" name="proxy_username" value="<?php echo $proxy_username; ?>" id="proxy_username" for="demo-hor-4" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-4">
                                    <?php echo translate('proxy_password :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <input type="password" name="proxy_password" value="<?php echo $proxy_password; ?>" id="proxy_password" for="demo-hor-4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success btn-save submitter" data-ing='<?php echo translate('updating..'); ?>' data-msg='<?php echo translate('form_settings_updated!'); ?>' type="submit"><?php echo translate('save_settings'); ?></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Panel body-->
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'proxy_settings';

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

