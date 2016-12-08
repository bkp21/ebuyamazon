<div id="content-container">	
    <?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_catalog_categories'); ?></h1>
    </div>
	 <div class="smsalert smsalert-success">
            <a href="<?php echo site_url("admin/category/")?>" style="font-weight: bold;"><?php echo translate('click_to_add_a_new_category '); ?></a> <br><br>
            
        </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div style="border-bottom: 1px solid #ebebeb;padding: 0px 5px 5px 5px;"
                         class="col-md-12" >
                           <button class="btn btn-primary btn-labeled fa fa-plus-circle add_pro_btn pull-right" 
                                onclick="ajax_set_full('add','<?php echo translate('add_category'); ?>','<?php echo translate('successfully_added!'); ?>','category_add',''); proceed('to_list');">
                                    <?php echo translate('create_category');?>
                            </button>
                            <button class="btn btn-info btn-labeled fa fa-step-backward pull-right pro_list_btn" 
                                style="display:none;"  onclick="ajax_set_list();  proceed('to_add');"><?php echo translate('back_to_category_list');?>
                            </button>
                    </div>
                    <br>
                    <div class="tab-pane fade active in" 
                         id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'category';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
        	function proceed(type){
		if(type == 'to_list'){
			$(".pro_list_btn").show();
			$(".add_pro_btn").hide();
		} else if(type == 'to_add'){
			$(".add_pro_btn").show();
			$(".pro_list_btn").hide();
		}
	}
</script>

