<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?=translate('email_settings')?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?=translate('manage_smtp_settings')?></h3>
                        </div>
                        <?php echo form_open(base_url() . 'index.php/admin/email_settings/smtp/update/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post'
                            ));
                        ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="smtp_host">
                                        <?=translate('smtp_host')?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="smtp_host" value="<?=$settings['smtp']['smtp_host']?>"
                                               id="smtp_host" class="form-control required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="smtp_port">
                                        <?=translate('smtp_port')?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="smtp_port" value="<?=$settings['smtp']['smtp_port']?>"
                                               id="smtp_port" class="form-control required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="smtp_username">
                                        <?=translate('smtp_username')?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="smtp_username"
                                               value="<?=$settings['smtp']['smtp_username']?>" id="smtp_username"
                                               class="form-control required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="smtp_password">
                                        <?=translate('smtp_password')?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="smtp_password"
                                               value="<?=$settings['smtp']['smtp_password']?>" id="smtp_password"
                                               class="form-control required">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <span class="btn btn-info submitter" data-ing='<?=translate('saving..')?>'
                                      data-msg='<?=translate('settings_saved!')?>'>
                                    <?=translate('save')?>
                                        </span>
                            </div>
                        </form>

                        <div class="panel-heading">
                            <h3 class="panel-title"><?=translate('manage_mailchimp_settings')?></h3>
                        </div>
                            <?php echo form_open(base_url() . 'index.php/admin/email_settings/mailchimp/update', array(
                                'class' => 'form-horizontal',
                                'method' => 'post'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mailchimp_api_key">
                                        <?=translate('mailchimp_api_key')?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="mailchimp_api_key"
                                               value="<?=$settings['mailchimp']['mailchimp_api_key']?>" id="mailchimp_api_key"
                                               class="form-control required">
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <span class="btn btn-info submitter"
                                      data-ing='<?=translate('saving..')?>' data-msg='<?=translate('settings_saved!')?>'
                                ><?=translate('save')?></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Panel body-->
        </div>
    </div>
</div>

