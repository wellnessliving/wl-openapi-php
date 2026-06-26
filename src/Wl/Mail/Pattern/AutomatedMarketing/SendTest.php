<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing;

use WlSdk\WlSdkClient;

/**
 * Sends test email or SMS.
 */
class SendTest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends test email or SMS.
     *
     * @return SendTestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SendTestPostRequest $request): SendTestPostResponse
    {
        return new SendTestPostResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/SendTest.json', $request->params(), 'POST'));
    }
}
