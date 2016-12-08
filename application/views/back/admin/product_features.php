<div id="content-container"> 
<?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('site_settings(product_features)');?></h1>
    </div>
	<div class="smsalert smsalert-success">
          
            <div class="padding-8 margin-bottom3">
				<b>This is sensitive information, please consult your user manual before making any changes.</b></div>
				<div class="padding-8 margin-bottom3">
				<b>Please note: required values are bold.</b></div>
        </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
                foreach($data as $row){
					if($row['type']=='product_condition'){
						$product_condition = $row['value'];
					}
					if($row['type']=='product_returns_and_refunds'){
						$product_returns_and_refunds = $row['value'];
					}
					if($row['type']=='product_tags_option'){
						$product_tags_option = $row['value'];
					}
					if($row['type']=='product_expire_date_option'){
						$product_expire_date_option = $row['value'];
					}
					if($row['type']=='product_available_date_option'){
						$product_available_date_option = $row['value'];
					}
					if($row['type']=='order_attachments_active'){
						$order_attachments_active = $row['value'];
					}
					if($row['type']=='order_attachments_file_types'){
						$order_attachments_file_types = $row['value'];
					}
					if($row['type']=='order_attachments_max_file_size'){
						$order_attachments_max_file_size = $row['value'];
					}
				}
            ?>
            <div class="col-sm-12">
            <div class="panel panel-bordered-dark">
                <?php
                    echo form_open(base_url() . 'index.php/admin/product_features/set/', array(
                        'class'     => 'form-horizontal',
                        'method'    => 'post'
                    ));
                ?>
                    <div class="panel-body">
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('product_condition_:');?></label>
                            <div class="col-sm-7">
                                <div class="col-sm-">
								<select id="product_condition" class="product_features" name="product_condition" >
									<option name="Yes" selected="selected"><?php echo translate('Yes');?></option>
									<option name="No" ><?php echo translate('No');?></option>
								</select>
                                    
									<div class="formHelp" style="margin-top: 6px" data-original-title="" title="">
					Product Condition field is available and will be displayed at the storefront.				 - [default value: No]								</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_returns_and_refunds_:');?></label>
							<div class="col-sm-7">
                                <div class="col-sm-">
								<select id="product_returns_and_refunds" class="product_features" name="product_returns_and_refunds" >
									<option name="Yes" selected="selected"><?php echo translate('Yes');?></option>
									<option name="No" ><?php echo translate('No');?></option>
								</select>
                                    
									<div class="formHelp" style="margin-top: 6px" data-original-title="" title="">Product Returns and Refunds selection is available and will be displayed at the storefront - [default value: No]</div>
                                </div>
                            </div>
                            
                        </div>
						
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_tags_option_:');?></label>
							<div class="col-sm-7">
                                <div class="col-sm-">
								<select id="product_tags_option" class="product_features" name="product_tags_option" >
									<option name="Yes" selected="selected"><?php echo translate('Yes');?></option>
									<option name="No" ><?php echo translate('No');?></option>
								</select>
                                    
									<div class="formHelp" style="margin-top: 6px" data-original-title="" title=""> Enable Product Tags - [default value: Yes]	</div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_expire_date_option_:');?></label>
							<div class="col-sm-7">
                                <div class="col-sm-">
								<select id="product_expire_date_option" class="product_features" name="product_expire_date_option" >
									<option name="Yes" selected="selected"><?php echo translate('Yes');?></option>
									<option name="No" ><?php echo translate('No');?></option>
								</select>
                                    
									<div class="formHelp" style="margin-top: 6px" data-original-title="" title="">Set to Yes to enable the product expire date option in product details page - [default value: No]</div>
                                </div>
                            </div>
                            
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('product_available_date_option_:');?></label>
							<div class="col-sm-7">
                                <div class="col-sm-">
								<select id="product_available_date_option" class="product_features" name="product_available_date_option" >
									<option name="Yes" selected="selected"><?php echo translate('Yes');?></option>
									<option name="No" ><?php echo translate('No');?></option>
								</select>
                                    
									<div class="formHelp" style="margin-top: 6px" data-original-title="" title="">Do you want to enable the product available date option on the product details page - [default value: No]	</div>
                                </div>
                            </div>
                            
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail"><?php echo translate('order_attachments_-_active_:');?></label>
							<div class="col-sm-7">
                                <div class="col-sm-">
								<select id="order_attachments_active" class="product_features" name="order_attachments_active" >
									<option name="Yes" selected="selected"><?php echo translate('Yes');?></option>
									<option name="No" ><?php echo translate('No');?></option>
								</select>
                                    
									<div class="formHelp" style="margin-top: 6px" data-original-title="" title="">Enable or disable order attachments				 - [default value: No]</div>
                                </div>
                            </div>
                            
                        </div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('order_attachments_-_file_types_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="order_attachments_file_types" value="<?php echo $order_attachments_file_types; ?>" id="order_attachments_file_types" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('order_attachments_-_max_file_size_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="order_attachments_max_file_size" value="<?php echo $order_attachments_max_file_size; ?>" id="order_attachments_max_file_size" for="demo-hor-4" class="form-control">
							</div>
						</div>	
                    </div>
                    <div class="panel-footer text-left">
                        <span class="btn btn-info submitter" 
                        	data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
								<?php echo translate('save_changes');?>
                        </span>
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
	var module = 'product_features';
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
			  ajax_load(base_url+'index.php/'+user_type+'/product_features/'+set+'/'+changeCheckbox.checked);
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

