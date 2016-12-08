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
                                    <?php echo translate('vendor_monthly_fees');?>
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
                                <div class="date-nav" style="font-size: 14pt; text-align: center; margin-bottom: 20px;">
                                    <?php
                                    $date = explode("-",$current_month);
                                   $next_year = $date[1]== 12 ? $date[0] + 1 : $date[0];
                                    $prev_year = $date[1]== 1 ? $date[0] - 1 : $date[0];

                                    $next_month = $date[1]== 12 ? 1 : $date[1] + 1;
                                    $prev_month = $date[1]== 1 ? 12 : $date[1] - 1;
                                    $from_date = "{$date[1]}/01/{$date[0]}";
                                    $till_day = check_last_date($date[1], $date[0]);
                                    //echo "<script>alert(\"$till_day\");</script>";
                                    $to_date = "{$date[1]}//{$date[0]}";

                                    function check_last_date($month, $year){
                                        $month = (int) $month;
                                        //$year = (int) $month;
                                       // var_dump($month, $year); exit();
                                        if($month == 2){
                                           if(is_leap_year($year)){
                                               return 29;
                                           }else{
                                               return 28;
                                           }
                                        }else{
                                        //var_dump(checkdate($month, $year, 31)); exit();
                                            if(checkdate( $month, 31, ( int ) $year )){
                                                return 31;
                                            }else{
                                                return 30;
                                            }

                                        }

                                    }

                                    function is_leap_year( $year = NULL )
                                    {
                                        is_numeric( $year ) || $year = date( 'Y' );
                                        return checkdate( 2, 29, ( int ) $year );
                                    }


                                    //echo "Year: $prev_year Month: $prev_month<br />";
                                  //  echo "Year: $next_year Month: $next_month<br />";
                                    ?>

                                  <a href="<?php echo site_url("admin/vendor_monthly_fees/{$prev_year}-{$prev_month}"); ?>"><i class="fa fa-angle-double-left"></i></a>  <?php echo $date[1]; ?>/01/<?php echo  $date[0]; ?> - <?php echo $date[1]; ?>/<?php echo $till_day;  ?>/<?php echo  $date[0]; ?>   <a href="<?php echo site_url("admin/vendor_monthly_fees/{$next_year}-{$next_month}"); ?>"><i class="fa fa-angle-double-right"></i>

                                </div>

                                <table class="table table-responsive table-bordered table-hover">

                                <tr>
                                    <th>#</th>
                                    <th>Vendor</th>
                                    <th>Fixed fee per item</th>
                                    <th>Percentage fee per item</th>
                                    <th>Max Item</th>
                                    <th>Start Date</th>
                                    <th>Edit Current Fee</th>
                                    <th>Add Fee</th>

                                </tr>

                                    <?php
                                    $i = 1;
                                    foreach($all_fees as $item): ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $this->crud_model->getVendorName($item['vendor']); ?></td>
                                        <td><?php echo $item['fix_fee_per_item']; ?></td>
                                        <td><?php echo $item['percentage_fee_per_item']; ?></td>
                                        <td><?php echo $item['max_item_upload']; ?></td>
                                        <td><?php echo $item['start_date']; ?></td>
                                        <td class="edit-current"><a href="<?php echo site_url("admin/update_vendor_fee/{$item['fee_id']}") ?>"><i class="fa fa-edit"></i></a> <a onclick="return confirm('Are you sure?');" href="<?php echo site_url("admin/delete_vendor_fee/{$current_month}/{$item['fee_id']}"); ?>"><i style="color: red;" class="fa fa-remove"></i></a></td>
                                        <td class="edit-current"><a href="<?php echo site_url("admin/update_vendor_fee/{$item['fee_id']}") ?>"><i class="fa fa-pencil"></i></a></td>


                                    </tr>
                                    <?php
                                    $i++;
                                    endforeach;?>

                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
