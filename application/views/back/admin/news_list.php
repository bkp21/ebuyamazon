
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('manage_news');?></h1>
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
                                    <?php echo translate('manage_news');?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>
<div style="margin-bottom: 10px;"><a href="<?php echo site_url("admin/add_news") ?>" class="btn btn-primary">Add News</a></div>
                                <table class="table table-striped table-hover">
                                <tr><th>#</th><th>News Title</th><th style="width: 40%">News Text</th><th>Update Time</th><th>Status</th><th>Actions</th></tr>
                                    <?php
                                    $i = 1;
                                    foreach($lists as $item): ?>
                                <tr><td><?php echo $i; ?></td><td><?php echo $item['news_title']; ?></td><td><?php echo $item['news_text']; ?></td><td><?php echo date("m-d-Y H:I:s A",strtotime($item['time_modified'])); ?></td><td><?php echo $item['status']? "Active" : "Inactive"; ?></td><td><a title="Update News" href="<?php echo site_url("admin/update_news/{$item['news_id']}"); ?>"><i class="fa fa-edit"></i></a>&nbsp; <a onclick="javascript: return confirm('Are you sure?');" title="Delete News" href="<?php echo site_url("admin/delete_news/{$item['news_id']}") ?>"><i style="color: red" class="fa fa-close"></i></a></td></tr>
                                    <?php
                                    $i++;
                                    endforeach;?>
                                </table>
<div><?php echo $links; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
