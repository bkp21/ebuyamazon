<?php
    foreach($all_filters as $row){
?>
<div class="row">
    <div class="col-md-12">
		<?php
                                
                echo form_open(base_url() . 'index.php/admin/filters/update/'. $row['filter_id'], array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'filter_edit',
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
                                <h4 class="text-thin text-center"><?php echo translate('edit_filter'); ?></h4>                            
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('filter_group_name');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="filter_grp" id="demo-hor-1" value="<?php echo $row['filter_group_name']; ?>" placeholder="<?php echo translate('filter_group_name');?>" class="form-control required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('sort_order');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="sort_order_grp" min="0" id="demo-hor-1" value="<?php echo $row['filter_group_order']; ?>"placeholder="<?php echo translate('sort_order');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('filter_name');?></label>
                        
                            <div class="col-sm-6">
                                <div id="more_additional_fields">
                                    <?php
                                       $fill = $row['filter_name'];
                                       $filter = json_decode($fill, true);
                                    foreach($filter as $row1 => $value){
                                    ?> 
                                    <div class="form-group btm_border">
                                        <div class="col-sm-4">
 
                                            <input type="text" name="filter_name[]" value="<?php echo $value['filter_name'];  ?>" placeholder="<?php echo translate('filter_name'); ?>" class="form-control required" >
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="number" min="0" name="filter_order[]" value="<?php echo $value['sort_order']; ?>"  placeholder="<?php echo translate('sort_order'); ?>" class="form-control required" >
                                        </div>
                                        <div class="col-sm-2">
                                            <span class="remove_it_v btn btn-primary" onclick="delete_row(this)">X</span>
                                         </div>
                                    </div>
                                    <?php  } ?>
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
                    <div class="col-md-11">
                    	<span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right" 
                            onclick="ajax_set_full('edit','<?php echo translate('edit_filter'); ?>','<?php echo translate('successfully_edited!'); ?>','filter_edit','<?php echo $row['filter_id']; ?>') "><?php echo translate('reset');?>
                        </span>
                     </div>
                     <div class="col-md-1">
                     	<span class="btn btn-success btn-md btn-labeled fa fa-wrench pull-right" onclick="form_submit('filter_edit','<?php echo translate('successfully_edited!'); ?>');proceed('to_add');" ><?php echo translate('edit');?></span> 
                     </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php } ?>
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