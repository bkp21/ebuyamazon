<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
        <tr>
            <th>#</th>
            <th><?= translate('email'); ?></th>
            <th><?= translate('subscribed_at'); ?></th>

            <th class="text-right"><?= translate('options'); ?></th>
        </tr>
        </thead>
        <tbody >
        <?php foreach ($subscribers as $subscriber): ?>
            <tr>
                <td><?= $subscriber->subscribe_id; ?></td>
                <td><?= $subscriber->email; ?></td>
                <td><?= get_date($subscriber->created_at); ?></td>
                <td class="text-right">
                    <a onclick="delete_confirm(
                        '<?= $subscriber->subscribe_id; ?>',
                        '<?= translate('really_want_to_delete_this?'); ?>'
                        )" class="btn btn-xs btn-danger btn-labeled fa fa-trash" data-toggle="tooltip"
                       data-original-title="Delete"data-container="body">
                        <?= translate('delete'); ?>
                    </a>
                </td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
<div id="vendr"></div>
<div id='export-div' style="padding:40px;">
    <h1 id ='export-title' style="display:none;"><?= translate('api_users'); ?></h1>
    <table id="export-table" class="table" data-name='api_users' data-orientation='p' data-width='1500' style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
        <tr>
            <th>#</th>
            <th><?= translate('email'); ?></th>
            <th><?= translate('subscribed_at'); ?></th>
            <th><?= translate('subscribed_at'); ?></th>
        </tr>
        </thead>

        <tbody >
        <?php foreach ($subscribers as $subscriber): ?>
            <tr>
                <td><?= $subscriber->subscribe_id; ?></td>
                <td><?= $subscriber->email; ?></td>
                <td><?= get_date($subscriber->created_at); ?></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
