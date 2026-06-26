<?php

namespace WlSdk\Core\Passport\Login\Enter\Quick;

use WlSdk\WlSdkClient;

/**
 * Generates secret key to verify legitimacy of the request.
 */
class EnterQuick
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates secret key to verify legitimacy of the request.
     *
     * @return EnterQuickGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnterQuickGetRequest $request): EnterQuickGetResponse
    {
        return new EnterQuickGetResponse($this->client->request('/Core/Passport/Login/Enter/Quick/EnterQuick.json', $request->params(), 'GET'));
    }
}
