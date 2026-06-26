<?php

namespace WlSdk\Wl\Login\Search;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Search/SearchSettings.json
 */
class SearchSettings
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Login/Search/SearchSettings.json.
     *
     * @return SearchSettingsGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SearchSettingsGetRequest $request): SearchSettingsGetResponse
    {
        return new SearchSettingsGetResponse($this->client->request('/Wl/Login/Search/SearchSettings.json', $request->params(), 'GET'));
    }

    /**
     * Calls PUT /Wl/Login/Search/SearchSettings.json.
     *
     * @return SearchSettingsPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SearchSettingsPutRequest $request): SearchSettingsPutResponse
    {
        return new SearchSettingsPutResponse($this->client->request('/Wl/Login/Search/SearchSettings.json', $request->params(), 'PUT'));
    }
}
