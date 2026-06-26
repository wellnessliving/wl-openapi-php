<?php

namespace WlSdk\Wl\Franchise\Fee;

use WlSdk\WlSdkClient;

/**
 * Returns information about the franchise fee.
 */
class FeeElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about the franchise fee.
     *
     * @return FeeElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FeeElementGetRequest $request): FeeElementGetResponse
    {
        return new FeeElementGetResponse($this->client->request('/Wl/Franchise/Fee/FeeElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates/updates franchise fee.
     *
     * @return FeeElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FeeElementPostRequest $request): FeeElementPostResponse
    {
        return new FeeElementPostResponse($this->client->request('/Wl/Franchise/Fee/FeeElement.json', $request->params(), 'POST'));
    }

    /**
     * Deletes franchise fee.
     *
     * @return FeeElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(FeeElementDeleteRequest $request): FeeElementDeleteResponse
    {
        return new FeeElementDeleteResponse($this->client->request('/Wl/Franchise/Fee/FeeElement.json', $request->params(), 'DELETE'));
    }
}
