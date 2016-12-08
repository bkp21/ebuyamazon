<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('user_interface_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark">
                    <?php
                    foreach ($data as $row) {
                        if ($row['type'] == 'user_interface') {
                            $user_interface = $row['value'];
                        }
                    }
                    ?>
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('manage_user_interface_settings'); ?></h3>
                    </div>
                    <?php
                    echo form_open(base_url() . 'index.php/admin/user_interface_settings/set/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post',
                        'name' => 'user_interface_settings'
                    ));
                    ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-1">
                                <?php echo translate('bulk_image_upload_user_interface :'); ?>
                            </label>
                            <div class="col-sm-6">
                                <select name="user_interface" id="user_interface" class="demo-cs-multiselect required">
                                    <option value="dropzone" <?php
                                    if ($user_interface == 'dropzone') {
                                        echo 'selected';
                                    }
                                    ?> ><?php echo translate('DropZone'); ?></option>
                                    <option value="traditional" <?php
                                    if ($user_interface == 'traditional') {
                                        echo 'selected';
                                    }
                                    ?>><?php echo translate('Traditional'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <span class="btn btn-info submitter" 
                                  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
                                      <?php echo translate('save'); ?>
                            </span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Panel body-->
</div>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'user_interface_settings';

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>

