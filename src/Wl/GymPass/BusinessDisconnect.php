<?php

namespace WlSdk\Wl\GymPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/GymPass/BusinessDisconnect.json
 */
class BusinessDisconnect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/GymPass/BusinessDisconnect.json.
     *
     * @return BusinessDisconnectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessDisconnectPostRequest $request): BusinessDisconnectPostResponse
    {
        return new BusinessDisconnectPostResponse($this->client->request('/Wl/GymPass/BusinessDisconnect.json', $request->params(), 'POST'));
    }
}
