<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_vendor_badges_awards'); ?></h1>
    </div>
    <div class="tab-base">
        <?php
        foreach ($data as $row) {
            if ($row['type'] == 'enable_vendor_badges') {
                $enable_vendor_badges = $row['value'];
            }
            if ($row['type'] == 'enable_vendor_awards') {
                $enable_vendor_awards = $row['value'];
            }
        }
        ?>
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">


                    <div class="panel panel-bordered-dark">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo translate('vendor_badges_and_awards'); ?>
                            </h3>
                        </div>
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#badges" aria-controls="vendor-reviews" role="tab" data-toggle="tab" style="font-size:16px"  onclick="badges_click();"><?php echo translate('badges'); ?></a></li>
                                <li role="presentation"><a href="#awards" aria-controls="vendor-ratings" role="tab" data-toggle="tab" style="font-size:16px" onclick="awards_click();"><?php echo translate('awards'); ?></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="badges">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo translate('badge_settings'); ?></h3>
                                    </div>
                                    <div class="panel-body"> 
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?php echo translate('enable_vendor_badges :'); ?></label>
                                            <div class="col-sm-6">
                                                <div class="col-sm-">
                                                    <input id="enable_vendor_badges" class='sw1' data-set='enable_vendor_badges' data-msg_enabled="<?php echo translate('vendor_badges_enable'); ?>" data-msg_disabled="<?php echo translate('vendor_badges_disabled'); ?>" type="checkbox" <?php if ($enable_vendor_badges == 'ok') { ?>checked<?php } ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
                                        <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                                                onclick="ajax_modal('add', '<?php echo translate('add_badges'); ?>', '<?php echo translate('successfully_added!'); ?>', 'vendor_badges_add', '');">
                                                    <?php echo translate('add_badges'); ?>
                                        </button>
                                    </div>
                                                        <!-- LIST -->
                                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="awards">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo translate('award_settings'); ?></h3>
                                    </div>
                                    <div class="panel-body"> 
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?php echo translate('enable_vendor_award :'); ?></label>
                                            <div class="col-sm-6">
                                                <div class="col-sm-">
                                                    <input id="storefront_access_block" class='sw1' data-set='enable_vendor_awards' data-msg_enabled="<?php echo translate('vendor_award_enable'); ?>" data-msg_disabled="<?php echo translate('vendor_award_disabled'); ?>" type="checkbox" <?php if ($enable_vendor_awards == 'ok') { ?>checked<?php } ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
                                        <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                                                onclick="ajax_modal1('add1', '<?php echo translate('add_awards'); ?>', '<?php echo translate('successfully_added!'); ?>', 'vendor_awards_add', '');">
                                                    <?php echo translate('add_awards'); ?>
                                        </button>
                                    </div>
                                    <!-- LIST1 -->
                                    <div class="tab-pane fade active in" id="list1" style="border:1px solid #ebebeb; border-radius:4px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'vendor_badges_awards';
    var list_cont_funcc = 'list1';
    var dlt_cont_funcc = 'delete1';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
    $(document).ready(function () {
        if ($('#lang_select').length) {
        } else {
            ajax_load1(base_url + 'index.php/' + user_type + '/' + module + '/' + list_cont_funcc, 'list1', 'first');
        }
    });
    
</script>
<script>
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
                ajax_load(base_url + 'index.php/' + user_type + '/vendor_badges_awards/' + set + '/' + changeCheckbox.checked);
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