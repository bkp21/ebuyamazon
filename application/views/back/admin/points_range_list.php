<table id="points-range-table" class="table table-bordered table-striped" data-pagination="true">
    <thead>
        <tr>
            <th>#</th>
            <th><?= translate('min_amount'); ?></th>
            <th><?= translate('max_amount'); ?></th>
            <th><?= translate('points'); ?></th>

            <th class="text-right"><?= translate('options'); ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ranges as $range): ?>
        <tr>
            <td><?= $range->id; ?></td>

            <td><?= $range->min_amount; ?></td>
            <td><?= $range->max_amount; ?></td>
            <td><?= $range->points; ?></td>
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip"
                    onclick="ajax_modal(
                        'edit_range', // url
                        '<?= translate('edit_range'); ?>',
                        '<?= translate('successfully_viewed!'); ?>',
                        'points_range_edit', // form id
                        '<?= $range->id; ?>'
                    );" data-original-title="View" data-container="body">
                    <?= translate('edit'); ?>
                </a>
                <a onclick="delete_confirm(
                        '<?= $range->id; ?>',
                        '<?= translate('really_want_to_delete_this?'); ?>',
                        'delete_range'
                    )" class="btn btn-xs btn-danger btn-labeled fa fa-trash" data-toggle="tooltip"
                        data-original-title="Delete"data-container="body">
                    <?= translate('delete'); ?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
