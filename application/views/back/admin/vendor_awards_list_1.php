<div class="panel-body" id="demo_s">
    <table id="demo-table1" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >

        <thead>
            <tr>
                <th><?php echo translate('id'); ?></th>
                <th><?php echo translate('award_name'); ?></th>
                <th><?php echo translate('from'); ?></th>
                <th><?php echo translate('to'); ?></th>
                <th><?php echo translate('award_logo'); ?></th>
                <th><?php echo translate('active'); ?></th>
                <th class="text-right"><?php echo translate('action'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($all_awards as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['award_name']; ?></td>
                    <td><?php echo $row['award_from']; ?></td>
                    <td><?php echo $row['award_to']; ?></td>
                    <td>
                        <img class="img-md img-circle"
                            src="<?php echo $this->crud_model->file_view('vendor_awards',$row['vendor_awards_id'],'100','','thumb','src','','','.png') ?>"  />
                    </td>
                    <td><?php if($row['is_active'] == '0'){ echo translate('no'); } else { echo translate('yes'); } ?></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                          onclick="ajax_modal('edit1','<?php echo translate('edit_vendor_awards'); ?>','<?php echo translate('successfully_edited!'); ?>','vendor_awards_edit','<?php echo $row['vendor_awards_id']; ?>')" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                         </a>
                        <a onclick="delete_confirm1('<?php echo $row['vendor_awards_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" 
                           data-original-title="Delete1" data-container="body">
                               <?php echo translate('delete'); ?>
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
    <h1 style="display:none;"><?php echo translate('awards'); ?></h1>
    <table id="export-table1" data-name='awards' data-orientation='p' style="display:none;">
        <thead>
            <tr>
                <th><?php echo translate('id'); ?></th>
                <th><?php echo translate('award_name'); ?></th>
                <th><?php echo translate('from'); ?></th>
                <th><?php echo translate('to'); ?></th>
                <th><?php echo translate('active'); ?></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 0;
            foreach ($all_awards as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['award_name']; ?></td>
                    <td><?php echo $row['award_from']; ?></td>
                    <td><?php echo $row['award_to']; ?></td>
                    <td><?php if($row['is_active'] == '0'){ echo translate('no'); } else { echo translate('yes'); } ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
