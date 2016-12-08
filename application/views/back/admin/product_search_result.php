<?php header("Cache-Control: max-age=300, must-revalidate"); ?>
<div id="content-container">
        <?php include('dash-header.php');?>
	<div>
		<h1 class="page-header text-overflow"><?php echo translate('manage_products');?></h1>
	</div>
        <div class="smsalert smsalert-success">
            <a href="<?php echo site_url("admin/product_insert") ?>"><?php echo translate('click_to_add_a_new_product '); ?></a> <br><br>
            <div>
                Please enter in your search criteria.<br>
                You need to enter at least one search criteria for search to be effective 
            </div>
        </div>
<div class="tab-base">
    <div class="panel">
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane fade active in"  id="" >   
                <?php echo form_open("admin/search_product") ?>

                   <div class="panel">
                       <div class="panel-heading">
                           <h4><b><?php echo translate('search_products'); ?></b></h4>
                        </div>
                       <div class="panel-body">
                           <div class="row">
                               <div class="col-md-4">  
                                   <div class="form-group">
                                       <label for="product-id">Product Id</label>
                                       <input type="text" name="product_id" class="form-control" id="product-id">
                                   </div>
                               </div>
                               <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Product Name</label>
                                       <input type="text" name="product_name" class="form-control" id="product-name">
                                   </div>
                               </div>
                               <div class="col-md-4">  
                                   <div class="form-group">
                                       <label for="product-id">Category</label>
                                         <?php echo $this->crud_model->select_html('category','category','category_name','add','demo-chosen-select','','',''); ?>
                                   </div>
                               </div>
                           </div>
						  
                           <div class="row">
						    
                               <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Status</label>
                                       <select class="demo-chosen-select" name="is_approved">
                                           <option value="status">Any</option>
                                           <option value="is_visible">Available</option>
                                           <option value="unavailable">Unavailable</option>
										   <option value="inventory_rule">Out Of Stock</option>
										   <option value="stock_warning">Stock Warning</option>
										   <option value="approved">Approval-Approved</option>
										   <option value="pending">Approval-Pending</option>
										   <option value="declined">Approval-Declined</option>
																																		</select>
                                   </div>
                               </div>
                               <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Sort by</label>
                                       <select class="demo-chosen-select" name="sort_by">
                                           <option value="title">Product Title</option>
                                           <option value="priority">Priority</option>
                                           <option value="vendor_id">Vendor</option>
                                       </select>
                                   </div>
                               </div>

                               <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Select Vendor</label>
                                         <?php echo $this->crud_model->select_html('vendor','vendor','name','add','demo-chosen-select','','',''); ?>
                                   </div>
                               </div>
							   </div>
							<div class="row">
                               <div class="col-md-4"> 
                                   <div class="form-group">
                                       <label for="product-name">Product Tags</label>
                                         <?php echo $this->crud_model->select_html('manage_tags','tag_name','tag_name','add','demo-chosen-select','','',''); ?>
                                   </div>
                               </div>
							   <div class="col-md-4">
							   <div class="form-group">
                                       <label for="template-product">Template Product</label>
                                       <select class="demo-chosen-select" name="is_template">
                                           <option value="">Any</option>
                                           <option value="1">Template Products</option>
                                           <option value="0">Non Template Products</option>
                                       </select>
                                   </div>
								   </div>
                           </div>
						   

                           <div class="form-group">
                               <button class="btn btn-success" type="submit" name="product-search">Search</button>
                           </div>
                       </div>
                   </div>
                </div>   




    <!-- Contact Info  end--->

            <?php echo form_close(); ?>


                        <?php // if(!empty($all_products)) {  ?>
                        <div class="tab-pane fade active in"  id="" >
                            <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('product_search_result'); ?>
                                </h3>
                            </div>
                               <div class="panel-body" id="demo_s">
                                    <table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" >
                                        <thead>
                                            <tr>
											
                                                <th><?php echo translate('product_name'); ?></th>
                                                <th><?php echo translate('vendor_name'); ?></th>
                                                <th><?php echo translate('approved'); ?></th>
                                                <th><?php echo translate('available'); ?></th>
                                                <th><?php echo translate('priority'); ?></th>
                                                <th class="text-right"><?php echo translate('action'); ?></th>
                                            </tr>
                                        </thead>				
                                        <tbody >
                                            <?php
                                            $i = 0;
                                            foreach ($all_products as $row) {
                                                $i++;
                                                ?>                
                                                <tr>
                                                    <td>
                                                        <b><?php echo $row['title']; ?></b>
                                                    </td>
                                                    <td>
                                                        <?php echo $this->crud_model->get_type_name_by_id('vendor',$row['vendor_id'],'name' );?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['is_approved']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['is_visible']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['priority']; ?>
                                                    </td>
                                                    <td class="text-right" id="tooltip-ex">  
                                                        <a  href="<?php echo site_url("admin/update_product/{$row['product_id']}"); ?>" 
                                                            data-toggle="tooltip" data-original-title="Edit Product" class="red-tooltip ">
                                                            <i class="fa fa-pencil note-icon-styling"></i>
                                                        </a>
                                                        <a onclick="delete_confirm('<?php echo $row['product_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                                                           class="fa fa-trash note-icon-styling" data-toggle="tooltip" style="cursor: pointer"
                                                                    data-original-title="Delete Product" data-container="body">  
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                     </div>
                            </div>
                    </div>
                </div>         
                        <?php //} ?>

            </div>   
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>template/back/js/demo/tables.js"></script>
<script>
$(document).ready(function() {
        $('.demo-cs-multiselect').chosen();
        $('.demo-chosen-select').chosen({
                width: '100%'
        });
}); 
$(document).ready(function(){
    $("#tooltip-ex a").tooltip({
        placement : 'top'
    });
});
</script>
<script>
	var base_url = '<?php echo base_url(); ?>';
	var user_type = 'admin';
	var module = 'search_product';
	var dlt_cont_func = 'delete';
</script>


