<div class="panel-body" id="demo_s">
    <?php
    $arrayCategories = array();
      foreach ($cat_tree as $rows) {
          
        $arrayCategories[$rows['category_id']] = array("parentid" => $rows['parentid'], "category_name" =>                       
        $rows['category_name']); 
      }
    ?>
   <table id="demo-table" class="table table-striped"  data-pagination="false" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
<!--                <th><?php echo translate('icon'); ?></th>-->
                <th><?php echo translate('category'); ?></th>
<!--                <th><?php echo translate('title'); ?></th>-->
                <th class="text-right"><?php echo translate('options'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            $i = 0;
            foreach (array_unique($cat_tree) as $row) {
                //$url = base_url().'uploads/category_image/'.$row['category_icon'];
                $i++;
                ?>
                <tr>
<!--                    <td><img src="<?php //echo $url;?>" width="50" height="35" /></td>-->
                    <td>
                        <div class="css-treeview">
						
                             <?php $this->crud_model->createTreeView($arrayCategories, 0);  ?>
                        </div>
                    </td>
<!--                    <td><?php// echo $row['meta_title']; ?></td>-->
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            onclick="ajax_set_full('edit','<?php echo translate('edit_category'); ?>','<?php echo translate('successfully_edited!'); ?>','category_edit','<?php echo $row['category_id']; ?>');proceed('to_list');" data-original-title="Edit" data-container="body">
                                <?php echo translate('edit');?>
                        </a>
                        <a onclick="delete_confirm('<?php echo $row['category_id']; ?>', '<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" 
                           data-original-title="Delete" data-container="body">
                               <?php echo translate('delete'); ?>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<!--<div class="css-treeview">
<?php 
//    foreach (array_unique($all_categories) as $row) {
//        $this->crud_model->createTreeView($arrayCategories, 0); 
//    }
?>
</div>-->

<div id='export-div'>
    <h1 style="display:none;"><?php echo translate('category'); ?></h1>
    <table id="export-table" data-name='category' data-orientation='p' style="display:none;">
        <thead>
            <tr>
                <th><?php echo translate('no'); ?></th>
                <th><?php echo translate('name'); ?></th>
            </tr>
        </thead>

        <tbody >
            <?php
            $i = 0;
            foreach ($all_categories as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>

//        $("*[id^=bga-topmenu_]").click(function(){
//            if($('input[name=foo]').is(':checked')){
//                $('#myi').toggleClass('fa-folder fa-folder-open');
//        }
//        else{
//             $(this).find('i').toggleClass('fa-folder-open fa-folder');
//        }       
//    });
//

</script>

