<style>
    .fa.fa-calendar {
        color: white;
        margin-top: 50%;
    }
    .col-lg-2 {
    width: 16.6667%;
}

</style>

<script type="text/javascript" src="<?= base_url('template/back/js/highcharts.js'); ?>"></script>

<div id="content-container">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-2">
                <div class="tile">
                    <div class="tile-heading"><?php echo translate('products'); ?></div>
                    <div class="tile-body">
                        <i class="fa fa-th-list"></i>
                    </div>
                    <div class="tile-footer">
                        <a href="<?php echo base_url(); ?>index.php/admin/product">
                            <h2><?php echo $this->db->get('product')->num_rows(); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="tile">
                    <div class="tile-heading"><?php echo translate('category'); ?></div>
                    <div class="tile-body">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="tile-footer">
                        <a href="<?php echo base_url(); ?>index.php/admin/category">
                            <h2><?php echo $this->db->get('category')->num_rows(); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="tile">
                    <div class="tile-heading"><?php echo translate('brands'); ?></div>
                    <div class="tile-body">
                        <i class="fa fa-weibo"></i>
                    </div>
                    <div class="tile-footer">
                        <a href="<?php echo base_url(); ?>index.php/admin/brand">
                            <h2><?php echo $this->db->get('brand')->num_rows(); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="tile">
                    <div class="tile-heading"><?php echo translate('vendors'); ?></div>
                    <div class="tile-body">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <div class="tile-footer">
                        <a href="<?php echo base_url(); ?>index.php/admin/vendor">
                            <h2><?php echo $this->db->get('vendor')->num_rows(); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="tile">
                    <div class="tile-heading"><?php echo translate('customers'); ?></div>
                    <div class="tile-body">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="tile-footer">
                        <a href="<?php echo base_url(); ?>index.php/admin/user_customer_list">
                            <h2><?php echo $this->db->get('user')->num_rows(); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="tile">
                    <div class="tile-heading"><?php echo translate('total_orders'); ?></div>
                    <div class="tile-body">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="tile-footer">
                        <a href="<?php echo base_url(); ?>index.php/admin/sales">
                            <h2><?php echo $this->db->get('sale')->num_rows(); ?></h2>
                        </a>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sx-12 col-sm-12">
                <div class="panel panel-bordered-grey panel-black">
                    <div class="panel-heading">
                        <div class="pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-calendar"></i> <i class="caret"></i></a>
                            <ul id="salesbyorder" class="dropdown-menu dropdown-menu-right">
                                <li class=""><a href="day">Today</a></li>
                                <li class=""><a href="week">Week</a></li>
                                <li class=""><a href="month">Month</a></li>
                                <li class="active"><a href="year">Year</a></li>
                            </ul>
                        </div>
                        <h3 class="panel-title"><i class="fa fa-yelp"></i> Order By Status</h3>
                    </div>
                    <div class="panel-body">
                        <div id="salesbyorder-chart" style="width: 100%; height: 260px;"><div class="highcharts-container"></div></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sx-12 col-sm-12">
                <div class="panel panel-bordered-grey panel-black">
                    <div class="panel-heading">
                        <div class="pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-calendar"></i> <i class="caret"></i></a>
                            <ul id="sales" class="dropdown-menu dropdown-menu-right">
                                <li class=""><a href="day">Today</a></li>
                                <li class=""><a href="week">Week</a></li>
                                <li class=""><a href="month">Month</a></li>
                                <li class="active"><a href="year">Year</a></li>
                            </ul>
                        </div>
                        <h3 class="panel-title"><i class="fa fa-align-right"></i> Orders Vs Sales</h3>
                    </div>
                    <div class="panel-body">
                        <div id="sales-chart" style="width: 100%; height: 260px;"><div class="highcharts-container"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-bordered-grey panel-black">
                    <div class="panel-heading">
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
    </div>
</div>
</div>
<script type="text/javascript">
    var deliveryStatusUrl = '<?php echo base_url('admin/sales_statistics/delivery_status') ?>';
    var orderVsSalesUrl = '<?php echo base_url('admin/sales_statistics/order_vs_sales') ?>';
    var salesAnalyticsUrl = '<?php echo base_url('admin/sales_statistics/sales_analytics') ?>';
</script>

<script type="text/javascript" src="<?php echo base_url('template/back/js/sales_statistics.js'); ?>"></script>
