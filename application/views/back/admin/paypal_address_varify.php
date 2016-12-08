<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('paypal_address_verify'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            foreach ($data as $row) {
                if ($row['type'] == 'username') {
                    $username = $row['value'];
                }
                if ($row['type'] == 'password') {
                    $password = $row['value'];
                }
                if ($row['type'] == 'signature') {
                    $signature = $row['value'];
                }
                if ($row['type'] == 'url_to_gateway') {
                    $url_to_gateway = $row['value'];
                }
                if ($row['type'] == 'paypal_test_mode') {
                    $paypal_test_mode = $row['value'];
                }
                if ($row['type'] == 'street_match') {
                    $street_match = $row['value'];
                }
                if ($row['type'] == 'zip_match') {
                    $zip_match = $row['value'];
                }
                if ($row['type'] == 'vendor_signup_address_verify') {
                    $vendor_signup_address_verify = $row['value'];
                }
            }
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark">
                    <?php
                    echo form_open(base_url() . 'index.php/admin/paypal_address_varify/set/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post'
                    ));
                    ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="demo-hor-4"><?php echo translate('username_:'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="username" value="<?php echo $username; ?>" id="username" for="demo-hor-4" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="demo-hor-4"><?php echo translate('password_:'); ?></label>
                            <div class="col-sm-6">
                                <input type="password" name="password" value="<?php echo $password; ?>" id="password" for="demo-hor-4" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="demo-hor-4">
                                <?php echo translate('signature_:'); ?>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="signature" value="<?php echo $signature; ?>" id="signature" for="demo-hor-4" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="demo-hor-4">
                                <?php echo translate('url_to_gateway_:'); ?>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="url_to_gateway" value="<?php echo $url_to_gateway; ?>" id="url_to_gateway" for="demo-hor-4" class="form-control">
                            </div>
                        </div>	

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('select_test_mode,_if_you_want_to_test_address_verify_in_the_sandbox_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="paypal_test_mode" class='sw1' data-set='paypal_test_mode' data-msg_enabled="<?php echo translate('paypal_test_mode_enabled'); ?>" data-msg_disabled="<?php echo translate('paypal_test_mode_disabled'); ?>" type="checkbox" <?php if ($paypal_test_mode == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('street_match_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="street_match" class='sw1' data-set='street_match' data-msg_enabled="<?php echo translate('street_match_enabled'); ?>" data-msg_disabled="<?php echo translate('street_match_disabled'); ?>" type="checkbox" <?php if ($street_match == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('zip_match_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="zip_match" class='sw1' data-set='zip_match' data-msg_enabled="<?php echo translate('zip_match_enabled'); ?>" data-msg_disabled="<?php echo translate('zip_match_disabled'); ?>" type="checkbox" <?php if ($zip_match == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('vendor_signup_address_verify_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="vendor_signup_address_verify" class='sw1' data-set='vendor_signup_address_verify' data-msg_enabled="<?php echo translate('vendor_signup_address_verify__enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_signup_address_verify__disabled'); ?>" type="checkbox" <?php if ($vendor_signup_address_verify == 'ok') { ?>checked<?php } ?> />
                                </div>
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
</div>
<script>
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'paypal_address_varify';
    $(document).ready(function () {
        $(".sw1").each(function () {
            var h = $(this);
            var id = h.attr('id');
            var set = h.data('set');
            var msg_enabled = h.data('msg_enabled');
            var msg_disabled = h.data('msg_disabled');
            new Switchery(document.getElementById(id), {color: 'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
            var changeCheckbox = document.querySelector('#' + id);
            changeCheckbox.onchange = function () {
                ajax_load(base_url + 'index.php/' + user_type + '/paypal_address_varify/' + set + '/' + changeCheckbox.checked);
                if (changeCheckbox.checked == true) {
                    $.activeitNoty({
                        type: 'success',
                        icon: 'fa fa-check',
                        message: msg_enabled,
                        container: 'floating',
                        timer: 3000
                    });
                    sound('published');
                } else {
                    $.activeitNoty({
                        type: 'danger',
                        icon: 'fa fa-check',
                        message: msg_disabled,
                        container: 'floating',
                        timer: 3000
                    });
                    sound('unpublished');
                }
                //activate/inactive subscribed_products
            };
        });
    });

</script>

