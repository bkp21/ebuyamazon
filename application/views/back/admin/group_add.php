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
                                <h4 class="text-thin text-center"><?php echo translate('group_name'); ?></h4>                            
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('group_name');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="group_name" id="demo-hor-1" placeholder="<?php echo translate('group_name');?>" class="form-control required">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

               
            </div>
   
    
        </form>
    </div>
</div>

<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js">
</script>


<style>
    .btm_border{
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 15px;   
    }
</style>

<!--Bootstrap Tags Input [ OPTIONAL ]-->

