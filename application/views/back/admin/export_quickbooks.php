<div id="content-container">
<?php include('dash-header.php');?>
<div>
		<h1 class="page-header text-overflow"><?php echo translate('Export_to_QuickBooks');?></h1>
	</div>
        <div class="smsalert smsalert-success">
          
            <div>
                This page allows you to create a .csv file with your customers and the associated received payments that can be imported into QuickBooks.
            </div>
        </div>
<div class="row">
    <div class="col-md-12">
		<?php
                echo form_open(base_url() . 'index.php/admin/export_quickbooks/export/', array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'export',
		'enctype' => 'multipart/form-data'
            ));
        ?>
            <!--Panel heading-->

            <div class="panel-body">   
                <div class="tab-base">
                    <!--Tabs Content-->                    
                    <div class="tab-content">
                        <div class="tab-pane fade active in">
                            <div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_Quick_Select_Order_Range" href="#collapse_Quick_Select_Order_Range">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b><?php echo translate('Select_Order_Range');?></b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>


<div id="collapse_Quick_Select_Order_Range" class="accordion-body collapse background-white in">
                <div class="accordion-inner ">
    <table class="table table-striped table-bordered">
        <form action="admin.php?p=export_quickbooks_process&amp;chart=true" method="post" targe="_blank" onsubmit="return checkQuickBooksForm(this)"></form>
        
        <tbody><tr>
                <td><?php echo translate('from_:');?></td>
                <td>
                      <select id="fromdaydropdown" name="from_day">
</select> 
<select id="frommonthdropdown" name="from_month">
</select> 
<select id="fromyeardropdown" name="from_year">
</select> 
                </td>
        </tr>
        <tr>
                <td><?php echo translate('to_:');?></td>
                <td>
				<select id="todaydropdown" name="to_day">
</select> 
<select id="tomonthdropdown" name="to_month">
</select> 
<select id="toyeardropdown" name="to_year">
</select> 
                       
                </td>
        </tr>
	<!-- Order Type -->
	<tr>
		<td colspan="4">
			Select Order Type		</td>
	</tr>
	<tr>
		<td><?php echo translate('order_status_:');?></td>
		<td>
		 <select class="demo-chosen-select"  name="order_status">
		 	<option value="all_orders"><?php echo translate('all_orders'); ?></option>
			<option value="not_completed_orders"><?php echo translate('not_completed_orders'); ?></option>
			<option value="completed_orders"><?php echo translate('completed_orders'); ?></option>
                                        
          
			</select>
		</td>
	</tr><tr>
	
        
        
        </tr><tr>
                <td colspan="3" class="text-align-center">
                	<div>
                        	 <button class="btn btn-success" type="submit"><?php echo translate('export_quick_book');?></button>
                	</div>
                </td>
                
        </tr>
        
</tbody></table>
</div></div>
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
</form>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/back/plugins/bootstrap-datepicker/bootstrap-datepicker.css">
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-datepicker/bootstrap-datepicker.js">
</script>
<script>

  $(function() {
    $( ".datepicker" ).datepicker();
  });
  $(document).ready(function() {
	$('.demo-chosen-select').chosen();
	$('.demo-cs-multiselect').chosen({
		width: '100%'
	});
});
$(document).ready(function() {
	$('.demo-chosen-select').chosen();
	$('.demo-cs-multiselect').chosen({
		width: '100%'
	});
});
</script>
<style>
    .btm_border{
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 15px;
	margin:0 15px;   
    }
</style>

<script type="text/javascript">

//populatedropdown(id_of_day_select, id_of_month_select, id_of_year_select)
window.onload=function(){
populatedropdown("fromdaydropdown", "frommonthdropdown", "fromyeardropdown")
populatedropdownto("todaydropdown", "tomonthdropdown", "toyeardropdown")
}
</script>
