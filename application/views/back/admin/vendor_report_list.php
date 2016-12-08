<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped" data-pagination="true" data-show-refresh="true"
           data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
        <tr>
            <th data-field="id" data-align="center" data-sortable="true"><?=translate('id');?></th>
            <th data-field="title" data-align="center" data-sortable="true"><?=translate('title');?></th>
            <th data-field="vendor_name" data-align="center" data-sortable="true"><?=translate('vendor_name');?></th>
            <th data-field="user_name" data-align="center" data-sortable="true"><?=translate('user_name');?></th>
            <th data-field="options" data-align="center" class="text-right"><?=translate('options');?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($reports as $report): ?>
            <tr>
                <td><?=$report['report_id']?></td>
                <td><?=$report['title']?></td>
                <td><?=$report->vendor['name']?></td>
                <td><?="{$report->user['username']} {$report->user['surname']}"?></td>
                <td class="text-right">
                    <a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow view-btn" data-toggle="tooltip"
                       onclick="ajax_set_full(
                           'view',
                           '<?=translate('view_report');?>',
                           '<?=translate('successfully_viewed!');?>',
                           'vendor_report_view',
                           '<?=$report['report_id']; ?>'); back_button('show')"
                       data-original-title="View" data-container="body">
                        <?=translate('view');?>
                    </a>
                    <a onclick="delete_confirm(
                        '<?=$report['report_id'];?>',
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
    <h1 id ='export-title' style="display:none;"><?=translate('reports'); ?></h1>
    <table id="export-table" class="table" data-name='reports'
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
        <?php foreach ($reports as $report) : ?>
            <tr>
                <td><?=$report['id'];?></td>
                <td><?=$report['title'];?></td>
                <td><?=$report['client'];?></td>
                <td><?=$report['priority'];?></td>
                <td>
                    <?php if ($report['replied']) : ?>
                        Yes
                    <?php else : ?>
                        No
                    <?php endif; ?>
                </td>
                <td><?=$report['status'];?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
