<?php

use App\UserRating;

class TopBuyers extends MLibraryHelper
{
    /**
     * List all top sellers.
     */
    protected function listTopBuyers()
    {
        $avgRating = UserRating::avg('total_point');
        $topBuyers = UserRating::where('total_point', '>=', $avgRating)->with('user')->orderBy('total_point', 'desc')->get();
        
        $this->loadPage(compact('topBuyers'), 'top_buyers_list');
    }

    /**
     * View specific vendor by given id.
     *
     * @param $id integer
     */
    protected function viewTopBuyer($id)
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
            'page_name' => 'top_buyers'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'TopBuyer';
    }
}
