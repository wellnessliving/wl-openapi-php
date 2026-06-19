<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Gets code of bank card widget.
 *
 * @deprecated
 */
class AddGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets code of bank card widget.
     *
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $request->params(), 'GET'));
    }
}
