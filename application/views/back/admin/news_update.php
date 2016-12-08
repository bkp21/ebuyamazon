
<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('Add News');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <div>
                                <a href="<?php echo site_url("admin/manage_news"); ?>" class="btn btn-danger btn-xs">Back</a>
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('add_news');?>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif?>


                                <?php echo form_open("") ?>
                                <input type="hidden" name="maint_form" value="<?php echo hash("sha256","11223344") ?>">
                                <div class="form-group">
                                    <label for="news-title">News Title</label>
                                    <input type="text" name="news_title" class="form-control" id="news-title" placeholder="News Title" value="<?php echo set_value("",$newsInfo->news_title) ?>">
                                </div>



                                <div class="form-group">
                                    <label for="news-text">News Text</label>
                                    <textarea class="form-control" name="news_text" id="news-text"><?php echo set_value("news_text",$newsInfo->news_text) ?></textarea>
                                </div>



                                <div class="form-group">
                                    <label for="active">Active:</label>
                                    <select name="activeness" class="form-control" id="active">
                                        <option<?php echo $newsInfo->status == 0? " selected='selected'": null ?> value="0">No</option>
                                        <option<?php echo $newsInfo->status == 1? " selected='selected'": null ?> value="1">Yes</option>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <button class="btn btn-purple" type="submit">Update News</button>
                                </div>

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
