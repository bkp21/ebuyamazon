<div class="row">
    <div class="col-md-12">

        <?php
		echo form_open(base_url() . 'index.php/admin/filters/do_add/', array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'filter_add',
			'enctype' => 'multipart/form-data'
		));
	?>
         <!--Panel heading-->

            <div class="panel-body">    
                <div class="tab-base">
                    <!--Tabs Content-->                    
                    <div class="tab-content">
                        <div id="blog_details" class="tab-pane fade active in">
                            <div class="form-group">
                                <h4 class="text-thin text-center"><?php echo translate('add_filter'); ?></h4>                            
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('filter_group_name');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="filter_grp" id="demo-hor-1" placeholder="<?php echo translate('filter_group_name');?>" class="form-control required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('sort_order');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="sort_order_grp" min="0" id="demo-hor-1" placeholder="<?php echo translate('sort_order');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('filter_name');?></label>
                        
                            <div class="col-sm-6">
                                <div id="more_additional_fields">
                                    <div class="form-group btm_border">
                                        <div class="col-sm-4">
                                            <input type="text" name="filter_name[]"  placeholder="<?php echo translate('filter_name'); ?>" class="form-control required" >
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="number" min="0" name="filter_order[]"  placeholder="<?php echo translate('sort_order'); ?>" class="form-control required" >
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-17"></label>
                                    <div class="col-sm-6">
                                            <div id="more_btn" class="btn btn-primary btn-labeled fa fa-plus pull-right">
                                            <?php echo translate('add_more_filter');?></div>
                                    </div>
                                </div>
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
                            onclick="ajax_set_full('add','<?php echo translate('filter_add'); ?>','<?php echo translate('successfully_added!'); ?>','filter_add',''); "><?php echo translate('reset');?>
                        </span>
                        <span class="btn btn-success" onclick="form_submit('filter_add','<?php echo translate('successfully_added!'); ?>');proceed('to_add');" ><?php echo translate('save');?></span>
                    </div>                
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $("#more_btn").click(function(){
        $("#more_additional_fields").append(''
            +'<div class="form-group">'
            +'    <div class="col-sm-4">'
            +'        <input type="text" name="filter_name[]" class="form-control required"  placeholder="<?php echo translate('filter_name'); ?>">'
            +'    </div>'
            +'    <div class="col-sm-5">'
            +'         <input type="number" name="filter_order[]"  min="0" class="form-control required"  placeholder="<?php echo translate('sort_order'); ?>">'
            +'    </div>'
            +'    <div class="col-sm-2">'
            +'        <span class="remove_it_v rms btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_row(this)"></span>'
            +'    </div>'
            +'</div>'
        );
    });
    function delete_row(e)
    {
        e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
    }   

</script>