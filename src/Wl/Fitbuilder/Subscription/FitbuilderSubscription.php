<?php

namespace WlSdk\Wl\Fitbuilder\Subscription;

use WlSdk\WlSdkClient;

/**
 * Gets information does Fitbuilder subscription plan is free or not.
 */
class FitbuilderSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information does Fitbuilder subscription plan is free or not.
     *
     * @return FitbuilderSubscriptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FitbuilderSubscriptionGetRequest $request): FitbuilderSubscriptionGetResponse
    {
        return new FitbuilderSubscriptionGetResponse($this->client->request('/Wl/Fitbuilder/Subscription/FitbuilderSubscription.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Fitbuilder/Subscription/FitbuilderSubscription.json.
     *
     * @return FitbuilderSubscriptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FitbuilderSubscriptionPostRequest $request): FitbuilderSubscriptionPostResponse
    {
        return new FitbuilderSubscriptionPostResponse($this->client->request('/Wl/Fitbuilder/Subscription/FitbuilderSubscription.json', $request->params(), 'POST'));
    }
}
