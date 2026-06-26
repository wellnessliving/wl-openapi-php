<?php

namespace WlSdk\Wl\Business\Skin;

use WlSdk\WlSdkClient;

/**
 * Gets business design (skin) settings.
 */
class BusinessSkin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets business design (skin) settings.
     *
     * @return BusinessSkinGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessSkinGetRequest $request): BusinessSkinGetResponse
    {
        return new BusinessSkinGetResponse($this->client->request('/Wl/Business/Skin/BusinessSkin.json', $request->params(), 'GET'));
    }
}
