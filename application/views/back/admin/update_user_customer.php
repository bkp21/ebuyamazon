
<div id="content-container">
<?php include('dash-header.php');?>

	
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('upade_profile_(update)');?></h1>
    </div>
	  <div class="smsalert smsalert-success">
        <div>
            <b> Please note: required fields are bold</b><br />
			<div class="padding-8 display-inline-block margin-right10 text-deco-line">
									<a href="<?php echo site_url("admin/browse_user_address/".set_value("",$customer['user'][0]['user_id'])); ?>">Browse user's address book</a>
					<br>
				</div>
				<div class="padding-8 display-inline-block margin-right10 text-deco-line">
									<a onclick="javascript: return confirm('Are you sure?');" title="Delete User" href="<?php echo site_url("admin/delete_user_customer/".set_value("",$customer['user'][0]['user_id'])) ?>"><?php echo translate('delete_this_user_Account');?></a>
					<br>
				</div>
		
        </div>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
				
			
				 
						<?php echo validation_errors(); ?>
						
						<?php
                echo form_open(base_url() . '/admin/update_user_customer/' . set_value("",$customer['user'][0]['user_id']), array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'user_edit',
                    'enctype' => 'multipart/form-data'
                ));
            ?>
						
					
					    <?php //echo form_open("admin/update_user_customer / . set_value("",$customer['user'][0]['user_id'])") ?>
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
					   
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
                                 <input type="hidden" name="user_id" value="<?php echo set_value("",$customer['user'][0]['user_id']) ?> ">
                              
                <div class="accordion-inner ">
	<table class="table table-bordered table-striped td-width50">
		<tbody><tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					First Name :
				</label>
			</td>
			<td>
				<input name="firstname" class="input-large text-input-search" value="<?php echo set_value("",$customer['user'][0]['firstname']) ?>" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Last Name :
				</label>
			</td>
			<td>
				 <input name="surname" class="input-large text-input-search" value="<?php echo set_value("",$customer['user'][0]['surname']) ?>" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Company :
				</label>
			</td>
			<td>
				<input name="contact_company" class="input-large text-input-search" value="<?php echo set_value("",$customer['account'][0]['acc_company_name']) ?>" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Mobile :
				</label>
			</td>
			<td>
				<input name="mobile" class="input-large text-input-search" value="<?php echo set_value("",$customer['user'][0]['mobile']) ?>" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Phone :
				</label>
			</td>
			<td>
				<input name="phone" class="input-large text-input-search" value="<?php echo set_value("",$customer['user'][0]['phone']) ?>" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Email :
				</label>
			</td>
			<td>
				 <input name="email" class="input-large text-input-search" value="<?php echo set_value("",$customer['user'][0]['email']) ?>" type="email">
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
				<input name="username" class="input-large text-input-search" value="<?php echo set_value("",$customer['user'][0]['username']) ?>" type="text">
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
                                        <option value="0" <?php echo $customer['account'][0]['acc_group_discount']== 0? " selected='selected'": null ?>>---</option>
                                        <option  <?php echo $customer['account'][0]['acc_group_discount']== 'free'? " selected='selected'": null ?> value="free">Free</option>

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
                                        <option  <?php echo $customer['account'][0]['acc_group_of_product']== 0? " selected='selected'": null ?> value="0">---</option>
                                        <option value="free" <?php echo $customer['account'][0]['acc_group_of_product']== 'free'? " selected='selected'": null ?>>Free</option>

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
                                        
                                        <option <?php echo $customer['account'][0]['acc_email_mode']== 'HTML'? " selected='selected'": null ?> value="HTML">HTML</option>
										<option  <?php echo $customer['account'][0]['acc_email_mode']== 'TEXT'? " selected='selected'": null ?> value="TEXT">Text</option>

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
                                        
                                        <option <?php echo $customer['account'][0]['acc_email_newsletter']== 'YES'? " selected='selected'": null ?> value="YES">Yes</option>
										<option <?php echo $customer['account'][0]['acc_email_newsletter']== 'NO'? " selected='selected'": null ?> value="NO">NO</option>

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
                                        
                                        <option <?php echo $customer['account'][0]['acc_email_pro_update']== 'Yes'? " selected='selected'": null ?> value="Yes">Yes</option>
										<option <?php echo $customer['account'][0]['acc_email_pro_update']== 'NO'? " selected='selected'": null ?> value="NO">NO</option>

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
			 <textarea class="input-large text-input-search form-control" name="billing_address_line1" id="B-Address-Line-1"><?php echo set_value("",$customer['billing'][0]['address1']) ?></textarea>
				
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('address_line2');?>
				</label>
			</td>
			<td>
				<textarea class="input-large text-input-search form-control" name="billing_address_line2" id="B-Address-Line-2"><?php echo set_value("",$customer['billing'][0]['address2']) ?></textarea>
				 
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					<?php echo translate('city');?>
				</label>
			</td>
			<td>
				<input name="city" class="input-large text-input-search" value="<?php echo set_value("",$customer['billing'][0]['city']) ?>" type="text">
			</td>
		</tr>
		<tr>
			<td>
				<label class="font-size15" for="checkbox_is_visible">
					Country :
				</label>
			</td>
			<td>
				 <select name="country" id="country1" class="chzn-done" onchange="get_states(this.value);">
						  <!--<option value="<?php echo set_value("",$customer['user'][0]['country']) ?>"<?php echo $selected; ?>><?php echo set_value("",$customer['user'][0]['country']) ?></option>  -->
						  <?php 
						  foreach($countries as $country){
						  if($customer['billing'][0]['country'] == $country->id){
						  		$selected = "selected";
						  }else{
						  		$selected = "";
						  }
							echo "<option value='".$country->id."' ".$selected.">".$country->name."</option>";
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
			
					<select size="1" id="state" name="state" class="chzn-done <?php echo $customer['billing'][0]['state'];?>" >
						<!--<option value="<?php echo $state; ?>"<?php echo $selected; ?>><?php echo $state; ?></option>     -->
						<?php
						foreach($states as $state){
							$selected = ($customer['billing'][0]['state'] == $state->id)?"selected":"";
							echo "<option value='".$state->id."' ".$selected.">".$state->name."</option>";
						}
						?>
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
				 <input name="zip_code" class="input-large text-input-search" value="<?php echo set_value("",$customer['billing'][0]['zip']) ?>" type="text">
			</td>
		</tr>
	</tbody></table>
</div></div></div></div>
							
							
                        </div>
                    </div> <!-- Billing Info  end--->
					
					
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
                                    <input type="text" name="total_point"  value="<?php echo set_value("",$customer['point'][0]['total_point']) ?>" class="form-control" id="total-point" placeholder="">
                                </div>
                                </div>
                                                   </div>
                    </div> <!-- Point Info  end--->
					
					 <div class="form-group">
                                    <button class="btn btn-purple" type="submit">Upade User</button>
                     </div>
					 
					
					
					<?php  echo form_close(); ?>
					<?php //} ?>
					
                </div>
            </div>
        </div>
    </div>


<?php 
   // }
?>
</div>

<style>
td {
    float: left;
    width: 50%;
}
</style>
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

<script type="text/javascript">

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
	.btm_border{
            border-bottom: 1px solid #ebebeb;
            padding-bottom: 15px;	
	}
        .list-title{
           background-color: #edeeed;
        }
        .form-group.btm_border.title.list-title b {
    color: #1cabe3;
}
</style>