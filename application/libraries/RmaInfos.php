<?php

use App\RmaInfo;
use App\GeneralSettings;

class RmaInfos extends MLibraryHelper
{
    /**
     * List all rma info.
     */
    protected function listRmaInfo()
    {
        $rma_infos = App\RmaInfo::with('sale', 'product', 'user', 'vendor')->get();

        $this->loadPage(compact('rma_infos'), 'rma_info_list');
    }

    protected function productInfoRmaInfo($id)
    {
        $this->viewProduct($id);
    }

    /**
     * View vendor info by given rma id.
     *
     * @param $id integer
     */
    protected function vendorInfoRmaInfo($id)
    {
        $this->viewVendor($id);
    }

    /**
     * View sale info by given rma id.
     *
     * @param $id integer
     */
    protected function saleInfoRmaInfo($id)
    {
        $this->viewSale($id);
    }

    /**
     * Delete specific rma info by given id.
     *
     * @param $id integer
     * @return boolean
     */
    protected function deleteRmaInfo($id)
    {
        return RmaInfo::find($id)->delete();
    }

    /**
     * View approval modal.
     *
     * @param $rma_id integer
     */
    protected function approvalRmaInfo($rma_id)
    {
        $approval = RmaInfo::find($rma_id)->first()['approval'];

        $this->loadPage(compact('rma_id', 'approval'), 'rma_info_approval');
    }

    /**
     * Update specific rma info's approval status by given id.
     *
     * @param $id integer
     */
    protected function setApprovalRmaInfo($id)
    {
        RmaInfo::find($id)->update(['approval' => $this->ci->input->post('approval') ?: 0]);

        $this->notifyBuyerAndSellerAboutRmaStatus($id);
    }

    /**
     * Email vendor and user when rma info status is changed.
     *
     * @param $id integer
     */
    protected function notifyBuyerAndSellerAboutRmaStatus($id)
    {
        $rma_info = RmaInfo::find($id);

        $message = "Rma id: {$id}<br>
            Product name: {$rma_info->product['title']}<br>
            Vendor name: {$rma_info->vendor['name']}<br><br>";

        if($rma_info['approval']){
            $message .= 'Rma status is: approved';

        } else {
            $message .= 'Rma status is: pending';
        }

        $subject = "Rma info Status Changed";
        $from = GeneralSettings::whereType('system_email')->first()['value'];
        $to_vendor = $rma_info->vendor['email'];
        $to_user = $rma_info->user['email'];

        $this->ci->email_model->do_email($message, $subject, $to_user, $from);
        $this->ci->email_model->do_email($message, $subject, $to_vendor, $from);
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'rma_info'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'RmaInfo';
    }
}
