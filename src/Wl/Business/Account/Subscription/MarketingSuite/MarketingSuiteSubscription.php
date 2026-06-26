<?php

namespace WlSdk\Wl\Business\Account\Subscription\MarketingSuite;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json
 */
class MarketingSuiteSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json.
     *
     * @return MarketingSuiteSubscriptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MarketingSuiteSubscriptionGetRequest $request): MarketingSuiteSubscriptionGetResponse
    {
        return new MarketingSuiteSubscriptionGetResponse($this->client->request('/Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json.
     *
     * @return MarketingSuiteSubscriptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MarketingSuiteSubscriptionPostRequest $request): MarketingSuiteSubscriptionPostResponse
    {
        return new MarketingSuiteSubscriptionPostResponse($this->client->request('/Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json.
     *
     * @return MarketingSuiteSubscriptionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MarketingSuiteSubscriptionDeleteRequest $request): MarketingSuiteSubscriptionDeleteResponse
    {
        return new MarketingSuiteSubscriptionDeleteResponse($this->client->request('/Wl/Business/Account/Subscription/MarketingSuite/MarketingSuiteSubscription.json', $request->params(), 'DELETE'));
    }
}
