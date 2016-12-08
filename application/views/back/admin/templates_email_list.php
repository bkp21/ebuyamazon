<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('template_name');?></th>
                <th><?php echo translate('subject');?></th>
                <th><?php echo translate('status');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_templates as $row){
                $i++;
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['tempalte_name']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php
                     if ($row['status'] == 0) {
                      echo translate('enabled');
                     }
                    else {
                      echo translate('disabled');
                    }
                     ?></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            onclick="ajax_set_full('edit','<?php echo translate('edit_template'); ?>','<?php echo translate('successfully_edited!'); ?>','templates_email_edit','<?php echo $row['template_email_id']; ?>');proceed('to_list');" data-original-title="Edit" data-container="body">
                                <?php echo translate('edit');?>
                        </a>

                        <a onclick="delete_confirm('<?php echo $row['template_email_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                        	class="btn btn-danger btn-xs btn-labeled fa fa-trash" 
                            	data-toggle="tooltip"data-original-title="Delete" data-container="body">
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
           
<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('templates_email');?></h1>
    <table id="export-table" data-name='templates_email' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('template_name');?></th>
                <th><?php echo translate('subject');?></th>
                <th><?php echo translate('status');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_templates as $row){
                    $i++;
            ?>
            <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['tempalte_name']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php
                     if ($row['status'] == 0) {
                      echo translate('enabled');
                     }
                    else {
                      echo translate('disabled');
                    }
                     ?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           