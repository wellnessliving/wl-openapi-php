<?php

namespace WlSdk\Wl\Login\Permission\Access;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Permission/Access/Access.json
 */
class Access
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Login/Permission/Access/Access.json.
     *
     * @return AccessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccessGetRequest $request): AccessGetResponse
    {
        return new AccessGetResponse($this->client->request('/Wl/Login/Permission/Access/Access.json', $request->params(), 'GET'));
    }
}
