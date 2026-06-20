<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

use WlSdk\WlSdkClient;

/**
 * Returns progress picture data.
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
