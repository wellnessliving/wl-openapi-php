<?php

namespace WlSdk\Wl\Session;

use WlSdk\WlSdkClient;

/**
 * Encodes URL such that it can be used for redirect.
 */
class RedirectUrl
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Encodes URL such that it can be used for redirect.
     *
     * @return RedirectUrlGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RedirectUrlGetRequest $request): RedirectUrlGetResponse
    {
        return new RedirectUrlGetResponse($this->client->request('/Wl/Session/RedirectUrl.json', $request->params(), 'GET'));
    }
}
