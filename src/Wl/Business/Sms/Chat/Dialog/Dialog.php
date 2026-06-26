<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about sms chat with give user in the given business.
 */
class Dialog
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about sms chat with give user in the given business.
     *
     * @return DialogGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DialogGetRequest $request): DialogGetResponse
    {
        return new DialogGetResponse($this->client->request('/Wl/Business/Sms/Chat/Dialog/Dialog.json', $request->params(), 'GET'));
    }

    /**
     * Retrieves information about sms chat with give user in the given business.
     *
     * @return DialogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DialogPostRequest $request): DialogPostResponse
    {
        return new DialogPostResponse($this->client->request('/Wl/Business/Sms/Chat/Dialog/Dialog.json', $request->params(), 'POST'));
    }
}
