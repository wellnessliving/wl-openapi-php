<?php

namespace WlSdk\Wl\Business\Sms;

use WlSdk\WlSdkClient;

/**
 * Checks to possible to send SMS to a client.
 */
class SmsSendCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks to possible to send SMS to a client.
     *
     * Runs the same checks as `check()` and `checkCellPhoneOwner()`
     *  for the business and client given in `k_business` and `uid`, throwing an exception when
     *  SMS sending is not allowed or the client does not own the given cell phone.
     *
     * @return SmsSendCheckPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsSendCheckPostRequest $request): SmsSendCheckPostResponse
    {
        return new SmsSendCheckPostResponse($this->client->request('/Wl/Business/Sms/SmsSendCheck.json', $request->params(), 'POST'));
    }
}
