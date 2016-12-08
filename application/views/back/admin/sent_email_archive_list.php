<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-columns="true" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('type_/_email_subject');?></th>
                <th><?php echo translate('sent_at');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i = 0;
            foreach($all_sent_email as $row){
                $i++;
        ?>                
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['email_type'].' / '.$row['subject']; ?></td>
            <td><?php echo date('d M,Y',$row['sent_datetime']);?></td>
            <td class="text-right">
              <a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip" 
                    onclick="ajax_set_full('view','<?php echo translate('view_sent_email'); ?>','<?php echo translate('successfully_viewed!'); ?>','sent_email_archive_view','<?php echo $row['sent_email_id']; ?>');proceed('to_list');" data-original-title="View" data-container="body">
                        <?php echo translate('view_message');?>
                </a>

            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
    
   