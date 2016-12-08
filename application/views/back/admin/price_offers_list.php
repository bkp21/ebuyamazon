<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true"
           data-show-toggle="true" data-show-columns="true" data-search="true" >
        <thead>
        <tr>
            <th><?=translate('id')?></th>
            <th><?=translate('customer')?></th>
            <th><?=translate('suggested_price')?></th>
            <th><?=translate('status')?></th>

            <th class="text-right"><?=translate('options')?></th>
        </tr>
        </thead>
        <tbody >
        <?php /** @var array $price_offers */
            foreach ($price_offers as $price_offer): ?>
            <tr>
                <td><?=$price_offer['id']?></td>
                <td><?=$price_offer->user['username']?></td>
                <td><?=$price_offer['suggested_price']?></td>
                <td>
                    <div class="label label-<?=$price_offer['status'] ? 'purple': 'danger'?>">
                        <?=$price_offer['status'] ? translate('accepted') : translate('pending')?>
                    </div>
                </td>
                <td class="text-right">
                    <a class="btn btn-mint btn-xs btn-labeled fa fa-shopping-cart" data-toggle="tooltip"
                       onclick="ajax_set_full(
                           'product_info',
                           '<?=translate('product_info');?>',
                           '<?=translate('successfully_viewed!');?>',
                           'product_info',
                           '<?=$price_offer['product_id']; ?>'); back_button('show'
                           )" data-original-title="Product info" data-container="body">
                        <?=translate('product_info')?>
                    </a>

                    <a href="<?=base_url("admin/view_user_customer_profile/{$price_offer['user_id']}")?>"
                       class="btn btn-dark btn-xs btn-labeled fa fa-user" data-toggle="tooltip"
                       data-original-title="User info" data-container="body">
                        <?=translate('user_info')?>
                    </a>

                    <a class="btn btn-success btn-xs btn-labeled fa fa-check" data-toggle="tooltip"
                       onclick="ajax_modal(
                           'approval',
                           '<?=translate('price_offer_approval')?>',
                           '<?=translate('notification_email_sent!')?>',
                           'price_offer_approval',
                           '<?=$price_offer['id']?>'
                           )" data-original-title="View" data-container="body">
                        <?=translate('approval')?>
                    </a>

                    <a onclick="delete_confirm(
                        '<?=$price_offer['id']?>',
                        '<?=translate('really_want_to_delete_this?')?>'
                        )" class="btn btn-xs btn-danger btn-labeled fa fa-trash" data-toggle="tooltip"
                       data-original-title="Delete" data-container="body">
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
    <h1 id ='export-title' style="display:none;"><?=translate('price_offers'); ?></h1>
    <table id="export-table" class="table" data-name='price_offers' data-orientation='p' data-width='1500'
           style="display:none;">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="150">
            <col width="150">
        </colgroup>
        <thead>
        <tr>
            <th><?=translate('id')?></th>
            <th><?=translate('customer')?></th>
            <th><?=translate('product')?></th>
            <th><?=translate('suggested_price')?></th>
            <th><?=translate('status')?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($price_offers as $price_offer): ?>
            <tr>
                <td><?=$price_offer['id']?></td>
                <td><?=$price_offer->user['username']?></td>
                <td><?=$price_offer->product['title']?></td>
                <td><?=$price_offer['suggested_price']?></td>
                <td>
                    <div class="label label-<?=$price_offer['status'] ? 'purple': 'danger'?>">
                        <?=$price_offer['status'] ? translate('accepted') : translate('pending')?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
