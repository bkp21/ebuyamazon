<div class="panel-body" id="demo_s">
    <div class="mnbtnn">
    <a class="" data-toggle="tooltip" onclick="ajax_set_full('manage_suscriber','<?php echo translate('successfully_imported!'); ?>','manage_subscriber_email');proceed('to_list');" data-original-title="manage_subscriber" data-container="body">
    <div class="btnnn" id="">
        <div class="largspan">
                <?php echo translate('manage_subscriber_email_addresses');?>
            </div>
        <div class="arroww">
            <i class="fa fa-arrow-left"></i>
        </div>
    </div>
    </a>
    </div>    
    <div class="mnbtnn">
        <a class="" data-toggle="tooltip" 
            onclick="ajax_set_full('export_user_email');proceed('to_list');" data-original-title="Export User Email" data-container="body">
    <div class="btnnn" id="">
        <div class="largspan">
        
                <?php echo translate('export_subscriber_email_addresses');?>
        </div>
        <div class="arroww">
            <i class="fa fa-arrow-left"></i>
        </div>
    </div>
    </a>
    </div>    
    <div class="mnbtnn">
        <a class="" data-toggle="tooltip" 
            onclick="ajax_set_full('import_suscriber','<?php echo translate('successfully_imported!'); ?>','import_suscriber_email');proceed('to_list');" data-original-title="import_suscriber" data-container="body">
    <div class="btnnn" id="">
        <div class="largspan">
        <?php echo translate('import_subscriber_email_addresses');?>
        </div>
        <div class="arroww">
           <i class="fa fa-arrow-left"></i>
        </div>
    </div>
    </a>
    </div>    
    <div class="mnbtnn">
        <a class="" data-toggle="tooltip" 
            onclick="ajax_set_full('export_suscriber_email');proceed('to_list');" data-original-title="Export Suscriber Email" data-container="body">
    <div class="btnnn" id="">
        <div class="largspan">
                <?php echo translate('export_user_email_addresses');?>
            </div>
        <div class="arroww">
            <i class="fa fa-arrow-left"></i>
        </div>
    </div> 
    </a>
    </div> 

</div>
<style>
.mnbtnn > a {
    color: #fff;
    cursor: pointer;
    font-size: 22px;
}
.mnbtnn > a:hover {
    color: #B8BCBA;
    cursor: pointer;
    font-size: 22px;
}
.btnnn {
    line-height: 99px;
}
.mnbtnn {
    float: left;
    margin: 0 10px 10px;
    width: 48%;
}

.largspan {
    background-color: #718da3;
    float: left;
    width: 81%;
    border-right:3px solid #fff;
    padding:0 11px;
}
.arroww {
    background-color: #718da3;
    color: #fff;
    float: left;
    font-size: 47px;
    line-height: 99px;
    text-align: center;
    width: 17%;
}
.arroww:hover{
    background-color:#FE8A49;
}
</style>