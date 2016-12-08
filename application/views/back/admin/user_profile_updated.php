
<div id="content-container">	
<?php include('dash-header.php');?>

<div id="page-title">
        <h1 class="page-header text-overflow" ><?php echo translate('user_profile_update');?></h1>
    </div>
	  
        <div>
            <b>  <?php if($this->session->flashdata('success')): ?>
                                    <div class="alert alert-success">
                                        <?php  echo $this->session->flashdata('success'); ?>
									
                                    </div>
                                <?php endif?></b><br />
			
        
    </div>
	
	<div class="tab-base">
        <div class="panel">
            <div class="panel-body">
                <div class="tab-content">
	
                    <!-- LIST -->
                    <div class="tab-pane fade active in"  id="" >
					<input type="hidden" name="user_id" value="<?php echo set_value("",$customer['user'][0]['user_id']) ?> ">
						<a class="well-bottm" href="<?php echo site_url("admin/update_user_customer/".set_value("",$customer['user'][0]['user_id'])); ?>" style="font-weight: bold;">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-user">
                        <span class="vertical-align-middle">Back to this profile editing</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 user-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
				
						<a class="well-bottm" href="<?php echo base_url(); ?>index.php/admin/search_user_customer">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 manage-user">
                        <span class="vertical-align-middle">Browse Users</span>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 user-arrow">
                        <i class="fa fa-arrow-right"></i>
                    </div> 
                </a>
					
					
					</div>
				</div>
				
								
                </div>
            </div>
        </div>
    </div>
   
        
</div>

