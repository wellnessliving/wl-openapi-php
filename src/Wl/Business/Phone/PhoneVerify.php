<?php

namespace WlSdk\Wl\Business\Phone;

use WlSdk\WlSdkClient;

/**
 * Verifies that phone number is not registered in system yet.
 */
class PhoneVerify
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Verifies that phone number is not registered in system yet.
     *
     * @return PhoneVerifyGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneVerifyGetRequest $request): PhoneVerifyGetResponse
    {
        return new PhoneVerifyGetResponse($this->client->request('/Wl/Business/Phone/PhoneVerify.json', $request->params(), 'GET'));
    }
}
