<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('digital_products'); ?></h1>

    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                    <?php
                    foreach ($data as $row) {
                        if ($row['type'] == 'products_active') {
                        $products_active = $row['value'];
                        }
                        if ($row['type'] == 'download_limit') {
                        $download_limit = $row['value'];
                        }
                        if ($row['type'] == 'time_limit') {
                        $time_limit = $row['value'];
                        }
                    }
                    ?>
                <div class="panel panel-bordered-dark">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate('manage_digital_products'); ?></h3>
                        </div>
                    <?php
                    echo form_open(base_url() . 'index.php/admin/digital_products/set/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post',
                    ));
                    ?>
                     <div class="panel-body">
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('digital_products_active :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="products_active" class='sw1' data-set='products_active' data-msg_enabled="<?php echo translate('digital_products_active_enabled'); ?>" data-msg_disabled="<?php echo translate('digital_products_active_disabled'); ?>" type="checkbox" <?php if ($products_active == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('digital_products_download_limit :'); ?></label>
                            <div class="col-sm-6">
                                <input type="number" name="download_limit" placeholder="<?php echo translate('digital_products_download_limit') ?>" value="<?php echo $download_limit; ?>" class="form-control required">
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('digital_products_time_limit :'); ?></label>
                            <div class="col-sm-6">
                                <input type="number" name="time_limit" value="<?php echo $time_limit; ?>" placeholder="<?php echo translate('digital_products_time_limit (0=unlimited)'); ?>" class="form-control required">
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
<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'digital_products';

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
                ajax_load(base_url + 'index.php/' + user_type + '/digital_products/' + set + '/' + changeCheckbox.checked);
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

