<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

use WlSdk\WlSdkClient;

/**
 * Retrieves the list of SMS chat dialogs for a business.
 */
class DialogList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves the list of SMS chat dialogs for a business.
     *
     * Returns dialogs ordered by the date of the last SMS activity, optionally narrowed by
     *  `s_filter` criteria (location, login type, date range, and dialog status) and paginated
     *  using `dtl_last_activity` as a cursor for loading older results.
     *
     * @return DialogListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DialogListGetRequest $request): DialogListGetResponse
    {
        return new DialogListGetResponse($this->client->request('/Wl/Business/Sms/Chat/Dialog/DialogList.json', $request->params(), 'GET'));
    }
}
