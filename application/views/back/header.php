<header id="navbar">
    <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <div class="navbar-header">
            <a href="<?php echo base_url(); ?>index.php/<?php echo $this->session->userdata('title'); ?>" class="navbar-brand">
                <small>
                    <img src="<?php echo $this->crud_model->logo('admin_login_logo'); ?>" border="0" alt="<?php echo $system_name; ?>" class="brand-icon" style="padding:8px;">
                </small>
            </a>
        </div>
        <!--End brand logo & name-->
        <!--Navbar Dropdown-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">
                <!--Navigation toogle button-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" style="width:51px;text-align: center;height: 47px;">
                        <i id="icon-toggler" class="icon-th-large margin-left-8"></i>
                    </a>
                </li>
                <!--End Navigation toogle button-->
            </ul>

            <nav id="primary-menu">
                <ul class="nav navbar-top-links pull-right nav-section-bar">
                    <li>
                        <a href="#" id="dropdown-user" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle   word-break topbar-first-child">
                            <label class="badge badge-important">0</label>
                            <span class="pull-left user-info">
                                <i class="fa fa-bell"></i>
                            </span>
                        </a>
                        <ul  class="dropdown-menu with-arrow pull-right">
                            <li class="nav-header">
                                <i class="fa fa-exclamation-triangle"></i>
                                    0 Notifications                        
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <a href="#" id="dropdown-user" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle   word-break topbar-first-child">
                            <label class="badge badge-success">0</label>
                            <span class="pull-left user-info">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </a>
                        <ul  class="dropdown-menu with-arrow pull-right">
                             <li class="nav-header">
                                <i class="fa fa-envelope"></i>
                                    0 Tickets                        
                            </li>
                            <li class="item">
                                <a href="<?php echo base_url(); ?>index.php/admin/tickets/" >
                                    <?php echo translate('see_all_tickets'); ?>
                                      <i class="fa fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <?php 
                            if($set_lang = $this->session->userdata('language')){} else {
                                    $set_lang = $this->db->get_where('general_settings',array('type'=>'language'))->row()->value;
                            }
                        ?>
                        <a href="#" id="dropdown-user" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle   word-break topbar-first-child">
                            <i class="pull-right icon-caret-down"></i>
                            <span class="pull-right user-info">
                              <i class="fa fa-language"></i>
                            </span>
                        </a>
                        <ul  class="dropdown-menu with-arrow pull-right">
                        <?php
                                    $fields = $this->db->list_fields('language');
                                    foreach ($fields as $field)
                                    {
                                            if($field !== 'word' && $field !== 'word_id'){
                        ?>
                            <li class="item" <?php if($set_lang == $field){ ?>class="active"<?php } ?>>
                                <a href="<?php echo base_url(); ?>index.php/admin/set_language/<?php echo $field; ?>">
                                    <?php echo $field; ?> 
                                    <?php if($set_lang == $field){ ?>
                                       <i class="fa fa-check"></i>
                                    <?php } ?>
                                </a>                        
                            </li>
                        <?php
                                        }
                                    }
                        ?>
                        </ul> 
                    </li>
                    <li>
                        <a href="#" id="dropdown-user" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle   word-break topbar-first-child">
                            <i class="pull-right icon-caret-down"></i>
                            <span class="pull-right user-info">
                                <?php
                                if ($this->session->userdata('title') == 'admin') {
                                    echo $this->session->userdata('admin_name');
                                } elseif ($this->session->userdata('title') == 'vendor') {
                                    echo $this->session->userdata('vendor_name');
                                }
                                ?>
                            </span>
                        </a>
                        <!-- User dropdown menu -->
                        <ul  class="dropdown-menu with-arrow pull-right">
                            <li style="color:#C0C0C0;"> <?php echo date('F d, Y'); ?></li>
                            <li class="item">
                                <a href="<?php echo base_url(); ?>index.php/<?php echo $this->session->userdata('title'); ?>/logout/" style="color:#C0C0C0;">
                                    <i class="fa fa-power-off"></i> <?php echo translate('logout'); ?>
                                </a>                         
                            </li>
                        </ul> 
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>  