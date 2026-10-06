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
     * Requires the sale item ID and the sale category ID to be specified. For a `product`
     *  sale category, resolves the business that owns the shop product, loads the thumbnail
     *  image list for that product, and converts each image variant into its array
     *  representation. For sale categories that do not represent a shop product, returns an
     *  empty image list.
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
