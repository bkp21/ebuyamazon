<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true"
           data-show-columns="true" data-search="true" >
        <thead>
        <tr>
            <th><?=translate('user_id')?></th>
            <th><?=translate('username')?></th>
            <th><?=translate('email')?></th>
            <th><?=translate('total_points')?></th>

            <th class="text-right"><?=translate('options')?></th>
        </tr>
        </thead>
        <tbody >
        <?php foreach ($topBuyers as $topBuyer): ?>
            <tr>
                <td><?=$topBuyer->user['user_id']?></td>
                <td><?=$topBuyer->user['username']?></td>
                <td><?=$topBuyer->user['email']?></td>
                <td><?=$topBuyer['total_point']?></td>
                <td class="text-right">
                    <a href="<?=site_url("admin/view_user_customer_profile/{$topBuyer['user_id']}")?>"
                       class="btn btn-dark btn-xs btn-labeled fa fa-user" data-toggle="tooltip" data-original-title="View" data-container="body">
                        <?=translate('profile')?>
                    </a>
                </td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
<div id="vendr"></div>
<div id='export-div' style="padding:40px;">
    <h1 id ='export-title' style="display:none;"><?=translate('top_buyers')?></h1>
    <table id="export-table" class="table" data-name='top_buyers' data-orientation='p' data-width='1500' style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
        <tr>
            <th><?=translate('user_id')?></th>
            <th><?=translate('username')?></th>
            <th><?=translate('email')?></th>
            <th><?=translate('total_point')?></th>
        </tr>
        </thead>

        <tbody >
        <?php foreach ($topBuyers as $topBuyer): ?>
            <tr>
                <td><?=$topBuyer['user_id']?></td>
                <td><?=$topBuyer->user['username']?></td>
                <td><?=$topBuyer->user['email']?></td>
                <td><?=$topBuyer['total_point']?></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
