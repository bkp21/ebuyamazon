<div class="row">
    <div class="col-md-12">
		<?php
            echo form_open(base_url() . 'index.php/admin/merchants_packages/do_add/', array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'package_add',
                'enctype' => 'multipart/form-data'
            ));
        ?>
            <!--Panel heading-->

            <div class="panel-body">    
                <div class="tab-base">
                    <!--Tabs Content-->                    
                    <div class="tab-content">
                        <div id="blog_details" class="tab-pane fade active in">
                            <div class="form-group btm_border">
                                <h4 class="text-thin text-center"><?php echo translate('add_merchant_package'); ?></h4>                            
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('title');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="demo-hor-1" placeholder="<?php echo translate('title');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-2"><?php echo translate('merchant_type');?></label>
                                <div class="col-sm-6">
                                     <select class="demo-chosen-select"  name="merchant_type" onchange="selcted_hidden(this.value);">
                                         <option value="free"><?php echo translate('free_plan'); ?></option>
                                        <option value="subscription"><?php echo translate('subscription'); ?></option>
                                        <option value="per_item"><?php echo translate('per_item'); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div id="show_hide" style="display:none">
                            <div class="form-group btm_border" >
                                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('period');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="period" id="demo-hor-6" value="0" step="1" min="0" placeholder="<?php echo translate('period');?>" class="form-control required">
                                </div>
                            </div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-2"><?php echo translate('period_type');?></label>
                                <div class="col-sm-6">
                                     <select class="demo-chosen-select " name="period_types">
                                        <option value="day"><?php echo translate('day'); ?></option>
                                        <option value="week"><?php echo translate('week'); ?></option>
                                        <option value="month"><?php echo translate('month'); ?></option>
                                        <option value="year"><?php echo translate('year'); ?></option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('number_of_items ');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="items" id="demo-hor-6" value="0" step="1" min="0"  placeholder="<?php echo translate('number_of_items ');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-2"><?php echo translate('package_type');?></label>
                                <div class="col-sm-6">
                                     <select name="package_type" class="demo-cs-multiselect" onchange="pack_type(this.value);">
                                        <option value="without_comission"><?php echo translate('without_commission'); ?></option>
                                        <option value="commission"><?php echo translate('commission'); ?></option>
                                    </select>
                                </div>
                            </div>
                            
                            <div id="show_hide1" style="display:none">
                            <div class="form-group btm_border" id="show">
                                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('commission')." %";?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="commission" id="demo-hor-6" value="0" min='0' step='0.01' max="100" placeholder="<?php echo translate('commission')." %";?>" class="form-control required">
                                </div>
                            </div>
                            </div>
                            
                            <div id="show_hide2" style="display:none">
                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('price');?></label>
                                    <div class="col-sm-4">
                                        <input type="number" name="price" value="0" id="demo-hor-6" min='0' step='0.01' placeholder="<?php echo translate('price');?>" class="form-control required">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-13"><?php echo translate('help_text'); ?></label>
                                <div class="col-sm-6">
                                    <textarea rows="9"  class="helptext" data-height="200" data-name="help_text"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-13"><?php echo translate('description'); ?></label>
                                <div class="col-sm-6">
                                    <textarea rows="9"  class="description" data-height="300" data-name="description"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="panel-footer text-right">
                        <span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn " 
                            onclick="ajax_set_full('add','<?php echo translate('add_package'); ?>','<?php echo translate('successfully_added!'); ?>','merchants_package_add',''); "><?php echo translate('reset');?>
                        </span>
                        <span class="btn btn-success" onclick="form_submit('package_add','<?php echo translate('successfully_added!'); ?>');proceed('to_add');" ><?php echo translate('save');?></span>
                    </div>                
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
<script>
    $(document).ready(function () {
        $('.helptext').each(function () {
            var now = $(this);
            var h = now.data('height');
            var n = now.data('name');
            now.closest('div').append('<input type="hidden" class="val" name="' + n + '">');
            now.summernote({
                height: h,
                onChange: function () {
                    now.closest('div').find('.val').val(now.code());
                }
            });
            now.closest('div').find('.val').val(now.code());
        });
    });
        $(document).ready(function () {
        $('.description').each(function () {
            var now = $(this);
            var h = now.data('height');
            var n = now.data('name');
            now.closest('div').append('<input type="hidden" class="val1" name="' + n + '">');
            now.summernote({
                height: h,
                onChange: function () {
                    now.closest('div').find('.val1').val(now.code());
                }
            });
            now.closest('div').find('.val1').val(now.code());
        });
    });
    
    
    function selcted_hidden(value){
        if(value=='subscription'){
            document.getElementById("show_hide").style.display = "block";
        }else{
            document.getElementById("show_hide").style.display = "none";
        }
        if(value=='free'){
            document.getElementById("show_hide2").style.display = "none";
        }else{
            document.getElementById("show_hide2").style.display = "block";
        }
            
    }
    
       function pack_type(value){
        if(value=='commission'){
            document.getElementById("show_hide1").style.display = "block";
        }else{
            document.getElementById("show_hide1").style.display = "none";
        }
    }
 </script>   
