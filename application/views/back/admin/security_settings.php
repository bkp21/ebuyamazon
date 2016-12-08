<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('security_settings'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php

                        foreach ($data as $row) {

                            if ($row['type'] == 'security_mode') {
                                $security_mode = $row['value'];
                            }
                            if ($row['type'] == 'security_cookies') {
                                $security_cookies = $row['value'];
                            }
                            if ($row['type'] == 'security_user_timeout') {
                                $security_user_timeout = $row['value'];
                            }
                            if ($row['type'] == 'security_account_blocking') {
                                $security_account_blocking = $row['value'];
                            }
                            if ($row['type'] == 'security_account_blocking_attempts') {
                                $security_account_blocking_attempts = $row['value'];
                            }
                            if ($row['type'] == 'security_account_blocking_hours') {
                                $security_account_blocking_hours = $row['value'];
                            }
                            if ($row['type'] == 'display_clean_payment_page') {
                                $display_clean_payment_page = $row['value'];
                            }
                            if ($row['type'] == 'admin_time_out') {
                                $admin_time_out = $row['value'];
                            }
                            if ($row['type'] == 'user_ip') {
                                $user_ip = $row['value'];
                            }
                            if ($row['type'] == 'user_email_verification') {
                                $user_email_verification = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_security_settings'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/security_settings/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'id' => 'security_id'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                        <?php echo translate('Security Mode'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="security_mode" id="security_mode" class="demo-cs-multiselect required">
                                            <option value="standard" <?php if ($security_mode == 'standard') {
                                            echo 'selected';
                                        } ?> ><?php echo translate('standard'); ?></option>
                                            <option value="complete" <?php if ($security_mode == 'complete') {
                                            echo 'selected';
                                        } ?>><?php echo translate('complete'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
                                        <?php echo translate('Security Cookies Prefix :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="security_cookies" value="<?php echo $security_cookies; ?>" id="security_cookies" for="demo-hor-4" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
                                        <?php echo translate('Security User Timeout :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="number" name="security_user_timeout" value="<?php echo $security_user_timeout; ?>" id="security_user_timeout" for="demo-hor-4" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('Security Account Blocking :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="security_account_blocking" class='sw1' data-set='security_account_blocking' data-msg_enabled="<?php echo translate('security_account_blocking_enabled'); ?>" data-msg_disabled="<?php echo translate('security_account_blocking_disabled'); ?>" type="checkbox" <?php if ($security_account_blocking == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
                                        <?php echo translate('Security Account Blocking Attempts :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="number" name="security_account_blocking_attempts" value="<?php echo $security_account_blocking_attempts; ?>" id="security_account_blocking_attempts" for="demo-hor-4" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
                                        <?php echo translate(' SecurityAccountBlockingHours : '); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="security_account_blocking_hours" value="<?php echo $security_account_blocking_hours; ?>" id="security_account_blocking_hours" for="demo-hor-4" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                        <?php echo translate('Security Display Clean Payment Page :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="display_clean_payment_page" id="display_clean_payment_page" class="demo-cs-multiselect required">
                                            <option value="yes" <?php
                                            if ($display_clean_payment_page == 'yes') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('yes'); ?></option>
                                            <option value="no" <?php
                                            if ($display_clean_payment_page == 'no') {
                                                echo 'selected';
                                            }
                                            ?>><?php echo translate('No'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('Security Admin Time Out :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <?php
                                        $from = array('15', '30', '60', '120', '240');
                                        echo $this->crud_model->select_html($from, 'admin_time_out', '', 'edit', 'demo-chosen-select', $admin_time_out);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                        <?php echo translate('Log User IP :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="user_ip" id="user_ip" class="demo-cs-multiselect required">
                                            <option value="yes" <?php
                                            if ($user_ip == 'yes') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('yes'); ?></option>
                                            <option value="no" <?php if ($user_ip == 'no') {
                                            echo 'selected';
                                        } ?>><?php echo translate('No'); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                    <?php echo translate(' User eMail Verification required :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="user_email_verification" id="user_email_verification" class="demo-cs-multiselect required">
                                            <option value="yes" <?php
                                            if ($user_email_verification == 'yes') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('yes'); ?></option>
                                            <option value="no" <?php
                                            if ($user_email_verification == 'no') {
                                                echo 'selected';
                                            }
                                            ?>><?php echo translate('no'); ?></option>
                                        </select>
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
</div>    

<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var user_type = 'admin';
	var module = 'security_settings';
	
	$(document).ready(function() {

     $(".sw1").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				var msg_enabled = h.data('msg_enabled');
				var msg_disabled = h.data('msg_disabled');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/security_settings/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : msg_enabled,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : msg_disabled,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //activate/inactive subscribed_products
				};
			});
                      
                        	});
</script>
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
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

