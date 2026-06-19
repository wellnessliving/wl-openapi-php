<?php
namespace WlSdk\Thoth\WlPay\Bank\Card;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user's bank cards.
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
     * Retrieves information about user's bank cards.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Thoth/WlPay/Bank/Card/List.json', $request->params(), 'GET'));
    }
}
