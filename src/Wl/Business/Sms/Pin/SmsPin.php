<?php

namespace WlSdk\Wl\Business\Sms\Pin;

use WlSdk\WlSdkClient;

/**
 * Marks the last messages in the dialog in the given business with a given user as pinned.
 */
class SmsPin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Marks the last messages in the dialog in the given business with a given user as pinned.
     *
     * @return SmsPinPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsPinPostRequest $request): SmsPinPostResponse
    {
        return new SmsPinPostResponse($this->client->request('/Wl/Business/Sms/Pin/SmsPin.json', $request->params(), 'POST'));
    }

    /**
     * Marks all messages in the dialog in the given business with a given user as unpinned.
     *
     * @return SmsPinDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SmsPinDeleteRequest $request): SmsPinDeleteResponse
    {
        return new SmsPinDeleteResponse($this->client->request('/Wl/Business/Sms/Pin/SmsPin.json', $request->params(), 'DELETE'));
    }
}
