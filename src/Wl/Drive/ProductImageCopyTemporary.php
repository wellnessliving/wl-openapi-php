<?php

namespace WlSdk\Wl\Drive;

use WlSdk\WlSdkClient;

/**
 * Makes a temporary copy of the specified image.
 */
class ProductImageCopyTemporary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Makes a temporary copy of the specified image.
     *
     * @return ProductImageCopyTemporaryPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProductImageCopyTemporaryPostRequest $request): ProductImageCopyTemporaryPostResponse
    {
        return new ProductImageCopyTemporaryPostResponse($this->client->request('/Wl/Drive/ProductImageCopyTemporary.json', $request->params(), 'POST'));
    }
}
