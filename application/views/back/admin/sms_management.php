<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"   data-ignorecol="0,3"  data-show-columns="false" >
        <thead>
            <tr>
                <th><?php echo translate('active');?></th>
                <th><?php echo translate('provider ');?></th>
                <th><?php echo translate('id');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
 
            </tr>
        </thead>				
        <tbody>
        <?php
            foreach($all_sms_services as $row){
        ?>
        <tr>
            <td>
                <input type="radio" name="active"  <?php if($row['active']== 1) echo "checked"; ?> onclick="change_confirm('<?php echo $row['sms_services_id']; ?>','<?php echo translate('really_want_to_change_provider?'); ?>')" data-toggle="tooltip" data-container="body" data-original-title="Active">     
            </td>
            <td><?php echo $row['sms_provider_name']; ?></td>
            <td><?php echo $row['sms_gateway'];?></td>
            <td class="text-right">
                <?php if($row['sms_services_id'] != 4): ?>
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            onclick="ajax_modal('edit','<?php echo translate('edit_sms_management'); ?>','<?php echo translate('successfully_edited!'); ?>','sms_management_edit','<?php echo $row['sms_services_id']; ?>')" 
                                data-original-title="Edit" 
                                    data-container="body"><?php echo translate('edit');?>
                </a>
                  <?php endif ?> 
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>

