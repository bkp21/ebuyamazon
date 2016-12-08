<table id="demo-table" class="table table-striped" data-pagination="true" data-show-refresh="true"
    data-show-toggle="true" data-show-columns="true" data-search="true" >
    <thead>
        <tr>
            <th>#</th>
            <th><?= translate('username'); ?></th>
            <th><?= translate('points'); ?></th>
            <th><?= translate('expire'); ?></th>

            <th class="text-right"><?= translate('options'); ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($points as $point): ?>
        <tr>
            <td><?= $point->id; ?></td>

            <td><?= $point->user->username; ?></td>
            <td><?= $point->points; ?></td>
            <td><?= $point->expire; ?></td>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip"
                    onclick="ajax_modal(
                        'edit_point', // url
                        '<?= translate('edit_points'); ?>',
                        '<?= translate('successfully_viewed!'); ?>',
                        'point_edit', // form id
                        '<?= $point->id; ?>'
                    );" data-original-title="View" data-container="body">
                    <?= translate('edit'); ?>
                </a>
                <a onclick="delete_confirm(
                        '<?= $point->id; ?>',
                        '<?= translate('really_want_to_delete_this?'); ?>',
                        'delete_point'
                    )" class="btn btn-xs btn-danger btn-labeled fa fa-trash" data-toggle="tooltip"
                        data-original-title="Delete"data-container="body">
                    <?= translate('delete'); ?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div id='export-div' style="padding:40px;">
    <h1 id ='expot-title' style="display:none;"><?= translate('points'); ?></h1>
    <table id="export-table" class="table" data-name='points' data-orientation='p' data-width='1500' style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
        <tr>
            <th>#</th>
            <th><?= translate('username'); ?></th>
            <th><?= translate('points'); ?></th>
            <th><?= translate('expire'); ?></th>
        </tr>
        </thead>

        <tbody >
        <?php foreach ($points as $point): ?>
            <tr>
                <td><?= $point->id; ?></td>
                <td><?= $point->user->username; ?></td>
                <td><?= $point->points; ?></td>
                <td><?= $point->expire; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
