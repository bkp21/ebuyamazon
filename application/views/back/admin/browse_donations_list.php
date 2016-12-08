

<div class="panel-body" id="demo_s">
<div class="accordion-heading acc-head-bg-color">
                <a class="accordion-toggle acc-head-styling textdecoration-none " data-toggle="collapse" data-parent="#accordion_Ixxo_Donate_List" href="#collapse_Ixxo_Donate_List">
                     <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                     <b>Donations List</b><i class="icon-chevron-down pull-right"></i>
                </a>
            </div>
            <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                 <th><?php echo translate('user_name');?></th>
                <th><?php echo translate('transaction_id');?></th>
                <th><?php echo translate('amount');?></th>
                <th><?php echo translate('date');?></th>
                <th><?php echo translate('payment_method');?></th>
                <th><?php echo translate('payment_status');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i = 0;
            foreach($all_donation as $row){
                $i++;
        ?>                
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
            <td><?php echo $row['transaction_id'];?></td>
            <td><?php echo currency(). $row['amount'];?></td>
            <td><?php echo $row['date_added'];?></td>
            <td><?php echo $row['payment_type'];?></td>
            <td>
            	<div class="label label-<?php if($row['payment_status'] == 'paid'){ ?>purple<?php } else { ?>danger<?php } ?>">
                	<?php echo $row['payment_status']; ?>
                </div>
            </td>
            
            <td class="text-right">
                <a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip" 
                    onclick="ajax_modal('view','<?php echo translate('view'); ?>','<?php echo translate('successfully_viewed!'); ?>','browse_donations_view','<?php echo $row['donation_id']; ?>')" data-original-title="View" data-container="body">
                        <?php echo translate('view');?>
                </a>
                <a onclick="delete_confirm('<?php echo $row['donation_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                        class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                            data-original-title="Delete" data-container="body">
                                <?php echo translate('delete');?>
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
    <div id="vendr"></div>
    <h1 style="display:none;"><?php echo translate('browse_donations');?></h1>
    <table id="export-table" data-name='browse_donations' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('user_name');?></th>
                    <th><?php echo translate('transaction_id');?></th>
                    <th><?php echo translate('amount');?></th>
                    <th><?php echo translate('date');?></th>
                    <th><?php echo translate('payment_method');?></th>
                    <th><?php echo translate('payment_status');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_donation as $row){
                    $i++;
            ?>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                    <td><?php echo $row['transaction_id'];?></td>
                    <td><?php echo currency(). $row['amount'];?></td>
                    <td><?php echo $row['date_added'];?></td>
                    <td><?php echo $row['payment_type'];?></td>
                    <td><?php echo $row['payment_status'];?></td>                    
            <?php
                }
            ?>
            </tbody>
    </table>
</div> 
  