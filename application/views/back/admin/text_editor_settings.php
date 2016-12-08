<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('text_editor_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'system_text_editor') {
                                $system_text_editor = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_text_editor_settings'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/text_editor_settings/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'name' => 'text_editor_settings'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                        <?php echo translate('system_text_editor :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="system_text_editor" id="system_text_editor" class="demo-cs-multiselect required">
                                            <option value="ckeditor" <?php
                                            if ($system_text_editor == 'ckeditor') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('ckeditor'); ?></option>
                                            <option value="ckeditor_intl" <?php
                                            if ($system_text_editor == 'ckeditor_intl') {
                                                echo 'selected';
                                            }
                                            ?>><?php echo translate('ckeditor_intl'); ?></option>
                                            <option value="tinymce" <?php
                                                    if ($system_text_editor == 'tinymce') {
                                                        echo 'selected';
                                                    }
                                                    ?> ><?php echo translate('tinymce'); ?></option>
                                            <option value="tinymce4" <?php
                                            if ($system_text_editor == 'tinymce4') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('tinymce4'); ?></option>
                                            <option value="nicedit" <?php
                                            if ($system_text_editor == 'nicedit') {
                                                echo 'selected';
                                            }
                                            ?>><?php echo translate('nicedit'); ?></option>
                                            <option value="openwysiwyg" <?php
                                            if ($system_text_editor == 'openwysiwyg') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('openwysiwyg'); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <span class="btn btn-info submitter" 
                                      data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
                                    <?php echo translate('save'); ?>
                                </span>
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
    var module = 'text_editor_settings';
</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>

