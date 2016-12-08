<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('manage_company_information'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            foreach ($data as $row) {
                if ($row['type'] == 'register_no') {
                    $register_no = $row['value'];
                }
                if ($row['type'] == 'company_name') {
                    $company_name = $row['value'];
                }
                if ($row['type'] == 'address1') {
                    $address1 = $row['value'];
                }
                if ($row['type'] == 'address2') {
                    $address2 = $row['value'];
                }
                if ($row['type'] == 'city') {
                    $city = $row['value'];
                }
                if ($row['type'] == 'state') {
                    $state = $row['value'];
                }
                if ($row['type'] == 'zip') {
                    $zip = $row['value'];
                }
                if ($row['type'] == 'country') {
                    $country = $row['value'];
                }
                if ($row['type'] == 'phone') {
                    $phone = $row['value'];
                }
                if ($row['type'] == 'fax') {
                    $fax = $row['value'];
                }
                if ($row['type'] == 'website') {
                    $website = $row['value'];
                }
                if ($row['type'] == 'email') {
                    $email = $row['value'];
                }
                if ($row['type'] == 'slogan') {
                    $slogan = $row['value'];
                }
            }
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark">
                    <?php
                    echo form_open(base_url() . 'index.php/admin/company_information/set/', array(
                        'class' => 'form-horizontal',
                        'method' => 'post',
                        'id' => 'comp_id'
                    ));
                    ?>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Business Register Number :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="register_no" value="<?php echo $register_no; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Company Name :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="company_name" value="<?php echo $company_name; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Address Line 1 :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="address1" value="<?php echo $address1; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Address Line 2 :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="address2" value="<?php echo $address2; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('City :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="city" value="<?php echo $city; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('State/Province :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="state" value="<?php echo $state; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Company Zip :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="zip" value="<?php echo $zip; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Country :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="country" value="<?php echo $country; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Company Phone :'); ?></label>
                            <div class="col-sm-6">
                                <input type="" name="phone" value="<?php echo $phone; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Company Fax :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="fax" value="<?php echo $fax; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Company Website :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="website" value="<?php echo $website; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('Company Email :'); ?></label>
                            <div class="col-sm-6">
                                <input type="email" name="email" value="<?php echo $email; ?>" class="form-control required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo translate('CompanySlogan :'); ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="slogan" value="<?php echo $slogan; ?>" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="panel-footer text-right">
                        <span class="btn btn-info submitter" 
                              data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
                                  <?php echo translate('save'); ?>
                        </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none;" id="company"></div>
<script>
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'company_information';
</script>
