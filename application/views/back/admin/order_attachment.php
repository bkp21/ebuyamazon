<div id="content-container">
<?php include('dash-header.php');?>
	<div id="page-title">
			<h1 class="page-header text-overflow" ><?php echo translate('Order Attachment');?></h1>
	</div>
	<div class="smsalert smsalert-success">
          
            <div>
			<a href="<?php echo site_url("admin/product_features/")?>" style="font-weight: bold;"><?php echo translate(' Edit_Order_Attachment_Settings'); ?></a> <br><br>
               
            </div>
        </div>
	
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">

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
	var module = 'order_attachment';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
</script>
