<div>
    <?php
        echo form_open(base_url() . 'index.php/admin/product_review/approval_set/'.$product_review_id, array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'product_review_status',
            'enctype' => 'multipart/form-data'
        ));
    ?>
        <div class="panel-body">
        
            <div class="form-group">
                <label class="col-sm-2 control-label" for="demo-hor-1"> </label>
                <div class="col-sm-2">
                	<h4><?php echo translate('postpone'); ?></h4>
                </div>
                <div class="col-sm-4 text-center">
                	<input id="pub_<?php echo $product_review_id; ?>"  data-size="switchery-lg" class='sw1 form-control' name="approval" type="checkbox" value="ok" data-id='<?php echo $product_review_id; ?>' <?php if($status == 'approved'){ ?>checked<?php } ?> />
                </div>
                <div class="col-sm-2">
                	<h4><?php echo translate('approve'); ?></h4>
                </div>
            </div>

        </div>
    </form>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        set_switchery();
    });


    $(document).ready(function() {
        $("form").submit(function(e){
            //return false;
        });
    });
</script>
<div id="reserve"></div>