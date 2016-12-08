<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >

        <thead>
            <tr>
                <th><?php echo translate('default'); ?></th>
                <th><?php echo translate('code'); ?></th>
                <th><?php echo translate('title'); ?></th>
                <th><?php echo translate('exchange._rate'); ?></th>
                <th><?php echo translate('decimal'); ?></th>
                <th><?php echo translate('symbol'); ?></th>
                <th><?php echo translate('right'); ?></th>
                <th class="text-right"><?php echo translate('action'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            foreach ($all_currencies as $row) {
                ?>
                <tr>
                    <td><input name="is_default" value="<?php echo $row['currency_id']; ?>" type="radio" <?php if($row['is_default']=="1"){echo "checked=''";}?> onclick="make_default(this.value);"></td>
                    <td><?php echo $row['currency_code']; ?></td>
                    <td><?php echo $row['currency_name']; ?></td>
                    <td><?php echo $row['exchange_rate']; ?></td>
                    <td><?php echo $row['decimal_point']; ?></td>
                    <td><?php echo $row['left_symbol']; ?></td>
                    <td><?php echo $row['right_symbol']; ?></td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            onclick="ajax_set_full('edit','<?php echo translate('edit_currency'); ?>','<?php echo translate('successfully_edited!'); ?>','category_edit','<?php echo $row['currency_id']; ?>');proceed('to_list');" data-original-title="Edit" data-container="body">
                                <?php echo translate('edit');?>
                        </a>
                        <a onclick="delete_confirm('<?php echo $row['currency_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" 
                           data-original-title="Delete" data-container="body">
                               <?php echo translate('delete'); ?>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('currency'); ?></h1>
    <table id="export-table" data-name='currency' data-orientation='p' style="display:none;">
        <thead>
            <tr>
                <th><?php echo translate('no'); ?></th>
                <th><?php echo translate('currency_name'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            $i = 0;
            foreach ($all_currencies as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['currency_name']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
function make_default(value){
	$.ajax({
		type:'GET',
		url:'<?php echo base_url(); ?>admin/localisation_settings/ajax_is_default/'+value,
		success: function(data){
		}
	});
}
</script>
