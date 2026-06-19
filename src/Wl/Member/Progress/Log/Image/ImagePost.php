<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

use WlSdk\WlSdkClient;

/**
 * Saves progress picture.
 */
class ImagePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves progress picture.
     *
     * Applies the image command from `$s_command` to the progress picture for the specified user and date,
     * persists the result in storage, and writes or updates the corresponding progress log record in the database.
     *
     * @return ImagePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ImagePostRequest $request): ImagePostResponse
    {
        return new ImagePostResponse($this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $request->params(), 'POST'));
    }
}
