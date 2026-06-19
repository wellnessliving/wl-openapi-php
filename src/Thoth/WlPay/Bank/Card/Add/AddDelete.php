<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Deletes saved card.
 */
class AddDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes saved card.
     *
     * @return AddDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AddDeleteRequest $request): AddDeleteResponse
    {
        return new AddDeleteResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $request->params(), 'DELETE'));
    }
}
