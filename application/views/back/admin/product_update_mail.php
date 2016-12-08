<div class="row">
    <div class="col-md-12">
		<?php
            echo form_open(base_url() . 'index.php/admin/add_new_group/do_add/', array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'group_add',
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
                                <h4 class="text-thin text-center"><?php echo translate('product_update_mail'); ?></h4>                            
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('from_date');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="group_name" id="demo-hor-1" placeholder="<?php echo translate('group_name');?>" class="form-control required datepicker">
                                </div>
                            </div>
                            
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('to_date');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="group_name" id="demo-hor-1" placeholder="<?php echo translate('group_name');?>" class="form-control required datepicker">
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('layout');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="group_name" id="demo-hor-1" placeholder="<?php echo translate('group_name');?>" class="form-control required datepicker_to">
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('language ');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="group_name" id="demo-hor-1" placeholder="<?php echo translate('group_name');?>" class="form-control required datepicker_to">
                                </div>
                            </div>
                            
                            

                        </div>
                    </div>
                </div>

               
            </div>
    
            <div class="panel-footer">
                <div class="row">
                	<div class="col-md-11">
                        <span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right" 
                            onclick="ajax_set_full('add','<?php echo translate('add_group'); ?>','<?php echo translate('successfully_added!'); ?>','blog_add',''); "><?php echo translate('reset');?>
                        </span>
                    </div>
                    
                    <div class="col-md-1">
                        <span class="btn btn-success btn-md btn-labeled fa fa-upload pull-right" onclick="form_submit('group_add','<?php echo translate('group_name_has_been_uploaded!'); ?>');proceed('to_add');" ><?php echo translate('upload');?></span>
                    </div>
                    
                </div>
            </div>
    
        </form>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/back/plugins/bootstrap-datepicker/bootstrap-datepicker.css">
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-datepicker/bootstrap-datepicker.js">
</script>

<script>

  $(function() {
    $( ".datepicker" ).datepicker();
  });
</script>
<style>
    .btm_border{
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 15px;
		margin:0 15px;   
    }
</style>

<!--Bootstrap Tags Input [ OPTIONAL ]-->

