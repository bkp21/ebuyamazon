<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('id'); ?></th>
                <th><?php echo translate('from_ip'); ?></th>
                <th><?php echo translate('to_ip'); ?></th>
                <th><?php echo translate('name'); ?></th>
                <th><?php echo translate('blocked'); ?></th>
                <th class="text-right"><?php echo translate('action'); ?></th>
            </tr>
        </thead>				
        <tbody >
            <?php
            $i = 0;
            foreach ($all_ip_range as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['from_ip']; ?></td>
                    <td><?php echo $row['to_ip']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['blocked']; ?></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                           onclick="ajax_modal('edit', '<?php echo translate('edit_ip_range'); ?>', '<?php echo translate('successfully_edited!'); ?>', 'access_settings_edit', '<?php echo $row['ip_id']; ?>')" data-original-title="Edit" data-container="body">
                               <?php echo translate('edit'); ?>
                        </a>

                        <a onclick="delete_confirm('<?php echo $row['ip_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')" 
                           class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                           data-original-title="Delete" data-container="body">
                               <?php echo translate('delete'); ?>
                        </a>
                    <?php } ?>
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('IP access List'); ?></h1>
    <table id="export-table" data-name='access_settings' data-orientation='p' style="display:none;">
        <thead>
            <tr>
                <th><?php echo translate('id'); ?></th>
                <th><?php echo translate('from_ip'); ?></th>
                <th><?php echo translate('to_ip'); ?></th>
                <th><?php echo translate('name'); ?></th>
                <th><?php echo translate('blocked'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            $i = 0;
            foreach ($all_ip_range as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['from_ip']; ?></td>
                    <td><?php echo $row['to_ip']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['blocked']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
