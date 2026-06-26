<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Sms/Chat/Dialog/DialogList.json
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
     * Calls GET /Wl/Business/Sms/Chat/Dialog/DialogList.json.
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
