<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Gets code of bank card widget.
 */
class Add
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
     * @deprecated
     *
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $request->params(), 'GET'));
    }

    /**
     * Saves new bank card.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $request->params(), 'POST'));
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
