<?php
namespace WlSdk\Wl\Member\Progress\Log\Image;

use WlSdk\WlSdkClient;

/**
 * Returns progress picture data.
 */
class ImageApi
{
    /**
     * Local date of the progress picture.
     * 
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     * 
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     * 
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Save image command.
     * 
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_command = null;

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
     * @return ImageApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ImageApiGetResponse
    {
        return new ImageApiGetResponse($this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $this->params(), 'GET'));
    }

    /**
     * Saves progress picture.
     *
     * Applies the image command from `$s_command` to the progress picture for the specified user and date,
     * persists the result in storage, and writes or updates the corresponding progress log record in the database.
     *
     * @return ImageApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ImageApiPostResponse
    {
        return new ImageApiPostResponse($this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $this->params(), 'POST'));
    }

    /**
     * Deletes progress image.
     *
     * Removes the progress picture for the specified user and date from storage and deletes the corresponding
     * progress log record from the database, then logs the change.
     *
     * @return ImageApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): ImageApiDeleteResponse
    {
        return new ImageApiDeleteResponse($this->client->request('/Wl/Member/Progress/Log/Image/Image.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            's_command' => $this->s_command,
            ],
            static fn($v) => $v !== null
        );
    }
}
