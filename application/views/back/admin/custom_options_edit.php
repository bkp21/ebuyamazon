<?php
    foreach($all_option as $row){
?>
<div class="row">
    <div class="col-md-12">
		<?php
                                
                echo form_open(base_url() . 'index.php/admin/custom_options/update/'. $row['custom_option_id'], array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'custom_options_edit',
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
                                <h4 class="text-thin text-center"><?php echo translate('edit_option'); ?></h4>                            
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('option_name');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="option_name" value="<?php echo $row['option_name'] ?>"id="demo-hor-1" placeholder="<?php echo translate('option_name');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('type');?></label>
                                <div class="col-sm-6">
                                    <select class="demo-chosen-select required" name="option_type">
                                        <option value="0">Select</option>  
                                        <option value="radio"<?php if($row['option_type']=='radio')
                                                    echo "selected";
                                                ?>>Radio</option>
                                        <option value="check_box"<?php if($row['option_type']=='check_box')
                                                    echo "selected";
                                                ?>>CheckBox</option>
                                        <option value="image"<?php if($row['option_type']=='image')
                                                    echo "selected";
                                                ?>>Image</option>
                                    </select>    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('sort_order');?></label>
                                <div class="col-sm-6">
                                    <input type="number" name="sort_order" value="<?php echo $row['sort_order']; ?>"min="0" id="demo-hor-1" placeholder="<?php echo translate('sort_order');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-10">  
                                    <div id="more_additional_fields">
                                      <?php
                                       $op = $row['option_value'];
                                       $option = json_decode($op, true);
                                       foreach($option as $row1 => $value){
                                       ?> 
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <input type="text" name="option_value_name[]" value="<?php echo $value['option_name'];  ?>"  placeholder="<?php echo translate('option_value_name'); ?>" class="form-control required" >
                                            </div>
                                            <div class="col-sm-3">
                                                <span class="pull-left btn btn-default btn-file">
                                                    <?php echo translate('image');?>
                                                    <input type="file" multiple name="op_img[]" class="form-control imgInp">
                                                </span>
                                                <br><br>
                                                <span class="pull-left wrap">
                                                    <img src="<?php echo $this->crud_model->file_view('custom_option',$row['custom_option_id'],'','','thumb','src','multi','all') ?>" width="60%" class='blah'> 
                                                </span>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="input-group demo2">
                                                  <input type="text" value="<?php echo $value['color']; ?>" name="color[]" class="form-control"/>
                                                   <span class="input-group-addon"><i></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" min="0" name="option_order[]" value="<?php echo $value['sort_order']; ?>" placeholder="<?php echo translate('option_order'); ?>" class="form-control required" >
                                            </div>
                                         <div class="col-sm-1">
                                            <span class="remove_it_v btn btn-primary" onclick="delete_row(this)">X</span>
                                         </div>
                                        </div>
                                     <?php  } ?>
                                    </div>
                                    <div class="form-group btm_border">
                                        <label class="col-sm-4 control-label" for="demo-hor-17"></label>
                                        <div class="col-sm-6">
                                                <div id="more_btn" class="btn btn-primary btn-labeled fa fa-plus pull-right">
                                                <?php echo translate('add_more_option_value');?></div>
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
                            onclick="ajax_set_full('edit','<?php echo translate('edit_custom_option'); ?>','<?php echo translate('successfully_edited!'); ?>','custom_options_edit','<?php echo $row['custom_option_id']; ?>') "><?php echo translate('reset');?>
                        </span>
                     </div>
                     <div class="col-md-1">
                     	<span class="btn btn-success btn-md btn-labeled fa fa-wrench pull-right" onclick="form_submit('custom_options_edit','<?php echo translate('successfully_edited!'); ?>');proceed('to_add');" ><?php echo translate('edit');?></span> 
                     </div>
                </div>
                <input type="submit">
            </div>
        </form>
    </div>
</div>
<?php } ?>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form1.js"></script>
<script>   
    $("#more_btn").click(function(){
        $("#more_additional_fields").append(''
            +'<div class="form-group">'
            +'    <div class="col-sm-3">'
            +'        <input type="text" name="option_value_name[]" class="form-control required"  placeholder="<?php echo translate('option_value_name'); ?>">'
            +'    </div>'
            +'    <div class="col-sm-3">'
            +'      <span class="pull-left btn btn-default btn-file"><?php echo translate('image');?>'
            +'        <input type="file" name="op_img[]" class="imgInp" accept="image" onchange="upload_image();">'
            +'            </span><br><br><span class="pull-left wrap" >'
			+'			<img src="" width="60%" class="blah"></span>'
            
            +'    </div>'
            +'    <div class="col-sm-3">'
            +'       <div class="input-group demo2">'
            +'          <input type="text" value="#ccc" name="color[]" class="form-control"/>' 
            +'          <span class="input-group-addon"><i></i></span>'
            +'        </div>'
            +'    </div>'
            +'    <div class="col-sm-2">'
            +'          <input type="number" min="0" name="option_order[]"  placeholder="<?php echo translate('option_order'); ?>" class="form-control required" >'
            +'    </div>'
            +'    <div class="col-sm--2">'
            +'        <span class="remove_it_v rms btn btn-danger btn-icon btn-circle icon-lg fa fa-times" onclick="delete_row(this)"></span>'
            +'    </div>'
            +'</div>'
        );
        set_select();
		set_summer();
            createColorpickers();
    });
    function delete_row(e)
    {
        e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
    }
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
    function set_select(){
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
    }
	
    $(document).ready(function() {
        set_select();
		set_summer();
		createColorpickers();
    });

	function createColorpickers() {
	
		$('.demo2').colorpicker({
			format: 'rgba'
		});
		
	}
	

	$(document).on('change','.imgInp',function(){
		var blah = $(this).closest('.form-group').find('.blah');
		var wrap = $(this).closest('.form-group').find('.wrap');
		readURL(this,wrap,blah);
	});
	function readURL(input,wrap,blah) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				wrap.hide();
				blah.attr('src', e.target.result);
				wrap.show();
			}
			reader.readAsDataURL(input.files[0]);
		} 
	}
    $(document).ready(function() {
		$('.demo-chosen-select').chosen();
		$('.demo-cs-multiselect').chosen({
			width: '100%'
		});
		
	});
</script>
