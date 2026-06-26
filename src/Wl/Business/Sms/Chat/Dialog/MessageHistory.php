<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Sms/Chat/Dialog/MessageHistory.json
 */
class MessageHistory
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Sms/Chat/Dialog/MessageHistory.json.
     *
     * @return MessageHistoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MessageHistoryGetRequest $request): MessageHistoryGetResponse
    {
        return new MessageHistoryGetResponse($this->client->request('/Wl/Business/Sms/Chat/Dialog/MessageHistory.json', $request->params(), 'GET'));
    }
}
