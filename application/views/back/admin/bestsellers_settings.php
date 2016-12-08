<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('bestsellers_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'seller_available') {
                                $seller_available = $row['value'];
                            }
                            if ($row['type'] == 'seller_count') {
                                $seller_count = $row['value'];
                            }
                            if ($row['type'] == 'seller_period') {
                                $seller_period = $row['value'];
                            }
                            if ($row['type'] == 'seller_view') {
                                $seller_view = $row['value'];
                            }
                            if ($row['type'] == 'customer_avai') {
                                $customer_avai = $row['value'];
                            }
                            if ($row['type'] == 'customer_count') {
                                $customer_count = $row['value'];
                            }
                            if ($row['type'] == 'customer_view') {
                                $customer_view = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_bestsellers_settings'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/bestsellers_settings/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'name' => 'bestsellers_settings'
                            ));
                            ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('Catalog Best Sellers Available :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="seller_available" class='sw1' data-set='seller_available' data-msg_enabled="<?php echo translate('seller_available_enabled'); ?>" data-msg_disabled="<?php echo translate('seller_available_disabled'); ?>" type="checkbox" <?php if ($seller_available == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('catalog_best_sellers_count :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="number" min="0" value='<?php echo $seller_count;?>' name='seller_count' placeholder="<?php echo translate('number_of_best_sellers_to_be_displayed_in_best_sellers_box'); ?>" class="form-control required" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('catalog_best_sellers_period :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <?php
                                        $from = array('months', '2 Months', '3 Months', '6 Months', 'Year');
                                        echo $this->crud_model->select_html($from, 'seller_period', '', 'edit', 'demo-chosen-select', $seller_period);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                    <?php echo translate('catalog-best_sellers_view :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select class="demo-chosen-select" name="seller_view">
                                            <option value="Text"<?php if($seller_view=='Text')
                                                        echo "selected";
                                                    ?>>Text</option>
                                            <option value="Thumb"<?php if($seller_view=='Thumb')
                                                        echo "selected";
                                                    ?>>Thumb</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('customer_also_bought_available :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="customer_avai" class='sw1' data-set='customer_avai' data-msg_enabled="<?php echo translate('customer_available_enabled'); ?>" data-msg_disabled="<?php echo translate('customer_available_disabled'); ?>" type="checkbox" <?php if ($customer_avai == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('customer_also_bought_count :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="number" min="0" name="customer_count" value="<?php echo $customer_count; ?>" placeholder="<?php echo translate('how_many_products_other_customer_bought_you_would_like_to_display?'); ?>" class="form-control required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail">
                                    <?php echo translate('customer_also_bought_view :'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <select class="demo-chosen-select" name="customer_view">
                                            <option value="Text"<?php if($customer_view=='Text')
                                                        echo "selected";
                                                    ?>>Text</option>
                                            <option value="Thumb"<?php if($customer_view=='Thumb')
                                                        echo "selected";
                                                    ?>>Thumb</option>
                                        </select> 
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
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'bestsellers_settings';
    
   $(document).ready(function(){
		$(".sw1").each(function(){
			var h = $(this);
			var id = h.attr('id');
			var set = h.data('set');
			var msg_enabled = h.data('msg_enabled');
			var msg_disabled = h.data('msg_disabled');
			new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
			var changeCheckbox = document.querySelector('#'+id);
			changeCheckbox.onchange = function() {
			  ajax_load(base_url+'index.php/'+user_type+'/bestsellers_settings/'+set+'/'+changeCheckbox.checked);
			  if(changeCheckbox.checked == true){
				$.activeitNoty({
					type: 'success',
					icon : 'fa fa-check',
					message : msg_enabled,
					container : 'floating',
					timer : 3000
				});
				sound('published');
			  } else {
				$.activeitNoty({
					type : 'danger',
					icon : 'fa fa-check',
					message : msg_disabled,
					container : 'floating',
					timer : 3000
				});
				sound('unpublished');
			  }
							  //activate/inactive subscribed_products
			};
		});
	});
</script>

