<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Saves new bank card.
 */
class AddPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
