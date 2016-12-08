
<div id="content-container">
<?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('Add User');?></h1>
    </div>
	  <div class="smsalert smsalert-success">
        <div>
            <b> Please note: required fields are bold</b><br />
		
        </div>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
					    
						<?php echo validation_errors(); ?>
					
					    <?php echo form_open("admin/add_user_customer") ?>
                        <div class="panel panel-bordered-primary">
						
							<ul class="nav nav-tabs" style="border-bottom:1px solid #ddd; font-size:15px; margin: 5px 5px 5px 5px;">			
								<li class="active"><a href="#idTabSheetMain" data-toggle="tab"><?php echo translate('user_properties');?></a></li>
							</ul>
							
							<div class="accordion" id="accordion_New_User_Contact_Info">
        <div class="accordion-group">
            <div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_New_User_Contact_Info" href="#collapse_New_User_Contact_Info">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b><?php echo translate('contact_information');?></b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>
            <div id="collapse_New_User_Contact_Info" class="accordion-body collapse background-white in">
			 <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                               
                                <input type="hidden" name="maint_form" value="<?php echo hash("sha256","11223344") ?>">
                <div class="accordion-inner ">
	<table class="table table-bordered table-striped td-width50">
		<tbody><tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					First Name :
				</label>
			</td>
			<td>
				<input name="firstname" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Last Name :
				</label>
			</td>
			<td>
				 <input name="surname" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Company :
				</label>
			</td>
			<td>
				<input name="contact_company" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Phone :
				</label>
			</td>
			<td>
				<input name="phone" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Mobile Phone :
				</label>
			</td>
			<td>
				<input name="mobile" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Email :
				</label>
			</td>
			<td>
				 <input name="email" class="input-large text-input-search" value="" type="email">
			</td>
		</tr>

	</tbody></table>
</div></div></div></div>
                            
                           
							
                        </div>
                    </div> <!-- Contact Info  end--->
					
					 
					<div class="tab-pane fade active in"  id="" >
					 
                        <div class="panel panel-bordered-primary">
						
							<div class="accordion" id="accordion_New_User_Contact_Info">
        <div class="accordion-group">
            <div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_New_User_Contact_Info" href="#collapse_New_User_Contact_Info">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b><?php echo translate('account_information');?></b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>
            <div id="collapse_New_User_Contact_Info" class="accordion-body collapse background-white in">
		
                <div class="accordion-inner ">
	<table class="table table-bordered table-striped td-width50">
		<tbody><tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('username(login)');?>
				</label>
			</td>
			<td>
				<input name="username" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('password');?>
				</label>
			</td>
			<td>
				 <input name="password" class="input-large text-input-search" value="" type="password">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('confirm_password');?>
				</label>
			</td>
			<td>
				<input name="confirm_password" class="input-large text-input-search" value="" type="password">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('user_group_for_discount');?>
				</label>
			</td>
			<td>
				<select name="user_group_discount" class="form-control" id="user-group-discount">
                                        <option value="0">---</option>
                                        <option value="Free">Free</option>

                                    </select>
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('user_group_for_product/category');?>
				</label>
			</td>
			<td>
				<select name="user_group_product" class="form-control" id="user-group-product">
                                        <option value="0">---</option>
                                        <option value="Free">Free</option>

                                    </select>
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('email_mode');?>
				</label>
			</td>
			<td>
				 <select name="email_mode" class="form-control" id="email-mode">
                                        
                                        <option value="html">HTML</option>
										<option value="text">Text</option>

                                    </select>
			</td>
		</tr>
		
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('email_newsletters');?>
				</label>
			</td>
			<td>
				 <select name="email_newsletters" class="form-control" id="email-newsletters">
                                        
                                        <option value="yes">Yes</option>
										<option value="no">NO</option>

                                    </select>
			</td>
		</tr>
		
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('email_product_update');?>
				</label>
			</td>
			<td>
				<select name="email_product_update" class="form-control" id="email-product">
                                        
                                        <option value="yes">Yes</option>
										<option value="no">NO</option>

                                    </select>
			</td>
		</tr>

	</tbody></table>
