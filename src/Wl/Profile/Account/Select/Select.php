<?php

namespace WlSdk\Wl\Profile\Account\Select;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user specified in `uid`
 * and his relationship with sub accounts.
 */
class Select
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user specified in `uid`
and his relationship with sub accounts.
     *
     * @return SelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SelectGetRequest $request): SelectGetResponse
    {
        return new SelectGetResponse($this->client->request('/Wl/Profile/Account/Select/Select.json', $request->params(), 'GET'));
    }

    /**
     * Signs in user specified in `uid_in`.
     *
     * @return SelectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SelectPostRequest $request): SelectPostResponse
    {
        return new SelectPostResponse($this->client->request('/Wl/Profile/Account/Select/Select.json', $request->params(), 'POST'));
    }
}
