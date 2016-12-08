<div class="tab-pane fade active in" id="edit">
    <?php
        echo form_open(base_url("admin/point_system_management/update_point/{$point->id}"), [
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'point_edit',
            'enctype' => 'multipart/form-data'
        ]);
    ?>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="points_p"><?= translate('points') ;?></label>
                <div class="col-sm-9">
                    <input type="number" name="points" id="points_p" class="form-control required" value="<?= $point->points; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="expire"><?= translate('expire') ;?></label>
                <div class="col-sm-9">
                   <input type="number" name="expire" id="expire" class="form-control required" value="<?= $point->expire; ?>">
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