</div></div></div></div>
                       
                        </div>
                    </div>	<!-- Account Info --->
					
					
					<div class="tab-pane fade active in"  id="" >
					
					
					    
                        <div class="panel panel-bordered-primary">
                           
                          <div class="accordion" id="accordion_New_User_Billing_Info">
        <div class="accordion-group">
            <div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_New_User_Billing_Info" href="#collapse_New_User_Billing_Info">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b><?php echo translate('billing_information');?></b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>
            <div id="collapse_New_User_Billing_Info" class="accordion-body collapse background-white in">
                <div class="accordion-inner ">
	<table class="table table-bordered table-striped td-width50">
		<tbody><tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('address_line1');?>
				</label>
			</td>
			<td>
				 <input name="billing_address_line1" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('address_line2');?>
				</label>
			</td>
			<td>
				 <input name="billing_address_line2" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('city');?>
				</label>
			</td>
			<td>
				<input name="city" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Country :
				</label>
			</td>
			<td>
				 <select name="country" id="country1" class="chzn-done" onChange='get_states(this.value);'>
						<?php foreach($countries as $country){
							echo "<option value='".$country->id."'>".$country->name."</option>";
						}?>
				</select>
			
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					State/Province :
				</label>
			</td>
			<td>
			
					<select size="1" id="state" name="state" class="chzn-done" >
						<?php foreach($states as $state){
							echo "<option value='".$state->id."'>".$state->name."</option>";
						}?>
					</select>
			
				</td>
		</tr>
		<script language="javascript">
            populateCountries("country", "state");
          
        </script>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('zip/postal_code');?>
				</label>
			</td>
			<td>
				 <input name="zip_code" class="input-large text-input-search" value="" type="text">
			</td>
		</tr>
	</tbody></table>
