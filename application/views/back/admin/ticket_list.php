<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped" data-pagination="true" data-show-refresh="true"
            data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
        <tr>
            <th data-field="id" data-align="center" data-sortable="true"><?=translate('id');?></th>
            <th data-field="title" data-align="center" data-sortable="true"><?=translate('title');?></th>
            <th data-field="client" data-align="center" data-sortable="true"><?=translate('client');?></th>
            <th data-field="priority" data-align="center" data-sortable="true"><?=translate('priority');?></th>
            <th data-field="replied" data-align="center" data-sortable="true"><?=translate('replied');?></th>
            <th data-field="status" data-align="center" data-sortable="true"><?=translate('status');?></th>
            <th data-field="options" data-align="center" class="text-right"><?=translate('options');?></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket) : ?>
                <tr>
                    <td><?=$ticket['ticket_id'];?></td>
                    <td><?=$ticket['title'];?></td>

                    <?php if ($ticket['claimed_by'] == 'user') : ?>
                        <td><?php echo "{$ticket['user']['username']} {$ticket['user']['surname']}"?></td>
                    <?php else: ?>
                        <td><?php echo "{$ticket['vendor']['name']}"?></td>
                    <?php endif; ?>

                    <td>
                        <span class="label
                        <?php if ($ticket['priority'] == 1): ?>
                            label-success
                        <?php elseif ($ticket['priority'] == 2): ?>
                            label-warning
                        <?php else: ?>
                            label-danger
                        <?php endif; ?>
                        ">
                            <?php if ($ticket['priority'] == 1): ?>
                            Low
                            <?php elseif ($ticket['priority'] == 2): ?>
                            Medium
                            <?php else: ?>
                            High
                            <?php endif; ?>
                        </span>
                    </td>
                    <td>
                        <span class="label
                        <?php if ($ticket['replied']) : ?>
                            label-success">Yes
                            <?php else : ?>
                                label-danger">No
                            <?php endif; ?>
                        </span>
                    </td>
                    <td>
                        <strong>
                        <?php if ($ticket['status'] == 1): ?>
                            <?=translate('closed')?>
                        <?php elseif ($ticket['status'] == 2): ?>
                            <?=translate('on_hold')?>
                        <?php elseif ($ticket['status'] == 3): ?>
                            <?=translate('pending_vendor')?>
                        <?php elseif ($ticket['status'] == 4): ?>
                            <?=translate('pending_buyer')?>
                        <?php elseif ($ticket['status'] == 5): ?>
                            <?=translate('pending_support_manager')?>
                        <?php endif; ?>
                        </strong>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow view-btn" data-toggle="tooltip"
                           onclick="ajax_set_full(
                               'view',
                               '<?=translate('view_ticket');?>',
                               '<?=translate('successfully_viewed!');?>',
                               'ticket_view',
                               '<?=$ticket['ticket_id']; ?>'); back_button('show')"
                           data-original-title="View" data-container="body">
                            <?=translate('view');?>
                        </a>
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip"
                           onclick="ajax_set_full(
                           'edit',
                           '<?=translate('edit_ticket');?>',
                           '<?=translate('successfully_edited!');?>',
                           'ticket_edit',
                           '<?=$ticket['ticket_id']; ?>'); back_button('show')"
                           data-original-title="Edit" data-container="body">
                            <?=translate('edit');?>
                        </a>
                        <a onclick="delete_confirm(
                            '<?=$ticket['ticket_id'];?>',
                            '<?=translate('really_want_to_delete_this?');?>')"
                            class="btn btn-danger btn-xs btn-labeled fa fa-trash"
                            data-toggle="tooltip" data-original-title="Delete" data-container="body">
                            <?=translate('delete');?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div id='export-div' style="padding:40px;">
    <h1 id ='export-title' style="display:none;"><?=translate('tickets'); ?></h1>
    <table id="export-table" class="table" data-name='tickets'
            data-orientation='p' data-width='1500' style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
            <tr>
                <th><?=translate('no');?></th>
                <th><?=translate('title');?></th>
                <th><?=translate('client');?></th>
                <th><?=translate('priority');?></th>
                <th><?=translate('replied');?></th>
                <th><?=translate('status');?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket) : ?>
            <tr>
                <td><?=$ticket['id'];?></td>
                <td><?=$ticket['title'];?></td>
                <td><?=$ticket['client'];?></td>
                <td><?=$ticket['priority'];?></td>
                <td>
                    <?php if ($ticket['replied']) : ?>
                    Yes
                    <?php else : ?>
                    No
                    <?php endif; ?>
                </td>
                <td><?=$ticket['status'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
