<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('veratad_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        $activate_veratad = '';
                        $veratad_username = '';
                        $veratad_password = '';
                        foreach ($data as $row1) {
                        $activate_veratad = $row1['activate_veratad'];
                        $veratad_username = $row1['veratad_username'];
                        $veratad_password = $row1['veratad_password'];
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_veratad_settings'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/veratad_settings/update/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'name' => 'veratad_settings'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                        <?php echo translate('activate_veratad:'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="activate_veratad" id="activate_veratad" class="demo-cs-multiselect required">
                                            <option value="yes" <?php if ($activate_veratad == 'yes') {
                                            echo 'selected';
                                        } ?> ><?php echo translate('yes'); ?></option>
                                            <option value="no" <?php if ($activate_veratad == 'no') {
                                            echo 'selected';
                                        } ?>><?php echo translate('no'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
                                        <?php echo translate('veratad_user:'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="veratad_username" value="<?php echo $veratad_username; ?>" id="veratad_username" for="demo-hor-4" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
                                    <?php echo translate('veratad_password :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="password" name="veratad_password" value="<?php echo $veratad_password; ?>" id="veratad_password" for="demo-hor-4" class="form-control">
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
            </div>
            <!--Panel body-->
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'veratad_settings';

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

