<div id="content-container">
            <?php include('dash-header.php');?>
    <div>
        <h1 class="page-header text-overflow" ><?php echo translate('product( insert )') ?></h1>
    </div>
    <div class="smsalert smsalert-success">
        <div>
            <b> Please note: required fields are bold. </b><br><br>
           Decimal points and commas are accepted in The Product Price and Weight fields. 
        </div><br><br>
        <a href="<?php echo site_url("admin/search_product") ?>"><?php echo translate('back_to_product_list'); ?></a> 
    </div>
    <div class="row">
    <div class="col-md-12 form-horizontal">
   
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                        <div class="tab-pane fade active in"  id="" >
                            <div class="tab-pane fade active in"  id="" >
                            <?php if (validation_errors()): ?>
                                <div class="alert alert-danger">
                                    <?php echo validation_errors(); ?>
                                </div>
                            <?php endif ?>
                                <?php echo form_open_multipart("admin/product_insert") ?>
                                    <div class="panel-body">
									
                            		
                                        <div class="form-group btm_border" style="width:100%;">
									<div style="width:50%; float: left;border-right: 1px solid #ccc;border-spacing: 0;">
                                                <label  for="demo-hor-13"><?php echo translate('approved_for_the_storefront :');?></label></div>
                                                <div class="col-sm-6" style="width:50%;">
                                                        <input type="radio" name="is_approved" value="approved" style=" width: 4%;" /><?php echo translate('approved'); ?>
                                                        <input type="radio" name="is_approved"  value="pending" style=" width: 4%;" checked="checked"/><?php echo translate('pending'); ?>
                                                        <input type="radio" name="is_approved"   value="declined" style=" width: 4%;"/><?php echo translate('declined'); ?>
                                                </div>
                                        </div>
										<div class="form-group btm_border"  style="width:100%;">
										<div style="width:50%;float: left;border-right: 1px solid #ccc;">
                                            <label  for="demo-hor-5"><?php echo translate('approval_note :');?></label>
											</div>
                                            <div class="col-sm-6" style="width:50%; float:left;">
                                                <textarea name="approval_note" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>    
                                        <div class="panel-heading">
                                             <div class="panel-control" style="float: left;">
                                                 <ul class="nav nav-tabs">
                                                     <li class="active">
                                                         <a data-toggle="tab" href="#product_details"><?php echo translate('product_info'); ?></a>
                                                     </li>
                                                     <li>
                                                         <a data-toggle="tab" href="#customer_choice_options"><?php echo translate('customer_choice_options'); ?></a>
                                                     </li>
                                                     <li>
                                                         <a data-toggle="tab" href="#inventory"><?php echo translate('inventory'); ?></a>
                                                     </li>
                                                      <li>
                                                         <a data-toggle="tab" href="#business_details"><?php echo translate('quantity_discount'); ?></a>
                                                     </li>
                                                 </ul>
                                             </div>
                                       </div>
                                   <div class="panel-body">
                                    <?php if($this->session->flashdata('success')): ?>
                                        <div class="alert alert-success">
                                            <?php  echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif?>
                <div class="tab-base">
                    <!--Tabs Content-->                    
                    <div class="tab-content">
                        <div id="product_details" class="tab-pane fade active in">
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('category(s)_product_will_be_listed_in');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('select_vendor');?></label>
                                <div class="col-sm-6">
                                    <?php echo $this->crud_model->select_html('vendor','vendor','name','add','demo-chosen-select','','',''); ?>
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-2"><?php echo translate('category');?></label>
                                <div class="col-sm-6">
                                    <select name="category" class="demo-chosen-select form-control required" id="select_cat" onchange="cat_type(this.value);">
                                      <option value="0"><?php echo translate('select_category'); ?></option> 
                                      <?php foreach ($all_category as $category) { ?>
                                          <option value="<?php echo $category['category_id']; ?>">
                                          <?php echo $category['category_name']; ?>
                                          </option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
<!--                             <div class="form-group btm_border" id="sub" style="display:none;">
                                <label class="col-sm-4 control-label" for="demo-hor-3"><?php echo translate('sub-category');?></label>
                                <div class="col-sm-6" id="sub_cat">
                                </div>
                            </div>-->
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-3"><?php echo translate('tags');?></label>
                                <div class="col-sm-6">
                                    <select name="tag[]" class="demo-chosen-select form-control" multiple>
                                        <?php foreach ($all_tags as $tag){  ?>
                                             <option value="<?php echo $tag['manage_tags_id']; ?>">
                                                 <?php echo $tag['tag_name']; ?>
                                             </option>
                                         <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b> <?php echo translate('product_detail');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-4"><?php echo translate('product_title');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="demo-hor-1" placeholder="<?php echo translate('product_title');?>" class="form-control required">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5">
                                    <?php echo translate('meta_keywords');?>
                                        </label>
                                <div class="col-sm-6">
                                    <input type="text" name="meta_keyword" id="demo-hor-2" placeholder="<?php echo translate('meta_keyword');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-6">
                                    <?php echo translate('meta_title_tag');?>
                                        </label>
                                <div class="col-sm-6">
                                    <input type="text" name="meta_title_tag" id="demo-hor-3" placeholder="<?php echo translate('meta_title_tag');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group btm_border" id="brn" >
                                <label class="col-sm-4 control-label" for="demo-hor-7"><?php echo translate('brand');?></label>
                                <div class="col-sm-6" id="brand" >
                                    <?php echo $this->crud_model->select_html('brand','brand','name','add','demo-chosen-select','','',''); ?>
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-8"><?php echo translate('condition');?></label>
                                <div class="col-sm-6">
                                    <input name="is_condition" onchange="condition_type(this.value);" type="radio" value="0" checked="checked"/><?php echo translate('new');?><br/>
                                    <input name="is_condition" onchange="condition_type(this.value);" type="radio" value="1"/><?php echo translate('used');?>
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-9"><?php echo translate('condition_details');?></label>
                                <div class="col-sm-6" id="new_condition"  style="display:block;">
                                    <select class="demo-chosen-select" name="item_condition_new">
                                        <?php foreach($all_dynamic_list as $dylist){
                                                if($dylist['list_type']=='product_condition_new'){
                                        ?>
                                             <option value="<?php echo $dylist['item_id']; ?>">
                                                 <?php echo $dylist['item_name'];?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="col-sm-6" id="used_condition" style="display:none;">
                                    <select class="demo-chosen-select" name="item_condition_used">
                                        <?php foreach($all_dynamic_list as $dylist){
                                              if($dylist['list_type']=='product_condition_used'){
                                           ?>
                                        <option value="<?php echo $dylist['item_id']; ?>">
                                                <?php echo $dylist['item_name'];?></option>
                                        <?php } } ?>
                                    </select>  
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-10"><?php echo translate('priority');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="priority" min="0" value="0" id="demo-hor-10" placeholder="<?php echo translate('priority'); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-11"><?php echo translate('manufacturer_product_number_(MPN)');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="mpn" id="demo-hor-11" placeholder="<?php echo translate('manufacturer_product_number'); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-12"><?php echo translate('global_trade_item_number_(GTIN)');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="gtin" id="demo-hor-12"  placeholder="<?php echo translate('global_trade_item_number'); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-13"><?php echo translate('product_subtype');?></label>
                                <div class="col-sm-6">
                                    <input type="radio" name="product_subtype" id="demo-hor-13"  value="normal" checked="checked"/><?php echo translate('normal'); ?>
                                    <input type="radio" name="product_subtype" id="demo-hor-13"  value="subscribe"/><?php echo translate('subscribe'); ?>
                                    <input type="radio" name="product_subtype" id="demo-hor-13"  value="music"/><?php echo translate('music'); ?>
                                    <input type="radio" name="product_subtype" id="demo-hor-13"  value="service"/><?php echo translate('shop_services '); ?>
                                </div>
                            </div>

                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('price_&_tax');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-14"><?php echo translate('item_price');?></label>
                                <div class="col-sm-4">
                                    <input type="number" min="0.00" name="item_price" id="demo-hor-14" placeholder="<?php echo translate('item_price'); ?>" value="0" class="form-control required">
                                </div>
                                <div class="col-sm-2">
                                    <input type="hidden" name="call_for_price" value="no">
                                    <input type="checkbox" name="call_for_price" value="yes"> <?php echo translate('call_for_price');?>
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-15"><?php echo translate('sale_price');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="sale_price" id="demo-hor-15" min='0' step='.01'  placeholder="<?php echo translate('sale_price');?>" value="0.00" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-16"><?php echo translate('is_this_a_taxable_item?');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="is_taxable" value="no">
                                    <input type="checkbox" name="is_taxable"  id="demo-hor-16" value="yes" checked="checked">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-17"><?php echo translate('tax_rate_at_product_level');?></label>
                                <div class="col-sm-6">
                                     <input type="number" name="tax_rate" min="0" step='.01' id="demo-hor-17" placeholder="<?php echo translate('tax_rate'); ?>" value="0.00" class="form-control">
                                </div>
                            </div>
                            
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('suppliers');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-18"><?php echo translate('supplier_price');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="supplier_price" min="0" step='.01' value="0.00" id="demo-hor-18"  placeholder="<?php echo translate('supplier_price'); ?>" class="form-control  required">
                                </div>
                            </div>

                           <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-19"><?php echo translate('supplier');?></label>
                                <div class="col-sm-6">
                                    <?php echo $this->crud_model->select_html('suppliers','suppliers','supplier_name','edit','demo-chosen-select required','','',''); ?>
                                </div>
                            </div>

                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('shipping');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-20"><?php echo translate('free_shipping');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="free_shipping" value="no">
                                    <input type="checkbox" name="free_shipping"  id="demo-hor-5" value="yes">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-21"><?php echo translate('product_is_available_in_the_following_countries');?></label>
                                <div class="col-sm-6">
                                    <select name="country[]" id="myDropDown" class="demo-chosen-select form-control" multiple>
                                        <option value="0"><?php echo translate('all_countries');?></option> 
                                    <?php foreach ($all_country as $country){ ?>
                                         <option value="<?php echo $country['id']; ?>">
                                             <?php echo $country['country_name']; ?>
                                         </option>
                                         <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('unit_weight(kg)');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="weight" min="0" step='.01' value="0.00" id="demo-hor-5" placeholder="<?php echo translate('unit_weight'); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('unit');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="unit" id="demo-hor-5"  placeholder="<?php echo translate('unit_(e.g._kg,_pc_etc.)'); ?>" class="form-control unit required">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('shipping_price_for_product_level');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="shipping_price" min="0" step='.01' id="demo-hor-5" placeholder="<?php echo translate('shipping_price'); ?>" value="0" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('inter_pack/casepack');?></label>
                                <div class="col-sm-3">
                                   <input type="text" name="inter_pack" id="demo-hor-5" placeholder="<?php echo translate('inter_pack'); ?>" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                   <input type="text" name="case_pack" id="demo-hor-5" placeholder="<?php echo translate('case_pack'); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('dimensions_( width x length x height )');?></label>
                                <div class="col-sm-2">
                                    <input type="text" name="dimension_width" id="demo-hor-5" placeholder="<?php echo translate('width'); ?>" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                   <input type="text" name="dimension_height" id="demo-hor-5" placeholder="<?php echo translate('height'); ?>" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                   <input type="text" name="dimension_length" id="demo-hor-5" placeholder="<?php echo translate('length'); ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('shipping_by');?></label>
                                <div class="col-sm-6">
                                    <input type="radio" name="shipping_by" id="demo-hor-5"  value="mall"/><?php echo translate('mall'); ?><br>
                                    <input type="radio" name="shipping_by" id="demo-hor-5"  value="vendor" checked="checked"/><?php echo translate('vendor'); ?>
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('shipping_in_(days)');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="shipping_days" min="0" value="0" id="demo-hor-5" placeholder="<?php echo translate('shipping_days'); ?>" class="form-control">
                                </div>
                            </div>
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('availability');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('is_this_product_available?');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="product_available" value="no">
                                    <input type="checkbox" name="product_available"  id="demo-hor-5" value="yes" checked="checked">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('minimum/_maximum_quantity_in_order');?></label>
                                <div class="col-sm-2">
                                    <input type="number" name="min_order" value="1" id="demo-hor-5" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <img src="<?php echo base_url(); ?>template/img/ic_arrow_topa.gif">Mini</div>
                                <div class="col-sm-2">
                                    <input type="number" name="max_order" id="demo-hor-5" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <img src="<?php echo base_url(); ?>template/img/ic_arrow_topa.gif">Max
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('product_available_date');?></label>
                                    <div class="col-sm-4">
                                         <input id="start-date" name="available_date" class="form-control">
                                    </div>
                            </div>

                            <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('product_expire_date');?></label>
                                    <div class="col-sm-4">
                                        <input id="end-date" name="product_expire_date" class="form-control">
                                    </div>
                            </div>

                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('special_pages');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('mark_product_as  "_hot_deal "?');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="is_hotdeal" value="no">
                                    <input type="checkbox" name="is_hotdeal"  id="demo-hor-5" value="yes">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('show_product_on_home_page?');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="is_home" value="no">
                                    <input type="checkbox" name="is_home"  id="demo-hor-5" value="yes">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('show_product_on_vendor_home_page?');?></label>
                                <div class="col-sm-6">
                                     <input type="hidden" name="is_vendor_home" value="no">
                                    <input type="checkbox" name="is_vendor_home"  id="demo-hor-5" value="yes">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('mark_product_as  "_vendor_special "?');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="is_vendor_special" value="no">
                                    <input type="checkbox" name="is_vendor_special"  id="demo-hor-5" value="yes">
                                </div>
                            </div>

                             <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('misc._properties');?></b>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('use_as_template');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="is_template" value="0">
                                    <input type="checkbox" name="is_template"  id="demo-hor-5" value="1">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('product_more_information_template');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="user_req" value="0">
                                    <input type="checkbox" name="user_req"  id="demo-hor-5" value="1">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('price_offers');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="price_offer" value="0">
                                    <input type="checkbox" name="price_offer"  id="demo-hor-5" value="1">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('RMA_available');?></label>
                                <div class="col-sm-6">
                                    <input type="hidden" name="rmaactive" value="0">
                                    <input type="checkbox" name="rmaactive"  id="demo-hor-5" value="0" checked="checked">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                               <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('return_and_refund_policy');?></label>
                                <div class="col-sm-6" id="used_condition">
                                    <select class="demo-chosen-select" name="refund_days">
                                        <?php foreach($all_dynamic_list as $dylist){
                                              if($dylist['list_type']=='refund_days'){
                                        ?>
                                        <option value="<?php echo $dylist['item_id']; ?>">
                                                <?php echo $dylist['item_name'];?></option>
                                        <?php } } ?>
                                    </select>  
                                </div>
                            </div>

                             <div class="form-group btm_border">
                               <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('return_shipping_payment');?></label>
                                <div class="col-sm-6" id="used_condition">
                                    <select class="demo-chosen-select" name="refund_shipping">
                                       <option value="buyer"><?php echo translate('buyer_pays_return_shipping') ?></option>
                                       <option value="seller"><?php echo translate('seller_pays_return_shipping')?></option>
                                    </select>  
                                </div>
                            </div>

                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('product_fields');?></b>
                            </div>

                            <div class="form-group btm_border">
                               <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('category_product_fields');?></label>
                                <div class="col-sm-6" id="field_group_cat_div">
                                    <select class="demo-chosen-select" name="field_group_cat"  id="field_group_cat">
                                            
                                    </select>  
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('global_product_fields');?></label>
                                <div class="col-sm-6">
                                    <select class="demo-chosen-select"  id="select_field" onchange="field_type(this.value);">
                                        <option value="0"><?php echo translate(none);?></option>
                                        <?php foreach($all_field_group as $grpdata) {
                                            if($grpdata['is_default']=='0' && $grpdata['category_id']=='null'){
                                        ?>
                                        <option value="<?php echo $grpdata['product_field_group_id'];?>"><?php echo $grpdata['group_name'];?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                            <div  id="field_group_def_div">
                                    
                            </div>
                                <?php foreach($all_field_group as $grpdata) {
                                        if($grpdata['is_default']=='1'){
                                ?>
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate($grpdata['group_name']);?></b>
                            </div>
                            
                            <div class="form-group btm_border">
                                <?php
                                foreach($all_default_group as $defallt) { ?>
                                    <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo $defallt['field_name']; ?></label>
                                    <div class="col-sm-6">
                                        <input type="<?php echo $defallt['field_type']; ?>" class="form-control">
                                    </div>
                               <?php  } ?>
                            </div>
                             <?php } } ?>
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('digital_product_properties');?></b>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-12"><?php echo translate('is_this_a_digital_download');?></label>
                                <div class="col-sm-6">
                                    <input id='swp' type="checkbox" name="download" value="ok" />
                                </div>
                            </div>
                                            
                            <div class="form-group btm_border" id="product_file">
                                <label class="col-sm-4 control-label" for="demo-hor-12"><?php echo translate('enter_here_path_to_digital_product_file');?></label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?> (<?php echo translate('compressed');?> *.zip/*.rar)
                                    <input type="file" name="product_file" onchange="details(this);" id="demo-hor-12" class="form-control"  accept='application/zip,application/rar'>
                                    </span>
                                    <br><br>
                                    <span>
                                        <?php echo translate('maximum_size').' : '.ini_get("upload_max_filesize"); ?>
                                    </span>
                                    <span id="previewdetails" ></span>
                                </div>
                            </div>

                            <script>
                                new Switchery(document.getElementById('swp'), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
                                var changeCheckbox = document.querySelector('#swp');
                                changeCheckbox.onchange = function() {
                                   if(changeCheckbox.checked){
                                        $('#product_file').show('fast');
                                   } else {
                                        $('#product_file').hide('fast');
                                   }
                               }
                               function details(now){

                               }
                            </script>
                            
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('product_image');?></b>
                            </div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-12"><?php echo translate('images');?></label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?>
                                    <input type="file" multiple name="images[]" onchange="preview(this);" id="demo-hor-12" class="form-control required">
                                    </span>
                                    <br><br>
                                    <span id="previewImg" ></span>
                                </div>
                            </div>
       
                            
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('quick_overview');?></b>
                            </div>
                            <div class="form-group btm_border">
                                <div class="col-sm-12">
                                    <textarea rows="9" class="summernotes" data-height="200" data-name="quick_overview"></textarea>
                                </div>
                            </div>
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('description');?></b>
                            </div>
                            
                            <div class="form-group btm_border">
                                <div class="col-sm-12">
                                    <textarea rows="9"  class="summernotes" data-height="200" data-name="description"></textarea>
                                </div>
                            </div>
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('specifications');?></b>
                            </div>
                            <div class="form-group btm_border">
                                <div class="col-sm-12">
                                    <textarea rows="9" class="summernotes" data-height="200" data-name="specifications"></textarea>
                                </div>
                            </div>
                            
                            <div id="more_additional_fields"></div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-inputpass"></label>
                                <div class="col-sm-6">
                                    <h4 class="pull-left">
                                        <i><?php echo translate('if_you_need_more_field_for_your_product_,_please_click_here_for_more...');?></i>
                                    </h4>
                                    <div id="more_btn" class="btn btn-mint btn-labeled fa fa-plus pull-right">
                                    <?php echo translate('add_more_fields');?></div>
                                </div>
                            </div>
                        </div>
                         <div id="customer_choice_options" class="tab-pane fade">
                         <div  class="form-group btm_border title list-title">
                            <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                            <b><?php echo translate('customer_choice_options');?></b>
                         </div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-14"><?php echo translate('color'); ?></label>
                                <div class="col-sm-4"  id="more_colors">
                                  <div class="col-md-12" style="margin-bottom:8px;">
                                      <div class="col-md-10">
                                          <div class="input-group demo2">
                                               <input type="text" value="#ccc" name="color[]" class="form-control" />
                                               <span class="input-group-addon"><i></i></span>
                                            </div>
                                      </div>
                                      <span class="col-md-2">
                                          <span class="remove_it_v rmc btn btn-danger btn-icon icon-lg fa fa-trash" ></span>
                                      </span>
                                  </div>
                                </div>
                                <div class="col-sm-2">
                                    <div id="more_color_btn" class="btn btn-primary btn-labeled fa fa-plus">
                                        <?php echo translate('add_more_colors');?>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="more_additional_options"></div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-inputpass"></label>
                                <div class="col-sm-6">
                                    <h4 class="pull-left">
                                        <i><?php echo translate('if_you_need_more_choice_options_for_customers_of_this_product_,please_click_here.');?></i>
                                    </h4>
                                    <div id="more_option_btn" class="btn btn-mint btn-labeled fa fa-plus pull-right">
                                    <?php echo translate('add_customer_input_options');?></div>
                                </div>
                            </div>
                        </div>
                         <div id="inventory" class="tab-pane fade">
                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('inventory_control');?></b>
                                </div>
                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor">
                                        <?php echo translate('do_you_want_inventory_tracking_for_this_item?');?>
                                            </label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="inventory_control" onchange="inventory_type(this.value);" value="no" checked="checked">
                                            <?php echo translate('no_inventory_tracking'); ?><br>
                                        <input type="radio" name="inventory_control" onchange="inventory_type(this.value);" value="yes">
                                            <?php echo translate('track_inventory_at_product_level'); ?>
                                    </div>
                                </div>

                            <div id="inventory_div" style="display:none;">    
                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('inventory_rule');?></b>
                                </div>
                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('if_inventory_reaches_allowed_minimum');?></label>
                                    <div class="col-sm-4">
                                        <select class="demo-chosen-select op_type required" name="inventory_rule" >
                                            <option value="hide"><?php echo translate('do_not_display_item_on_user_site'); ?></option>
                                            <option value="out_of_stock"><?php echo translate('display_out_of_stock_message');?></option>
                                        </select>
                                    </div>
                                </div>
                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('inventory_control_on_product_level');?></b>
                                </div>
                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('number_of_items_in_inventory');?></label>
                                    <div class="col-sm-4">
                                         <input type="number" name="stock" min="0" id="demo-hor-5"   class="form-control">
                                    </div>
                                </div>
                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('do_not_allow_a_sale_if_inventory_is_equal_to_or_less_than');?></label>
                                    <div class="col-sm-4">
                                         <input type="number" name="stock_warning" min="0" id="demo-hor-5"  class="form-control">
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div id="business_details" class="tab-pane fade">
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('business_details');?></b>
                            </div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('old_price');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="old_price" id="demo-hor-6" min='0' step='.01' placeholder="<?php echo translate('old_price');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('sale_price');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="sale_price" id="demo-hor-6" min='0' step='.01' placeholder="<?php echo translate('sale_price');?>" class="form-control required">
                                </div>
                                <span class="btn"><?php echo currency(); ?> / </span>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-7"><?php echo translate('purchase_price');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="purchase_price" id="demo-hor-7" min='0' step='.01' placeholder="<?php echo translate('purchase_price');?>" class="form-control required">
                                </div>
                                <span class="btn"><?php echo currency(); ?> / </span>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-8"><?php echo translate('shipping_cost');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="shipping_cost" id="demo-hor-8" min='0' step='.01' placeholder="<?php echo translate('shipping_cost');?>" class="form-control">
                                </div>
                                <span class="btn"><?php echo currency(); ?> / </span>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-9"><?php echo translate('product_tax');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="tax" id="demo-hor-9" min='0' step='.01' placeholder="<?php echo translate('product_tax');?>" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <select class="demo-chosen-select" name="tax_type">
                                        <option value="percent">%</option>
                                        <option value="amount"><?php echo currency(); ?></option>
                                    </select>
                                </div>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-10"><?php echo translate('product_discount');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="discount" id="demo-hor-10" min='0' step='.01' placeholder="<?php echo translate('product_discount');?>" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <select class="demo-chosen-select" name="discount_type">
                                        <option value="percent">%</option>
                                        <option value="amount"><?php echo currency(); ?></option>
                                    </select>
                                </div>
                                <span class="btn unit_set"></span>
                            </div>
                        </div>
                    </div>
                </div>
                    <span class="btn btn-purple btn-labeled fa fa-hand-o-right pull-right" onclick="next_tab()"><?php echo translate('next'); ?></span>
                    <span class="btn btn-purple btn-labeled fa fa-hand-o-left pull-right" onclick="previous_tab()"><?php echo translate('previous'); ?></span>
                </div>
            </div>
                    <center>
                        <div class="form-group">
                           <button class="btn btn-success" type="submit">Save Changes</button>
                           <button class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn" >
                            <?php echo translate('reset');?>
                            </button>
                        </div>
                    </center>
                    <?php echo form_close(); ?>
	
                </div>
            </div>
        </div>
    </div>
           
    </div> 
</div>      
</div>
</div>    
<script src="<?php $this->benchmark->mark_time(); echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js">
</script>
<script src="<?php echo base_url(); ?>template/back/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>template/back/multiple-select/multiple-select.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/multiple-select/multiple-select.css">

<input type="hidden" id="option_count" value="-1">

<script>
    window.preview = function (input) {
        if (input.files && input.files[0]) {
            $("#previewImg").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImg").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });
        }
    }

    function other_forms(){}
	
	function set_summer(){
        $('.summernotes').each(function() {
            var now = $(this);
            var h = now.data('height');
            var n = now.data('name');
            now.closest('div').append('<input type="hidden" class="val" name="'+n+'">');
            now.summernote({
                height: h,
                onChange: function() {
                    now.closest('div').find('.val').val(now.code());
                }
            });
            now.closest('div').find('.val').val(now.code());
        });
	}

    function option_count(type){
        var count = $('#option_count').val();
        if(type == 'add'){
            count++;
        }
        if(type == 'reduce'){
            count--;
        }
        $('#option_count').val(count);
    }

    function set_select(){
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
    }
	
    $(document).ready(function() {
        set_select();
		set_summer();
		createColorpickers();
    });

    function other(){
        set_select();
        $('#sub').show('slow');
        $('#brn').show('slow');
    }
    function get_cat(id){
        $('#brand').html('');
        $('#sub').hide('slow');
        $('#brn').hide('slow');
        ajax_load(base_url+'index.php/admin/product/sub_by_cat/'+id,'sub_cat','other');
        ajax_load(base_url+'index.php/admin/product/brand_by_cat/'+id,'brand','other');
    }
    function get_sub_res(id){}

    $(".unit").on('keyup',function(){
        $(".unit_set").html($(".unit").val());
    });

	function createColorpickers() {
	
		$('.demo2').colorpicker({
			format: 'rgba'
		});
		
	}
    
    $("#more_btn").click(function(){
        $("#more_additional_fields").append(''
            +'<div class="form-group">'
            +'    <div class="col-sm-4">'
            +'        <input type="text" name="ad_field_names[]" class="form-control"  placeholder="<?php echo translate('field_name'); ?>">'
            +'    </div>'
            +'    <div class="col-sm-5">'
            +'        <textarea rows="9"  class="summernotes" data-height="100" data-name="ad_field_values[]"></textarea>'
            +'    </div>'
            +'    <div class="col-sm-2">'
            +'        <span class="remove_it_v rms btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_row(this)"></span>'
            +'    </div>'
            +'</div>'
        );
        set_summer();
    });
    
    function next_tab(){
        $('.nav-tabs li.active').next().find('a').click();                    
    }
    function previous_tab(){
        $('.nav-tabs li.active').prev().find('a').click();                     
    }
    
    $("#more_option_btn").click(function(){
        option_count('add');
        var co = $('#option_count').val();
        $("#more_additional_options").append(''
            +'<div class="form-group" data-no="'+co+'">'
            +'    <div class="col-sm-4">'
            +'        <input type="text" name="op_title[]" class="form-control required"  placeholder="<?php echo translate('customer_input_title'); ?>">'
            +'    </div>'
            +'    <div class="col-sm-5">'
            +'        <select class="demo-chosen-select op_type required" name="op_type[]" >'
            +'            <option value="">(none)</option>'
            +'            <option value="text">Text Input</option>'
            +'            <option value="single_select">Dropdown Single Select</option>'
            +'            <option value="multi_select">Dropdown Multi Select</option>'
            +'            <option value="radio">Radio</option>'
            +'        </select>'
            +'        <div class="col-sm-12 options">'
            +'          <input type="hidden" name="op_set'+co+'[]" value="none" >'
            +'        </div>'
            +'    </div>'
            +'    <input type="hidden" name="op_no[]" value="'+co+'" >'
            +'    <div class="col-sm-2">'
            +'        <span class="remove_it_o rmo btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_row(this)"></span>'
            +'    </div>'
            +'</div>'
        );
        set_select();
    });
    
    $("#more_additional_options").on('change','.op_type',function(){
        var co = $(this).closest('.form-group').data('no');
        if($(this).val() !== 'text' && $(this).val() !== ''){
            $(this).closest('div').find(".options").html(''
                +'    <div class="col-sm-12">'
                +'        <div class="col-sm-12 options margin-bottom-10"></div><br>'
                +'        <div class="btn btn-mint btn-labeled fa fa-plus pull-right add_op">'
                +'        <?php echo translate('add_options_for_choice');?></div>'
                +'    </div>'
            );
        } else if ($(this).val() == 'text' || $(this).val() == ''){
            $(this).closest('div').find(".options").html(''
                +'    <input type="hidden" name="op_set'+co+'[]" value="none" >'
            );
        }
    });
    
    $("#more_additional_options").on('click','.add_op',function(){
        var co = $(this).closest('.form-group').data('no');
        $(this).closest('.col-sm-12').find(".options").append(''
            +'    <div>'
            +'        <div class="col-sm-10">'
            +'          <input type="text" name="op_set'+co+'[]" class="form-control required"  placeholder="<?php echo translate('option_name'); ?>">'
            +'        </div>'
            +'        <div class="col-sm-2">'
            +'          <span class="remove_it_n rmon btn btn-danger btn-icon btn-circle icon-sm fa fa-times" onclick="delete_row(this)"></span>'
            +'        </div>'
            +'    </div>'
        );
    });
    
    $('body').on('click', '.rmo', function(){
        $(this).parent().parent().remove();
    });

    $('body').on('click', '.rmon', function(){
        var co = $(this).closest('.form-group').data('no');
        $(this).parent().parent().remove();
        if($(this).parent().parent().parent().html() == ''){
            $(this).parent().parent().parent().html(''
                +'   <input type="hidden" name="op_set'+co+'[]" value="none" >'
            );
        }
    });

    $('body').on('click', '.rms', function(){
        $(this).parent().parent().remove();
    });

    $("#more_color_btn").click(function(){
        $("#more_colors").append(''
            +'      <div class="col-md-12" style="margin-bottom:8px;">'
            +'          <div class="col-md-10">'
            +'              <div class="input-group demo2">'
			+'		     	   <input type="text" value="#ccc" name="color[]" class="form-control" />'
			+'		     	   <span class="input-group-addon"><i></i></span>'
			+'		        </div>'
            +'          </div>'
            +'          <span class="col-md-2">'
            +'              <span class="remove_it_v rmc btn btn-danger btn-icon icon-lg fa fa-trash" ></span>'
            +'          </span>'
            +'      </div>'
  		);
		createColorpickers();
    });		           

    $('body').on('click', '.rmc', function(){
        $(this).parent().parent().remove();
    });


        
    function condition_type(value){                     
        if(value=='1'){

            document.getElementById("used_condition").style.display = "block";
            document.getElementById("new_condition").style.display = "none";
        }else{
            document.getElementById("used_condition").style.display = "none";
            document.getElementById("new_condition").style.display = "block";
        }
    }
    function inventory_type(value){
        if(value=='yes'){
            document.getElementById("inventory_div").style.display = "block";
            
        }else{
            document.getElementById("inventory_div").style.display = "none";
        }
    }
    function cat_type(val){        
       var val = $('#select_cat').val();
       ajax_load(base_url+'index.php/admin/product/product_field/'+val,'field_group_cat_div','other');
       document.getElementById("field_group_cat").className='demo-chosen-select';
    }
    function field_type(val){        
       var val = $('#select_field').val();
       ajax_load(base_url+'index.php/admin/product/group_field/'+val,'field_group_def_div','other');
       document.getElementById("field_group_cat").className='demo-chosen-select';
    }
    function tag_type(val){  
       var val = $('#select_tag').val();
       ajax_load(base_url+'index.php/admin/product/product_tags/'+val,'field_group_cat_div','other');
    }
</script>
<script>
    $(function() {
        $('select#select-cats').multipleSelect();
        $( "#start-date" ).datepicker();
        $( "#end-date" ).datepicker();

    });
</script>