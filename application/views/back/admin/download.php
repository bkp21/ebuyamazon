<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow"><?php echo translate('manage_download');?></h1>
	</div>
        <div class="tab-base">
            <div class="panel">
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
                            <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                                onclick="ajax_modal('add','<?php echo translate('add_download'); ?>','<?php echo translate('successfully_added!'); ?>','download_add','');"><?php echo translate('Add_New_Download');?>
                            </button>
                        </div>
                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<span id="prod"></span>
<script>
	var base_url = '<?php echo base_url(); ?>';
	var timer = '<?php $this->benchmark->mark_time(); ?>';
	var user_type = 'admin';
	var module = 'download';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
	
	
</script>

