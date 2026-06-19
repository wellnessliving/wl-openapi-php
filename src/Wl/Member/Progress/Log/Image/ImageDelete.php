<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

use WlSdk\WlSdkClient;

/**
 * Deletes progress image.
 */
class ImageDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes progress image.
     *
     * Removes the progress picture for the specified user and date from storage and deletes the corresponding
     * progress log record from the database, then logs the change.
     *
     * @return ImageDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ImageDeleteRequest $request): ImageDeleteResponse
    {
        return new ImageDeleteResponse($this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $request->params(), 'DELETE'));
    }
}
