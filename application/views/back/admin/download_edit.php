<?php
foreach ($downloads_data as $row) {
    ?>
    <div>
        <?php
        echo form_open(base_url() . 'index.php/admin/download/update/' . $row['download_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'download_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('download_name'); ?></label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $row['download_name']; ?>" 
                           name="download_name" id="download_name" class="form-control required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-2"><?php echo translate('file_name'); ?></label>
                <div class="col-sm-9">
                    <span class="pull-left btn btn-default btn-file">
                        <?php echo translate('select_file_name'); ?>
                        <input type="file" name="img" id='imgInp' accept="image">
                    </span>
                    <br><br>
                    <span id='wrap' class="pull-left" >
                        <img src="<?php echo $this->crud_model->file_view('download', $row['download_id'], '', '', 'no', 'src', '', '', '.') ?>" width="60%" id='blah' > 
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('mask'); ?></label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $row['mask']; ?>" 
                           name="mask" id="mask" class="form-control required">
                </div>
            </div>
        </div>
    </form>
    </div>

    <?php
}
?>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>


