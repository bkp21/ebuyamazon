<div id="content-container">
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('search_engine_settings'); ?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="" style="border:1px solid #ebebeb; border-radius:4px;">
                        <?php
                        foreach ($data as $row) {
                            if ($row['type'] == 'seo_page_title') {
                                $seo_page_title= $row['value'];
                            }
                            if ($row['type'] == 'seo_keyword_auto_generation') {
                                $seo_keyword = $row['value'];
                            }
                            if ($row['type'] == 'seo_flat_html') {
                                $seo_flat_html = $row['value'];
                            }
                            if ($row['type'] == 'seo_url_rewrite') {
                                $seo_url_rewrite = $row['value'];
                            }
                            if ($row['type'] == 'seo_meta_keyword') {
                                $seo_meta_keyword = $row['value'];
                            }
                            if ($row['type'] == 'seo_meta_description') {
                                $seo_meta_description = $row['value'];
                            }
                        }
                        ?>
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo translate('manage_search_engine_settings'); ?></h3>
                        </div>
                        <?php
                        echo form_open(base_url() . 'index.php/admin/search_engine_settings/update/', array(
                            'class' => 'form-horizontal',
                            'method' => 'post',
                            'name' => 'search_engine_settings'
                        ));
                        ?>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-1">
                                    <?php echo translate('page_(site_title  :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" name="seo_page_title" value="<?php echo $seo_page_title; ?>"  for="demo-hor-1" class="form-control required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-2">
                                    <?php echo translate('allow_keyword_auto-generation :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <select name="seo_keyword"  class="demo-cs-multiselect required">
                                        <option value="yes" <?php if ($seo_keyword == 'yes') {
                                        echo 'selected';
                                    } ?> ><?php echo translate('yes'); ?></option>
                                        <option value="no" <?php if ($seo_keyword == 'no') {
                                        echo 'selected';
                                    } ?>><?php echo translate('no'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-3">
                                    <?php echo translate('generate_flat_html_URLs_for_catalog_pages :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <select name="seo_flat_html"  class="demo-cs-multiselect required">
                                        <option value="yes" <?php if ($seo_flat_html == 'yes') {
                                        echo 'selected';
                                    } ?> ><?php echo translate('yes'); ?></option>
                                        <option value="no" <?php if ($seo_flat_html == 'no') {
                                        echo 'selected';
                                    } ?>><?php echo translate('no'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-4">
                                    <?php echo translate('convert_URL_characters_to_ASCII_characters :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <select name="seo_url_rewrite"  class="demo-cs-multiselect required">
                                        <option value="yes" <?php
                                        if ($seo_url_rewrite == 'yes') {
                                            echo 'selected';
                                        }
                                        ?> ><?php echo translate('yes'); ?></option>
                                        <option value="no" <?php
                                        if ($seo_url_rewrite == 'no') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo translate('no'); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-5">
                                    <?php echo translate('seo_meta_keyword :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <textarea name="seo_meta_keyword"  for="demo-hor-6" class="form-control"><?php echo $seo_meta_keyword; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-hor-6">
                                    <?php echo translate('seo_meta_description :'); ?>
                                </label>
                                <div class="col-sm-6">
                                    <textarea name="seo_meta_description"  for="demo-hor-6" class="form-control"><?php echo $seo_meta_description; ?></textarea> 
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success btn-save submitter" data-ing='<?php echo translate('updating..'); ?>' data-msg='<?php echo translate('form_settings_updated!'); ?>' type="submit"><?php echo translate('save_settings'); ?></button>
                        </div>
                        </form>
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
    var module = 'search_engine_settings';

</script>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>

