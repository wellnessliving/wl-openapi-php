<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

use WlSdk\WlSdkClient;

/**
 * Returns progress picture data.
 */
class ImageGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress picture data.
     *
     * Loads the progress picture for the specified user and date, returning image storage data, thumbnail
     * dimensions, the upload URL, and a direct link to the image.
     *
     * @return ImageGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ImageGetRequest $request): ImageGetResponse
    {
        return new ImageGetResponse($this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $request->params(), 'GET'));
    }
}
