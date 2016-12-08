<div id="content-container">
    <div id="page-title">
        <div class="smsalert smsalert-success">
            <b>
                <a href="<?php echo base_url(); ?>index.php/admin/sms_notifications">
                    <?php echo translate('sms_management'); ?>
                </a>
            </b>
            <br>
            Click the link above to setup an SMS Gateway.
        </div>
        <?php
        foreach ($provider as $row) {
            $deactive_provider = $row->sms_services_id;
        }
        if ($deactive_provider == 4):
            ?>
            <div class="alert alert-warning">
                There are no active SMS Gateways.
                <br>
                You need to activate an SMS gateway before you can send an SMS.
            </div>
<?php endif ?> 
    </div>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('send_SMS') ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark">
                    <?php
                    echo form_open(base_url() . 'index.php/admin/send_sms/send/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post'
                    ));
                    ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('provider'); ?></label>
                            <div class="col-sm-6">
                                <span  class="form-control" ><?php
                                    foreach ($provider as $row)
                                        if ($row->sms_services_id != 4):
                                            echo $row->sms_provider_name;
                                            ?> 
                                        <?php  endif ?> 
                                </span>
                                <input type="hidden" name="sms_provider" value="<?php echo $row->sms_services_id; ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('search'); ?></label>
                            <div class="col-sm-6">
                        <?php echo $this->crud_model->select_html('user', 'user_id', 'username', 'add', 'demo-chosen-select required'); ?>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('telephone_number'); ?></label>
                            <div class="col-sm-6">
                                <input type="telephone" name="telephone_number"  class="form-control required">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <label class="col-sm-3 control-label"><?php echo translate('SMS_message'); ?></label>
                            <div class="col-sm-6">
                                <textarea name="sms_msg" class="form-control required" onkeypress='javascript:document.getElementById("ch").innerHTML = 160 - this.value.length;if (this.value.length >= 160)
                                            this.value = this.value.substring(0, 160);'></textarea>
                                <br>
                                <span class="formHelp"><span id='ch'>160</span> Chars(s) Remains</span>
                            </div>
                        </div>
                    <?php if ($deactive_provider != 4): ?>
                        <div class="panel-footer text-right">
                            <span class="btn btn-info submitter"  data-ing='<?php echo translate('sending'); ?>' data-msg='<?php echo translate('sent!'); ?>'>
                        <?php echo translate('send') ?>
                            </span>
                        </div>
                        <?php endif ?> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style type="text/css">
    .smsalert {
        background-color: #fcf8e3;
        border: 1px solid #fbeed5;
        border-radius: 4px;
        margin-bottom: 20px;
        padding: 8px 35px 8px 14px;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
    }
    .smsalert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #468847;
    }
</style>
<script>
    $(document).ready(function () {
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width: '100%'});
    });

    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
</script>


