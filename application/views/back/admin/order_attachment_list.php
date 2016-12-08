<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('order id');?></th>
                <th><?php echo translate('product id');?></th>
                <th><?php echo translate('attribute name ');?></th>
                <th><?php echo translate('filename');?></th>
                <th><?php echo translate('delivery status');?></th>
                <th><?php echo translate('payment status');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody>
        <?php
            $i=0;
            foreach($all_attachment as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('sale',$row['order_id'],'sale_code'); ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
            <td> - </td>
            <td><a href="<?php echo $row['file_name']; ?>" download>
			<?php echo $row['file_name']; ?></a></td>
            <td>
                <?php 
                $delivery_status = json_decode($this->crud_model->get_type_name_by_id('sale',$row['order_id'],'delivery_status'),true);
                foreach ($delivery_status as $dev) {
                ?>
                <div class="label label-<?php if($dev['status'] == 'delivered'){ ?>purple<?php } else { ?>danger<?php } ?>">
                <?php
                        if(isset($dev['vendor'])){
                            echo $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'display_name').' ('.translate('vendor').') : '.$dev['status'].'<br>';
                        } else if(isset($dev['admin'])) {
                            echo translate('admin').' : '.$dev['status'];
                        }
                ?>
                </div>
                <?php
                    }
                ?>
            </td>
            <td>
                <?php 
                $payment_status = json_decode($this->crud_model->get_type_name_by_id('sale',$row['order_id'],'payment_status'),true);
                foreach ($payment_status as $dev) {
                ?>
                <div class="label label-<?php if($dev['status'] == 'delivered'){ ?>purple<?php } else { ?>danger<?php } ?>">
                <?php
                        if(isset($dev['vendor'])){
                            echo $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'display_name').' ('.translate('vendor').') : '.$dev['status'].'<br>';
                        } else if(isset($dev['admin'])) {
                            echo translate('admin').' : '.$dev['status'];
                        }
                ?>
                </div>
                <?php
                    }
                ?>
            </td>
            <td class="text-right">
                <a onclick="delete_confirm('<?php echo $row['order_attach_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                        class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip"
                            data-original-title="Delete" data-container="body">
                                <?php echo translate('delete');?>
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
           
<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('order_attachment');?></h1>
    <table id="export-table" data-name='order_attachment' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('order id');?></th>
                    <th><?php echo translate('product id');?></th>
                    <th><?php echo translate('attribute name ');?></th>
                    <th><?php echo translate('filename');?></th>
                    <th><?php echo translate('delivery status');?></th>
                    <th><?php echo translate('payment status');?></th>
                </tr>
            </thead>
                
        <tbody>
        <?php
            $i=0;
            foreach($all_attachment as $row){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('sale',$row['order_id'],'sale_code'); ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
            <td> - </td>
            <td><?php echo $row['file_name']; ?></td>
            <td>
                <?php 
                $delivery_status = json_decode($this->crud_model->get_type_name_by_id('sale',$row['order_id'],'delivery_status'),true);
                foreach ($delivery_status as $dev) {
                ?>
                <?php
                        if(isset($dev['vendor'])){
                            echo $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'display_name').' ('.translate('vendor').') : '.$dev['status'].'<br>';
                        } else if(isset($dev['admin'])) {
                            echo translate('admin').' : '.$dev['status'];
                        }
                ?>
                <?php
                    }
                ?>
            </td>
            <td>
                <?php 
                $payment_status = json_decode($this->crud_model->get_type_name_by_id('sale',$row['order_id'],'payment_status'),true);
                foreach ($payment_status as $dev) {
                ?>
                <?php
                        if(isset($dev['vendor'])){
                            echo $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'display_name').' ('.translate('vendor').') : '.$dev['status'].'<br>';
                        } else if(isset($dev['admin'])) {
                            echo translate('admin').' : '.$dev['status'];
                        }
                ?>
                <?php
                    }
                ?>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
           