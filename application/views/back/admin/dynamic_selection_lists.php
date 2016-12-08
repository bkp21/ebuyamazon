<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('dynamic_selection_lists');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate('manage_details');?></h3>
                        </div>
						<?php
                            echo form_open(base_url() . 'index.php/admin/dynamic_selection_lists/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
								'name' => 'dynamic_selection_lists_settings'
                            ));
                        ?>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" width="100%">
									<tbody>
										<tr>
											<td style="width:75%"><b>List Type</b></td>
											<td style="width:25%"><b>Action</b></td>
										</tr>
										<tr class="">
											<td>Product Condition - New</td>
											<td>
												<a href="<?php echo base_url(); ?>index.php/admin/dynamic_selection_lists/manage_list/product_condition_new" class="tool-tip" data-toggle="xtooltip" data-placement="top" title="" data-original-title="Edit List">
													<i class="fa fa-pencil"></i>
												</a>
											</td>
										</tr>
										<tr class="" >
											<td>Product Condition - Used</td>
											<td>
												<a href="<?php echo base_url(); ?>index.php/admin/dynamic_selection_lists/manage_list/product_condition_used" class="tool-tip" data-toggle="xtooltip" data-placement="top" title="" data-original-title="Edit List">
													<i class="fa fa-pencil"></i>
												</a>
											</td>
										</tr>
										<tr class="" >
											<td>Product Type</td>
											<td>
												<a href="<?php echo base_url(); ?>index.php/admin/dynamic_selection_lists/manage_list/product_type" class="tool-tip" data-toggle="tooltip" data-placement="top" title="Edit List" data-original-title="Edit List">
													<i class="fa fa-pencil"></i>
												</a>
											</td>
										</tr>
										<tr class="" >
											<td>Return and Refund - Days</td>
											<td>
												<a href="<?php echo base_url(); ?>index.php/admin/dynamic_selection_lists/manage_list/refund_days" class="tool-tip" data-toggle="tooltip" data-placement="top" title="Edit List" data-original-title="Edit List">
													<i class="fa fa-pencil"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Panel body-->
        </div>
    </div>
</div>

<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var user_type = 'admin';
	var module = 'default_form_settings';
	function form_settings_reset(){
		$('#btn_reset').click();
	}
</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

