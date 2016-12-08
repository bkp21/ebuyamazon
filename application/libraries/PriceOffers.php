<?php

use App\Product;
use App\PriceOffer;
use App\GeneralSettings;

class PriceOffers extends MLibraryHelper
{
    /**
     * List all price offers.
     */
    protected function listPriceOffers()
    {
        $price_offers = PriceOffer::with('product', 'user')->get();

        $this->loadPage(compact('price_offers'), 'price_offers_list');
    }

    /**
     * Delete specific price offer.
     *
     * @param $id integer
     * @return boolean
     */
    protected function deletePriceOffer($id)
    {
        return PriceOffer::find($id)->delete();
    }

    /**
     * View product info of price offer.
     *
     * @param $id integer
     */
    protected function productInfo($id)
    {
        $this->viewProduct($id);
    }

    /**
     * View approval modal for price offer status.
     *
     * @param $id integer
     */
    protected function approval($id)
    {
        $status = PriceOffer::find($id)['status'];

        $this->loadPage(compact('id', 'status'), 'price_offers_approval');
    }

    /**
     * Update price offer status.
     *
     * @param $id integer
     */
    protected function setApproval($id)
    {
        PriceOffer::find($id)->update(['status' => $this->ci->input->post('approval') ?: 0]);

        if ($this->ci->input->post('approval')) {
            $this->updateSalePrice($id);
        }

        $this->notifyAboutPriceOffersStatus($id);
    }

    /**
     * Update sale price of product.
     *
     * @param $id integer
     */
    protected function updateSalePrice($id)
    {
        $suggested_price = PriceOffer::find($id)->suggested_price;

        PriceOffer::find($id)->product()->update(['sale_price' => $suggested_price]);
    }

    /**
     * Email customer about price offer status.
     *
     * @param $id integer
     */
    protected function notifyAboutPriceOffersStatus($id)
    {
        $price_offer = PriceOffer::find($id);

        $message = "Price offer id: {$id}<br>
            Product name: {$price_offer->product['title']}<br>
            Customer name: {$price_offer->user['username']}<br><br>";

        if($price_offer['status']){
            $message .= 'Price offer status is: Accepted';
        } else {
            $message .= 'Price offer status is: Pending';
        }

        $subject = 'Price offer status is changed';
        $from = GeneralSettings::whereType('system_email')->first()['value'];
        $to  = $price_offer->user['email'];

        $this->ci->email_model->do_email($message, $subject, $to, $from);
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'price_offers'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'PriceOffer';
    }
}
