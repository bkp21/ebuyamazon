<?php

use App\VendorRating;

class TopSellers extends MLibraryHelper
{
    /**
     * List all top sellers.
     */
    protected function listTopSellers()
    {
        $avgRating = VendorRating::avg('rating');
        $topSellers = VendorRating::where('rating', '>=', $avgRating)->with('vendor')->orderBy('rating', 'desc')->get();

        $this->loadPage(compact('topSellers'), 'top_sellers_list');
    }

    /**
     * View specific vendor by given id.
     *
     * @param $id integer
     */
    protected function viewTopSeller($id)
    {
        $this->viewVendor($id);
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'top_sellers'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'TopSeller';
    }
}
