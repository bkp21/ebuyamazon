<div>
	<?php
        echo form_open(base_url() . 'index.php/admin/brand/do_add/', array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'brand_add',
            'enctype' => 'multipart/form-data'
        ));
    ?>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('brand_name');?></label>
                <div class="col-sm-9">
                    <input type="text" name="name" id="demo-hor-1" 
                    	placeholder="<?php echo translate('brand_name'); ?>" class="form-control required">
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                	<?php echo translate('description');?>
                    	</label>
                <div class="col-sm-9">
                   <textarea name="description" id="description" class="form-control required" placeholder="<?php echo translate('description');?>"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-2"><?php echo translate('brand_logo');?></label>
                <div class="col-sm-9">
                    <span class="pull-left btn btn-default btn-file">
                        <?php echo translate('select_brand_logo');?>
                        <input type="file" name="img" id='imgInp' accept="image">
                    </span>
                    <br><br>
                    <span id='wrap' class="pull-left" >
                        <img src="<?php echo base_url(); ?>uploads/others/photo_default.png" 
                        	width="48.5%" id='blah' > 
                    </span>
                </div>
            </div>

        </div>
	</form>
</div>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

