<?php
foreach ($notifi_emails_data as $row) {
    ?>
    <div class="row">
        <div class="col-md-12">
            <?php
            echo form_open(base_url() . 'index.php/admin/notification_emails/update/' . $row['notification_email_id'], array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'notification_emails_edit',
                'enctype' => 'multipart/form-data'
            ));
            ?>
            <!--Panel heading-->
            <div class="panel-body">
                <div class="tab-base">
                    <!--Tabs Content-->                    
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="lista">
                            <div class="panel-body" id="demo_s">
                                <h3 class="panel-title"><?php echo translate('notification').'('. $row['notification_email_type'] .')'.' - HTML'; ?></h3>
                                <textarea rows="9" class="summernotes" data-height="300" data-name="no_email_html"><?php echo $row['notification_email_html']; ?></textarea>
                                <h3 class="panel-title"><?php echo translate('newsletter_content').'('. $row['notification_email_type'] .')'.' - Text'; ?></h3>
                                <textarea rows="9" class="form-control" name="no_email_text"><?php echo $row['notification_email_text']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-11">
                            <span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right" 
                                  onclick="ajax_set_full('edit', '<?php echo translate('edit_notification_emails'); ?>', '<?php echo translate('successfully_edited!'); ?>', 'notification_emails_edit', '<?php echo $row['notification_email_id']; ?>')"><?php echo translate('reset'); ?>
                            </span>
                        </div>
                        <div class="col-md-1">
                            <span class="btn btn-success btn-md btn-labeled fa fa-wrench pull-right" onclick="form_submit('notification_emails_edit', '<?php echo translate('successfully_edited!'); ?>');
                                    proceed('to_add');" ><?php echo translate('edit'); ?></span> 
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
	$(document).ready(function() {
		$('.summernotes').each(function() {
			var now = $(this);
			var h = now.data('height');
			var n = now.data('name');
			now.closest('div').append('<input type="hidden" class="val" name="' + n + '">');
			now.summernote({
				height: h,
				onChange: function() {
					now.closest('div').find('.val').val(now.code());
				}
			});
			now.closest('div').find('.val').val(now.code());
		});
	});
	
</script>


