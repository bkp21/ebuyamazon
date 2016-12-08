<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('SMS_management'); ?></h1>
        <div class="smsalert smsalert-success">
            <b>
                <a href="<?php echo base_url(); ?>index.php/admin/send_sms" class="btn-xs btn-labeled">
                    <?php echo translate('click_here_to_manually_send_SMS'); ?>
                </a>
            </b>
        </div>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            $sms_order_received_admin = $this->db->get_where('sms_notification_settings', array(
                        'type' => 'sms_on_order_received_admin'
                    ))->row()->value;
            $sms_order_completed_customer = $this->db->get_where('sms_notification_settings', array(
                        'type' => 'sms_on_order_completed_customer'
                    ))->row()->value;
            $sms_manual_customer = $this->db->get_where('sms_notification_settings', array(
                        'type' => 'sms_on_manual_order_received_customer'
                    ))->row()->value;
            $sms_due_customer = $this->db->get_where('sms_notification_settings', array(
                        'type' => 'sms_on_due_notification_customer'
                    ))->row()->value;
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark"> 
                <?php
                echo form_open(base_url() . 'index.php/admin/sms_notifications/set/', array(
                    'class' => 'form-horizontal',
                    'method' => 'post',
                    'id' => 'sms',
                    'enctype' => 'multipart/form-data'
                ));
                ?>
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('SMS_notification_setting'); ?></h3>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('SMS_on_order_received (admin)'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="sms_order_admin" class='sw1' data-set='sms_order_admin' type="checkbox" <?php if ($sms_order_received_admin == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('SMS_on_order_completed (customer)'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="sms_com_order_customer" class='sw2' data-set='sms_com_order_customer' type="checkbox" <?php if ($sms_order_completed_customer == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('SMS on manual order received (customer)'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="sms_man_order_customer" class='sw3' data-set='sms_man_order_customer' type="checkbox" <?php if ($sms_manual_customer == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('SMS on due notification (customer) '); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="sms_due_order_customer" class='sw4' data-set='sms_due_order_customer' type="checkbox" <?php if ($sms_due_customer == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('admin_mobile_number'); ?></label>
                        <div class="col-sm-6">
                            <input type="text" style="width: 220px;" name="admin_mobile" id="admin-mobile" value="<?php echo $this->crud_model->get_type_name_by_id('sms_notification_settings', '5', 'value'); ?>"  class="form-control required">
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <span class="btn btn-purple submitter" 
                        	data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>' >
								<?php echo translate('save');?>
                        </span>
                    </div>
                    </form>
                    <div style="display:none;" id="sms"></div>
                   
                       <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('SMS_management');?></h3>
                        </div>

                    <!-- LIST -->
                    <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
<script>
    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'admin';
    var module = 'sms_notifications';
    var list_cont_func = 'list';
    var change_cont_func = 'delete';
    
  	$(document).ready(function() {

     $(".sw1").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/sms_notifications/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : smson,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : smsoff,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //activate/inactive subscribed_products
				};
			});
                        $(".sw2").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/sms_notifications/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : smscm,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : smscf,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //activate/inactive subscribed_products
				};
			});
                        $(".sw3").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/sms_notifications/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : smsmo,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : smsmn,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //active/inactive customers can cancel subscriptions anytime
				};
			});
                        $(".sw4").each(function(){
				var h = $(this);
				var id = h.attr('id');
				var set = h.data('set');
				new Switchery(document.getElementById(id), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
				var changeCheckbox = document.querySelector('#'+id);
				changeCheckbox.onchange = function() {
				  ajax_load(base_url+'index.php/'+user_type+'/sms_notifications/'+set+'/'+changeCheckbox.checked,'demo-home','others');
				  if(changeCheckbox.checked == true){
					$.activeitNoty({
						type: 'success',
						icon : 'fa fa-check',
						message : smsdu,
						container : 'floating',
						timer : 3000
					});
					sound('published');
				  } else {
					$.activeitNoty({
						type : 'danger',
						icon : 'fa fa-check',
						message : smsdf,
						container : 'floating',
						timer : 3000
					});
					sound('unpublished');
				  }
                                  //active/inactive customers can cancel subscriptions anytime
				};
			});
                        	});
</script>
