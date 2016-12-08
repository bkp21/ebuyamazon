<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content" style="overflow-x:auto;">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle expand-button">
                                <i id="icon-toggler" class="icon-th-large margin-left-8"></i>
                                <span class="menu-title">
                                    <?php echo translate('quick_links');?>
                                </span>
                            </a>
                        </li>
                        <div class="accordion acc-head-bg-color" id="accordion" >
                              <div class="panel-headings">
                                  <a class="accordion-toggle acc-head-styling textdecoration-none accordion-menuhovertoggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                      <i class="glyphicons-icon glyphicon-custom-sidebar cart_out margin-left-8" style="display:inline-block"></i>
                                      <span class="menu-title">
                                          <b> <?php echo translate('store_status');?></b> 
                                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                      </span>
                                   
                                  </a>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in">
                                 <div class="status">
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/admin/product">
                                            <span class="menu-title">
                                                <?php echo translate('products : ');?>
                                                <div style="float:right;"><?php echo $this->db->get('product')->num_rows(); ?></div>
                                            </span>
                                        </a>
                                        <a href="<?php echo base_url(); ?>index.php/admin/category">
                                            <span class="menu-title">
                                                <?php echo translate('categories : ');?>
                                                <div style="float:right;"><?php echo $this->db->get('category')->num_rows(); ?></div>
                                            </span>
                                        </a>
                                    </li>
                                        <div class="quickLinkSeparator"></div>
                                    <li>
                                        <a href="#">
                                            <span class="menu-title">
                                                <?php echo translate('order_in_progress: ');?>
                                                <div style="float:right;"><?php echo $this->db->like('payment_status', 'due')->get('sale')->num_rows(); ?></div>
                                            </span>
                                        </a>
                                        <a href="#">
                                            <span class="menu-title">
                                                <?php echo translate('ready_to_ship : ');?>
                                                <div style="float:right;"><?php
                                                  echo $this->db->like('payment_status', 'paid')
                                                    ->like('delivery_status', 'pending')
                                                    ->get('sale')->num_rows(); ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                </div>
                              </div>
                        </div>
						<div class="accordion acc-head-bg-color" id="accordion" style="display:none;" >
                              <div class="panel-headings">
                                  <a class="accordion-toggle acc-head-styling textdecoration-none accordion-menuhovertoggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                      <i class="glyphicons-icon glyphicon-custom-sidebar transfer" style="display:inline-block"></i>
                                      <span class="menu-title">
                                          <b> <?php echo translate('administrator_area');?></b> 
                                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                      </span>
                                   
                                  </a>
                              </div>
						<div id="collapseOne" class="panel-collapse collapse in">
                                 <div class="status">
						
                                     <li>
                                        <a href="<?php echo base_url(); ?>index.php/admin/search_product">
                                            <span class="menu-title">
                                                <?php echo translate('browse_products : ');?>
                                               
                                            </span>
                                        </a>
                                        <a href="<?php echo base_url(); ?>index.php/admin/category">
                                            <span class="menu-title">
                                                <?php echo translate('browse_categories : ');?>
                                               
                                            </span>
                                        </a>
										 <a href="<?php echo base_url(); ?>index.php/admin/user_customer_list">
                                            <span class="menu-title">
                                                <?php echo translate('browse_users : ');?>
                                               
                                            </span>
                                        </a>
										 <a href="<?php echo base_url(); ?>index.php/admin/category">
                                            <span class="menu-title">
                                                <?php echo translate('browse_orders : ');?>
                                               
                                            </span>
                                        </a>
                                    </li>
                                </div>
                              </div>
						</div>
			
			
			
			
                        <?php
                        if($this->crud_model->admin_permission('category') ||
						 $this->crud_model->admin_permission('product_search_result')||
                            $this->crud_model->admin_permission('brand') ||
                            $this->crud_model->admin_permission('product') ||
                            $this->crud_model->admin_permission('filters') ||    
                            $this->crud_model->admin_permission('stock') ||
                            $this->crud_model->admin_permission('promo_categories') ||
                            $this->crud_model->admin_permission('recommended_product_list')||
                            $this->crud_model->admin_permission('bulk_product_upload_step1')||
                            $this->crud_model->admin_permission('bulk_category_upload_index')||
                            $this->crud_model->admin_permission('bulk_img_upload_index')||
                            $this->crud_model->admin_permission('suppliers')||    
                            $this->crud_model->admin_permission('add_new_group')){
                            ?>
                            <!--Menu list item-->
                            <li <?php if($page_name=="category" ||
										$page_name=="product_insert" ||
										 $page_name=="product_search_result"||
                                         $page_name=="brand" ||
                                         $page_name=="product" ||
                                         $page_name=="filters" ||    
                                         $page_name=="stock" ||
                                         $page_name=="promo_categories" ||
                                         $page_name=="recommended_product_list" ||
                                         $page_name=="bulk_product_upload_step1"||
                                         $page_name=="bulk_category_upload_index"||
                                         $page_name=="bulk_img_upload_index"||
                                         $page_name=="suppliers"||
                                         $page_name=="add_new_group") { ?>
                                class="active-sub"
                         <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="menu-title" id="product">
                                        <?php echo translate('manage_products');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <!--PRODUCT------------------>
                                <ul class="collapse <?php if($page_name=="category" ||
															$page_name=="product_insert" ||
															 $page_name=="product_search_result"||
                                                             $page_name=="brand" ||
                                                             $page_name=="product" ||
                                                             $page_name=="filters" ||
                                                             $page_name=="stock" ||
                                                             $page_name=="promo_categories" ||
                                                             $page_name=="recommended_product_list" ||
                                                             $page_name=="bulk_product_upload_step1"||
                                                             $page_name=="bulk_category_upload_index"||
                                                             $page_name=="bulk_img_upload_index"||
                                                             $page_name=="suppliers"||
                                                             $page_name=="add_new_group"){ ?>
                                    in
                                <?php } ?> ">

                                    <?php
                                    if($this->crud_model->admin_permission('category')){
                                        ?>
                                        <li <?php if($page_name=="category"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/category">
                                                
                                                <?php echo translate('category');?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    if($this->crud_model->admin_permission('search_product')){
                                        ?>
                                        <li <?php if($page_name=="search_product"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/search_product">
                                                
                                                <?php echo translate('all_products');?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    if($this->crud_model->admin_permission('brand')){
                                        ?>
                                        <li <?php if($page_name=="brand"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/brand">
                                                
                                                <?php echo translate('brands');?>
                                            </a>
                                        </li>
                                    <?php
                                    } 
                                   if($this->crud_model->admin_permission('filters')){
                                    ?>
                                    <li <?php if($page_name=="filters"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/filters">
                                        	
                                            	<?php echo translate('filters');?>
                                        </a>
                                    </li>
                                    <?php
                                    }  
                                    if($this->crud_model->admin_permission('stock')){
                                    ?>
                                    <li <?php if($page_name=="stock"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/stock">
                                            
                                            <?php echo translate('product_stock');?>
                                        </a>
                                    </li>
                                    <?php
                                    }
                                    if($this->crud_model->admin_permission('promo_categories')){
                                    ?>
                                    <li <?php if($page_name=="promo_categories"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/promo_categories">
                                            
                                            <?php echo translate('promo_categories');?>
                                        </a>
                                    </li>
                                    <?php
                                    }
                                    if($this->crud_model->admin_permission('recommended_product_list')){
                                    ?>
                                    <li <?php if($page_name=="recommended_product_list"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/recommended_products">
                                            
                                            <?php echo translate('recommended_products');?>
                                        </a>
                                    </li>
                                    <?php
                                    }
                                    if($this->crud_model->admin_permission('bulk_product_upload')){
                                    ?>
                                    <li <?php if($page_name=="bulk_product_upload_step1"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/bulk_product_upload">
                                            
                                            <?php echo translate('bulk_product_upload');?>
                                        </a>
                                    </li>
                                    <?php 
                                    }
                                    if($this->crud_model->admin_permission('bulk_category_upload')){
                                    ?>
                                    <li <?php if($page_name=="bulk_category_upload_index"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/bulk_category_upload">
                                            
                                            <?php echo translate('bulk_category_upload');?>
                                        </a>
                                    </li>
                                    <?php 
                                    }
                                    if($this->crud_model->admin_permission('bulk_img_upload_index')){
                                    ?>
                                    <li <?php if($page_name=="bulk_img_upload_index"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/bulk_product_image_upload">
                                            
                                            <?php echo translate('bulk_product_image_upload');?>
                                        </a>
                                    </li>
                                    <?php 
                                    }
                                    if($this->crud_model->admin_permission('suppliers')){
                                    ?>
                                    <li <?php if($page_name=="suppliers"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/suppliers">
                                            
                                            <?php echo translate('suppliers');?>
                                        </a>
                                    </li>
                                    <?php
                                    }
                                    if($this->crud_model->admin_permission('add_new_group')){
                                    ?>
                                    <li <?php if($page_name=="add_new_group"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/add_new_group">
                                            
                                            <?php echo translate('weight_based_price');?>
                                        </a>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php } ?>
                            <?php if($this->crud_model->admin_permission('attributes')||
                                      $this->crud_model->admin_permission('attribute_groups')|| 
                                      $this->crud_model->admin_permission('product_field_group')||
                                      $this->crud_model->admin_permission('product_field')||
                                      $this->crud_model->admin_permission('custom_options')||
                                      $this->crud_model->admin_permission('download')||
                                      $this->crud_model->admin_permission('manage_tags')) { ?>
                                <!--Menu list item-->
                                <li <?php if ($page_name == "attributes" ||
                                              $page_name == "attribute_groups" ||
                                              $page_name == "product_field_group" ||
                                              $page_name == "product_field" ||
                                              $page_name == "custom_options" ||
                                              $page_name == "download" ||
                                              $page_name == "manage_tags"
                                             ) { ?>
                                        class="active-sub"
                                   <?php } else { echo 'class="hidden"';}?> >
                                    <a href="#">
                                        <i class="fa  fa-group"></i>
                                        <span class="menu-title" id="attribute">
                                            <?php echo translate('attributes_&_properties'); ?>
                                        </span>
                                        <i class="fa arrow"></i>
                                    </a>
                                    <!------   attributes----------------->
                                    <ul class="collapse <?php if ($page_name == "attributes" ||
                                                                  $page_name == "attribute_groups" ||
                                                                  $page_name == "product_field_group" ||
                                                                  $page_name == "product_field" ||
                                                                  $page_name == "custom_options" ||
                                                                  $page_name == "download" ||
                                                                  $page_name == "manage_tags"
                                            ) { ?>in<?php } ?> " >
                                        <li <?php if ($page_name == "attributes" ||
                                                      $page_name == "attribute_groups"|| 
                                                      $page_name == "product_field_group" ||
                                                      $page_name == "product_field" ||
                                                      $page_name == "custom_options"
                                                      ) { ?>
                                                class="active-sub"
                                            <?php } ?>>
                                            <a href="#">
                                                <span class="menu-title">
                                                    <?php echo translate('manage_attributes'); ?>
                                                </span>
                                                <i class="fa arrow"></i>
                                            </a>
                                            <ul class="collapse <?php if ($page_name == "attributes" ||
                                                      $page_name == "attribute_groups"
                                                    ) { ?> in <?php } ?> ">
                                                <?php
                                                if ($this->crud_model->admin_permission('attributes')) {
                                                ?>
                                                    <li <?php if ($page_name == "attributes") { ?> class="active-link" <?php } ?> >
                                                        <a href="<?php echo base_url(); ?>index.php/admin/attributes">
                                                            
                                                            <span class="menu-title">
                                                                <?php echo translate('attributes'); ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                if ($this->crud_model->admin_permission('attribute_groups')) {
                                                ?>
                                                    <li <?php if ($page_name == "attribute_groups") { ?> class="active-link" <?php } ?> >
                                                        <a href="<?php echo base_url(); ?>index.php/admin/attribute_groups">
                                                            
                                                            <span class="menu-title">
                                                                <?php echo translate('attribute_groups'); ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                                </ul>
                                             </li>
                                             <li <?php if ($page_name == "product_field_group" ||
                                                           $page_name == "product_field"||
                                                           $page_name == "custom_options") { ?>
                                                 
                                                class="active-sub"
                                            <?php } ?>>
                                            <a href="#">
                                                <span class="menu-title">
                                                    <?php echo translate('custom_product_properties'); ?>
                                                </span>
                                                <i class="fa arrow"></i>
                                            </a>
                                            <ul class="collapse <?php if ($page_name == "product_field_group" ||
                                                                          $page_name == "product_field" ||
                                                                          $page_name == "custom_options") { ?> in <?php } ?> ">
                                                <?php
                                                if ($this->crud_model->admin_permission('product_field_group')) {
                                                ?>
                                                    <li <?php if ($page_name == "product_field_group") { ?> class="active-link" <?php } ?> >
                                                        <a href="<?php echo base_url(); ?>index.php/admin/product_field_group">
                                                            
                                                            <span class="menu-title">
                                                                <?php echo translate('product_field_group'); ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php
                                                }
                                                if ($this->crud_model->admin_permission('product_field')) {
                                                ?>
                                                    <li <?php if ($page_name == "product_field") { ?> class="active-link" <?php } ?> >
                                                        <a href="<?php echo base_url(); ?>index.php/admin/product_field">
                                                            
                                                            <span class="menu-title">
                                                                <?php echo translate('product_field'); ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php
                                                }
                                                if ($this->crud_model->admin_permission('custom_options')) {
                                                ?>
                                                    <li <?php if ($page_name == "custom_options") { ?> class="active-link" <?php } ?> >
                                                        <a href="<?php echo base_url(); ?>index.php/admin/custom_options">
                                                            
                                                            <span class="menu-title">
                                                                <?php echo translate('custom_options'); ?>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <?php
                                           if($this->crud_model->admin_permission('download')){
                                         ?>
                                               <li <?php if($page_name=="download"){ ?> class="active-link" <?php } ?> >
                                                   <a href="<?php echo base_url(); ?>index.php/admin/download">
                                                       <i class="fa fa-download"></i>
                                                       <?php echo translate('download');?>
                                                   </a>
                                               </li>
                                        <?php
                                           }
                                           if($this->crud_model->admin_permission('manage_tags')){
                                        ?>
                                            <li <?php if($page_name=="manage_tags"){ ?> class="active-link" <?php } ?> >
                                                 <a href="<?php echo base_url(); ?>index.php/admin/manage_tags">
                                                         
                                                         <?php echo translate('manage_tags');?>
                                                 </a>
                                             </li>
                                        <?php
                                        }
                                        ?>          
                                    </ul>
                                </li>
                                <?php } ?>
                                <?php
                                if($this->crud_model->admin_permission('blog')||
                                   $this->crud_model->admin_permission('blog_category')){ ?>
                                <!--Menu list item-->
                                    <li <?php if($page_name=="blog" || 
                                                 $page_name=="blog_category" ){ ?>
                                        class="active-sub"
                                   <?php } else { echo 'class="hidden"';}?> >
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                        <span class="menu-title">
                                            <?php echo translate('blog');?>
                                        </span>
                                            <i class="fa arrow"></i>
                                        </a>

                                        <ul class="collapse <?php if($page_name=="blog" || 
                                                                     $page_name=="blog_category"){ ?>
                                            in <?php } ?>" >

                                            <?php
                                            if($this->crud_model->admin_permission('blog')){
                                            ?>
                                                <li <?php if($page_name=="blog"){?> class="active-link" <?php } ?> >
                                                    <a href="<?php echo base_url(); ?>index.php/admin/blog/">
                                                        
                                                        <?php echo translate('all_blogs');?>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if($this->crud_model->admin_permission('blog_category')){
                                            ?>
                                                <li <?php if($page_name=="blog_category"){?> class="active-link" <?php } ?> >
                                                    <a href="<?php echo base_url(); ?>index.php/admin/blog_category/">
                                                        
                                                        <?php echo translate('all_blog_categories');?>
                                                    </a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                }
                                ?>

                        <!--SALE-------------------->
                        <?php if($this->crud_model->admin_permission('sales') ||
                            $this->crud_model->admin_permission('rma_info') ||
                            $this->crud_model->admin_permission('latest_orders') ||
                            $this->crud_model->admin_permission('sales_statistics')){ ?>
                            <!--Menu list item-->
                            <li <?php if ($page_name == 'sales' ||
                                    $page_name == 'rma_info' ||
                                    $page_name == 'latest_orders' ||
                                    $page_name == 'sales_statistics'
                                ){ ?>
                                    class="active-sub"
                              <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-usd"></i>
                                        <span class="menu-title">
                                            <?=translate('sales_info')?>
                                        </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <ul class="collapse
                                    <?php if ($page_name == 'sales' ||
                                    $page_name == 'rma_info' ||
                                    $page_name == 'latest_orders' ||
                                    $page_name == 'sales_statistics'
                                ){
                                    ?>
                                    in
                                <?php } ?>">
                                    <?php
                                    if($this->crud_model->admin_permission('sales')){
                                    ?>
                                    <li <?php if ($page_name == 'sales'){ ?>class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/sales')?>">
                                            
                                            <?=translate('sales')?>
                                        </a>
                                    </li>
                                    <?php } 
                                     if($this->crud_model->admin_permission('latest_orders')){
                                    ?>
                                    <li <?php if ($page_name == 'latest_orders') { ?>class="active-link" <?php } ?> >
                                        <a href="<?= base_url('admin/latest_orders'); ?>">
                                            
                                            <?= translate('latest_orders'); ?>
                                        </a>
                                    </li>
                                    <?php } 
                                     if($this->crud_model->admin_permission('sales_statistics')){
                                    ?>
                                    <li <?php if ($page_name == 'sales_statistics'){ ?>class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/sales_statistics')?>">
                                            
                                            <?=translate('sales_statistics')?>
                                        </a>
                                    </li>
                                     <?php } 
                                     if($this->crud_model->admin_permission('rma_info')){
                                     ?>
                                    <li <?php if ($page_name == 'rma_info'){ ?>class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/rma_info')?>">
                                            
                                            <?=translate('rma_info')?>
                                        </a>
                                    </li>
                                     <?php } ?>
                                </ul>
                            </li>

                        <?php } ?>

                        <?php if($this->crud_model->admin_permission('report') ||
                                $this->crud_model->admin_permission('report_stock') ||
                                $this->crud_model->admin_permission('report_wish') ||
                                $this->crud_model->admin_permission('top_sellers') ||
                                $this->crud_model->admin_permission('top_buyers')||
                                $this->crud_model->admin_permission('product_comments')
                            ){
                        ?>
                            <!--Menu list item-->
                            <li
                                <?php if ($page_name == 'report' ||
                                        $page_name == 'report_stock' ||
                                        $page_url == 'top_sellers' ||
                                        $page_name == 'top_buyers' ||
                                        $page_name == 'report_wish'||
                                        $page_name == 'product_comments'
                                    ){
                                ?>
                                    class="active-sub"
                                <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-file-text"></i>
                                        <span class="menu-title">
                                            <?=translate('reports')?>
                                        </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <!--REPORT-------------------->
                                <ul class="collapse
                                    <?php if ($page_name == "report" ||
                                            $page_name == "report_stock" ||
                                            $page_url == "top_sellers" ||
                                            $page_name == "top_buyers" ||
                                            $page_name == "report_wish" ||
                                            $page_name == "product_comments"
                                        ){
                                    ?> in <?php } ?>">
                                    <?php if($this->crud_model->admin_permission('report')){ ?>
                                    <li <?php if ($page_name == 'report'){ ?>class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/report')?>">
                                            
                                            <?=translate('product_compare')?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if($this->crud_model->admin_permission('report_stock')){ ?>
                                    <li <?php if ($page_name == 'report_stock'){ ?> class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/report_stock')?>">
                                            
                                            <?=translate('product_stock')?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                     <?php if($this->crud_model->admin_permission('report_wish')){ ?>
                                    <li <?php if ($page_name == 'report_wish'){ ?> class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/report_wish')?>">
                                            
                                            <?=translate('product_wishes')?>
                                        </a>
                                    </li>
                                     <?php } ?>
                                    <?php if($this->crud_model->admin_permission('top_sellers')){ ?>
                                    <li <?php if ($page_url == 'top_sellers'){ ?> class="active-link" <?php } ?> >
                                        <a href="<?=base_url('admin/top_sellers')?>">
                                            
                                            <?=translate('top_sellers')?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if($this->crud_model->admin_permission('top_buyers')){ ?>
                                    <li <?php if ($page_name == 'top_buyers'){ ?> class="active-link" <?php } ?> >
                                        <a href="<?=base_url()?>index.php/admin/top_buyers">
                                            
                                            <?=translate('top_buyers')?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if($this->crud_model->admin_permission('product_comments')){ ?>
                                    <li <?php if($page_name=="product_comments"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/product_comments">
                                            
                                            <?php echo translate('product_comments');?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>

                        <?php
                        if($this->crud_model->admin_permission('coupon')){
                            ?>
                            <!--Menu list item-->
                            <?php if($this->crud_model->admin_permission('coupon')){ ?>
                            <li <?php if($page_name=="coupon"){?> class="active-link" <?php } else {echo 'class="hidden"';} ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/coupon">
                                    <i class="fa fa-tag"></i>
                                    <span class="menu-title">
                                        <?php echo translate('discount_coupon');?>
                                    </span>
                                </a>
                            </li>
                            <?php } ?>
                            <!--Menu list item-->
                            <?php
                        }
                        ?>
                        <?php
                        if ($this->crud_model->admin_permission('vendor') ||
                            $this->crud_model->admin_permission('api_users')||
                            $this->crud_model->admin_permission('membership_payment')||
                            $this->crud_model->admin_permission('membership') ||
                            $this->crud_model->admin_permission('manage_news') ||
                            $this->crud_model->admin_permission('vendor_reviews') ||
                            $this->crud_model->admin_permission('vendor_services') ||
                            $this->crud_model->admin_permission('vendor_reports') ||   
                            $this->crud_model->admin_permission('ordered_vendor_services') || 
                            $this->crud_model->admin_permission('latest_subscriptions') ||
                            $this->crud_model->admin_permission('vendor_monthly_fees')  || 
                            $this->crud_model->admin_permission('merchants_packages')    
                        ) {
                        ?>
                            <!--Menu list item-->
                            <li <?php if ($page_name=="vendor" ||
                                    $page_name=="api_users" ||
                                    $page_name=="membership_payment" ||
                                    $page_name=="membership"||
                                    $page_name=="news_list" ||
                                    $page_name=="vendor_reviews" ||
                                    $page_name=="vendor_services" ||
                                    $page_url=="vendor_reports" ||
                                    $page_name=="ordered_vendor_services" ||
                                    $page_name=="vendor_monthly_fees" ||
                                    $page_name=="merchants_packages"
                                ) { ?>
                                class="active-sub"
                                <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="menu-title">
                                        <?php echo translate('vendors');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <!--REPORT-------------------->
                                <ul class="collapse
                                    <?php if ($page_name=="vendor" ||
                                            $page_name=="api_users" ||
                                            $page_name=="membership_payment" ||
                                            $page_name=="membership" ||
                                            $page_name=="vendor_reviews" ||
                                            $page_name=="news_list" ||
                                            $page_name=="vendor_services" ||
                                            $page_url=="vendor_reports" ||
                                            $page_name=="ordered_vendor_services" ||
                                            $page_name=="latest_subscriptions" ||
                                            $page_name=="vendor_monthly_fees" ||
                                            $page_name=="merchants_packages"
                                        ) { ?> in <?php } ?> ">
                                    <?php if($this->crud_model->admin_permission('vendor')){ ?>
                                    <li <?php if($page_name=="vendor"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/vendor">
                                            
                                            <?php echo translate('vendor_list');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('api_users')){ ?>
                                    
                                    <li <?php if($page_name == 'api_users'){ ?> class="active-link" <?php } ?> >
                                        <a href="<?=base_url(); ?>index.php/admin/api_users">
                                            
                                            <?=translate('api_users');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('membership_payment')){ ?>
                                    <li <?php if($page_name=="membership_payment"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/membership_payment">
                                            
                                            <?php echo translate('membership_payments');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('membership')){ ?>
                                    <li <?php if($page_name=="membership"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/membership">
                                            
                                            <?php echo translate('membership_type');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('news_list')){ ?>
                                    <li <?php if($page_name=="news_list"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/manage_news">
                                            
                                            <?php echo translate('manage_news');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_reviews')){ ?>
                                    <li <?php if($page_name=="vendor_reviews"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/vendor_reviews">
                                            
                                            <?php echo translate('vendor_reviews_and_rating');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_reports')){ ?>
                                        <li <?php if($page_url=="vendor_reports"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_reports">
                                                
                                                <?php echo translate('vendor_reports');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('ordered_vendor_services')){ ?>
                                    <li <?php if($page_name=="ordered_vendor_services"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/ordered_vendor_services">
                                            
                                            <?php echo translate(' ordered_vendor_services');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_services')){ ?>
                                    <li <?php if($page_name=="vendor_services"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/vendor_services">
                                            
                                            <?php echo translate('vendor_services');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('latest_subscriptions')){ ?>
                                    <li <?php if ($page_name == 'latest_subscriptions'){ ?> class="active-link" <?php } ?> >
                                        <a href="<?= base_url('admin/latest_subscriptions'); ?>">
                                            
                                            <?= translate('latest_subscriptions'); ?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_monthly_fees')){ ?>
                                    <li <?php if($page_name=="vendor_monthly_fees"){ ?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/vendor_monthly_fees">
                                            
                                            <?php echo translate('vendor_monthly_fees');?>
                                        </a>
                                    </li>
                                    <?php } if ($this->crud_model->admin_permission('merchants_packages')) { ?>
                                        <li <?php if ($page_name=="merchants_packages") { ?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/merchants_packages"> 
                                                
                                                <?php echo translate('vendor_packages');?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if($this->crud_model->admin_permission('tickets')||
                                $this->crud_model->admin_permission('new_tickets')||
                                $this->crud_model->admin_permission('on_hold_tickets')||
                                $this->crud_model->admin_permission('closed_tickets')||
                                $this->crud_model->admin_permission('pending_tickets')) { ?>
                            
                            <!--Menu list item-->
                            <li
                                <?php if($page_url == 'tickets' ||
                                    $page_url == 'new_tickets' ||
                                    $page_url == 'on_hold_tickets' ||
                                    $page_url == 'closed_tickets' ||
                                    $page_url == 'pending_tickets'
                                ){ ?>
                                    class="active-sub"
                               <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span class="menu-title">
                                        <?=translate('tickets');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <!--REPORT-------------------->
                                <ul class="collapse
                                    <?php if($page_url == 'tickets' ||
                                    $page_url == 'new_tickets' ||
                                    $page_url == 'on_hold_tickets' ||
                                    $page_url == 'closed_tickets' ||
                                    $page_url == 'pending_tickets'
                                ){ ?>
                                          in
                                <?php } ?> ">
                                   <?php  if ($this->crud_model->admin_permission('tickets')) { ?>
                                    <li <?php if($page_url == "tickets"){ ?> class="active-link" <?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/tickets">
                                            
                                            <?=translate('tickets_list');?>
                                        </a>
                                    </li>
                                   <?php } if ($this->crud_model->admin_permission('closed_tickets')) { ?>
                                    <li <?php if($page_url == "closed_tickets"){ ?> class="active-link" <?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/closed_tickets">
                                            
                                            <?=translate('closed_tickets');?>
                                        </a>
                                    </li>
                                   <?php } if ($this->crud_model->admin_permission('new_tickets')) { ?>
                                    <li <?php  if($page_url == "new_tickets"){ ?> class="active-link" <?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/new_tickets">
                                            
                                            <?=translate('new_tickets');?>
                                        </a>
                                    </li>
                                    <?php  } if ($this->crud_model->admin_permission('on_hold_tickets')) { ?>
                                    <li <?php if($page_url == "on_hold_tickets"){ ?> class="active-link" <?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/on_hold_tickets">
                                            
                                            <?=translate('on_hold_tickets');?>
                                        </a>
                                    </li>
                                    <?php } if ($this->crud_model->admin_permission('pending_tickets')) { ?>
                                    <li <?php if($page_url == "pending_tickets"){ ?> class="active-link" <?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/pending_tickets">
                                            
                                            <?=translate('pending_tickets');?>
                                        </a>
                                    </li>
                                <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php
                        if($this->crud_model->admin_permission('page')){
                        ?>
                            <li <?php if($page_name=="page"){?> class="active-link" 
							<?php } else { echo 'class="hidden"';}?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/page/">
                                    <i class="fa fa-file-text"></i>
                                    <span class="menu-title">
                                        <?php echo translate('create_new_page');?>
                                    </span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>

                        <?php
                        if($this->crud_model->admin_permission('slider') ||
                            $this->crud_model->admin_permission('slides')){
                            ?>
                            <!--Menu list item-->
                            <li <?php if($page_name=="slider" ||
                                         $page_name=="slides"){ ?>
                                class="active-sub"
                           <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-sliders"></i>
                                    <span class="menu-title">
                                        <?php echo translate('slider_settings');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <!--REPORT-------------------->
                                <ul class="collapse <?php if($page_name=="slider" ||
                                    $page_name=="slides" ){?> in  <?php } ?> ">
                                    <?php  if ($this->crud_model->admin_permission('slider')) { ?>
                                    <li <?php if($page_name=="slider"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/slider">
                                            
                                            <?php echo translate('layer_slider');?>
                                        </a>
                                    </li>
                                    <?php } if ($this->crud_model->admin_permission('slides')) {  ?>
                                    <li <?php if($page_name=="slides"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/slides">
                                            
                                            <?php echo translate('top_slides');?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                        <?php if($this->crud_model->admin_permission('banner')){  ?>
                            <li <?php if($page_name=="banner"){ ?> class="active-sub" 
							<?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-desktop"></i>
                                    <span class="menu-title">
                                		<?php echo translate('front_settings');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <!--Submenu-->
                                <ul class="collapse <?php if($page_name=="banner"){ ?> in
                                 <?php } ?>">
                                    <?php if($this->crud_model->admin_permission('banner')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="banner"){?> class="active-link" <?php } ?>>
                                            <a href="<?php echo base_url(); ?>index.php/admin/banner">
                                                
                                                <?php echo translate('banner_settings');?>
                                            </a>
                                        </li>
                                        <!--Menu list item-->
                                        <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                        <?php if($this->crud_model->admin_permission('manage_admin')||
                                $this->crud_model->admin_permission('admin')||
                                $this->crud_model->admin_permission('role')){  ?>
                             
							    <li <?php if($page_name == 'manage_admin' ||
                                    $page_name == 'admin' ||
                                    $page_name == 'role'){ ?> class="active-sub" 
									<?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-lock"></i>
                                        <span class="menu-title">
                                            <?=translate('admin_management');?>
                                        </span>
                                    <i class="fa arrow"></i>
                                </a>
                            <ul class="collapse <?php if($page_name == 'manage_admin' ||
                                                         $page_name == 'admin' ||
                                                         $page_name == 'role'){ ?> in
                                <?php } ?>">
                                <li <?php if($page_name == 'manage_admin'){ ?>class="active-link"<?php } ?> >
                                    <a href="<?=base_url(); ?>index.php/admin/manage_admin">
                                        
                                        <?=translate('manage_profile');?>
                                    </a>
                                </li>
                                <?php if($this->crud_model->admin_permission('admin')){ ?>
                                    <li<?php if($page_name == 'admin'){ ?> class="active-link"<?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/admins">
                                            
                                            <?=translate('all_admins');?>
                                        </a>
                                    </li>
                                <?php } if($this->crud_model->admin_permission('role')){ ?>    
                                    <li<?php if($page_name == 'role'){ ?> class="active-link" <?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/role">
                                            
                                            <?=translate('admin_permissions');?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } ?>
						
						
                        <!--  user menu start -->

                        <?php
                        if($this->crud_model->admin_permission('user_customer_list') ||
                           $this->crud_model->admin_permission('search_user_customer')||
						   $this->crud_model->admin_permission('update_user_customer')||
                           $this->crud_model->admin_permission('order_attachment')||
                           $this->crud_model->admin_permission('subscribed_products')||
                           $this->crud_model->admin_permission('browse_donations') ||
                           $this->crud_model->admin_permission('export_quickbooks') ||
                           $this->crud_model->admin_permission('user')){
                        ?>
						 
                            <li <?php if($page_name=="user_customer_list" ||
                                         $page_name=="add_user_customer"  ||
                                         $page_name=="search_user_customer" ||
										 $page_name=="update_user_customer" ||
										 $page_name=="user_profile_updated" ||
                                         $page_name=="order_attachment" ||
                                         $page_name=="subscribed_products" ||
                                         $page_name=="browse_donations" ||
										 $page_name=="rma_info_list" ||
                                         $page_name=="export_quickbooks" ||
										  $page_name=="user"){ ?>
                                class="active-sub"
                           <?php } else { echo 'class="hidden"';}?> >
                                <a href="#"><i class="fa fa-user"></i>
                                    <span class="menu-title">
                                            <?php echo translate('users_&_orders');?>
                                    </span><i class="fa arrow"></i>
                                </a>

                                <ul class="collapse <?php if($page_name=="user_customer_list" ||
                                        $page_name=="search_user_customer" ||
										 $page_name=="update_user_customer" ||
										 $page_name=="user_profile_updated" ||
                                        $page_name=="add_user_customer"  ||
                                        $page_name=="order_attachment" ||
                                        $page_name=="subscribed_products" ||
                                        $page_name=="browse_donations" ||
										$page_name=="rma_info_list" ||
                                        $page_name=="export_quickbooks" ||
                                        $page_name=="user"
                                        ){?> in <?php } ?>" >

                                    <?php if($this->crud_model->admin_permission('user_customer_list')){
                                        ?>
                                        <li <?php if($page_name=="search_user_customer"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/search_user_customer">
                                                
                                                <?php echo translate('browse_users');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('customer_groups')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="customer_groups"){?> class="active-link" <?php } ?>>
                                            <a href="<?php echo base_url(); ?>index.php/admin/customer_groups">
                                                
                                                <?php echo translate('customer_groups');?>
                                            </a>
                                        </li>
										<?php } if($this->crud_model->admin_permission('search_order')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="search_order"){?> class="active-link" <?php } ?>>
                                            <a href="<?php echo base_url(); ?>index.php/admin/search_order">
                                                
                                                <?php echo translate('browse_orders');?>
                                            </a>
                                        </li>
										<?php } if($this->crud_model->admin_permission('manual_order')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="manual_order"){?> class="active-link" <?php } ?>>
                                            <a href="<?php echo base_url(); ?>index.php/admin/manual_order">
                                                
                                                <?php echo translate('manual_order');?>
                                            </a>
                                        </li>
                                   <?php } if($this->crud_model->admin_permission('order_attachment')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="order_attachment"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/order_attachment">
                                                
                                                <?php echo translate('order_attachment');?>
                                            </a>
                                        </li>
                                   <?php }  if($this->crud_model->admin_permission('subscribed_products')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="subscribed_products"){?> class="active-link" <?php } ?>>
                                            <a href="<?php echo base_url(); ?>index.php/admin/subscribed_products">
                                                
                                                <?php echo translate('subscribed_products');?>
                                            </a>
                                        </li>
                                   <?php } if($this->crud_model->admin_permission('browse_donations')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="browse_donations"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/browse_donations">
                                                
                                                <?php echo translate('browse_donations');?>
                                            </a>
                                        </li>
                                   <?php } if($this->crud_model->admin_permission('rma_info')){ ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="rma_info"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/rma_info">
                                                
                                                <?php echo translate('RMA_info');?>
                                            </a>
                                        </li>
                                   <?php } if($this->crud_model->admin_permission('export_quickbooks')){  ?>
                                        <!--Menu list item-->
                                        <li <?php if($page_name=="export_quickbooks"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/export_quickbooks">
                                                <i class="fa fa-users"></i>
                                                <span class="menu-title">
                                                    <?php echo translate('export_quickbooks');?>
                                                </span>
                                            </a>
                                        </li>
                                        <!--Menu list item-->
                                   <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <!-- user menu end -->
                        <!-- email & sms menu  starts -->

                        <?php
                        if($this->crud_model->admin_permission('newsletter') ||
                            $this->crud_model->admin_permission('contact_message') ||
                            $this->crud_model->admin_permission('product_update_mail')||
                            $this->crud_model->admin_permission('sent_email_archive')||
                            $this->crud_model->admin_permission('email_template')||
                            $this->crud_model->admin_permission('notification_emails')||
                            $this->crud_model->admin_permission('email_management')||
                            $this->crud_model->admin_permission('sms_notifications')||
                            $this->crud_model->admin_permission('send_sms')||
                            $this->crud_model->admin_permission('templates_email')){ ?>
                            <li <?php if($page_name=="newsletter" ||
                                $page_name=="contact_message"     ||
                                $page_name=="product_update_mail" ||
                                $page_name=="sent_email_archive"  ||
                                $page_name=="email_template"      ||
                                $page_name=="notification_emails" ||
                                $page_name=="email_management"  ||
                                $page_name=="sms_notifications" ||
                                $page_name=="send_sms"  ||
                                $page_name=="templates_email"){ ?>
                                
                                class="active-sub"
                           <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                  <i class="fa fa-envelope"></i>
                                    <span class="menu-title">
                                            <?php echo translate('messaging');?>
                                    </span>
                                   <i class="fa arrow"></i>
                                </a>

                                <ul class="collapse <?php if($page_name=="newsletter" ||
                                                             $page_name=="contact_message" ||
                                                             $page_name=="product_update_mail" ||
                                                             $page_name=="sent_email_archive" ||
                                                             $page_name=="email_template"      ||
                                                             $page_name=="notification_emails" ||
                                                             $page_name=="email_management"  ||
                                                             $page_name=="sms_notifications" ||
                                                             $page_name=="send_sms"  ||
                                                             $page_name=="templates_email")
                                    {?> in <?php } ?>">

                                    <?php if($this->crud_model->admin_permission('newsletter')){ ?>
                                        <li <?php if($page_name=="newsletter"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/newsletter">
                                                
                                                <?php echo translate('newsletters');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('contact_message')){ ?>
                                        <li <?php if($page_name=="contact_message"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/contact_message">
                                                
                                                <?php echo translate('contact_messages');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('product_update_mail')){ ?>
                                        <li <?php if($page_name=="product_update_mail"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/product_update_mail">
                                                
                                                <?php echo translate('product_update_mail');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('sent_email_archive')){ ?>
                                        <li <?php if($page_name=="sent_email_archive"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/sent_email_archive">
                                                
                                                <?php echo translate('sent_email_archive');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('email_template')){ ?>
                                        <li <?php if($page_name=="email_template"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/email_template">
                                                
                                                <?php echo translate('default_email_top_&_bottom');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('notification_emails')){ ?>
                                        <li <?php if($page_name=="notification_emails"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/notification_emails">
                                                
                                                <?php echo translate('notification_emails');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('email_management')){ ?>
                                        <li <?php if($page_name=="email_management"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/email_management">
                                                
                                                <?php echo translate('email_list_management');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('sms_notifications')){ ?>
                                        <li <?php if($page_name=="sms_notifications"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/sms_notifications">
                                                
                                                <?php echo translate('SMS notifications');?>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('send_sms')){ ?>
                                        <li <?php if($page_name=="send_sms"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/send_sms">
                                                
                                                <?php echo translate('send_SMS');?>
                                            </a>
                                        </li>
                                     <?php } if($this->crud_model->admin_permission('templates_email')){
                                        ?>
                                        <li <?php if($page_name=="templates_email"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/templates_email">
                                                
                                                <?php echo translate('email_template');?>
                                            </a>
                                        </li>
                                     <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
							
                       
						
                        <?php if($this->crud_model->admin_permission('seo')){ ?>
                            <li <?php if($page_name=="seo_settings"){?> class="active-link" <?php } else { echo 'class="hidden"';}?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/seo_settings">
                                    <i class="fa fa-search-plus"></i>
                                <span class="menu-title">
                                    <?php echo translate('seo');?>
                                </span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if($this->crud_model->admin_permission('language')){ ?>
                            <li <?php if($page_name=="language"){?> class="active-link" <?php } else { echo 'class="hidden"';}?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/language_settings">
                                    <i class="fa fa-language"></i>
                                <span class="menu-title">
                                    <?php echo translate('language');?>
                                </span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>

                        <?php if($this->crud_model->admin_permission('business_settings') ||
                            $this->crud_model->admin_permission('site_settings') ||
                            $this->crud_model->admin_permission('shipping_statuses')) { ?>
                            <!--Menu list item-->
                            <li <?php if($page_name == 'business_settings' ||
                                         $page_name == 'site_settings'||
                                         $page_name == 'shipping_statuses'){ ?> class="active-sub"
                                <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-sliders"></i>
                                    <span class="menu-title">
                                        <?=translate('business_settings');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <ul class="collapse
                                    <?php if($page_name == 'business_settings' ||
                                             $page_name == 'site_settings'||
                                             $page_name == 'shipping_statuses'){ ?>
                                        in
                                <?php } ?> ">
                                    <?php if($this->crud_model->admin_permission('business_settings')){ ?>
                                    <li<?php if($page_name == "business_settings"){ ?> class="active-link"<?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/business_settings">
                                            
                                            <?=translate('business_settings');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('site_settings')){ ?>
                                    <li <?php if($page_name == "site_settings"){ ?>class="active-link"<?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/site_settings">
                                            
                                            <?=translate('site_settings');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('shipping_statuses')){ ?>
                                    <li <?php if($page_name == "shipping_statuses"){ ?> class="active-link"<?php } ?>>
                                        <a href="<?=base_url(); ?>index.php/admin/shipping_statuses">
                                            <i class="fa fa-truck"></i>
                                            <?=translate('shipping_statuses');?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if($this->crud_model->admin_permission('sales_price_list') ||
                                 $this->crud_model->admin_permission('price_offers') ||
                                 $this->crud_model->admin_permission('product_review')||
                                 $this->crud_model->admin_permission('point_system_management')){ ?>
                            <!--Menu list item-->
                            <li <?php if ($page_name == 'sales_price_list' ||
                                          $page_name == 'price_offers' ||
                                          $page_name == 'product_review' ||
                                          $page_name == 'point_system_management'
                                ){ ?> class="active-sub" <?php } else {echo 'class="hidden"';} ?>>

                                <a href="#">
                                    <i class="fa fa-globe"></i>
                                    <span class="menu-title">
                                        <?=translate('marketing');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>

                                <ul class="collapse
                                    <?php if($page_name == 'point_system_management' ||
                                            $page_name == 'sales_price_list' ||
                                            $page_name == 'price_offers' ||
                                            $page_name == 'product_review'
                                    ){ ?> in <?php } ?> ">
                                    <?php if($this->crud_model->admin_permission('point_system_management')){ ?>
                                    <li<?php if ($page_name == 'point_system_management'){ ?> class="active-link"
									<?php } else { echo 'class="hidden"';}?> >
                                        <a href="<?=base_url('admin/point_system_management')?>">
                                            
                                            <?=translate('point_system_management')?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('sales_price')){ ?>
                                    <li <?php if($page_name == 'sales_price_list'){ ?> class="active-link" <?php } else { echo 'class="hidden"';}?> >
                                        <a href="<?=base_url('admin/sales_price')?>">
                                            
                                            <?=translate('sales_price')?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('price_offers')){ ?>
                                    <li <?php if($page_name == 'price_offers'){ ?> class="active-link"<?php } else { echo 'class="hidden"';}?> >
                                        <a href="<?=base_url(); ?>index.php/admin/price_offers">
                                            
                                            <?=translate('price_offers');?>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('product_review')){ ?>
                                    <li <?php if($page_name == "product_review"){ ?> class="active-link"<?php } else { echo 'class="hidden"';}?> >
                                        <a href="<?=base_url(); ?>index.php/admin/product_review">
                                            <i class="fa fa-truck"></i>
                                            <?=translate('product_reviews');?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } if($this->crud_model->admin_permission('site_maintenance')){
                            ?>
                            <li <?php if($page_name=="site_maintenance"){?> class="active-link" <?php } else { echo 'class="hidden"';}?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/site_maintenance/">
                                    <i class="fa fa-briefcase"></i>
                                <span class="menu-title">
                                	<?php echo translate('site_maintenance');?>
                                </span>
                                </a>
                            </li>
                        <?php } if($this->crud_model->admin_permission('country') || 
                                $this->crud_model->admin_permission('localisation_settings') ||     
                                $this->crud_model->admin_permission('default_form_settings') || 
                                $this->crud_model->admin_permission('product_tamplate') || 
                                $this->crud_model->admin_permission('paypal_address_varify') || 
                                $this->crud_model->admin_permission('product_features') || 
                                $this->crud_model->admin_permission('order_cart_settings') ||     
                                $this->crud_model->admin_permission('bestsellers_settings') || 
                                $this->crud_model->admin_permission('poision_message') ||      
                                $this->crud_model->admin_permission('printable_invoice_settings') ||
                                $this->crud_model->admin_permission('digital_products') ||
                                $this->crud_model->admin_permission('veratad_settings') ||  
                                $this->crud_model->admin_permission('company_information') || 
                                $this->crud_model->admin_permission('wholesales_settings') ||
                                $this->crud_model->admin_permission('dynamic_selection_lists') || 
                                $this->crud_model->admin_permission('security_settings') ||
                                $this->crud_model->admin_permission('proxy_settings') ||
                                $this->crud_model->admin_permission('search_engine_settings') ||
                                $this->crud_model->admin_permission('email_settings') ||
                                $this->crud_model->admin_permission('text_editor_settings') ||
                                $this->crud_model->admin_permission('user_interface_settings') ||
                                $this->crud_model->admin_permission('access_settings')||
                                $this->crud_model->admin_permission('vendor_order_cart_settings') ||
                                $this->crud_model->admin_permission('vendor_admin_customization') ||
                                $this->crud_model->admin_permission('vendor_admin_defaults') ||
                                $this->crud_model->admin_permission('vendor_product_approval')|| 
                                $this->crud_model->admin_permission('vendor_badges_awards')) { ?>
						<!--Menu list item-->
                            <li <?php if($page_name=="country" || 
                                         $page_name=="localisation_settings" ||
                                         $page_name=="default_form_settings" || 
                                         $page_name=="product_tamplate" ||
                                         $page_name=="paypal_address_varify" || 
                                         $page_name=="product_features" || 
                                         $page_name=="order_cart_settings" || 
                                         $page_name=="bestsellers_settings" || 
                                         $page_name=="poision_message" ||
                                         $page_name=="printable_invoice_settings" ||
                                         $page_name=="digital_products" || 
                                         $page_name=="veratad_settings" || 
                                         $page_name=="company_information" || 
                                         $page_name=="wholesales_settings" || 
                                         $page_name=="dynamic_selection_lists" || 
                                         $page_name=="security_settings" || 
                                         $page_name=="proxy_settings" ||
                                         $page_name=="search_engine_settings" || 
                                         $page_name=="email_settings" ||
                                         $page_name=="text_editor_settings" || 
                                         $page_name=="user_interface_settings" || 
                                         $page_name=="access_settings" || 
                                         $page_name=="vendor_order_cart_settings" ||
                                         $page_name=="vendor_admin_customization" || 
                                         $page_name=="vendor_admin_defaults" || 
                                         $page_name=="vendor_product_approval" ||
                                         $page_name=="vendor_badges_awards"
                                    ){ ?>
                                class="active-sub"
                           <?php } else { echo 'class="hidden"';}?> >
                                <a href="#">
                                    <i class="fa fa-gear"></i>
                                    <span class="menu-title">
                                        <?php echo translate('system_settings');?>
                                    </span>
                                    <i class="fa arrow"></i>
                                </a>
                                <ul class="collapse <?php if($page_name=="country" || 
                                                             $page_name=="localisation_settings" ||
                                                             $page_name=="default_form_settings" || 
                                                             $page_name=="product_tamplate" ||
                                                             $page_name=="paypal_address_varify" || 
                                                             $page_name=="product_features" || 
                                                             $page_name=="order_cart_settings" || 
                                                             $page_name=="bestsellers_settings" || 
                                                             $page_name=="poision_message" ||
                                                             $page_name=="printable_invoice_settings" || 
                                                             $page_name=="digital_products" || 
                                                             $page_name=="veratad_settings" || 
                                                             $page_name=="company_information" || 
                                                             $page_name=="wholesales_settings" || 
                                                             $page_name=="dynamic_selection_lists" || 
                                                             $page_name=="security_settings" || 
                                                             $page_name=="proxy_settings" ||
                                                             $page_name=="search_engine_settings" || 
                                                             $page_name=="email_settings" ||
                                                             $page_name=="text_editor_settings" || 
                                                             $page_name=="user_interface_settings" || 
                                                             $page_name=="access_settings" || 
                                                             $page_name=="vendor_order_cart_settings" ||
                                                             $page_name=="vendor_admin_customization" || 
                                                             $page_name=="vendor_admin_defaults" || 
                                                             $page_name=="vendor_product_approval" ||
                                                             $page_name=="vendor_badges_awards"){?>in<?php } ?> " >
				<li <?php if($page_name=="country" || 
                                             $page_name=="localisation_settings"){ ?>
                                            class="active-sub active"
                                      <?php } else { echo 'class="hidden"';}?> >
                                        <a href="#">
                                            <span class="menu-title">
                                                <?php echo translate('localisation'); ?>
                                            </span>
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul class="collapse <?php if($page_name=="country" || 
                                                                     $page_name=="localisation_settings"){?> in <?php } ?> ">
                                            <?php if ($this->crud_model->admin_permission('country')) { ?>
                                                <li <?php if ($page_name == "country") { ?> class="active-link" <?php } ?> >
                                                    <a href="<?php echo base_url(); ?>index.php/admin/country">
                                                        
                                                        <span class="menu-title">
                                                            <?php echo translate('manage_country'); ?>
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php }if($this->crud_model->admin_permission('localisation_settings')){ ?>
                                                <li <?php if($page_name=="localisation_settings"){?> class="active-link" <?php } ?> >
                                                        <a href="<?php echo base_url(); ?>index.php/admin/localisation_settings">
                                                                
                                                        <span class="menu-title">
                                                                <?php echo translate('localisation_settings');?>
                                                        </span>
                                                        </a>
                                                </li>
                                             <?php } ?>
                                        </ul>
                                 </li>		
                                    <!------   country------------------>
                            <li <?php if( $page_name=="default_form_settings" || 
                                          $page_name=="product_tamplate" ||
                                          $page_name=="paypal_address_varify" || 
                                          $page_name=="product_features" || 
                                          $page_name=="order_cart_settings" || 
                                          $page_name=="bestsellers_settings" || 
                                          $page_name=="poision_message" ||
                                          $page_name=="printable_invoice_settings" || 
                                          $page_name=="digital_products" || 
                                          $page_name=="veratad_settings" || 
                                          $page_name=="company_information" || 
                                          $page_name=="wholesales_settings" || 
                                          $page_name=="dynamic_selection_lists"){?>
                                class="active-sub active"
                           <?php } else { echo 'class="hidden"';}?> >
                            <a href="#">
                                <span class="menu-title">
                                    <?php echo translate('global_cart_settings');?>
                                </span>
                                <i class="fa arrow"></i>
                            </a>
                        <ul class="collapse <?php if($page_name=="default_form_settings" || 
                                                    $page_name=="product_tamplate" ||
                                                    $page_name=="paypal_address_varify" || 
                                                    $page_name=="product_features" || 
                                                    $page_name=="order_cart_settings" || 
                                                    $page_name=="bestsellers_settings" || 
                                                    $page_name=="poision_message" ||
                                                    $page_name=="printable_invoice_settings" || 
                                                    $page_name=="digital_products" || 
                                                    $page_name=="veratad_settings" || 
                                                    $page_name=="company_information" || 
                                                    $page_name=="wholesales_settings" || 
                                                    $page_name=="dynamic_selection_lists"){?> in <?php } ?> ">
                        <?php if($this->crud_model->admin_permission('default_form_settings')){ ?>
                            <li <?php if($page_name=="default_form_settings"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/default_form_settings">
                                    
                                <span class="menu-title">
                                	<?php echo translate('default_form_settings');?>
                                </span>
                                </a>
                            </li>
                        <?php } if($this->crud_model->admin_permission('product_tamplate')){ ?>
                            <li <?php if($page_name=="product_tamplate"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/product_tamplate">
                                    
                                <span class="menu-title">
                                	<?php echo translate('product_tamplate');?>
                                </span>
                                </a>
                            </li>
                            <?php
                        } if ($this->crud_model->admin_permission('paypal_address_varify')) { ?>
                                    <li <?php if ($page_name == "paypal_address_varify") { ?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/paypal_address_varify">
                                            
                                        <span class="menu-title">
                         <?php echo translate('paypal_address_varify'); ?>
                                        </span>
                                        </a>
                                    </li>
                        <?php } if($this->crud_model->admin_permission('product_features')){ ?>
                            <li <?php if($page_name=="product_features"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/product_features">
                                    
                                <span class="menu-title">
                                	<?php echo translate('product_features');?>
                                </span>
                                </a>
                            </li>
                            <?php
                        } if($this->crud_model->admin_permission('order_cart_settings')){ ?>
                            <li <?php if($page_name=="order_cart_settings"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/order_cart_settings">
                                    
                                <span class="menu-title">
                                	<?php echo translate('order_cart_settings');?>
                                </span>
                                </a>
                            </li>
                            <?php
                         } if($this->crud_model->admin_permission('bestsellers_settings')){ ?>
                            <li <?php if($page_name=="bestsellers_settings"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/bestsellers_settings">
                                    
                                <span class="menu-title">
                                	<?php echo translate('bestsellers_settings');?>
                                </span>
                                </a>
                            </li>
                            <?php
                        } if($this->crud_model->admin_permission('poision_message')){ ?>
                            <li <?php if($page_name=="poision_message"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/poision_message">
                                    
                                <span class="menu-title">
                                	<?php echo translate('poision_message');?>
                                </span>
                                </a>
                            </li>
                            <?php
                        } if($this->crud_model->admin_permission('printable_invoice_settings')){
                            ?>
                            <li <?php if($page_name=="printable_invoice_settings"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/printable_invoice_settings">
                                    
                                <span class="menu-title">
                                	<?php echo translate('printable_invoice_settings');?>
                                </span>
                                </a>
                            </li>
                            <?php } if($this->crud_model->admin_permission('digital_products')){ ?>
                            <li <?php if($page_name=="digital_products"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/digital_products">
                                    
                                <span class="menu-title">
                                	<?php echo translate('digital_products');?>
                                </span>
                                </a>
                            </li>
                            <?php } if($this->crud_model->admin_permission('veratad_settings')){  ?>
                            <li <?php if($page_name=="veratad_settings"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/veratad_settings">
                                    
                                <span class="menu-title">
                                	<?php echo translate('veratad_settings');?>
                                </span>
                                </a>
                            </li>
                           <?php } if($this->crud_model->admin_permission('company_information')){ ?>
                            <li <?php if($page_name=="company_information"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/company_information">
                                    
                                <span class="menu-title">
                                	<?php echo translate('company_information');?>
                                </span>
                                </a>
                            </li>
                           <?php } if($this->crud_model->admin_permission('wholesales_settings')){ ?>
                            <li <?php if($page_name=="wholesales_settings"){?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/wholesales_settings">
                                    
                                <span class="menu-title">
                                	<?php echo translate('wholesales_settings');?>
                                </span>
                                </a>
                            </li>
                           <?php } if($this->crud_model->admin_permission('dynamic_selection_lists')){ ?>
                            <li <?php if($page_name=="dynamic_selection_lists"){ ?> class="active-link" <?php } ?> >
                                <a href="<?php echo base_url(); ?>index.php/admin/dynamic_selection_lists">
                                    
                                <span class="menu-title">
                                	<?php echo translate('dynamic_selection_lists');?>
                                </span>
                                </a>
                            </li>
                            <?php
                        }   
                        ?>    
    			</ul>
                        </li>
                        <li <?php if ($page_name == "security_settings" ||
                                      $page_name=="proxy_settings" ||
                                      $page_name=="search_engine_settings" || 
                                      $page_name=="email_settings" ||
                                      $page_name=="text_editor_settings" || 
                                      $page_name=="user_interface_settings" || 
                                      $page_name=="access_settings") { ?>
                                class="active-sub active"
                            <?php } else { echo 'class="hidden"';}?> >
                            <a href="#">
                                <span class="menu-title">
                                    <?php echo translate('global_systems_settings'); ?>
                                </span>
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="collapse <?php if ($page_name == "security_settings" ||
                                                        $page_name=="proxy_settings" ||
                                                        $page_name=="search_engine_settings" || 
                                                        $page_name=="email_settings" ||
                                                        $page_name=="text_editor_settings" || 
                                                        $page_name=="user_interface_settings" || 
                                                        $page_name=="access_settings") { ?> in <?php } ?> ">
                                <?php if($this->crud_model->admin_permission('security_settings')){  ?>
                                    <li <?php if($page_name=="security_settings"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/security_settings">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('security_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php } if($this->crud_model->admin_permission('proxy_settings')){ ?>
                                    <li <?php if($page_name=="proxy_settings"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/proxy_settings">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('proxy_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php } if($this->crud_model->admin_permission('search_engine_settings')){ ?>
                                    <li <?php if($page_name=="search_engine_settings"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/search_engine_settings">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('search_engine_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php
                                } if($this->crud_model->admin_permission('email_settings')){ ?>   
                                    <li <?php if($page_name == "email_settings") { ?> class="active-link" <?php } ?> >
                                        <a href="<?=base_url()?>index.php/admin/email_settings">
                                            
                                        <span class="menu-title">
                                             <?php echo translate('email_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php } if($this->crud_model->admin_permission('text_editor_settings')){ ?>
                                    <li <?php if($page_name=="text_editor_settings"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/text_editor_settings">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('text_editor_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php
                                } if($this->crud_model->admin_permission('user_interface_settings')){ ?>
                                    <li <?php if($page_name=="user_interface_settings"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/user_interface_settings">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('user_interface_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php } if($this->crud_model->admin_permission('access_settings')){ ?>
                                    <li <?php if($page_name=="access_settings"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/access_settings">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('access_settings');?>
                                        </span>
                                        </a>
                                    </li>
                                <?php } ?>       
                            </ul>
                        </li> 
                         <li <?php if ($page_name == "vendor_order_cart_settings" ||
                                       $page_name == "vendor_admin_customization"||
                                       $page_name == "vendor_admin_defaults" ||
                                       $page_name == "vendor_product_approval" ||
                                       $page_name == "vendor_badges_awards"){ ?>
                                class="active-sub active"
                            <?php } else { echo 'class="hidden"';}?> >
                            <a href="#">
                                <span class="menu-title">
                                    <?php echo translate('global_multivendor_settings'); ?>
                                </span>
                                <i class="fa arrow"></i>
                            </a>
                                <ul class="collapse <?php if ($page_name == "vendor_order_cart_settings") { ?> in <?php } ?> ">
                                   <?php if($this->crud_model->admin_permission('vendor_order_cart_settings')){ ?>
                                        <li <?php if($page_name=="vendor_order_cart_settings"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_order_cart_settings">
                                                
                                            <span class="menu-title">
                                                    <?php echo translate('vendor_order_cart_settings');?>
                                            </span>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_admin_customization')){ ?>
                                        <li <?php if($page_name=="vendor_admin_customization"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_admin_customization">
                                                
                                            <span class="menu-title">
                                                    <?php echo translate('vendor_admin_customization');?>
                                            </span>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_admin_defaults')){ ?>
                                        <li <?php if($page_name=="vendor_admin_defaults"){?> class="active-link" <?php } ?> >
                                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_admin_defaults">
                                                
                                            <span class="menu-title">
                                                    <?php echo translate('vendor_admin_defaults');?>
                                            </span>
                                            </a>
                                        </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_product_approval')){ ?>
                                    <li <?php if($page_name=="vendor_product_approval"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/vendor_product_approval">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('vendor_product_approval');?>
                                        </span>
                                        </a>
                                    </li>
                                    <?php } if($this->crud_model->admin_permission('vendor_badges_awards')){ ?>
                                    <li <?php if($page_name=="vendor_badges_awards"){?> class="active-link" <?php } ?> >
                                        <a href="<?php echo base_url(); ?>index.php/admin/vendor_badges_awards">
                                            
                                        <span class="menu-title">
                                                <?php echo translate('vendor_badges_awards');?>
                                        </span>
                                        </a>
                                    </li>
                                    <?php } ?> 
                                </ul>
                            </li>         
                        </ul>
    			</li>
                            <?php
                        } else
						
						{ ?>
							<div class="accordion acc-head-bg-color" id="accordion" >
                              <div class="panel-headings">
                                  <a class="accordion-toggle acc-head-styling textdecoration-none accordion-menuhovertoggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                      <i class="glyphicons-icon glyphicon-custom-sidebar cart_out margin-left-8" style="display:inline-block"></i>
                                      <span class="menu-title">
                                          <b> <?php echo translate('Administrator Area');?></b> 
                                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                      </span>
                                   
                                  </a>
                              </div>
                              
                        </div>
						<?php }
                            ?>
                        <li>
                            <a href="http://activeitzone.com/check/" class="activate_bar" target="_blank">
                                <i class="fa fa-check-circle"></i>
                                <span class="menu-title">
                                	<?php echo translate('activate');?>
                                </span>
                            </a>
                        </li>
                     </ul>  
                </div>
            </div>
        </div>
    </div>
</nav>
<style>
    .activate_bar{
        border-left: 3px solid #1ACFFC;
        transition: all .6s ease-in-out;
    }
    .activate_bar:hover{
        border-bottom: 3px solid #1ACFFC;
        transition: all .6s ease-in-out;
        background:#1ACFFC !important;
        color:#000 !important;
    }   
    .quickLinkSeparator {
    margin-left: 10px;
    margin-right: 10px;
    border-top: 1px solid #bbbbbb;
    clear: both;
    font-size: 1px;
    .accordion a{
        color: #1cabe3;
    }
}

</style>
<script>
 function toggleChevron(e) {
    $(e.target)
        .prev('.panel-headings')


        .find("i.indicator")
        .toggleClass('glyphicon glyphicon-chevron-up glyphicon glyphicon-chevron-down');
}
$('.accordion').on('hidden.bs.collapse', toggleChevron);
$('.accordion').on('shown.bs.collapse', toggleChevron);   
</script>
