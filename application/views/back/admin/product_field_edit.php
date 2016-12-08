<?php
foreach ($all_field as $row) {
    ?>

    <div>
        <?php
        echo form_open(base_url() . 'index.php/admin/product_field/update/' . $row['product_field_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'product_field_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('add_this_field_to'); ?></label>
                <div class="col-sm-9">
                    <select name="group" class="demo-cs-multiselect control">
                        <?php
                        foreach ($all_group as $group) {
                            ?>
                            <option value="<?php echo $group['product_field_group_id']; ?>" <?php
                    if ($row['product_field_group_id'] == $group['product_field_group_id']) {
                        echo 'selected';
                    }
                            ?>>
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
                    <input type="text" name="field_name" value="<?php echo $row['field_name']; ?>" placeholder="<?php echo translate('field_name'); ?>" class="form-control required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('field_caption'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="text" name="field_caption" value="<?php echo $row['field_caption']; ?>" placeholder="<?php echo translate('field_caption'); ?>" class="form-control required">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('field_type'); ?>
                </label>
                <div class="col-sm-9">
                   <?php  if($row['field_type']=='text'){ 
                     echo "<b>".translate('text_box')."</b>";
                     }elseif($row['field_type']=='select'){  
                      echo "<b>".translate('drop-down')."</b>";
                     }elseif($row['field_type']=='radio'){
                      echo "<b>".translate('radio_buttons')."</b>";  
                     }elseif($row['field_type']=='checkbox'){
                      echo "<b>".translate('checkbox')."</b>"; 
                     }elseif($row['field_type']=='textarea'){
                      echo "<b>".translate('text_area')."</b>"; 
                     }
                   ?>
                </div>
            </div>    
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('is_this_field_available'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="checkbox" name="filed_active" <?php if ($row['filed_active'] == '1') { ?>checked<?php } ?> value="1" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('is_this_field_required?'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="checkbox" name="field_reqired" <?php if ($row['field_reqired'] == '1') { ?>checked<?php } ?> value="1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('priority'); ?>
                </label>
                <div class="col-sm-9">
                    <input type="number" min="1"  name="priority" value="<?php echo $row['priority']; ?>" class="form-control required">
                </div>
            </div>
            <?php if($row['field_type']=='text'){ ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1">
                    <?php echo translate('maximum_text-length '); ?>
                </label>
                <div class="col-sm-9">
                    <input type="number"  name="length" value="<?php echo $row['text_length']; ?>" class="form-control">
                </div>
            </div>
            <?php } elseif($row['field_type']=='radio' || $row['field_type']=='select') { ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-1">
                        <?php echo translate('options_(one_per_line)'); ?>
                    </label>
                    <div class="col-sm-9">
                        <textarea name="options" class="form-control"><?php echo $row['options_value']?></textarea>
                    </div>
                </div>
            <?php } elseif($row['field_type']=='checkbox') { ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-1">
                        <?php echo translate('checked_value'); ?>
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="value_checked" value="<?php echo $row['value_checked']; ?>" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="demo-hor-1">
                        <?php echo translate('unchecked_value'); ?>
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="value_unchecked" value="<?php echo $row['value_unchecked']; ?>" type="text">
                    </div>
                </div>
            <?php } ?>
        </div>
    </form>
    </div>
<?php } ?>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>