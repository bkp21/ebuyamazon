<?php
foreach ($all_ip_range as $row) {
?>

    <div>
        <?php
        echo form_open(base_url() . 'index.php/admin/access_settings/update/' . $row['ip_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'access_settings_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('from_IP'); ?></label>
                <div class="col-sm-9">
                    <input type="text" name="from_ip" value="<?php echo $row['from_ip']; ?>" class="form-control required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('to_IP'); ?></label>
                <div class="col-sm-9">
                    <input type="text" name="to_ip" value="<?php echo $row['to_ip']; ?>" class="form-control required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('name'); ?></label>
                <div class="col-sm-9">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('blocked'); ?>
                </label>
                <div class="col-sm-9">
                    <select name="blocked" id="blocked" class="form-control required">
                        <option value="Yes" <?php if ($row['blocked'] == "Yes") {
                    echo 'selected';
                } ?> >Yes</option>
                        <option value="No" <?php if ($row['blocked'] == "No") {
                    echo 'selected';
                } ?>>No</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
    </div>

    <?php
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
</script>


