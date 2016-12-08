<style>
    .date-nav a{
        color: blue;
        transition: all 200ms ease;
    }

    .date-nav a:hover{
        color: green;
    }

    .edit-current i{
        font-size: 14pt;
    }
</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/jquery-ui-custom/jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/jquery-ui-custom/jquery-ui.structure.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>template/back/jquery-ui-custom/jquery-ui.theme.min.css">

<!-- <script src="<?php echo base_url(); ?>template/back/jquery-ui-custom/jquery-ui.min.js"></script> -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('promo_categories');?></h1>
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
                                    <?php echo translate('add_promo_categories');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>

                                <?php if(validation_errors()): ?>
                                    <div class="alert alert-danger">
                                        <?php  echo validation_errors(); ?>
                                    </div>
                                <?php endif?>

                                <?php echo form_open_multipart("", array("id"=>  "promo_form")); ?>

                                <table class="table table-responsive table-bordered table-hover">
                                    <tr><th colspan="2">Promo category setting</th></tr>
                                    <tr><td>Promo Category Name :</td><td><input type="text" name="promo_name" value="<?php echo set_value('promo_name',$info->promo_name) ?>"> </td></tr>
                                    <tr><td>Sorting Priority :</td><td>
                                            <?php
                                            $priority= array();
                                            $priority[1] = '1 (Highest Priority)';
                                            $priority[2] = '2';
                                            $priority[3] = '3';
                                            $priority[4] = '4';
                                            $priority[5] = '5';
                                            $priority[6] = '6';
                                            $priority[7] = '7';
                                            $priority[8] = '8';
                                            $priority[9] = '9';
                                            $priority[10] = '10 (Lowest Priority)';


                                            ?>
                                            <select name="priority">
                                                <?php foreach($priority as $k => $v): ?>
                                                    <option value="<?php echo $k ?>"<?php echo $k == $info->priority ? " selected=\"selected\"" : ""  ?>><?php echo $v ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td></tr>
                                    <tr><td>active :</td><td><input type="checkbox" name="active"<?php ?> value="true"<?php echo $info->status == 1 ? " checked=\"checked\"" : "" ?>>  </td></tr>
                                    <tr><td>Primary Category :</td><td>
                                            <select name="primary_category">
                                                <?php foreach($category_list as $item): ?>
                                                    <option value="<?php echo $item['category_id'] ?>"<?php echo $item['category_id'] == $info->primary_category ? " selected=\"selected\"" : "" ?>><?php echo $item['category_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td></tr>
                                    <tr>
                                        <td>Promotion URL :</td>
                                        <td><input style="width: 100%"  type="text" name="promotional_url" value="<?php echo set_value('promotional_url',$info->promo_url) ?>"></td>
                                    </tr>
                                </table>
                                <table class="table table-responsive table-bordered table-hover">
                                    <tr><th colspan="2">Selected categories and product</th></tr>
                                    <tr><td>
                                            <select id="selected_categories" style="width: 400px; height: 200px;" multiple="multiple">
                                                <?php foreach($category_list as $item): ?>
                                                    <option value="<?php echo $item['category_id'] ?>"><?php echo $item['category_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select style="width: 400px; height: 200px;" id="products" name="product_selected[]" multiple>
                                                <?php foreach($product_list as $item): ?>
                                                    <option value="<?php echo $item['product_id'] ?>" selected="selected"><?php echo $item['title'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Enter a Product Name or ID :</b><br />
                                            <input data-id="" id="product_search">
                                        </td>
                                        <td><button id="select-all-pro" class="btn btn-success btn-sm btn-labeled fa fa-check-square" type="button">Select All</button> <button id="select-none" class="btn btn-warning btn-sm btn-labeled fa fa-square" type="button">Select None</button> <button id="remove-single" class="btn btn-danger btn-sm btn-labeled fa fa-trash" type="button">Remove</button>   <button id="remove-all" class="btn btn-danger btn-sm btn-labeled fa fa-trash" type="button">Remove All</button></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="submit" class="btn btn-success ">Save Changes</button></td>
                                    </tr>



                                </table>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<script>
    $(document).ready(function(){
        var productSearchSelector = $("#product_search");
        var ProductSelector = $("#products");


        productSearchSelector.autocomplete({

            source: function (request, response) {
                var cats = new Array();
                var selectedCategories = $("#selected_categories option:selected");
                selectedCategories.each(function()
                {
                    cats.push($(this).val());
                });
                cats = cats.join("-");
                console.log("categories", cats);
                $.getJSON("<?php echo base_url(); ?>admin/promo_categories_product_search_ajax/" + request.term + "/" + cats, function (data) {
                    response($.map(data, function (value, key) {
                        productSearchSelector.attr('data-id',key)
                        return {
                            label: value,
                            value: key
                        };
                    }));
                });
            },
            select: function (event, ui) {
                var productId =  ui.item.value;
                var productTitle = ui.item.label;
                var option;
                var thevalue = productId;
                var exists = 0 != $('#products option[value='+thevalue+']').length;

                if(exists){
                    alert("Product already exists");
                }else{
                    option = '<option selected="selected" value="' + productId + '">' + productTitle  +'</option>';
                    ProductSelector.append(option);

                }

                $(this).val("");

                return false;


            },
            minLength: 1,
            delay: 100
        });

        // keypress event
        productSearchSelector.keydown(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                //  var productId =  productSearchSelector.attr('data-id');
                // var productTitle = productSearchSelector.val();
                // var option;
                // option = '<option value="' + productId + '">' + productTitle  +'</option>';
                //  ProductSelector.append(option);
                // alert(e.keyCode);
            }

        });

        $('#remove-single').click(function () {
            $("#products option:selected").remove();
        });

        $('#remove-all').click(function () {
            $("#products option").remove();
        });



        $("#select-all-pro").click(function(){
            //alert("I am working...");
            $("#products option").prop("selected","selected");
        });

        $("#select-none").click(function(){
            //alert("I am working...");
            $("#products option").removeAttr("selected");
        });





    });


</script>