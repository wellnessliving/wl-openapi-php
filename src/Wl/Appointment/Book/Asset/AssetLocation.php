<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

use WlSdk\WlSdkClient;

/**
 * Gets location of asset.
 */
class AssetLocation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets location of asset.
     *
     * @return AssetLocationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AssetLocationGetRequest $request): AssetLocationGetResponse
    {
        return new AssetLocationGetResponse($this->client->request('/Wl/Appointment/Book/Asset/AssetLocation.json', $request->params(), 'GET'));
    }
}
