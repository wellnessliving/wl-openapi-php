<?php

namespace WlSdk\Wl\Promotion\Convert;

use WlSdk\WlSdkClient;

/**
 * Returns list of promotions that can be used to pay for the service.
 */
class Convert
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of promotions that can be used to pay for the service.
     *
     * @return ConvertGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConvertGetRequest $request): ConvertGetResponse
    {
        return new ConvertGetResponse($this->client->request('/Wl/Promotion/Convert/Convert.json', $request->params(), 'GET'));
    }
}
