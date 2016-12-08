<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_access_settings'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            $data = $this->db->get('access_settings')->result_array();

            foreach ($data as $row) {

                if ($row['type'] == 'storefront_access_block') {
                    $storefront_access_block = $row['value'];
                }
                if ($row['type'] == 'backend_access_block') {
                    $backend_access_block = $row['value'];
                }
                if ($row['type'] == 'action_block_event') {
                    $action_block_event = $row['value'];
                }
                if ($row['type'] == 'redirect_url') {
                    $redirect_url = $row['value'];
                }
            }
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark"> 
                <?php
                echo form_open(base_url() . 'index.php/admin/access_settings/set', array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'sms',
                    'enctype' => 'multipart/form-data'
                ));
                ?>
                    <div class="panel-body">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate('access_control_settings'); ?></h3>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('enable_storefront_access_block :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="storefront_access_block" class='sw1' data-set='storefront_access_block' data-msg_enabled="<?php echo translate('storefront_access_block_enabled'); ?>" data-msg_disabled="<?php echo translate('storefront_access_block_disabled'); ?>" type="checkbox" <?php if ($storefront_access_block == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('enable_backend_(admin_area)_access_block :'); ?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="backend_access_block" class='sw1' data-set='backend_access_block' data-msg_enabled="<?php echo translate('backend_access_block_enabled'); ?>" data-msg_disabled="<?php echo translate('backend_access_block_disabled'); ?>" type="checkbox" <?php if ($backend_access_block == 'ok') { ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-1">
                                <?php echo translate('action_on_block_event :'); ?>
                            </label>
                            <div class="col-sm-6">
                                <select name="action_block_event" id="action_block_event" class="demo-cs-multiselect required">
                                    <option value="redirect_to_access_denied_page" <?php
                                    if ($action_block_event == 'redirect_to_access_denied_page') {
                                        echo 'selected';
                                    }
                                    ?> ><?php echo translate('Redirect to Access Denied Page'); ?></option>
                                    <option value="redirect_to_below_site" <?php
                                    if ($action_block_event == 'redirect_to_below_site') {
                                        echo 'selected';
                                    }
                                    ?>><?php echo translate('Redirect to below site'); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Redirect URL :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="redirect_url" value="<?php echo $redirect_url; ?>" class="form-control">
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
            <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding:10px;">
                <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right" 
                        onclick="ajax_modal('add', '<?php echo translate('add_ip_range'); ?>', '<?php echo translate('successfully_added!'); ?>', 'access_settings_add', '')">
                            <?php echo translate('create_ip_range'); ?>
                </button>
            </div>
            <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
            </div>
        </div>
    </div>
</div>
    <script>
        var base_url = '<?php echo base_url(); ?>'
        var user_type = 'admin';
        var module = 'access_settings';
        var list_cont_func = 'list';
        var dlt_cont_func = 'delete';
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
                    ajax_load(base_url + 'index.php/' + user_type + '/access_settings/' + set + '/' + changeCheckbox.checked);
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


