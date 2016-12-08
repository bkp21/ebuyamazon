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
<div id="content-container">
        <?php include('dash-header.php');?>
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
                                    <?php echo translate('promo_categories');?>
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
                                <div style="margin-bottom:  10px;"><a href="<?php echo site_url("admin/promo_category_add"); ?>" class="btn btn-primary btn-labeled fa fa-plus-circle pull-left mar-rgt">Create Promo Category</a></div>

                                <table class="table table-responsive table-bordered table-hover">

                                    <tr>
                                        <th>#</th>
                                        <th>Promo Categories</th>
                                        <th>Priority</th>
                                        <th>Action</th>


                                    </tr>

                                    <?php
                                    $i = 1;
                                    foreach($list as $item): ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $item['promo_name']; ?></td>
                                            <td><?php echo $item['priority']; ?></td>
                                            <td><?php echo $item['status']; ?></td>

           <td class="edit-current"><a href="<?php echo site_url("admin/promo_category_edit/{$item['promo_id']}") ?>"><i class="fa fa-edit"></i></a> <a onclick="return confirm('Are you sure?');" href="<?php echo site_url("admin/promo_categories_delete/{$item['promo_id']}"); ?>"><i style="color: red;" class="fa fa-remove"></i></a></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    endforeach;?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
