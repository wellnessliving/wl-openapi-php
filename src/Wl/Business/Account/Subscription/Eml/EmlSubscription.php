<?php

namespace WlSdk\Wl\Business\Account\Subscription\Eml;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/Eml/EmlSubscription.json
 */
class EmlSubscription
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Business/Account/Subscription/Eml/EmlSubscription.json.
     *
     * @return EmlSubscriptionPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EmlSubscriptionPutRequest $request): EmlSubscriptionPutResponse
    {
        return new EmlSubscriptionPutResponse($this->client->request('/Wl/Business/Account/Subscription/Eml/EmlSubscription.json', $request->params(), 'PUT'));
    }

    /**
     * Calls DELETE /Wl/Business/Account/Subscription/Eml/EmlSubscription.json.
     *
     * @return EmlSubscriptionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(EmlSubscriptionDeleteRequest $request): EmlSubscriptionDeleteResponse
    {
        return new EmlSubscriptionDeleteResponse($this->client->request('/Wl/Business/Account/Subscription/Eml/EmlSubscription.json', $request->params(), 'DELETE'));
    }
}
