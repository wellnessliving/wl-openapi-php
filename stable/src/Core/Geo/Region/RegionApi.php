<?php
namespace WlSdk\Core\Geo\Region;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about countries and regions.
 */
class RegionApi
{
    /**
     * The locale ID to find regions for. One of the [LocaleSid](#/components/schemas/Core.Locale.LocaleSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * Determines whether to get regions for all locales.
     * 
     * If `true`, this will get regions for all locales. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_locale_all = null;

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
     * @return RegionApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): RegionApiGetResponse
    {
        return new RegionApiGetResponse($this->client->request('/Core/Geo/Region/Region.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            'is_locale_all' => $this->is_locale_all,
            ],
            static fn($v) => $v !== null
        );
    }
}
