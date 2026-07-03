<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about assets in the current asset category.
 */
class AssetList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about assets in the current asset category.
     *
     * Returns the list of bookable assets at the given location, optionally filtered by category and book now tab.
     *  When a date and time are provided, only assets available at that time are included and busy asset slots
     *  are returned in {@link \WlSdk\Wl\Appointment\Book\Asset\AssetListGetResponse::$a_asset_busy}. Supports both
     * frontend and backend modes.
     *
     * @return AssetListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AssetListGetRequest $request): AssetListGetResponse
    {
        return new AssetListGetResponse($this->client->request('/Wl/Appointment/Book/Asset/AssetList.json', $request->params(), 'GET'));
    }
}
