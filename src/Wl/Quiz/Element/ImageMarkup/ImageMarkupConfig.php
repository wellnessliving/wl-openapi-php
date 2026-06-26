<?php

namespace WlSdk\Wl\Quiz\Element\ImageMarkup;

use WlSdk\WlSdkClient;

/**
 * Gets stored image markup configuration.
 */
class ImageMarkupConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets stored image markup configuration.
     *
     * @return ImageMarkupConfigGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ImageMarkupConfigGetRequest $request): ImageMarkupConfigGetResponse
    {
        return new ImageMarkupConfigGetResponse($this->client->request('/Wl/Quiz/Element/ImageMarkup/ImageMarkupConfig.json', $request->params(), 'GET'));
    }

    /**
     * Updates stored image markup configuration.
     *
     * @return ImageMarkupConfigPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ImageMarkupConfigPostRequest $request): ImageMarkupConfigPostResponse
    {
        return new ImageMarkupConfigPostResponse($this->client->request('/Wl/Quiz/Element/ImageMarkup/ImageMarkupConfig.json', $request->params(), 'POST'));
    }
}
