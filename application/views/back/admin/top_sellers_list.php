<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true"
           data-show-columns="true" data-search="true" >
        <thead>
        <tr>
            <th><?=translate('vendor_id')?></th>
            <th><?=translate('logo')?></th>
            <th><?=translate('company')?></th>
            <th><?=translate('display_name')?></th>
            <th><?=translate('rating')?></th>

            <th class="text-right"><?=translate('options')?></th>
        </tr>
        </thead>
        <tbody >
        <?php foreach ($topSellers as $topSeller): ?>
            <tr>
                <td><?=$topSeller->vendor['vendor_id']?></td>
                <td>
                    <?php
                    $topSeller_avatar = 'uploads/vendor/logo_' . $topSeller['vendor_id'] . '.png';
                    $default_avatar = 'uploads/vendor/logo_0.png';

                    $avatar = file_exists($topSeller_avatar) ? $topSeller_avatar : $default_avatar;
                    ?>
                    <img class="img-sm img-border" style="width: 30px; height: 30px"
                         src="<?php echo base_url() . $avatar?>" />
                </td>
                <td><?=$topSeller->vendor['company']?></td>
                <td><?=$topSeller->vendor['display_name']?></td>
                <td><?=$topSeller['rating']?></td>
                <td class="text-right">
                    <a class="btn btn-dark btn-xs btn-labeled fa fa-user" data-toggle="tooltip"
                       onclick="ajax_modal(
                           'view','<?=translate('view_profile')?>',
                           '<?=translate('successfully_viewed!')?>',
                           'vendor_view',
                           '<?=$topSeller['vendor_id']?>'
                           )" data-original-title="View" data-container="body">
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
    <h1 id ='export-title' style="display:none;"><?=translate('top_sellers')?></h1>
    <table id="export-table" class="table" data-name='top_sellers' data-orientation='p' data-width='1500' style="display:none;">
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
            <th><?=translate('rating')?></th>
        </tr>
        </thead>

        <tbody >
        <?php foreach ($topSellers as $topSeller): ?>
            <tr>
                <td><?=$topSeller['vendor_id']?></td>
                <td><?=$topSeller->vendor['company']?></td>
                <td><?=$topSeller->vendor['display_name']?></td>
                <td><?=$topSeller['rating']?></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
