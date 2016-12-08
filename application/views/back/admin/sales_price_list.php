<style>
    .date-nav a{
        color: blue;
        transition: all 200ms ease;
    }

    .date-nav a:hover{
        color: green;
    }

    .edit-current i{
        font-size: 14pt;
    }
</style>
<script src="<?php echo base_url(); ?>template/back/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>template/back/multiple-select/multiple-select.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/multiple-select/multiple-select.css">
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('sales_price');?></h1>
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
                                    <?php echo translate('sales_schedule');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                                <?php if($this->session->flashdata('failed')): ?>
                                    <div class="alert alert-danger">
                                        <?php  echo $this->session->flashdata('failed'); ?>
                                    </div>
                                <?php endif?>

                                <?php if(validation_errors()): ?>
                                    <div class="alert alert-danger">
                                        <?php  echo validation_errors(); ?>
                                    </div>
                                <?php endif?>
                                <?php echo form_open(""); ?>
                                <table class="table table-responsive table-bordered table-hover">
                                <tr>
                                    <th colspan="2">Price Update Setting</th></tr>
                                    <tr><td>Select Vendor: </td><td><select name="vendor">
                                                <option value="all">All</option>
                                                <?php foreach($vendor_list as $item): ?>
                                                    <option value="<?php echo $item['vendor_id'] ?>"><?php echo $item['display_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select></tr>
                                    <tr><td>Discount :</td><td><input style="width: 50px;" type="text" name="discount" value="0.00">
                                            <select name="unit">
                                                <?php foreach($units as $k => $v): ?>
                                                    <option value="<?php echo $k; ?>"><?php echo $v; ?></option>
                                                <?php endforeach; ?>
                                            </select> </td></tr>
                                    <tr><td>Categories :</td><td><select style="width: 200px;" id="select-cats" name="cats[]">
                                                <?php foreach($vendor_list as $item): ?>
                                                    <option value="<?php echo $item['vendor_id'] ?>"><?php echo $item['display_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select></td></tr>
                                    <tr><td>Sales Start Date</td><td><input id="start-date" name="start_date"></td></tr>
                                    <tr><td>Sales End Date</td><td><input id="end-date" name="end_date"></td></tr>
                                    <tr><td><a onclick="return confirm('Are you sure?');" class="btn btn-danger btn-lg btn-labeled fa fa-trash pull-left" href="<?php echo site_url("admin/remove_all"); ?>">Remove All Prices</a> <button type="submit" class="btn btn-success btn-lg btn-labeled fa fa-floppy-o pull-left">Set New Sale Price</button></td><td></td></tr>
                                </table>
                                <?php echo form_close(); ?>


                                <table class="table table-responsive table-bordered table-hover">

                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Vendor ID</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th>Action</th>


                                    </tr>

                                    <?php
                                    $i = 1;
                                    foreach($list as $item): ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item['sp_id']; ?></td>
                                            <td><?php echo $item['sp_vendor'] ?  $item['sp_vendor'] : "All"; ?></td>
                                            <td><?php echo $item['sp_start_date']; ?></td>
                                            <td><?php echo $item['sp_end_date']; ?></td>
                                            <td><?php echo $item['sp_discount'] . " " . $units[$item['discount_unit']]; ?></td>

                                            <td><?php echo $item['status'] == 1 ? "Active": "Inactive"; ?></td>

                                            <td class="edit-current"> <a onclick="return confirm('Are you sure?');" href="<?php echo site_url("admin/sales_price_delete/{$item['sp_id']}"); ?>"><i style="color: red;" class="fa fa-remove"></i></a></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    endforeach;?>

                                </table>
                                <div><?php echo $links; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<script>
    $(function() {
        $('select#select-cats').multipleSelect();
        $( "#start-date" ).datepicker();
        $( "#end-date" ).datepicker();

    });
</script>