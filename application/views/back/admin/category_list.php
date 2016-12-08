<div class="panel-body" id="demo_s">
    <?php
    $arrayCategories = array();
      foreach ($cat_tree as $rows) {
          
        $arrayCategories[$rows['category_id']] = array("category_id" => $rows['category_id'], "parentid" => $rows['parentid'], "category_name" =>                       
        $rows['category_name']); 
      }
    ?>
   <table id="demo-table" class="table table-striped"  data-pagination="false" data-show-refresh="true" data-ignorecol="0,2" data-show-toggle="true" data-show-columns="false" data-search="true" >
        <thead>
            <tr>
                <th><div class="col-lg-9"><i class="fa fa-folder-open" style="font-size: 16px"></i> <b><?php echo translate('category_tree'); ?></b></div><div class="col-lg-3" style="text-align: right"><?php echo translate('action'); ?></div></th>
            </tr>
        </thead>

        <tbody >
            <?php foreach (array_unique($cat_tree) as $row) { ?>
                <tr>
                    <td>
                        <div class="css-treeview">
                             <?php $this->crud_model->createTreeView($arrayCategories, 0);  ?>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

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

