<div>
    <?php echo form_open(base_url("admin/rma_info/set_approval/{$rma_id}"), [
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'rma_approval',
        'enctype' => 'multipart/form-data'
    ]);
    ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="pub_<?=$rma_id?>"> </label>
                <div class="col-sm-2">
                    <h4><?=translate('pending')?></h4>
                </div>
                <div class="col-sm-4 text-center">
                    <input id="pub_<?=$rma_id?>" data-size="switchery-lg" class='sw1 form-control' name="approval"
                           type="checkbox" value="1" data-id='<?=$rma_id?>' <?php if ($approval) echo 'checked'?>>
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
