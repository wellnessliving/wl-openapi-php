<?php

namespace WlSdk\Wl\Login\Search\Filter;

use WlSdk\WlSdkClient;

/**
 * Gives filter settings.
 */
class LoginSearchFilter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gives filter settings.
     *
     * @return LoginSearchFilterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginSearchFilterGetRequest $request): LoginSearchFilterGetResponse
    {
        return new LoginSearchFilterGetResponse($this->client->request('/Wl/Login/Search/Filter/LoginSearchFilter.json', $request->params(), 'GET'));
    }
}
