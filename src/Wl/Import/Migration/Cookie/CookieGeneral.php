<?php

namespace WlSdk\Wl\Import\Migration\Cookie;

use WlSdk\WlSdkClient;

/**
 * Returns cookies from an authorized user with Mindbody.
 */
class CookieGeneral
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns cookies from an authorized user with Mindbody.
     *
     * @return CookieGeneralGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CookieGeneralGetRequest $request): CookieGeneralGetResponse
    {
        return new CookieGeneralGetResponse($this->client->request('/Wl/Import/Migration/Cookie/CookieGeneral.json', $request->params(), 'GET'));
    }
}
