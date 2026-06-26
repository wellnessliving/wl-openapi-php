<?php

namespace WlSdk\Wl\Business\Feature;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Feature/FeatureInitTest.json
 */
class FeatureInitTest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Feature/FeatureInitTest.json.
     *
     * @return FeatureInitTestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FeatureInitTestPostRequest $request): FeatureInitTestPostResponse
    {
        return new FeatureInitTestPostResponse($this->client->request('/Wl/Business/Feature/FeatureInitTest.json', $request->params(), 'POST'));
    }
}
