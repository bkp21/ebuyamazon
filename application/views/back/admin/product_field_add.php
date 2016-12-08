<div>
    <?php
    echo form_open(base_url() . 'index.php/admin/product_field/do_add/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'product_field_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('add_this_field_to'); ?></label>
            <div class="col-sm-9">
                <select name="group" class="form-control">
                    <?php
                    foreach ($all_group as $group) {
                        ?>
                        <option value="<?php echo $group['product_field_group_id']; ?>">
                            <?php echo $group['group_name']; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('field_name'); ?>
            </label>
            <div class="col-sm-9">
                <input type="text" name="field_name" placeholder="<?php echo translate('field_name'); ?>" class="form-control required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('field_caption'); ?>
            </label>
            <div class="col-sm-9">
                <input type="text" name="field_caption" placeholder="<?php echo translate('field_caption'); ?>" class="form-control required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('field_type'); ?>
            </label>
            <div class="col-sm-9">
                <select class="form-control" name="op_type" onChange="updateFieldType(this.value);">
                    <option value="text"><?php echo translate('text_box'); ?></option>
                    <option value="select"><?php echo translate('drop-down'); ?></option>
                    <option value="radio"><?php echo translate('radio_buttons'); ?></option>
                    <option value="checkbox"><?php echo translate('checkbox'); ?></option>
                    <option value="textarea"><?php echo translate('text_area'); ?></option>
                </select>
            </div>
        </div>    
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('is_this_field_available'); ?>
            </label>
            <div class="col-sm-9">
                <input type="checkbox" value="1" id="filed_active" name="filed_active">
                <input type="hidden" value="0"  id="hidden_active"  name="filed_active">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('is_this_field_required?'); ?>
            </label>
            <div class="col-sm-9">
                <input type="checkbox" id="field_reqired" value="1" name="field_reqired">
                <input type="hidden"  id="hidden_reqired" value="0" name="field_reqired">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="demo-hor-1">
                <?php echo translate('priority'); ?>
            </label>
            <div class="col-sm-9">
                <input type="number" min="1" value="1" name="priority"  class="form-control required">
            </div>
        </div>
        <div name="div_text" id="div_text" style="display: block;">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('maximum_text-length '); ?>
                </label>
                <div class="col-sm-9">
                    <input type="number"  name="length"  class="form-control">
                </div>
            </div>
        </div>
        <div name="div_select_radio" id="div_select_radio" style="display: none;">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('options_(one_per_line)'); ?>
                </label>
                <div class="col-sm-9">
                    <textarea name="options" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div name="div_checkbox" id="div_checkbox" style="display: none;">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('checked_value'); ?>
                </label>
                <div class="col-sm-9">
                    <input class="form-control" name="value_checked" value="Yes" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('unchecked_value'); ?>
                </label>
                <div class="col-sm-9">
                    <input class="form-control" name="value_unchecked" value="No" type="text">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<script>
    function updateFieldType(ft) {
        var div_text = document.getElementById("div_text");
        var div_select_radio = document.getElementById("div_select_radio");
        var div_checkbox = document.getElementById("div_checkbox");
        var cb_is_required = document.getElementById("cb_is_required");
        if (ft == "text") {
            div_checkbox.style.display = "none";
            div_select_radio.style.display = "none";
            div_text.style.display = "block";
            cb_is_required.disabled = false;
        }
        if (ft == "select" || ft == "radio") {
            div_checkbox.style.display = "none";
            div_text.style.display = "none";
            div_select_radio.style.display = "block";
            cb_is_required.disabled = true;
        }
        if (ft == "checkbox") {
            div_select_radio.style.display = "none";
            div_text.style.display = "none";
            div_checkbox.style.display = "block";
            cb_is_required.disabled = false;
        }
        if (ft == "textarea") {
            div_select_radio.style.display = "none";
            div_text.style.display = "none";
            div_checkbox.style.display = "none";
            cb_is_required.disabled = false;
        }
    }
        $(document).ready(function() {
		$("#filed_active").change(function() {
			if(this.checked){
                            document.getElementById('hidden_active').disabled = true;
			}else{

                            document.getElementById('hidden_active').disabled = false;
			} 
		}) 
                $("#field_reqired").change(function() {
			if(this.checked){
                            document.getElementById('hidden_reqired').disabled = true;
			}else{

                            document.getElementById('hidden_reqired').disabled = false;
			} 
		}) 
        });
</script>
