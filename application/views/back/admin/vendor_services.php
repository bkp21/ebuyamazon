
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('vendor_services');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('vendor_services');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                                <?php if(validation_errors()): ?>
                                    <div class="alert alert-danger">
                                        <?php  echo validation_errors(); ?>
                                    </div>
                                <?php endif?>

                                <?php echo form_open("admin/vendor_services") ?>
                                <table class="table table-responsive table-bordered table-hover">
                                    <tr><td>Paid Featured Vendors :</td><td><select name="paid_featured_vendor" class="selectpicker show-menu-arrow">
                                                <option value="1" <?php echo $service_settings->paid_featured_vendor == 1 ? " selected=\"selected\"" : null ?>>Yes</option>
                                                <option value="0" <?php echo $service_settings->paid_featured_vendor == 0 ? " selected=\"selected\"" : null ?>>No</option>
                                            </select>
                                        </td></tr>
                                    <tr><td>Featured Vendors Fee :</td><td><input style="width: 220px;" type="text" name="paid_featured_vendor_fee" class="form-control" id="paid-featured-vendor" placeholder="" value="<?php echo $service_settings->paid_featured_vendor_fee ?>"></td></tr>
                                    <tr><td>Featured Vendor Package Time (in days) :</td><td><input style="width: 220px;" type="text" name="vendor_packaged_time" class="form-control" id="paid-featured-vendor" placeholder="" value="<?php echo $service_settings->vendor_packaged_time ?>"></td></tr>
                                    <tr><td>Paid Featured Products :</td><td><select name="paid_featured_product" class="selectpicker show-menu-arrow">
                                                <option value="1"<?php echo $service_settings->paid_featured_product ==1? " selected=\"selected\"":null ?>>Yes</option>
                                                <option value="0"<?php echo $service_settings->paid_featured_product ==0? " selected=\"selected\"":null ?>>No</option>
                                            </select></td></tr>
                                    <tr><td>Featured Product Fee :</td><td><input style="width: 220px;" type="text" name="featured_product_fee" class="form-control" id="paid-featured-vendor" placeholder="" value="<?php echo $service_settings->featured_product_fee ?>"></td></tr>
                                    <tr><td>Featured Product Package Time (in days) :</td><td><input style="width: 220px;" type="text" name="featured_product_package_time" class="form-control" id="paid-featured-vendor" placeholder="" value="<?php echo $service_settings->featured_product_package_time ?>"></td></tr>
                                    <tr><td colspan="2"><button class="btn btn-success" type="submit">Save Changes</button></td></tr>


                                </table>

                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
