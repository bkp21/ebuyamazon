<?php

class LatestSubscriptions extends MLibraryHelper
{
    protected function listLatestSubscriptions()
    {
        $subscribers = App\Subscriber::latest()->get();

        $this->loadPage(compact('subscribers'), 'latest_subscriptions_list');
    }

    protected function deleteSubscriber($id)
    {
        App\Subscriber::find($id)->delete();
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'latest_subscriptions'
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'Subscriber';
    }
}
