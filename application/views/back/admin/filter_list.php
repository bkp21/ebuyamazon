<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('filter_group');?></th>
                <th><?php echo translate('sort_order');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_filters as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['filter_group_name']; ?></td>
            <td><?php echo $row['filter_group_order'];?></td>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                    onclick="ajax_set_full('edit','<?php echo translate('edit_filter'); ?>','<?php echo translate('successfully_edited!'); ?>','filter_edit','<?php echo $row['filter_id']; ?>');proceed('to_list');" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                </a>

                <a onclick="delete_confirm('<?php echo $row['filter_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
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
    <h1 style="display:none;"><?php echo translate('filters');?></h1>
    <table id="export-table" data-name='filters' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('filter_group');?></th>
                    <th><?php echo translate('sort_order');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_filters as $row){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['filter_group_name']; ?></td>
                <td><?php echo $row['filter_group_order'];?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           