<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_product_custom_fields'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            $activate_fields = $this->db->get_where('product_setting', array(
                        'type' => 'activate_product_fields'
                    ))->row()->value;
            $activate_fields_compare = $this->db->get_where('product_setting', array(
                        'type' => 'activate_product_fields_compare'
                    ))->row()->value;
            ?>
            <div class="col-sm-12">
               <div class="panel panel-bordered-dark"> 
                <?php
                echo form_open(base_url() . 'index.php/admin/product_field_group/', array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'sms',
                    'enctype' => 'multipart/form-data'
                ));
                ?>
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('product_custom_fields_settings'); ?></h3>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('activate_product_fields'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="activate_product_fields" class='sw1' data-set='activate_product_fields' data-msg_enabled="<?php echo translate('activate_product_fields_enabled'); ?>" data-msg_disabled="<?php echo translate('activate_product_fields_disabled'); ?>" type="checkbox" <?php if ($activate_fields == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('activate_product_fields_compare'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="activate_product_fields_compare" class='sw1' data-set='activate_product_fields_compare' data-msg_enabled="<?php echo translate('activate_product_fields_compare_enabled'); ?>" data-msg_disabled="<?php echo translate('activate_product_fields_compare_disabled'); ?>" type="checkbox" <?php if ($activate_fields_compare == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    </form>              
                       <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('product_field_groups');?></h3>
                        </div>
                    <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding:10px;">
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right" 
                            onclick="ajax_modal('add','<?php echo translate('add_group'); ?>','<?php echo translate('successfully_added!'); ?>','product_field_group_add','')">
                                <?php echo translate('create_field_group');?>
                        </button>
                    </div>
                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'product_field_group';
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
                ajax_load(base_url + 'index.php/' + user_type + '/product_field_group/' + set + '/' + changeCheckbox.checked);
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



