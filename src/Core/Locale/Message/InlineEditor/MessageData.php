<?php

namespace WlSdk\Core\Locale\Message\InlineEditor;

use WlSdk\WlSdkClient;

/**
 * Returns information about translated messages.
 */
class MessageData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about translated messages.
     *
     * @return MessageDataPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MessageDataPostRequest $request): MessageDataPostResponse
    {
        return new MessageDataPostResponse($this->client->request('/Core/Locale/Message/InlineEditor/MessageData.json', $request->params(), 'POST'));
    }
}
