<?php

namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * Changes payment schedule according to request.
 */
class PayMethod
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes payment schedule according to request.
     *
     * @return PayMethodGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PayMethodGetRequest $request): PayMethodGetResponse
    {
        return new PayMethodGetResponse($this->client->request('/Wl/Business/Account/PayMethod.json', $request->params(), 'GET'));
    }
}
