<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped" data-pagination="true"  data-ignorecol="0,6" data-show-toggle="true" data-show-columns="false">
        <thead>
            <tr>
                <th><?php echo translate('notification_email_type');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>

        <tbody >
        <?php
            foreach($all_notifi_emails as $row){
        ?>
        <tr>
            <td><?php echo $row['notification_email_type']; ?></td>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                    onclick="ajax_set_full('edit','<?php echo translate('edit_notification_emails'); ?>','<?php echo translate('successfully_edited!'); ?>','notification_emails_edit','<?php echo $row['notification_email_id']; ?>');proceed('to_list');" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>