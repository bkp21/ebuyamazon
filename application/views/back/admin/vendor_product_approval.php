<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('vendor_product_approval_settings'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'approve_product_storefront') {
                                $approve_product_storefront = $row['value'];
                            }
                            if ($row['type'] == 'default_state') {
                                $default_state = $row['value'];
                            }
                            if ($row['type'] == 'approve_emails_admin') {
                                $approve_emails_admin = $row['value'];
                            }
                            if ($row['type'] == 'approve_emails_vendors') {
                                $approve_emails_vendors = $row['value'];
                            }
                            if ($row['type'] == 'approve_emails_new_pending_products') {
                                $approve_emails_new_pending_products = $row['value'];
                            }
                            if ($row['type'] == 'approve_emails_status_change') {
                                $approve_emails_status_change = $row['value'];
                            }
                        }
                        ?>

                        <div class="panel panel-bordered-dark"> 
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_vendor_product_approval'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/vendor_product_approval/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'id' => 'vendor_product_approval_id',
                                'enctype' => 'multipart/form-data'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('approve_products_for_the_storefront :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="approve_product_storefront" class='sw1' data-set='approve_product_storefront' data-msg_enabled="<?php echo translate('approve_product_storefront_enabled'); ?>" data-msg_disabled="<?php echo translate('approve_product_storefront_disabled'); ?>" type="checkbox" <?php if ($approve_product_storefront == 'ok') { ?>checked<?php } ?> />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('approval_default_state :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="default_state">
                                            <option value="approved" <?php if($default_state=='approved') { echo 'selected'; }?>>
                                               <?php  echo translate('approved'); ?>
                                            </option>
                                            <option value="pending"  <?php if($default_state=='pending') { echo 'selected'; }?>>
                                               <?php  echo translate('pending'); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('send_approval_emails_to_admins :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="approve_emails_admin" class='sw1' data-set='approve_emails_admin' data-msg_enabled="<?php echo translate('approve_emails_admin_enabled'); ?>" data-msg_disabled="<?php echo translate('approve_emails_admin_disabled'); ?>" type="checkbox" <?php if ($approve_emails_admin == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('send_approval_emails_to_vendors :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="approve_emails_vendors" class='sw1' data-set='approve_emails_vendors' data-msg_enabled="<?php echo translate('approve_emails_vendors_enabled'); ?>" data-msg_disabled="<?php echo translate('approve_emails_vendors_disabled'); ?>" type="checkbox" <?php if ($approve_emails_vendors == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('send_approval_email_on_new_pending_products :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="approve_emails_new_pending_products" class='sw1' data-set='approve_emails_new_pending_products' data-msg_enabled="<?php echo translate('approve_emails_new_pending_products_enabled'); ?>" data-msg_disabled="<?php echo translate('approve_emails_new_pending_products_disabled'); ?>" type="checkbox" <?php if ($approve_emails_new_pending_products == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('send_approval_email_on_status_Change :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="approve_emails_status_change" class='sw1' data-set='approve_emails_status_change' data-msg_enabled="<?php echo translate('approve_emails_status_change_enabled'); ?>" data-msg_disabled="<?php echo translate('approve_emails_status_change_disabled'); ?>" type="checkbox" <?php if ($approve_emails_status_change == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer text-right">
                                    <span class="btn btn-purple submitter" 
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
</div>    
    <script>
        var base_url = '<?php echo base_url(); ?>'
        var user_type = 'admin';
        var module = 'vendor_product_approval';

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
                    ajax_load(base_url + 'index.php/' + user_type + '/vendor_product_approval/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
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
