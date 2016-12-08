<div class="panel-body" id="demo_s">
    <table id="demo-table1" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,6" data-show-toggle1="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                 <th><?php echo translate('no');?></th>
                <th><?php echo translate('group_name');?></th>
                <th><?php echo translate('weight');?></th>
                <th><?php echo translate('price');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>

        <tbody >
        <?php
            $i=0;
            foreach($all_prices as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('weight_group',$row['weight_group_id'],'group_name' );?></td>
            <td><?php echo $row['min_weight'].' Kg - ' .$row['max_weight'].' Kg'; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                    onclick="ajax_modal1('edit1','<?php echo translate('edit_weight_group_price'); ?>','<?php echo translate('successfully_edited!'); ?>','weight_grp_price_edit','<?php echo $row['id']; ?>')" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                </a>

                <a onclick="delete_confirm1('<?php echo $row['id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                    class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" data-original-title="Delete1" data-container="body">
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
<div id='export-div1'>
    <h1 style="display:none;"><?php echo translate('weight_based_price_list');?></h1>
    <table id="export-table1" data-name='weight_based_price_list' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('group_name');?></th>
                    <th><?php echo translate('weight');?></th>
                    <th><?php echo translate('price');?></th>
                </tr>
            </thead>
                
            <tbody>
            <?php
                $i=0;
                foreach($all_prices as $row){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('weight_group',$row['weight_group_id'],'group_name' );?></td>
                <td><?php echo $row['min_weight'].' Kg - ' .$row['max_weight'].' Kg'; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>