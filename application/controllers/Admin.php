<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property RmaInfos $rma_info
 * @property ApiUsers $api_users
 * @property TopBuyers $top_buyers
 * @property Crud_model $crud_model
 * @property TopSellers $top_sellers
 * @property PriceOffers $price_offers
 * @property AdminTickets $admin_tickets
 * @property VendorReports $vendor_reports
 * @property EmailSettings $email_settings
 * @property CI_Form_validation $form_validation
 * @property LatestSubscriptions $latest_subscriptions
 */
class Admin extends CI_Controller
{
    /*
     *  Developed by: Active IT zone
     *  Date    : 14 July, 2015
     *  Active Supershop eCommerce CMS
     *  http://codecanyon.net/user/activeitezone
     */

    protected $and;

    function __construct()
    {
        parent::__construct();

        $this->and = $this;

        $this->load->database();
        $this->load->library('paypal');
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->crud_model->ip_data();
		$this->config->cache_query();
        //maintainence mode
        $maintCheck = $this->crud_model->check_maint(1);
        if($maintCheck->admin != 0 and $maintCheck->status==1){
            $whiteIp = $maintCheck->only_access_ip;
            //var_dump($whiteIp); exit();
            //var_dump($_SERVER['REMOTE_ADDR']); exit();
            if($whiteIp != null){
                $whiteIp = json_decode($whiteIp, true);
                // var_dump($whiteIp); exit();
                if(in_array($_SERVER['REMOTE_ADDR'], $whiteIp)){
                    //do nothing
                }else{
                    // redirect("home/maintenance");
                    $html = file_get_contents('./html/maint.inc');
                    echo $html;
                    exit();
                }

            }else{
                // redirect("home/maintenance");
                $html = file_get_contents('./html/maint.inc');
                echo $html;
                exit();
            }


        }else{
            //exit("shit");
        }
    }

    /* index of the admin. Default: Dashboard; On No Login Session: Back to login page. */
    public function index()
    {
        if ($this->session->userdata('admin_login') == 'yes') {
            $page_data['page_name'] = "dashboard";
            $this->load->view('back/index', $page_data);
        } else {
            $page_data['control'] = "admin";
            $this->load->view('back/login',$page_data);
        }
    }
    
    /* FUNCTION: Setting  Language */
    
    function set_language($lang){
        $this->session->set_userdata('language', $lang);
        $page_data['page_name'] = "home";
        redirect(base_url() . 'index.php/admin/', 'refresh');
    }

