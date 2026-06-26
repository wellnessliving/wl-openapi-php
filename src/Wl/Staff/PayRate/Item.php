<?php

namespace WlSdk\Wl\Staff\PayRate;

use WlSdk\WlSdkClient;

/**
 * Adds new or edits exists staff pay rate.
 */
class Item
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds new or edits exists staff pay rate.
     *
     * @return ItemPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ItemPostRequest $request): ItemPostResponse
    {
        return new ItemPostResponse($this->client->request('/Wl/Staff/PayRate/Item.json', $request->params(), 'POST'));
    }

    /**
     * Sets the specified pay rate as default for the staff.
     *
     * @return ItemPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ItemPutRequest $request): ItemPutResponse
    {
        return new ItemPutResponse($this->client->request('/Wl/Staff/PayRate/Item.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes staff pay rate.
     *
     * @return ItemDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ItemDeleteRequest $request): ItemDeleteResponse
    {
        return new ItemDeleteResponse($this->client->request('/Wl/Staff/PayRate/Item.json', $request->params(), 'DELETE'));
    }
}
