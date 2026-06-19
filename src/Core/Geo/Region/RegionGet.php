<?php
namespace WlSdk\Core\Geo\Region;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about countries and regions.
 */
class RegionGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about countries and regions.
     *
     * Populates country and region dropdowns in address forms. Returns one or all countries together with
     * their subordinate regions (states, provinces, territories). Pass a locale to get only the country
     * relevant to a given market, or set `$is_locale_all` to retrieve the full list for multi-country UIs.
     *
     * @return RegionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegionGetRequest $request): RegionGetResponse
    {
        return new RegionGetResponse($this->client->request('/Core/Geo/Region/Region.json', $request->params(), 'GET'));
    }
}
