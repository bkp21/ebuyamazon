<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('title');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_shipping_status as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['shipping_status_title']; ?></td>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                    onclick="ajax_modal('edit','<?php echo translate('edit_shipping_status'); ?>','<?php echo translate('successfully_edited!'); ?>','shipping_status_edit','<?php echo $row['shipping_status_id']; ?>')" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                </a>
               <?php 
                if($row['shipping_status_id']!=1)
                { ?>    
                <a onclick="delete_confirm('<?php echo $row['shipping_status_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                        class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                            data-original-title="Delete" data-container="body">
                                <?php echo translate('delete');?>
                </a>
                <?php } ?>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
           
<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('shipping_statuses');?></h1>
    <table id="export-table" data-name='shipping_statuses' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('title');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_shipping_status as $row){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['shipping_status_title']; ?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           