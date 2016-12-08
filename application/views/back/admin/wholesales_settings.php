<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('wholesales_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'wholesaler_discounts') {
                                $wholesaler_discounts = $row['value'];
                            }
                            if ($row['type'] == 'wholesale_level') {
                                $wholesale_level = $row['value'];
                            }
                            if ($row['type'] == 'discount_level') {
                                $discount_level = $row['value'];
                            }
                            if ($row['type'] == 'wholesale_case_pack') {
                                $wholesale_case_pack = $row['value'];
                            }
                            if ($row['type'] == 'wholesale_inter_pack') {
                                $wholesale_inter_pack = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_bestsellers_settings'); ?></h3>
                            </div>
                        <?php
                        echo form_open(base_url() . 'index.php/admin/wholesales_settings/set/', array(
                            'class' => 'form-horizontal',
                            'method' => 'post',
                            'name' => 'wholesale_settings'
                        ));
                        ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" style="color:#34B2E7;"><?php echo translate('wholesales_settings'); ?></h3>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                        <?php echo translate('activate_wholesaler_discounts_at : '); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select name="wholesaler_discounts" id="wholesaler_discounts" class="demo-cs-multiselect required">
                                            <option value="wholesales" <?php
                                            if ($wholesaler_discounts == 'wholsales') {
                                                echo 'selected';
                                            }
                                            ?> ><?php echo translate('I dont have a wholesalers'); ?></option>
                                            <option value="level" <?php
                                            if ($wholesaler_discounts == 'level') {
                                                echo 'selected';
                                            }
                                            ?>><?php echo translate('add_discount_at_product_level'); ?></option>
                                            <option value="discounts" <?php
                                                    if ($wholesaler_discounts == 'discounts') {
                                                        echo 'selected';
                                                    }
                                            ?> ><?php echo translate('calculate_discounts_globally'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" style="color:#34B2E7;"><?php echo translate('wholesale_global_discounts'); ?></h3>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('How many wholesale levels do you have?'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <?php
                                        $from = array('1', '2', '3');
                                        echo $this->crud_model->select_html($from, 'wholesale_level', '', 'edit', 'demo-chosen-select', $wholesale_level);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('Discount percentage level 1 :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="percentage" name="discount_level" value="<?php echo $discount_level; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" style="color:#34B2E7;"><?php echo translate('case_pack'); ?></h3>
                                    </div>
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('Allow wholesale case pack? '); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="wholesale_case_pack" class='sw1' data-set='wholesale_case_pack' data-msg_enabled="<?php echo translate('wholesale_case_pack_enabled'); ?>" data-msg_disabled="<?php echo translate('wholesale_case_pack_disabled'); ?>" type="checkbox" <?php if ($wholesale_case_pack == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('Allow wholesale inter pack?'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="wholesale_inter_pack" class='sw1' data-set='wholesale_inter_pack' data-msg_enabled="<?php echo translate('wholesale_inter_pack_enabled'); ?>" data-msg_disabled="<?php echo translate('wholesale_inter_pack_disabled'); ?>" type="checkbox" <?php if ($wholesale_inter_pack == 'ok') { ?>checked<?php } ?> />
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
    var module = 'wholesales_settings';

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
                ajax_load(base_url + 'index.php/' + user_type + '/wholesales_settings/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
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

<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>

