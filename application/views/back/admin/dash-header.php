<div class="">
    <div class="">
        <nav id="primary-menu" class="dark">
            <ul  class="nav nav-section-bar">
                <li <?php if($page_name=="product"){?> class="active-link" <?php } ?>>
                    <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle   word-break topbar-first-child">
                        <i class="glyphicons-icon cargo js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Categories &amp; Products</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/search_product"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;<?php echo translate('manage_products'); ?>
                                </div>
                            </a>
							<a href="<?php echo base_url(); ?>index.php/admin/product_insert"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;<?php echo translate('Add a New Product'); ?>
                                </div>
                            </a>
                        </li>
						 <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/category"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;<?php echo translate('manage_categories'); ?></div></a>
                        </li>
						 <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/brand"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;<?php echo translate('manage_brands'); ?></div></a>
                        </li>

                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/attributes"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Attributes &amp; Properties</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Manufacturers</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/recommended_products"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Recommended Products</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/promo_categories"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Promo Categories</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/bulk_product_upload"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Bulk Product Upload</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/bulk_category_upload"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Bulk Category Upload</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/bulk_product_image_upload"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Bulk Product Image Upload</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/suppliers"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Suppliers</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/add_new_group"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Weight Based Price</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Help File Management</div></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle  " data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon coins js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Users &amp; Orders</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/search_user_customer"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Browse Users</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/add_user_customer"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Add a New User</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Customer Groups</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Browse Orders</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Manual Order</div></a>
                        </li>
                        <!--<li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Order Fulfillment</div></a>
                        </li>-->
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/order_attachment"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Order Attachments</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/subscribed_products"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Subscribed Products</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/browse_donations"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Browse Donations</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/rma_info"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;RMA Info</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/export_quickbooks"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Export to QuickBooks</div></a>
                        </li>
                    </ul>
                </li>				
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon global js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Marketing</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Google Marketing</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Data Feeds</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;RSS Data Feed</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Manage Discounts</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Manage Coupons</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/sales_price"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Sale Prices</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Price Alerts</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/price_offers"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Price Offers</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/point_system_management"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Point System Management</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/product_review"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Product Reviews</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Facebook</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;MV-DSL API</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;iDevAffiliate Integration</div></a>
                        </li>
                    </ul>
                </li>				
                <li>
                    <a href="#" class="dropdown-toggle  " data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon message_new js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Email &amp; Notifications</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/newsletter"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Newsletter Emails</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Follow Up Emails</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/product_update_mail"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Product Updates Emails</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/sent_email_archive"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Emails Archive</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/email_template"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Default Email Top &amp; Bottom</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/notification_emails"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Notification Emails</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/email_management"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Email List Management</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/sms_notifications"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;SMS Notifications</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/send_sms"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Send SMS</div></a>
                        </li>
                    </ul>
                </li>                        
                <li>
                    <a href="#" class="dropdown-toggle                                                         " data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon cogwheels js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Cart Settings</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Global Cart Settings</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Global System Settings</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Global Multivendor Settings</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Payment Methods</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Shop Services</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Donation Methods</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Shipping Management</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Edit Taxes</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Database &amp; Back-up Tools</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Cart Plug-ins</div></a>
                        </li>
                    </ul>
                </li>						
                <li>
                    <a href="#" class="dropdown-toggle  " data-toggle="dropdown" data-hover="dropdown">

                        <i class="glyphicons-icon sampler js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Content &amp; Layout</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Appearance Settings</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Site Layout</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Module Layout</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Module Manager</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Catalog Settings</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Edit Content Pages</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Forms &amp; Form Fields</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;File Manager</div></a>
                        </li>
                    </ul>
                </li>						
                <li>
                    <a href="#" class="dropdown-toggle  " data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon charts js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Statistics</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Charts</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Reports</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Cart Information</div></a>
                        </li>
                    </ul>
                </li>						
                <li>
                    <a href="#" class="dropdown-toggle  " data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon group js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">Manage Vendors &amp; Admins</span>
                    </a>
                    <ul class="dropdown-menu with-arrow top-bar-visibity">
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Browse Administrators</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Create Admin Account</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Browse Vendors</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Create Vendor Account</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Update your profile</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;API Users</div></a>
                        </li>
                    </ul>
                </li>						
                <li>
                    <a href="#" class="dropdown-toggle  " data-toggle="dropdown" data-hover="dropdown">
                        <i class="glyphicons-icon settings js-menu-item-icon" style="margin:0px 0px 0px 0px;"></i>
                        <span class="js-menu-item-text">MultiVendor Settings</span>
                    </a>
                    <ul class="dropdown-menu with-arrow pull-right">
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Multi-Vendor</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Manage News</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Recently Modified Products</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_reviews"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Reviews</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Tickets</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_reports"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Reports</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Payment Services</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Subscription Groups &amp; Fees</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Subscriptions</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_services"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Services</div></a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/ordered_vendor_services"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Ordered Vendor Services</div></a>
                        </li>
                        <li class="divider"></li>
                        <li class="item">
                            <a href="<?php echo base_url(); ?>index.php/admin/vendor_monthly_fees"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Fees</div></a>
                        </li>
                        <li class="item">
                            <a href="#"><div class="display-inline-block"> 
                                </div><div class="display-inline-block">
                                    &nbsp;Vendor Payments</div></a>
                        </li>
                    </ul>
                </li>                    
            </ul>
        </nav>
    </div>
</div>
<script>
  <a class="<?=(current_url()==base_url('search')) ? 'active':''?>" href="<?=base_url('search')?>">
</script>