<?php

namespace WlSdk\Core\Drive\ImageUpload;

use WlSdk\WlSdkClient;

/**
 * Returns information about image.
 */
class Variant
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about image.
     *
     * @return VariantGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VariantGetRequest $request): VariantGetResponse
    {
        return new VariantGetResponse($this->client->request('/Core/Drive/ImageUpload/Variant.json', $request->params(), 'GET'));
    }
}
