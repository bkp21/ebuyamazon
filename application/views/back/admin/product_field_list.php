<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('field_groups');?></th>
                <th><?php echo translate('field_name');?></th>
                <th><?php echo translate('type');?></th>
                <th><?php echo translate('active');?></th>
                <th><?php echo translate('required');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_fields as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('product_field_group',$row['product_field_group_id'],'group_name' );?></td>
            <td><?php echo $row['field_name']; ?></td>
            <td><?php echo translate($row['field_type']);?>
            <td><?php if($row['filed_active']==0){ echo 'No'; } else { echo 'Yes'; } ?></td>       
            <td><?php if($row['field_reqired']==0){ echo 'No'; } else { echo 'Yes'; } ?></td>    
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                    onclick="ajax_modal('edit','<?php echo translate('edit_product_field'); ?>','<?php echo translate('successfully_edited!'); ?>','product_field_edit','<?php echo $row['product_field_id']; ?>')" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                </a>
                <a onclick="delete_confirm('<?php echo $row['product_field_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
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
           
