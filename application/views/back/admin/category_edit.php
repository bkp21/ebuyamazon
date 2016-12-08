<?php
	foreach($category_data as $row){
?>
<div class="row">
    <div class="col-md-12">
	<div class="panel panel-bordered-dark">
		<?php
			echo form_open(base_url() . 'index.php/admin/category/update/' . $row['category_id'], array(
				'class' => 'form-horizontal',
				'method' => 'post',
				'id' => 'category_edit',
				'enctype' => 'multipart/form-data'
			));
		?>
        <div class="panel-body">                   
               <div class="tab-base">
                        <!--Tabs Content-->                    
                   <div class="tab-content">
                            <div id="blog_details" class="tab-pane fade active in">
                               <div class="form-group btm_border">
                                   <h4 class="text-thin text-center"><?php echo translate('category_(_update-').$row['category_name']; ?> )</h4>                            
                               </div>
                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('parent_category');?></b>
                                </div>
                               <div class="form-group">
                                    <div class="col-sm-6">
                                         <label><?php echo translate('select_vendor'); ?></label>
                                        <select name="vendor[]" class="demo-chosen-select form-control" multiple>
                                           <?php 
                                            $novendor = ['0'];
                                            $ven_id = json_decode($row['vendor_id']);
                                            foreach ($novendor as $ven)
                                              {
                                            ?>                      
                                            <option value="0" <?php if($row['vendor_id']==null){echo '';}elseif(in_array($ven['0'],$ven_id)) echo 'selected' ?>>All</option> 
                                        <?php } ?>    
                                        <?php 
                                            $ven_id = json_decode($row['vendor_id']); 
                                             foreach ($all_vendor as $vendor)
                                             {  
                                         ?>
                                             <option value="<?php echo $vendor['vendor_id']; ?>"<?php
                                                  if($row['vendor_id']==null){echo '';}elseif(in_array($vendor['vendor_id'],$ven_id)){ echo 'selected'; } ?>>
                                                 <?php echo $vendor['name']; ?>
                                             </option>
                                         <?php
                                            }  
                                         ?>
                                        </select>
                                    </div>
                                     <div class="col-sm-6">
                                          <label class=""><?php echo translate('select_category'); ?></label>
                                          <select name="parent_category" class="demo-chosen-select form-control required" id="select_parent">
                                            <option value="0"><?php echo translate('category_root'); ?></option> 

                                              <?php
                                              foreach ($all_category as $category) {
                                                  if($category['category_id']!=$row['category_id'] && $category['parentid']!=$row['category_id']){
                                                  ?>
                                                  <option value="<?php echo $category['category_id']; ?>"<?php if ($category['category_id'] == $row['parentid']) {
                                                    echo 'selected';
                                                } ?>>
                                                  <?php echo $category['category_name']; ?>
                                                  </option>
                                                  <?php
                                                  }
                                              }
                                              ?>
                                          </select>
                                     </div>
                                </div>

                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('category_properties');?></b>
                                </div> 

                               <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                        <b><?php echo translate('category_name');?></b>
                                           </label>
                                   <div class="col-sm-6">
                                       <input type="text" name="category_name" value="<?php echo $row['category_name']; ?> "id="demo-hor-1" 
                                           class="form-control required" placeholder="<?php echo translate('category_name');?>" >
                                   </div>
                               </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-2">
                                           <b><?php echo translate('category_key');?></b>
                                            </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="category_key" value="<?php echo $row['category_key']; ?>" id="demo-hor-2" 
                                            class="form-control required" placeholder="<?php echo translate('category_key');?>" >
                                        <div class="formHelp"> This will be used for bulk loading products. This might be the same as the Category name, but without spaces. Example: digital_recorders. </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-1">
                                        <?php echo translate('meta_title');?>
                                            </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="<?php echo $row['meta_title'];?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-1">
                                        <?php echo translate('meta_keywords');?>
                                            </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="<?php echo $row['meta_keywords'];?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-1">
                                        <?php echo translate('meta_description');?>
                                            </label>
                                    <div class="col-sm-6">
                                         <input type="text" name="meta_description" id="meta_description" class="form-control" value="<?php echo $row['meta_description'];?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-1">
                                            <?php echo translate('is_category_visible_to_users?');?>
                                            </label>
                                    <div class="col-sm-6">
                                        <input type="checkbox" name="is_visible_user" value="1" <?php if($row['is_visible_user']=='yes'){echo 'checked';} ?>>
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('display_categories_with_no_products?');?>
                                           </label>
                                   <div class="col-sm-6">
                                         <input type="checkbox" name="display_categories" value="1" <?php if($row['display_categories']==1){echo 'checked';} ?>>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('user_group_for_product_/_category?');?>
                                           </label>
                                   <div class="col-sm-6">
                                       <select name="user_group" id="is_active" class="form-control demo-chosen-select required">
                                           <option value="1"<?php if($row['user_group']==1){echo 'selected';} ?>>Yes</option>
                                           <option value="0"<?php if($row['user_group']==0){echo 'selected';} ?>>No</option>
                                       </select>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('password_protected?');?>
                                           </label>
                                   <div class="col-sm-6">
                                        <input type="checkbox" name="password_protected" value="1"  <?php if($row['password_protected']==1){echo 'checked';} ?>>
                                   </div>
                               </div>

                                <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('access_password');?>
                                           </label>
                                   <div class="col-sm-6">
                                       <input type="password" value="<?php echo $row['access_password'] ?>" name="access_password" id="demo-hor-1" 
                                           class="form-control" placeholder="<?php echo translate('access_password');?>" >
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('list_subcategories_on_catalog page?');?>
                                           </label>
                                   <div class="col-sm-6">
                                        <input type="checkbox" name="on_catalog_page" value="yes" <?php if($row['list_subcats']=='yes'){echo 'checked';} ?> >
                                   </div>
                               </div>

                                <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('show-navigation_help, if_no_products_are_available_in_this_category?');?>
                                           </label>
                                   <div class="col-sm-6">
                                       <select name="show_nav_help" id="is_active" class="form-control demo-chosen-select required">
                                           <option value="global"<?php if($row['navigation_help']=='global'){echo 'selected';} ?>><?php echo translate('use_global_settings');?></option>
                                           <option value="yes"<?php if($row['navigation_help']=='yes'){echo 'selected';} ?>>Yes</option>
                                           <option value="no"<?php if($row['navigation_help']=='no'){echo 'selected';} ?>>No</option>
                                       </select>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('show_subcategory_images_on_catalog_page?');?>
                                           </label>
                                   <div class="col-sm-6">
                                       <select name="show_subcate_images" class="form-control demo-chosen-select required">
                                           <option value="global"<?php if($row['show_subcate_images']=='global'){echo 'selected';} ?><?php echo translate('use_global_settings');?></option>
                                           <option value="yes"<?php if($row['show_subcate_images']=='yes'){echo 'selected';} ?>>Yes</option>
                                           <option value="no"<?php if($row['show_subcate_images']=='no'){echo 'selected';} ?>>No</option>
                                       </select>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label class="col-sm-6 control-label" for="demo-hor-1">
                                           <?php echo translate('priority');?>
                                           </label>
                                   <div class="col-sm-6">
                                        <?php
                                             $from = array('1_highest_priority','2','3','4','5','6','7','8','9','10 lowest priority');
                                             echo $this->crud_model->select_html($from,'priority','priority','edit','demo-chosen-select',$row['priority']);
                                        ?>
                                   </div>
                               </div>
                               <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-1">
                                        <?php echo translate('is_active');?>
                                            </label>
                                    <div class="col-sm-6">
                                        <select name="is_active" id="is_active" class="form-control">
                                            <option value="1" <?php if($row['is_active']==1){echo 'selected';} ?> >Yes</option>
                                            <option value="0" <?php if($row['is_active']==0){echo 'selected';} ?>>No</option>
                                        </select>
                                    </div>
                                </div>

                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('category_description(_top_of_page)');?></b>
                                </div>  
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea rows="9" class="summernotes" data-height="200" data-name="description_top"><?php echo $row['cat_description_top'] ?></textarea>
                                    </div>
                                </div>
                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('category_description(_bottom_of_page)');?></b>
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea rows="9" class="summernotes1" data-height="200" data-name="description_bottom"><?php echo $row['cat_description_bottom'] ?></textarea>
                                    </div>
                                </div>

                                <div  class="form-group btm_border title list-title">
                                    <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                    <b><?php echo translate('category_image') ?> (note: accepted file types are JPG, PNG and GIF)</b>
                                </div>

                                <div class="form-group">
                                      <label class="col-sm-6 control-label" for="demo-hor-1">
                                          <?php echo translate('category_module_image'); ?>
                                      </label>
                                      <div class="col-sm-6">
                                          <span class="pull-left btn btn-default btn-file btn-green"> <?php echo translate('select_file'); ?>
                                              <input type="file" name="category_module_image" onchange="preview(this);" id="category_module_image" class="form-control">
                                          </span>
                                          <br><br>
                                          <span id="previewImg"></span>
                                      </div>
                                 </div>

                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-13"></label>
                                    <div class="col-sm-6">
                                        <?php
                                        $images1 = $this->crud_model->file_view('category', $row['category_id'] . '_module', '', '', 'no', 'src', '', '', '.png');
                                        if ($images1) {
                                            ?>
                                            <div class="delete-div-wrap">
                                                <span class="close">&times;</span>
                                                <div class="inner-div">
                                                    <img class="img-responsive" width="200" src="<?php echo $images1; ?>" data-id="<?php echo $row['category_id'].'_module'; ?>" alt="User_Image">
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 control-label" for="demo-hor-1">
                                        <?php echo translate('category_image'); ?>
                                    </label>
                                    <div class="col-sm-6">
                                        <span class="pull-left btn btn-default btn-file btn-green"> <?php echo translate('select_file'); ?>
                                            <input type="file" name="category_image" onchange="preview1(this);" id="category_image" class="form-control">
                                        </span>
                                        <br><br>
                                        <span id="previewImg1"></span>
                                    </div>
                                </div>

                                <div class="form-group btm_border">
                                    <label class="col-sm-4 control-label" for="demo-hor-13"></label>
                                    <div class="col-sm-6">
                                        <?php $images = $this->crud_model->file_view('category',$row['category_id'].'_image','','','no','src','','','.png');
                                           if($images){
                                        ?>
                                            <div class="delete-div-wrap">
                                                    <span class="close">&times;</span>
                                                    <div class="inner-div">
                                                            <img class="img-responsive" width="200" src="<?php echo $images; ?>" data-id="<?php echo $row['category_id'].'_image'; ?>" alt="User_Image">
                                                    </div>
                                            </div>
                                        <?php }  ?>									
                                    </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-sm-6 control-label" for="demo-hor-1">
                                      <?php echo translate('category_icon'); ?>
                                  </label>
                                  <div class="col-sm-6">
                                      <span class="pull-left btn btn-default btn-file btn-green"> <?php echo translate('select_file'); ?>
                                          <input type="file" name="category_icon" onchange="preview2(this);" id="category_icon" class="form-control">
                                      </span>
                                      <br><br>
                                      <span id="previewImg2"></span>
                                  </div>
                                </div>	

                                <div class="form-group btm_border">
                                  <label class="col-sm-4 control-label" for="demo-hor-13"></label>
                                    <div class="col-sm-6">
                                        <?php
                                        $images = $this->crud_model->file_view('category', $row['category_id'].'_icon', '', '', 'no', 'src', '', '', '.png');

                                        if ($images) {
                                            ?>
                                            <div class="delete-div-wrap">
                                                <span class="close">&times;</span>
                                                <div class="inner-div">
                                                    <img class="img-responsive" width="200" src="<?php echo $images; ?>" data-id="<?php echo $row['category_id'].'_icon'; ?>" alt="User_Image">
                                                </div>
                                            </div> 
                                            <?php
                                        }
                                        ?>									
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-11">
                                        <span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right" 
                                            onclick="ajax_set_full('edit','<?php echo translate('edit_category'); ?>','<?php echo translate('successfully_edited!'); ?>','category_edit','<?php echo $row['category_id']; ?>') "><?php echo translate('reset');?>
                                        </span>
                                     </div>
                                     <div class="col-md-1">
                                        <span class="btn btn-success btn-md btn-labeled fa fa-wrench pull-right" onclick="form_submit('category_edit','<?php echo translate('successfully_edited!'); ?>');proceed('to_add');" ><?php echo translate('edit');?></span> 
                                     </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
    <?php
     }
    ?>
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
	window.preview1 = function (input) {
        if (input.files && input.files[0]) {
            $("#previewImg1").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImg1").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });
        }
    }
	window.preview2 = function (input) {
        if (input.files && input.files[0]) {
            $("#previewImg2").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImg2").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });
        }
    }
	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
	});
         $(document).ready(function () {
        $('.summernotes').each(function () {
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
        $('.summernotes1').each(function () {
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
    $(document).ready(function() {
	$('.demo-chosen-select').chosen();
	$('.demo-cs-multiselect').chosen({
		width: '100%'
	});
});

 $('.delete-div-wrap .close').on('click', function() { 
	 	var pid = $(this).closest('.delete-div-wrap').find('img').data('id'); 
		var here = $(this); 
		msg = 'Really want to delete this Image?'; 
		bootbox.confirm(msg, function(result) {
			if (result) { 
                            $.ajax({ 
                                   url: base_url+'index.php/'+user_type+'/'+module+'/dlt_imgg/'+pid, 
                                   cache: false, 
                                   success: function(data) { 
                                           $.activeitNoty({ 
                                                   type: 'success', 
                                                   icon : 'fa fa-check', 
                                                   message : 'Deleted Successfully', 
                                                   container : 'floating', 
                                                   timer : 3000 
                                           }); 
                                           here.closest('.delete-div-wrap').remove(); 
                                   } 
                           }); 
			}else{ 
				$.activeitNoty({ 
					type: 'danger', 
					icon : 'fa fa-minus', 
					message : 'Cancelled', 
					container : 'floating', 
					timer : 3000 
				}); 
			}; 
		  }); 
		});
</script>
   
<style>
.formHelp {
    font-size: 10px;
}    
</style>  