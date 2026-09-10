<?php

namespace WlSdk\Wl\Business\Account\Subscription\Collections;

use WlSdk\WlSdkClient;

/**
 * Gets information does "Collections" subscription plan is active or not.
 */
class CollectionsSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information does "Collections" subscription plan is active or not.
     *
     * Loads the "Collections" subscription for the given business and reports whether it is
     *  currently active, so callers can decide whether the related feature can be used.
     *
     * @return CollectionsSubscriptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CollectionsSubscriptionGetRequest $request): CollectionsSubscriptionGetResponse
    {
        return new CollectionsSubscriptionGetResponse($this->client->request('/Wl/Business/Account/Subscription/Collections/CollectionsSubscription.json', $request->params(), 'GET'));
    }
}
