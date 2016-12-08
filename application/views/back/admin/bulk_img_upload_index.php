<!-- <script src="<?php echo base_url(); ?>template/back/js/dropzone.js"></script>  -->
<style>
    .dz-message span{
        font-size: 72pt;
        text-align: center;
        text-shadow: 5px 5px 10px grey;;
    }
</style>

<div id="content-container">
            <?php include('dash-header.php');?>
    <div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('Bulk Image Upload');?></h1>
    </div>

    <div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
                        <div class="panel panel-bordered-primary">
                            <!-- <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo translate('genreal_settings');?>
                                </h3>
                            </div> -->
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


                                    <?php echo form_open("admin/product_image_upload_process", array('class'=>'dropzone', 'id'=> 'uploader')); ?>
                                    <div id="my-dropzone" class="dz-message" data-dz-message><span>Drag your image here!</span></div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
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


