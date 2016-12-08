<div id="content-container">
            <?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('Bulk Uploading Of Products (Step 1 of 3) ');?></h1>
    </div>
    <div class="smsalert smsalert-success">
        <div>
            Upload your product data into your shopping cart from a .CSV or .XLS file. Most database programs allow you to import or save data in these format. Each line must contain data specific to one product and CSV data must also have a delimiter (comma or semicolon). Once uploaded you need to assign the CSV/XLS rows to one of the cart's field types (Product ID, Product Name, Price, etc.) The cart's database uses the
            <b>Product ID</b> as its data key, so products with a duplicate Product ID will be overwritten with the new data. This is a 3 step process and the data will not be stored until the final step is complete.         
            <br>
            <b>Please note: Products with undefined weight and shipping price will be automatically marked as Free Shipping</b><br><br>
            <b>Please fill this form very carefully!</b>
        </div>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">

                                <?php if($this->session->flashdata('success')): ?>
                                <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                </div>
                                <?php endif?>
                    
                                <?php if ($this->session->flashdata('fail')): ?>
                                     <div class="alert alert-danger">
                                         <?php echo $this->session->flashdata('fail'); ?>
                                     </div>
                                 <?php endif ?>
                                <?php if(validation_errors()): ?>
                                <div class="alert alert-danger">
                                        <?php  echo validation_errors(); ?>
                                </div>
                                <?php endif?>
                    
                                <?php echo form_open_multipart("", array("id"=>  "promo_form")); ?>
                                  <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >     
                        <div  class="form-group btm_border title list-title">
                            <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                            <b><?php echo translate('genreal_settings'); ?></b>
                        </div>
                    <div class="panel-body">
                            <?php echo form_open_multipart("", array("id" => "promo_form")); ?>      
                                <table class="table table-responsive table-bordered table-hover">
                                    <tr>
                                       <td><?php echo translate('select_category (categories_with_undefined_root_category_will_be_moved_there) :'); ?></td>
                                         <td width="50%">
                                            <select name="cat" class="demo-chosen-select form-control" id="select_cat" onchange="cat_type(this.value);">
                                                <option value=""><?php echo translate('category_root'); ?></option> 
                                                <?php foreach ($cat_list as $item) { ?>
                                                    <option value="<?php echo $item['category_id']; ?>">
                                                        <?php echo  $item['category_name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </td>

                                    </tr>
                                     <tr>
                                        <td><?php echo translate('select_vendor: ')?> </td>
                                        <td width="50%">
                                            <select name="vendor" class="demo-chosen-select form-control">
                                                <option value="0"><?php echo translate('all'); ?></option>
                                                <?php foreach($vendor_list as $item): ?>
                                                    <option value="<?php echo $item['vendor_id'] ?>"><?php echo $item['display_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>

                                </table>
                             <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('import_settings'); ?></b>
                            </div>
                        <table class="table table-responsive table-bordered table-hover">
                                    <tr>
                                        <td><?php echo translate('data_update_rule :'); ?></td>
                                        <td>
                                            <select name="update_rule" class="demo-chosen-select form-control">
                                                <option value="1"><?php echo translate('overwrite_existing_data - add_new'); ?></option>
                                                <option value="2"><?php echo translate('keep_existing_data - add_new'); ?></option>
                                                <option value="3"><?php echo translate('clear_existing - add_new'); ?></option>
                                                <option value="4"><?php echo translate('update_existing_product_only'); ?></option>
                                            </select>
                                             <span class="small">If the bulk importer encounters a duplicate Category Key, should it</span><br>
                                             <span class="small">overwrite the existing data with the bulk loaded data, keep it,</span><br>
                                             <span class="small">or clear all categories from selected category first (if no products are available for that category)?</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo translate('uploaded_products_availability : ')?></td>
                                         <td width="50%">
                                            <select name="is_visible" class="demo-chosen-select form-control required">
                                                <option value="yes"><?php echo translate('product_are_available_for_sale'); ?></option>
                                                <option value="no"><?php echo translate('product_are_NOT_available_for_sale'); ?></option>
                                            </select>
                                             <span class="small">Depending on your choice, the bulk importer will set a Product Availability Option. You may also set this option in the uploaded file.</span>
                                        </td>
                                    </tr>

                                </table>
                            <div  class="form-group btm_border title list-title">
                                <i class="glyphicons-icon glyphicon-custom-sidebar notes"></i>
                                <b><?php echo translate('file_with_products'); ?></b>
                            </div>
                            <table class="table table-responsive table-bordered table-hover">                             
                                <tr>
                                    <td><?php echo translate('choose_CSV/XLS/XLSX file_from_local_drive :'); ?> </td>
                                    <td width="50%">
                                        <span class="pull-left btn btn-default btn-file btn-green">
                                             <?php echo translate('select_file'); ?>
                                            <input type="file" class="form-control required" name="products" accept=".xls,.xlsx,.csv">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                        <td colspan="2"><button class="btn btn-success" type="submit" type="submit">Upload File</button></td>

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
<script>
    $(document).ready(function () {
        $('.demo-cs-multiselect').chosen();
        $('.demo-chosen-select').chosen({
            width: '100%'
        });
    });
</script>  