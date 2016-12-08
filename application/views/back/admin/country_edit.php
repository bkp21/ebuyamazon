<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<?php
foreach ($country_data as $row) {
    ?>
    <div class="tab-pane fade active in" id="edit">
        <?php
        echo form_open(base_url() . 'index.php/admin/country/update/' . $row['id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'country_edit'
        ));
        ?>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('country_name'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="text" name="country_name" id="demo-hor-1" value="<?php echo $row['country_name']; ?>" class="form-control required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('iso_code_(1)'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="text" name="iso1" id="iso1" class="form-control required" value="<?php echo $row['iso1']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('iso_code_(2)'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="text" name="iso2" id="iso2" class="form-control required" value="<?php echo $row['iso2']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><span data-toggle="tooltip" data-html="true" title="First Name = {firstname}&lt;br /&gt;Last Name = {lastname}&lt;br /&gt;Company = {company}&lt;br /&gt;Address 1 = {address_1}&lt;br /&gt;Address 2 = {address_2}&lt;br /&gt;City = {city}&lt;br /&gt;Postcode = {postcode}&lt;br /&gt;Zone = {zone}&lt;br /&gt;Zone Code = {zone_code}&lt;br /&gt;Country = {country}">
                        <?php echo translate('address_format'); ?> <i class="fa fa-question-circle"></i>
                    </span></label>
                <div class="col-sm-9">
                    <textarea name="address_format" id="address_format" class="form-control"><?php echo $row['address_format']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('status'); ?>
                </label>
                <div class="col-sm-9">
                    <select name="status" id="status" class="form-control required">
                        <option value="1" <?php if ($row['status'] == 1) {
                    echo 'selected';
                } ?> >Enabled</option>
                        <option value="0" <?php if ($row['status'] == 0) {
                    echo 'selected';
                } ?>>Disabled</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
    </div>
    <?php
}
?>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
</script>