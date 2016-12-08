<div id="content-container">
<?php include('dash-header.php');?>
	<div id="page-title">
			<h1 class="page-header text-overflow" >User's Address Book</h1>
	</div>
	<div class="smsalert smsalert-success">
       
            <div>
			<a href="<?php echo site_url("admin/update_user_customer/".set_value("",$customer['user'][0]['user_id'])); ?>" style="font-weight: bold;">Back to user's profile editing</a> <br><br>
              
            </div>
			
        </div>
	 
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
				
				<table class="table table-striped table-bordered" width="100%">
				 <tbody>
			
					
					
           
		  <tr>
            
			 <td>Address1(Primary)</td>
            
        </tr>           
        <tr>
		 
			<input type="hidden" name="user_id" value="<?php echo set_value("",$customer['billing'][0]['user_id']) ?> ">
			 	<td> <?php if('address1' == null){
          		echo set_value("",$customer['billing'][0]['address2']);
        }
		else
		{
		 echo set_value("",$customer['billing'][0]['address1']); } ?></td>
        </tr>
        
		</tbody></table>

                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

