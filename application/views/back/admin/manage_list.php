<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('manage_lists'); ?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate($list_type); ?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered" width="100%">
                                <tbody>
                                    <tr>
                                        <td style="width:50%;">
                                            <b>New Item/Edit Item:<b>
                                                    <br><br>
                                                    <div>
                                                        <div>
                                                            <b>Item ID:<b>
                                                                    <div>
                                                                        <div>
                                                                            <input name="item_id" id="item_id" style="width:190px;" type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div>
                                                                            <b>Item Name:<b>
                                                                                </b></b></div><b><b>
                                                                                <div>
                                                                                    <input name="item_name" id="item_name" style="width:190px;" type="text">
                                                                                </div>
                                                                                <input type="hidden" name="list_type" id="list_type" value = "<?php echo $list_type; ?>">
                                                                                <input type="hidden" name="selected_item" id="selected_item" value = "">
                                                                                <input type="hidden" name="selected_item_label" id="selected_item_label" value = "">
                                                                            </b></b></div><b><b>

                                                                        </b></b></b></b></div></div></b></b></td>
                                        <td style="width:50%;">
                                            <b>Items in List:<b>
                                                    <br><br>
                                                    <select class="not-chosen" size="10" style="width:90%;" id="current_list" onclick="editSelectedListItem(this.value);">
                                                        <?php foreach ($products as $item): ?>
                                                            <option value="<?php echo $item['item_id'] ?>"><?php echo $item['item_id'] . '-' . $item['item_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </b></b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">
                                            <a class="btn btn-success margin-top7" href="javascript:addListItem();">
                                                <b>Save Item</b>
                                            </a>
                                        </td>
                                        <td style="text-align:center;">
                                            <a class="btn btn-danger margin-top7 btn-delete" href="javascript:removeListItem();">
                                                <b>Remove Selected</b>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Panel body-->
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    var user_type = 'admin';
    var module = 'dynamic_selection_lists';
    function addListItem() {
        var current_listSelector = $("#current_list");
        var item_id = document.getElementById('item_id').value;
        var item_name = document.getElementById('item_name').value;
        var list_type = document.getElementById('list_type').value;
        var thevalue = item_id;
        var thelabel = item_id + '-' + item_name;
        var label = document.getElementById('selected_item_label').value;
        var exists = 0 != $('#current_list option[value=' + thevalue + ']').length;

        if (exists) {
            if (thelabel == label) {
                alert("Product already exists");
            } else {
                jQuery("#current_list").find("option[value='" + item_id + "']").remove();
                option = '<option selected="selected" value="' + item_id + '">' + item_id + '-' + item_name + '</option>';
                current_listSelector.append(option);
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url(); ?>admin/add_dynamic_selection_lists_items/" + item_id + "/" + item_name + "/" + list_type,
                    success: function (data) {
                    }
                });
            }
        } else {
            option = '<option selected="selected" value="' + item_id + '">' + item_id + '-' + item_name + '</option>';
            current_listSelector.append(option);
            $.ajax({
                type: "GET",
                url: "<?php echo base_url(); ?>admin/add_dynamic_selection_lists_items/" + item_id + "/" + item_name + "/" + list_type,
                success: function (data) {
                }
            });
        }
    }
    function editSelectedListItem(value) {
        var label = jQuery("#current_list").find("option[value='" + jQuery("#current_list").val() + "']").text();
        document.getElementById('selected_item').value = value;
        document.getElementById('selected_item_label').value = label;
        $.ajax({
            type: "GET",
            url: "<?php echo base_url(); ?>admin/edit_dynamic_selection_lists_items/" + value,
            success: function (data) {
                var i = 0;
                var json = JSON.parse(data);
                $.each(json, function () {
                    document.getElementById('item_id').value = json[i].item_id;
                    document.getElementById('item_name').value = json[i].item_name;
                    document.getElementById('list_type').value = json[i].list_type;
                    i++;
                });
            }
        });
    }
    function removeListItem() {
        var item_id = document.getElementById('selected_item').value;
        $("#current_list option:selected").remove();
        $.ajax({
            type: "GET",
            url: "<?php echo base_url(); ?>admin/delete_dynamic_selection_lists_items/" + item_id,
            success: function (data) {
            }
        });
    }
</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

