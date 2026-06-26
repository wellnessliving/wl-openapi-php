<?php

namespace WlSdk\Wl\Business\Edit\Merchant;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Edit/Merchant/Merchant.json
 */
class Merchant
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Edit/Merchant/Merchant.json.
     *
     * @return MerchantGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MerchantGetRequest $request): MerchantGetResponse
    {
        return new MerchantGetResponse($this->client->request('/Wl/Business/Edit/Merchant/Merchant.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Business/Edit/Merchant/Merchant.json.
     *
     * @return MerchantPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MerchantPostRequest $request): MerchantPostResponse
    {
        return new MerchantPostResponse($this->client->request('/Wl/Business/Edit/Merchant/Merchant.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Business/Edit/Merchant/Merchant.json.
     *
     * @return MerchantDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MerchantDeleteRequest $request): MerchantDeleteResponse
    {
        return new MerchantDeleteResponse($this->client->request('/Wl/Business/Edit/Merchant/Merchant.json', $request->params(), 'DELETE'));
    }
}
