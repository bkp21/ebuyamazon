<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('localisation_settings');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('localisation_settings');?>
                                </h3>
                            </div>
							<div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                                <div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#local_settings" aria-controls="vendor-reviews" role="tab" data-toggle="tab" style="font-size:16px"><?php echo translate('local_settings');?></a></li>
                                        <li role="presentation"><a href="#currency" aria-controls="vendor-ratings" role="tab" data-toggle="tab" style="font-size:16px" onclick="currency_click();"><?php echo translate('currency');?></a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="local_settings">
											<?php echo form_open(base_url() . 'index.php/admin/localisation_settings/update/'); 
												foreach($all_local_settings as $row){
													if($row['type']=='datetime_format'){
														$datetime_format = $row['value'];
													}
													if($row['type']=='date_format'){
														$date_format = $row['value'];
													}
													if($row['type']=='weight_unit'){
														$weight_unit = $row['value'];
													}
													if($row['type']=='weight_decimal_places'){
														$weight_decimal_places = $row['value'];
													}
													if($row['type']=='weight_decimal_symbol'){
														$weight_decimal_symbol = $row['value'];
													}
													if($row['type']=='weight_thousands_separating_symbol'){
														$weight_thousands_separating_symbol = $row['value'];
													}
													if($row['type']=='length_unit'){
														$length_unit = $row['value'];
													}
													if($row['type']=='length_decimal_places'){
														$length_decimal_places = $row['value'];
													}
													if($row['type']=='length_decimal_symbol'){
														$length_decimal_symbol = $row['value'];
													}
													if($row['type']=='length_thousands_separating_symbol'){
														$length_thousands_separating_symbol = $row['value'];
													}
													if($row['type']=='currency_decimal_symbol'){
														$currency_decimal_symbol = $row['value'];
													}
													if($row['type']=='currency_thousands_separating_symbol'){
														$currency_thousands_separating_symbol = $row['value'];
													}
												}
											?>
											<div class="panel">
												<div class="panel-body">
													<h5 class="panel-title" style="color:#1cabe3;background-color:#edeeed;"><?php echo translate('date_format');?></h5>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('local_time/Date_format');?> :
																</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="datetime_format" value="<?php if($datetime_format !=''){ echo $datetime_format;}?>" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('local_date_format');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="date_format" value="<?php if($date_format !=''){ echo $date_format;}?>" />
														</div>
													</div>
													<h5 class="panel-title" style="color:#1cabe3;background-color:#edeeed;"><?php echo translate('weight_format');?></h5>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('weight_unit');?> :
														</label>
														<div class="col-sm-8">
															<select name="weight_unit" class="selectpicker dropup">
																<option value="lbs"<?php if($weight_unit =='lbs'){ echo "selected";}?>><?php echo translate('lbs');?></option>
																<option value="kg"<?php if($weight_unit =='kg'){ echo "selected";}?>><?php echo translate('kg');?></option>
															</select>
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('weight_decimal_places');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="weight_decimal_places" value="<?php if($weight_decimal_places !=''){ echo $weight_decimal_places;}?>" />
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('weight_decimal_symbol');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="weight_decimal_symbol" value="<?php if($weight_decimal_symbol !=''){ echo $weight_decimal_symbol;}?>" />
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('weight_thousands_separating_symbol');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="weight_thousands_separating_symbol" value="<?php if($weight_thousands_separating_symbol !=''){ echo $weight_thousands_separating_symbol;}?>" />
														</div>
													</div>
													<h5 class="panel-title" style="color:#1cabe3;background-color:#edeeed;"><?php echo translate('length_format');?></h5>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('length_unit');?> :
														</label>
														<div class="col-sm-8">
															<select name="length_unit" class="selectpicker dropup">
																<option value="inches"<?php if($length_unit =='inches'){ echo "selected";}?>><?php echo translate('inches');?></option>
																<option value="feet"<?php if($length_unit =='feet'){ echo "selected";}?>><?php echo translate('feet');?></option>
																<option value="centimeters"<?php if($length_unit =='centimeters'){ echo "selected";}?>><?php echo translate('centimeters');?></option>
															</select>
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('length_decimal_places');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="length_decimal_places" value="<?php if($length_decimal_places !=''){ echo $length_decimal_places;}?>" />
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('length_decimal_symbol');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="length_decimal_symbol" value="<?php if($length_decimal_symbol !=''){ echo $length_decimal_symbol;}?>" />
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('length_thousands_separating_symbol');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="length_thousands_separating_symbol" value="<?php if($length_thousands_separating_symbol !=''){ echo $length_thousands_separating_symbol;}?>" />
														</div>
													</div>
													<h5 class="panel-title" style="color:#1cabe3;background-color:#edeeed;"><?php echo translate('currency_format');?></h5>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('currency_decimal_symbol');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="currency_decimal_symbol" value="<?php if($currency_decimal_symbol !=''){ echo $currency_decimal_symbol;}?>" />
														</div>
													</div>
													<div class="form-group ">
														<label class="col-sm-4 control-label" for="demo-hor-2">
															<?php echo translate('currency_thousands_separating_symbol');?> :
														</label>
														<div class="col-sm-8">
															<input class="form-control" type="text" name="currency_thousands_separating_symbol" value="<?php if($currency_thousands_separating_symbol !=''){ echo $currency_thousands_separating_symbol;}?>" />
														</div>
													</div>
												</div>
												<div class="panel-footer text-right">
												<span class="btn btn-success submitter" data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' ><?php echo translate('save');?></span>
												</div>
											</div>
											<?php echo form_close();?>
										</div>
                                        <div role="tabpanel" class="tab-pane" id="currency">
                                            <?php //echo form_open("admin/localisation_settings") ?>
												<div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
												 class="col-md-12" >
												   <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
														onclick="ajax_set_full('add','<?php echo translate('add_currency'); ?>','<?php echo translate('successfully_added!'); ?>','currency_add',''); proceed('to_list');">
															<?php echo translate('add_currency');?>
													</button>
													<button class="btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn" 
														style="display:none;"  onclick="ajax_set_list();  proceed('to_add');"><?php echo translate('back_to_currency_list');?>
													</button>
												</div>
												<br>
												<div class="tab-pane fade active in" 
													 id="list" style="border:1px solid #ebebeb; border-radius:4px;">
												</div>
                                            <?php // echo form_close(); ?>
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
</div>
<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'localisation_settings';
	var list_cont_func = 'list';
	var dlt_cont_func = 'currency_delete';
	function proceed(type){
		if(type == 'to_list'){
			$(".pro_list_btn").show();
			$(".add_pro_btn").hide();
		} else if(type == 'to_add'){
			$(".add_pro_btn").show();
			$(".pro_list_btn").hide();
		}
	}
</script>