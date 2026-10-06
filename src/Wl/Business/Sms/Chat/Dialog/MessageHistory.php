<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

use WlSdk\WlSdkClient;

/**
 * Retrieves SMS message history with a specific client.
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
     * Retrieves SMS message history with a specific client.
     *
     * Returns up to `i_limit` messages exchanged with the client in the given business, ordered
     *  from most recent to oldest. Pass `k_sms_history_last` to page backward and load older
     *  messages sent before that message.
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
