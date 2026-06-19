<?php
namespace WlSdk\Thoth\WlPay\Method;

use WlSdk\WlSdkClient;

/**
 * Returns list of active payment methods data.
 */
class ListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of active payment methods data.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Thoth/WlPay/Method/List.json', $request->params(), 'GET'));
    }
}
