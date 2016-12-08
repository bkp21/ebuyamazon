
<div id="content-container">
<?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('Search User');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
					    
						
					
					    <?php echo form_open("admin/search_user_customer") ?>
                        <div class="panel panel-bordered-primary">
                           
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('Give User Info');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                           <div class="row">
                              
                               <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Last Name</label>
                                       <input type="text" name="surname" class="form-control" id="surname">
                                   </div>
                               </div>
                               <div class="col-md-4">  
                                   <div class="form-group">
                                       <label for="product-id">Email Address</label>
                                         <input type="text" name="email" class="form-control" id="email">

                                   </div>
                               </div>
							   
							   <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Discount Group</label>
                                       <select class="demo-chosen-select" name="disc_grp">
                                           <option value="">Any</option>
                                           <option value="1">Free</option>
                                          </select>
                                   </div>
                               </div>
                           </div>
						  
                           <div class="row">
						    	  <div class="col-md-4"> 
                               <div class="form-group">
                                       <label for="product-name">User Name</label>
                                       <input type="text" name="username" class="form-control" id="username">
                                   </div>
								   </div>
								  <div class="col-md-4"> 
                               <div class="form-group">
                                       <label for="product-name">Company</label>
                                       <input type="text" name="acc_company_name" class="form-control" id="acc_company_name">
                                   </div>
								   </div>
                                  <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Product Group</label>
                                       <select class="demo-chosen-select" name="product_grp">
                                           <option value="">Any</option>
                                           <option value="1">Free</option>
                                          																							</select>
                                   </div>
                               </div>
								   </div>

                               
							<div class="row">
                               <div class="col-md-4">  
                                   <div class="form-group">
                                       <label for="product-id">Phone Number</label>
                                         <input type="text" name="mobile" class="form-control" id="mobile">

                                   </div>
                               </div>
							   
                           </div>
						    

                           
                       </div>
							
							
							               </div>
                    </div> 
					
					
					<div class="form-group">
                                    <button class="btn btn-purple" type="submit" name="user-search">Search User</button>
                     </div>
				    
					
					<?php echo form_close(); ?>
					
					
					
	<?php if(!empty($all_users)) {  ?>				
					  <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('user');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                

                               <div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('name');?></th>
				<th><?php echo translate('company');?></th>
                <th><?php echo translate('e-mail_address');?></th>
				<th><?php echo translate('groups(discount,products)');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i = 0;
            foreach($all_users as $row){
                $i++;
        ?>   
		<?php
            $user_id = $row['user_id'];
			//echo $user_id;
			$data=array();
			$this->db->where('user_id', $user_id);
       		$query_account = $this->db->get('user_account_info_tbl');
      		$account = $query_account->result_array();
	   		$data['account']=$account;
			//print_r($account);
            foreach($account as $customer){
               
				
				$company_name = $customer['acc_company_name'];
				$acc_group_discount = $customer['acc_group_discount'];
				$acc_group_of_product = $customer['acc_group_of_product'];
				}
				
        ?>     
		              
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['firstname']; ?> <?php echo $row['surname']; ?></td>
			<td><?php echo $company_name;  ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $acc_group_discount.','; ?> <?php echo $acc_group_of_product; ?></td>     
          	<td class="text-right">
			    <a title="View User" href="<?php echo site_url("admin/view_user_customer_profile/{$row['user_id']}"); ?>">
				<i class="fa fa-eye"></i></a>
                <a title="Update User" href="<?php echo site_url("admin/update_user_customer/{$row['user_id']}"); ?>">
				<i class="fa fa-edit"></i></a>&nbsp; <a onclick="javascript: return confirm('Are you sure?');" title="Delete User" href="<?php echo site_url("admin/delete_user_customer/{$row['user_id']}") ?>">
				<i style="color: red" class="fa fa-close"></i></a>
            </td>
        </tr>
        <?php
            } 
        ?>
        </tbody>
    </table>
</div>
    
    <div id='export-div' style="padding:40px;">
		<h1 id ='export-title' style="display:none;"><?php echo translate('users'); ?></h1>
		<table id="export-table" class="table" data-name='users' data-orientation='p' data-width='1500' style="display:none;">
				<colgroup>
					<col width="50">
					<col width="150">
					<col width="150">
					<col width="150">
				</colgroup>
				<thead>
					<tr>
						<th><?php echo translate('no');?></th>
                        <th><?php echo translate('name');?></th>
						<th><?php echo translate('company');?></th>
                        <th><?php echo translate('e-mail_address');?></th>
						<th><?php echo translate('groups(discount,products)');?></th>
					
					</tr>
				</thead>



				<tbody >
				<?php
					$i = 0;
	            	foreach($all_users as $row){
	            		$i++;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['firstname']; ?> <?php echo $row['surname']; ?></td>
					<td><?php echo set_value("",$customer['account'][0]['acc_company_name']) ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['acc_group_discount']; ?> <?php echo $row['acc_group_of_product']; ?></td>            	
				</tr>
	            <?php
	            	}
				?>
				</tbody>
		</table>
	</div>
           
 <div>
                              </div>
                            </div>
                        </div>
                    </div>  <!---serch-->
					
					
			<?php } //end of epty user check ?>		

                </div>
            </div>
        </div>
    </div>



</div>


	<script src="<?php echo base_url(); ?>template/back/js/demo/tables.js"></script>
