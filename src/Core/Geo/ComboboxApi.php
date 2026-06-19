<?php
namespace WlSdk\Core\Geo;

use WlSdk\WlSdkClient;

/**
 * Returns a list of cities to show in combobox list.
 */
class ComboboxApi
{
    /**
     * The locale ID used as a filter. The locale is generally a country.
     * 
     * One of the [LocaleSid](#/components/schemas/Core.Locale.LocaleSid) constants.
     * 
     * This will be `0` if all locations are searched.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * The city name (or a fragment of the city name) used for the search.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of cities to show in combobox list.
     *
     * Powers city autocomplete dropdowns in address forms. Returns up to 100 cities whose names start with
     * the given fragment, each labelled as "City, Region, Country". Pass a locale to restrict results to a
     * single country, or omit it to search worldwide.
     *
     * @return ComboboxApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ComboboxApiGetResponse
    {
        return new ComboboxApiGetResponse($this->client->request('/Core/Geo/Combobox.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            's_value' => $this->s_value,
            ],
            static fn($v) => $v !== null
        );
    }
}
