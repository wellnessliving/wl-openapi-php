<?php

namespace WlSdk\Wl\Notification\Send;

use WlSdk\WlSdkClient;

/**
 * Checks user list, returns template variables and parameters.
 */
class MessageSend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks user list, returns template variables and parameters.
     *
     * @return MessageSendGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MessageSendGetRequest $request): MessageSendGetResponse
    {
        return new MessageSendGetResponse($this->client->request('/Wl/Notification/Send/MessageSend.json', $request->params(), 'GET'));
    }

    /**
     * Send message to users.
     *
     * @return MessageSendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MessageSendPostRequest $request): MessageSendPostResponse
    {
        return new MessageSendPostResponse($this->client->request('/Wl/Notification/Send/MessageSend.json', $request->params(), 'POST'));
    }
}
