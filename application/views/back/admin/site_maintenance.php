<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/amcharts/style.css"	type="text/css">
<script src="<?php echo base_url(); ?>template/back/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/back/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>template/back/amcharts/amstock.js" type="text/javascript"></script>

<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('site_maintenance');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('maintenance_setting');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>
                                <?php echo form_open("admin/site_maintenance") ?>
                                <input type="hidden" name="maint_form" value="<?php echo hash("sha256","11223344") ?>">
                                <div class="form-group">
                                    <b>Select Sites</b><br />

                                    <input name="site_front" value="1" type="checkbox"<?php echo $setting->front? " checked=\"checked\"" : null; ?>>Front &nbsp; &nbsp; &nbsp; <input name="site_vendor" value="1" type="checkbox"<?php echo $setting->vendor? " checked=\"checked\"" : null; ?>>Vendor    &nbsp; &nbsp; &nbsp; <input name="site_admin" value="1" type="checkbox"<?php echo $setting->admin? " checked=\"checked\"" : null; ?>>Admin
                                </div>

                                <?php if($setting->only_access_ip != null): ?>
                                    <div class="form-group">
                                        <b>Accessible IP</b>
                                        <?php $ip = implode(",",json_decode($setting->only_access_ip)) ?>
                                        <textarea name="access_ip" class="form-control" rows="3"><?php echo $ip ; ?></textarea>
                                    </div>

                                <?php else:?>
                                    <b>Accessible IP</b>
                                    <textarea name="access_ip" class="form-control" rows="3"></textarea>
                                <?php endif;?>



                                <div class="form-group">
                                    <b>Message</b>
                                    <textarea name="message" class="form-control" rows="3"><?php echo $setting->message; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-purple" type="submit">Save Setting</button>
                                    </div>

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
