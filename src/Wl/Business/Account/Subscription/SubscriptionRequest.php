<?php

namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/SubscriptionRequest.json
 */
class SubscriptionRequest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Account/Subscription/SubscriptionRequest.json.
     *
     * @return SubscriptionRequestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SubscriptionRequestPostRequest $request): SubscriptionRequestPostResponse
    {
        return new SubscriptionRequestPostResponse($this->client->request('/Wl/Business/Account/Subscription/SubscriptionRequest.json', $request->params(), 'POST'));
    }
}
