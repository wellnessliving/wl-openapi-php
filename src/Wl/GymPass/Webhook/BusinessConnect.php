<?php

namespace WlSdk\Wl\GymPass\Webhook;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/GymPass/Webhook/BusinessConnect.json
 */
class BusinessConnect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/GymPass/Webhook/BusinessConnect.json.
     *
     * @return BusinessConnectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessConnectPostRequest $request): BusinessConnectPostResponse
    {
        return new BusinessConnectPostResponse($this->client->request('/Wl/GymPass/Webhook/BusinessConnect.json', $request->params(), 'POST'));
    }
}
