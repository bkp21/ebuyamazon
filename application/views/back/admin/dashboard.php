<script type="text/javascript" src="<?= base_url('template/back/js/highcharts.js'); ?>"></script>
<div id="content-container">	
<?php include('dash-header.php');?>
   <div class="pull-right">
       <span class="header-text-styling">
         <b><?php echo translate('welcome_to_').$system_name; ?></b>
       </span> 
    </div>
    <div class="panel-body"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading acc-head-bg-color">
                        <div class="pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-calendar"></i> <i class="caret"></i></a>
                            <ul id="transaction" class="dropdown-menu dropdown-menu-right">
                                <li class=""><a href="day">Today</a></li>
                                <li class=""><a href="week">Week</a></li>
                                <li class=""><a href="month">Month</a></li>
                                <li class="active"><a href="year">Year</a></li>
                            </ul>
                        </div>
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Sales Analytics</h3>
                    </div>
                    <div class="panel-body">
                        <div id="transaction-chart" style="width: 100%; height: 260px;"><div class="highcharts-container" ></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="well col-sm-12" >
            <div class="col-sm-4">
                <div class="sales">
                    <div class="row-fluid">
                        <div class="col-sm-8  color-white"><?php echo translate('sales_today:'); ?></div>
                        <div class="col-sm-4  color-white margin-left2">€ <?php echo $this->crud_model->sales_today(); ?>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-sm-8 color-white"><?php echo translate('sales_this_month:'); ?></div>
                        <div class="col-sm-4 color-white margin-left2">€ <?php echo $this->crud_model->sales_month(); ?> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="orders">
                    <div class="row-fluid">
                        <div class="col-sm-9  color-white"><?php echo translate('order_in_progress:'); ?></div>
                        <div class="col-sm-2  color-white margin-left2"> <?php echo $this->db->like('payment_status', 'due')->get('sale')->num_rows(); ?> </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-sm-9 color-white"><?php echo translate('ready_to_ship:'); ?></div>
                        <div class="col-sm-2 color-white margin-left2"> <?php
                            echo $this->db->like('payment_status', 'paid')
                                    ->like('delivery_status', 'pending')
                                    ->get('sale')->num_rows();
                            ?> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="users">
                    <div class="row-fluid">
                        <div class="col-sm-9  color-white"><?php echo translate('registered_admins:'); ?></div>
                        <div class="col-sm-2  color-white margin-left2"><?php echo $this->db->get('admin')->num_rows(); ?></div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-sm-9 color-white"><?php echo translate('registered_users:'); ?></div>
                        <div class="col-sm-2 color-white margin-left2"><?php echo $this->db->get('user')->num_rows(); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="well col-sm-12">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margn">
                <a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/product">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-product">
                        <span class="vertical-align-middle">Manage Products</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product-arrow">
                        <div><i class="fa fa-arrow-right"></i></div>
                    </div>     
                </a>
                <a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/user_customer_list">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-user">
                        <span class="vertical-align-middle">Manage Users</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 user-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
                <a class="well-bottm" href="#">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-report">
                        <span class="vertical-align-middle">Reports</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 report-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margn">
                <a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/category">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-product">
                        <span class="vertical-align-middle">Manage Category</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product-arrow">
                        <div><i class="fa fa-arrow-right"></i></div>
                    </div> 
                </a>
                <a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/brand">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-user">
                        <span class="vertical-align-middle">Manage Manufacturers</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 user-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
                <a class="well-bottm" href="#">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-report">
                        <span class="vertical-align-middle">Manage Shipping</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 report-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margn">
                <a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/sales">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-product">
                        <span class="vertical-align-middle">Manage Orders</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 product-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
                <a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/bulk_product_upload">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-user">
                        <span class="vertical-align-middle">Bulk Product Import</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 user-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
                <a class="well-bottm" href="#">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-report">
                        <span class="vertical-align-middle">Manage Taxes</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 report-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
            </div>
        </div>
        <div class="well col-sm-12" >
            <table class="pull-right">
                <tbody>
                    <td class="display-inline-block">
                        <div class="social-icon-rotate">
                            <a href="<?php echo base_url(); ?>/index.php/admin">
                                <img class="margin-top1" src="<?php echo base_url(); ?>/uploads/others/rss.png">
                            </a>
                        </div>
                    </td>
                    <td class="display-inline-block">
                        <div class="social-icon-rotate">
                            <a href="<?php echo base_url(); ?>/index.php/admin">
                                <img class="margin-top1" src="<?php echo base_url(); ?>/uploads/others/facebook.png">
                            </a>
                        </div>
                    </td>
                     <td class="display-inline-block">
                        <div class="social-icon-rotate">
                            <a href="<?php echo base_url(); ?>/index.php/admin">
                                <img class="margin-top1" src="<?php echo base_url(); ?>/uploads/others/Google_Plus_icon.svg.png">
                            </a>
                        </div>
                    </td>
                    <td class="display-inline-block">
                        <div class="social-icon-rotate">
                            <a href="<?php echo base_url(); ?>/index.php/admin">
                                <img class="margin-top1" src="<?php echo base_url(); ?>/uploads/others/twitter-icon.png">
                            </a>
                        </div>
                    </td>
                </tbody>
            </table>
        </div>
    </div>    
</div>
<?php
$ago = time() - 86400;
$result = $this->db->get_where('stock', array('datetime >= ' => $ago, 'datetime <= ' => time()))->result_array();
$result2 = $this->db->get_where('sale', array('sale_datetime >= ' => $ago, 'sale_datetime <= ' => time()))->result_array();
$stock = 0;
foreach ($result as $row) {
    if ($row['type'] == 'add') {
        $stock += $row['total'];
    }
}
$destroy = 0;
foreach ($result as $row) {
    if ($row['type'] == 'destroy') {
        if ($row['reason_note'] !== 'sale') {
            $destroy += $row['total'];
        }
    }
}
$sale = 0;
foreach ($result2 as $row) {
    $sale += $row['grand_total'];
}
?>
<script type="text/javascript">
    var deliveryStatusUrl = '<?php echo base_url('admin/sales_statistics/delivery_status') ?>';
    var orderVsSalesUrl = '<?php echo base_url('admin/sales_statistics/order_vs_sales') ?>';
    var salesAnalyticsUrl = '<?php echo base_url('admin/sales_statistics/sales_analytics') ?>';


    var rotate = document.getElementById('rotate');

    var rotate = document.getElementById('rotate');

    rotate.addEventListener('mouseover', function () {

        this.className = 'over';

    }, false);

    rotate.addEventListener('mouseout', function () {

        var rotate = this;

        rotate.className = 'out';
        window.setTimeout(function () {
            rotate.className = ''
        }, 1000);

    }, false);

</script>

<script type="text/javascript" src="<?php echo base_url('template/back/js/sales_statistics.js'); ?>"></script>

