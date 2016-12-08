<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-table/extensions/export/bootstrap-table-export.js"></script>
<div class="panel-body" id="demo_s">
     <?php echo form_open("admin/product/list_data/") ?>
                       <div class="panel panel-bordered-primary">
                           <div class="panel-heading">
                               <h3 class="panel-title">
                                   <?php echo translate('search_products'); ?>
                          </h3>
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
                                   
                                   <div class="col-md-4"> 
                                       <div class="form-group">
                                           <label for="product-name">Product Tags</label>
                                             <?php echo $this->crud_model->select_html('manage_tags','tag_name','tag_name','add','demo-chosen-select','','',''); ?>
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
								 <a class="btn btn-purple" href="javascript:" onClick="do_search();" name="product-search">Search</a>
                                   <!--<button class="btn btn-purple" type="submit" name="product-search">Search</button>-->
                               </div>
                           </div>
                       </div>
                <?php echo form_close(); ?>
    <!--<table id="events-table" class="table table-striped"  data-url="<?php echo base_url(); ?>index.php/admin/product/list_data" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"  data-show-refresh="true" data-search="true"  data-show-export="true" >-->
    <table id="events-table" class="table table-striped" data-side-pagination="client" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"  data-show-refresh="true" data-search="true"  data-show-export="true" >
        <thead>
            <tr>
                <th data-field="image" data-align="right" data-sortable="true">
                    <?php echo translate('image');?>
                </th>
                <th data-field="title" data-align="center" data-sortable="true">
                    <?php echo translate('title');?>
                </th>
                <th data-field="current_stock" data-sortable="true">
                    <?php echo translate('current_quantity');?>
                </th>
                <th data-field="deal" data-sortable="false">
                    <?php echo translate("today's_deal");?>
                </th>
                <th data-field="publish" data-sortable="false">
                    <?php echo translate('publish');?>
                </th>
                <th data-field="featured" data-sortable="false">
                    <?php echo translate('featured');?>
                </th>
                <th data-field="options" data-sortable="false" data-align="right">
                    <?php echo translate('options');?>
                </th>
            </tr>
        </thead>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function(){
		$('#events-table').bootstrapTable({
        }).on('all.bs.table', function (e, name, args) {
            //alert('1');
            //set_switchery();
        }).on('click-row.bs.table', function (e, row, $element) {
            
        }).on('dbl-click-row.bs.table', function (e, row, $element) {
            
        }).on('sort.bs.table', function (e, name, order) {
            
        }).on('check.bs.table', function (e, row) {
            
        }).on('uncheck.bs.table', function (e, row) {
            
        }).on('check-all.bs.table', function (e) {
            
        }).on('uncheck-all.bs.table', function (e) {
            
        }).on('load-success.bs.table', function (e, data) {
            set_switchery();
        }).on('load-error.bs.table', function (e, status) {
            
        }).on('column-switch.bs.table', function (e, field, checked) {
            
        }).on('page-change.bs.table', function (e, size, number) {
            //alert('1');
            //set_switchery();
        }).on('search.bs.table', function (e, text) {
            
        });
    });

</script>
<script>
$(document).ready(function() {
        $('.demo-cs-multiselect').chosen();
        $('.demo-chosen-select').chosen({
                width: '100%'
        });
		ajaxRequest();
}); 
var base_url = '<?php echo base_url(); ?>';
function do_search(){
	var product_id = $('#product-id').val();
	var product_name = $('#product-name').val();
	var category = $("select[name=category]").val();
	var sort_by = $("select[name=sort_by]").val();
	var vendor = $("select[name=vendor]").val();
	var tag_name = $("select[name=tag_name]").val();
	$.ajax({
		type: 'GET',
		url:base_url+'index.php/admin/product/search_product',
		dataType: 'html',
		data:'product_id='+product_id+'&product_name='+product_name+'&category='+category+'&sort_by='+sort_by+'&vendor='+vendor+'&tag_name='+tag_name,
		success: function(data1) {
			//alert(data1);
			var json = JSON.parse(data1);
			$("#events-table").attr("data-total-rows", json.total);
			$("#events-table").bootstrapTable("load", json.rows); 
		},
		error: function(e) {
			console.log(e)
		}
	});
}
function ajaxRequest() {
	$.ajax({
		type: 'GET',
		url:base_url+'index.php/admin/product/search_product',
		success: function(data1) {
			var json = JSON.parse(data1);
			$("#events-table").attr("data-total-rows", json.total);
			$("#events-table").bootstrapTable("load", json.rows); 
		},
		error: function(e) {
			console.log(e)
		}
	});
}
</script>