    /*Product Category add, edit, view, delete */
    function category($para1 = '', $para2 = '') {
        if (!$this->crud_model->admin_permission('category')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $type = 'category';
            $data['parentid'] = $this->input->post('parent_category');
            $data['category_name'] = $this->input->post('category_name');
            $data['category_key'] = $this->input->post('category_key');
            $data['meta_title'] = $this->input->post('meta_title');
            $data['meta_keywords'] = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');
            $data['is_visible_user'] = $this->input->post('is_visible_user');
            $data['display_categories'] = $this->input->post('display_categories');
            $data['user_group'] = $this->input->post('user_group');
            $data['password_protected'] = $this->input->post('password_protected');
            $data['access_password'] = $this->input->post('access_password');
            $data['list_subcats'] = $this->input->post('on_catalog_page');
            $data['navigation_help'] = $this->input->post('show_nav_help');
            $data['show_subcate_images'] = $this->input->post('show_subcate_images');
            $data['priority'] = $this->input->post('priority');
            $data['cat_description_top'] = $this->input->post('description_top');
            $data['cat_description_bottom'] = $this->input->post('description_bottom');
            $data['is_active'] = $this->input->post('is_active');
            if($this->input->post('vendor')=='')
            {
                $data['vendor_id'] = json_encode(['0']);
            }
            else
            {
                $data['vendor_id'] = json_encode($this->input->post('vendor'));
            }
            $this->db->insert('category', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("category_icon", "category", $id.'_icon', '', '', '.png');
            $this->crud_model->file_up("category_image", "category", $id.'_image', '', '', '.png');
            $this->crud_model->file_up("category_module_image", "category", $id.'_module', '', '', '.png');
            recache();
        } else if ($para1 == 'edit') {
            $page_data['category_data'] = $this->db->get_where('category', array('category_id' 	=> $para2))->result_array();
            $page_data['all_category'] =  $this->crud_model->fetchCategoryTree();	
            $page_data['all_vendor'] = $this->db->get('vendor')->result_array();
            $this->load->view('back/admin/category_edit', $page_data);
        } elseif ($para1 == "update") {	
			$data['parentid'] = $this->input->post('parent_category');
            $data['category_name'] = $this->input->post('category_name');
            $data['category_key'] = $this->input->post('category_key');
            $data['meta_title'] = $this->input->post('meta_title');
            $data['meta_keywords'] = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');
            $data['is_visible_user'] = $this->input->post('is_visible_user');
            $data['display_categories'] = $this->input->post('display_categories');
            $data['user_group'] = $this->input->post('user_group');
            $data['password_protected'] = $this->input->post('password_protected');
            $data['access_password'] = $this->input->post('access_password');
            $data['list_subcats'] = $this->input->post('on_catalog_page');
            $data['navigation_help'] = $this->input->post('show-nav_help');
            $data['show_subcate_images'] = $this->input->post('show_subcate_images');
            $data['priority'] = $this->input->post('priority');
            $data['cat_description_top'] = $this->input->post('description_top');
            $data['cat_description_bottom'] = $this->input->post('description_bottom');
            $data['is_active'] = $this->input->post('is_active');
            if($this->input->post('vendor')=='')
            {
                $data['vendor_id'] = json_encode(['0']);
            }
            else
            {
                $data['vendor_id'] = json_encode($this->input->post('vendor'));
            }
            $this->db->where('category_id', $para2);
            $this->db->update('category', $data);
                $this->crud_model->file_up("category_icon", "category", $para2.'_icon', '', '', '.png');
                $this->crud_model->file_up("category_image", "category", $para2.'_image', '', '', '.png');
                $this->crud_model->file_up("category_module_image", "category", $para2.'_module', '', '', '.png');
            redirect(base_url() . 'index.php/admin/category/', 'refresh');
            recache();
        } elseif ($para1 == 'delete') {
            $this->crud_model->file_dlt('category', $para2.'_icon', '.png');			
            $this->crud_model->file_dlt('category', $para2.'_image', '.png');			
            $this->crud_model->file_dlt('category', $para2.'_module', '.png');			
            $this->db->where('category_id', $para2);
            $this->db->delete('category');
            recache();
        }else if ($para1 == 'dlt_imgg') {
                $this->crud_model->file_dlt("category",$para2,'.png');
                $this->crud_model->file_dlt("category",$para2,'.png');
                $this->crud_model->file_dlt("category",$para2,'.png');
            recache();
        }elseif ($para1 == 'list') {
           // $page_data['all_categorys'] =  $this->crud_model->fetchCategoryTreeList();
            //$this->db->order_by('category_id', 'desc');
            $page_data['cat_tree']=$this->db->get('category')->result_array();
            $page_data['all_categories'] = $this->crud_model->fetchCategoryTree();
            $this->load->view('back/admin/category_list', $page_data);
        } elseif ($para1 == 'add') {
			$page_data['all_category'] =  $this->crud_model->fetchCategoryTree();
            $page_data['all_vendor'] = $this->db->get('vendor')->result_array();
            $this->load->view('back/admin/category_add',$page_data);
        } else {
            $page_data['page_name'] = "category";
            $page_data['all_categories'] = $this->crud_model->fetchCategoryTree();
            $this->load->view('back/index', $page_data);
        }
    }

    /*Product blog_category add, edit, view, delete */
    function blog_category($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('blog')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['name'] = $this->input->post('name');
            $this->db->insert('blog_category', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['blog_category_data'] = $this->db->get_where('blog_category', array(
                'blog_category_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/blog_category_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['name'] = $this->input->post('name');
            $this->db->where('blog_category_id', $para2);
            $this->db->update('blog_category', $data);
            recache();
        } elseif ($para1 == 'delete') {
            $this->db->where('blog_category_id', $para2);
            $this->db->delete('blog_category');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('blog_category_id', 'desc');
            $page_data['all_categories'] = $this->db->get('blog_category')->result_array();
            $this->load->view('back/admin/blog_category_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/blog_category_add');
        } else {
            $page_data['page_name']      = "blog_category";
            $page_data['all_categories'] = $this->db->get('blog_category')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }


    /*Product slides add, edit, view, delete */
    function slides($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('slides')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $type                = 'slides';
            $data['name']        = $this->input->post('name');
            $this->db->insert('slides', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "slides", $id, '', '', '.jpg');
            recache();
        } elseif ($para1 == "update") {
            $data['name']        = $this->input->post('name');
            $this->db->where('slides_id', $para2);
            $this->db->update('slides', $data);
            $this->crud_model->file_up("img", "slides", $para2, '', '', '.jpg');
            recache();
        } elseif ($para1 == 'delete') {
            $this->crud_model->file_dlt('slides', $para2, '.jpg');
            $this->db->where('slides_id', $para2);
            $this->db->delete('slides');
            recache();
        } elseif ($para1 == 'multi_delete') {
            $ids = explode('-', $param2);
            $this->crud_model->multi_delete('slides', $ids);
        } else if ($para1 == 'edit') {
            $page_data['slides_data'] = $this->db->get_where('slides', array(
                'slides_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/slides_edit', $page_data);
        } elseif ($para1 == 'list') {
            $this->db->order_by('slides_id', 'desc');
            $page_data['all_slidess'] = $this->db->get('slides')->result_array();
            $this->load->view('back/admin/slides_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/slides_add');
        } else {
            $page_data['page_name']  = "slides";
            $page_data['all_slidess'] = $this->db->get('slides')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*Product Category add, edit, view, delete */
    function blog($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('blog')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['title']          = $this->input->post('title');
            $data['date']           = $this->input->post('date');
            $data['author']         = $this->input->post('author');
            $data['summery']        = $this->input->post('summery');
            $data['blog_category']  = $this->input->post('blog_category');
            $data['description']    = $this->input->post('description');
            $this->db->insert('blog', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "blog", $id, '', '', '.jpg');
            recache();
        } else if ($para1 == 'edit') {
            $page_data['blog_data'] = $this->db->get_where('blog', array(
                'blog_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/blog_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['title']          = $this->input->post('title');
            $data['date']           = $this->input->post('date');
            $data['author']         = $this->input->post('author');
            $data['summery']        = $this->input->post('summery');
            $data['blog_category']  = $this->input->post('blog_category');
            $data['description']    = $this->input->post('description');
            $this->db->where('blog_id', $para2);
            $this->db->update('blog', $data);
            $this->crud_model->file_up("img", "blog", $para2, '', '', '.jpg');
            recache();
        } elseif ($para1 == 'delete') {
            $this->crud_model->file_dlt('blog', $para2, '.jpg');
            $this->db->where('blog_id', $para2);
            $this->db->delete('blog');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('blog_id', 'desc');
            $page_data['all_blogs'] = $this->db->get('blog')->result_array();
            $this->load->view('back/admin/blog_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/blog_add');
        } else {
            $page_data['page_name']      = "blog";
            $page_data['all_blogs'] = $this->db->get('blog')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }


    /*Weight Based Price Manage Group  */
    function add_new_group($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('add_new_group')) {
            redirect(base_url() . 'index.php/admin');
        }
        
        if ($para1 == "weight_based_price_group") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "weight_based_price_group");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        
        if ($para1 == 'do_add') {
            $data['group_name']    = $this->input->post('group_name');
            $data['date']          = date('Y-m-d',time());
            $this->db->insert('weight_group', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['group_data'] = $this->db->get_where('weight_group', array(
                'weight_group_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/group_edit', $page_data);
            recache();
        } elseif ($para1 == "update") {
            $data['group_name']    = $this->input->post('group_name');
            $data['date']          = date('Y-m-d',time());
            $this->db->where('weight_group_id', $para2);
            $this->db->update('weight_group', $data);
            recache();
        } elseif ($para1 == 'delete') {
            $tables = array('weight_group', 'weight_groups_prices','table');
            foreach($tables as $table){
            $this->db->where('weight_group_id', $para2);
            $this->db->delete($table);
            }
            redirect(base_url() . 'index.php/admin/add_new_group/', 'refresh');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('weight_group_id', 'desc');
            $page_data['all_groups'] = $this->db->get('weight_group')->result_array();
            $this->load->view('back/admin/add_new_group_list', $page_data);
        } 
        elseif ($para1 == 'add') {
            $this->load->view('back/admin/group_add');
                        recache();

        } 
        elseif ($para1 == 'list1') {
            $this->db->order_by('id', 'desc');
            $page_data['all_prices'] = $this->db->get('weight_groups_prices')->result_array();
            $this->load->view('back/admin/weight_grp_price_list',$page_data);
        }
        elseif ($para1 == 'add1') {
             $this->db->order_by('weight_group_id', 'desc');
            $page_data['all_weight_grp']=$this->db->get('weight_group')->result_array();
            $this->load->view('back/admin/weight_grp_price_add',$page_data);
            recache();
        }
        elseif ($para1 == 'do_add1') {
            $data['min_weight']     = $this->input->post('min_weight');
            $data['max_weight']     = $this->input->post('max_weight');
            $data['weight_group_id']      = $this->input->post('weight_grp');
            $data['price']      = $this->input->post('price');
            $this->db->insert('weight_groups_prices', $data);
            recache();
        }
        else if ($para1 == 'edit1') {
            $this->db->order_by('weight_group_id', 'desc');
            $page_data['all_weight_grp']=$this->db->get('weight_group')->result_array();
            $page_data['all_weight_price'] = $this->db->get_where('weight_groups_prices', array(
                'id' => $para2
            ))->result_array();
            $this->load->view('back/admin/weight_grp_price_edit', $page_data);
            recache();
        }
        elseif ($para1 == "update1") {
            $data['min_weight']     = $this->input->post('min_weight');
            $data['max_weight']     = $this->input->post('max_weight');
            $data['weight_group_id']       = $this->input->post('weight_grp');
            $data['price']          = $this->input->post('price');
            $this->db->where('id', $para2);
            $this->db->update('weight_groups_prices', $data);
            redirect(base_url() . 'index.php/admin/add_new_group/', 'refresh');
            recache();
        }
        elseif ($para1 == 'delete1') {
            $this->db->where('id', $para2);
            $this->db->delete('weight_groups_prices');
            recache();
        }
        else {
            $page_data['data']  = $this->db->get('product_setting')->result_array();
            $page_data['page_name']      = "add_new_group";
            $page_data['all_groups'] = $this->db->get('weight_group')->result_array();
            $page_data['all_prices'] = $this->db->get('weight_groups_prices')->result_array();
            $this->load->view('back/index', $page_data);         
        }
    }



	/*Product Sub-category add, edit, view, delete */
    function sub_category($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('sub_category')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            if ($_FILES['sub_category_icon']['name']) {
                $this->crud_model->file_up("sub_category_icon", "sub_category", $this->input->post('sub_category_name'), '', '', '.png');
                $data['is_active'] = $this->input->post('is_active');
            }
            $data['sub_category_name'] = $this->input->post('sub_category_name');
            $data['category_id'] = $this->input->post('category_id');
            $data['meta_title'] = $this->input->post('meta_title');
            $data['meta_keywords'] = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');
            $data['sub_category_icon'] = 'sub_category_' . $this->input->post('sub_category_name') . '.png';
            $this->db->insert('sub_category', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['sub_category_data'] = $this->db->get_where('sub_category', array(
                        'sub_category_id' => $para2
                    ))->result_array();
            $this->load->view('back/admin/sub_category_edit', $page_data);
        } elseif ($para1 == "update") {

            if ($_FILES['sub_category_icon']['name']) {
                $this->crud_model->file_up("sub_category_icon", "sub_category", $this->input->post('sub_category_name'), '', '', '.png');
                $data['sub_category_icon'] = 'sub_category_' . $this->input->post('sub_category_name') . '.png';
            }
            $data['sub_category_name'] = $this->input->post('sub_category_name');
            $data['category_id'] = $this->input->post('category_id');
            $data['meta_title'] = $this->input->post('meta_title');
            $data['meta_keywords'] = $this->input->post('meta_keywords');
            $data['meta_description'] = $this->input->post('meta_description');
            $data['is_active'] = $this->input->post('is_active');

            $this->db->where('sub_category_id', $para2);
            $this->db->update('sub_category', $data);
            redirect(base_url() . 'index.php/admin/sub_category/', 'refresh');
            recache();
        } elseif ($para1 == 'delete') {
            $this->db->where('sub_category_id', $para2);
            $this->db->delete('sub_category');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('sub_category_id', 'desc');
            $page_data['all_sub_category'] = $this->db->get('sub_category')->result_array();
            $this->load->view('back/admin/sub_category_list', $page_data);
        } elseif ($para1 == 'add') {
  	    $page_data['all_category'] =  $this->crud_model->fetchCategoryTree();
            $this->load->view('back/admin/sub_category_add',$page_data);
        } else {
            $page_data['page_name'] = "sub_category";
            $page_data['all_sub_category'] = $this->db->get('sub_category')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*Product Brand add, edit, view, delete */
    function brand($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('brand')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $type                = 'brand';
            $data['name']        = $this->input->post('name');
            $data['description']    = $this->input->post('description');
            $this->db->insert('brand', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "brand", $id, '', '', '.png');
            recache();
        } elseif ($para1 == "update") {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $this->db->where('brand_id', $para2);
            $this->db->update('brand', $data);
            $this->crud_model->file_up("img", "brand", $para2, '', '', '.png');
            recache();
        } elseif ($para1 == 'delete') {
            $this->crud_model->file_dlt('brand', $para2, '.png');
            $this->db->where('brand_id', $para2);
            $this->db->delete('brand');
            recache();
        } elseif ($para1 == 'multi_delete') {
            $ids = explode('-', $para2);
            $this->crud_model->multi_delete('brand', $ids);
        } else if ($para1 == 'edit') {
            $page_data['brand_data'] = $this->db->get_where('brand', array(
                'brand_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/brand_edit', $page_data);
        } elseif ($para1 == 'list') {
            $this->db->order_by('brand_id', 'desc');
            $page_data['all_brands'] = $this->db->get('brand')->result_array();
            $this->load->view('back/admin/brand_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/brand_add');
        } else {
            $page_data['page_name']  = "brand";
            $page_data['all_brands'] = $this->db->get('brand')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
	
	
	 function global_product_attributes($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('global_product_attributes')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'insert') {
            $type                = 'brand';
            $data['name']        = $this->input->post('name');
            $data['description']    = $this->input->post('description');
            $this->db->insert('global_product_attributes', $data);
            $id = $this->db->insert_id();
            recache();
        } elseif ($para1 == "update") {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $this->db->where('brand_id', $para2);
            $this->db->update('brand', $data);
            recache();
        } elseif ($para1 == 'delete') {
            $this->db->where('brand_id', $para2);
            $this->db->delete('brand');
            recache();
        } elseif ($para1 == 'multi_delete') {
            $ids = explode('-', $para2);
            $this->crud_model->multi_delete('brand', $ids);
        } else if ($para1 == 'edit') {
            $page_data['brand_data'] = $this->db->get_where('brand', array(
                'brand_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/product_props_edit', $page_data);
        } elseif ($para1 == 'list') {
            $this->db->order_by('brand_id', 'desc');
            $page_data['all_brands'] = $this->db->get('brand')->result_array();
            $this->load->view('back/admin/brand_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/brand_add');
        } else {
            $page_data['page_name']  = "brand";
            $page_data['all_brands'] = $this->db->get('brand')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*Product coupon add, edit, view, delete */
    function coupon($para1 = '', $para2 = '', $para3 = '')
    {
        if (!$this->crud_model->admin_permission('coupon')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['title'] = $this->input->post('title');
            $data['code'] = $this->input->post('code');
            $data['till'] = $this->input->post('till');
            $data['status'] = 'ok';
            $data['added_by'] = json_encode(array('type'=>'admin','id'=>$this->session->userdata('admin_id')));
            $data['spec'] = json_encode(array(
                                'set_type'=>$this->input->post('set_type'),
                                'set'=>json_encode($this->input->post($this->input->post('set_type'))),
                                'discount_type'=>$this->input->post('discount_type'),
                                'discount_value'=>$this->input->post('discount_value'),
                                'shipping_free'=>$this->input->post('shipping_free')
                            ));
            $this->db->insert('coupon', $data);
        } else if ($para1 == 'edit') {
            $page_data['coupon_data'] = $this->db->get_where('coupon', array(
                'coupon_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/coupon_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['title'] = $this->input->post('title');
            $data['code'] = $this->input->post('code');
            $data['till'] = $this->input->post('till');
            $data['spec'] = json_encode(array(
                                'set_type'=>$this->input->post('set_type'),
                                'set'=>json_encode($this->input->post($this->input->post('set_type'))),
                                'discount_type'=>$this->input->post('discount_type'),
                                'discount_value'=>$this->input->post('discount_value'),
                                'shipping_free'=>$this->input->post('shipping_free')
                            ));
            $this->db->where('coupon_id', $para2);
            $this->db->update('coupon', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('coupon_id', $para2);
            $this->db->delete('coupon');
        } elseif ($para1 == 'list') {
            $this->db->order_by('coupon_id', 'desc');
            $page_data['all_coupons'] = $this->db->get('coupon')->result_array();
            $this->load->view('back/admin/coupon_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/coupon_add');
        } elseif ($para1 == 'publish_set') {
            $product = $para2;
            if ($para3 == 'true') {
                $data['status'] = 'ok';
            } else {
                $data['status'] = '0';
            }
            $this->db->where('coupon_id', $product);
            $this->db->update('coupon', $data);
        } else {
            $page_data['page_name']      = "coupon";
            $page_data['all_coupons'] = $this->db->get('coupon')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*Product Sale Comparison Reports*/
    function report($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('report')) {
            redirect(base_url() . 'index.php/admin');
        }
        $page_data['page_name'] = "report";
        $page_data['products']  = $this->db->get('product')->result_array();
        $this->load->view('back/index', $page_data);
    }

    /*Product Stock Comparison Reports*/
    function report_stock($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('report')) {
            redirect(base_url() . 'index.php/admin');
        }
        $page_data['page_name'] = "report_stock";
        if ($this->input->post('product')) {
            $page_data['product_name'] = $this->crud_model->get_type_name_by_id('product', $this->input->post('product'), 'title');
            $page_data['product']      = $this->input->post('product');
        }
        $this->load->view('back/index', $page_data);
    }

    /*Product Wish Comparison Reports*/
    function report_wish($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('report')) {
            redirect(base_url() . 'index.php/admin');
        }
        $page_data['page_name'] = "report_wish";
        $this->load->view('back/index', $page_data);
    }

    /* Product add, edit, view, delete, stock increase, decrease, discount */
    function product($para1 = '', $para2 = '', $para3 = '')
    {
        if (!$this->crud_model->admin_permission('product')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $options = array();
            if ($_FILES["images"]['name'][0] == '') {
                $num_of_imgs = 0;
            } else {
                $num_of_imgs = count($_FILES["images"]['name']);
            }
            $data['title']              = $this->input->post('title');
            $data['vendor_id']          = $this->input->post('vendor');
            $data['category']           = $this->input->post('category');
            $data['tag']                = json_encode($this->input->post('tag'));
            $data['meta_keyword']       = $this->input->post('meta_keyword');
            $data['meta_title']         = $this->input->post('meta_title_tag');
            $data['brand']              = $this->input->post('brand');
            $data['is_condition_new']   = $this->input->post('is_condition');
            if($this->input->post('is_condition') == 0){
                $data['item_condition']     = $this->input->post('item_condition_new');
            }else{
                $data['item_condition']     = $this->input->post('item_condition_used');
            }
            $data['priority']           = $this->input->post('priority');
            $data['mpn']                = $this->input->post('mpn');
            $data['gtin']               = $this->input->post('gtin');
            $data['product_subtype']    = $this->input->post('product_subtype');
            $data['call_for_price']     = $this->input->post('call_for_price');
            if($this->input->post('call_for_price') == 'yes'){
                $data['item_price']     ='';
            }else{
                $data['item_price']     = $this->input->post('item_price');
            }
            $data['sale_price']         = $this->input->post('sale_price');
            $data['is_taxable']         = $this->input->post('is_taxable');
            $data['tax_rate']           = $this->input->post('tax_rate');
            $data['supplier_price']     = $this->input->post('supplier_price');
            $data['suppliers_id']       = $this->input->post('suppliers');
            $data['free_shipping']      = $this->input->post('free_shipping');
            if($this->input->post('country')==''){
                $data['country_id'] = json_encode(['0']);
            }elseif($this->input->post('country')=='0'){
                $data['country_id'] = json_encode(['0']);
            }else{
                $data['country_id'] = json_encode($this->input->post('country'));
            }
            $data['weight']             = $this->input->post('weight');
            if($this->input->post('free_shipping')=='yes'){
                 $data['shipping_price']     = 0;
            }else{
                 $data['shipping_price']= $this->input->post('shipping_price');
            }
            $data['inter_pack']         = $this->input->post('inter_pack');
            $data['case_pack']          = $this->input->post('case_pack');
            $data['dimension_width']    = $this->input->post('dimension_width');
            $data['dimension_height']   = $this->input->post('dimension_height');
            $data['dimension_length']   = $this->input->post('dimension_length');
            $data['shipping_by']        = $this->input->post('shipping_by');
            $data['shipping_days']      = $this->input->post('shipping_days');
            $data['is_hotdeal']         = $this->input->post('is_hotdeal');
            $data['is_home']            = $this->input->post('is_home');
            $data['is_vendor_home']     = $this->input->post('is_vendor_home');
            $data['is_vendor_special']  = $this->input->post('is_vendor_special');
            $data['is_template']        = $this->input->post('is_template');
            $data['user_req']           = $this->input->post('user_req');
            $data['price_offer']        = $this->input->post('price_offer');
            $data['rmaactive']          = $this->input->post('rmaactive');
            $data['refund_days']        = $this->input->post('refund_days');
            $data['refund_shipping']    = $this->input->post('refund_shipping');
            $data['quick_overview']     = $this->input->post('quick_overview');
            $data['description']        = $this->input->post('description');
            $data['specifications']     = $this->input->post('specifications');
            $data['inventory_control']  = $this->input->post('inventory_control');
            $data['inventory_rule']     = $this->input->post('inventory_rule');
            $data['stock']              = $this->input->post('stock');
            $data['stock_warning']      = $this->input->post('stock_warning');
            $data['is_visible']         = $this->input->post('product_available');      
            //$data['sub_category']       = $this->input->post('sub_category');
            $data['old_price']          = $this->input->post('old_price');
            $data['purchase_price']     = $this->input->post('purchase_price');
            $data['add_timestamp']      = time();
            $data['featured']           = '0';
            $data['status']             = 'ok';
            $data['rating_user']        = '[]';
            $data['tax']                = $this->input->post('tax');
            $data['discount']           = $this->input->post('discount');
            $data['discount_type']      = $this->input->post('discount_type');
            $data['tax_type']           = $this->input->post('tax_type');
            $data['shipping_cost']      = $this->input->post('shipping_cost');
            $data['color']              = json_encode($this->input->post('color'));
            $data['num_of_imgs']        = $num_of_imgs;
            $data['current_stock']      = $this->input->post('current_stock');
            $data['front_image']        = $this->input->post('front_image');
            $additional_fields['name']  = json_encode($this->input->post('ad_field_names'));
            $additional_fields['value'] = json_encode($this->input->post('ad_field_values'));
            $data['additional_fields']  = json_encode($additional_fields);
            $data['unit']               = $this->input->post('unit');
            $choice_titles              = $this->input->post('op_title');
            $choice_types               = $this->input->post('op_type');
            $choice_no                  = $this->input->post('op_no');
            $data['added_by']           = json_encode(array('type'=>'admin','id'=>$this->session->userdata('admin_id')));
			if(count($choice_titles ) > 0){
                            foreach ($choice_titles as $i => $row) {
                                    $choice_options         = $this->input->post('op_set'.$choice_no[$i]);
                                    $options[]              =   array(
                                    'no' => $choice_no[$i],
                                    'title' => $choice_titles[$i],
                                    'name' => 'choice_'.$choice_no[$i],
                                    'type' => $choice_types[$i],
                                    'option' => $choice_options
                                 );
                            }
			}
            $data['options']            = json_encode($options);
            $this->db->insert('product', $data);
            $id = $this->db->insert_id();
			$this->benchmark->mark_time();
            $this->crud_model->file_up("images", "product", $id, 'multi');
            if($this->input->post('download') == 'ok'){
                $rand           = substr(hash('sha512', rand()), 0, 20);
                $name           = $id.'_'.$rand.'_'.$_FILES['product_file']['name'];
                $da['download_name'] = $name;
                $da['download'] = 'ok';
                $folder = $this->db->get_where('general_settings', array('type' => 'file_folder'))->row()->value;
                move_uploaded_file($_FILES['product_file']['tmp_name'], 'uploads/file_products/' . $folder .'/' . $name);
            } else {
                $da['download'] = 'no';
            }
            $this->db->where('product_id', $id);
            $this->db->update('product', $da);
            recache();
        } else if ($para1 == "update") {            
            $options = array();
            if ($_FILES["images"]['name'][0] == '') {
                $num_of_imgs = 0;
            } else {
                $num_of_imgs = count($_FILES["images"]['name']);
            }
            $num                        = $this->crud_model->get_type_name_by_id('product', $para2, 'num_of_imgs');
            $download                   = $this->crud_model->get_type_name_by_id('product', $para2, 'download');
            $data['title']              = $this->input->post('title');
            $data['category']           = $this->input->post('category');
            $data['vendor_id']          = $this->input->post('vendor');
            $data['tag']                = json_encode($this->input->post('tag'));
            $data['meta_keyword']       = $this->input->post('meta_keyword');
            $data['meta_title']         = $this->input->post('meta_title_tag');
            $data['brand']              = $this->input->post('brand');
            $data['description']        = $this->input->post('description');
            $data['quick_overview']     = $this->input->post('quick_overview');
            $data['specifications']     = $this->input->post('specifications');
            $data['sub_category']       = $this->input->post('sub_category');
            $data['old_price']          = $this->input->post('old_price');
            $data['sale_price']         = $this->input->post('sale_price');
            $data['call_for_price']     = $this->input->post('call_for_price');
            if($this->input->post('call_for_price') == 'yes'){
                $data['item_price']     ='';
            }else{
                $data['item_price']     = $this->input->post('item_price');
            }
            $data['is_taxable']         = $this->input->post('is_taxable');
            $data['tax_rate']           = $this->input->post('tax_rate');
            $data['purchase_price']     = $this->input->post('purchase_price');
            $data['featured']           = $this->input->post('featured');
            $data['tax']                = $this->input->post('tax');
            $data['discount']           = $this->input->post('discount');
            $data['discount_type']      = $this->input->post('discount_type');
            $data['tax_type']           = $this->input->post('tax_type');
            $data['shipping_cost']      = $this->input->post('shipping_cost');
            $data['is_condition_new']   = $this->input->post('is_condition');
            if($data['is_condition_new']==0){
                $data['item_condition']     = $this->input->post('item_condition_new');
            }else{
                $data['item_condition']     = $this->input->post('item_condition_used');
            }
            $data['color']              = json_encode($this->input->post('color'));
            $data['num_of_imgs']        = $num + $num_of_imgs;
            $data['front_image']        = $this->input->post('front_image');
            $additional_fields['name']  = json_encode($this->input->post('ad_field_names'));
            $additional_fields['value'] = json_encode($this->input->post('ad_field_values'));
            $data['additional_fields']  = json_encode($additional_fields);
            $data['priority']           = $this->input->post('priority');
            $data['gtin']               = $this->input->post('gtin');
            $data['mpn']                = $this->input->post('mpn');
            $data['product_subtype']    = $this->input->post('product_subtype');
            $data['supplier_price']     = $this->input->post('supplier_price');
            $data['suppliers_id']       = $this->input->post('suppliers');
            $data['free_shipping']      = $this->input->post('free_shipping');
            if($this->input->post('country')==''){
                $data['country_id'] = json_encode(['0']);
            }else{
                $data['country_id'] = json_encode($this->input->post('country'));
            }
            $data['weight']             = $this->input->post('weight');
            if($this->input->post('free_shipping')=='yes'){
                 $data['shipping_price']     = 0;
            }else{
                 $data['shipping_price']= $this->input->post('shipping_price');
            }
            $data['inter_pack']         = $this->input->post('inter_pack');
            $data['case_pack']          = $this->input->post('case_pack');
            $data['dimension_width']    = $this->input->post('dimension_width');
            $data['dimension_height']   = $this->input->post('dimension_height');
            $data['dimension_length']   = $this->input->post('dimension_length');
            $data['shipping_by']        = $this->input->post('shipping_by');
            $data['shipping_days']      = $this->input->post('shipping_days');
            $data['is_hotdeal']         = $this->input->post('is_hotdeal');
            $data['is_home']            = $this->input->post('is_home');
            $data['is_vendor_home']     = $this->input->post('is_vendor_home');
            $data['is_vendor_special']  = $this->input->post('is_vendor_special');
            $data['is_template']        = $this->input->post('is_template');
            $data['user_req']           = $this->input->post('user_req');
            $data['price_offer']        = $this->input->post('price_offer');
            $data['rmaactive']          = $this->input->post('rmaactive');
            $data['refund_days']        = $this->input->post('refund_days');
            $data['refund_shipping']    = $this->input->post('refund_shipping');
            $data['inventory_control']  = $this->input->post('inventory_control');
            $data['inventory_rule']     = $this->input->post('inventory_rule');
            $data['stock']              = $this->input->post('stock');
            $data['is_visible']         = $this->input->post('product_available');         
            $data['stock_warning']      = $this->input->post('stock_warning');
            $data['unit']               = $this->input->post('unit');
            $choice_titles              = $this->input->post('op_title');
            $choice_types               = $this->input->post('op_type');
            $choice_no                  = $this->input->post('op_no');
			if(count($choice_titles ) > 0){
				foreach ($choice_titles as $i => $row) {
					$choice_options         = $this->input->post('op_set'.$choice_no[$i]);
					$options[]              =   array(
                                        'no' => $choice_no[$i],
                                        'title' => $choice_titles[$i],
                                        'name' => 'choice_'.$choice_no[$i],
                                        'type' => $choice_types[$i],
                                        'option' => $choice_options
                                        );
				}
			}
            $data['options']            = json_encode($options);
            $this->crud_model->file_up("images", "product", $para2, 'multi');
            if($download == 'ok' && $_FILES['product_file']['name'] !== ''){
                $rand           = substr(hash('sha512', rand()), 0, 20);
                $name           = $para2.'_'.$rand.'_'.$_FILES['product_file']['name'];
                $data['download_name'] = $name;
                $folder = $this->db->get_where('general_settings', array('type' => 'file_folder'))->row()->value;
                move_uploaded_file($_FILES['product_file']['tmp_name'], 'uploads/file_products/' . $folder .'/' . $name);
            }
            $this->db->where('product_id', $para2);
            $this->db->update('product', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['all_tags'] = $this->db->get_where('manage_tags', array('status' => 'yes' ))->result_array();
            $ff = $this->db->get_where('product_field_group',array('is_default'=>1))->row()->product_field_group_id;
            $page_data['all_default_group'] =  $this->db->get_where('product_field', array('product_field_group_id' => $ff))->result_array();
            $page_data['all_field_group'] = $this->db->get('product_field_group')->result_array();
            $page_data['all_category'] =  $this->crud_model->fetchCategoryTree();
            $page_data['all_country'] = $this->db->get_where('country', array('status' => 1
            ))->result_array();
            $page_data['all_dynamic_list'] = $this->db->get('dynamic_selection_lists')->result_array();
            $page_data['product_data'] = $this->db->get_where('product', array(
                'product_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/product_edit', $page_data);
        } else if ($para1 == 'view') {
            $page_data['product_data'] = $this->db->get_where('product', array(
                'product_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/product_view', $page_data);
        } elseif ($para1 == 'delete') {
            $this->crud_model->file_dlt('product', $para2, '.jpg', 'multi');
            $this->db->where('product_id', $para2);
            $this->db->delete('product');
            recache();
        }  elseif ($para1 == 'list') {
            $this->db->order_by('product_id', 'desc');
            $page_data['all_product'] = $this->db->get('product')->result_array();
            $this->load->view('back/admin/product_list', $page_data);
        } elseif ($para1 == 'list_data') {
            $limit      = $this->input->get('limit');
            $search     = $this->input->get('search');
            $order      = $this->input->get('order');
            $offset     = $this->input->get('offset');
            $sort       = $this->input->get('sort');
            if($search){
                $this->db->like('title', $search, 'both');
            }
            $total      = $this->db->get('product')->num_rows();
            $this->db->limit($limit);
			if($sort == ''){
				$sort = 'product_id';
				$order = 'DESC';
			}
            $this->db->order_by($sort,$order);
            if($search){
                $this->db->like('title', $search, 'both');
            }
            $products   = $this->db->get('product', $limit, $offset)->result_array();
            $data       = array();
            foreach ($products as $row) {

                $res    = array(
                             'image' => '',
                             'title' => '',
                             'current_stock' => '',
                             'deal' => '',
                             'publish' => '',
                             'featured' => '',
                             'options' => ''
                          );

                $res['image']  = '<img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="'.$this->crud_model->file_view('product',$row['product_id'],'','','thumb','src','multi','one').'"  />';
                $res['title']  = $row['category'].' - '.$row['title'];
                if($row['status'] == 'ok'){
                    $res['publish']  = '<input id="pub_'.$row['product_id'].'" class="sw1" type="checkbox" data-id="'.$row['product_id'].'" checked />';
                } else {
                    $res['publish']  = '<input id="pub_'.$row['product_id'].'" class="sw1" type="checkbox" data-id="'.$row['product_id'].'" />';
                }
                if($row['current_stock'] > 0){ 
                    $res['current_stock']  = $row['current_stock'].$row['unit'].'(s)';                     
                } else if($row['download'] == 'ok'){
                    $res['current_stock']  = '<span class="label label-info">'.translate('digital_product').'</span>';
                } else {
                    $res['current_stock']  = '<span class="label label-danger">'.translate('out_of_stock').'</span>';
                }
                if($row['deal'] == 'ok'){
                    $res['deal']  = '<input id="deal_'.$row['product_id'].'" class="sw3" type="checkbox" data-id="'.$row['product_id'].'" checked />';
                } else {
                    $res['deal']  = '<input id="deal_'.$row['product_id'].'" class="sw3" type="checkbox" data-id="'.$row['product_id'].'" />';
                }
                if($row['featured'] == 'ok'){
                    $res['featured'] = '<input id="fet_'.$row['product_id'].'" class="sw2" type="checkbox" data-id="'.$row['product_id'].'" checked />';
                } else {
                    $res['featured'] = '<input id="fet_'.$row['product_id'].'" class="sw2" type="checkbox" data-id="'.$row['product_id'].'" />';
                }

                //add html for action
                $res['options'] = "  <a class=\"btn btn-info btn-xs btn-labeled fa fa-location-arrow\" data-toggle=\"tooltip\" 
                                onclick=\"ajax_set_full('view','".translate('view_product')."','".translate('successfully_viewed!')."','product_view','".$row['product_id']."');proceed('to_list');\" data-original-title=\"View\" data-container=\"body\">
                                    ".translate('view')."
                            </a>
                            <a class=\"btn btn-purple btn-xs btn-labeled fa fa-tag\" data-toggle=\"tooltip\"
                                onclick=\"ajax_modal('add_discount','".translate('view_discount')."','".translate('viewing_discount!')."','add_discount','".$row['product_id']."')\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('discount')."
                            </a>
                            <a class=\"btn btn-mint btn-xs btn-labeled fa fa-plus-square\" data-toggle=\"tooltip\" 
                                onclick=\"ajax_modal('add_stock','".translate('add_product_quantity')."','".translate('quantity_added!')."','stock_add','".$row['product_id']."')\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('stock')."
                            </a>
                            <a class=\"btn btn-dark btn-xs btn-labeled fa fa-minus-square\" data-toggle=\"tooltip\" 
                                onclick=\"ajax_modal('destroy_stock','".translate('reduce_product_quantity')."','".translate('quantity_reduced!')."','destroy_stock','".$row['product_id']."')\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('destroy')."
                            </a>
                            
                            <a class=\"btn btn-success btn-xs btn-labeled fa fa-wrench\" data-toggle=\"tooltip\" 
                                onclick=\"ajax_set_full('edit','".translate('edit_product')."','".translate('successfully_edited!')."','product_edit','".$row['product_id']."');proceed('to_list');\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('edit')."
                            </a>
                            
                            <a onclick=\"delete_confirm('".$row['product_id']."','".translate('really_want_to_delete_this?')."')\" 
                                class=\"btn btn-danger btn-xs btn-labeled fa fa-trash\" data-toggle=\"tooltip\" data-original-title=\"Delete\" data-container=\"body\">
                                    ".translate('delete')."
                            </a>";
                $data[] = $res;
            }
            $result = array(
                             'total' => $total,
                             'rows' => $data
                           );

            echo json_encode($result);
        }
         else if ($para1 == 'dlt_img') {
            $a = explode('_', $para2);
            $this->crud_model->file_dlt('product', $a[0], '.jpg', 'multi', $a[1]);
            recache();
        }elseif ($para1 == 'product_field') {
            $query = "select * from product_field_group WHERE category_id like '%\"".$para2."\"%'";
            $qry = $this->db->query($query);
            $nm_rw = $qry->num_rows();
            echo'<select class="demo-chosen-select" name="field_group_cat"  id="field_group_cat">';
            if($nm_rw>0){
                $products   = $qry->result_array();
                
                foreach($products as $product){
                    echo "<option value='".$product['product_field_group_id']."'>".$product['group_name']."</option>";
                }
            }else{
                echo "<option value=''>None</option>";
            }
            echo "</select>";
            
        }elseif ($para1 == 'group_field') {
            
            $query = "select * from product_field WHERE product_field_group_id = $para2";
            $qry = $this->db->query($query);
            $nm_rw = $qry->num_rows();
            echo'<div class="form-group btm_border"  id="field_group_cat">';
            if($nm_rw>0){
                $products   = $qry->result_array();               
                foreach($products as $product){
                    echo "<label class='col-sm-4 control-label' for='demo-hor-5'>".$product['field_name']."</label>";
                    echo "<div class='col-sm-6'><input type='text' id='demo-hor-5' class='form-control'>"."</div>";
                }
            }
            echo "</div>";
            
        }
        elseif ($para1 == 'sub_by_cat') {
            echo $this->crud_model->select_html('category', 'category_id', 'category_name', 'add', 'demo-chosen-select required', '', 'parentid', $para2, 'get_sub_res');
        } elseif ($para1 == 'brand_by_cat') {
            echo $this->crud_model->select_html('brand', 'brand', 'name', 'add', 'demo-chosen-select', '', 'category', $para2, '');
        } elseif ($para1 == 'product_by_sub') {
            echo $this->crud_model->select_html('product', 'product', 'title', 'add', 'demo-chosen-select required', '', 'category', $para2, 'get_pro_res');
        } elseif ($para1 == 'pur_by_pro') {
            echo $this->crud_model->get_type_name_by_id('product', $para2, 'purchase_price');
        } elseif ($para1 == 'add') {
            $page_data['all_tags'] = $this->db->get_where('manage_tags', array('status' => 'yes' ))->result_array();
            $ff = $this->db->get_where('product_field_group',array('is_default'=>1))->row()->product_field_group_id;
            $page_data['all_default_group'] =  $this->db->get_where('product_field', array('product_field_group_id' => $ff))->result_array();
            $page_data['all_field_group'] = $this->db->get('product_field_group')->result_array();
            $page_data['all_category'] =  $this->crud_model->fetchCategoryTree();
            $page_data['all_country'] = $this->db->get_where('country', array('status' => 1
            ))->result_array();
            $page_data['all_dynamic_list'] = $this->db->get('dynamic_selection_lists')->result_array();
            $page_data['product_data'] = $this->db->get_where('product', array(
                'product_id' => $para2
            ))->result_array();
            $page_data['all_dynamic_list'] = $this->db->get('dynamic_selection_lists')->result_array();
            $this->load->view('back/admin/product_add',$page_data);
        } elseif ($para1 == 'add_stock') {
            $data['product'] = $para2;
            $this->load->view('back/admin/product_stock_add', $data);
        } elseif ($para1 == 'destroy_stock') {
            $data['product'] = $para2;
            $this->load->view('back/admin/product_stock_destroy', $data);
        } elseif ($para1 == 'stock_report') {
            $data['product'] = $para2;
            $this->load->view('back/admin/product_stock_report', $data);
        } elseif ($para1 == 'sale_report') {
            $data['product'] = $para2;
            $this->load->view('back/admin/product_sale_report', $data);
        } elseif ($para1 == 'add_discount') {
            $data['product'] = $para2;
            $this->load->view('back/admin/product_add_discount', $data);
        } elseif ($para1 == 'product_featured_set') {
            $product = $para2;
            if ($para3 == 'true') {
                $data['featured'] = 'ok';
            } else {
                $data['featured'] = '0';
            }
            $this->db->where('product_id', $product);
            $this->db->update('product', $data);
            recache();
        } elseif ($para1 == 'product_deal_set') {
            $product = $para2;
            if ($para3 == 'true') {
                $data['deal'] = 'ok';
            } else {
                $data['deal'] = '0';
            }
            $this->db->where('product_id', $product);
            $this->db->update('product', $data);
            recache();
        } elseif ($para1 == 'product_publish_set') {
            $product = $para2;
            if ($para3 == 'true') {
                $data['status'] = 'ok';
            } else {
                $data['status'] = '0';
            }
            $this->db->where('product_id', $product);
            $this->db->update('product', $data);
            recache();
        } elseif ($para1 == 'add_discount_set') {
            $product               = $this->input->post('product');
            $data['discount']      = $this->input->post('discount');
            $data['discount_type'] = $this->input->post('discount_type');
            $this->db->where('product_id', $product);
            $this->db->update('product', $data);
            recache();
        }elseif ($para1 == 'search_product'){
			$limit      = $this->input->get('limit');
            $search     = $this->input->get('search');
            $order      = $this->input->get('order');
            $offset     = $this->input->get('offset');
            $sort       = $this->input->get('sort');
			
			$product_id     = $this->input->get('product_id');
            $product_name   = $this->input->get('product_name');
            $category       = $this->input->get('category');
            $sort_by        = $this->input->get('sort_by');
            $vendor         = $this->input->get('vendor');
            $tag_name       = $this->input->get('tag_name');
			
			$query = "SELECT * FROM product WHERE 1=1 ";
			
			if($product_id){
				$this->db->where('product_id', $product_id);
				$query .=" AND product_id='".$product_id."'";
			}
			if($product_name){
				$this->db->like('title', $product_name, 'both');
				$query .=" AND title LIKE '%".$product_name."%'";
			}
			if($category){
				$this->db->where('category', $category);
				$query .=" AND category='".$category."'";
			}
			if($approved){
				$this->db->where('is_approved', $approved);
				$query .=" AND is_approved='".$approved."'";	
			}
			if($pending){
				$this->db->where('is_approved', $pending);
				$query .=" AND is_approved='".$pending."'";	
			}
			
			
			
			if($sort_by){
				$sort = $sort_by;
				$order = 'ASC';
			}
			if($vendor){
				$this->db->where('vendor_id', $vendor);
				$query .=" AND vendor_id='".$vendor."'";
			}
			if($tag_name){
				$this->db->like('tag', $tag_name, 'both');
				$query .=" AND tag LIKE '%".$tag_name."%'";
			}
            if($search){
                $this->db->like('title', $search, 'both');
				$query .=" AND title LIKE '%".$search."%'";
            }
			
            $total      = $this->db->get('product')->num_rows();
            //$last_qry = $this->db->last_query();
			//$this->db->limit($limit);
			if($sort == ''){
				$sort = 'product_id';
				$order = 'DESC';
			}
            $query .=" ORDER BY ".$sort." ".$order;
            
            //$this->db->order_by($sort,$order);
            //$products   = $this->db->get('product', $limit, $offset)->result_array();
			$products   = $this->db->query($query)->result_array();
			$last_qry = $this->db->last_query();
			$data       = array();
            //$last_qry = $this->db->last_query();
            foreach ($products as $row) {
                $res    = array(
                             'image' => '',
                             'title' => '',
                             'current_stock' => '',
                             'deal' => '',
                             'publish' => '',
                             'featured' => '',
                             'options' => ''
                          );

                $res['image']  = '<img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="'.$this->crud_model->file_view('product',$row['product_id'],'','','thumb','src','multi','one').'"  />';
                $res['title']  = $row['title'];
                if($row['status'] == 'ok'){
                    $res['publish']  = '<input id="pub_'.$row['product_id'].'" class="sw1" type="checkbox" data-id="'.$row['product_id'].'" checked />';
                } else {
                    $res['publish']  = '<input id="pub_'.$row['product_id'].'" class="sw1" type="checkbox" data-id="'.$row['product_id'].'" />';
                }
                if($row['current_stock'] > 0){
                    $res['current_stock']  = $row['current_stock'].$row['unit'].'(s)';
                } else if($row['download'] == 'ok'){
                    $res['current_stock']  = '<span class="label label-info">'.translate('digital_product').'</span>';
                } else {
                    $res['current_stock']  = '<span class="label label-danger">'.translate('out_of_stock').'</span>';
                }
                if($row['deal'] == 'ok'){
                    $res['deal']  = '<input id="deal_'.$row['product_id'].'" class="sw3" type="checkbox" data-id="'.$row['product_id'].'" checked />';
                } else {
                    $res['deal']  = '<input id="deal_'.$row['product_id'].'" class="sw3" type="checkbox" data-id="'.$row['product_id'].'" />';
                }
                if($row['featured'] == 'ok'){
                    $res['featured'] = '<input id="fet_'.$row['product_id'].'" class="sw2" type="checkbox" data-id="'.$row['product_id'].'" checked />';
                } else {
                    $res['featured'] = '<input id="fet_'.$row['product_id'].'" class="sw2" type="checkbox" data-id="'.$row['product_id'].'" />';
                }

                //add html for action
                $res['options'] = "  <a class=\"btn btn-info btn-xs btn-labeled fa fa-location-arrow\" data-toggle=\"tooltip\"
                                onclick=\"ajax_set_full('view','".translate('view_product')."','".translate('successfully_viewed!')."','product_view','".$row['product_id']."');proceed('to_list');\" data-original-title=\"View\" data-container=\"body\">
                                    ".translate('view')."
                            </a>
                            <a class=\"btn btn-purple btn-xs btn-labeled fa fa-tag\" data-toggle=\"tooltip\"
                                onclick=\"ajax_modal('add_discount','".translate('view_discount')."','".translate('viewing_discount!')."','add_discount','".$row['product_id']."')\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('discount')."
                            </a>
                            <a class=\"btn btn-mint btn-xs btn-labeled fa fa-plus-square\" data-toggle=\"tooltip\"
                                onclick=\"ajax_modal('add_stock','".translate('add_product_quantity')."','".translate('quantity_added!')."','stock_add','".$row['product_id']."')\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('stock')."
                            </a>
                            <a class=\"btn btn-dark btn-xs btn-labeled fa fa-minus-square\" data-toggle=\"tooltip\"
                                onclick=\"ajax_modal('destroy_stock','".translate('reduce_product_quantity')."','".translate('quantity_reduced!')."','destroy_stock','".$row['product_id']."')\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('destroy')."
                            </a>

                            <a class=\"btn btn-success btn-xs btn-labeled fa fa-wrench\" data-toggle=\"tooltip\"
                                onclick=\"ajax_set_full('edit','".translate('edit_product')."','".translate('successfully_edited!')."','product_edit','".$row['product_id']."');proceed('to_list');\" data-original-title=\"Edit\" data-container=\"body\">
                                    ".translate('edit')."
                            </a>

                            <a onclick=\"delete_confirm('".$row['product_id']."','".translate('really_want_to_delete_this?')."')\"
                                class=\"btn btn-danger btn-xs btn-labeled fa fa-trash\" data-toggle=\"tooltip\" data-original-title=\"Delete\" data-container=\"body\">
                                    ".translate('delete')."
                            </a>";
                $data[] = $res;
            }
            $result = array(
                             'total' => $total,
                             'rows' => $data
                           );
			
            echo json_encode($result);
		}
        else {
            $page_data['page_name']   = "product";
            $page_data['all_product'] = $this->db->get('product')->result_array();
            $this->load->view('back/index', $page_data);        
        }
    }
    
    	function search_product($para1='',$para2=''){
            if (!$this->crud_model->admin_permission('search_product')) {
                redirect(base_url() . 'index.php/admin');
            }
            
                if ($para1 == 'delete') {
                    $this->crud_model->file_dlt('product', $para2, '.jpg', 'multi');
                    $this->db->where('product_id', $para2);
                    $this->db->delete('product');
                     redirect(base_url().'search_product');
                    } else{
                    $page_data['page_name'] = "product_search_result";
                    $productname = $this->input->post('product_name');
                    $vendor =   $this->input->post('vendor');
                    $category = $this->input->post('category');
					$approved = $this->input->post('is_approved');
					$pending = $this->input->post('is_approved');
					$declined = $this->input->post('is_approved');
					$stock_warning = $this->input->post('is_approved');
					$is_template = $this->input->post('is_template');
                    $tag = $this->input->post('tag_name');
                    $sort = $this->input->post('sort_by');
                    $page_data['all_products'] = $this->crud_model->search_product($productname,$vendor,$category,$approved,$pending,$declined,$stock_warning,$is_template,$tag,$sort);
                    $this->load->view('back/index', $page_data);
                }

                
        }
        
        function update_product($id= null)
        {
            if (!$this->crud_model->admin_permission('update_product')) {
                redirect(base_url() . 'index.php/admin');
            }
        $this->load->library("form_validation");
        $this->form_validation->set_rules("title","Title","required");


        if($this->form_validation->run() == false){
            $page_data['page_name'] = "product_update";
            $page_data['all_tags'] = $this->db->get_where('manage_tags', array('status' => 'yes' ))->result_array();
            $ff = $this->db->get_where('product_field_group',array('is_default'=>1))->row()->product_field_group_id;
            $page_data['all_default_group'] =  $this->db->get_where('product_field', array('product_field_group_id' => $ff))->result_array();
            $page_data['all_field_group'] = $this->db->get('product_field_group')->result_array();
            $page_data['all_category'] =  $this->crud_model->fetchCategoryTree();
            $page_data['all_country'] = $this->db->get_where('country', array('status' => 1
            ))->result_array();
            $page_data['all_dynamic_list'] = $this->db->get('dynamic_selection_lists')->result_array();
            
            $page_data['product_data'] = $this->crud_model->GetSingleProduct($id);
            $this->load->view('back/index', $page_data);
        } else{
            
            $id= $this->input->post('product_id');
            $data = array();
                        $options = array();
            if ($_FILES["images"]['name'][0] == '') {
                $num_of_imgs = 0;
            } else {
                $num_of_imgs = count($_FILES["images"]['name']);
            }
            $num                        = $this->crud_model->get_type_name_by_id('product', $id, 'num_of_imgs');
            $download                   = $this->crud_model->get_type_name_by_id('product', $id, 'download');
            $data['is_approved']        = $this->input->post('is_approved');
            $data['approval_note']      = $this->input->post('approval_note');
            $data['title']              = $this->input->post('title');
            $data['category']           = $this->input->post('category');
            $data['vendor_id']          = $this->input->post('vendor');
            $data['tag']                = json_encode($this->input->post('tag'));
            $data['meta_keyword']       = $this->input->post('meta_keyword');
            $data['meta_title']         = $this->input->post('meta_title_tag');
            $data['brand']              = $this->input->post('brand');
            $data['description']        = $this->input->post('description');
            $data['quick_overview']     = $this->input->post('quick_overview');
            $data['specifications']     = $this->input->post('specifications');
            $data['sub_category']       = $this->input->post('sub_category');
            $data['old_price']          = $this->input->post('old_price');
            $data['sale_price']         = $this->input->post('sale_price');
            $data['call_for_price']     = $this->input->post('call_for_price');
            if($this->input->post('call_for_price') == 'yes'){
                $data['item_price']     ='';
            }else{
                $data['item_price']     = $this->input->post('item_price');
            }
            $data['is_taxable']         = $this->input->post('is_taxable');
            $data['tax_rate']           = $this->input->post('tax_rate');
            $data['purchase_price']     = $this->input->post('purchase_price');
            $data['featured']           = $this->input->post('featured');
            $data['tax']                = $this->input->post('tax');
            $data['discount']           = $this->input->post('discount');
            $data['discount_type']      = $this->input->post('discount_type');
            $data['tax_type']           = $this->input->post('tax_type');
            $data['shipping_cost']      = $this->input->post('shipping_cost');
            $data['is_condition_new']   = $this->input->post('is_condition');
            if($data['is_condition_new']==0){
                $data['item_condition']     = $this->input->post('item_condition_new');
            }else{
                $data['item_condition']     = $this->input->post('item_condition_used');
            }
            $data['color']              = json_encode($this->input->post('color'));
            $data['num_of_imgs']        = $num + $num_of_imgs;
            $data['front_image']        = $this->input->post('front_image');
            $additional_fields['name']  = json_encode($this->input->post('ad_field_names'));
            $additional_fields['value'] = json_encode($this->input->post('ad_field_values'));
            $data['additional_fields']  = json_encode($additional_fields);
            $data['priority']           = $this->input->post('priority');
            $data['gtin']               = $this->input->post('gtin');
            $data['mpn']                = $this->input->post('mpn');
            $data['product_subtype']    = $this->input->post('product_subtype');
            $data['supplier_price']     = $this->input->post('supplier_price');
            $data['suppliers_id']       = $this->input->post('suppliers');
            $data['free_shipping']      = $this->input->post('free_shipping');
            if($this->input->post('country')==''){
                $data['country_id'] = json_encode(['0']);
            }else{
                $data['country_id'] = json_encode($this->input->post('country'));
            }
            $data['weight']             = $this->input->post('weight');
            if($this->input->post('free_shipping')=='yes'){
                 $data['shipping_price']     = 0;
            }else{
                 $data['shipping_price']= $this->input->post('shipping_price');
            }
            $data['inter_pack']         = $this->input->post('inter_pack');
            $data['case_pack']          = $this->input->post('case_pack');
            $data['dimension_width']    = $this->input->post('dimension_width');
            $data['dimension_height']   = $this->input->post('dimension_height');
            $data['dimension_length']   = $this->input->post('dimension_length');
            $data['shipping_by']        = $this->input->post('shipping_by');
            $data['shipping_days']      = $this->input->post('shipping_days');
            $data['is_hotdeal']         = $this->input->post('is_hotdeal');
            $data['is_home']            = $this->input->post('is_home');
            $data['is_vendor_home']     = $this->input->post('is_vendor_home');
            $data['is_vendor_special']  = $this->input->post('is_vendor_special');
            $data['is_template']        = $this->input->post('is_template');
            $data['user_req']           = $this->input->post('user_req');
            $data['price_offer']        = $this->input->post('price_offer');
            $data['rmaactive']          = $this->input->post('rmaactive');
            $data['refund_days']        = $this->input->post('refund_days');
            $data['refund_shipping']    = $this->input->post('refund_shipping');
            $data['inventory_control']  = $this->input->post('inventory_control');
            $data['inventory_rule']     = $this->input->post('inventory_rule');
            $data['stock']              = $this->input->post('stock');
            $data['stock_warning']      = $this->input->post('stock_warning');
            $data['is_visible']         = $this->input->post('product_available');
            $data['min_order']          = $this->input->post('min_order');
            $data['max_order']          = $this->input->post('max_order');
            $data['product_expire_date']= $this->input->post('product_expire_date');
            $data['available_date']     = $this->input->post('available_date');
            $data['unit']               = $this->input->post('unit');
            $choice_titles              = $this->input->post('op_title');
            $choice_types               = $this->input->post('op_type');
            $choice_no                  = $this->input->post('op_no');
			if(count($choice_titles ) > 0){
				foreach ($choice_titles as $i => $row) {
					$choice_options         = $this->input->post('op_set'.$choice_no[$i]);
					$options[]              =   array(
                                        'no' => $choice_no[$i],
                                        'title' => $choice_titles[$i],
                                        'name' => 'choice_'.$choice_no[$i],
                                        'type' => $choice_types[$i],
                                        'option' => $choice_options
                                        );
				}
			}
            $data['options']            = json_encode($options);
            $para2 = $id;
            $this->crud_model->file_up("images", "product",$para2, 'multi');
            
            if($download == 'ok' && $_FILES['product_file']['name'] !== ''){
                $rand           = substr(hash('sha512', rand()), 0, 20);
                $name           = $para2.'_'.$rand.'_'.$_FILES['product_file']['name'];
                $data['download_name'] = $name;
                $folder = $this->db->get_where('general_settings', array('type' => 'file_folder'))->row()->value;
                move_uploaded_file($_FILES['product_file']['tmp_name'], 'uploads/file_products/' . $folder .'/' . $name);
            }

            $this->db->where('product_id',$id );
            $product_updated=$this->db->update('product',$data);
            /*Account Information*/

            if($product_updated){

                $this->session->set_flashdata('success',"User updated successfully");
            }else{
                $this->session->set_flashdata('failed',"Database operation failed");
            }
            //echo $this->db->last_query();
            redirect("admin/search_product");
            recache();
        }
    }
    
     function product_insert($id= null)
        {
         if (!$this->crud_model->admin_permission('product_insert')) {
            redirect(base_url() . 'index.php/admin');
        }
            $this->load->library("form_validation");
            $this->form_validation->set_rules("title","Title","required");
            if($this->form_validation->run() == false){
                $page_data['page_name'] = "product_insert";
                $page_data['all_tags'] = $this->db->get_where('manage_tags', array('status' => 'yes' ))->result_array();
                $ff = $this->db->get_where('product_field_group',array('is_default'=>1))->row()->product_field_group_id;
                $page_data['all_default_group'] =  $this->db->get_where('product_field', array('product_field_group_id' => $ff))->result_array();
                $page_data['all_field_group'] = $this->db->get('product_field_group')->result_array();
                $page_data['all_category'] =  $this->crud_model->fetchCategoryTree();
                $page_data['all_country'] = $this->db->get_where('country', array('status' => 1
                ))->result_array();
                $page_data['all_dynamic_list'] = $this->db->get('dynamic_selection_lists')->result_array();

                $page_data['product_data'] = $this->crud_model->GetSingleProduct($id);
                $this->load->view('back/index', $page_data);
            }
            else {
                $options = array();
            if ($_FILES["images"]['name'][0] == '') {
                $num_of_imgs = 0;
            } else {
                $num_of_imgs = count($_FILES["images"]['name']);
            }
            $data['is_approved']        = $this->input->post('is_approved');
            $data['approval_note']      = $this->input->post('approval_note');
            $data['title']              = $this->input->post('title');
            $data['vendor_id']          = $this->input->post('vendor');
            $data['category']           = $this->input->post('category');
            $data['tag']                = json_encode($this->input->post('tag'));
            $data['meta_keyword']       = $this->input->post('meta_keyword');
            $data['meta_title']         = $this->input->post('meta_title_tag');
            $data['brand']              = $this->input->post('brand');
            $data['is_condition_new']   = $this->input->post('is_condition');
            if($this->input->post('is_condition') == 0){
                $data['item_condition']     = $this->input->post('item_condition_new');
            }else{
                $data['item_condition']     = $this->input->post('item_condition_used');
            }
            $data['priority']           = $this->input->post('priority');
            $data['mpn']                = $this->input->post('mpn');
            $data['gtin']               = $this->input->post('gtin');
            $data['product_subtype']    = $this->input->post('product_subtype');
            $data['call_for_price']     = $this->input->post('call_for_price');
            if($this->input->post('call_for_price') == 'yes'){
                $data['item_price']     ='';
            }else{
                $data['item_price']     = $this->input->post('item_price');
            }
            $data['sale_price']         = $this->input->post('sale_price');
            $data['is_taxable']         = $this->input->post('is_taxable');
            $data['tax_rate']           = $this->input->post('tax_rate');
            $data['supplier_price']     = $this->input->post('supplier_price');
            $data['suppliers_id']       = $this->input->post('suppliers');
            $data['free_shipping']      = $this->input->post('free_shipping');
            if($this->input->post('country')==''){
                $data['country_id'] = json_encode(['0']);
            }elseif($this->input->post('country')=='0'){
                $data['country_id'] = json_encode(['0']);
            }else{
                $data['country_id'] = json_encode($this->input->post('country'));
            }
            $data['weight']             = $this->input->post('weight');
            if($this->input->post('free_shipping')=='yes'){
                 $data['shipping_price']     = 0;
            }else{
                 $data['shipping_price']= $this->input->post('shipping_price');
            }
            $data['inter_pack']         = $this->input->post('inter_pack');
            $data['case_pack']          = $this->input->post('case_pack');
            $data['dimension_width']    = $this->input->post('dimension_width');
            $data['dimension_height']   = $this->input->post('dimension_height');
            $data['dimension_length']   = $this->input->post('dimension_length');
            $data['shipping_by']        = $this->input->post('shipping_by');
            $data['shipping_days']      = $this->input->post('shipping_days');
            $data['is_hotdeal']         = $this->input->post('is_hotdeal');
            $data['is_home']            = $this->input->post('is_home');
            $data['is_vendor_home']     = $this->input->post('is_vendor_home');
            $data['is_vendor_special']  = $this->input->post('is_vendor_special');
            $data['is_template']        = $this->input->post('is_template');
            $data['user_req']           = $this->input->post('user_req');
            $data['price_offer']        = $this->input->post('price_offer');
            $data['rmaactive']          = $this->input->post('rmaactive');
            $data['refund_days']        = $this->input->post('refund_days');
            $data['refund_shipping']    = $this->input->post('refund_shipping');
            $data['quick_overview']     = $this->input->post('quick_overview');
            $data['description']        = $this->input->post('description');
            $data['specifications']     = $this->input->post('specifications');
            $data['inventory_control']  = $this->input->post('inventory_control');
            $data['inventory_rule']     = $this->input->post('inventory_rule');
            $data['stock']              = $this->input->post('stock');
            $data['stock_warning']      = $this->input->post('stock_warning');
            $data['is_visible']         = $this->input->post('product_available');
            $data['min_order']          = $this->input->post('min_order');
            $data['max_order']          = $this->input->post('max_order');
            $data['product_expire_date']= $this->input->post('product_expire_date');
            $data['available_date']     = $this->input->post('available_date');
            //$data['sub_category']       = $this->input->post('sub_category');
            $data['old_price']          = $this->input->post('old_price');
            $data['purchase_price']     = $this->input->post('purchase_price');
            $data['add_timestamp']      = time();
            $data['featured']           = '0';
            $data['status']             = 'ok';
            $data['rating_user']        = '[]';
            $data['tax']                = $this->input->post('tax');
            $data['discount']           = $this->input->post('discount');
            $data['discount_type']      = $this->input->post('discount_type');
            $data['tax_type']           = $this->input->post('tax_type');
            $data['shipping_cost']      = $this->input->post('shipping_cost');
            $data['color']              = json_encode($this->input->post('color'));
            $data['num_of_imgs']        = $num_of_imgs;
            $data['current_stock']      = $this->input->post('current_stock');
            $data['front_image']        = $this->input->post('front_image');
            $additional_fields['name']  = json_encode($this->input->post('ad_field_names'));
            $additional_fields['value'] = json_encode($this->input->post('ad_field_values'));
            $data['additional_fields']  = json_encode($additional_fields);
            $data['unit']               = $this->input->post('unit');
            $choice_titles              = $this->input->post('op_title');
            $choice_types               = $this->input->post('op_type');
            $choice_no                  = $this->input->post('op_no');
            $data['added_by']           = json_encode(array('type'=>'admin','id'=>$this->session->userdata('admin_id')));
			if(count($choice_titles ) > 0){
                            foreach ($choice_titles as $i => $row) {
                                    $choice_options         = $this->input->post('op_set'.$choice_no[$i]);
                                    $options[]              =   array(
                                    'no' => $choice_no[$i],
                                    'title' => $choice_titles[$i],
                                    'name' => 'choice_'.$choice_no[$i],
                                    'type' => $choice_types[$i],
                                    'option' => $choice_options
                                 );
                            }
			}
                $data['options']            = json_encode($options);
               $product_insert =  $this->db->insert('product', $data);
                $id = $this->db->insert_id();
                $this->benchmark->mark_time();
                $this->crud_model->file_up("images", "product", $id, 'multi');
                
                if($this->input->post('download') == 'ok'){
                    $rand           = substr(hash('sha512', rand()), 0, 20);
                    $name           = $id.'_'.$rand.'_'.$_FILES['product_file']['name'];
                    $da['download_name'] = $name;
                    $da['download'] = 'ok';
                    $folder = $this->db->get_where('general_settings', array('type' => 'file_folder'))->row()->value;
                    move_uploaded_file($_FILES['product_file']['tmp_name'], 'uploads/file_products/' . $folder .'/' . $name);
                } else {
                    $da['download'] = 'no';
                }
                $this->db->where('product_id', $id);
                $this->db->update('product', $da);

                
                   if($product_insert){
                        $this->session->set_flashdata('success',"User updated successfully");
                    }else{
                        $this->session->set_flashdata('failed',"Database operation failed");
                    }
            //echo $this->db->last_query();
                redirect("admin/search_product");
                recache();
            }
        }

        
    /* Product Stock add, edit, view, delete, stock increase, decrease, discount */
    function stock($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('stock')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['type']         = 'add';
            $data['category']     = $this->input->post('category');
            $data['sub_category'] = $this->input->post('sub_category');
            $data['product']      = $this->input->post('product');
            $data['quantity']     = $this->input->post('quantity');
            $data['rate']         = $this->input->post('rate');
            $data['total']        = $this->input->post('total');
            $data['reason_note']  = $this->input->post('reason_note');
            $data['datetime']     = time();
            $this->db->insert('stock', $data);
            $prev_quantity          = $this->crud_model->get_type_name_by_id('product', $data['product'], 'current_stock');
            $data1['current_stock'] = $prev_quantity + $data['quantity'];
            $this->db->where('product_id', $data['product']);
            $this->db->update('product', $data1);
            recache();
        } else if ($para1 == 'do_destroy') {
            $data['type']         = 'destroy';
            $data['category']     = $this->input->post('category');
            $data['sub_category'] = $this->input->post('sub_category');
            $data['product']      = $this->input->post('product');
            $data['quantity']     = $this->input->post('quantity');
            $data['total']        = $this->input->post('total');
            $data['reason_note']  = $this->input->post('reason_note');
            $data['datetime']     = time();
            $this->db->insert('stock', $data);
            $prev_quantity = $this->crud_model->get_type_name_by_id('product', $data['product'], 'current_stock');
            $current       = $prev_quantity - $data['quantity'];
            if ($current <= 0) {
                $current = 0;
            }
            $data1['current_stock'] = $current;
            $this->db->where('product_id', $data['product']);
            $this->db->update('product', $data1);
            recache();
        } elseif ($para1 == 'delete') {
            $quantity = $this->crud_model->get_type_name_by_id('stock', $para2, 'quantity');
            $product  = $this->crud_model->get_type_name_by_id('stock', $para2, 'product');
            $type     = $this->crud_model->get_type_name_by_id('stock', $para2, 'type');
            if ($type == 'add') {
                $this->crud_model->decrease_quantity($product, $quantity);
            } else if ($type == 'destroy') {
                $this->crud_model->increase_quantity($product, $quantity);
            }
            $this->db->where('stock_id', $para2);
            $this->db->delete('stock');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('stock_id', 'desc');
            $page_data['all_stock'] = $this->db->get('stock')->result_array();
            $this->load->view('back/admin/stock_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/stock_add');
        } elseif ($para1 == 'destroy') {
            $this->load->view('back/admin/stock_destroy');
        } else {
            $page_data['page_name'] = "stock";
            $page_data['all_stock'] = $this->db->get('stock')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*Frontend Banner Management */
    function banner($para1 = '', $para2 = '', $para3 = '')
    {
        if (!$this->crud_model->admin_permission('banner')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "set") {
            $data['link']   = $this->input->post('link');
            $data['status'] = $this->input->post('status');
            $this->db->where('banner_id', $para2);
            $this->db->update('banner', $data);
            $this->crud_model->file_up("img", "banner", $para2);
            recache();
        } else if ($para1 == 'banner_publish_set') {
            if ($para3 == 'true') {
                $data['status'] = 'ok';
            } else if ($para3 == 'false') {
                $data['status'] = '0';
            }
            $this->db->where('banner_id', $para2);
            $this->db->update('banner', $data);
            recache();
        } else {
            $page_data['page_name']      = "banner";
            $page_data['all_categories'] = $this->db->get('category')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* Managing sales by users */
    function sales($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('sale')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'delete') {
            $carted = $this->db->get_where('stock', array(
                'sale_id' => $para2
            ))->result_array();
            foreach ($carted as $row2) {
                $this->stock('delete', $row2['stock_id']);
            }
            $this->db->where('sale_id', $para2);
            $this->db->delete('sale');
        } elseif ($para1 == 'list') {
            $all = $this->db->get_where('sale',array('payment_type' => 'go'))->result_array();
            foreach ($all as $row) {
                if((time()-$row['sale_datetime']) > 600){
                    $this->db->where('sale_id', $row['sale_id']);
                    $this->db->delete('sale');
                }
            }
            $this->db->order_by('sale_id', 'desc');
            $page_data['all_sales'] = $this->db->get('sale')->result_array();
            $this->load->view('back/admin/sales_list', $page_data);
        } elseif ($para1 == 'view') {
            $data['viewed'] = 'ok';
            $this->db->where('sale_id', $para2);
            $this->db->update('sale', $data);
            $page_data['sale'] = $this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/sales_view', $page_data);
        } elseif ($para1 == 'send_invoice') {
            $page_data['sale'] = $this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->result_array();
            $text              = $this->load->view('back/includes_top', $page_data);
            $text .= $this->load->view('back/admin/sales_view', $page_data);
            $text .= $this->load->view('back/includes_bottom', $page_data);
        } elseif ($para1 == 'delivery_payment') {
            $data['viewed'] = 'ok';
            $this->db->where('sale_id', $para2);
            $this->db->update('sale', $data);
            $page_data['sale_id']         = $para2;
            $page_data['payment_type']    = $this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_type;
            $page_data['payment_details'] = $this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_details;
            $delivery_status = json_decode($this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->delivery_status,true);
            foreach ($delivery_status as $row) {
                if(isset($row['admin'])){
                    $page_data['delivery_status'] = $row['status'];
                }
            }
            $payment_status = json_decode($this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_status,true);
            foreach ($payment_status as $row) {
                if(isset($row['admin'])){
                    $page_data['payment_status'] = $row['status'];
                }
            }

            $this->load->view('back/admin/sales_delivery_payment', $page_data);
        } elseif ($para1 == 'delivery_payment_set') {
            $delivery_status = json_decode($this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->delivery_status,true);
            $new_delivery_status = array();
            foreach ($delivery_status as $row) {
                if(isset($row['admin'])){
                    $new_delivery_status[] = array('admin'=>'','status'=>$this->input->post('delivery_status'),'delivery_time'=>$row['delivery_time']);
                } else {
                    $new_delivery_status[] = array('vendor'=>$row['vendor'],'status'=>$row['status'],'delivery_time'=>$row['delivery_time']);
                }
            }
            $payment_status = json_decode($this->db->get_where('sale', array(
                'sale_id' => $para2
            ))->row()->payment_status,true);
            $new_payment_status = array();
            foreach ($payment_status as $row) {
                if(isset($row['admin'])) {
                    $new_payment_status[] = array('admin'=>'','status'=>$this->input->post('payment_status'));
                } else {
                    $new_payment_status[] = array('vendor'=>$row['vendor'],'status'=>$row['status']);
                }
            }
            $data['payment_status']  = json_encode($new_payment_status);
            $data['delivery_status'] = json_encode($new_delivery_status);
            $data['payment_details'] = $this->input->post('payment_details');
            $this->db->where('sale_id', $para2);
            $this->db->update('sale', $data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/sales_add');
        } elseif ($para1 == 'total') {
            echo $this->db->get('sale')->num_rows();
        } else {
            $page_data['page_name']      = "sales";
            $page_data['all_categories'] = $this->db->get('sale')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*User Management */
    function user($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('user')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['username']    = $this->input->post('user_name');
            $data['description'] = $this->input->post('description');
            $this->db->insert('user', $data);
        } else if ($para1 == 'edit') {
            $page_data['user_data'] = $this->db->get_where('user', array(
                'user_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/user_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['username']    = $this->input->post('username');
            $data['description'] = $this->input->post('description');
            $this->db->where('user_id', $para2);
            $this->db->update('user', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('user_id', $para2);
            $this->db->delete('user');
        } elseif ($para1 == 'list') {
            $this->db->order_by('user_id', 'desc');
            $page_data['all_users'] = $this->db->get('user')->result_array();
            $this->load->view('back/admin/user_list', $page_data);
        } elseif ($para1 == 'view') {
            $page_data['user_data'] = $this->db->get_where('user', array(
                'user_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/user_view', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/user_add');
        } else {
            $page_data['page_name'] = "user";
            $page_data['all_users'] = $this->db->get('user')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* membership_payment Management */
    function membership_payment($para1 = '', $para2 = '', $para3 = '')
    {
        if (!$this->crud_model->admin_permission('membership_payment')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'delete') {
            $this->db->where('membership_payment_id', $para2);
            $this->db->delete('membership_payment');
        } else if ($para1 == 'list') {
            $this->db->order_by('membership_payment_id', 'desc');
            $page_data['all_membership_payments'] = $this->db->get('membership_payment')->result_array();
            $this->load->view('back/admin/membership_payment_list', $page_data);
        } else if ($para1 == 'view') {
            $page_data['membership_payment_data'] = $this->db->get_where('membership_payment', array(
                'membership_payment_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/membership_payment_view', $page_data);
        } elseif ($para1 == 'upgrade') {
            if($this->input->post('status')){
                $membership = $this->db->get_where('membership_payment',array('membership_payment_id'=>$para2))->row()->membership;
                $vendor = $this->db->get_where('membership_payment',array('membership_payment_id'=>$para2))->row()->vendor;
                $data['status'] = $this->input->post('status');
                $data['details'] = $this->input->post('details');
                if($data['status'] == 'paid'){
                    $this->crud_model->upgrade_membership($vendor,$membership);
                }

                $this->db->where('membership_payment_id', $para2);
                $this->db->update('membership_payment', $data);
            }
        } else {
            $page_data['page_name'] = "membership_payment";
            $page_data['all_membership_payments'] = $this->db->get('membership_payment')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* Vendor Management */
    function vendor($para1 = '', $para2 = '', $para3 = '')
    {
        if (!$this->crud_model->admin_permission('vendor')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'delete') {
            $this->db->where('vendor_id', $para2);
            $this->db->delete('vendor');
            recache();
        } else if ($para1 == 'list') {
            $this->db->order_by('vendor_id', 'desc');
            $page_data['all_vendors'] = $this->db->get('vendor')->result_array();
            $this->load->view('back/admin/vendor_list', $page_data);
        } else if ($para1 == 'view') {
            $page_data['vendor_data'] = $this->db->get_where('vendor', array(
                'vendor_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/vendor_view', $page_data);
        } else if ($para1 == 'pay_form') {
            $page_data['vendor_id'] = $para2;
            $this->load->view('back/admin/vendor_pay_form', $page_data);
        } else if ($para1 == 'approval') {
            $page_data['vendor_id'] = $para2;
            $page_data['status'] = $this->db->get_where('vendor', array(
											'vendor_id' => $para2
										))->row()->status;
            $this->load->view('back/admin/vendor_approval', $page_data);
        } else if ($para1 == 'add') {
            $this->load->view('back/admin/vendor_add');
        } else if ($para1 == 'approval_set') {
            $vendor = $para2;
			$approval = $this->input->post('approval');
            if ($approval == 'ok') {
                $data['status'] = 'approved';
            } else {
                $data['status'] = 'pending';
            }
            $this->db->where('vendor_id', $vendor);
            $this->db->update('vendor', $data);
            $this->email_model->status_email('vendor', $vendor);
            recache();
        } elseif ($para1 == 'pay') {
            $vendor         = $para2;
            $method         = $this->input->post('method');
            $amount         = $this->input->post('amount');
            $amount_in_usd  = $amount/$this->db->get_where('business_settings',array('type'=>'exchange'))->row()->value;
            if ($method == 'paypal') {
                $paypal_email  = $this->crud_model->get_type_name_by_id('vendor', $vendor, 'paypal_email');
                $data['vendor_id']      = $vendor;
                $data['amount']         = $this->input->post('amount');
                $data['status']         = 'due';
                $data['method']         = 'paypal';
                $data['timestamp']      = time();

                $this->db->insert('vendor_invoice', $data);
                $invoice_id           = $this->db->insert_id();
                $this->session->set_userdata('invoice_id', $invoice_id);

                /****TRANSFERRING USER TO PAYPAL TERMINAL****/
                $this->paypal->add_field('rm', 2);
                $this->paypal->add_field('no_note', 0);
                $this->paypal->add_field('cmd', '_xclick');

                $this->paypal->add_field('amount', $this->cart->format_number($amount_in_usd));

                //$this->paypal->add_field('amount', $grand_total);
                $this->paypal->add_field('custom', $invoice_id);
                $this->paypal->add_field('business', $paypal_email);
                $this->paypal->add_field('notify_url', base_url() . 'index.php/admin/paypal_ipn');
                $this->paypal->add_field('cancel_return', base_url() . 'index.php/admin/paypal_cancel');
                $this->paypal->add_field('return', base_url() . 'index.php/admin/paypal_success');

                $this->paypal->submit_paypal_post();
                // submit the fields to paypal

            } else if ($method == 'stripe') {
                if($this->input->post('stripeToken')) {

                    $vendor         = $para2;
                    $method         = $this->input->post('method');
                    $amount         = $this->input->post('amount');
                    $amount_in_usd  = $amount/$this->db->get_where('business_settings',array('type'=>'exchange'))->row()->value;

                    $stripe_details      = json_decode($this->db->get_where('vendor', array(
                        'vendor_id' => $vendor
                    ))->row()->stripe_details,true);
                    $stripe_publishable  = $stripe_details['publishable'];
                    $stripe_api_key      =  $stripe_details['secret'];

                    require_once(APPPATH . 'libraries/stripe-php/init.php');
                    \Stripe\Stripe::setApiKey($stripe_api_key); //system payment settings
                    $vendor_email = $this->db->get_where('vendor' , array('vendor_id' => $vendor))->row()->email;

                    $vendora = \Stripe\Customer::create(array(
                        'email' => $this->db->get_where('general_settings',array('type'=>'system_email'))->row()->value, // customer email id
                        'card'  => $_POST['stripeToken']
                    ));

                    $charge = \Stripe\Charge::create(array(
                        'customer'  => $vendora->id,
                        'amount'    => ceil($amount_in_usd*100),
                        'currency'  => 'USD'
                    ));

                    if($charge->paid == true){
                        $vendora = (array) $vendora;
                        $charge = (array) $charge;

                        $data['vendor_id']          = $vendor;
                        $data['amount']             = $amount;
                        $data['status']             = 'paid';
                        $data['method']             = 'stripe';
                        $data['timestamp']          = time();
                        $data['payment_details']    = "Customer Info: \n".json_encode($vendora,true)."\n \n Charge Info: \n".json_encode($charge,true);

                        $this->db->insert('vendor_invoice', $data);

                        redirect(base_url() . 'index.php/admin/vendor/', 'refresh');
                    } else {
                        $this->session->set_flashdata('alert', 'unsuccessful_stripe');
                        redirect(base_url() . 'index.php/admin/vendor/', 'refresh');
                    }

                } else{
                    $this->session->set_flashdata('alert', 'unsuccessful_stripe');
                    redirect(base_url() . 'index.php/admin/vendor/', 'refresh');
                }

            } else if ($method == 'cash') {
                $data['vendor_id']          = $para2;
                $data['amount']             = $this->input->post('amount');
                $data['status']             = 'due';
                $data['method']             = 'cash';
                $data['timestamp']          = time();
                $data['payment_details']    = "";
                $this->db->insert('vendor_invoice', $data);
                redirect(base_url() . 'index.php/admin/vendor/', 'refresh');
            }
        } else {
            $page_data['page_name'] = "vendor";
            $page_data['all_vendors'] = $this->db->get('vendor')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }



    /* FUNCTION: Verify paypal payment by IPN*/
    function paypal_ipn()
    {
        if ($this->paypal->validate_ipn() == true) {

            $data['status']             = 'paid';
            $data['payment_details']    = json_encode($_POST);
            $invoice_id                 = $_POST['custom'];
            $this->db->where('vendor_invoice_id', $invoice_id);
            $this->db->update('vendor_invoice', $data);
        }
    }


    /* FUNCTION: Loads after cancelling paypal*/
    function paypal_cancel()
    {
        $invoice_id = $this->session->userdata('invoice_id');
        $this->db->where('vendor_invoice_id', $invoice_id);
        $this->db->delete('vendor_invoice');
        $this->session->set_userdata('vendor_invoice_id', '');
        $this->session->set_flashdata('alert', 'payment_cancel');
        redirect(base_url() . 'index.php/admin/vendor/', 'refresh');
    }

    /* FUNCTION: Loads after successful paypal payment*/
    function paypal_success()
    {
        $this->session->set_userdata('invoice_id', '');
        redirect(base_url() . 'index.php/admin/vendor/', 'refresh');
    }

    /* Membership Management */
    function membership($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('membership')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['title']    = $this->input->post('title');
            $data['price']    = $this->input->post('price');
            $data['timespan']    = $this->input->post('timespan');
            $data['product_limit']    = $this->input->post('product_limit');
            $this->db->insert('membership', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "membership", $id, '', '', '.png');
        } else if ($para1 == 'edit') {
            $page_data['membership_data'] = $this->db->get_where('membership', array(
                'membership_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/membership_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['title']    = $this->input->post('title');
            $data['price']    = $this->input->post('price');
            $data['timespan']    = $this->input->post('timespan');
            $data['product_limit']    = $this->input->post('product_limit');
            $this->db->where('membership_id', $para2);
            $this->db->update('membership', $data);
            $this->crud_model->file_up("img", "membership", $para2, '', '', '.png');
        } elseif ($para1 == "default_set") {
            $this->db->where('type', "default_member_product_limit");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('product_limit')
            ));
            $this->crud_model->file_up("img", "membership", 0, '', '', '.png');
        } elseif ($para1 == 'delete') {
            $this->db->where('membership_id', $para2);
            $this->db->delete('membership');
        } elseif ($para1 == 'list') {
            $this->db->order_by('membership_id', 'desc');
            $page_data['all_memberships'] = $this->db->get('membership')->result_array();
            $this->load->view('back/admin/membership_list', $page_data);
        } elseif ($para1 == 'view') {
            $page_data['membership_data'] = $this->db->get_where('membership', array(
                'membership_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/membership_view', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/membership_add');
        } elseif ($para1 == 'default') {
            $this->load->view('back/admin/membership_default');
        } elseif ($para1 == 'publish_set') {
            $product = $para2;
            if ($para3 == 'true') {
                $data['status'] = 'approved';
            } else {
                $data['status'] = 'pending';
            }
            $this->db->where('membership_id', $product);
            $this->db->update('membership', $data);
        } else {
            $page_data['page_name'] = "membership";
            $page_data['all_memberships'] = $this->db->get('membership')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* Administrator Management */
    function admins($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('admin')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['name']      = $this->input->post('name');
            $data['email']     = $this->input->post('email');
            $data['phone']     = $this->input->post('phone');
            $data['address']   = $this->input->post('address');
            $password          = substr(hash('sha512', rand()), 0, 12);
            $data['password']  = sha1($password);
            $data['role']      = $this->input->post('role');
            $data['timestamp'] = time();
            $this->db->insert('admin', $data);
            $this->email_model->account_opening('admin', $data['email'], $password);
        } else if ($para1 == 'edit') {
            $page_data['admin_data'] = $this->db->get_where('admin', array(
                'admin_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/admin_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['name']    = $this->input->post('name');
            $data['email']   = $this->input->post('email');
            $data['phone']   = $this->input->post('phone');
            $data['address'] = $this->input->post('address');
            $data['role']    = $this->input->post('role');
            $this->db->where('admin_id', $para2);
            $this->db->update('admin', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('admin_id', $para2);
            $this->db->delete('admin');
        } elseif ($para1 == 'list') {
            $this->db->order_by('admin_id', 'desc');
            $page_data['all_admins'] = $this->db->get('admin')->result_array();
            $this->load->view('back/admin/admin_list', $page_data);
        } elseif ($para1 == 'view') {
            $page_data['admin_data'] = $this->db->get_where('admin', array(
                'admin_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/admin_view', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/admin_add');
        } else {
            $page_data['page_name']  = "admin";
            $page_data['all_admins'] = $this->db->get('admin')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* Account Role Management */
    function role($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('role')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['name']        = $this->input->post('name');
            $data['permission']  = json_encode($this->input->post('permission'));
            $data['description'] = $this->input->post('description');
            $this->db->insert('role', $data);
        } elseif ($para1 == "update") {
            $data['name']        = $this->input->post('name');
            $data['permission']  = json_encode($this->input->post('permission'));
            $data['description'] = $this->input->post('description');
            $this->db->where('role_id', $para2);
            $this->db->update('role', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('role_id', $para2);
            $this->db->delete('role');
        } elseif ($para1 == 'list') {
            $this->db->order_by('role_id', 'desc');
            $page_data['all_roles'] = $this->db->get('role')->result_array();
            $this->load->view('back/admin/role_list', $page_data);
        } elseif ($para1 == 'view') {
            $page_data['role_data'] = $this->db->get_where('role', array(
                'role_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/role_view', $page_data);
        } elseif ($para1 == 'add') {
            $page_data['all_permissions'] = $this->db->get('permission')->result_array();
            $this->load->view('back/admin/role_add', $page_data);
        } else if ($para1 == 'edit') {
            $page_data['all_permissions'] = $this->db->get('permission')->result_array();
            $page_data['role_data']       = $this->db->get_where('role', array(
                'role_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/role_edit', $page_data);
        } else {
            $page_data['page_name'] = "role";
            $page_data['all_roles'] = $this->db->get('role')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }


    /* Checking if email exists*/
    function load_dropzone()
    {
        $this->load->view('back/admin/dropzone');
    }

    /* Checking if email exists*/
    function exists()
    {
        $email  = $this->input->post('email');
        $admin  = $this->db->get('admin')->result_array();
        $exists = 'no';
        foreach ($admin as $row) {
            if ($row['email'] == $email) {
                $exists = 'yes';
            }
        }
        echo $exists;
    }

    /* Login into Admin panel */
    function login($para1 = '')
    {
        if ($para1 == 'forget_form') {
            $page_data['control'] = 'vendor';
            $this->load->view('back/forget_password',$page_data);
        } else if ($para1 == 'forget') {

        	$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            }
            else
            {
				$query = $this->db->get_where('admin', array(
					'email' => $this->input->post('email')
				));
				if ($query->num_rows() > 0) {
					$admin_id         = $query->row()->admin_id;
					$password         = substr(hash('sha512', rand()), 0, 12);
					$data['password'] = sha1($password);
					$this->db->where('admin_id', $admin_id);
					$this->db->update('admin', $data);
					if ($this->email_model->password_reset_email('admin', $admin_id, $password)) {
						echo 'email_sent';
					} else {
						echo 'email_not_sent';
					}
				} else {
					echo 'email_nay';
				}
			}
        } else {
        	$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                echo validation_errors();
            }
            else
            { // var_dump(sha1($this->input->post('password'))); exit;
				$login_data = $this->db->get_where('admin', array(
					'email' => $this->input->post('email'),
					'password' => sha1($this->input->post('password'))
				));



				if ($login_data->num_rows() > 0) {
					foreach ($login_data->result_array() as $row) {
						$this->session->set_userdata('login', 'yes');
						$this->session->set_userdata('admin_login', 'yes');
						$this->session->set_userdata('admin_id', $row['admin_id']);
						$this->session->set_userdata('admin_name', $row['name']);
						$this->session->set_userdata('title', 'admin');
						echo 'lets_login';
					}
				} else {
					echo 'login_failed';
				}
			}
        }
    }

    /* Loging out from Admin panel */
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php/admin', 'refresh');
    }

    /* Sending Newsletters */
    function newsletter($para1 = "")
    {
        if (!$this->crud_model->admin_permission('newsletter')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "send") {
            $users       = explode(',', $this->input->post('users'));
            $subscribers = explode(',', $this->input->post('subscribers'));
            $text        = $this->input->post('text');
            $title       = $this->input->post('title');
            $from        = $this->input->post('from');
            foreach ($users as $key => $user) {
                if ($user !== '') {
                    $this->email_model->newsletter($title, $text, $user, $from);
                }
            }
            foreach ($subscribers as $key => $subscriber) {
                if ($subscriber !== '') {
                    $this->email_model->newsletter($title, $text, $subscriber, $from);
                }
            }
        } else {
            $page_data['users']       = $this->db->get('user')->result_array();
            $page_data['subscribers'] = $this->db->get('subscribe')->result_array();
            $page_data['page_name']   = "newsletter";
            $this->load->view('back/index', $page_data);
        }
    }

    /* Add, Edit, Delete, Duplicate, Enable, Disable Sliders */
    function slider($para1 = '', $para2 = '', $para3 = '')
    {
        if ($para1 == 'list') {
            $this->db->order_by('slider_id', 'desc');
            $page_data['all_slider'] = $this->db->get('slider')->result_array();
            $this->load->view('back/admin/slider_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/slider_set');
        } elseif ($para1 == 'add_form') {
            $page_data['style_id'] = $para2;
            $page_data['style']    = json_decode($this->db->get_where('slider_style', array(
                'slider_style_id' => $para2
            ))->row()->value, true);
            $this->load->view('back/admin/slider_add_form', $page_data);
        } else if ($para1 == 'delete') { //ll
            $elements = json_decode($this->db->get_where('slider', array(
                'slider_id' => $para2
            ))->row()->elements, true);
            $style    = $this->db->get_where('slider', array(
                'slider_id' => $para2
            ))->row()->style;
            $style    = json_decode($this->db->get_where('slider_style', array(
                'slider_style_id' => $style
            ))->row()->value, true);
            $images   = $style['images'];
            if (file_exists('uploads/slider_image/background_' . $para2 . '.jpg')) {
                unlink('uploads/slider_image/background_' . $para2 . '.jpg');
            }
            foreach ($images as $row) {
                if (file_exists('uploads/slider_image/' . $para2 . '_' . $row . '.png')) {
                    unlink('uploads/slider_image/' . $para2 . '_' . $row . '.png');
                }
            }
            $this->db->where('slider_id', $para2);
            $this->db->delete('slider');
            recache();
        } else if ($para1 == 'serial') {
            $this->db->order_by('serial', 'desc');
            $this->db->order_by('slider_id', 'desc');
            $page_data['slider'] = $this->db->get_where('slider', array(
                'status' => 'ok'
            ))->result_array();
            $this->load->view('back/admin/slider_serial', $page_data);
        } else if ($para1 == 'do_serial') {
            $input  = json_decode($this->input->post('serial'), true);
            $serial = array();
            foreach ($input as $r) {
                $serial[] = $r['id'];
            }
            $serial  = array_reverse($serial);
            $sliders = $this->db->get('slider')->result_array();
            foreach ($sliders as $row) {
                $data['serial'] = 0;
                $this->db->where('slider_id', $row['slider_id']);
                $this->db->update('slider', $data);
            }
            foreach ($serial as $i => $row) {
                $data1['serial'] = $i + 1;
                $this->db->where('slider_id', $row);
                $this->db->update('slider', $data1);
            }
            recache();
        } else if ($para1 == 'slider_publish_set') {
            $slider = $para2;
            if ($para3 == 'true') {
                $data['status'] = 'ok';
            } else {
                $data['status'] = '0';
                $data['serial'] = 0;
            }
            $this->db->where('slider_id', $slider);
            $this->db->update('slider', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['slider_data'] = $this->db->get_where('slider', array(
                'slider_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/slider_edit_form', $page_data);
        } elseif ($para1 == 'create') {
            $data['style']  = $this->input->post('style_id');
            $data['title']  = $this->input->post('title');
            $data['serial'] = 0;
            $data['status'] = 'ok';
            $style          = json_decode($this->db->get_where('slider_style', array(
                'slider_style_id' => $data['style']
            ))->row()->value, true);
            $images         = array();
            $texts          = array();
            foreach ($style['images'] as $image) {
                if ($_FILES[$image['name']]['name']) {
                    $images[] = $image['name'];
                }
            }
            foreach ($style['texts'] as $text) {
                if ($this->input->post($text['name']) !== '') {
                    $texts[] = array(
                        'name' => $text['name'],
                        'text' => $this->input->post($text['name']),
                        'color' => $this->input->post($text['name'] . '_color'),
                        'background' => $this->input->post($text['name'] . '_background')
                    );
                }
            }
            $elements         = array(
                'images' => $images,
                'texts' => $texts
            );
            $data['elements'] = json_encode($elements);
            $this->db->insert('slider', $data);
            $id = $this->db->insert_id();

            move_uploaded_file($_FILES['background']['tmp_name'], 'uploads/slider_image/background_' . $id . '.jpg');
            foreach ($elements['images'] as $image) {
                move_uploaded_file($_FILES[$image]['tmp_name'], 'uploads/slider_image/' . $id . '_' . $image . '.png');
            }
            recache();
        } elseif ($para1 == 'update') {
            $data['style'] = $this->input->post('style_id');
            $data['title'] = $this->input->post('title');
            $style         = json_decode($this->db->get_where('slider_style', array(
                'slider_style_id' => $data['style']
            ))->row()->value, true);
            $images        = array();
            $texts         = array();
            foreach ($style['images'] as $image) {
                if ($_FILES[$image['name']]['name'] || $this->input->post($image['name'] . '_same') == 'same') {
                    $images[] = $image['name'];
                }
            }
            foreach ($style['texts'] as $text) {
                if ($this->input->post($text['name']) !== '') {
                    $texts[] = array(
                        'name' => $text['name'],
                        'text' => $this->input->post($text['name']),
                        'color' => $this->input->post($text['name'] . '_color'),
                        'background' => $this->input->post($text['name'] . '_background')
                    );
                }
            }
            $elements         = array(
                'images' => $images,
                'texts' => $texts
            );
            $data['elements'] = json_encode($elements);
            $this->db->where('slider_id', $para2);
            $this->db->update('slider', $data);

            move_uploaded_file($_FILES['background']['tmp_name'], 'uploads/slider_image/background_' . $para2 . '.jpg');
            foreach ($elements['images'] as $image) {
                move_uploaded_file($_FILES[$image]['tmp_name'], 'uploads/slider_image/' . $para2 . '_' . $image . '.png');
            }
            recache();
        } else {
            $page_data['page_name'] = "slider";
            $this->load->view('back/index', $page_data);
        }
    }

    /* Manage Frontend User Interface */
    function ui_settings($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "ui_home") {
            if ($para2 == 'update') {
                $this->db->where('type', "side_bar_pos");
                $this->db->update('ui_settings', array(
                    'value' => $this->input->post('side_bar_pos')
                ));
                $this->db->where('type', "latest_item_div");
                $this->db->update('ui_settings', array(
                    'value' => $this->input->post('latest_item_div')
                ));
                $this->db->where('type', "most_popular_div");
                $this->db->update('ui_settings', array(
                    'value' => $this->input->post('most_popular_div')
                ));
                $this->db->where('type', "most_view_div");
                $this->db->update('ui_settings', array(
                    'value' => $this->input->post('most_view_div')
                ));
                $this->db->where('type', "home_category");
                $this->db->update('ui_settings', array(
                    'value' => json_encode($this->input->post('category'))
                ));
                $this->db->where('type', "home_brand");
                $this->db->update('ui_settings', array(
                    'value' => json_encode($this->input->post('brand'))
                ));
                redirect(base_url() . 'index.php/admin/page_settings/home/', 'refresh');
                recache();
            }
        }
        if ($para1 == "ui_category") {
            if ($para2 == 'update') {
                $this->db->where('type', "side_bar_pos_category");
                $this->db->update('ui_settings', array(
                    'value' => $this->input->post('side_bar_pos')
                ));
                redirect(base_url() . 'index.php/admin/page_settings/category_page/', 'refresh');
                recache();
            }
        }
        $this->load->view('back/index', $page_data);
    }

    /* Checking Login Stat */
    function is_logged()
    {
        if ($this->session->userdata('admin_login') == 'yes') {
            echo 'yah!good';
        } else {
            echo 'nope!bad';
        }
    }

    /* Manage Frontend User Interface */
    function page_settings($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        $page_data['page_name'] = "page_settings";
        $page_data['tab_name']  = $para1;
        $this->load->view('back/index', $page_data);
    }

    /* Manage Frontend User Messages */
    function contact_message($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('contact_message')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'delete') {
            $this->db->where('contact_message_id', $para2);
            $this->db->delete('contact_message');
        } elseif ($para1 == 'list') {
            $this->db->order_by('contact_message_id', 'desc');
            $page_data['contact_messages'] = $this->db->get('contact_message')->result_array();
            $this->load->view('back/admin/contact_message_list', $page_data);
        } elseif ($para1 == 'reply') {
            $data['reply'] = $this->input->post('reply');
            $this->db->where('contact_message_id', $para2);
            $this->db->update('contact_message', $data);
            $this->db->order_by('contact_message_id', 'desc');
            $query = $this->db->get_where('contact_message', array(
                'contact_message_id' => $para2
            ))->row();
            $this->email_model->do_email($data['reply'], 'RE: ' . $query->subject, $query->email);
        } elseif ($para1 == 'view') {
            $page_data['message_data'] = $this->db->get_where('contact_message', array(
                'contact_message_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/contact_message_view', $page_data);
        } elseif ($para1 == 'reply_form') {
            $page_data['message_data'] = $this->db->get_where('contact_message', array(
                'contact_message_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/contact_message_reply', $page_data);
        } else {
            $page_data['page_name']        = "contact_message";
            $page_data['contact_messages'] = $this->db->get('contact_message')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /*product_update_mail */
    function product_update_mail($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('product_update_mail')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'delete') {
            $this->db->where('contact_message_id', $para2);
            $this->db->delete('contact_message');
        } elseif ($para1 == 'list') {
            $this->db->order_by('contact_message_id', 'desc');
            $page_data['contact_messages'] = $this->db->get('contact_message')->result_array();
            $this->load->view('back/admin/contact_message_list', $page_data);
        } elseif ($para1 == 'reply') {
            $data['reply'] = $this->input->post('reply');
            $this->db->where('contact_message_id', $para2);
            $this->db->update('contact_message', $data);
            $this->db->order_by('contact_message_id', 'desc');
            $query = $this->db->get_where('contact_message', array(
                'contact_message_id' => $para2
            ))->row();
            $this->email_model->do_email($data['reply'], 'RE: ' . $query->subject, $query->email);
        } elseif ($para1 == 'view') {
            $page_data['message_data']=11;
			$this->load->view('back/admin/product_update_mail_view', $page_data);
        } elseif ($para1 == 'reply_form') {
            $page_data['message_data'] = $this->db->get_where('contact_message', array(
                'contact_message_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/contact_message_reply', $page_data);
        } else {
            $page_data['page_name']        = "product_update_mail";
           // $page_data['contact_messages'] = $this->db->get('contact_message')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }




    /* Manage Logos */
    function logo_settings($para1 = "", $para2 = "", $para3 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "select_logo") {
            $page_data['page_name'] = "select_logo";
        } elseif ($para1 == "delete_logo") {
            if (file_exists("uploads/logo_image/logo_" . $para2 . ".png")) {
                unlink("uploads/logo_image/logo_" . $para2 . ".png");
            }
            $this->db->where('logo_id', $para2);
            $this->db->delete('logo');
            recache();
        } elseif ($para1 == "set_logo") {
            $type    = $this->input->post('type');
            $logo_id = $this->input->post('logo_id');
            $this->db->where('type', $type);
            $this->db->update('ui_settings', array(
                'value' => $logo_id
            ));
            recache();
        } elseif ($para1 == "show_all") {
            $page_data['logo'] = $this->db->get('logo')->result_array();
            if ($para2 == "") {
                $this->load->view('back/admin/all_logo', $page_data);
            }
            if ($para2 == "selectable") {
                $page_data['logo_type'] = $para3;
                $this->load->view('back/admin/select_logo', $page_data);
            }
        } elseif ($para1 == "upload_logo") {
            foreach ($_FILES["file"]['name'] as $i => $row) {
                $data['name'] = '';
                $this->db->insert("logo", $data);
                $id = $this->db->insert_id();
                move_uploaded_file($_FILES["file"]['tmp_name'][$i], 'uploads/logo_image/logo_' . $id . '.png');
            }
            return;
        } else {
            $this->load->view('back/index', $page_data);
        }
    }

    /* Manage Favicons */
    function favicon_settings($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        $name = $_FILES["fav"]["name"];
        $ext  = end((explode(".", $name)));
        move_uploaded_file($_FILES["fav"]['tmp_name'], 'uploads/others/favicon.' . $ext);
        $this->db->where('type', "fav_ext");
        $this->db->update('ui_settings', array(
            'value' => $ext
        ));
        recache();
    }

    /* Manage Frontend Facebook Login Credentials */
    function social_login_settings($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        $this->db->where('type', "fb_appid");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('appid')
        ));
        $this->db->where('type', "fb_secret");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('secret')
        ));
        $this->db->where('type', "application_name");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('application_name')
        ));
        $this->db->where('type', "client_id");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('client_id')
        ));
        $this->db->where('type', "client_secret");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('client_secret')
        ));
        $this->db->where('type', "redirect_uri");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('redirect_uri')
        ));
        $this->db->where('type', "api_key");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('api_key')
        ));
    }

    /* Manage Frontend Facebook Login Credentials */
    function product_comment($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        $this->db->where('type', "discus_id");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('discus_id')
        ));
        $this->db->where('type', "comment_type");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('type')
        ));
        $this->db->where('type', "fb_comment_api");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('fb_comment_api')
        ));
    }

    /* Manage Frontend Captcha Settings Credentials */
    function captcha_settings($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        $this->db->where('type', "captcha_public");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('cpub')
        ));
        $this->db->where('type', "captcha_private");
        $this->db->update('general_settings', array(
            'value' => $this->input->post('cprv')
        ));
    }

    /* Manage Site Settings */
    function site_settings($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        $page_data['page_name'] = "site_settings";
        $page_data['tab_name']  = $para1;
        $this->load->view('back/index', $page_data);
    }

    /* Manage Languages */
    function language_settings($para1 = "", $para2 = "", $para3 = "")
    {
        if (!$this->crud_model->admin_permission('language')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'add_lang') {
            $this->load->view('back/admin/language_add');
        } elseif ($para1 == 'lang_list') {
            //if($para2 !== ''){
            $this->db->order_by('word_id', 'desc');
            $page_data['words'] = $this->db->get('language')->result_array();
            $page_data['lang']  = $para2;
            $this->load->view('back/admin/language_list', $page_data);
            //}
        } elseif ($para1 == 'add_word') {
            $page_data['lang'] = $para2;
            $this->load->view('back/admin/language_word_add', $page_data);
            recache();
        } elseif ($para1 == 'upd_trn') {
            $word_id     = $para2;
            $translation = $this->input->post('translation');
            $language    = $this->input->post('lang');
            $word        = $this->db->get_where('language', array(
                'word_id' => $word_id
            ))->row()->word;
            add_translation($word, $language, $translation);
            recache();
        } elseif ($para1 == 'do_add_word') {
            $language = $para2;
            $word     = $this->input->post('word');
            add_lang_word($word);
            recache();
        } elseif ($para1 == 'do_add_lang') {
            $language = $this->input->post('language');
            add_language($language);
            recache();
        } elseif ($para1 == 'check_existed') {
            echo lang_check_exists($para2);
        } elseif ($para1 == 'lang_select') {
            $this->load->view('back/admin/language_select');
        } elseif ($para1 == 'dlt_lang') {
            $this->load->dbforge();
            $this->dbforge->drop_column('language', $para2);
            recache();
        } elseif ($para1 == 'dlt_word') {
            $this->db->where('word_id', $para2);
            $this->db->delete('language');
            recache();
        } else {
            $page_data['page_name'] = "language";
            $this->load->view('back/index', $page_data);
        }
    }

    /* Manage Business Settings */
    function business_settings($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('business_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "cash_set") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "cash_set");
            $this->db->update('business_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "paypal_set") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "paypal_set");
            $this->db->update('business_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "stripe_set") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "stripe_set");
            $this->db->update('business_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == 'set') {
            $this->db->where('type', "paypal_email");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('paypal_email')
            ));
            $this->db->where('type', "paypal_type");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('paypal_type')
            ));
            $this->db->where('type', "stripe_secret");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('stripe_secret')
            ));
            $this->db->where('type', "stripe_publishable");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('stripe_publishable')
            ));
            $this->db->where('type', "currency");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('currency')
            ));
            $this->db->where('type', "currency_name");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('currency_name')
            ));
            $this->db->where('type', "exchange");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('exchange')
            ));
            $this->db->where('type', "market_place_type");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('marketplace_type')
            ));
            $this->db->where('type', "shipping_cost_type");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('shipping_cost_type')
            ));
            $this->db->where('type', "shipping_cost");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('shipping_cost')
            ));
            $this->db->where('type', "shipment_info");
            $this->db->update('business_settings', array(
                'value' => $this->input->post('shipment_info')
            ));
            $faqs = array();
            $f_q  = $this->input->post('f_q');
            $f_a  = $this->input->post('f_a');
            foreach ($f_q as $i => $r) {
                $faqs[] = array(
                    'question' => $f_q[$i],
                    'answer' => $f_a[$i]
                );
            }
            $this->db->where('type', "faqs");
            $this->db->update('business_settings', array(
                'value' => json_encode($faqs)
            ));
            recache();
        } else {
            $page_data['page_name'] = "business_settings";
            $this->load->view('back/index', $page_data);
        }
    }

    /* Manage Admin Settings */
    function manage_admin($para1 = "")
    {
        if ($this->session->userdata('admin_login') != 'yes') {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'update_password') {
            $user_data['password'] = $this->input->post('password');
            $account_data          = $this->db->get_where('admin', array(
                'admin_id' => $this->session->userdata('admin_id')
            ))->result_array();
            foreach ($account_data as $row) {
                if (sha1($user_data['password']) == $row['password']) {
                    if ($this->input->post('password1') == $this->input->post('password2')) {
                        $data['password'] = sha1($this->input->post('password1'));
                        $this->db->where('admin_id', $this->session->userdata('admin_id'));
                        $this->db->update('admin', $data);
                        echo 'updated';
                    }
                } else {
                    echo 'pass_prb';
                }
            }
        } else if ($para1 == 'update_profile') {
            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone')
            ));
        } else {
            $page_data['page_name'] = "manage_admin";
            $this->load->view('back/index', $page_data);
        }
    }

    /*Page Management */
    function page($para1 = '', $para2 = '', $para3 = '')
    {
        if (!$this->crud_model->admin_permission('page')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $parts             = array();
            $data['page_name'] = $this->input->post('page_name');
            $data['parmalink'] = $this->input->post('parmalink');
            $size              = $this->input->post('part_size');
            $type              = $this->input->post('part_content_type');
            $content           = $this->input->post('part_content');
            $widget            = $this->input->post('part_widget');
            var_dump($widget);
            foreach ($size as $in => $row) {
                $parts[] = array(
                    'size' => $size[$in],
                    'type' => $type[$in],
                    'content' => $content[$in],
                    'widget' => $widget[$in]
                );
            }
            $data['parts']  = json_encode($parts);
            $data['status'] = 'ok';
            $this->db->insert('page', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['page_data'] = $this->db->get_where('page', array(
                'page_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/page_edit', $page_data);
        } elseif ($para1 == "update") {
            $parts             = array();
            $data['page_name'] = $this->input->post('page_name');
            $data['parmalink'] = $this->input->post('parmalink');
            $size              = $this->input->post('part_size');
            $type              = $this->input->post('part_content_type');
            $content           = $this->input->post('part_content');
            $widget            = $this->input->post('part_widget');
            var_dump($widget);
            foreach ($size as $in => $row) {
                $parts[] = array(
                    'size' => $size[$in],
                    'type' => $type[$in],
                    'content' => $content[$in],
                    'widget' => $widget[$in]
                );
            }
            $data['parts'] = json_encode($parts);
            $this->db->where('page_id', $para2);
            $this->db->update('page', $data);
            recache();
        } elseif ($para1 == 'delete') {
            $this->db->where('page_id', $para2);
            $this->db->delete('page');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('page_id', 'desc');
            $page_data['all_page'] = $this->db->get('page')->result_array();
            $this->load->view('back/admin/page_list', $page_data);
        } else if ($para1 == 'page_publish_set') {
            $page = $para2;
            if ($para3 == 'true') {
                $data['status'] = 'ok';
            } else {
                $data['status'] = '0';
            }
            $this->db->where('page_id', $page);
            $this->db->update('page', $data);
            recache();
        } elseif ($para1 == 'view') {
            $page_data['page_data'] = $this->db->get_where('page', array(
                'page_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/page_view', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/page_add');
        } else {
            $page_data['page_name'] = "page";
            $page_data['all_pages'] = $this->db->get('page')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* Manage General Settings */
    function general_settings($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "terms") {
            $this->db->where('type', "terms_conditions");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('terms')
            ));
        }
        if ($para1 == "privacy_policy") {
            $this->db->where('type', "privacy_policy");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('privacy_policy')
            ));
        }
        if ($para1 == "set_slider") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "slider");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set_slides") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "slides");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set_admin_notification_sound") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }            $this->db->where('type', "admin_notification_sound");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set_home_notification_sound") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "home_notification_sound");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "fb_login_set") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "fb_login_set");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "g_login_set") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "g_login_set");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "system_name");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('system_name')
            ));
            $this->db->where('type', "system_email");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('system_email')
            ));

            $file_folder = $this->db->get_where('general_settings', array('type' => 'file_folder'))->row()->value;
            if(rename("uploads/file_products/".$file_folder,"uploads/file_products/".$this->input->post('file_folder'))){
                $this->db->where('type', "file_folder");
                $this->db->update('general_settings', array(
                    'value' => $this->input->post('file_folder')
                ));
            }

            $this->db->where('type', "system_title");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('system_title')
            ));
            $this->db->where('type', "cache_time");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('cache_time')
            ));
            $this->db->where('type', "vendor_system");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('vendor_system')
            ));
            $this->db->where('type', "language");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('language')
            ));
            $volume = $this->input->post('admin_notification_volume');
            $this->db->where('type', "admin_notification_volume");
            $this->db->update('general_settings', array(
                'value' => $volume
            ));
            $volume = $this->input->post('homepage_notification_volume');
            $this->db->where('type', "homepage_notification_volume");
            $this->db->update('general_settings', array(
                'value' => $volume
            ));
        }
        if ($para1 == "contact") {
            $this->db->where('type', "contact_address");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('contact_address')
            ));
            $this->db->where('type', "contact_email");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('contact_email')
            ));
            $this->db->where('type', "contact_phone");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('contact_phone')
            ));
            $this->db->where('type', "contact_website");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('contact_website')
            ));
            $this->db->where('type', "contact_about");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('contact_about')
            ));
        }
        if ($para1 == "footer") {
            $this->db->where('type', "footer_text");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('footer_text', 'chaira_de')
            ));
            $this->db->where('type', "footer_category");
            $this->db->update('general_settings', array(
                'value' => json_encode($this->input->post('footer_category'))
            ));
        }
        if ($para1 == "color") {
            $this->db->where('type', "header_color");
            $this->db->update('ui_settings', array(
                'value' => $this->input->post('header_color')
            ));
            $this->db->where('type', "footer_color");
            $this->db->update('ui_settings', array(
                'value' => $this->input->post('footer_color')
            ));
        }
        recache();
    }

    /* Manage Social Links */
    function social_links($para1 = "")
    {
        if (!$this->crud_model->admin_permission('site_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "set") {
            $this->db->where('type', "facebook");
            $this->db->update('social_links', array(
                'value' => $this->input->post('facebook')
            ));
            $this->db->where('type', "google-plus");
            $this->db->update('social_links', array(
                'value' => $this->input->post('google-plus')
            ));
            $this->db->where('type', "twitter");
            $this->db->update('social_links', array(
                'value' => $this->input->post('twitter')
            ));
            $this->db->where('type', "skype");
            $this->db->update('social_links', array(
                'value' => $this->input->post('skype')
            ));
            $this->db->where('type', "pinterest");
            $this->db->update('social_links', array(
                'value' => $this->input->post('pinterest')
            ));
            $this->db->where('type', "youtube");
            $this->db->update('social_links', array(
                'value' => $this->input->post('youtube')
            ));
            redirect(base_url() . 'index.php/admin/site_settings/social_links/', 'refresh');
        }
        recache();
    }
    /* Manage SEO relateds */
    function seo_settings($para1 = "")
    {
        if (!$this->crud_model->admin_permission('seo')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "set") {
            $this->db->where('type', "meta_description");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('description')
            ));
            $this->db->where('type', "meta_keywords");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('keywords')
            ));
            $this->db->where('type', "meta_author");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('author')
            ));

            $this->db->where('type', "revisit_after");
            $this->db->update('general_settings', array(
                'value' => $this->input->post('revisit_after')
            ));
            recache();
        }
        else {
            require_once (APPPATH . 'libraries/SEOstats/bootstrap.php');
            $page_data['page_name'] = "seo";
            $this->load->view('back/index', $page_data);
        }
    }


    /**************
     * Site Maintenance
     */
    function site_maintenance(){

        if (!$this->crud_model->admin_permission('site_maintenance')) {
            redirect(base_url() . 'index.php/admin');
        }


        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules("maint_form","Maintenece Form","required");

        if( $this->form_validation->run() == false){
            $page_data['page_name'] = "site_maintenance";
            $page_data['setting']= $this->crud_model->check_maint(1);
            $this->load->view('back/index', $page_data);
        }else{
            $ip = null;
            $front = null;
            $admin = null;
            $vendor = null;
            $message = null;

            if($this->input->post("site_front") == ""){
                $front = null;
            }else{
                $front = $this->input->post("site_front");
            }

            if($this->input->post("access_ip") == ""){
                $ip = null;
            }else{
                $ipString = $this->input->post("access_ip");
                $ip = json_encode(explode(",",$ipString));

            }

            if($this->input->post("message") == ""){
                $message = null;
            }else{
                $message = $this->input->post("message");
            }

            if($this->input->post("site_vendor") == ""){
                $vendor = null;
            }else{
                $vendor = $this->input->post("site_vendor");
            }

            if($this->input->post("site_admin") == ""){
                $admin = null;
            }else{
                $admin = $this->input->post("site_admin");
            }

            $data = array();
            $data['message'] = $message;
            $data['only_access_ip'] = $ip;
            $data['admin'] = $admin;
            $data['front'] = $front;
            $data['vendor'] = $vendor;
            $data['status'] = 1;



            if($this->db->update('site_maintenance',$data)){
                $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
                $this->cache->clean();
            $this->session->set_flashdata('success',"Save changed successfully");
            }else{
                $this->session->set_flashdata('failed',"Database operation failed");
            }

            redirect("admin/site_maintenance");


        }



    }


    /***********
     * Manage News  -| Vendors
     */

    function manage_news(){
        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/manage_news/");
        $config['total_rows'] = $this->crud_model->countAllNews();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['lists'] = $this->crud_model->getAllNews($config['per_page'], $this->uri->segment(3));
        //var_dump($page_data['lists']);
        $page_data['page_name'] = "news_list";

        $this->load->view('back/index', $page_data);
        }

    function add_news(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("news_title","News Title","required");
        $this->form_validation->set_rules("news_text","News Text","required");
        $this->form_validation->set_rules("activeness","Active","required");


        if( $this->form_validation->run() == false){
            $page_data['page_name'] = "news_add";

            $this->load->view('back/index', $page_data);
        }else{

            //exit("form_validation passed");
            $data = array();
            $data['news_title'] = $this->input->post('news_title');
            $data['news_text'] = $this->input->post('news_text');
            $data['time_added'] = date("Y-m-d H:I:s");
            $data['status'] = $this->input->post('activeness');
            if($this->db->insert('vendor_news',$data)){

                $this->session->set_flashdata('success',"News added successfully");
            }else{
                $this->session->set_flashdata('failed',"Database operation failed");
            }

            redirect("admin/manage_news");


        }
    }


    function delete_news($id=null)
    {

        if($id == null){
            exit("Something error");
        }
        $this->db->where('news_id', $id);

        if ($this->db->delete('vendor_news')) {

            $this->session->set_flashdata('success', "News deleted successfully");
        } else {
            $this->session->set_flashdata('failed', "Database operation failed");
        }

        redirect("admin/manage_news");
    }

    function update_news($id= null){
        if($id == null){
            exit("Something error");
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules("news_title","News Title","required");
        $this->form_validation->set_rules("news_text","News Text","required");
        $this->form_validation->set_rules("activeness","Active","required");


        if( $this->form_validation->run() == false){
            $page_data['page_name'] = "news_update";
            $page_data['newsInfo'] = $this->crud_model->getNewsInfo($id);
            $this->load->view('back/index', $page_data);
        }else{

            //exit("form_validation passed");
            $data = array();
            $data['news_title'] = $this->input->post('news_title');
            $data['news_text'] = $this->input->post('news_text');
           // $data['time_added'] = date("Y-m-d H:I:s");
            $data['status'] = $this->input->post('activeness');
            $this->db->where('news_id', $id);
            if($this->db->update('vendor_news',$data)){

                $this->session->set_flashdata('success',"News updated successfully");
            }else{
                $this->session->set_flashdata('failed',"Database operation failed");
            }

            redirect("admin/manage_news");


        }



    }

    public function tickets()
    {
        $this->handleTicketRequests();
    }

    public function new_tickets()
    {
        $this->handleTicketRequests();
    }

    public function closed_tickets()
    {
        $this->handleTicketRequests();
    }

    public function on_hold_tickets()
    {
        $this->handleTicketRequests();
    }

    public function pending_tickets()
    {
        $this->handleTicketRequests();
    }

    protected function handleTicketRequests()
    {
        $this->check_permission_of('tickets')->and->load->library('AdminTickets', null, 'admin_tickets');

        $this->admin_tickets->handle();
    }

    public function vendor_reports()
    {
        $this->check_permission_of('vendor_reports')->and->load->library('VendorReports', null, 'vendor_reports');

        $this->vendor_reports->handle();
    }

    public function email_settings()
    {
        $this->check_permission_of('email_settings')->and->load->library('EmailSettings', null, 'email_settings');

        $this->email_settings->handle();
    }

    public function api_users()
    {
        $this->check_permission_of('api_users')->and->load->library('ApiUsers', null, 'api_users');

        $this->api_users->handle();
    }

    public function top_sellers()
    {
        $this->check_permission_of('top_sellers')->and->load->library('TopSellers', null, 'top_sellers');

        $this->top_sellers->handle();
    }

    public function top_buyers()
    {
        $this->check_permission_of('top_buyers')->and->load->library('TopBuyers', null, 'top_buyers');

        $this->top_buyers->handle();
    }

    public function latest_subscriptions()
    {
        $this->check_permission_of('latest_subscriptions')->and->load->library('LatestSubscriptions', null, 'latest_subscriptions');

        $this->latest_subscriptions->handle();
    }

    public function latest_orders()
    {
        $this->check_permission_of('latest_orders')->and->load->library('LatestOrders', null, 'latest_orders');

        $this->latest_orders->handle();
    }

    public function rma_info()
    {
        $this->check_permission_of('RmaInfos')->and->load->library('RmaInfos', null, 'rma_info');

        $this->rma_info->handle();
    }

    public function price_offers()
    {
        $this->check_permission_of('price_offer')->and->load->library('PriceOffers', null, 'price_offers');

        $this->price_offers->handle();
    }

    public function point_system_management($action = '', $id = '')
    {
        $this->check_permission_of('point_system_management');

        if ($action == 'update_settings') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('expiry_day', 'Expiry day', 'required');
            $this->form_validation->set_rules('point_equivalent_to', 'Point equivalent to', 'required');
            $this->form_validation->set_rules('free_points_on_registration', 'Free points on registration', 'required');

            if ($this->form_validation->run() == false) {
                echo 'error';
            } else {
                App\PointSystemSetting::first()->update($this->input->post());

                echo 'success';
            }
        } elseif ($action == 'list_ranges') {
            $ranges = App\PointsRange::all();

            $this->load->view('back/admin/points_range_list', compact('ranges'));
        } elseif ($action == 'edit_range') {
            $range = App\PointsRange::find($id);

            $this->load->view('back/admin/points_range_edit', compact('range'));
        } elseif ($action == 'update_range') {
            App\PointsRange::find($id)->update($this->input->post());
        } elseif ($action == 'delete_points_range') {
            App\PointsRange::find($id)->delete();
        } elseif ($action == 'list_points') {
            $points = App\Point::with('user')->get();

            $this->load->view('back/admin/points_list', compact('points'));
        } elseif ($action == 'edit_point') {
            $point = App\Point::find($id);

            $this->load->view('back/admin/point_edit', compact('point'));
        } elseif ($action == 'update_point') {
            App\Point::find($id)->update($this->input->post());
        } elseif ($action == 'delete_point') {
            App\Point::find($id)->delete();
        } else {
            $ranges = App\PointsRange::all();
            $points = App\Point::with('user')->get();
            $settings = App\PointSystemSetting::first();
            $currency = App\BusinessSetting::find(4)->value;
            $page_name = 'point_system_management';

            $this->load->view('back/index', compact('settings', 'page_name', 'currency', 'ranges', 'points'));
        }
    }

    public function sales_statistics($type = '', $range = '')
    {
        $this->check_permission_of('sales_statistics');

        $delivered = $pending = 0;

        if ($type == 'delivery_status') {
            $sales = App\Sale::all();

            foreach ($sales as $sale) {
                $sale_date = Carbon\Carbon::parse(date('d.m.Y H:i:s', $sale->sale_datetime));

                $diff = $this->getDiff($range, $sale_date);

                if ($diff == 0) {
                    $delivery_status = json_decode($sale->delivery_status)[0]->status;

                    $delivery_status == 'delivered' ? $delivered += 1 : $pending += 1;
                }
            }

            echo sprintf('{"delivery_status":[["Delivered", %s], ["Pending", %s]]}', $delivered, $pending);
        } elseif ($type == 'order_vs_sales') {
            list($sales, $orders, $xaxis) = $this->getOrdersAndSales($range);

            echo sprintf(
                '{"order":{"name":"Orders","type":"spline","data": %s},"sales":{"name":"Sales","type":"column","data": %s},"xaxis": %s}',
                $orders,
                $sales,
                $xaxis
            );
        } elseif ($type == 'sales_analytics') {
            list($sales, $orders, $xaxis) = $this->getOrdersAndSales($range);

            echo sprintf(
                    '{"order":{"name":"Sales","data": %s},"xaxis": %s}',
                    $sales,
                    $xaxis
                    );
        } else {
            $page_data['page_name'] = 'sales_statistics';

            $this->load->view('back/index', $page_data);
        }
    }

    protected function getTotalSalesAndOrders($range)
    {
        if ($range == 'year') {
            $total_sales = $total_orders = array_fill(0, 12, 0);
        } elseif ($range == 'month') {
            $total_sales = $total_orders = array_fill(0, 31, 0);
        } elseif ($range == 'week') {
            $total_sales = $total_orders = array_fill(0, 7, 0);
        } elseif ($range == 'day') {
            $total_sales = $total_orders = array_fill(0, 24, 0);
        }

        return [$total_orders, $total_sales];
    }

    protected function getOrdersAndSales($range)
    {
        $sales = App\Sale::all();

        list($total_orders, $total_sales) = $this->getTotalSalesAndOrders($range);

        foreach ($sales as $sale) {
            $sale_date = Carbon\Carbon::parse(date('d.m.Y H:i:s', $sale->sale_datetime));
            $sale_date->setTimezone('+2');

            $diff = $this->getDiff($range, $sale_date);

            if ($diff == 0) {
                $payment_status = json_decode($sale->payment_status)[0]->status;

                if ($range == 'year') {
                    $total_orders = array_merge_numeric_values($total_orders, [$sale_date->month => 1]);

                    $total_sales = $payment_status == 'paid'
                        ? array_merge_numeric_values($total_sales, [$sale_date->month => $sale->grand_total])
                        : $total_sales;
                } elseif ($range == 'month') {
                    $current_date = Carbon\Carbon::now('+2');

                    if ($current_date->year == $sale_date->year && $current_date->month == $sale_date->month) {
                        $total_orders = array_merge_numeric_values($total_orders, [$sale_date->month => 1]);

                        $total_sales = $payment_status == 'paid'
                            ? array_merge_numeric_values($total_sales, [$sale_date->month => $sale->grand_total])
                            : $total_sales;
                    }
                } elseif ($range == 'week') {
                    $current_date = Carbon\Carbon::now('+2');

                    if ($current_date->year == $sale_date->year
                        && $current_date->month == $sale_date->month
                        && $current_date->dayOfWeek == $sale_date->dayOfWeek
                    ) {
                        $total_orders = array_merge_numeric_values($total_orders, [$sale_date->format('D') => 1]);

                        $total_sales = $payment_status == 'paid'
                            ? array_merge_numeric_values($total_sales, [$sale_date->format('D') => $sale->grand_total])
                            : $total_sales;
                    }
                } elseif ($range == 'day') {
                    $current_date = Carbon\Carbon::now('+2');

                    if ($current_date->year == $sale_date->year
                        && $current_date->month == $sale_date->month
                        && $current_date->dayOfWeek == $sale_date->dayOfWeek
                        && $current_date->hour == $sale_date->hour
                    ) {
                        $total_orders = array_merge_numeric_values($total_orders, [$sale_date->hour => 1]);

                        $total_sales = $payment_status == 'paid'
                            ? array_merge_numeric_values($total_sales, [$sale_date->hour => $sale->grand_total])
                            : $total_sales;
                    }
                }
            }
        }

        if ($range == 'year') {
            $signature = '[' . rtrim(str_repeat('%s, ', 12), ', ') . ']';

            $orders = vsprintf($signature, $total_orders);
            $sales = vsprintf($signature, $total_sales);
            $xaxis = vsprintf(
                json_encode(array_fill(0, 12, '%s')),
                ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            );
        } elseif ($range == 'month') {
            $signature = '[' . rtrim(str_repeat('%s, ', 31), ', ') . ']';

            $orders = vsprintf($signature, $total_orders);
            $sales = vsprintf($signature, $total_sales);
            $xaxis = vsprintf($signature, range(1, 31));
        } elseif ($range == 'week') {
            $signature = '[' . rtrim(str_repeat('%s, ', 7), ', ') . ']';

            $orders = vsprintf($signature, $total_orders);
            $sales = vsprintf($signature, $total_sales);
            $xaxis = vsprintf(
                json_encode(array_fill(0, 7, '%s')),
                ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
            );
        } elseif ($range == 'day') {
            $signature = '[' . rtrim(str_repeat('%s, ', 24), ', ') . ']';

            $orders = vsprintf($signature, $total_orders);
            $sales = vsprintf($signature, $total_sales);
            $xaxis = vsprintf($signature, range(0, 24));
        }

        return [$sales, $orders, $xaxis];
    }

    protected function getDiff($range, $sale_date)
    {
        $diff = null;

        switch ($range) {
            case 'year':
                $diff = $sale_date->diffInYears();
                return $diff;
            case 'month':
                $diff = $sale_date->diffInMonths();
                return $diff;
            case 'week':
                $diff = $sale_date->diffInWeeks();
                return $diff;
            case 'today':
                $diff = $sale_date->diffInDays();
                return $diff;
        }

        return $diff;
    }

    protected function check_permission_of($permission)
    {
        if (!$this->crud_model->admin_permission($permission)) {
            redirect(base_url() . 'index.php/admin');
        }

        return $this;
    }

    function vendor_reviews(){

        //pagination for reviews
        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/vendor_reviews/");
        $config['total_rows'] = $this->crud_model->countAllReview();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['review_list'] = $this->crud_model->getAllReview($config['per_page'], $this->uri->segment(3));
        //var_dump($page_data['lists']);

        //pagination for ratings
        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/vendor_ratings/");
        $config['total_rows'] = $this->crud_model->countAllRating();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links2"] = $this->pagination->create_links();
        $page_data['rating_list'] = $this->crud_model->getAllRating($config['per_page'], $this->uri->segment(3));

        $page_data['vendor_review_setting'] = $this->crud_model->getVendorReviewSetting(1);
        $page_data['vendor_rating_setting'] = $this->crud_model->getVendorRatingSetting(1);
        //var_dump($page_data['vendor_review_setting']); exit();
        $page_data['page_name'] = "vendor_reviews";
        $this->load->view('back/index', $page_data);
    }

    public function delete_review($id = null){

        if($id == null){
            exit("Input Error");
        }

        $this->db->where('review_id', $id);

        if ($this->db->delete('vendor_reviews')) {

            $this->session->set_flashdata('success', "News deleted successfully");
        } else {
            $this->session->set_flashdata('failed', "Database operation failed");
        }

        redirect("admin/vendor_reviews");



    }



    public function delete_rating($id = null){

        if($id == null){
            exit("Input Error");
        }

        $this->db->where('rating_id', $id);

        if ($this->db->delete('vendor_ratings')) {

            $this->session->set_flashdata('success', "News deleted successfully");
        } else {
            $this->session->set_flashdata('failed', "Database operation failed");
        }

        redirect("admin/vendor_reviews");
    }


    function save_review_setting(){
    $this->load->library('form_validation');
        $this->form_validation->set_rules("vendor_review","Activate Vendor Reviews","required");
        $this->form_validation->set_rules("vendor_rating","Auto Approve Vendor Reviews","required");
        if($this->form_validation->run() == false){
          $this->session->set_flashdata("failed","Input error");
        }else{

            $data = array();
            $data['enable_review'] = $this->input->post('vendor_review');
            $data['enable_auto_approve'] = $this->input->post('vendor_rating');
            $data['status'] = 1;

            $this->db->where('setting_id',1);

            if($this->db->update('vendor_review_setting',$data)){
                $this->session->set_flashdata("success","Save 'Venor Review' setting sucessful");
            }else{
                $this->session->set_flashdata("failed","Database Operation Failed");
            }


            redirect("admin/vendor_reviews");

        }
    }

    function save_vendor_rating_setting(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("vendor_rating","Activate Vendor Reviews","required");

        if($this->form_validation->run() == false){
            $this->session->set_flashdata("failed","Input error");
        }else{

            $data = array();
            $data['enable_rating'] = $this->input->post('vendor_rating');
            $data['status'] = 1;

            $this->db->where('setting_id',1);

            if($this->db->update('vendor_rating_setting',$data)){
                $this->session->set_flashdata("success","Save 'Venor Rating' setting sucessful");
            }else{
                $this->session->set_flashdata("failed","Database Operation Failed");
            }


            redirect("admin/vendor_reviews");

        }
    }


    function vendor_services(){
       // var_dump($_POST); exit();
        $this->load->library("form_validation");
        $this->form_validation->set_rules("paid_featured_vendor","Paid Featured Vendors","required");
        $this->form_validation->set_rules("paid_featured_vendor_fee","Featured Vendors Fee","required");
        $this->form_validation->set_rules("vendor_packaged_time","Featured Vendor Package Time","required");
        $this->form_validation->set_rules("paid_featured_product","Paid Featured Products ","required");
        $this->form_validation->set_rules("featured_product_fee","Featured Product Fee","required");
        $this->form_validation->set_rules("featured_product_package_time","Featured Product Package Time","required");

        if($this->form_validation->run() == false){
            $page_data['page_name'] = "vendor_services";
            $page_data['service_settings'] =  $this->crud_model->getVendorServiceSetting(1);
            //var_dump( $page_data['service_settings'] ); exit();
            $this->load->view('back/index', $page_data);
        }else{
           $data = array();

            $data['paid_featured_vendor'] = $this->input->post('paid_featured_vendor');
            $data['paid_featured_vendor_fee'] = $this->input->post('paid_featured_vendor_fee');
            $data['vendor_packaged_time'] = $this->input->post('vendor_packaged_time');
            $data['paid_featured_product'] = $this->input->post('paid_featured_product');
            $data['featured_product_fee'] = $this->input->post('featured_product_fee');
            $data['featured_product_package_time'] = $this->input->post('featured_product_package_time');

            if($this->db->update('vendor_services',$data)){
                $this->session->set_flashdata("success","Save 'Venor Services' setting sucessful");
            }else{
                $this->session->set_flashdata("failed","Database Operation Failed");
            }


            redirect("admin/vendor_services");

        }


    }


    public function ordered_vendor_services(){
        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/ordered_vendor_services/");
        $config['total_rows'] = $this->crud_model->countAllReview();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['ordered_services'] = $this->crud_model->getAllVendorServices($config['per_page'], $this->uri->segment(3));

         $page_data['page_name'] = "ordered_vendor_services";

        $this->load->view('back/index', $page_data);


    }


    public function vendor_monthly_fees($month = null){

        if($month == null){
            $m = date("Y-m");
        redirect("admin/vendor_monthly_fees/{$m}");
        }else{
       //var_dump($this->crud_model->getAllVendorFee($month));

            $this->load->library('pagination');
            $config['base_url'] = site_url("admin/vendor_monthly_fees/$month/");
            $config['total_rows'] = $this->crud_model->countAllVendorFee($month);
            $config['per_page'] = 10;
            $config['num_links'] = 5;
            $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
            $config['cur_tag_close'] = '</b></a></li>';
            $config['prev_link'] = '&lt&lt;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&gt;&gt;';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $page_data["links"] = $this->pagination->create_links();
            $page_data['all_fees'] = $this->crud_model->getAllVendorFee($month,$config['per_page'], $this->uri->segment(4));
            $page_data['current_month'] = $month;
           // echo $this->db->last_query();
          //  var_dump($page_data['all_fees']); exit();

            $page_data['page_name'] = "vendor_monthly_fees";

            $this->load->view('back/index', $page_data);

        }

    }

    public function delete_vendor_fee($month, $id){
        if($id == null){
            exit("Input Error");
        }

        $this->db->where('fee_id', $id);

        if ($this->db->delete('vendor_monthly_fees')) {

            $this->session->set_flashdata('success', "Vendor Fee deleted successfully");
        } else {
            $this->session->set_flashdata('failed', "Database operation failed");
        }

        redirect("admin/vendor_monthly_fees/{$month}");
    }


    public function update_vendor_fee($id){

       // var_dump($this->input->post()); exit();

        $this->load->library('form_validation');
        $this->form_validation->set_rules("vendor","Vendor","required");
        $this->form_validation->set_rules("fixed_fee","Fixed Fee Per Item","required");
        $this->form_validation->set_rules("percentage_fee","Percentage Per Item","required");
        $this->form_validation->set_rules("max_item","Maximum Item Allowed","required");
        $this->form_validation->set_rules("start_month","Start Month","required");
        $this->form_validation->set_rules("start_year","Start Year","required");

        if( $this->form_validation->run() == false){
            $page_data['page_name'] = "update_vendor_fee";
            $page_data['info'] = $this->crud_model->vendorFeeInfo($id);
            $page_data['vendor_list'] = $this->crud_model->getVendorListForVendorFeeUpdate();
          //  var_dump($page_data['vendor_list']); exit();
            $this->load->view('back/index', $page_data);
        }else{
          $data = array();
            $data['vendor'] = $this->input->post('vendor');
            $data['fix_fee_per_item'] = $this->input->post('fixed_fee');
            $data['percentage_fee_per_item'] = $this->input->post('percentage_fee');
            $data['max_item_upload'] = $this->input->post('max_item');
            $data['start_date'] = "{$this->input->post('start_year')}-{$this->input->post('start_month')}-01";

            $this->db->where('fee_id', $id);

            if($this->db->update("vendor_monthly_fees",$data)){
                $this->session->set_flashdata('success', "Vendor Fee Updated successfully");
            }else{
                $this->session->set_flashdata('failed', "Database operation failed");
            }

            redirect("admin/vendor_monthly_fees/{$this->input->post('start_year')}-{$this->input->post('start_month')}");


        }



    }


    public function promo_categories(){
        $this->load->model("Promo_category");
        //var_dump($this->Promo_category->getAllList()); exit();
        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/promo_categories/");
        $config['total_rows'] =  $this->Promo_category->countAllPromo();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['list'] = $this->Promo_category->getAllList($config['per_page'], $this->uri->segment(3));
        $page_data['page_name'] = "promo_categories";
        $this->load->view('back/index', $page_data);
    }

    public function promo_category_add(){
        $this->load->model("Promo_category");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("promo_name","Promo Category Name","required");
        $this->form_validation->set_rules("priority","Priority","required");
        $this->form_validation->set_rules("primary_category","Primary Category","required");
        $this->form_validation->set_rules("promotional_url","Promotional URL","required");
        // $this->form_validation->set_rules("products","Selected Products","required");
        if($this->form_validation->run() == false){
            $page_data['page_name'] = "promo_category_add";
            $page_data['category_list'] =  $this->Promo_category->getCategoryList();
            // var_dump($page_data['category_list']); exit();
            $this->load->view('back/index', $page_data);
        }else{
            //  var_dump($this->input->post());
            // Required field names
            $required = array('product_selected');

// Loop over field names, make sure each one exists and is not empty
            $error = false;
            foreach($required as $field) {
                if (empty($_POST[$field])) {
                    $error = true;
                }
            }

            if ($error) {
                $this->session->set_flashdata("failed","You did not select any product");
                redirect("admin/promo_category_add");
            } else {
                $products = array_map(
                    function($value) { return (int)$value; },
                    $_POST['product_selected']
                );


                //var_dump($_POST['product_selected']); exit();
                $data = array();
                $data['promo_name'] = $this->input->post('promo_name');
                $data['priority'] = $this->input->post('priority');
                $data['primary_category'] = $this->input->post('primary_category');
                $data['promo_url'] =  $this->input->post('promotional_url');
                $data['selected_products'] = json_encode($products, true);
                $data['time_added'] = date("Y-m-d H:I:s");
                $data['status'] = $_POST['active']=='true'  ? 1 : 0;
                if($this->Promo_category->add($data)){
                    $this->session->set_flashdata('success', "Promo category added successfully");
                }else{
                    $this->session->set_flashdata('failed', "Database operation failed");
                }
                redirect("admin/promo_categories");
            }

        }

    }

    public function promo_category_edit($id = null){
        if($id == null){
            exit("Input error");
        }
        $this->load->model("Promo_category");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("promo_name","Promo Category Name","required");
        $this->form_validation->set_rules("priority","Priority","required");
        $this->form_validation->set_rules("primary_category","Primary Category","required");
        $this->form_validation->set_rules("promotional_url","Promotional URL","required");
        // $this->form_validation->set_rules("products","Selected Products","required");
        if($this->form_validation->run() == false){
            $page_data['page_name'] = "promo_category_edit";
            $page_data['category_list'] =  $this->Promo_category->getCategoryList();
            $page_data['info'] = $this->Promo_category->getPromoInfo($id);
            $page_data['product_list'] = $this->Promo_category->getProductListByIds(json_decode($page_data['info']->selected_products));
            //var_dump( $page_data['product_list']); exit();
            //var_dump($page_data['info']); exit();
            // var_dump($page_data['category_list']); exit();
            $this->load->view('back/index', $page_data);
        }else{
            //  var_dump($this->input->post());
            // Required field names
            $required = array('product_selected');

// Loop over field names, make sure each one exists and is not empty
            $error = false;
            foreach($required as $field) {
                if (empty($_POST[$field])) {
                    $error = true;
                }
            }

            if ($error) {
                $this->session->set_flashdata("failed","You did not select any product");
                redirect("admin/promo_category_add");
            } else {
                $products = array_map(
                    function($value) { return (int)$value; },
                    $_POST['product_selected']
                );


                //var_dump($_POST['product_selected']); exit();
                $data = array();
                $data['promo_name'] = $this->input->post('promo_name');
                $data['priority'] = $this->input->post('priority');
                $data['primary_category'] = $this->input->post('primary_category');
                $data['promo_url'] =  $this->input->post('promotional_url');
                $data['selected_products'] = json_encode($products, true);
                //$data['time_added'] = date("Y-m-d H:I:s");
                $data['status'] = $_POST['active']=='true'  ? 1 : 0;
                if($this->Promo_category->update($data, $id)){
                    $this->session->set_flashdata('success', "Promo category updated successfully");
                }else{
                    $this->session->set_flashdata('failed', "Database operation failed");
                }
                redirect("admin/promo_categories");
            }





        }

    }

    public function promo_categories_delete($id = null){

        if($id == null){
            echo "Input error";
        }else{
            $this->load->model("Promo_category");
            if ($this->Promo_category->delete($id)) {

                $this->session->set_flashdata('success', "Promo category deleted successfully");
            } else {
                $this->session->set_flashdata('failed', "Database operation failed");
            }

            redirect("admin/promo_categories");
        }
    }


    public function promo_categories_product_search_ajax($term, $cat = null){

        if($cat != null){
            $cat = explode("-",$cat);
        }
        $this->load->model("Promo_category");


        $this->output
            ->set_content_type('application/json')
            ->set_output( $this->Promo_category->search_product($term, $cat));
    }


    public function recommended_products(){
        $this->load->model("Recommended_products");
        //var_dump($this->Recommended_products->getAllList());
        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/recommended_products/");
        $config['total_rows'] =  $this->Recommended_products->countList();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['list'] = $this->Recommended_products->getAllList($config['per_page'], $this->uri->segment(3));
        $page_data['page_name'] = "recommended_product_list";
        $this->load->view('back/index', $page_data);
    }

    public function recommended_products_delete($id = null){

        if($id == null){
            echo "Input error";
        }else{
            $this->load->model("Recommended_products");
            if ($this->Recommended_products->delete($id)) {

                $this->session->set_flashdata('success', "Recommended products deleted successfully");
            } else {
                $this->session->set_flashdata('failed', "Database operation failed");
            }

            redirect("admin/recommended_products");
        }
    }


    public function recommended_products_add(){
        $this->load->model("Recommended_products");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("promo_name","Recommended Products Name","required");

        if($this->form_validation->run() == false){
            $page_data['page_name'] = "recommended_product_add";

            $this->load->view('back/index', $page_data);
        }else{
            //  var_dump($this->input->post());
            // Required field names
            $required = array('product_selected');

// Loop over field names, make sure each one exists and is not empty
            $error = false;
            foreach($required as $field) {
                if (empty($_POST[$field])) {
                    $error = true;
                }
            }

            if ($error) {
                $this->session->set_flashdata("failed","You did not select any product");
                redirect("admin/recommended_products_add");
            } else {
                $products = array_map(
                    function($value) { return (int)$value; },
                    $_POST['product_selected']
                );


                //var_dump($_POST['product_selected']); exit();
                $data = array();
                $data['rp_name'] = $this->input->post('promo_name');
                $data['rp_products'] = json_encode($products, true);
                $data['time_added'] = date("Y-m-d H:I:s");
                $data['status'] = 1;
                if($this->Recommended_products->add($data)){
                    $this->session->set_flashdata('success', "Recommended products added successfully");
                }else{
                    $this->session->set_flashdata('failed', "Database operation failed");
                }
                redirect("admin/recommended_products");
            }

        }

    }


    public function recommended_products_edit($id=null){
        if($id == null){
            exit("Input error");
        }
        $this->load->model("Recommended_products");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("promo_name","Recommended Products Name","required");

        if($this->form_validation->run() == false){
            $page_data['page_name'] = "recommended_products_edit";
            $page_data['info'] = $this->Recommended_products->getRecommendedProductsInfo($id);
            $page_data['products'] = $this->Recommended_products->getProductListByIds(json_decode($page_data['info']->rp_products, true));
            //var_dump($page_data['products']); exit();
            $this->load->view('back/index', $page_data);
        }else{
            //  var_dump($this->input->post());
            // Required field names
            $required = array('product_selected');

// Loop over field names, make sure each one exists and is not empty
            $error = false;
            foreach($required as $field) {
                if (empty($_POST[$field])) {
                    $error = true;
                }
            }

            if ($error) {
                $this->session->set_flashdata("failed","You did not select any product");
                redirect("admin/recommended_products_edit");
            } else {
                $products = array_map(
                    function($value) { return (int)$value; },
                    $_POST['product_selected']
                );


                //var_dump($_POST['product_selected']); exit();
                $data = array();
                $data['rp_name'] = $this->input->post('promo_name');
                $data['rp_products'] = json_encode($products, true);
                $data['time_added'] = date("Y-m-d H:I:s");
                $data['status'] = 1;
                if($this->Recommended_products->update($data, $id)){
                    $this->session->set_flashdata('success', "Recommended products updated successfully");
                }else{
                    $this->session->set_flashdata('failed', "Database operation failed");
                }
                redirect("admin/recommended_products");
            }





        }

    }



    public function sales_price(){

        $discountUnit = array(
            0 => '%',
            1 => 'EUR',
            2 => '$'

        );

        $this->load->model("Price_alert");

        $this->load->library("form_validation");
        $this->form_validation->set_rules("vendor","Vendor","required");
        $this->form_validation->set_rules("discount","Discount","required");
        $this->form_validation->set_rules("unit","Discount price unit","required");
        $this->form_validation->set_rules("start_date","Start date","required");
        $this->form_validation->set_rules("end_date","End date","required");
        //$this->form_validation->set_rules("cats","Categories","required");

        if( $this->form_validation->run() == false){

            $this->load->library('pagination');
            $config['base_url'] = site_url("admin/sales_price/");
            $config['total_rows'] =  $this->Price_alert->countList();
            $config['per_page'] = 10;
            $config['num_links'] = 5;
            $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
            $config['cur_tag_close'] = '</b></a></li>';
            $config['prev_link'] = '&lt&lt;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&gt;&gt;';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $page_data["links"] = $this->pagination->create_links();
            $page_data['list'] = $this->Price_alert->getAllList($config['per_page'], $this->uri->segment(3));
            $page_data['vendor_list'] = $this->Price_alert->getVendorList();
            $page_data['category_list'] = $this->Price_alert->getCategoryList();
            // var_dump($page_data['vendor_list']); exit();
            $page_data['page_name'] = "sales_price_list";
            $page_data['units'] = $discountUnit;
            $this->load->view('back/index', $page_data);
        }else{
            // var_dump($_POST);
            // var_dump($this->input->post()); exit();
            $cats = isset($_POST['cats']);

            if(!$cats){
                $this->session->set_flashdata('failed',"Please choose any category");
                redirect("admin/sales_price");
            } else{
                $vendor = $this->input->post('vendor');
                $intCatsArray = array_map(
                    function($value) { return (int)$value; },
                    $cats
                );
                $data = array();
                $data['sp_vendor'] = $vendor == "all"? null :   $vendor;
                $data['sp_discount'] = $this->input->post('discount');
                $data['discount_unit'] = $this->input->post('unit');
                $data['sp_cats'] = json_encode($intCatsArray);
                $data['sp_start_date'] = date("Y-m-d 00:00:00", strtotime($this->input->post('start_date')));
                $data['sp_end_date'] =  date("Y-m-d 00:00:00", strtotime($this->input->post('end_date')));;
                $data['time_added'] = date("Y-m-d 00:00:00");
                $data['status'] = 1;

                if($this->Price_alert->add($data)){
                    $this->session->set_flashdata("success", "Sales Price set successfully");
                }else{
                    $this->session->set_flashdata('failed', "Database operation failed");
                }
                //echo $this->db->last_query(); exit();

                redirect("admin/sales_price");



            }
        }


    }


    public function sales_price_delete($id = null){

        if($id == null){
            echo "Input error";
        }else{
            $this->load->model("Price_alert");
            if ($this->Price_alert->delete($id)) {

                $this->session->set_flashdata('success', "Sales price deleted successfully");
            } else {
                $this->session->set_flashdata('failed', "Database operation failed");
            }

            redirect("admin/sales_price");
        }
    }

    public function remove_all(){
        $this->load->model("Price_alert");
        if ($this->Price_alert->truncate()) {

            $this->session->set_flashdata('success', "All price removed successfully");
        } else {
            $this->session->set_flashdata('failed', "Database operation failed");
        }

        redirect("admin/sales_price");
    }



