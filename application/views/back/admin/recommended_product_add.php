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
        <h1 class="page-header text-overflow" ><?php echo translate('Recommended Products (Family) (Insert) ');?></h1>
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
                                    <?php echo translate('Products Family Properties');?>
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
                                    <tr><th colspan="2">Products Family Name</th></tr>
                                    <tr><td>Category(s) Product Will Be Listed In :</td><td><input style="width: 400px;" type="text" name="promo_name"> </td></tr>

                                </table>
                                <table class="table table-responsive table-bordered table-hover">
                                    <tr><th colspan="2">Category(s) Product Will Be Listed In</th></tr>
                                    <tr><td>
                                            <b>Enter a Product Name or ID :</b><br />
                                            <input data-id="" id="product_search">
                                        </td>
                                        <td>
                                            <select style="width: 400px; height: 200px;" id="products" name="product_selected[]" multiple>

                                            </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

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