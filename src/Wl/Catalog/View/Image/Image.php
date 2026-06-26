<?php

namespace WlSdk\Wl\Catalog\View\Image;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about product images.
 */
class Image
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves an information about product images.
     *
     * @return ImageGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ImageGetRequest $request): ImageGetResponse
    {
        return new ImageGetResponse($this->client->request('/Wl/Catalog/View/Image/Image.json', $request->params(), 'GET'));
    }
}
