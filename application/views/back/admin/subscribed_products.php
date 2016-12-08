<div id="content-container">
<?php include('dash-header.php');?>
	<div id="page-title">
			<h1 class="page-header text-overflow" ><?php echo translate('subscibed_products');?></h1>
	</div>
	<div class="smsalert smsalert-success">
          
            <div>
                Manage your subscribed products and send payment requests for manually paid or expired subscriptions.
            </div>
        </div>
	
	<div class="tab-base">
            <div class="tab-base tab-stacked-left">
                <?php
                $subscribe_products = $this->db->get_where('general_settings', array(
                    'type' => 'subscribed_products'
                ))->row()->value;
                $cancel_subscribe = $this->db->get_where('general_settings', array(
                    'type' => 'customers_cancel_subscriptions'
                ))->row()->value;
                $chg_subsc_period= $this->db->get_where('general_settings', array(
                    'type' => 'customer_change_subscription_period'
                ))->row()->value;
                ?>
		
          <div class="col-sm-12">
                <?php
                    echo form_open(base_url() . 'index.php/admin/subscribed_products/set/', array(
                        'class'     => 'form-horizontal',
                        'method'    => 'post',
                        'id'        => 'gen_set',
                        'enctype'   => 'multipart/form-data'
                    ));
                ?>
		<div class="panel-body">
		<div class="accordion" id="accordion_subscribed_products_enable">
        <div class="accordion-group">
            <div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_subscribed_products_enable" href="#collapse_subscribed_products_enable">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b><?php echo translate('enable/disable_subscribed_products');?></b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>
            <div id="collapse_subscribed_products_enable" class="accordion-body collapse background-white in">
                <div class="accordion-inner ">
	<table class="table table-bordered table-striped td-width50" width="100%">
		<tbody><tr>
			<td><?php echo translate('activate_subscribed_products_:');?></td>
			<td>
				<select name="subscribe_products" id="subscribe_products" class="chzn-done">
					<option value="YES">Yes</option>
					<option value="NO">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php echo translate('customers_can_cancel_subscriptions_anytime_:');?></td>
			<td>
				<select name="cancel_subscribe" id="cancel_subscribe" class="chzn-done">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php echo translate('customers_can_change_subscription_period_anytime_:');?></td>
			<td>
				<select name="chg_subsc_period" id="chg_subsc_period" class="chzn-done">
					<option value="Yes">Yes</option>
					<option value="No" selected="">No</option>
				</select>
				<br>
				This option is only available, if supported by the subscription gateway.			</td>
		</tr>
	</tbody></table>
	</div></div></div></div>
                        
						
						<div class="accordion" id="accordion_subscribed_products_list">
        <div class="accordion-group">
            <div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_subscribed_products_list" href="#collapse_subscribed_products_list">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b>Subscribed products list</b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>
            <div id="collapse_subscribed_products_list" class="accordion-body collapse background-white in">
                <div class="accordion-inner ">
		<table class="table table-bordered table-striped" width="100%">
			<tbody><tr>
			    <td style="width:35%;">
				 	Pricing type:&nbsp;
					 <select name="search_price_type" id="selKEC" class="chzn-done">
						<option value="">Any</option>
						<option value="normal">Normal </option>
						<option value="monthly">Monthly </option>
						<option value="weekly">Weekly </option>
						<option value="quarterly">Quarterly </option>
						<option value="halfyearly">Half yearly </option>
						<option value="yearly">Yearly </option>
					</select>

					<br><br>
					Payment Status:&nbsp;
					<select name="search_subscription_status" id="selY6K" class="chzn-done">
						<option value="">Any</option>
						<option value="expired">expired/awaiting</option>
						<option value="paid">paid</option>
					</select>
				</td>
				<td style="width:35%;">
					Order ID:&nbsp;
					<input name="search_order_id" value="" type="text">
					<br><br>
					Name:&nbsp;
					<input name="search_username" value="" type="text">
					<br><br>
					Product Title:&nbsp;
					<input name="search_product_title" value="" type="text">
				</td>
				<td style="width:30%;">
					<div>
						<input class="btn btn-success btn-search" value="Search" type="submit">
						<a class="btn btn-warning btn-reset" href="admin.php?p=orders_subscribed&amp;action=reset_search">
							Reset Search						</a>
					</div>
				</td>
			</tr>
		</tbody></table>
		<table class="table table-bordered table-striped">
			<tbody><tr>
				<td style="width:4%;"><strong>#</strong></td>
				<td style="width:15%;"><strong>Product Title</strong></td>
				<td style="width:10%;"><strong>Order ID</strong></td>
				<td style="width:15%;"><strong>User Name</strong></td>
				<td style="width:15%;"><strong>Order Date</strong></td>
				<td style="width:15%;"><strong>Pricing type</strong></td>
				<td style="width:15%;"><strong>Payment Request Sent</strong></td>
				<td style="width:15%;"><b>Status / Expire date</b></td>
			</tr>
				<tr>
				<td colspan="8">No subscribed products were found.</td>
				</tr>
				<tr>
					<td colspan="8">
						<div>
							<input class="btn btn-info btn-payment-request" name="sendPaymentLink" value="Send Payment Request" type="submit">
							<input class="btn btn-success btn-save" value="Save Changes" type="submit">
							<input class="btn btn-warning btn-reset" value="Reset Form" onclick="frmSettings.reset();return false;" type="submit">
						</div>
						<br>

						<div class="row-fluid">
							<div class="span4">
							   &nbsp;
							</div>
							<div class="span8 display-inline-block margin-bottom7">
								Products found  : 0 | Page(s)  :
								<div class="pagination display-inline-block margin-0">
									<ul class="margin-bottom10-inverse">
										0									</ul>
								</div>
							</div>
						</div>

					</td>
				</tr>

	</tbody></table>
	</div></div></div></div>

                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
            </div>
    </div>
</div>
</div>
</div>
<div style="display:none;" id="genset"></div>
<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'subscribed_products';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
          	$(document).ready(function() {
                                //start code of Dipak Tandel
                       $(".sw9").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/subscribed_products/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : ntsubs,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : ntsdsn,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //activate/inactive subscribed_products
				};
			});
                        $(".sw10").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/subscribed_products/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : cnsubs,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : cnsdsn,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //activate/inactive subscribed_products
				};
			});
                        $(".sw11").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/subscribed_products/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : cunsubs,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : cunsdsn,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //active/inactive customers can cancel subscriptions anytime
				};
			});
                        //end code of Dipak Tandel
                        });
</script>

