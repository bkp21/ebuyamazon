<form action="<?= base_url('admin/point_system_management/update_settings') ?>" method="post"
    id="point_system_settings">
    <input type="hidden" name="csrf_test_name" value="<?= $this->security->get_csrf_hash(); ?>">
    <table class="table table-responsive table-bordered ">
        <tbody>
            <tr>
                <td>
                    <label for="status">Enable point system</label>
                </td>
                <td>
                    <div class="col-md-6">
                        <select name="status" class="form-control" id="status" required>
                            <option value="1"><?= translate('yes'); ?></option>
                            <option value="0"><?= translate('no'); ?></option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="expiry_day">Points will expire after</label>
                </td>
                <td>
                    <div class="col-md-6 input-group" style="padding-left: 15px; width: 47.666667%;">
                        <input type="number" class="form-control" id="expiry_day"
                               name="expiry_day" value="<?= $settings->expiry_day ?>" required>
                        <span class="input-group-addon" style="width: 0">
                            Day<?php if ($settings->expiry_day > 1) echo 's'; ?>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="point_equivalent_to">Every point is equivalent to</label>
                </td>
                <td>
                    <div class="col-md-6 input-group" style="padding-left: 15px; width: 47.666667%">
                        <input type="number" class="form-control" id="point_equivalent_to"
                               name="point_equivalent_to" value="<?= $settings->point_equivalent_to ?>" required>
                        <span class="input-group-addon" style="width: 0"><?= $currency ?></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="free_points_on_registration">Free points for every new registration</label>
                </td>
                <td>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="free_points_on_registration"
                               name="free_points_on_registration"
                               value="<?= $settings->free_points_on_registration ?>" required>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="btn btn-success btn-add-method pull-right" value="Save">
</form>