public function bulk_product_upload(){
        $this->load->model("Bulk_operation");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("cat","Category","required");
        $this->form_validation->set_rules("vendor","Vendor","required");
        $this->form_validation->set_rules("update_rule","Update Rule","required");

        if (empty($_FILES['products']['name']))
        {
           $this->form_validation->set_rules("products", "Upload File", "required"); 
        }
        
        if($this->form_validation->run() == false){
            $page_data['page_name'] = "bulk_product_upload_step1";
            $page_data['cat_list'] =  $this->crud_model->fetchCategoryTree();
           // $page_data['cat_list'] = $this->Bulk_operation->getCategoryList();
            $page_data['vendor_list'] = $this->Bulk_operation->getVendorList();
            $this->load->view('back/index', $page_data);
        }else{
            $config['upload_path']          = './uploads/tmp';
            $config['allowed_types']        = 'xls|xlsx|csv|XLS|XLSX|CSV';
            $config['max_size']             = 99999;
            $config['encrypt_name'] = true;
            $config['file_ext_tolower'] = true;


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('products'))
            {
                 $this->session->set_flashdata('fail', "Please choose .CSV/.XLS file with products");
                redirect("admin/bulk_product_upload");
            }
            else
            {
                $data =  $this->upload->data();
                $data_login_rules = array(
                    1 => 'Overwrite',
                    2 => 'Keep',
                    3 => 'Clear',
                    4 => 'Update'
                );

                $availability = array(
                    0 => '',
                    1 => ''
                );

                $sheet_columns = array(
                    '1' => 'Product ID',
                    '2' => 'Title',
                    '3' => 'Price',
                    '4' => 'Category',
                    '5' => 'Is Hotdeal',
                    '6' => 'Is Home',
                    '7' => 'Is Visible',
                    '8' => 'Call For Price',
                    '9' => 'Meta',
                    '10'=> 'Meta Title',
                    '11'=> 'Priority',
                    '12'=> 'Manufacturer',
                    '13'=> 'Is Taxable',
                    '14'=>'Tax Rate',
                    '15'=> 'Shipping Price 1',
                    '16'=> 'Free Shipping',
                    '17'=> 'Weight',
                    '18'=> 'Min Order',
                    '19'=> 'Max Order',
                    '20'=> 'Digital product',
                    '21'=> 'Digital product file',
                    '22'=> 'Inventory Control',
                    '23'=> 'Stock',
                    '24'=> 'Stock_warning',
                    '25'=> 'Image Url',
                    '26'=> 'Overview',
                    '27'=> 'Description'
                );

                // var_dump($data); exit();
                $tempData = array(
                    'file_name' => $data['file_name'],
                    'orig_file_name' => $data['orig_name'],
                    'cat' => $this->Bulk_operation->getCategoryDetail($this->input->post('cat'), array('category_name'))->category_name,
                    'cat_id' => (int) $this->input->post('cat'),
                    'vendor' => (int) $this->input->post('vendor'),
                    'update_rule' =>  $data_login_rules[$this->input->post('update_rule')],
                    'rule_id' => (int) $this->input->post('update_rule'),
                    'is_visible' => $this->input->post('is_visible')
                );

                $this->session->set_userdata($tempData);

                $page_data['sheet_data'] = $this->Bulk_operation->readSpreadSheet($data['full_path'], 'A', 'AZ');
                $page_data['page_name'] = "bulk_product_upload_step2";
                $page_data['temp_data'] = $tempData;
                $page_data['sheet_columns'] = $sheet_columns;
                $page_data['show_line_limit'] = 5;
                // var_dump($page_data['sheet_data']); exit();
                $this->load->view('back/index', $page_data);


            }
        }

    }
    
    public function bulk_product_upload3(){
        $this->load->model("Bulk_operation");
        $this->load->library("form_validation");
        $this->form_validation->set_rules('col_1','Column 1','required');
        $this->form_validation->set_rules('col_2','Column 2','required');
        $this->form_validation->set_rules('col_3','Column 3','required');
        $this->form_validation->set_rules('col_4','Column 4','required');
        $this->form_validation->set_rules('col_5','Column 5','required');
        $this->form_validation->set_rules('col_6','Column 6','required');
        $this->form_validation->set_rules('col_7','Column 7','required');
        $this->form_validation->set_rules('col_8','Column 8','required');
        $this->form_validation->set_rules('col_9','Column 9','required');
        $this->form_validation->set_rules('col_10','Column 10','required');
        $this->form_validation->set_rules('col_11','Column 11','required');
        $this->form_validation->set_rules('col_12','Column 12','required');
        $this->form_validation->set_rules('col_13','Column 13','required');
        $this->form_validation->set_rules('col_14','Column 14','required');
        $this->form_validation->set_rules('col_15','Column 15','required');
        $this->form_validation->set_rules('col_16','Column 16','required');
        $this->form_validation->set_rules('col_17','Column 17','required');

        if($this->form_validation->run()== false){
            $this->session->set_flashdata('fail', "Critical error. Try again");
            redirect("admin/bulk_product_upload");
        }else{


            $spread_sheet_data = $this->Bulk_operation->readSpreadSheet("./uploads/tmp/{$this->session->userdata('file_name')}", 'A', 'AA');

            //var_dump( $spread_sheet_data ); exit();

            $i = 0;
            foreach( $spread_sheet_data as $row){

                if($i == 0){

                }else{
                    $column = $row[0];
                    $product_data = array(
                        'vendor_id'=>$this->session->userdata('vendor'),
                        'rating_num'=> 0,
                        'rating_total'=> 0,
                        'title' => $column[1],
                        'meta_title'   =>  $column[9],
                        'meta_keyword'  => $column[8],
                        'category'=> $this->session->userdata('cat_id'),
                        'quick_overview'=> $column[25],
                        'specifications'=> null,
                        'description'=>$column[26],
                        'old_price' =>0.00,
                        'item_price'=>0.00,
                        'sale_price'=>  $column[2],
                        'purchase_price'=> $column[2],
                        'free_shipping'=> $column[15],
                        'shipping_cost'=> 0.00,
                        'is_taxable'  => $column[12],
                        'call_for_price' =>  $column[7],
                        'tax_rate'=> $column[13], 
                        'add_timestamp'=> time(),
                        'featured'=> 'no',
                        'is_condition_new'=>0,
                        'item_condition'=> 'condition_new',
                        'status'=>  'ok', 
                        'front_image'=> null,
                        'brand'  => 0,
                        'priority'   => 0,
                        'product_subtype'=>'normal',
                        'supplier_price'=>0.00000,
                        'suppliers_id'=>0,
                        'weight'=>    $column[16],
                        'shipping_price'=>0.00,
                        'inter_pack'=>0,
                        'case_pack'=>0,
                        'dimension_width'=>0.00,
                        'dimension_length'=>0.00,
                        'dimension_height'=>0.00,
                        'shipping_by'=>'mall',
                        'shipping_days'=>0,
                        'is_hotdeal' => $column[4],
                        'is_home' => $column[5],
                        'is_vendor_home' => 'no',
                        'is_vendor_special'=>'yes',
                        'is_template'=>0,
                        'user_req'=>0,
                        'price_offer'=>0,
                        'rmaactive'=>0,
                        'refund_days'=>0,
                        'field_group_cat'=>0,
                        'current_stock'=>$column[22],
                        'number_of_view'=>1,
                        'discount'=> 0.00,
                        'discount_type'=> 'percent',
                        'tax'=> $column[13],
                        'tax_type'=> 'percent',
                        'main_image'=> 0,
                        'added_by'=> "{'type':'vendor','id':'{$this->session->userdata('vendor')}'}",   
                        'download'=> 'no', 
                        'deal'=>'no',      
                        'stock'=>  $column[22],
                        'stock_warning' => 0 ,   
                       'is_visible' => $this->session->userdata('is_visible')       
                    );
                         $update_rule_id = $this->session->userdata('rule_id');
                }

                $this->Bulk_operation->pushToProduct($product_data,$update_rule_id);

                //echo $this->db->last_query(); exit();
                $i++;


            }
            $this->session->set_flashdata('success', "Bulk product updated successfully");
            redirect("admin/bulk_product_upload");

        }

    }


    public function bulk_category_upload()
    {
        $this->load->model("Bulk_operation");
        $this->load->library("form_validation");
        $this->form_validation->set_rules("cat", "Category", "required");
        $this->form_validation->set_rules("update_rule", "Update Rule", "required");
        $this->form_validation->set_rules("availability", "Product Availability", "required");
        if (empty($_FILES['cats']['name']))
        {
           $this->form_validation->set_rules("cats", "Upload File", "required"); 
        }
        
        
        if ($this->form_validation->run() == false) {

            $page_data['cat_list'] =  $this->crud_model->fetchCategoryTree();
            $page_data['page_name'] = "bulk_category_upload_index";
            $this->load->view('back/index', $page_data);
        } else {
            $config['upload_path'] = './uploads/tmp';
            $config['allowed_types'] = 'xls|xlsx|csv|XLS|XLSX|CSV';
            $config['max_size'] = 99999;
            $config['encrypt_name'] = true;
            $config['file_ext_tolower'] = true;


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('cats')){
                $this->session->set_flashdata('fail', "Please choose .CSV/.XLS file with products");
                redirect("admin/bulk_category_upload");
            } else {
                $data = $this->upload->data();
                $data_login_rules = array(
                    1 => 'Overwrite',
                    2 => 'Keep',
                    3 => 'Clear',
                    4 => 'Update'
                );

                $availability = array(
                    0 => '',
                    1 => ''
                );

                $sheet_columns = array(
                    '1' => 'Key Name',
                    '2' => 'Meta',
                    '3' => 'Name',
                    '4' => 'Description',
                    '5' => 'Parent',
                    '6' => 'Priority',
                    '7' => 'Is Visible',
                    '8' => 'List Subcats',
                    '9' => 'Show Navhelp',
                    '10'=> 'Show Subcat Images'
                );

                $tempData = array(
                    'file_name' => $data['file_name'],
                    'orig_file_name' => $data['orig_name'],
                    'cat' => $this->Bulk_operation->getCategoryDetail($this->input->post('cat'), array('category_name'))->category_name,
                    'cat_id' => (int)$this->input->post('cat'),
                    'update_rule' => $data_login_rules[$this->input->post('update_rule')],
                    'rule_id' => (int)$this->input->post('update_rule'),
                    'availability' => (int)$this->input->post('availability'),
                );

                $this->session->set_userdata($tempData);

                $page_data['sheet_data'] = $this->Bulk_operation->readSpreadSheet($data['full_path'], 'A', 'Z');
                $page_data['page_name'] = "bulk_category_index2";
                $page_data['temp_data'] = $tempData;
                $page_data['sheet_columns'] = $sheet_columns;
                $page_data['show_line_limit'] = 3;
                $this->load->view('back/index', $page_data);


            }
        }
    }



    public function bulk_category_upload3()
    {
        $this->load->model("Bulk_operation");
        $this->load->library("form_validation");
        $this->form_validation->set_rules('col_1', 'Column 1', 'required');
        $this->form_validation->set_rules('col_2', 'Column 2', 'required');
        $this->form_validation->set_rules('col_3', 'Column 3', 'required');
        $this->form_validation->set_rules('col_4', 'Column 4', 'required');
        $this->form_validation->set_rules('col_5', 'Column 5', 'required');
        $this->form_validation->set_rules('col_6', 'Column 6', 'required');
        $this->form_validation->set_rules('col_7', 'Column 7', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('failed', "Critical error. Try again");
            redirect("admin/bulk_category_upload");
        } else {
            $spread_sheet_data = $this->Bulk_operation->readSpreadSheet("./uploads/tmp/{$this->session->userdata('file_name')}", 'A', 'Z');
            $i = 0;
            foreach ($spread_sheet_data as $row) {

                if ($i == 0) {

                } else {
                    $column = $row[0];
                        $cat_data = array(
                            'parentid'=> $this->session->userdata('cat_id'),
                            'category_key' => $column[0],
                            'category_name' => $column[2],
                            'meta_keywords' => $column[1],
                            'is_visible_user' => $column[6],
                            'display_categories' => 1,
                            'user_group'=>0,
                            'password_protected'=>0,
                            'list_subcats'=>$column[7],
                            'navigation_help'=>$column[8],
                            'show_subcate_images'=>$column[9],
                            'priority'=> $column[5],
                            'cat_description_top'=> $column[3],
                            'is_active'=> 0
                        );
                        $update_rule_id = $this->session->userdata('rule_id');
                    }
                    
                        $this->Bulk_operation->pushToCategory($cat_data,$update_rule_id);
				//$this->Bulk_operation->pushToCategory($cat_data);	
                        $i++;
                }
                
                $this->session->set_flashdata('success', "Bulk categories uploaded successfully");
                 redirect("admin/bulk_category_upload");
            }
    }
  
    public function bulk_product_image_upload(){
        $this->load->model("Bulk_operation");
        $page_data['page_name'] = "bulk_img_upload_index";
        $this->load->view('back/index', $page_data);

    }

    public function product_image_upload_process(){
        $this->load->model("Bulk_operation");
        $config['upload_path'] = './uploads/product_image';
        $config['allowed_types'] = 'jpg|JPG|png|PNG|gif|GIF|jpeg|JPEG';
        $config['max_size'] = 99999;
        $config['encrypt_name'] = true;
        $config['file_ext_tolower'] = true;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo "Error! Invalid Image";

        }else{
            $data =  $this->upload->data();
            //var_dump($data); exit();
            $namePart = explode('.',$data['orig_name']);
            //var_dump($namePart); exit();

            if($this->Bulk_operation->checkProductExistence($namePart[0])){
                $data = array(
                    'main_image'=> $data['file_name']
                );
                if($this->Bulk_operation->updateProductPhoto($namePart[0], $data)){
                    echo "upload success";
                }else{
                    unlink($data['full_path']);
                    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                    echo "Error! Database operation failed";
                }

            }else{
                unlink($data['full_path']);
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                echo "Error! Image ID does not meet to any product ID";
            }

        }

    }


    public function bulk_category_image_upload(){
        $this->load->model("Bulk_operation");
        $page_data['page_name'] = "bulk_category_image_upload_index";
        $this->load->view('back/index', $page_data);
    }

    public function bulk_category_image_upload_process(){
        $this->load->model("Bulk_operation");
        $config['upload_path'] = './uploads/category_image';
        $config['allowed_types'] = 'jpg|JPG|png|PNG|gif|GIF|jpeg|JPEG';
        $config['max_size'] = 99999;
        $config['encrypt_name'] = true;
        $config['file_ext_tolower'] = true;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo "Error! Invalid Image";

        }else{
            $data =  $this->upload->data();
            //var_dump($data); exit();
            $namePart = explode('.',$data['orig_name']);
            //var_dump($namePart); exit();

            if($this->Bulk_operation->checkCategoryExistence($namePart[0])){
                $data = array(
                    'category_icon'=> $data['file_name']
                );
                if($this->Bulk_operation->updateCategoryPhoto($namePart[0], $data)){
                    echo "Upload success";
                }else{
                    unlink($data['full_path']);
                    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                    echo "Error! Database operation failed";
                }

            }else{
                unlink($data['full_path']);
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                echo "Error! Image ID does not meet to any category ID";
            }

        }


    }


    /* Start code of Sohel Mahmud */
    /*User Management */
    function user_customer_list()
    {
        if (!$this->crud_model->admin_permission('user')) {
            redirect(base_url() . 'index.php/admin');
        }

        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/user_customer_list/");
        $config['total_rows'] = $this->crud_model->countAllUser();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['all_users'] = $this->crud_model->getAllUser($config['per_page'], $this->uri->segment(3));

            $page_data['page_name'] = "user_customer_list";
            $this->load->view('back/index', $page_data);

    }
	function browse_user_address($userid=null)
	{
	
		
		if($userid == null){
            exit("Something error");
        }

		 $page_data['customer']= $this->crud_model->GetSingleUserData($userid);
		 $page_data['page_name'] = "browse_user_address";
		 $this->load->view('back/index', $page_data);
		 $page_data = $this->crud_model->GetSingleUserData($userid);

	}

	function get_states_by_country_id($para1=''){
		$this->db->select('id,name');
		$this->db->where('country_id', $para1);
		$sql = $this->db->get('states');
		$res = $sql->result();
		$options = "";
		foreach($res as $dt){
			$options .='<option value="'.$dt->id.'">'.$dt->name.'</option>';
		}
		echo $options;
	}
     function add_user_customer(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("username","User Name","required");
		$this->form_validation->set_rules("firstname","First Name","required");
        $this->form_validation->set_rules("surname","SurName","required");
        $this->form_validation->set_rules("email","Email (login) ","required|is_unique[user.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("confirm_password","Password Confirmation ","trim|required|matches[password]");


	    $date = date('m/d/Y h:i:s');
		$unix_time =  strtotime($date );


        if( $this->form_validation->run() == false){
			$page_data['countries'] = $this->crud_model->getAllCountries();
			$page_data['states'] = $this->crud_model->getStatesByCountry($customer_details['billing'][0]['country']);
            $page_data['page_name'] = "add_user_customer";
            $this->load->view('back/index', $page_data);
        }else{

            //exit("form_validation passed");
            $data = array();
            $data['username'] = $this->input->post('username');
			$data['firstname'] = $this->input->post('firstname');
            $data['surname'] = $this->input->post('surname');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['mobile'] = $this->input->post('mobile');
            $data['password'] =sha1($this->input->post('password'));
			$data['creation_date'] =$unix_time ;



            $this->db->insert('user',$data);
			$user_id = $this->db->insert_id();

	        /*Account Information*/

	       if($user_id){
			    $adata = array();
			    $adata['acc_company_name'] = $this->input->post('contact_company');
				$adata['acc_group_discount'] = $this->input->post('user_group_discount');
				$adata['acc_group_of_product'] = $this->input->post('user_group_product');

				$adata['acc_email_mode'] = $this->input->post('email_mode');
				$adata['acc_email_newsletter'] = $this->input->post('email_newsletters');
				$adata['acc_email_pro_update'] = $this->input->post('email_product_update');
			    $adata['user_id'] = $user_id;

				  if(!$this->db->insert('user_account_info_tbl',$adata)){
					echo $this->db->_error_message();

				  }

			   }


			  /*Billing Information*/
			 if($user_id ){

			    $bdata['address1'] = $this->input->post('billing_address_line1');
				$bdata['address2'] = $this->input->post('billing_address_line2');
				$bdata['city'] = $this->input->post('city');
				$bdata['country'] = $this->input->post('country');
				$bdata['state'] = $this->input->post('state');
				$bdata['zip'] = $this->input->post('zip_code');
			    $bdata['user_id'] = $user_id;



				 if(!$this->db->insert('user_billing_info_tbl',$bdata)){
					echo $this->db->_error_message();

				  }
			   }



			  /*Shipping Information Information*/
			 if($user_id ){


				if($this->input->post('shipping_address_same')){ //echo $this->input->post('shipping_address_same');
				$sdata['billingsameshipping'] =  $this->input->post('shipping_address_same');
			    $sdata['sname'] = $this->input->post('username');
				$sdata['scompany'] = $this->input->post('contact_company');
			    $sdata['saddress1'] = $this->input->post('billing_address_line1');
				$sdata['saddress2'] = $this->input->post('billing_address_line2');
				$sdata['scity'] = $this->input->post('city');
				$sdata['scountry'] = $this->input->post('country');
				$sdata['sstate'] = $this->input->post('state');
				$sdata['szip'] = $this->input->post('zip_code');
			    $sdata['user_id'] = $user_id;



				 if(!$this->db->insert('user_shipping_info_tbl',$sdata)){
					echo $this->db->_error_message();

				  }
			   }else {
				$sdata['billingsameshipping'] =  $this->input->post('shipping_address_same');
			    $sdata['sname'] = $this->input->post('shipping_name');
				$sdata['scompany'] = $this->input->post('shipping_company');
			    $sdata['saddress1'] = $this->input->post('shipping_address_line1');
				$sdata['saddress2'] = $this->input->post('shipping_address_line2');
				$sdata['scity'] = $this->input->post('shipping_city');
				$sdata['scountry'] = $this->input->post('shipping_country');
				$sdata['sstate'] = $this->input->post('shipping_state');
				$sdata['szip'] = $this->input->post('shipping_zip_code');
				$sdata['user_id'] = $user_id;

				 if(!$this->db->insert('user_shipping_info_tbl',$sdata)){
					echo $this->db->_error_message();

				  }

			   }  // shipping_address_same

			}

			/*Total Point Information*/
			 if($user_id ){

			    $tdata['total_point'] = $this->input->post('total_point');
			    $tdata['user_id'] = $user_id;

				 if(!$this->db->insert('user_total_point_tbl',$tdata)){
					echo $this->db->_error_message();

				  }
			   }


			if($user_id){

                $this->session->set_flashdata('success',"User added successfully");
            }else{
                $this->session->set_flashdata('failed',"Database operation failed");
            }

            redirect("admin/user_customer_list");


        }
    }



	function view_user_customer_profile($userid=null)
        {
		if($userid == null){
            exit("Something error");
        }

		 $page_data['customer']= $this->crud_model->GetSingleUserData($userid);
		 $page_data['page_name'] = "profile_user_customer";
		 $this->load->view('back/index', $page_data);
		 $page_data = $this->crud_model->GetSingleUserData($userid);

	}

	function update_user_customer($id= null)
    {
	

        $this->load->library("form_validation");
        $this->form_validation->set_rules("username","User Name","required");
        $this->form_validation->set_rules("surname","SurName","required");
        $this->form_validation->set_rules("email","Email(login) ","required");
		
		if($id == null){
            exit("Something error");
        }
		else
		{

		 $page_data['customer']= $this->crud_model->GetSingleUserData($id);
		// $page_data['page_name'] = "user_profile_updated";
		// $this->load->view('back/index', $page_data);
		// $page_data = $this->crud_model->GetSingleUserData($id);
		 }

        if( $this->form_validation->run() == false){
		

			$page_data['page_name'] = "update_user_customer";
			$customer_details = $this->crud_model->GetSingleUserData($id);
			$page_data['countries'] = $this->crud_model->getAllCountries();
			$page_data['states'] = $this->crud_model->getStatesByCountry($customer_details['billing'][0]['country']);
			$page_data['customer'] = $customer_details;
            $this->load->view('back/index', $page_data);
        }else{

			$today_date = date('m/d/Y h:i:s');
			$id= $this->input->post('user_id');
			$page_data['countries'] = $this->crud_model->getAllCountries();
			
			$data = array();
            $data['username'] = $this->input->post('username');
			$data['firstname'] = $this->input->post('firstname');
            $data['surname'] = $this->input->post('surname');
			$data['email'] = $this->input->post('email');
			$data['phone'] = $this->input->post('phone');
			$data['mobile'] = $this->input->post('mobile');

			$this->db->where('user_id', $id);
            $user_updated=$this->db->update('user',$data);

			/*Account Information*/
	       if($user_updated){
		  		$id= $this->input->post('user_id');
			    $adata = array();
			    $adata['acc_company_name'] = $this->input->post('contact_company');
				$adata['acc_group_discount'] = $this->input->post('user_group_discount');
				$adata['acc_group_of_product'] = $this->input->post('user_group_product');
                $adata['acc_email_mode'] = $this->input->post('email_mode');
				$adata['acc_email_newsletter'] = $this->input->post('email_newsletters');
				$adata['acc_email_pro_update'] = $this->input->post('email_product_update');
				
				//$adata['update_date'] = $today_date;

				$this->db->where('user_id', $id);
				
				 if(!$this->db->update('user_account_info_tbl',$adata)){
					echo $this->db->_error_message();

				  }

			   }

			   			  /*Billing Information*/
			 if($user_updated ){
				$id= $this->input->post('user_id');
				$bdata = array();
			    $bdata['address1'] = $this->input->post('billing_address_line1');
				$bdata['address2'] = $this->input->post('billing_address_line2');
				$bdata['city'] = $this->input->post('city');
				$bdata['country'] = $this->input->post('country');
				$bdata['state'] = $this->input->post('state');
				$bdata['zip'] = $this->input->post('zip_code');
				//$bdata['update_date'] = $today_date;
			   // $this->db->where('user_id', $id);

                $this->db->where('user_id', $id);
				
				 if(!$this->db->update('user_billing_info_tbl',$bdata)){
					echo $this->db->_error_message();

				  }
				
           // $this->db->update('user_billing_info_tbl',$bdata);
				 
			   }


			    /*Shipping Information Information*/
			 if($user_updated ){


				$id= $this->input->post('user_id');
				$sdata['billingsameshipping'] =  $this->input->post('shipping_address_same');
			    $sdata['sname'] = $this->input->post('shipping_name');
				$sdata['scompany'] = $this->input->post('shipping_company');
			    $sdata['saddress1'] = $this->input->post('shipping_address_line1');
				$sdata['saddress2'] = $this->input->post('shipping_address_line2');
				$sdata['scity'] = $this->input->post('shipping_city');
				$sdata['scountry'] = $this->input->post('shipping_country');
				$sdata['sstate'] = $this->input->post('shipping_state');
				$sdata['szip'] = $this->input->post('shipping_zip_code');
				//$sdata['update_date'] = $today_date;

				$this->db->where('user_id', $id);
				 if(!$this->db->update('user_shipping_info_tbl',$sdata)){
					echo $this->db->_error_message();

				  }

			   }  // shipping_address_same


			   	/*Total Point Information*/
			 if($user_updated ){
				$id= $this->input->post('user_id');
			    $tdata['total_point'] = $this->input->post('total_point');
				//$tdata['update_date'] = $today_date;
                $tdata['total_point'] = $this->input->post('total_point');
			    $this->db->where('user_id', $id);
				 if(!$this->db->update('user_total_point_tbl',$tdata)){
					echo $this->db->_error_message();

				  }
			   }



			if($user_updated){
			

                $this->session->set_flashdata('success',"User profile has been successfully updated");
				 echo $this->session->set_userdata('user_id', $row['user_id']);
            }else{
                $this->session->set_flashdata('failed',"Database operation failed");
            }
			 $page_data['page_name'] = "user_profile_updated";
		 $this->load->view('back/index', $page_data);
		 
		// $this->session->set_userdata($data);
         //   redirect("admin/user_profile_updated");


        }
		function user_update()
		{
			$this->load->library(‘user_agent’);
		 redirect($this->agent->referrer());
		}

	}

	function delete_user_customer($id=null)
    {
		 if($id == null){
            exit("Something error");
        }


		//Delete user data form user_account_info_tbl
		$this->db->where('user_id', $id);
		$this->db->delete('user_account_info_tbl');

		//Delete user data form user_billing_info_tbl
		$this->db->where('user_id', $id);
		$this->db->delete('user_billing_info_tbl');

		//Delete user data form user_shipping_info_tbl
		$this->db->where('user_id', $id);
		$this->db->delete('user_shipping_info_tbl');

		//Delete user data form user_total_point_tbl
		$this->db->where('user_id', $id);
		$this->db->delete('user_total_point_tbl');




        $this->db->where('user_id', $id);

        if ($this->db->delete('user')) {

            $this->session->set_flashdata('success', "User deleted successfully");
        } else {
            $this->session->set_flashdata('failed', "Database operation failed");
        }

        redirect("admin/user_customer_list");

	}
	
	function search_user_customer(){

		 $page_data['all_users']='';
		 $page_data['page_name'] = "search_user_customer";

		 if(isset($_POST['user-search'])){


					$username = $this->input->post('username');
				    $surname =   $this->input->post('surname');
					$email  =   $this->input->post('email');
					$phone =   $this->input->post('mobile');
                    $page_data['all_users'] = $this->crud_model->search_user($username,$surname,$email,$phone);
				}

		 $this->load->view('back/index', $page_data);

	}

	 /*?>function search_user_customer($para1='',$para2=''){


		if (!$this->crud_model->admin_permission('search_user_customer')) {
                redirect(base_url() . 'index.php/admin');
            }
			
			 if ($para1 == 'delete') {
                    $this->crud_model->file_dlt('user', $para2, '.jpg', 'multi');
                    $this->db->where('user_id', $para2);
                    $this->db->delete('user');
                     redirect(base_url().'user_customer_list');
                    } else{
                    $page_data['page_name'] = "user_customer_list";
                    $username = $this->input->post('username');
				    $surname =   $this->input->post('surname');
					$email  =   $this->input->post('email');
					$phone =   $this->input->post('phone');
                    $page_data['all_users'] = $this->crud_model->search_user($username,$surname,$email,$phone);
					$this->load->view('back/index', $page_data);
		
				}

		 

	}<?php */
	
        


        function banned_ip_list()
    {
        if (!$this->crud_model->admin_permission('user')) {
            redirect(base_url() . 'index.php/admin');
        }

        $this->load->library('pagination');
        $config['base_url'] = site_url("admin/user_customer_list/");
        $config['total_rows'] = $this->crud_model->countAllUser();
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="dpi-pagination pagination pull-left">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="disabled"><a href="javascript: void(0)"><b style="color: #000000">';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_link'] = '&lt&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page_data["links"] = $this->pagination->create_links();
        $page_data['all_users'] = $this->crud_model->getAllUser($config['per_page'], $this->uri->segment(3));

            $page_data['page_name'] = "";
            $this->load->view('back/index', $page_data);

    }

