<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('poision_message'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                       foreach($data as $row) {
                            if ($row['type'] == 'gift_card_active') {
                                $gift_card_active = $row['value'];
                            }
                            if ($row['type'] == 'message_length') {
                                $message_length = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel panel-bordered-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('manage_poision_message'); ?></h3>
                            </div>
                            <?php
                            echo form_open(base_url() . 'index.php/admin/poision_message/set/', array(
                                'class' => 'form-horizontal',
                                'method' => 'post',
                                'name' => 'poision_message'
                            ));
                            ?>
                            <div class="panel-body">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="demo-hor-inputemail"><?php echo translate('Gift Card Active :'); ?></label>
                                    <div class="col-sm-6">
                                        <div class="col-sm-">
                                            <input id="gift_card_active" class='sw1' data-set='gift_card_active' data-msg_enabled="<?php echo translate('gift_card_active_enabled'); ?>" data-msg_disabled="<?php echo translate('gift_card_active_disabled'); ?>" type="checkbox" <?php if ($gift_card_active == 'ok') { ?>checked<?php } ?> />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label"><?php echo translate('Gift Card Message Length :'); ?></label>
                                    <div class="col-sm-6">
                                        <input type="number" name="message_length" value="<?php echo $message_length; ?>" class="form-control required">
                                    </div>
                                </div>


                                <div class="panel-footer text-right">
                                    <span class="btn btn-info submitter" 
                                          data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
                                              <?php echo translate('save'); ?>
                                    </span>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Panel body-->
            </div>
        </div>
    </div>
    </div>
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var user_type = 'admin';
	var module = 'poision_message';
	
	$(document).ready(function() {

     $(".sw1").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				var msg_enabled = h.data('msg_enabled');
				var msg_disabled = h.data('msg_disabled');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/poision_message/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : msg_enabled,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : msg_disabled,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //activate/inactive subscribed_products
				};
			});
           
           });            
</script>
<style type="text/css">
.smsalert {
    background-color: #fcf8e3;
    border: 1px solid #fbeed5;
    border-radius: 4px;
    margin-bottom: 20px;
    padding: 8px 35px 8px 14px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.smsalert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #468847;
}
</style>
	
	
</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/business.js"></script>

