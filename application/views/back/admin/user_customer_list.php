
<div id="content-container">
<?php include('dash-header.php');?>
<div>
        <h1 class="page-header text-overflow" ><?php echo translate('manage_user');?></h1>
    </div>
    <div class="smsalert smsalert-success">
        <div>
            <b> Please note: required fields are bold </b>
        </div>
    </div>
   
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('manage_user');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>
<div style="margin-bottom: 10px;"><a href="<?php echo site_url("admin/add_user_customer") ?>" class="btn btn-primary">Add User</a></div>
                               <div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('username');?></th>
                <th><?php echo translate('email');?></th>
                <th><?php echo translate('phone');?></th>
				<th><?php echo translate('address1');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
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
            <td>
   
                    <?php echo $row['username']; ?>
                    
                    	
				
            </td>
            <td><?php echo $row['email']; ?></td>
            <td class=""><?php echo $row['phone']; ?></td>
			 <td><?php echo $row['email']; ?></td>
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
                        <th><?php echo translate('username');?></th>
                        <th><?php echo translate('e-mail');?></th>
					<th><?php echo translate('phone');?></th>
					<th><?php echo translate('address1');?></th>
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
					<td><?php echo $row['username']; ?> <?php echo $row['surname']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo currency().$this->crud_model->total_purchase($row['user_id']); ?></td>            	
				</tr>
	            <?php
	            	}
				?>
				</tbody>
		</table>
	</div>
           
<div><?php echo $links; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
