<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('product_tamplate'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            foreach ($data as $row) {
                if ($row['type'] == 'pt_search') {
                    $pt_search = $row['value'];
                }
                if ($row['type'] == 'pt_search_vendor_products') {
                    $pt_search_vendor_products = $row['value'];
                }
                if ($row['type'] == 'pt_search_admin_products') {
                    $pt_search_admin_products = $row['value'];
                }
                if ($row['type'] == 'pt_search_tamplate_products') {
                    $pt_search_tamplate_products = $row['value'];
                }
            }
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark">
                    <?php
                    echo form_open(base_url() . 'index.php/admin/product_tamplate/set/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post'
                    ));
                    ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('product_template_search_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="pt_search" class='sw1' data-set='pt_search' data-msg_enabled="<?php echo translate('product_template_search_enabled'); ?>" data-msg_disabled="<?php echo translate('product_template_search_disabled'); ?>" type="checkbox" <?php if ($pt_search == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_template_search_-_vendor_products_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="pt_search_vendor_products" class='sw1' data-set='pt_search_vendor_products' data-msg_enabled="<?php echo translate('vendor_products_enabled'); ?>" data-msg_disabled="<?php echo translate('vendor_products_disabled'); ?>" type="checkbox" <?php if ($pt_search_vendor_products == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_template_search_-_admin_products_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="pt_search_admin_products" class='sw1' data-set='pt_search_admin_products' data-msg_enabled="<?php echo translate('admin_products_enabled'); ?>" data-msg_disabled="<?php echo translate('admin_products_disabled'); ?>" type="checkbox" <?php if ($pt_search_admin_products == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_template_search_-_template_products_:'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="pt_search_tamplate_products" class='sw1' data-set='pt_search_tamplate_products' data-msg_enabled="<?php echo translate('template_products_enabled'); ?>" data-msg_disabled="<?php echo translate('template_products_disabled'); ?>" type="checkbox" <?php if ($pt_search_tamplate_products == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
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
    var module = 'product_tamplate';
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
                ajax_load(base_url + 'index.php/' + user_type + '/product_tamplate/' + set + '/' + changeCheckbox.checked);
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

