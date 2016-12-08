<div class="tab-pane fade active in" id="edit">
    <?php
        echo form_open(base_url("admin/point_system_management/update_range/{$range->id}"), [
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'points_range_edit',
            'enctype' => 'multipart/form-data'
        ]);
    ?>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="min_amount"><?= translate('min_amount') ;?></label>
                <div class="col-sm-9">
                    <input type="number" name="min_amount" id="min_amount" value="<?= $range->min_amount; ?>" class="form-control required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="max_amount"><?= translate('max_amount') ;?></label>
                <div class="col-sm-9">
                    <input type="number" name="max_amount" id="max_amount" class="form-control required" value="<?= $range->max_amount; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="points_r"><?= translate('points') ;?></label>
                <div class="col-sm-9">
                   <input type="number" name="points" id="points_r" class="form-control required" value="<?= $range->points; ?>">
                </div>
            </div>

        </div>
    </form>
</div>

<script>
    $(function () {
        $('button[data-bb-handler=success]').click(function() {
            location.reload();
        });
    });
</script>
