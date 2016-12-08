<h4 class="modal-title text-center padd-all"><?php echo translate('manage_subscriber_email_addresses'); ?> </h4>
<hr style="margin: 10px 0 !important;">	
<div class="panel-body" id="demo_s">
    <table  id="demo-table"  class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="True" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no'); ?></th>
                <th><?php echo translate('email_address'); ?></th>
                <th><?php echo translate('added_at'); ?></th>
                <th class="text-right"><?php echo translate('options'); ?></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 0;
            foreach ($all_subscriber as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php// echo "date"; ?></td>
                    <td class="text-right">
                        <a onclick="delete_confirm('<?php echo $row['subscribe_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" 
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
    <h1 style="display:none;"><?php echo translate('subscriber_email_addresses'); ?></h1>
    <table id="export-table" data-name='subscriber_email_addresses' data-orientation='p' style="display:none;">
        <thead>
            <tr>
                <th><?php echo translate('no'); ?></th>
                <th><?php echo translate('email_address'); ?></th>
                <th><?php echo translate('added_at'); ?></th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 0;
            foreach ($all_subscriber as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php //echo "date"; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script src="<?php echo base_url(); ?>template/back/js/demo/tables.js"></script>

