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
     * Validates the business key, then checks whether Fitbuilder is currently enabled as a free
     * subscription plan for the business.
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
     * Upgrades the business Fitbuilder subscription plan.
     *
     * Validates the business key and checks that the current user has backend access and the privilege to
     * manage the Fitbuilder subscription, then upgrades the subscription plan within a database transaction.
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
