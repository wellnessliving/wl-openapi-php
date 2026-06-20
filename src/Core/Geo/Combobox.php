<?php

namespace WlSdk\Core\Geo;

use WlSdk\WlSdkClient;

/**
 * Returns a list of cities to show in combobox list.
 */
class Combobox
{
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
     * @return ComboboxGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ComboboxGetRequest $request): ComboboxGetResponse
    {
        return new ComboboxGetResponse($this->client->request('/Core/Geo/Combobox.json', $request->params(), 'GET'));
    }
}
