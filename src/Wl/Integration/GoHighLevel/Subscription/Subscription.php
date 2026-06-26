<?php

namespace WlSdk\Wl\Integration\GoHighLevel\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Integration/GoHighLevel/Subscription/Subscription.json
 */
class Subscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Integration/GoHighLevel/Subscription/Subscription.json.
     *
     * @return SubscriptionPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SubscriptionPutRequest $request): SubscriptionPutResponse
    {
        return new SubscriptionPutResponse($this->client->request('/Wl/Integration/GoHighLevel/Subscription/Subscription.json', $request->params(), 'PUT'));
    }
}
