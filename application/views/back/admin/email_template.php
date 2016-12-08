<?php
  foreach ($email_template_data as $row) {
?> 
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('top_and_bottom_email_templates') ?></h1>
    </div>
    <div class="tab-base">
        <!--Tabs Content-->
        <div class="panel">
            <!--Panel heading-->
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="lista">
                        <div class="panel-body" id="demo_s">
                <?php
                    echo form_open(base_url() . 'index.php/admin/email_template/set/', array(
                        'class'     => 'form-horizontal',
                        'method'    => 'post',
                        'id'        => '',
                        'enctype'   => 'multipart/form-data'
                    ));
                ?>
                            <div class="row"> 
                                <h3 class="panel-title"><?php echo translate('top_HTML_email'); ?></h3>
                                <textarea rows="9" class="summernotes" data-height="300" data-name="email_top_html"><?php echo $row['top_html_email']; ?></textarea>
                                <h3 class="panel-title"><?php echo translate('bottom_for_HTML_email'); ?></h3>
                                <textarea rows="9" class="summernotes1" data-height="300" data-name="email_bottom_html"><?php echo $row['bottom_html_email']; ?></textarea>
                                <h3 class="panel-title"><?php echo translate('top_for_text_email') ?></h3>
                                <textarea rows="9" class="form-control" name="email_top_text"><?php echo $row['top_text_email']; ?></textarea>
                                <h3 class="panel-title"><?php echo translate('bottom_for_text_email'); ?></h3>
                                <textarea rows="9" class="form-control" name="email_bottom_text"><?php echo $row['bottom_text_email']; ?></textarea>
                            </div>
                    <div class="panel-footer text-right">
                        <span class="btn btn-info submitter" 
                        	data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('updated_sucess!'); ?>' >
								<?php echo translate('save');?>
                        </span>
                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script>
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


    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'email_template';
    var list_cont_func = 'list';
    var dlt_cont_func = 'delete';
</script>