<?php
	foreach($currency_data as $row){
?>
<div class="row">
	<div class="col-md-12">
		<?php
			echo form_open(base_url() . 'index.php/admin/localisation_settings/currency_edit/' . $row['currency_id'], array(
				'class' => 'form-horizontal',
				'method' => 'post',
				'id' => 'currency_edit'
			));
		?>
			<div class="panel-body">                   
				<div class="tab-base">
                        <!--Tabs Content-->                    
					<div class="tab-content">
						<div id="blog_details" class="tab-pane fade active in">
							<div class="form-group btm_border">
								<h4 class="text-thin text-center"><?php echo translate('currency_edit'); ?></h4>
							</div>
                            <div class="form-group">
								<label class="col-sm-4 control-label"><?php echo translate('currency_code'); ?></label>
                                <div class="col-sm-6">
                                    <input class="form-control required" type="text" name="currency_code" placeholder="<?php echo translate('currency_code');?>" value="<?php echo $row['currency_code']?>" />
                                </div>
                            </div>                  
							<div class="form-group">
								<label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('currency_name');?></label>
								<div class="col-sm-6">
									<input type="text" name="currency_name" id="currency_name" class="form-control required" placeholder="<?php echo translate('currency_name');?>" value="<?php echo $row['currency_name']?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('exchange_rate');?></label>
								<div class="col-sm-6">
									<input type="text" name="exchange_rate" id="exchange_rate" class="form-control required" placeholder="<?php echo translate('exchange_rate');?>" value="<?php echo $row['exchange_rate']?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('decimal_point');?></label>
								<div class="col-sm-6">
									<select name="decimal_point" id="decimal_point" class="form-control demo-chosen-select  required" >
									<?php 
									$i=0;
									while($i<6){
										echo '<option value="'.$i.'" '.(($i==$row['decimal_point']) ? "selected" : null).'>'.$i.'</option>';
										$i++;
									}
									?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('currency_symbol');?></label>
								<div class="col-sm-6">
									<input type="text"  name="left_symbol" id="left_symbol" class="form-control required" placeholder="<?php echo translate('currency_symbol');?>" value="<?php echo $row['left_symbol']?>" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('right_symbol');?></label>
								<div class="col-sm-6">
									<input type="text"  name="right_symbol" id="right_symbol" class="form-control" placeholder="<?php echo translate('right_symbol');?>" value="<?php echo $row['right_symbol']?>" />
								</div>
							</div>           
						</div>
					</div>
				</div>
			</div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-11">
                    	<span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right" 
                            onclick="ajax_set_full('edit','<?php echo translate('edit_currency'); ?>','<?php echo translate('successfully_edited!'); ?>','currency_edit','<?php echo $row['currency_id']; ?>') "><?php echo translate('reset');?>
                        </span>
                     </div>
                     <div class="col-md-1">
                     	<span class="btn btn-success btn-md btn-labeled fa fa-wrench pull-right" onclick="form_submit('currency_edit','<?php echo translate('successfully_edited!'); ?>');proceed('to_add');" ><?php echo translate('save');?></span> 
                     </div>
                </div>
            </div>
        </form>
	</div>
    </div>
<?php
}
?>
<script>
    
     window.preview = function (input) {
        if (input.files && input.files[0]) {
            $("#previewImg").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImg").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });
        }
    }
	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
	});
         $(document).ready(function () {
        $('.summernotes').each(function () {
            var now = $(this);
            var h = now.data('height');
            var n = now.data('name');
            now.closest('div').append('<input type="hidden" class="val" name="' + n + '">');
            now.summernote({
                height: h,
                onChange: function () {
                    now.closest('div').find('.val').val(now.code());
                }
            });
            now.closest('div').find('.val').val(now.code());
        });
    });
        $(document).ready(function () {
        $('.summernotes1').each(function () {
            var now = $(this);
            var h = now.data('height');
            var n = now.data('name');
            now.closest('div').append('<input type="hidden" class="val1" name="' + n + '">');
            now.summernote({
                height: h,
                onChange: function () {
                    now.closest('div').find('.val1').val(now.code());
                }
            });
            now.closest('div').find('.val1').val(now.code());
        });
    });
    $(document).ready(function() {
	$('.demo-chosen-select').chosen();
	$('.demo-cs-multiselect').chosen({
		width: '100%'
	});
});
</script>
   
<style>
.formHelp {
    font-size: 10px;
}    
</style>  