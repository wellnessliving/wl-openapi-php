<?php

namespace WlSdk\Wl\Business\Sms\Chat\MessageType;

use WlSdk\WlSdkClient;

/**
 * Updates the state of "Message Type" filter in Message Center page.
 */
class MessageTypeOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the state of "Message Type" filter in Message Center page.
     *
     * @return MessageTypeOptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MessageTypeOptionPostRequest $request): MessageTypeOptionPostResponse
    {
        return new MessageTypeOptionPostResponse($this->client->request('/Wl/Business/Sms/Chat/MessageType/MessageTypeOption.json', $request->params(), 'POST'));
    }
}
