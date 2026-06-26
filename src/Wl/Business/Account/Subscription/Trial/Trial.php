<?php

namespace WlSdk\Wl\Business\Account\Subscription\Trial;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/Trial/Trial.json
 */
class Trial
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Business/Account/Subscription/Trial/Trial.json.
     *
     * @return TrialPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TrialPutRequest $request): TrialPutResponse
    {
        return new TrialPutResponse($this->client->request('/Wl/Business/Account/Subscription/Trial/Trial.json', $request->params(), 'PUT'));
    }

    /**
     * Removes trial period for specific business and subscription.
     *
     * @return TrialDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(TrialDeleteRequest $request): TrialDeleteResponse
    {
        return new TrialDeleteResponse($this->client->request('/Wl/Business/Account/Subscription/Trial/Trial.json', $request->params(), 'DELETE'));
    }
}
