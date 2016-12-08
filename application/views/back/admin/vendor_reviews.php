
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('vendor_reviews');?></h1>
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
                                    <?php echo translate('vendor_reviews');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#vendor-reviews" aria-controls="vendor-reviews" role="tab" data-toggle="tab">Vendor Reviews</a></li>
                                        <li role="presentation"><a href="#vendor-ratings" aria-controls="vendor-ratings" role="tab" data-toggle="tab">Vendor Ratings</a></li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="vendor-reviews">
                                            <h5>Enable/Disable Vendor Reviews</h5>
                                            <?php echo form_open("admin/save_review_setting"); ?>
                                            <table class="table table-responsive table-bordered table-hover">
                                                <tr><td>Activate Vendor Reviews :</td><td><select name="vendor_review" class="selectpicker dropup">
                                                        <option value="1"<?php echo $vendor_review_setting->enable_review ==1? "selected=\"selected\"" : null; ?>>Yes</option>
                                                            <option value="0"<?php echo $vendor_review_setting->enable_review ==0? "selected=\"selected\"" : null; ?>>No</option>
                                                        </select>
                                                    </td></tr>
                                                <tr><td>Auto Approve Vendor Reviews :</td><td><select name="vendor_rating" class="selectpicker dropup">
                                                            <option value="1"<?php echo $vendor_review_setting->enable_auto_approve ==1? "selected=\"selected\"" : null; ?>>Yes</option>
                                                            <option value="0"<?php echo $vendor_review_setting->enable_auto_approve ==0? "selected=\"selected\"" : null; ?>>No</option>
                                                        </select></td></tr>
                                                <tr><td colspan="2"><button class="btn btn-primary" type="submit">Save Setting</button></td></tr>
                                            </table>

                                            <?php echo form_close();?>
                                            <h4>Vendor Reviews List</h4>
                                            <table class="table table-striped table-hover">
                                                <tr><th>#</th><th>Company</th><th style="width: 40%">Rating</th><th>Update Time</th><th>Approved</th><th>Actions</th></tr>
                                                <?php
                                                $i = 1;
                                                foreach($review_list as $item): ?>
                                                    <tr><td><?php echo $i; ?></td><td><?php echo $item['company']; ?></td><td><?php echo $item['rating']; ?></td><td><?php echo date("m-d-Y H:I:s A",strtotime($item['time_modified'])); ?></td><td><?php echo $item['status']? "Yes" : "No"; ?></td><td><a onclick="javascript: return confirm('Are you sure?');" title="Delete News" href="<?php echo site_url("admin/delete_review/{$item['review_id']}") ?>"><i style="color: red" class="fa fa-close"></i></a></td></tr>
                                                    <?php
                                                    $i++;
                                                endforeach;?>
                                            </table>
                                            <div><?php echo $links; ?></div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="vendor-ratings">
                                            <h5>Enable/Disable Vendor Ratings</h5>
                                            <?php echo form_open("admin/save_vendor_rating_setting") ?>
                                            <table class="table table-responsive table-bordered table-hover">
                                                <tr><td>Activate Vendor Ratings :</td><td><select name="vendor_rating" class="selectpicker dropup">
                                                            <option value="1"<?php echo $vendor_rating_setting->enable_rating ==1? "selected=\"selected\"" : null; ?>>Yes</option>
                                                            <option value="0"<?php echo $vendor_rating_setting->enable_rating ==0? "selected=\"selected\"" : null; ?>>No</option>
                                                        </select>
                                                    </td></tr>
                                                <tr><td colspan="2"><button class="btn btn-success" type="submit">Save Setting</button></td></tr>

                                            </table>
                                            <?php echo form_close(); ?>
                                            <h4>Vendor Ratings List</h4>
                                            <table class="table table-striped table-hover">
                                                <tr><th>#</th><th>Company</th><th>Rating</th><th>Order ID</th><th>Product ID</th><th>From</th><th>Update Time</th><th>Status</th><th>Actions</th></tr>
                                                <?php
                                                $i = 1;
                                                foreach($rating_list as $item): ?>
                                                    <tr><td><?php echo $i; ?></td><td><?php echo $item['company']; ?></td><td><?php echo $item['rating']; ?></td><td><?php echo $item['order_id']; ?></td><td><?php echo $item['product_id']; ?></td><td><?php echo $item['from_where']; ?></td><td><?php echo date("m-d-Y H:I:s A",strtotime($item['time_modified'])); ?></td><td><?php echo $item['status']? "Active" : "Inactive"; ?></td><td><a onclick="javascript: return confirm('Are you sure?');" title="Delete News" href="<?php echo site_url("admin/delete_rating/{$item['rating_id']}") ?>"><i style="color: red" class="fa fa-close"></i></a></td></tr>
                                                    <?php
                                                    $i++;
                                                endforeach;?>
                                            </table>

                                            <div><?php echo $links2; ?></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