/* end  code of Sohel Mahmud */

	/* Start code of Dipak Tandel */
       /* start code   product comment list */
      function product_comments ($para1 = '', $para2 = '')
        {
            if (!$this->crud_model->admin_permission('product_comments')) {
                redirect(base_url() . 'index.php/admin');
            }
            if ($para1 == 'list') {
            $this->db->order_by('product_comment_id', 'desc');
            $page_data['all_comments'] = $this->db->get('product_comment')->result_array();
            $this->load->view('back/admin/product_comments_list', $page_data);
            }
            elseif ($para1 == 'delete') {
            $this->db->where('product_comment_id', $para2);
            $this->db->delete('product_comment');
            }
            else if ($para1 == 'approval') {
            $page_data['product_comment_id'] = $para2;
            $page_data['comment_status'] = $this->db->get_where('product_comment', array(
                        'product_comment_id' => $para2
                    ))->row()->comment_status;
            $this->load->view('back/admin/product_comment_status', $page_data);
            }
            else if ($para1 == 'approval_set') {
            $comment = $para2;
            $approval = $this->input->post('approval');
            if ($approval == 'ok') {
                $data['comment_status'] = 'approved';
            } else {
                $data['comment_status'] = 'pending';
            }
            $this->db->where('product_comment_id', $comment);
            $this->db->update('product_comment', $data);
            recache();
            }
            elseif ($para1 == 'view') {
            $page_data['all_comments'] = $this->db->get_where('product_comment', array(
                'product_comment_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/product_comments_view', $page_data);
            } else {
            $page_data['page_name'] = "product_comments";
            $page_data['all_comments'] = $this->db->get('product_comment')->result_array();
            $this->load->view('back/index', $page_data);
            }
        }

       /* end code  product comment list*/
        /* start code   filters */

  function filters ($para1 = '', $para2 = '')
    {
          if (!$this->crud_model->admin_permission('filters')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $filter_grp     = $this->input->post('filter_grp');
            $filter_odr    = $this->input->post('sort_order_grp');
            $filter = array();
            $f_q  = $this->input->post('filter_name');
            $f_a  = $this->input->post('filter_order');
             foreach ($f_q as $i => $r) {
                $filter[] = array(
                    'filter_name' => $f_q[$i],
                    'sort_order' => $f_a[$i]
                );
            }
            $fill = json_encode($filter);
            $sql = "INSERT INTO filters (filter_group_name,filter_group_order,filter_name) " .
                "VALUES ('{$filter_grp}', '{$filter_odr}','{$fill}')";
            $this->db->query($sql);
        } else if ($para1 == 'edit') {
            $page_data['all_filters'] = $this->db->get_where('filters', array(
                'filter_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/filter_edit', $page_data);
        } elseif ($para1 == "update") {
            $filter_grp     = $this->input->post('filter_grp');
            $filter_odr    = $this->input->post('sort_order_grp');
            $filter = array();
            $f_q  = $this->input->post('filter_name');
            $f_a  = $this->input->post('filter_order');
             foreach ($f_q as $i => $r) {
                $filter[] = array(
                    'filter_name' => $f_q[$i],
                    'sort_order' => $f_a[$i]
                );
            }
            $fill = json_encode($filter);
           $sql = "UPDATE filters SET filter_group_name = '{$filter_grp}',filter_group_order='{$filter_odr}',filter_name='{$fill}'" .
                   "WHERE filter_id = ". $para2;
            $this->db->query($sql);
            echo $this->db->last_query();
        } elseif ($para1 == 'delete') {
            $this->db->where('filter_id', $para2);
            $this->db->delete('filters');
        } elseif ($para1 == 'list') {
            $this->db->order_by('filter_id', 'asc');
            $page_data['all_filters'] = $this->db->get('filters')->result_array();
            $this->load->view('back/admin/filter_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/filter_add');
        } else {
            $page_data['page_name']  = "filters";
            $page_data['all_filters'] = $this->db->get('filters')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
            /* end code  filter */

     /* start code  attributes */

 function attributes ($para1 = '', $para2 = '')
    {
            if (!$this->crud_model->admin_permission('attibuets')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['attribute_name']     = $this->input->post('attribute_name');
            $data['attribute_group_id']     = $this->input->post('attribute_group_id');
            $data['sort_order']      = $this->input->post('sort_order');
            $this->db->insert('attributes', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_attributes'] = $this->db->get_where('attributes', array(
                'attribute_id' => $para2
            ))->result_array();
            $page_data['all_attribute_group'] =  $this->crud_model->getAllGroups();
            $this->load->view('back/admin/attributes_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['attribute_name']     = $this->input->post('attribute_name');
            $data['attribute_group_id']     = $this->input->post('attribute_group_id');
            $data['sort_order']      = $this->input->post('sort_order');
            $this->db->where('attribute_id', $para2);
            $this->db->update('attributes', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('attribute_id', $para2);
            $this->db->delete('attributes');
        } elseif ($para1 == 'list') {
            $this->db->order_by('sort_order', 'asc');
            $page_data['all_attributes'] = $this->db->get('attributes')->result_array();
            $this->load->view('back/admin/attributes_list', $page_data);
        } elseif ($para1 == 'add') {
            $page_data['all_attribute_group'] =  $this->crud_model->getAllGroups();
            $this->load->view('back/admin/attributes_add', $page_data);
        } else {
            $page_data['page_name']  = "attributes";
            $page_data['all_attributes'] = $this->db->get('attributes')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
            /* end code  attributes */

           /* start code  attribute groups */
 function attribute_groups($para1 = '', $para2 = '')
    {
            if (!$this->crud_model->admin_permission('attibuets_groups')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['attribute_group_name']     = $this->input->post('attribute_group_name');
            $data['sort_id']      = $this->input->post('sort_order');
            $this->db->insert('attribute_group', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_attribute_group'] = $this->db->get_where('attribute_group', array(
                'attribute_group_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/attribute_groups_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['attribute_group_name']     = $this->input->post('attribute_group_name');
            $data['sort_id']      = $this->input->post('sort_order');
            $this->db->where('attribute_group_id', $para2);
            $this->db->update('attribute_group', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('attribute_group_id', $para2);
            $this->db->delete('attribute_group');
        } elseif ($para1 == 'list') {
            $this->db->order_by('sort_id', 'asc');
            $page_data['all_attribute_group'] = $this->db->get('attribute_group')->result_array();
            $this->load->view('back/admin/attribute_groups_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/attribute_groups_add');
        } else {
            $page_data['page_name']  = "attribute_groups";
            $page_data['all_attribute_group'] = $this->db->get('attribute_group')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
/* end code attribute groups  */

    /* start code download  */
    function download($para1 = "", $para2 = "") {
        if (!$this->crud_model->admin_permission('download')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $type = 'download';
            $data['download_name'] = $this->input->post('download_name');
            $data['added_date'] = time();
            $data['mask'] = $this->input->post('mask');
            $this->db->insert('download', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "download", $id, '', '', '.');
            recache();
        } else if ($para1 == 'edit') {
            $page_data['downloads_data'] = $this->db->get_where('download', array(
                        'download_id' => $para2))->result_array();
            $this->load->view('back/admin/download_edit', $page_data);
        }
        elseif ($para1 == "update") {
            $data['download_name'] = $this->input->post('download_name');
            $data['added_date'] = time();
            $data['mask'] = $this->input->post('mask');;
            $this->db->where('download_id', $para2);
            $this->db->update('download', $data);
            $this->crud_model->file_up("img", "download", $para2, '', '', '.');
            recache();
        }elseif ($para1 == 'list') {
            $this->db->order_by('download_id', 'asc');
            $page_data['all_downloads'] = $this->db->get('download')->result_array();
            $this->load->view('back/admin/download_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/download_add');
        } elseif ($para1 == 'delete') {
            $this->db->where('download_id', $para2);
            $this->db->delete('download');
        } else {
            $page_data['page_name'] = "download";
            $this->load->view('back/index', $page_data);
        }
    }

    /* end code download */

        /* start code  Oredr Attachment */
function order_attachment($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('order_attachment')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'delete') {
            $this->db->where('order_attach_id', $para2);
            $this->db->delete('order_attachment');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('order_attach_id', 'desc');
            $page_data['all_attachment'] = $this->db->get('order_attachment')->result_array();
            $this->load->view('back/admin/order_attachment_list', $page_data);
        }  else {
            $page_data['page_name']        = "order_attachment";
            $page_data['all_attachment'] = $this->db->get('order_attachment')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
/* end code Oredr Attachment  */

    /* Start Subscribed Product list*/
function subscribed_products($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('subscribed_products')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "subscribe_products") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "subscribed_products");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "cancel_subscribe") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "customers_cancel_subscriptions");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }
         if ($para1 == "chg_subsc_period") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "customer_change_subscription_period");
            $this->db->update('general_settings', array(
                'value' => $val
            ));
        }

        if ($para1 == 'delete') {
            $this->db->where('subscribed_list_id', $para2);
            $this->db->delete('subscribed_products');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('subscribed_list_id', 'desc');
            $page_data['all_subscribe_product'] = $this->db->get('subscribed_products')->result_array();
            $this->load->view('back/admin/subscribed_products_list', $page_data);
        }  else {
            $page_data['page_name']        = "subscribed_products";
            $page_data['all_subscribe_product'] = $this->db->get('subscribed_products')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

/* end Subscribed Product list */

         /* Start code Browse Donations */
            function browse_donations($para1 = "",$para2 = '')
            {
                if (!$this->crud_model->admin_permission('browse_donations')) {
                   redirect(base_url() . 'index.php/admin');
                   }
                if ($para1 == 'list') {
                $this->db->order_by('donation_id', 'desc');
                $page_data['all_donation'] = $this->db->get('donation')->result_array();
                $this->load->view('back/admin/browse_donations_list', $page_data);
                }
                elseif($para1 == 'delete')
                {
                    $this->db->where('donation_id', $para2);
                    $this->db->delete('donation');
                }
                elseif ($para1 == 'view') {
                $page_data['all_donation'] = $this->db->get_where('donation', array(
                    'donation_id' => $para2
                ))->result_array();
                $this->load->view('back/admin/browse_donations_view', $page_data);
                } else {
                $page_data['page_name'] = "browse_donations";
                $page_data['all_donation'] = $this->db->get('donation')->result_array();
                $this->load->view('back/index', $page_data);
                }
            }
        /* end code Browse Donations*/

/* start code sent email archive*/
        function sent_email_archive($para1 = "",$para2 = '')
        {
            if (!$this->crud_model->admin_permission('sent_email_archive')) {
            redirect(base_url() . 'index.php/admin');
            }
            if ($para1 == 'list') {
            $this->db->order_by('sent_email_id', 'desc');
            $page_data['all_sent_email'] = $this->db->get('sent_email_archive')->result_array();
            $this->load->view('back/admin/sent_email_archive_list', $page_data);
            }
            elseif ($para1 == 'view') {
            $page_data['all_sent_email'] = $this->db->get_where('sent_email_archive', array(
                'sent_email_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/sent_email_archive_view', $page_data);
            } else {
            $page_data['page_name'] = "sent_email_archive";
            $page_data['all_sent_email'] = $this->db->get('sent_email_archive')->result_array();
            $this->load->view('back/index', $page_data);
            }
        }

 /* end code sent email archive*/

/* start code top and bottom default email template*/
    function email_template($para1 = "")
    {
        if (!$this->crud_model->admin_permission('email_template')) {
            redirect(base_url() . 'index.php/admin');
        }
         if ($para1 == 'set') {
              $data = array();
              $data['top_html_email']  = $this->input->post('email_top_html');
              $data['bottom_html_email']  = $this->input->post('email_bottom_html');
              $data['top_text_email']  = $this->input->post('email_top_text');
              $data['bottom_text_email']  = $this->input->post('email_bottom_text');
              $this->db->update('email_template', $data);
         } else {
            $page_data['page_name']      = "email_template";
            $page_data['email_template_data'] = $this->db->get('email_template')->result_array();
            $this->load->view('back/index', $page_data);
            }
    }
    /* end code top and bottom default email template*/

    /* start notification email */
        function notification_emails($para1 = '', $para2 = '')
        {
           if (!$this->crud_model->admin_permission('notification_emails')) {
            redirect(base_url() . 'index.php/admin');
            }
        if ($para1 == 'edit') {
            $page_data['notifi_emails_data'] = $this->db->get_where('notification_emails', array(
                'notification_email_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/notification_emails_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['notification_email_html']  = $this->input->post('no_email_html');
            $data['notification_email_text']    = $this->input->post('no_email_text');
            $this->db->where('notification_email_id', $para2);
            $this->db->update('notification_emails', $data);
        }  elseif ($para1 == 'list') {
            $this->db->order_by('notification_email_id', 'asc');
            $page_data['all_notifi_emails'] = $this->db->get('notification_emails')->result_array();
            $this->load->view('back/admin/notification_emails_list', $page_data);
        }  else {
            $page_data['page_name']      = "notification_emails";
            $page_data['notifi_emails_data'] = $this->db->get('notification_emails')->result_array();
            $this->load->view('back/index', $page_data);
        }

        }
/* end notification email */
 /* start email list Management */
            function email_management($para1 = '', $para2 = '')
            {
                if (!$this->crud_model->admin_permission('email_management')) {
                    redirect(base_url() . 'index.php/admin');
                }

                if ($para1 == 'list') {
                    $page_data['page_name']      = "email_management_list";
                    $this->load->view('back/admin/email_management_list', $page_data);
                }
                elseif($para1 == 'manage_suscriber')
                {
                    $this->db->order_by('subscribe_id', 'desc');
                    $page_data['all_subscriber'] = $this->db->get('subscribe')->result_array();
                    $this->load->view('back/admin/manage_subscriber_email', $page_data);
                }
                elseif ($para1 == 'delete') {
                    //delete subscriber
                    $this->db->where('subscribe_id', $para2);
                    $this->db->delete('subscribe');
                    recache();
                }
                elseif($para1 == 'import_suscriber')
                {
                    $page_data['page_name']      = "import_subscriber_email";
                    $this->load->view('back/admin/import_subscriber_email', $page_data);
                }
                elseif($para1 =='import_email')
                {
                                       //import subscriber
                      $import_format = $this->input->post('import_format');
                      if($import_format  == 'comma_seprated') {
                        $string  = $this->input->post('subscriber_email');
                        $array = explode(",", $string);
                        foreach($array  as $str){
                            $query = $this->db->select('email')
                                    ->where('email',$str)
                                    ->get('subscribe');
                        if($query ->num_rows() > 0)
                        {
                              $sql = "UPDATE subscribe SET (email) values ('$str')";
                               $this-> db-> query($sql);
                        }
                        else {
                              $sql = "insert into subscribe (email) values ('$str')";
                              $this-> db-> query($sql);
                            }
                        }
                      }
                     elseif($import_format == 'semicolon_seprated')
                     {
                        $string  = $this->input->post('subscriber_email');
                        $array = explode(";", $string);
                        foreach($array  as $str){
                            $query = $this->db->select('email')
                                    ->where('email',$str)
                                    ->get('subscribe');
                        if($query ->num_rows() > 0)
                        {
                              $sql = "UPDATE subscribe SET (email) values ('$str')";
                               $this-> db-> query($sql);
                        }
                        else {
                              $sql = "insert into subscribe (email) values ('$str')";
                              $this-> db-> query($sql);
                            }
                        }
                     }
                     elseif($import_format == 'per_line')
                     {
                       $string  = $this->input->post('subscriber_email');
                        $array = explode("\n", $string);
                        foreach($array  as $str){
                            echo $str;
                            $query = $this->db->select('email')
                                    ->where('email',$str)
                                    ->get('subscribe');
                        if($query ->num_rows() > 0)
                        {
                              $sql = "UPDATE subscribe SET (email) values ('$str')";
                               $this-> db-> query($sql);
                        }
                        else {
                              $sql = "insert into subscribe (email) values ('$str')";
                              $this-> db-> query($sql);
                            }
                        }

                     }
                }
                 elseif($para1 == 'export_suscriber_email')
                 {
                    $page_data['users_email']       = $this->db->get('user')->result_array();
                    $page_data['subscribers_email'] = $this->db->get('subscribe')->result_array();
                    $page_data['all_email_data'] = $this->db->get('user')->result_array();
                    $this->load->view('back/admin/export_user_email', $page_data);
                 }
                elseif($para1 == 'export_user_email')
                {
                    $page_data['all_subscribe_email'] = $this->db->get('subscribe')->result_array();
                    $this->load->view('back/admin/export_subscriber_email', $page_data);
                }
                 else
                {
                    $page_data['page_name']      = "email_management";
                    $this->load->view('back/index', $page_data);
                }
            }


    /* end email list Management */

       /* start code sms notifications */
    function sms_notifications($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('sms_notifications')) {
            redirect(base_url() . 'index.php/admin');
        }
         if ($para1 == "sms_order_admin") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "sms_on_order_received_admin");
            $this->db->update('sms_notification_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "sms_com_order_customer") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "sms_on_order_completed_customer");
            $this->db->update('sms_notification_settings', array(
                'value' => $val
            ));
        }

        if ($para1 == "sms_man_order_customer") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "sms_on_manual_order_received_customer");
            $this->db->update('sms_notification_settings', array(
                'value' => $val
            ));
        }

        if ($para1 == "sms_due_order_customer") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "sms_on_due_notification_customer");
            $this->db->update('sms_notification_settings', array(
                'value' => $val
            ));
        }

        if ($para1 == "set") {
            $this->db->where('type', "admin_mobile_number ");
            $this->db->update('sms_notification_settings', array(
                'value' => $this->input->post('admin_mobile')
            ));
        }
        if ($para1 == 'edit') {
            $page_data['all_sms_services'] = $this->db->get_where('sms_services', array(
                'sms_services_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/sms_management_edit', $page_data);
            recache();
        }
        elseif ($para1 == "update") {
            $data['sms_provider_name'] = $this->input->post('provider_name');
            $data['url_to_gateway'] = $this->input->post('url_gateway');
            $data['sms_protocol'] = $this->input->post('protocol');
            $data['user_name'] = $this->input->post('user_name');
            $password          = substr(hash('sha512', rand()), 0, 12);
            $data['password']  = sha1($password);
            $data['api_id'] = $this->input->post('api_id');
            $this->db->where('sms_services_id', $para2);
            $this->db->update('sms_services', $data);
        }
        elseif ($para1 == 'delete') {
            $data['active'] = '0';
            $this->db->update('sms_services',$data);

            $data['active'] = '1';
            $this->db->where('sms_services_id', $para2);
            $this->db->update('sms_services',$data);
        }
        elseif ($para1 == 'list') {
            $this->db->order_by('sms_services_id', 'asc');
            $page_data['all_sms_services'] = $this->db->get('sms_services')->result_array();
            $this->load->view('back/admin/sms_management', $page_data);
        }  else {
            $page_data['page_name']        = "sms_notifications";
            $page_data['all_sms_services'] = $this->db->get('sms_services')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
  /* end  code sms notifications */

          /* start code send sms  */
        function send_sms($para1 = '')
        {
           // $this->load->helper('sendsms_helper');
           if (!$this->crud_model->admin_permission('send_sms')) {
            redirect(base_url() . 'index.php/admin');
            }
                    if ($para1 == "send") {
                        $textmessage="sd";
                        
//                     $query = $this->$this->db->select('*')
//                                    ->db->from('sms_services')
//                                    ->db->where('sms_services_id', $post['sms_provider']);
//
//                     foreach($query as $row){
//                        $username =   $row->user_name;
//                        $password =   $row->password;
//                        $url      =   $row->url_to_gateway;
//                        $api_id   =   $row->api_id;
//                     }
//                     $user_mobile = $this->db->select('*')
//                                    ->db->from('users')
//                                    ->db->where('user_id', $post['user']);
//                     foreach($user_mobile  as $row){
//                         $user_number = $row->user_phone;
//                     }
//                     echo $user_number;
//                     $telephone   =  $this->input->post('telephone');
//                     $text        =  $this->input->post('sms_msg');
                     //$smssend= SendSMS($url ,$api_id , $username, $password,$telephone,$text );
                       // sendsms( '919033917442', $textmessage );

                    }
                    else {
                        $page_data['provider'] = $this->db->select('*')->where('active','1')->get('sms_services')->result();
                        $page_data['users']    = $this->db->get('user')->result_array();
                        $page_data['company']  = $this->db->get('vendor')->result_array();
                        $page_data['page_name']= "send_sms";
                        $this->load->view('back/index', $page_data);
                    }

        }
         /* end  code send sms  */
        /* start code Email Template  */

        function templates_email($para1 = '', $para2 = '') {
            if (!$this->crud_model->admin_permission('templates_email')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['tempalte_name']      = $this->input->post('temp_name');
            $data['subject']     = $this->input->post('subject');
            $data['message']     = $this->input->post('message');
            $data['status']   = $this->input->post('status');
            $this->db->insert('templates_email', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_templates'] = $this->db->get_where('templates_email', array(
                'template_email_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/templates_email_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['tempalte_name']      = $this->input->post('temp_name');
            $data['subject']     = $this->input->post('subject');
            $data['message']     = $this->input->post('message');
            $data['status']   = $this->input->post('status');
            $this->db->where('template_email_id', $para2);
            $this->db->update('templates_email', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('template_email_id', $para2);
            $this->db->delete('templates_email');
        } elseif ($para1 == 'list') {
            $this->db->order_by('template_email_id', 'desc');
            $page_data['all_templates'] = $this->db->get('templates_email')->result_array();
            $this->load->view('back/admin/templates_email_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/templates_email_add');
        } else {
            $page_data['page_name']  = "templates_email";
            $page_data['all_templates'] = $this->db->get('templates_email')->result_array();
            $this->load->view('back/index', $page_data);
        }
       }

    /* end  code Email Template */

        /* start code Merchants packages  */

        function merchants_packages($para1 = '', $para2 = '') {
            if (!$this->crud_model->admin_permission('merchants_packages')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['title']      = $this->input->post('title');
            $data['merchant_type']     = $this->input->post('merchant_type');
            $data['period']     = $this->input->post('period');
            $data['period_types']   = $this->input->post('period_types');
            $data['item']   = $this->input->post('items');
            $data['package_type']   = $this->input->post('package_type');
            $data['commission']   = $this->input->post('commission');
            $data['price']   = $this->input->post('price');
            $data['help_text']   = $this->input->post('help_text');
            $data['description']   = $this->input->post('description');
            $this->db->insert('merchants_packages', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_packages'] = $this->db->get_where('merchants_packages', array(
                'merchants_packages_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/merchants_packages_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['title']      = $this->input->post('title');
            $data['merchant_type']     = $this->input->post('merchant_type');
            $data['period']     = $this->input->post('period');
            $data['period_types']   = $this->input->post('period_types');
            $data['item']   = $this->input->post('items');
            $data['package_type']   = $this->input->post('package_type');
            $data['commission']   = $this->input->post('commission');
            $data['price']   = $this->input->post('price');
            $data['help_text']   = $this->input->post('help_text');
            $data['description']   = $this->input->post('description');
            $this->db->where('merchants_packages_id', $para2);
            $this->db->update('merchants_packages', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('merchants_packages_id', $para2);
            $this->db->delete('merchants_packages');
        } elseif ($para1 == 'list') {
            $this->db->order_by('merchants_packages_id', 'desc');
            $page_data['all_packages'] = $this->db->get('merchants_packages')->result_array();
            $this->load->view('back/admin/merchants_packages_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/merchants_packages_add');
        } else {
            $page_data['page_name']  = "merchants_packages";
            $page_data['all_packages'] = $this->db->get('merchants_packages')->result_array();
            $this->load->view('back/index', $page_data);
        }
       }

    /* end  code Merchants packages  */

        /* start  code Export Quickbook */

        function export_quickbooks($para1 = "", $para2 = "")
        {
        if (!$this->crud_model->admin_permission('export_quickbooks')) {
            redirect(base_url() . 'index.php/admin');
        }

        if ($para1 == 'export') {
            $order_status = $this->input->post('order_status');
			
			$from_day =  $this->input->post('from_day');
            $from_month = $this->input->post('from_month');
            $from_year =  $this->input->post('from_year');
			if($from_day <= 9){
				$from_day = '0'.$from_day;
			}
			$combined_fromdate = $from_month.'/'.$from_day.'/'.$from_year;
			$from_date = strtotime($combined_fromdate);
			
			$to_day =  $this->input->post('to_day');
            $to_month = $this->input->post('to_month');
            $to_year =  $this->input->post('to_year');
			if($to_day <= 9){
				$to_day = '0'.$to_day;
			}
			$combined_todate =  $to_month.'/'.$to_day.'/'.$to_year;
			$to_date = strtotime($combined_todate);

           

            if($order_status=='not_completed_orders')
            {
                
                $query = "select * from sale where payment_status like '%\"status\":\"%due%\"%' and sale_datetime BETWEEN $from_date and $to_date";
                
            }
            elseif($order_status=='completed_orders')
            {
              /* $this->load->dbutil();
               $this->load->helper('file');
               $this->load->helper('download');
               $delimiter = ",";
               $newline = "\r\n";
               $filename = "Cart_quick_book.csv";*/
               $query = "select * from sale where payment_status like '%\"status\":\"%paid%\"%' and sale_datetime BETWEEN $from_date and $to_date";
              /* $result = $this->db->query($query);
               $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
               force_download($filename, $data);
               //echo $this->db->last_query();*/
            }
            elseif($order_status=='all_orders')
            {

                /*$this->load->dbutil();
                $this->load->helper('file');
                $this->load->helper('download');
                $delimiter = ",";
                $newline = "\r\n";
                $filename = "Cart_quick_book.csv";*/
                $query = "select * from sale where " .
                         "sale_datetime BETWEEN $from_date and $to_date";
						 $json_output[] = $query;
			echo json_decode($json_output); exit;
						 
               /* $result = $this->db->query($query);
			//print_r($result);
                $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
                force_download($filename, $data);
                //echo$this->db->last_query();*/
            }
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			$delimiter = ",";
			$newline = "\r\n";
			$filename = "Cart_quick_book.csv";
			
    		
			$result = $this->db->query($query);
			$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
			force_download($filename, $data);
			//echo $query;
        }
        else {
            $page_data['page_name']        = "export_quickbooks";
            $this->load->view('back/index', $page_data);
             }
        }
                      /* end  code export Quickbook */

               /* start  code shipping statuses */
        function shipping_statuses($para1 = '', $para2 = '') {
            if (!$this->crud_model->admin_permission('shipping_statuses')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['shipping_status_title']      = $this->input->post('shipping_title');
            $this->db->insert('shipping_statuses', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_shipping_status'] = $this->db->get_where('shipping_statuses', array(
                'shipping_status_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/shipping_status_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['shipping_status_title']      = $this->input->post('shipping_title');
            $this->db->where('shipping_status_id', $para2);
            $this->db->update('shipping_statuses', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('shipping_status_id', $para2);
            $this->db->delete('shipping_statuses');
        } elseif ($para1 == 'list') {
            $this->db->order_by('shipping_status_id', 'desc');
            $page_data['all_shipping_status'] = $this->db->get('shipping_statuses')->result_array();
            $this->load->view('back/admin/shipping_status_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/shipping_status_add');
        } else {
            $page_data['page_name']  = "shipping_statuses";
            $page_data['all_shipping_status'] = $this->db->get('shipping_statuses')->result_array();
            $this->load->view('back/index', $page_data);
        }
       }

       /* end  code of shipping statuses */
       /* start  code product review */

    function product_review($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('product_review')) {
            redirect(base_url() . 'index.php/admin');
        }

        if ($para1 == "activate_review") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "activate_product_reviews");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "auto_activate_review") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "auto_approve_product_reviews");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == 'list') {
            $this->db->order_by('product_review_id', 'desc');
            $page_data['all_reviews'] = $this->db->get('product_reviews')->result_array();
            $this->load->view('back/admin/product_review_list', $page_data);
        } elseif ($para1 == 'delete') {
            $this->db->where('product_review_id', $para2);
            $this->db->delete('product_reviews');
        } else if ($para1 == 'approval') {
            $page_data['product_review_id'] = $para2;
            $page_data['status'] = $this->db->get_where('product_reviews', array(
                        'product_review_id' => $para2
                    ))->row()->status;
            $this->load->view('back/admin/product_review_status', $page_data);
        } else if ($para1 == 'approval_set') {
            $review = $para2;
            $approval = $this->input->post('approval');
            if ($approval == 'ok') {
                $data['status'] = 'approved';
            } else {
                $data['status'] = 'pending';
            }
            $this->db->where('product_review_id', $review);
            $this->db->update('product_reviews', $data);
            recache();
        } else {
            $page_data['page_name'] = "product_review";
            $page_data['all_reviews'] = $this->db->get('product_reviews')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }


       /* end code product review */
               /* start  code banned IPs */
    function banned_ip($para1 = '', $para2 = '')
    {
          if (!$this->crud_model->admin_permission('banned_ip')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['ip_address']     = $this->input->post('ip_address');
            $this->db->insert('banned_ip', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('banned_ip');
        } elseif ($para1 == 'list') {
            $this->db->order_by('id', 'desc');
            $page_data['all_ips'] = $this->db->get('banned_ip')->result_array();
            $this->load->view('back/admin/banned_ip_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/banned_ip_add');
        } else {
            $page_data['page_name']  = "banned_ip";
            $page_data['all_ips'] = $this->db->get('banned_ip')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
    /* end   code banned IPs */
            /* start   code manage tags */
        function manage_tags($para1 = "",$para2 = '') {
        if (!$this->crud_model->admin_permission('manage_tags')) {
                redirect(base_url() . 'index.php/admin');
            }
            if ($para1 == 'do_add') {
                $data['tag_name']     = $this->input->post('tag_name');
                $data['tag_code']     = $this->input->post('tag_code');
                $data['status']       = $this->input->post('status');
                $this->db->insert('manage_tags', $data);
            } elseif ($para1 == 'delete') {
                $this->db->where('manage_tags_id', $para2);
                $this->db->delete('manage_tags');
            } elseif ($para1 == 'list') {
                $this->db->order_by('manage_tags_id', 'desc');
                $page_data['all_tags'] = $this->db->get('manage_tags')->result_array();
                $this->load->view('back/admin/tags_list', $page_data);
            } elseif ($para1 == 'add') {
                $this->load->view('back/admin/tags_add');
            }elseif ($para1 == 'edit') {
                 $page_data['all_tags'] = $this->db->get_where('manage_tags', array(
                'manage_tags_id' => $para2))->result_array();
                $this->load->view('back/admin/tags_edit', $page_data);
            } elseif($para1 == 'update') {
                $data['tag_name']     = $this->input->post('tag_name');
                $data['tag_code']     = $this->input->post('tag_code');
                $data['status']       = $this->input->post('status');
                $this->db->where('manage_tags_id', $para2);
                $this->db->update('manage_tags', $data);
            }
            else {
                $page_data['tags'] = $this->db->get('manage_tags')->result_array();
                $page_data['page_name'] = "manage_tags";
                $this->load->view('back/index', $page_data);
            }
    }
            /* end  code manage tags */

       /* start code product field group */

    function product_field_group($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('product_field_group')) {
            redirect(base_url() . 'index.php/admin');
        }

        if ($para1 == "activate_product_fields") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "activate_product_fields");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "activate_product_fields_compare") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "activate_product_fields_compare");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
         if ($para1 == 'do_add') {
            $data['vendor_id']      = $this->input->post('vendor');
            $data['group_name']     = $this->input->post('group_name');
            $data['is_default']     = $this->input->post('group_field');
            $data['category_id']    = json_encode($this->input->post('category'));
            $this->db->insert('product_field_group', $data);
        }
        elseif ($para1 == 'add') {
            $this->db->order_by('category_id', 'asc');
            $page_data['all_category'] = $this->db->get('category')->result_array();
            $this->db->order_by('vendor_id', 'desc');
            $page_data['all_vendor'] = $this->db->get('vendor')->result_array();
            $this->load->view('back/admin/product_field_group_add', $page_data);
        }
        elseif ($para1 == 'edit') {
            $this->db->order_by('category_id', 'desc');
            $page_data['all_category'] = $this->db->get('category')->result_array();
            $this->db->order_by('vendor_id', 'desc');
            $page_data['all_vendor'] = $this->db->get('vendor')->result_array();
            $page_data['all_group_data'] = $this->db->get_where('product_field_group', array(
                'product_field_group_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/product_field_group_edit', $page_data);
        }
        elseif ($para1 == "update") {
            $data['vendor_id']      = $this->input->post('vendor');
            $data['group_name']     = $this->input->post('group_name');
            $data['category_id']    = json_encode($this->input->post('category'));
            $data['is_default']     = $this->input->post('group_field');
            $this->db->where('product_field_group_id', $para2);
            $this->db->update('product_field_group', $data);
        }
        elseif ($para1 == 'list') {
            $this->db->order_by('product_field_group_id', 'desc');
            $page_data['all_groups'] = $this->db->get('product_field_group')->result_array();
            $this->load->view('back/admin/product_field_group_list', $page_data);
        }
        elseif ($para1 == 'delete') {
            $this->db->where('product_field_group_id', $para2);
            $this->db->delete('product_field_group');
        }  else {
            $page_data['page_name'] = "product_field_group";
            $page_data['all_groups'] = $this->db->get('product_field_group')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }


       /* end code product field group */

     /* start code product field  */

    function product_field($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('product_field')) {
            redirect(base_url() . 'index.php/admin');
        }

         if ($para1 == 'do_add') {
            $data['product_field_group_id']      = $this->input->post('group');
            $data['field_name']                  = $this->input->post('field_name');
            $data['field_caption']               = $this->input->post('field_caption');
            $data['field_type']                  = $this->input->post('op_type');
            $data['filed_active']                = $this->input->post('filed_active');
            $data['field_reqired']               = $this->input->post('field_reqired');
            $data['priority']                    = $this->input->post('priority');
            if($this->input->post('op_type') == 'text')
            {    
               $data['text_length']              = $this->input->post('length');
            }
            elseif($this->input->post('op_type') == 'select')
            {
               $data['options_value']   = $this->input->post('options');  
            } 
            elseif($this->input->post('op_type') == 'radio')
            {
                $data['options_value']   = $this->input->post('options');  
            }
            elseif($this->input->post('op_type') == 'checkbox')
            { 
                $data['value_checked']   = $this->input->post('value_checked');
                $data['value_unchecked'] = $this->input->post('value_unchecked');
            }
            $this->db->insert('product_field', $data);
            echo $this->db->last_query();
        }
        elseif ($para1 == 'add') {
            $page_data['all_group'] = $this->db->get('product_field_group')->result_array();
            $this->load->view('back/admin/product_field_add', $page_data);
        }
        elseif ($para1 == 'edit') {
            $page_data['all_group'] = $this->db->get('product_field_group')->result_array();
            $page_data['all_field'] = $this->db->get_where('product_field', array(
                'product_field_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/product_field_edit', $page_data);
        }
        elseif ($para1 == "update") {
            $data['product_field_group_id']      = $this->input->post('group');
            $data['field_name']                  = $this->input->post('field_name');
            $data['field_caption']               = $this->input->post('field_caption');
            $data['filed_active']                = $this->input->post('filed_active');
            $data['field_reqired']               = $this->input->post('field_reqired');
            $data['priority']                    = $this->input->post('priority');
            $data['text_length']                 = $this->input->post('length');
            $data['options_value']               = $this->input->post('options');  
            $data['value_checked']               = $this->input->post('value_checked');
            $data['value_unchecked']             = $this->input->post('value_unchecked');
          
            $this->db->where('product_field_id', $para2);
            $this->db->update('product_field', $data);
        }
        elseif ($para1 == 'list') {
            $this->db->order_by('product_field_id', 'desc');
            $page_data['all_fields'] = $this->db->get('product_field')->result_array();
            $this->load->view('back/admin/product_field_list', $page_data);
        }
        elseif ($para1 == 'delete') {
            $this->db->where('product_field_id', $para2);
            $this->db->delete('product_field');
        }  else {
            $page_data['page_name'] = "product_field";
            $this->load->view('back/index', $page_data);
        }
    }


       /* end code product field */
       /* start code  Custom Option */

  function custom_options ($para1 = '', $para2 = '')
    {
          if (!$this->crud_model->admin_permission('custom_options')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $option_name     = $this->input->post('option_name');
            $option_type    = $this->input->post('option_type');
            $sort_order   = $this->input->post('sort_order');
            $option = array();
            $f_q  = $this->input->post('option_value_name');
            $f_c  = $this->input->post('color');
            if ($_FILES['op_img']['name']){
              $this->crud_model->file_up("op_img","custom_option",$this->input->post('option_name'),'','','.png');
            }
            $f_img  = $this->input->post('img');
            $f_b  = $this->input->post('option_order');
             foreach ($f_q as $i => $r) {
                $option[] = array(
                    'option_name' => $f_q[$i],
                    'option_image' => $f_img[$i],
                    'color' => $f_c[$i],
                    'sort_order'=>$f_b[$i]
                );
            }
            //$option['image']  = '<img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="'.$this->crud_model->file_view('img',$row['custom_option_id'],'','','thumb','src','multi','one').'"  />';
            $fill = json_encode($option);
            $sql = "INSERT INTO custom_option (option_name,option_type,sort_order,option_value) " .
                "VALUES ('{$option_name}', '{$option_type}','{$sort_order}','{$fill}')";
            $this->db->query($sql);
            $this->crud_model->file_up("img","custom_option", $para2, 'multi');
            recache();
        } else if ($para1 == 'edit') {
            $page_data['all_option'] = $this->db->get_where('custom_option', array(
                'custom_option_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/custom_options_edit', $page_data);
        } elseif ($para1 == "update") {
            if($_FILES['op_img']['name']){
            $this->crud_model->file_up("op_img", "custom_option", $para2, 'multi');
            }
            $option_name     = $this->input->post('option_name');
            $option_type    = $this->input->post('option_type');
            $sort_order   = $this->input->post('sort_order');
            //$img = 'custom_option_'.$this->input->post('option_name').'.png';
            
            $option = array();
            $f_q  = $this->input->post('option_value_name');
            $f_img  = 'custom_option_'.$this->input->post('option_name').'.png';
            $f_c  = $this->input->post('color');
            $f_b  = $this->input->post('option_order');
             foreach ($f_q as $i => $r) {
                $option[] = array(
                    'option_name' => $f_q[$i],
                    'option_image' => $f_img[$i],
                    'color' => $f_c[$i],
                    'sort_order'=>$f_b[$i]
                );
            }
            $fill = json_encode($option);
            $sql = "UPDATE custom_option SET option_name = '{$option_name}',option_type='{$option_type}',sort_order='{$sort_order}',option_value='{$fill}'" .
                   "WHERE custom_option_id = ". $para2;
            $this->db->query($sql);
            echo $this->db->last_query();
            //$this->crud_model->file_up("img","custom_option", $para2,'multi');
        } elseif ($para1 == 'delete') {
            $this->db->where('custom_option_id', $para2);
            $this->db->delete('custom_option');
        } elseif ($para1 == 'list') {
            $this->db->order_by('custom_option_id', 'asc');
            $page_data['all_option'] = $this->db->get('custom_option')->result_array();
            $this->load->view('back/admin/custom_options_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/custom_options_add');
        } else {
            $page_data['page_name']  = "custom_options";
            $page_data['all_option'] = $this->db->get('custom_option')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }
                /* end code  Custom Option */
	/* end code of Dipak Tandel */
    
           /* start code  suppliers */   
    function suppliers ($para1 = '', $para2 = '')
    {
            if (!$this->crud_model->admin_permission('attibuets')) {
                redirect(base_url() . 'index.php/admin');
            }
          if ($para1 == 'do_add') {
            $data['supplier_code'] =    $this->input->post('supplier_code');
            $data['supplier_name'] = $this->input->post('supplier_name');
            $data['is_visible']     = $this->input->post('is_visible');
            $this->db->insert('suppliers', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_suppliers'] = $this->db->get_where('suppliers', array(
                'suppliers_id' => $para2))->result_array();
            $this->load->view('back/admin/suppliers_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['supplier_name']     = $this->input->post('supplier_name');
            $data['is_visible']     = $this->input->post('is_visible');
            $this->db->where('suppliers_id', $para2);
            $this->db->update('suppliers', $data);
        } elseif ($para1 == 'delete') {
            $this->db->where('suppliers_id', $para2);
            $this->db->delete('suppliers');
        } elseif ($para1 == 'list') {
            $page_data['all_suppliers'] = $this->db->get('suppliers')->result_array();
            $this->load->view('back/admin/suppliers_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/suppliers_add', $page_data);
        } else {
            $page_data['page_name']  = "suppliers";
            $page_data['all_suppliers'] = $this->db->get('suppliers')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }      
           /* End code  suppliers */
    
           /* start  code Dignesh Patel */
        /* start code of country list */

    function country($para1 = '', $para2 = '')
    {
        if (!$this->crud_model->admin_permission('country')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'do_add') {
            $data['country_name']   = $this->input->post('country_name');
            $data['iso1']           = $this->input->post('iso1');
            $data['iso2']           = $this->input->post('iso2');
			$data['address_format'] = $this->input->post('address_format');
			$data['status']         = $this->input->post('status');
            $this->db->insert('country', $data);
            recache();
        } else if ($para1 == 'edit') {
            $page_data['country_data'] = $this->db->get_where('country', array(
                'id' => $para2
            ))->result_array();
            $this->load->view('back/admin/country_edit', $page_data);
        } elseif ($para1 == "update") {
            $data['country_name']   = $this->input->post('country_name');
            $data['iso1']           = $this->input->post('iso1');
            $data['iso2']           = $this->input->post('iso2');
			$data['address_format'] = $this->input->post('address_format');
			$data['status']         = $this->input->post('status');
            $this->db->where('id', $para2);
            $this->db->update('country', $data);
            recache();
        } elseif ($para1 == 'delete') {
            $this->db->where('id', $para2);
            $this->db->delete('country');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('id', 'desc');
            $page_data['all_country'] = $this->db->get('country')->result_array();
            $this->load->view('back/admin/country_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/country_add');
        } else {
            $page_data['page_name'] = "country";
            $page_data['all_country'] = $this->db->get('country')->result_array();
            $this->load->view('back/index', $page_data);
        }
    }

    /* end code of country list */


    //------------DEFAULT FORM SETTINGS-----------------
	function default_form_settings($para1 = "") {
        if ($this->session->userdata('admin_login') != 'yes') {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'update') {
            $data['product_condition'] = $this->input->post('product_condition');
            $data['product_inventory_control'] = $this->input->post('product_inventory_control');
            $data['product_taxable'] = $this->input->post('product_taxable');
            $data['product_is_free_ship'] = $this->input->post('product_is_free_ship');
            $data['product_stock'] = $this->input->post('product_stock');
            $total = $this->db->get('default_form_settings')->num_rows();
            if ($total == 0) {
                $this->db->insert('default_form_settings', $data);
            } else {
                $this->db->update('default_form_settings', $data);
            }
            redirect(base_url() . 'index.php/admin/default_form_settings');
        } else {
            $page_data['page_name'] = "default_form_settings";
            $this->load->view('back/index', $page_data);
        }
    }

    //------------End of DEFAULT FORM SETTINGS-----------------
     //------------PRODUCT TAMPLATE SETTINGS-----------------
	function product_tamplate($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('product_tamplate')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "pt_search") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "pt_search");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "pt_search_vendor_products") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "pt_search_vendor_products");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "pt_search_admin_products") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "pt_search_admin_products");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if ($para1 == "pt_search_tamplate_products") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "pt_search_tamplate_products");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }else {
            $page_data['data']   = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "product_tamplate";
            $this->load->view('back/index', $page_data);
        }
    }
        //------------End of PRODUCT TAMPLATE SETTINGS-----------------
    //------------PAYPAL ADDRESS VARIFY-----------------
    function paypal_address_varify($para1 = "", $para2 = "") {
        if (!$this->crud_model->admin_permission('paypal_address_varify')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "paypal_test_mode") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "paypal_test_mode");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "street_match") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "street_match");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "zip_match") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "zip_match");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == "vendor_signup_address_verify") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "vendor_signup_address_verify");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
        if ($para1 == 'set') {
            $this->db->where('type', "username");
            $this->db->update('system_settings', array('value' => $this->input->post('username')));
            recache();
            $this->db->where('type', "password");
            $this->db->update('system_settings', array('value' => sha1(hash('sha512', $this->input->post('password')))));
            recache();
            $this->db->where('type', "signature");
            $this->db->update('system_settings', array('value' => $this->input->post('signature')));
            recache();
            $this->db->where('type', "url_to_gateway");
            $this->db->update('system_settings', array('value' => $this->input->post('url_to_gateway')));
            recache();
        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "paypal_address_varify";
            $this->load->view('back/index', $page_data);
        }
    }

    //------------End of PAYPAL ADDRESS VARIFY-----------------
    //------------Product Features Start-----------------
	function product_features($para1 = "", $para2 = ""){
		if (!$this->crud_model->admin_permission('product_features')) {
            redirect(base_url() . 'index.php/admin');
        }
		if ($para1 == "product_condition") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_condition");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if ($para1 == "product_returns_and_refunds") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_returns_and_refunds");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if ($para1 == "product_tags_option") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_tags_option");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if ($para1 == "product_expire_date_option") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_expire_date_option");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if ($para1 == "product_available_date_option") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_available_date_option");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if ($para1 == "order_attachments_active") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "order_attachments_active");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
            recache();
        }
		if($para1=='set'){
			$this->db->where('type', "order_attachments_file_types");
            $this->db->update('system_settings', array('value' => $this->input->post('order_attachments_file_types')));
            $this->db->where('type', "order_attachments_max_file_size");
            $this->db->update('system_settings', array('value' => $this->input->post('order_attachments_max_file_size')));
            recache();
		}else {
			$page_data['data']      = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "product_features";
            $this->load->view('back/index', $page_data);
        }
    }
        //------------Product Features End-----------------
      //-------------------Start ORDER CART SETTINGS---------------------------
	function order_cart_settings($para1 = "", $para2 = ""){
		if (!$this->crud_model->admin_permission('order_cart_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
		if($para1=="visitor_see_price"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "visitor_see_price");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="visitor_may_add_item"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "visitor_may_add_item");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="only_customer_group_members_can_add_items"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "only_customer_group_members_can_add_items");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="showcase_mode"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "showcase_mode");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="use_captcha_verfification_when_registering"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "use_captcha_verfification_when_registering");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="display_password_strength_meter"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "display_password_strength_meter");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="display_terms_and_conditions_checkbox"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "display_terms_and_conditions_checkbox");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="always_display_terms_and_conditions_checkbox"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "always_display_terms_and_conditions_checkbox");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="activate_shipping_for_each_product_separately"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "activate_shipping_for_each_product_separately");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="activate_product_reviews_for_all_products"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "activate_product_reviews_for_all_products");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="enable_vendor_ratings"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "enable_vendor_ratings");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="product_subscribe_cancel_option"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_subscribe_cancel_option");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="product_subscribe_change_period_option"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "product_subscribe_change_period_option");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="show_additional_profile_navigation"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "show_additional_profile_navigation");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="displaythe_EMPTY_CART_button_in_your_cart"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "displaythe_EMPTY_CART_button_in_your_cart");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="display_tabs_in_product_details_page"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "display_tabs_in_product_details_page");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="allows_you_to_share_to_facebook_twitter"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "allows_you_to_share_to_facebook_twitter");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="email_updates_available"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "email_updates_available");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="email_newsletters_available"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "email_newsletters_available");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="email_confirmations_necessary"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "email_confirmations_necessary");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="wish_list_enabled"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "wish_list_enabled");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="rma_enabled"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "rma_enabled");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="allows_admin_to_enable_RMA_for_all_products"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "allows_admin_to_enable_RMA_for_all_products");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=="deposit_enabled"){
			$val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            echo $val;
            $this->db->where('type', "deposit_enabled");
            $this->db->update('order_cart_settings', array(
                'value' => $val
            ));
            recache();
		}
		if($para1=='set'){
			$this->db->where('type', "allow_create_account");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('allow_create_account')));
            $this->db->where('type', "visitor_mode");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('visitor_mode')));
			$this->db->where('type', "checkout_process_mode");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('checkout_process_mode')));
            $this->db->where('type', "checkout_payment_mode");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('checkout_payment_mode')));
			$this->db->where('type', "min_order_number");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('min_order_number')));
            $this->db->where('type', "max_unique_items_in_the_cart");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('max_unique_items_in_the_cart')));
			$this->db->where('type', "inventory_stock_update_at");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('inventory_stock_update_at')));
            $this->db->where('type', "min_order_subtotal_level_0");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('min_order_subtotal_level_0')));
			$this->db->where('type', "min_order_subtotal_level_1");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('min_order_subtotal_level_1')));
			$this->db->where('type', "min_order_subtotal_level_2");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('min_order_subtotal_level_2')));
			$this->db->where('type', "min_order_subtotal_level_3");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('min_order_subtotal_level_3')));
			$this->db->where('type', "after_login_go_to");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('after_login_go_to')));
			$this->db->where('type', "after_signup_go_to");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('after_signup_go_to')));
			$this->db->where('type', "after_product_added_go_to");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('after_product_added_go_to')));
			$this->db->where('type', "continue_shopping_to");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('continue_shopping_to')));
			$this->db->where('type', "after_removing_go_to");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('after_removing_go_to')));
			$this->db->where('type', "cart_button_sequence");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('cart_button_sequence')));
			$this->db->where('type', "attribute_option_style_in_cart");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('attribute_option_style_in_cart')));
			$this->db->where('type', "cart_style_when_cart_is_empty");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('cart_style_when_cart_is_empty')));
			$this->db->where('type', "deposit_percentage");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('deposit_percentage')));
			$this->db->where('type', "donation_option_at_invoice_page");
            $this->db->update('order_cart_settings', array('value' => $this->input->post('donation_option_at_invoice_page')));
            recache();
		}else {
			$page_data['data']      = $this->db->get('order_cart_settings')->result_array();
            $page_data['page_name'] = "order_cart_settings";
            $this->load->view('back/index', $page_data);
        }
	}
         //-------------------End ORDER CART SETTINGS---------------------------

        //-------------------Start Security Settings---------------------------
        function security_settings($para1 = "", $para2 = '') {
        if (!$this->crud_model->admin_permission('security_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "security_account_blocking") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "security_account_blocking");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "security_mode ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('security_mode')
            ));
            $this->db->where('type', "security_cookies ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('security_cookies')
            ));
            $this->db->where('type', "security_user_timeout ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('security_user_timeout')
            ));
            $this->db->where('type', "security_account_blocking_attempts ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('security_account_blocking_attempts')
            ));
            $this->db->where('type', "security_account_blocking_hours ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('security_account_blocking_hours')
            ));
            $this->db->where('type', "display_clean_payment_page ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('display_clean_payment_page')
            ));
            $this->db->where('type', "admin_time_out ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('admin_time_out')
            ));
            $this->db->where('type', "user_ip ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('user_ip')
            ));
            $this->db->where('type', "user_email_verification ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('user_email_verification')
            ));
        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "security_settings";
            $this->load->view('back/index', $page_data);
        }
    }
            //-------------------End Security Settings--------------------------
     /* Manage Best Sellers Settings */
    function bestsellers_settings($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('bestsellers_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
         if ($para1 == "seller_available") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "seller_available");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "customer_avai") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "customer_avai");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == 'set') {

            $this->db->where('type', "seller_count");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seller_count')
            ));
            $this->db->where('type', "seller_period");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seller_period')
            ));
            $this->db->where('type', "seller_view");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seller_view')
            ));
            $this->db->where('type', "customer_count");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('customer_count')
            ));
            $this->db->where('type', "customer_view");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('customer_view')
            ));
            recache();
        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "bestsellers_settings";
            $this->load->view('back/index', $page_data);
        }
    }
      /* End  Manage Best Sellers Settings */

          //------------PROXY SETTINGS-----------------
    function proxy_settings($para1 = "", $para2 = "") {
        if (!$this->crud_model->admin_permission('proxy_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'update') {
            $this->db->where('type', "proxy_available");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('proxy_available')
            ));
            $this->db->where('type', "proxy_type");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('proxy_type')
            ));
            $this->db->where('type', "proxy_address");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('proxy_address')
            ));
            $this->db->where('type', "proxy_port");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('proxy_port')
            ));
            $this->db->where('type', "proxy_authorization");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('proxy_authorization')
            ));
            $this->db->where('type', "proxy_username");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('proxy_username')
            ));
            $this->db->where('type', "proxy_password");
            $this->db->update('system_settings', array(
                'value' => sha1(hash('sha512', $this->input->post('proxy_password')))));
            redirect();
        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "proxy_settings";
            $this->load->view('back/index', $page_data);
        }
    }

