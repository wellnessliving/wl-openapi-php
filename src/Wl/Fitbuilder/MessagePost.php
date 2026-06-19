<?php
namespace WlSdk\Wl\Fitbuilder;

use WlSdk\WlSdkClient;

/**
 * Notifies messengers with new information.
 */
class MessagePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Notifies messengers with new information.
     *
     * Accepts a channel key and a data payload, then dispatches a notification to the Fitbuilder messenger channel
     * associated with that key. Requires the `notify` API privilege.
     *
     * @return MessagePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MessagePostRequest $request): MessagePostResponse
    {
        return new MessagePostResponse($this->client->request('/Wl/Fitbuilder/Message.json', $request->params(), 'POST'));
    }
}
