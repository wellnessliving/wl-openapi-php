<?php

namespace WlSdk\Wl\Postcard;

use WlSdk\WlSdkClient;

/**
 * Retrieves status of the address validation.
 */
class PostcardAddress
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves status of the address validation.
     *
     * @return PostcardAddressGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PostcardAddressGetRequest $request): PostcardAddressGetResponse
    {
        return new PostcardAddressGetResponse($this->client->request('/Wl/Postcard/PostcardAddress.json', $request->params(), 'GET'));
    }

    /**
     * Performs address validation.
     *
     * @return PostcardAddressPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PostcardAddressPostRequest $request): PostcardAddressPostResponse
    {
        return new PostcardAddressPostResponse($this->client->request('/Wl/Postcard/PostcardAddress.json', $request->params(), 'POST'));
    }
}
