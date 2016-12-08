<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('product title');?></th>
                <th><?php echo translate('order id');?></th>
                <th><?php echo translate('user name');?></th>
                <th><?php echo translate('order date');?></th>
                <th><?php echo translate('pricing type');?></th>
                <th><?php echo translate('payment request sent');?></th>
                <th><?php echo translate('status / expire date');?></th>
            </tr>
        </thead>				
        <tbody>
        <?php
            $i=0;
            foreach($all_subscribe_product as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('sale',$row['order_id'],'sale_code'); ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
            <td><?php echo date('d M, Y',$this->crud_model->get_type_name_by_id('sale',$row['order_id'],'sale_datetime')); ?></td>
            <td><?php echo $row['pricing type']; ?></td>
            <td> - </td>
            <td><?php echo $row['payment_status']; ?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
           
<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('subscribed_products');?></h1>
    <table id="export-table" data-name='subscribed_products' data-orientation='p' style="display:none;">
            <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('product title');?></th>
                <th><?php echo translate('order id');?></th>
                <th><?php echo translate('user name');?></th>
                <th><?php echo translate('order date');?></th>
                <th><?php echo translate('pricing type');?></th>
                <th><?php echo translate('payment request sent');?></th>
                <th><?php echo translate('status / expire date');?></th>
            </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_subscribe_product as $row){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('sale',$row['order_id'],'sale_code'); ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('sale',$row['order_id'],'sale_datetime'); ?></td>
                <td><?php echo $row['pricing type']; ?></td>
                <td> - </td>
                <td><?php echo $row['payment_status']; ?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           