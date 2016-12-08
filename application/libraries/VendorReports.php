<?php

use App\VendorReport;

class VendorReports extends MLibraryHelper
{
    /**
     * List all reports.
     */
    protected function listVendorReports()
    {
        $reports = VendorReport::with('user', 'vendor')->orderBy('report_id', 'desc')->get();

        $this->loadPage(compact('reports'), 'vendor_report_list');
    }

    /**
     * View specific report by given id.
     *
     * @param $id integer
     */
    protected function viewReport($id)
    {
        $report = VendorReport::find($id)->with('user', 'vendor')->first();

        $this->loadPage(compact('report'), 'vendor_report_view');
    }

    /**
     * Update specific report by given id.
     *
     * @param $id integer
     */
    protected function updateReport($id)
    {
        $this->validate();

        VendorReport::find($id)->update([
            'status' => $this->ci->input->post('status')
        ]);
    }

    /**
     * Delete specific report by given id.
     *
     * @param $id integer
     */
    protected function deleteReport($id)
    {
        VendorReport::find($id)->delete();
    }

    /**
     * Validation for updating report.
     */
    protected function validate()
    {
        $this->ci->load->library('form_validation');

        $this->ci->form_validation->set_rules('status', 'Status', 'required|string');

        if (!$this->ci->form_validation->run()) {
            $this->callListMethod();
        }
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'vendor_report'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'Report';
    }
}
