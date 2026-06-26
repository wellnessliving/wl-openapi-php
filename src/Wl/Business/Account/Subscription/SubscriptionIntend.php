<?php

namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/SubscriptionIntend.json
 */
class SubscriptionIntend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Account/Subscription/SubscriptionIntend.json.
     *
     * @return SubscriptionIntendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SubscriptionIntendPostRequest $request): SubscriptionIntendPostResponse
    {
        return new SubscriptionIntendPostResponse($this->client->request('/Wl/Business/Account/Subscription/SubscriptionIntend.json', $request->params(), 'POST'));
    }
}
