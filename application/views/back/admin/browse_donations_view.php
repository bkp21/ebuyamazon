<?php 
	foreach($all_donation as $row)
	{ 
?>
   
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-body">
                <table class="table table-striped" style="border-radius:3px;">
                    <tr>
                        <th class="custom_td"><?php echo translate('user_name');?></th>
                        <td class="custom_td"><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('transaction_id');?></th>
                        <td class="custom_td"><?php echo $row['transaction_id']; ?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('amount');?></th>
                        <td class="custom_td"><?php echo currency().$row['amount'];?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('date');?></th>
                        <td class="custom_td"><?php echo $row['date_added'];?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('payment_method');?></th>
                        <td class="custom_td"><?php echo $row['payment_type'];?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('payment_status');?></th>
                        <td class="custom_td"><?php echo $row['payment_status'];?></td>
                    </tr>
                </table>
              </div>
            </div>
        </div>					
					
<?php 
	}
?>
            
<style>
.custom_td{
border-left: 1px solid #ddd;
border-right: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}
</style>
