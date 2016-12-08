<div class="panel-body" id="demo_s">
            <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('product_title');?></th>
                <th><?php echo translate('user');?></th>
                <th><?php echo translate('comments');?></th>
                <th><?php echo translate('ip');?></th>
                <th><?php echo translate('date_added');?></th>
                <th><?php echo translate('comment_status');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i = 0;
            foreach($all_comments as $row){
                $i++;
        ?>                
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
            <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
            <td><?php echo $row['comment'];?></td>
            <td><?php echo $row['ip'];?></td>
            <td><?php echo date('d M,Y',$row['date_added']);?></td>
            <td>
            	<div class="label label-<?php if($row['comment_status'] == 'approved'){ ?>purple<?php } else { ?>danger<?php } ?>">
                	<?php echo $row['comment_status']; ?>
                </div>
            </td>
            
            <td class="text-right">
                <a class="btn btn-success btn-xs btn-labeled fa fa-check" data-toggle="tooltip" 
                    onclick="ajax_modal('approval','<?php echo translate('product_comment_status'); ?>','<?php echo translate('successfully_change!'); ?>','product_comment_status','<?php echo $row['product_comment_id']; ?>')" data-original-title="View" data-container="body">
                        <?php echo translate('approval');?>
                </a>
                <a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip" 
                    onclick="ajax_modal('view','<?php echo translate('view_comment'); ?>','<?php echo translate('successfully_viewed!'); ?>','product_comments_view','<?php echo $row['product_comment_id']; ?>')" data-original-title="View" data-container="body">
                        <?php echo translate('view_comment');?>
                </a>
                <a onclick="delete_confirm('<?php echo $row['product_comment_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
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
    <div id="vendr"></div>
    <h1 style="display:none;"><?php echo translate('product_comment');?></h1>
    <table id="export-table" data-name='product_comment' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('product_title');?></th>
                    <th><?php echo translate('user');?></th>
                    <th><?php echo translate('comments');?></th>
                    <th><?php echo translate('ip');?></th>
                    <th><?php echo translate('date_added');?></th>
                    <th><?php echo translate('comment_status');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_comments as $row){
                    $i++;
            ?>
                <td><?php echo $i; ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                <td><?php echo $row['comment'];?></td>
                <td><?php echo $row['ip'];?></td>
                <td><?php echo date('d M,Y',$row['date_added']);?></td>
            <?php
                }
            ?>
            </tbody>
    </table>
</div> 
   