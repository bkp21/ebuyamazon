<?php 
	foreach($all_comments as $row)
	{ 
?>
   
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-body">
                <table class="table table-striped" style="border-radius:3px;">
                    <tr>
                        <th class="custom_td"><?php echo translate('product_title');?></th>
                        <td class="custom_td"><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('user');?></th>
                        <td class="custom_td"><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('comments');?></th>
                        <td class="custom_td"><?php echo $row['comment'];?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('ip');?></th>
                        <td class="custom_td"><?php echo $row['ip'];?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('date_added');?></th>
                        <td class="custom_td"><?php echo date('d M,Y',$row['date_added']);?></td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('comment_status');?></th>
                        <td class="custom_td"><?php echo $row['comment_status'];?></td>
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
