<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('title');?></th>
                <th><?php echo translate('merchant_type');?></th>
                <th><?php echo translate('package_type');?></th>
                <th><?php echo translate('commission % ');?></th>
                <th><?php echo translate('item');?></th>
                <th><?php echo translate('period');?></th>
                <th><?php echo translate('price');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_packages as $row){
                $i++;
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo translate($row['merchant_type']); ?></td>
                    <td><?php echo translate($row['package_type']); ?></td>
                    <td><?php echo $row['commission']; ?></td>
                    <td><?php echo $row['item']; ?></td>
                    <td><?php echo $row['period'].' '.$row['period_types']; ?></td>
                    <td><?php echo $row['price'];?></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            onclick="ajax_set_full('edit','<?php echo translate('edit_packages'); ?>','<?php echo translate('successfully_edited!'); ?>','merchant_packages_edit','<?php echo $row['merchants_packages_id']; ?>');proceed('to_list');" data-original-title="Edit" data-container="body">
                                <?php echo translate('edit');?>
                        </a>

                        <a onclick="delete_confirm('<?php echo $row['merchants_packages_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
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
    <h1 style="display:none;"><?php echo translate('merchant_package');?></h1>
    <table id="export-table" data-name='merchant_package' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('title');?></th>
                    <th><?php echo translate('merchant_type');?></th>
                    <th><?php echo translate('package_type');?></th>
                    <th><?php echo translate('commission % ');?></th>
                    <th><?php echo translate('item');?></th>
                    <th><?php echo translate('period');?></th>
                    <th><?php echo translate('price');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_packages as $row){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo translate($row['merchant_type']); ?></td>
                <td><?php echo translate($row['package_type']); ?></td>
                <td><?php echo $row['commission']; ?></td>
                <td><?php echo $row['item']; ?></td>
                <td><?php echo $row['period'].' '.$row['period_types']; ?></td>
                <td><?php echo $row['price'];?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           