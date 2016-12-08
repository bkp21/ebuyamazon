<?php

use App\EmailSetting;

class EmailSettings
{
    /**
     * CI_Controller instance.
     *
     * @var CI_Controller
     */
    protected $ci;

    /**
     * Create a new EmailSettings instance.
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
        list($driver, $action) = $this->getSegments();

        if ($action) {
            $method = "{$action}EmailSettings";

            $this->$method($driver);
        } else {
            $this->viewSettingsPage();
        }
    }

    /**
     * View email settings form.
     */
    protected function viewSettingsPage()
    {
        $page_name = 'email_settings';

        $EmailSetting = array_map(function ($value) {
            return json_decode($value['settings'], true);
        }, EmailSetting::all('settings')->toArray());

        $settings = array_combine(['smtp', 'mailchimp'], $EmailSetting);

        $this->ci->load->view('back/index', compact('page_name', 'settings'));
    }
    /**
     * Update specific email settings by given driver.
     *
     * @param $driver string
     * @return string
     */
    protected function updateEmailSettings($driver)
    {
        $method = "get{$driver}Settings";

        $settings = $this->$method();

        App\EmailSetting::whereDriver($driver)->first()->update(['settings' => json_encode($settings)]);

        return 'saved';
    }

    /**
     * Get settings array for smtp driver.
     *
     * @return array
     */
    protected function getSmtpSettings()
    {
        return [
            'smtp_host' => $this->ci->input->post('smtp_host'),
            'smtp_port' => $this->ci->input->post('smtp_port'),
            'smtp_username' => $this->ci->input->post('smtp_username'),
            'smtp_password' => $this->ci->input->post('smtp_password')
        ];
    }

    /**
     * Get settings array for mailchimp driver.
     *
     * @return array
     */
    protected function getMailchimpSettings()
    {
        return [
            'mailchimp_api_key' => $this->ci->input->post('mailchimp_api_key')
        ];
    }

    /**
     * Get driver and action from url segments.
     *
     * @return array
     */
    protected function getSegments()
    {
        $driver = $this->ci->uri->segment(3);
        $action = $this->ci->uri->segment(4);

        return [$driver, $action];
    }
}
