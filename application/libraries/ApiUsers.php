<?php

use App\ApiUser;
use App\GeneralSettings;

class ApiUsers extends MLibraryHelper
{
    /**
     * List all api users.
     */
    protected function listApiUsers()
    {
        $api_users = ApiUser::with('vendor')->orderBy('id', 'desc')->get();

        $this->loadPage(compact('api_users'), 'api_users_list');
    }

    /**
     * View specific vendor by given id.
     *
     * @param $id integer
     */
    protected function viewApiUser($id)
    {
        $this->viewVendor($id);
    }

    /**
     * View approval modal.
     *
     * @param $vendor_id integer
     */
    protected function approval($vendor_id)
    {
        $status = ApiUser::whereVendorId($vendor_id)->first()['status'];

        $this->loadPage(compact('vendor_id', 'status'), 'api_users_approval');
    }

    /**
     * Update specific api user's approval status by given id.
     *
     * @param $id integer
     */
    protected function setApproval($id)
    {
        ApiUser::whereVendorId($id)->update(['status' => $this->ci->input->post('approval') ?: 0]);

        $this->notifyVendorAboutStatus($id);
    }

    /**
     * Delete specific api user by given id.
     *
     * @param $id integer
     */
    protected function deleteApiUser($id)
    {
        ApiUser::whereVendorId($id)->first()->delete();
    }

    /**
     * Mail vendor when api user status is changed.
     *
     * @param $id integer
     */
    protected function notifyVendorAboutStatus($id)
    {
        $api_user = ApiUser::whereVendorId($id)->first();

        $message = "Your account type is : vendor<br>";

        if($api_user['status']){
            $message .= "Your api user account is : Approved<br>";
        } else {
            $message .= "Your api user account is : Postponed<br>";
        }

        $subject = "Api User Status Changed";
        $from = GeneralSettings::whereType('system_email')->first()['value'];
        $to  = $api_user->vendor['email'];

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
            'page_name' => 'api_users'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'ApiUser';
    }
}
