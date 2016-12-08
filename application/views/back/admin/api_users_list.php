<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" >
            <thead>
                <tr>
                    <th><?=translate('vendor_id')?></th>
                    <th><?=translate('logo')?></th>
                    <th><?=translate('company')?></th>
                    <th><?=translate('display_name')?></th>
                    <th><?=translate('status')?></th>

                    <th class="text-right"><?=translate('options')?></th>
                </tr>
            </thead>
        <tbody >
        <?php foreach ($api_users as $api_user): ?>
            <tr>
                <td><?=$api_user->vendor['vendor_id']?></td>
                <td>
                    <?php
                        $api_user_avatar = 'uploads/vendor/logo_' . $api_user['vendor_id'] . '.png';
                        $default_avatar = 'uploads/vendor/logo_0.png';

                        $avatar = file_exists($api_user_avatar) ? $api_user_avatar : $default_avatar;
                    ?>
                    <img class="img-sm img-border" style="width: 30px; height: 30px"
                         src="<?php echo base_url() . $avatar?>" />
                </td>
                <td><?=$api_user->vendor['company']?></td>
                <td><?=$api_user->vendor['display_name']?></td>
                <td>
                    <div class="label label-<?=$api_user['status'] ? 'purple': 'danger'?>">
                        <?=$api_user['status'] ? 'approved' : 'pending'?>
                    </div>
                </td>
                <td class="text-right">
                    <a class="btn btn-dark btn-xs btn-labeled fa fa-user" data-toggle="tooltip"
                       onclick="ajax_modal(
                               'view','<?=translate('view_profile')?>',
                               '<?=translate('successfully_viewed!')?>',
                               'vendor_view',
                               '<?=$api_user['vendor_id']?>'
                           )" data-original-title="View" data-container="body">
                        <?=translate('profile')?>
                    </a>
                    <a class="btn btn-success btn-xs btn-labeled fa fa-check" data-toggle="tooltip"
                       onclick="ajax_modal(
                               'approval',
                               '<?=translate('vendor_approval')?>',
                               '<?=translate('successfully_viewed!')?>',
                               'vendor_approval',
                               '<?=$api_user['vendor_id']?>'
                           )" data-original-title="View" data-container="body">
                        <?=translate('approval')?>
                    </a>
                    <a onclick="delete_confirm(
                            '<?=$api_user['vendor_id']?>',
                            '<?=translate('really_want_to_delete_this?')?>'
                        )" class="btn btn-xs btn-danger btn-labeled fa fa-trash" data-toggle="tooltip"
                            data-original-title="Delete"data-container="body">
                        <?=translate('delete')?>
                    </a>
                </td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
<div id="vendr"></div>
<div id='export-div' style="padding:40px;">
    <h1 id ='export-title' style="display:none;"><?=translate('api_users')?></h1>
    <table id="export-table" class="table" data-name='api_users' data-orientation='p' data-width='1500' style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
        <tr>
            <th><?=translate('vendor_id')?></th>
            <th><?=translate('company')?></th>
            <th><?=translate('display_name')?></th>
            <th><?=translate('status')?></th>
        </tr>
        </thead>

        <tbody >
        <?php foreach ($api_users as $api_user): ?>
            <tr>
                <td><?=$api_user['vendor_id']?></td>
                <td><?=$api_user->vendor['company']?></td>
                <td><?=$api_user->vendor['display_name']?></td>
                <td><?=$api_user['status'] ? 'approved' : 'pending'?></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
