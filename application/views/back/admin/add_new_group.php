<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow"><?php echo translate('manage_group');?></h1>
	</div>
        <div class="tab-base">
            <div class="tab-base tab-stacked-left">
                <?php
                    foreach ($data as $row) {

                        if ($row['type'] == 'weight_based_price_group') {
                            $weight_based_price_group = $row['value'];
                        }

                    }
                ?>
                <div class="col-sm-12">
                    <div class="panel panel-bordered-dark"> 
                        <div class="panel-body">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('enable/disable_weight_based_price'); ?></h3>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo translate('weight_based_price_group :'); ?></label>
                                <div class="col-sm-6">
                                    <div class="col-sm-">
                                        <input id="storefront_access_block" class='sw1' data-set='weight_based_price_group' data-msg_enabled="<?php echo translate('weight_based_price_group_enabled'); ?>" data-msg_disabled="<?php echo translate('weight_based_price_group_disabled'); ?>" type="checkbox" <?php if ($weight_based_price_group == 'ok') { ?>checked<?php } ?> />
                                    </div>
                                </div>
                            </div>
                            </form>                             
                        </div>
                        <div class="panel-heading">
                             <h3 class="panel-title">
                                 <?php echo translate('weight_based_price_group');?>
                             </h3>
                        </div>

                        <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
                            <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                                onclick="ajax_modal('add','<?php echo translate('add_group'); ?>','<?php echo translate('successfully_added!'); ?>','group_add','');">
                                    <?php echo translate('create_group');?>
                            </button>
                        </div>
                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                    <div class="panel-heading">
                         <h3 class="panel-title">
                             <?php echo translate('weight_based_price_list');?>
                         </h3>
                    </div>
                    <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                            onclick="ajax_modal1('add1','<?php echo translate('add_weight_group_price'); ?>','<?php echo translate('successfully_added!'); ?>','weight_grp_price_add','');">
                                <?php echo translate('create_weight_group_price');?>
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
<span id="prod"></span>
<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'add_new_group';
    var list_cont_funcc = 'list1';
    var dlt_cont_funcc = 'delete1';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
    
    	$(document).ready(function() {
		if($('#lang_select').length){
		} else {
			ajax_load1(base_url+'index.php/'+user_type+'/'+module+'/'+list_cont_funcc,'list1','first');
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
                    ajax_load(base_url + 'index.php/' + user_type + '/add_new_group/' + set + '/' + changeCheckbox.checked);
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

