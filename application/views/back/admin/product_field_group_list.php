<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('products_property_groups');?></th>
                <th><?php echo translate('vendor');?></th>
                <th><?php echo translate('categories');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_groups as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['group_name']; ?></td>
            <?php if($row['vendor_id']!='0') { ?>
            <td><?php echo $this->crud_model->get_type_name_by_id('vendor',$row['vendor_id'],'name' );?></td>
            <?php } else { ?>
               <td><?php echo translate('globle');?></td> 
            <?php } ?>
            <?php if($row['category_id']=='null') { ?>
            <td><?php echo translate('globle'); ?></td>
            <?php } else { ?>
            <td><?php  echo translate('categories'); ?></td>
            <?php  } ?>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                    onclick="ajax_modal('edit','<?php echo translate('edit_product_field_group'); ?>','<?php echo translate('successfully_edited!'); ?>','product_field_group_edit','<?php echo $row['product_field_group_id']; ?>')" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                </a>
                <a onclick="delete_confirm('<?php echo $row['product_field_group_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
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
           
<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('attributes');?></h1>
    <table id="export-table" data-name='attributes' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('products_property_groups');?></th>
                <th><?php echo translate('vendor');?></th>
                <th><?php echo translate('categories');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_groups as $row){
                    $i++;
            ?>
            <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['group_name']; ?></td>
            <?php if($row['vendor_id']!='0') { ?>
            <td><?php echo $this->crud_model->get_type_name_by_id('vendor',$row['vendor_id'],'name' );?></td>
            <?php } else { ?>
               <td><?php echo translate('globle');?></td> 
            <?php } ?>
            <?php if($row['category_id']=='null') { ?>
            <td><?php echo translate('globle'); ?></td>
            <?php } else { ?>
            <td><?php  echo translate('categories'); ?></td>
            <?php  } ?>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           