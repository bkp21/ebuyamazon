<?php 
	foreach($all_sent_email as $row)
	{ 
?>
   
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-body">
                <table class="table table-striped" style="border-radius:3px;">
                    <tr>
                        <th class="custom_td"><?php echo translate('email');?></th>
                        <td class="custom_td"><?php echo $row['email']?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('email_type');?></th>
                        <td class="custom_td"><?php echo $row['email_type']?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('subject');?></th>
                        <td class="custom_td"><?php echo $row['subject']?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('message');?></th>
                        <td class="custom_td"><?php echo $row['message']?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('sent_at');?></th>
                        <td class="custom_td"><?php echo date('d M,Y',$row['sent_datetime']);?></td>
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