</div></div></div></div>
							
							
                        </div>
                    </div> <!-- Billing Info  end--->
					
					
					<div class="tab-pane fade active in"  id="" > 
					
					
                        <div class="panel panel-bordered-primary">
                           
                            <div class="accordion" id="accordion_New_User_Shipping_Info">
        						<div class="accordion-group">
           							 <div class="accordion-heading acc-head-bg-color">
               							 <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_New_User_Shipping_Info" href="#collapse_New_User_Shipping_Info">
                    						 <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                   							  <b> <?php echo translate('shipping_information');?></b><i class="icon-chevron-down pull-right"></i>
                						</a>
            						</div>
           						 <div id="collapse_New_User_Shipping_Info" class="accordion-body collapse background-white in">
                					<div class="accordion-inner ">
										<table class="table table-bordered table-striped td-width50">
		<tbody>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('Shipping_address_is_the_same_as_billing_:');?>
				</label>
			</td>
			
			<td>
			<input class="input-large text-input-search display-inline-block margin-bottom5" name="shipping_address_same" id="shipping_address_same" onclick="SetShippingIsBilling();" value="sib" type="checkbox" />
			
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="name">
					<?php echo translate('name_:');?>
				</label>
			</td>
			<td>
				 <input name="shipping_name" id="shipping_name" class="input-large text-input-search" value="" disabled="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="company">
					<?php echo translate('company_:');?>
				</label>
			</td>
			<td>
				 <input name="shipping_company" id="scompany" class="input-large text-input-search" value="" disabled="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="address_line1">
					<?php echo translate('address_line1_:');?>
				</label>
			</td>
			<td>
				 <input name="shipping_address_line1" id="saddress1" class="input-large text-input-search" value="" disabled="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="address_line2">
					<?php echo translate('address_line2 _:');?>
				</label>
			</td>
			<td>
				 <input name="shipping_address_line2" id="saddress2" class="input-large text-input-search" value="" disabled="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="city">
					<?php echo translate('city_:');?>
				</label>
			</td>
			<td>
				 <input name="shipping_city" id="scity" class="input-large text-input-search" value="" disabled="" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="country">
					<?php echo translate('country_:');?>
				</label>
			</td>
			<td>
				 <select name="shipping_country" id="scountry" class="chzn-done" onchange="get_states(this.value);">
						<?php foreach($countries as $country){
							echo "<option value='".$country->id."'>".$country->name."</option>";
						}?>
				</select>
			
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="state">
					<?php echo translate('state/provinnce_:');?>
				</label>
			</td>
			<td>
			
					<select id="sstate" name="shipping_state" class="chzn-done" <?php echo $customer['billing'][0]['state'];?>>
						<?php foreach($states as $state){
							echo "<option value='".$state->id."'>".$state->name."</option>";
						}?>
					</select>
			
				</td>
		</tr>
		<script language="javascript">
            populateCountries("scountry", "sstate");
          
        </script>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('zip/postal_code_:');?>
				</label>
			</td>
			<td>
				 <input name="shipping_zip_code" id="szip" class="input-large text-input-search" value="" disabled="" type="text">
			</td>
		</tr>
	</tbody></table>
									</div>
								 </div>
							</div>
						</div>
					 </div>
                   </div>  <!-- Shiiping Info  end--->
					
					
					
					<div class="tab-pane fade active in"  id="" >
					
					
					    
                        <div class="panel panel-bordered-primary">
                           
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('point_information');?>
                                </h3>
                            </div>
                            <div class="panel-body">
							    
								
							
							    <div class="form-group">
                                    <label for="total-point"><?php echo translate('total_points_:');?></label>
                                    <input type="text" name="total_point" class="form-control" id="total-point" placeholder="">
                                </div>
                                </div>
                                                   </div>
                    </div> <!-- Point Info  end--->
					
					 <div class="form-group">
                                    <button class="btn btn-purple" type="submit">Add User</button>
                     </div>
					
					<?php echo form_close(); ?>
					
					
					
					
					
					
					
					
					
					
                </div>
            </div>
        </div>
    </div>



</div>





<script type="text/javascript">
if(window.onload)
{
	var temponload = window.onload;
	window.onload=function(e)
	{
		temponload(e);
		//StateProcess1();
		document.getElementById("shipping_address_same").checked = 1;
		SetShippingIsBilling();
		//StateProcess2();
	};
}
else
{
	window.onload=function(e)
	{
		//StateProcess1();
		document.getElementById("shipping_address_same").checked = 1;
		SetShippingIsBilling();
		//StateProcess2();
	};
}




function SetShippingIsBilling()
{
	if(document.getElementById("shipping_address_same").checked == 1){
		document.getElementById("shipping_name").disabled=true;
		document.getElementById("scompany").disabled=true;
		document.getElementById("saddress1").disabled=true;
		document.getElementById("saddress2").disabled=true;
		document.getElementById("scity").disabled=true;
		document.getElementById("scountry").disabled=true;
		document.getElementById("sstate").disabled=true;
		document.getElementById("szip").disabled=true;
	}
	else
	{
		document.getElementById("shipping-name").disabled=false;
		document.getElementById("scompany").disabled=false;
		document.getElementById("saddress1").disabled=false;
		document.getElementById("saddress2").disabled=false;
		document.getElementById("scity").disabled=false;
		document.getElementById("scountry").disabled=false;
		document.getElementById("sstate").disabled=false;
		document.getElementById("szip").disabled=false;
		StateProcess2();
	}
}

function get_states(c_id){
	
	$.ajax({
		type: 'GET',
		url: '<?php echo base_url().'index.php/admin/get_states_by_country_id/'; ?>'+c_id,
		/*dataType: 'json',
		data: {
			id: id
		},*/
		success: function (resp) {
			
			$('#state').html(resp);
		}
	});
}
</script>
<style>
td {
    float: left;
    width: 50%;
}
</style>
