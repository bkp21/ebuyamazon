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
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('vendor_monthly_fees');?></h1>
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
                                    <?php echo translate('Charge Setting');?>
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
                                <?php echo form_open("admin/update_vendor_fee/{$info->fee_id}"); ?>
                                <table class="table table-responsive table-bordered table-hover">
                                    <tr>
                                        <td>
                                            Select Vendor
                                        </td>

                                        <td>
                                            <select name="vendor" class="selectpicker show-tick">
                                                <?php foreach($vendor_list as $item): ?>
                                                    <?php if($item['vendor_id'] == $info->vendor): ?>
                                                        <option value="<?php echo $item['vendor_id']; ?>" selected="selected"><?php echo $item['display_name']; ?></option>
                                                <?php else:?>
                                                        <option value="<?php echo $item['vendor_id']; ?>"><?php echo $item['display_name']; ?></option>
                                                <?php endif;?>
                                                <?php endforeach; ?>

                                            </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ID
                                        </td>

                                        <td>
                                            <?php echo $info->fee_id; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Fixed fee per item
                                        </td>

                                        <td>
                                            <input type="text" name="fixed_fee" value="<?php echo set_value("fixed_fee",$info->fix_fee_per_item); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Percentage fee per item
                                        </td>

                                        <td>
                                            <input type="text" name="percentage_fee" value="<?php echo set_value("percentage_fee",$info->percentage_fee_per_item); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           Max Item Allowed
                                        </td>

                                        <td>
                                            <input type="text" name="max_item" value="<?php echo set_value("max_item",$info->max_item_upload); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Start Date
                                        </td>

                                        <td>
                                            <?php
                                            $date = strtotime($info->start_date);
                                            $month = date('m',$date);
                                            $year = date('Y',$date);

                                            ?>
                                            <select name="start_month">

                                                <?php foreach(range(1,12) as $m): ?>
                                                    <?php if($m == $month): ?>
                                                    <option value="<?php echo $m; ?>" selected="selected"><?php echo $m; ?></option>
                                                <?php else: ?>
                                                        <option value="<?php echo $m; ?>"><?php echo $m; ?></option>
                                                <?php endif; ?>

                                                <?php endforeach; ?>

                                            </select>

                                            <select name="start_year">

                                                <?php foreach(range(2011,2021) as $y): ?>
                                                    <?php if($y== $year): ?>
                                                        <option value="<?php echo $y; ?>" selected="selected"><?php echo $y; ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
                                                    <?php endif; ?>

                                                <?php endforeach; ?>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button class="btn btn-success" type="submit">Save Setting</button></td>
                                    </tr>

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
