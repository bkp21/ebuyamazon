<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('vendor_order_cart_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'show_home_page') {
                                $show_home_page = $row['value'];
                            }
                            if ($row['type'] == 'upload_logo_products_limit') {
                                $upload_logo_products_limit = $row['value'];
                            }
                            if ($row['type'] == 'publish_multiple_products') {
                                $publish_multiple_products = $row['value'];
                            }
                            if ($row['type'] == 'captcha_verification') {
                                $captcha_verification = $row['value'];
                            }
                            if ($row['type'] == 'password_strength_meter') {
                                $password_strength_meter = $row['value'];
                            }
                            if ($row['type'] == 'vendor_email_confirmation') {
                                $vendor_email_confirmation = $row['value'];
                            }
                            if ($row['type'] == 'vendor_commision_percent') {
                                $vendor_commision_percent = $row['value'];
                            }
                            if ($row['type'] == 'secondary_images') {
                                $secondary_images = $row['value'];
                            }
                            if ($row['type'] == 'vendor_commision_amount') {
                                $vendor_commision_amount = $row['value'];
                            }
                            if ($row['type'] == 'minimum_vendor_product_price') {
                                $minimum_vendor_product_price = $row['value'];
                            }
                            if ($row['type'] == 'product_image_required') {
                                $product_image_required = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_vendor_order_cart_settings'); ?></h3>
                            </div>
                                <?php
                                echo form_open(base_url() . 'index.php/admin/vendor_order_cart_settings/set/', array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'name' => 'wholesale_settings'
                                ));
                                ?>
                             <div class="panel-body">

                                <div class="form-group">									
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate(' Vendors can set products to show at the home page :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="show_home_page" class='sw1' data-set='show_home_page' data-msg_enabled="<?php echo translate('vendors_set_products_show_home_page_enabled'); ?>" data-msg_disabled="<?php echo translate('vendors_set_products_show_home_page_disabled'); ?>" type="checkbox" <?php if ($show_home_page == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('set_the_upload_limit_for_vendor_logos_and_products :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="upload_logo_products_limit" value="<?php echo $upload_logo_products_limit; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('allow_vendors_to_publish_ products_to_multiple_categories :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="publish_multiple_products" class='sw1' data-set='publish_multiple_products' data-msg_enabled="<?php echo translate('allow_vendors_publish_products_to_multiple_categories_enabled'); ?>" data-msg_disabled="<?php echo translate('allow_vendors_publish_products_to_multiple_categories_disabled'); ?>" type="checkbox" <?php if ($publish_multiple_products == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('use_captcha_verfification_when_registering :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="captcha_verification" class='sw1' data-set='captcha_verification' data-msg_enabled="<?php echo translate('captcha_verification_register_enabled'); ?>" data-msg_disabled="<?php echo translate('captcha_verification_register_disabled'); ?>" type="checkbox" <?php if ($captcha_verification == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('display_password_strength_meter :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="password_strength_meter" class='sw1' data-set='password_strength_meter' data-msg_enabled="<?php echo translate('display_password_strength_meter_enabled'); ?>" data-msg_disabled="<?php echo translate('display_password_strength_meter_disabled'); ?>" type="checkbox" <?php if ($password_strength_meter == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('vendor_email_confirmation_necessary :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="vendor_email_confirmation" class='sw1' data-set='vendor_email_confirmation' data-msg_enabled="<?php echo translate('vendor_email_confirmation_enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_email_confirmation_disabled'); ?>" type="checkbox" <?php if ($vendor_email_confirmation == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('default_vendor_commission_per_item_(PERCENT) :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="percentage" name="vendor_commision_percent" value="<?php echo $vendor_commision_percent; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('max. vendor_secondary_images_for_products :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="percentage" name="secondary_images" value="<?php echo $secondary_images; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('default_vendor_commission_per_item_(AMOUNT) :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="number_format" name="vendor_commision_amount" value="<?php echo $vendor_commision_amount; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('minimum_vendor_product_price :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="number" name="minimum_vendor_product_price" value="<?php echo $minimum_vendor_product_price; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">									
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('product_image_required for_vendor_products :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="product_image_required" class='sw1' data-set='product_image_required' data-msg_enabled="<?php echo translate('product_image_required_vendor_products_enabled'); ?>" data-msg_disabled="<?php echo translate('product_image_required_vendor_products_disabled'); ?>" type="checkbox" <?php if ($product_image_required == 'ok') { ?>checked<?php } ?> />
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
            <!--Panel body-->
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'vendor_order_cart_settings';

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
                ajax_load(base_url + 'index.php/' + user_type + '/vendor_order_cart_settings/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
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
<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>

