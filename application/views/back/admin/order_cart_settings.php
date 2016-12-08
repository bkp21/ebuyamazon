<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('order_cart_settings');?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
                foreach($data as $row){
					if($row['type']=='visitor_see_price'){
						$visitor_see_price = $row['value'];
					}
					if($row['type']=='visitor_may_add_item'){
						$visitor_may_add_item = $row['value'];
					}
					if($row['type']=='only_customer_group_members_can_add_items'){
						$only_customer_group_members_can_add_items = $row['value'];
					}
					if($row['type']=='allow_create_account'){
						$allow_create_account = $row['value'];
					}
					if($row['type']=='showcase_mode'){
						$showcase_mode = $row['value'];
					}
					if($row['type']=='visitor_mode'){
						$visitor_mode = $row['value'];
					}
					if($row['type']=='checkout_process_mode'){
						$checkout_process_mode = $row['value'];
					}
					if($row['type']=='checkout_payment_mode'){
						$checkout_payment_mode = $row['value'];
					}
					if($row['type']=='min_order_number'){
						$min_order_number = $row['value'];
					} 
					if($row['type']=='use_captcha_verfification_when_registering'){
						$use_captcha_verfification_when_registering = $row['value'];
					} 
					if($row['type']=='max_unique_items_in_the_cart'){
						$max_unique_items_in_the_cart = $row['value'];
					} 
					if($row['type']=='display_password_strength_meter'){
						$display_password_strength_meter = $row['value'];
					}  
					if($row['type']=='display_terms_and_conditions_checkbox'){
						$display_terms_and_conditions_checkbox = $row['value'];
					}  
					if($row['type']=='always_display_terms_and_conditions_checkbox'){
						$always_display_terms_and_conditions_checkbox = $row['value'];
					}  
					if($row['type']=='inventory_stock_update_at'){
						$inventory_stock_update_at = $row['value'];
					} 
					if($row['type']=='activate_shipping_for_each_product_separately'){
						$activate_shipping_for_each_product_separately = $row['value'];
					} 
					if($row['type']=='activate_product_reviews_for_all_products'){
						$activate_product_reviews_for_all_products = $row['value'];
					}  
					if($row['type']=='enable_vendor_ratings'){
						$enable_vendor_ratings = $row['value'];
					}  
					if($row['type']=='product_subscribe_cancel_option'){
						$product_subscribe_cancel_option = $row['value'];
					}  
					if($row['type']=='product_subscribe_change_period_option'){
						$product_subscribe_change_period_option = $row['value'];
					}  
					if($row['type']=='min_order_subtotal_level_0'){
						$min_order_subtotal_level_0 = $row['value'];
					}  
					if($row['type']=='min_order_subtotal_level_1'){
						$min_order_subtotal_level_1 = $row['value'];
					}  
					if($row['type']=='min_order_subtotal_level_2'){
						$min_order_subtotal_level_2 = $row['value'];
					}   
					if($row['type']=='min_order_subtotal_level_3'){
						$min_order_subtotal_level_3 = $row['value'];
					}   
					if($row['type']=='after_login_go_to'){
						$after_login_go_to = $row['value'];
					}   
					if($row['type']=='after_signup_go_to'){
						$after_signup_go_to = $row['value'];
					}   
					if($row['type']=='after_product_added_go_to'){
						$after_product_added_go_to = $row['value'];
					}    
					if($row['type']=='continue_shopping_to'){
						$continue_shopping_to = $row['value'];
					}     
					if($row['type']=='after_removing_go_to'){
						$after_removing_go_to = $row['value'];
					}     
					if($row['type']=='show_additional_profile_navigation'){
						$show_additional_profile_navigation = $row['value'];
					}      
					if($row['type']=='cart_button_sequence'){
						$cart_button_sequence = $row['value'];
					}      
					if($row['type']=='displaythe_EMPTY_CART_button_in_your_cart'){
						$displaythe_EMPTY_CART_button_in_your_cart = $row['value'];
					}      
					if($row['type']=='attribute_option_style_in_cart'){
						$attribute_option_style_in_cart = $row['value'];
					}      
					if($row['type']=='cart_style_when_cart_is_empty'){
						$cart_style_when_cart_is_empty = $row['value'];
					}      
					if($row['type']=='display_tabs_in_product_details_page'){
						$display_tabs_in_product_details_page = $row['value'];
					}      
					if($row['type']=='allows_you_to_share_to_facebook_twitter'){
						$allows_you_to_share_to_facebook_twitter = $row['value'];
					}       
					if($row['type']=='email_updates_available'){
						$email_updates_available = $row['value'];
					}       
					if($row['type']=='email_newsletters_available'){
						$email_newsletters_available = $row['value'];
					}       
					if($row['type']=='email_confirmations_necessary'){
						$email_confirmations_necessary = $row['value'];
					}        
					if($row['type']=='wish_list_enabled'){
						$wish_list_enabled = $row['value'];
					}       
					if($row['type']=='rma_enabled'){
						$rma_enabled = $row['value'];
					}      
					if($row['type']=='allows_admin_to_enable_RMA_for_all_products'){
						$allows_admin_to_enable_RMA_for_all_products = $row['value'];
					}     
					if($row['type']=='deposit_enabled'){
						$deposit_enabled = $row['value'];
					}     
					if($row['type']=='deposit_percentage'){
						$deposit_percentage = $row['value'];
					}     
					if($row['type']=='donation_option_at_invoice_page'){
						$donation_option_at_invoice_page = $row['value'];
					} 
				}

            ?>
            <div class="col-sm-12">
            <div class="panel panel-bordered-dark">
                <?php
                    echo form_open(base_url() . 'index.php/admin/order_cart_settings/set/', array(
                        'class'     => 'form-horizontal',
                        'method'    => 'post'
                    ));
                ?>
                    <div class="panel-body">
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo translate('general_settings');?>
							</h3>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('visitor_see_price_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="visitor_see_price" class='sw1' data-set='visitor_see_price' data-msg_enabled="<?php echo translate('visitor_see_price_enabled');?>" data-msg_disabled="<?php echo translate('visitor_see_price_disabled');?>" type="checkbox" <?php if($visitor_see_price == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('visitor_may_add_item_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="visitor_may_add_item" class='sw1' data-set='visitor_may_add_item' data-msg_enabled="<?php echo translate('visitor_may_add_item_enabled');?>" data-msg_disabled="<?php echo translate('visitor_may_add_item_disabled');?>" type="checkbox" <?php if($visitor_may_add_item == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('only_customer_group_members_can_add_items_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="only_customer_group_members_can_add_items" class='sw1' data-set='only_customer_group_members_can_add_items' data-msg_enabled="<?php echo translate('only_customer_group_members_can_add_items_enabled');?>" data-msg_disabled="<?php echo translate('only_customer_group_members_can_add_items_disabled');?>" type="checkbox" <?php if($only_customer_group_members_can_add_items == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('allow_create_account_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="allow_create_account" id="allow_create_account" class="demo-cs-multiselect required">
										<option value="yes" <?php if($allow_create_account=='yes'){echo 'selected';} ?> ><?php echo translate('yes');?></option>
										<option value="no" <?php if($allow_create_account=='no'){echo 'selected';} ?>><?php echo translate('no');?></option>
										<option value="allow_user_to_decide" <?php if($allow_create_account=='allow_user_to_decide'){echo 'selected';} ?> ><?php echo translate('allow_user_to_decide');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('showcase_mode_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="showcase_mode" class='sw1' data-set='showcase_mode' data-msg_enabled="<?php echo translate('showcase_mode_enabled');?>" data-msg_disabled="<?php echo translate('showcase_mode_disabled');?>" type="checkbox" <?php if($showcase_mode == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('visitor_mode_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="visitor_mode" id="visitor_mode" class="demo-cs-multiselect required">
										<option value="registered" <?php if($visitor_mode=='registered'){echo 'selected';} ?> ><?php echo translate('registered');?></option>
										<option value="all" <?php if($visitor_mode!='registered'){echo 'selected';} ?>><?php echo translate('all');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('checkout_process_mode_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="checkout_process_mode" id="checkout_process_mode" class="demo-cs-multiselect required">
										<option value="traditional" <?php if($checkout_process_mode=='traditional'){echo 'selected';} ?> ><?php echo translate('traditional');?></option>
										<option value="opc" <?php if($checkout_process_mode=='opc'){echo 'selected';} ?>><?php echo translate('opc');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('checkout_payment_mode_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="checkout_payment_mode" id="checkout_payment_mode" class="demo-cs-multiselect required">
										<option value="mall" <?php if($checkout_payment_mode=='mall'){echo 'selected';} ?> ><?php echo translate('mall');?></option>
										<option value="vendor" <?php if($checkout_payment_mode=='vendor'){echo 'selected';} ?>><?php echo translate('vendor');?></option>
										<option value="hybrid" <?php if($checkout_payment_mode=='hybrid'){echo 'selected';} ?>><?php echo translate('hybrid');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('min_order_number_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="min_order_number" value="<?php echo $min_order_number; ?>" id="min_order_number" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('use_captcha_verfification_when_registering_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="use_captcha_verfification_when_registering" class='sw1' data-set='use_captcha_verfification_when_registering' data-msg_enabled="<?php echo translate('use_captcha_verfification_when_registering_enabled');?>" data-msg_disabled="<?php echo translate('use_captcha_verfification_when_registering_disabled');?>" type="checkbox" <?php if($use_captcha_verfification_when_registering == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('max_unique_items_in_the_cart_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="max_unique_items_in_the_cart" value="<?php echo $max_unique_items_in_the_cart; ?>" id="max_unique_items_in_the_cart" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('display_password_strength_meter_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="display_password_strength_meter" class='sw1' data-set='display_password_strength_meter' data-msg_enabled="<?php echo translate('display_password_strength_meter_enabled');?>" data-msg_disabled="<?php echo translate('display_password_strength_meter_disabled');?>" type="checkbox" <?php if($display_password_strength_meter == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('display_terms_and_conditions_checkbox_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="display_terms_and_conditions_checkbox" class='sw1' data-set='display_terms_and_conditions_checkbox' data-msg_enabled="<?php echo translate('display_terms_and_conditions_checkbox_enabled');?>" data-msg_disabled="<?php echo translate('display_terms_and_conditions_checkbox_disabled');?>" type="checkbox" <?php if($display_terms_and_conditions_checkbox == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('always_display_terms_and_conditions_checkbox_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="always_display_terms_and_conditions_checkbox" class='sw1' data-set='always_display_terms_and_conditions_checkbox' data-msg_enabled="<?php echo translate('always_display_terms_and_conditions_checkbox_enabled');?>" data-msg_disabled="<?php echo translate('always_display_terms_and_conditions_checkbox_disabled');?>" type="checkbox" <?php if($always_display_terms_and_conditions_checkbox == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('inventory_stock_update_at_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="inventory_stock_update_at" id="inventory_stock_update_at" class="demo-cs-multiselect required">
										<option value="order_completed" <?php if($inventory_stock_update_at=='order_completed'){echo 'selected';} ?> ><?php echo translate('order_completed');?></option>
										<option value="payment_received" <?php if($inventory_stock_update_at=='payment_received'){echo 'selected';} ?>><?php echo translate('payment_received');?></option>
										<option value="order_placed" <?php if($inventory_stock_update_at=='order_placed'){echo 'selected';} ?>><?php echo translate('order_placed');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('activate_shipping_for_each_product_separately_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="activate_shipping_for_each_product_separately" class='sw1' data-set='activate_shipping_for_each_product_separately' data-msg_enabled="<?php echo translate('activate_shipping_for_each_product_separately_enabled');?>" data-msg_disabled="<?php echo translate('activate_shipping_for_each_product_separately_disabled');?>" type="checkbox" <?php if($activate_shipping_for_each_product_separately == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('activate_product_reviews_for_all_products_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="activate_product_reviews_for_all_products" class='sw1' data-set='activate_product_reviews_for_all_products' data-msg_enabled="<?php echo translate('activate_product_reviews_for_all_products_enabled');?>" data-msg_disabled="<?php echo translate('activate_product_reviews_for_all_products_disabled');?>" type="checkbox" <?php if($activate_product_reviews_for_all_products == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('enable_vendor_ratings_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="enable_vendor_ratings" class='sw1' data-set='enable_vendor_ratings' data-msg_enabled="<?php echo translate('enable_vendor_ratings_enabled');?>" data-msg_disabled="<?php echo translate('enable_vendor_ratings_disabled');?>" type="checkbox" <?php if($enable_vendor_ratings == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('product_subscribe_cancel_option_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="product_subscribe_cancel_option" class='sw1' data-set='product_subscribe_cancel_option' data-msg_enabled="<?php echo translate('product_subscribe_cancel_option_enabled');?>" data-msg_disabled="<?php echo translate('product_subscribe_cancel_option_disabled');?>" type="checkbox" <?php if($product_subscribe_cancel_option == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('product_subscribe_change_period_option_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="product_subscribe_change_period_option" class='sw1' data-set='product_subscribe_change_period_option' data-msg_enabled="<?php echo translate('product_subscribe_change_period_option_enabled');?>" data-msg_disabled="<?php echo translate('product_subscribe_change_period_option_disabled');?>" type="checkbox" <?php if($product_subscribe_change_period_option == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo translate('minimum_order_subtotals');?>
							</h3>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('min_order_subtotal_level_0_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="min_order_subtotal_level_0" value="<?php echo $min_order_subtotal_level_0; ?>" id="min_order_subtotal_level_0" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('min_order_subtotal_level_1_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="min_order_subtotal_level_1" value="<?php echo $min_order_subtotal_level_1; ?>" id="min_order_subtotal_level_1" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('min_order_subtotal_level_2_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="min_order_subtotal_level_2" value="<?php echo $min_order_subtotal_level_2; ?>" id="min_order_subtotal_level_2" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('min_order_subtotal_level_3_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="min_order_subtotal_level_3" value="<?php echo $min_order_subtotal_level_3; ?>" id="min_order_subtotal_level_3" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo translate('cart_action_redirects');?>
							</h3>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('after_login_go_to_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="after_login_go_to" id="after_login_go_to" class="demo-cs-multiselect required">
										<option value="cart" <?php if($after_login_go_to=='cart'){echo 'selected';} ?> ><?php echo translate('cart');?></option>
										<option value="homepage" <?php if($after_login_go_to=='homepage'){echo 'selected';} ?>><?php echo translate('homepage');?></option>
										<option value="orders" <?php if($after_login_go_to=='orders'){echo 'selected';} ?>><?php echo translate('orders');?></option>
										<option value="profile" <?php if($after_login_go_to=='profile'){echo 'selected';} ?>><?php echo translate('profile');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('after_signup_go_to_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="after_signup_go_to" id="after_signup_go_to" class="demo-cs-multiselect required">
										<option value="cart" <?php if($after_signup_go_to=='cart'){echo 'selected';} ?> ><?php echo translate('cart');?></option>
										<option value="homepage" <?php if($after_signup_go_to=='homepage'){echo 'selected';} ?>><?php echo translate('homepage');?></option>
										<option value="orders" <?php if($after_signup_go_to=='orders'){echo 'selected';} ?>><?php echo translate('orders');?></option>
										<option value="profile" <?php if($after_signup_go_to=='profile'){echo 'selected';} ?>><?php echo translate('profile');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('after_product_added_go_to_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="after_product_added_go_to" id="after_product_added_go_to" class="demo-cs-multiselect required">
										<option value="current_page" <?php if($after_product_added_go_to=='current_page'){echo 'selected';} ?> ><?php echo translate('current_page');?></option>
										<option value="cart_page" <?php if($after_product_added_go_to=='cart_page'){echo 'selected';} ?>><?php echo translate('cart_page');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('continue_shopping_to_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="continue_shopping_to" id="continue_shopping_to" class="demo-cs-multiselect required">
										<option value="last_page" <?php if($continue_shopping_to=='last_page'){echo 'selected';} ?> ><?php echo translate('last_page');?></option>
										<option value="catalog_page" <?php if($continue_shopping_to=='catalog_page'){echo 'selected';} ?>><?php echo translate('catalog_page');?></option>
										<option value="front_page" <?php if($continue_shopping_to=='front_page'){echo 'selected';} ?>><?php echo translate('front_page');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('after_removing_go_to_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="after_removing_go_to" id="after_removing_go_to" class="demo-cs-multiselect required">
										<option value="last_page" <?php if($after_removing_go_to=='last_page'){echo 'selected';} ?> ><?php echo translate('last_page');?></option>
										<option value="cart_page" <?php if($after_removing_go_to=='cart_page'){echo 'selected';} ?>><?php echo translate('cart_page');?></option>
										<option value="front_page" <?php if($after_removing_go_to=='front_page'){echo 'selected';} ?>><?php echo translate('front_page');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo translate('cart_style_and_navigation');?>
							</h3>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('show_additional_profile_navigation_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="show_additional_profile_navigation" class='sw1' data-set='show_additional_profile_navigation' data-msg_enabled="<?php echo translate('show_additional_profile_navigation_enabled');?>" data-msg_disabled="<?php echo translate('show_additional_profile_navigation_disabled');?>" type="checkbox" <?php if($show_additional_profile_navigation == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('cart_button_sequence_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="cart_button_sequence" id="cart_button_sequence" class="demo-cs-multiselect required">
										<option value="normal" <?php if($cart_button_sequence=='normal'){echo 'selected';} ?> ><?php echo translate('normal');?></option>
										<option value="reverse" <?php if($cart_button_sequence=='reverse'){echo 'selected';} ?>><?php echo translate('reverse');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('display_the_EMPTY_CART_button_in_your_cart_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="displaythe_EMPTY_CART_button_in_your_cart" class='sw1' data-set='displaythe_EMPTY_CART_button_in_your_cart' data-msg_enabled="<?php echo translate('display_the_EMPTY_CART_button_in_your_cart_enabled');?>" data-msg_disabled="<?php echo translate('display_the_EMPTY_CART_button_in_your_cart_disabled');?>" type="checkbox" <?php if($displaythe_EMPTY_CART_button_in_your_cart == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('attribute/option_style_in_cart_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="attribute_option_style_in_cart" id="attribute_option_style_in_cart" class="demo-cs-multiselect required">
										<option value="short" <?php if($attribute_option_style_in_cart=='short'){echo 'selected';} ?> ><?php echo translate('short');?></option>
										<option value="verbose" <?php if($attribute_option_style_in_cart=='verbose'){echo 'selected';} ?>><?php echo translate('verbose');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('cart_style_when_cart_is_empty_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <select name="cart_style_when_cart_is_empty" id="cart_style_when_cart_is_empty" class="demo-cs-multiselect required">
										<option value="images" <?php if($cart_style_when_cart_is_empty=='images'){echo 'selected';} ?> ><?php echo translate('images');?></option>
										<option value="text" <?php if($cart_style_when_cart_is_empty=='text'){echo 'selected';} ?>><?php echo translate('text');?></option>
									</select>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('display_tabs_in_product_details_page_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="display_tabs_in_product_details_page" class='sw1' data-set='display_tabs_in_product_details_page' data-msg_enabled="<?php echo translate('display_tabs_in_product_details_page_enabled');?>" data-msg_disabled="<?php echo translate('display_tabs_in_product_details_page_disabled');?>" type="checkbox" <?php if($display_tabs_in_product_details_page == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('allows_you_to_share_your_product_to_social_networks_such_as_facebook,_twitter_etc._:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="allows_you_to_share_to_facebook_twitter" class='sw1' data-set='allows_you_to_share_to_facebook_twitter' data-msg_enabled="<?php echo translate('allows_you_to_share_to_facebook_twitter_enabled');?>" data-msg_disabled="<?php echo translate('allows_you_to_share_to_facebook_twitter_disabled');?>" type="checkbox" <?php if($allows_you_to_share_to_facebook_twitter == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo translate('email_notifications');?>
							</h3>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('email_updates_available_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="email_updates_available" class='sw1' data-set='email_updates_available' data-msg_enabled="<?php echo translate('email_updates_available_enabled');?>" data-msg_disabled="<?php echo translate('email_updates_available_disabled');?>" type="checkbox" <?php if($email_updates_available == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('email_newsletters_available_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="email_newsletters_available" class='sw1' data-set='email_newsletters_available' data-msg_enabled="<?php echo translate('email_newsletters_available_enabled');?>" data-msg_disabled="<?php echo translate('email_newsletters_available_disabled');?>" type="checkbox" <?php if($email_newsletters_available == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('email_confirmations_necessary_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="email_confirmations_necessary" class='sw1' data-set='email_confirmations_necessary' data-msg_enabled="<?php echo translate('email_confirmations_necessary_enabled');?>" data-msg_disabled="<?php echo translate('email_confirmations_necessary_disabled');?>" type="checkbox" <?php if($email_confirmations_necessary == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo translate('additional_functions');?>
							</h3>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('wish_list_enabled_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="wish_list_enabled" class='sw1' data-set='wish_list_enabled' data-msg_enabled="<?php echo translate('wish_list_enabled');?>" data-msg_disabled="<?php echo translate('wish_list_disabled');?>" type="checkbox" <?php if($wish_list_enabled == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('RMA_enabled_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="rma_enabled" class='sw1' data-set='rma_enabled' data-msg_enabled="<?php echo translate('RMA_enabled');?>" data-msg_disabled="<?php echo translate('RMA_disabled');?>" type="checkbox" <?php if($rma_enabled == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('allows_admin_to_enable_RMA_for_all_products_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="allows_admin_to_enable_RMA_for_all_products" class='sw1' data-set='allows_admin_to_enable_RMA_for_all_products' data-msg_enabled="<?php echo translate('allows_admin_to_enable_RMA_for_all_products_enabled');?>" data-msg_disabled="<?php echo translate('allows_admin_to_enable_RMA_for_all_products_disabled');?>" type="checkbox" <?php if($allows_admin_to_enable_RMA_for_all_products == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-lg-4 col-md-6 col-sm-6 col-xs-6 control-label" for="demo-hor-inputemail" ><?php echo translate('deposit_enabled_:');?></label>
                            <div class="col-sm-6">
                                <div class="col-sm-">
                                    <input id="deposit_enabled" class='sw1' data-set='deposit_enabled' data-msg_enabled="<?php echo translate('deposit_enabled');?>" data-msg_disabled="<?php echo translate('deposit_disabled');?>" type="checkbox" <?php if($deposit_enabled == 'ok'){ ?>checked<?php } ?> />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('deposit_percentage_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="deposit_percentage" value="<?php echo $deposit_percentage; ?>" id="deposit_percentage" for="demo-hor-4" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="demo-hor-4">
								<?php echo translate('donation_option_at_invoice_page_:');?>
									</label>
							<div class="col-sm-6">
								<input type="text" name="donation_option_at_invoice_page" value="<?php echo $donation_option_at_invoice_page; ?>" id="donation_option_at_invoice_page" for="demo-hor-4" class="form-control">
							</div>
						</div>
                    </div>
                    <div class="panel-footer text-right">
                        <span class="btn btn-info submitter" 
                        	data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
								<?php echo translate('save');?>
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
	var module = 'order_cart_settings';
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
			  ajax_load(base_url+'index.php/'+user_type+'/order_cart_settings/'+set+'/'+changeCheckbox.checked);
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
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
