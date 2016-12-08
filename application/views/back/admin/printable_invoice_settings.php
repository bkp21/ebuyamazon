<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('printable_invoice_settings'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            foreach ($data as $row) {
                if ($row['type'] == 'print_invoice_height') {
                    $print_invoice_height = $row['value'];
                }
                if ($row['type'] == 'invoice_company_name') {
                    $invoice_company_name = $row['value'];
                }
                if ($row['type'] == 'invoice_company_address') {
                    $invoice_company_address = $row['value'];
                }
                if ($row['type'] == 'invoice_company_phone') {
                    $invoice_company_phone = $row['value'];
                }
                if ($row['type'] == 'invoice_company_fax') {
                    $invoice_company_fax = $row['value'];
                }
                if ($row['type'] == 'invoice_company_email') {
                    $invoice_company_email = $row['value'];
                }
                if ($row['type'] == 'invoice_company_logo_alignment') {
                    $invoice_company_logo_alignment = $row['value'];
                }
                if ($row['type'] == 'invoice_order_date') {
                    $invoice_order_date = $row['value'];
                }
                if ($row['type'] == 'invoice_mpn') {
                    $invoice_mpn = $row['value'];
                }
                if ($row['type'] == 'invoice_date') {
                    $invoice_date = $row['value'];
                }
                if ($row['type'] == 'invoice_gtin') {
                    $invoice_gtin = $row['value'];
                }
            }
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('printable_invoice_settings'); ?></h3>
                    </div>
                    <?php
                    echo form_open(base_url() . 'index.php/admin/printable_invoice_settings/set/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post'
                    ));
                    ?>
                    <div class="panel-body">


                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-4">
                                <?php echo translate(' Print Invoice Height :'); ?>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="print_invoice_height" value="<?php echo $print_invoice_height; ?>" id="print_invoice_height" for="demo-hor-4" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('printable_invoice_company_name : '); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_company_name" class='sw1' data-set='invoice_company_name' data-msg_enabled="<?php echo translate('printable_invoice_company_name_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_company_name_disabled'); ?>" type="checkbox" <?php if ($invoice_company_name == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Company Address :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_company_address" class='sw1' data-set='invoice_company_address' data-msg_enabled="<?php echo translate('printable_invoice_company_address_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_company_address_disabled'); ?>" type="checkbox" <?php if ($invoice_company_address == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Company Phone :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_company_phone" class='sw1' data-set='invoice_company_phone' data-msg_enabled="<?php echo translate('printable_invoice_company_phone_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_company_phone_disabled'); ?>" type="checkbox" <?php if ($invoice_company_phone == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Company Fax :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_company_fax" class='sw1' data-set='invoice_company_fax' data-msg_enabled="<?php echo translate('printable_invoice_company_fax_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_template_products_fax_disabled'); ?>" type="checkbox" <?php if ($invoice_company_fax == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Company Email :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_company_email" class='sw1' data-set='invoice_company_email' data-msg_enabled="<?php echo translate('printable_invoice_company_email_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_company_email_disabled'); ?>" type="checkbox" <?php if ($invoice_company_email == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Company Logo Alignment :'); ?></label>
                            <div class="col-sm-6">
                                <select name="invoice_company_logo_alignment" id="invoice_company_logo_alignment" class="demo-cs-multiselect required">
                                    <option value="no" <?php if ($invoice_company_logo_alignment == 'no') {
                                    echo 'selected';
                                } ?> ><?php echo translate('no'); ?></option>
                                    <option value="right" <?php if ($invoice_company_logo_alignment == 'right') {
                                    echo 'selected';
                                } ?>><?php echo translate('right'); ?></option>
                                    <option value="left" <?php if ($invoice_company_logo_alignment == 'left') {
                                    echo 'selected';
                                } ?> ><?php echo translate('left'); ?></option>
                                    <option value="center" <?php if ($invoice_company_logo_alignment == 'center') {
                                    echo 'selected';
                                } ?> ><?php echo translate('center'); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Order Date :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_order_date" class='sw1' data-set='invoice_order_date' data-msg_enabled="<?php echo translate('printable_invoice_order_date_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_order_date_disabled'); ?>" type="checkbox" <?php if ($invoice_order_date == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice MPN :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_mpn" class='sw1' data-set='invoice_mpn' data-msg_enabled="<?php echo translate('printable_invoice_mpn_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_mpn_disabled'); ?>" type="checkbox" <?php if ($invoice_mpn == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice Invoice Date :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_date" class='sw1' data-set='invoice_date' data-msg_enabled="<?php echo translate('printable_invoice_date_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_date_disabled'); ?>" type="checkbox" <?php if ($invoice_date == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('Printable Invoice GTIN :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="invoice_gtin" class='sw1' data-set='invoice_gtin' data-msg_enabled="<?php echo translate('printable_invoice_gtin_enabled'); ?>" data-msg_disabled="<?php echo translate('printable_invoice_gtin_disabled'); ?>" type="checkbox" <?php if ($invoice_gtin == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <span class="btn btn-purple submitter" 
                                  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
<?php echo translate('save'); ?>
                            </span>
                        </div>

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
    var module = 'printable_invoice_settings';
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
                ajax_load(base_url + 'index.php/' + user_type + '/printable_invoice_settings/' + set + '/' + changeCheckbox.checked);
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

