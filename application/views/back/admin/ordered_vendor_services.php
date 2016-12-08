
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('ordered_vendor_services');?></h1>
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
                                    <?php echo translate('ordered_vendor_services');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>



                                <table class="table table-responsive table-bordered table-hover">

                              <tr><th>#</th><th>Order ID</th><th>Vendor</th><th>From</th><th>To</th><th>Service</th><th>Item ID</th><th>Amount</th><th>Status</th></tr>
                                <?php
                                $i = 1;
                                foreach($ordered_services as $item): ?>
                                    <tr><td><?php echo $i; ?></td><td><?php echo $item['order_id'] ?></td><td><?php echo $item['vendor'] ?></td><td><?php echo $item['from_date'] ?></td><td><?php echo $item['to_date'] ?></td><td><?php echo $item['service'] ?></td><td><?php echo $item['item_id'] ?></td><td><?php echo $item['amount'] ?></td><td><?php echo $item['status']==1? "Processing":"Processed" ?></td></tr>
                                    <?php
                                $i++;
                                endforeach; ?>

                                </table>

                                <div> <?php echo $links; ?></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