//------------END OF PROXY SETTINGS-----------------


     //------------start OF poision message-----------------

    function poision_message($para1 = "", $para2 = '') {

        if (!$this->crud_model->admin_permission('poision_message')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "gift_card_active") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "gift_card_active");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "message_length ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('message_length')
            ));
        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "poision_message";
            $this->load->view('back/index', $page_data);
        }
    }

    //------------END OF poision message-----------------
//Start Manage Printable Invoice Settings
      function printable_invoice_settings($para1 = '', $para2 = '') {
        if (!$this->crud_model->admin_permission('printable_invoice_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "invoice_company_name") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_company_name");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_company_address") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_company_address");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_company_phone") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_company_phone");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_company_fax") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_company_fax");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_company_email") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_company_email");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_order_date") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_order_date");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_mpn") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_mpn");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_date") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_date");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "invoice_gtin") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "invoice_gtin");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "print_invoice_height ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('print_invoice_height')
            ));
            $this->db->where('type', "invoice_company_logo_alignment ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('invoice_company_logo_alignment')
            ));
        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "printable_invoice_settings";
            $this->load->view('back/index', $page_data);
        }
    }

    //End  Manage Printable Invoice Settings
        //------------START VERATAD SETTINGS-----------------
	function veratad_settings($para1 = "", $para2 = "") {
        if (!$this->crud_model->admin_permission('veratad_settings')) {
            redirect(base_url() . 'index.php/admin');
        }

        if ($para1 == 'update') {
            $data['activate_veratad'] = $this->input->post('activate_veratad');
            $data['veratad_username'] = $this->input->post('veratad_username');
            $data['veratad_password'] = sha1(hash('sha512', $this->input->post('password')));
            $total = $this->db->get('veratad_settings')->num_rows();
            if ($total == 0) {
                $this->db->insert('veratad_settings', $data);
            } else {
                $this->db->update('veratad_settings', $data);
            }
            redirect(base_url() . 'index.php/admin/veratad_settings');
        } else {
            $page_data['data'] = $this->db->get('veratad_settings')->result_array();
            $page_data['page_name'] = "veratad_settings";
            $this->load->view('back/index', $page_data);
        }
    }

    //------------END VERATAD SETTINGS-----------------

    /* Manage Digital Products Settings */
	function digital_products($para1 = '', $para2 = '')
        {
        if (!$this->crud_model->admin_permission('digital_products')) {
            redirect(base_url() . 'index.php/admin');
        }
         if ($para1 == "products_active") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "products_active");
            $this->db->update('system_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "download_limit ");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('download_limit')
            ));
            $this->db->where('type', "time_limit ");
            $this->db->update('system_settings', array(
            'value' => $this->input->post('time_limit')
            ));
           redirect(base_url() . 'index.php/admin/digital_products');
        }
         else {
            $page_data['page_name'] = "digital_products";
            $this->load->view('back/index', $page_data);
        }
    }
       /*END OF  Manage Digital Products Settings */
          /* Manage Company Information */
    function company_information($para1 = "", $para2 = "")
    {
        if (!$this->crud_model->admin_permission('company_information')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'set') {
            $this->db->where('type', "register_no");
            $this->db->update('company_information', array(
                'value' => $this->input->post('register_no')
            ));
            $this->db->where('type', "company_name");
            $this->db->update('company_information', array(
                'value' => $this->input->post('company_name')
            ));
            $this->db->where('type', "address1");
            $this->db->update('company_information', array(
                'value' => $this->input->post('address1')
            ));
            $this->db->where('type', "address2");
            $this->db->update('company_information', array(
                'value' => $this->input->post('address2')
            ));
            $this->db->where('type', "city");
            $this->db->update('company_information', array(
                'value' => $this->input->post('city')
            ));
            $this->db->where('type', "state");
            $this->db->update('company_information', array(
                'value' => $this->input->post('state')
            ));
            $this->db->where('type', "zip");
            $this->db->update('company_information', array(
                'value' => $this->input->post('zip')
            ));
            $this->db->where('type', "country");
            $this->db->update('company_information', array(
                'value' => $this->input->post('country')
            ));
            $this->db->where('type', "phone");
            $this->db->update('company_information', array(
                'value' => $this->input->post('phone')
            ));
            $this->db->where('type', "fax");
            $this->db->update('company_information', array(
                'value' => $this->input->post('fax')
            ));
            $this->db->where('type', "website");
            $this->db->update('company_information', array(
                'value' => $this->input->post('website')
            ));
			$this->db->where('type', "email");
            $this->db->update('company_information', array(
                'value' => $this->input->post('email')
            ));
			$this->db->where('type', "slogan");
            $this->db->update('company_information', array(
                'value' => $this->input->post('slogan')
            ));
            recache();
        } else {
            $page_data['data'] = $this->db->get('company_information')->result_array();
            $page_data['page_name'] = "company_information";
            $this->load->view('back/index', $page_data);
        }
    }
	      /* END OF Manage Company Information */
    	//Manage Wholesales Settings
	function wholesales_settings($para1 = '', $para2 = '')
        {
		if (!$this->crud_model->admin_permission('wholesales_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
         if ($para1 == "wholesale_case_pack") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "wholesale_case_pack");
            $this->db->update('wholesales_settings', array(
                'value' => $val
            ));
        }
            if ($para1 == "wholesale_inter_pack") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "wholesale_inter_pack");
            $this->db->update('wholesales_settings', array(
                'value' => $val
            ));
        }
		if ($para1 == "set") {
            $this->db->where('type', "wholesaler_discounts ");
            $this->db->update('wholesales_settings', array(
                'value' => $this->input->post('wholesaler_discounts')
            ));
			$this->db->where('type', "wholesale_level ");
            $this->db->update('wholesales_settings', array(
                'value' => $this->input->post('wholesale_level')
            ));
			$this->db->where('type', "discount_level ");
            $this->db->update('wholesales_settings', array(
                'value' => $this->input->post('discount_level')
            ));
        }
         else {
            $page_data['data'] = $this->db->get('wholesales_settings')->result_array();
            $page_data['page_name'] = "wholesales_settings";
            $this->load->view('back/index', $page_data);
        }	
	}
        //END OF Manage Wholesales Settings
        
         //START OF Dynamic Selection List
    function dynamic_selection_lists($para1 = '', $para2 = '')
        {
        if (!$this->crud_model->admin_permission('dynamic_selection_lists')) {
            redirect(base_url() . 'index.php/admin');
        }
		if($para1 == 'manage_list'){
			$this->db->where('list_type',$para2);
			$page_data['products'] = $this->db->get('dynamic_selection_lists')->result_array();
            $page_data['page_name'] = "manage_list";
			$page_data['list_type'] = $para2;
			$this->load->view('back/index', $page_data);
		}
        else {
            $page_data['page_name'] = "dynamic_selection_lists";
            $this->load->view('back/index', $page_data);
        }
    }
	function add_dynamic_selection_lists_items($item_id = '', $item_name = '', $list_type = ''){
		$data['item_id'] = $item_id;
		$data['item_name'] = urldecode($item_name);           
		$data['list_type'] = $list_type;
		$total = $this->db->get_where('dynamic_selection_lists', array('item_id' => $item_id))->num_rows();
		if ($total == 0) {
			$this->db->insert('dynamic_selection_lists', $data);
		} else {
			$this->db->where('item_id',$item_id);
			$this->db->update('dynamic_selection_lists', $data);
		}
		$this->output
            ->set_output('Success');
	}
	function edit_dynamic_selection_lists_items($item_id = ''){
		$data = $this->db->get_where('dynamic_selection_lists', array('item_id' => $item_id))->result_array();
		echo json_encode($data);
	}
	function delete_dynamic_selection_lists_items($item_id = ''){
		$this->db->where('item_id', $item_id);
		$this->db->delete('dynamic_selection_lists');
		$this->output
            ->set_output('Success'.$item_id);
	}
	/* end code of dynamic_selection_lists */
       /* start code of localisation settings */
	function localisation_settings($para1 = '', $para2 = '')
	{
        if (!$this->crud_model->admin_permission('localisation_settings')) {
            redirect(base_url() . 'index.php/admin');
        }if ($para1 == 'update'){
			$this->db->where('type', "datetime_format");
            $this->db->update('local_settings', array('value' => $this->input->post('datetime_format')));
            $this->db->where('type', "date_format");
            $this->db->update('local_settings', array('value' => $this->input->post('date_format')));
			$this->db->where('type', "weight_unit");
            $this->db->update('local_settings', array('value' => $this->input->post('weight_unit')));
			$this->db->where('type', "weight_decimal_places");
            $this->db->update('local_settings', array('value' => $this->input->post('weight_decimal_places')));
			$this->db->where('type', "weight_decimal_symbol");
            $this->db->update('local_settings', array('value' => $this->input->post('weight_decimal_symbol')));
			$this->db->where('type', "weight_thousands_separating_symbol");
            $this->db->update('local_settings', array('value' => $this->input->post('weight_thousands_separating_symbol')));
			$this->db->where('type', "length_unit");
            $this->db->update('local_settings', array('value' => $this->input->post('length_unit')));
			$this->db->where('type', "length_decimal_places");
            $this->db->update('local_settings', array('value' => $this->input->post('length_decimal_places')));
			$this->db->where('type', "length_decimal_symbol");
            $this->db->update('local_settings', array('value' => $this->input->post('length_decimal_symbol')));
			$this->db->where('type', "length_thousands_separating_symbol");
            $this->db->update('local_settings', array('value' => $this->input->post('length_thousands_separating_symbol')));
			$this->db->where('type', "currency_decimal_symbol");
            $this->db->update('local_settings', array('value' => $this->input->post('currency_decimal_symbol')));
			$this->db->where('type', "currency_thousands_separating_symbol");
            $this->db->update('local_settings', array('value' => $this->input->post('currency_thousands_separating_symbol')));
            recache();
        } elseif ($para1 == 'currency_delete') {
            $this->db->where('currency_id', $para2);
            $this->db->delete('currency');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('currency_id', 'desc');
            $page_data['all_currencies'] = $this->db->get('currency')->result_array();
            $this->load->view('back/admin/currency_list', $page_data);
        } elseif ($para1 == 'add'){
            $this->load->view('back/admin/currency_add');
        } elseif ($para1 == 'edit'){
			$page_data['currency_data'] = $this->db->get_where('currency', array('currency_id' => $para2))->result_array();
            $this->load->view('back/admin/currency_edit', $page_data);
        } elseif ($para1 == 'ajax_is_default'){
			$data['is_default'] = "0";
			$this->db->update('currency', $data);
			$data['is_default'] = "1";
			$this->db->where('currency_id',$para2);
			$this->db->update('currency', $data);
        } elseif ($para1 == 'currency_add'){
			$data['currency_code'] = $this->input->post('currency_code');
            $data['currency_name'] = $this->input->post('currency_name'); 
			$data['exchange_rate'] = $this->input->post('exchange_rate');
            $data['decimal_point'] = $this->input->post('decimal_point');  
			$data['left_symbol'] = $this->input->post('left_symbol');
            $data['right_symbol'] = $this->input->post('right_symbol');  
			$this->db->insert('currency', $data);
			recache();
        } elseif ($para1 == 'currency_edit'){
			$data['currency_code'] = $this->input->post('currency_code');
            $data['currency_name'] = $this->input->post('currency_name'); 
			$data['exchange_rate'] = $this->input->post('exchange_rate');
            $data['decimal_point'] = $this->input->post('decimal_point');  
			$data['left_symbol'] = $this->input->post('left_symbol');
            $data['right_symbol'] = $this->input->post('right_symbol');  
			$this->db->where('currency_id',$para2);
			$this->db->update('currency', $data);
			recache();
        }else {
			$page_data['all_local_settings'] = $this->db->get('local_settings')->result_array();
            $page_data['page_name'] = "localisation_settings";
            $this->load->view('back/index', $page_data);
        }
    }
       /* End  code of localisation settings */
          
    	//Manage User Interface Settings
	function user_interface_settings($para1 = "", $para2 = '')
        {
            if (!$this->crud_model->admin_permission('user_interface_settings')) {
                redirect(base_url() . 'index.php/admin');
            }
            if ($para1 == "set") {
                $this->db->where('type', "user_interface ");
                $this->db->update('system_settings', array(
                    'value' => $this->input->post('user_interface')
                ));
            } else {
                $page_data['data'] = $this->db->get('system_settings')->result_array();
                $page_data['page_name'] = "user_interface_settings";
                $this->load->view('back/index', $page_data);
            }  
	}
	//END OF  Manage User Interface Settings
        
          //Manage access settings
	function access_settings($para1 = "", $para2 = "") {
        if (!$this->crud_model->admin_permission('access_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "storefront_access_block") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "storefront_access_block");
            $this->db->update('access_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "backend_access_block") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "backend_access_block");
            $this->db->update('access_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "action_block_event");
            $this->db->update('access_settings', array(
                'value' => $this->input->post('action_block_event')
            ));
            $this->db->where('type', "redirect_url");
            $this->db->update('access_settings', array(
                'value' => $this->input->post('redirect_url')
            ));
        }
        if ($para1 == 'do_add') {
            $data['from_ip'] = $this->input->post('from_ip');
            $data['to_ip'] = $this->input->post('to_ip');
            $data['name'] = $this->input->post('name');
            $data['blocked'] = $this->input->post('blocked');
            $this->db->insert('ip_range', $data);
        } else if ($para1 == 'edit') {
            $page_data['all_ip_range'] = $this->db->get_where('ip_range', array(
                        'ip_id' => $para2))->result_array();
            $this->load->view('back/admin/access_settings_edit', $page_data);
        } elseif ($para1 == "update") {
            //echo $this->db->last_query();
            $data['from_ip'] = $this->input->post('from_ip');
            $data['to_ip'] = $this->input->post('to_ip');
            $data['name'] = $this->input->post('name');
            $data['blocked'] = $this->input->post('blocked');
            $this->db->where('ip_id', $para2);
            $this->db->update('ip_range', $data);
            recache();
        } elseif ($para1 == 'delete') {
            $this->db->where('ip_id', $para2);
            $this->db->delete('ip_range');
        } elseif ($para1 == 'list') {
            $this->db->order_by('ip_id', 'asc');
            $page_data['all_ip_range'] = $this->db->get('ip_range')->result_array();
            $this->load->view('back/admin/access_settings_list', $page_data);
        } elseif ($para1 == 'add') {
            $this->load->view('back/admin/access_settings_add');
        } else {
            $page_data['page_name'] = "access_settings";
            $this->load->view('back/index', $page_data);
        }
    }
    //END OF Manage Access settings
    
    //START Vendor Order Cart Settings
    function vendor_order_cart_settings($para1 = "", $para2 = '') {
        if (!$this->crud_model->admin_permission('vendor_order_cart_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "show_home_page") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "show_home_page");
            $this->db->update('multivendor_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "publish_multiple_products") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "publish_multiple_products");
            $this->db->update('multivendor_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "captcha_verification") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "captcha_verification");
            $this->db->update('multivendor_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "password_strength_meter") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "password_strength_meter");
            $this->db->update('multivendor_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "vendor_email_confirmation") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "vendor_email_confirmation");
            $this->db->update('multivendor_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "product_image_required") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "product_image_required");
            $this->db->update('multivendor_settings', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "upload_logo_products_limit ");
            $this->db->update('multivendor_settings', array(
                'value' => $this->input->post('upload_logo_products_limit')
            ));
            $this->db->where('type', "vendor_commision_percent ");
            $this->db->update('multivendor_settings', array(
                'value' => $this->input->post('vendor_commision_percent')
            ));
            $this->db->where('type', "secondary_images ");
            $this->db->update('multivendor_settings', array(
                'value' => $this->input->post('secondary_images')
            ));
            $this->db->where('type', "vendor_commision_amount ");
            $this->db->update('multivendor_settings', array(
                'value' => $this->input->post('vendor_commision_amount')
            ));
            $this->db->where('type', "minimum_vendor_product_price ");
            $this->db->update('multivendor_settings', array(
                'value' => $this->input->post('minimum_vendor_product_price')
            ));
        } else {
            $page_data['data'] = $this->db->get('multivendor_settings')->result_array();
            $page_data['page_name'] = "vendor_order_cart_settings";
            $this->load->view('back/index', $page_data);
        }
    }

    //END Vendor Order Cart Settings 
    
       //START Text Editor Settings	
	function text_editor_settings($para1 = "")
        {
            if (!$this->crud_model->admin_permission('text_editor_settings')) {
                redirect(base_url() . 'index.php/admin');
            }
            if ($para1 == "set") {
                $this->db->where('type', "system_text_editor");
                $this->db->update('system_settings', array(
                    'value' => $this->input->post('system_text_editor')
                ));
            } else {
                $page_data['data'] = $this->db->get('system_settings')->result_array();
                $page_data['page_name'] = "text_editor_settings";
                $this->load->view('back/index', $page_data);
            }
        }
           //END Text Editor Settings

//START  OF VENDOR BADGES AWARDS 
    function vendor_badges_awards($para1 = "", $para2 = ''){
		
	if (!$this->crud_model->admin_permission('vendor_badges_awards')) {
            redirect(base_url() . 'index.php/admin');
        }
                
        if ($para1 == "enable_vendor_badges") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "enable_vendor_badges");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        
        if ($para1 == "enable_vendor_awards") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "enable_vendor_awards");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        
        if ($para1 == 'do_add') {
            $data['badge_name']    = $this->input->post('badge_name');
            $data['is_active']     = $this->input->post('active');
            $this->db->insert('vendor_badges', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "vendor_badges", $id, '', '', '.png');
            recache();
        } else if ($para1 == 'edit') {
            $page_data['all_badges'] = $this->db->get_where('vendor_badges', array(
                'vendor_badges_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/vendor_badges_edit', $page_data);
            recache();
        } elseif ($para1 == "update") {
            $data['badge_name']    = $this->input->post('badge_name');
            $data['is_active']     = $this->input->post('active');;
            $this->db->where('vendor_badges_id', $para2);
            $this->db->update('vendor_badges', $data);
            $this->crud_model->file_up("img", "vendor_badges", $para2, '', '', '.png');
            recache();
        } elseif ($para1 == 'delete') { 
            $this->db->where('vendor_badges_id', $para2);
            $this->db->delete('vendor_badges');
            recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('vendor_badges_id', 'desc');
            $page_data['all_badges'] = $this->db->get('vendor_badges')->result_array();
            $this->load->view('back/admin/vendor_badges_list', $page_data);
        }
        elseif ($para1 == 'add') {
            $this->load->view('back/admin/vendor_badges_add');
            recache();
        } 
        elseif ($para1 == 'list1') {
             $this->db->order_by('vendor_awards_id', 'desc');
            $page_data['all_awards'] = $this->db->get('vendor_awards')->result_array();
            $this->load->view('back/admin/vendor_awards_list',$page_data);
        }
        elseif ($para1 == 'add1') {
            $this->load->view('back/admin/vendor_awards_add',$page_data);
            recache();
        }
        elseif ($para1 == 'do_add1') {
            $data['award_name']    = $this->input->post('award_name');
            $data['is_active']     = $this->input->post('active');
            $data['award_from']     = $this->input->post('award_from');
            $data['award_to']     = $this->input->post('award_to');
            $this->db->insert('vendor_awards', $data);
            $id = $this->db->insert_id();
            $this->crud_model->file_up("img", "vendor_awards", $id, '', '', '.png');
            recache();
        }
        else if ($para1 == 'edit1') {
            $this->db->order_by('vendor_awards_id', 'desc');
            $page_data['all_awards'] = $this->db->get_where('vendor_awards', array(
                'vendor_awards_id' => $para2
            ))->result_array();
            $this->load->view('back/admin/vendor_awards_edit', $page_data);
            recache();
        }
        elseif ($para1 == "update1") {
            $data['award_name']    = $this->input->post('award_name');
            $data['is_active']     = $this->input->post('active');
            $data['award_from']    = $this->input->post('award_from');
            $data['award_to']      = $this->input->post('award_to');
            $this->db->where('vendor_awards_id', $para2);
            $this->db->update('vendor_awards', $data);
            $this->crud_model->file_up("img", "vendor_awards", $para2, '', '', '.png');
            recache();  
        }
        elseif ($para1 == 'delete1') {
            $this->db->where('vendor_awards_id', $para2);
            $this->db->delete('vendor_awards');
            recache();
        }
        else {
            $page_data['data']  = $this->db->get('vendor_admin_setting')->result_array();
            $page_data['page_name'] = "vendor_badges_awards";
            $page_data['all_badges'] = $this->db->get('vendor_badges')->result_array();
            $page_data['all_awards'] = $this->db->get('vendor_awards')->result_array();
            $this->load->view('back/index', $page_data);         
        }
    }
    
    //Manage Vendor Approval Prodect
    function vendor_product_approval($para1 = '', $para2 = '') {
        if (!$this->crud_model->admin_permission('vendor_product_approval')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "approve_product_storefront") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "approve_product_storefront");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "default_state") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "default_state");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "approve_emails_admin") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "approve_emails_admin");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "approve_emails_vendors") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "approve_emails_vendors");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "approve_emails_new_pending_products") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "approve_emails_new_pending_products");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "approve_emails_status_change") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "approve_emails_status_change");
            $this->db->update('product_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "set") {
            $this->db->where('type', "default_state ");
            $this->db->update('product_setting', array(
            'value' => $this->input->post('default_state')
            ));
        } else {
            $page_data['data'] = $this->db->get('product_setting')->result_array();
            $page_data['page_name'] = "vendor_product_approval";
            $this->load->view('back/index', $page_data);
        }
    }

    //End Of Vendor Approval Prodect
    //Start Manage Vendor admin defaults
    function vendor_admin_defaults($para1 = "", $para2 = '') {
        if (!$this->crud_model->admin_permission('vendor_admin_defaults')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "vendor_backend_access") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "vendor_backend_access");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "frontend_access_preset") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "frontend_access_preset");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_products_categories") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_products_categories");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_site_content") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_site_content");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_pay_ship_tax_dis_sal") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_pay_ship_tax_dis_sal");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_shipping") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_shipping");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_site_users") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_site_users");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "marketing") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "marketing");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "edit_custom_vendor_settings") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "edit_custom_vendor_settings");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "add_edit_delete_product") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "add_edit_delete_product");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_vendor_content_pages") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_vendor_content_pages");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_payments") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_payments");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_taxes") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_taxes");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manage_orders") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manage_orders");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "see_statistics") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "see_statistics");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        } else {
            $page_data['data'] = $this->db->get('vendor_admin_setting')->result_array();
            $page_data['page_name'] = "vendor_admin_defaults";
            $this->load->view('back/index', $page_data);
        }
    }
        //End Manage Vendor admin defaults
    //Start Manage Vendor admin customization
    function vendor_admin_customization($para1 = "", $para2 = '') {
        if (!$this->crud_model->admin_permission('vendor_admin_customization')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == "all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "statistics_tab") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "statistics_tab");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "orders_status") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "orders_status");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "sales_status") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "sales_status");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "recent_orders_tab") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "recent_orders_tab");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "last_users_tab") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "last_users_tab");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "users_status") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "users_status");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "quicklink_boxes") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "quicklink_boxes");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "multivendor_all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "multivendor_all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "vendor_statistics") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "vendor_statistics");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "vendor_payments") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "vendor_payments");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "fee_statistics") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "fee_statistics");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "user_all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "user_all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "mail_chimp") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "mail_chimp");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "product_all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "product_all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "search_by_status") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "search_by_status");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "search_by_category") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "search_by_category");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "search_sort_by") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "search_sort_by");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "product_subtype_all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "product_subtype_all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "normal") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "normal");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "subscribe") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "subscribe");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "music") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "music");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "order_all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "order_all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "search_by_order_status") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "search_by_order_status");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "search_by_order_period") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "search_by_order_period");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "manual_order") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "manual_order");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "search_by_payment_status") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "search_by_payment_status");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "statistics_all_elements") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "statistics_all_elements");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "mail_chimp") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "mail_chimp");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "charts") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "charts");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        }
        if ($para1 == "reports") {
            $val = '';
            if ($para2 == 'true') {
                $val = 'ok';
            } else if ($para2 == 'false') {
                $val = 'no';
            }
            $this->db->where('type', "reports");
            $this->db->update('vendor_admin_setting', array(
                'value' => $val
            ));
        } else {
            $page_data['data'] = $this->db->get('vendor_admin_setting')->result_array();
            $page_data['page_name'] = "vendor_admin_customization";
            $this->load->view('back/index', $page_data);
        }
    }
    
//End Vendor admin customization
       //Start Search Engine Settings
    function search_engine_settings($para1 = "", $para2 = "") {
        if (!$this->crud_model->admin_permission('search_engine_settings')) {
            redirect(base_url() . 'index.php/admin');
        }
        if ($para1 == 'update') {
            $this->db->where('type', "seo_page_title");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seo_page_title')
            ));
            $this->db->where('type', "seo_keyword_auto_generation");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seo_keyword')
            ));
            $this->db->where('type', "seo_flat_html");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seo_flat_html')
            ));
            $this->db->where('type', "seo_url_rewrite");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seo_url_rewrite')
            ));
            $this->db->where('type', "seo_meta_keyword");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seo_meta_keyword')
            ));
            $this->db->where('type', "seo_meta_description");
            $this->db->update('system_settings', array(
                'value' => $this->input->post('seo_meta_description')
            ));

        } else {
            $page_data['data'] = $this->db->get('system_settings')->result_array();
            $page_data['page_name'] = "search_engine_settings";
            $this->load->view('back/index', $page_data);
        }
    }
    
       //End Search Engine Settings
    /* end code of Dignesh patel */



}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
