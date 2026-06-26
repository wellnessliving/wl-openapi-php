<?php

namespace WlSdk\Wl\Business\Type\ImageMarkup;

use WlSdk\WlSdkClient;

/**
 * Returns the default image markup for the given business.
 */
class ImageMarkup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the default image markup for the given business.
     *
     * @return ImageMarkupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ImageMarkupGetRequest $request): ImageMarkupGetResponse
    {
        return new ImageMarkupGetResponse($this->client->request('/Wl/Business/Type/ImageMarkup/ImageMarkup.json', $request->params(), 'GET'));
    }
}
