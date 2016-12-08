<?php
    foreach($all_templates as $row){
?>

<div class="row">
    <div class="col-md-12">
		<?php
            echo form_open(base_url() . 'index.php/admin/templates_email/update/'. $row['template_email_id'], array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'template_edit',
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
                                <h4 class="text-thin text-center"><?php echo translate('edit_email_template'); ?></h4>                            
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('template_name');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="temp_name" id="demo-hor-1" value="<?php echo $row['tempalte_name']; ?>" placeholder="<?php echo translate('template_name');?>" class="form-control required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('subject');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="subject" id="demo-hor-1" value="<?php echo $row['subject']; ?>" placeholder="<?php echo translate('subject');?>" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-13"><?php echo translate('message'); ?></label>
                                <div class="col-sm-6">
                                    <textarea rows="9"  class="message" data-height="200" data-name="message"><?php echo $row['message']; ?></textarea>
                                </div>
                            </div>
                                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('status');?></label>
                                <div class="col-sm-6">
                                    <select name="status" class="form-control">
                                        <option value="0"
                                        <?php
                                        if ($row['status'] == '0') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo translate('enabled'); ?>
                                        </option>
                                        <option value="1"
                                        <?php
                                        if ($row['status'] == '1') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo translate('disabled'); ?>
                                        </option>
                                    </select>
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
                            onclick="ajax_set_full('add','<?php echo translate('edit_template'); ?>','<?php echo translate('successfully_added!'); ?>','template_emails_edit',''); "><?php echo translate('reset');?>
                        </span>
                        <span class="btn btn-success" onclick="form_submit('template_edit','<?php echo translate('successfully_edited!'); ?>');proceed('to_add');" ><?php echo translate('save');?></span>
                    </div>                
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    }
?>
<script>
    $(document).ready(function () {
        $('.message').each(function () {
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
    
 </script>  