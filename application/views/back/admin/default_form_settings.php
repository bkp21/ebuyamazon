<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('default_form_settings');?></h1>
    </div>
	<div>
		<h5>This is sensitive information, please consult your user manual before making any changes.</h5>
	</div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
							$product_condition = '';
							$product_inventory_control = '';
							$product_taxable = '';
							$product_is_free_ship = '';
							$product_stock = '0';
							$data = $this->db->get('default_form_settings')->result_array();
							foreach ($data as $row1) {
								$product_condition 			= $row1['product_condition'];
								$product_inventory_control  = $row1['product_inventory_control'];
								$product_taxable			= $row1['product_taxable'];
								$product_is_free_ship 		= $row1['product_is_free_ship'];
								$product_stock 				= $row1['product_stock'];
							}
						?>
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate('manage_details');?></h3>
                        </div>
						<?php
                            echo form_open(base_url() . 'index.php/admin/default_form_settings/update/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
								'name' => 'form_settings'
                            ));
                        ?>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-1">
                                    	<?php echo translate('product_condition');?>
                                        	</label>
                                    <div class="col-sm-6">
										<select name="product_condition" id="product_condition" class="demo-cs-multiselect required">
											<option value="new" <?php if($product_condition=='new'){echo 'selected';} ?> ><?php echo translate('new');?></option>
											<option value="used" <?php if($product_condition=='used'){echo 'selected';} ?>><?php echo translate('used');?></option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-2">
										<?php echo translate('product_inventory_control');?>
                                        	</label>
                                    <div class="col-sm-6">
                                        <select name="product_inventory_control" id="product_inventory_control" class="demo-cs-multiselect required">
											<option value="no" <?php if($product_inventory_control=='no'){echo 'selected';} ?> ><?php echo translate('no');?></option>
											<option value="product_level" <?php if($product_inventory_control=='product_level'){echo 'selected';} ?>><?php echo translate('track_inventory_at_product_level');?></option>
											<option value="attribute_level_track" <?php if($product_inventory_control=='attribute_level_track'){echo 'selected';} ?> ><?php echo translate('track_inventory_at_attribute_level_-_track_only_defined_combinations');?></option>
											<option value="attribute_level_sell" <?php if($product_inventory_control=='attribute_level_sell'){echo 'selected';} ?>><?php echo translate('track_inventory_at_attribute_level_-_sell_only_defined_combinations');?></option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-3">
										<?php echo translate('product_taxable');?>
                                        	</label>
                                    <div class="col-sm-6">
                                        <select name="product_taxable" id="product_taxable" class="demo-cs-multiselect required">
											<option value="yes" <?php if($product_taxable=='yes'){echo 'selected';} ?>><?php echo translate('yes');?></option>
											<option value="no" <?php if($product_taxable=='no'){echo 'selected';} ?> ><?php echo translate('no');?></option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
										<?php echo translate('product_is_free_shipping');?>
                                        	</label>
                                    <div class="col-sm-6">
                                        <select name="product_is_free_ship" id="product_is_free_ship" class="demo-cs-multiselect required">
											<option value="no" <?php if($product_is_free_ship=='no'){echo 'selected';} ?> ><?php echo translate('no');?></option>
											<option value="yes" <?php if($product_is_free_ship=='yes'){echo 'selected';} ?>><?php echo translate('yes');?></option>
										</select>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-4">
										<?php echo translate('product_stock');?>
                                        	</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="product_stock" value="<?php echo $product_stock; ?>" id="product_stock" for="demo-hor-4" class="form-control">
									</div>
                                </div>
                            </div>
                            <div class="panel-footer text-right">
                                <button class="btn btn-success btn-save submitter" data-ing='<?php echo translate('updating..'); ?>' data-msg='<?php echo translate('form_settings_updated!'); ?>' type="submit"><?php echo translate('save_settings');?></button>
                            </div>
                        </form>
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
	var module = 'default_form_settings';
	function form_settings_reset(){
		$('#btn_reset').click();
	}
</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

