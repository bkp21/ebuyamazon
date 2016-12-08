<div class="panel-body" id="demo_s">
    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,3" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><?php echo translate('no');?></th>
                <th><?php echo translate('product_title');?></th>
                <th><?php echo translate('review_title');?></th>
                <th><?php echo translate('posted_by');?></th>
                <th><?php echo translate('rating');?></th>
                <th><?php echo translate('posted_date');?></th>
                <th><?php echo translate('approved');?></th>
                <th class="text-right"><?php echo translate('options');?></th>
            </tr>
        </thead>				
        <tbody >
        <?php
            $i=0;
            foreach($all_reviews as $row){
                $i++;
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
                    <td><?php echo $row['review_title']; ?></td>
                    <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                    <td><?php echo $row['rating']; ?></td>
                    <td><?php echo date('d M,Y',$row['posted_date']); ?></td>
                    <td>
                        <div class="label label-<?php if($row['status'] == 'approved'){ ?>purple<?php } else { ?>danger<?php } ?>">
                                <?php echo $row['status']; ?>
                        </div>
                    </td>
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-check" data-toggle="tooltip" 
                            onclick="ajax_modal('approval','<?php echo translate('product_review_status'); ?>','<?php echo translate('successfully_change!'); ?>','product_review_status','<?php echo $row['product_review_id']; ?>')" data-original-title="View" data-container="body">
                                <?php echo translate('approval');?>
                        </a>
                        <a onclick="delete_confirm('<?php echo $row['product_review_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                        	class="btn btn-danger btn-xs btn-labeled fa fa-trash" 
                            	data-toggle="tooltip"data-original-title="Delete" data-container="body">
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
<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('product_reviews');?></h1>
    <table id="export-table" data-name='product_reviews' data-orientation='p' style="display:none;">
            <thead>
                <tr>
                    <th><?php echo translate('no');?></th>
                    <th><?php echo translate('product_title');?></th>
                    <th><?php echo translate('review_title');?></th>
                    <th><?php echo translate('posted_by');?></th>
                    <th><?php echo translate('rating');?></th>
                    <th><?php echo translate('posted_date');?></th>
                    <th><?php echo translate('approved');?></th>
                </tr>
            </thead>
                
            <tbody >
            <?php
                $i = 0;
                foreach($all_reviews as $row){
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('product',$row['product_id'],'title'); ?></td>
                <td><?php echo $row['review_title']; ?></td>
                <td><?php echo $this->crud_model->get_type_name_by_id('user',$row['user_id'],'username'); ?></td>
                <td><?php echo $row['rating']; ?></td>
                <td><?php echo date('d M,Y',$row['posted_date']); ?></td>
                <td><?php echo $row['status']; ?></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</div>
           