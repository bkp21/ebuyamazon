<div id="content-container">
<?php include('dash-header.php');?>
	<div id="page-title">
		<h1 class="page-header text-overflow"><?php echo translate('Browse_Donations');?></h1>
	</div>
	<div class="smsalert smsalert-success">
          
            <div>
                A new text will be replaced with this, capstring:admin_note_ixxo_donate_title.
            </div>
        </div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
					<div class="col-md-12"></div>
					<br>

                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'browse_donations';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
</script>