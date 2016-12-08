<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('vendor_admin_customization'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'all_elements') {
                                $all_elements = $row['value'];
                            }
                            if ($row['type'] == 'statistics_tab') {
                                $statistics_tab = $row['value'];
                            }
                            if ($row['type'] == 'orders_status') {
                                $orders_status = $row['value'];
                            }
                            if ($row['type'] == 'sales_status') {
                                $sales_status = $row['value'];
                            }
                            if ($row['type'] == 'recent_orders_tab') {
                                $recent_orders_tab = $row['value'];
                            }
                            if ($row['type'] == 'last_users_tab') {
                                $last_users_tab = $row['value'];
                            }
                            if ($row['type'] == 'users_status') {
                                $users_status = $row['value'];
                            }
                            if ($row['type'] == 'quicklink_boxes') {
                                $quicklink_boxes = $row['value'];
                            }
                            if ($row['type'] == 'multivendor_all_elements') {
                                $multivendor_all_elements = $row['value'];
                            }
                            if ($row['type'] == 'vendor_statistics') {
                                $vendor_statistics = $row['value'];
                            }
                            if ($row['type'] == 'vendor_payments') {
                                $vendor_payments = $row['value'];
                            }
                            if ($row['type'] == 'fee_statistics') {
                                $fee_statistics = $row['value'];
                            }
                            if ($row['type'] == 'user_all_elements') {
                                $user_all_elements = $row['value'];
                            }
                            if ($row['type'] == 'mail_chimp') {
                                $mail_chimp = $row['value'];
                            }
                            if ($row['type'] == 'product_all_elements') {
                                $product_all_elements = $row['value'];
                            }
                            if ($row['type'] == 'search_by_status') {
                                $search_by_status = $row['value'];
                            }
                            if ($row['type'] == 'search_by_category') {
                                $search_by_category = $row['value'];
                            }
                            if ($row['type'] == 'search_sort_by') {
                                $search_sort_by = $row['value'];
                            }
                            if ($row['type'] == 'product_subtype_all_elements') {
                                $product_subtype_all_elements = $row['value'];
                            }
                            if ($row['type'] == 'normal') {
                                $normal = $row['value'];
                            }
                            if ($row['type'] == 'subscribe') {
                                $subscribe = $row['value'];
                            }
                            if ($row['type'] == 'music') {
                                $music = $row['value'];
                            }
                            if ($row['type'] == 'order_all_elements') {
                                $order_all_elements = $row['value'];
                            }
                            if ($row['type'] == 'search_by_order_status') {
                                $search_by_order_status = $row['value'];
                            }
                            if ($row['type'] == 'search_by_order_period') {
                                $search_by_order_period = $row['value'];
                            }
                            if ($row['type'] == 'manual_order') {
                                $manual_order = $row['value'];
                            }
                            if ($row['type'] == 'search_by_payment_status') {
                                $search_by_payment_status = $row['value'];
                            }
                            if ($row['type'] == 'statistics_all_elements') {
                                $statistics_all_elements = $row['value'];
                            }
                            if ($row['type'] == 'charts') {
                                $charts = $row['value'];
                            }
                            if ($row['type'] == 'reports') {
                                $reports = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_vendor_admin_customization'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/vendor_admin_customization/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'name' => 'vendor_admin_customization'
                            ));
                            ?>

                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('admin_home_page'); ?></h3>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="all_elements" class='sw1' data-set='all_elements' data-msg_enabled="<?php echo translate('all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('all_elements_disabled'); ?>" type="checkbox" <?php if ($all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('recent_orders_tab'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="recent_orders_tab" class='sw1' data-set='recent_orders_tab' data-msg_enabled="<?php echo translate('recent_orders_tab_enabled'); ?>" data-msg_disabled="<?php echo translate('recent_orders_tab_disabled'); ?>" type="checkbox" <?php if ($recent_orders_tab == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('statistics_tab'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="statistics_tab" class='sw1' data-set='statistics_tab' data-msg_enabled="<?php echo translate('statistics_tab_enabled'); ?>" data-msg_disabled="<?php echo translate('statistics_tab_disabled'); ?>" type="checkbox" <?php if ($statistics_tab == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('last_users_tab'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="last_users_tab" class='sw1' data-set='last_users_tab' data-msg_enabled="<?php echo translate('last_users_tab_enabled'); ?>" data-msg_disabled="<?php echo translate('last_users_tab_disabled'); ?>" type="checkbox" <?php if ($last_users_tab == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('orders_status'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="orders_status" class='sw1' data-set='orders_status' data-msg_enabled="<?php echo translate('orders_status_enabled'); ?>" data-msg_disabled="<?php echo translate('orders_status_disabled'); ?>" type="checkbox" <?php if ($orders_status == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('users_status'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="users_status" class='sw1' data-set='users_status' data-msg_enabled="<?php echo translate('users_status_enabled'); ?>" data-msg_disabled="<?php echo translate('users_status_disabled'); ?>" type="checkbox" <?php if ($users_status == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('sales_status'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="sales_status" class='sw1' data-set='sales_status' data-msg_enabled="<?php echo translate('sales_status_enabled'); ?>" data-msg_disabled="<?php echo translate('sales_status_disabled'); ?>" type="checkbox" <?php if ($sales_status == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('quicklink_boxes'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="quicklink_boxes" class='sw1' data-set='quicklink_boxes' data-msg_enabled="<?php echo translate('quicklink_boxes_enabled'); ?>" data-msg_disabled="<?php echo translate('quicklink_boxes_disabled'); ?>" type="checkbox" <?php if ($quicklink_boxes == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('multivendor_features'); ?></h3>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="multivendor_all_elements" class='sw1' data-set='multivendor_all_elements' data-msg_enabled="<?php echo translate('multivendor_all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('multivendor_all_elements_disabled'); ?>" type="checkbox" <?php if ($multivendor_all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('vendor_payments'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="vendor_payments" class='sw1' data-set='vendor_payments' data-msg_enabled="<?php echo translate('vendor_payments_enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_payments_disabled'); ?>" type="checkbox" <?php if ($vendor_payments == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('vendor_statistics'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="vendor_statistics" class='sw1' data-set='vendor_statistics' data-msg_enabled="<?php echo translate('vendor_statistics_enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_statistics_disabled'); ?>" type="checkbox" <?php if ($vendor_statistics == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('fee_statistics'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="fee_statistics" class='sw1' data-set='fee_statistics' data-msg_enabled="<?php echo translate('fee_statistics_enabled'); ?>" data-msg_disabled="<?php echo translate('fee_statistics_disabled'); ?>" type="checkbox" <?php if ($fee_statistics == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('user_features'); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="user_all_elements" class='sw1' data-set='user_all_elements' data-msg_enabled="<?php echo translate('user_all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('user_all_elements_disabled'); ?>" type="checkbox" <?php if ($user_all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>   
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('mail_chimp'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="mail_chimp" class='sw1' data-set='mail_chimp' data-msg_enabled="<?php echo translate('mail_chimp_enabled'); ?>" data-msg_disabled="<?php echo translate('mail_chimp_disabled'); ?>" type="checkbox" <?php if ($mail_chimp == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('product-features'); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="product_all_elements" class='sw1' data-set='product_all_elements' data-msg_enabled="<?php echo translate('product_all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('product_all_elements_disabled'); ?>" type="checkbox" <?php if ($product_all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('search_by_category'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="search_by_category" class='sw1' data-set='search_by_category' data-msg_enabled="<?php echo translate('search_by_category_enabled'); ?>" data-msg_disabled="<?php echo translate('search_by_category_disabled'); ?>" type="checkbox" <?php if ($search_by_category == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('search_by_status'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="search_by_status" class='sw1' data-set='search_by_status' data-msg_enabled="<?php echo translate('search_by_status_enabled'); ?>" data-msg_disabled="<?php echo translate('search_by_status_disabled'); ?>" type="checkbox" <?php if ($search_by_status == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('search_sort_by'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="search_sort_by" class='sw1' data-set='search_sort_by' data-msg_enabled="<?php echo translate('search_sort_by_enabled'); ?>" data-msg_disabled="<?php echo translate('search_sort_by_disabled'); ?>" type="checkbox" <?php if ($search_sort_by == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('product_subtypes'); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="product_subtype_all_elements" class='sw1' data-set='product_subtype_all_elements' data-msg_enabled="<?php echo translate('product_subtype_all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('product_subtype_all_elements_disabled'); ?>" type="checkbox" <?php if ($product_subtype_all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('subscribe'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="subscribe" class='sw1' data-set='subscribe' data-msg_enabled="<?php echo translate('subscribe_enabled'); ?>" data-msg_disabled="<?php echo translate('subscribe_disabled'); ?>" type="checkbox" <?php if ($subscribe == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('normal'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="normal" class='sw1' data-set='normal' data-msg_enabled="<?php echo translate('normal_enabled'); ?>" data-msg_disabled="<?php echo translate('normal_disabled'); ?>" type="checkbox" <?php if ($normal == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('music'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="music" class='sw1' data-set='music' data-msg_enabled="<?php echo translate('music_enabled'); ?>" data-msg_disabled="<?php echo translate('music_disabled'); ?>" type="checkbox" <?php if ($music == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('order_features'); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="order_all_elements" class='sw1' data-set='order_all_elements' data-msg_enabled="<?php echo translate('order_all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('order_all_elements_disabled'); ?>" type="checkbox" <?php if ($order_all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('search_by_order_period'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="search_by_order_period" class='sw1' data-set='search_by_order_period' data-msg_enabled="<?php echo translate('search_by_order_period_enabled'); ?>" data-msg_disabled="<?php echo translate('search_by_order_period_disabled'); ?>" type="checkbox" <?php if ($search_by_order_period == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('search_by_order_status'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="search_by_order_status" class='sw1' data-set='search_by_order_status' data-msg_enabled="<?php echo translate('search_by_order_status_enabled'); ?>" data-msg_disabled="<?php echo translate('search_by_order_status_disabled'); ?>" type="checkbox" <?php if ($search_by_order_status == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('manual_order'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="manual_order" class='sw1' data-set='manual_order' data-msg_enabled="<?php echo translate('manual_order_enabled'); ?>" data-msg_disabled="<?php echo translate('manual_order_disabled'); ?>" type="checkbox" <?php if ($manual_order == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('search_by_payment_status'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="search_by_payment_status" class='sw1' data-set='search_by_payment_status' data-msg_enabled="<?php echo translate('search_by_payment_status_enabled'); ?>" data-msg_disabled="<?php echo translate('search_by_payment_status_disabled'); ?>" type="checkbox" <?php if ($search_by_payment_status == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('statistics_features'); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('all_elements'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="statistics_all_elements" class='sw1' data-set='statistics_all_elements' data-msg_enabled="<?php echo translate('statistics_all_elements_enabled'); ?>" data-msg_disabled="<?php echo translate('statistics_all_elements_disabled'); ?>" type="checkbox" <?php if ($statistics_all_elements == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('reports'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="reports" class='sw1' data-set='reports' data-msg_enabled="<?php echo translate('reports_enabled'); ?>" data-msg_disabled="<?php echo translate('reports_disabled'); ?>" type="checkbox" <?php if ($reports == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('charts'); ?></label>
                                    <div class="col-sm-1">
                                        <div class="col-sm-">
                                            <input id="charts" class='sw1' data-set='charts' data-msg_enabled="<?php echo translate('charts_enabled'); ?>" data-msg_disabled="<?php echo translate('charts_disabled'); ?>" type="checkbox" <?php if ($charts == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
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
<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'vendor_admin_customization';

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
                ajax_load(base_url + 'index.php/' + user_type + '/vendor_admin_customization/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
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


