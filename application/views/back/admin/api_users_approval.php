<div>
    <?php echo form_open(base_url() . 'index.php/admin/api_users/set_approval/'.$vendor_id, [
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'vendor_approval',
        'enctype' => 'multipart/form-data'
    ]);
    ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="pub_<?=$vendor_id?>"> </label>
                <div class="col-sm-2">
                    <h4><?=translate('postpone')?></h4>
                </div>
                <div class="col-sm-4 text-center">
                    <input id="pub_<?=$vendor_id?>" data-size="switchery-lg" class='sw1 form-control' name="approval"
                           type="checkbox" value="1" data-id='<?=$vendor_id?>' <?php if ($status) echo 'checked'?>>
                </div>
                <div class="col-sm-2">
                    <h4><?=translate('approve')?></h4>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function() {
        set_switchery();
    });
</script>
