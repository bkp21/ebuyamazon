<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('vendor_admin_defaults'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'vendor_backend_access') {
                                $vendor_backend_access = $row['value'];
                            }
                            if ($row['type'] == 'frontend_access_preset') {
                                $frontend_access_preset = $row['value'];
                            }
                            if ($row['type'] == 'manage_products_categories') {
                                $manage_products_categories = $row['value'];
                            }
                            if ($row['type'] == 'manage_site_content') {
                                $manage_site_content = $row['value'];
                            }
                            if ($row['type'] == 'manage_pay_ship_tax_dis_sal') {
                                $manage_pay_ship_tax_dis_sal = $row['value'];
                            }
                            if ($row['type'] == 'manage_shipping') {
                                $manage_shipping = $row['value'];
                            }
                            if ($row['type'] == 'manage_site_users') {
                                $manage_site_users = $row['value'];
                            }
                            if ($row['type'] == 'marketing') {
                                $marketing = $row['value'];
                            }
                            if ($row['type'] == 'edit_custom_vendor_settings') {
                                $edit_custom_vendor_settings = $row['value'];
                            }
                            if ($row['type'] == 'add_edit_delete_product') {
                                $add_edit_delete_product = $row['value'];
                            }
                            if ($row['type'] == 'manage_vendor_content_pages') {
                                $manage_site_pages = $row['value'];
                            }
                            if ($row['type'] == 'manage_payments') {
                                $manage_payments = $row['value'];
                            }
                            if ($row['type'] == 'manage_taxes') {
                                $manage_taxes = $row['value'];
                            }
                            if ($row['type'] == 'manage_orders') {
                                $manage_orders = $row['value'];
                            }
                            if ($row['type'] == 'see_statistics') {
                                $see_statistics = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_vendor_admin_defaults'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/vendor_admin_defaults/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'name' => 'vendor_admin_defaults'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('vendor_backend_access_preset'); ?></h3>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('vendor_backend_access_preset'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="vendor_backend_access" class='sw1' data-set='vendor_backend_access' data-msg_enabled="<?php echo translate('vendor_backend_access_preset_enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_backend_access_preset_disabled'); ?>" type="checkbox" <?php if ($vendor_backend_access == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                               <label class="col-sm-12 control"><?php echo translate('this_setting_should_be_enabled,_if_new_vendors_should_be_able_to_access_the_administrator_backend. If_unchecked,_new_vendors_will_only_be_able_to_access_the_vendor_storefront_to_manage_their_vendor_account.'); ?>   
                                </label>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('vendor_frontend_access_preset :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="frontend_access_preset" class='sw1' data-set='frontend_access_preset' data-msg_enabled="<?php echo translate('vendor_frontend_access_preset_enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_frontend_access_preset_disabled'); ?>" type="checkbox" <?php if ($frontend_access_preset == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-12 control"><?php echo translate('this_setting_should_be_enabled,_if_new_vendors_should_be_able_to_access_the_administrator_frontend. If_unchecked,_new_vendors_will_only_be_able_to_access_the_vendor_storefront_to_manage_their_vendor_account.'); ?>   
                                </label>
                                </div>
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('administrator_privileges'); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_site_users'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_site_users" class='sw1' data-set='manage_site_users' data-msg_enabled="<?php echo translate('manage_site_users_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_site_users_disabled'); ?>" type="checkbox" <?php if ($manage_site_users == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_products_and_categories'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_products_categories" class='sw1' data-set='manage_products_categories' data-msg_enabled="<?php echo translate('manage_products_and_categories_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_products_and_categories_disabled'); ?>" type="checkbox" <?php if ($manage_products_categories == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('add/edit/delete_products,_bulk_import'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="add_edit_delete_product" class='sw1' data-set='add_edit_delete_product' data-msg_enabled="<?php echo translate('add_edit_delete_product_enabled'); ?>" data-msg_disabled="<?php echo translate('add_edit_delete_product_disabled'); ?>" type="checkbox" <?php if ($add_edit_delete_product == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_orders'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_orders" class='sw1' data-set='manage_orders' data-msg_enabled="<?php echo translate('manage_orders_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_orders_disabled'); ?>" type="checkbox" <?php if ($manage_orders == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_payment,_shipping,_taxes,_discounts,_sales'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_pay_ship_tax_dis_sal" class='sw1' data-set='manage_pay_ship_tax_dis_sal' data-msg_enabled="<?php echo translate('manage_pay_ship_tax_dis_sal_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_pay_ship_tax_dis_sal_disabled'); ?>" type="checkbox" <?php if ($manage_pay_ship_tax_dis_sal == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_payments'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_payments" class='sw1' data-set='manage_payments' data-msg_enabled="<?php echo translate('manage_payments_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_payments_disabled'); ?>" type="checkbox" <?php if ($manage_payments == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_shipping'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_shipping" class='sw1' data-set='manage_shipping' data-msg_enabled="<?php echo translate('manage_shipping_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_shipping_disabled'); ?>" type="checkbox" <?php if ($manage_shipping == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_taxes'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_taxes" class='sw1' data-set='manage_taxes' data-msg_enabled="<?php echo translate('manage_taxes_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_taxes_disabled'); ?>" type="checkbox" <?php if ($manage_taxes == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_site_content_(pages,_skins,_colors_and_files)'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_site_content" class='sw1' data-set='manage_site_content' data-msg_enabled="<?php echo translate('manage_site_content_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_site_content_disabled'); ?>" type="checkbox" <?php if ($manage_site_content == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manage_vendor_content_pages(pages)'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manage_site_pages" class='sw1' data-set='manage_vendor_content_pages' data-msg_enabled="<?php echo translate('manage_vendor_content_pages_enabled'); ?>" data-msg_disabled="<?php echo translate('manage_vendor_content_pages_disabled'); ?>" type="checkbox" <?php if ($manage_site_pages == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('marketing'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="marketing" class='sw1' data-set='marketing' data-msg_enabled="<?php echo translate('marketing_enabled'); ?>" data-msg_disabled="<?php echo translate('marketing_disabled'); ?>" type="checkbox" <?php if ($marketing == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('see_statistics'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="see_statistics" class='sw1' data-set='see_statistics' data-msg_enabled="<?php echo translate('see_statistics_enabled'); ?>" data-msg_disabled="<?php echo translate('see_statistics_disabled'); ?>" type="checkbox" <?php if ($see_statistics == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('edit_custom_vendor_settings'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="edit_global_site_settings" class='sw1' data-set='edit_custom_vendor_settings' data-msg_enabled="<?php echo translate('edit_custom_vendor_settings_enabled'); ?>" data-msg_disabled="<?php echo translate('edit_custom_vendor_settings_disabled'); ?>" type="checkbox" <?php if ($edit_custom_vendor_settings == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
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
    var module = 'vendor_admin_defaults';

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
                ajax_load(base_url + 'index.php/' + user_type + '/vendor_admin_defaults/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
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

