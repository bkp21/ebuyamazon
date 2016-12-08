<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use App\Sale;
use App\Vendor;
use App\Product;

abstract class MLibraryHelper
{
    /**
     * CI_Controller instance.
     *
     * @var CI_Controller
     */
    protected $ci;

    /**
     * Current request action.
     *
     * @var $action string
     */
    protected $action;

    /**
     * Current page name
     *
     * @var $pageName string
     */
    protected $pageUrl;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->ci = $ci = &get_instance();
    }

    /**
     * Handle requests.
     */
    public function handle()
    {
        list($action, $id) = $this->getSegments();

        if ($action) {
            $action == 'list' ? $this->callListMethod() : $this->callMethod($action, $id);
        } else {
            $this->loadPage();
        }
    }

    /**
     * Call method by given action.
     *
     * @param $action string
     * @param $id integer
     */
    protected function callMethod($action, $id)
    {
        if (method_exists($this, camel_case($action))) {
            $method = camel_case($action);
        } else {
            $method = camel_case($action) . $this->getMethodSuffix();
        }

        $this->$method($id);
    }

    /**
     * Call appropriate list method.
     */
    protected function callListMethod()
    {
        $method = "list" . camel_case($this->pageUrl);

        $this->$method();
    }

    /**
     * Get methods, id and action from url segment.
     *
     * @return array
     */
    protected function getSegments()
    {
        $this->pageUrl = $this->ci->uri->segment(2);
        $this->action = $action = $this->ci->uri->segment(3);
        $id = $this->ci->uri->segment(4);

        return [$action, $id];
    }

    /**
     * Load page by given name.
     *
     * @param $page_data array
     * @param string $view
     */
    protected function loadPage($page_data = [], $view = '')
    {
        $page = $view ? "back/admin/{$view}" : 'back/index';

        $this->ci->load->view($page, ['page_url' => $this->pageUrl] + $page_data + $this->getPageData());
    }

    /**
     * View specific vendor info.
     *
     * @param $id integer
     */
    protected function viewVendor($id)
    {
        $vendor_data[] = Vendor::find($id);

        $this->loadPage(compact('vendor_data'), 'vendor_view');
    }

    /**
     * View specific product info.
     *
     * @param $id integer
     */
    protected function viewProduct($id)
    {
        $product_data[] = Product::find($id);

        $this->loadPage(compact('product_data'), 'product_view');
    }

    /**
     * View specific sale info
     *
     * @param $id integer
     */
    protected function viewSale($id)
    {
        $sales = Sale::find($id)->fill(['viewed' => 'ok']);

        $sale[] = $sales->update() ? $sales : null;

        $this->loadPage(compact('sale'), 'sales_view');
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    abstract protected function getPageData();

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    abstract protected function getMethodSuffix();
}
