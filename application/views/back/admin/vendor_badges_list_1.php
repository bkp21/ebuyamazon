<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >

        <thead>
            <tr>
                <th><?php echo translate('id'); ?></th>
                <th><?php echo translate('badges_name'); ?></th>
                <th><?php echo translate('logo'); ?></th>
                <th><?php echo translate('active'); ?></th>
                <th class="text-right"><?php echo translate('action'); ?></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i=0;
            foreach ($all_badges as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['badge_name']; ?></td>
                    <td>
                        <img class="img-md img-circle"
                            src="<?php echo $this->crud_model->file_view('vendor_badges',$row['vendor_badges_id'],'100','','thumb','src','','','.png') ?>"  />
                    </td>
                    <td><?php if($row['is_active'] == '0'){ echo translate('no'); } else { echo translate('yes'); } ?></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                          onclick="ajax_modal('edit','<?php echo translate('edit_vendor_badges'); ?>','<?php echo translate('successfully_edited!'); ?>','vendor_badges_edit','<?php echo $row['vendor_badges_id']; ?>')" data-original-title="Edit" data-container="body">
                        <?php echo translate('edit');?>
                         </a>
                        <a onclick="delete_confirm('<?php echo $row['vendor_badges_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" 
                           data-original-title="Delete" data-container="body">
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

<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('badges'); ?></h1>
    <table id="export-table" data-name='badges' data-orientation='p' style="display:none;">
        <thead>
            <tr>
              <th><?php echo translate('id'); ?></th>
                <th><?php echo translate('badges_name'); ?></th>
                <th><?php echo translate('logo'); ?></th>
                <th><?php echo translate('active'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            $i = 0;
            foreach ($all_badges as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['badge_name']; ?></td>
                    <td><?php //echo $row['badges_logo']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
