<script>
    $(function() {
        $("select[name='priority'] option[value='<?=$ticket['priority'];?>']").attr('selected', 'selected');
        $("select[name='status'] option[value='<?=$ticket['status'];?>']").attr('selected', 'selected');
    });
</script>

<?php
    echo form_open(base_url() . 'index.php/admin/tickets/update/' . $ticket['ticket_id'], [
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'ticket_edit'
    ]);
?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" >
                <?=translate('priority');?>
            </label>
            <div class="col-sm-6">
                <select name="priority" onchange="(this.value)"
                    class="demo-chosen-select required" data-placeholder="Choose a priority"
                    tabindex="-1" style="display: none;">
                    <option value="1"><?=translate('low')?></option>
                    <option value="2"><?=translate('medium')?></option>
                    <option value="3"><?=translate('high')?></option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label" >
                <?=translate('status');?>
            </label>
            <div class="col-sm-6">
                <select name="status" onchange="(this.value)"
                        class="demo-chosen-select required" data-placeholder="Choose a priority"
                        tabindex="-1" style="display: none;">
                    <option value="1"><?=translate('closed')?></option>
                    <option value="2"><?=translate('on_hold')?></option>
                    <option value="3"><?=translate('pending_vendor')?></option>
                    <option value="4"><?=translate('pending_buyer')?></option>
                    <option value="5"><?=translate('pending_support_manager')?></option>
                </select>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-11">
                <span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right"
                    onclick="ajax_set_full(
                        'edit',
                        '<?=translate('edit_ticket');?>',
                        '<?=translate('successfully_edited!');?>',
                        'ticket_edit',
                        '<?=$ticket['ticket_id'];?>')"
                    >
                    <?=translate('reset');?>
                </span>
            </div>

            <div class="col-md-1">
                <span class="btn btn-success btn-md btn-labeled fa fa-upload pull-right"
                    onclick="form_submit(
                        'ticket_edit',
                        '<?=translate('successfully_edited!');?>'); back_button('hide');"
                    >
                    <?=translate('save');?>
                </span>
            </div>
        </div>
    </div>
</form>
<script>
    $("form").submit(function(e){
        return false;
    });

    $('.demo-chosen-select').chosen();
</script>

<style>
    .form-group:first-child {
        margin-top: 6%;
    }
</style>
