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
     * If the dialog is already pinned for the current actor, does nothing. Otherwise inserts a pin
     *  record into `wl_business_sms_pin` and notifies the dialog channel of the change.
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
     * Removes the pin records for the given business, the dialog partner identified by `uid`, and
     *  the current actor from `wl_business_sms_pin`, then notifies the dialog channel of the change.
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
