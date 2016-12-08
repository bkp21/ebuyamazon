<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_product_reviews'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="tab-base tab-stacked-left">
            <?php
            $activate_review = $this->db->get_where('product_setting', array(
                        'type' => 'activate_product_reviews'
                    ))->row()->value;
            $auto_activate_review = $this->db->get_where('product_setting', array(
                        'type' => 'auto_approve_product_reviews'
                    ))->row()->value;
            ?>
            <div class="col-sm-12">
                <div class="panel panel-bordered-dark"> 
                    <?php
                    echo form_open(base_url() . 'index.php/admin/product_review', array(
                        'class' => 'form-horizontal',
                        'method' => 'post',
                        'id' => 'review',
                        'enctype' => 'multipart/form-data'
                    ));
                    ?>
                    
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('product_review_setting'); ?></h3>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('activate_product_reviews'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="activate_review" class='sw1' data-set='activate_review' type="checkbox" <?php if ($activate_review == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo translate('auto_approve_product_reviews'); ?></label>
                        <div class="col-sm-6">
                            <div class="col-sm-">
                                <input id="auto_activate_review" class='sw2' data-set='auto_activate_review' type="checkbox" <?php if ($auto_activate_review == 'ok') { ?>checked<?php } ?> />
                            </div>
                        </div>
                    </div>
                    </form>
                    <div style="display:none;" id="review"></div>

                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('product_reviews_list'); ?></h3>
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
    var module = 'product_review';
    var list_cont_func = 'list';
    var change_cont_func = 'delete';

    $(document).ready(function () {

        $(".sw1").each(function () {
            var h = $(this);
            var id = h.attr('id');
            var set = h.data('set');
            new Switchery(document.getElementById(id), {color: 'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
            var changeCheckbox = document.querySelector('#' + id);
            changeCheckbox.onchange = function () {
                ajax_load(base_url + 'index.php/' + user_type + '/product_review/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
                if (changeCheckbox.checked == true) {
                    $.activeitNoty({
                        type: 'success',
                        icon: 'fa fa-check',
                        message: 'Enable Acvtive Product Review',
                        container: 'floating',
                        timer: 3000
                    });
                    sound('published');
                } else {
                    $.activeitNoty({
                        type: 'danger',
                        icon: 'fa fa-check',
                        message: 'Disable Acvtive Product Review',
                        container: 'floating',
                        timer: 3000
                    });
                    sound('unpublished');
                }
                //activate/inactive subscribed_products
            };
        });
        $(".sw2").each(function () {
            var h = $(this);
            var id = h.attr('id');
            var set = h.data('set');
            new Switchery(document.getElementById(id), {color: 'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
            var changeCheckbox = document.querySelector('#' + id);
            changeCheckbox.onchange = function () {
                ajax_load(base_url + 'index.php/' + user_type + '/product_review/' + set + '/' + changeCheckbox.checked, 'demo-home', 'others');
                if (changeCheckbox.checked == true) {
                    $.activeitNoty({
                        type: 'success',
                        icon: 'fa fa-check',
                        message: 'Enable Auto Approve Product Reviews',
                        container: 'floating',
                        timer: 3000
                    });
                    sound('published');
                } else {
                    $.activeitNoty({
                        type: 'danger',
                        icon: 'fa fa-check',
                        message: 'Disable Auto Approve Product Reviews',
                        container: 'floating',
                        timer: 3000
                    });
                    sound('unpublished');
                }
                //activate/inactive subscribed_products
            };
        });
    });
</script> 
<style>
.tab-base
{
    margin-top: 30px;
}
</style>