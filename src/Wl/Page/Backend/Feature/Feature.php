<?php

namespace WlSdk\Wl\Page\Backend\Feature;

use WlSdk\WlSdkClient;

/**
 * Get all features with statuses enabled or disabled.
 */
class Feature
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get all features with statuses enabled or disabled.
     *
     * @return FeatureGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FeatureGetRequest $request): FeatureGetResponse
    {
        return new FeatureGetResponse($this->client->request('/Wl/Page/Backend/Feature/Feature.json', $request->params(), 'GET'));
    }
}
