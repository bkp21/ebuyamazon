<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true"
           data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
            <tr>
                <th><?=translate('rma_id')?></th>
                <th><?=translate('customer')?></th>
                <th><?=translate('return_status')?></th>
                <th><?=translate('approval')?></th>
                <th><?=translate('added_on')?></th>
                <th><?=translate('modified_on')?></th>

                <th class="text-right"><?=translate('options')?></th>
            </tr>
        </thead>
        <tbody >
        <?php foreach ($rma_infos as $rma_info): ?>
            <tr>
                <td><?=$rma_info['id']?></td>
                <td><?=$rma_info->user['username']?></td>
                <td>
                    <div class="label label-<?=$rma_info['status'] ? 'purple': 'danger'?>">
                        <?=$rma_info['status'] ? translate('awaiting') : translate('returned')?>
                    </div>
                </td>
                <td>
                    <div class="label label-<?=$rma_info['approval'] ? 'purple': 'danger'?>">
                        <?=$rma_info['approval'] ? translate('approved') : translate('pending')?>
                    </div>
                </td>
                <td><?=get_date($rma_info['created_at'])?></td>
                <td><?=get_date($rma_info['updated_at'])?></td>
                <td class="text-right">
                    <a class="btn btn-info btn-xs btn-labeled fa fa-usd" data-toggle="tooltip"
                       onclick="ajax_set_full(
                           'sale_info',
                           '<?=translate('sale_info');?>',
                           '<?=translate('successfully_viewed!');?>',
                           'sale_info',
                           '<?=$rma_info['sale_id']; ?>'); back_button('show'
                           )"
                       data-original-title="Sale info" data-container="body">
                        <?=translate('sale_info');?>
                    </a>

                    <a class="btn btn-mint btn-xs btn-labeled fa fa-shopping-cart" data-toggle="tooltip"
                       onclick="ajax_set_full(
                               'product_info',
                               '<?=translate('product_info');?>',
                               '<?=translate('successfully_viewed!');?>',
                               'product_info',
                               '<?=$rma_info['product_id']; ?>'); back_button('show'
                           )" data-original-title="Product info" data-container="body">
                        <?=translate('product_info')?>
                    </a>

                    <a href="<?=base_url("admin/view_user_customer_profile/{$rma_info['user_id']}")?>"
                       class="btn btn-dark btn-xs btn-labeled fa fa-user" data-toggle="tooltip"
                       data-original-title="User info" data-container="body">
                        <?=translate('user_info')?>
                    </a>

                    <a class="btn btn-dark btn-xs btn-labeled fa fa-user-plus" data-toggle="tooltip"
                       onclick="ajax_modal(
                               'vendor_info','<?=translate('vendor_info')?>',
                               '<?=translate('successfully_viewed!')?>',
                               'vendor_info',
                               '<?=$rma_info['vendor_id']?>'
                           )" data-original-title="Vendor info" data-container="body">
                        <?=translate('vendor_info')?>
                    </a>

                    <a class="btn btn-success btn-xs btn-labeled fa fa-check" data-toggle="tooltip"
                       onclick="ajax_modal(
                               'approval',
                               '<?=translate('rma_approval')?>',
                               '<?=translate('notification_email_sent!')?>',
                               'rma_approval',
                               '<?=$rma_info['id']?>'
                           )" data-original-title="View" data-container="body">
                        <?=translate('approval')?>
                    </a>

                    <a onclick="delete_confirm(
                        '<?=$rma_info['id']?>',
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
    <h1 id ='export-title' style="display:none;"><?=translate('rma_info'); ?></h1>
    <table id="export-table" class="table" data-name='rma_info' data-orientation='p' data-width='1800'
           style="display:none;">
        <colgroup>
            <col width="200">
            <col width="200">
            <col width="200">
            <col width="200">
            <col width="250">
            <col width="200">
            <col width="200">
            <col width="250">
        </colgroup>
        <thead>
            <tr>
                <th><?=translate('rma_id')?></th>
                <th><?=translate('sale_id')?></th>
                <th><?=translate('customer')?></th>
                <th><?=translate('vendor')?></th>
                <th><?=translate('status')?></th>
                <th><?=translate('approval')?></th>
                <th><?=translate('added')?></th>
                <th><?=translate('modified')?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rma_infos as $rma_info) : ?>
            <tr>
                <td><?=$rma_info['id']?></td>
                <td><?=$rma_info['sale_id']?></td>
                <td><?=$rma_info->user['username']?></td>
                <td><?=$rma_info->vendor['name']?></td>
                <td>
                    <div class="label label-<?=$rma_info['status'] ? 'purple': 'danger'?>">
                        <?=$rma_info['status'] ? translate('awaiting') : translate('returned')?>
                    </div>
                </td>
                <td>
                    <div class="label label-<?=$rma_info['approval'] ? 'purple': 'danger'?>">
                        <?=$rma_info['approval'] ? translate('approved') : translate('pending')?>
                    </div>
                </td>
                <td><?=get_date($rma_info['created_at'])?></td>
                <td><?=get_date($rma_info['updated_at'])?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
