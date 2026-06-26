<?php

namespace WlSdk\Wl\Schedule\Page\AssetLayoutView;

use WlSdk\WlSdkClient;

/**
 * Gets data about selected and reserved assets within an asset category which are needed for a service or class to
 *   show on a layout.
 */
class Asset
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data about selected and reserved assets within an asset category which are needed for a service or class to
  show on a layout.
     *
     * @return AssetGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AssetGetRequest $request): AssetGetResponse
    {
        return new AssetGetResponse($this->client->request('/Wl/Schedule/Page/AssetLayoutView/Asset.json', $request->params(), 'GET'));
    }
}
